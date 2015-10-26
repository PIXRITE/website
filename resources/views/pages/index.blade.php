@extends('pages')
@section('page_tag', 'home')
<?php $page_type = 'landing' ?>

@section('seo')
    <title>PIXRITE</title>
    <meta name="description" content="PIXRITE, a Washington Web Design Studio, providing Brand, SEO/SEM, Web, and UX/UI Design." />
@endsection

@section('content')
	
<!-- Page Top -->
<div class="hero index">
    <div class="section_inner">
        <h1 class="hero--heading">What You See Is What You Get</h1>

        <p class="hero--text">We listen. We analyze. We discover. We propose. We deliver. <span>We’re digital marketing experts and we’re here to show you ROI.</span></p>

        <a href="{{ route('hire-page') }}" class="hero--button">LET'S KICK IT OFF</a>
    </div>

    <div class="hero--image"></div>
</div>


<div class="client_logos">
    <div class="section_inner clearfix">
        <ul class="client_logos--list">
            <li class="client_logos--item"><img class="client_logos--image" src="img/client_logos/client_logo_01.png" alt="Client Logo"></li>
            <li class="client_logos--item"><img class="client_logos--image" src="img/client_logos/client_logo_02.png" alt="Client Logo"></li>
            <li class="client_logos--item"><img class="client_logos--image" src="img/client_logos/client_logo_03.png" alt="Client Logo"></li>
            <li class="client_logos--item"><img class="client_logos--image" src="img/client_logos/client_logo_04.png" alt="Client Logo"></li>
            <li class="client_logos--item"><img class="client_logos--image" src="img/client_logos/client_logo_05.png" alt="Client Logo"></li>
            <li class="client_logos--item"><img class="client_logos--image" src="img/client_logos/client_logo_06.png" alt="Client Logo"></li>
            <li class="client_logos--item"><img class="client_logos--image" src="img/client_logos/client_logo_07.png" alt="Client Logo"></li>
            <li class="client_logos--item"><img class="client_logos--image" src="img/client_logos/client_logo_08.png" alt="Client Logo"></li>
            <li class="client_logos--item"><img class="client_logos--image" src="img/client_logos/client_logo_09.png" alt="Client Logo"></li>
            <li class="client_logos--item"><img class="client_logos--image" src="img/client_logos/client_logo_10.png" alt="Client Logo"></li>
            <li class="client_logos--item"><img class="client_logos--image" src="img/client_logos/client_logo_11.png" alt="Client Logo"></li>
            <li class="client_logos--item"><img class="client_logos--image" src="img/client_logos/client_logo_12.png" alt="Client Logo"></li>
        </ul>
    </div>
</div>


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
                    <span class="services_section--list--door">
                        <h3 class="services_section--list--heading">BRAND</h3>
                        <h5 class="services_section--list--subheading">Build Recognition</h5>
                    </span>
                    
                    <p class="services_section--list--text">Branding cattle is out. You need more than a logo to distinguish yourself from the competition. It's time to establish your brand.</p>
                    <p class="services_section--list--note">(and it won't hurt a bit...)</p>
                </a>
            </li>
            
            <li class="services_section--list--item marketing">
                <a class="services_section--list--link" href="{{ route('seo-page') }}">
                    <span class="services_section--list--door">
                        <h3 class="services_section--list--heading">SEO/SEM</h3>
                        <h5 class="services_section--list--subheading">Expose Yourself</h5>
                    </span>
                    
                    <p class="services_section--list--text">We give your customers that A-HA moment, and make sure they know how to share it over, and over, and over...</p>
                    <p class="services_section--list--note">(in a good way...)</p>
                </a>
            </li>
            
            <li class="services_section--list--item web">
                <a class="services_section--list--link" href="{{ route('web-page') }}">
                    <span class="services_section--list--door">
                        <h3 class="services_section--list--heading">WEB</h3>
                        <h5 class="services_section--list--subheading">Spiders Hang on Broken Webs</h5>
                    </span>
                        
                    <p class="services_section--list--text">Fact is, these crawlers are the superheros of getting seen on the web. Let us design, build and market your online presence.</p>
                    <p class="services_section--list--note">(say it, spidey is our friend)</p>
                </a>
            </li>
            
            <li class="services_section--list--item ux">
                <a class="services_section--list--link" href="{{ route('ux-page') }}">
                    <span class="services_section--list--door">
                        <h3 class="services_section--list--heading">UI/UX</h3>
                        <h5 class="services_section--list--subheading">Usability With Flair</h5>
                    </span>
                    
                    <p class="services_section--list--text"><strong>WARNING:</strong> Following implementation, your competition may mimic your look and feel.</p>
                    <p class="services_section--list--note">(it's okay, we have more good ideas)</p>
                </a>
            </li>
        </ul>
    </div>
</div>

@endsection