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

            <?php if (!empty($project_tnc)) {
                echo "
                    <tr>
                        <td valign='top' align='left' style='padding: 0; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid;  background-color: #ffb021;'>
                            <a href='$project_coupon_url' target='_blank'>
                                <img class='ImgL' src='$project_host$project_coupon_src' alt='' style='padding: 0; display:block; border-collapse: collapse; font-family: Verdana, Geneva, sans-serif; font-size: 20px; line-height: 534px; text-align: center; background-color: #ffb021;'>
                            </a>
                        </td>
                    </tr>
                ";
            }
            else {
                echo "";
            }
            ?>

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


            <tr>
            		<td height="200" valign="top" align="left" style="padding: 25px 22px 0px; border-collapse: collapse; height: 200px; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; background-color: <?php echo $project_box_color ?>;">
            			<table cellspacing="0" cellpadding="0" border="0"><tbody>
            				<tr>
            					<td width="606" height="200" valign="top" align="left" style="padding: 0; border-collapse: collapse; width: 606px; height: 200px; background-color: #fff;">
            						<table cellspacing="0" cellpadding="0" border="0"><tbody>
            							<tr>
            								<!------------------------------------  Product 1 ------------------------------------>
            								<td valign="top" align="left" style="padding: 0 15px; border-collapse: collapse; height: 200px; width: 303px; border-right: 1px #200903 solid;">
            									<table valign="top" align="left" style="padding:0px; border-collapse:collapse;"><tbody>
            										<tr>
            											<td width="140" valign="middle" align="left" style="background-color:#ffffff; padding:0px;width:140px;">
            												<table cellpadding="0" cellspacing="0" border="0">
            													<tbody>

                                                                    <?php if(!empty($pd_percent[0])) {
                                                                        echo "
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
                                                                    ";}
                                                                    else echo "$special_price2";
                                                                    ?>

            														<tr>
            															<td align="left" valign="top" style="font-family:Verdana, Geneva, sans-serif; font-size:15px; color:#000000; line-height:18px; height:75px; ">
            															<?php echo $pd_title[0] ?>
            															</td>
            														</tr>
            														<tr>
            															<td valign="top" align="left" style="padding: 0 0 10px; border-collapse: collapse; font-family: Verdana, Geneva, sans-serif; font-size: 9px; color: #000; line-height: 1.2; font-style: italic;">
            																(RRP:RM <?php echo $pd_rrp[0] ?>)
            															</td>
            														</tr>
            														<tr>
            															<td height="30" valign="top" align="left" style="padding: 0; border-collapse: collapse; height: 30px;">
            																<table cellpadding="0" cellspacing="0" border="0"><tbody>
            																	<tr>
            																		<td width="90" height="30" valign="middle" align="center" style="padding: 0; border-collapse: collapse; width: 90px; height: 30px; background-color: #000;">
            																			<table cellspacing="0" cellpadding="0" border="0"><tbody>
            																				<tr>
            																					<td valign="middle" align="center" style="padding: 0; border-collapse: collapse; background-color: #000;">
            																						<table><tbody>
            																							<tr>
            																								<td valign="middle" align="center" style="padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 8px; line-height: 1.0; color: #fff;">Only</td>
            																							</tr>
            																							<tr>
            																								<td valign="middle" align="center" style="padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 10px; line-height: 1.0; color: #fff; font-weight: bold;">RM</td>
            																							</tr>
            																						</tbody></table>
            																					</td>
            																					<td valign="middle" align="center" style="padding: 0 0 0 5px; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 14px; line-height: 1.0; color: #fff; font-weight: bold;">
            																						<?php echo $pd_dp[0] ?>
            																					</td>
            																				</tr>
            																			</tbody></table>
            																		</td>
            																		<td width="54" height="30" valign="middle" align="center" style="padding: 0; border-collapse: collapse; width: 54px; height: 30px;  font-family: Tahoma, Geneva, sans-serif; font-size: 8.5px; color:#fff; line-height: 1.0; background-color: #d3001f;">
            																			<a href="<?php echo $pd_url[0] ?>" target="_blank" style="padding: 8px 0px; border-collapse: collapse; font-size: 8.5px; color: #fff; text-decoration: none; line-height: 1.0;">
            																				BUY NOW
            																			</a>
            																		</td>
            																	</tr>
            																</tbody></table>
            															</td>
            														</tr>
            													</tbody>
            												</table>
            											</td>
            											<td width="120" height="200" style="width:120px;height:200px;padding-left:10px;">
            												<a href="<?php echo $pd_url[0] ?>" target="_blank">

            													<img width="120" height="120" class="ImgL" src="<?php echo $project_host ?><?php echo $pd_image[0] ?>" style="border:none; display:block; font-family:Verdana, Geneva, sans-serif; font-size:16px; line-height:120px; color:#ffffff; text-align:center; font-weight:bold; background-color:#cccccc" alt="Hot Item">
            												</a>
            											</td>
            										</tr>
            								</tbody></table>
            								</td>
            								<!-- //Prod 01 -->

            								<!------------------------------------  Product 2 ------------------------------------>
            								<td valign="top" align="left" style="padding: 0 15px; border-collapse: collapse; height: 200px; width: 303px; border-left: 1px #200903 solid;">
            									<table valign="top" align="left" style="padding:0px; border-collapse:collapse;"><tbody>
            									<tr>
            										<td width="140" valign="middle" align="left" style="background-color:#ffffff; padding:0px; width:140px;">
            											<table cellpadding="0" cellspacing="0" border="0">
            												<tbody>
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
                                                                else echo "$special_price2";
                                                                ?>
            													<tr>
            														<td align="left" valign="top" style="font-family:Verdana, Geneva, sans-serif; font-size:15px; color:#000000; line-height:18px; height:75px; ">
            														<?php echo $pd_title[1] ?>
            														</td>
            													</tr>
            													<tr>
            														<td valign="top" align="left" style="padding: 0 0 10px; border-collapse: collapse; font-family: Verdana, Geneva, sans-serif; font-size: 9px; color: #000; line-height: 1.2; font-style: italic;">
            															(RRP:RM <?php echo $pd_rrp[1] ?>)
            														</td>
            													</tr>
            													<tr>
            														<td height="30" valign="top" align="left" style="padding: 0; border-collapse: collapse; height: 30px;">
            															<table cellpadding="0" cellspacing="0" border="0"><tbody>
            																<tr>
            																	<td width="90" height="30" valign="middle" align="center" style="padding: 0; border-collapse: collapse; width: 90px; height: 30px; background-color: #000;">
            																		<table cellspacing="0" cellpadding="0" border="0"><tbody>
            																			<tr>
            																				<td valign="middle" align="center" style="padding: 0; border-collapse: collapse; background-color: #000;">
            																					<table><tbody>
            																						<tr>
            																							<td valign="middle" align="center" style="padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 8px; line-height: 1.0; color: #fff;">Only</td>
            																						</tr>
            																						<tr>
            																							<td valign="middle" align="center" style="padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 10px; line-height: 1.0; color: #fff; font-weight: bold;">RM</td>
            																						</tr>
            																					</tbody></table>
            																				</td>
            																				<td valign="middle" align="center" style="padding: 0 0 0 5px; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 14px; line-height: 1.0; color: #fff; font-weight: bold;">
            																					<?php echo $pd_dp[1] ?>
            																				</td>
            																			</tr>
            																		</tbody></table>
            																	</td>
            																	<td width="54" height="30" valign="middle" align="center" style="padding: 0; border-collapse: collapse; width: 54px; height: 30px;  font-family: Tahoma, Geneva, sans-serif; font-size: 8.5px; color:#fff; line-height: 1.0; background-color: #d3001f;">
            																		<a href="<?php echo $pd_url[1] ?>" target="_blank" style="padding: 8px 0px; border-collapse: collapse; font-size: 8.5px; color: #fff; text-decoration: none; line-height: 1.0;">
            																			BUY NOW
            																		</a>
            																	</td>
            																</tr>
            															</tbody></table>
            														</td>
            													</tr>
            												</tbody>
            											</table>
            										</td>
            										<td width="120" height="200" style="width:120px; height:200px;padding-left:10px;">
            											<a href="<?php echo $pd_url[1] ?>" target="_blank">

            												<img width="120" height="120" class="ImgL" src="<?php echo $project_host ?><?php echo $pd_image[1] ?>" style="border:none; display:block; font-family:Verdana, Geneva, sans-serif; font-size:16px; line-height:120px; color:#ffffff; text-align:center; font-weight:bold; background-color:#cccccc" alt="Hot Item">
            											</a>
            										</td>
            									</tr>
            								</tbody></table>
            								</td>
            								<!-- //Prod 02 -->
            							</tr>
            						</tbody></table>
            					</td>
            				</tr>
            			</tbody></table>
            		</td>
            		<!-- /Row 01 -->
            	</tr>
                <tr>
		<td height="200" valign="top" align="left" style="padding: 1px 22px 25px; border-collapse: collapse; height: 200px; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; background-color: <?php echo $project_box_color ?>;">
			<table cellspacing="0" cellpadding="0" border="0"><tbody>
				<tr>
					<td width="606" height="200" valign="top" align="left" style="padding: 0; border-collapse: collapse; width: 606px; height: 200px; background-color: #fff;">
						<table cellspacing="0" cellpadding="0" border="0"><tbody>
							<tr>
								<!------------------------------------  Product 7 ------------------------------------>
								<td valign="top" align="left" style="padding: 0 15px; border-collapse: collapse; height: 200px; width: 307px; border-right: 1px #200903 solid;">
									<table valign="top" align="left" style="padding:0px; border-collapse:collapse;"><tbody>
										<tr>
											<td width="140" valign="middle" align="left" style="background-color:#ffffff; padding:0px;width:140px;">
												<table cellpadding="0" cellspacing="0" border="0">
													<tbody>
                                                        <?php if(!empty($pd_percent[2])) {
                                                            echo "
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
                                                        ";}
                                                        else echo "$special_price2";
                                                        ?>
														<tr>
															<td align="left" valign="top" style="font-family:Verdana, Geneva, sans-serif; font-size:15px; color:#000000; line-height:18px; height:75px; ">
															<?php echo $pd_title[2] ?>
															</td>
														</tr>
														<tr>
															<td valign="top" align="left" style="padding: 0 0 10px; border-collapse: collapse; font-family: Verdana, Geneva, sans-serif; font-size: 9px; color: #000; line-height: 1.2; font-style: italic;">
																(RRP:RM <?php echo $pd_rrp[2] ?>)
															</td>
														</tr>
														<tr>
															<td height="30" valign="top" align="left" style="padding: 0; border-collapse: collapse; height: 30px;">
																<table cellpadding="0" cellspacing="0" border="0"><tbody>
																	<tr>
																		<td width="90" height="30" valign="middle" align="center" style="padding: 0; border-collapse: collapse; width: 90px; height: 30px; background-color: #000;">
																			<table cellspacing="0" cellpadding="0" border="0"><tbody>
																				<tr>
																					<td valign="middle" align="center" style="padding: 0; border-collapse: collapse; background-color: #000;">
																						<table><tbody>
																							<tr>
																								<td valign="middle" align="center" style="padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 8px; line-height: 1.0; color: #fff;">Only</td>
																							</tr>
																							<tr>
																								<td valign="middle" align="center" style="padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 10px; line-height: 1.0; color: #fff; font-weight: bold;">RM</td>
																							</tr>
																						</tbody></table>
																					</td>
																					<td valign="middle" align="center" style="padding: 0 0 0 5px; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 14px; line-height: 1.0; color: #fff; font-weight: bold;">
																						<?php echo $pd_dp[2] ?>
																					</td>
																				</tr>
																			</tbody></table>
																		</td>
																		<td width="54" height="30" valign="middle" align="center" style="padding: 0; border-collapse: collapse; width: 54px; height: 30px;  font-family: Tahoma, Geneva, sans-serif; font-size: 8.5px; color:#fff; line-height: 1.0; background-color: #d3001f;">
																			<a href="<?php echo $pd_url[2] ?>" target="_blank" style="padding: 8px 0px; border-collapse: collapse; font-size: 8.5px; color: #fff; text-decoration: none; line-height: 1.0;">
																				BUY NOW
																			</a>
																		</td>
																	</tr>
																</tbody></table>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
											<td width="120" height="200" style="width:120px;height:200px;padding-left:10px;">
												<a href="<?php echo $pd_url[2] ?>" target="_blank">

													<img width="120" height="120" class="ImgL" src="<?php echo $project_host ?><?php echo $pd_image[2] ?>" style="border:none; display:block; font-family:Verdana, Geneva, sans-serif; font-size:16px; line-height:120px; color:#ffffff; text-align:center; font-weight:bold; background-color:#cccccc" alt="Hot Item">
												</a>
											</td>
										</tr>
									</tbody></table>
								</td>
								<!-- //Prod 07 -->

								<!------------------------------------  Product 8 ------------------------------------>
								<td valign="top" align="left" style="padding: 0 15px; border-collapse: collapse; height: 200px; width: 303px; border-left: 1px #200903 solid;">
									<table valign="top" align="left" style="padding:0px; border-collapse:collapse;"><tbody>
										<tr>
											<td width="140" valign="middle" align="left" style="background-color:#ffffff; padding:0px;width:140px;">
												<table cellpadding="0" cellspacing="0" border="0">
													<tbody>
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
                                                        else echo "$special_price2";
                                                        ?>
														<tr>
															<td align="left" valign="top" style="font-family:Verdana, Geneva, sans-serif; font-size:15px; color:#000000; line-height:18px; height:75px; ">
															<?php echo $pd_title[3] ?>
															</td>
														</tr>
														<tr>
															<td valign="top" align="left" style="padding: 0 0 10px; border-collapse: collapse; font-family: Verdana, Geneva, sans-serif; font-size: 9px; color: #000; line-height: 1.2; font-style: italic;">
																(RRP:RM <?php echo $pd_rrp[3] ?>)
															</td>
														</tr>
														<tr>
															<td height="30" valign="top" align="left" style="padding: 0; border-collapse: collapse; height: 30px;">
																<table cellpadding="0" cellspacing="0" border="0"><tbody>
																	<tr>
																		<td width="90" height="30" valign="middle" align="center" style="padding: 0; border-collapse: collapse; width: 90px; height: 30px; background-color: #000;">
																			<table cellspacing="0" cellpadding="0" border="0"><tbody>
																				<tr>
																					<td valign="middle" align="center" style="padding: 0; border-collapse: collapse; background-color: #000;">
																						<table><tbody>
																							<tr>
																								<td valign="middle" align="center" style="padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 8px; line-height: 1.0; color: #fff;">Only</td>
																							</tr>
																							<tr>
																								<td valign="middle" align="center" style="padding: 0; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 10px; line-height: 1.0; color: #fff; font-weight: bold;">RM</td>
																							</tr>
																						</tbody></table>
																					</td>
																					<td valign="middle" align="center" style="padding: 0 0 0 5px; border-collapse: collapse; font-family: Tahoma, Geneva, sans-serif; font-size: 14px; line-height: 1.0; color: #fff; font-weight: bold;">
																						<?php echo $pd_dp[3] ?>
																					</td>
																				</tr>
																			</tbody></table>
																		</td>
																		<td width="54" height="30" valign="middle" align="center" style="padding: 0; border-collapse: collapse; width: 54px; height: 30px;  font-family: Tahoma, Geneva, sans-serif; font-size: 8.5px; color:#fff; line-height: 1.0; background-color: #d3001f;">
																			<a href="<?php echo $pd_url[3] ?>" target="_blank" style="padding: 8px 0px; border-collapse: collapse; font-size: 8.5px; color: #fff; text-decoration: none; line-height: 1.0;">
																				BUY NOW
																			</a>
																		</td>
																	</tr>
																</tbody></table>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
											<td width="120" height="200" style="width:120px;height:200px;padding-left:10px;">
												<a href="<?php echo $pd_url[3] ?>" target="_blank">

													<img width="120" height="120" class="ImgL" src="<?php echo $project_host ?><?php echo $pd_image[3] ?>" style="border:none; display:block; font-family:Verdana, Geneva, sans-serif; font-size:16px; line-height:120px; color:#ffffff; text-align:center; font-weight:bold; background-color:#cccccc" alt="Hot Item">
												</a>
											</td>
										</tr>
									</tbody></table>
								</td>
								<!-- //Prod 08 -->
							</tr>
						</tbody></table>
					</td>
				</tr>
			</tbody></table>
		</td>
		<!-- /Row 04 -->
	</tr>



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
