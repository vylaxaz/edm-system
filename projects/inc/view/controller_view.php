<?php require_once(__DIR__."/../../../includes/config.php"); ?>
<?php require_once(__DIR__."/../../../includes/functions.php"); ?>

<?php

//url segment
function url_segment($segment) {
	if(isset($_GET['url'])) {
		$url = $_GET['url'];
		$segment_array = explode('/',$url);

			if(isset($segment_array[$segment-1])) {
				return $segment_array[$segment-1];
			}
	}
	else {
		return false;
	}
}

if(isset($_GET['url'])) {
	$page = url_segment(1);
	$segment = preg_replace('/[^A-Za-z0-9\-]/', ' ', $page);
	$page = preg_replace('/\s+/', ' ', $page);
	$page = trim($segment, ' ');

	try {
		$DB = DB::getConnection();
	}

	catch(PDOException $e) {
		echo $e->getMessage();
	}

	try {
		$sql = "SELECT * FROM projects WHERE title = '$page'";
		$result = $DB->query($sql);
	}

	catch(PDOException $e) {
		file_put_contents('ConnectionErrors.txt', $e->getMessage()."-".date("Y-m-d H:i:s").'-end-', FILE_APPEND);
		echo $e->getMessage();
	}

	if($result->rowCount()) {
		while($row = $result->fetch()) {
			$title = $row['title'];
			$logo_url = $row['logo_url'];
			$pageid = $row['id'];
			$masthead = $row['masthead'];
			$main_banner = $row['main_banner_source'];
			$main_banner_url = $row['main_banner_url'];
			$project_coupon_src = $row['project_coupon_src'];
			$project_coupon_url = $row['project_coupon_url'];
			$project_ref_id = $row['project_ref_id'];
			$project_host = $row['project_host'];
			$project_box_color = $row['project_box_color'];
			$project_dd_title = $row['project_dd_title'];
			$project_dd_caption = $row['project_dd_caption'];
			$project_dd_url = $row['project_dd_url'];
			$project_tnc = $row['project_tnc'];
			$project_tnc_color = $row['project_tnc_color'];
			$project_tnc_bg = $row['project_tnc_bg'];
			$product_category_box_color = $row['product_category_box_color'];
			$code = $row['code'];
		}
	}
	else {
		header("Location: /404.php");
	}
}

// navigations
$navigation_query = "SELECT * FROM navigations WHERE nav_id = '$pageid'";
$navigation_result = $mysqli->query($navigation_query) or die($mysqli->error);

while($nav_row = $navigation_result->fetch_assoc()) {
	$nav_url[] = $nav_row['nav_url'];
}

// products
$product_query = "SELECT * FROM products WHERE product_id = '$pageid'";
$product_result = $mysqli->query($product_query) or die($mysqli->error);

while($product_row = $product_result->fetch_assoc()) {
	$pd_title[] = $product_row['product_title'];
	$pd_rrp[] = $product_row['rrp'];
	$pd_dp[] = $product_row['dp'];
	$pd_percent[] = $product_row['percent'];
	$pd_image[] = $product_row['image'];
	$pd_url[] = $product_row['url'];
}

// bottom banners
$product_category_query = "SELECT * FROM product_category WHERE product_category_id = '$pageid'";
$product_category_result = $mysqli->query($product_category_query) or die($mysqli->error);

while($product_category_row = $product_category_result->fetch_assoc()) {
	$pc_category[] = $product_category_row['product_category'];
}

// bottom banners
$banner_query = "SELECT * FROM banners WHERE banner_id = '$pageid'";
$banner_result = $mysqli->query($banner_query) or die($mysqli->error);

while($banner_row = $banner_result->fetch_assoc()) {
	$b_image[] = $banner_row['img_source'];
	$b_url[] = $banner_row['img_url'];
}

$special_price = "
<tr>
	<td style='padding: 5px 0;'>
		<table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
			<tbody>
				<tr>
					<td>
						<table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
							<tbody>
								<tr>
									<td style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; font-weight: bold; color: #f22a2b;'>
										SPECIAL
									</td>
								</tr>
								<tr>
									<td style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: #000000; font-weight: bold; color: #f22a2b;'>
										PRICE
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
	</td>
</tr>
";
$special_offer = "
<tr>
	<td style='padding: 5px 0;'>
		<table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
			<tbody>
				<tr>
					<td>
						<table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
							<tbody>
								<tr>
									<td style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; font-weight: bold; color: #f22a2b;'>
										SPECIAL
									</td>
								</tr>
								<tr>
									<td style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: #000000; font-weight: bold; color: #f22a2b;'>
										OFFER
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
	</td>
</tr>
";

$special_price2 ="
<tr><td align='left' valign='middle' style='padding: 0; border-collapse: collapse;'><table cellspacing='0' cellpadding='0' border='0'><tbody><tr><td valign='middle' align='left' style='font-family:Verdana, Geneva, sans-serif; font-weight:bold; font-size:30px; line-height:34px; color:#f22a2b;'><br></td><td valign='middle' align='left' style='padding: 0; border-collapse: collapse;'><table cellpadding='0' cellspacing='0' border='0'><tbody><tr><td style='font-family:Verdana, Geneva, sans-serif; font-size:12px; line-height:12px; font-weight:bold; color:#f22a2b;'>SPECIAL</td></tr><tr><td style='font-family:Verdana, Geneva, sans-serif; font-size:12px; line-height:14px; color:#000000; font-weight:bold; color:#f22a2b;'>PRICE</td></tr></tbody></table></td></tr></tbody></table></td></tr>
";
?>

<?php
if ($masthead == 0) {
	$bg_color = "#ffffff";
}
elseif ($masthead == 1) {
	$bg_color = "#ffffff";
}
else {
	$bg_color = "#ffffff";
}
 ?>
