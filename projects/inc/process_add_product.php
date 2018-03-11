<?php require_once(__DIR__."/../../includes/config.php"); ?>
<?php require_once(__DIR__."/../../includes/functions.php"); ?>

<?php
    blockPage();
?>

<?php
if ($_POST['submit'] == "Create"){

    $_POST['user_id'] = $_SESSION['id'];
    $_POST['last_updated'] = $_SESSION['id'];
    $title = $_POST['title'];

    $dup_sql = "SELECT * FROM projects where (title = '$title')";

    $dup_row = mysql_query($dup_sql);

    if (mysql_num_rows($dup_row) > 0) {
        header("location: /projects/create/index.php?error=Title already exists");

                }
            else {
                $query = "INSERT INTO projects
            				(
            					title,
                                user_id,
                                last_updated,
            					logo_url,
            					project_category,
            					main_banner_source,
            					main_banner_url,
                                project_ref_id,
                                project_dd_title,
                                project_dd_caption,
                                project_dd_url,
                                project_host,
                                project_box_color,
                                project_tnc,
                                product_category_box_color,
                                code
            				)
            			  VALUES
            			  	(
            					'".$_POST['title']."',
            					'".$_POST['user_id']."',
            					'".$_POST['last_updated']."',
                                '".$_POST['logo_url']."',
            					'".$_POST['project_category']."',
            					'".$_POST['main_banner_source']."',
            					'".$_POST['main_banner_url']."',
                                '".$_POST['project_ref_id']."',
                                '".$_POST['project_dd_title']."',
                                '".$_POST['project_dd_caption']."',
                                '".$_POST['project_dd_url']."',
                                '".$_POST['project_host']."',
                                '".$_POST['project_box_color']."',
                                '".$_POST['project_tnc']."',
                                '".$_POST['product_category_box_color']."',
                                '".$_POST['code']."'
            				)";

        if ($mysqli->query($query)){

            $id = $mysqli->insert_id;
            $p_title = $_POST['product_title'];
            $p_rrp = $_POST['rrp'];
            $p_dp = $_POST['dp'];
            $p_percent = $_POST['percent'];
            $p_image = $_POST['image'];
            $p_url = $_POST['url'];

            for ($i = 0; $i < count($p_title); $i++) {

                $ptitle = mysql_real_escape_string($p_title[$i]);
                $prrp = mysql_real_escape_string($p_rrp[$i]);
                $pdp = mysql_real_escape_string($p_dp[$i]);
                $ppercent = mysql_real_escape_string($p_percent[$i]);
                $pimage = mysql_real_escape_string($p_image[$i]);
                $purl = mysql_real_escape_string($p_url[$i]);

                mysql_query("INSERT INTO products (product_id, product_title, rrp, dp, percent, image, url) VALUES ('$id', '$ptitle', '$prrp', '$pdp', '$ppercent', '$pimage', '$purl')");
            }

            $b_img_source = $_POST['img_source'];
            $b_img_url = $_POST['img_url'];

            for ($i = 0; $i < count($b_img_source); $i++) {

                $bimg_source = mysql_real_escape_string($b_img_source[$i]);
                $bimg_url = mysql_real_escape_string($b_img_url[$i]);

                mysql_query("INSERT INTO banners (banner_id, img_source, img_url) VALUES ('$id', '$bimg_source', '$bimg_url')");
            }

            $nav_link = $_POST['nav_url'];

            for ($i = 0; $i < count($nav_link); $i++) {

                $n_link = mysql_real_escape_string($nav_link[$i]);

                mysql_query("INSERT INTO navigations (nav_id, nav_url) VALUES ('$id', '$n_link')");
            }

            $product_category = $_POST['product_category'];

            for ($i = 0; $i < count($product_category); $i++) {

                $p_category = mysql_real_escape_string($product_category[$i]);

                mysql_query("INSERT INTO product_category (product_category_id, product_category) VALUES ('$id', '$p_category')");
            }

            header("Location: /projects/list/");
        }

}
}

 ?>
