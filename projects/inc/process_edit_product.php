<?php require_once(__DIR__."/../../includes/config.php"); ?>
<?php require_once(__DIR__."/../../includes/functions.php"); ?>

<?php
    blockPage();
?>

<?php
$current_page_id = $_GET['id'];
$category = $_GET['category'];

$_POST['last_updated'] = $_SESSION['id'];

if (isset($_POST["submit"])) {

    $title = $_POST['title'];
    $dup_sql = "SELECT * FROM projects where (title = '$title') AND id NOT IN ('$current_page_id')";
    $dup_row = mysql_query($dup_sql);

    if (mysql_num_rows($dup_row) > 0) {
        header("location: /projects/list/index.php?error=Title already exists");
    }
    else {

    	$project_title = mysql_real_escape_string($_POST["title"]);
        $last_updated = mysql_real_escape_string($_POST["last_updated"]);
        $masthead = mysql_real_escape_string($_POST["masthead"]);
    	$logo_url = mysql_real_escape_string($_POST["logo_url"]);
    	$project_banner_source = mysql_real_escape_string($_POST["main_banner_source"]);
    	$project_banner_url = mysql_real_escape_string($_POST["main_banner_url"]);
    	$project_coupon_src = mysql_real_escape_string($_POST["project_coupon_src"]);
    	$project_coupon_url = mysql_real_escape_string($_POST["project_coupon_url"]);
    	$project_host = mysql_real_escape_string($_POST["project_host"]);
    	$project_ref_id = mysql_real_escape_string($_POST["project_ref_id"]);
    	$project_box_color = mysql_real_escape_string($_POST["project_box_color"]);
    	$project_dd_title = mysql_real_escape_string($_POST["project_dd_title"]);
    	$project_dd_caption = mysql_real_escape_string($_POST["project_dd_caption"]);
    	$project_dd_url = mysql_real_escape_string($_POST["project_dd_url"]);
    	$project_tnc = mysql_real_escape_string($_POST["project_tnc"]);
    	$project_tnc_color = mysql_real_escape_string($_POST["project_tnc_color"]);
    	$project_tnc_bg = mysql_real_escape_string($_POST["project_tnc_bg"]);
    	$product_category_box_color = mysql_real_escape_string($_POST["product_category_box_color"]);
    	$code = mysql_real_escape_string($_POST["code"]);

    	$update_projects = "UPDATE `projects`
    	SET
    		`title` = '$project_title',
            `last_updated` = '$last_updated',
            `masthead` = '$masthead',
    		`logo_url` = '$logo_url',
    		`main_banner_source` = '$project_banner_source',
    		`main_banner_url` = '$project_banner_url',
    		`project_coupon_src` = '$project_coupon_src',
    		`project_coupon_url` = '$project_coupon_url',
    		`project_host` = '$project_host',
    		`project_ref_id` = '$project_ref_id',
    		`project_box_color` = '$project_box_color',
    		`project_dd_title` = '$project_dd_title',
    		`project_dd_caption` = '$project_dd_caption',
    		`project_dd_url` = '$project_dd_url',
    		`project_tnc` = '$project_tnc',
    		`project_tnc_bg` = '$project_tnc_bg',
    		`project_tnc_color` = '$project_tnc_color',
    		`product_category_box_color` = '$product_category_box_color',
    		`code` = '$code'
    	WHERE `id` = $current_page_id";

    	mysql_query ($update_projects) or die (mysql_error());

    	foreach ($_POST["product_id"] as $pid) {

    		$product_title = mysql_real_escape_string($_POST["product_title"][$pid]);
    		$product_rrp = mysql_real_escape_string($_POST["rrp"][$pid]);
    		$product_dp = mysql_real_escape_string($_POST["dp"][$pid]);
    		$product_percent = mysql_real_escape_string($_POST["percent"][$pid]);
    		$product_image = mysql_real_escape_string($_POST["image"][$pid]);
    		$product_url = mysql_real_escape_string($_POST["url"][$pid]);

    		$update_products  = "UPDATE `products`
    					SET `product_title` = '$product_title', `rrp` = '$product_rrp', `dp` = '$product_dp', `percent` = '$product_percent', `image` = '$product_image', `url` = '$product_url'
    					WHERE `id` = $pid
    					LIMIT 1";

    		mysql_query ($update_products) or die (mysql_error());
    	}

    	foreach ($_POST["banner_id"] as $bid) {

    		$img_source = mysql_real_escape_string($_POST["img_source"][$bid]);
    		$img_url = mysql_real_escape_string($_POST["img_url"][$bid]);

    		$update_banners  = "UPDATE `banners`
    					SET `img_source` = '$img_source', `img_url` = '$img_url'
    					WHERE `id` = $bid
    					LIMIT 1";

    		mysql_query ($update_banners) or die (mysql_error());
    	}

    	foreach ($_POST["nav_id"] as $nid) {

    		$nav_url = mysql_real_escape_string($_POST["nav_url"][$nid]);

    		$update_nav  = "UPDATE `navigations`
    					SET `nav_url` = '$nav_url'
    					WHERE `id` = $nid
    					LIMIT 1";

    		mysql_query ($update_nav) or die (mysql_error());
    	}

    	foreach ($_POST["product_category_id"] as $pcid) {

    		$product_category = mysql_real_escape_string($_POST["product_category"][$pcid]);

    		$update_product_category  = "UPDATE `product_category`
    					SET `product_category` = '$product_category'
    					WHERE `id` = $pcid
    					LIMIT 1";

    		mysql_query ($update_product_category) or die (mysql_error());
    	}

        if ($category == 7) {
            header ("location: /projects/edit/edit_freestyle.php?id=$current_page_id&category=$category");
        }
        elseif ($category == 8) {
            header ("location: /projects/edit/edit_fourcat.php?id=$current_page_id&category=$category");
        }
        elseif ($category == 9) {
            header ("location: /projects/edit/edit_code.php?id=$current_page_id&category=$category");
        }
        elseif ($category == 10) {
            header ("location: /projects/edit/edit_twocat.php?id=$current_page_id&category=$category");
        }
        elseif ($category == 11) {
            header ("location: /projects/edit/cid_11.php?id=$current_page_id&category=$category");
        }
        elseif ($category == 12) {
            header ("location: /projects/edit/cid_12.php?id=$current_page_id&category=$category");
        }
        elseif ($category == 13) {
            header ("location: /projects/edit/cid_13.php?id=$current_page_id&category=$category");
        }
        elseif ($category == 14) {
            header ("location: /projects/edit/cid_14.php?id=$current_page_id&category=$category");
        }
        elseif ($category == 15) {
            header ("location: /projects/edit/cid_15.php?id=$current_page_id&category=$category");
        }
        elseif ($category == 16) {
            header ("location: /projects/edit/cid_16.php?id=$current_page_id&category=$category");
        }
        else {
            header ("location: /projects/edit_product.php?id=$current_page_id&category=$category");
        }
    }

}
?>
