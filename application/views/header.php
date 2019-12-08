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
	<title>E-Travel</title>

	<!-- Bootstrap -->
	<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css">
	<link href="<?=base_url()?>assets/css/prettyPhoto.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/style2.css" rel="stylesheet" />
	<!-- =======================================================
    Theme Name: Company
    Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
	<header>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
							data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="<?=site_url()?>/">
								<h1><span>E-</span>Travel</h1>
							</a>
						</div>
					</div>

					<div class="navbar-collapse collapse">
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="<?=site_url()?>/">Home</a></li>
								<li role="presentation"><a href="<?=site_url()?>/Auth/jadwal">Jadwal</a></li>
								<li role="presentation"><a href="<?=site_url()?>/Auth/aboutus">About Us</a></li>
								<?php if ($data['username']) {?>

								<li role="presentation" class="dropdown">
									<a id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
										aria-expanded="true">
										<?php echo $data['username'] ?>
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										<li><a href="<?=site_url()?>/User/isisaldo">Isi Saldo</a></li>
										<li><a href="<?=site_url()?>/User/travel">Paket Travel</a></li>
										<li><a href="#">Profil</a></li>
										<?php if ($data['status'] === 'admin') {?>
											<li><a href="<?=site_url()?>/Admin">Admin Page</a></li>
										<?php }?>
										<li role="separator" class="divider"></li>
										<li><a href="<?=site_url()?>/Auth/logout">Logout</a></li>
									</ul>
								</li>

								<?php } else {?>
								<li role="presentation"><a href="<?=site_url()?>/Auth/login">Login</a></li>
								<?php }?>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
