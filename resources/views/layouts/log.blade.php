
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <meta name="robots" content="noindex, nofollow">

        <title>Family-Friends</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="myfiles/img/favicon.png">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('myfiles/css/bootstrap.min.css')}}">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('myfiles/css/font-awesome.min.css')}}">

		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('myfiles/css/style.css')}}">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="myfiles/js/html5shiv.min.js"></script>
			<script src="myfiles/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body class="account-page"  style="">

		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				<a href="{{url('jobs')}}" class="btn btn-primary apply-btn">Go Home</a>
				<div class="container">

					<!-- Account Logo -->
					<div class="account-logo">

					</div>
					<!-- /Account Logo -->

					<div class="account-box" style=" background: -webkit-linear-gradient(left,#1997cd 100%,#2fda48 10%);">
						<div class="account-wrapper">
							<h3 class="account-title"><img src="{{asset('images/logos.png')}}" alt="" width="80%"></h3>
							{{-- <p class="account-subtitle">Access to our dashboard</p> --}}

							<!-- Account Form -->
							@yield('content')
							<!-- /Account Form -->

						</div>
					</div>
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="myfiles/js/jquery-3.5.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="myfiles/js/popper.min.js"></script>
        <script src="myfiles/js/bootstrap.min.js"></script>

		<!-- Custom JS -->
		<script src="myfiles/js/app.js"></script>

    </body>
</html>
