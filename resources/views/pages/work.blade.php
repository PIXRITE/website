@extends('pages')
@section('page_tag', 'work')
<?php $page_type = 'inside' ?>

@section('seo')
    <title>PIXRITE Past Work</title>
    <meta name="description" content="PIXRITE, a Washington Web Design Studio, providing Brand, SEO/SEM, Web, and UX/UI Design." />
@endsection

@section('content')
   
<!-- Header -->
@include('pages._partials.header')
	
	
<!-- Page Top -->
<div class="page_top"> 
    <div class="section_inner">
        <h1 class="page_top--heading">Our Past Work</h1>
    
        <div class="page_top--years">@include('pages._partials.years')</div>
    </div>
</div>


<!-- Page Body -->
<div class="page_body">
    <div class="section_inner">
        <h2 class="work--heading">Where experience meets engagement.</h2>
        
        <p class="work--text">We approach every project with a question. "What makes a successful customer engagement for this client?" Wrapped around that question are details: your vision, your value proposition, your brand, your history. We transform your details into a user experience designed to produce and reflect the satisfaction of your customers.</p>
        
        <ul class="work--list">
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-01-large.jpg">
					<img class="work--image brand" src="img/work/brand-01-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-02-large.jpg">
					<img class="work--image brand" src="img/work/brand-02-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/web-01-large.jpg">
					<img class="work--image web" src="img/work/web-01-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/ux-01-large.jpg">
					<img class="work--image ux" src="img/work/ux-01-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-03-large.jpg">
					<img class="work--image brand" src="img/work/brand-03-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/web-02-large.jpg">
					<img class="work--image web" src="img/work/web-02-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/ux-02-large.jpg">
					<img class="work--image ux" src="img/work/ux-02-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/web-03-large.jpg">
					<img class="work--image web" src="img/work/web-03-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/ux-03-large.jpg">
					<img class="work--image ux" src="img/work/ux-03-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-04-large.jpg">
					<img class="work--image brand" src="img/work/brand-04-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/ux-04-large.jpg">
					<img class="work--image ux" src="img/work/ux-04-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/web-04-large.jpg">
					<img class="work--image web" src="img/work/web-04-thumb.jpg" alt="Brand Example">
				</a>
            </li>
        </ul>
        
        
        <div class="jcarousel-wrapper">
            <div class="jcarousel">
                <ul>
                    <li>
                        <p class="work_quote--text"><i class="fa fa-quote-left"></i> When we were looking to update our website, we decided to go with PIXRITE, and I'm happy we did. Before beginning, they met with me to get an understanding of our business and what we do. We discussed my expectations and goals for our website. They put together a plan for our site, and once we reviewed it together, gave me a clear list of action items for both of us. They built a great looking e-commerce site and helped me through the entire process, from adding content to setting up shipping and credit card acceptance... I would highly recommend PIXRITE to anyone looking to build an e-commerce site. Their customer service is great, and the range of services they offer will help us continue to make our website successful.</p>

                        <p class="work_quote--author">Christy Burnham</p>
                        <p class="work_quote--company">General Manager | Recreation Outlet</p>
                    </li>

                    <li>
                        <p class="work_quote--text"><i class="fa fa-quote-left"></i> PIXRITE has done a tremendous job of overhauling the look and feel of two of our company’s websites. Our requirements to bring together disjointed brands within current, engaging websites was met and our expectations were exceeded. PIXRITE took the time to understand our business, and to understand our needs. The time spent on planning site layout and template design greatly aided in both the speed and effectiveness of the project. I’d highly recommend the design team at Pixrite.</p>

                        <p class="work_quote--author">Scott McGowan</p>
                        <p class="work_quote--company">Director of Marketing | Solid Concepts</p>
                    </li>

                    <li>
                        <p class="work_quote--text"><i class="fa fa-quote-left"></i> PIXRITE has the unique ability to work with customers of any size, quickly sum up their unique need, pour into it their creativity and pop out an astoundingly elegant, yet simple, solution that also has the benefit of being cost effective. Their deliverables were always on time and exceeded our very-high Microsoft expectations. Their work is easily on par with the New York firms we typically deal with, while being much more flexible and much faster. Very highly recommended.</p>

                        <p class="work_quote--author">Billy Nerenberg</p>
                        <p class="work_quote--company">Group Sales &amp; Marketing Manager | Microsoft</p>
                    </li>
                    
                    <li>
                        <p class="work_quote--text"><i class="fa fa-quote-left"></i> We're very pleased with the design of our new website. PIXRITE out-performs other high-end agencies with their dedication to meeting the deadlines and staying within budget. With very little direction, they ran with our ideas and produced outstanding results.</p>

                        <p class="work_quote--author">Becton Loveless</p>
                        <p class="work_quote--company">CEO | Compucert</p>
                    </li>

                    <li>
                        <p class="work_quote--text"><i class="fa fa-quote-left"></i> 
I wanted to write tell you thank you for the excellent design work you did for our company folder and brochure. I really appreciate your creativeness and input when I wasn’t sure what I really wanted. You have great ideas and somehow figured out what I was wanting but couldn’t get it across. The quality of work and price is second to none. I would be willing to recommend you and your company anytime. Again thank you for making us look good!</p>

                        <p class="work_quote--author">Jerry Pennock</p>
                        <p class="work_quote--company">President | Complete Restoration</p>
                    </li>
                </ul>
            </div>

            <a href="#" class="jcarousel-control-prev"><i class="fa fa-angle-left"></i></a>
            <a href="#" class="jcarousel-control-next"><i class="fa fa-angle-right"></i></a>
        </div>
        
        
        <ul class="work--list">
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-05-large.jpg">
					<img class="work--image brand" src="img/work/brand-05-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/ux-05-large.jpg">
					<img class="work--image ux" src="img/work/ux-05-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/web-05-large.jpg">
					<img class="work--image web" src="img/work/web-05-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/ux-06-large.jpg">
					<img class="work--image ux" src="img/work/ux-06-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-06-large.jpg">
					<img class="work--image brand" src="img/work/brand-06-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/web-06-large.jpg">
					<img class="work--image web" src="img/work/web-06-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-07-large.jpg">
					<img class="work--image brand" src="img/work/brand-07-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/web-07-large.jpg">
					<img class="work--image web" src="img/work/web-07-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-08-large.jpg">
					<img class="work--image brand" src="img/work/brand-08-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-09-large.jpg">
					<img class="work--image brand" src="img/work/brand-09-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/ux-07-large.jpg">
					<img class="work--image ux" src="img/work/ux-07-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/web-08-large.jpg">
					<img class="work--image web" src="img/work/web-08-thumb.jpg" alt="Brand Example">
				</a>
            </li>
        </ul>
    </div> 
</div>

@endsection


@section('foot_script')

<script type="text/javascript"> 
    // jCarousel
    $('.jcarousel')
        .on('jcarousel:reload jcarousel:create', function () {
            var carousel = $(this),
                width = carousel.innerWidth();

//                    if (width >= 600) {
//                        width = width / 3;
//                    } else if (width >= 350) {
//                        width = width / 2;
//                    }

            carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
        })
        .jcarousel({
            wrap: 'circular'
        });

    $('.jcarousel-control-prev')
        .jcarouselControl({
            target: '-=1'
        });

    $('.jcarousel-control-next')
        .jcarouselControl({
            target: '+=1'
        });
    
    // Image Popup
    $('.js-imagePopupLink').magnificPopup({
        type: 'image',
        cursor: 'mfp-zoom-out-cur',
        verticalFit: true,
        tError: '<a href="%url%">The image</a> could not be loaded.',

        zoom: {
            enabled: true,

            duration: 300,
            easing: 'ease-in-out',

            opener: function(openerElement) {
                return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
        },
        
        gallery: {
            enabled: true
        }
	});
</script>

@endsection