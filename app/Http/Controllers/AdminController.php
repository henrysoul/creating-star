<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contest;
use Illuminate\Support\Str;
use App\Models\Child;
use Illuminate\validation\Rule;


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


        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $generated_name = uniqid() . '.' . $photo->extension();
            $photo->storeAs('public/images/child', $generated_name);
        }

        Child::create([
            'uuid' => Str::uuid(),
            'reg_number' => $reg_number,
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

        // send mail prefer to queue the mail
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
}
