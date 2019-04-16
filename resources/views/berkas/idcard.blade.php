<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	img{
		position: relative;
		z-index: 1;
		top: 0px;
	}
	p{
		position: absolute;
		top: 60px;
		z-index: 2;
		left: 25px;
		color: black;
		font-size: 12px
		
	}
	</style>
</head>
<body>
	
	<img width="300px" src="https://www.kokitindo.com/laravel-filemanager/photos/10/img.jpg"> 
	<p>

		PS-0{{ $data->noanggota }}<br/>
		{{ $data->nama }}


	</p>
</body>
</html>
