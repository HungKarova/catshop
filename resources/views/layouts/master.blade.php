<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Furbook</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
	<div class="container">
		<div class="page_header">
			@yield('header')
		</div>
		@if (Session::has('success'))
		 <div class="alert alert-success">
		 	{{Session::get('success')}}
		 	
		 </div>
		@endif
		@yield('content')
	</div>

	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/common.js')}}"></script>
	
</body>
</html>