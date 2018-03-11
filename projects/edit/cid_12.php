<?php require_once(__DIR__."/../../includes/config.php"); ?>
<?php require_once(__DIR__."/../../includes/functions.php"); ?>
<?php require_once(__DIR__."/../inc/process_edit_product.php"); ?>

<?php blockPage(); ?>

<?php require_once(__DIR__."/../../includes/header.php"); ?>

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
			<a href="#main-banner" data-toggle="tab" aria-expanded="false">Main Banner</a>
		</li>
		<li class="">
			<a href="#bottom-banner" data-toggle="tab" aria-expanded="false">Banner</a>
		</li>
		<li class="">
			<a href="#tnc" data-toggle="tab" aria-expanded="false">Terms & Condition</a>
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
            <label class="col-md-2 control-label" for="inputDefault">Tagged Code</label>
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

// main banner
echo '<div id="main-banner" class="tab-pane">';
    echo '<section class="panel">';
    echo '<div class="panel-body">
            <div class="form-horizontal form-bordered">';

    echo '<div class="form-group">
            <label class="col-md-2 control-label" for="inputDefault">Source</label>
            <div class="col-md-10">
                <input type="text" name="main_banner_source" class="form-control" value="'.$project_banner_source.'">
            </div>
        </div>';

    echo '<div class="form-group">
            <label class="col-md-2 control-label" for="inputDefault">Url</label>
            <div class="col-md-10">
                <input type="text" name="main_banner_url" class="form-control" value="'.$project_banner_url.'">
            </div>
        </div>';

    echo '</div>';
    echo '</div>';
    echo '</section>';
echo '</div>';
// end main banner

// bottom banners
echo '<div id="bottom-banner" class="tab-pane">';
    $banners_sql = "SELECT * FROM `banners` WHERE `banner_id` = $current_page_id";
    $banners_res = mysql_query ($banners_sql) or die (mysql_error());

    if(mysql_num_rows($banners_res) > 0) {
        echo '<section class="panel">';
        echo '<div class="panel-body">
                <div class="form-horizontal form-bordered">';

        while ($banner_row = mysql_fetch_assoc($banners_res)) {

        echo '<div class="form-group">';
        echo '<div class="form-group">
                <label class="col-md-2 control-label" for="inputDefault">Source</label>
                <div class="col-md-10 col-product">
                    <input type="text" class="form-control" name="img_source['.$banner_row["id"].']" value="'.$banner_row["img_source"].'">
                </div>
                <label class="col-md-2 control-label" for="inputDefault">Url</label>
                <div class="col-md-10 col-product">
                    <input type="text" class="form-control" name="img_url['.$banner_row["id"].']" value="'.$banner_row["img_url"].'">
                </div>
            </div>';

        echo '<input type="hidden" name="banner_id[]" value="'.$banner_row["id"].'">';
        echo '</div>';

        }

        echo '</div>';
        echo '</div>';
        echo '</section>';
    }
    else echo '';
echo '</div>';
// end bottom banners

// terms and condition
echo '<div id="tnc" class="tab-pane">';
    echo '
        <section class="panel">
            <div class="panel-body">
                <div class="form-horizontal form-bordered form-add-product">
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="inputDefault">Source</label>
                        <div class="col-md-10">
                            <input type="text" name="project_tnc" class="form-control" value="'.$project_tnc.'">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="inputDefault">Font Color</label>
                        <div class="col-md-10">
                            <div class="input-group color" data-plugin-colorpicker>
                                <span class="input-group-addon"><i></i></span>
                                <input type="text" class="form-control" name="project_tnc_color" value="'.$project_tnc_color.'">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="inputDefault">Background</label>
                        <div class="col-md-10">
                            <div class="input-group color" data-plugin-colorpicker>
                                <span class="input-group-addon"><i></i></span>
                                <input type="text" class="form-control" name="project_tnc_bg" value="'.$project_tnc_bg.'">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    ';
echo '</div>';
// end terms and condition
echo '</div>';
echo '</div></div></div>';

echo '</form>';

?>

			</div>
		</div>
	</div>
	<!-- end: page -->
</section>

<?php require_once(__DIR__."/../../includes/footer.php"); ?>
