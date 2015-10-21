@extends('pages')
@section('page_tag', 'hire')
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
        <h1 class="page_top--heading">Hire Us</h1>
    
        <div class="page_top--years">@include('pages._partials.years')</div>
    </div>
</div>


<!-- Page Body -->
<div class="page_body">
    <div class="section_inner">
        <h2 class="hire_heading">Let's Get Started</h2>
       
        <p class="hire_text">Ready to discuss your project with us? You know the drill: please fill out the form below, and we'll get in touch with you shortly. 
        Too impatient to wait for us to contact you? Give us a call right now at (123) 456-7890.
        </p>
        
        <form class="hire_form js-slidingForm" action="{{ route('hire-form') }}" method="POST">
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
                <label class="form--label" for="details">Project Details</label>
                <textarea class="form--textarea" name="details" id="details" placeholder="Project Details"></textarea>
            </div>
            
            
            <div class="form_group">
            
                <h3 class="form--heading">Optional Details</h3>
               
                <!-- Budget -->
                <div class="form_block left">
                    <label class="form--label" for="budget">Budget</label>
                    <select class="form--input" type="text" name="budget" id="budget">
                        <option value="">Budget</option>
                        <option value="low">&lt; $2,000</option>
                        <option value="mid_low">$2,000 to $4,000</option>
                        <option value="mid_high">$4,000 to $8,000</option>
                        <option value="high">&gt; $8,000</option>
                    </select>
                </div>

                <!-- Deadline -->
                <div class="form_block right">
                    <label class="form--label" for="deadline">Deadline</label>
                    <select class="form--input" type="text" name="deadline" id="deadline">
                        <option value="">Deadline</option>
                        <option value="now">Yesterday</option>
                        <option value="low">1-2 Weeks</option>
                        <option value="mid-low">3-4 Weeks</option>
                        <option value="mid-high">1-2 Months</option>
                        <option value="high">3-4 Months</option>
                    </select>
                </div>

                <!-- Website -->
                <div class="form_block left">
                    <label class="form--label" for="website">Website</label>
                    <input class="form--input" type="text" name="website" id="website" placeholder="Website">
                </div>

                <!-- Hear About Us -->
                <div class="form_block right">
                    <label class="form--label" for="hearAbout">How Did You Hear About Us?</label>
                    <input class="form--input" type="text" name="hearAbout" id="hearAbout" placeholder="How Did You Hear About Us?">
                </div>
            </div>
            
            <!-- Buttons -->
            <div class="form_block buttons">
                <button class="form--button" type="submit">SUBMIT YOUR REQUEST</button>
            </div>
        </form>
    </div>
</div>

@endsection