<div class="site_footer">
   <div class="section_inner">
       
       <!-- Footer Menu -->
       <ul class="site_footer--menu">
           <li class="site_footer--item">
               <a class="site_footer--link" href="{{ route('index-page') }}">HOME</a>
           </li>

           <li class="site_footer--item">
               <a class="site_footer--link" href="{{ route('work-page') }}">WORK</a>
           </li>

           <li class="site_footer--item">
               <a class="site_footer--link" href="{{ route('services-page') }}">SERVICES</a>
           </li>

           <li class="site_footer--item">
               <a class="site_footer--link" href="{{ route('about-page') }}">ABOUT</a>
           </li>

           <li class="site_footer--item">
               <a class="site_footer--link" href="{{ route('contact-page') }}">CONTACT</a>
           </li>

           <li class="site_footer--item">
               <a class="site_footer--link selected" href="{{ route('hire-page') }}">HIRE US</a>
           </li>
       </ul>
   
       <!-- Contact Info -->
       <div class="site_footer--contact">
           <p class="site_footer--contact--text">{{ $email }}</p>
           <p class="site_footer--contact--text">{{ $phone }}</p>
       </div>
   
       <!-- About Box -->
       <div class="site_footer--about">
           <div class="site_footer--about--logo">@include('pages._partials.logo')</div>

           <p class="site_footer--about--text">PIXRITE, LLC is a full-service Web design company in Oregon with clients from coast to coast. Let us introduce your Web presence to results and you'll never look back.</p>
       </div>
   
       <!-- Social Media -->
       <ul class="site_footer--social">
           <li class="site_footer--social--item">
               <a href="{{ $linkedin }}"><i class="fa fa-linkedin-square"></i></a>
           </li>
           
           <li class="site_footer--social--item">
               <a href="{{ $facebook }}"><i class="fa fa-facebook-square"></i></a>
           </li>
           
           <li class="site_footer--social--item">
               <a href="{{ $twitter }}"><i class="fa fa-twitter-square"></i></a>
           </li>
           
           <li class="site_footer--social--item">
               <a href="{{ $google }}"><i class="fa fa-google-plus-square"></i></a>
           </li>
       </ul>
   
        <p class="site_footer--copyright">&copy; 1994 - <?php echo date("Y"); ?> PIXRITE, LLC. All Rights Reserved. | <a href="/">WEBMAIL</a></p>
   </div>
</div>