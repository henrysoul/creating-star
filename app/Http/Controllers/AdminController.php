<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contest;
use App\Models\Payment;
use Illuminate\Support\Str;
use App\Models\Child;
use App\Models\Countdown;
use Illuminate\Validation\Rule;
use App\Exports\ChildrenExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Notification;
use App\Notifications\CreatingStarConceptsRegistrationNotification;
use ZipArchive;
use File;


class AdminController extends Controller
{
    public function contests()
    {
        $contests = Contest::orderby('id', 'DESC')->get();
        return view('admin.contests', compact('contests'));
    }

    public function create_contest()
    {
        return view('admin.create_contest');
    }

    public function save_contest(Request $request)
    {
        $request['uuid'] = Str::uuid();
        Contest::create($request->all());
        return back()->with("success", "Contest creted successfully");
    }

    public function contestants($uuid)
    {
        $contests = Contest::where('uuid', $uuid)->with('contestants')->first();
        return view('admin.contestants', compact('contests', 'uuid'));
    }

    public function admin_search_contestant(Request $request)
    {
         $contest = Contest::orderby('id',"DESC")->first();
         
        $contests = Contest::where(['uuid'=> $request->uuid,'id'=>$contest->id])
            ->with(['contestants' => function ($q) use ($request) {
                return $q->where('reg_number_copy', $request->contestant_id);
            }])->first();
        $uuid = $request->uuid;
        return view('admin.contestants', compact('contests', 'uuid'));
    }

    public function add_vote(Request $request)
    {
        $contest = Contest::where('uuid', $request->contest_uuid)->first();
        $current = $contest->active_stage;
        $child = Child::where('uuid', $request->uuid)->first();
        $votes = $request->vote;

        if ($current == 1) {
            $child->update(['stage1_votes' => intval($child->stage1_votes) + intval($votes)]);
        } else if ($current == 2) {
            $child->update(['stage2_votes' => intval($child->stage2_votes) + intval($votes)]);
        } elseif ($current == 3) {
            $child->update(['stage3_votes' => intval($child->stage3_votes) + intval($votes)]);
        }
        return redirect('contestants/' . $request->contest_uuid)->with("success", "Voted added successfully");
    }

    public function pix_download($uuid)
    {
        $filename = Child::where('uuid', $uuid)->first()->photo;
        $path = storage_path("app/public/images/child/" . $filename);
        return response()->download($path);
    }

    public function create_contestant($uuid)
    {
        return view('admin.create_contestant', compact('uuid'));
    }

    public function do_create_contestant(Request $request)
    {
        $uuid = $request->uuid;
        $contest = Contest::where('uuid', $uuid)->first();
        if ($contest->can_register === 0) {
            return back()->with("error", "This contest is closed");
        }

        $this->validate($request, [
            'child_name' => ['required', 'min:6'],
            'age' => ['required'],
            'gender' => ['required'],
            'photo' => ['required', 'mimes:jpg,jpeg,png,jfif'],
            'parent_name' => ['required'],
            'phone' => ['required', Rule::unique('children')->where('contest_id', $contest->id)],
            'email' => ['email:rfc,dns', 'required', Rule::unique('children')->where('contest_id', $contest->id)],
            'address' => ['required', 'min:10'],
        ], [
            'phone.unique' => 'Phone number is taken for this contest', 'email.unique' => 'Email is already used for this contest'
        ]);


        $check = Child::where('contest_id', $contest->id)->latest('id')->first();
        $reg_number = 1;

        if ($check) {
            $reg_number =  $check->reg_number + 1;
        }


        if (strlen($reg_number) == 1) {
            $reg_copy = '00' . strval($reg_number);
        } elseif (strlen($reg_number) == 2) {
            $reg_copy = '0' . strval($reg_number);
        } else {
            $reg_copy = strval($reg_number);
        }


        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $generated_name = $reg_copy . '.' . $photo->extension();
            $photo->storeAs('public/images/child/' . $contest->uuid, $generated_name);
        }

        Child::create([
            'uuid' => Str::uuid(),
            'reg_number' => $reg_number,
            'reg_number_copy' => $reg_copy,
            'contest_id' => $contest->id,
            'age' => $request->age,
            'gender' => $request->gender,
            'parent_name' => $request->parent_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'name' => $request->child_name,
            'photo' => $generated_name,
            'less_than_a_year' => $request->less_than_a_year
        ]);

        Notification::route('mail', $request->email)
            ->notify(new CreatingStarConceptsRegistrationNotification($reg_copy));
        return back()->with('success', 'Contestant created successfully');
    }

    public function edit_contest($uuid)
    {
        $contest = Contest::where('uuid', $uuid)->first();
        return view('admin.edit_contest', compact('contest'));
    }

    public function update_contest(Request $request)
    {
        if (!$request->opened) {
            $request['opened'] = 0;
        }
        
        if(!$request->canvote){
            $request['canvote']=0;
        }

        Contest::where('uuid', $request->uuid)->update($request->except('_token'));
        return back()->with("success", "Contest updated successfully");
    }

    public function edit_contestant($uuid)
    {
        $contestant = Child::where('uuid', $uuid)->first();
        return view('admin.edit_contestant', compact('contestant', 'uuid'));
    }

    public function update_contestant(Request $request)
    {

        $child = Child::where('uuid', $request->uuid)->first();
        $generated_name = $child->photo;

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $generated_name = $child->reg_number_copy . '.' . $photo->extension();
            $photo->storeAs('public/images/child/' . $child->contest->uuid, $generated_name);
        }

        // $stage1_vote = $child->stage1_votes;
        // $stage2_vote = $child->stage2_votes;
        // $stage3_vote = $child->stage3_votes;

        // if ($request->stage1_vote) {
        //     $stage1_vote = $stage1_vote + intval($request->stage1_vote);
        // }
        // if ($request->stage2_vote) {
        //     $stage1_vote = $stage2_vote + intval($request->stage2_vote);
        // }
        // if ($request->stage3_vote) {
        //     $stage1_vote = $stage3_vote + intval($request->stage3_vote);
        // }

        Child::where('uuid', $request->uuid)->update([
            'uuid' => Str::uuid(),
            'age' => $request->age,
            'gender' => $request->gender,
            // 'parent_name' => $request->parent_name,
            // 'phone' => $request->phone,
            // 'email' => $request->email,
            // 'address' => $request->address,
            'name' => $request->child_name,
            'photo' => $generated_name,
            // 'stage1_votes' => $stage1_vote,
            // 'stage2_votes' => $stage2_vote,
            // 'stage3_votes' => $stage3_vote,
            'active' => $request->active ? 1 : 0
        ]);

        return redirect('contests')->with('success', 'Contestant updated successfully');
    }

    public function close_current_stage($uuid)
    {
        $contest = Contest::where('uuid', $uuid)->first();
        $current_stage = $contest->active_stage;
        $children = Child::where(['contest_id' => $contest->id])->get();
        if ($current_stage == 1) {
            foreach ($children as $child) {
                if (intval($child->stage1_votes) > intval($contest->stage1_minimum_vote)) {
                    $stage1_extra = intval($child->stage1_votes) - intval($contest->stage1_minimum_vote);
                    $child->update(['stage1_extra_votes' => $stage1_extra]);
                }

                if (intval($child->stage1_votes) >= intval($contest->stage1_minimum_vote)) {
                    $child->update(['passed_stage1' => 1]);
                }
            }

            $contest->update(['stage1_status' => 1]);
        }

        if ($current_stage == 2) {
            $contest->update(['stage2_status' => 1]);
            foreach ($children as $child) {
                if (intval($child->stage2_votes) > intval($contest->stage2_minimum_vote)) {
                    $stage2_extra_vote =  intval($child->stage2_votes) - intval($contest->stage2_minimum_vote);
                    $extras =  intval($child->stage1_extra_votes) + intval($stage2_extra_vote);
                    $child->update(['stage1_extra_votes' => $extras, 'stage3_votes' => $extras]);
                }

                if (intval($child->stage2_votes) >= intval($contest->stage2_minimum_vote)) {
                    $child->update(['passed_stage2' => 1]);
                }
            }
        }

        if ($current_stage == 3) {
            $contest->update(['stage3_status' => 1]);
        }

        $contest->update(['opened' => 0]);

        return back()->with("success", 'Stage' . $current_stage . ' closed successfully');
    }

    public function download_records($uuid)
    {
        return Excel::download(new ChildrenExport($uuid), 'contestants.xlsx');
    }

    public function payment_success(Request $request)
    {
        Payment::create([
            'contestant_uuid' => $request->uuid,
            'amount' => $request->amount,
            'voter_phone' => $request->phone,
            'api_response' => json_encode($request->response)
        ]);

        $amount = $request->amount;
        $votes = 0;
        if ($amount == 500) {
            $votes = 10;
        } elseif ($amount == 1000) {
            $votes = 20;
        } elseif ($amount == 2500) {
            $votes = 50;
        } elseif ($amount == 5000) {
            $votes = 100;
        } elseif ($amount == 10000) {
            $votes = 200;
        } elseif ($amount == 25000) {
            $votes = 500;
        } elseif ($amount == 50000) {
            $votes = 1000;
        } elseif ($amount == 100000) {
            $votes = 2000;
        }

        $stage = Contest::orderby('id',"DESC")->where('opened',1)->first()->active_stage;
        $child = Child::where('uuid', $request->uuid)->first();

        if ($stage == 1) {
            $child->update(['stage1_votes' => $child->stage1_votes + $votes]);
        } elseif ($stage == 2) {
            $child->update(['stage2_votes' => $child->stage2_votes + $votes]);
        } elseif ($stage == 3) {
            $child->update(['stage3_votes' => $child->stage3_votes + $votes]);
        }

        return response()->json(['status' => true]);
    }

    public function count_down()
    {
        $countdown = Countdown::first();
        // dd((date_format(date_create($countdown->date),"Y-m-d")));
        return view('admin.count_down', compact('countdown'));
    }

    public function save_down(Request $request)
    {
        // dd($request->all());
        $countdown = Countdown::first();
        if ($countdown) {
            $countdown->date = $request->date;
            $countdown->show = $request->show ? 1 : 0;
            $countdown->text = $request->text;
            $countdown->save();
        } else {
            Countdown::create(['date' => $request->date, 'show' => $request->show ? 1 : 0, 'text' => $request->text]);
        }
        return back()->with("success", "Countdown updated successfully");
    }

    public function download_all_pix($uuid)
    {
        $zip = new ZipArchive;
        $filename = 'contestants.zip';
        if ($zip->open(storage_path($filename), ZipArchive::CREATE) === TRUE) {
            $files = File::files(storage_path("app/public/images/child/" . $uuid));
            foreach ($files as $val) {
                $relativeNameInZipFile = basename($val);
                $zip->addFile($val, $relativeNameInZipFile);
            }
            $zip->close();
        }
        
        // $path = storage_path("app/public/images/child/" . $filename);
        // return response()->download($path);
       return response()->download(storage_path($filename));
    }
}
