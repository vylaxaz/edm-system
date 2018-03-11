<?php require_once(__DIR__."/../../inc/view/controller_view.php"); ?>

<!-- Header -->
<?php include(__DIR__."/../../inc/view/header.php"); ?>

<!-- Masthead -->
<?php include(__DIR__."/../../inc/masthead/masthead_a.php"); ?>

<!-- Navigation -->
<?php include(__DIR__."/../../inc/view/navigation.php"); ?>

<!-- Application -->
<?php include(__DIR__."/../../inc/view/application.php"); ?>

<tr>
    <td valign="top" style="padding: 0; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid;">
        <table width="100%" cellpadding="0" cellspacing="0" border="0">
            <tbody>
                <!-- main banner -->
                <?php if (!empty($main_banner) && !empty($main_banner_url)) {
                    echo "
                    <tr>
                        <td valign='top' align='left' style='padding: 0; border-collapse: collapse;'>
                            <a RILT='Top Banner' style='display: block;' href='$main_banner_url' target='_blank'>
                                <img border='0' width='650' class='ImgL' src='$project_host$main_banner' alt='' style='padding: 0; display: block; border-collapse: collapse'>
                            </a>
                        </td>
                    </tr>
                    ";
                }
                else if (!empty($main_banner) && empty($main_banner_url)) {
                    echo "
                    <tr>
                        <td valign='top' align='left' style='padding: 0; border-collapse: collapse;'>
                            <img border='0' width='650' class='ImgL' src='$project_host$main_banner' alt='' style='padding: 0; display: block; border-collapse: collapse'>
                        </td>
                    </tr>
                    ";
                }
                else {
                    echo "";
                }
                ?>
                <!-- coupon -->
                <?php if (!empty($project_coupon_src)) {
                    echo "
                        <tr>
                            <td valign='top' align='left' style='padding: 0 ;border-collapse: collapse;'>
                                <a RILT='Top Banner' style='display: block;' href='$project_host$project_coupon_url' target='_blank'>
                                    <img border='0' width='650' class='ImgL' src='$project_host$project_coupon_src' alt='' style='padding: 0; display: block; border-collapse: collapse'>
                                </a>
                            </td>
                        </tr>
                    ";
                }
                else {
                    echo "";
                }
                ?>
            </tbody>
        </table>
    </td>
</tr>

<!-- banners -->
<?php if (!empty($b_image[0]) && !empty($b_url[0])) {
    echo "
    <tr>
        <td valign='top' align='left' style='padding: 0; border-collapse: collapse; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid'>
            <a RILT='Brand 1' style='display: block;' href='$b_url[0]' target='_blank'>
                <img border='0' width='650' class='ImgL' src='$project_host$b_image[0]' alt='' style='padding: 0; display: block; border-collapse: collapse'>
            </a>
        </td>
    </tr>
    ";
}
else if (!empty($b_image[0]) && empty($b_url[0])) {
    echo "
    <tr>
        <td valign='top' align='left' style='padding: 0; border-collapse: collapse; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid'>
            <img border='0' width='650' class='ImgL' src='$project_host$b_image[0]' alt='' style='padding: 0; display: block; border-collapse: collapse'>
        </td>
    </tr>
    ";
}
else {
    echo "";
}
?>
<!-- two -->
<?php if (!empty($b_image[1]) && !empty($b_url[1])) {
    echo "
    <tr>
        <td valign='top' align='left' style='padding: 0; border-collapse: collapse; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid'>
            <a RILT='Brand 2' style='display: block;' href='$b_url[1]' target='_blank'>
                <img border='0' width='650' class='ImgL' src='$project_host$b_image[1]' alt='' style='padding: 0; display: block; border-collapse: collapse'>
            </a>
        </td>
    </tr>
    ";
}
else if (!empty($b_image[1]) && empty($b_url[1])) {
    echo "
    <tr>
        <td valign='top' align='left' style='padding: 0; border-collapse: collapse; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid'>
            <img border='0' width='650' class='ImgL' src='$project_host$b_image[1]' alt='' style='padding: 0; display: block; border-collapse: collapse'>
        </td>
    </tr>
    ";
}
else {
    echo "";
}
?>
<!-- three -->
<?php if (!empty($b_image[2]) && !empty($b_url[2])) {
    echo "
    <tr>
        <td valign='top' align='left' style='padding: 0; border-collapse: collapse; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid'>
            <a RILT='Brand 3' style='display: block;' href='$b_url[2]' target='_blank'>
                <img border='0' width='650' class='ImgL' src='$project_host$b_image[2]' alt='' style='padding: 0; display: block; border-collapse: collapse'>
            </a>
        </td>
    </tr>
    ";
}
else if (!empty($b_image[2]) && empty($b_url[2])) {
    echo "
    <tr>
        <td valign='top' align='left' style='padding: 0; border-collapse: collapse; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid'>
            <img border='0' width='650' class='ImgL' src='$project_host$b_image[2]' alt='' style='padding: 0; display: block; border-collapse: collapse'>
        </td>
    </tr>
    ";
}
else {
    echo "";
}
?>
<!-- four -->
<?php if (!empty($b_image[3]) && !empty($b_url[3])) {
    echo "
    <tr>
        <td valign='top' align='left' style='padding: 0; border-collapse: collapse; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid'>
            <a RILT='Brand 4' style='display: block;' href='$b_url[3]' target='_blank'>
                <img border='0' width='650' class='ImgL' src='$project_host$b_image[3]' alt='' style='padding: 0; display: block; border-collapse: collapse'>
            </a>
        </td>
    </tr>
    ";
}
else if (!empty($b_image[3]) && empty($b_url[3])) {
    echo "
    <tr>
        <td valign='top' align='left' style='padding: 0; border-collapse: collapse; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid'>
            <img border='0' width='650' class='ImgL' src='$project_host$b_image[3]' alt='' style='padding: 0; display: block; border-collapse: collapse'>
        </td>
    </tr>
    ";
}
else {
    echo "";
}
?>
<!-- five -->
<?php if (!empty($b_image[4]) && !empty($b_url[4])) {
    echo "
    <tr>
        <td valign='top' align='left' style='padding: 0; border-collapse: collapse; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid'>
            <a RILT='Brand 5' style='display: block;' href='$b_url[4]' target='_blank'>
                <img border='0' width='650' class='ImgL' src='$project_host$b_image[4]' alt='' style='padding: 0; display: block; border-collapse: collapse'>
            </a>
        </td>
    </tr>
    ";
}
else if (!empty($b_image[4]) && empty($b_url[4])) {
    echo "
    <tr>
        <td valign='top' align='left' style='padding: 0; border-collapse: collapse; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid'>
            <img border='0' width='650' class='ImgL' src='$project_host$b_image[4]' alt='' style='padding: 0; display: block; border-collapse: collapse'>
        </td>
    </tr>
    ";
}
else {
    echo "";
}
?>
<!-- six -->
<?php if (!empty($b_image[5]) && !empty($b_url[5])) {
    echo "
    <tr>
        <td valign='top' align='left' style='padding: 0; border-collapse: collapse; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid'>
            <a RILT='Brand 6' style='display: block;' href='$b_url[5]' target='_blank'>
                <img border='0' width='650' class='ImgL' src='$project_host$b_image[5]' alt='' style='padding: 0; display: block; border-collapse: collapse'>
            </a>
        </td>
    </tr>
    ";
}
else if (!empty($b_image[5]) && empty($b_url[5])) {
    echo "
    <tr>
        <td valign='top' align='left' style='padding: 0; border-collapse: collapse; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid'>
            <img border='0' width='650' class='ImgL' src='$project_host$b_image[5]' alt='' style='padding: 0; display: block; border-collapse: collapse'>
        </td>
    </tr>
    ";
}
else {
    echo "";
}
?>
<!-- seven -->
<?php if (!empty($b_image[6]) && !empty($b_url[6])) {
    echo "
    <tr>
        <td valign='top' align='left' style='padding: 0; border-collapse: collapse; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid'>
            <a RILT='Brand 7' style='display: block;' href='$b_url[6]' target='_blank'>
                <img border='0' width='650' class='ImgL' src='$project_host$b_image[6]' alt='' style='padding: 0; display: block; border-collapse: collapse'>
            </a>
        </td>
    </tr>
    ";
}
else if (!empty($b_image[6]) && empty($b_url[6])) {
    echo "
    <tr>
        <td valign='top' align='left' style='padding: 0; border-collapse: collapse; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid'>
            <img border='0' width='650' class='ImgL' src='$project_host$b_image[6]' alt='' style='padding: 0; display: block; border-collapse: collapse'>
        </td>
    </tr>
    ";
}
else {
    echo "";
}
?>
<!-- eight -->
<?php if (!empty($b_image[7]) && !empty($b_url[7])) {
    echo "
    <tr>
        <td valign='top' align='left' style='padding: 0; border-collapse: collapse; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid'>
            <a RILT='Brand 8' style='display: block;' href='$b_url[7]' target='_blank'>
                <img border='0' width='650' class='ImgL' src='$project_host$b_image[7]' alt='' style='padding: 0; display: block; border-collapse: collapse'>
            </a>
        </td>
    </tr>
    ";
}
else if (!empty($b_image[7]) && empty($b_url[7])) {
    echo "
    <tr>
        <td valign='top' align='left' style='padding: 0; border-collapse: collapse; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid'>
            <img border='0' width='650' class='ImgL' src='$project_host$b_image[7]' alt='' style='padding: 0; display: block; border-collapse: collapse'>
        </td>
    </tr>
    ";
}
else {
    echo "";
}
?>
<!-- nine -->
<?php if (!empty($b_image[8]) && !empty($b_url[8])) {
    echo "
    <tr>
        <td valign='top' align='left' style='padding: 0; border-collapse: collapse; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid'>
            <a RILT='Brand 9' style='display: block;' href='$b_url[8]' target='_blank'>
                <img border='0' width='650' class='ImgL' src='$project_host$b_image[8]' alt='' style='padding: 0; display: block; border-collapse: collapse'>
            </a>
        </td>
    </tr>
    ";
}
else if (!empty($b_image[8]) && empty($b_url[8])) {
    echo "
    <tr>
        <td valign='top' align='left' style='padding: 0; border-collapse: collapse; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid'>
            <img border='0' width='650' class='ImgL' src='$project_host$b_image[8]' alt='' style='padding: 0; display: block; border-collapse: collapse'>
        </td>
    </tr>
    ";
}
else {
    echo "";
}
?>
<!-- ten -->
<?php if (!empty($b_image[9]) && !empty($b_url[9])) {
    echo "
    <tr>
        <td valign='top' align='left' style='padding: 0; border-collapse: collapse; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid'>
            <a RILT='Brand 10' style='display: block;' href='$b_url[9]' target='_blank'>
                <img border='0' width='650' class='ImgL' src='$project_host$b_image[9]' alt='' style='padding: 0; display: block; border-collapse: collapse'>
            </a>
        </td>
    </tr>
    ";
}
else if (!empty($b_image[9]) && empty($b_url[9])) {
    echo "
    <tr>
        <td valign='top' align='left' style='padding: 0; border-collapse: collapse; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid'>
            <img border='0' width='650' class='ImgL' src='$project_host$b_image[9]' alt='' style='padding: 0; display: block; border-collapse: collapse'>
        </td>
    </tr>
    ";
}
else {
    echo "";
}
?>

<!-- terms and conditions -->
<?php if (!empty($project_tnc)) {
    echo "
        <tr>
            <td valign='middle' align='center' style='font-family: Tahoma, Geneva, sans-serif; height: 25px; font-size: 11px; line-height: 1.1; color: $project_tnc_color; border-collapse: collapse; background-color: $project_tnc_bg; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; text-align: center;'>
                Terms and conditions <a RILT='Terms & Conditons' href='$project_host$project_tnc' target='_blank' style='text-decoration: underline; color: $project_tnc_color; font-size: 11px;'>apply</a>.
            </td>
        </tr>
    ";
}
else {
    echo "";
}
?>
<!-- footer -->
<?php include(__DIR__."/../../inc/view/footer.php"); ?>
