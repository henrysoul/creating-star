@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Edit Contest</h4>
                </div>
                @include('partials.alerts')
                <form method="POST" action="{{url('update_contest')}}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for=""> Name</label>
                                <input class="form-control" placeholder="" required name='name' type="text"
                                    value="{{ old('name') ? old('name') : $contest->name }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Stage1 minimum vote</label>
                                <input class="form-control" name='stage1_minimum_vote' required type="number"
                                    value="{{ old('stage1_minimum_vote') ? old('stage1_minimum_vote') : $contest->stage1_minimum_vote }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for=""> Stage1 start date</label>
                                <input class="form-control" placeholder="" required name='stage1_start_date' type="date"
                                    value="{{ old('stage1_start_date') ? old('stage1_start_date') :$contest->stage1_start_date }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Stage1 end date</label>
                                <input class="form-control" name='stage1_end_date' required type="date"
                                    value="{{ old('stage1_end_date') ? old('stage1_end_date') : $contest->stage1_end_date }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Stage2 minimum vote</label>
                                <input class="form-control" name='stage2_minimum_vote' required type="number"
                                    value="{{ old('stage2_minimum_vote') ? old('stage2_minimum_vote') : $contest->stage2_minimum_vote }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for=""> Stage2 start date</label>
                                <input class="form-control" placeholder="" required name='stage2_start_date' type="date"
                                    value="{{ old('stage2_start_date') ? old('stage2_start_date') : $contest->stage2_start_date }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Stage2 end date</label>
                                <input class="form-control" name='stage2_end_date' required type="date"
                                    value="{{ old('stage2_end_date')?old('stage2_end_date'):$contest->stage2_end_date }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for=""> Stage3 start date</label>
                                <input class="form-control" placeholder="" required name='stage3_start_date' type="date"
                                    value="{{ old('stage3_start_date')?old('stage3_start_date'):$contest->stage3_start_date }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Stage3 end date</label>
                                <input class="form-control" name='stage3_end_date' required type="date"
                                    value="{{ old('stage3_end_date')?old('stage3_end_date') : $contest->stage3_end_date }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for=""> Registration start date</label>
                                <input class="form-control" placeholder="" required name='registration_start_date'
                                    type="date"
                                    value="{{ old('registration_start_date') ? old('registration_start_date') : $contest->registration_start_date }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Registration end date</label>
                                <input class="form-control" name='registration_end_date' required type="date"
                                    value="{{ old('registration_end_date') ?old('registration_end_date') : $contest->registration_end_date }}">
                            </div>
                        </div>
                        {{-- <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Cost per vote</label>
                                <input class="form-control" name='cost_per_vote' required type="number"
                                    value="{{ old('cost_per_vote')?old('cost_per_vote'): $contest->cost_per_vote }}">
                            </div>
                        </div> --}}
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="yes" class="form-label mr-3">Can register? </label>
                                <input type="radio" id="yes" class="" required name="can_register"
                                    {{$contest->can_register ==1?'checked':""}} value="1" >
                                <label for="yes" class="form-label">Yes </label>
                                <input type="radio" id="no" class="" required name="can_register"
                                    {{$contest->can_register ==0?'checked':""}} value="0">
                                <label for="no" class="form-label">No </label>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="open" class="form-label mr-3">Contest open status </label>
                                <input type="checkbox" id="open" class="" name="opened" {{$contest->opened
                                ==1?'checked':""}} value="1" >

                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="canvote" class="form-label mr-3">Can vote </label>
                                <input type="checkbox" id="canvote" class="" name="canvote" {{$contest->canvote
                                ==1?'checked':""}} value="1" >

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="open" class="form-label mr-3">Active stage </label>
                                <select name="active_stage" class="form-control">
                                    <option value="1" {{$contest->active_stage ==1? 'selected':''}}>Stage 1</option>
                                    <option value="2" {{$contest->active_stage ==2? 'selected':''}}>Stage 2</option>
                                    <option value="3" {{$contest->active_stage ==3? 'selected':''}}>Stage 3</option>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="uuid" value="{{$contest->uuid}}">

                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection