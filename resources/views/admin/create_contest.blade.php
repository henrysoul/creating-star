@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Create Contest</h4>
                </div>
                @include('partials.alerts')
                <form method="POST" action="{{url('create_contest')}}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for=""> Name</label>
                                <input class="form-control" placeholder="" required name='name' type="text"
                                    value="{{ old('name') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Stage1 minimum vote</label>
                                <input class="form-control" name='stage1_minimum_vote' required type="number"
                                    value="{{ old('stage1_minimum_vote') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for=""> Stage1 start date</label>
                                <input class="form-control" placeholder="" required name='stage1_start_date' type="date"
                                    value="{{ old('stage1_start_date') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Stage1 end date</label>
                                <input class="form-control" name='stage1_end_date' required type="date"
                                    value="{{ old('stage1_end_date') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Stage2 minimum vote</label>
                                <input class="form-control" name='stage2_minimum_vote' required type="number"
                                    value="{{ old('stage2_minimum_vote') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for=""> Stage2 start date</label>
                                <input class="form-control" placeholder="" required name='stage2_start_date' type="date"
                                    value="{{ old('stage2_start_date') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Stage2 end date</label>
                                <input class="form-control" name='stage2_end_date' required type="date"
                                    value="{{ old('stage2_end_date') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for=""> Stage3 start date</label>
                                <input class="form-control" placeholder="" required name='stage3_start_date' type="date"
                                    value="{{ old('stage3_start_date') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Stage3 end date</label>
                                <input class="form-control" name='stage3_end_date' required type="date"
                                    value="{{ old('stage3_end_date') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for=""> Registration start date</label>
                                <input class="form-control" placeholder="" required name='registration_start_date' type="date"
                                    value="{{ old('registration_start_date') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Registration end date</label>
                                <input class="form-control" name='registration_end_date' required type="date"
                                    value="{{ old('registration_end_date') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Cost per vote</label>
                                <input class="form-control" name='cost_per_vote' required type="number"
                                    value="{{ old('cost_per_vote') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                    <label for="yes" class="form-label mr-3">Can register? </label>
                                    <input type="radio" id="yes"  class="" required name="can_register"  value="1" >
                                    <label for="yes" class="form-label">Yes </label>
                                    <input type="radio" id="no"  class="" required name="can_register" value="0">
                                    <label for="no" class="form-label">No </label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection