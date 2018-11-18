<?php

/* layout/base-layout.html.twig */
class __TwigTemplate_1006e3b7df9e4a7988b81bb1c02fe92c39e4851bacd1fdd902e34e2422e928e4 extends Twig_Template
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
        $__internal_4029f54f9208631c05c9e3a0b05acdaea2564eef043eb188081f0171680cbca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4029f54f9208631c05c9e3a0b05acdaea2564eef043eb188081f0171680cbca5->enter($__internal_4029f54f9208631c05c9e3a0b05acdaea2564eef043eb188081f0171680cbca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/base-layout.html.twig"));

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
        // line 42
        echo "


        ";
        // line 46
        echo "        ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 54
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
        // line 75
        echo twig_escape_filter($this->env, ((array_key_exists("admin_skin", $context)) ? (_twig_default_filter((isset($context["admin_skin"]) ? $context["admin_skin"] : $this->getContext($context, "admin_skin")), "skin-blue")) : ("skin-blue")), "html", null, true);
        echo " fixed sidebar-mini\">

        <div class=\"wrapper\">
            ";
        // line 78
        $this->displayBlock('avanzu_admin_header', $context, $blocks);
        // line 113
        echo "
            <!-- Left side column. contains the logo and sidebar -->
            <aside class=\"main-sidebar sidebar-offcanvas\">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class=\"sidebar\">
                    ";
        // line 118
        $this->displayBlock('avanzu_sidebar', $context, $blocks);
        // line 125
        echo "                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <section class=\"content-header\">
                    <h1>
                        ";
        // line 134
        $this->displayBlock('page_title', $context, $blocks);
        // line 135
        echo "                        <small>";
        $this->displayBlock('page_subtitle', $context, $blocks);
        echo "</small>
                    </h1>
                    ";
        // line 137
        $this->displayBlock('avanzu_breadcrumb', $context, $blocks);
        // line 140
        echo "                </section>
                ";
        // line 141
        $context["msj"] = "";
        // line 142
        echo "                ";
        $context["txt"] = "";
        // line 143
        echo "                <!-- Alert Boxes -->
                ";
        // line 144
        if (((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method") || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 145
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 146
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method")) || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 147
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "warning"), "method"))) {
            // line 149
            echo "                <section class=\"flash-messages content-header\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            ";
            // line 152
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
                // line 153
                echo "                                ";
                $context["msj"] = 1;
                // line 154
                echo "                                ";
                $context["txt"] = twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"), ", ");
                // line 155
                echo "
                                ";
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
            }
            // line 177
            echo "
                            ";
            // line 178
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
                // line 179
                echo "                                ";
                $context["msj"] = 2;
                // line 180
                echo "                                ";
                $context["txt"] = twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"), ", ");
                // line 181
                echo "                                ";
                // line 189
                echo "                                ";
                $context["msj"] = 2;
                // line 190
                echo "                                ";
                $context["txt"] = twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"), ", ");
                // line 191
                echo "                                ";
                // line 199
                echo "                            ";
            }
            // line 200
            echo "
                            ";
            // line 201
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method")) {
                // line 202
                echo "                                ";
                // line 209
                echo "                            ";
            }
            // line 210
            echo "
                            ";
            // line 211
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "warning"), "method")) {
                // line 212
                echo "                                ";
                $context["msj"] = 3;
                // line 213
                echo "                                ";
                $context["txt"] = twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"), ", ");
                // line 214
                echo "                                ";
                // line 221
                echo "                            ";
            }
            // line 222
            echo "                        </div>
                    </div>
                </section>
                ";
        }
        // line 226
        echo "
                    <!-- Main content -->
                    <section class=\"content\">
                        ";
        // line 229
        $this->displayBlock('page_content', $context, $blocks);
        // line 232
        echo "                    </section>
                    <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->

                ";
        // line 237
        $this->displayBlock('avanzu_admin_footer', $context, $blocks);
        // line 242
        echo "
                            </div>
                            <!-- ./wrapper -->

                            ";
        // line 247
        echo "                            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 305
        echo "
                            ";
        // line 307
        echo "                            ";
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 309
        echo "
                            ";
        // line 310
        $this->displayBlock('script_page', $context, $blocks);
        // line 313
        echo "
                            </body>
                            </html>
";
        
        $__internal_4029f54f9208631c05c9e3a0b05acdaea2564eef043eb188081f0171680cbca5->leave($__internal_4029f54f9208631c05c9e3a0b05acdaea2564eef043eb188081f0171680cbca5_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_42a93e617f092abbd9f0758c5bac379d4ade0fc06e64a2cd96880640e0e513c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a93e617f092abbd9f0758c5bac379d4ade0fc06e64a2cd96880640e0e513c4->enter($__internal_42a93e617f092abbd9f0758c5bac379d4ade0fc06e64a2cd96880640e0e513c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_42a93e617f092abbd9f0758c5bac379d4ade0fc06e64a2cd96880640e0e513c4->leave($__internal_42a93e617f092abbd9f0758c5bac379d4ade0fc06e64a2cd96880640e0e513c4_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_911c0cd026a1874e1b8d8a7649a2e49dd6395925cc420b88243215635788e95e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911c0cd026a1874e1b8d8a7649a2e49dd6395925cc420b88243215635788e95e->enter($__internal_911c0cd026a1874e1b8d8a7649a2e49dd6395925cc420b88243215635788e95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "            <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fonts/font-awesome.css")), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/sweetalert.css")), "html", null, true);
        echo "\">
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

                .skin-blue .main-header .logo {
                    /* background-color: #357ca5; */
                    background-image: -webkit-gradient(linear, left top, left bottom, from(#04519b), color-stop(60%, #033C73), to(#02325f));
                    background-image: linear-gradient(#04519b, #033C73 60%, #02325f);
                    background-repeat: no-repeat;
                }
            </style>

        ";
        
        $__internal_911c0cd026a1874e1b8d8a7649a2e49dd6395925cc420b88243215635788e95e->leave($__internal_911c0cd026a1874e1b8d8a7649a2e49dd6395925cc420b88243215635788e95e_prof);

    }

    // line 46
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_26fb951ba47b3ba7f04f0f4fd9e832f1a9061146329a741f9f8facb8e1fecc91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26fb951ba47b3ba7f04f0f4fd9e832f1a9061146329a741f9f8facb8e1fecc91->enter($__internal_26fb951ba47b3ba7f04f0f4fd9e832f1a9061146329a741f9f8facb8e1fecc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 47
        echo "            <!--[if lt IE 9]>

            <![endif]-->



        ";
        
        $__internal_26fb951ba47b3ba7f04f0f4fd9e832f1a9061146329a741f9f8facb8e1fecc91->leave($__internal_26fb951ba47b3ba7f04f0f4fd9e832f1a9061146329a741f9f8facb8e1fecc91_prof);

    }

    // line 78
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_c56da929ed7845be058d128611190aefb82215d52849b310ddb91133245e156f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56da929ed7845be058d128611190aefb82215d52849b310ddb91133245e156f->enter($__internal_c56da929ed7845be058d128611190aefb82215d52849b310ddb91133245e156f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        // line 79
        echo "                <header class=\"main-header\">
                    ";
        // line 80
        $this->displayBlock('avanzu_logo', $context, $blocks);
        // line 92
        echo "                    <!-- Header Navbar: style can be found in header.less -->
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <!-- Sidebar toggle button-->
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>
                        ";
        // line 98
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 99
            echo "                            <div class=\"navbar-custom-menu\">
                                <ul class=\"nav navbar-nav\">
                                    ";
            // line 101
            $this->displayBlock('avanzu_navbar', $context, $blocks);
            // line 107
            echo "                                </ul>
                            </div>
                        ";
        }
        // line 110
        echo "                    </nav>
                </header>
            ";
        
        $__internal_c56da929ed7845be058d128611190aefb82215d52849b310ddb91133245e156f->leave($__internal_c56da929ed7845be058d128611190aefb82215d52849b310ddb91133245e156f_prof);

    }

    // line 80
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_dd3b0bca00c913ffd7d527ef37494556aa75969ef6cf464da193f511f363a363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd3b0bca00c913ffd7d527ef37494556aa75969ef6cf464da193f511f363a363->enter($__internal_dd3b0bca00c913ffd7d527ef37494556aa75969ef6cf464da193f511f363a363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 81
        echo "                        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"logo\">
                            <!-- Add the class icon to your logo image or logo icon to add the margining -->
                            <span class=\"logo-mini\">
                                <!-- mini logo for sidebar mini 50x50 pixels -->
                                <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo-mini.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </span>
                            <span class=\"logo-lg\">
                                <img style=\"width:25px;\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo-mini.png"), "html", null, true);
        echo "\"></img>";
        $this->displayBlock("title", $context, $blocks);
        echo "
                            </span>
                        </a>
                    ";
        
        $__internal_dd3b0bca00c913ffd7d527ef37494556aa75969ef6cf464da193f511f363a363->leave($__internal_dd3b0bca00c913ffd7d527ef37494556aa75969ef6cf464da193f511f363a363_prof);

    }

    // line 101
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_ebd2b27323f3fce0462be094fbfaa77b459a9961d839116a08c5cf0203297488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd2b27323f3fce0462be094fbfaa77b459a9961d839116a08c5cf0203297488->enter($__internal_ebd2b27323f3fce0462be094fbfaa77b459a9961d839116a08c5cf0203297488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

        // line 102
        echo "                                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:messages"));
        echo "
                                        ";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:notifications"));
        echo "
                                        ";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:tasks"));
        echo "
                                        ";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Navbar:user"));
        echo "
                                    ";
        
        $__internal_ebd2b27323f3fce0462be094fbfaa77b459a9961d839116a08c5cf0203297488->leave($__internal_ebd2b27323f3fce0462be094fbfaa77b459a9961d839116a08c5cf0203297488_prof);

    }

    // line 118
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_1b6ca3058253ab3803242e310c73d317c8a347776fc23405d7fe2a71c8a60c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6ca3058253ab3803242e310c73d317c8a347776fc23405d7fe2a71c8a60c88->enter($__internal_1b6ca3058253ab3803242e310c73d317c8a347776fc23405d7fe2a71c8a60c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 119
        echo "                        ";
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 120
            echo "                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Sidebar:userPanel"));
            echo "
                            ";
            // line 121
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:searchForm"));
            echo "
                        ";
        }
        // line 123
        echo "                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:menu", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
        echo "
                    ";
        
        $__internal_1b6ca3058253ab3803242e310c73d317c8a347776fc23405d7fe2a71c8a60c88->leave($__internal_1b6ca3058253ab3803242e310c73d317c8a347776fc23405d7fe2a71c8a60c88_prof);

    }

    // line 134
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_52f9187bf0168f205acdfd0ed0313b2acf9ce5392416c746024c80ff45d7bcb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f9187bf0168f205acdfd0ed0313b2acf9ce5392416c746024c80ff45d7bcb4->enter($__internal_52f9187bf0168f205acdfd0ed0313b2acf9ce5392416c746024c80ff45d7bcb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Page Title";
        
        $__internal_52f9187bf0168f205acdfd0ed0313b2acf9ce5392416c746024c80ff45d7bcb4->leave($__internal_52f9187bf0168f205acdfd0ed0313b2acf9ce5392416c746024c80ff45d7bcb4_prof);

    }

    // line 135
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_90df0835cc9c3dee901313e9a5b610aac42cca21734f154d89184ba64741cee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90df0835cc9c3dee901313e9a5b610aac42cca21734f154d89184ba64741cee4->enter($__internal_90df0835cc9c3dee901313e9a5b610aac42cca21734f154d89184ba64741cee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        
        $__internal_90df0835cc9c3dee901313e9a5b610aac42cca21734f154d89184ba64741cee4->leave($__internal_90df0835cc9c3dee901313e9a5b610aac42cca21734f154d89184ba64741cee4_prof);

    }

    // line 137
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_5acf504dec26cfa7b4c318ecd3f48d7160543d20025f8738bd4100854b34598f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5acf504dec26cfa7b4c318ecd3f48d7160543d20025f8738bd4100854b34598f->enter($__internal_5acf504dec26cfa7b4c318ecd3f48d7160543d20025f8738bd4100854b34598f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 138
        echo "                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
                    ";
        
        $__internal_5acf504dec26cfa7b4c318ecd3f48d7160543d20025f8738bd4100854b34598f->leave($__internal_5acf504dec26cfa7b4c318ecd3f48d7160543d20025f8738bd4100854b34598f_prof);

    }

    // line 229
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c2744a7e8370892d845ce4a2ce8458da473b96ac69acf0c2b3d1cb8a810045ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2744a7e8370892d845ce4a2ce8458da473b96ac69acf0c2b3d1cb8a810045ad->enter($__internal_c2744a7e8370892d845ce4a2ce8458da473b96ac69acf0c2b3d1cb8a810045ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 230
        echo "
                        ";
        
        $__internal_c2744a7e8370892d845ce4a2ce8458da473b96ac69acf0c2b3d1cb8a810045ad->leave($__internal_c2744a7e8370892d845ce4a2ce8458da473b96ac69acf0c2b3d1cb8a810045ad_prof);

    }

    // line 237
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_c4e59fa9e0ab4f3b62facf47892554ed1390e4a05fbd9090d8c7a2bb478a4bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e59fa9e0ab4f3b62facf47892554ed1390e4a05fbd9090d8c7a2bb478a4bba->enter($__internal_c4e59fa9e0ab4f3b62facf47892554ed1390e4a05fbd9090d8c7a2bb478a4bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 238
        echo "                    <footer class=\"main-footer\">
                        <strong>Copyright &copy; ";
        // line 239
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"http://";
        echo twig_escape_filter($this->env, (isset($context["footer_url"]) ? $context["footer_url"] : $this->getContext($context, "footer_url")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        echo "
                                </footer>
                            ";
        
        $__internal_c4e59fa9e0ab4f3b62facf47892554ed1390e4a05fbd9090d8c7a2bb478a4bba->leave($__internal_c4e59fa9e0ab4f3b62facf47892554ed1390e4a05fbd9090d8c7a2bb478a4bba_prof);

    }

    // line 247
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9fa7e1e9ef7a9fcea6020c936ed47a872dea48d343d8c03bdb10740fd068f34c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa7e1e9ef7a9fcea6020c936ed47a872dea48d343d8c03bdb10740fd068f34c->enter($__internal_9fa7e1e9ef7a9fcea6020c936ed47a872dea48d343d8c03bdb10740fd068f34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 248
        echo "
                                <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
                                <script>
                                    \$(document).ready(function () {
                                        if (\"";
        // line 252
        echo twig_escape_filter($this->env, (isset($context["msj"]) ? $context["msj"] : $this->getContext($context, "msj")), "html", null, true);
        echo "\" != \"\") {
                                            var suc = \"";
        // line 253
        echo twig_escape_filter($this->env, (isset($context["msj"]) ? $context["msj"] : $this->getContext($context, "msj")), "html", null, true);
        echo "\";
                                            var texto = '";
        // line 254
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
                            <!-- <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/delete-registros.js"), "html", null, true);
        echo "\"></script>-->
                                <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>

                                <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>

                            ";
        
        $__internal_9fa7e1e9ef7a9fcea6020c936ed47a872dea48d343d8c03bdb10740fd068f34c->leave($__internal_9fa7e1e9ef7a9fcea6020c936ed47a872dea48d343d8c03bdb10740fd068f34c_prof);

    }

    // line 307
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_e90dbe8eaf8ef958192a439e9b8c9f8a03d6c5033c9f4d756222e8f6fbe72159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90dbe8eaf8ef958192a439e9b8c9f8a03d6c5033c9f4d756222e8f6fbe72159->enter($__internal_e90dbe8eaf8ef958192a439e9b8c9f8a03d6c5033c9f4d756222e8f6fbe72159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        // line 308
        echo "                            ";
        
        $__internal_e90dbe8eaf8ef958192a439e9b8c9f8a03d6c5033c9f4d756222e8f6fbe72159->leave($__internal_e90dbe8eaf8ef958192a439e9b8c9f8a03d6c5033c9f4d756222e8f6fbe72159_prof);

    }

    // line 310
    public function block_script_page($context, array $blocks = array())
    {
        $__internal_b02e169912b58bbdb333efe22aa73c06b9f364d9cad3fc6f6e8e101a374f0f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02e169912b58bbdb333efe22aa73c06b9f364d9cad3fc6f6e8e101a374f0f63->enter($__internal_b02e169912b58bbdb333efe22aa73c06b9f364d9cad3fc6f6e8e101a374f0f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_page"));

        // line 311
        echo "
                            ";
        
        $__internal_b02e169912b58bbdb333efe22aa73c06b9f364d9cad3fc6f6e8e101a374f0f63->leave($__internal_b02e169912b58bbdb333efe22aa73c06b9f364d9cad3fc6f6e8e101a374f0f63_prof);

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
        return array (  672 => 311,  666 => 310,  659 => 308,  653 => 307,  643 => 302,  638 => 300,  634 => 299,  586 => 254,  582 => 253,  578 => 252,  572 => 249,  569 => 248,  563 => 247,  549 => 239,  546 => 238,  540 => 237,  532 => 230,  526 => 229,  516 => 138,  510 => 137,  499 => 135,  487 => 134,  477 => 123,  472 => 121,  467 => 120,  464 => 119,  458 => 118,  449 => 105,  445 => 104,  441 => 103,  436 => 102,  430 => 101,  417 => 88,  411 => 85,  403 => 81,  397 => 80,  388 => 110,  383 => 107,  381 => 101,  377 => 99,  375 => 98,  367 => 92,  365 => 80,  362 => 79,  356 => 78,  343 => 47,  337 => 46,  311 => 23,  307 => 22,  303 => 21,  299 => 20,  296 => 19,  290 => 18,  278 => 15,  268 => 313,  266 => 310,  263 => 309,  260 => 307,  257 => 305,  254 => 247,  248 => 242,  246 => 237,  239 => 232,  237 => 229,  232 => 226,  226 => 222,  223 => 221,  221 => 214,  218 => 213,  215 => 212,  213 => 211,  210 => 210,  207 => 209,  205 => 202,  203 => 201,  200 => 200,  197 => 199,  195 => 191,  192 => 190,  189 => 189,  187 => 181,  184 => 180,  181 => 179,  179 => 178,  176 => 177,  172 => 175,  169 => 166,  166 => 165,  163 => 164,  160 => 155,  157 => 154,  154 => 153,  152 => 152,  147 => 149,  145 => 147,  144 => 146,  143 => 145,  142 => 144,  139 => 143,  136 => 142,  134 => 141,  131 => 140,  129 => 137,  123 => 135,  121 => 134,  110 => 125,  108 => 118,  101 => 113,  99 => 78,  93 => 75,  70 => 54,  67 => 46,  62 => 42,  59 => 18,  54 => 15,  39 => 2,  37 => 1,);
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
            <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/admin-lte-all.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{absolute_url(asset('css/fonts/font-awesome.css'))}}\">
            <link rel=\"stylesheet\" href=\"{{absolute_url(asset('css/sweetalert.css'))}}\">
            <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

            <style>
                .skin-blue  .main-header .navbar  {
                    /* background-color: #3c8dbc; */
                    background-image: -webkit-gradient(linear, left top, left bottom, from(#04519b), color-stop(60%, #033C73), to(#02325f));
                    background-image: linear-gradient(#04519b, #033C73 60%, #02325f);
                    background-repeat: no-repeat;
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
                                <img src=\"{{ asset('bundles/app/images/logo-mini.jpg') }}\" alt=\"\">
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
                            {{ render(controller('AvanzuAdminThemeBundle:Sidebar:searchForm')) }}
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
                                {% set msj=1 %}
                                {% set txt=(app.session.flashBag.get('success')|join(', ')) %}

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
                                {% set msj=2 %}
                                {% set txt=(app.session.flashBag.get('error')|join(', ')) %}
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
                            <!-- <script src=\"{{ asset('js/delete-registros.js') }}\"></script>-->
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
", "layout/base-layout.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\layout\\base-layout.html.twig");
    }
}
