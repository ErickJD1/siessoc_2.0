<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_03514466e360b25dffceecef76904872db015ef4ef06cb13a6bbd4b8665113db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b48ec02edc6a12c70fc3efa75bb6fda828b5477b9a4f8039e2861985a8fda85c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b48ec02edc6a12c70fc3efa75bb6fda828b5477b9a4f8039e2861985a8fda85c->enter($__internal_b48ec02edc6a12c70fc3efa75bb6fda828b5477b9a4f8039e2861985a8fda85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b48ec02edc6a12c70fc3efa75bb6fda828b5477b9a4f8039e2861985a8fda85c->leave($__internal_b48ec02edc6a12c70fc3efa75bb6fda828b5477b9a4f8039e2861985a8fda85c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_376ff91ad50a7a6716eb1a867c615077461ffc6f5f5c57266acd06400b130916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_376ff91ad50a7a6716eb1a867c615077461ffc6f5f5c57266acd06400b130916->enter($__internal_376ff91ad50a7a6716eb1a867c615077461ffc6f5f5c57266acd06400b130916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_376ff91ad50a7a6716eb1a867c615077461ffc6f5f5c57266acd06400b130916->leave($__internal_376ff91ad50a7a6716eb1a867c615077461ffc6f5f5c57266acd06400b130916_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_46e7aa16d5c2423f2434d22d3b82490e142ab990b231c04347b29201ae4185ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e7aa16d5c2423f2434d22d3b82490e142ab990b231c04347b29201ae4185ea->enter($__internal_46e7aa16d5c2423f2434d22d3b82490e142ab990b231c04347b29201ae4185ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_46e7aa16d5c2423f2434d22d3b82490e142ab990b231c04347b29201ae4185ea->leave($__internal_46e7aa16d5c2423f2434d22d3b82490e142ab990b231c04347b29201ae4185ea_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_bd9485d0a40157da20c94e1502288fa7ca03a4224acd3f621d4b2052aa675edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9485d0a40157da20c94e1502288fa7ca03a4224acd3f621d4b2052aa675edc->enter($__internal_bd9485d0a40157da20c94e1502288fa7ca03a4224acd3f621d4b2052aa675edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        // line 14
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

        /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
        a {
            text-decoration: none;
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

        /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }

        /* What it does: Prevents Gmail from changing the text color in conversation threads. */
        .im {
            color: inherit !important;
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
    <!-- CSS Reset : END -->
\t<!-- Reset list spacing because Outlook ignores much of our inline CSS. -->
\t<!--[if mso]>
\t<style type=\"text/css\">
\t\tul,
\t\tol {
\t\t\tmargin: 0 !important;
\t\t}
\t\tli {
\t\t\tmargin-left: 30px !important;
\t\t}
\t\tli.list-item-first {
\t\t\tmargin-top: 0 !important;
\t\t}
\t\tli.list-item-last {
\t\t\tmargin-bottom: 10px !important;
\t\t}
\t</style>
\t<![endif]-->

    <!-- Progressive Enhancements : BEGIN -->
    <style>

\t    /* What it does: Hover styles for buttons */
\t    .button-td,
\t    .button-a {
\t        transition: all 100ms ease-in;
\t    }
\t    .button-td-primary:hover,
\t    .button-a-primary:hover {
\t        background: #555555 !important;
\t        border-color: #555555 !important;
\t    }

\t    /* Media Queries */
\t    @media screen and (max-width: 600px) {

\t        /* What it does: Adjust typography on small screens to improve readability */
\t        .email-container p {
\t            font-size: 17px !important;
\t        }

\t    }

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
<!--
\tThe email background color (#222222) is defined in three places:
\t1. body tag: for most email clients
\t2. center tag: for Gmail and Inbox mobile apps and web versions of Gmail, GSuite, Inbox, Yahoo, AOL, Libero, Comcast, freenet, Mail.ru, Orange.fr
\t3. mso conditional: For Windows 10 Mail
-->
<body width=\"100%\" style=\"margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #222222;\">
\t<center style=\"width: 100%; background-color: #222222;\">
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
\t        &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
        </div>
        <!-- Preview Text Spacing Hack : END -->

        <!--
            Set the email width. Defined in two places:
            1. max-width for all clients except Desktop Windows Outlook, allowing the email to squish on narrow but never go wider than 600px.
            2. MSO tags for Desktop Windows Outlook enforce a 600px width.
        -->
        <div style=\"max-width: 600px; margin: 0 auto;\" class=\"email-container\">
            <!--[if mso]>
            <table align=\"center\" role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"600\">
            <tr>
            <td>
            <![endif]-->

\t        <!-- Email Body : BEGIN -->
\t        <table align=\"center\" role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\" style=\"margin: 0 auto;\">
\t\t        <!-- Email Header : BEGIN -->
\t            <tr>
\t                <td style=\"padding: 20px 0; text-align: center\">
\t                    <img src=\"https://via.placeholder.com/200x50\" width=\"200\" height=\"50\" alt=\"alt_text\" border=\"0\" style=\"height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;\">
\t                </td>
\t            </tr>
\t\t        <!-- Email Header : END -->

                <!-- Hero Image, Flush : BEGIN -->
                <tr>
                    <td style=\"background-color: #ffffff;\">
                        <img src=\"https://via.placeholder.com/1200x600\" width=\"600\" height=\"\" alt=\"alt_text\" border=\"0\" style=\"width: 100%; max-width: 600px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555; margin: auto;\" class=\"g-img\">
                    </td>
                </tr>
                <!-- Hero Image, Flush : END -->

                <!-- 1 Column Text + Button : BEGIN -->
                <tr>
                    <td style=\"background-color: #ffffff;\">
                        <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                            <tr>
                                <td style=\"padding: 20px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;\">
                                    <h1 style=\"margin: 0 0 10px 0; font-family: sans-serif; font-size: 25px; line-height: 30px; color: #333333; font-weight: normal;\">Praesent laoreet malesuada&nbsp;cursus.</h1>
                                    <p style=\"margin: 0;\">Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent laoreet malesuada cursus. Maecenas scelerisque congue eros eu posuere. Praesent in felis ut velit pretium lobortis rhoncus ut&nbsp;erat.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"padding: 0 20px;\">
                                    <!-- Button : BEGIN -->
                                    <table align=\"center\" role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"margin: auto;\">
                                        <tr>
                                            <td class=\"button-td button-td-primary\" style=\"border-radius: 4px; background: #222222;\">
\t\t\t\t\t\t\t\t\t\t\t     <a class=\"button-a button-a-primary\" href=\"https://google.com/\" style=\"background: #222222; border: 1px solid #000000; font-family: sans-serif; font-size: 15px; line-height: 15px; text-decoration: none; padding: 13px 17px; color: #ffffff; display: block; border-radius: 4px;\">Primary Button</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
                                        </tr>
                                    </table>
                                    <!-- Button : END -->
                                </td>
                            </tr>
                            <tr>
                                <td style=\"padding: 20px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;\">
                                    <h2 style=\"margin: 0 0 10px 0; font-family: sans-serif; font-size: 18px; line-height: 22px; color: #333333; font-weight: bold;\">Praesent in felis ut velit pretium lobortis rhoncus ut&nbsp;erat.</h2>
                                    <ul style=\"padding: 0; margin: 0 0 10px 0; list-style-type: disc;\">
\t\t\t\t\t\t\t\t\t\t<li style=\"margin:0 0 10px 30px;\" class=\"list-item-first\">A list item.</li>
\t\t\t\t\t\t\t\t\t\t<li style=\"margin:0 0 10px 30px;\">Another list item here.</li>
\t\t\t\t\t\t\t\t\t\t<li style=\"margin: 0 0 0 30px;\" class=\"list-item-last\">Everyone gets a list item, list items for everyone!</li>
\t\t\t\t\t\t\t\t\t</ul>
                                    <p style=\"margin: 0;\">Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent laoreet malesuada cursus. Maecenas scelerisque congue eros eu posuere. Praesent in felis ut velit pretium lobortis rhoncus ut&nbsp;erat.</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- 1 Column Text + Button : END -->

                <!-- 2 Even Columns : BEGIN -->
                <tr>
                    <td height=\"100%\" valign=\"top\" width=\"100%\" style=\"padding: 0 10px 40px 10px; background-color: #ffffff;\">
                        <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:560px;\">
                            <tr>
                                <td valign=\"top\" width=\"50%\">
                                    <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\" style=\"font-size: 14px; text-align: left;\">
                                        <tr>
                                            <td style=\"text-align: center; padding: 0 10px;\">
                                                <img src=\"https://via.placeholder.com/200\" width=\"200\" height=\"\" alt=\"alt_text\" border=\"0\" style=\"width: 100%; max-width: 200px; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;\">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"text-align: left; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding: 10px 10px 0;\">
                                               <p style=\"margin: 0;\">Maecenas sed ante pellentesque, posuere leo id, eleifend dolor.</p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td valign=\"top\" width=\"50%\">
                                    <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\" style=\"font-size: 14px; text-align: left;\">
                                        <tr>
                                            <td style=\"text-align: center; padding: 0 10px;\">
                                                <img src=\"https://via.placeholder.com/200\" width=\"200\" height=\"\" alt=\"alt_text\" border=\"0\" style=\"width: 100%; max-width: 200px; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;\">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"text-align: left; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding: 10px 10px 0;\">
                                                <p style=\"margin: 0;\">Maecenas sed ante pellentesque, posuere leo id, eleifend dolor.</p>
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
                    <td aria-hidden=\"true\" height=\"40\" style=\"font-size: 0px; line-height: 0px;\">
                        &nbsp;
                    </td>
                </tr>
                <!-- Clear Spacer : END -->

                <!-- 1 Column Text : BEGIN -->
                <tr>
                    <td style=\"background-color: #ffffff;\">
                        <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                            <tr>
                                <td style=\"padding: 20px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;\">
                                    <p style=\"margin: 0;\">Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent laoreet malesuada cursus. Maecenas scelerisque congue eros eu posuere. Praesent in felis ut velit pretium lobortis rhoncus ut&nbsp;erat.</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- 1 Column Text : END -->

            </table>
            <!-- Email Body : END -->

            <!-- Email Footer : BEGIN -->
\t        <table align=\"center\" role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\" style=\"margin: 0 auto;\">
                <tr>
                    <td style=\"padding: 20px; font-family: sans-serif; font-size: 12px; line-height: 15px; text-align: center; color: #888888;\">
                        <webversion style=\"color: #cccccc; text-decoration: underline; font-weight: bold;\">View as a Web Page</webversion>
                        <br><br>
\t\t\t\t\t\tCompany Name<br><span class=\"unstyle-auto-detected-links\">123 Fake Street, SpringField, OR, 97477 US<br>(123) 456-7890</span>
                        <br><br>
                        <unsubscribe style=\"color: #888888; text-decoration: underline;\">unsubscribe</unsubscribe>
                    </td>
                </tr>
            </table>
            <!-- Email Footer : END -->

            <!--[if mso]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </div>

        <!-- Full Bleed Background Section : BEGIN -->
        <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\" style=\"background-color: #709f2b;\">
            <tr>
                <td valign=\"top\">
                    <div align=\"center\" style=\"max-width: 600px; margin: auto;\" class=\"email-container\">
                        <!--[if mso]>
                        <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"600\" align=\"center\">
                        <tr>
                        <td>
                        <![endif]-->
                        <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                            <tr>
                                <td style=\"padding: 20px; text-align: left; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #ffffff;\">
                                    <p style=\"margin: 0;\">Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent laoreet malesuada cursus. Maecenas scelerisque congue eros eu posuere. Praesent in felis ut velit pretium lobortis rhoncus ut&nbsp;erat.</p>
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

    <!--[if mso | IE]>
    </td>
    </tr>
    </table>
    <![endif]-->
    </center>
</body>
</html>
";
        
        $__internal_bd9485d0a40157da20c94e1502288fa7ca03a4224acd3f621d4b2052aa675edc->leave($__internal_bd9485d0a40157da20c94e1502288fa7ca03a4224acd3f621d4b2052aa675edc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  73 => 14,  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}
<!DOCTYPE html>
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

        /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
        a {
            text-decoration: none;
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

        /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }

        /* What it does: Prevents Gmail from changing the text color in conversation threads. */
        .im {
            color: inherit !important;
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
    <!-- CSS Reset : END -->
\t<!-- Reset list spacing because Outlook ignores much of our inline CSS. -->
\t<!--[if mso]>
\t<style type=\"text/css\">
\t\tul,
\t\tol {
\t\t\tmargin: 0 !important;
\t\t}
\t\tli {
\t\t\tmargin-left: 30px !important;
\t\t}
\t\tli.list-item-first {
\t\t\tmargin-top: 0 !important;
\t\t}
\t\tli.list-item-last {
\t\t\tmargin-bottom: 10px !important;
\t\t}
\t</style>
\t<![endif]-->

    <!-- Progressive Enhancements : BEGIN -->
    <style>

\t    /* What it does: Hover styles for buttons */
\t    .button-td,
\t    .button-a {
\t        transition: all 100ms ease-in;
\t    }
\t    .button-td-primary:hover,
\t    .button-a-primary:hover {
\t        background: #555555 !important;
\t        border-color: #555555 !important;
\t    }

\t    /* Media Queries */
\t    @media screen and (max-width: 600px) {

\t        /* What it does: Adjust typography on small screens to improve readability */
\t        .email-container p {
\t            font-size: 17px !important;
\t        }

\t    }

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
<!--
\tThe email background color (#222222) is defined in three places:
\t1. body tag: for most email clients
\t2. center tag: for Gmail and Inbox mobile apps and web versions of Gmail, GSuite, Inbox, Yahoo, AOL, Libero, Comcast, freenet, Mail.ru, Orange.fr
\t3. mso conditional: For Windows 10 Mail
-->
<body width=\"100%\" style=\"margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #222222;\">
\t<center style=\"width: 100%; background-color: #222222;\">
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
\t        &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
        </div>
        <!-- Preview Text Spacing Hack : END -->

        <!--
            Set the email width. Defined in two places:
            1. max-width for all clients except Desktop Windows Outlook, allowing the email to squish on narrow but never go wider than 600px.
            2. MSO tags for Desktop Windows Outlook enforce a 600px width.
        -->
        <div style=\"max-width: 600px; margin: 0 auto;\" class=\"email-container\">
            <!--[if mso]>
            <table align=\"center\" role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"600\">
            <tr>
            <td>
            <![endif]-->

\t        <!-- Email Body : BEGIN -->
\t        <table align=\"center\" role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\" style=\"margin: 0 auto;\">
\t\t        <!-- Email Header : BEGIN -->
\t            <tr>
\t                <td style=\"padding: 20px 0; text-align: center\">
\t                    <img src=\"https://via.placeholder.com/200x50\" width=\"200\" height=\"50\" alt=\"alt_text\" border=\"0\" style=\"height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;\">
\t                </td>
\t            </tr>
\t\t        <!-- Email Header : END -->

                <!-- Hero Image, Flush : BEGIN -->
                <tr>
                    <td style=\"background-color: #ffffff;\">
                        <img src=\"https://via.placeholder.com/1200x600\" width=\"600\" height=\"\" alt=\"alt_text\" border=\"0\" style=\"width: 100%; max-width: 600px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555; margin: auto;\" class=\"g-img\">
                    </td>
                </tr>
                <!-- Hero Image, Flush : END -->

                <!-- 1 Column Text + Button : BEGIN -->
                <tr>
                    <td style=\"background-color: #ffffff;\">
                        <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                            <tr>
                                <td style=\"padding: 20px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;\">
                                    <h1 style=\"margin: 0 0 10px 0; font-family: sans-serif; font-size: 25px; line-height: 30px; color: #333333; font-weight: normal;\">Praesent laoreet malesuada&nbsp;cursus.</h1>
                                    <p style=\"margin: 0;\">Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent laoreet malesuada cursus. Maecenas scelerisque congue eros eu posuere. Praesent in felis ut velit pretium lobortis rhoncus ut&nbsp;erat.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"padding: 0 20px;\">
                                    <!-- Button : BEGIN -->
                                    <table align=\"center\" role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"margin: auto;\">
                                        <tr>
                                            <td class=\"button-td button-td-primary\" style=\"border-radius: 4px; background: #222222;\">
\t\t\t\t\t\t\t\t\t\t\t     <a class=\"button-a button-a-primary\" href=\"https://google.com/\" style=\"background: #222222; border: 1px solid #000000; font-family: sans-serif; font-size: 15px; line-height: 15px; text-decoration: none; padding: 13px 17px; color: #ffffff; display: block; border-radius: 4px;\">Primary Button</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
                                        </tr>
                                    </table>
                                    <!-- Button : END -->
                                </td>
                            </tr>
                            <tr>
                                <td style=\"padding: 20px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;\">
                                    <h2 style=\"margin: 0 0 10px 0; font-family: sans-serif; font-size: 18px; line-height: 22px; color: #333333; font-weight: bold;\">Praesent in felis ut velit pretium lobortis rhoncus ut&nbsp;erat.</h2>
                                    <ul style=\"padding: 0; margin: 0 0 10px 0; list-style-type: disc;\">
\t\t\t\t\t\t\t\t\t\t<li style=\"margin:0 0 10px 30px;\" class=\"list-item-first\">A list item.</li>
\t\t\t\t\t\t\t\t\t\t<li style=\"margin:0 0 10px 30px;\">Another list item here.</li>
\t\t\t\t\t\t\t\t\t\t<li style=\"margin: 0 0 0 30px;\" class=\"list-item-last\">Everyone gets a list item, list items for everyone!</li>
\t\t\t\t\t\t\t\t\t</ul>
                                    <p style=\"margin: 0;\">Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent laoreet malesuada cursus. Maecenas scelerisque congue eros eu posuere. Praesent in felis ut velit pretium lobortis rhoncus ut&nbsp;erat.</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- 1 Column Text + Button : END -->

                <!-- 2 Even Columns : BEGIN -->
                <tr>
                    <td height=\"100%\" valign=\"top\" width=\"100%\" style=\"padding: 0 10px 40px 10px; background-color: #ffffff;\">
                        <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:560px;\">
                            <tr>
                                <td valign=\"top\" width=\"50%\">
                                    <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\" style=\"font-size: 14px; text-align: left;\">
                                        <tr>
                                            <td style=\"text-align: center; padding: 0 10px;\">
                                                <img src=\"https://via.placeholder.com/200\" width=\"200\" height=\"\" alt=\"alt_text\" border=\"0\" style=\"width: 100%; max-width: 200px; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;\">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"text-align: left; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding: 10px 10px 0;\">
                                               <p style=\"margin: 0;\">Maecenas sed ante pellentesque, posuere leo id, eleifend dolor.</p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td valign=\"top\" width=\"50%\">
                                    <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\" style=\"font-size: 14px; text-align: left;\">
                                        <tr>
                                            <td style=\"text-align: center; padding: 0 10px;\">
                                                <img src=\"https://via.placeholder.com/200\" width=\"200\" height=\"\" alt=\"alt_text\" border=\"0\" style=\"width: 100%; max-width: 200px; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;\">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"text-align: left; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding: 10px 10px 0;\">
                                                <p style=\"margin: 0;\">Maecenas sed ante pellentesque, posuere leo id, eleifend dolor.</p>
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
                    <td aria-hidden=\"true\" height=\"40\" style=\"font-size: 0px; line-height: 0px;\">
                        &nbsp;
                    </td>
                </tr>
                <!-- Clear Spacer : END -->

                <!-- 1 Column Text : BEGIN -->
                <tr>
                    <td style=\"background-color: #ffffff;\">
                        <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                            <tr>
                                <td style=\"padding: 20px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;\">
                                    <p style=\"margin: 0;\">Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent laoreet malesuada cursus. Maecenas scelerisque congue eros eu posuere. Praesent in felis ut velit pretium lobortis rhoncus ut&nbsp;erat.</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- 1 Column Text : END -->

            </table>
            <!-- Email Body : END -->

            <!-- Email Footer : BEGIN -->
\t        <table align=\"center\" role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\" style=\"margin: 0 auto;\">
                <tr>
                    <td style=\"padding: 20px; font-family: sans-serif; font-size: 12px; line-height: 15px; text-align: center; color: #888888;\">
                        <webversion style=\"color: #cccccc; text-decoration: underline; font-weight: bold;\">View as a Web Page</webversion>
                        <br><br>
\t\t\t\t\t\tCompany Name<br><span class=\"unstyle-auto-detected-links\">123 Fake Street, SpringField, OR, 97477 US<br>(123) 456-7890</span>
                        <br><br>
                        <unsubscribe style=\"color: #888888; text-decoration: underline;\">unsubscribe</unsubscribe>
                    </td>
                </tr>
            </table>
            <!-- Email Footer : END -->

            <!--[if mso]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </div>

        <!-- Full Bleed Background Section : BEGIN -->
        <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\" style=\"background-color: #709f2b;\">
            <tr>
                <td valign=\"top\">
                    <div align=\"center\" style=\"max-width: 600px; margin: auto;\" class=\"email-container\">
                        <!--[if mso]>
                        <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"600\" align=\"center\">
                        <tr>
                        <td>
                        <![endif]-->
                        <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                            <tr>
                                <td style=\"padding: 20px; text-align: left; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #ffffff;\">
                                    <p style=\"margin: 0;\">Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent laoreet malesuada cursus. Maecenas scelerisque congue eros eu posuere. Praesent in felis ut velit pretium lobortis rhoncus ut&nbsp;erat.</p>
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

    <!--[if mso | IE]>
    </td>
    </tr>
    </table>
    <![endif]-->
    </center>
</body>
</html>
{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
