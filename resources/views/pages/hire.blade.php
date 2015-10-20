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
        <p class="hire_text">After we get some informtion from you, we'll setup a time to discuss your project in further detail. It won't be more than a day or so.</p>
        
        <form class="hire_form" action="/foo/bar" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <!-- Name -->
            <div class="form_block left">
                <label class="hire_form--label" for="name">Name</label>
                <input class="hire_form--input" type="text" name="name" id="name">
            </div>
            
            <!-- Email -->
            <div class="form_block right">
                <label class="hire_form--label" for="email">Email Address</label>
                <input class="hire_form--input" type="text" name="email" id="email">
            </div>
            
            <!-- Phone Number -->
            <div class="form_block left">
                <label class="hire_form--label" for="phone">Phone Number</label>
                <input class="hire_form--input" type="text" name="phone" id="phone">
            </div>
            
            <!-- Website -->
            <div class="form_block right">
                <label class="hire_form--label" for="website">Website</label>
                <input class="hire_form--input" type="text" name="website" id="website">
            </div>
            
            <!-- Details -->
            <div class="form_block">
                <label class="hire_form--label" for="details">Project Details</label>
                <textarea class="hire_form--textarea" name="details" id="details"></textarea>
            </div>
            
            <!-- Hear About Us -->
            <div class="form_block">
                <label class="hire_form--label" for="hearAbout">How Did You Hear About Us?</label>
                <input class="hire_form--input" type="text" name="hearAbout" id="hearAbout">
            </div>
            
            <!-- Buttons -->
            <div class="form_block">
                <button class="hire_form--button" type="submit">SUBMIT YOUR REQUEST</button>
            </div>
        </form>
    </div>
</div>

@endsection