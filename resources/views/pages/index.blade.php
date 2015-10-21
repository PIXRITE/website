@extends('pages')
@section('page_tag', 'home')
<?php $page_type = 'landing' ?>

@section('seo')
    <title>PIXRITE</title>
@endsection

@section('content')
	
<!-- Page Top -->
<div class="hero index">
    <div class="section_inner">
        <div class="hero--logo">@include('pages._partials.logo')</div>

        <h1 class="hero--heading">We're the Straight Shooters</h1>

        <p class="hero--text">We like to keep things simple and honest. This way we can focus on providing you quality services.</p>

        <a href="{{ route('hire-page') }}" class="hero--button">LET'S GET STARTED</a>
    </div>

    <div class="hero--image"></div>
</div>
	
	
<!-- Header -->
@include('pages._partials.header')


<div class="index_header">
    <div class="section_inner">
        <h1 class="index_header--heading">Where We Specialize</h1>
    </div>
</div>


<!-- Page Body -->
<div class="services_section">
    <div class="section_inner">
    
        <!-- Services List -->
        <ul class="services_section--list">
            <li class="services_section--list--item brand">
                <a class="services_section--list--link" href="{{ route('brand-page') }}">
                    <h3 class="services_section--list--heading">Brand</h3>
                       
                    <h5 class="services_section--list--subheading">Expose Yourself</h5>
                    <p class="services_section--list--text">We give your customers that A-HA moment, and make sure they know how to share it over, and over, and over...</p>
                    <p class="services_section--list--note">(in a good way...)</p>
                </a>
            </li>
            
            <li class="services_section--list--item marketing">
                <a class="services_section--list--link" href="{{ route('marketing-page') }}">
                    <h3 class="services_section--list--heading">SEO/SEM</h3>
                    
                    <h5 class="services_section--list--subheading">Expose Yourself</h5>
                    <p class="services_section--list--text">We give your customers that A-HA moment, and make sure they know how to share it over, and over, and over...</p>
                    <p class="services_section--list--note">(in a good way...)</p>
                </a>
            </li>
            
            <li class="services_section--list--item web">
                <a class="services_section--list--link" href="{{ route('web-page') }}">
                    <h3 class="services_section--list--heading">Web</h3>
                    
                    <h5 class="services_section--list--subheading">Spiders Hang on Broken Webs</h5>
                    <p class="services_section--list--text">Fact is, these crawlers are the superheros of getting seen on the web. Let us design, build and market your online presence.</p>
                    <p class="services_section--list--note">(say it, spidey is our friend)</p>
                </a>
            </li>
            
            <li class="services_section--list--item ux">
                <a class="services_section--list--link" href="{{ route('ux-page') }}">
                    <h3 class="services_section--list--heading">UI/UX</h3>
                    
                    <h5 class="services_section--list--subheading">Usability With Flair</h5>
                    <p class="services_section--list--text"><strong>WARNING:</strong> Following implementation, your competition may mimic your look and feel.</p>
                    <p class="services_section--list--note">(it's okay, we have more good ideas)</p>
                </a>
            </li>
        </ul>
    </div>
</div>

@endsection