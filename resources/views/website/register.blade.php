@extends('layouts.website')
@section('head')
<style>
    label {
        color: white;
    }
</style>
@endsection
@section('content')
<section class="uni-banner">
    <div class="container">
        <div class="uni-banner-text-area mt-4">
            @if($can_register)
            <h1>Register a child</h1>
            @else
            <h1>Registration closed</h1>
            @endif
        </div>
    </div>
</section>

<style>
    .form-label{
        color:black;
    }
</style>
<div class="login ptb-100" style="background-color:grey">
    
    @if($can_register)
    <div class="container">
        <form method="POST" action="{{url('register_contestant')}}" enctype="multipart/form-data">
            @csrf
            @include('partials.alerts')
            <div class="login-form mb-3">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                        <label for="exampleInputUsername" class="form-label">Contestant's name</label>
                        <input type="Text" class="form-control" name="child_name" value="{{old('child_name')}}"
                            required>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                        <label for="exampleInputEmail" class="form-label">Contestant's age</label>
                        <select class="form-control" required name="age">
                            <option value="">--Select--</option>
                            <option value="less than a month">less than a month</option>
                            <option value="1 month">1 month</option>
                            <option value="2 months">2 months</option>
                            <option value="3 months">3 months</option>
                            <option value="4 months">4 months</option>
                            <option value="5 months">5 months</option>
                            <option value="6 months">6 months</option>
                            <option value="7 months">7 months</option>
                            <option value="8 months">8 months</option>
                            <option value="9 months">9 months</option>
                            <option value="10 months">10 months</option>
                            <option value="11 months">11 months</option>
                            <option value="1 year">1 year</option>
                            <option value="2 years">2 years</option>
                            <option value="3 years">3 years</option>
                            <option value="4 years">4 years</option>
                            <option value="5 years">5 years</option>
                            <option value="6 years">6 years</option>
                            <option value="7 years">7 years</option>
                            <option value="8 years">8 years</option>
                            <option value="9 years">9 years</option>
                            <option value="10 years">10 years</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                        <label for="exampleInputEmail" class="form-label">Contestant's gender</label>
                        <select class="form-control bg-light " required name="gender">
                            <option value="">--select gender--</option>
                            <option value="Male" {{old('gender')=="Male" ? 'selected' :''}}>Male</option>
                            <option value="Female" {{old('gender')=="Female" ? 'selected' :''}}>Female</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                        <label for="exampleInputEmail" class="form-label">Upload contestant's photo</label>
                        <input type="file" class="form-control" required name="photo" value="{{old('photo')}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                        <label for="exampleInputEmail" class="form-label">Parent name</label>
                        <input type="text" class="form-control" required name="parent_name"
                            value="{{old('parent_name')}}">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                        <label for="exampleInputEmail" class="form-label">Phone</label>
                        <input type="number" class="form-control" value="{{old('phone')}}" required name="phone">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                        <label for="exampleInputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" value="{{old('email')}}" required name="email">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                        <label for="exampleInputPassword" class="form-label">Address</label>
                        <textarea type="text" class="form-control" required name="address">{{old('address')}}</textarea>
                    </div>
                </div>

                <div class="row mb-2">
                    <label class="form-label">Terms and Conditions</label>
                    <label class="form-label" for="terms"><input id="terms" name="agree" type="checkbox" required> Click here to agree to
                        our <a target="_blank" href="{{url('terms_conditions')}}"><span class="text-white">terms and
                                conditions</span></a> to proceed</label>
                </div>

                <button type="submit" class="default-button default-button-3 "><span>Submit</span></button>

            </div>
        </form>
    </div>
    @endif
</div>

@endsection