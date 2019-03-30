
<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>@yield('title')</title>
		<!--Favicon-->	
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
		<!-- Fontawesome css -->
		<link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/fontawesome-all.min.css')}}" media="all" />
		<!-- Animate css -->
		<link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/animate.min.css')}}"/>
		<!-- owl carousel css -->
		<link rel="stylesheet" href="{{asset('public/assets/css/owl.carousel.min.css')}}">
		<!-- magnific popup css -->
		<link rel="stylesheet" href="{{asset('public/assets/css/magnific-popup.css')}}">
		<!-- bicon css -->
		<link rel="stylesheet" href="{{asset('public/assets/css/bicon.min.css')}}">
		<!-- Fontawesome css -->
		<link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/fontawesome-all.min.css')}}" media="all" />
		<!-- Google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,700i,800,900" rel="stylesheet"> 
		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/bootstrap.min.css')}}" media="all" />
		<!-- Custom styles for this template -->
	   <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/style.css')}}" media="all" />

	</head>

	<body>
		
		@include('shared.user.header')
	
		@yield('content')
		
		@include('shared.user.footer')
		 <!-- Placed at the end of the document so the pages load faster -->

    <!-- LinkUp Js -->
      <script type="text/javascript" src="assets/js/jquery-1.12.4.min.js"></script>
      <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="assets/js/popper.min.js"></script>
      <script type="text/javascript" src="assets/js/onepagenav.js"></script>
      <script type="text/javascript" src="assets/js/isotope.js"></script>
      <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
      <script type="text/javascript" src="assets/js/waypoints.js"></script>
      <script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
      <script type="text/javascript" src="assets/js/wow.min.js"></script>
      <script type="text/javascript" src="assets/js/ityped.min.js"></script>
      <script type="text/javascript" src="assets/js/active.js"></script> 
   </body>
</html>