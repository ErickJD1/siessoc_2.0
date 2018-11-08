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
        $__internal_2eac0f7f7054f8b5648d018aa71f0cc4a226285e2d5a9d661e4ce215f4f83120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eac0f7f7054f8b5648d018aa71f0cc4a226285e2d5a9d661e4ce215f4f83120->enter($__internal_2eac0f7f7054f8b5648d018aa71f0cc4a226285e2d5a9d661e4ce215f4f83120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/base-layout.html.twig"));

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

                <!-- Alert Boxes -->
                ";
        // line 129
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method") || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 130
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 131
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method"))) {
            // line 133
            echo "                <section class=\"flash-messages content-header\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            ";
            // line 136
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
                // line 137
                echo "                                <div class=\"alert alert-success alert-dismissible\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                    <h4><i class=\"icon fa fa-check\"></i> Success!</h4>
                                    ";
                // line 140
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 141
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 143
                echo "                                </div>
                            ";
            }
            // line 145
            echo "
                            ";
            // line 146
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
                // line 147
                echo "                                <div class=\"alert alert-danger alert-dismissible\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                    <h4><i class=\"icon fa fa-ban\"></i> Error!</h4>
                                    ";
                // line 150
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 151
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                echo "                                </div>
                            ";
            }
            // line 155
            echo "
                            ";
            // line 156
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method")) {
                // line 157
                echo "                                <div class=\"alert alert-info alert-dismissible\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                    <h4><i class=\"icon fa fa-info\"></i> Notice!</h4>
                                    ";
                // line 160
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 161
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 163
                echo "                                </div>
                            ";
            }
            // line 165
            echo "
                            ";
            // line 166
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "warning"), "method")) {
                // line 167
                echo "                                <div class=\"alert alert-info alert-dismissible\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                    <h4><i class=\"icon fa fa-warning\"></i> Warning!</h4>
                                    ";
                // line 170
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 171
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                echo "                                </div>
                            ";
            }
            // line 175
            echo "                        </div>
                    </div>
                </section>
                ";
        }
        // line 179
        echo "
                    <!-- Main content -->
                    <section class=\"content\">
                    ";
        // line 182
        $this->displayBlock('page_content', $context, $blocks);
        // line 183
        echo "                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            ";
        // line 188
        $this->displayBlock('avanzu_admin_footer', $context, $blocks);
        // line 193
        echo "
                        </div>
                        <!-- ./wrapper -->

                        ";
        // line 198
        echo "                        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 217
        echo "
                        ";
        // line 219
        echo "                        ";
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 221
        echo "
                        </body>
                        </html>
";
        
        $__internal_2eac0f7f7054f8b5648d018aa71f0cc4a226285e2d5a9d661e4ce215f4f83120->leave($__internal_2eac0f7f7054f8b5648d018aa71f0cc4a226285e2d5a9d661e4ce215f4f83120_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f49ad165b6cb0c63d8fed755ea4fd73781768e94fda2faf3951369892839da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f49ad165b6cb0c63d8fed755ea4fd73781768e94fda2faf3951369892839da0->enter($__internal_9f49ad165b6cb0c63d8fed755ea4fd73781768e94fda2faf3951369892839da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_9f49ad165b6cb0c63d8fed755ea4fd73781768e94fda2faf3951369892839da0->leave($__internal_9f49ad165b6cb0c63d8fed755ea4fd73781768e94fda2faf3951369892839da0_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3916ffec009bb0960ba50220b960cdca38da7764d14c573a167e0d711cc43fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3916ffec009bb0960ba50220b960cdca38da7764d14c573a167e0d711cc43fec->enter($__internal_3916ffec009bb0960ba50220b960cdca38da7764d14c573a167e0d711cc43fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "            <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.css")), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fonts/font-awesome.css")), "html", null, true);
        echo "\">
            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        ";
        
        $__internal_3916ffec009bb0960ba50220b960cdca38da7764d14c573a167e0d711cc43fec->leave($__internal_3916ffec009bb0960ba50220b960cdca38da7764d14c573a167e0d711cc43fec_prof);

    }

    // line 30
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_e418a401cda61b0e866dcce3f5d3a7f4213ac6b6c4a231513ea383f193e5ac57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e418a401cda61b0e866dcce3f5d3a7f4213ac6b6c4a231513ea383f193e5ac57->enter($__internal_e418a401cda61b0e866dcce3f5d3a7f4213ac6b6c4a231513ea383f193e5ac57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 31
        echo "            <!--[if lt IE 9]>

            <![endif]-->



        ";
        
        $__internal_e418a401cda61b0e866dcce3f5d3a7f4213ac6b6c4a231513ea383f193e5ac57->leave($__internal_e418a401cda61b0e866dcce3f5d3a7f4213ac6b6c4a231513ea383f193e5ac57_prof);

    }

    // line 64
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_3ef4ec0526ef7aba128d3e59455c700d3f83d3702f400d82c2a858f1f2499ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef4ec0526ef7aba128d3e59455c700d3f83d3702f400d82c2a858f1f2499ea1->enter($__internal_3ef4ec0526ef7aba128d3e59455c700d3f83d3702f400d82c2a858f1f2499ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

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
        
        $__internal_3ef4ec0526ef7aba128d3e59455c700d3f83d3702f400d82c2a858f1f2499ea1->leave($__internal_3ef4ec0526ef7aba128d3e59455c700d3f83d3702f400d82c2a858f1f2499ea1_prof);

    }

    // line 66
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_3415db346497e80e9fdff159eb775dcea36a2a86fee942f69e4e9e3976cd2d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3415db346497e80e9fdff159eb775dcea36a2a86fee942f69e4e9e3976cd2d83->enter($__internal_3415db346497e80e9fdff159eb775dcea36a2a86fee942f69e4e9e3976cd2d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

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
        
        $__internal_3415db346497e80e9fdff159eb775dcea36a2a86fee942f69e4e9e3976cd2d83->leave($__internal_3415db346497e80e9fdff159eb775dcea36a2a86fee942f69e4e9e3976cd2d83_prof);

    }

    // line 87
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_d55a48b8df92b6ab91d09cba3912df78d952e354205fddeab912ac14669cd5ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d55a48b8df92b6ab91d09cba3912df78d952e354205fddeab912ac14669cd5ac->enter($__internal_d55a48b8df92b6ab91d09cba3912df78d952e354205fddeab912ac14669cd5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

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
        
        $__internal_d55a48b8df92b6ab91d09cba3912df78d952e354205fddeab912ac14669cd5ac->leave($__internal_d55a48b8df92b6ab91d09cba3912df78d952e354205fddeab912ac14669cd5ac_prof);

    }

    // line 104
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_9d4f4537e660dfb576ffd153c9fc08011748dbbb7c25d50a525d1712aa7a9885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4f4537e660dfb576ffd153c9fc08011748dbbb7c25d50a525d1712aa7a9885->enter($__internal_9d4f4537e660dfb576ffd153c9fc08011748dbbb7c25d50a525d1712aa7a9885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

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
        
        $__internal_9d4f4537e660dfb576ffd153c9fc08011748dbbb7c25d50a525d1712aa7a9885->leave($__internal_9d4f4537e660dfb576ffd153c9fc08011748dbbb7c25d50a525d1712aa7a9885_prof);

    }

    // line 120
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_217fdaa041a1a096be9ffb349ebbb4b9ea063473fdf32e5c31abc843ba769e51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217fdaa041a1a096be9ffb349ebbb4b9ea063473fdf32e5c31abc843ba769e51->enter($__internal_217fdaa041a1a096be9ffb349ebbb4b9ea063473fdf32e5c31abc843ba769e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Page Title";
        
        $__internal_217fdaa041a1a096be9ffb349ebbb4b9ea063473fdf32e5c31abc843ba769e51->leave($__internal_217fdaa041a1a096be9ffb349ebbb4b9ea063473fdf32e5c31abc843ba769e51_prof);

    }

    // line 121
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_b7cebe32f31ab8221b0d13e188c7f081d6e5dbefe5b6ea40aa5d87d3f4ddd9cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7cebe32f31ab8221b0d13e188c7f081d6e5dbefe5b6ea40aa5d87d3f4ddd9cb->enter($__internal_b7cebe32f31ab8221b0d13e188c7f081d6e5dbefe5b6ea40aa5d87d3f4ddd9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        
        $__internal_b7cebe32f31ab8221b0d13e188c7f081d6e5dbefe5b6ea40aa5d87d3f4ddd9cb->leave($__internal_b7cebe32f31ab8221b0d13e188c7f081d6e5dbefe5b6ea40aa5d87d3f4ddd9cb_prof);

    }

    // line 123
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_1725ebdec8f2d56570b53b8064b6efe6655e40784ee6ba88ac851ea39cedbc83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1725ebdec8f2d56570b53b8064b6efe6655e40784ee6ba88ac851ea39cedbc83->enter($__internal_1725ebdec8f2d56570b53b8064b6efe6655e40784ee6ba88ac851ea39cedbc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 124
        echo "                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
                    ";
        
        $__internal_1725ebdec8f2d56570b53b8064b6efe6655e40784ee6ba88ac851ea39cedbc83->leave($__internal_1725ebdec8f2d56570b53b8064b6efe6655e40784ee6ba88ac851ea39cedbc83_prof);

    }

    // line 182
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_a67afa72c974fc8f4875aaff00c6eb6cfe1e130a09974234ef6937de02a29a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67afa72c974fc8f4875aaff00c6eb6cfe1e130a09974234ef6937de02a29a6b->enter($__internal_a67afa72c974fc8f4875aaff00c6eb6cfe1e130a09974234ef6937de02a29a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_a67afa72c974fc8f4875aaff00c6eb6cfe1e130a09974234ef6937de02a29a6b->leave($__internal_a67afa72c974fc8f4875aaff00c6eb6cfe1e130a09974234ef6937de02a29a6b_prof);

    }

    // line 188
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_3d5863aa54ecf4e98628bd17652403f256868416823fa443bbe3572aed3c03ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d5863aa54ecf4e98628bd17652403f256868416823fa443bbe3572aed3c03ff->enter($__internal_3d5863aa54ecf4e98628bd17652403f256868416823fa443bbe3572aed3c03ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 189
        echo "                <footer class=\"main-footer\">
                    <strong>Copyright &copy; ";
        // line 190
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"http://";
        echo twig_escape_filter($this->env, (isset($context["footer_url"]) ? $context["footer_url"] : $this->getContext($context, "footer_url")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        echo "
                            </footer>
                        ";
        
        $__internal_3d5863aa54ecf4e98628bd17652403f256868416823fa443bbe3572aed3c03ff->leave($__internal_3d5863aa54ecf4e98628bd17652403f256868416823fa443bbe3572aed3c03ff_prof);

    }

    // line 198
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aba20aaf12f547051436cfdf11e00db4726f6cb3e5be03779a8b049020e40b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba20aaf12f547051436cfdf11e00db4726f6cb3e5be03779a8b049020e40b81->enter($__internal_aba20aaf12f547051436cfdf11e00db4726f6cb3e5be03779a8b049020e40b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 199
        echo "
                            <script src=\"";
        // line 200
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
        
        $__internal_aba20aaf12f547051436cfdf11e00db4726f6cb3e5be03779a8b049020e40b81->leave($__internal_aba20aaf12f547051436cfdf11e00db4726f6cb3e5be03779a8b049020e40b81_prof);

    }

    // line 219
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_d9136e7c9dde20721847131f12e0bfcfc4f0857c13e6e566c8cf16105386c219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9136e7c9dde20721847131f12e0bfcfc4f0857c13e6e566c8cf16105386c219->enter($__internal_d9136e7c9dde20721847131f12e0bfcfc4f0857c13e6e566c8cf16105386c219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        // line 220
        echo "                        ";
        
        $__internal_d9136e7c9dde20721847131f12e0bfcfc4f0857c13e6e566c8cf16105386c219->leave($__internal_d9136e7c9dde20721847131f12e0bfcfc4f0857c13e6e566c8cf16105386c219_prof);

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
        return array (  601 => 220,  595 => 219,  571 => 200,  568 => 199,  562 => 198,  548 => 190,  545 => 189,  539 => 188,  528 => 182,  518 => 124,  512 => 123,  501 => 121,  489 => 120,  479 => 109,  474 => 107,  469 => 106,  466 => 105,  460 => 104,  451 => 91,  447 => 90,  443 => 89,  438 => 88,  432 => 87,  421 => 74,  415 => 71,  407 => 67,  401 => 66,  392 => 96,  387 => 93,  385 => 87,  381 => 85,  379 => 84,  371 => 78,  369 => 66,  366 => 65,  360 => 64,  347 => 31,  341 => 30,  331 => 23,  327 => 22,  323 => 21,  319 => 20,  316 => 19,  310 => 18,  298 => 15,  288 => 221,  285 => 219,  282 => 217,  279 => 198,  273 => 193,  271 => 188,  264 => 183,  262 => 182,  257 => 179,  251 => 175,  247 => 173,  238 => 171,  234 => 170,  229 => 167,  227 => 166,  224 => 165,  220 => 163,  211 => 161,  207 => 160,  202 => 157,  200 => 156,  197 => 155,  193 => 153,  184 => 151,  180 => 150,  175 => 147,  173 => 146,  170 => 145,  166 => 143,  157 => 141,  153 => 140,  148 => 137,  146 => 136,  141 => 133,  139 => 131,  138 => 130,  137 => 129,  132 => 126,  130 => 123,  124 => 121,  122 => 120,  111 => 111,  109 => 104,  102 => 99,  100 => 64,  94 => 61,  69 => 38,  66 => 30,  61 => 26,  58 => 18,  53 => 15,  38 => 2,  36 => 1,);
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
            <link rel=\"stylesheet\" href=\"{{absolute_url(asset('bootstrap/css/bootstrap.css'))}}\">
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
", "layout/base-layout.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\app\\Resources\\views\\layout\\base-layout.html.twig");
    }
}
