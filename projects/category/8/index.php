<?php require_once(__DIR__."/../../inc/view/controller_view.php"); ?>

<!-- Header -->
<?php include(__DIR__."/../../inc/view/header.php"); ?>

<!-- Masthead -->
<?php include(__DIR__."/../../inc/masthead/masthead_a.php"); ?>

<!-- Navigation -->
<?php include(__DIR__."/../../inc/view/navigation.php"); ?>

<!-- Application -->
<?php include(__DIR__."/../../inc/view/application.php"); ?>

<!-- Main Banner -->
<tr>
    <td valign='top' align='left' style='padding: 0; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; background-color: <?php echo "$project_box_color" ?>;'>
        <a RILT='Top Banner' href='<?php echo "$main_banner_url" ?>' target='_blank'>
            <img class='ImgL' src='<?php echo "$project_host$main_banner" ?>' alt='' style='padding: 0; display: block;'>
        </a>
    </td>
</tr>

<!-- 2nd Banner -->
<?php if(!empty($b_image[6])) {
    echo "
        <tr>
            <td valign='top' align='left' style='padding: 0; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid;'>
                <a RILT='Top Banner' href='$b_url[6]' target='_blank'>
                    <img class='ImgL' src='$project_host$b_image[6]' alt='' style='padding: 0; display: block;'>
                </a>
            </td>
        </tr>
    ";
}
else echo "";
?>

<!-- Coupon -->
<?php if(!empty($project_coupon_src)) {
    echo "
        <tr>
            <td valign='top' align='center' style='padding:25px 0 0 0; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; background-color: $project_box_color;'>
                <a RILT='Mid Banner' href='$project_coupon_url' target='_blank'>
                <img width='606' height='185' class='ImgL' src='$project_host$project_coupon_src' alt='More Shocking Deals' style='padding: 0;'>
                </a>
            </td>
        </tr>
    ";
}
else echo "";
?>

<!-- Daily Deals -->
<?php if(!empty($project_dd_title)) {
    echo "
<tr>
    <td valign='top' align='center' style='padding: 0; padding-top: 35px; font-family: Tahoma, Geneva, sans-serif; font-size: 24px; line-height: 1.1; color: #fff; border-collapse: collapse; background-color: $project_box_color;  border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid;'>
        <strong>$project_dd_title</strong>
    </td>
</tr>
<tr>
    <td valign='top' align='center' height='20' style='padding: 0; padding-top: 10px; height: 20px; font-family: Tahoma, Geneva, sans-serif; line-height: 1.4; color: #fff; border-collapse: collapse; background-color: $project_box_color;  border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid;'>
        <table width='90%'>
            <tbody>
                <tr>
                    <td style='padding:0; height:1px; width:90px; '>
                        <hr style='border:1px solid #ffffff;;'>
                    </td>
                    <td style='width:350px; font-size: 14px; color:#ffffff; text-align:center;'>
                        $project_dd_caption
                    </td>
                    <td style='padding:0; height:1px; width:90px; '>
                        <hr style='border:1px solid #ffffff;;'>
                    </td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>
<tr>
    <td valign='middle' align='center' height='0' style='padding-top: 10px; padding-bottom: 30px; border-collapse: collapse; background: $project_box_color; height: 0px; font-family: Tahoma, Geneva, sans-serif; font-size: 16px; line-height: 1.2; color: #000; border-right: 1px #ccc solid; border-left: 1px #ccc solid; font-weight: bold;'>
        <a RILT='CTA_Button' href='$project_dd_url' target='_blank'>
            <img src='http://www.11street.my/promotion/2017/edm/img/dd/download-button.png' alt='Find Out More' style='padding: 0; border: 0; border-collapse: collapse; display: block;'>
        </a>
    </td>
</tr>
";
}
else echo "";
?>

<!-- Product Container -->
<tr>
    <td style="padding: 15px 19px 5px; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; background-color: <?php echo $project_box_color ?>; ">
        <!-- 4 column -->
        <table cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td width="300" style="padding: 0 5px 0 0; width: 300px;">
                    <table cellspacing="0" cellpadding="0" border="0">
                        <tr>
                            <td><img class="ImgL" src="<?php echo "$project_host$b_image[2]" ?>" alt="For Him" style="display: block;"></td>
                        </tr>
                        <tr>
                            <td bgcolor="#69c6d2" style="padding: 0 5px 5px;">
                                <table cellspacing="0" cellpadding="0" border="0">
                                    <tr>
                                        <!-- Product 1 -->
                                        <td width='150' style='background-color: #fff; padding: 10px 12px; border-right: 1px solid #69c6d2;'>
                                            <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                <tr>
                                                    <td>
                                                        <a RILT='Product_1' href='<?php echo "$pd_url[0]"; ?>' target='_blank'>
                                                            <img width='120' height='120' class='ImgL' src='<?php echo "$project_host" ?><?php echo "$pd_image[0]"; ?>' alt='item' style='border: none; display: block;'>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php if (!empty($pd_percent[0]) && $pd_percent[0] !== 'sp' && $pd_percent[0] !== 'so') {
                                                echo "
                                                <tr>
                                                    <td style='padding: 5px 0;'>
                                                        <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                            <tbody>
                                                                <tr>
                                                                    <td style='font-family: Verdana, Geneva, sans-serif; font-weight: bold; font-size: 30px; color: #f22a2b;'>
                                                                        $pd_percent[0]
                                                                    </td>
                                                                    <td>
                                                                        <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; font-weight: bold; color: #f22a2b;'>
                                                                                        %
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: #000000; font-weight: bold; color: #f22a2b;'>
                                                                                        OFF
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
                                                ";}
                                                elseif ($pd_percent[0] == 'sp') {
                                                    echo "$special_price";
                                                }
                                                elseif ($pd_percent[0] == 'so') {
                                                    echo "$special_offer";
                                                }
                                                ?>
                                                <tr>
                                                    <td valign='top' style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: #000000; line-height: 14px; height: 42px; '>
                                                        <?php echo "$pd_title[0]"; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style='padding-bottom: 10px; font-family: Verdana, Geneva, sans-serif; font-size: 9px; color: #000; font-style: italic;'>
                                                        <?php
                                                            if ($pd_percent[0] == 'sp') { echo "&nbsp;"; }
                                                            elseif ($pd_percent[0] == 'so') { echo "&nbsp;"; }
                                                            else { echo "(RRP:RM $pd_rrp[0])"; }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table width='121' cellpadding='0' cellspacing='0' border='0' style='border-collapse: collapse;'>
                                                            <tbody>
                                                                <tr>
                                                                    <td width='25' height='30' valign='middle' align='center' style='background-color: #000;'>
                                                                        <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 8px; line-height: 1.0; color: #fff;'>Only</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 10px; line-height: 1.0; color: #fff; font-weight: bold;'>RM</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td width='51' valign='middle' align='center' style='padding-left: 3px; padding-right: 3px; font-family: Tahoma, Geneva, sans-serif; font-size: 12px; color: #fff; font-weight: bold; background-color: #000;'>
                                                                        <?php echo "$pd_dp[0]"; ?>
                                                                    </td>
                                                                    <td width='40' valign='middle' align='center' style='font-family: Tahoma, Geneva, sans-serif; font-size: 8px; color: #fff; background-color: #d3001f;'>
                                                                        <a RILT='CTA_Button' href='<?php echo "$pd_url[0]"; ?>' target='_blank' style='padding: 8px 0px; font-size: 7px; color: #fff; text-decoration: none;'>
                                                                            BUY NOW
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <!-- Product 2 -->
                                        <td width='150' style='background-color: #fff; padding: 10px 11px;'>
                                            <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                <tr>
                                                    <td>
                                                        <a RILT='Product_2' href='<?php echo "$pd_url[1]"; ?>' target='_blank'>
                                                            <img width='120' height='120' class='ImgL' src='<?php echo "$project_host" ?><?php echo "$pd_image[1]"; ?>' alt='item' style='border: none; display: block;'>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php if (!empty($pd_percent[1]) && $pd_percent[1] !== 'sp' && $pd_percent[1] !== 'so') {
                                                echo "
                                                <tr>
                                                    <td style='padding: 5px 0;'>
                                                        <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                            <tbody>
                                                                <tr>
                                                                    <td style='font-family: Verdana, Geneva, sans-serif; font-weight: bold; font-size: 30px; color: #f22a2b;'>
                                                                        $pd_percent[1]
                                                                    </td>
                                                                    <td>
                                                                        <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; font-weight: bold; color: #f22a2b;'>
                                                                                        %
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: #000000; font-weight: bold; color: #f22a2b;'>
                                                                                        OFF
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
                                                ";}
                                                elseif ($pd_percent[1] == 'sp') {
                                                    echo "$special_price";
                                                }
                                                elseif ($pd_percent[1] == 'so') {
                                                    echo "$special_offer";
                                                }
                                                ?>
                                                <tr>
                                                    <td valign='top' style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: #000000; line-height: 14px; height: 42px; '>
                                                        <?php echo "$pd_title[1]"; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style='padding-bottom: 10px; font-family: Verdana, Geneva, sans-serif; font-size: 9px; color: #000; font-style: italic;'>
                                                        <?php
                                                            if ($pd_percent[1] == 'sp') { echo "&nbsp;"; }
                                                            elseif ($pd_percent[1] == 'so') { echo "&nbsp;"; }
                                                            else { echo "(RRP:RM $pd_rrp[1])"; }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table width='121' cellpadding='0' cellspacing='0' border='0' style='border-collapse: collapse;'>
                                                            <tbody>
                                                                <tr>
                                                                    <td width='25' height='30' valign='middle' align='center' style='background-color: #000;'>
                                                                        <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 8px; line-height: 1.0; color: #fff;'>Only</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 10px; line-height: 1.0; color: #fff; font-weight: bold;'>RM</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td width='51' valign='middle' align='center' style='padding-left: 3px; padding-right: 3px; font-family: Tahoma, Geneva, sans-serif; font-size: 12px; color: #fff; font-weight: bold; background-color: #000;'>
                                                                        <?php echo "$pd_dp[1]"; ?>
                                                                    </td>
                                                                    <td  width='40' valign='middle' align='center' style='font-family: Tahoma, Geneva, sans-serif; font-size: 8px; color: #fff; background-color: #d3001f;'>
                                                                        <a RILT='CTA_Button' href='<?php echo "$pd_url[1]"; ?>' target='_blank' style='padding: 8px 0px; font-size: 7px; color: #fff; text-decoration: none;'>
                                                                            BUY NOW
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="300" style="padding: 0 0 0 5px; width: 300px;">
                    <table cellspacing="0" cellpadding="0" border="0">
                        <tr>
                            <td><img class="ImgL" src="<?php echo "$project_host$b_image[3]" ?>" alt="For Him" style="display: block;"></td>
                        </tr>
                        <tr>
                            <td bgcolor="#deafce" style="padding: 0 5px 5px;">
                                <table cellspacing="0" cellpadding="0" border="0">
                                    <tr>
                                        <!-- Product 3 -->
                                        <td width='150' style='background-color: #fff; padding: 10px 12px; border-right: 1px solid #deafce'>
                                            <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                <tr>
                                                    <td>
                                                        <a RILT='Product_3' href='<?php echo "$pd_url[2]"; ?>' target='_blank'>
                                                            <img width='120' height='120' class='ImgL' src='<?php echo "$project_host" ?><?php echo "$pd_image[2]"; ?>' alt='item' style='border: none; display: block;'>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php if (!empty($pd_percent[2]) && $pd_percent[2] !== 'sp' && $pd_percent[2] !== 'so') {
                                                echo "
                                                <tr>
                                                    <td style='padding: 5px 0;'>
                                                        <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                            <tbody>
                                                                <tr>
                                                                    <td style='font-family: Verdana, Geneva, sans-serif; font-weight: bold; font-size: 30px; color: #f22a2b;'>
                                                                        $pd_percent[2]
                                                                    </td>
                                                                    <td>
                                                                        <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; font-weight: bold; color: #f22a2b;'>
                                                                                        %
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: #000000; font-weight: bold; color: #f22a2b;'>
                                                                                        OFF
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
                                                ";}
                                                elseif ($pd_percent[2] == 'sp') {
                                                    echo "$special_price";
                                                }
                                                elseif ($pd_percent[2] == 'so') {
                                                    echo "$special_offer";
                                                }
                                                ?>
                                                <tr>
                                                    <td valign='top' style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: #000000; line-height: 14px; height: 42px; '>
                                                        <?php echo "$pd_title[2]"; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style='padding-bottom: 10px; font-family: Verdana, Geneva, sans-serif; font-size: 9px; color: #000; font-style: italic;'>
                                                        <?php
                                                            if ($pd_percent[2] == 'sp') { echo "&nbsp;"; }
                                                            elseif ($pd_percent[2] == 'so') { echo "&nbsp;"; }
                                                            else { echo "(RRP:RM $pd_rrp[2])"; }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table width='121' cellpadding='0' cellspacing='0' border='0' style='border-collapse: collapse;'>
                                                            <tbody>
                                                                <tr>
                                                                    <td width='25' height='30' valign='middle' align='center' style='background-color: #000;'>
                                                                        <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 8px; line-height: 1.0; color: #fff;'>Only</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 10px; line-height: 1.0; color: #fff; font-weight: bold;'>RM</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td width='51' valign='middle' align='center' style='padding-left: 3px; padding-right: 3px; font-family: Tahoma, Geneva, sans-serif; font-size: 12px; color: #fff; font-weight: bold; background-color: #000;'>
                                                                        <?php echo "$pd_dp[2]"; ?>
                                                                    </td>
                                                                    <td  width='40' valign='middle' align='center' style='font-family: Tahoma, Geneva, sans-serif; font-size: 8px; color: #fff; background-color: #d3001f;'>
                                                                        <a RILT='CTA_Button' href='<?php echo "$pd_url[2]"; ?>' target='_blank' style='padding: 8px 0px; font-size: 7px; color: #fff; text-decoration: none;'>
                                                                            BUY NOW
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <!-- Product 4 -->
                                        <td width='150' style='background-color: #fff; padding: 10px 11px;'>
                                            <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                <tr>
                                                    <td>
                                                        <a RILT='Product_4' href='<?php echo "$pd_url[3]"; ?>' target='_blank'>
                                                            <img width='120' height='120' class='ImgL' src='<?php echo "$project_host" ?><?php echo "$pd_image[3]"; ?>' alt='item' style='border: none; display: block;'>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php if (!empty($pd_percent[3]) && $pd_percent[3] !== 'sp' && $pd_percent[3] !== 'so') {
                                                echo "
                                                <tr>
                                                    <td style='padding: 5px 0;'>
                                                        <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                            <tbody>
                                                                <tr>
                                                                    <td style='font-family: Verdana, Geneva, sans-serif; font-weight: bold; font-size: 30px; color: #f22a2b;'>
                                                                        $pd_percent[3]
                                                                    </td>
                                                                    <td>
                                                                        <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; font-weight: bold; color: #f22a2b;'>
                                                                                        %
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: #000000; font-weight: bold; color: #f22a2b;'>
                                                                                        OFF
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
                                                ";}
                                                elseif ($pd_percent[3] == 'sp') {
                                                    echo "$special_price";
                                                }
                                                elseif ($pd_percent[3] == 'so') {
                                                    echo "$special_offer";
                                                }
                                                ?>
                                                <tr>
                                                    <td valign='top' style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: #000000; line-height: 14px; height: 42px; '>
                                                        <?php echo "$pd_title[3]"; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style='padding-bottom: 10px; font-family: Verdana, Geneva, sans-serif; font-size: 9px; color: #000; font-style: italic;'>
                                                        <?php
                                                            if ($pd_percent[3] == 'sp') { echo "&nbsp;"; }
                                                            elseif ($pd_percent[3] == 'so') { echo "&nbsp;"; }
                                                            else { echo "(RRP:RM $pd_rrp[3])"; }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table width='121' cellpadding='0' cellspacing='0' border='0' style='border-collapse: collapse;'>
                                                            <tbody>
                                                                <tr>
                                                                    <td width='25' height='30' valign='middle' align='center' style='background-color: #000;'>
                                                                        <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 8px; line-height: 1.0; color: #fff;'>Only</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 10px; line-height: 1.0; color: #fff; font-weight: bold;'>RM</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td width='51' valign='middle' align='center' style='padding-left: 3px; padding-right: 3px; font-family: Tahoma, Geneva, sans-serif; font-size: 12px; color: #fff; font-weight: bold; background-color: #000;'>
                                                                        <?php echo "$pd_dp[3]"; ?>
                                                                    </td>
                                                                    <td  width='40' valign='middle' align='center' style='font-family: Tahoma, Geneva, sans-serif; font-size: 8px; color: #fff; background-color: #d3001f;'>
                                                                        <a RILT='CTA_Button' href='<?php echo "$pd_url[3]"; ?>' target='_blank' style='padding: 8px 0px; font-size: 7px; color: #fff; text-decoration: none;'>
                                                                            BUY NOW
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>
<!-- 2nd row -->
<tr>
    <td style="padding: 0 19px 30px; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; background-color: <?php echo $project_box_color ?>; ">
        <!-- 4 column -->
        <table cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td width="300" style="padding: 0 5px 0 0; width: 300px;">
                    <table cellspacing="0" cellpadding="0" border="0">
                        <tr>
                            <td><img class="ImgL" src="<?php echo "$project_host$b_image[4]" ?>" alt="For Him" style="display: block;"></td>
                        </tr>
                        <tr>
                            <td bgcolor="#3f9955" style="padding: 0 5px 5px;">
                                <table cellspacing="0" cellpadding="0" border="0">
                                    <tr>
                                        <!-- Product 5 -->
                                        <td width='150' style='background-color: #fff; padding: 10px 12px; border-right: 1px solid #3f9955;'>
                                            <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                <tr>
                                                    <td>
                                                        <a RILT='Product_5' href='<?php echo "$pd_url[4]"; ?>' target='_blank'>
                                                            <img width='120' height='120' class='ImgL' src='<?php echo "$project_host" ?><?php echo "$pd_image[4]"; ?>' alt='item' style='border: none; display: block;'>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php if (!empty($pd_percent[4]) && $pd_percent[4] !== 'sp' && $pd_percent[4] !== 'so') {
                                                echo "
                                                <tr>
                                                    <td style='padding: 5px 0;'>
                                                        <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                            <tbody>
                                                                <tr>
                                                                    <td style='font-family: Verdana, Geneva, sans-serif; font-weight: bold; font-size: 30px; color: #f22a2b;'>
                                                                        $pd_percent[4]
                                                                    </td>
                                                                    <td>
                                                                        <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; font-weight: bold; color: #f22a2b;'>
                                                                                        %
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: #000000; font-weight: bold; color: #f22a2b;'>
                                                                                        OFF
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
                                                ";}
                                                elseif ($pd_percent[4] == 'sp') {
                                                    echo "$special_price";
                                                }
                                                elseif ($pd_percent[4] == 'so') {
                                                    echo "$special_offer";
                                                }
                                                ?>
                                                <tr>
                                                    <td valign='top' style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: #000000; line-height: 14px; height: 42px; '>
                                                        <?php echo "$pd_title[4]"; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style='padding-bottom: 10px; font-family: Verdana, Geneva, sans-serif; font-size: 9px; color: #000; font-style: italic;'>
                                                        <?php
                                                            if ($pd_percent[4] == 'sp') { echo "&nbsp;"; }
                                                            elseif ($pd_percent[4] == 'so') { echo "&nbsp;"; }
                                                            else { echo "(RRP:RM $pd_rrp[4])"; }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table width='121' cellpadding='0' cellspacing='0' border='0' style='border-collapse: collapse;'>
                                                            <tbody>
                                                                <tr>
                                                                    <td width='25' height='30' valign='middle' align='center' style='background-color: #000;'>
                                                                        <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 8px; line-height: 1.0; color: #fff;'>Only</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 10px; line-height: 1.0; color: #fff; font-weight: bold;'>RM</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td width='51' valign='middle' align='center' style='padding-left: 3px; padding-right: 3px; font-family: Tahoma, Geneva, sans-serif; font-size: 12px; color: #fff; font-weight: bold; background-color: #000;'>
                                                                        <?php echo "$pd_dp[4]"; ?>
                                                                    </td>
                                                                    <td width='40' valign='middle' align='center' style='font-family: Tahoma, Geneva, sans-serif; font-size: 8px; color: #fff; background-color: #d3001f;'>
                                                                        <a RILT='CTA_Button' href='<?php echo "$pd_url[4]"; ?>' target='_blank' style='padding: 8px 0px; font-size: 7px; color: #fff; text-decoration: none;'>
                                                                            BUY NOW
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <!-- Product 6 -->
                                        <td width='150' style='background-color: #fff; padding: 10px 11px;'>
                                            <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                <tr>
                                                    <td>
                                                        <a RILT='Product_6' href='<?php echo "$pd_url[5]"; ?>' target='_blank'>
                                                            <img width='120' height='120' class='ImgL' src='<?php echo "$project_host" ?><?php echo "$pd_image[5]"; ?>' alt='item' style='border: none; display: block;'>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php if (!empty($pd_percent[5]) && $pd_percent[5] !== 'sp' && $pd_percent[5] !== 'so') {
                                                echo "
                                                <tr>
                                                    <td style='padding: 5px 0;'>
                                                        <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                            <tbody>
                                                                <tr>
                                                                    <td style='font-family: Verdana, Geneva, sans-serif; font-weight: bold; font-size: 30px; color: #f22a2b;'>
                                                                        $pd_percent[5]
                                                                    </td>
                                                                    <td>
                                                                        <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; font-weight: bold; color: #f22a2b;'>
                                                                                        %
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: #000000; font-weight: bold; color: #f22a2b;'>
                                                                                        OFF
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
                                                ";}
                                                elseif ($pd_percent[5] == 'sp') {
                                                    echo "$special_price";
                                                }
                                                elseif ($pd_percent[5] == 'so') {
                                                    echo "$special_offer";
                                                }
                                                ?>
                                                <tr>
                                                    <td valign='top' style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: #000000; line-height: 14px; height: 42px; '>
                                                        <?php echo "$pd_title[5]"; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style='padding-bottom: 10px; font-family: Verdana, Geneva, sans-serif; font-size: 9px; color: #000; font-style: italic;'>
                                                        <?php
                                                            if ($pd_percent[5] == 'sp') { echo "&nbsp;"; }
                                                            elseif ($pd_percent[5] == 'so') { echo "&nbsp;"; }
                                                            else { echo "(RRP:RM $pd_rrp[5])"; }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table width='121' cellpadding='0' cellspacing='0' border='0' style='border-collapse: collapse;'>
                                                            <tbody>
                                                                <tr>
                                                                    <td width='25' height='30' valign='middle' align='center' style='background-color: #000;'>
                                                                        <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 8px; line-height: 1.0; color: #fff;'>Only</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 10px; line-height: 1.0; color: #fff; font-weight: bold;'>RM</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td width='51' valign='middle' align='center' style='padding-left: 3px; padding-right: 3px; font-family: Tahoma, Geneva, sans-serif; font-size: 12px; color: #fff; font-weight: bold; background-color: #000;'>
                                                                        <?php echo "$pd_dp[5]"; ?>
                                                                    </td>
                                                                    <td  width='40' valign='middle' align='center' style='font-family: Tahoma, Geneva, sans-serif; font-size: 8px; color: #fff; background-color: #d3001f;'>
                                                                        <a RILT='CTA_Button' href='<?php echo "$pd_url[5]"; ?>' target='_blank' style='padding: 8px 0px; font-size: 7px; color: #fff; text-decoration: none;'>
                                                                            BUY NOW
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="300" style="padding: 0 0 0 5px; width: 300px;">
                    <table cellspacing="0" cellpadding="0" border="0">
                        <tr>
                            <td><img class="ImgL" src="<?php echo "$project_host$b_image[5]" ?>" alt="For Him" style="display: block;"></td>
                        </tr>
                        <tr>
                            <td bgcolor="#ec9f0f" style="padding: 0 5px 5px;">
                                <table cellspacing="0" cellpadding="0" border="0">
                                    <tr>
                                        <!-- Product 7 -->
                                        <td width='150' style='background-color: #fff; padding: 10px 12px; border-right: 1px solid #ec9f0f'>
                                            <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                <tr>
                                                    <td>
                                                        <a RILT='Product_7' href='<?php echo "$pd_url[6]"; ?>' target='_blank'>
                                                            <img width='120' height='120' class='ImgL' src='<?php echo "$project_host" ?><?php echo "$pd_image[6]"; ?>' alt='item' style='border: none; display: block;'>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php if (!empty($pd_percent[6]) && $pd_percent[6] !== 'sp' && $pd_percent[6] !== 'so') {
                                                echo "
                                                <tr>
                                                    <td style='padding: 5px 0;'>
                                                        <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                            <tbody>
                                                                <tr>
                                                                    <td style='font-family: Verdana, Geneva, sans-serif; font-weight: bold; font-size: 30px; color: #f22a2b;'>
                                                                        $pd_percent[6]
                                                                    </td>
                                                                    <td>
                                                                        <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; font-weight: bold; color: #f22a2b;'>
                                                                                        %
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: #000000; font-weight: bold; color: #f22a2b;'>
                                                                                        OFF
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
                                                ";}
                                                elseif ($pd_percent[6] == 'sp') {
                                                    echo "$special_price";
                                                }
                                                elseif ($pd_percent[6] == 'so') {
                                                    echo "$special_offer";
                                                }
                                                ?>
                                                <tr>
                                                    <td valign='top' style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: #000000; line-height: 14px; height: 42px; '>
                                                        <?php echo "$pd_title[6]"; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style='padding-bottom: 10px; font-family: Verdana, Geneva, sans-serif; font-size: 9px; color: #000; font-style: italic;'>
                                                        <?php
                                                            if ($pd_percent[6] == 'sp') { echo "&nbsp;"; }
                                                            elseif ($pd_percent[6] == 'so') { echo "&nbsp;"; }
                                                            else { echo "(RRP:RM $pd_rrp[6])"; }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table width='121' cellpadding='0' cellspacing='0' border='0' style='border-collapse: collapse;'>
                                                            <tbody>
                                                                <tr>
                                                                    <td width='25' height='30' valign='middle' align='center' style='background-color: #000;'>
                                                                        <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 8px; line-height: 1.0; color: #fff;'>Only</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 10px; line-height: 1.0; color: #fff; font-weight: bold;'>RM</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td width='51' valign='middle' align='center' style='padding-left: 3px; padding-right: 3px; font-family: Tahoma, Geneva, sans-serif; font-size: 12px; color: #fff; font-weight: bold; background-color: #000;'>
                                                                        <?php echo "$pd_dp[6]"; ?>
                                                                    </td>
                                                                    <td  width='40' valign='middle' align='center' style='font-family: Tahoma, Geneva, sans-serif; font-size: 8px; color: #fff; background-color: #d3001f;'>
                                                                        <a RILT='CTA_Button' href='<?php echo "$pd_url[6]"; ?>' target='_blank' style='padding: 8px 0px; font-size: 7px; color: #fff; text-decoration: none;'>
                                                                            BUY NOW
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <!-- Product 8 -->
                                        <td width='150' style='background-color: #fff; padding: 10px 11px;'>
                                            <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                <tr>
                                                    <td>
                                                        <a RILT='Product_8' href='<?php echo "$pd_url[7]"; ?>' target='_blank'>
                                                            <img width='120' height='120' class='ImgL' src='<?php echo "$project_host" ?><?php echo "$pd_image[7]"; ?>' alt='item' style='border: none; display: block;'>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php if (!empty($pd_percent[7]) && $pd_percent[7] !== 'sp' && $pd_percent[7] !== 'so') {
                                                echo "
                                                <tr>
                                                    <td style='padding: 5px 0;'>
                                                        <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                            <tbody>
                                                                <tr>
                                                                    <td style='font-family: Verdana, Geneva, sans-serif; font-weight: bold; font-size: 30px; color: #f22a2b;'>
                                                                        $pd_percent[7]
                                                                    </td>
                                                                    <td>
                                                                        <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; font-weight: bold; color: #f22a2b;'>
                                                                                        %
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: #000000; font-weight: bold; color: #f22a2b;'>
                                                                                        OFF
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
                                                ";}
                                                elseif ($pd_percent[7] == 'sp') {
                                                    echo "$special_price";
                                                }
                                                elseif ($pd_percent[7] == 'so') {
                                                    echo "$special_offer";
                                                }
                                                ?>
                                                <tr>
                                                    <td valign='top' style='font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: #000000; line-height: 14px; height: 42px; '>
                                                        <?php echo "$pd_title[7]"; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style='padding-bottom: 10px; font-family: Verdana, Geneva, sans-serif; font-size: 9px; color: #000; font-style: italic;'>
                                                        <?php
                                                            if ($pd_percent[7] == 'sp') { echo "&nbsp;"; }
                                                            elseif ($pd_percent[7] == 'so') { echo "&nbsp;"; }
                                                            else { echo "(RRP:RM $pd_rrp[7])"; }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table width='121' cellpadding='0' cellspacing='0' border='0' style='border-collapse: collapse;'>
                                                            <tbody>
                                                                <tr>
                                                                    <td width='25' height='30' valign='middle' align='center' style='background-color: #000;'>
                                                                        <table cellspacing='0' cellpadding='0' border='0' style='border-collapse: collapse;'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 8px; line-height: 1.0; color: #fff;'>Only</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 10px; line-height: 1.0; color: #fff; font-weight: bold;'>RM</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td width='51' valign='middle' align='center' style='padding-left: 3px; padding-right: 3px; font-family: Tahoma, Geneva, sans-serif; font-size: 12px; color: #fff; font-weight: bold; background-color: #000;'>
                                                                        <?php echo "$pd_dp[7]"; ?>
                                                                    </td>
                                                                    <td  width='40' valign='middle' align='center' style='font-family: Tahoma, Geneva, sans-serif; font-size: 8px; color: #fff; background-color: #d3001f;'>
                                                                        <a RILT='CTA_Button' href='<?php echo "$pd_url[7]"; ?>' target='_blank' style='padding: 8px 0px; font-size: 7px; color: #fff; text-decoration: none;'>
                                                                            BUY NOW
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>

<!-- Bottom Banner -->
<?php if(!empty($b_image[0]) && !empty($b_url[0])) {
    echo "
        <tr>
            <td style='padding: 25px 22px 0; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; background-color: #000;'>
                <a RILT='BottomBanner_1' href='$b_url[0]' target='_blank'>
                    <img width='606' class='ImgL' src='$project_host$b_image[0]' alt='' style='display: block;'>
                </a>
            </td>
        </tr>
    ";
}
elseif(!empty($b_image[0]) && empty($b_url[0])) {
    echo "
        <tr>
            <td style='padding: 25px 22px 0; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; background-color: #000;'>
                <img width='606' class='ImgL' src='$project_host$b_image[0]' alt='' style='display: block;'>
            </td>
        </tr>
    ";
}
else echo "";
?>

<?php if(!empty($b_image[1]) && !empty($b_url[1])) {
    echo "
        <tr>
            <td style='padding: 25px 22px 0; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; background-color: #000;'>
                <a RILT='BottomBanner_2' href='$b_url[1]' target='_blank'>
                    <img width='606' class='ImgL' src='$project_host$b_image[1]' alt='' style='display: block;'>
                </a>
            </td>
        </tr>
    ";
}
elseif(!empty($b_image[1]) && empty($b_url[1])) {
    echo "
        <tr>
            <td style='padding: 25px 22px 0; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; background-color: #000;'>
                <img width='606' class='ImgL' src='$project_host$b_image[1]' alt='' style='display: block;'>
            </td>
        </tr>
    ";
}
else echo "";
?>

<!-- Footer -->
<?php include(__DIR__."/../../inc/view/footer.php"); ?>
