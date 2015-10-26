@extends('pages')
@section('page_tag', 'brand')
<?php $page_type = 'inside' ?>

@section('seo')
    <title>PIXRITE Brand Services</title>
    <meta name="description" content="PIXRITE, a Washington Web Design Studio, providing Brand, SEO/SEM, Web, and UX/UI Design." />
@endsection

@section('content')
	
<!-- Page Top -->
<div class="page_top"> 
    <div class="section_inner">
        <h1 class="page_top--heading">Brand</h1>
    
        <div class="page_top--years">@include('pages._partials.years')</div>
    </div>
</div>


<!-- Page Body -->
<div class="page_body">
    <div class="section_inner clearfix">
        <div class="page_body--left">  
            <h2>Help your customers see the brand beyond your logo.</h2>
            
            <aside class="quote">
                <p class="quote--text">"Brand is the feeling your customer walks away with, goes to sleep with and remembers from a handshake. It's an entire identity that should permeate every customer interaction."</p>
                
                <p class="quote--credit">Jared Rowe, PIXRITE CEO &amp; Creative</p>    
            </aside>

            <p >Too many businesses sqander one of their most valuable assets. Your brand should be the most monetized asset your company owns. Some businesses can't imagine spending $5000 for a website, let alone a logo. But think for a moment... with a strong mark that embodies the core values of your company, we're talking about the only symbol (with a chance for instant recognition) that you'll have to offer. Before inventory, before facilities, before employees, and yes, even before an awesome website design, comes brand.</p>

            <h2>Engineer your brand to provide rich ROI and customer satisfaction.</h2>

            <p>Your corporate identity should organically reflect your company's mission, vision and values. When brand reflects who you really are in the marketplace, customers naturally place their trust, and their dollars, in your care.</p>
            
            <p>PIXRITE integrates your brand into every communication vehicle we provide for your business. We have new ideas and proven methods for transforming your brand into the asset it can be.</p>

            <h2>Let rich marketing collateral &amp; strategies deliver your message.</h2>
            
            <p>Even though we began designing on and for the screen, we have over a decade of experience in the printed design world. We've worked at the press, behind the vinyl sign shops and even within corporate design and marketing teams. If you're looking to enhance the vehicles with which you approach your customers, PIXRITE can give the extra value that extends their shelf life beyond the point of ROI.</p>
        </div>


        <div class="page_body--right">
            <!-- Service Boxes -->
            <div class="service_box left">
               <h5 class="service_box--heading">Brand &amp; Strategy</h5>
               
               <p class="service_box--text">Our creative and marketing teams work together to provide you with a complete brand package. You'll walk away knowing exactly how to present your company to its target audiences.</p>
               
               <a class="service_box--link" href="{{ route('hire-page') }}">LET'S GET STARTED</a>               
            </div>

            <div class="service_box">
               <h5 class="service_box--heading">Brand Refresh</h5>
               
               <p class="service_box--text">If you haven't quite reached that "tipping point" yet, we can help you refresh your look and feel. It's less-expensive than a rebrand and can still create enough momentum to push both internal and external limits even further!</p>
               
               <a class="service_box--link" href="{{ route('hire-page') }}">LET'S GET STARTED</a>               
            </div>

            <div class="service_box right">
               <h5 class="service_box--heading">Marketing Services</h5>
               
               <p class="service_box--text">Looking for some collateral, a billboard or maybe even a commercial? Our creative and production teams can make miracles happen for you just as quickly as you need them.</p>
               
               <a class="service_box--link" href="{{ route('hire-page') }}">LET'S GET STARTED</a>               
            </div>
            
            <!-- Service Image -->
            <img class="service--image" src="../img/brand_full_01.png"> 
            
            <!-- Service Lists -->
            <h4 class="service--heading">Brand Design Services</h4>

            <ul class="service--list">
                <li>Brand visibility</li>
                <li>Marketing audit</li>
                <li>Marketing plan</li>
                <li>Internet marketing plan</li>
                <li>Corporate style guide</li>
                <li>PowerPoint® slide deck</li>
                <li>Sales kits</li>
                <li>Brochures</li>
                <li>Pamphlet</li>
                <li>Product packaging</li>
                <li>Signs &amp; billboards</li>
                <li>Business cards</li>
                <li>Catalogs</li>
                <li>Clothing</li>
                <li>Trade show booths</li>
                <li>Magazines</li>
                <li>Ad campaigns</li>
            </ul>   
        </div>
    </div>
</div> 
@endsection