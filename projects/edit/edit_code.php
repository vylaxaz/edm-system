<?php require_once(__DIR__."/../../includes/config.php"); ?>
<?php require_once(__DIR__."/../../includes/functions.php"); ?>
<?php require_once(__DIR__."/../inc/process_edit_product.php"); ?>

<?php blockPage(); ?>

<?php require_once(__DIR__."/../../includes/header.php"); ?>

<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="/assets/css/codemirror/codemirror.css" />
<link rel="stylesheet" href="/assets/css/codemirror/monokai.css" />

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Edit Project</h2>

        <div class="right-wrapper pull-right">
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->
    <div class="row">
        <div class="col-lg-12">
            <div class="inner-body">

<?php
$current_page_id = $_GET['id'];

$getProjectID = "SELECT * FROM `projects` WHERE `id` = $current_page_id";
$getProjectID_res = mysql_query ($getProjectID) or die (mysql_error());

while ($project_row = mysql_fetch_assoc($getProjectID_res)) {

$project_title = $project_row['title'];
$masthead = $project_row['masthead'];
$logo_url = $project_row['logo_url'];
$project_banner_source = $project_row['main_banner_source'];
$project_banner_url = $project_row['main_banner_url'];
$project_coupon_src = $project_row['project_coupon_src'];
$project_coupon_url = $project_row['project_coupon_url'];
$project_category = $project_row['project_category'];
$project_ref_id = $project_row['project_ref_id'];
$project_host = $project_row['project_host'];
$project_box_color = $project_row['project_box_color'];
$project_dd_title = $project_row['project_dd_title'];
$project_dd_caption = $project_row['project_dd_caption'];
$project_dd_url = $project_row['project_dd_url'];
$project_tnc = $project_row['project_tnc'];
$project_tnc_bg = $project_row['project_tnc_bg'];
$project_tnc_color = $project_row['project_tnc_color'];
$product_category_box_color = $project_row['product_category_box_color'];
$code = $project_row['code'];

	echo '<form method="post">';
}
?>
<?php
echo '
<div class="inner-toolbar form-btn clearfix">
    <ul>
        <li><i class="fa fa-arrow-up mr-sm"></i><input type="submit" name="submit" value="Update"></li>
        <li><a href="/projects/category/'.$project_category.'/'.$project_title.'" target="_blank"><i class="fa fa-globe mr-sm"></i>Preview</a></li>
    </ul>
</div>
';
?>

<?php
echo '<div class="row"><div class="col-md-12"><div class="tabs">';
echo '
	<ul class="nav nav-tabs">
		<li class="active">
			<a href="#header" data-toggle="tab" aria-expanded="true">Header</a>
		</li>
		<li class="">
			<a href="#navigation" data-toggle="tab" aria-expanded="false">Navigation</a>
		</li>
	</ul>
';
echo '<div class="tab-content">';
// header
echo '<div id="header" class="tab-pane active">';
    echo '<section class="panel">';
    echo '<div class="panel-body">
            <div class="form-horizontal form-bordered">';

    echo '<div class="form-group">
            <label class="col-md-2 control-label" for="inputDefault">Title</label>
            <div class="col-md-10">
                <input type="text" name="title" class="form-control" value="'.$project_title.'">
            </div>
        </div>';

    echo '<div class="form-group">
            <label class="col-md-2 control-label" for="inputDefault">Masthead</label>
            <div class="col-md-10">
                <select name="masthead" class="form-control populate">';

                if ($masthead == 0) {
                    echo '
                    <option value="0" selected="selected">Type-A</option>
                    <option value="1">Type-B</option>
                    <option value="2">Default</option>
                    ';
                }
                elseif ($masthead == 1) {
                    echo '
                    <option value="1" selected="selected">Type-B</option>
                    <option value="0">Type-A</option>
                    <option value="2">Default</option>
                    ';
                }
                else {
                    echo '
                    <option value="2" selected="selected">Default</option>
                    <option value="0">Type-A</option>
                    <option value="1">Type-B</option>
                    ';
                }

    echo '</select></div></div>';

    echo '<div class="form-group">
            <label class="col-md-2 control-label" for="inputDefault">Host</label>
            <div class="col-md-10">
                <select name="project_host" class="form-control populate">';

                if ($project_host == 'http://image.11st.my/g3/md_img/edm') {
                    echo '
                    <option value="http://image.11st.my/g3/md_img/edm" selected="selected">http://image.11st.my</option>
                    <option value="http://www.11street.my">http://www.11street.my</option>
                    <option value="http://myfo.coding.com">http://myfo.coding.com</option>
                    ';
                }
                elseif ($project_host == 'http://www.11street.my') {
                    echo '
                    <option value="http://www.11street.my" selected="selected">http://www.11street.my</option>
                    <option value="http://myfo.coding.com">http://myfo.coding.com</option>
                    <option value="http://image.11st.my/g3/md_img/edm">http://image.11st.my</option>
                    ';
                }
                else {
                    echo '
                    <option value="http://myfo.coding.com" selected="selected">http://myfo.coding.com</option>
                    <option value="http://image.11st.my/g3/md_img/edm">http://image.11st.my</option>
                    <option value="http://www.11street.my">http://www.11street.my</option>
                    ';
                }

    echo '</select>';
    echo '</div>';
    echo '</div>';

    echo '
        <div class="form-group">
            <label class="col-md-2 control-label" for="inputDefault">Ref ID</label>
            <div class="col-md-10">
                <input type="text" name="project_ref_id" class="form-control" value="'.$project_ref_id.'">
            </div>
        </div>
    ';

    echo '
        <div class="form-group">
            <label class="col-md-2 control-label" for="inputDefault">Logo</label>
            <div class="col-md-10">
                <input type="text" name="logo_url" class="form-control" value="'.$logo_url.'">
            </div>
        </div>
    ';

    echo '
        <div class="form-group">
            <label class="col-md-2 control-label" for="inputDefault">Box Color</label>
            <div class="col-md-10">
                <div class="input-group color" data-plugin-colorpicker>
                    <span class="input-group-addon"><i></i></span>
                    <input type="text" class="form-control" name="project_box_color" value="'.$project_box_color.'">
                </div>
            </div>
        </div>
    ';

    echo '</div>';
    echo '</div>';
    echo '</section>';
echo '</div>';
// end header

// navigation
echo '<div id="navigation" class="tab-pane">';
    $navigations_sql = "SELECT * FROM `navigations` WHERE `nav_id` = $current_page_id";
    $navigations_res = mysql_query ($navigations_sql) or die (mysql_error());

    if(mysql_num_rows($navigations_res) > 0) {
    	echo '<section class="panel">';
    	echo '<div class="panel-body">
    			<div class="form-horizontal form-bordered form-navigation">';

    	while ($nav_row = mysql_fetch_assoc($navigations_res)) {

    		echo '
            <div class="form-group">
                <label class="col-md-2 control-label" for="inputDefault"></label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="nav_url['.$nav_row["id"].']" value="'.$nav_row["nav_url"].'">
                </div>
                <input type="hidden" name="nav_id[]" value="'.$nav_row["id"].'">
    		</div>
            ';

    	}

    	echo '</div>';
    	echo '</div>';
    	echo '</section>';
	}
	else echo '';
echo '</div>';
//end navigation

echo '</div>';
echo '</div></div></div>';
?>

<div id="code" class="tab-pane">
    <section class="panel">
        <div class="panel-body">
            <div class="form-group">
                <div class="col-md-2">
                    <strong>QUICK COPY</strong>
                    <p style="border-top: 1px solid #ccc; border-bottom: 1px solid #ccc; padding: 10px 0; font-size: 11px; margin: 10px 0;">
                        &#60;table width="100%" cellpadding="0" cellspacing="0" border="0"&#62;
                        <br>
                        &#60;/table&#62;
                    </p>
                    <p style="border-bottom: 1px solid #ccc; padding: 0 0 10px; font-size: 11px; margin: 0 0 10px;">
                        &#60;tr&#62;&#60;/tr&#62;
                    </p>
                    <p style="border-bottom: 1px solid #ccc; padding: 0 0 10px; font-size: 11px; margin: 0 0 10px;">
                        &#60;td&#62;&#60;/td&#62;
                    </p>
                    <p style="border-bottom: 1px solid #ccc; padding: 0 0 10px; font-size: 11px; margin: 0 0 10px;">
                        &#60;a href=""&#62;&#60;/a&#62;
                    </p>
                    <p style="border-bottom: 1px solid #ccc; padding: 0 0 10px; font-size: 11px; margin: 0 0 10px;">
                        &#60;img src="" style="display:block;"&#62;
                    </p>
                </div>
                <div class="col-md-10">
                    <span class="word-rotate highlight">
						<span class="word-rotate-items">
							<span>&#60;table width="100%" cellpadding="0" cellspacing="0" border="0"&#62;</span>
							<span>&#60;tbody&#62;</span>
						</span>
					</span>
                    <textarea rows="10" class="form-control" id="codemirror_html_code" name="code" value="" data-plugin-codemirror data-plugin-options='{ "mode": "text/html }'>
<?php echo $code ?>
                    </textarea>
                    <span class="word-rotate highlight">
						<span class="word-rotate-items">
                            <span>&#60;/tbody&#62;</span>
							<span>&#60;/table&#62;</span>
						</span>
					</span>
                </div>
            </div>
        </div>
    </section>
</div>

<?php echo '</form>'; ?>



			</div>
		</div>
	</div>
	<!-- end: page -->
</section>

<!-- Specific Page Vendor -->
<script src="/assets/js/codemirror/codemirror.js"></script>
<script src="/assets/js/codemirror/active-line.js"></script>
<script src="/assets/js/codemirror/matchbrackets.js"></script>
<script src="/assets/js/codemirror/javascript.js"></script>
<script src="/assets/js/codemirror/xml.js"></script>
<script src="/assets/js/codemirror/htmlmixed.js"></script>
<script src="/assets/js/codemirror/css.js"></script>


<?php require_once(__DIR__."/../../includes/footer.php"); ?>
