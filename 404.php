<?php require_once(__DIR__."/includes/config.php"); ?>
<?php require_once(__DIR__."/includes/functions.php"); ?>

<?php blockPage(); ?>

<?php require_once(__DIR__."/includes/header.php"); ?>

<div id="page-wrapper">

<div class="container-fluid">

	<section role="main" class="content-body">
		<header class="page-header">
			<h2>404</h2>

			<div class="right-wrapper pull-right">
				<ol class="breadcrumbs">
					<li>
						<a href="index.html">
							<i class="fa fa-home"></i>
						</a>
					</li>
					<li><span>Pages</span></li>
					<li><span>404</span></li>
				</ol>

				<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
			</div>
		</header>

		<!-- start: page -->
			<section class="body-error error-inside">
				<div class="center-error">

					<div class="row">
						<div class="col-md-8">
							<div class="main-error mb-xlg">
								<h2 class="error-code text-dark text-center text-weight-semibold m-none">404 <i class="fa fa-file"></i></h2>
								<p class="error-explanation text-center">We're sorry, but the page you were looking for doesn't exist.</p>
							</div>
						</div>
						<div class="col-md-4">
							<h4 class="text">Here are some useful links</h4>
							<ul class="nav nav-list primary">
								<li>
									<a href="#"><i class="fa fa-caret-right text-dark"></i> Dashboard</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-caret-right text-dark"></i> User Profile</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-caret-right text-dark"></i> FAQ's</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
		<!-- end: page -->
	</section>

</div>

</div>

<?php require_once(__DIR__."/includes/footer.php"); ?>
