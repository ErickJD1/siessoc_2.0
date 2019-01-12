<?php

/* layout/base-layout.html.twig */
class __TwigTemplate_c3b5cb167e078164dfeabba8c76ab88073197ac2c921a8fbafc0f1bbd133580e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts_head' => array($this, 'block_javascripts_head'),
            'avanzu_admin_header' => array($this, 'block_avanzu_admin_header'),
            'avanzu_logo' => array($this, 'block_avanzu_logo'),
            'avanzu_navbar' => array($this, 'block_avanzu_navbar'),
            'avanzu_sidebar' => array($this, 'block_avanzu_sidebar'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'avanzu_breadcrumb' => array($this, 'block_avanzu_breadcrumb'),
            'page_content' => array($this, 'block_page_content'),
            'avanzu_admin_footer' => array($this, 'block_avanzu_admin_footer'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascripts_inline' => array($this, 'block_javascripts_inline'),
            'script_page' => array($this, 'block_script_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_346121a2a63f128b7924096d177da31439770d6c98273dbbd18bf71f62691d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346121a2a63f128b7924096d177da31439770d6c98273dbbd18bf71f62691d68->enter($__internal_346121a2a63f128b7924096d177da31439770d6c98273dbbd18bf71f62691d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/base-layout.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "layout/base-layout.html.twig", 1);
        // line 2
        echo "<!doctype html>
<!--[if lt IE 7 ]><html lang=\"en\" class=\"no-js ie6\"> <![endif]-->
<!--[if IE 7 ]><html lang=\"en\" class=\"no-js ie7\"> <![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie8\"> <![endif]-->
<!--[if IE 9 ]><html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"author\" content=\"\">
        <meta name=\"keywords\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 18
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 51
        echo "


        ";
        // line 55
        echo "        ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 64
        echo "
    </head>

    <!--Apply one or more of the following classes to get the


    desired effect
    |---------------------------------------------------------|
    | SKINS         | skin-blue                               |
    |               | skin-black                              |
    |               | skin-purple                             |
    |               | skin-yellow                             |
    |               | skin-red                                |
    |               | skin-green                              |
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | fixed                                   |
    |               | layout-boxed                            |
    |               | layout-top-nav                          |
    |               | sidebar-collapse                        |
    |               | sidebar-mini                            |
    |---------------------------------------------------------|
    -->

    <body class=\"";
        // line 87
        echo twig_escape_filter($this->env, ((array_key_exists("admin_skin", $context)) ? (_twig_default_filter((isset($context["admin_skin"]) ? $context["admin_skin"] : $this->getContext($context, "admin_skin")), "skin-blue")) : ("skin-blue")), "html", null, true);
        echo " fixed sidebar-mini\">

        <div class=\"wrapper\">
            ";
        // line 90
        $this->displayBlock('avanzu_admin_header', $context, $blocks);
        // line 125
        echo "
            <!-- Left side column. contains the logo and sidebar -->
            <aside class=\"main-sidebar sidebar-offcanvas\">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class=\"sidebar\">
                    ";
        // line 130
        $this->displayBlock('avanzu_sidebar', $context, $blocks);
        // line 136
        echo "                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <section class=\"content-header\">
                    <h1>
                        ";
        // line 145
        $this->displayBlock('page_title', $context, $blocks);
        // line 146
        echo "                        <small>";
        $this->displayBlock('page_subtitle', $context, $blocks);
        echo "</small>
                    </h1>
                    ";
        // line 148
        $this->displayBlock('avanzu_breadcrumb', $context, $blocks);
        // line 151
        echo "                </section>
                ";
        // line 152
        $context["msj"] = "";
        // line 153
        echo "                ";
        $context["txt"] = "";
        // line 154
        echo "                <!-- Alert Boxes -->
                ";
        // line 155
        if (((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method") || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 156
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 157
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method")) || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 158
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "warning"), "method"))) {
            // line 160
            echo "                <section class=\"flash-messages content-header\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            ";
            // line 163
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
                // line 164
                echo "                                ";
                $context["msj"] = 1;
                // line 165
                echo "                                ";
                $context["txt"] = twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"), ", ");
                // line 166
                echo "
                                ";
                // line 175
                echo "
                                ";
                // line 184
                echo "
                            ";
            }
            // line 186
            echo "
                            ";
            // line 187
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
                // line 188
                echo "                                ";
                $context["msj"] = 2;
                // line 189
                echo "                                ";
                $context["txt"] = twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"), ", ");
                // line 190
                echo "                                ";
                // line 197
                echo "            
                                ";
                // line 205
                echo "                            ";
            }
            // line 206
            echo "
                            ";
            // line 207
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method")) {
                // line 208
                echo "                                ";
                // line 215
                echo "                            ";
            }
            // line 216
            echo "
                            ";
            // line 217
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "warning"), "method")) {
                // line 218
                echo "                                ";
                $context["msj"] = 3;
                // line 219
                echo "                                ";
                $context["txt"] = twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"), ", ");
                // line 220
                echo "                                ";
                // line 227
                echo "                            ";
            }
            // line 228
            echo "                        </div>
                    </div>
                </section>
                ";
        }
        // line 232
        echo "
                    <!-- Main content -->
                    <section class=\"content\">
                        ";
        // line 235
        $this->displayBlock('page_content', $context, $blocks);
        // line 238
        echo "                    </section>
                    <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->

                ";
        // line 243
        $this->displayBlock('avanzu_admin_footer', $context, $blocks);
        // line 248
        echo "
                            </div>
                            <!-- ./wrapper -->

                            ";
        // line 253
        echo "                            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 331
        echo "
                            ";
        // line 333
        echo "                            ";
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 335
        echo "
                            ";
        // line 336
        $this->displayBlock('script_page', $context, $blocks);
        // line 339
        echo "
                            </body>
                            </html>
";
        
        $__internal_346121a2a63f128b7924096d177da31439770d6c98273dbbd18bf71f62691d68->leave($__internal_346121a2a63f128b7924096d177da31439770d6c98273dbbd18bf71f62691d68_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbb26b972d4ece3f526d0b1eaee81891bc5caac08cbcf4107b9a488a24219a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb26b972d4ece3f526d0b1eaee81891bc5caac08cbcf4107b9a488a24219a84->enter($__internal_dbb26b972d4ece3f526d0b1eaee81891bc5caac08cbcf4107b9a488a24219a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_dbb26b972d4ece3f526d0b1eaee81891bc5caac08cbcf4107b9a488a24219a84->leave($__internal_dbb26b972d4ece3f526d0b1eaee81891bc5caac08cbcf4107b9a488a24219a84_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3426e410dcdc007801ab855126d1a1d7688ba5ea5965f4afdfdf7e5b92c7b196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3426e410dcdc007801ab855126d1a1d7688ba5ea5965f4afdfdf7e5b92c7b196->enter($__internal_3426e410dcdc007801ab855126d1a1d7688ba5ea5965f4afdfdf7e5b92c7b196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "            <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fonts/font-awesome.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/sweetalert.css"), "html", null, true);
        echo "\"/>
            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />


            <style>
                .skin-blue  .main-header .navbar  {
                    /* background-color: #3c8dbc; */
                    background-image: -webkit-gradient(linear, left top, left bottom, from(#04519b), color-stop(60%, #033C73), to(#02325f));
                    background-image: linear-gradient(#04519b, #033C73 60%, #02325f);
                    background-repeat: no-repeat;
                }

                .help-block {

                    color: red;

                }



                .skin-blue .main-header .logo {
                    /* background-color: #357ca5; */
                    background-image: -webkit-gradient(linear, left top, left bottom, from(#04519b), color-stop(60%, #033C73), to(#02325f));
                    background-image: linear-gradient(#04519b, #033C73 60%, #02325f);
                    background-repeat: no-repeat;
                }
            </style>

        ";
        
        $__internal_3426e410dcdc007801ab855126d1a1d7688ba5ea5965f4afdfdf7e5b92c7b196->leave($__internal_3426e410dcdc007801ab855126d1a1d7688ba5ea5965f4afdfdf7e5b92c7b196_prof);

    }

    // line 55
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_e2fa13d0d44c3662d20a6627d9d410625060e56076c98b4180dfb9d4fbdf0f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2fa13d0d44c3662d20a6627d9d410625060e56076c98b4180dfb9d4fbdf0f56->enter($__internal_e2fa13d0d44c3662d20a6627d9d410625060e56076c98b4180dfb9d4fbdf0f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 56
        echo "            <!--[if lt IE 9]>

            <![endif]-->
            <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>


        ";
        
        $__internal_e2fa13d0d44c3662d20a6627d9d410625060e56076c98b4180dfb9d4fbdf0f56->leave($__internal_e2fa13d0d44c3662d20a6627d9d410625060e56076c98b4180dfb9d4fbdf0f56_prof);

    }

    // line 90
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_cfe546d220abb48c6526cea93cdfb92535a2e5ab7c6ecbd2e3c9d69797f3bf94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe546d220abb48c6526cea93cdfb92535a2e5ab7c6ecbd2e3c9d69797f3bf94->enter($__internal_cfe546d220abb48c6526cea93cdfb92535a2e5ab7c6ecbd2e3c9d69797f3bf94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        // line 91
        echo "                <header class=\"main-header\">
                    ";
        // line 92
        $this->displayBlock('avanzu_logo', $context, $blocks);
        // line 104
        echo "                    <!-- Header Navbar: style can be found in header.less -->
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <!-- Sidebar toggle button-->
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>
                        ";
        // line 110
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 111
            echo "                            <div class=\"navbar-custom-menu\">
                                <ul class=\"nav navbar-nav\">
                                    ";
            // line 113
            $this->displayBlock('avanzu_navbar', $context, $blocks);
            // line 119
            echo "                                </ul>
                            </div>
                        ";
        }
        // line 122
        echo "                    </nav>
                </header>
            ";
        
        $__internal_cfe546d220abb48c6526cea93cdfb92535a2e5ab7c6ecbd2e3c9d69797f3bf94->leave($__internal_cfe546d220abb48c6526cea93cdfb92535a2e5ab7c6ecbd2e3c9d69797f3bf94_prof);

    }

    // line 92
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_ef522ad1ae892dc53c23288175c8b0ec34d7c208413636dc2569af1108291bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef522ad1ae892dc53c23288175c8b0ec34d7c208413636dc2569af1108291bac->enter($__internal_ef522ad1ae892dc53c23288175c8b0ec34d7c208413636dc2569af1108291bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 93
        echo "                        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"logo\">
                            <!-- Add the class icon to your logo image or logo icon to add the margining -->
                            <span class=\"logo-mini\">
                                <!-- mini logo for sidebar mini 50x50 pixels -->
                                <img style=\"width:25px;\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo-mini.png"), "html", null, true);
        echo "\"></img>
                            </span>
                            <span class=\"logo-lg\">
                                <img style=\"width:25px;\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo-mini.png"), "html", null, true);
        echo "\"></img>";
        $this->displayBlock("title", $context, $blocks);
        echo "
                            </span>
                        </a>
                    ";
        
        $__internal_ef522ad1ae892dc53c23288175c8b0ec34d7c208413636dc2569af1108291bac->leave($__internal_ef522ad1ae892dc53c23288175c8b0ec34d7c208413636dc2569af1108291bac_prof);

    }

    // line 113
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_edc3cc9488b8d97845a6fd8e3e3bc45d42c1c5081119463929ba685f8272716f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc3cc9488b8d97845a6fd8e3e3bc45d42c1c5081119463929ba685f8272716f->enter($__internal_edc3cc9488b8d97845a6fd8e3e3bc45d42c1c5081119463929ba685f8272716f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

        // line 114
        echo "                                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:messages"));
        echo "
                                        ";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:notifications"));
        echo "
                                        ";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:tasks"));
        echo "
                                        ";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Navbar:user"));
        echo "
                                    ";
        
        $__internal_edc3cc9488b8d97845a6fd8e3e3bc45d42c1c5081119463929ba685f8272716f->leave($__internal_edc3cc9488b8d97845a6fd8e3e3bc45d42c1c5081119463929ba685f8272716f_prof);

    }

    // line 130
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_7fe7aa11fdffb1ec8cad45f1192ae78cf113f5a925afbbd3385ec6986b378ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe7aa11fdffb1ec8cad45f1192ae78cf113f5a925afbbd3385ec6986b378ed7->enter($__internal_7fe7aa11fdffb1ec8cad45f1192ae78cf113f5a925afbbd3385ec6986b378ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 131
        echo "                        ";
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 132
            echo "                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Sidebar:userPanel"));
            echo "
                        ";
        }
        // line 134
        echo "                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:menu", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
        echo "
                    ";
        
        $__internal_7fe7aa11fdffb1ec8cad45f1192ae78cf113f5a925afbbd3385ec6986b378ed7->leave($__internal_7fe7aa11fdffb1ec8cad45f1192ae78cf113f5a925afbbd3385ec6986b378ed7_prof);

    }

    // line 145
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_d40906f9ac0acd2747333d896421300c1b690ef7c10eab11cc7b31d3431a3403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d40906f9ac0acd2747333d896421300c1b690ef7c10eab11cc7b31d3431a3403->enter($__internal_d40906f9ac0acd2747333d896421300c1b690ef7c10eab11cc7b31d3431a3403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Page Title";
        
        $__internal_d40906f9ac0acd2747333d896421300c1b690ef7c10eab11cc7b31d3431a3403->leave($__internal_d40906f9ac0acd2747333d896421300c1b690ef7c10eab11cc7b31d3431a3403_prof);

    }

    // line 146
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_fcbc12ded7b767d67215a912668c8080ad2784b267689d0ab751868fe6ec4efc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcbc12ded7b767d67215a912668c8080ad2784b267689d0ab751868fe6ec4efc->enter($__internal_fcbc12ded7b767d67215a912668c8080ad2784b267689d0ab751868fe6ec4efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        
        $__internal_fcbc12ded7b767d67215a912668c8080ad2784b267689d0ab751868fe6ec4efc->leave($__internal_fcbc12ded7b767d67215a912668c8080ad2784b267689d0ab751868fe6ec4efc_prof);

    }

    // line 148
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_d4fadd12e03191be83263e0adc0a1dc9d156eb9c722311fcff8541873aeb9276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4fadd12e03191be83263e0adc0a1dc9d156eb9c722311fcff8541873aeb9276->enter($__internal_d4fadd12e03191be83263e0adc0a1dc9d156eb9c722311fcff8541873aeb9276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 149
        echo "                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
                    ";
        
        $__internal_d4fadd12e03191be83263e0adc0a1dc9d156eb9c722311fcff8541873aeb9276->leave($__internal_d4fadd12e03191be83263e0adc0a1dc9d156eb9c722311fcff8541873aeb9276_prof);

    }

    // line 235
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_5778ee11643cd0346308b922438959a68c27eaf3b78dd77107faf810b441c8d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5778ee11643cd0346308b922438959a68c27eaf3b78dd77107faf810b441c8d3->enter($__internal_5778ee11643cd0346308b922438959a68c27eaf3b78dd77107faf810b441c8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 236
        echo "
                        ";
        
        $__internal_5778ee11643cd0346308b922438959a68c27eaf3b78dd77107faf810b441c8d3->leave($__internal_5778ee11643cd0346308b922438959a68c27eaf3b78dd77107faf810b441c8d3_prof);

    }

    // line 243
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_fe16bb3e95e969b9e169a5dbe3cea32f9f5f6b79210c44d331a16203e1dfa8b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe16bb3e95e969b9e169a5dbe3cea32f9f5f6b79210c44d331a16203e1dfa8b0->enter($__internal_fe16bb3e95e969b9e169a5dbe3cea32f9f5f6b79210c44d331a16203e1dfa8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 244
        echo "                    <footer class=\"main-footer\">
                        <strong>Copyright &copy; ";
        // line 245
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"http://";
        echo twig_escape_filter($this->env, (isset($context["footer_url"]) ? $context["footer_url"] : $this->getContext($context, "footer_url")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        echo "
                                </footer>
                            ";
        
        $__internal_fe16bb3e95e969b9e169a5dbe3cea32f9f5f6b79210c44d331a16203e1dfa8b0->leave($__internal_fe16bb3e95e969b9e169a5dbe3cea32f9f5f6b79210c44d331a16203e1dfa8b0_prof);

    }

    // line 253
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_13abc1c6a1b1ca4156d0565028849410dc430ca56d6380638e4f46bbeb2c49da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13abc1c6a1b1ca4156d0565028849410dc430ca56d6380638e4f46bbeb2c49da->enter($__internal_13abc1c6a1b1ca4156d0565028849410dc430ca56d6380638e4f46bbeb2c49da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 254
        echo "
                                <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
                                <script>
                                    \$(document).ready(function () {
                                        if (\"";
        // line 258
        echo twig_escape_filter($this->env, (isset($context["msj"]) ? $context["msj"] : $this->getContext($context, "msj")), "html", null, true);
        echo "\" != \"\") {
                                            var suc = \"";
        // line 259
        echo twig_escape_filter($this->env, (isset($context["msj"]) ? $context["msj"] : $this->getContext($context, "msj")), "html", null, true);
        echo "\";
                                            var texto = '";
        // line 260
        echo twig_escape_filter($this->env, (isset($context["txt"]) ? $context["txt"] : $this->getContext($context, "txt")), "html", null, true);
        echo "';
                                            if (suc === \"1\") {
                                                swal('EXITO', texto, 'success');
                                                suc = 0;
                                            } else {

                                                if (suc === \"2\") {
                                                    swal('Error', texto, 'error');
                                                    suc = 0;
                                                } else {
                                                    if (suc === \"3\") {
                                                        swal('Warning', texto, 'warning');
                                                        suc = 0;
                                                    } else {

                                                    }

                                                }
                                            }
                                        }
                                        \$('#tabelMahasiswa').DataTable({
                                            \"scrollY\": \"300px\",
                                            \"scrollX\": \"100%\",
                                            language: {
                                                \"decimal\": \"\",
                                                \"emptyTable\": \"No hay información\",
                                                \"info\": \"Mostrando _START_ a _END_ de _TOTAL_ Entradas\",
                                                \"infoEmpty\": \"Mostrando 0 to 0 of 0 Entradas\",
                                                \"infoFiltered\": \"(Filtrado de _MAX_ total entradas)\",
                                                \"infoPostFix\": \"\",
                                                \"thousands\": \",\",
                                                \"lengthMenu\": \"Mostrar _MENU_ Entradas\",
                                                \"loadingRecords\": \"Cargando...\",
                                                \"processing\": \"Procesando...\",
                                                \"search\": \"Buscar:\",
                                                \"zeroRecords\": \"Sin resultados encontrados\",
                                                \"paginate\": {
                                                    \"first\": \"Primero\",
                                                    \"last\": \"Ultimo\",
                                                    \"next\": \"Siguiente\",
                                                    \"previous\": \"Anterior\"
                                                }
                                            },
                                        });
                                        \$('a.toggle-vis').on('click', function (e) {
                                            e.preventDefault();
                                            // Get the column API object
                                            var column = table.column(\$(this).attr('data-column'));
                                            // Toggle the visibility
                                            column.visible(!column.visible());
                                        });

                                    });

                                    // Preview image thumbnail on upload for vich
                                    \$.fn.previewImage = function () {
                                        \$(this).change(function (e) {
                                            var url = URL.createObjectURL(e.target.files[0]);
                                            \$(this).parents('.vich-image').children('img').remove();
                                            \$(this).parents('.vich-image').prepend('<img class=\"preview_image\" src=\"' + url + '\"/>');
                                        })
                                    }
                                    \$('#profile_avatarImage_file').previewImage();
                                    \$('#profile_logo_file').previewImage();
                                </script>

                                <script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>

                                <script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>

                            ";
        
        $__internal_13abc1c6a1b1ca4156d0565028849410dc430ca56d6380638e4f46bbeb2c49da->leave($__internal_13abc1c6a1b1ca4156d0565028849410dc430ca56d6380638e4f46bbeb2c49da_prof);

    }

    // line 333
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_08233b33e0ee2a265a790a4679af67c427b8cdc44b9ebd428256ec0700a36886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08233b33e0ee2a265a790a4679af67c427b8cdc44b9ebd428256ec0700a36886->enter($__internal_08233b33e0ee2a265a790a4679af67c427b8cdc44b9ebd428256ec0700a36886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        // line 334
        echo "                            ";
        
        $__internal_08233b33e0ee2a265a790a4679af67c427b8cdc44b9ebd428256ec0700a36886->leave($__internal_08233b33e0ee2a265a790a4679af67c427b8cdc44b9ebd428256ec0700a36886_prof);

    }

    // line 336
    public function block_script_page($context, array $blocks = array())
    {
        $__internal_e202bf0bfedaecd350789d1ff2a40c3c8e3dce56e2802f1613e82de3ac423b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e202bf0bfedaecd350789d1ff2a40c3c8e3dce56e2802f1613e82de3ac423b62->enter($__internal_e202bf0bfedaecd350789d1ff2a40c3c8e3dce56e2802f1613e82de3ac423b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_page"));

        // line 337
        echo "
                            ";
        
        $__internal_e202bf0bfedaecd350789d1ff2a40c3c8e3dce56e2802f1613e82de3ac423b62->leave($__internal_e202bf0bfedaecd350789d1ff2a40c3c8e3dce56e2802f1613e82de3ac423b62_prof);

    }

    public function getTemplateName()
    {
        return "layout/base-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  692 => 337,  686 => 336,  679 => 334,  673 => 333,  663 => 328,  658 => 326,  589 => 260,  585 => 259,  581 => 258,  575 => 255,  572 => 254,  566 => 253,  552 => 245,  549 => 244,  543 => 243,  535 => 236,  529 => 235,  519 => 149,  513 => 148,  502 => 146,  490 => 145,  480 => 134,  474 => 132,  471 => 131,  465 => 130,  456 => 117,  452 => 116,  448 => 115,  443 => 114,  437 => 113,  424 => 100,  418 => 97,  410 => 93,  404 => 92,  395 => 122,  390 => 119,  388 => 113,  384 => 111,  382 => 110,  374 => 104,  372 => 92,  369 => 91,  363 => 90,  352 => 60,  348 => 59,  343 => 56,  337 => 55,  302 => 23,  298 => 22,  294 => 21,  290 => 20,  287 => 19,  281 => 18,  269 => 15,  259 => 339,  257 => 336,  254 => 335,  251 => 333,  248 => 331,  245 => 253,  239 => 248,  237 => 243,  230 => 238,  228 => 235,  223 => 232,  217 => 228,  214 => 227,  212 => 220,  209 => 219,  206 => 218,  204 => 217,  201 => 216,  198 => 215,  196 => 208,  194 => 207,  191 => 206,  188 => 205,  185 => 197,  183 => 190,  180 => 189,  177 => 188,  175 => 187,  172 => 186,  168 => 184,  165 => 175,  162 => 166,  159 => 165,  156 => 164,  154 => 163,  149 => 160,  147 => 158,  146 => 157,  145 => 156,  144 => 155,  141 => 154,  138 => 153,  136 => 152,  133 => 151,  131 => 148,  125 => 146,  123 => 145,  112 => 136,  110 => 130,  103 => 125,  101 => 90,  95 => 87,  70 => 64,  67 => 55,  62 => 51,  59 => 18,  54 => 15,  39 => 2,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}
<!doctype html>
<!--[if lt IE 7 ]><html lang=\"en\" class=\"no-js ie6\"> <![endif]-->
<!--[if IE 7 ]><html lang=\"en\" class=\"no-js ie7\"> <![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie8\"> <![endif]-->
<!--[if IE 9 ]><html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"author\" content=\"\">
        <meta name=\"keywords\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <title>{% block title %}{{ site_name }}{% endblock %}</title>

        {# -------------------------------------------------------------------------------------------------- STYLESHEETS #}
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\"/>
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/admin-lte-all.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{asset('css/fonts/font-awesome.css')}}\"/>
            <link rel=\"stylesheet\" href=\"{{asset('css/sweetalert.css')}}\"/>
            <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />


            <style>
                .skin-blue  .main-header .navbar  {
                    /* background-color: #3c8dbc; */
                    background-image: -webkit-gradient(linear, left top, left bottom, from(#04519b), color-stop(60%, #033C73), to(#02325f));
                    background-image: linear-gradient(#04519b, #033C73 60%, #02325f);
                    background-repeat: no-repeat;
                }

                .help-block {

                    color: red;

                }



                .skin-blue .main-header .logo {
                    /* background-color: #357ca5; */
                    background-image: -webkit-gradient(linear, left top, left bottom, from(#04519b), color-stop(60%, #033C73), to(#02325f));
                    background-image: linear-gradient(#04519b, #033C73 60%, #02325f);
                    background-repeat: no-repeat;
                }
            </style>

        {% endblock %}



        {# --------------------------------------------------------------------------------------------- JAVASCRIPTS_HEAD #}
        {%  block javascripts_head %}
            <!--[if lt IE 9]>

            <![endif]-->
            <script src=\"{{ asset('js/jquery.js') }}\"></script>
            <script src=\"{{ asset('js/jquery.dataTables.min.js') }}\"></script>


        {% endblock %}

    </head>

    <!--Apply one or more of the following classes to get the


    desired effect
    |---------------------------------------------------------|
    | SKINS         | skin-blue                               |
    |               | skin-black                              |
    |               | skin-purple                             |
    |               | skin-yellow                             |
    |               | skin-red                                |
    |               | skin-green                              |
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | fixed                                   |
    |               | layout-boxed                            |
    |               | layout-top-nav                          |
    |               | sidebar-collapse                        |
    |               | sidebar-mini                            |
    |---------------------------------------------------------|
    -->

    <body class=\"{{ admin_skin|default('skin-blue')}} fixed sidebar-mini\">

        <div class=\"wrapper\">
            {% block avanzu_admin_header %}
                <header class=\"main-header\">
                    {% block avanzu_logo %}
                        <a href=\"{{ path('homepage') }}\" class=\"logo\">
                            <!-- Add the class icon to your logo image or logo icon to add the margining -->
                            <span class=\"logo-mini\">
                                <!-- mini logo for sidebar mini 50x50 pixels -->
                                <img style=\"width:25px;\" src=\"{{ asset('bundles/app/images/logo-mini.png') }}\"></img>
                            </span>
                            <span class=\"logo-lg\">
                                <img style=\"width:25px;\" src=\"{{ asset('bundles/app/images/logo-mini.png') }}\"></img>{{ block('title') }}
                            </span>
                        </a>
                    {% endblock %}
                    <!-- Header Navbar: style can be found in header.less -->
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <!-- Sidebar toggle button-->
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>
                        {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}
                            <div class=\"navbar-custom-menu\">
                                <ul class=\"nav navbar-nav\">
                                    {% block avanzu_navbar %}
                                        {{ render(controller('AvanzuAdminThemeBundle:Navbar:messages')) }}
                                        {{ render(controller('AvanzuAdminThemeBundle:Navbar:notifications')) }}
                                        {{ render(controller('AvanzuAdminThemeBundle:Navbar:tasks')) }}
                                        {{ render(controller('AppBundle:Navbar:user')) }}
                                    {% endblock %}
                                </ul>
                            </div>
                        {% endif %}
                    </nav>
                </header>
            {% endblock %}

            <!-- Left side column. contains the logo and sidebar -->
            <aside class=\"main-sidebar sidebar-offcanvas\">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class=\"sidebar\">
                    {% block avanzu_sidebar %}
                        {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}
                            {{ render(controller('AppBundle:Sidebar:userPanel')) }}
                        {% endif %}
                        {{ render(controller('AvanzuAdminThemeBundle:Sidebar:menu', {'request':app.request})) }}
                    {% endblock %}
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <section class=\"content-header\">
                    <h1>
                        {% block page_title %}Page Title{% endblock %}
                        <small>{% block page_subtitle %}{% endblock %}</small>
                    </h1>
                    {% block avanzu_breadcrumb %}
                        {{ render(controller('AppBundle:Breadcrumb:breadcrumb', {'request':app.request, 'title' : block('page_title')})) }}
                    {% endblock %}
                </section>
                {% set msj=\"\" %}
                {% set txt=\"\" %}
                <!-- Alert Boxes -->
                {% if app.session.flashBag.has('success')
                        or app.session.flashBag.has('error')
                        or app.session.flashBag.has('notice')
                        or app.session.flashBag.has('warning')
                %}
                <section class=\"flash-messages content-header\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            {% if app.session.flashBag.has('success') %}
                                {% set msj=1 %}
                                {% set txt=(app.session.flashBag.get('success')|join(', ')) %}

                                {#  <div class=\"alert alert-success alert-dismissible\">
                                      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                      <h4><i class=\"icon fa fa-check\"></i> Success!</h4>
                                      {% for msg in app.session.flashBag.get('success') %}
                                          {{ msg }}
                                      {% endfor %}

                                  </div> #}

                                {#  <div class=\"alert alert-success alert-dismissible\">
                                      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                      <h4><i class=\"icon fa fa-check\"></i> Success!</h4>
                                      {% for msg in app.session.flashBag.get('success') %}
                                          {{ msg }}
                                      {% endfor %}

                                  </div> #}

                            {% endif %}

                            {% if app.session.flashBag.has('error') %}
                                {% set msj=2 %}
                                {% set txt=(app.session.flashBag.get('error')|join(', ')) %}
                                {#  <div class=\"alert alert-danger alert-dismissible\">
                                      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                      <h4><i class=\"icon fa fa-ban\"></i> Error!</h4>
                                      {% for msg in app.session.flashBag.get('error') %}
                                          {{ msg }}
                                      {% endfor %}

                                  </div> #}            
                                {#  <div class=\"alert alert-danger alert-dismissible\">
                                      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                      <h4><i class=\"icon fa fa-ban\"></i> Error!</h4>
                                      {% for msg in app.session.flashBag.get('error') %}
                                          {{ msg }}
                                      {% endfor %}
                                  </div> #}
                            {% endif %}

                            {% if app.session.flashBag.has('notice') %}
                                {# <div class=\"alert alert-info alert-dismissible\">
                                     <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                     <h4><i class=\"icon fa fa-info\"></i> Notice!</h4>
                                     {% for msg in app.session.flashBag.get('notice') %}
                                         {{ msg }}
                                     {% endfor %}
                                 </div> #}
                            {% endif %}

                            {% if app.session.flashBag.has('warning') %}
                                {% set msj=3 %}
                                {% set txt=(app.session.flashBag.get('warning')|join(', ')) %}
                                {# <div class=\"alert alert-info alert-dismissible\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                    <h4><i class=\"icon fa fa-warning\"></i> Warning!</h4>
                                    {% for msg in app.session.flashBag.get('warning') %}
                                        {{ msg }}
                                    {% endfor %}
                                </div> #}
                            {% endif %}
                        </div>
                    </div>
                </section>
                {% endif %}

                    <!-- Main content -->
                    <section class=\"content\">
                        {% block page_content %}

                        {% endblock %}
                    </section>
                    <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->

                {% block avanzu_admin_footer %}
                    <footer class=\"main-footer\">
                        <strong>Copyright &copy; {{ \"now\"|date(\"Y\") }} <a href=\"http://{{ footer_url }}\" target=\"_blank\">{{ site_name }}
                                </footer>
                            {% endblock %}

                            </div>
                            <!-- ./wrapper -->

                            {# ------------------------------------------------------------------------------------------------------ JAVASCRIPTS #}
                            {% block javascripts %}

                                <script src=\"{{ asset('bundles/avanzuadmintheme/static/'~app.environment~'/scripts/admin-lte-all.js') }}\"></script>
                                <script>
                                    \$(document).ready(function () {
                                        if (\"{{msj}}\" != \"\") {
                                            var suc = \"{{msj}}\";
                                            var texto = '{{txt}}';
                                            if (suc === \"1\") {
                                                swal('EXITO', texto, 'success');
                                                suc = 0;
                                            } else {

                                                if (suc === \"2\") {
                                                    swal('Error', texto, 'error');
                                                    suc = 0;
                                                } else {
                                                    if (suc === \"3\") {
                                                        swal('Warning', texto, 'warning');
                                                        suc = 0;
                                                    } else {

                                                    }

                                                }
                                            }
                                        }
                                        \$('#tabelMahasiswa').DataTable({
                                            \"scrollY\": \"300px\",
                                            \"scrollX\": \"100%\",
                                            language: {
                                                \"decimal\": \"\",
                                                \"emptyTable\": \"No hay información\",
                                                \"info\": \"Mostrando _START_ a _END_ de _TOTAL_ Entradas\",
                                                \"infoEmpty\": \"Mostrando 0 to 0 of 0 Entradas\",
                                                \"infoFiltered\": \"(Filtrado de _MAX_ total entradas)\",
                                                \"infoPostFix\": \"\",
                                                \"thousands\": \",\",
                                                \"lengthMenu\": \"Mostrar _MENU_ Entradas\",
                                                \"loadingRecords\": \"Cargando...\",
                                                \"processing\": \"Procesando...\",
                                                \"search\": \"Buscar:\",
                                                \"zeroRecords\": \"Sin resultados encontrados\",
                                                \"paginate\": {
                                                    \"first\": \"Primero\",
                                                    \"last\": \"Ultimo\",
                                                    \"next\": \"Siguiente\",
                                                    \"previous\": \"Anterior\"
                                                }
                                            },
                                        });
                                        \$('a.toggle-vis').on('click', function (e) {
                                            e.preventDefault();
                                            // Get the column API object
                                            var column = table.column(\$(this).attr('data-column'));
                                            // Toggle the visibility
                                            column.visible(!column.visible());
                                        });

                                    });

                                    // Preview image thumbnail on upload for vich
                                    \$.fn.previewImage = function () {
                                        \$(this).change(function (e) {
                                            var url = URL.createObjectURL(e.target.files[0]);
                                            \$(this).parents('.vich-image').children('img').remove();
                                            \$(this).parents('.vich-image').prepend('<img class=\"preview_image\" src=\"' + url + '\"/>');
                                        })
                                    }
                                    \$('#profile_avatarImage_file').previewImage();
                                    \$('#profile_logo_file').previewImage();
                                </script>

                                <script src=\"{{ asset('js/sweetalert.min.js') }}\"></script>

                                <script src=\"{{ asset('js/sweetalert.min.js') }}\"></script>

                            {% endblock %}

                            {# ----------------------------------------------------------------------------------------------- JAVASCRIPTS_INLINE #}
                            {% block javascripts_inline %}
                            {% endblock %}

                            {% block script_page %}

                            {% endblock %}

                            </body>
                            </html>
", "layout/base-layout.html.twig", "/home/ubuntu/workspace/app/Resources/views/layout/base-layout.html.twig");
    }
}
