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
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c475ec4d0008115922cc926201f5b5f0e25b4965fee9740d955615fa10d48024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c475ec4d0008115922cc926201f5b5f0e25b4965fee9740d955615fa10d48024->enter($__internal_c475ec4d0008115922cc926201f5b5f0e25b4965fee9740d955615fa10d48024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/base-layout.html.twig"));

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
        
        $__internal_c475ec4d0008115922cc926201f5b5f0e25b4965fee9740d955615fa10d48024->leave($__internal_c475ec4d0008115922cc926201f5b5f0e25b4965fee9740d955615fa10d48024_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2c2de7d464c119f1d3cbaeae1f4103081fbaa0da387198a984a19bcfb57e498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2c2de7d464c119f1d3cbaeae1f4103081fbaa0da387198a984a19bcfb57e498->enter($__internal_c2c2de7d464c119f1d3cbaeae1f4103081fbaa0da387198a984a19bcfb57e498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_c2c2de7d464c119f1d3cbaeae1f4103081fbaa0da387198a984a19bcfb57e498->leave($__internal_c2c2de7d464c119f1d3cbaeae1f4103081fbaa0da387198a984a19bcfb57e498_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dc6c04770b29c64425895847d9c37bd7e89820c88b7722694009b4c917ae058f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc6c04770b29c64425895847d9c37bd7e89820c88b7722694009b4c917ae058f->enter($__internal_dc6c04770b29c64425895847d9c37bd7e89820c88b7722694009b4c917ae058f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_dc6c04770b29c64425895847d9c37bd7e89820c88b7722694009b4c917ae058f->leave($__internal_dc6c04770b29c64425895847d9c37bd7e89820c88b7722694009b4c917ae058f_prof);

    }

    // line 29
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_3879566816e1bceab4e97aefd35b62648aca4926faef6964ecd6f31d9c3c62d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3879566816e1bceab4e97aefd35b62648aca4926faef6964ecd6f31d9c3c62d5->enter($__internal_3879566816e1bceab4e97aefd35b62648aca4926faef6964ecd6f31d9c3c62d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 30
        echo "            <!--[if lt IE 9]>

            <![endif]-->



        ";
        
        $__internal_3879566816e1bceab4e97aefd35b62648aca4926faef6964ecd6f31d9c3c62d5->leave($__internal_3879566816e1bceab4e97aefd35b62648aca4926faef6964ecd6f31d9c3c62d5_prof);

    }

    // line 63
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_fb7a5f5e12259f972ae5cc95a88c8e3107626ae0e7ee01fd1905f93bfe80ba15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7a5f5e12259f972ae5cc95a88c8e3107626ae0e7ee01fd1905f93bfe80ba15->enter($__internal_fb7a5f5e12259f972ae5cc95a88c8e3107626ae0e7ee01fd1905f93bfe80ba15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

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
        
        $__internal_fb7a5f5e12259f972ae5cc95a88c8e3107626ae0e7ee01fd1905f93bfe80ba15->leave($__internal_fb7a5f5e12259f972ae5cc95a88c8e3107626ae0e7ee01fd1905f93bfe80ba15_prof);

    }

    // line 65
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_9b42f58555d6365eee3fd5681dbee14678e20e1e966916f154a97c4f7d0218e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b42f58555d6365eee3fd5681dbee14678e20e1e966916f154a97c4f7d0218e1->enter($__internal_9b42f58555d6365eee3fd5681dbee14678e20e1e966916f154a97c4f7d0218e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

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
        
        $__internal_9b42f58555d6365eee3fd5681dbee14678e20e1e966916f154a97c4f7d0218e1->leave($__internal_9b42f58555d6365eee3fd5681dbee14678e20e1e966916f154a97c4f7d0218e1_prof);

    }

    // line 86
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_e4c569a21aad8affa09da2e1589cd62153c658a405c6332d811aa4b83c6a8c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c569a21aad8affa09da2e1589cd62153c658a405c6332d811aa4b83c6a8c80->enter($__internal_e4c569a21aad8affa09da2e1589cd62153c658a405c6332d811aa4b83c6a8c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

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
        
        $__internal_e4c569a21aad8affa09da2e1589cd62153c658a405c6332d811aa4b83c6a8c80->leave($__internal_e4c569a21aad8affa09da2e1589cd62153c658a405c6332d811aa4b83c6a8c80_prof);

    }

    // line 103
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_5e9eb214b60e0bf4d3a3778f467b011f31bc2664868985644a57bafb96a56353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9eb214b60e0bf4d3a3778f467b011f31bc2664868985644a57bafb96a56353->enter($__internal_5e9eb214b60e0bf4d3a3778f467b011f31bc2664868985644a57bafb96a56353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

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
        
        $__internal_5e9eb214b60e0bf4d3a3778f467b011f31bc2664868985644a57bafb96a56353->leave($__internal_5e9eb214b60e0bf4d3a3778f467b011f31bc2664868985644a57bafb96a56353_prof);

    }

    // line 119
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_ae83c833a647c4c3c7c1806db907b85cbc7df5cb43932ebe9f708496d4a20f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae83c833a647c4c3c7c1806db907b85cbc7df5cb43932ebe9f708496d4a20f35->enter($__internal_ae83c833a647c4c3c7c1806db907b85cbc7df5cb43932ebe9f708496d4a20f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Page Title";
        
        $__internal_ae83c833a647c4c3c7c1806db907b85cbc7df5cb43932ebe9f708496d4a20f35->leave($__internal_ae83c833a647c4c3c7c1806db907b85cbc7df5cb43932ebe9f708496d4a20f35_prof);

    }

    // line 120
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_33b77b4ed6df6b4cdda45d4150295cbdeada32d6444eaad85301c1c9b2af1592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b77b4ed6df6b4cdda45d4150295cbdeada32d6444eaad85301c1c9b2af1592->enter($__internal_33b77b4ed6df6b4cdda45d4150295cbdeada32d6444eaad85301c1c9b2af1592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        
        $__internal_33b77b4ed6df6b4cdda45d4150295cbdeada32d6444eaad85301c1c9b2af1592->leave($__internal_33b77b4ed6df6b4cdda45d4150295cbdeada32d6444eaad85301c1c9b2af1592_prof);

    }

    // line 122
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_dcf14ccf9c49357f3b015c48742ca5da3f33a32773ea63fdf731f79a68d8a4cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf14ccf9c49357f3b015c48742ca5da3f33a32773ea63fdf731f79a68d8a4cc->enter($__internal_dcf14ccf9c49357f3b015c48742ca5da3f33a32773ea63fdf731f79a68d8a4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 123
        echo "                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
                    ";
        
        $__internal_dcf14ccf9c49357f3b015c48742ca5da3f33a32773ea63fdf731f79a68d8a4cc->leave($__internal_dcf14ccf9c49357f3b015c48742ca5da3f33a32773ea63fdf731f79a68d8a4cc_prof);

    }

    // line 181
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_b9b905acfd4c5ab1a451f06df97539a650028bbce41f6bdd715f1fd8d5765de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b905acfd4c5ab1a451f06df97539a650028bbce41f6bdd715f1fd8d5765de9->enter($__internal_b9b905acfd4c5ab1a451f06df97539a650028bbce41f6bdd715f1fd8d5765de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_b9b905acfd4c5ab1a451f06df97539a650028bbce41f6bdd715f1fd8d5765de9->leave($__internal_b9b905acfd4c5ab1a451f06df97539a650028bbce41f6bdd715f1fd8d5765de9_prof);

    }

    // line 187
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_460265462ca80d93ae7f62f56989cbbdbdb5c600b076481766199bdb872436ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460265462ca80d93ae7f62f56989cbbdbdb5c600b076481766199bdb872436ae->enter($__internal_460265462ca80d93ae7f62f56989cbbdbdb5c600b076481766199bdb872436ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

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
        
        $__internal_460265462ca80d93ae7f62f56989cbbdbdb5c600b076481766199bdb872436ae->leave($__internal_460265462ca80d93ae7f62f56989cbbdbdb5c600b076481766199bdb872436ae_prof);

    }

    // line 197
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_74c3523035b7fe293b7d18c58411fe4057742b01a604d7d72f117764192b823c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c3523035b7fe293b7d18c58411fe4057742b01a604d7d72f117764192b823c->enter($__internal_74c3523035b7fe293b7d18c58411fe4057742b01a604d7d72f117764192b823c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_74c3523035b7fe293b7d18c58411fe4057742b01a604d7d72f117764192b823c->leave($__internal_74c3523035b7fe293b7d18c58411fe4057742b01a604d7d72f117764192b823c_prof);

    }

    // line 218
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_37051ba3e195f7fd0f1e1a48af4a44ef35f153be09e8d92951c445b53ab7d867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37051ba3e195f7fd0f1e1a48af4a44ef35f153be09e8d92951c445b53ab7d867->enter($__internal_37051ba3e195f7fd0f1e1a48af4a44ef35f153be09e8d92951c445b53ab7d867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        // line 219
        echo "                        ";
        
        $__internal_37051ba3e195f7fd0f1e1a48af4a44ef35f153be09e8d92951c445b53ab7d867->leave($__internal_37051ba3e195f7fd0f1e1a48af4a44ef35f153be09e8d92951c445b53ab7d867_prof);

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
", "layout/base-layout.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\app\\Resources\\views\\layout\\base-layout.html.twig");
    }
}
