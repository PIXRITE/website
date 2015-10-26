@extends('pages')
@section('page_tag', 'ux')
<?php $page_type = 'inside' ?>

@section('seo')
    <title>PIXRITE UX/UI Services</title>
    <meta name="description" content="PIXRITE, a Washington Web Design Studio, providing Brand, SEO/SEM, Web, and UX/UI Design." />
@endsection

@section('content')	
	
<!-- Page Top -->
<div class="page_top"> 
    <div class="section_inner">
        <h1 class="page_top--heading">UI &amp; UX</h1>
    
        <div class="page_top--years">@include('pages._partials.years')</div>
    </div>
</div>


<!-- Page Body -->
<div class="page_body">
    <div class="section_inner clearfix">
        <div class="page_body--left">  
            <h2>Brilliant interface design subliminally delights customers.</h2>
               
            <p >There are only a few design companies in the world that know how to create something that not only looks good on the screen, but also makes everyday users happy.
We're one.</p>

            <h2>UX is where it all begins... and ends.</h2>

            <p>Within every Web application, website, and widget, there exists purpose and passion. Sometimes buttons are obvious. Sometimes they aren't. Sometimes color leads your eyes around the screen - and sometimes it takes an arrow. We began designing interfaces in 2000 for companies like American Express, MyFamily.com, and Franklin Covey. Throughout those projects, we realized how many graphic designers there are out there - who don't have a clue how to put together a design someone can use. They are wonderful at designing something for people to look at - but if it came with buttons, forms, flow, calls to action or anything inbetween, they were lost - and pretended they weren't.</p>

            <p>Your customer is most likely, often introduced to you through your website - or perhaps your application. It's their first impression of your brand, your budget, your size, and even your competency. If your interface is dated, dull, tricky or perhaps just not user-friendly, you're making a bad first impression.</p>

            <p>Finally, your customers are making a subconcious decision every day on whether or not they want to find better products/services from someone else. Sometimes, it's hardly a consideration. Other times, their colleague has recommended something worth their consideration. This is one of the most critical moments for you to be sure you have your ease of use, pleasing presentation and utility beyond need all in a row. With today's technology, there are so many options to choose from for what they need, that you can't afford not to be selling over and over again. Let us help your user interface say everything for you - and do the selling!</p>

            <h2>The best interfaces never sleep.</h2>
                 
            <aside class="quote">
                <p class="quote--text">"Serving a customer once is great, but success comes from repeat business."</p>
                
                <p class="quote--credit">Lark Meadows Mapes, PIXRITE Content</p>    
            </aside>
                    
            <p>We've helped companies nationwide experience their highest ROI by moving their focus to their existing customers. Even more powerful than a viral video on YouTube® or a million dollar slogan, are the spoken words of your happy customers.</p>

            <p>Whether you're looking to improve the look and feel of your internal systems or the widget you've distributed across the Web, we can provide a custom user experience that gets used!</p>
        </div>


        <div class="page_body--right">
            <div class="service_box left">
               <h5 class="service_box--heading">New GUI Design</h5>
               
               <p class="service_box--text">Designing a new interface requires audience and market analysis, functional vision and a little bit of magic. We handcraft your wireframes, build conceptual walkthroughs, test your audiences and then paint your brand right over the top of everything.</p>
               
               <a class="service_box--link" href="{{ route('hire-page') }}">LET'S GET STARTED</a>               
            </div>

            <div class="service_box">
               <h5 class="service_box--heading">GUI Redesign</h5>
               
               <p class="service_box--text">You know your customers and you've realized your application's face isn't living up to its awesome technology. Let us have a look. Usually reskinning an application can be much less involved that starting from scratch.</p>
               
               <a class="service_box--link" href="{{ route('hire-page') }}">LET'S GET STARTED</a>               
            </div>

            <div class="service_box right">
               <h5 class="service_box--heading">GUI Enhancement</h5>
               
               <p class="service_box--text">Need to push your interface over the edge? From custom icons to skinned widgets, we can add beauty and usability to your project without stepping on others' ideas. After all, no one wants to lose money they've already invested!</p>
               
               <a class="service_box--link" href="{{ route('hire-page') }}">LET'S GET STARTED</a>               
            </div>
            
            <img class="service--image" src="../img/gui_full_01.png"> 
           
            <h5 class="service--heading">Application &amp; UX Services</h5>

            <ul class="service--list">
                <li>Widget development</li>
                <li>Widget strategy &amp; implementation</li>
                <li>Dashboard &amp; control panels</li>
                <li>RFP/RFQ automation</li>
                <li>Content management systems</li>
                <li>Custom application integration</li>
                <li>WPF Development</li>
                <li>Expression® &amp; Silverlight®</li>
                <li>XML translation</li>
                <li>Custom adapters</li>
                <li>.NET Web 2.0 applications</li>
                <li>MSSQL database engineering</li>
                <li>Wireframe and prototyping</li>
                <li>UX analysis</li>
                <li>Focus group studies</li>
            </ul>
        </div>
    </div>
</div> 
@endsection