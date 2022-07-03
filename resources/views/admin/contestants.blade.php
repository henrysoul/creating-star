@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-12">
        <form method="post" action="{{url('admin_search_contestant')}}">
            @csrf
            <center class="m-auto text-white">Search contestant</center>
            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-3 col-12 mb-3">
                    {{-- <input type="text" name="contestant_id" class="form-control" placeholder="Contestant Id" />
                    --}}
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-12 mb-3">
                    <input type="text" name="contestant_id" class="form-control" required
                        placeholder="Enter Contestant Id" />
                    <input type="hidden" name="uuid" value={{$uuid}} />
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Contestants</h4>
                </div>
                {{-- <a class="btn btn-primary pull-left" href="{{ url('create_contestant') }}">Add new
                    contestant</a> --}}
                @include('partials.alerts')
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="border-0">
                                <th class="border-0 font-14 font-weight-medium text-muted">Name
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">ContestNumber
                                </th>
                                {{-- <th class="border-0 font-14 font-weight-medium text-muted">Age
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Gender
                                </th> --}}
                                {{-- <th class="border-0 font-14 font-weight-medium text-muted">ParentName
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Address
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Phone
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Email --}}
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Stage1 votes
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Stage2 votes
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Stage3 votes
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Stage1 extra votes
                                </th>
                                {{-- <th class="border-0 font-14 font-weight-medium text-muted"> status
                                </th> --}}
                                <th class="border-0 font-14 font-weight-medium text-muted">Addvote</th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contests->contestants as $contestants)
                            <tr>
                                <td>{{$contestants->name}}</td>
                                <td>{{$contestants->reg_number_copy}}</td>
                                {{-- <td>{{$contestants->age }}</td>
                                <td>{{$contestants->gender}}</td> --}}
                                {{-- <td>{{$contestants->parent_name}}</td>
                                <td>{{$contestants->address}}</td>
                                <td>{{$contestants->phone}}</td>
                                <td>{{$contestants->email}}</td> --}}
                                <td>{{$contestants->stage1_votes}}</td>
                                <td>{{$contestants->stage2_votes}}</td>
                                <td>{{$contestants->stage3_votes}}</td>
                                <td>{{$contestants->stage1_extra_votes}}</td>
                                {{-- <td>{{$contestants->active ===1 ? 'Active':'Inactive'}}</td> --}}
                                <td><a class="btn btn-primary text-white" data-toggle="modal"
                                        data-target="#voteModal{{$contestants->uuid}}">Add vote</a></td>
                                <td class="border-top-0 text-muted px-2 py-4 font-14">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu dropup" style="">
                                            <a class="dropdown-item"
                                                href="{{url('edit_contestant',[$contestants->uuid])}}">Edit
                                                contestant</a>
                                            {{-- <a class="dropdown-item"
                                                href="{{url('pix_download',[$contestants->uuid])}}">Download
                                                picture</a> --}}
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="voteModal{{$contestants->uuid}}" style="z-index:3000000"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Vote for
                                                {{$contestants->name}} Contest no:
                                                {{$contestants->reg_number_copy}} </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="{{url('add_vote')}}">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label class="text-dark">Vote</label>
                                                    <input class="form-control" type="number" required
                                                        style="border:1px solid black !important" placeholder="vote"
                                                        name="vote" />
                                                    <input type="hidden" name="uuid" value="{{$contestants->uuid}}" />
                                                    <input type="hidden" name="contest_uuid"
                                                        value="{{$contests->uuid}}" />
                                                </div><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary pay">add</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection