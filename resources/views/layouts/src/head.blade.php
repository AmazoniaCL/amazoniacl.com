<head>

	<title>Amazonia - @yield('title')</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{ asset('assets/img/page/favicon.png') }}">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/Bootstrap/dist/css/bootstrap-reboot.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/Bootstrap/dist/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Bootstrap/dist/css/bootstrap-grid.css') }}">
    <link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fonts.min.css') }}">

    @yield('styles')

	<!-- Main Font -->
	<script src="{{ asset('assets/js/libs/webfontloader.min.js') }}"></script>
	<script>
		WebFont.load({
			google: {
				families: ['Roboto:300,400,500,700:latin']
			}
		});
	</script>

</head>
