<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
	<title>Examples &rsaquo; Login &mdash; Stisla</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('public/dist/modules/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/dist/modules/ionicons/css/ionicons.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/dist/css/demo.css')}}">
	<link rel="stylesheet" href="{{asset('public/dist/css/style.css')}}">
</head>
<body>

{{-- memasukan navbar
@include('navbarDash')--}}
{{-- Memanggil halaman section main--}}
@yield('main')	
{{-- --}}
@yield('footer')

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<script src="{{asset('public/dist/modules/jquery.min.js')}}"></script>
	<script src="{{asset('public/dist/modules/popper.js')}}"></script>
	<script src="{{asset('public/dist/modules/tooltip.js')}}"></script>
	<script src="{{asset('public/dist/modules/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/dist/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
	<script src="{{asset('public/dist/modules/moment.min.js')}}"></script>
	<script src="{{asset('public/dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js')}}"></script>
	<script src="{{asset('public/dist/js/sa-functions.js')}}"></script>	 
	<script src="{{asset('public/dist/js/scripts.js')}}"></script>
	<script src="{{asset('public/dist/js/custom.js')}}"></script>
	<script src="{{asset('public/dist/js/demo.js')}}"></script>
	<script>
		function change()
			{
				var x = document.getElementById('password').type;

				if (x == 'password')
				{
				document.getElementById('password').type = 'text';
				document.getElementById('mybutton').innerHTML = '<i class="fas fa-eye-slash"></i>';
				}
				else
				{
				document.getElementById('password').type = 'password';
				document.getElementById('mybutton').innerHTML = '<i class="fas fa-eye"></i>';
				}
			}
	</script>
</body>
</html>