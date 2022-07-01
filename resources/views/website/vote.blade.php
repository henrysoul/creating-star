@extends('layouts.website')
@section('head')
<style>
    label {
        color: white;
    }
</style>
@endsection
@section('content')
<section class="uni-banner">
    <div class="container">
        <div class="uni-banner-text-area mt-4">
            <h1>Vote</h1>
        </div>
        <form method="post" action="{{url('search_contestant')}}">
            @csrf
            <center class="m-auto text-white">Search contestant</center><hr>
            <div class="row">
                
                <div class="col-lg-3 col-md-3 col-sm-3 col-12 mb-3">
                    {{-- <input type="text" name="contestant_id" class="form-control" placeholder="Contestant Id" /> --}}
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-12 mb-3">
                    <input type="text" name="contestant_id" class="form-control" required placeholder="Enter Contestant Id" />
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection

@section('scripts')
@endsection