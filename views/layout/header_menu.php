<style>
	.header {
		background: none;
		border: none;
		height: auto;
		position: static;
	}

	.header .logo-container {
		height: 60px;
		left: 0;
		position: fixed;
		right: 0;
		top: 0;
		z-index: 99;
	}

	.header .header-right {
		background: #FFF;
		float: none !important;
		height: 60px;
		margin-top: 60px;
		width: 100%;
	}

</style>

<div class="logo-container">
	<a href="<?=url_site()?>index.php" class="logo">
		<img src="<?=url_site()?>assets/img/logo.png" width="75" height="35" alt="Porto Admin" />
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
				<img src="<?=url_site()?>img/!logged-user.jpg" alt="Joseph Doe" class="rounded-circle" data-lock-picture="<?=url_site()?>img/!logged-user.jpg" />
			</figure>
			<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
				<span class="name">John Doe Junior</span>
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