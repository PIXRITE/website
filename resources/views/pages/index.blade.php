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

        <h1 class="hero--heading">The Honest Agency</h1>

        <p class="hero--text">We know that's easier said than done. However, honesty is truly something we feel must be the foundation of any project. Of course we still pride ourselves on our craftsmanship and ability to get you results.</p>

        <a href="{{ route('hire-page') }}" class="hero--button">LET'S GET STARTED</a>
    </div>

    <div class="hero--image"></div>
</div>
	
	
<!-- Header -->
@include('pages._partials.header')


<!-- Page Body -->
<div class="services_section">
    <div class="section_inner">

        <h2 class="services_section--heading">Where We Specialize</h2>
    
        <!-- Services List -->
        <ul class="services_section--list">
            <li class="services_section--list--item brand">
                <h3 class="services_section--list--heading">Brand</h3>
                <h5 class="services_section--list--subheading">Expose Yourself</h5>
                <p class="services_section--list--text">We give your customers that A-HA moment, and make sure they know how to share it over, and over, and over...</p>
                <p class="services_section--list--note">(in a good way...)</p>
                <a class="services_section--list--link" href="{{ route('brand-page') }}">LEARN MORE</a>
            </li>
            
            <li class="services_section--list--item marketing">
                <h3 class="services_section--list--heading">Digital <span>Marketing</span></h3>
                <h5 class="services_section--list--subheading">Expose Yourself</h5>
                <p class="services_section--list--text">We give your customers that A-HA moment, and make sure they know how to share it over, and over, and over...</p>
                <p class="services_section--list--note">(in a good way...)</p>
                <a class="services_section--list--link" href="{{ route('marketing-page') }}">LEARN MORE</a>
            </li>
            
            <li class="services_section--list--item web">
                <h3 class="services_section--list--heading">Web &amp; SEO</h3>
                <h5 class="services_section--list--subheading">Spiders Hang on Broken Webs</h5>
                <p class="services_section--list--text">Fact is, these crawlers are the superheros of getting seen on the web. Let us design, build and market your online presence.</p>
                <p class="services_section--list--note">(say it, spidey is our friend)</p>
                <a class="services_section--list--link" href="{{ route('web-page') }}">LEARN MORE</a>
            </li>
            
            <li class="services_section--list--item ux">
                <h3 class="services_section--list--heading">UI/UX</h3>
                <h5 class="services_section--list--subheading">Usability With Flair</h5>
                <p class="services_section--list--text"><strong>WARNING:</strong> Following implementation, your competition may mimic your look and feel.</p>
                <p class="services_section--list--note">(it's okay, we have more good ideas)</p>
                <a class="services_section--list--link" href="{{ route('ux-page') }}">LEARN MORE</a>
            </li>
        </ul>
    </div>
</div>

@endsection