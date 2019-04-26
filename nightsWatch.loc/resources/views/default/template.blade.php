<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Wine&Dine</title>

	<!-- download fonts from google-fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Pacifico|Roboto|Ubuntu" rel="stylesheet">
	{{-- <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> --}}
	{{-- <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700|Montserrat:400,700' rel='stylesheet' type='text/css'> --}}
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- take fontawesome cdn online -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<!-- take bootstrap css -->

	<link href="css/style.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
	@yield('header')
	
	
	@yield('content')

	@include('partials.footer')
	<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/scripts.js" type="text/javascript"></script>

</body>
</html>