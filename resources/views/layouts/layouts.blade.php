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
	<link href="{{ asset('/css/font-awesome.css') }}" rel="stylesheet" />
	<link rel="stylesheet" href="{{ asset('/css/jquery.gritter.css') }}" />
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
	<script src="{{ asset('/js/excanvas.min.js') }}"></script> 
	<script src="{{ asset('/js/jquery.min.js') }}"></script> 
	<script src="{{ asset('/js/jquery.ui.custom.js') }}"></script> 
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script> 
	<script src="{{ asset('/js/jquery.flot.min.js') }}"></script> 
	<script src="{{ asset('/js/jquery.flot.resize.min.js') }}"></script> 
	<script src="{{ asset('/js/jquery.peity.min.js') }}"></script> 
	<script src="{{ asset('/js/fullcalendar.min.js') }}"></script> 
	<script src="{{ asset('/js/matrix.js') }}"></script> 
	<script src="{{ asset('/js/matrix.dashboard.js') }}"></script> 
	<script src="{{ asset('/js/jquery.gritter.min.js') }}"></script> 
	<script src="{{ asset('/js/matrix.interface.js') }}"></script> 
	<script src="{{ asset('/js/matrix.chat.js') }}"></script> 
	<script src="{{ asset('/js/jquery.validate.js') }}"></script> 
	<script src="{{ asset('/js/matrix.form_validation.js') }}"></script> 
	<script src="{{ asset('/js/jquery.wizard.js') }}"></script> 
	<script src="{{ asset('/js/jquery.uniform.js') }}"></script> 
	<script src="{{ asset('/js/select2.min.js') }}"></script> 
	<script src="{{ asset('/js/matrix.popover.js') }}"></script> 
	<script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script> 
	<script src="{{ asset('/js/matrix.tables.js') }}"></script> 

</body>
</html>