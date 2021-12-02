<?php
define('_RAIZ', $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'sistema'.DIRECTORY_SEPARATOR);
require_once(_RAIZ.'s_funciones'.DIRECTORY_SEPARATOR.'sistema.php');
require_once(_RAIZ.'s_include_php'.DIRECTORY_SEPARATOR.'config.php');

?>
<!doctype html>
<html class="fixed sidebar-left-sm">
	<head>		
		<?php require_once(_RAIZ.'views/layout'.DIRECTORY_SEPARATOR.'header.php');?>
		<style>

		</style>
	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
			<div class="logo-container">
	<a href="index.php" class="logo">
		<img src="assets/img/logo.png" width="75" height="35" alt="Porto Admin" />
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
				<img  src="assets/img/yo2.jpg" alt="Joseph Doe" class="rounded-circle" data-lock-picture="assets/img/!logged-user.jpg" />
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
				<?php require_once(_RAIZ.'views/layout'.DIRECTORY_SEPARATOR.'sidebar.php');?>
				<!-- end: sidebar -->
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Index</h2>
						<div class="right-wrapper text-end">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="bx bx-home-alt"></i>
									</a>
								</li>
								<li><span>Sistema</span></li>
								<li><span class="me-4">Index</span></li>
							</ol>												
						</div>
					</header>
					<!-- start: page -->


					
					<!-- end: page -->
				</section>
			</div>			

		</section>
		
		<!-- JS Generales -->
		<?php require_once(_RAIZ.'views/layout'.DIRECTORY_SEPARATOR.'footer_js.php');?>
		<!-- JS Personalizados -->
	</body>
</html>