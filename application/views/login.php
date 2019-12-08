<?php
$session_data = $this->session->userdata('logged in');
$data['username'] = $session_data['username'];
$data['status'] = $session_data['status'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>E-Travel</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="shortcut icon" href="<?=base_url()?>assets/icon/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?=base_url()?>assets/icon/favicon.ico" type="image/x-icon">
	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css" />
	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.min.css">
	<link href='<?=base_url()?>assets/dist/css/select2.min.css' rel='stylesheet' type='text/css'>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style type="text/css">
		.button{
			margin-top: 40px;
		}

		.title{
			margin-top: 30px;
		}

		.row-centered {
		text-align:center;
		}

		.login-form {
			width: 400px;
			margin: 50px auto;
		}

		.login-form form {
			margin-bottom: 15px;
			background: #f7f7f7;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			padding: 30px;
		}

		.login-form h2 {
			margin: 0 0 15px;
		}

		.form-control,
		.btn {
			min-height: 38px;
			border-radius: 2px;
		}

		.btn {
			font-size: 15px;
			font-weight: bold;
		}

		/*------------------------------------*\
	Logo
\*------------------------------------*/

		.navbar-brand {
			padding: 0;
		}

		.navbar-brand .logo,
		.navbar-brand .logo-alt {
			max-height: 50px;
			display: block;
		}

		#nav:not(.nav-transparent):not(.fixed-nav) .navbar-brand .logo-alt {
			display: none;
		}

		#nav.nav-transparent:not(.fixed-nav) .navbar-brand .logo {
			display: none;
		}

		#nav.fixed-nav .navbar-brand .logo-alt {
			display: none;
		}

		@media only screen and (max-width: 767px) {
			#nav.nav-transparent .navbar-brand .logo-alt {
				display: none !important;
			}

			#nav.nav-transparent .navbar-brand .logo {
				display: block !important;
			}
		}

	</style>
</head>

<body>
	<!-- Header -->
	<header id="home">
		<nav class="navbar">
			<div class="container-fluid">

				<ul class="nav navbar-nav">
					<li class="active"><a href="<?=site_url()?>/">Home</a></li>
					<!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Page 1-1</a></li>
							<li><a href="#">Page 1-2</a></li>
							<li><a href="#">Page 1-3</a></li>
						</ul>
					</li>
					<li><a href="#">Page 2</a></li> -->
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?=site_url()?>/Auth/daftar"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="<?=site_url()?>/Auth/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</nav>


<div class="login-form">
<?php echo form_open_multipart('Auth/cekLogin'); ?>
<?php echo validation_errors(); ?>
		<h2 class="text-center">Log in</h2>
		<div class="form-group">
			<input type="text" name="username" class="form-control" placeholder="Username" required="required">
		</div>
		<div class="form-group">
			<input type="password" name="password" class="form-control" placeholder="Password" required="required">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block">Log in</button>
		</div>
	</form>
	<p class="text-center"><a href="<?=site_url()?>/Auth/daftar">Create an Account</a></p>

</div>
<?php echo form_close(); ?>

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/main.js"></script>
	<script src='<?=base_url()?>assets/dist/js/select2.min.js' type='text/javascript'></script>
    <!-- CSS -->
    <link href='<?=base_url()?>assets/dist/css/select2.min.css' rel='stylesheet' type='text/css'>


</body>

</html>
