@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Contests</h4>
                </div>
                <a class="btn btn-primary pull-left" href="{{url('create_contest')}}">Add new
                    contest</a>
                @include('partials.alerts')
                <div class="table-responsive">
                    <table class="table  ">
                        <thead>
                            <tr class="border-0">
                                <th class="border-0 font-14 font-weight-medium text-muted">Name
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Stage 1 minmum vote
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Stage 2 minmum vote
                                </th>
                                {{-- <th class="border-0 font-14 font-weight-medium text-muted">Stage 1 start date
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Stage 1 end date
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Stage 2 start date
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Stage 2 end date
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Stage 3 start date
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Stage 3 end date
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Registration start date
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Registration end date
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Cost per vote
                                </th> --}}
                                <th class="border-0 font-14 font-weight-medium text-muted">Active stage
                                </th>
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Contest status
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Registration status
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contests as $contest)
                            <tr>
                                <td>{{$contest->name}}</td>
                                <td>{{$contest->stage1_minimum_vote}}</td>
                                <td>{{$contest->stage2_minimum_vote}}</td>
                                {{-- <td>{{$contest->stage1_start_date}}</td>
                                <td>{{$contest->stage1_end_date}}</td>
                                <td>{{$contest->stage2_start_date}}</td>
                                <td>{{$contest->stage2_end_date}}</td>
                                <td>{{$contest->stage3_start_date}}</td>
                                <td>{{$contest->stage3_end_date}}</td>
                                <td>{{$contest->registration_start_date}}</td>
                                <td>{{$contest->registration_end_date}}</td>
                                <td>{{$contest->cost_per_vote}}</td> --}}
                                <td>{{$contest->active_stage}}</td>
                                <td>{{$contest->opened === 1 ? 'Opened':'Closed'}}</td>
                                <td>{{$contest->can_register === 1 ? 'Can register':'Cannot register'}}</td>
                                <td class="border-top-0 text-muted px-2 py-4 font-14">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu dropup" style="">
                                            <a class="dropdown-item" href="{{url('edit_contest',[$contest->uuid])}}">Edit contest</a>
                                            <a class="dropdown-item" onClick="return confirm('Are you sure you want to end stage {{$contest->active_stage}}?. You cannot undo this action')" href="{{url('close_current_stage',[$contest->uuid])}}">Close current stage</a>
                                            <a class="dropdown-item" href="{{url('contestants',[$contest->uuid])}}">Contestants</a>
                                            <a class="dropdown-item" href="{{url('create_contestant',[$contest->uuid])}}">Create Contestant</a>
                                            <a class="dropdown-item" href="{{url('download_records',[$contest->uuid])}}">Download Contestant</a>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection