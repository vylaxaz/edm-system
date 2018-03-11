<!-- start: header -->
<header class="header">
	<div class="logo-container">
		<a href="/" class="logo">
			<img src="/assets/images/logo.png" height="35" alt="11street" />
		</a>
		<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
			<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
		</div>
	</div>

	<!-- start: search & user box -->
	<div class="header-right">

		<form action="/projects/search.php" method="post" class="search nav-form">
			<div class="input-group input-search">
				<input type="text" class="form-control" name="search" id="search" placeholder="Search...">
				<span class="input-group-btn">
					<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
				</span>
			</div>
		</form>

		<span class="separator"></span>

		<div id="userbox" class="userbox">
			<a href="#" data-toggle="dropdown">
				<div class="profile-info">
					<span class="name"><?php echo $row['first_name'] ?>&nbsp;<?php echo $row['last_name'] ?></span>
					<span class="role">administrator</span>
				</div>

				<i class="fa custom-caret"></i>
			</a>

			<div class="dropdown-menu">
				<ul class="list-unstyled">
					<li class="divider"></li>
					<?php if(isset($_SESSION["id"])): ?>
						<li><a role="menuitem" tabindex="-1" href="/users/"><i class="fa fa-user"></i> My Profile</a></li>
						<li><a role="menuitem" tabindex="-1" href="/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
			        <?php else: ?>
			            <li><a href="/"><i class="fa fa-user"></i> Login</a></li>
			        <?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
	<!-- end: search & user box -->
</header>
<!-- end: header -->
