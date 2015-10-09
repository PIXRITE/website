<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>PIXRITE</title>

    <link href='//fonts.googleapis.com/css?family=Roboto:400,300,600' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

	<link href="{{ asset('/css/main.css?ver=0.1') }}" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	@yield('head_script')
</head>

<body class="@yield('body_class')">
	@yield('content')

    <!-- Footer -->
    @include('pages._partials.footer')

	<!-- Scripts -->
	<script src="{{ asset('/js/scripts.js?ver=0.1') }}"></script>
	@yield('foot_script')
</body>
</html>
