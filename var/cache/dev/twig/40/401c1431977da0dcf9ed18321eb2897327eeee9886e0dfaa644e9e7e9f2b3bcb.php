<?php

/* layout/base-layout.html.twig */
class __TwigTemplate_73efb3a21f22f431122cf34b7ef0a5fc4dbc096f0dfa64de58f7306e3fd0770d extends Twig_Template
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
        $__internal_2e55a9328e605c8d600e59ec8925d6000e49fb02089c53542c594a9ad344354f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e55a9328e605c8d600e59ec8925d6000e49fb02089c53542c594a9ad344354f->enter($__internal_2e55a9328e605c8d600e59ec8925d6000e49fb02089c53542c594a9ad344354f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/base-layout.html.twig"));

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
        
        $__internal_2e55a9328e605c8d600e59ec8925d6000e49fb02089c53542c594a9ad344354f->leave($__internal_2e55a9328e605c8d600e59ec8925d6000e49fb02089c53542c594a9ad344354f_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cc69118b61d8f8561ca7832df53a38880cbb645a02ebf7a2567d53fb55947f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc69118b61d8f8561ca7832df53a38880cbb645a02ebf7a2567d53fb55947f9->enter($__internal_9cc69118b61d8f8561ca7832df53a38880cbb645a02ebf7a2567d53fb55947f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_9cc69118b61d8f8561ca7832df53a38880cbb645a02ebf7a2567d53fb55947f9->leave($__internal_9cc69118b61d8f8561ca7832df53a38880cbb645a02ebf7a2567d53fb55947f9_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_20ff7c2d4048f83331a9a01c0c173342d39dfc071948e53cf519ed9d4729be35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ff7c2d4048f83331a9a01c0c173342d39dfc071948e53cf519ed9d4729be35->enter($__internal_20ff7c2d4048f83331a9a01c0c173342d39dfc071948e53cf519ed9d4729be35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_20ff7c2d4048f83331a9a01c0c173342d39dfc071948e53cf519ed9d4729be35->leave($__internal_20ff7c2d4048f83331a9a01c0c173342d39dfc071948e53cf519ed9d4729be35_prof);

    }

    // line 29
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_49027c243ca782b2c7902fc9edb259341b99c6ba8debaa2cd5f78c348dab2f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49027c243ca782b2c7902fc9edb259341b99c6ba8debaa2cd5f78c348dab2f81->enter($__internal_49027c243ca782b2c7902fc9edb259341b99c6ba8debaa2cd5f78c348dab2f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 30
        echo "            <!--[if lt IE 9]>

            <![endif]-->



        ";
        
        $__internal_49027c243ca782b2c7902fc9edb259341b99c6ba8debaa2cd5f78c348dab2f81->leave($__internal_49027c243ca782b2c7902fc9edb259341b99c6ba8debaa2cd5f78c348dab2f81_prof);

    }

    // line 63
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_14de153712ac6001071ca645b37c2ab355b493f39568e372b4f9d377cf972ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14de153712ac6001071ca645b37c2ab355b493f39568e372b4f9d377cf972ab2->enter($__internal_14de153712ac6001071ca645b37c2ab355b493f39568e372b4f9d377cf972ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

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
        
        $__internal_14de153712ac6001071ca645b37c2ab355b493f39568e372b4f9d377cf972ab2->leave($__internal_14de153712ac6001071ca645b37c2ab355b493f39568e372b4f9d377cf972ab2_prof);

    }

    // line 65
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_f99d5680cb8c21e108565f2d989621692bdc640438909195139177f4faf247be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99d5680cb8c21e108565f2d989621692bdc640438909195139177f4faf247be->enter($__internal_f99d5680cb8c21e108565f2d989621692bdc640438909195139177f4faf247be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

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
        
        $__internal_f99d5680cb8c21e108565f2d989621692bdc640438909195139177f4faf247be->leave($__internal_f99d5680cb8c21e108565f2d989621692bdc640438909195139177f4faf247be_prof);

    }

    // line 86
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_d4fd1deaa44c8aa093a12b655ffe494e4714bd730246badc350132877f4e305d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4fd1deaa44c8aa093a12b655ffe494e4714bd730246badc350132877f4e305d->enter($__internal_d4fd1deaa44c8aa093a12b655ffe494e4714bd730246badc350132877f4e305d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

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
        
        $__internal_d4fd1deaa44c8aa093a12b655ffe494e4714bd730246badc350132877f4e305d->leave($__internal_d4fd1deaa44c8aa093a12b655ffe494e4714bd730246badc350132877f4e305d_prof);

    }

    // line 103
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_6c8a9d9ce6aaf62c5fa7beb3fd05bf4fdcc8f3293166c717561b145698cbe8e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c8a9d9ce6aaf62c5fa7beb3fd05bf4fdcc8f3293166c717561b145698cbe8e6->enter($__internal_6c8a9d9ce6aaf62c5fa7beb3fd05bf4fdcc8f3293166c717561b145698cbe8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

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
        
        $__internal_6c8a9d9ce6aaf62c5fa7beb3fd05bf4fdcc8f3293166c717561b145698cbe8e6->leave($__internal_6c8a9d9ce6aaf62c5fa7beb3fd05bf4fdcc8f3293166c717561b145698cbe8e6_prof);

    }

    // line 119
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_0a47a5b25903dd747772ad9d995795c32fb0dca25ed4b7a821dc0743dce3620d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a47a5b25903dd747772ad9d995795c32fb0dca25ed4b7a821dc0743dce3620d->enter($__internal_0a47a5b25903dd747772ad9d995795c32fb0dca25ed4b7a821dc0743dce3620d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Page Title";
        
        $__internal_0a47a5b25903dd747772ad9d995795c32fb0dca25ed4b7a821dc0743dce3620d->leave($__internal_0a47a5b25903dd747772ad9d995795c32fb0dca25ed4b7a821dc0743dce3620d_prof);

    }

    // line 120
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_5ea8f6ead8ac94c8d3d9ba849c04836df7b1435ceace5d1062261573b474f6a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea8f6ead8ac94c8d3d9ba849c04836df7b1435ceace5d1062261573b474f6a1->enter($__internal_5ea8f6ead8ac94c8d3d9ba849c04836df7b1435ceace5d1062261573b474f6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        
        $__internal_5ea8f6ead8ac94c8d3d9ba849c04836df7b1435ceace5d1062261573b474f6a1->leave($__internal_5ea8f6ead8ac94c8d3d9ba849c04836df7b1435ceace5d1062261573b474f6a1_prof);

    }

    // line 122
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_2f747b157fe2e847573d31f65e48545f1f848e600edb03964b7692a0aa77437a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f747b157fe2e847573d31f65e48545f1f848e600edb03964b7692a0aa77437a->enter($__internal_2f747b157fe2e847573d31f65e48545f1f848e600edb03964b7692a0aa77437a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 123
        echo "                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
                    ";
        
        $__internal_2f747b157fe2e847573d31f65e48545f1f848e600edb03964b7692a0aa77437a->leave($__internal_2f747b157fe2e847573d31f65e48545f1f848e600edb03964b7692a0aa77437a_prof);

    }

    // line 181
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_1651bc5ac596679599faf5c0be4dc9404e66ef42a5c66542a4fd62ad5243b3de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1651bc5ac596679599faf5c0be4dc9404e66ef42a5c66542a4fd62ad5243b3de->enter($__internal_1651bc5ac596679599faf5c0be4dc9404e66ef42a5c66542a4fd62ad5243b3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_1651bc5ac596679599faf5c0be4dc9404e66ef42a5c66542a4fd62ad5243b3de->leave($__internal_1651bc5ac596679599faf5c0be4dc9404e66ef42a5c66542a4fd62ad5243b3de_prof);

    }

    // line 187
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_d7f9d74f914b7e82813786ee7687e5a1c70c2c571380c6a0f904049770368fa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f9d74f914b7e82813786ee7687e5a1c70c2c571380c6a0f904049770368fa3->enter($__internal_d7f9d74f914b7e82813786ee7687e5a1c70c2c571380c6a0f904049770368fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

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
        
        $__internal_d7f9d74f914b7e82813786ee7687e5a1c70c2c571380c6a0f904049770368fa3->leave($__internal_d7f9d74f914b7e82813786ee7687e5a1c70c2c571380c6a0f904049770368fa3_prof);

    }

    // line 197
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f21aa079115e5aae3f8f5365fa2857439cd8a6991c135feba69327438e1682c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21aa079115e5aae3f8f5365fa2857439cd8a6991c135feba69327438e1682c2->enter($__internal_f21aa079115e5aae3f8f5365fa2857439cd8a6991c135feba69327438e1682c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f21aa079115e5aae3f8f5365fa2857439cd8a6991c135feba69327438e1682c2->leave($__internal_f21aa079115e5aae3f8f5365fa2857439cd8a6991c135feba69327438e1682c2_prof);

    }

    // line 218
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_49c91cce6d8071a575b83fd2492c6497adfc9a0116293a7c12bcd8854d7ecd7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c91cce6d8071a575b83fd2492c6497adfc9a0116293a7c12bcd8854d7ecd7e->enter($__internal_49c91cce6d8071a575b83fd2492c6497adfc9a0116293a7c12bcd8854d7ecd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        // line 219
        echo "                        ";
        
        $__internal_49c91cce6d8071a575b83fd2492c6497adfc9a0116293a7c12bcd8854d7ecd7e->leave($__internal_49c91cce6d8071a575b83fd2492c6497adfc9a0116293a7c12bcd8854d7ecd7e_prof);

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
", "layout/base-layout.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\layout\\base-layout.html.twig");
    }
}
