@extends('pages')
@section('page_tag', 'hire')
<?php $page_type = 'hire' ?>

@section('seo')
    <title>Hire PIXRITE</title>
    <meta name="description" content="PIXRITE, a Washington Web Design Studio, providing Brand, SEO/SEM, Web, and UX/UI Design." />
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
        <div class="page_body--skinny">
            <h2 class="hire_heading">Let's Get Started</h2>

            <p class="hire_text">Ready to discuss your project with us? You know the drill: please fill out the form below, and we'll get in touch with you shortly. Or give us a call right now at {{ $phone }}.
            </p>

            @if (count($errors) > 0)
                <div class="form_errors">
                    <ul class="form_errors--list">
                        @foreach ($errors->all() as $error)
                            <li class="form_errors--item">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="hire_form js-slidingForm" action="{{ route('hire-form') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <!-- Name -->
                <div class="form_block left">
                    <label class="form--label" for="name">Name <span>(required)</span></label>
                    <input class="form--input" type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}" required>
                </div>

                <!-- Phone Number -->
                <div class="form_block right">
                    <label class="form--label" for="phone">Phone Number <span>(required)</span></label>
                    <input class="form--input" type="text" name="phone" id="phone" placeholder="Phone Number" value="{{ old('phone') }}" required>
                </div>

                <!-- Email -->
                <div class="form_block">
                    <label class="form--label" for="email">Email Address <span>(required)</span></label>
                    <input class="form--input" type="email" name="email" id="email" placeholder="Email Address" value="{{ old('email') }}" required>
                </div>

                <!-- Details -->
                <div class="form_block">
                    <label class="form--label" for="details">Project Details <span>(required)</span></label>
                    <textarea class="form--textarea" name="details" id="details" placeholder="Project Details" required>{{ old('details') }}</textarea>
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
                        <input class="form--input" type="text" name="website" id="website" placeholder="Website" value="{{ old('website') }}">
                    </div>

                    <!-- Hear About Us -->
                    <div class="form_block right">
                        <label class="form--label" for="hearAbout">How Did You Hear About Us?</label>
                        <input class="form--input" type="text" name="hearAbout" id="hearAbout" placeholder="How Did You Hear About Us?" value="{{ old('hearAbout') }}">
                    </div>
                </div>

                <!-- Buttons -->
                <div class="form_block buttons">
                    <button class="form--button" type="submit">SUBMIT YOUR REQUEST</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection