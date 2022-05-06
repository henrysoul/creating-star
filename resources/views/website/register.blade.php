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


<div class="login ptb-100">
    @if($can_register)
    <div class="container">
        <form method="POST" action="{{url('register')}}" enctype="multipart/form-data">
            @csrf
            @include('partials.alerts')
            <div class="login-form mb-3">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                        <label for="exampleInputUsername" class="form-label">Contestant's name</label>
                        <input type="Text" class="form-control" name="child_name" value="{{old('child_name')}}"
                            required>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 col-12 mb-3">
                        <label for="exampleInputEmail" class="form-label">Contestant's age</label>
                        <input type="number" class="form-control" required name="age" value={{old('age')}}>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 col-12 mb-3">
                        <label for="yes" class="form-label mr-3">Is the contestant's age less than a year ? </label>
                        <input type="radio" id="yes"  class="" required name="less_than_a_year"  value="Months old" >
                        <label for="yes" class="form-label">Yes </label>
                        <input type="radio" id="no"  class="" required name="less_than_a_year" value="Years old">
                        <label for="no" class="form-label">No </label>
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
                    <label>Terms and Conditions</label>
                    <label for="terms"><input id="terms" name="agree" type="checkbox" required> Click here to agree to our <a target="_blank" href="{{url('terms_conditions')}}"><span class="text-primary">terms and conditions</span></a> to proceed</label>
                </div>

                <button type="submit" class="default-button default-button-3 "><span>Submit</span></button>

            </div>
        </form>
    </div>
    @endif
</div>

@endsection