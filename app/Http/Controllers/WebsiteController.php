<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Child;
use App\Models\Contest;
use Illuminate\Support\Str;
use Illuminate\validation\Rule;

class WebsiteController extends Controller
{
    public function register()
    {
        // check RegisteredUserController 

        $contest = Contest::latest('id')->first();
        $can_register = false;
        if ($contest?->can_register) {
            $can_register = true;
        }

        return view('website.register', compact('can_register'));
    }

    public function do_register(Request $request)
    {
        $contest = Contest::latest('id')->first();
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

        return back()->with('success', 'Registration successful. You will receive a mail of your reg number');
    }

    public function child_right()
    {
        return view('website.child_right');
    }

    public function body_part()
    {
        return view('website.body_part');
    }

    public function importance_of_child_right()
    {
        return view('website.importance_of_child_right');
    }

    public function child_trafficking()
    {
        return view('website.child_trafficking');
    }

    public function causes_of_child_trafficking()
    {
        return view('website.causes_of_child_trafficking');
    }

    public function contestants()
    {
        $contest = Contest::latest('id')->where('opened', 1)->first();
        return view('website.contestants', compact('contest'));
    }
}
