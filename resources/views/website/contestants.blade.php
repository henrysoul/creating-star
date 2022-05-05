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
            <h1>Contestants</h1>
        </div>
    </div>
</section>
<div class="section-content">
    <div class="row justify-content-center">
        @foreach ($contest->contestants??[] as $contestant )
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="blog-card">
                <div class="blog-img-area">
                    <a href="{{url('child_right')}}"><img src="{{asset('storage/images/child/'.$contestant->photo)}}"
                            alt="contestant image" style="width:433px !important;height:243px !important"></a>
                    <div class="blog-img-date">
                        <span>
                            @php

                            if($contest->active_stage ==1){
                            $vote = $contestant->stage1_votes;
                            }
                            if($contest->active_stage ==2){
                            $vote = $contestant->stage2_votes;
                            }
                            if($contest->active_stage ==3){
                            $vote = $contestant->stage3_votes;
                            }
                            @endphp
                            {{$vote}}
                        </span>
                        <span style="font-size: 13px">Votes</span>
                    </div>
                </div>
                <div class="blog-text-area">
                    <div class="blog-date">
                        <ul>
                            <li> <span>{{$contestant->age.' '.$contestant->less_than_a_year}}</span>
                            </li>
                            <li> <span>{{$contestant->gender}}</span>
                            </li>
                        </ul>
                    </div>
                    <h4><a href="{{url('child_right')}}">{{$contestant->name}}
                        </a></h4>
                    @if ($contest->active_stage > 1)
                    <div class="blog-date mb-2">
                        <span class="text-light">Stage1 extra votes : {{$contestant->stage1_extra_votes}}</span>
                    </div>
                    @endif

                    <a class="default-button default-button-2" href="{{url('child_right')}}">Vote</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection