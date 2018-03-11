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
                <td valign='top' align='left' style='padding: 0; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid;  background-color: <?php echo "$project_box_color" ?>;'>
                    <a href='<?php echo "$main_banner_url" ?>' target='_blank'>
                        <img class='ImgL' src='<?php echo "$project_host$main_banner" ?>' alt='' style='padding: 0; display:block; border-collapse: collapse; font-family: Verdana, Geneva, sans-serif; font-size: 20px; line-height: 534px; text-align: center; background-color: <?php echo "$project_box_color" ?>;'>
                    </a>
                </td>
            </tr>

            <tr>
                <td valign="top" align="center" style="padding:0; padding-top:35px; font-family:Tahoma, Geneva, sans-serif; font-size: 24px; line-height: 1.1; color: #fff; border-collapse:collapse; background-color:<?php echo "$project_box_color" ?>;  border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid;">
                        <strong><?php echo "$project_dd_title" ?></strong>
                </td>
            </tr>
            <tr>
    <td valign="top" align="center" height="20" style="padding:0; padding-top:10px; height: 20px; font-family:Tahoma, Geneva, sans-serif; line-height: 1.4; color: #fff; border-collapse:collapse; background-color:<?php echo "$project_box_color" ?>;  border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid;">
        <table width="90%">
          <tbody><tr><td style="padding:0; height:1px; width:90px; ">
          	<hr style="border:1px solid #ffffff;;">
          </td>
          <td style="width:350px; font-size: 14px; color:#ffffff; text-align:center;"><?php echo "$project_dd_caption" ?></td>
          <td style="padding:0; height:1px; width:90px; ">
          	<hr style="border:1px solid #ffffff;;">
          </td>
        </tr></tbody></table>
    </td>
</tr>
<tr>
    <td valign="middle" align="center" height="0" style="padding-top: 10px; padding-bottom: 5px; border-collapse: collapse; background: <?php echo "$project_box_color" ?>; height: 0px; font-family: Tahoma, Geneva, sans-serif; font-size: 16px; line-height: 1.2; color: #000; border-right: 1px #ccc solid; border-left: 1px #ccc solid; font-weight: bold;">
            <a href="<?php echo "$project_dd_url" ?>" target="_blank">
                <img src="http://www.11street.my/promotion/2017/edm/img/dd/download-button.png" alt="Find Out More" style="padding:0; border: 0;border-collapse: collapse; display: block;">
            </a>
    </td>
</tr>





            <tr>
        		<td height='262' valign='top' align='left' style='padding: 25px 22px 1px; border-collapse: collapse; height: 262px; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; background-color: <?php echo "$project_box_color" ?>;'>
        			<table cellspacing='0' cellpadding='0' border='0'><tbody>
        				<tr>
        					<td width='606' height='262' valign='top' align='left' style='padding: 0; border-collapse: collapse; width: 606px; height: 262px; background-color: #fff;'>
        						<table cellspacing='0' cellpadding='0' border='0'><tbody>
        							<tr>
        								<!------------------------------------  DD Product 1 ------------------------------------>
        								<td height='262' width='121' valign='top' align='left' style='padding: 0 15px; border-collapse: collapse; height: 262px; width: 121px; border-right: 0.5px <?php echo "$project_box_color" ?> solid;'>
        									<table cellpadding='0' cellspacing='0' border='0'><tbody>
        										<tr>
        											<td height='120' valign='top' align='center' style='padding: 10px 0 5px; border-collapse: collapse; height: 120px;'>
        												<a href='<?php echo "$pd_url[0]"; ?>' target='_blank'>

        													<img width='120' height='120' class='ImgL' src='<?php echo "$project_host" ?><?php echo "$pd_image[0]"; ?>' alt='item 01' style='padding:0; border:none; display: block; font-family:Verdana, Geneva, sans-serif; font-size:16px; line-height:120px; color:#000; text-align:center; font-weight:bold;'>
        												</a>
        											</td>
        										</tr>
                                                <?php if(!empty($pd_percent[0])) {
                                                    echo "
        										<tr>
        											<td align='left' valign='middle' style='padding: 0; border-collapse: collapse;'>
        												<table cellspacing='0' cellpadding='0' border='0'><tbody>
                                                            <tr>
                    											<td align='left' valign='middle' style='padding: 0; border-collapse: collapse;'>
                    												<table cellspacing='0' cellpadding='0' border='0'><tbody>
                    													<tr>
                    														<td valign='middle' align='left' style='font-family:Verdana, Geneva, sans-serif; font-weight:bold; font-size:30px; line-height:34px; color:#f22a2b;'>
                    															$pd_percent[0]
                    														</td>
                    														<td valign='middle' align='left' style='padding: 0; border-collapse: collapse;'>
                    															<table cellpadding='0' cellspacing='0' border='0'><tbody>
                    																<tr>
                    																	<td style='font-family:Verdana, Geneva, sans-serif; font-size:12px; line-height:12px; font-weight:bold; color:#f22a2b;'>
                    																		%
                    																	</td>
                    																</tr>
                    																<tr>
                    																	<td style='font-family:Verdana, Geneva, sans-serif; font-size:12px; line-height:14px; color:#000000; font-weight:bold; color:#f22a2b;'>
                    																		OFF
                    																	</td>
                    																</tr>
                    															</tbody></table>
                    														</td>
                    													</tr>
                    												</tbody></table>
                    											</td>
                    										</tr>
        												</tbody></table>
        											</td>
        										</tr>
                                                ";}
                                                else echo "$special_price";
                                                ?>
        										<tr>
        											<td align='left' valign='top' style='font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#000000; line-height:14px; height:42px; '>
        											<?php echo "$pd_title[0]"; ?>
        											</td>
        										</tr>
        										<tr>
        											<td valign='top' align='left' style='padding: 0 0 10px; border-collapse: collapse; font-family: Verdana, Geneva, sans-serif; font-size: 9px; color: #000; line-height: 1.2; font-style: italic;'>
        												(RRP:RM <?php echo "$pd_rrp[0]"; ?>)
        											</td>
        										</tr>
        										<tr>
        											<td height='30' valign='top' align='left' style='padding: 0; border-collapse: collapse; height: 30px; padding-bottom:10px;'><!--Remove Padding Bottom For next Promo-->
        												<table cellpadding='0' cellspacing='0' border='0'><tbody>
        													<tr>
        														<td width='90' height='30' valign='middle' align='center' style='padding: 0; border-collapse: collapse; width: 90px; height: 30px; background-color: #000;'>
        															<table cellspacing='0' cellpadding='0' border='0'><tbody>
        																<tr>
        																	<td valign='middle' align='center' style='padding: 0; border-collapse: collapse; background-color: #000;'>
        																		<table><tbody>
        																			<tr>
        																				<td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 8px; line-height: 1.0; color: #fff;'>Only</td>
        																			</tr>
        																			<tr>
        																				<td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 10px; line-height: 1.0; color: #fff; font-weight: bold;'>RM</td>
        																			</tr>
        																		</tbody></table>
        																	</td>
        																	<td valign='middle' align='center' style='padding: 0 0 0 3px; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 12px; line-height: 1.0; color: #fff; font-weight: bold;'>
        																		<?php echo "$pd_dp[0]"; ?>
        																	</td>
        																</tr>
        															</tbody></table>
        														</td>
        														<td width='54' height='30' valign='middle' align='center' style='padding: 0; border-collapse: collapse; width: 54px; height: 30px;  font-family: Tahoma, Geneva, sans-serif; font-size: 8px; color:#fff; line-height: 1.0; background-color: #d3001f;'>
        															<a href='<?php echo "$pd_url[0]"; ?>' target='_blank' style='padding: 8px 0px; border-collapse: collapse; font-size: 8px; color: #fff; text-decoration: none; line-height: 1.0;'>
        																BUY NOW
        															</a>
        														</td>
        													</tr>
        												</tbody></table>
        											</td>
        										</tr>
        									</tbody></table>
        								</td>
        								<!-- //DD Product 1 -->
                                        <!------------------------------------  DD Product 2 ------------------------------------>
                                        <td height='262' width='121' valign='top' align='left' style='padding: 0 15px; border-collapse: collapse; height: 262px; width: 121px; border-left: 0.5px <?php echo "$project_box_color" ?> solid; border-right: 0.5px <?php echo "$project_box_color" ?> solid;'>
        									<table cellpadding='0' cellspacing='0' border='0'><tbody>
        										<tr>
        											<td height='120' valign='top' align='center' style='padding: 10px 0 5px; border-collapse: collapse; height: 120px;'>
        												<a href='<?php echo "$pd_url[1]"; ?>' target='_blank'>

        													<img width='120' height='120' class='ImgL' src='<?php echo "$project_host" ?><?php echo "$pd_image[1]"; ?>' alt='item 02' style='padding:0; border:none; display: block; font-family:Verdana, Geneva, sans-serif; font-size:16px; line-height:120px; color:#000; text-align:center; font-weight:bold;'>
        												</a>
        											</td>
        										</tr>

                                                <?php if(!empty($pd_percent[1])) {
                                                    echo "
        										<tr>
        											<td align='left' valign='middle' style='padding: 0; border-collapse: collapse;'>
        												<table cellspacing='0' cellpadding='0' border='0'><tbody>
        													<tr>
        														<td valign='middle' align='left' style='font-family:Verdana, Geneva, sans-serif; font-weight:bold; font-size:30px; line-height:34px; color:#f22a2b;'>
        															$pd_percent[1]
        														</td>
        														<td valign='middle' align='left' style='padding: 0; border-collapse: collapse;'>
        															<table cellpadding='0' cellspacing='0' border='0'><tbody>
        																<tr>
        																	<td style='font-family:Verdana, Geneva, sans-serif; font-size:12px; line-height:12px; font-weight:bold; color:#f22a2b;'>
        																		%
        																	</td>
        																</tr>
        																<tr>
        																	<td style='font-family:Verdana, Geneva, sans-serif; font-size:12px; line-height:14px; color:#000000; font-weight:bold; color:#f22a2b;'>
        																		OFF
        																	</td>
        																</tr>
        															</tbody></table>
        														</td>
        													</tr>
        												</tbody></table>
        											</td>
        										</tr>
                                                ";}
                                                else echo "$special_price";
                                                ?>
        										<tr>
        											<td align='left' valign='top' style='font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#000000; line-height:14px; height:42px; '>
        											<?php echo "$pd_title[1]"; ?>
        											</td>
        										</tr>
        										<tr>
        											<td valign='top' align='left' style='padding: 0 0 10px; border-collapse: collapse; font-family: Verdana, Geneva, sans-serif; font-size: 9px; color: #000; line-height: 1.2; font-style: italic;'>
        												(RRP:RM <?php echo "$pd_rrp[1]"; ?>)
        											</td>
        										</tr>
        										<tr>
        											<td height='30' valign='top' align='left' style='padding: 0; border-collapse: collapse; height: 30px;padding-bottom: 10px;'>
        												<table cellpadding='0' cellspacing='0' border='0'><tbody>
        													<tr>
        														<td width='90' height='30' valign='middle' align='center' style='padding: 0; border-collapse: collapse; width: 90px; height: 30px; background-color: #000;'>
        															<table cellspacing='0' cellpadding='0' border='0'><tbody>
        																<tr>
        																	<td valign='middle' align='center' style='padding: 0; border-collapse: collapse; background-color: #000;'>
        																		<table><tbody>
        																			<tr>
        																				<td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 8px; line-height: 1.0; color: #fff;'>Only</td>
        																			</tr>
        																			<tr>
        																				<td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 10px; line-height: 1.0; color: #fff; font-weight: bold;'>RM</td>
        																			</tr>
        																		</tbody></table>
        																	</td>
        																	<td valign='middle' align='center' style='padding: 0 0 0 3px; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 12px; line-height: 1.0; color: #fff; font-weight: bold;'>
        																		<?php echo "$pd_dp[1]"; ?>
        																	</td>
        																</tr>
        															</tbody></table>
        														</td>
        														<td width='54' height='30' valign='middle' align='center' style='padding: 0; border-collapse: collapse; width: 54px; height: 30px;  font-family: Tahoma, Geneva, sans-serif; font-size: 8px; color:#fff; line-height: 1.0; background-color: #d3001f;'>
        															<a href='<?php echo "$pd_url[1]"; ?>' target='_blank' style='padding: 8px 0px; border-collapse: collapse; font-size: 8px; color: #fff; text-decoration: none; line-height: 1.0;'>
        																BUY NOW
        															</a>
        														</td>
        													</tr>
        												</tbody></table>
        											</td>
        										</tr>
        									</tbody></table>
        								</td>
                                        <!-- //DD Product 2 -->
                                        <!------------------------------------  DD Product 3 ------------------------------------>
                                        <td height='262' width='121' valign='top' align='left' style='padding: 0 15px; border-collapse: collapse; height: 262px; width: 121px; border-left: 0.5px <?php echo "$project_box_color" ?> solid; border-right: 0.5px <?php echo "$project_box_color" ?> solid; '>
        									<table cellpadding='0' cellspacing='0' border='0'><tbody>
        										<tr>
        											<td height='120' valign='top' align='center' style='padding: 10px 0 5px; border-collapse: collapse; height: 120px;'>
        												<a href='<?php echo "$pd_url[2]"; ?>' target='_blank'>

        													<img width='120' height='120' class='ImgL' src='<?php echo "$project_host" ?><?php echo "$pd_image[2]"; ?>' alt='item 03' style='padding:0; border:none; display: block; font-family:Verdana, Geneva, sans-serif; font-size:16px; line-height:120px; color:#000; text-align:center; font-weight:bold;'>
        												</a>
        											</td>
        										</tr>

                                                <?php if(!empty($pd_percent[2])) {
                                                    echo "
        										<tr>
        											<td align='left' valign='middle' style='padding: 0; border-collapse: collapse;'>
        												<table cellspacing='0' cellpadding='0' border='0'><tbody>
                                                            <tr>
                    											<td align='left' valign='middle' style='padding: 0; border-collapse: collapse;'>
                    												<table cellspacing='0' cellpadding='0' border='0'><tbody>
                    													<tr>
                    														<td valign='middle' align='left' style='font-family:Verdana, Geneva, sans-serif; font-weight:bold; font-size:30px; line-height:34px; color:#f22a2b;'>
                    															$pd_percent[2]
                    														</td>
                    														<td valign='middle' align='left' style='padding: 0; border-collapse: collapse;'>
                    															<table cellpadding='0' cellspacing='0' border='0'><tbody>
                    																<tr>
                    																	<td style='font-family:Verdana, Geneva, sans-serif; font-size:12px; line-height:12px; font-weight:bold; color:#f22a2b;'>
                    																		%
                    																	</td>
                    																</tr>
                    																<tr>
                    																	<td style='font-family:Verdana, Geneva, sans-serif; font-size:12px; line-height:14px; color:#000000; font-weight:bold; color:#f22a2b;'>
                    																		OFF
                    																	</td>
                    																</tr>
                    															</tbody></table>
                    														</td>
                    													</tr>
                    												</tbody></table>
                    											</td>
                    										</tr>
        												</tbody></table>
        											</td>
        										</tr>
                                                ";}
                                                else echo "$special_price";
                                                ?>
        										<tr>
        											<td align='left' valign='top' style='font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#000000; line-height:14px; height:42px; '>
        											<?php echo "$pd_title[2]"; ?>
        											</td>
        										</tr>
        										<tr>
        											<td valign='top' align='left' style='padding: 0 0 10px; border-collapse: collapse; font-family: Verdana, Geneva, sans-serif; font-size: 9px; color: #000; line-height: 1.2; font-style: italic;'>
        												(RRP:RM <?php echo "$pd_rrp[2]"; ?>)
        											</td>
        										</tr>
        										<tr>
        											<td height='30' valign='top' align='left' style='padding: 0; border-collapse: collapse; height: 30px; padding-bottom: 10px;'>
        												<table cellpadding='0' cellspacing='0' border='0'><tbody>
        													<tr>
        														<td width='90' height='30' valign='middle' align='center' style='padding: 0; border-collapse: collapse; width: 90px; height: 30px; background-color: #000;'>
        															<table cellspacing='0' cellpadding='0' border='0'><tbody>
        																<tr>
        																	<td valign='middle' align='center' style='padding: 0; border-collapse: collapse; background-color: #000;'>
        																		<table><tbody>
        																			<tr>
        																				<td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 8px; line-height: 1.0; color: #fff;'>Only</td>
        																			</tr>
        																			<tr>
        																				<td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 10px; line-height: 1.0; color: #fff; font-weight: bold;'>RM</td>
        																			</tr>
        																		</tbody></table>
        																	</td>
        																	<td valign='middle' align='center' style='padding: 0 0 0 3px; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 12px; line-height: 1.0; color: #fff; font-weight: bold;'>
        																		<?php echo "$pd_dp[2]"; ?>
        																	</td>
        																</tr>
        															</tbody></table>
        														</td>
        														<td width='54' height='30' valign='middle' align='center' style='padding: 0; border-collapse: collapse; width: 54px; height: 30px;  font-family: Tahoma, Geneva, sans-serif; font-size: 8px; color:#fff; line-height: 1.0; background-color: #d3001f;'>
        															<a href='<?php echo "$pd_url[2]"; ?>' target='_blank' style='padding: 8px 0px; border-collapse: collapse; font-size: 8px; color: #fff; text-decoration: none; line-height: 1.0;'>
        																BUY NOW
        															</a>
        														</td>
        													</tr>
        												</tbody></table>
        											</td>
        										</tr>
        									</tbody></table>
        								</td>
                                        <!-- //DD Product 3 -->
                                        <!------------------------------------  DD Product 4 ------------------------------------>
                                        <td height='262' width='121' valign='top' align='left' style='padding: 0 15px; border-collapse: collapse; height: 262px; width: 121px; border-left: 0.5px <?php echo "$project_box_color" ?> solid;'>
        									<table cellpadding='0' cellspacing='0' border='0'><tbody>
        										<tr>
        											<td height='120' valign='top' align='center' style='padding: 10px 0 5px; border-collapse: collapse; height: 120px;'>
        												<a href='<?php echo "$pd_url[3]"; ?>' target='_blank'>
        													<img width='120' height='120' class='ImgL' src='<?php echo "$project_host" ?><?php echo "$pd_image[3]"; ?>' alt='item 04' style='padding:0; border:none; display: block; font-family:Verdana, Geneva, sans-serif; font-size:16px; line-height:120px; color:#000; text-align:center; font-weight:bold;'>
        												</a>
        											</td>
        										</tr>
                                                <?php if(!empty($pd_percent[3])) {
                                                    echo "
        										<tr>
        											<td align='left' valign='middle' style='padding: 0; border-collapse: collapse;'>
        												<table cellspacing='0' cellpadding='0' border='0'><tbody>
        													<tr>
        														<td valign='middle' align='left' style='font-family:Verdana, Geneva, sans-serif; font-weight:bold; font-size:30px; line-height:34px; color:#f22a2b;'>
        															$pd_percent[3]
        														</td>
        														<td valign='middle' align='left' style='padding: 0; border-collapse: collapse;'>
        															<table cellpadding='0' cellspacing='0' border='0'><tbody>
        																<tr>
        																	<td style='font-family:Verdana, Geneva, sans-serif; font-size:12px; line-height:12px; font-weight:bold; color:#f22a2b;'>
        																		%
        																	</td>
        																</tr>
        																<tr>
        																	<td style='font-family:Verdana, Geneva, sans-serif; font-size:12px; line-height:14px; color:#000000; font-weight:bold; color:#f22a2b;'>
        																		OFF
        																	</td>
        																</tr>
        															</tbody></table>
        														</td>
        													</tr>
        												</tbody></table>
        											</td>
        										</tr>
                                                ";}
                                                else echo "$special_price";
                                                ?>
        										<tr>
        											<td align='left' valign='top' style='font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#000000; line-height:14px; height:42px; '>
        											<?php echo "$pd_title[3]"; ?>
        											</td>
        										</tr>
        										<tr>
        											<td valign='top' align='left' style='padding: 0 0 10px; border-collapse: collapse; font-family: Verdana, Geneva, sans-serif; font-size: 9px; color: #000; line-height: 1.2; font-style: italic;'>
        												(RRP:RM <?php echo "$pd_rrp[3]"; ?>)
        											</td>
        										</tr>
        										<tr>
        											<td height='30' valign='top' align='left' style='padding: 0; border-collapse: collapse; height: 30px;padding-bottom: 10px;'>
        												<table cellpadding='0' cellspacing='0' border='0'><tbody>
        													<tr>
        														<td width='90' height='30' valign='middle' align='center' style='padding: 0; border-collapse: collapse; width: 90px; height: 30px; background-color: #000;'>
        															<table cellspacing='0' cellpadding='0' border='0'><tbody>
        																<tr>
        																	<td valign='middle' align='center' style='padding: 0; border-collapse: collapse; background-color: #000;'>
        																		<table><tbody>
        																			<tr>
        																				<td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 8px; line-height: 1.0; color: #fff;'>Only</td>
        																			</tr>
        																			<tr>
        																				<td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 10px; line-height: 1.0; color: #fff; font-weight: bold;'>RM</td>
        																			</tr>
        																		</tbody></table>
        																	</td>
        																	<td valign='middle' align='center' style='padding: 0 0 0 3px; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 12px; line-height: 1.0; color: #fff; font-weight: bold;'>
        																		<?php echo "$pd_dp[3]"; ?>
        																	</td>
        																</tr>
        															</tbody></table>
        														</td>
        														<td width='54' height='30' valign='middle' align='center' style='padding: 0; border-collapse: collapse; width: 54px; height: 30px;  font-family: Tahoma, Geneva, sans-serif; font-size: 8px; color:#fff; line-height: 1.0; background-color: #d3001f;'>
        															<a href='<?php echo "$pd_url[3]"; ?>' target='_blank' style='padding: 8px 0px; border-collapse: collapse; font-size: 8px; color: #fff; text-decoration: none; line-height: 1.0;'>
        																BUY NOW
        															</a>
        														</td>
        													</tr>
        												</tbody></table>
        											</td>
        										</tr>
        									</tbody></table>
        								</td>
                                        <!-- //DD Product 4 -->
        							</tr>
        						</tbody></table>
        					</td>
        				</tr>
        			</tbody></table>
        		</td>
        	</tr>


            <tr>
        		<td height='262' valign='top' align='left' style='padding: 0px 22px 25px; border-collapse: collapse; height: 262px; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; background-color: <?php echo "$project_box_color" ?>;'>
        			<table cellspacing='0' cellpadding='0' border='0'><tbody>
        				<tr>
        					<td width='606' height='262' valign='top' align='left' style='padding: 0; border-collapse: collapse; width: 606px; height: 262px; background-color: #fff;'>
        						<table cellspacing='0' cellpadding='0' border='0'><tbody>
        							<tr>
        								<!------------------------------------  DD Product 1 ------------------------------------>
        								<td height='262' width='121' valign='top' align='left' style='padding: 0 15px; border-collapse: collapse; height: 262px; width: 121px; border-right: 0.5px <?php echo "$project_box_color" ?> solid;'>
        									<table cellpadding='0' cellspacing='0' border='0'><tbody>
        										<tr>
        											<td height='120' valign='top' align='center' style='padding: 10px 0 5px; border-collapse: collapse; height: 120px;'>
        												<a href='<?php echo "$pd_url[4]"; ?>' target='_blank'>

        													<img width='120' height='120' class='ImgL' src='<?php echo "$project_host" ?><?php echo "$pd_image[4]"; ?>' alt='item 01' style='padding:0; border:none; display: block; font-family:Verdana, Geneva, sans-serif; font-size:16px; line-height:120px; color:#000; text-align:center; font-weight:bold;'>
        												</a>
        											</td>
        										</tr>
                                                <?php if(!empty($pd_percent[4])) {
                                                    echo "
        										<tr>
        											<td align='left' valign='middle' style='padding: 0; border-collapse: collapse;'>
        												<table cellspacing='0' cellpadding='0' border='0'><tbody>
                                                            <tr>
                    											<td align='left' valign='middle' style='padding: 0; border-collapse: collapse;'>
                    												<table cellspacing='0' cellpadding='0' border='0'><tbody>
                    													<tr>
                    														<td valign='middle' align='left' style='font-family:Verdana, Geneva, sans-serif; font-weight:bold; font-size:30px; line-height:34px; color:#f22a2b;'>
                    															$pd_percent[4]
                    														</td>
                    														<td valign='middle' align='left' style='padding: 0; border-collapse: collapse;'>
                    															<table cellpadding='0' cellspacing='0' border='0'><tbody>
                    																<tr>
                    																	<td style='font-family:Verdana, Geneva, sans-serif; font-size:12px; line-height:12px; font-weight:bold; color:#f22a2b;'>
                    																		%
                    																	</td>
                    																</tr>
                    																<tr>
                    																	<td style='font-family:Verdana, Geneva, sans-serif; font-size:12px; line-height:14px; color:#000000; font-weight:bold; color:#f22a2b;'>
                    																		OFF
                    																	</td>
                    																</tr>
                    															</tbody></table>
                    														</td>
                    													</tr>
                    												</tbody></table>
                    											</td>
                    										</tr>
        												</tbody></table>
        											</td>
        										</tr>
                                                ";}
                                                else echo "$special_price";
                                                ?>
        										<tr>
        											<td align='left' valign='top' style='font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#000000; line-height:14px; height:42px; '>
        											<?php echo "$pd_title[4]"; ?>
        											</td>
        										</tr>
        										<tr>
        											<td valign='top' align='left' style='padding: 0 0 10px; border-collapse: collapse; font-family: Verdana, Geneva, sans-serif; font-size: 9px; color: #000; line-height: 1.2; font-style: italic;'>
        												(RRP:RM <?php echo "$pd_rrp[4]"; ?>)
        											</td>
        										</tr>
        										<tr>
        											<td height='30' valign='top' align='left' style='padding: 0; border-collapse: collapse; height: 30px; padding-bottom:10px;'><!--Remove Padding Bottom For next Promo-->
        												<table cellpadding='0' cellspacing='0' border='0'><tbody>
        													<tr>
        														<td width='90' height='30' valign='middle' align='center' style='padding: 0; border-collapse: collapse; width: 90px; height: 30px; background-color: #000;'>
        															<table cellspacing='0' cellpadding='0' border='0'><tbody>
        																<tr>
        																	<td valign='middle' align='center' style='padding: 0; border-collapse: collapse; background-color: #000;'>
        																		<table><tbody>
        																			<tr>
        																				<td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 8px; line-height: 1.0; color: #fff;'>Only</td>
        																			</tr>
        																			<tr>
        																				<td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 10px; line-height: 1.0; color: #fff; font-weight: bold;'>RM</td>
        																			</tr>
        																		</tbody></table>
        																	</td>
        																	<td valign='middle' align='center' style='padding: 0 0 0 3px; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 12px; line-height: 1.0; color: #fff; font-weight: bold;'>
        																		<?php echo "$pd_dp[4]"; ?>
        																	</td>
        																</tr>
        															</tbody></table>
        														</td>
        														<td width='54' height='30' valign='middle' align='center' style='padding: 0; border-collapse: collapse; width: 54px; height: 30px;  font-family: Tahoma, Geneva, sans-serif; font-size: 8px; color:#fff; line-height: 1.0; background-color: #d3001f;'>
        															<a href='<?php echo "$pd_url[4]"; ?>' target='_blank' style='padding: 8px 0px; border-collapse: collapse; font-size: 8px; color: #fff; text-decoration: none; line-height: 1.0;'>
        																BUY NOW
        															</a>
        														</td>
        													</tr>
        												</tbody></table>
        											</td>
        										</tr>
        									</tbody></table>
        								</td>
        								<!-- //DD Product 1 -->

        								<!------------------------------------  DD Product 2 ------------------------------------>

        								<td height='262' width='121' valign='top' align='left' style='padding: 0 15px; border-collapse: collapse; height: 262px; width: 121px; border-left: 0.5px <?php echo "$project_box_color" ?> solid; border-right: 0.5px <?php echo "$project_box_color" ?> solid;'>
        									<table cellpadding='0' cellspacing='0' border='0'><tbody>
        										<tr>
        											<td height='120' valign='top' align='center' style='padding: 10px 0 5px; border-collapse: collapse; height: 120px;'>
        												<a href='<?php echo "$pd_url[5]"; ?>' target='_blank'>

        													<img width='120' height='120' class='ImgL' src='<?php echo "$project_host" ?><?php echo "$pd_image[5]"; ?>' alt='item 02' style='padding:0; border:none; display: block; font-family:Verdana, Geneva, sans-serif; font-size:16px; line-height:120px; color:#000; text-align:center; font-weight:bold;'>
        												</a>
        											</td>
        										</tr>
                                                <?php if(!empty($pd_percent[5])) {
                                                    echo "
        										<tr>
        											<td align='left' valign='middle' style='padding: 0; border-collapse: collapse;'>
        												<table cellspacing='0' cellpadding='0' border='0'><tbody>
                                                            <tr>
                    											<td align='left' valign='middle' style='padding: 0; border-collapse: collapse;'>
                    												<table cellspacing='0' cellpadding='0' border='0'><tbody>
                                                                        <tr>
                                											<td align='left' valign='middle' style='padding: 0; border-collapse: collapse;'>
                                												<table cellspacing='0' cellpadding='0' border='0'><tbody>
                                													<tr>
                                														<td valign='middle' align='left' style='font-family:Verdana, Geneva, sans-serif; font-weight:bold; font-size:30px; line-height:34px; color:#f22a2b;'>
                                															$pd_percent[5]
                                														</td>
                                														<td valign='middle' align='left' style='padding: 0; border-collapse: collapse;'>
                                															<table cellpadding='0' cellspacing='0' border='0'><tbody>
                                																<tr>
                                																	<td style='font-family:Verdana, Geneva, sans-serif; font-size:12px; line-height:12px; font-weight:bold; color:#f22a2b;'>
                                																		%
                                																	</td>
                                																</tr>
                                																<tr>
                                																	<td style='font-family:Verdana, Geneva, sans-serif; font-size:12px; line-height:14px; color:#000000; font-weight:bold; color:#f22a2b;'>
                                																		OFF
                                																	</td>
                                																</tr>
                                															</tbody></table>
                                														</td>
                                													</tr>
                                												</tbody></table>
                                											</td>
                                										</tr>
                    												</tbody></table>
                    											</td>
                    										</tr>
        												</tbody></table>
        											</td>
        										</tr>
                                                ";}
                                                else echo "$special_price";
                                                ?>
        										<tr>
        											<td align='left' valign='top' style='font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#000000; line-height:14px; height:42px; '>
        											<?php echo "$pd_title[5]"; ?>
        											</td>
        										</tr>
        										<tr>
        											<td valign='top' align='left' style='padding: 0 0 10px; border-collapse: collapse; font-family: Verdana, Geneva, sans-serif; font-size: 9px; color: #000; line-height: 1.2; font-style: italic;'>
        												(RRP:RM <?php echo "$pd_rrp[5]"; ?>)
        											</td>
        										</tr>
        										<tr>
        											<td height='30' valign='top' align='left' style='padding: 0; border-collapse: collapse; height: 30px;padding-bottom: 10px;'>
        												<table cellpadding='0' cellspacing='0' border='0'><tbody>
        													<tr>
        														<td width='90' height='30' valign='middle' align='center' style='padding: 0; border-collapse: collapse; width: 90px; height: 30px; background-color: #000;'>
        															<table cellspacing='0' cellpadding='0' border='0'><tbody>
        																<tr>
        																	<td valign='middle' align='center' style='padding: 0; border-collapse: collapse; background-color: #000;'>
        																		<table><tbody>
        																			<tr>
        																				<td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 8px; line-height: 1.0; color: #fff;'>Only</td>
        																			</tr>
        																			<tr>
        																				<td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 10px; line-height: 1.0; color: #fff; font-weight: bold;'>RM</td>
        																			</tr>
        																		</tbody></table>
        																	</td>
        																	<td valign='middle' align='center' style='padding: 0 0 0 3px; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 12px; line-height: 1.0; color: #fff; font-weight: bold;'>
        																		<?php echo "$pd_dp[5]"; ?>
        																	</td>
        																</tr>
        															</tbody></table>
        														</td>
        														<td width='54' height='30' valign='middle' align='center' style='padding: 0; border-collapse: collapse; width: 54px; height: 30px;  font-family: Tahoma, Geneva, sans-serif; font-size: 8px; color:#fff; line-height: 1.0; background-color: #d3001f;'>
        															<a href='<?php echo "$pd_url[5]"; ?>' target='_blank' style='padding: 8px 0px; border-collapse: collapse; font-size: 8px; color: #fff; text-decoration: none; line-height: 1.0;'>
        																BUY NOW
        															</a>
        														</td>
        													</tr>
        												</tbody></table>
        											</td>
        										</tr>
        									</tbody></table>
        								</td>
        								<!-- //DD Product 2 -->

        								<!------------------------------------  DD Product 3 ------------------------------------>

        								<td height='262' width='121' valign='top' align='left' style='padding: 0 15px; border-collapse: collapse; height: 262px; width: 121px; border-left: 0.5px <?php echo "$project_box_color" ?> solid; border-right: 0.5px <?php echo "$project_box_color" ?> solid; '>
        									<table cellpadding='0' cellspacing='0' border='0'><tbody>
        										<tr>
        											<td height='120' valign='top' align='center' style='padding: 10px 0 5px; border-collapse: collapse; height: 120px;'>
        												<a href='<?php echo "$pd_url[6]"; ?>' target='_blank'>

        													<img width='120' height='120' class='ImgL' src='<?php echo "$project_host" ?><?php echo "$pd_image[6]"; ?>' alt='item 03' style='padding:0; border:none; display: block; font-family:Verdana, Geneva, sans-serif; font-size:16px; line-height:120px; color:#000; text-align:center; font-weight:bold;'>
        												</a>
        											</td>
        										</tr>
                                                <?php if(!empty($pd_percent[6])) {
                                                    echo "
        										<tr>
        											<td align='left' valign='middle' style='padding: 0; border-collapse: collapse;'>
        												<table cellspacing='0' cellpadding='0' border='0'><tbody>
        													<tr>
        														<td valign='middle' align='left' style='font-family:Verdana, Geneva, sans-serif; font-weight:bold; font-size:30px; line-height:34px; color:#f22a2b;'>
        															$pd_percent[6]
        														</td>
        														<td valign='middle' align='left' style='padding: 0; border-collapse: collapse;'>
        															<table cellpadding='0' cellspacing='0' border='0'><tbody>
        																<tr>
        																	<td style='font-family:Verdana, Geneva, sans-serif; font-size:12px; line-height:12px; font-weight:bold; color:#f22a2b;'>
        																		%
        																	</td>
        																</tr>
        																<tr>
        																	<td style='font-family:Verdana, Geneva, sans-serif; font-size:12px; line-height:14px; color:#000000; font-weight:bold; color:#f22a2b;'>
        																		OFF
        																	</td>
        																</tr>
        															</tbody></table>
        														</td>
        													</tr>
        												</tbody></table>
        											</td>
        										</tr>
                                                ";}
                                                else echo "$special_price";
                                                ?>
        										<tr>
        											<td align='left' valign='top' style='font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#000000; line-height:14px; height:42px; '>
        											<?php echo "$pd_title[6]"; ?>
        											</td>
        										</tr>
        										<tr>
        											<td valign='top' align='left' style='padding: 0 0 10px; border-collapse: collapse; font-family: Verdana, Geneva, sans-serif; font-size: 9px; color: #000; line-height: 1.2; font-style: italic;'>
        												(RRP:RM <?php echo "$pd_rrp[6]"; ?>)
        											</td>
        										</tr>
        										<tr>
        											<td height='30' valign='top' align='left' style='padding: 0; border-collapse: collapse; height: 30px; padding-bottom: 10px;'>
        												<table cellpadding='0' cellspacing='0' border='0'><tbody>
        													<tr>
        														<td width='90' height='30' valign='middle' align='center' style='padding: 0; border-collapse: collapse; width: 90px; height: 30px; background-color: #000;'>
        															<table cellspacing='0' cellpadding='0' border='0'><tbody>
        																<tr>
        																	<td valign='middle' align='center' style='padding: 0; border-collapse: collapse; background-color: #000;'>
        																		<table><tbody>
        																			<tr>
        																				<td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 8px; line-height: 1.0; color: #fff;'>Only</td>
        																			</tr>
        																			<tr>
        																				<td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 10px; line-height: 1.0; color: #fff; font-weight: bold;'>RM</td>
        																			</tr>
        																		</tbody></table>
        																	</td>
        																	<td valign='middle' align='center' style='padding: 0 0 0 3px; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 12px; line-height: 1.0; color: #fff; font-weight: bold;'>
        																		<?php echo "$pd_dp[6]"; ?>
        																	</td>
        																</tr>
        															</tbody></table>
        														</td>
        														<td width='54' height='30' valign='middle' align='center' style='padding: 0; border-collapse: collapse; width: 54px; height: 30px;  font-family: Tahoma, Geneva, sans-serif; font-size: 8px; color:#fff; line-height: 1.0; background-color: #d3001f;'>
        															<a href='<?php echo "$pd_url[6]"; ?>' target='_blank' style='padding: 8px 0px; border-collapse: collapse; font-size: 8px; color: #fff; text-decoration: none; line-height: 1.0;'>
        																BUY NOW
        															</a>
        														</td>
        													</tr>
        												</tbody></table>
        											</td>
        										</tr>
        									</tbody></table>
        								</td>
        								<!-- //DD Product 3 -->

        								<!------------------------------------  DD Product 4 ------------------------------------>

        								<td height='262' width='121' valign='top' align='left' style='padding: 0 15px; border-collapse: collapse; height: 262px; width: 121px; border-left: 0.5px <?php echo "$project_box_color" ?> solid;'>
        									<table cellpadding='0' cellspacing='0' border='0'><tbody>
        										<tr>
        											<td height='120' valign='top' align='center' style='padding: 10px 0 5px; border-collapse: collapse; height: 120px;'>
        												<a href='<?php echo "$pd_url[7]"; ?>' target='_blank'>
        													<img width='120' height='120' class='ImgL' src='<?php echo "$project_host" ?><?php echo "$pd_image[7]"; ?>' alt='item 04' style='padding:0; border:none; display: block; font-family:Verdana, Geneva, sans-serif; font-size:16px; line-height:120px; color:#000; text-align:center; font-weight:bold;'>
        												</a>
        											</td>
        										</tr>
                                                <?php if(!empty($pd_percent[7])) {
                                                    echo "
        										<tr>
        											<td align='left' valign='middle' style='padding: 0; border-collapse: collapse;'>
        												<table cellspacing='0' cellpadding='0' border='0'><tbody>
        													<tr>
        														<td valign='middle' align='left' style='font-family:Verdana, Geneva, sans-serif; font-weight:bold; font-size:30px; line-height:34px; color:#f22a2b;'>
        															$pd_percent[7]
        														</td>
        														<td valign='middle' align='left' style='padding: 0; border-collapse: collapse;'>
        															<table cellpadding='0' cellspacing='0' border='0'><tbody>
        																<tr>
        																	<td style='font-family:Verdana, Geneva, sans-serif; font-size:12px; line-height:12px; font-weight:bold; color:#f22a2b;'>
        																		%
        																	</td>
        																</tr>
        																<tr>
        																	<td style='font-family:Verdana, Geneva, sans-serif; font-size:12px; line-height:14px; color:#000000; font-weight:bold; color:#f22a2b;'>
        																		OFF
        																	</td>
        																</tr>
        															</tbody></table>
        														</td>
        													</tr>
        												</tbody></table>
        											</td>
        										</tr>
                                                ";}
                                                else echo "$special_price";
                                                ?>
        										<tr>
        											<td align='left' valign='top' style='font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#000000; line-height:14px; height:42px; '>
        											<?php echo "$pd_title[7]"; ?>
        											</td>
        										</tr>
        										<tr>
        											<td valign='top' align='left' style='padding: 0 0 10px; border-collapse: collapse; font-family: Verdana, Geneva, sans-serif; font-size: 9px; color: #000; line-height: 1.2; font-style: italic;'>
        												(RRP:RM <?php echo "$pd_rrp[7]"; ?>)
        											</td>
        										</tr>
        										<tr>
        											<td height='30' valign='top' align='left' style='padding: 0; border-collapse: collapse; height: 30px;padding-bottom: 10px;'>
        												<table cellpadding='0' cellspacing='0' border='0'><tbody>
        													<tr>
        														<td width='90' height='30' valign='middle' align='center' style='padding: 0; border-collapse: collapse; width: 90px; height: 30px; background-color: #000;'>
        															<table cellspacing='0' cellpadding='0' border='0'><tbody>
        																<tr>
        																	<td valign='middle' align='center' style='padding: 0; border-collapse: collapse; background-color: #000;'>
        																		<table><tbody>
        																			<tr>
        																				<td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 8px; line-height: 1.0; color: #fff;'>Only</td>
        																			</tr>
        																			<tr>
        																				<td valign='middle' align='center' style='padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 10px; line-height: 1.0; color: #fff; font-weight: bold;'>RM</td>
        																			</tr>
        																		</tbody></table>
        																	</td>
        																	<td valign='middle' align='center' style='padding: 0 0 0 3px; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 12px; line-height: 1.0; color: #fff; font-weight: bold;'>
        																		<?php echo "$pd_dp[7]"; ?>
        																	</td>
        																</tr>
        															</tbody></table>
        														</td>
        														<td width='54' height='30' valign='middle' align='center' style='padding: 0; border-collapse: collapse; width: 54px; height: 30px;  font-family: Tahoma, Geneva, sans-serif; font-size: 8px; color:#fff; line-height: 1.0; background-color: #d3001f;'>
        															<a href='<?php echo "$pd_url[7]"; ?>' target='_blank' style='padding: 8px 0px; border-collapse: collapse; font-size: 8px; color: #fff; text-decoration: none; line-height: 1.0;'>
        																BUY NOW
        															</a>
        														</td>
        													</tr>
        												</tbody></table>
        											</td>
        										</tr>
        									</tbody></table>
        								</td>
        								<!-- //DD Product 4 -->
        							</tr>
        						</tbody></table>
        					</td>
        				</tr>
        			</tbody></table>
        		</td>
        	</tr>

            <?php if(!empty($b_image[0])) {
                echo "
                <tr>
                    <td valign='top' align='left' style='padding: 25px 22px 0; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; border-collapse: collapse; text-align: center; background-color: #000;'>
                        <a href='$b_url[0]' target='_blank'>
                            <img width='606' class='ImgL' src='$project_host$b_image[0]' alt='' style='padding: 0; display:block; border-collapse: collapse;'>
                        </a>
                    </td>
                </tr>
                ";}
                else echo "";
            ?>


            <?php if(!empty($b_image[1])) {
                echo "
                <tr>
                    <td valign='top' align='left' style='padding: 25px 22px 0; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; border-collapse: collapse; text-align: center; background-color: #000;'>
                        <a href='$b_url[1]' target='_blank'>
                            <img width='606' class='ImgL' src='$project_host$b_image[1]' alt='' style='padding: 0; display:block; border-collapse: collapse;'>
                        </a>
                    </td>
                </tr>
                ";}
                else echo "";
            ?>

<?php include(__DIR__."/../../inc/view/footer.php"); ?>
