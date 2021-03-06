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
        <form method="post" action="{{url('search_contestant')}}">
            @csrf
            <center class="m-auto text-white">Search contestant</center>
            <hr>
            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-3 col-12 mb-3">
                    {{-- <input type="text" name="contestant_id" class="form-control" placeholder="Contestant Id" />
                    --}}
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-12 mb-3">
                    <input type="text" name="contestant_id" class="form-control" required
                        placeholder="Enter Contestant Id" />
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
    </div>
</section>
<div class="section-content">

    <div class="row justify-content-center">
        <div class="">@include('partials.alerts')</div>
         @if(!count($contest->contestants??[]))
        <div class="m-5">
            <center class="text-white">Contestant not found</center>
        </div>
        @endif
        @foreach ($contest->contestants??[] as $contestant )
        @if( $contest->active_stage == 2 && $contestant->passed_stage1 ==1 || $contest->active_stage == 3 &&
        $contestant->passed_stage2 ==1 || $contest->active_stage == 1)
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="blog-card">
                <div class="blog-img-area">
                    <a href="#"><img src="{{asset('storage/images/child/'.$contest->uuid.'/'.$contestant->photo)}}"
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
                    <h5 class="text-light">Contest ID : {{$contestant->reg_number_copy}}</h5>
                    <h4><a href="#">{{$contestant->name}}
                        </a></h4>
                    @if ($contest->active_stage > 0 && $contest->active_stage !=3)
                    <div class="blog-date mb-2">
                        <span class="text-light">Extra votes : {{$contestant->stage1_extra_votes}}</span>
                    </div>
                    @endif

                    @if($contest->canvote==1)

                    <a class="default-button default-button-2 voteBtn" data-bs-toggle="modal"
                        data-bs-target="#voteModal{{$contestant->uuid}}" data-id={{$contestant->uuid}}
                        data-email={{$contestant->email}}>Vote</a>
                    @endif
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="voteModal{{$contestant->uuid}}" style="z-index:3000000"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Vote for {{$contestant->name}} Reg no:
                            {{$contestant->reg_number_copy}} </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="form{{$contestant->uuid}}" method="post" action="{{ route('pay') }}">
                        @csrf
                        <div class="modal-body">
                             <input type="hidden" name="email" value="{{$contestant->uuid."@mail.com"}}"> {{-- required --}}
                            <input type="hidden" name="metadata" value="{{ json_encode($array = ['uuid' => $contestant->uuid]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                            <input type="hidden" name="reference" value="" id="ref{{$contestant->uuid}}"> {{-- required --}}
                            <!--<div class="form-group">-->
                            <!--    <label class="text-dark">Phone number</label>-->
                            <!--    <input class="form-control inputField" type="number" required-->
                            <!--        style="border:1px solid black !important" placeholder="Enter your phone number"-->
                            <!--        name="phone" />-->
                            <!--</div><br>-->
                            <label class="text-dark">No of votes</label>
                            <select class="form-control amountSelect" id="sel{{$contestant->uuid}}"
                                style="border:1px solid black !important" name="amount" required>
                                <option value="">--Select no of votes--</option>
                                <option value="50000">10 votes - ???500 </option>
                                <option value="100000">20 votes - ???1000 </option>
                                <option value="250000">50 votes - ???2,500 </option>
                                <option value="500000">100 votes - ???5,000 </option>
                                <option value="1000000">200 votes - ???10,000 </option>
                                <option value="2500000">500 votes - ???25,000 </option>
                                <option value="5000000">1,000 votes - ???50,000 </option>
                                <option value="10000000">2,000 votes - ???100,000 </option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary pay" data-value="{{$contestant->uuid}}">Pay</button>
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
    let phone;
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

   let inputField =  document.getElementsByClassName('inputField');
   for(let sel of Array.from(inputField) ){
       sel.addEventListener('change',(e)=>{
        phone = e.target.value;
       });
   }

    const generateRef = (length)=>{
        var result           = '';
        var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var charactersLength = characters.length;
        for ( var i = 0; i < length; i++ ) {
            result += characters.charAt(Math.floor(Math.random() * 
            charactersLength));
           }
         return result;
    }
    // this submits the payment
    let pays = document.getElementsByClassName('pay');
    for(let pay of Array.from(pays)){
       pay.addEventListener("click",(e)=>{
            e.preventDefault();
            let uuid = pay.getAttribute("data-value");
            document.getElementById("ref"+uuid).value=generateRef(15);
            const form = document.getElementById('form'+uuid);
            if(form.checkValidity()){
                form.submit();
            }else{
                form.reportValidity();
            }
       });
    }
    
    
//    for(let pay of Array.from(pays)){
//         pay.addEventListener("click",(e)=>{
//             e.preventDefault();
//             const form = document.getElementById('form'+uuid);
//             if(form.checkValidity()){
//                 let handler = PaystackPop.setup({
//                     key: 'pk_test_dcd94b3891322e0866ac2fa90eb9eda16ea7b765', 
//                     email: `${phone}@email.com`,
//                     amount: amount * 100,
//                     label: uuid,
//                     onClose: function(){
//                     alert('Payment calcelled.');
//                     },
//                     callback: function(response){
//                         $(`.voteModal${uuid}`).toggle();
//                         if(response.status=="success"){
//                             $.ajax({
//                                 url: "<?php echo url('payment_success') ?>",
//                                 method: 'post',
//                                 data:{
//                                     amount:amount ,
//                                     uuid:uuid,
//                                     phone:phone,
//                                     response:JSON.stringify(response),
//                                     _token:'{{csrf_token()}}'
//                                 },
//                                 success: function (response) {
//                                     window.location.reload();
//                                 }
//                             });
//                         }
                        
//                     }
//                 });
//                 handler.openIframe();
//             }else{
//                 form.reportValidity();
//             }
//         });
//    }
   
   
</script>
@endsection