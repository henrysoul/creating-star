@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <h4 class="card-title">Users</h4>
                                    </div>
                                    <a class="btn btn-primary pull-left" href="{{url('create_user')}}">Add new user</a>
                                    @include('partials.alerts')
                                    <div class="table-responsive">
                                        <table class="table  ">
                                            <thead>
                                                <tr class="border-0">
                                                    <th class="border-0 font-14 font-weight-medium text-muted">Email
                                                    </th>
                                                    <th class="border-0 font-14 font-weight-medium text-muted px-2">Account
                                                        number
                                                    </th>
                                                    <th class="border-0 font-14 font-weight-medium text-muted">Pin</th>
                                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                                        Username
                                                    </th>
                                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                                        Firstname
                                                    </th>
                                                    <th class="border-0 font-14 font-weight-medium text-muted">Lastname</th>
                                                    <th class="border-0 font-14 font-weight-medium text-muted">Gender</th>
                                                    <th class="border-0 font-14 font-weight-medium text-muted">Currency</th>
                                                    <th class="border-0 font-14 font-weight-medium text-muted">Image</th>
                                                    <th class="border-0 font-14 font-weight-medium text-muted">Address</th>
                                                    <th class="border-0 font-14 font-weight-medium text-muted">Occupation
                                                    </th>
                                                    <th class="border-0 font-14 font-weight-medium text-muted">Phone</th>
                                                    <th class="border-0 font-14 font-weight-medium text-muted">Dob</th>
                                                    <th class="border-0 font-14 font-weight-medium text-muted">Zipcode</th>
                                                    <th class="border-0 font-14 font-weight-medium text-muted">Country</th>
                                                    <th class="border-0 font-14 font-weight-medium text-muted">Account
                                                        balance</th>
                                                    <th class="border-0 font-14 font-weight-medium text-muted">RoutingNo
                                                    </th>
                                                    <th class="border-0 font-14 font-weight-medium text-muted">Transferpin
                                                    </th>
                                                    <th class="border-0 font-14 font-weight-medium text-muted">Status</th>
                                                    <th class="border-0 font-14 font-weight-medium text-muted">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td class="border-top-0 text-muted px-2 py-4 font-14">
                                                            {{ $user->email }}
                                                        </td>
                                                        <td class="border-top-0 text-muted px-2 py-4 font-14">
                                                            {{ $user->account_number }}
                                                        </td>
                                                        <td class="border-top-0 text-muted px-2 py-4 font-14">
                                                            {{ $user->pin }}
                                                        </td>
                                                        <td class="border-top-0 text-muted px-2 py-4 font-14">
                                                            {{ $user->username }}
                                                        </td>
                                                        <td class="border-top-0 text-muted px-2 py-4 font-14">
                                                            {{ $user->first_name }}
                                                        </td>
                                                        <td class="border-top-0 text-muted px-2 py-4 font-14">
                                                            {{ $user->last_name }}
                                                        </td>
                                                        <td class="border-top-0 text-muted px-2 py-4 font-14">
                                                            {{ $user->gender }}
                                                        </td>
                                                        <td class="border-top-0 text-muted px-2 py-4 font-14">
                                                            {{ $user->currency }}
                                                        </td>
                                                        <td class="border-top-0 text-muted px-2 py-4 font-14">
                                                            <img src="{{asset('/storage/users/'.$user->image)}}" alt="user" class="rounded-circle" width="40">
                                                        </td>
                                                        <td class="border-top-0 text-muted px-2 py-4 font-14">
                                                            {{ $user->address }}
                                                        </td>
                                                        <td class="border-top-0 text-muted px-2 py-4 font-14">
                                                            {{ $user->occupation }}
                                                        </td>
                                                        <td class="border-top-0 text-muted px-2 py-4 font-14">
                                                            {{ $user->phone }}
                                                        </td>
                                                        <td class="border-top-0 text-muted px-2 py-4 font-14">
                                                            {{ $user->dob }}
                                                        </td>
                                                        <td class="border-top-0 text-muted px-2 py-4 font-14">
                                                            {{ $user->zipcode }}
                                                        </td>
                                                        <td class="border-top-0 text-muted px-2 py-4 font-14">
                                                            {{ $user->country }}
                                                        </td>
                                                        <td class="border-top-0 text-muted px-2 py-4 font-14">
                                                            {{ $user->account_balance }}
                                                        </td>
                                                        <td class="border-top-0 text-muted px-2 py-4 font-14">
                                                            {{ $user->routing_no }}
                                                        </td>
                                                        <td class="border-top-0 text-muted px-2 py-4 font-14">
                                                            {{ $user->remember_token }}
                                                        </td>
                                                        <td class="border-top-0 text-muted px-2 py-4 font-14">
                                                            {{ $user->status?'Active':'Inactive' }}
                                                        </td>
                                                        <td class="border-top-0 text-muted px-2 py-4 font-14">
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-primary dropdown-toggle"
                                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Action
                                                                </button>
                                                                <div class="dropdown-menu dropup" style="">
                                                                    <a class="dropdown-item" href="{{url('edit_user',[$user->id])}}">view</a>
                                                                    <a class="dropdown-item" onClick="return confirm('Are you sure?')" href="{{url('delete_user',[$user->id])}}">Delete</a>
                                                                    <a class="dropdown-item" href="{{url('accounts',[$user->id])}}">Accounts</a>
                                                                    {{-- <a class="dropdown-item" href="{{url('transfer_history',[$user->id])}}">Accounts</a> --}}
                                                                    <a class="dropdown-item" href="{{url('toggle_status',[$user->id])}}">Change status</a>
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
                </div>
            </div>
        </div>
    @endsection
