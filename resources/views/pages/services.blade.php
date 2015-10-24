@extends('pages')
@section('page_tag', 'services')
<?php $page_type = 'inside' ?>

@section('seo')
    <title>PIXRITE Services</title>
    <meta name="description" content="PIXRITE, a Washington Web Design Studio, providing Brand, SEO/SEM, Web, and UX/UI Design." />
@endsection

@section('content')
   
<!-- Header -->
@include('pages._partials.header')
	
	
<!-- Page Top -->
<div class="page_top"> 
    <div class="section_inner">
        <h1 class="page_top--heading">Our Services</h1>
    
        <div class="page_top--years">@include('pages._partials.years')</div>
    </div>
</div>


<!-- Page Body -->
<div class="page_body">
    <div class="section_inner">
        <div class="page_body--left">
            <h2>We are Web done right.</h2>
               
            <aside class="quote">
                <p class="quote--text">"We're honored with all of the testimonials and referrals you continue to send our way. For nearly 15 years, you have been the reason PIXRITE keeps its doors open. Thank you for keeping it real!"</p>
                
                <p class="quote--credit">Jared Rowe, PIXRITE CEO & Creative</p>    
            </aside>
                
            <p>Truth is, not all Web is created equal. Your brother-in-law's best friend from high school can probably set up a site for you overnight. There are companies out there offering Web design for next to nothing—or even free. If you're "lucky," they'll even put a shopping cart together for you—and only charge you a monthly subscription.</p>

            <p>But today's sophisticated online customers demand more ease of use, more engaging content, more innovation than most high school buds can produce. You require detailed analytics to monitor conversion rates, track search trends, manage brand equity and more.</p>

            <p>PIXRITE provides complete Web and interface design, brand building and marketing analysis, search optimization, PPC expert services, and ecommerce that works right and stays fresh.</p>
            
            <h2>Your satisfaction guaranteed is our promise to you.</h2>
               
            <p>Over the last several years, we've learned that nothing pays like making your customers happy. That's why we're giving you our word and commitment, "You'll be taken care of at PIXRITE for however long you decide to stay with us."</p>
            
            <p>Should the occasion arise when you have any concerns or reservations about the services we provide, please feel free to let us know immediately and we'll work to help ensure you have reason to prolong your loyalty.</p>
        </div>

        <div class="page_body--right">
            <a class="services_links brand" href="{{ route('brand-page') }}">
                <h3 class="services_links--heading">BRAND</h3>
                <h5 class="services_links--terms">investigate<span>imagine</span>ignite<span>influence</span></h5>
                
                <p class="services_links--text">Brand equity is a valuable asset and the keystone to building a successful website.</p>
                
                <span class="services_links--arrow"><i class="fa fa-angle-right"></i></span>
            </a>
                    
            <a class="services_links marketing" href="{{ route('seo-page') }}">
                <h3 class="services_links--heading">SEO/SEM</h3>
                <h5 class="services_links--terms">audit<span>analyze</span>optimize<span>convert</span></h5>
                
                <p class="services_links--text">We understand search engine marketing, from PPC auditing to conversion rate optimization and everything in between.</p>
                
                <span class="services_links--arrow"><i class="fa fa-angle-right"></i></span>
            </a>
                
            <a class="services_links web" href="{{ route('web-page') }}">
                <h3 class="services_links--heading">WEB</h3>
                <h5 class="services_links--terms">discover<span>design</span>develop<span>deploy</span>deliver</h5>
                
                <p class="services_links--text">We build complete websites. They come with wireframes, storyboards, rich photography, connections to your business systems and audience</p>
                
                <span class="services_links--arrow"><i class="fa fa-angle-right"></i></span>
            </a>
                    
            <a class="services_links ux" href="{{ route('ux-page') }}">
                <h3 class="services_links--heading">UI/UX</h3>
                <h5 class="services_links--terms">look<span>feel</span>listen<span>construct</span>design<span>test</span>launch</h5>
                
                <p class="services_links--text">You know your customers. We know interface design. Let's create an amazing online experience together.</p>
                
                <span class="services_links--arrow"><i class="fa fa-angle-right"></i></span>
            </a>
        </div>  
    </div> 
</div>

@endsection