<?php
/*
 * Email Body
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$header_img = give_get_option( 'email_logo', '' );
?>

<table width="100%" bgcolor="#d4d4d4" cellpadding="0" cellspacing="0" border="0" st-sortable="preheader"><tbody><tr>
<td>
                <table width="560" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" hasbackground="true"><tbody><tr>
<td width="100%">
                                <table width="560" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth"><tbody>
<!-- Spacing --><tr>
<td width="100%" height="10">
                                            </td>
                                        </tr>
<!-- Spacing --><tr>
<td align="center" valign="middle" style="font-family: Helvetica, arial, sans-serif; font-size: 10px;color: #303030;text-align:center;" st-content="viewonline">
                                                <p>
                                                    &nbsp;
                                                </p>
                                            </td>
                                            <!-- Spacing -->

                                        </tr>
<tr>
<td width="100%" height="10">
                                            </td>
                                        </tr>
<!-- Spacing -->
</tbody></table>
</td>
                        </tr></tbody></table>
</td>
        </tr></tbody></table>
<table width="100%" bgcolor="#d4d4d4" cellpadding="0" cellspacing="0" border="0" st-sortable="header"><tbody><tr>
<td>
                <table width="560" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" hasbackground="true"><tbody><tr>
<td width="100%">
                                <table bgcolor="#303030" width="560" cellpadding="0" cellspacing="0" border="0" align="center" style="border-top-left-radius:5px;border-top-right-radius:5px;" class="devicewidth"><tbody>
<!-- Spacing --><tr>
<td height="10" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">
                                            </td>
                                        </tr>
<!-- Spacing --><tr>
<td>
                                                <!-- logo -->

                                                <table width="194" align="left" border="0" cellpadding="0" cellspacing="0"><tbody><tr>
<td width="20">
                                                            </td>
                                                            <td width="174" height="60" align="left">

                                                            <?php
                                                            if( ! empty( $header_img ) ) : ?>
                                                                <div id="template_header_image">
                                                                    <div class="imgpop">
                                                                    <a href="<?php echo get_home_url(); ?>"><img src="<?php echo esc_url( $header_img ); ?>" alt="<?php echo get_bloginfo( 'name' ); ?>"></a>
                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                                
                                                            </td>
                                                        </tr></tbody></table>
<!-- end of logo -->
</td>
                                        </tr>
<!-- Spacing --><tr>
<td height="10" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">
                                            </td>
                                        </tr>
<!-- Spacing -->
</tbody></table>
</td>
                        </tr></tbody></table>
</td>
        </tr></tbody></table>
<table width="100%" bgcolor="#d4d4d4" cellpadding="0" cellspacing="0" border="0" st-sortable="banner"><tbody><tr>
<td>
                <table width="560" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" hasbackground="true"><tbody><tr>
<td width="100%">
                                <table width="560" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth"><tbody><tr>
<!-- start of image --><td align="center">
                                                <div class="imgpop">
                                                    <a href="<?php echo get_home_url(); ?>"><img width="560" border="0" height="200" alt="" style="display:block; border:none; outline:none; text-decoration:none;" src="<?php echo get_give_email_images(); ?>thankyou-header.jpg" class="banner" st-image="edit" id="sfali83g9a1xckyj4mbdibe29"></a>
                                                </div>
                                            </td>
                                        </tr></tbody></table>
<!-- end of image -->
</td>
                        </tr></tbody></table>
</td>
        </tr></tbody></table>
<table width="100%" bgcolor="#d4d4d4" cellpadding="0" cellspacing="0" border="0" st-sortable="1-image+text-column"><tbody><tr>
<td>
                <table width="560" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" hasbackground="true"><tbody><tr>
<td width="100%">
                                <table bgcolor="#ffffff" width="560" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth"><tbody>
<!-- Spacing --><tr>
<td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">
                                            </td>
                                        </tr>
<!-- Spacing --><tr>
<td>
                                                <table width="520" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidthinner"><tbody>
<!-- image -->
<!-- /image --><!-- Spacing --><tr>
<td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">
                                                            </td>
                                                        </tr>
<!-- /Spacing --><tr>
<td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #2d2a26; text-align:left; line-height: 24px;" st-content="title">
                                                                <p>
                                                                    Thank You So Much for Your Kind Donation!
                                                                </p>
                                                            </td>
                                                        </tr>
<!-- Spacing --><tr>
<td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">
                                                            </td>
                                                        </tr>
<!-- /Spacing --><!-- content --><tr>
<td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #7a6e67; text-align:left; line-height: 24px;" st-content="text">
                                                                {email}
                                                            </td>
                                                        </tr>
<!-- end of content -->
</tbody></table>
</td>
                                        </tr>
<!-- Spacing --><tr>
<td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">
                                            </td>
                                        </tr>
<!-- Spacing --><!-- Spacing --><tr>
<td height="5" bgcolor="#2d2a26" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">
                                            </td>
                                        </tr>
<!-- Spacing -->
</tbody></table>
</td>
                        </tr></tbody></table>
</td>
        </tr></tbody></table>
<table width="100%" bgcolor="#d4d4d4" cellpadding="0" cellspacing="0" border="0" st-sortable="3-images-columns"><tbody><tr>
<td>
                <table width="560" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" hasbackground="true"><tbody><tr>
<td width="100%">
                                <table bgcolor="#2d2a26" width="560" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth"><tbody>
<!-- Spacing --><tr>
<td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">
                                            </td>
                                        </tr>
<!-- Spacing --><tr>
<td>
                                                <table width="520" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidthinner"><tbody><tr>
<td>
                                                                <!-- col 1 -->

                                                                <table width="160" align="left" border="0" cellpadding="0" cellspacing="0" class="col3img"><tbody>
<!-- image 2 --><tr>
<td align="center">
                                                                                <div class="imgpop">
                                                                                    <img src="<?php echo get_give_email_images(); ?>3col.jpg" alt="" border="0" width="160" height="100" style="display:block; border:none; outline:none; text-decoration:none;" class="col3img" st-image="edit" id="swptqrzsks1p4o27cyehr529">
</div>
                                                                            </td>
                                                                        </tr>
<!-- end of image2 -->
</tbody></table>
<!-- spacing --><table width="20" align="left" border="0" cellpadding="0" cellspacing="0" class="removeMobile"><tbody><tr>
<td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">
                                                                            </td>
                                                                        </tr></tbody></table>
<!-- end of spacing --><!-- col 2 --><table width="160" align="left" border="0" cellpadding="0" cellspacing="0" class="col3img"><tbody>
<!-- image 2 --><tr>
<td align="center">
                                                                                <div class="imgpop">
                                                                                    <img src="<?php echo get_give_email_images(); ?>3col.jpg" alt="" border="0" width="160" height="100" style="display:block; border:none; outline:none; text-decoration:none;" class="col3img" st-image="edit" id="0z49x3aodtclltp62u1h5mi">
</div>
                                                                            </td>
                                                                        </tr>
<!-- end of image2 -->
</tbody></table>
<!-- end of col 2 --><!-- spacing --><table width="1" align="left" border="0" cellpadding="0" cellspacing="0" class="removeMobile"><tbody><tr>
<td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">
                                                                            </td>
                                                                        </tr></tbody></table>
<!-- end of spacing --><!-- col 3 --><table width="160" align="right" border="0" cellpadding="0" cellspacing="0" class="col3img"><tbody>
<!-- image3 --><tr>
<td align="center">
                                        <div class="imgpop">
                                            <img src="<?php echo get_give_email_images(); ?>3col.jpg" alt="" width="160" height="100" border="0" style="display:block; border:none; outline:none; text-decoration:none;" class="col3img" st-image="edit" id="osd2jwvpmvag3geqswou07ldi">
</div>
                                                                            </td>
                                                                        </tr>
<!-- end of image3 -->
</tbody></table>
</td>
                                                        </tr></tbody></table>
</td>
                                        </tr>
<!-- Spacing --><tr>
<td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">
                                            </td>
                                        </tr>
<!-- Spacing -->
</tbody></table>
</td>
                        </tr></tbody></table>
</td>
        </tr></tbody></table>
<table width="100%" bgcolor="#d4d4d4" cellpadding="0" cellspacing="0" border="0" st-sortable="left-image"><tbody><tr>
<td>
                <table width="560" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" hasbackground="true"><tbody><tr>
<td width="100%">
                                <table bgcolor="#ffffff" width="560" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth"><tbody>
<!-- Spacing --><tr>
<td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">
                                            </td>
                                        </tr>
<!-- Spacing --><tr>
<td>
                                                <table width="520" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth"><tbody><tr>
<td>
                                                                <!-- Start of left column -->

                                                                <table width="200" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth"><tbody>
<!-- image --><tr>
<td width="200" height="150" align="center" class="devicewidth">
                                                                                <div class="imgpop">
                                                                                    <img src="<?php echo get_give_email_images(); ?>leftimg.jpg" alt="" border="0" width="200" height="150" style="display:block; border:none; outline:none; text-decoration:none;" class="col2img" st-image="edit" id="mmlk2b4f778bnrddir1wcdi">
</div>
                                                                            </td>
                                                                        </tr>
<!-- /image -->
</tbody></table>
<!-- end of left column --><!-- spacing for mobile devices--><table align="left" border="0" cellpadding="0" cellspacing="0" class="mobilespacing"><tbody><tr>
<td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">
                                                                            </td>
                                                                        </tr></tbody></table>
<!-- end of for mobile devices--><!-- start of right column --><table width="300" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidthmob"><tbody>
<tr>
<td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #2d2a26; text-align:left; line-height: 24px;" class="padding-top-right15" st-content="title">
                                                                                <p>
                                                                                    Your Heading Goes Here
                                                                                </p>
                                                                            </td>
                                                                        </tr>
<!-- end of title --><!-- Spacing --><tr>
<td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">
                                                                            </td>
                                                                        </tr>
<!-- /Spacing --><!-- content --><tr>
<td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #7a6e67; text-align:left; line-height: 24px;" class="padding-right15" st-content="text">
                                                                                <p>
                                                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                                                </p>
                                                                            </td>
                                                                        </tr>
<!-- end of content -->
</tbody></table>
<!-- end of right column -->
</td>
                                                        </tr></tbody></table>
</td>
                                        </tr>
<!-- Spacing --><tr>
<td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">
                                            </td>
                                        </tr>
<!-- Spacing --><!-- Spacing --><tr>
<td height="5" bgcolor="#2d2a26" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">
                                            </td>
                                        </tr>
<!-- Spacing -->
</tbody></table>
</td>
                        </tr></tbody></table>
</td>
        </tr></tbody></table>
<table width="100%" bgcolor="#d4d4d4" cellpadding="0" cellspacing="0" border="0" st-sortable="left-image"><tbody><tr>
<td>
                <table width="560" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" hasbackground="true"><tbody><tr>
<td width="100%">
                                <table bgcolor="#ffffff" width="560" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth"><tbody>
<!-- Spacing --><tr>
<td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">
                                            </td>
                                        </tr>
<!-- Spacing --><tr>
<td>
                                                <table width="520" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth"><tbody><tr>
<td>
                                                                <!-- Start of left column -->

                                                                <table width="200" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth"><tbody>
<!-- image --><tr>
<td width="200" height="150" align="center" class="devicewidth">
                                                                                <div class="imgpop">
                                                                                    <img src="<?php echo get_give_email_images(); ?>leftimg.jpg" alt="" border="0" width="200" height="150" style="display:block; border:none; outline:none; text-decoration:none;" class="col2img" st-image="edit" id="fbegapoaxfgmtgycbr68yqfr">
</div>
                                                                            </td>
                                                                        </tr>
<!-- /image -->
</tbody></table>
<!-- end of left column --><!-- spacing for mobile devices--><table align="left" border="0" cellpadding="0" cellspacing="0" class="mobilespacing"><tbody><tr>
<td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">
                                                                            </td>
                                                                        </tr></tbody></table>
<!-- end of for mobile devices--><!-- start of right column --><table width="300" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidthmob"><tbody>
<tr>
<td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #2d2a26; text-align:left; line-height: 24px;" class="padding-top-right15" st-content="title">
                                                                                <p>
                                                                                    Your Heading Goes Here
                                                                                </p>
                                                                            </td>
                                                                        </tr>
<!-- end of title --><!-- Spacing --><tr>
<td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">
                                                                            </td>
                                                                        </tr>
<!-- /Spacing --><!-- content --><tr>
<td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #7a6e67; text-align:left; line-height: 24px;" class="padding-right15" st-content="text">
                                                                                <p>
                                                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                                                </p>
                                                                            </td>
                                                                        </tr>
<!-- end of content -->
</tbody></table>
<!-- end of right column -->
</td>
                                                        </tr></tbody></table>
</td>
                                        </tr>
<!-- Spacing --><tr>
<td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">
                                            </td>
                                        </tr>
<!-- Spacing --><!-- Spacing --><tr>
<td height="5" bgcolor="#2d2a26" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">
                                            </td>
                                        </tr>
<!-- Spacing -->
</tbody></table>
</td>
                        </tr></tbody></table>
</td>
        </tr></tbody></table>
<table width="100%" bgcolor="#d4d4d4" cellpadding="0" cellspacing="0" border="0" st-sortable="social"><tbody><tr>
<td>
                <table width="560" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" hasbackground="true"><tbody><tr>
<td width="100%">
                                <table bgcolor="#303030" width="560" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth"><tbody>
<!-- Spacing --><tr>
<td height="10" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">
                                            </td>
                                        </tr>
<!-- Spacing --><tr>
<td>
                                                <!-- logo -->

                                                <table width="194" align="left" border="0" cellpadding="0" cellspacing="0"><tbody><tr>
<td width="20">
                                                            </td>
                                                            <td width="174" height="40" align="left">
                                                                <?php
                                                            if( ! empty( $header_img ) ) : ?>
                                                                <div id="template_header_image">
                                                                    <div class="imgpop">
                                                                    <a href="<?php echo get_home_url(); ?>"><img src="<?php echo esc_url( $header_img ); ?>" alt="<?php echo get_bloginfo( 'name' ); ?>"></a>
                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                            </td>
                                                        </tr></tbody></table>
<!-- end of logo --><!-- start of social icons --><table width="60" height="40" align="right" border="0" cellpadding="0" cellspacing="0"><tbody><tr>
<td width="22" height="22" align="left">
                                                                <div class="imgpop">
                                                                    <a href="#"><img src="<?php echo get_give_email_images(); ?>facebook.png" alt="" border="0" width="22" height="22" style="display:block; border:none; outline:none; text-decoration:none;" st-image="edit" id="jxy03efkk7wbmhr2eubqn0zfr"></a>
                                                                </div>
                                                            </td>
                                                            <td align="left" width="10" style="font-size:1px; line-height:1px;">
                                                            </td>
                                                            <td width="22" height="22" align="right">
                                                                <div class="imgpop">
                                                                    <a href="#"><img src="<?php echo get_give_email_images(); ?>twitter.png" alt="" border="0" width="22" height="22" style="display:block; border:none; outline:none; text-decoration:none;" st-image="edit" id="86bwx3k0x62ae89muglex9a4i"></a>
                                                                </div>
                                                            </td>
                                                            <td align="left" width="20" style="font-size:1px; line-height:1px;">
                                                            </td>
                                                        </tr></tbody></table>
<!-- end of social icons -->
</td>
                                        </tr>
<!-- Spacing --><tr>
<td height="10" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">
                                            </td>
                                        </tr>
<!-- Spacing -->
</tbody></table>
</td>
                        </tr></tbody></table>
</td>
        </tr></tbody></table>