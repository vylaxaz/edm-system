<?php require_once(__DIR__."/includes/functions.php"); ?>
<?php
startSession();
// it will never let you open index(login) page if session is set
if ( isset($_SESSION['username'])!="" ) {
	header("Location: /projects/list/");
	exit;
}
 ?>

<!doctype html>
<html class="fixed">
<head>

	<!-- Basic -->
	<meta charset="UTF-8">

	<title>Dashboard | 11street</title>
	<meta name="keywords" content="HTML5 Admin Template" />
	<meta name="description" content="Porto Admin - Responsive HTML5 Template">
	<meta name="author" content="okler.net">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="/assets/css/bootstrap.css" />

	<link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/assets/css/magnific-popup.css" />
	<link rel="stylesheet" href="/assets/css/bootstrap-datepicker3.css" />

	<!-- Specific Page Vendor CSS -->
	<link rel="stylesheet" href="/assets/css/jquery-ui.css" />
	<link rel="stylesheet" href="/assets/css/jquery-ui.theme.css" />
	<link rel="stylesheet" href="/assets/css/bootstrap-multiselect.css" />
	<link rel="stylesheet" href="/assets/css/morris.css" />
	<link rel="stylesheet" href="/assets/css/summernote.css" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="/assets/css/theme.css" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="/assets/css/theme-custom.css">

	<!-- Head Libs -->
	<script src="/assets/js/modernizr.js"></script>
	<script src="/assets/js/style.switcher.localstorage.js"></script>

</head>

<body>

<section class="body-sign">
	<div class="center-sign">
		<a href="/" class="logo pull-left">
			<img src="/assets/images/logo.png" height="54" alt="11street">
		</a>

		<div class="panel panel-sign">
			<div class="panel-title-sign mt-xl text-right">
				<h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
			</div>
			<div class="panel-body">
                <div>
                    <?php echo returnPageError(); ?>
                </div>
				<form action="process_login.php" method="post">
					<div class="form-group mb-lg">
						<label>Username</label>
						<div class="input-group input-group-icon">
							<input name="username" id="username" type="text" class="form-control input-lg">
							<span class="input-group-addon">
								<span class="icon icon-lg">
									<i class="fa fa-user"></i>
								</span>
							</span>
						</div>
					</div>

					<div class="form-group mb-lg">
						<div class="input-group input-group-icon">
							<input name="password" id="password" type="password" class="form-control input-lg">
							<span class="input-group-addon">
								<span class="icon icon-lg">
									<i class="fa fa-lock"></i>
								</span>
							</span>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12 text-right">
							<button type="submit" class="btn btn-primary hidden-xs">Sign In</button>
							<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
						</div>
					</div>

				</form>
			</div>
		</div>

		<p class="text-center text-muted mt-md mb-md">© Copyright 2017. All Rights Reserved.</p>

<?php require_once(__DIR__."/includes/footer.php"); ?>
