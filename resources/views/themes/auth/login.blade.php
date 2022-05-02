<!DOCTYPE html>
<html>

<head>
	<title>Creative Colorlib Login Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link href="{{asset('assets/themes/css/signup/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->
	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Creative Login Form</h1>
		<di class="col-md-8 text-center">
			@if (session('success'))
			<div class="alert alert-success">
				{{ session('success') }}
			</div>
			@endif
			@if (session('error'))
			<div class="alert alert-danger">
				{{ session('error') }}
			</div>
			@endif
	</div>
	<div class="main-agileinfo">
		<div class="agileits-top">
			<form action="{{ route('user.createlogin') }}" method="POST">@csrf
				<input class="@error('email') is-invalid @enderror text" type="email" name="email" placeholder="Email">
				@error('email')
				<div class="text-danger">{{ $message }}</div>
				@enderror
				<input class="@error('password') is-invalid @enderror text" type="password" name="password" placeholder="Password">
				@error('password')
                <div class="text-danger">{{ $message }}</div>
				@enderror
				<div class="wthree-text">
					<label class="anim">
						<input type="checkbox" class="checkbox">
						<span>I Agree To The Terms & Conditions</span>
					</label>
					<div class="clear"> </div>
				</div>
				<input type="submit" value="LOGIN">
			</form>
		</div>
	</div>
	<!-- copyright -->
	<div class="colorlibcopy-agile">
		<p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
	</div>
	<!-- //copyright -->
	<ul class="colorlib-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
	</div>
	<!-- //main -->
</body>

</html>