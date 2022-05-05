@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Contestants</h4>
                </div>
                @include('partials.alerts')
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="border-0">
                                <th class="border-0 font-14 font-weight-medium text-muted">Name
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">RegNumber
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Age
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Gender
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">ParentName
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Address
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Phone
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Email
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Stage1 votes
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Stage2 votes
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Stage3 votes
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Stage1 extra votes
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted"> status
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contests->contestants as $contestants)
                            <tr>
                                <td>{{$contestants->name}}</td>
                                <td>{{number_format($contestants->reg_number)}}</td>
                                <td>{{$contestants->age .' '.$contestants->less_than_a_year}}</td>
                                <td>{{$contestants->gender}}</td>
                                <td>{{$contestants->parent_name}}</td>
                                <td>{{$contestants->address}}</td>
                                <td>{{$contestants->phone}}</td>
                                <td>{{$contestants->email}}</td>
                                <td>{{$contestants->stage1_votes}}</td>
                                <td>{{$contestants->stage2_votes}}</td>
                                <td>{{$contestants->stage3_votes}}</td>
                                <td>{{$contestants->stage1_extra_votes}}</td>
                                <td>{{$contestants->active ===1 ? 'Active':'Inactive'}}</td>
                                <td class="border-top-0 text-muted px-2 py-4 font-14">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu dropup" style="">
                                            <a class="dropdown-item"
                                                href="{{url('edit_contestant',[$contestants->uuid])}}">Edit contestant</a>
                                            {{-- <a class="dropdown-item"
                                                href="{{url('create_contestant',[$contest->uuid])}}">Create
                                                Contestant</a> --}}
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