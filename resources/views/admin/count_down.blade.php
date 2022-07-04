@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Count down</h4>
                </div>
                @include('partials.alerts')
                <form method="post" action="{{url('count_down')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Countdown date</label>
                            <input class="form-control" name="date" value="{{$countdown?$countdown->date:""}}"
                                type="date" required />
                        </div>
                        <div class="col-md-6">
                            <label>Count down text</label>
                            <textarea name="text" class="form-control">{{$countdown?$countdown->text:""}}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label><input type="checkbox" class="" name="show" {{$countdown?->show==1?"checked":"" }}
                                name="status" />
                                Show
                                countdown</label>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection