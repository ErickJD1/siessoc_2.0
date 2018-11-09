<?php

/* :layout:base-layout.html.twig */
class __TwigTemplate_9b057c29bef228b3000ddd0c584a9d195e2658b98afbb41f40e41a4fb18a4175 extends Twig_Template
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
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_baf713b464d24d39ce52793693ad14b94fdd41d7c16c6c4580ce66311857b5ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf713b464d24d39ce52793693ad14b94fdd41d7c16c6c4580ce66311857b5ed->enter($__internal_baf713b464d24d39ce52793693ad14b94fdd41d7c16c6c4580ce66311857b5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":layout:base-layout.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", ":layout:base-layout.html.twig", 1);
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
        // line 25
        echo "


        ";
        // line 29
        echo "        ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 37
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
        // line 60
        echo twig_escape_filter($this->env, ((array_key_exists("admin_skin", $context)) ? (_twig_default_filter((isset($context["admin_skin"]) ? $context["admin_skin"] : $this->getContext($context, "admin_skin")), "skin-blue")) : ("skin-blue")), "html", null, true);
        echo " fixed sidebar-mini\">

        <div class=\"wrapper\">
            ";
        // line 63
        $this->displayBlock('avanzu_admin_header', $context, $blocks);
        // line 98
        echo "
            <!-- Left side column. contains the logo and sidebar -->
            <aside class=\"main-sidebar sidebar-offcanvas\">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class=\"sidebar\">
                    ";
        // line 103
        $this->displayBlock('avanzu_sidebar', $context, $blocks);
        // line 110
        echo "                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <section class=\"content-header\">
                    <h1>
                        ";
        // line 119
        $this->displayBlock('page_title', $context, $blocks);
        // line 120
        echo "                        <small>";
        $this->displayBlock('page_subtitle', $context, $blocks);
        echo "</small>
                    </h1>
                    ";
        // line 122
        $this->displayBlock('avanzu_breadcrumb', $context, $blocks);
        // line 125
        echo "                </section>

                <!-- Alert Boxes -->
                ";
        // line 128
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method") || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 129
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 130
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method"))) {
            // line 132
            echo "                <section class=\"flash-messages content-header\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            ";
            // line 135
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
                // line 136
                echo "                                <div class=\"alert alert-success alert-dismissible\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                    <h4><i class=\"icon fa fa-check\"></i> Success!</h4>
                                    ";
                // line 139
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 140
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 142
                echo "                                </div>
                            ";
            }
            // line 144
            echo "
                            ";
            // line 145
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
                // line 146
                echo "                                <div class=\"alert alert-danger alert-dismissible\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                    <h4><i class=\"icon fa fa-ban\"></i> Error!</h4>
                                    ";
                // line 149
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 150
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 152
                echo "                                </div>
                            ";
            }
            // line 154
            echo "
                            ";
            // line 155
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method")) {
                // line 156
                echo "                                <div class=\"alert alert-info alert-dismissible\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                    <h4><i class=\"icon fa fa-info\"></i> Notice!</h4>
                                    ";
                // line 159
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 160
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 162
                echo "                                </div>
                            ";
            }
            // line 164
            echo "
                            ";
            // line 165
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "warning"), "method")) {
                // line 166
                echo "                                <div class=\"alert alert-info alert-dismissible\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                    <h4><i class=\"icon fa fa-warning\"></i> Warning!</h4>
                                    ";
                // line 169
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 170
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                echo "                                </div>
                            ";
            }
            // line 174
            echo "                        </div>
                    </div>
                </section>
                ";
        }
        // line 178
        echo "
                    <!-- Main content -->
                    <section class=\"content\">
                    ";
        // line 181
        $this->displayBlock('page_content', $context, $blocks);
        // line 182
        echo "                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            ";
        // line 187
        $this->displayBlock('avanzu_admin_footer', $context, $blocks);
        // line 192
        echo "
                        </div>
                        <!-- ./wrapper -->

                        ";
        // line 197
        echo "                        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 216
        echo "
                        ";
        // line 218
        echo "                        ";
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 220
        echo "
                        </body>
                        </html>
";
        
        $__internal_baf713b464d24d39ce52793693ad14b94fdd41d7c16c6c4580ce66311857b5ed->leave($__internal_baf713b464d24d39ce52793693ad14b94fdd41d7c16c6c4580ce66311857b5ed_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1a803f51ae5c69fd476da4b03fb5e14360492067693b7dce1405b5f9557633a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a803f51ae5c69fd476da4b03fb5e14360492067693b7dce1405b5f9557633a->enter($__internal_b1a803f51ae5c69fd476da4b03fb5e14360492067693b7dce1405b5f9557633a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_b1a803f51ae5c69fd476da4b03fb5e14360492067693b7dce1405b5f9557633a->leave($__internal_b1a803f51ae5c69fd476da4b03fb5e14360492067693b7dce1405b5f9557633a_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1684995484bb6f288e5e671c09281f38e0b3f742d911bbbeb57d3cd24eb1ec99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1684995484bb6f288e5e671c09281f38e0b3f742d911bbbeb57d3cd24eb1ec99->enter($__internal_1684995484bb6f288e5e671c09281f38e0b3f742d911bbbeb57d3cd24eb1ec99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        ";
        
        $__internal_1684995484bb6f288e5e671c09281f38e0b3f742d911bbbeb57d3cd24eb1ec99->leave($__internal_1684995484bb6f288e5e671c09281f38e0b3f742d911bbbeb57d3cd24eb1ec99_prof);

    }

    // line 29
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_4b0d4b534fbf96a4935167b49807a1577a1c6026ac9b390333c7f4fbb203f95f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b0d4b534fbf96a4935167b49807a1577a1c6026ac9b390333c7f4fbb203f95f->enter($__internal_4b0d4b534fbf96a4935167b49807a1577a1c6026ac9b390333c7f4fbb203f95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 30
        echo "            <!--[if lt IE 9]>

            <![endif]-->



        ";
        
        $__internal_4b0d4b534fbf96a4935167b49807a1577a1c6026ac9b390333c7f4fbb203f95f->leave($__internal_4b0d4b534fbf96a4935167b49807a1577a1c6026ac9b390333c7f4fbb203f95f_prof);

    }

    // line 63
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_b516f657ad4c60083001e67f84b2a69c7b0bee09c251469cf5429a8c15a1b8b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b516f657ad4c60083001e67f84b2a69c7b0bee09c251469cf5429a8c15a1b8b0->enter($__internal_b516f657ad4c60083001e67f84b2a69c7b0bee09c251469cf5429a8c15a1b8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        // line 64
        echo "                <header class=\"main-header\">
                    ";
        // line 65
        $this->displayBlock('avanzu_logo', $context, $blocks);
        // line 77
        echo "                    <!-- Header Navbar: style can be found in header.less -->
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <!-- Sidebar toggle button-->
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>
                        ";
        // line 83
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 84
            echo "                            <div class=\"navbar-custom-menu\">
                                <ul class=\"nav navbar-nav\">
                                    ";
            // line 86
            $this->displayBlock('avanzu_navbar', $context, $blocks);
            // line 92
            echo "                                </ul>
                            </div>
                        ";
        }
        // line 95
        echo "                    </nav>
                </header>
            ";
        
        $__internal_b516f657ad4c60083001e67f84b2a69c7b0bee09c251469cf5429a8c15a1b8b0->leave($__internal_b516f657ad4c60083001e67f84b2a69c7b0bee09c251469cf5429a8c15a1b8b0_prof);

    }

    // line 65
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_9f993b9c3afa55e8e8a2f8c81c9bb7b3ea13f1d4678606082079881cc351f18d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f993b9c3afa55e8e8a2f8c81c9bb7b3ea13f1d4678606082079881cc351f18d->enter($__internal_9f993b9c3afa55e8e8a2f8c81c9bb7b3ea13f1d4678606082079881cc351f18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 66
        echo "                        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"logo\">
                            <!-- Add the class icon to your logo image or logo icon to add the margining -->
                            <span class=\"logo-mini\">
                                <!-- mini logo for sidebar mini 50x50 pixels -->
                                <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo-mini.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </span>
                            <span class=\"logo-lg\">
                                ";
        // line 73
        $this->displayBlock("title", $context, $blocks);
        echo "
                            </span>
                        </a>
                    ";
        
        $__internal_9f993b9c3afa55e8e8a2f8c81c9bb7b3ea13f1d4678606082079881cc351f18d->leave($__internal_9f993b9c3afa55e8e8a2f8c81c9bb7b3ea13f1d4678606082079881cc351f18d_prof);

    }

    // line 86
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_11188a40b4425cc4bc0978793cae60c356e88b1974b171ab9494664f2381d627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11188a40b4425cc4bc0978793cae60c356e88b1974b171ab9494664f2381d627->enter($__internal_11188a40b4425cc4bc0978793cae60c356e88b1974b171ab9494664f2381d627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

        // line 87
        echo "                                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:messages"));
        echo "
                                        ";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:notifications"));
        echo "
                                        ";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:tasks"));
        echo "
                                        ";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Navbar:user"));
        echo "
                                    ";
        
        $__internal_11188a40b4425cc4bc0978793cae60c356e88b1974b171ab9494664f2381d627->leave($__internal_11188a40b4425cc4bc0978793cae60c356e88b1974b171ab9494664f2381d627_prof);

    }

    // line 103
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_235b408c61bda82d36ef6d9817cb11b358d8522b4911327267dd3b419b712cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_235b408c61bda82d36ef6d9817cb11b358d8522b4911327267dd3b419b712cd5->enter($__internal_235b408c61bda82d36ef6d9817cb11b358d8522b4911327267dd3b419b712cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 104
        echo "                        ";
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 105
            echo "                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Sidebar:userPanel"));
            echo "
                            ";
            // line 106
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:searchForm"));
            echo "
                        ";
        }
        // line 108
        echo "                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:menu", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
        echo "
                    ";
        
        $__internal_235b408c61bda82d36ef6d9817cb11b358d8522b4911327267dd3b419b712cd5->leave($__internal_235b408c61bda82d36ef6d9817cb11b358d8522b4911327267dd3b419b712cd5_prof);

    }

    // line 119
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_7393d492002ea2461f4a376005741b85c72282ac044a6302ade2c1d36eaf030d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7393d492002ea2461f4a376005741b85c72282ac044a6302ade2c1d36eaf030d->enter($__internal_7393d492002ea2461f4a376005741b85c72282ac044a6302ade2c1d36eaf030d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Page Title";
        
        $__internal_7393d492002ea2461f4a376005741b85c72282ac044a6302ade2c1d36eaf030d->leave($__internal_7393d492002ea2461f4a376005741b85c72282ac044a6302ade2c1d36eaf030d_prof);

    }

    // line 120
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_d19841fa96c39bf02ebf07e547012754f6848c341fd85706372b30ef05b67af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19841fa96c39bf02ebf07e547012754f6848c341fd85706372b30ef05b67af0->enter($__internal_d19841fa96c39bf02ebf07e547012754f6848c341fd85706372b30ef05b67af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        
        $__internal_d19841fa96c39bf02ebf07e547012754f6848c341fd85706372b30ef05b67af0->leave($__internal_d19841fa96c39bf02ebf07e547012754f6848c341fd85706372b30ef05b67af0_prof);

    }

    // line 122
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_9932d468245b4bd8dacfa0919a8e60f76530c7b4f61e48ecf0c75e848d8e537e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9932d468245b4bd8dacfa0919a8e60f76530c7b4f61e48ecf0c75e848d8e537e->enter($__internal_9932d468245b4bd8dacfa0919a8e60f76530c7b4f61e48ecf0c75e848d8e537e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 123
        echo "                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
                    ";
        
        $__internal_9932d468245b4bd8dacfa0919a8e60f76530c7b4f61e48ecf0c75e848d8e537e->leave($__internal_9932d468245b4bd8dacfa0919a8e60f76530c7b4f61e48ecf0c75e848d8e537e_prof);

    }

    // line 181
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_3227ee68c49c876baa23b3b7cd06bf04f1cd70b9cc98f9928a7b3e0a578a7830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3227ee68c49c876baa23b3b7cd06bf04f1cd70b9cc98f9928a7b3e0a578a7830->enter($__internal_3227ee68c49c876baa23b3b7cd06bf04f1cd70b9cc98f9928a7b3e0a578a7830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_3227ee68c49c876baa23b3b7cd06bf04f1cd70b9cc98f9928a7b3e0a578a7830->leave($__internal_3227ee68c49c876baa23b3b7cd06bf04f1cd70b9cc98f9928a7b3e0a578a7830_prof);

    }

    // line 187
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_0e4bfed5bff092a660077e022b5256a9edf4ed0952d99adfc58b2a2e540ddf5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e4bfed5bff092a660077e022b5256a9edf4ed0952d99adfc58b2a2e540ddf5e->enter($__internal_0e4bfed5bff092a660077e022b5256a9edf4ed0952d99adfc58b2a2e540ddf5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 188
        echo "                <footer class=\"main-footer\">
                    <strong>Copyright &copy; ";
        // line 189
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"http://";
        echo twig_escape_filter($this->env, (isset($context["footer_url"]) ? $context["footer_url"] : $this->getContext($context, "footer_url")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        echo "
                            </footer>
                        ";
        
        $__internal_0e4bfed5bff092a660077e022b5256a9edf4ed0952d99adfc58b2a2e540ddf5e->leave($__internal_0e4bfed5bff092a660077e022b5256a9edf4ed0952d99adfc58b2a2e540ddf5e_prof);

    }

    // line 197
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_743851f248fb8371bbf93183d0008448305ef597ed5334fbf11a91f896c0e5bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743851f248fb8371bbf93183d0008448305ef597ed5334fbf11a91f896c0e5bf->enter($__internal_743851f248fb8371bbf93183d0008448305ef597ed5334fbf11a91f896c0e5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 198
        echo "
                            <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
                            <script>
                                \$(document).ready(function () {
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
                        ";
        
        $__internal_743851f248fb8371bbf93183d0008448305ef597ed5334fbf11a91f896c0e5bf->leave($__internal_743851f248fb8371bbf93183d0008448305ef597ed5334fbf11a91f896c0e5bf_prof);

    }

    // line 218
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_6dba32648d996c7a151972add7f7d8aff67ac58733741a96f14950dd3e31d38f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dba32648d996c7a151972add7f7d8aff67ac58733741a96f14950dd3e31d38f->enter($__internal_6dba32648d996c7a151972add7f7d8aff67ac58733741a96f14950dd3e31d38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        // line 219
        echo "                        ";
        
        $__internal_6dba32648d996c7a151972add7f7d8aff67ac58733741a96f14950dd3e31d38f->leave($__internal_6dba32648d996c7a151972add7f7d8aff67ac58733741a96f14950dd3e31d38f_prof);

    }

    public function getTemplateName()
    {
        return ":layout:base-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  597 => 219,  591 => 218,  567 => 199,  564 => 198,  558 => 197,  544 => 189,  541 => 188,  535 => 187,  524 => 181,  514 => 123,  508 => 122,  497 => 120,  485 => 119,  475 => 108,  470 => 106,  465 => 105,  462 => 104,  456 => 103,  447 => 90,  443 => 89,  439 => 88,  434 => 87,  428 => 86,  417 => 73,  411 => 70,  403 => 66,  397 => 65,  388 => 95,  383 => 92,  381 => 86,  377 => 84,  375 => 83,  367 => 77,  365 => 65,  362 => 64,  356 => 63,  343 => 30,  337 => 29,  327 => 22,  323 => 21,  319 => 20,  316 => 19,  310 => 18,  298 => 15,  288 => 220,  285 => 218,  282 => 216,  279 => 197,  273 => 192,  271 => 187,  264 => 182,  262 => 181,  257 => 178,  251 => 174,  247 => 172,  238 => 170,  234 => 169,  229 => 166,  227 => 165,  224 => 164,  220 => 162,  211 => 160,  207 => 159,  202 => 156,  200 => 155,  197 => 154,  193 => 152,  184 => 150,  180 => 149,  175 => 146,  173 => 145,  170 => 144,  166 => 142,  157 => 140,  153 => 139,  148 => 136,  146 => 135,  141 => 132,  139 => 130,  138 => 129,  137 => 128,  132 => 125,  130 => 122,  124 => 120,  122 => 119,  111 => 110,  109 => 103,  102 => 98,  100 => 63,  94 => 60,  69 => 37,  66 => 29,  61 => 25,  58 => 18,  53 => 15,  38 => 2,  36 => 1,);
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

                <!-- Alert Boxes -->
                {% if app.session.flashBag.has('success')
        or app.session.flashBag.has('error')
        or app.session.flashBag.has('notice')
                %}
                <section class=\"flash-messages content-header\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            {% if app.session.flashBag.has('success') %}
                                <div class=\"alert alert-success alert-dismissible\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                    <h4><i class=\"icon fa fa-check\"></i> Success!</h4>
                                    {% for msg in app.session.flashBag.get('success') %}
                                        {{ msg }}
                                    {% endfor %}
                                </div>
                            {% endif %}

                            {% if app.session.flashBag.has('error') %}
                                <div class=\"alert alert-danger alert-dismissible\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                    <h4><i class=\"icon fa fa-ban\"></i> Error!</h4>
                                    {% for msg in app.session.flashBag.get('error') %}
                                        {{ msg }}
                                    {% endfor %}
                                </div>
                            {% endif %}

                            {% if app.session.flashBag.has('notice') %}
                                <div class=\"alert alert-info alert-dismissible\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                    <h4><i class=\"icon fa fa-info\"></i> Notice!</h4>
                                    {% for msg in app.session.flashBag.get('notice') %}
                                        {{ msg }}
                                    {% endfor %}
                                </div>
                            {% endif %}

                            {% if app.session.flashBag.has('warning') %}
                                <div class=\"alert alert-info alert-dismissible\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                    <h4><i class=\"icon fa fa-warning\"></i> Warning!</h4>
                                    {% for msg in app.session.flashBag.get('warning') %}
                                        {{ msg }}
                                    {% endfor %}
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </section>
                {% endif %}

                    <!-- Main content -->
                    <section class=\"content\">
                    {% block page_content %}{% endblock %}
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
                        {% endblock %}

                        {# ----------------------------------------------------------------------------------------------- JAVASCRIPTS_INLINE #}
                        {% block javascripts_inline %}
                        {% endblock %}

                        </body>
                        </html>
", ":layout:base-layout.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/layout/base-layout.html.twig");
    }
}
