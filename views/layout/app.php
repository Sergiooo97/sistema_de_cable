<?php
define('_RAIZ', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'sistema' . DIRECTORY_SEPARATOR);
require_once(_RAIZ . 's_funciones' . DIRECTORY_SEPARATOR . 'sistema.php');
require_once(_RAIZ . 's_include_php' . DIRECTORY_SEPARATOR . 'config.php');
//include('../../../s_include_php/conexion.php');
require_once(_RAIZ . 's_include_php' . DIRECTORY_SEPARATOR . 'conexion.php');

?>
<!doctype html>
<html class="fixed sidebar-left-sm">

<head>
	<!-- Basic -->
	<meta charset="UTF-8">

	<title>Sistema de Cable</title>
	<meta name="keywords" content="-" />
	<meta name="description" content="-">
	<meta name="author" content="Techcorp México">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="<?= url_site() ?>vendor/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="<?= url_site() ?>vendor/animate/animate.compat.css">
	<link rel="stylesheet" href="<?= url_site() ?>vendor/font-awesome/css/all.min.css" />
	<link rel="stylesheet" href="<?= url_site() ?>vendor/boxicons/css/boxicons.min.css" />
	<link rel="stylesheet" href="<?= url_site() ?>vendor/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="<?= url_site() ?>vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />
	<link rel="stylesheet" href="<?= url_site() ?>vendor/jquery-ui/jquery-ui.css" />
	<link rel="stylesheet" href="<?= url_site() ?>vendor/jquery-ui/jquery-ui.theme.css" />
	<link rel="stylesheet" href="<?= url_site() ?>vendor/bootstrap-multiselect/css/bootstrap-multiselect.css" />
	<link rel="stylesheet" href="<?= url_site() ?>vendor/morris/morris.css" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?= url_site() ?>assets/css/theme.css" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="<?= url_site() ?>assets/css/skins/default.css" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="<?= url_site() ?>assets/css/custom.css">

	<!-- Head Libs -->
	<script src="<?= url_site() ?>vendor/modernizr/modernizr.js"></script>
	<!-- Font Awesome JS -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
	</script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
	</script>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>
	<style>
		/* Userbox */
		.userbox {
			display: inline-block;
			margin: 3px 17px 0 0;
			position: relative;
			vertical-align: middle;
		}

		.userbox>a {
			display: inline-block;
			text-decoration: none;
		}

		.userbox a:hover {
			text-decoration: none;
		}

		.userbox .profile-info,
		.userbox .profile-picture {
			display: inline-block;
			vertical-align: middle;
			margin: 0;
		}

		.userbox .profile-picture img {
			width: 35px;
			color: transparent;
		}

		.userbox .profile-info {
			margin: -3px 25px 0 10px;
		}

		.userbox .name,
		.userbox .role {
			display: block;
		}

		.userbox .name {
			color: #000011;
			font-size: 12.8px;
			font-size: 0.8rem;
			line-height: 17.6px;
			line-height: 1.1rem;
		}

		.userbox .role {
			color: #ACACAC;
			font-size: 11.2px;
			font-size: 0.7rem;
			line-height: 11.2px;
			line-height: 0.7rem;
		}

		.userbox .custom-caret {
			color: #000011;
			font-size: 16px;
			font-weight: bold;
		}

		.userbox .custom-caret:before {
			content: "\f107";
		}
	</style>
	<style>

	</style>
</head>

<body>
	<section class="body">

		<!-- start: header -->
		<header class="header">
			<div class="logo-container">
				<a href="index.php" class="logo">
					<img src="<?= url_site() ?>assets/img/logo.png" width="75" height="35" alt="Porto Admin" />
				</a>

				<div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
					<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
				</div>
			</div>

			<!-- start: search & user box -->
			<div class="header-right">

				<span class="separator"></span>

				<ul class="notifications">
					<li>
						<a href="#" class="dropdown-toggle notification-icon" data-bs-toggle="dropdown">
							<i class="bx bx-bell"></i>
							<span class="badge">3</span>
						</a>

						<div class="dropdown-menu notification-menu">
							<div class="notification-title">
								<span class="float-end badge badge-default">1</span>
								Notificaciones
							</div>

							<div class="content">
								<ul>
									<li>
										<a href="#" class="clearfix">
											<div class="image">
												<i class="fas fa-thumbs-down bg-danger text-light"></i>
											</div>
											<span class="title">Sistema en Desarrollo</span>
											<span class="message">Modo Desarrollo</span>
										</a>
									</li>
								</ul>

								<hr />

								<div class="text-end">
									<a href="#" class="view-more">View All</a>
								</div>
							</div>
						</div>
					</li>
				</ul>

				<span class="separator"></span>

				<div id="userbox" class="userbox">
					<a href="#" data-bs-toggle="dropdown">
						<figure class="profile-picture">
							<img src="<?= url_site() ?>assets/img/yo2.jpg" alt="Joseph Doe" class="rounded-circle" data-lock-picture="assets/img/!logged-user.jpg" />
						</figure>
						<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
							<span class="name">Sergio Eb Gallegos</span>
							<span class="role">Administrator</span>
						</div>

						<i class="fa custom-caret"></i>
					</a>

					<div class="dropdown-menu">
						<ul class="list-unstyled mb-2">
							<li class="divider"></li>
							<li>
								<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="bx bx-power-off"></i> Salir</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end: search & user box -->
		</header>
		<!-- end: header -->

		<div class="inner-wrapper">
			<!-- start: sidebar -->
			<aside id="sidebar-left" class="sidebar-left">
				<div class="sidebar-header">
					<div class="sidebar-title">
						Menu
					</div>
					<div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
						<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>

				<div class="nano">

					<div class="nano-content">

						<nav id="menu" class="nav-main" role="navigation">
							<div class="sidebar-title">
								SUCURSALES
							</div>
							<ul class="nav nav-main">

								<li class="nav-parent">
									<a class="nav-link" href="#">
										<i class="bx bxs-group" aria-hidden="true"></i>
										<span>Clientes</span>
									</a>
									<ul class="nav nav-children">
										<li>
											<a class="nav-link" href="<?= url_views() ?>clientes/">
												Clientes
											</a>
										</li>
										<li>
											<a class="nav-link" href="<?= url_views() ?>clientes/create/">
												Nuevo cliente
											</a>
										</li>

									</ul>

								</li>
								<li class="nav-parent">
									<a class="nav-link" href="#">
										<i class="fas fa-clipboard-list"></i>
										<span>Control de pagos</span>
									</a>
									<ul class="nav nav-children">
										<li>
											<a class="nav-link" href="<?= url_views() ?>control_de_pagos/mensualidades/">
												mensualidades
											</a>
										</li>


									</ul>

								</li>
								<div class="sidebar-title">
									ADMIN
								</div>
								<li class="nav-parent">
									<a class="nav-link" href="#">
										<i class="fas fa-clipboard-list"></i>
										<span>Sucursales</span>
									</a>
									<ul class="nav nav-children">
										<li>
											<a class="nav-link" href="<?= url_views() ?>sucursales/lista/">
												Sucursales
											</a>
										</li>
										<li>
											<a class="nav-link" href="<?= url_views() ?>sucursales/create/">
												Registrar sucursal
											</a>
										</li>

									</ul>

								</li>
								<li class="nav-parent">
									<a class="nav-link" href="#">
										<i class="bx bxs-group" aria-hidden="true"></i>
										<span>Usuarios</span>
									</a>
									<ul class="nav nav-children">
										<li>
											<a class="nav-link" href="<?= url_views() ?>usuarios/lista/">
												Usuarios
											</a>
										</li>

										<li>
											<a class="nav-link" href="<?= url_views() ?>usuarios/create/">
												Registrar usuario
											</a>
										</li>
									</ul>

								</li>
							</ul>
						</nav>
					</div>
				</div>
			</aside>