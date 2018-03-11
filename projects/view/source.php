<?php require_once(__DIR__."/../../includes/config.php"); ?>
<?php require_once(__DIR__."/../../includes/functions.php"); ?>
<?php
    $current_page_id = $_GET['id'];

    $getProjectID = "SELECT * FROM `projects` WHERE `id` = $current_page_id";
    $getProjectID_res = mysql_query ($getProjectID) or die (mysql_error());

    while ($project_row = mysql_fetch_assoc($getProjectID_res)) {

        $project_title = $project_row['title'];
        $project_category = $project_row['project_category'];

    }
?>

<!doctype html>
<html class="fixed">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Source Code | 11street</title>
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
    <link rel="stylesheet" href="/assets/css/codemirror/codemirror.css" />
    <link rel="stylesheet" href="/assets/css/codemirror/monokai.css" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="/assets/css/theme.css" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="/assets/css/theme-custom.css">

	<!-- Head Libs -->
	<script src="/assets/js/modernizr.js"></script>
	<script src="/assets/js/style.switcher.localstorage.js"></script>

</head>
<body>

<div class="row">
    <div class="col-xs-12">
        <section class="panel">

            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="/projects/view/" class="panel-action panel-action-toggle"></a>
                </div>

                <h2 class="panel-title">Source Code</h2>
            </header>
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-md-12">
                        <?php
                            $source_code = file_get_contents('http://11strt.fuel.com.my/projects/category/'.$project_category.'/'.$project_title.'');
                        ?>
                        <textarea rows="10" class="form-control" id="codemirror_html_code" name="code_html" data-plugin-codemirror data-plugin-options='{ "mode": "text/html" }'>
                            <?php echo "$source_code"; ?>
                        </textarea>
                    </div>
                </div>
            </div>

        </section>
    </div>
</div>

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
<script src="/assets/js/codemirror/codemirror.js"></script>
<script src="/assets/js/codemirror/active-line.js"></script>
<script src="/assets/js/codemirror/matchbrackets.js"></script>
<script src="/assets/js/codemirror/javascript.js"></script>
<script src="/assets/js/codemirror/xml.js"></script>
<script src="/assets/js/codemirror/htmlmixed.js"></script>
<script src="/assets/js/codemirror/css.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="/assets/js/theme.js"></script>

<!-- Theme Custom -->
<script src="/assets/js/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="/assets/js/theme.init.js"></script>



</body>
</html>
