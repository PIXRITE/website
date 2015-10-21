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
        <div class="page_body--left">
            <h2>Contact Us</h2>
            
            <p>Please feel free to call us during business hours to discuss your project. Outside of business hours, please use our contact form for quickest response.</p>
            
            <h4>Sales &amp; Support</h4>
            
            <p class="contact--hours">Monday-Friday, 9am-5pm PST</p>
            
            <p class="contact--phone">{{ $phone }}</p>
            
            <p class="contact--email">{{ $email }}</p>
            
            <address class="contact--address">{{ $address1 }}<br>{{ $address2 }}</address>
        </div>

        <div class="page_body--right">
        
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
                <div class="form_block">
                    <button class="form--button" type="submit">CONTACT PIXRITE</button>
                </div>
            </form>
        </div>
    
        <div class="page_body--full">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44655.188249909275!2d-122.58286954093111!3d45.61166351411913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54950b0b7da97427%3A0x1c36b9e6f6d18591!2sPortland%2C+OR!5e0!3m2!1sen!2sus!4v1445453397280" width="1200" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div> 
</div>

@endsection