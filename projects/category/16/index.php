<?php require_once(__DIR__."/../../inc/view/controller_view.php"); ?>

<!-- Header -->
<?php include(__DIR__."/../../inc/view/header.php"); ?>

<!-- Masthead -->
<?php include(__DIR__."/../../inc/masthead/masthead_b.php"); ?>

<!-- Navigation -->
<?php include(__DIR__."/../../inc/view/navigation_v2.php"); ?>

<!-- Application -->
<?php include(__DIR__."/../../inc/view/application.php"); ?>

<!-- Main Banner -->
<tr>
    <td valign='top' align='left' style='padding: 0; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid;  background-color: <?php echo "$project_box_color" ?>;'>
        <a RILT="Top Banner" href='<?php echo "$main_banner_url" ?>' target='_blank'>
            <img class='ImgL' src='<?php echo "$project_host$main_banner" ?>' alt='' style='padding: 0; display: block; border-collapse: collapse; font-family: Verdana, Geneva, sans-serif; font-size: 20px; line-height: 534px; text-align: center; background-color: <?php echo "$project_box_color" ?>;'>
        </a>
    </td>
</tr>

<!-- Coupon -->
<?php if(!empty($project_coupon_src)) {
    echo "
        <tr>
            <td valign='top' align='left' style='padding: 0; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; background: $project_box_color; padding-bottom: 25px;'>
                <a RILT='Top Banner' href='$project_coupon_url' target='_blank'>
                    <img class='ImgL' src='$project_host$project_coupon_src' alt='' style='padding: 0; display: block; border-collapse: collapse;'>
                </a>
            </td>
        </tr>
    ";
}
else echo "";
?>

<!-- Middle Banner -->
<?php if(!empty($b_image[2])) {
    echo "
        <tr>
            <td valign='top' align='center' style='padding:25px 0 12px 0; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; background-color: $project_box_color;'>
                <a RILT='Mid Banner' href='$b_url[2]' target='_blank'>
                <img width='606' height='185' class='ImgL' src='$project_host$b_image[2]' alt='More Shocking Deals' style='padding: 0;'>
                </a>
            </td>
        </tr>
    ";
}
else echo "";
?>

<!-- Coupon Midbanner -->
<?php include '../../inc/template/inc_coupon_midbanner.php';?>

<!-- Daily Deals -->
<?php if(!empty($project_dd_title) && !empty($project_dd_caption)) {
    echo "
<tr>
    <td valign='top' align='center' style='padding: 0; padding-top: 35px; font-family: Tahoma, Geneva, sans-serif; font-size: 24px; line-height: 1.1; color: #000; border-collapse: collapse; background-color: $project_box_color;  border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid;'>
        <strong>$project_dd_title</strong>
    </td>
</tr>
<tr>
    <td valign='top' align='center' height='20' style='padding: 0; padding-top: 10px; height: 20px; font-family: Tahoma, Geneva, sans-serif; line-height: 1.4; color: #000; border-collapse: collapse; background-color: $project_box_color;  border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid;'>
        <table width='90%'>
            <tbody>
                <tr>
                    <td style='padding:0; height:1px; width:90px; '>
                        <hr style='border:1px solid #000;'>
                    </td>
                    <td style='width:350px; font-size: 14px; color:#000; text-align:center;'>
                        $project_dd_caption
                    </td>
                    <td style='padding:0; height:1px; width:90px; '>
                        <hr style='border:1px solid #000;'>
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
elseif(!empty($project_dd_title) && empty($project_dd_caption)) { echo "
<tr>
    <td height='30' style='border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid;'></td>
</tr>
<tr>
    <td valign='top' align='center' style='font-family: Tahoma, Geneva, sans-serif; color: #fff; border-collapse: collapse; background-color: $project_box_color; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid;'>
        <table width='90%'>
            <tbody>
                <tr>
                    <td valign='middle' style='padding:0; height:1px; width:90px; '>
                        <hr style='border:1px solid #000000;'>
                    </td>
                    <td valign='middle' style='width:350px; font-size: 24px; color:#000; text-align:center; font-family: Tahoma, Geneva, sans-serif; line-height: normal;'>
                        <strong>$project_dd_title</strong>
                    </td>
                    <td valign='middle' style='padding:0; height:1px; width:90px; '>
                        <hr style='border:1px solid #000000;'>
                    </td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>
<tr>
    <td height='30' style='border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid;'></td>
</tr>
"; }
else echo "";
?>

<?php include("product_listing.php"); ?>

<!-- Bottom Banner -->
<?php
if (!empty($b_image[0]) && !empty($b_url[0])) {
    echo "
        <tr>
            <td style='padding: 25px 22px 0; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; background-color: #000;'>
                <a RILT='BottomBanner_1' href='$b_url[0]' target='_blank'>
                    <img width='606' class='ImgL' src='$project_host$b_image[0]' style='display: block;'>
                </a>
            </td>
        </tr>
    ";
}
else if (!empty($b_image[0]) && empty($b_url[0])) {
    echo "
    <tr>
        <td style='padding: 25px 22px 0; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; background-color: #000;'>
            <img width='606' class='ImgL' src='$project_host$b_image[0]' style='display: block;'>
        </td>
    </tr>
    ";
}
else echo '';
?>

<?php
if (!empty($b_image[1]) && !empty($b_url[1])) {
    echo "
        <tr>
            <td style='padding: 25px 22px 0; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; background-color: #000;'>
                <a RILT='BottomBanner_2' href='$b_url[1]' target='_blank'>
                    <img width='606' class='ImgL' src='$project_host$b_image[1]' style='display: block;'>
                </a>
            </td>
        </tr>
    ";
}
else if (!empty($b_image[1]) && empty($b_url[1])) {
    echo "
    <tr>
        <td style='padding: 25px 22px 0; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; background-color: #000;'>
            <img width='606' class='ImgL' src='$project_host$b_image[1]' style='display: block;'>
        </td>
    </tr>
    ";
}
else echo '';
 ?>

 <?php
 if (!empty($b_image[3]) && !empty($b_url[3])) {
     echo "
         <tr>
             <td style='padding: 25px 22px 0; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; background-color: #000;'>
                 <a RILT='BottomBanner_2' href='$b_url[3]' target='_blank'>
                     <img width='606' class='ImgL' src='$project_host$b_image[3]' style='display: block;'>
                 </a>
             </td>
         </tr>
     ";
 }
 else if (!empty($b_image[3]) && empty($b_url[3])) {
     echo "
     <tr>
         <td style='padding: 25px 22px 0; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; background-color: #000;'>
             <img width='606' class='ImgL' src='$project_host$b_image[3]' style='display: block;'>
         </td>
     </tr>
     ";
 }
 else echo '';
  ?>

  <?php
  if (!empty($b_image[4]) && !empty($b_url[4])) {
      echo "
          <tr>
              <td style='padding: 25px 22px 0; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; background-color: #000;'>
                  <a RILT='BottomBanner_2' href='$b_url[4]' target='_blank'>
                      <img width='606' class='ImgL' src='$project_host$b_image[4]' style='display: block;'>
                  </a>
              </td>
          </tr>
      ";
  }
  else if (!empty($b_image[4]) && empty($b_url[4])) {
      echo "
      <tr>
          <td style='padding: 25px 22px 0; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; background-color: #000;'>
              <img width='606' class='ImgL' src='$project_host$b_image[4]' style='display: block;'>
          </td>
      </tr>
      ";
  }
  else echo '';
   ?>

   <?php
   if (!empty($b_image[5]) && !empty($b_url[5])) {
       echo "
           <tr>
               <td style='padding: 25px 22px 0; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; background-color: #000;'>
                   <a RILT='BottomBanner_2' href='$b_url[5]' target='_blank'>
                       <img width='606' class='ImgL' src='$project_host$b_image[5]' style='display: block;'>
                   </a>
               </td>
           </tr>
       ";
   }
   else if (!empty($b_image[5]) && empty($b_url[5])) {
       echo "
       <tr>
           <td style='padding: 25px 22px 0; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; background-color: #000;'>
               <img width='606' class='ImgL' src='$project_host$b_image[5]' style='display: block;'>
           </td>
       </tr>
       ";
   }
   else echo '';
    ?>


<!-- Footer -->
<?php include(__DIR__."/../../inc/view/footer_v2.php"); ?>
