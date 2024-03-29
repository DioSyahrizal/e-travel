<?php
$session_data = $this->session->userdata('logged in');
$data['id'] = $session_data['id'];
$data['nama'] = $session_data['nama'];
$data['status'] = $session_data['status'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - <?php echo $data['nama'] ?></title>

    <link rel="shortcut icon" href="<?=base_url()?>assets/icon/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?=base_url()?>assets/icon/favicon.ico" type="image/x-icon">
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?=base_url()?>assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?=base_url()?>assets/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
		.container{
			width: 800px;
			margin: 0 auto;
		}

		ul.tabs{
            background: #ededed;
			margin: 0px;
			padding: 0px;
			list-style: none;
		}
		ul.tabs li{
			background: none;
			color: #222;
			display: inline-block;
			padding: 10px 15px;
			cursor: pointer;
		}

		ul.tabs li.current{
			background: #fff;
			color: #222;
		}

		.tab-content{
			display: none;
			background: #fff;
			padding: 15px;
		}

		.tab-content.current{
			display: inherit;
		}

        .yellow {
            background-color: yellow !important;
        }

        .red {
            background-color: red !important;
            color: white;
        }

        .green {
            background-color: green !important;
            color: white;
        }
    </style>
</head>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="<?=site_url()?>/Admin">Admin Panel</a> -->
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                <!-- /.dropdown -->
            	<li><a href="<?=site_url()?>/Auth/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?=site_url()?>/Admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <!-- <li>
                            <a href=""><i class="fa fa-table fa-fw"></i> List User/Admin<span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=site_url()?>/Superadmin/menuAdmin"><i class="fa fa-user fa-fw"></i> Admin List</a>
                                </li>
                                <li>
                                    <a href="<?=site_url()?>/Superadmin/menuUser"><i class="fa fa-user fa-fw"></i> User List</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-table fa-fw"></i> Store<span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=site_url()?>/Superadmin/tabel">Tools/Device List</a>
                                </li>
                                <li>
                                    <a href="<?=site_url()?>/Superadmin/request">Tools/Device Request</a>
                                </li>
                                <li>
                                    <a href="<?=site_url()?>/Superadmin/replace">Tools/Device Replace</a>
                                </li>
                            </ul>
                        </li> -->
                        <li>
                            <a href="<?=site_url()?>/Admin/saldo"><i class="fa fa-table fa-fw"></i>Saldo User</a>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <body>

