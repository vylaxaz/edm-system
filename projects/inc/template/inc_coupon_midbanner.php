<?php if(!empty($nav_url[2]) && empty($nav_url[4]) && empty($nav_url[6])) {
    echo "
        <tr>
            <td style=\"background: $nav_url[8]; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; padding: 25px 0;\">
                <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                    <tr>
                        <td valign=\"middle\" align=\"center\" width=\"325\">
                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                <tr>
                                    <td>
                                        <img style=\"display: block;\" src=\"http://image.11st.my/g3/md_img/edm/system/mid_coupon/cleft.png\">
                                    </td>
                                    <td style=\"background: #fff; text-align: center;\">
                                        <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                            <tr>
                                                <td style=\"font-size: 17px; color: #7b7b7b; font-family: Arial, sans-serif; padding-bottom: 20px;\">$nav_url[2]</td>
                                            </tr>
                                            <tr>
                                                <td align=\"center\">
                                                    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                                        <tr>
                                                            <td valign=\"middle\" style=\"font-size: 20px; font-weight: bold; font-family: Arial, sans-serif;\">RM</td>
                                                            <td valign=\"middle\" style=\"font-size: 50px; font-weight: bold; font-family: Arial, sans-serif; line-height: 30px;\">$nav_url[3]</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <img style=\"display: block;\" src=\"http://image.11st.my/g3/md_img/edm/system/mid_coupon/cright.png\">
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td align=\"center\" width=\"325\">
                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                <tr>
                                    <td align=\"center\" style=\"color: #fff; font-weight: bold; font-size: 25px; line-height: normal; font-family:Tahoma, Geneva, sans-serif;\">$nav_url[0]</td>
                                </tr>
                                <tr>
                                    <td align=\"center\" style=\"font-family:Tahoma, Geneva, sans-serif; color:#fdd900; font-size:15px; line-height: normal;\">It's In Your Account Now</td>
                                </tr>
                                <tr>
                                    <td align=\"center\" style=\"padding:10px 0;\">
                                        <a style=\"font-size:13px; background: #d30020;color: #fff;border: 15px solid #d30020; display: block; width: 80%; text-decoration: none;\" href=\"$nav_url[1]\" target=\"_blank\">
                                            REDEEM NOW
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td align=\"center\" style=\"color:#fff;\">Terms & Conditions Apply.</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    ";
    }
    elseif(!empty($nav_url[2]) && !empty($nav_url[4]) && empty($nav_url[6])) {
        echo "
        <tr>
            <td style=\"background: $nav_url[8]; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; padding: 25px 0;\">
                <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                    <tr>
                        <td align=\"center\" width=\"380\" style=\"padding: 0 25px; line-height: normal;\">
                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                <tr>
                                    <td align=\"center\" style=\"color: #fff; font-weight: bold; font-size: 25px; line-height: normal; font-family:Tahoma, Geneva, sans-serif;\">$nav_url[0]</td>
                                </tr>
                                <tr>
                                    <td align=\"center\" style=\"font-family:Tahoma, Geneva, sans-serif; color:#fdd900; font-size:15px; line-height: normal;\">It's In Your Account Now</td>
                                </tr>
                                <tr>
                                    <td align=\"center\" style=\"padding:10px 0;\">
                                        <a style=\"font-size:13px; background: #d30020;color: #fff;border: 15px solid #d30020; display: block; width: 80%; text-decoration: none;\" href=\"$nav_url[1]\" target=\"_blank\">
                                            REDEEM NOW
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td align=\"center\" style=\"color:#fff;\">Terms & Conditions Apply.</td>
                                </tr>
                            </table>
                        </td>
                        <td valign=\"middle\" align=\"center\" width=\"270\" style=\"padding: 0 25px;\">
                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                <tr>
                                    <td>
                                        <img style=\"display: block;\" src=\"http://image.11st.my/g3/md_img/edm/system/mid_coupon/cleft.png\">
                                    </td>
                                    <td style=\"background: #fff; text-align: center;\">
                                        <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                            <tr>
                                                <td style=\"font-size: 13px; color: #7b7b7b; font-family: Arial, sans-serif; padding-bottom: 10px;\">$nav_url[2]</td>
                                            </tr>
                                            <tr>
                                                <td align=\"center\">
                                                    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                                        <tr>
                                                            <td valign=\"middle\" style=\"font-size: 15px; font-weight: bold; font-family: Arial, sans-serif;\">RM</td>
                                                            <td valign=\"middle\" style=\"font-size: 30px; font-weight: bold; font-family: Arial, sans-serif; line-height: 30px;\">$nav_url[3]</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <img style=\"display: block;\" src=\"http://image.11st.my/g3/md_img/edm/system/mid_coupon/cright.png\">
                                    </td>
                                </tr>
                                <tr>
                                    <td style=\"height: 15px;\"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img style=\"display: block;\" src=\"http://image.11st.my/g3/md_img/edm/system/mid_coupon/cleft.png\">
                                    </td>
                                    <td style=\"background: #fff; text-align: center;\">
                                        <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                            <tr>
                                                <td style=\"font-size: 13px; color: #7b7b7b; font-family: Arial, sans-serif; padding-bottom: 10px;\">$nav_url[4]</td>
                                            </tr>
                                            <tr>
                                                <td align=\"center\">
                                                    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                                        <tr>
                                                            <td valign=\"middle\" style=\"font-size: 15px; font-weight: bold; font-family: Arial, sans-serif;\">RM</td>
                                                            <td valign=\"middle\" style=\"font-size: 30px; font-weight: bold; font-family: Arial, sans-serif; line-height: 30px;\">$nav_url[5]</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <img style=\"display: block;\" src=\"http://image.11st.my/g3/md_img/edm/system/mid_coupon/cright.png\">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        ";
    }
    elseif(!empty($nav_url[2]) && !empty($nav_url[4]) && !empty($nav_url[6])) {
        echo "
            <tr>
                <td style=\"background: $nav_url[8]; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid; padding: 25px 0;\">
                    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                        <tr>
                            <td align=\"center\" style=\"color: #fff; font-weight: bold; font-size: 25px; line-height: normal; font-family:Tahoma, Geneva, sans-serif;\">$nav_url[0]</td>
                        </tr>
                        <tr>
                            <td align=\"center\" style=\"font-family:Tahoma, Geneva, sans-serif; color:#fdd900; font-size:15px; line-height: normal; padding: 0 0 15px 0;\">It's In Your Account Now</td>
                        </tr>
                        <tr>
                            <td valign=\"middle\" align=\"center\" width=\"650\">
                                <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"600\">
                                    <tr>
                                        <td width=\"200\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                                <tr>
                                                    <td>
                                                        <img style=\"width: 42px; display: block;\" src=\"http://image.11st.my/g3/md_img/edm/system/mid_coupon/cleft.png\">
                                                    </td>
                                                    <td style=\"background: #fff; text-align: center; width: 100px;\">
                                                        <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width: 100%; text-align: center;\">
                                                            <tr>
                                                                <td style=\"font-size: 13px; color: #7b7b7b; font-family: Arial, sans-serif; padding-bottom: 10px;\">$nav_url[2]</td>
                                                            </tr>
                                                            <tr>
                                                                <td align=\"center\">
                                                                    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                                                        <tr>
                                                                            <td valign=\"middle\" style=\"font-size: 15px; font-weight: bold; font-family: Arial, sans-serif;\">RM</td>
                                                                            <td valign=\"middle\" style=\"font-size: 30px; font-weight: bold; font-family: Arial, sans-serif; line-height: 30px;\">$nav_url[3]</td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <img style=\"width: 42px; display: block;\" src=\"http://image.11st.my/g3/md_img/edm/system/mid_coupon/cright.png\">
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td width=\"200\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                                <tr>
                                                    <td>
                                                        <img style=\"width: 42px; display: block;\" src=\"http://image.11st.my/g3/md_img/edm/system/mid_coupon/cleft.png\">
                                                    </td>
                                                    <td style=\"background: #fff; text-align: center; width: 100px;\">
                                                        <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width: 100%; text-align: center;\">
                                                            <tr>
                                                                <td style=\"font-size: 13px; color: #7b7b7b; font-family: Arial, sans-serif; padding-bottom: 10px;\">$nav_url[4]</td>
                                                            </tr>
                                                            <tr>
                                                                <td align=\"center\">
                                                                    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                                                        <tr>
                                                                            <td valign=\"middle\" style=\"font-size: 15px; font-weight: bold; font-family: Arial, sans-serif;\">RM</td>
                                                                            <td valign=\"middle\" style=\"font-size: 30px; font-weight: bold; font-family: Arial, sans-serif; line-height: 30px;\">$nav_url[5]</td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <img style=\"width: 42px; display: block;\" src=\"http://image.11st.my/g3/md_img/edm/system/mid_coupon/cright.png\">
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td width=\"200\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                                <tr>
                                                    <td>
                                                        <img style=\"width: 42px; display: block;\" src=\"http://image.11st.my/g3/md_img/edm/system/mid_coupon/cleft.png\">
                                                    </td>
                                                    <td style=\"background: #fff; text-align: center; width: 100px;\">
                                                        <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width: 100%; text-align: center;\">
                                                            <tr>
                                                                <td style=\"font-size: 13px; color: #7b7b7b; font-family: Arial, sans-serif; padding-bottom: 10px;\">$nav_url[6]</td>
                                                            </tr>
                                                            <tr>
                                                                <td align=\"center\">
                                                                    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                                                        <tr>
                                                                            <td valign=\"middle\" style=\"font-size: 15px; font-weight: bold; font-family: Arial, sans-serif;\">RM</td>
                                                                            <td valign=\"middle\" style=\"font-size: 30px; font-weight: bold; font-family: Arial, sans-serif; line-height: 30px;\">$nav_url[7]</td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <img style=\"width: 42px; display: block;\" src=\"http://image.11st.my/g3/md_img/edm/system/mid_coupon/cright.png\">
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align=\"center\" style=\"padding:15px 0;\">
                                <a style=\"font-size:13px; background: #d30020;color: #fff;border: 15px solid #d30020; display: block; width: 30%; text-decoration: none;\" href=\"$nav_url[1]\" target=\"_blank\">
                                    REDEEM NOW
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td align=\"center\" style=\"color:#fff;\">Terms & Conditions Apply.</td>
                        </tr>
                    </table>
                </td>
            </tr>
        ";
    }
    else {
        echo "";
    }
 ?>
