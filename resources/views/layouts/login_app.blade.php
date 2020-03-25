<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>@yield('title') - {{config('app.name')}}</title>
<meta name="description" content=" ">
<meta name="Author" content=" ">
<meta name="keywords" content=" " />
<meta name="author" content="metatags generator">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="3 days">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
{{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
	<!-- ==============================================
		Favicons
		=============================================== -->
		<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('source/assets/img/favicons/apple-touch-icon-57x57.html') }}">
		<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('source/assets/img/favicons/apple-touch-icon-114x114.html') }}">
		<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('source/assets/img/favicons/apple-touch-icon-72x72.html') }}">
		<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('source/assets/img/favicons/apple-touch-icon-144x144.html') }}">
		<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('_br/__b_Notice_/b__%20%20Array%20to%20string%20conversion%20in%20_b_/home/fluffsco/public_html/scripts/Voting/source/frontend/template/header.php_/b_%20on%20line%20_b_27_/b__/apple-touch-icon-60x60') }}">
		<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('source/assets/img/favicons/apple-touch-icon-120x120.html') }}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('source/assets/img/favicons/apple-touch-icon-76x76.html') }}">
		<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('source/assets/img/favicons/apple-touch-icon-152x152.html') }}">
		<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('source/assets/img/favicons/apple-touch-icon-180x180.html') }}">
		<link rel="icon" type="image/png" href="{{ asset('source/assets/img/favicons/favicon-96x96.html" sizes="96x96') }}">
		<link rel="icon" type="image/png" href="{{ asset('source/assets/img/favicons/favicon-16x16.html" sizes="16x16') }}">
		<link rel="icon" type="image/png" href="{{ asset('source/assets/img/favicons/favicon-32x32.html" sizes="32x32') }}">
		<meta name="msapplication-TileColor" content="#2b5797">
		<meta name="msapplication-TileImage" content="{{ asset('source/assets/img/favicons/mstile-144x144.html') }}">

	    <!-- ==============================================
		CSS
		=============================================== -->
        <!-- Style-->

        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

        <!-- Google Font: Source Sans Pro -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> --}}
<style>


</style>

</head>
<body class="hold-transition login-page">
    <div id="app">


        @yield('content')




	 <!-- ==============================================
	 Footer Section
	 =============================================== -->


   <!-- Main Footer -->
  
   <!-- ./wrapper -->

   <!-- REQUIRED SCRIPTS -->
   <!-- jQuery -->
   <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
   <!-- Bootstrap -->
   <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   <!-- AdminLTE App -->
   <script src="{{ asset('dist/js/adminlte.js') }}"></script>
   <script type="text/javascript"></script>
     <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
 <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
 {!! Toastr::message() !!}
   @yield('javascript')
   </body>

   </html>
