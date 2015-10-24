@extends('pages')
@section('page_tag', 'web')
<?php $page_type = 'inside' ?>

@section('seo')
    <title>PIXRITE Web Services</title>
    <meta name="description" content="PIXRITE, a Washington Web Design Studio, providing Brand, SEO/SEM, Web, and UX/UI Design." />
@endsection

@section('content')
   
<!-- Header -->
@include('pages._partials.header')
	
	
<!-- Page Top -->
<div class="page_top"> 
    <div class="section_inner">
        <h1 class="page_top--heading">Web</h1>
    
        <div class="page_top--years">@include('pages._partials.years')</div>
    </div>
</div>


<!-- Page Body -->
<div class="page_body">
    <div class="section_inner">
        <div class="page_body--left">  
            <h2>Custom website design speaks your brand and delights audiences.</h2>
                   
            <aside class="quote">
                <p class="quote--text">"The best website designs feel like they were meant to be coded. The cleanest code feels like an artistic masterpiece. When you combine both of these ideals, you end up with a PIXRITE solution that loads fast and looks good."
                </p>

                <p class="quote--credit">Andrew Baugh, PIXRITE Development</p>    
            </aside>
                    
            <p>The best web designers produce sites that stand on a foundation of great architecture and efficient coding. A truly beautiful website: performs across browser technologies, is easy to maintain, and converts visitors to loyal customers!</p>

            <p>If you hire a website design agency and they start sending you previews in PDF format, don't waste any more time. You've just bumped into a design house who can probably make masterpieces in the printed world. But on screen, they're just not getting it.</p>

            <p>Websites look best in Photoshop because you don't have to worry about dpi, complicated press color profiles or font managers. Once you have an approved design, you don't have to export it to another program that handles rasterized image optimimzation. Intead, it's ready to slice and dice - because you've designed it within the same environment it will ultimately be viewed in. (And that's one of the only secrets to great site design that we'll share with you!)</p>

            <h2>Site launch is just the beginning.</h2>

            <p>Many local Washington businesses are intimidated by the work involved in keeping a site fresh. We offer several site maintenance and optimization packages including services like: refreshing content, email newsletters and subscription management, email campaigns built off your site analytics and more!</p>
        </div>


        <div class="page_body--right">
            <div class="service_box left">
               <h5 class="service_box--heading">New Site Design</h5>
               
               <p class="service_box--text">Our Web design experts work from your existing brand to deliver a rich online presence that speaks to each of your target audiences. We'll design, build and launch the site for you while providing domain and hosting services as needed.</p>
               
               <a class="service_box--link" href="{{ route('hire-page') }}">LET'S GET STARTED</a>               
            </div>
            
            <div class="service_box">
               <h5 class="service_box--heading">Web Redesign</h5>
               
               <p class="service_box--text">Time to get that content management system (CMS) you've always wanted? Maybe you just rebranded and you want a fresh look online? We're happy to incorporate your new direction with your existing site.</p>
               
               <a class="service_box--link" href="{{ route('hire-page') }}">LET'S GET STARTED</a>               
            </div>
            
            <div class="service_box right">
               <h5 class="service_box--heading">Maintenance</h5>
               
               <p class="service_box--text">We all know the value of having fresh content and frequent updates. PIXRITE specializes in traffic website analysis and optimization. We'll keep track of the data, report it to you, kindly suggest improvements and implement them!</p>
               
               <a class="service_box--link" href="{{ route('hire-page') }}">LET'S GET STARTED</a>               
            </div>
            
            <img class="service--image" src="../img/web_full_01.png">
            
            <h5 class="service--heading">Web Services</h5>
            
            <ul class="service--list">
                <li>Custom Web design</li>
                <li>Website audit</li>
                <li>Online UX analysis</li>
                <li>Local Web strategy</li>
                <li>Website wireframe</li>
                <li>Keyword analysis</li>
                <li>Local search marketing</li>
                <li>Local search optimization</li>
                <li>Conversion rate optimization</li>
                <li>Washington conversion rate consulting</li>
                <li>Content and Article marketing</li>
                <li>PPC auditing</li>
                <li>Website build</li>
                <li>Flash® animation</li>
                <li>Website template manipulation</li>
                <li>Washington website hosting</li>
                <li>Domain acquisition</li>
                <li>Domain monitoring</li>
                <li>Domain managemen</li>
            </ul>
        </div>  
    </div>
</div> 
@endsection