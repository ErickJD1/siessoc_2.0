<?php

/* Emails/registration.html.twig */
class __TwigTemplate_caa3d97b83bdbe1b4b7be7832d44199807f781fcffcadee2dcfae9cddeab2fc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4bf237132e7ffc4fc1772fbad8abd8231eb37ea63350660a4b889cb678eca1b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf237132e7ffc4fc1772fbad8abd8231eb37ea63350660a4b889cb678eca1b6->enter($__internal_4bf237132e7ffc4fc1772fbad8abd8231eb37ea63350660a4b889cb678eca1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/registration.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">
    <head>
        <meta charset=\"utf-8\"> <!-- utf-8 works for most cases -->
            <meta name=\"viewport\" content=\"width=device-width\"> <!-- Forcing initial-scale shouldn't be necessary -->
                <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"> <!-- Use the latest (edge) version of IE rendering engine -->
                    <meta name=\"x-apple-disable-message-reformatting\">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
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
                            div[style*=\"margin: 16px 0\"] {
                                margin: 0 !important;
                            }

                            /* What it does: Stops Outlook from adding extra spacing to tables. */
                            table,
                            td {
                                mso-table-lspace: 0pt !important;
                                mso-table-rspace: 0pt !important;
                            }

                            /* What it does: Fixes webkit padding issue. */
                            table {
                                border-spacing: 0 !important;
                                border-collapse: collapse !important;
                                table-layout: fixed !important;
                                margin: 0 auto !important;
                            }

                            /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
                            a {
                                text-decoration: none;
                            }

                            /* What it does: Uses a better rendering method when resizing images in IE. */
                            img {
                                -ms-interpolation-mode:bicubic;
                            }

                            /* What it does: A work-around for email clients meddling in triggered links. */
                            *[x-apple-data-detectors],  /* iOS */
                            .unstyle-auto-detected-links *,
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

                            /* What it does: Prevents Gmail from changing the text color in conversation threads. */
                            .im {
                                color: inherit !important;
                            }

                            /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
                            .a6S {
                                display: none !important;
                                opacity: 0.01 !important;
                            }
                            /* If the above doesn't work, add a .g-img class to any image in question. */
                            img.g-img + div {
                                display: none !important;
                            }

                            /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
                            /* Create one of these media queries for each additional viewport size you'd like to fix */

                            /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
                            @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
                                u ~ div .email-container {
                                    min-width: 320px !important;
                                }
                            }
                            /* iPhone 6, 6S, 7, 8, and X */
                            @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
                                u ~ div .email-container {
                                    min-width: 375px !important;
                                }
                            }
                            /* iPhone 6+, 7+, and 8+ */
                            @media only screen and (min-device-width: 414px) {
                                u ~ div .email-container {
                                    min-width: 414px !important;
                                }
                            }

                        </style>

                        <!-- What it does: Makes background images in 72ppi Outlook render at correct size. -->
                        <!--[if gte mso 9]>
                        <xml>
                            <o:OfficeDocumentSettings>
                                <o:AllowPNG/>
                                <o:PixelsPerInch>96</o:PixelsPerInch>
                            </o:OfficeDocumentSettings>
                        </xml>
                        <![endif]-->

                        <!-- CSS Reset : END -->

                        <!-- Progressive Enhancements : BEGIN -->
                        <style>

                            /* What it does: Hover styles for buttons */
                            .button-td,
                            .button-a {
                                transition: all 100ms ease-in;
                            }
                            .button-td-primary:hover,
                            .button-a-primary:hover {
                                background: #555555 !important;
                                border-color: #555555 !important;
                            }

                            /* Media Queries */
                            @media screen and (max-width: 600px) {

                                .email-container {
                                    width: 100% !important;
                                    margin: auto !important;
                                }

                                /* What it does: Forces table cells into full-width rows. */
                                .stack-column,
                                .stack-column-center {
                                    display: block !important;
                                    width: 100% !important;
                                    max-width: 100% !important;
                                    direction: ltr !important;
                                }
                                /* And center justify these ones. */
                                .stack-column-center {
                                    text-align: center !important;
                                }

                                /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
                                .center-on-narrow {
                                    text-align: center !important;
                                    display: block !important;
                                    margin-left: auto !important;
                                    margin-right: auto !important;
                                    float: none !important;
                                }
                                table.center-on-narrow {
                                    display: inline-block !important;
                                }

                                /* What it does: Adjust typography on small screens to improve readability */
                                .email-container p {
                                    font-size: 17px !important;
                                }
                            }

                        </style>
                        <!-- Progressive Enhancements : END -->

                        </head>
                        <!--
                                The email background color (#222222) is defined in three places:
                                1. body tag: for most email clients
                                2. center tag: for Gmail and Inbox mobile apps and web versions of Gmail, GSuite, Inbox, Yahoo, AOL, Libero, Comcast, freenet, Mail.ru, Orange.fr
                                3. mso conditional: For Windows 10 Mail
                        -->
                        <body width=\"100%\" style=\"margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #222222;\">
                            <center style=\"width: 100%; background-color: #222222;\">
                                <!--[if mso | IE]>
                                <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"background-color: #222222;\">
                                <tr>
                                <td>
                                <![endif]-->

                                <!-- Visually Hidden Preheader Text : BEGIN -->
                                <div style=\"display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;\">
                                    (Optional) This text will appear in the inbox preview, but not the email body. It can be used to supplement the email subject line or even summarize the email's contents. Extended text preheaders (~490 characters) seems like a better UX for anyone using a screenreader or voice-command apps like Siri to dictate the contents of an email. If this text is not included, email clients will automatically populate it using the text (including image alt text) at the start of the email's body.
                                </div>
                                <!-- Visually Hidden Preheader Text : END -->

                                <!-- Create white space after the desired preview text so email clients don’t pull other distracting text into the inbox preview. Extend as necessary. -->
                                <!-- Preview Text Spacing Hack : BEGIN -->
                                <div style=\"display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;\">
                                    &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
                                </div>
                                <!-- Preview Text Spacing Hack : END -->

                                <!-- Email Body : BEGIN -->
                                <table align=\"center\" role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"600\" style=\"margin: auto;\" class=\"email-container\">

                                    <br>
                                    <!-- Hero Image, Flush : BEGIN -->
                                    <tr>
                                        <td style=\"background-color: #ffffff;\">
                                            <img src=\"https://www.elegircarrera.net/blog/wp-content/uploads/2017/03/habitos-de-estudio-universitario-2000x1200.jpg\" width=\"600\" height=\"\" alt=\"alt_text\" border=\"0\" style=\"width: 100%; max-width: 600px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555; margin: auto; display: block;\" class=\"g-img\">
                                        </td>
                                    </tr>
                                    <!-- Hero Image, Flush : END -->

                                    <!-- 1 Column Text + Button : BEGIN -->
                                    <tr>
                                        <td style=\"background-color: #ffffff;\">
                                            <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                                                <tr>
                                                    <div style='width:90%;margin-left: 5%'>
                                                    <h2>Bienvenido ";
        // line 245
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h2>
                                                    <p>Ingresa al sistema con los siguientes datos:</p>
                                                    <p>Usuario: ";
        // line 247
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "</p>
                                                    <p>Contraseña: ";
        // line 248
        echo twig_escape_filter($this->env, (isset($context["password"]) ? $context["password"] : $this->getContext($context, "password")), "html", null, true);
        echo "</p>
                                                    </div>
                                                </tr>
                                                <tr>
                                                    <td style=\"padding: 0 20px 20px;\">
                                                        <!-- Button : BEGIN -->
                                                        <table align=\"center\" role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"margin: auto;\">
                                                            <tr>
                                                                <td class=\"button-td button-td-primary\" style=\"border-radius: 4px; background: #222222;\">
                                                                    <a class=\"button-a button-a-primary\" href=\"http://siessoc-erickjd.c9users.io/web/app_dev.php/login\" style=\"background: #222222; border: 1px solid #000000; font-family: sans-serif; font-size: 15px; line-height: 15px; text-decoration: none; padding: 13px 17px; color: #ffffff; display: block; border-radius: 4px;\">Iniciar Sesión</a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <!-- Button : END -->
                                                    </td>
                                                </tr>

                                            </table>
                                        </td>
                                    </tr>
                                    <!-- 1 Column Text + Button : END --> 


                                </table>
                                                <br>
                                                    <br>
                                <!-- Full Bleed Background Section : END -->

                                <!--[if mso | IE]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </center>
                        </body>
                        </html>
";
        
        $__internal_4bf237132e7ffc4fc1772fbad8abd8231eb37ea63350660a4b889cb678eca1b6->leave($__internal_4bf237132e7ffc4fc1772fbad8abd8231eb37ea63350660a4b889cb678eca1b6_prof);

    }

    public function getTemplateName()
    {
        return "Emails/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 248,  273 => 247,  268 => 245,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">
    <head>
        <meta charset=\"utf-8\"> <!-- utf-8 works for most cases -->
            <meta name=\"viewport\" content=\"width=device-width\"> <!-- Forcing initial-scale shouldn't be necessary -->
                <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"> <!-- Use the latest (edge) version of IE rendering engine -->
                    <meta name=\"x-apple-disable-message-reformatting\">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
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
                            div[style*=\"margin: 16px 0\"] {
                                margin: 0 !important;
                            }

                            /* What it does: Stops Outlook from adding extra spacing to tables. */
                            table,
                            td {
                                mso-table-lspace: 0pt !important;
                                mso-table-rspace: 0pt !important;
                            }

                            /* What it does: Fixes webkit padding issue. */
                            table {
                                border-spacing: 0 !important;
                                border-collapse: collapse !important;
                                table-layout: fixed !important;
                                margin: 0 auto !important;
                            }

                            /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
                            a {
                                text-decoration: none;
                            }

                            /* What it does: Uses a better rendering method when resizing images in IE. */
                            img {
                                -ms-interpolation-mode:bicubic;
                            }

                            /* What it does: A work-around for email clients meddling in triggered links. */
                            *[x-apple-data-detectors],  /* iOS */
                            .unstyle-auto-detected-links *,
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

                            /* What it does: Prevents Gmail from changing the text color in conversation threads. */
                            .im {
                                color: inherit !important;
                            }

                            /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
                            .a6S {
                                display: none !important;
                                opacity: 0.01 !important;
                            }
                            /* If the above doesn't work, add a .g-img class to any image in question. */
                            img.g-img + div {
                                display: none !important;
                            }

                            /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
                            /* Create one of these media queries for each additional viewport size you'd like to fix */

                            /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
                            @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
                                u ~ div .email-container {
                                    min-width: 320px !important;
                                }
                            }
                            /* iPhone 6, 6S, 7, 8, and X */
                            @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
                                u ~ div .email-container {
                                    min-width: 375px !important;
                                }
                            }
                            /* iPhone 6+, 7+, and 8+ */
                            @media only screen and (min-device-width: 414px) {
                                u ~ div .email-container {
                                    min-width: 414px !important;
                                }
                            }

                        </style>

                        <!-- What it does: Makes background images in 72ppi Outlook render at correct size. -->
                        <!--[if gte mso 9]>
                        <xml>
                            <o:OfficeDocumentSettings>
                                <o:AllowPNG/>
                                <o:PixelsPerInch>96</o:PixelsPerInch>
                            </o:OfficeDocumentSettings>
                        </xml>
                        <![endif]-->

                        <!-- CSS Reset : END -->

                        <!-- Progressive Enhancements : BEGIN -->
                        <style>

                            /* What it does: Hover styles for buttons */
                            .button-td,
                            .button-a {
                                transition: all 100ms ease-in;
                            }
                            .button-td-primary:hover,
                            .button-a-primary:hover {
                                background: #555555 !important;
                                border-color: #555555 !important;
                            }

                            /* Media Queries */
                            @media screen and (max-width: 600px) {

                                .email-container {
                                    width: 100% !important;
                                    margin: auto !important;
                                }

                                /* What it does: Forces table cells into full-width rows. */
                                .stack-column,
                                .stack-column-center {
                                    display: block !important;
                                    width: 100% !important;
                                    max-width: 100% !important;
                                    direction: ltr !important;
                                }
                                /* And center justify these ones. */
                                .stack-column-center {
                                    text-align: center !important;
                                }

                                /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
                                .center-on-narrow {
                                    text-align: center !important;
                                    display: block !important;
                                    margin-left: auto !important;
                                    margin-right: auto !important;
                                    float: none !important;
                                }
                                table.center-on-narrow {
                                    display: inline-block !important;
                                }

                                /* What it does: Adjust typography on small screens to improve readability */
                                .email-container p {
                                    font-size: 17px !important;
                                }
                            }

                        </style>
                        <!-- Progressive Enhancements : END -->

                        </head>
                        <!--
                                The email background color (#222222) is defined in three places:
                                1. body tag: for most email clients
                                2. center tag: for Gmail and Inbox mobile apps and web versions of Gmail, GSuite, Inbox, Yahoo, AOL, Libero, Comcast, freenet, Mail.ru, Orange.fr
                                3. mso conditional: For Windows 10 Mail
                        -->
                        <body width=\"100%\" style=\"margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #222222;\">
                            <center style=\"width: 100%; background-color: #222222;\">
                                <!--[if mso | IE]>
                                <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"background-color: #222222;\">
                                <tr>
                                <td>
                                <![endif]-->

                                <!-- Visually Hidden Preheader Text : BEGIN -->
                                <div style=\"display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;\">
                                    (Optional) This text will appear in the inbox preview, but not the email body. It can be used to supplement the email subject line or even summarize the email's contents. Extended text preheaders (~490 characters) seems like a better UX for anyone using a screenreader or voice-command apps like Siri to dictate the contents of an email. If this text is not included, email clients will automatically populate it using the text (including image alt text) at the start of the email's body.
                                </div>
                                <!-- Visually Hidden Preheader Text : END -->

                                <!-- Create white space after the desired preview text so email clients don’t pull other distracting text into the inbox preview. Extend as necessary. -->
                                <!-- Preview Text Spacing Hack : BEGIN -->
                                <div style=\"display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;\">
                                    &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
                                </div>
                                <!-- Preview Text Spacing Hack : END -->

                                <!-- Email Body : BEGIN -->
                                <table align=\"center\" role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"600\" style=\"margin: auto;\" class=\"email-container\">

                                    <br>
                                    <!-- Hero Image, Flush : BEGIN -->
                                    <tr>
                                        <td style=\"background-color: #ffffff;\">
                                            <img src=\"https://www.elegircarrera.net/blog/wp-content/uploads/2017/03/habitos-de-estudio-universitario-2000x1200.jpg\" width=\"600\" height=\"\" alt=\"alt_text\" border=\"0\" style=\"width: 100%; max-width: 600px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555; margin: auto; display: block;\" class=\"g-img\">
                                        </td>
                                    </tr>
                                    <!-- Hero Image, Flush : END -->

                                    <!-- 1 Column Text + Button : BEGIN -->
                                    <tr>
                                        <td style=\"background-color: #ffffff;\">
                                            <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                                                <tr>
                                                    <div style='width:90%;margin-left: 5%'>
                                                    <h2>Bienvenido {{name}}!</h2>
                                                    <p>Ingresa al sistema con los siguientes datos:</p>
                                                    <p>Usuario: {{username}}</p>
                                                    <p>Contraseña: {{password}}</p>
                                                    </div>
                                                </tr>
                                                <tr>
                                                    <td style=\"padding: 0 20px 20px;\">
                                                        <!-- Button : BEGIN -->
                                                        <table align=\"center\" role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"margin: auto;\">
                                                            <tr>
                                                                <td class=\"button-td button-td-primary\" style=\"border-radius: 4px; background: #222222;\">
                                                                    <a class=\"button-a button-a-primary\" href=\"http://siessoc-erickjd.c9users.io/web/app_dev.php/login\" style=\"background: #222222; border: 1px solid #000000; font-family: sans-serif; font-size: 15px; line-height: 15px; text-decoration: none; padding: 13px 17px; color: #ffffff; display: block; border-radius: 4px;\">Iniciar Sesión</a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <!-- Button : END -->
                                                    </td>
                                                </tr>

                                            </table>
                                        </td>
                                    </tr>
                                    <!-- 1 Column Text + Button : END --> 


                                </table>
                                                <br>
                                                    <br>
                                <!-- Full Bleed Background Section : END -->

                                <!--[if mso | IE]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </center>
                        </body>
                        </html>
", "Emails/registration.html.twig", "/home/ubuntu/workspace/app/Resources/views/Emails/registration.html.twig");
    }
}
