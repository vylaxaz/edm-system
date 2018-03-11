<?php require_once(__DIR__."/../../inc/view/controller_view.php"); ?>

<!-- Header -->
<?php include(__DIR__."/../../inc/view/header.php"); ?>

<!-- Masthead -->
<?php include(__DIR__."/../../inc/masthead/masthead_a.php"); ?>

<!-- Navigation -->
<?php include(__DIR__."/../../inc/view/navigation.php"); ?>

<!-- Application -->
<?php include(__DIR__."/../../inc/view/application.php"); ?>

            <tr><td valign="top" style="padding: 0; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0"><tbody>

                <tr>
                    <td valign='top' align='left' style='padding:0;border-collapse:collapse;border-left:1px #dfdfdf solid;border-right:1px #dfdfdf solid'>
                        <a style="display:block;" href='<?php echo "$main_banner_url" ?>' target='_blank'>
                            <img border='0' width='650' class='ImgL' src='<?php echo "$project_host$main_banner" ?>' alt='' style='padding:0;display:block;border-collapse:collapse'>
                        </a>
                    </td>
                </tr>

                <?php if (!empty($project_coupon_src)) {
                    echo "

                        <tr>
                            <td valign='top' align='left' style='padding:0;border-collapse:collapse;border-left:1px #dfdfdf solid;border-right:1px #dfdfdf solid'>
                                <a style='display:block;'  href='$project_host$project_coupon_url' target='_blank'>
                                    <img border='0' width='650' class='ImgL' src='$project_host$project_coupon_src' alt='' style='padding:0;display:block;border-collapse:collapse'>
                                </a>
                            </td>
                        </tr>
                    ";
                }
                else {
                    echo "";
                }
                ?>

            </tbody></table>
            </td></tr>

            <?php if (!empty($project_tnc)) {
                echo "
                    <tr>
                        <td valign='middl' align='center' style=' font-family:Tahoma, Geneva, sans-serif; height: 25px; font-size: 11px; line-height: 1.1; color: $project_tnc_color; border-collapse:collapse; background-color:$project_tnc_bg;  border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; text-align:center;'>
                            Terms and conditions <a href='$project_host$project_tnc' target='_blank' style='text-decoration: underline; color: $project_tnc_color;font-size: 11px;'>apply</a>.
                        </td>
                    </tr>
                ";
            }
            else {
                echo "";
            }
            ?>






            <?php if (!empty($b_image[0])) {
                echo "
                    <tr>
                        <td valign='top' align='left' style='padding: 25px 22px 25px 22px; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; border-collapse: collapse; text-align: center; background-color: #000;'>
                            <a href='$b_url[0]' target='_blank'>
                                <img width='606' class='ImgL' src='$project_host$b_image[0]' alt='' style='padding: 0; display:block; border-collapse: collapse;'>
                            </a>
                        </td>
                    </tr>
                ";
            }
            else {
                echo "";
            }
            ?>

            <?php if (!empty($b_image[1])) {
                echo "
                    <tr>
                        <td valign='top' align='left' style='padding: 0 22px 25px 22px; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; border-collapse: collapse; text-align: center; background-color: #000;'>
                            <a href='$b_url[1]' target='_blank'>
                                <img width='606' class='ImgL' src='$project_host$b_image[1]' alt='' style='padding: 0; display:block; border-collapse: collapse;'>
                            </a>
                        </td>
                    </tr>
                ";
            }
            else {
                echo "";
            }
            ?>

<?php include(__DIR__."/../../inc/view/footer.php"); ?>
