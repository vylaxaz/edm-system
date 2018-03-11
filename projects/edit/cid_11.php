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
			<a href="#coupon" data-toggle="tab" aria-expanded="false">Coupon</a>
		</li>
		<li class="">
			<a href="#coupon-midbanner" data-toggle="tab" aria-expanded="false">Coupon Midbanner</a>
		</li>
		<li class="">
			<a href="#daily-deal" data-toggle="tab" aria-expanded="false">Daily Deal</a>
		</li>
		<li class="">
			<a href="#product-category" data-toggle="tab" aria-expanded="false">Product Category</a>
		</li>
		<li class="">
			<a href="#product" data-toggle="tab" aria-expanded="false">Products</a>
		</li>
		<li class="">
			<a href="#bottom-banner" data-toggle="tab" aria-expanded="false">Bottom Banner</a>
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

    echo '</select></div></div>';

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
            <label class="col-md-2 control-label" for="inputDefault">Main Banner</label>
            <div class="col-md-10 col-product">
                <input type="text" name="main_banner_source" class="form-control" value="'.$project_banner_source.'">
            </div>
            <label class="col-md-2 control-label" for="inputDefault">Url</label>
            <div class="col-md-10 col-product">
                <input type="text" name="main_banner_url" class="form-control" value="'.$project_banner_url.'">
            </div>
        </div>';

    $banners_sql = "SELECT * FROM `banners` WHERE `banner_id` = $current_page_id LIMIT 2,1";
    $banners_res = mysql_query ($banners_sql) or die (mysql_error());

    if(mysql_num_rows($banners_res) > 0) {

        while ($row = mysql_fetch_assoc($banners_res)) {

            echo '
                <div class="form-group">
                    <label class="col-md-2 control-label" for="inputDefault">Middle Banner</label>
                    <div class="col-md-10 col-product">
                        <input type="text" class="form-control" name="img_source['.$row["id"].']" value="'.$row["img_source"].'">
                    </div>
                    <label class="col-md-2 control-label" for="inputDefault">Url</label>
                    <div class="col-md-10 col-product">
                        <input type="text" class="form-control" name="img_url['.$row["id"].']" value="'.$row["img_url"].'">
                    </div>
                    <input type="hidden" name="banner_id[]" value="'.$row["id"].'">
                </div>';

        }
    }

    echo '</div>';
    echo '</div>';
    echo '</section>';
echo '</div>';
// end main banner

// coupon
echo '<div id="coupon" class="tab-pane">';
    echo '<section class="panel">';
    echo '<div class="panel-body">
            <div class="form-horizontal form-bordered">';

    echo '<div class="form-group">
            <label class="col-md-2 control-label" for="inputDefault">Source</label>
            <div class="col-md-10">
                <input type="text" name="project_coupon_src" class="form-control" value="'.$project_coupon_src.'">
            </div>
        </div>';

    echo '<div class="form-group">
            <label class="col-md-2 control-label" for="inputDefault">Url</label>
            <div class="col-md-10">
                <input type="text" name="project_coupon_url" class="form-control" value="'.$project_coupon_url.'">
            </div>
        </div>';

    echo '</div>';
    echo '</div>';
    echo '</section>';
echo '</div>';
// end coupon

// coupon midbanner
include 'inc/inc_coupon_midbanner.php';
// end coupon midbanner

// daily deals
echo '<div id="daily-deal" class="tab-pane">';
    echo '
        <section class="panel">
            <div class="panel-body">
                <div class="form-horizontal form-bordered form-add-product">
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="inputDefault">Title</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="project_dd_title" value="'.$project_dd_title.'">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="inputDefault">Caption</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="project_dd_caption" value="'.$project_dd_caption.'">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="inputDefault">Url</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="project_dd_url" value="'.$project_dd_url.'">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    ';
echo '</div>';
// end daily deals

// product category
echo '<div id="product-category" class="tab-pane">';
    $products_category_sql = "SELECT * FROM `product_category` WHERE `product_category_id` = $current_page_id LIMIT 2";
    $products_category_res = mysql_query ($products_category_sql) or die (mysql_error());

    if(mysql_num_rows($products_category_res) > 0) {
        echo '<section class="panel">';
        echo '<div class="panel-body">
                <div class="form-horizontal form-bordered">';

        echo '
            <div class="form-group">
                <label class="col-md-2 control-label" for="inputDefault">Box Color</label>
                <div class="col-md-10">
                    <div class="input-group color" data-plugin-colorpicker>
                        <span class="input-group-addon"><i></i></span>
                        <input type="text" class="form-control" name="product_category_box_color" value="'.$product_category_box_color.'">
                    </div>
                </div>
            </div>';

        $i = 0;

        while ($product_category_row = mysql_fetch_assoc($products_category_res)) {

            if ($i < 1) {
            echo '
                <div class="form-group">
                    <label class="col-md-2 control-label" for="inputDefault">Category Top</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="product_category['.$product_category_row["id"].']" value="'.$product_category_row["product_category"].'">
                    </div>
                    <input type="hidden" name="product_category_id[]" value="'.$product_category_row["id"].'">
                </div>';

            }
            else {
            echo '
                <div class="form-group">
                    <label class="col-md-2 control-label" for="inputDefault">Category Bottom</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="product_category['.$product_category_row["id"].']" value="'.$product_category_row["product_category"].'">
                    </div>
                    <input type="hidden" name="product_category_id[]" value="'.$product_category_row["id"].'">
                </div>';

            }
            $i ++;
        }

        echo '</div>';
        echo '</div>';
        echo '</section>';
    }
    else echo '';
echo '</div>';
// end product category

// product
echo '<div id="product" class="tab-pane">';
    $products_sql = "SELECT * FROM `products` WHERE `product_id` = $current_page_id";
    $products_res = mysql_query ($products_sql) or die (mysql_error());

    if(mysql_num_rows($products_res) > 0) {
        echo '<section class="panel">';
        echo '<div class="panel-body">
                <div class="form-horizontal form-bordered">';

        while ($product_row = mysql_fetch_assoc($products_res)) {

            echo '<div class="form-group">';
            echo '<div class="col-md-6 col-product">
                    <div class="input-group">
                        <span class="input-group-addon">Title</span>
                        <input type="text" class="form-control" name="product_title['.$product_row["id"].']" value="'.$product_row["product_title"].'">
                    </div>
                </div>';
            echo '<div class="col-md-2 col-product">
                    <div class="input-group">
                        <span class="input-group-addon">RRP</span>
                        <input type="text" class="form-control"  name="rrp['.$product_row["id"].']" value="'.$product_row["rrp"].'">
                    </div>
                </div>';
            echo '<div class="col-md-2 col-product">
                    <div class="input-group">
                        <span class="input-group-addon">DP</span>
                        <input type="text" class="form-control"  name="dp['.$product_row["id"].']" value="'.$product_row["dp"].'">
                    </div>
                </div>';
            echo '<div class="col-md-2 col-product">
                    <div class="input-group">
                        <span class="input-group-addon">%</span>
                        <input type="text" class="form-control"  name="percent['.$product_row["id"].']" value="'.$product_row["percent"].'">
                    </div>
                </div>';
            echo '<div class="col-md-12 col-product">
                    <div class="input-group">
                        <span class="input-group-addon">Source</span>
                        <input type="text" class="form-control"  name="image['.$product_row["id"].']" value="'.$product_row["image"].'">
                    </div>
                </div>';
            echo '<div class="col-md-12 col-product">
                    <div class="input-group">
                        <span class="input-group-addon">Url</span>
                        <input type="text" class="form-control"  name="url['.$product_row["id"].']" value="'.$product_row["url"].'">
                    </div>
                </div>';
            echo '<input type="hidden" name="product_id[]" value="'.$product_row["id"].'">';
            echo '</div>';

    }

        echo '</div>';
        echo '</div>';
        echo '</section>';
    }
    else echo '';
echo '</div>';
// end product

// bottom banners
echo '<div id="bottom-banner" class="tab-pane">';
echo '<section class="panel">';
echo '<div class="panel-body">
        <div class="form-horizontal form-bordered">';
    $banners_sql = "SELECT * FROM `banners` WHERE `banner_id` = $current_page_id LIMIT 0,2";
    $banners_res = mysql_query ($banners_sql) or die (mysql_error());

    if(mysql_num_rows($banners_res) > 0) {

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
    }
    else echo '';

    $banners_sql = "SELECT * FROM `banners` WHERE `banner_id` = $current_page_id LIMIT 3,3";
    $banners_res = mysql_query ($banners_sql) or die (mysql_error());

    if(mysql_num_rows($banners_res) > 0) {

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
    }
    else echo '';

echo '</div>';
echo '</div>';
echo '</section>';
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
