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
            <h4 class="text-light"> {{$contest? 'Stage'.$contest->active_stage :'' }}</h4>
        </div>
    </div>
</section>
<div class="section-content">
    <div class="row justify-content-center">
        @foreach ($contest->contestants??[] as $contestant )
        @if( $contest->active_stage == 2 && $contestant->passed_stage1 ==1 || $contest->active_stage == 3 &&
        $contestant->passed_stage2 ==1)
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
                    <h5 class="text-light">Reg no : {{$contestant->reg_number_copy}}</h5>
                    <h4><a href="{{url('child_right')}}">{{$contestant->name}}
                        </a></h4>
                    @if ($contest->active_stage > 1)
                    <div class="blog-date mb-2">
                        <span class="text-light">Stage1 extra votes : {{$contestant->stage1_extra_votes}}</span>
                    </div>
                    @endif

                    <a class="default-button default-button-2 voteBtn" data-bs-toggle="modal"
                        data-bs-target="#voteModal{{$contestant->uuid}}" data-id={{$contestant->uuid}}
                        data-email={{$contestant->email}}>Vote</a>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="voteModal{{$contestant->uuid}}" style="z-index:3000000"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Vote for {{$contestant->name}} </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="form{{$contestant->uuid}}">
                        <div class="modal-body">

                            <p class="modal-title text-dark">Reg no : {{$contestant->reg_number_copy}}</p>
                            {{-- <p class="text-dark">₦50 per vote</p> --}}
                            <label class="text-dark">No of votes</label>
                            <select class=" amountSelect" id="sel{{$contestant->uuid}}"
                                style="border:1px solid black !important" name="no_of_vote" required>
                                <option value="">--Select no of votes--</option>
                                <option value="500">10 votes - ₦500 </option>
                                <option value="1000">20 votes - ₦1000 </option>
                                <option value="2500">50 votes - ₦2,500 </option>
                                <option value="5000">100 votes - ₦5,000 </option>
                                <option value="10000">200 votes - ₦10,000 </option>
                                <option value="25000">500 votes - ₦25,000 </option>
                                <option value="50000">1,000 votes - ₦50,000 </option>
                                <option value="100000">2,000 votes - ₦100,000 </option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary pay">Pay</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endif
        {{-- end modal --}}
        @endforeach
    </div>
</div>
@endsection

@section('scripts')
<script src="https://js.paystack.co/v1/inline.js"></script>
<script type="text/javascript">
    let voteBtns =  document.getElementsByClassName("voteBtn");
    let uuid;
    let amount;
    let email;
   for(let btn of Array.from(voteBtns)){
       btn.addEventListener('click',()=>{
           uuid = btn.getAttribute('data-id');
           email = btn.getAttribute('data-email');
       });
   }

   let selects =  document.getElementsByClassName('amountSelect');
   for(let sel of Array.from(selects) ){
       sel.addEventListener('change',(e)=>{
        amount = sel.options[sel.selectedIndex].value;
       });
   }

   let pays = document.getElementsByClassName('pay');
   for(let pay of Array.from(pays)){
        pay.addEventListener("click",(e)=>{
            e.preventDefault();
            const form = document.getElementById('form'+uuid);
            if(form.checkValidity()){
                console.log(amount);
                let handler = PaystackPop.setup({
                    key: 'pk_test_dcd94b3891322e0866ac2fa90eb9eda16ea7b765', // Replace with your public key
                    email: email,
                    amount: amount,
                    // ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                    label: uuid,
                    onClose: function(){
                    alert('Window closed.');
                    },
                    callback: function(response){
                    let message = 'Payment complete! Reference: ' + response.reference;
                    alert(message);
                    }
                });
                handler.openIframe();
            }else{
                form.reportValidity();
            }
        });
   }
   
   
</script>
@endsection