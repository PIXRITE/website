@extends('pages')
@section('page_tag', 'contact')
<?php $page_type = 'inside' ?>

@section('seo')
    <title>PIXRITE</title>
@endsection

@section('content')
   
<!-- Header -->
@include('pages._partials.header')
	
	
<!-- Page Top -->
<div class="page_top"> 
    <div class="section_inner">
        <h1 class="page_top--heading">How We Can Help?</h1>
    
        <div class="page_top--years">@include('pages._partials.years')</div>
    </div>
</div>


<!-- Page Body -->
<div class="page_body">
    <div class="section_inner">
        <div class="page_body--skinny">
            <h2>Contact Us</h2>

            <p>Please feel free to call us during business hours to discuss your project. Outside of business hours, please use our contact form for quickest response.</p>

            <h4 class="contact--subheading">Sales &amp; Support</h4>

            <div class="contact--details">
                <p class="contact--details--main">Monday-Friday, 9am-5pm PST</p>
                <p>{{ $phone }}</p>
                <p>{{ $email }}</p>
            </div>

            <address class="contact--address">{{ $address1 }}<br>{{ $address2 }}</address>

            <form class="contact_form js-slidingForm" action="{{ route('contact-form') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <!-- Name -->
                <div class="form_block left">
                    <label class="form--label" for="name">Name</label>
                    <input class="form--input" type="text" name="name" id="name" placeholder="Name">
                </div>

                <!-- Phone Number -->
                <div class="form_block right">
                    <label class="form--label" for="phone">Phone Number</label>
                    <input class="form--input" type="text" name="phone" id="phone" placeholder="Phone Number">
                </div>

                <!-- Email -->
                <div class="form_block">
                    <label class="form--label" for="email">Email Address</label>
                    <input class="form--input" type="text" name="email" id="email" placeholder="Email Address">
                </div>

                <!-- Details -->
                <div class="form_block">
                    <label class="form--label" for="message">Message</label>
                    <textarea class="form--textarea" name="message" id="message" placeholder="Message"></textarea>
                </div>

                <!-- Buttons -->
                <div class="form_block buttons">
                    <button class="form--button" type="submit">CONTACT PIXRITE</button>
                </div>
            </form>
        </div>
    </div> 
</div>

@endsection