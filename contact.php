<?php
$name = $_POST['name'];
$body = $_POST['message'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$country = $_POST['country'];
$plan = $_POST['plan'];
$payment = $_POST['payment'];
$p4 = "https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=E2NKRWPWVRZ2C&lc=US&item_name=Asesor%c3%ada%20para%204%20semanas%2e&amount=69%2e00&currency_code=USD&button_subtype=services&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted";
$p8 = "https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=E2NKRWPWVRZ2C&lc=US&item_name=Asesor%c3%ada%20para%208%20semanas%2e&amount=99%2e00&currency_code=USD&button_subtype=services&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted";
$p12 = "https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=E2NKRWPWVRZ2C&lc=US&item_name=Asesor%c3%ada%20para%2012%20semanas%2e&amount=135%2e00&currency_code=USD&button_subtype=services&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted";
$ppres = "https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=E2NKRWPWVRZ2C&lc=US&item_name=Asesoria%20Presencial&amount=300%2e00&currency_code=USD&button_subtype=services&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted";
$url = "";

if(!isset($body) && !isset($payment)){
	echo "no valid data.";
	die();
}

if($payment == "paypal"){
    if($plan == "4")
        $url = $p4;
    elseif($plan == "8")
        $url = $p8;
    elseif($plan == "12")
        $url = $p12;
    elseif($plan == "12")
        $url = $ppres;
    else{}
}

$msg = "''
<!DOCTYPE html>
<html lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
<head>
    <meta charset='utf-8'> <!-- utf-8 works for most cases -->
    <meta name='viewport' content='width=device-width'> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv='X-UA-Compatible' content='IE=edge'> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name='x-apple-disable-message-reformatting'>  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <!-- Web Font / @font-face : BEGIN -->
    <!-- NOTE: If web fonts are not required, lines 10 - 27 can be safely removed. -->

    <!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
    <!--[if mso]>
        <style>
            * {
                font-family: sans-serif !important;
            }
        </style>
    <![endif]-->

    <!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
    <!--[if !mso]><!-->
    <!-- insert web font reference, eg: <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'> -->
    <!--<![endif]-->

    <!-- Web Font / @font-face : END -->

    <!-- CSS Reset : BEGIN -->
    <style>

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*='margin: 16px 0'] {
            margin: 0 !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }

        /* What it does: A work-around for email clients meddling in triggered links. */
        *[x-apple-data-detectors],  /* iOS */
        .x-gmail-data-detectors,    /* Gmail */
        .x-gmail-data-detectors *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* What it does: Prevents Gmail from displaying an download button on large, non-linked images. */
        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }
        /* If the above doesn't work, add a .g-img class to any image in question. */
        img.g-img + div {
            display: none !important;
        }

        /* What it does: Prevents underlining the button text in Windows 10 */
        .button-link {
            text-decoration: none !important;
        }

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */
        /* Thanks to Eric Lepetit (@ericlepetitsf) for help troubleshooting */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) { /* iPhone 6 and 6+ */
            .email-container {
                min-width: 375px !important;
            }
        }

    </style>
    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>

    /* What it does: Hover styles for buttons */
    .button-td,
    .button-a {
        transition: all 100ms ease-in;
    }
    .button-td:hover,
    .button-a:hover {
        background: #555555 !important;
        border-color: #555555 !important;
    }

    /* Media Queries */
    @media screen and (max-width: 600px) {

        /* What it does: Adjust typography on small screens to improve readability */
        .email-container p {
            font-size: 17px !important;
            line-height: 22px !important;
        }

    }

    </style>
    <!-- Progressive Enhancements : END -->

    <!-- What it does: Makes background images in 72ppi Outlook render at correct size. -->
    <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->

</head>
<body width='100%' bgcolor='#222222' style='margin: 0; mso-line-height-rule: exactly;'>
    <center style='width: 100%; background: #222222; text-align: left;'>
        <div style='max-width: 600px; margin: auto;' class='email-container'>
            <!--[if mso]>
            <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='600' align='center'>
            <tr>
            <td>
            <![endif]-->
            <!-- Email Body : BEGIN -->
            <table role='presentation' cellspacing='0' cellpadding='0' border='0' align='center' width='100%' style='max-width: 600px;'>

                <!-- Hero Image, Flush : BEGIN -->
                <tr>
                    <td bgcolor='#ffffff' align='center'>
                        <img src='http://soyjosefitness.com/images/mailingHead.png' width='600' height='' alt='alt_text' border='0' align='center' style='width: 100%; max-width: 600px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; margin: auto;' class='g-img'>
                    </td>
                </tr>
                <!-- Hero Image, Flush : END -->

                <!-- 1 Column Text + Button : BEGIN -->
                <tr>
                    <td bgcolor='#ffffff'>
                        <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                            <tr>
                                <td style='padding: 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;'>
                                    <h1 style='margin: 0 0 10px 0; font-family: sans-serif; font-size: 24px; line-height: 27px; color: #333333; font-weight: normal;'>José, una persona te ha contactado!</h1>
                                    <p style='margin: 0;'>Nombre: ".$name."</p>
                                    <p style='margin: 0;'>Correo: ".$email."</p>
                                    <p style='margin: 0;'>Telf: ".$phone."</p>
                                    <p style='margin: 0;'>País: ".$country."</p>
                                    <p style='margin: 0;'>Mensaje: ".$body."</p>
                                </td>
                            </tr>
                            <tr>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- 1 Column Text + Button : END -->
                <!-- Clear Spacer : BEGIN -->
                <tr>
                    <td aria-hidden='true' height='40' style='font-size: 0; line-height: 0;'>
                        &nbsp;
                    </td>
                </tr>
                <!-- Clear Spacer : END -->
            </table>
            <!-- Email Body : END -->
            <!--[if mso]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </div>

        <!-- Full Bleed Background Section : BEGIN -->
        <table role='presentation' bgcolor='#ec3642' cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
            <tr>
                <td valign='top' align='center'>
                    <div style='max-width: 600px; margin: auto;' class='email-container'>
                        <!--[if mso]>
                        <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='600' align='center'>
                        <tr>
                        <td>
                        <![endif]-->
                        <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                            <tr>
                                <td style='padding: 40px; text-align: left; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #ffffff;'>
                                    <p style='margin: 0;'><a href='http://soyjosefitness.com'</p>
                                </td>
                            </tr>
                        </table>
                        <!--[if mso]>
                        </td>
                        </tr>
                        </table>
                        <![endif]-->
                    </div>
                </td>
            </tr>
        </table>
        <!-- Full Bleed Background Section : END -->

    </center>
</body>
</html>
''";

$msgToJose = "''
<!DOCTYPE html>
<html lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
<head>
    <meta charset='utf-8'> <!-- utf-8 works for most cases -->
    <meta name='viewport' content='width=device-width'> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv='X-UA-Compatible' content='IE=edge'> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name='x-apple-disable-message-reformatting'>  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <!-- Web Font / @font-face : BEGIN -->
    <!-- NOTE: If web fonts are not required, lines 10 - 27 can be safely removed. -->

    <!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
    <!--[if mso]>
        <style>
            * {
                font-family: sans-serif !important;
            }
        </style>
    <![endif]-->

    <!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
    <!--[if !mso]><!-->
    <!-- insert web font reference, eg: <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'> -->
    <!--<![endif]-->

    <!-- Web Font / @font-face : END -->

    <!-- CSS Reset : BEGIN -->
    <style>

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*='margin: 16px 0'] {
            margin: 0 !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }

        /* What it does: A work-around for email clients meddling in triggered links. */
        *[x-apple-data-detectors],  /* iOS */
        .x-gmail-data-detectors,    /* Gmail */
        .x-gmail-data-detectors *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* What it does: Prevents Gmail from displaying an download button on large, non-linked images. */
        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }
        /* If the above doesn't work, add a .g-img class to any image in question. */
        img.g-img + div {
            display: none !important;
        }

        /* What it does: Prevents underlining the button text in Windows 10 */
        .button-link {
            text-decoration: none !important;
        }

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */
        /* Thanks to Eric Lepetit (@ericlepetitsf) for help troubleshooting */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) { /* iPhone 6 and 6+ */
            .email-container {
                min-width: 375px !important;
            }
        }

    </style>
    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>

    /* What it does: Hover styles for buttons */
    .button-td,
    .button-a {
        transition: all 100ms ease-in;
    }
    .button-td:hover,
    .button-a:hover {
        background: #555555 !important;
        border-color: #555555 !important;
    }

    /* Media Queries */
    @media screen and (max-width: 600px) {

        /* What it does: Adjust typography on small screens to improve readability */
        .email-container p {
            font-size: 17px !important;
            line-height: 22px !important;
        }

    }

    </style>
    <!-- Progressive Enhancements : END -->

    <!-- What it does: Makes background images in 72ppi Outlook render at correct size. -->
    <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->

</head>
<body width='100%' bgcolor='#222222' style='margin: 0; mso-line-height-rule: exactly;'>
    <center style='width: 100%; background: #222222; text-align: left;'>
        <div style='max-width: 600px; margin: auto;' class='email-container'>
            <!--[if mso]>
            <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='600' align='center'>
            <tr>
            <td>
            <![endif]-->
            <!-- Email Body : BEGIN -->
            <table role='presentation' cellspacing='0' cellpadding='0' border='0' align='center' width='100%' style='max-width: 600px;'>

                <!-- Hero Image, Flush : BEGIN -->
                <tr>
                    <td bgcolor='#ffffff' align='center'>
                        <img src='http://soyjosefitness.com/images/mailingHead.png' width='600' height='' alt='alt_text' border='0' align='center' style='width: 100%; max-width: 600px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; margin: auto;' class='g-img'>
                    </td>
                </tr>
                <!-- Hero Image, Flush : END -->

                <!-- 1 Column Text + Button : BEGIN -->
                <tr>
                    <td bgcolor='#ffffff'>
                        <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                            <tr>
                                <td style='padding: 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;'>
                                    <h1 style='margin: 0 0 10px 0; font-family: sans-serif; font-size: 24px; line-height: 27px; color: #333333; font-weight: normal;'>Una persona quiere contratar un plan!</h1>
                                    <p style='margin: 0;'>Nombre: ".$name."</p>
                                    <p style='margin: 0;'>Correo: ".$email."</p>
                                    <p style='margin: 0;'>Telf: ".$phone."</p>
                                    <p style='margin: 0;'>País: ".$country."</p>
                                    <p style='margin: 0;'>Plan: ".$plan." semanas</p>
                                    <p style='margin: 0;'>Método de Pago: ".$payment."</p>
                                </td>
                            </tr>
                            <tr>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- 1 Column Text + Button : END -->
                <!-- Clear Spacer : BEGIN -->
                <tr>
                    <td aria-hidden='true' height='40' style='font-size: 0; line-height: 0;'>
                        &nbsp;
                    </td>
                </tr>
                <!-- Clear Spacer : END -->
            </table>
            <!-- Email Body : END -->
            <!--[if mso]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </div>

        <!-- Full Bleed Background Section : BEGIN -->
        <table role='presentation' bgcolor='#ec3642' cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
            <tr>
                <td valign='top' align='center'>
                    <div style='max-width: 600px; margin: auto;' class='email-container'>
                        <!--[if mso]>
                        <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='600' align='center'>
                        <tr>
                        <td>
                        <![endif]-->
                        <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                            <tr>
                                <td style='padding: 40px; text-align: left; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #ffffff;'>
                                    <p style='margin: 0;'><a href='http://soyjosefitness.com'</p>
                                </td>
                            </tr>
                        </table>
                        <!--[if mso]>
                        </td>
                        </tr>
                        </table>
                        <![endif]-->
                    </div>
                </td>
            </tr>
        </table>
        <!-- Full Bleed Background Section : END -->

    </center>
</body>
</html>
''";

$msgTransferUSD = "''
<!DOCTYPE html>
<html lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
<head>
    <meta charset='utf-8'> <!-- utf-8 works for most cases -->
    <meta name='viewport' content='width=device-width'> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv='X-UA-Compatible' content='IE=edge'> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name='x-apple-disable-message-reformatting'>  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <!-- Web Font / @font-face : BEGIN -->
    <!-- NOTE: If web fonts are not required, lines 10 - 27 can be safely removed. -->

    <!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
    <!--[if mso]>
        <style>
            * {
                font-family: sans-serif !important;
            }
        </style>
    <![endif]-->

    <!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
    <!--[if !mso]><!-->
    <!-- insert web font reference, eg: <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'> -->
    <!--<![endif]-->

    <!-- Web Font / @font-face : END -->

    <!-- CSS Reset : BEGIN -->
    <style>

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*='margin: 16px 0'] {
            margin: 0 !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }

        /* What it does: A work-around for email clients meddling in triggered links. */
        *[x-apple-data-detectors],  /* iOS */
        .x-gmail-data-detectors,    /* Gmail */
        .x-gmail-data-detectors *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* What it does: Prevents Gmail from displaying an download button on large, non-linked images. */
        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }
        /* If the above doesn't work, add a .g-img class to any image in question. */
        img.g-img + div {
            display: none !important;
        }

        /* What it does: Prevents underlining the button text in Windows 10 */
        .button-link {
            text-decoration: none !important;
        }

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */
        /* Thanks to Eric Lepetit (@ericlepetitsf) for help troubleshooting */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) { /* iPhone 6 and 6+ */
            .email-container {
                min-width: 375px !important;
            }
        }

    </style>
    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>

    /* What it does: Hover styles for buttons */
    .button-td,
    .button-a {
        transition: all 100ms ease-in;
    }
    .button-td:hover,
    .button-a:hover {
        background: #555555 !important;
        border-color: #555555 !important;
    }

    /* Media Queries */
    @media screen and (max-width: 600px) {

        /* What it does: Adjust typography on small screens to improve readability */
        .email-container p {
            font-size: 17px !important;
            line-height: 22px !important;
        }

    }

    </style>
    <!-- Progressive Enhancements : END -->

    <!-- What it does: Makes background images in 72ppi Outlook render at correct size. -->
    <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->

</head>
<body width='100%' bgcolor='#222222' style='margin: 0; mso-line-height-rule: exactly;'>
    <center style='width: 100%; background: #222222; text-align: left;'>
        <div style='max-width: 600px; margin: auto;' class='email-container'>
            <!--[if mso]>
            <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='600' align='center'>
            <tr>
            <td>
            <![endif]-->
            <!-- Email Body : BEGIN -->
            <table role='presentation' cellspacing='0' cellpadding='0' border='0' align='center' width='100%' style='max-width: 600px;'>

                <!-- Hero Image, Flush : BEGIN -->
                <tr>
                    <td bgcolor='#ffffff' align='center'>
                        <img src='http://soyjosefitness.com/images/mailingHead.png' width='600' height='' alt='alt_text' border='0' align='center' style='width: 100%; max-width: 600px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; margin: auto;' class='g-img'>
                    </td>
                </tr>
                <!-- Hero Image, Flush : END -->

                <!-- 1 Column Text + Button : BEGIN -->
                <tr>
                    <td bgcolor='#ffffff'>
                        <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                            <tr>
                                <td style='padding: 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;'>
                                    <h1 style='margin: 0 0 10px 0; font-family: sans-serif; font-size: 24px; line-height: 27px; color: #333333; font-weight: normal;'>¡Ya casi has terminado!</h1>
                                    <p style='margin: 0;'>Una vez termines tu pago, responde este correo y adjunta tu comprobante de pago. Me comunicaré contigo tan pronto termines e iniciaremos tu cambio. Has tomado la opción de pago via transferencia via Moneygram ó Western Union, estos son los pasos que debes seguir: </p>
                                </td>
                            </tr>
                            <tr>
                                <td style='padding: 0 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;'>
                                    <!-- Button : BEGIN -->
                                    <table role='presentation' cellspacing='0' cellpadding='0' border='0' align='center' style='margin: auto;'>
                                        <tr>
                                            <td style='border-radius: 3px; background: #ec3642; text-align: center;' class='button-td'>
                                                <a href='http://www.google.com' style='background: #ec3642; border: 15px solid #ec3642; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: justify; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;' class='button-a'>
                                                    <span style='color:#ffffff' class='button-link'>1- Busca un punto de venta Western Union participante cercano. </br></br></br>
                                                                                                      2- Completa la sección Envío de dinero del formulario y elige Cobro de dinero en efectivo y Al Día Siguiente. </br>
                                                                                                      </br></br>
Datos para Envió: 
- Jose Gregorio Vera Robles
- Orlando - Florida</br></br></br>
                                                                                                      3- Entrega el formulario completo con el dinero al agente (e incluye la tarifa de la transacción).</br>
                                                                                                      </br></br>
                                                                                                      4- Guarda el recibo con tu número de transacción (MTCN).</br>
                                                                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- Button : END -->
                                </td>
                            </tr>
                            <tr>
                                <td style='padding: 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;'>
                                    <h2 style='margin: 0 0 10px 0; font-family: sans-serif; font-size: 18px; line-height: 21px; color: #333333; font-weight: bold;'>Gracias por suscribirte.</h2>
                                    <p style='margin: 0;'>Te quiero agradecer la confianza que has puesto en mi trabajo. Juntos haremos un equipo brutal, sigue mis indicaciones y tu cambio se hara realidad. </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- 1 Column Text + Button : END -->

                <!-- 2 Even Columns : BEGIN -->
                <tr>
                    <td bgcolor='#ffffff' align='center' height='100%' valign='top' width='100%' style='padding-bottom: 40px'>
                        <table role='presentation' border='0' cellpadding='0' cellspacing='0' align='center' width='100%' style='max-width:560px;'>
                            <tr>
                                <td align='center' valign='top' width='50%'>
                                    <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%' style='font-size: 14px;text-align: left;'>
                                        <tr>
                                            <td style='text-align: center; padding: 0 10px;'>
                                                <img src='http://soyjosefitness.com/images/gallery/t4.jpg' width='200' height='' alt='alt_text' border='0' align='center' style='width: 100%; max-width: 200px; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;'>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td align='center' valign='top' width='50%'>
                                    <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%' style='font-size: 14px;text-align: left;'>
                                        <tr>
                                            <td style='text-align: center; padding: 0 10px;'>
                                                <img src='http://soyjosefitness.com/images/gallery/tt10.jpg' width='200' height='' alt='alt_text' border='0' align='center' style='width: 100%; max-width: 200px; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;'>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- Two Even Columns : END -->

                <!-- Clear Spacer : BEGIN -->
                <tr>
                    <td aria-hidden='true' height='40' style='font-size: 0; line-height: 0;'>
                        &nbsp;
                    </td>
                </tr>
                <!-- Clear Spacer : END -->
            </table>
            <!-- Email Body : END -->
            <!--[if mso]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </div>

        <!-- Full Bleed Background Section : BEGIN -->
        <table role='presentation' bgcolor='#ec3642' cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
            <tr>
                <td valign='top' align='center'>
                    <div style='max-width: 600px; margin: auto;' class='email-container'>
                        <!--[if mso]>
                        <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='600' align='center'>
                        <tr>
                        <td>
                        <![endif]-->
                        <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                            <tr>
                                <td style='padding: 40px; text-align: left; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #ffffff;'>
                                    <p style='margin: 0;'><a href='http://soyjosefitness.com'</p>
                                </td>
                            </tr>
                        </table>
                        <!--[if mso]>
                        </td>
                        </tr>
                        </table>
                        <![endif]-->
                    </div>
                </td>
            </tr>
        </table>
        <!-- Full Bleed Background Section : END -->

    </center>
</body>
</html>
''";

$msgTransferBSF = "''
<!DOCTYPE html>
<html lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
<head>
    <meta charset='utf-8'> <!-- utf-8 works for most cases -->
    <meta name='viewport' content='width=device-width'> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv='X-UA-Compatible' content='IE=edge'> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name='x-apple-disable-message-reformatting'>  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <!-- Web Font / @font-face : BEGIN -->
    <!-- NOTE: If web fonts are not required, lines 10 - 27 can be safely removed. -->

    <!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
    <!--[if mso]>
        <style>
            * {
                font-family: sans-serif !important;
            }
        </style>
    <![endif]-->

    <!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
    <!--[if !mso]><!-->
    <!-- insert web font reference, eg: <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'> -->
    <!--<![endif]-->

    <!-- Web Font / @font-face : END -->

    <!-- CSS Reset : BEGIN -->
    <style>

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*='margin: 16px 0'] {
            margin: 0 !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }

        /* What it does: A work-around for email clients meddling in triggered links. */
        *[x-apple-data-detectors],  /* iOS */
        .x-gmail-data-detectors,    /* Gmail */
        .x-gmail-data-detectors *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* What it does: Prevents Gmail from displaying an download button on large, non-linked images. */
        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }
        /* If the above doesn't work, add a .g-img class to any image in question. */
        img.g-img + div {
            display: none !important;
        }

        /* What it does: Prevents underlining the button text in Windows 10 */
        .button-link {
            text-decoration: none !important;
        }

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */
        /* Thanks to Eric Lepetit (@ericlepetitsf) for help troubleshooting */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) { /* iPhone 6 and 6+ */
            .email-container {
                min-width: 375px !important;
            }
        }

    </style>
    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>

    /* What it does: Hover styles for buttons */
    .button-td,
    .button-a {
        transition: all 100ms ease-in;
    }
    .button-td:hover,
    .button-a:hover {
        background: #555555 !important;
        border-color: #555555 !important;
    }

    /* Media Queries */
    @media screen and (max-width: 600px) {

        /* What it does: Adjust typography on small screens to improve readability */
        .email-container p {
            font-size: 17px !important;
            line-height: 22px !important;
        }

    }

    </style>
    <!-- Progressive Enhancements : END -->

    <!-- What it does: Makes background images in 72ppi Outlook render at correct size. -->
    <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->

</head>
<body width='100%' bgcolor='#222222' style='margin: 0; mso-line-height-rule: exactly;'>
    <center style='width: 100%; background: #222222; text-align: left;'>
        <div style='max-width: 600px; margin: auto;' class='email-container'>
            <!--[if mso]>
            <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='600' align='center'>
            <tr>
            <td>
            <![endif]-->
            <!-- Email Body : BEGIN -->
            <table role='presentation' cellspacing='0' cellpadding='0' border='0' align='center' width='100%' style='max-width: 600px;'>

                <!-- Hero Image, Flush : BEGIN -->
                <tr>
                    <td bgcolor='#ffffff' align='center'>
                        <img src='http://soyjosefitness.com/images/mailingHead.png' width='600' height='' alt='alt_text' border='0' align='center' style='width: 100%; max-width: 600px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; margin: auto;' class='g-img'>
                    </td>
                </tr>
                <!-- Hero Image, Flush : END -->

                <!-- 1 Column Text + Button : BEGIN -->
                <tr>
                    <td bgcolor='#ffffff'>
                        <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                            <tr>
                                <td style='padding: 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;'>
                                    <h1 style='margin: 0 0 10px 0; font-family: sans-serif; font-size: 24px; line-height: 27px; color: #333333; font-weight: normal;'>¡Ya casi has terminado!</h1>
                                    <p style='margin: 0;'>Una vez termines tu pago, responde este correo y adjunta tu comprobante de pago. Me comunicaré contigo tan pronto termines e iniciaremos tu cambio. Has tomado la opción de pago via transferencia, estos son los datos de mi cuenta: </p>
                                </td>
                            </tr>
                            <tr>
                                <td style='padding: 0 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;'>
                                    <!-- Button : BEGIN -->
                                    <table role='presentation' cellspacing='0' cellpadding='0' border='0' align='center' style='margin: auto;'>
                                        <tr>
                                            <td style='border-radius: 3px; background: #ec3642; text-align: center;' class='button-td'>
                                                <a href='http://www.google.com' style='background: #ec3642; border: 15px solid #ec3642; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;' class='button-a'>
                                                    <span style='color:#ffffff;' class='button-link'>Banco Banesco </br>
                                                                                                      Cuenta Corriente</br>
                                                                                                      </br>
                                                                                                      Jose Vera</br>
                                                                                                      18.070.321</br>
                                                                                                      0134-0945- 5194-6155- 9494</br>
                                                                                                      Monto: Bsf 300.000</span>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- Button : END -->
                                </td>
                            </tr>
                            <tr>
                                <td style='padding: 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;'>
                                    <h2 style='margin: 0 0 10px 0; font-family: sans-serif; font-size: 18px; line-height: 21px; color: #333333; font-weight: bold;'>Gracias por suscribirte.</h2>
                                    <p style='margin: 0;'>Te quiero agradecer la confianza que has puesto en mi trabajo. Juntos haremos un equipo brutal, sigue mis indicaciones y tu cambio se hara realidad. </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- 1 Column Text + Button : END -->

                <!-- 2 Even Columns : BEGIN -->
                <tr>
                    <td bgcolor='#ffffff' align='center' height='100%' valign='top' width='100%' style='padding-bottom: 40px'>
                        <table role='presentation' border='0' cellpadding='0' cellspacing='0' align='center' width='100%' style='max-width:560px;'>
                            <tr>
                                <td align='center' valign='top' width='50%'>
                                    <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%' style='font-size: 14px;text-align: left;'>
                                        <tr>
                                            <td style='text-align: center; padding: 0 10px;'>
                                                <img src='http://soyjosefitness.com/images/gallery/t4.jpg' width='200' height='' alt='alt_text' border='0' align='center' style='width: 100%; max-width: 200px; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;'>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td align='center' valign='top' width='50%'>
                                    <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%' style='font-size: 14px;text-align: left;'>
                                        <tr>
                                            <td style='text-align: center; padding: 0 10px;'>
                                                <img src='http://soyjosefitness.com/images/gallery/tt10.jpg' width='200' height='' alt='alt_text' border='0' align='center' style='width: 100%; max-width: 200px; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;'>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- Two Even Columns : END -->

                <!-- Clear Spacer : BEGIN -->
                <tr>
                    <td aria-hidden='true' height='40' style='font-size: 0; line-height: 0;'>
                        &nbsp;
                    </td>
                </tr>
                <!-- Clear Spacer : END -->
            </table>
            <!-- Email Body : END -->
            <!--[if mso]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </div>

        <!-- Full Bleed Background Section : BEGIN -->
        <table role='presentation' bgcolor='#ec3642' cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
            <tr>
                <td valign='top' align='center'>
                    <div style='max-width: 600px; margin: auto;' class='email-container'>
                        <!--[if mso]>
                        <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='600' align='center'>
                        <tr>
                        <td>
                        <![endif]-->
                        <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                            <tr>
                                <td style='padding: 40px; text-align: left; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #ffffff;'>
                                    <p style='margin: 0;'><a href='http://soyjosefitness.com'</p>
                                </td>
                            </tr>
                        </table>
                        <!--[if mso]>
                        </td>
                        </tr>
                        </table>
                        <![endif]-->
                    </div>
                </td>
            </tr>
        </table>
        <!-- Full Bleed Background Section : END -->

    </center>
</body>
</html>
''";

$msgPaypal= "''
<!DOCTYPE html>
<html lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
<head>
    <meta charset='utf-8'> <!-- utf-8 works for most cases -->
    <meta name='viewport' content='width=device-width'> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv='X-UA-Compatible' content='IE=edge'> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name='x-apple-disable-message-reformatting'>  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <!-- Web Font / @font-face : BEGIN -->
    <!-- NOTE: If web fonts are not required, lines 10 - 27 can be safely removed. -->

    <!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
    <!--[if mso]>
        <style>
            * {
                font-family: sans-serif !important;
            }
        </style>
    <![endif]-->

    <!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
    <!--[if !mso]><!-->
    <!-- insert web font reference, eg: <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'> -->
    <!--<![endif]-->

    <!-- Web Font / @font-face : END -->

    <!-- CSS Reset : BEGIN -->
    <style>

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*='margin: 16px 0'] {
            margin: 0 !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }

        /* What it does: A work-around for email clients meddling in triggered links. */
        *[x-apple-data-detectors],  /* iOS */
        .x-gmail-data-detectors,    /* Gmail */
        .x-gmail-data-detectors *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* What it does: Prevents Gmail from displaying an download button on large, non-linked images. */
        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }
        /* If the above doesn't work, add a .g-img class to any image in question. */
        img.g-img + div {
            display: none !important;
        }

        /* What it does: Prevents underlining the button text in Windows 10 */
        .button-link {
            text-decoration: none !important;
        }

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */
        /* Thanks to Eric Lepetit (@ericlepetitsf) for help troubleshooting */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) { /* iPhone 6 and 6+ */
            .email-container {
                min-width: 375px !important;
            }
        }

    </style>
    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>

    /* What it does: Hover styles for buttons */
    .button-td,
    .button-a {
        transition: all 100ms ease-in;
    }
    .button-td:hover,
    .button-a:hover {
        background: #555555 !important;
        border-color: #555555 !important;
    }

    /* Media Queries */
    @media screen and (max-width: 600px) {

        /* What it does: Adjust typography on small screens to improve readability */
        .email-container p {
            font-size: 17px !important;
            line-height: 22px !important;
        }

    }

    </style>
    <!-- Progressive Enhancements : END -->

    <!-- What it does: Makes background images in 72ppi Outlook render at correct size. -->
    <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->

</head>
<body width='100%' bgcolor='#222222' style='margin: 0; mso-line-height-rule: exactly;'>
    <center style='width: 100%; background: #222222; text-align: left;'>
        <div style='max-width: 600px; margin: auto;' class='email-container'>
            <!--[if mso]>
            <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='600' align='center'>
            <tr>
            <td>
            <![endif]-->
            <!-- Email Body : BEGIN -->
            <table role='presentation' cellspacing='0' cellpadding='0' border='0' align='center' width='100%' style='max-width: 600px;'>

                <!-- Hero Image, Flush : BEGIN -->
                <tr>
                    <td bgcolor='#ffffff' align='center'>
                        <img src='http://soyjosefitness.com/images/mailingHead.png' width='600' height='' alt='alt_text' border='0' align='center' style='width: 100%; max-width: 600px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; margin: auto;' class='g-img'>
                    </td>
                </tr>
                <!-- Hero Image, Flush : END -->

                <!-- 1 Column Text + Button : BEGIN -->
                <tr>
                    <td bgcolor='#ffffff'>
                        <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                            <tr>
                                <td style='padding: 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;'>
                                    <h1 style='margin: 0 0 10px 0; font-family: sans-serif; font-size: 24px; line-height: 27px; color: #333333; font-weight: normal;'>¡Ya casi has terminado!</h1>
                                    <p style='margin: 0;'>Una vez termines tu pago, responde este correo y adjunta tu comprobante de pago. Me comunicaré contigo tan pronto termines e iniciaremos tu cambio. Si no has podido terminar tu pago ahora, no te preocupes, haciendo clic en el siguiente boton podras retomarlo.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style='padding: 0 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;'>
                                    <!-- Button : BEGIN -->
                                    <table role='presentation' cellspacing='0' cellpadding='0' border='0' align='center' style='margin: auto;'>
                                        <tr>
                                            <td style='border-radius: 3px; background: #ec3642; text-align: center;' class='button-td'>
                                                <a href='".$url."' style='background: #ec3642; border: 15px solid #ec3642; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;' class='button-a'>
                                                    <span style='color:#ffffff;' class='button-link'>&nbsp;&nbsp;&nbsp;&nbsp;Pagar&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- Button : END -->
                                </td>
                            </tr>
                            <tr>
                                <td style='padding: 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;'>
                                    <h2 style='margin: 0 0 10px 0; font-family: sans-serif; font-size: 18px; line-height: 21px; color: #333333; font-weight: bold;'>Gracias por suscribirte.</h2>
                                    <p style='margin: 0;'>Te quiero agradecer la confianza que has puesto en mi trabajo. Juntos haremos un equipo brutal, sigue mis indicaciones y tu cambio se hara realidad. </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- 1 Column Text + Button : END -->

                <!-- 2 Even Columns : BEGIN -->
                <tr>
                    <td bgcolor='#ffffff' align='center' height='100%' valign='top' width='100%' style='padding-bottom: 40px'>
                        <table role='presentation' border='0' cellpadding='0' cellspacing='0' align='center' width='100%' style='max-width:560px;'>
                            <tr>
                                <td align='center' valign='top' width='50%'>
                                    <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%' style='font-size: 14px;text-align: left;'>
                                        <tr>
                                            <td style='text-align: center; padding: 0 10px;'>
                                                <img src='http://soyjosefitness.com/images/gallery/t4.jpg' width='200' height='' alt='alt_text' border='0' align='center' style='width: 100%; max-width: 200px; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;'>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td align='center' valign='top' width='50%'>
                                    <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%' style='font-size: 14px;text-align: left;'>
                                        <tr>
                                            <td style='text-align: center; padding: 0 10px;'>
                                                <img src='http://soyjosefitness.com/images/gallery/tt10.jpg' width='200' height='' alt='alt_text' border='0' align='center' style='width: 100%; max-width: 200px; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;'>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- Two Even Columns : END -->

                <!-- Clear Spacer : BEGIN -->
                <tr>
                    <td aria-hidden='true' height='40' style='font-size: 0; line-height: 0;'>
                        &nbsp;
                    </td>
                </tr>
                <!-- Clear Spacer : END -->
            </table>
            <!-- Email Body : END -->
            <!--[if mso]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </div>

        <!-- Full Bleed Background Section : BEGIN -->
        <table role='presentation' bgcolor='#ec3642' cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
            <tr>
                <td valign='top' align='center'>
                    <div style='max-width: 600px; margin: auto;' class='email-container'>
                        <!--[if mso]>
                        <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='600' align='center'>
                        <tr>
                        <td>
                        <![endif]-->
                        <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                            <tr>
                                <td style='padding: 40px; text-align: left; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #ffffff;'>
                                    <p style='margin: 0;'></p>
                                </td>
                            </tr>
                        </table>
                        <!--[if mso]>
                        </td>
                        </tr>
                        </table>
                        <![endif]-->
                    </div>
                </td>
            </tr>
        </table>
        <!-- Full Bleed Background Section : END -->

    </center>
</body>
</html>
''";

$msgCustomer = "";
if($payment == "paypal")
  $msgCustomer = $msgPaypal;
elseif($payment == "transferBSF")
  $msgCustomer = $msgTransferBSF;
elseif($payment == "transferUSD")
  $msgCustomer = $msgTransferUSD;

if($payment != ""){
  $msg = wordwrap($msgToJose,70);

  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // send email
  mail("contacto@soyjosefitness.com","Nueva Suscripción",$msg,$headers);
  //mail("johnprzmz@gmail.com","Nueva Suscrip",$msg,$headers);
	
  $msg = wordwrap($msgCustomer,70);

  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $result = mail($email,"Bienvenido.",$msg,$headers);

  // send email
  if($payment == "paypal")
    echo $url;
 else
    echo $result;

 
} else{
	$msg = wordwrap($msg,70);

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// send email
	echo mail("contacto@soyjosefitness.com","Contacto desde soyJoseFitness.com",$msg,$headers);
}

?>
