<?php

if ($masthead == 0) {
    echo '
<tr>
    <td width="650">
    <table width="650" cellpadding="0" cellspacing="0" border="0">
        <tbody>
            <tr>
                <td valign="middle" style="padding: 0;">
                    <a RILT="Logo" href="http://www.11street.my/?utm_source=11ST&utm_medium=Email&utm_content=Logo&utm_campaign='.$logo_url.'&_n=tr&tid=1400016012&promo-id=" target="_blank">
                        <img src="http://image.11st.my/g3/md_img/edm/2017/10/brand/yes-masthead-edm.jpg" style="display: block; font-family: Verdana, Geneva, sans-serif; font-size: 11px; line-height: 54px; color: #000000; text-align: center;" alt="11street">
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
    </td>
</tr>
    ';
}
elseif ($masthead == 1) {
    echo '
<tr>
    <td width="650">
    <table width="650" cellpadding="0" cellspacing="0" border="0">
        <tbody>
            <tr>
                <td valign="top" align="right" style="padding: 0 0 10px 0; border-collapse: collapse; font-weight: bold; font-size: 10px; color: #000;">
                    REF: '.$project_ref_id.'
                </td>
            </tr>
            <tr>
                <td valign="middle" style="padding: 0;">
                    <a RILT="Logo" href="http://www.11street.my/?utm_source=11ST&utm_medium=Email&utm_content=Logo&utm_campaign='.$logo_url.'&_n=tr&tid=1400016012&promo-id=" target="_blank">
                        <img src="http://image.11st.my/g3/md_img/edm/assets/masthead/last-call-type-a.gif" style="border-left: 1px solid #91e5ed; display: block; font-family: Verdana, Geneva, sans-serif; font-size: 11px; line-height: 54px; color: #000000; text-align: center;" alt="11street">
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
    </td>
</tr>
    ';
}
else {
    echo '
<tr>
    <td width="650">
    <table width="650" cellpadding="0" cellspacing="0" border="0"><tbody>

           <tr><td valign="middle" style="padding:20px 0 20px;">

				<a RILT="Logo" href="http://www.11street.my/?utm_source=11ST&utm_medium=Email&utm_content=Logo&utm_campaign='.$logo_url.'&_n=tr&tid=1400016012&promo-id=" target="_blank">

					<img src="http://www.11street.my/promotion/2016/edm/img/header_logo.png" style="border:none; display:block; font-family:Verdana, Geneva, sans-serif; font-size:11px; line-height:54px; color:#000000; text-align:center" alt="11street">
				</a>
			</td></tr>
        </tbody></table>
    </td>
</tr>
    ';
}
