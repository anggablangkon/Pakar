@if ($message = Session::get('success'))
<div class="alert alert-success">
	<button class="close" data-dismiss="alert">×</button>
	<strong>{{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('failed'))
<div class="alert alert-danger">
	<button class="close" data-dismiss="alert">×</button>
	<strong>{{ $message }}</strong>
</div>
@endif