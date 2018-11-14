<?php

/* layout/base-layout.html.twig */
class __TwigTemplate_41e9e2246353d96ca2f7a21396706c274cc30e525cc91e445fe31ccb83f2e6fa extends Twig_Template
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
        $__internal_c803c8499aacc64b33ce192c98b90fe974594f6af02961baaf06d3846054b384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c803c8499aacc64b33ce192c98b90fe974594f6af02961baaf06d3846054b384->enter($__internal_c803c8499aacc64b33ce192c98b90fe974594f6af02961baaf06d3846054b384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/base-layout.html.twig"));

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
        // line 26
        echo "


        ";
        // line 30
        echo "        ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 38
        echo "
    </head>
    <!--
    BODY TAG OPTIONS:
    =================
    Apply one or more of the following classes to get the
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
        // line 61
        echo twig_escape_filter($this->env, ((array_key_exists("admin_skin", $context)) ? (_twig_default_filter((isset($context["admin_skin"]) ? $context["admin_skin"] : $this->getContext($context, "admin_skin")), "skin-blue")) : ("skin-blue")), "html", null, true);
        echo " fixed sidebar-mini\">

        <div class=\"wrapper\">
            ";
        // line 64
        $this->displayBlock('avanzu_admin_header', $context, $blocks);
        // line 99
        echo "
            <!-- Left side column. contains the logo and sidebar -->
            <aside class=\"main-sidebar sidebar-offcanvas\">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class=\"sidebar\">
                    ";
        // line 104
        $this->displayBlock('avanzu_sidebar', $context, $blocks);
        // line 111
        echo "                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <section class=\"content-header\">
                    <h1>
                        ";
        // line 120
        $this->displayBlock('page_title', $context, $blocks);
        // line 121
        echo "                        <small>";
        $this->displayBlock('page_subtitle', $context, $blocks);
        echo "</small>
                    </h1>
                    ";
        // line 123
        $this->displayBlock('avanzu_breadcrumb', $context, $blocks);
        // line 126
        echo "                </section>
    ";
        // line 127
        $context["msj"] = "";
        // line 128
        echo "     ";
        $context["txt"] = "";
        // line 129
        echo "                <!-- Alert Boxes -->
                ";
        // line 130
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method") || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 131
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 132
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method"))) {
            // line 134
            echo "                <section class=\"flash-messages content-header\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            ";
            // line 137
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
                // line 138
                echo "                             ";
                $context["msj"] = 1;
                // line 139
                echo "                              ";
                $context["txt"] = twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"), ", ");
                // line 140
                echo "                             
                              ";
                // line 149
                echo "
                            ";
            }
            // line 151
            echo "
                            ";
            // line 152
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
                // line 153
                echo "                            ";
                $context["msj"] = 2;
                // line 154
                echo "                            ";
                $context["txt"] = twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"), ", ");
                // line 155
                echo "                              ";
                // line 163
                echo "                            ";
            }
            // line 164
            echo "
                            ";
            // line 165
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method")) {
                // line 166
                echo "                               ";
                // line 173
                echo "                            ";
            }
            // line 174
            echo "
                            ";
            // line 175
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "warning"), "method")) {
                // line 176
                echo "                                ";
                // line 183
                echo "                            ";
            }
            // line 184
            echo "                        </div>
                    </div>
                </section>
                ";
        }
        // line 188
        echo "
                    <!-- Main content -->
                    <section class=\"content\">
                    ";
        // line 191
        $this->displayBlock('page_content', $context, $blocks);
        // line 194
        echo "                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            ";
        // line 199
        $this->displayBlock('avanzu_admin_footer', $context, $blocks);
        // line 204
        echo "
                        </div>
                        <!-- ./wrapper -->

                        ";
        // line 209
        echo "                        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 244
        echo "
                        ";
        // line 246
        echo "                        ";
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 248
        echo "
                        ";
        // line 249
        $this->displayBlock('script_page', $context, $blocks);
        // line 252
        echo "
                        </body>
                        </html>
";
        
        $__internal_c803c8499aacc64b33ce192c98b90fe974594f6af02961baaf06d3846054b384->leave($__internal_c803c8499aacc64b33ce192c98b90fe974594f6af02961baaf06d3846054b384_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_a968bbda7562f52e45676c94412355b9082d8f4d9d36a7335cec528bbb70343c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a968bbda7562f52e45676c94412355b9082d8f4d9d36a7335cec528bbb70343c->enter($__internal_a968bbda7562f52e45676c94412355b9082d8f4d9d36a7335cec528bbb70343c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_a968bbda7562f52e45676c94412355b9082d8f4d9d36a7335cec528bbb70343c->leave($__internal_a968bbda7562f52e45676c94412355b9082d8f4d9d36a7335cec528bbb70343c_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e0ac352494c6e7b4887374cae4cb01f3b8ac990e7e9b49808cba42436cc2a66c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ac352494c6e7b4887374cae4cb01f3b8ac990e7e9b49808cba42436cc2a66c->enter($__internal_e0ac352494c6e7b4887374cae4cb01f3b8ac990e7e9b49808cba42436cc2a66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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

        ";
        
        $__internal_e0ac352494c6e7b4887374cae4cb01f3b8ac990e7e9b49808cba42436cc2a66c->leave($__internal_e0ac352494c6e7b4887374cae4cb01f3b8ac990e7e9b49808cba42436cc2a66c_prof);

    }

    // line 30
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_8c86e134ea04edce24d825877b4af21ef04d85d52b77e6a01aa1d777c354061b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c86e134ea04edce24d825877b4af21ef04d85d52b77e6a01aa1d777c354061b->enter($__internal_8c86e134ea04edce24d825877b4af21ef04d85d52b77e6a01aa1d777c354061b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 31
        echo "            <!--[if lt IE 9]>

            <![endif]-->



        ";
        
        $__internal_8c86e134ea04edce24d825877b4af21ef04d85d52b77e6a01aa1d777c354061b->leave($__internal_8c86e134ea04edce24d825877b4af21ef04d85d52b77e6a01aa1d777c354061b_prof);

    }

    // line 64
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_5267e350753aa98f96a0d1cc5cd525d9c51871f86f3bfde3864e083bd66fcfa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5267e350753aa98f96a0d1cc5cd525d9c51871f86f3bfde3864e083bd66fcfa1->enter($__internal_5267e350753aa98f96a0d1cc5cd525d9c51871f86f3bfde3864e083bd66fcfa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        // line 65
        echo "                <header class=\"main-header\">
                    ";
        // line 66
        $this->displayBlock('avanzu_logo', $context, $blocks);
        // line 78
        echo "                    <!-- Header Navbar: style can be found in header.less -->
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <!-- Sidebar toggle button-->
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>
                        ";
        // line 84
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 85
            echo "                            <div class=\"navbar-custom-menu\">
                                <ul class=\"nav navbar-nav\">
                                    ";
            // line 87
            $this->displayBlock('avanzu_navbar', $context, $blocks);
            // line 93
            echo "                                </ul>
                            </div>
                        ";
        }
        // line 96
        echo "                    </nav>
                </header>
            ";
        
        $__internal_5267e350753aa98f96a0d1cc5cd525d9c51871f86f3bfde3864e083bd66fcfa1->leave($__internal_5267e350753aa98f96a0d1cc5cd525d9c51871f86f3bfde3864e083bd66fcfa1_prof);

    }

    // line 66
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_dffeca567df09344d39000d0a62be9fd0eb2fedfbbf758ee5c28874ade855e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dffeca567df09344d39000d0a62be9fd0eb2fedfbbf758ee5c28874ade855e09->enter($__internal_dffeca567df09344d39000d0a62be9fd0eb2fedfbbf758ee5c28874ade855e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 67
        echo "                        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"logo\">
                            <!-- Add the class icon to your logo image or logo icon to add the margining -->
                            <span class=\"logo-mini\">
                                <!-- mini logo for sidebar mini 50x50 pixels -->
                                <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo-mini.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </span>
                            <span class=\"logo-lg\">
                                ";
        // line 74
        $this->displayBlock("title", $context, $blocks);
        echo "
                            </span>
                        </a>
                    ";
        
        $__internal_dffeca567df09344d39000d0a62be9fd0eb2fedfbbf758ee5c28874ade855e09->leave($__internal_dffeca567df09344d39000d0a62be9fd0eb2fedfbbf758ee5c28874ade855e09_prof);

    }

    // line 87
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_e1fa012f6edf4bd5602dec62610f2a81b5c8152168190c5754ad34fa6f05624b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1fa012f6edf4bd5602dec62610f2a81b5c8152168190c5754ad34fa6f05624b->enter($__internal_e1fa012f6edf4bd5602dec62610f2a81b5c8152168190c5754ad34fa6f05624b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

        // line 88
        echo "                                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:messages"));
        echo "
                                        ";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:notifications"));
        echo "
                                        ";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:tasks"));
        echo "
                                        ";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Navbar:user"));
        echo "
                                    ";
        
        $__internal_e1fa012f6edf4bd5602dec62610f2a81b5c8152168190c5754ad34fa6f05624b->leave($__internal_e1fa012f6edf4bd5602dec62610f2a81b5c8152168190c5754ad34fa6f05624b_prof);

    }

    // line 104
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_a6e390a9d7dabbb710b5be77fec7666074e14452b26efe8064368611e54df33d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e390a9d7dabbb710b5be77fec7666074e14452b26efe8064368611e54df33d->enter($__internal_a6e390a9d7dabbb710b5be77fec7666074e14452b26efe8064368611e54df33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 105
        echo "                        ";
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 106
            echo "                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Sidebar:userPanel"));
            echo "
                            ";
            // line 107
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:searchForm"));
            echo "
                        ";
        }
        // line 109
        echo "                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:menu", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
        echo "
                        ";
        
        $__internal_a6e390a9d7dabbb710b5be77fec7666074e14452b26efe8064368611e54df33d->leave($__internal_a6e390a9d7dabbb710b5be77fec7666074e14452b26efe8064368611e54df33d_prof);

    }

    // line 120
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_879f21bbd35d95bcd57f801b733c62ce9a11336537e9330f50fba9c396befe05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_879f21bbd35d95bcd57f801b733c62ce9a11336537e9330f50fba9c396befe05->enter($__internal_879f21bbd35d95bcd57f801b733c62ce9a11336537e9330f50fba9c396befe05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Page Title";
        
        $__internal_879f21bbd35d95bcd57f801b733c62ce9a11336537e9330f50fba9c396befe05->leave($__internal_879f21bbd35d95bcd57f801b733c62ce9a11336537e9330f50fba9c396befe05_prof);

    }

    // line 121
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_cdfe9650e7b9ff844cc5305f15c55bd21b200180a4a6b3e9a1f7b7e202b539a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdfe9650e7b9ff844cc5305f15c55bd21b200180a4a6b3e9a1f7b7e202b539a5->enter($__internal_cdfe9650e7b9ff844cc5305f15c55bd21b200180a4a6b3e9a1f7b7e202b539a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        
        $__internal_cdfe9650e7b9ff844cc5305f15c55bd21b200180a4a6b3e9a1f7b7e202b539a5->leave($__internal_cdfe9650e7b9ff844cc5305f15c55bd21b200180a4a6b3e9a1f7b7e202b539a5_prof);

    }

    // line 123
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_5a0995593aa87c0c9424ce8d843a4017894a662010a857c0f745871005ef292e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a0995593aa87c0c9424ce8d843a4017894a662010a857c0f745871005ef292e->enter($__internal_5a0995593aa87c0c9424ce8d843a4017894a662010a857c0f745871005ef292e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 124
        echo "                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
                    ";
        
        $__internal_5a0995593aa87c0c9424ce8d843a4017894a662010a857c0f745871005ef292e->leave($__internal_5a0995593aa87c0c9424ce8d843a4017894a662010a857c0f745871005ef292e_prof);

    }

    // line 191
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_d13480e3846f4ccbdbadb7578d39b43c9eb9a62902d198c2a8751f676f598d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d13480e3846f4ccbdbadb7578d39b43c9eb9a62902d198c2a8751f676f598d7b->enter($__internal_d13480e3846f4ccbdbadb7578d39b43c9eb9a62902d198c2a8751f676f598d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 192
        echo "
                    ";
        
        $__internal_d13480e3846f4ccbdbadb7578d39b43c9eb9a62902d198c2a8751f676f598d7b->leave($__internal_d13480e3846f4ccbdbadb7578d39b43c9eb9a62902d198c2a8751f676f598d7b_prof);

    }

    // line 199
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_62904562903257b89344e397c4657abb609a32d84631188edd2fc3d6c150b50f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62904562903257b89344e397c4657abb609a32d84631188edd2fc3d6c150b50f->enter($__internal_62904562903257b89344e397c4657abb609a32d84631188edd2fc3d6c150b50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 200
        echo "                <footer class=\"main-footer\">
                    <strong>Copyright &copy; ";
        // line 201
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"http://";
        echo twig_escape_filter($this->env, (isset($context["footer_url"]) ? $context["footer_url"] : $this->getContext($context, "footer_url")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        echo "
                            </footer>
                        ";
        
        $__internal_62904562903257b89344e397c4657abb609a32d84631188edd2fc3d6c150b50f->leave($__internal_62904562903257b89344e397c4657abb609a32d84631188edd2fc3d6c150b50f_prof);

    }

    // line 209
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_09c8630a59fc51360d8e50b517f9072fe85308890e3d63995f04c49a81cfdd48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09c8630a59fc51360d8e50b517f9072fe85308890e3d63995f04c49a81cfdd48->enter($__internal_09c8630a59fc51360d8e50b517f9072fe85308890e3d63995f04c49a81cfdd48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 210
        echo "
                            <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
                            <script>
                                \$(document).ready(function () {
                                   if(\"";
        // line 214
        echo twig_escape_filter($this->env, (isset($context["msj"]) ? $context["msj"] : $this->getContext($context, "msj")), "html", null, true);
        echo "\" != \"\"){
                                      var suc=\"";
        // line 215
        echo twig_escape_filter($this->env, (isset($context["msj"]) ? $context["msj"] : $this->getContext($context, "msj")), "html", null, true);
        echo "\";
                                      var texto='";
        // line 216
        echo twig_escape_filter($this->env, (isset($context["txt"]) ? $context["txt"] : $this->getContext($context, "txt")), "html", null, true);
        echo "';
                                       if(suc===\"1\"){
                                       swal('EXITO',texto,'success');
                                       }else{

                                     if(suc===\"2\"){
                                           swal('Error',texto,'error');
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
                            </script>

                        <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>

                        ";
        
        $__internal_09c8630a59fc51360d8e50b517f9072fe85308890e3d63995f04c49a81cfdd48->leave($__internal_09c8630a59fc51360d8e50b517f9072fe85308890e3d63995f04c49a81cfdd48_prof);

    }

    // line 246
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_373746c9c4897f15722c06bd90848cf8399ef46d0b6ed969b243983340a90e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373746c9c4897f15722c06bd90848cf8399ef46d0b6ed969b243983340a90e2f->enter($__internal_373746c9c4897f15722c06bd90848cf8399ef46d0b6ed969b243983340a90e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        // line 247
        echo "                        ";
        
        $__internal_373746c9c4897f15722c06bd90848cf8399ef46d0b6ed969b243983340a90e2f->leave($__internal_373746c9c4897f15722c06bd90848cf8399ef46d0b6ed969b243983340a90e2f_prof);

    }

    // line 249
    public function block_script_page($context, array $blocks = array())
    {
        $__internal_5306497bfe702619021512dfe6def258f9f2e71501184b97478f07408e85069b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5306497bfe702619021512dfe6def258f9f2e71501184b97478f07408e85069b->enter($__internal_5306497bfe702619021512dfe6def258f9f2e71501184b97478f07408e85069b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_page"));

        // line 250
        echo "
                        ";
        
        $__internal_5306497bfe702619021512dfe6def258f9f2e71501184b97478f07408e85069b->leave($__internal_5306497bfe702619021512dfe6def258f9f2e71501184b97478f07408e85069b_prof);

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
        return array (  603 => 250,  597 => 249,  590 => 247,  584 => 246,  574 => 241,  546 => 216,  542 => 215,  538 => 214,  532 => 211,  529 => 210,  523 => 209,  509 => 201,  506 => 200,  500 => 199,  492 => 192,  486 => 191,  476 => 124,  470 => 123,  459 => 121,  447 => 120,  437 => 109,  432 => 107,  427 => 106,  424 => 105,  418 => 104,  409 => 91,  405 => 90,  401 => 89,  396 => 88,  390 => 87,  379 => 74,  373 => 71,  365 => 67,  359 => 66,  350 => 96,  345 => 93,  343 => 87,  339 => 85,  337 => 84,  329 => 78,  327 => 66,  324 => 65,  318 => 64,  305 => 31,  299 => 30,  289 => 23,  285 => 22,  281 => 21,  277 => 20,  274 => 19,  268 => 18,  256 => 15,  246 => 252,  244 => 249,  241 => 248,  238 => 246,  235 => 244,  232 => 209,  226 => 204,  224 => 199,  217 => 194,  215 => 191,  210 => 188,  204 => 184,  201 => 183,  199 => 176,  197 => 175,  194 => 174,  191 => 173,  189 => 166,  187 => 165,  184 => 164,  181 => 163,  179 => 155,  176 => 154,  173 => 153,  171 => 152,  168 => 151,  164 => 149,  161 => 140,  158 => 139,  155 => 138,  153 => 137,  148 => 134,  146 => 132,  145 => 131,  144 => 130,  141 => 129,  138 => 128,  136 => 127,  133 => 126,  131 => 123,  125 => 121,  123 => 120,  112 => 111,  110 => 104,  103 => 99,  101 => 64,  95 => 61,  70 => 38,  67 => 30,  62 => 26,  59 => 18,  54 => 15,  39 => 2,  37 => 1,);
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

        {% endblock %}



        {# --------------------------------------------------------------------------------------------- JAVASCRIPTS_HEAD #}
        {%  block javascripts_head %}
            <!--[if lt IE 9]>

            <![endif]-->



        {% endblock %}

    </head>
    <!--
    BODY TAG OPTIONS:
    =================
    Apply one or more of the following classes to get the
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
                                {{ block('title') }}
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
                                   if(\"{{msj}}\" != \"\"){
                                      var suc=\"{{msj}}\";
                                      var texto='{{txt}}';
                                       if(suc===\"1\"){
                                       swal('EXITO',texto,'success');
                                       }else{

                                     if(suc===\"2\"){
                                           swal('Error',texto,'error');
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
                            </script>

                        <script src=\"{{ asset('js/sweetalert.min.js') }}\"></script>

                        {% endblock %}

                        {# ----------------------------------------------------------------------------------------------- JAVASCRIPTS_INLINE #}
                        {% block javascripts_inline %}
                        {% endblock %}

                        {% block script_page %}

                        {% endblock %}

                        </body>
                        </html>
", "layout/base-layout.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\app\\Resources\\views\\layout\\base-layout.html.twig");
    }
}
