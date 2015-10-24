<header class="site_header">
    <div class="section_inner">
        @if( $page_type != 'landing' )
        <!-- Logo -->
        <div class="site_header--logo">@include('pages._partials.logo')</div>
        @endif

        <!-- Nav -->
        <nav class="site_nav">
           <ul class="site_nav--menu">
               @if( $page_type != 'landing' )
               <li class="site_nav--item">
                   <a class="site_nav--link home" href="{{ route('index-page') }}">HOME</a>
               </li>
               @endif

               <li class="site_nav--item">
                   <a class="site_nav--link work" href="{{ route('work-page') }}">WORK</a>
               </li>

               <li class="site_nav--item">
                   <a class="site_nav--link services" href="{{ route('services-page') }}">SERVICES</a>
                   
                   @if( $page_type != 'landing' )
                       <ul class="site_nav--submenu">
                           <li class="site_nav--submenu--item">
                               <a class="site_nav--submenu--link brand" href="{{ route('brand-page') }}">BRAND</a>
                           </li>
                           
                           <li class="site_nav--submenu--item">
                               <a class="site_nav--submenu--link marketing" href="{{ route('seo-page') }}">SEO/SEM</a>
                           </li>
                           
                           <li class="site_nav--submenu--item">
                               <a class="site_nav--submenu--link web" href="{{ route('web-page') }}">WEB</a>
                           </li>
                           
                           <li class="site_nav--submenu--item">
                               <a class="site_nav--submenu--link ux" href="{{ route('ux-page') }}">UI/UX</a>
                           </li>
                       </ul>
                   @endif
               </li>

               <li class="site_nav--item">
                   <a class="site_nav--link about" href="{{ route('about-page') }}">ABOUT</a>
               </li>

               <li class="site_nav--item">
                   <a class="site_nav--link selected hire" href="{{ route('hire-page') }}">HIRE US</a>
               </li>
           </ul>
        </nav>
    </div>
</header>