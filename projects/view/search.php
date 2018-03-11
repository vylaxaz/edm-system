<?php require_once(__DIR__."/../../includes/config.php"); ?>
<?php require_once(__DIR__."/../../includes/functions.php"); ?>

<?php $pages = getProjects(); ?>

<?php

$find = $_POST['search'];

// We perform a bit of filtering
$find = strtoupper($find);
$find = strip_tags($find);
$find = trim ($find);

//Now we search for our search term, in the field the user specified
$iname = mysql_query("SELECT * FROM projects WHERE title LIKE '%$find%' ORDER BY `title` DESC");

$return_iname = mysql_query("SELECT count(*) FROM projects WHERE title LIKE '%$find%'");
$count_iname = mysql_fetch_array($return_iname);
?>

<!doctype html>
<html class="fixed sidebar-left-collapsed">
<head>

   <!-- Basic -->
   <meta charset="UTF-8">

   <title>Dashboard | 11Street.my</title>
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
       html.fixed.sidebar-left-collapsed .content-body {margin-left: 0;}
       html.fixed .inner-wrapper {padding-top: 0;}
       .search-content {margin: 0;}
       .content-body {padding: 0;}
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

<div class="inner-wrapper">
    <div class="search-content">
        <div class="search-control-wrapper">
        	<form action="search.php" method="post">
        		<div class="form-group">
        			<div class="input-group">
        				<input type="text" name="search" class="form-control" value="<?php echo $find ?>" required>
        				<span class="input-group-btn">
        					<button class="btn btn-primary" type="submit">Search</button>
        				</span>
        			</div>
        		</div>
        	</form>
        </div>
    </div>

    <section role="main" class="content-body">

        <div class="row">

           <div class="col-md-12">
               <section class="panel">
                   <div class="panel-body">
                       <div class="table-responsive">
                           <table class="table table-hover mb-none">
                               <thead>
                                   <tr>
                                       <th>Title</th>
                                       <th align="right" style="text-align:right;">Actions</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <?php
                   						$anymatches = mysql_num_rows($iname);
                   						if ($anymatches == 0) {
                   							echo "Sorry, but we can not find an entry to match your query...<br><br>";
                   						}
                   						// results displayed
                   						while($result = mysql_fetch_array($iname)) {
                                               echo '
                                                   <tr>
                                                       <td data-title="Title">'.$result['title'].'</td>
                                                       <td data-title="Actions" align="right">
                                                           <a href="/projects/category/'.$result['project_category'].'/'.$result['title'].'" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                           <a href="/projects/view/source.php?id='.$result['id'].'" target="_blank"><i class="fa fa-code" aria-hidden="true"></i></a>
                                                        </td>
                                                   </tr>
                                               ';
                   						}
                   					?>
                               </tbody>
                           </table>
                       </div>
                   </div>
               </section>
           </div>

       </div>

    </section>
</div>
<!-- </div inner-wrapper> -->

</section>
<!-- /#section -->

<!-- Vendor -->
<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/jquery.browser.mobile.js"></script>
<script src="/assets/js/jquery-cookie.js"></script>
<script src="/assets/js/style.switcher.js"></script>
<script src="/assets/js/bootstrap.js"></script>
<script src="/assets/js/nanoscroller.js"></script>
<script src="/assets/js/bootstrap-datepicker.js"></script>
<script src="/assets/js/jquery.magnific-popup.js"></script>
<script src="/assets/js/jquery-placeholder.js"></script>

<!-- Specific Page Vendor -->
<script src="/assets/js/jquery-ui.js"></script>
<script src="/assets/js/jqueryui-touch-punch.js"></script>
<script src="/assets/js/jquery-appear.js"></script>
<script src="/assets/js/bootstrap-multiselect.js"></script>
<script src="/assets/js/jquery.easy-pie-chart.js"></script>
<script src="/assets/js/jquery.flot.js"></script>
<script src="/assets/js/flot.tooltip.js"></script>
<script src="/assets/js/jquery.flot.pie.js"></script>
<script src="/assets/js/jquery.flot.categories.js"></script>
<script src="/assets/js/jquery.flot.resize.js"></script>
<script src="/assets/js/jquery-sparkline.js"></script>
<script src="/assets/js/raphael.js"></script>
<script src="/assets/js/morris.js"></script>
<script src="/assets/js/gauge.js"></script>
<script src="/assets/js/snap.svg.js"></script>
<script src="/assets/js/liquid.meter.js"></script>
<script src="/assets/js/jquery.vmap.js"></script>
<script src="/assets/js/jquery.vmap.sampledata.js"></script>
<script src="/assets/js/jquery.vmap.world.js"></script>
<script src="/assets/js/jquery.vmap.africa.js"></script>
<script src="/assets/js/jquery.vmap.asia.js"></script>
<script src="/assets/js/jquery.vmap.australia.js"></script>
<script src="/assets/js/jquery.vmap.europe.js"></script>
<script src="/assets/js/jquery.vmap.north-america.js"></script>
<script src="/assets/js/jquery.vmap.south-america.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="/assets/js/theme.js"></script>
<script src="/assets/js/bootstrap-colorpicker.js"></script>
<script src="/assets/js/jquery.validate.js"></script>
<script src="/assets/js/examples.validation.js"></script>

<!-- Theme Custom -->
<script src="/assets/js/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="/assets/js/theme.init.js"></script>
<!-- Examples -->
<script src="/assets/js/examples.dashboard.js"></script>

</body>
</html>
