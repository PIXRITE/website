@extends('pages')
@section('page_tag', 'work')
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
                <a class="work--link js-imagePopupLink" href="img/work/brand-01-large.jpg">
					<img class="work--image brand" src="img/work/brand-01-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-01-large.jpg">
					<img class="work--image web" src="img/work/brand-01-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-01-large.jpg">
					<img class="work--image ux" src="img/work/brand-01-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-01-large.jpg">
					<img class="work--image brand" src="img/work/brand-01-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-01-large.jpg">
					<img class="work--image ux" src="img/work/brand-01-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-01-large.jpg">
					<img class="work--image web" src="img/work/brand-01-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-01-large.jpg">
					<img class="work--image ux" src="img/work/brand-01-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-01-large.jpg">
					<img class="work--image brand" src="img/work/brand-01-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-01-large.jpg">
					<img class="work--image brand" src="img/work/brand-01-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-01-large.jpg">
					<img class="work--image ux" src="img/work/brand-01-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-01-large.jpg">
					<img class="work--image web" src="img/work/brand-01-thumb.jpg" alt="Brand Example">
				</a>
            </li>
        </ul>
        
        
        <div class="work_carousel">
           <div class="work_carousel--prev js-carouselPrev"><i class="fa fa-angle-left"></i></div>
           
            <ul class="work_carousel--list js-carousel">
                <li class="work_carousel--item">
                    <p class="work_quote--text"><i class="fa fa-quote-left"></i> We're very pleased with the design of our new website. PIXRITE out-performs other high-end agencies with their dedication to meeting the deadlines and staying within budget. With very little direction, they ran with our ideas and produced outstanding results."</p>

                    <p class="work_quote--author">Becton Loveless</p>
                    <p class="work_quote--company">CEO | Compucert</p>
                </li>
            </ul>
            
           <div class="work_carousel--next js-carouselNext"><i class="fa fa-angle-right"></i></div>
        </div>
        
        
        <ul class="work--list">
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-01-large.jpg">
					<img class="work--image brand" src="img/work/brand-01-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-01-large.jpg">
					<img class="work--image brand" src="img/work/brand-01-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-01-large.jpg">
					<img class="work--image web" src="img/work/brand-01-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-01-large.jpg">
					<img class="work--image ux" src="img/work/brand-01-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-01-large.jpg">
					<img class="work--image brand" src="img/work/brand-01-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-01-large.jpg">
					<img class="work--image ux" src="img/work/brand-01-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-01-large.jpg">
					<img class="work--image web" src="img/work/brand-01-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-01-large.jpg">
					<img class="work--image ux" src="img/work/brand-01-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-01-large.jpg">
					<img class="work--image brand" src="img/work/brand-01-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-01-large.jpg">
					<img class="work--image brand" src="img/work/brand-01-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-01-large.jpg">
					<img class="work--image ux" src="img/work/brand-01-thumb.jpg" alt="Brand Example">
				</a>
            </li>
            
            <li class="work--item">
                <a class="work--link js-imagePopupLink" href="img/work/brand-01-large.jpg">
					<img class="work--image web" src="img/work/brand-01-thumb.jpg" alt="Brand Example">
				</a>
            </li>
        </ul>
    </div> 
</div>

@endsection


@section('foot_script')

<script type="text/javascript">    
    
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