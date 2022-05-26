	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Librerias CSS -->
		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!--BUSCAR EN BOOTSTRAP 4-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
		<!-- overlayScrollbars -->
		<link rel="stylesheet"  href="{{ url('/') }}/css/plugins/OverlayScrollbars.min.css" >
		<!-- CSS adminLTE -->  
		<link rel="stylesheet" href="{{ url('/') }}/css/plugins/adminlte.min.css" >
		
		
		<!-- Librerias JavaScript -->
		<!-- jQuery library -->
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
		<!-- Latest compiled Fontawesome-->
		<script src="https://kit.fontawesome.com/ddbefcee69.js" crossorigin="anonymous"></script>
		<!-- JS admin LTE -->
		<!-- Bootstrap 5 -->
		<script src="{{ url('/') }}/js/plugins/adminlte.js"></script>
		<!-- overlayScrollbars -->
		<script src="{{ url('/') }}/js/plugins/OverlayScrollbars.min.js"></script>
		<title>HELLO</title>
	</head>
	<body class="hold-transition sidebar-mini layout-fixed">

		<div class = "wrapper">
			@include('modulos.header')
			@include('modulos.sidebar')
			@include('modulos.footer')	
			@yield('content')
		</div>
		<h1>DashBoard</h1>

	</body>



	</html>