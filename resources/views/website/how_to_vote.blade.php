@extends('layouts.website')
@section('head')
<style>
    label {
        color: white;
    }
</style>
<style>
    label {
        color: white;
    }

    h4,
    h6 {
        color: white;
    }

    h3 {
        color: white;
    }
</style>
@endsection
@section('content')
<section class="uni-banner">
    <div class="container">
        <div class="uni-banner-text-area mt-4">
            <h1>HOW TO VOTE SUCCESSFULLY
            </h1>
        </div>
    </div>
</section>
<section class="details-text-area ptb-100">
    <div class="container">
        <div class="terms">
            <ul class="payment">
                <h4>There are two voting options;
                </h4>
                <li>Via PayStack</li>
                <li> Via Bank Transfer</li>
                <h4>VOTING VIA PAYSTACK</h4>
                <p>Please kindly follow these steps accordingly</p>
                <li>Step 1: Go to the contestant’s page by clicking on “Contestant” in the main menu</li>
                <li> Step 2: When the page opens, click on the contestant you want to vote for, or search for the
                    contestant using the “ Contestant’s ID ”</li>
                <li> Step 3: Select the numbers of vote you want to cast for the contestant , click on “Vote”, you will
                    be redirected to a page requiring you to confirm your order, then you proceed to vote by filling
                    your card details in the Paystack Gateway.</li>
                <p>(Paystack also have other payment options like “Bank Transfer, USSD and Bank Deposit” you can select
                    any if these options
                    ( NOTE your card details are safe, no one has access to them)</p>
                <li> Step 4: If you followed the above steps carefully and correctly, you vote will be automatically
                    added and will reflect in the contestant page immediately.</li>

                <h4>VOTING VIA BANK TRANSFER </h4>
                <li>Step 1 : Go to the Contestant's page, select the contestant you want to vote for, use the
                    Contestant’s Name or ID as payment narration. </li>
                <li>Step 2: Pay directly into the Bank Account below;</li>

                <h6>Bank Name: Fidelity Bank</h6>
                <h6>Account Name: Creating Stars Concept</h6>
                <h6>Account Number: 5600839181</h6>
                <p>(Each Vote cost N50, kindly make payment as regarding the number of votes you want to give to a
                    contestant.)</p>
                <li>Step 3: When you are done with your transfer, you click on the WhatsApp chat icon to chat an admin
                    or follow up with the parent of the contestant to confirm your vote for Validation.</li>
                <li> Step 4: If you followed the above steps carefully and correctly, your vote will be validated
                    soonest and will reflect on the contestant page.</li>
            </ul>

        </div>
    </div>
</section>

@endsection