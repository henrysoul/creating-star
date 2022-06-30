<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contest;
use App\Models\Payment;
use Illuminate\Support\Str;
use App\Models\Child;
use App\Models\Countdown;
use Illuminate\validation\Rule;
use App\Exports\ChildrenExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Notification;
use App\Notifications\CreatingStarConceptsRegistrationNotification;


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
        return view('admin.contestants', compact('contests'));
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
            'less_than_a_year' => ['required'],
            'gender' => ['required'],
            'photo' => ['required', 'mimes:jpg,jpeg,png,jfif'],
            'parent_name' => ['required'],
            'phone' => ['required', Rule::unique('children')->where('contest_id', $contest->id)],
            'email' => ['email:rfc', 'required', Rule::unique('children')->where('contest_id', $contest->id)],
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
            $generated_name = uniqid() . '.' . $photo->extension();
            $photo->storeAs('public/images/child', $generated_name);
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
            $generated_name = uniqid() . '.' . $photo->extension();
            $photo->storeAs('public/images/child', $generated_name);
        }

        $stage1_vote = $child->stage1_votes;
        $stage2_vote = $child->stage2_votes;
        $stage3_vote = $child->stage3_votes;

        if ($request->stage1_vote) {
            $stage1_vote = $stage1_vote + intval($request->stage1_vote);
        }
        if ($request->stage2_vote) {
            $stage1_vote = $stage2_vote + intval($request->stage2_vote);
        }
        if ($request->stage3_vote) {
            $stage1_vote = $stage3_vote + intval($request->stage3_vote);
        }

        Child::where('uuid', $request->uuid)->update([
            'uuid' => Str::uuid(),
            'age' => $request->age,
            'gender' => $request->gender,
            'parent_name' => $request->parent_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'name' => $request->child_name,
            'photo' => $generated_name,
            'less_than_a_year' => $request->less_than_a_year,
            'stage1_votes' => $stage1_vote,
            'stage2_votes' => $stage2_vote,
            'stage3_votes' => $stage3_vote,
            'active' => $request->active ? 1 : 0
        ]);

        return redirect('contests')->with('success', 'Contestant updated successfully');
    }

    public function close_current_stage($uuid)
    {
        $contest = Contest::where('uuid', $uuid)->first();
        $current_stage = $contest->active_stage;

        if ($current_stage == 1) {
            $children = Child::where(['contest_id' => $contest->id])->get();
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
            if (intval($child->stage2_votes) >= intval($contest->stage2_minimum_vote)) {
                $child->update(['passed_stage2' => 1]);
            }
        }
        if ($current_stage == 3) {
            $contest->update(['stage3_status' => 1]);
        }

        $contest->update(['opened' => 0]);

        return back()->with("success", 'Stage' . $current_stage . 'closed successfully');
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
        if ($amount == 1000) {
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

        $stage = Contest::where(['opened' => 1])->first()->active_stage;
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
        $countdown = Countdown::first();
        if ($countdown) {
            $countdown->date = $request->date;
            $countdown->show = $request->show ? 1 : 0;
            $countdown->save();
        } else {
            Countdown::create(['date' => $request->date, 'show' => $request->show ? 1 : 0]);
        }
        return back()->with("success", "Countdown updated successfully");
    }
}
