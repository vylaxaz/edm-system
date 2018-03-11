<?php startSession(); ?>
<?php

$sql = "SELECT first_name, last_name FROM users WHERE username = '" . $_SESSION['username'] . "'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);

?>

<!doctype html>
<html class="fixed sidebar-left-collapsed">
<head>

	<!-- Basic -->
	<meta charset="UTF-8">

	<title>Dashboard | 11Street.my</title>
	<meta name="keywords" content="" />
	<meta name="description" content="">
	<meta name="author" content="">

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
	<link rel="stylesheet" href="http://preview.oklerthemes.com/porto-admin/1.5.4/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css">
	<link rel="stylesheet" href="/assets/css/bootstrap-colorpicker.css">
	<link rel="stylesheet" href="/assets/css/morris.css" />
	<link rel="stylesheet" href="/assets/css/summernote.css" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="/assets/css/theme.css" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="/assets/css/theme-custom.css">

	<!-- Head Libs -->
	<script src="/assets/js/modernizr.js"></script>
	<script src="/assets/js/style.switcher.localstorage.js"></script>

	<style type="text/css">
		.col-product {
		    margin-bottom: 15px;
		}
	</style>

</head>

<body class="loading-overlay-showing" data-loading-overlay>

<div class="loading-overlay">
	<div class="bounce-loader">
		<div class="bounce1"></div>
		<div class="bounce2"></div>
		<div class="bounce3"></div>
	</div>
</div>

<section class="body">

<?php require_once(__DIR__."/../includes/inc_header.php"); ?>

<div class="inner-wrapper">
    <?php require_once(__DIR__."/../includes/menu.php"); ?>
