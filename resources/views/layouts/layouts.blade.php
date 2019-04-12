<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('/css/bootstrap-responsive.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('/css/fullcalendar.css') }}" />
	<link rel="stylesheet" href="{{ asset('/css/matrix-style.css') }}" />
	<link rel="stylesheet" href="{{ asset('/css/matrix-media.css') }}" />
	<link rel="stylesheet" href="{{ asset('/css/select2.css') }}" />
	<link href="{{ asset('/css/font-awesome.css') }}" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
	

</head>
<body>

	<!-- navbar -->
	@include('assets/navbar')
	<!-- end navbar -->

	<!-- sidebar -->
	@include('assets/sidebar')
	<!-- end sidebar -->

	<!-- content -->
	@yield('content')
	<!-- end content -->


	<!--Footer-part-->
	<div class="row-fluid">
	  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
	</div>
	<!--end-Footer-part-->


	<!-- javascript -->
	<script src="js/jquery.min.js"></script> 
	<script src="js/jquery.ui.custom.js"></script> 
	<script src="js/bootstrap.min.js"></script> 
	<script src="js/jquery.uniform.js"></script> 
	<script src="js/select2.min.js"></script> 
	<script src="js/jquery.dataTables.min.js"></script> 
	<script src="js/matrix.js"></script> 
	<script src="js/matrix.tables.js"></script>
	<script src="js/jquery.validate.js"></script> 

	@yield('javascript')


</body>
</html>