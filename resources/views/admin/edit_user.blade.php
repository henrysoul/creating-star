@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('update_user', ['userId' => $user->id]) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @include('partials.alerts')
                        <div class="form-group">
                            <label for=""> First Name</label>
                            <input class="form-control" placeholder="Enter First Name" required name='first_name'
                                type="text" value="{{ $user->first_name }}">
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for=""> Last Name</label>
                                    <input class="form-control" placeholder="Enter Last Name" required name='last_name'
                                        type="text" value="{{ $user->last_name }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input class="form-control" placeholder="Enter Username" name='username' required
                                        type="username" value="{{ $user->username }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for=""> Email address</label>
                            <input class="form-control" placeholder="Enter email" required name='email' type="email"
                                value="{{ $user->email }}">
                        </div>

                        {{-- <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for=""> Password</label>
                                    <input class="form-control" placeholder="Password" name='password' 
                                        type="text">
                                </div>
                            </div>
                        </div> --}}


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for=""> Date of birth</label>
                                    <input class="form-control" placeholder="Enter Date of birth" name='dob' required
                                        type="date" value="{{ $user->dob }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Gender</label><select name="gender" id="" class="form-control">
                                        <option value="Male" {{ $user->gender == 'male' ? 'select' : '' }} class="option">
                                            Male
                                        </option>
                                        <option value="Female" {{ $user->gender == 'female' ? 'select' : '' }}
                                            class="option">
                                            Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>



                        <h4 class="auth-header">Contact Information</h4>

                        <div class="form-group">
                            <label for=""> Home Address</label>
                            <input class="form-control" placeholder="Enter Home Address" name='address' required type="text"
                                value="{{ $user->address }}">
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for=""> Country</label>
                                    <input class="form-control" placeholder="Country" type="text" name='country'
                                        value="{{ $user->address }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Zipcode</label>
                                    <input class="form-control" placeholder="Enter Zipcode" required name='zipcode'
                                        type="text" value="{{ $user->zipcode }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for=""> Phone Number</label>
                            <input class="form-control" placeholder="Enter Phone Number" name='phone'
                                value="{{ $user->phone }}" required type="text">
                        </div>

                        <div class="form-group">
                            <label for=""> Account Pin</label>
                            <input class="form-control" placeholder="Enter Account Pin" required
                                value="{{ $user->pin }}" name='pin' type="text">
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for=""> Account Type</label>
                                    <select name="acctype" id="" class="form-control">
                                        <option value="Checking Account"
                                            {{ $user->account_type == 'Checking Account' ? 'select' : '' }}>Checking
                                            Account
                                        </option>
                                        <option value="Saving Account"
                                            {{ $user->account_type == 'Saving Account' ? 'select' : '' }}>Saving Account
                                        </option>
                                        <option value="Fixed deposit Account"
                                            {{ $user->account_type == 'Fixed deposit Account' ? 'select' : '' }}>Fixed
                                            deposit
                                            Account</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Currency</label>
                                    <select name="currency" id="" class="form-control">
                                        <option value="$">Dollar</option>
                                        <option value="Euro">Euro</option>
                                        <option value="Pounds">Pounds</option>
                                        <option value="Chinese Yuan">Chinese Yuan</option>
                                        <option value="Hong Kong Dollar">Hong Kong Dollar </option>
                                        <option value="Indonesian Rupiah ">Indonesian Rupiah </option>
                                        <option value="Indian Rupee">Indian Rupee</option>
                                        <option value="Japanese Yen">Japanese Yen </option>
                                        <option value="Malaysian Ringgit">Malaysian Ringgit </option>
                                        <option value="New Zealand Dollar">New Zealand Dollar </option>
                                        <option value="Philippine Peso">Philippine Peso </option>
                                        <option value="Singapore Dollar">Singapore Dollar </option>
                                        <option value="South Korean Won">South Korean Won </option>
                                        <option value="Sri Lankan Rupee">Sri Lankan Rupee </option>
                                        <option value="Thai Baht">Thai Baht </option>
                                        <option value="Vietnamese Dong">Vietnamese Dong </option>
                                        <option value="Emirati Dirham">Emirati Dirham </option>
                                        <option value="Cambodian Riel">Cambodian Riel </option>
                                    </select>

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Occupation</label>
                            <input class="form-control" placeholder="Enter Occupation" required name='occupation'
                                type="text" value="{{ $user->occupation }}">
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Account number</label>
                                    <input class="form-control" placeholder="" required name='account_number' type="text"
                                        value="{{ $user->account_number }}">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Account balance</label>
                                    <input class="form-control" placeholder="" required name='account_balance' type="text"
                                        value="{{ $user->account_balance }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Routing number</label>
                                    <input class="form-control" placeholder="" required name='routing_no' type="text"
                                        value="{{ $user->routing_no }}">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Upload Picture</label>
                                    <input class="form-control" name='fileToUploadss' type="file">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="{{ asset('/storage/users/' . $user->image) }}" alt="user"
                                    class="rounded-circle" width="40">
                            </div>
                        </div><br>




                        {{-- <input type='submit' name='submit' class="btn btn-primary" value='Submit'> --}}



                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
