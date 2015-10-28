@extends('pages')
@section('page_tag', 'brand')
<?php $page_type = 'inside' ?>

@section('seo')
    <title>PIXRITE Testimonials</title>
    <meta name="description" content="PIXRITE, a Washington Web Design Studio, providing Brand, SEO/SEM, Web, and UX/UI Design." />
@endsection

@section('content')
	
<!-- Page Top -->
<div class="page_top"> 
    <div class="section_inner">
        <h1 class="page_top--heading">Testimonials</h1>
    
        <div class="page_top--years">@include('pages._partials.years')</div>
    </div>
</div>


<!-- Page Body -->
<div class="page_body">
    <div class="section_inner clearfix">
        <div class="page_body--right">  
            <div class="testimonial_quote">
                <p class="testimonial_quote--text"><i class="fa fa-quote-left"></i> We're very pleased with the design of our new website. PIXRITE out-performs other high-end agencies with their dedication to meeting the deadlines and staying within budget. With very little direction, they ran with our ideas and produced outstanding results.</p>
                
                <p class="testimonial_quote--author">Becton Loveless</p>
                <p class="testimonial_quote--company">CEO | Compucert</p>
                
                <img src="img/client_logos/compucert.jpg" alt="Compucert" class="testimonial_quote--logo">
            </div>
            
            <div class="testimonial_quote">
                <p class="testimonial_quote--text"><i class="fa fa-quote-left"></i> PIXRITE has done a tremendous job of overhauling the look and feel of two of our company’s websites. Our requirements to bring together disjointed brands within current, engaging websites was met and our expectations were exceeded. PIXRITE took the time to understand our business, and to understand our needs. The time spent on planning site layout and template design greatly aided in both the speed and effectiveness of the project. I’d highly recommend the design team at Pixrite.</p>
                
                <p class="testimonial_quote--author">Scott McGowan</p>
                <p class="testimonial_quote--company">Director of Marketing | Solid Concepts</p>
                
                <img src="img/client_logos/solid_concepts.jpg" alt="Solid Concepts" class="testimonial_quote--logo">
            </div>
            
            <div class="testimonial_quote">
                <p class="testimonial_quote--text"><i class="fa fa-quote-left"></i> When we were looking to update our website, we decided to go with PIXRITE, and I'm happy we did. Before beginning, they met with me to get an understanding of our business and what we do. We discussed my expectations and goals for our website. They put together a plan for our site, and once we reviewed it together, gave me a clear list of action items for both of us. They built a great looking e-commerce site and helped me through the entire process, from adding content to setting up shipping and credit card acceptance. They added custom functions to our website based on our needs, and worked with me to make sure I was satisfied with the way everything looked and functioned. I would highly recommend PIXRITE to anyone looking to build an e-commerce site. Their customer service is great, and the range of services they offer will help us continue to make our website successful.</p>
                
                <p class="testimonial_quote--author">Christy Burnham</p>
                <p class="testimonial_quote--company">General Manager | Recreation Outlet</p>
                
                <img src="img/client_logos/recreation_outlet.jpg" alt="Recreation Outlet" class="testimonial_quote--logo">
            </div>
            
            <div class="testimonial_quote">
                <p class="testimonial_quote--text"><i class="fa fa-quote-left"></i> I wanted to write tell you thank you for the excellent design work you did for our company folder and brochure. I really appreciate your creativeness and input when I wasn’t sure what I really wanted. You have great ideas and somehow figured out what I was wanting but couldn’t get it across. The quality of work and price is second to none. I would be willing to recommend you and your company anytime. Again thank you for making us look good!</p>
                
                <p class="testimonial_quote--author">Jerry Pennock</p>
                <p class="testimonial_quote--company">President | Complete Restoration</p>
                
                <img src="img/client_logos/complete_restoration.jpg" alt="Complete Restoration" class="testimonial_quote--logo">
            </div>
        </div>
        
        
        
        <div class="page_body--left testimonials_content">  
            <h2>All of our customers leave some words behind.</h2>

            <p >When we capture the moment where you share your drive, idea, devotion, passion, love, intent, heart and dream—then we embrace that moment so your project becomes our own and we can finish it for reasons beyond fame and game. Ask any PIXRITE employee what our mission is and they will tell you it is seeing the reward received by those who ignite the ideas in all of us. We are designers, programmers, strategists and dreamers... but we're also moms, dads, sons and daughters who live by the creed of do unto others.</p>

            <h3>Leave us your comments as well...</h3>

            <p>If you feel like giving us a piece of your mind, just fill in the information below and we'll check it out. If you've got nice things to say, chances are, it will end up on our site. If not, we will be in touch soon to see how we can make things right.</p>
           
            <form id="form" class="testimonials_form js-slidingForm" action="{{ route('testimonials-form') }}" method="POST">
            @if (count($errors) > 0)
                <div class="form_errors">
                    <ul class="form_errors--list">
                        @foreach ($errors->all() as $error)
                            <li class="form_errors--item">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
              
               @if( Session::has('form-thanks') )
                  <div class="form_thanks">
                    <h3 class="form_thanks--heading">Form Submitted!</h3>
                    <p class="form_thanks--text">{{ Session::get('form-thanks') }}</p>
                  </div>
                @endif
                
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <!-- Name -->
                <div class="form_block">
                    <label class="form--label" for="name">Name <span>(required)</span></label>
                    <input class="form--input" type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}" required>
                </div>

                <!-- Title -->
                <div class="form_block left">
                    <label class="form--label" for="title">Title <span>(required)</span></label>
                    <input class="form--input" type="text" name="title" id="title" placeholder="Title" value="{{ old('title') }}" required>
                </div>

                <!-- Company -->
                <div class="form_block right">
                    <label class="form--label" for="company">Company <span>(required)</span></label>
                    <input class="form--input" type="text" name="company" id="company" placeholder="Company" value="{{ old('company') }}" required>
                </div>

                <!-- Email -->
                <div class="form_block">
                    <label class="form--label" for="email">Email Address <span>(required)</span></label>
                    <input class="form--input" type="email" name="email" id="email" placeholder="Email Address" value="{{ old('email') }}" required>
                </div>

                <!-- Experience -->
                <div class="form_block">
                    <label class="form--label" for="experience">Experience <span>(required)</span></label>
                    <textarea class="form--textarea" name="experience" id="experience" placeholder="Experience" required>{{ old('experience') }}</textarea>
                </div>

                <!-- Buttons -->
                <div class="form_block buttons">
                    <button class="form--button" type="submit">MAKE ME FAMOUS</button>
                </div>
            </form>
        </div>
    </div>
</div> 
@endsection