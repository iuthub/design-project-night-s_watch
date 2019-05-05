<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Wine&Dine</title>

	<!-- take bootstrap css -->
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

	<style>
		h1{
			text-align: center;
		}
	</style>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
	<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/scripts.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/ckeditor/ckeditor.js') }}" type="text/javascript"></script>

</head>
<body>
	@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif


	@if(session('status'))
		<div class="alert alert-success">
			{{ session('status') }}
		</div>
	@endif
	@yield('content')

</body>
</html>