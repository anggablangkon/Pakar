@if ($message = Session::get('success'))
<div class="alert alert-success">
	<button class="close" data-dismiss="alert">×</button>
	<strong>{{ $message }}</strong>
</div>
@endif
<<<<<<< HEAD
@if ($message = Session::get('failed'))
<div class="alert alert-danger">
	<button class="close" data-dismiss="alert">×</button>
	<strong>{{ $message }}</strong>
</div>
@endif
=======
>>>>>>> f8863d9f36a9e1699ff5765a999f13b7fddde30e
