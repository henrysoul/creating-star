@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Edit Contestant</h4>
                </div>
                @include('partials.alerts')
                <form method="POST" action="{{url('update_contestant')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="login-form mb-3">

                        <img class="mb-5"
                            src="{{asset('storage/images/child/'.$contestant->contest->uuid.'/'.$contestant->photo)}}"
                            alt="contestant image" style="width:433px !important;height:243px !important">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                                <label for="exampleInputUsername" class="form-label">Contestant's name</label>
                                <input type="Text" class="form-control" name="child_name"
                                    value="{{old('child_name') ? old('child_name') : $contestant->name}}" required>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                                <label for="exampleInputEmail" class="form-label">Contestant's age</label>
                                <select class="form-control" required name="age">
                                    <option value="">--Select--</option>
                                    <option value="0 month" {{$contestant->age=="0 month" ? "selected" :""}}>0 month
                                    </option>
                                    <option value="1 month" {{$contestant->age=="1 month" ? "selected" :""}}>1 month
                                    </option>
                                    <option value="2 months" {{$contestant->age=="2 months" ? "selected" :""}}>2 months
                                    </option>
                                    <option value="3 months" {{$contestant->age=="3 months" ? "selected" :""}}>3 months
                                    </option>
                                    <option value="4 months" {{$contestant->age=="4 months" ? "selected" :""}}>4 months
                                    </option>
                                    <option value="5 months" {{$contestant->age=="5 months" ? "selected" :""}}>5 months
                                    </option>
                                    <option value="6 months" {{$contestant->age=="6 months" ? "selected" :""}}>6 months
                                    </option>
                                    <option value="7 months" {{$contestant->age=="7 months" ? "selected" :""}}>7 months
                                    </option>
                                    <option value="8 months" {{$contestant->age=="8 months" ? "selected" :""}}>8 months
                                    </option>
                                    <option value="9 months" {{$contestant->age=="9 months" ? "selected" :""}}>9 months
                                    </option>
                                    <option value="10 months" {{$contestant->age=="10 months" ? "selected" :""}}>10
                                        months</option>
                                    <option value="11 months" {{$contestant->age=="11 months" ? "selected" :""}}>11
                                        months</option>
                                    <option value="1 year" {{$contestant->age=="1 year" ? "selected" :""}}>1 year
                                    </option>
                                    <option value="2 years" {{$contestant->age=="2 years" ? "selected" :""}}>2 years
                                    </option>
                                    <option value="3 years" {{$contestant->age=="3 years" ? "selected" :""}}>3 years
                                    </option>
                                    <option value="4 years" {{$contestant->age=="4 years" ? "selected" :""}}>4 years
                                    </option>
                                    <option value="5 years" {{$contestant->age=="5 years" ? "selected" :""}}>5 years
                                    </option>
                                    <option value="6 years" {{$contestant->age=="6 years" ? "selected" :""}}>6 years
                                    </option>
                                    <option value="7 years" {{$contestant->age=="7 years" ? "selected" :""}}>7 years
                                    </option>
                                    <option value="8 years" {{$contestant->age=="8 years" ? "selected" :""}}>8 years
                                    </option>
                                    <option value="9 years" {{$contestant->age=="9 years" ? "selected" :""}}>9 years
                                    </option>
                                    <option value="10 years" {{$contestant->age=="10 years" ? "selected" :""}}>10 years
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                                <label for="exampleInputEmail" class="form-label">Contestant's gender</label>
                                <select class="form-control bg-light " required name="gender">
                                    <option value="">--select gender--</option>
                                    <option value="Male" {{(old('gender')=="Male" ? 'selected' :$contestant->
                                        gender=="Male") ?'selected':''}}>Male</option>
                                    <option value="Female" {{(old('gender')=="Female" ? 'selected' :$contestant->
                                        gender=="Female") ?'selected':''}}>Female</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                                <label for="exampleInputEmail" class="form-label">Upload contestant's photo</label>
                                <input type="file" class="form-control" name="photo" value="{{old('photo')}}">
                            </div>
                        </div>
                        {{-- <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                                <label for="exampleInputEmail" class="form-label">Parent name</label>
                                <input type="text" class="form-control" required name="parent_name"
                                    value="{{old('parent_name') ? old('parent_name') : $contestant->parent_name}}">
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                                <label for="exampleInputEmail" class="form-label">Phone</label>
                                <input type="number" class="form-control"
                                    value="{{old('phone')?old('phone'):$contestant->phone}}" required name="phone">
                            </div>
                        </div> --}}
                        {{-- <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                                <label for="exampleInputEmail" class="form-label">Email</label>
                                <input type="email" class="form-control"
                                    value="{{old('email')?old('email'):$contestant->email}}" required name="email">
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                                <label for="exampleInputPassword" class="form-label">Address</label>
                                <textarea type="text" class="form-control" required
                                    name="address">{{old('address')?old('address'):$contestant->address}}</textarea>
                            </div>
                        </div> --}}
                        <div class="row">
                            {{-- <div class="col-lg-3 col-md-12 col-sm-12 col-12 mb-3">
                                <label for="exampleInputEmail" class="form-label">Add stage1 vote</label>
                                <input type="number" class="form-control" value="{{old('stage1_vote')}}"
                                    name="stage1_vote">
                            </div>
                            <div class="col-lg-3 col-md-12 col-sm-12 col-12 mb-3">
                                <label for="exampleInputEmail" class="form-label">Add stage2 vote</label>
                                <input type="number" class="form-control" value="{{old('stage2_vote')}}"
                                    name="stage2_vote">
                            </div>
                            <div class="col-lg-3 col-md-12 col-sm-12 col-12 mb-3"><label for="exampleInputEmail"
                                    class="form-label">Add stage3 vote</label>
                                <input type="number" class="form-control" value="{{old('stage3_vote')}}"
                                    name="stage3_vote">
                            </div> --}}
                            <div class="col-lg-3 col-md-12 col-sm-12 col-12 mb-3">
                                <div class="form-group">
                                    <input type="checkbox" id="open" class="" name="active"
                                        {{$contestant->active ==1 ?'checked':""}} value="1" ><label for="open"
                                        class="form-label mr-3">Active
                                    </label>

                                </div>
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