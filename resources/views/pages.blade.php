<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('seo')

    <link href='//fonts.googleapis.com/css?family=Roboto:400,600|Indie+Flower' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    
    <link rel="shortcut icon" href="img/favicon.ico">

	<link href="{{ asset('/css/main.css?ver=0.1') }}" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	@yield('head_script')
	
	@if( env('GA_ANALYTICS') == 'yes' )
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-11464359-1', 'auto');
            ga('send', 'pageview');

        </script>
    @endif
</head>

<body id="@yield('page_tag')">
    <!-- Header -->
    @include('pages._partials.header')

    <!-- Body -->
	@yield('content')

    <!-- Footer -->
    @include('pages._partials.footer')

	<!-- Scripts -->
	<script src="{{ asset('/js/scripts.js?ver=0.1') }}"></script>
	@yield('foot_script')
    
    <!-- Messages -->
    @include('_partials.messages')
</body>
</html>
