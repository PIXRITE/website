@extends('pages')
@section('page_tag', 'about')
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
        <h1 class="page_top--heading">About Us</h1>
    
        <div class="page_top--years">@include('pages._partials.years')</div>
    </div>
</div>


<!-- Page Body -->
<div class="page_body">
    <div class="section_inner">
        <div class="page_body--left">
            <h2>Amazing web starts here.</h2>
            
            <p>PIXRITE is a Washington Internet marketing company. We specialize in Web design that builds your brand using the latest Web technologies and search optimization practices.</p>

            <div class="about_header">
                <p class="about_header--number">1</p>
                
                <h3 class="about_header--heading">GET YOUR MONEY'S WORTH</h3>
                <p class="about_header--text">because every dollar counts!</p>
            </div>
    
            <p>We think Web marketing should be as easy as riding a bike. Upon project completion, you'll receive original artwork, documentation, and one week with training wheels, free of charge. After that, priority customer service keeps your site moving forward in a yellow jersey.</p>

            <div class="about_header">
                <p class="about_header--number">2</p>
                   
                <h3 class="about_header--heading">YOU CAN TRUST PIXRITE</h3>
                <p class="about_header--text">from day one!</p>
            </div>
            
            <p>There's a reason we've stayed busy with business for more than 10 years strictly through customer referrals--we keep our promises!</p>

            <div class="about_header">
                <p class="about_header--number">3</p>
                
                <h3 class="about_header--heading">ONE-STOP WEB SHOP</h3>
                <p class="about_header--text">from strategy to design to analysis!</p>
            </div>
            
            <p>We offer in-house design, development, online marketing and auditing services. In-house means you always enjoy direct access to the PIXRITE team.</p>
        </div>

       
       
        <div class="page_body--right">
            <div class="about_founder">
                <h3 class="about_founder--heading">Jared Rowe, PIXRITE Founder</h3>

                <img class="about_founder--image" src="img/jared_rowe.jpg" alt="Jared Rowe, Founder of PIXRITE">

                <p>I'm truly fascinated by people. Creating visuals they can see and react to teaches me something new about myself every time, and those positive reactions ("You read my mind!") feed my passion for what PIXRITE does.</p>

                <ul>
                    <li>Provided website, marketing and/or rich media services for Intel, Sun Microsystems, American Express, StreamCast Networks and other companies coast to coast</li>

                    <li>Completely branded and established a recognizable online presence for more than 5 successful startup companies within the last 4 years</li>

                    <li>Directed multiple online communication strategies, designs and applications for leaders within the scrapbooking, alarm sales and software industries</li>
                </ul>

                <p>Family is everything. I play piano by ear, still practice simple sleight of hand with my boys and try to seem creative to my amazing wife once in a while. Chips and Queso is my weakness and I've pushed every car I've owned past 100mph. I'm a rain maker at heart and will forever be proud of growing up in Oregon.</p>
            </div>
        </div>
    </div>
</div>

@endsection