@extends('pages')
@section('page_tag', 'marketing')
<?php $page_type = 'inside' ?>

@section('seo')
    <title>PIXRITE SEO/SEM Services</title>
    <meta name="description" content="PIXRITE, a Washington Web Design Studio, providing Brand, SEO/SEM, Web, and UX/UI Design." />
@endsection

@section('content')	
	
<!-- Page Top -->
<div class="page_top"> 
    <div class="section_inner">
        <h1 class="page_top--heading">SEO/SEM</h1>
    
        <div class="page_top--years">@include('pages._partials.years')</div>
    </div>
</div>


<!-- Page Body -->
<div class="page_body">
    <div class="section_inner clearfix">
        <div class="page_body--left">  
            <h2>Get found with local search optimization.</h2>
                   
            <aside class="quote">
                <p class="quote--text">"The growth in wireless Internet access and smartphones means that savvy marketers are transferring phone directory budgets to local search optimization."
                </p>
                
                <p class="quote--credit">Lark Meadows Mapes, PIXRITE SEO Strategy &amp; Content</p>    
            </aside>

            <p>Local Search Optimization is currently one of our more popular services. It's less expensive and more effective than traditional search engine optimization simply because the competition decreases. It's also the best replacement for your old school phone directory ad. Even phonebook companies are replacing their traditional services with new and improved online listings and directory services. Search engines continue to refine their accuracy, making the need to claim your placement in local searches critical to your continued success. We can help.</p>

            <h2>Organic Search Results: A very important part of online diet!</h2>

            <p>Organic is the new green! There are a lot (and we mean A LOT) of companies out there who could spend half as much money on organic search engine optimization and reap greater rewards than they're getting from their sponsored efforts. These are the results that have always and will forever get the most clicks. Nothing turns people off like a commercial--and the organic side of search results provide genuine content.</p>

            <p>SEO companies are a dime a dozen--but ethics are as rare in this industry as they are in gambling. We are the folks who build "real" into your site. We add value and we're legit. If you're looking for a negotiator to buy links at the lowest price, please move on. We believe in the theory of increasing your traffic by increasing your offer. We'll optimize your site for poeple--and the search engines will come.</p>

            <h2>PPC campaigns that convert.</h2>

            <p>What possible good will your dollars do on Google Adwords® if you don't have landing pages that convert? PIXRITE is a one-stop-shop for your online advertising needs. We have national connections to help us segment your campaigns into the right markets. We know how to capture that "info past the click".</p>

            <p>Many companies underestimate the resources required to run successful PPC advertising. We'll help you form your strategy, find your optimal words, pick your target audiences, design your landing pages, collect your analytics and increase the value of your PPC dollars!</p>
        </div>


        <div class="page_body--right">
            <div class="service_box left">
               <h5 class="service_box--heading">Local Search</h5>
               
               <p class="service_box--text">It's time to get seen online. Phone books are paper weights. If someone types your specialty into Google, your business needs to show up right next to that map at the top of the page and again, just underneath it.</p>
               
               <a class="service_box--link" href="{{ route('hire-page') }}">LET'S GET STARTED</a>               
            </div>

            <div class="service_box">
               <h5 class="service_box--heading">Organic SEO</h5>
               
               <p class="service_box--text">Now is the time to start your organic SEO efforts. They can take a while to show up, but the results offer the highest ROI and potential earnings in the long run.</p>
               
               <a class="service_box--link" href="{{ route('hire-page') }}">LET'S GET STARTED</a>               
            </div>

            <div class="service_box right">
               <h5 class="service_box--heading">PPC Management</h5>
               
               <p class="service_box--text">Do you have time to keep your pay-per-click campaign up to date on an hourly or even daily basis? Whether you're spending tens or thousands per month, we can help you account for every dollar!</p>
               
               <a class="service_box--link" href="{{ route('hire-page') }}">LET'S GET STARTED</a>               
            </div>

            <img class="service--image" src="../img/seo_lrg_01.jpg">

            <h5 class="service--heading">SEO/SEM Services</h5>

            <ul class="service--list">
                <li>Keyword analysis</li>
                <li>Local search optimization</li>
                <li>Washington internet marketing</li>
                <li>Organic seo</li>
                <li>Sponsored seo</li>
                <li>Google Analytics consulting</li>
                <li>Conversion rate optimization</li>
                <li>Paid search placement</li>
                <li>Internet directory placement</li>
                <li>Legitimate link building</li>
                <li>Social media campaigns</li>
                <li>Link exchange</li>
                <li>PPC expert services</li>
                <li>Pay per click campaigns</li>
            </ul>    
        </div>
    </div>
</div> 
@endsection