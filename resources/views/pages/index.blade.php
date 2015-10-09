@extends('pages')
@section('page_tag', 'home')

@section('content')
	
<!-- Page Top -->
<div class="page_top index">
    @include('pages._partials.header')
    
    <h1 class="page_top--heading">Some Short, Catchy Headline</h1>
    
    <!-- Services -->
    <ul class="services_list">
        <li class="services_list--item first">
            <a href="/" class="services_list--link brand">BRAND</a>
        </li>
        <li class="services_list--item second">
            <a href="/" class="services_list--link marketing">DIGITAL <span>MARKETING</span></a>
        </li>
        <li class="services_list--item">
            <a href="/" class="services_list--link web">WEB</a>
        </li>
        <li class="services_list--item last">
            <a href="/" class="services_list--link ux">UI/UX</a>
        </li>
    </ul>
    
    @include('pages._partials.page-bar')
</div>


<!-- Page Body -->
<div class="page_body">
    
    <!-- Quotes -->
    <div class="home_quotes">
       
        <div class="home_quotes--item">
            <p class="home_quotes--text">"PIXRITE has the unique ability to work with customers of any size, quickly sum up their unique need, pour into it their creativity and pop out an astoundingly elegant, yet simple, solution that also has the benefit of being cost effective. Their work is easily on par with the New York firms we typically deal with, while being much more flexible and much faster."</p>

            <p class="home_quotes--author">Billy Nerenberg</p>
            <p class="home_quotes--company">Group Sales &amp; Marketing Manager | Microsoft</p>
        </div>
        
        <div class="home_quotes--prev"><i class="fa fa-angle-left"></i></div>
        <div class="home_quotes--next"><i class="fa fa-angle-right"></i></div>
    </div>
    
    <!-- Customers -->
    <ul class="home_customers">
        <li class="home_customers--item"><img src="img/customer_logos/american_express_sm.png" alt=""></li>
        <li class="home_customers--item"><img src="img/customer_logos/apple_rock_sm.png" alt=""></li>
        <li class="home_customers--item"><img src="img/customer_logos/best_woods_sm.png" alt=""></li>
        <li class="home_customers--item"><img src="img/customer_logos/db_healthcare_sm.png" alt=""></li>
        <li class="home_customers--item"><img src="img/customer_logos/intel_sm.png" alt=""></li>
        <li class="home_customers--item"><img src="img/customer_logos/ips_sm.png" alt=""></li>
        <li class="home_customers--item"><img src="img/customer_logos/monitronics_sm.png" alt=""></li>
        <li class="home_customers--item"><img src="img/customer_logos/platinum_sm.png" alt=""></li>
        <li class="home_customers--item"><img src="img/customer_logos/safeguard_sm.png" alt=""></li>
        <li class="home_customers--item"><img src="img/customer_logos/security_one_sm.png" alt=""></li>
        <li class="home_customers--item"><img src="img/customer_logos/software_unlimited_sm.png" alt=""></li>
        <li class="home_customers--item"><img src="img/customer_logos/streamcast_sm.png" alt=""></li>
    </ul>
</div>

@endsection