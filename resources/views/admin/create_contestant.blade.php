@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Create Contestant</h4>
                </div>
                @include('partials.alerts')
                <form method="POST" action="{{url('do_create_contestant')}}" enctype="multipart/form-data">
                    @csrf
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
                                    <option value="0 month">0 month</option>
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
                                <input type="number" class="form-control" value="{{old('phone')}}" required
                                    name="phone">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                                <label for="exampleInputEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" value="{{old('email')}}" required name="email">
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                                <label for="exampleInputPassword" class="form-label">Address</label>
                                <textarea type="text" class="form-control" required
                                    name="address">{{old('address')}}</textarea>
                            </div>
                        </div>

                        <input type="hidden" name="uuid" value={{$uuid}}>
                        <button class="btn btn-primary" type="submit">Submit</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection