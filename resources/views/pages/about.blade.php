@extends('pages')
@section('page_tag', 'about')
<?php $page_type = 'inside' ?>

@section('seo')
    <title>About PIXRITE</title>
    <meta name="description" content="PIXRITE, a Washington Web Design Studio, providing Brand, SEO/SEM, Web, and UX/UI Design." />
@endsection

@section('content')	
	
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
        <div class="page_body--skinny">
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
            
            <p>There's a reason we've stayed busy with business for more than 20 years strictly through customer referrals--we keep our promises!</p>

            <div class="about_header">
                <p class="about_header--number">3</p>
                
                <h3 class="about_header--heading">ONE-STOP WEB SHOP</h3>
                <p class="about_header--text">from strategy to design to analysis!</p>
            </div>
            
            <p>We offer in-house design, development, online marketing and auditing services. In-house means you always enjoy direct access to the PIXRITE team.</p>
        </div>

       
       
<!--
        <div class="page_body--right">
            <div class="about_founder">
                <h3 class="about_founder--heading">Jared Rowe,<span> PIXRITE Founder</span></h3>

                <img class="about_founder--image" src="img/jared_rowe.jpg" alt="Jared Rowe, Founder of PIXRITE">

                <p class="about_founder--text">I'm truly fascinated by people. Creating visuals they can see and react to teaches me something new about myself every time, and those positive reactions ("You read my mind!") feed my passion for what PIXRITE does.</p>
            </div>
            
            <h2 class="about_people--heading">Our Team</h2>
            
            <div class="about_person">
                <h3 class="about_person--heading">Adam Schaffner,<span> Information Technology Guy</span></h3>

                <img class="about_person--image" src="img/jared_rowe.jpg" alt="Jared Rowe, Founder of PIXRITE">

                <p class="about_person--text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sed animi, modi officiis quis velit atque placeat.</p>
            </div>
            
            <div class="about_person">
                <h3 class="about_person--heading">Josh Evensen,<span> Development Guy</span></h3>

                <img class="about_person--image" src="img/jared_rowe.jpg" alt="Jared Rowe, Founder of PIXRITE">

                <p class="about_person--text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sed animi, modi officiis quis velit atque placeat.</p>
            </div>
            
            <div class="about_person">
                <h3 class="about_person--heading">Lark Meadows Mapes,<span> Content &amp; Strategy Gal</span></h3>

                <img class="about_person--image" src="img/jared_rowe.jpg" alt="Jared Rowe, Founder of PIXRITE">

                <p class="about_person--text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sed animi, modi officiis quis velit atque placeat.</p>
            </div>
            
            <div class="about_person">
                <h3 class="about_person--heading">Randy Rawe,<span> Film &amp; Promotion Guy</span></h3>

                <img class="about_person--image" src="img/jared_rowe.jpg" alt="Jared Rowe, Founder of PIXRITE">

                <p class="about_person--text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sed animi, modi officiis quis velit atque placeat.</p>
            </div>
            
            <div class="about_person">
                <h3 class="about_person--heading">Rich Agren,<span> Project Management Guy</span></h3>

                <img class="about_person--image" src="img/jared_rowe.jpg" alt="Jared Rowe, Founder of PIXRITE">

                <p class="about_person--text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sed animi, modi officiis quis velit atque placeat.</p>
            </div>
        </div>
-->
    </div>
</div>

@endsection