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
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                                <label for="exampleInputUsername" class="form-label">Contestant's name</label>
                                <input type="Text" class="form-control" name="child_name"
                                    value="{{old('child_name') ? old('child_name') : $contestant->name}}" required>
                            </div>
                            <div class="col-lg-3 col-md-12 col-sm-12 col-12 mb-3">
                                <label for="exampleInputEmail" class="form-label">Contestant's age</label>
                                <input type="number" class="form-control" required name="age"
                                    value={{old('age')?old('age'):$contestant->age}}>
                            </div>
                            <div class="col-lg-3 col-md-12 col-sm-12 col-12 mb-3">
                                <label for="yes" class="form-label mr-3">Is the contestant's age less than a year ?
                                </label>
                                <input type="radio" id="yes" class="" required name="less_than_a_year"
                                    value="Months old" {{$contestant->less_than_a_year ==="Months old" ?'checked':''}} >
                                <label for="yes" class="form-label">Yes </label>
                                <input type="radio" id="no" class="" required name="less_than_a_year" value="Years old"
                                    {{$contestant->less_than_a_year ==="Years old" ?'checked':''}}>
                                <label for="no" class="form-label">No </label>
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
                        <div class="row">
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
                        </div>
                        <div class="row">
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
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-12 col-sm-12 col-12 mb-3">
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
                            </div>
                            <div class="col-lg-3 col-md-12 col-sm-12 col-12 mb-3">
                                <div class="form-group">
                                    <input type="checkbox" id="open" class="" name="opened" {{$contestant->active
                                    ===1?'checked':""}} value="1" ><label for="open" class="form-label mr-3">Active </label>

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