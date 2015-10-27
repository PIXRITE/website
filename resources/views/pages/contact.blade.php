@extends('pages')
@section('page_tag', 'contact')
<?php $page_type = 'inside' ?>

@section('seo')
    <title>Contact PIXRITE</title>
    <meta name="description" content="PIXRITE, a Washington Web Design Studio, providing Brand, SEO/SEM, Web, and UX/UI Design." />
@endsection

@section('content')	
	
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

            <div class="contact--box">
                <h4 class="contact--subheading">Sales &amp; Support</h4>

                <div class="contact--details">
                    <p class="contact--details--main">Monday-Friday, 9am-5pm PST</p>
                    <p>{{ $phone }}</p>
                    <p>{{ $email }}</p>
                </div>

                <address class="contact--address">{{ $address }}<br>{{ $suite }}<br>{{ $city }}, {{ $state }} {{ $zip }}</address>
            </div>
           

            @if (count($errors) > 0)
                <div class="form_errors">
                    <ul class="form_errors--list">
                        @foreach ($errors->all() as $error)
                            <li class="form_errors--item">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
           
            <form id="form" class="contact_form js-slidingForm" action="{{ route('contact-form') }}" method="POST">
               @if( Session::has('form-thanks') )
                  <div class="form_thanks">
                    <h3 class="form_thanks--heading">Form Submitted!</h3>
                    <p class="form_thanks--text">{{ Session::get('form-thanks') }}</p>
                  </div>
                @endif
               
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <!-- Name -->
                <div class="form_block left">
                    <label class="form--label" for="name">Name <span>(required)</span></label>
                    <input class="form--input" type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}" required>
                </div>

                <!-- Phone Number -->
                <div class="form_block right">
                    <label class="form--label" for="phone">Phone Number</label>
                    <input class="form--input" type="text" name="phone" id="phone" placeholder="Phone Number" value="{{ old('phone') }}">
                </div>

                <!-- Email -->
                <div class="form_block">
                    <label class="form--label" for="email">Email Address <span>(required)</span></label>
                    <input class="form--input" type="email" name="email" id="email" placeholder="Email Address" value="{{ old('email') }}" required>
                </div>

                <!-- Details -->
                <div class="form_block">
                    <label class="form--label" for="message">Message <span>(required)</span></label>
                    <textarea class="form--textarea" name="message" id="message" placeholder="Message" required>{{ old('message') }}</textarea>
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