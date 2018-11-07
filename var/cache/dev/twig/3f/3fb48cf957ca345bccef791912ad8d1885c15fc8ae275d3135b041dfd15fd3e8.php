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
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d189b2e77274637a3f84adc9c00bec64ff2806212a5c51be463cc6170bfb6c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d189b2e77274637a3f84adc9c00bec64ff2806212a5c51be463cc6170bfb6c74->enter($__internal_d189b2e77274637a3f84adc9c00bec64ff2806212a5c51be463cc6170bfb6c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/base-layout.html.twig"));

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
                        </html>";
        
        $__internal_d189b2e77274637a3f84adc9c00bec64ff2806212a5c51be463cc6170bfb6c74->leave($__internal_d189b2e77274637a3f84adc9c00bec64ff2806212a5c51be463cc6170bfb6c74_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_0568a3bac0fd36158c591398c7f3188886df31b50d4db86f29c9dda3a423d56a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0568a3bac0fd36158c591398c7f3188886df31b50d4db86f29c9dda3a423d56a->enter($__internal_0568a3bac0fd36158c591398c7f3188886df31b50d4db86f29c9dda3a423d56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_0568a3bac0fd36158c591398c7f3188886df31b50d4db86f29c9dda3a423d56a->leave($__internal_0568a3bac0fd36158c591398c7f3188886df31b50d4db86f29c9dda3a423d56a_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4c844b6a9b7ad8b1f0ecf30aea049780a04d6658b68520207dc6192d145b9ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c844b6a9b7ad8b1f0ecf30aea049780a04d6658b68520207dc6192d145b9ea2->enter($__internal_4c844b6a9b7ad8b1f0ecf30aea049780a04d6658b68520207dc6192d145b9ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4c844b6a9b7ad8b1f0ecf30aea049780a04d6658b68520207dc6192d145b9ea2->leave($__internal_4c844b6a9b7ad8b1f0ecf30aea049780a04d6658b68520207dc6192d145b9ea2_prof);

    }

    // line 29
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_e5236c7ca7b0eec596f5fae1762cfb3c4ffdd82d76ccadc9f0cd912a00de82b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5236c7ca7b0eec596f5fae1762cfb3c4ffdd82d76ccadc9f0cd912a00de82b8->enter($__internal_e5236c7ca7b0eec596f5fae1762cfb3c4ffdd82d76ccadc9f0cd912a00de82b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 30
        echo "            <!--[if lt IE 9]>
    
            <![endif]-->



        ";
        
        $__internal_e5236c7ca7b0eec596f5fae1762cfb3c4ffdd82d76ccadc9f0cd912a00de82b8->leave($__internal_e5236c7ca7b0eec596f5fae1762cfb3c4ffdd82d76ccadc9f0cd912a00de82b8_prof);

    }

    // line 63
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_d638c2020158a322f9c949362a70da0b7c6a841e82b7c19d5cc00e984b03a201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d638c2020158a322f9c949362a70da0b7c6a841e82b7c19d5cc00e984b03a201->enter($__internal_d638c2020158a322f9c949362a70da0b7c6a841e82b7c19d5cc00e984b03a201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

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
        
        $__internal_d638c2020158a322f9c949362a70da0b7c6a841e82b7c19d5cc00e984b03a201->leave($__internal_d638c2020158a322f9c949362a70da0b7c6a841e82b7c19d5cc00e984b03a201_prof);

    }

    // line 65
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_c1824e61b7d1686d0a009f4e22d0f6237a2c4a568e90868636279716c2ebbdef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1824e61b7d1686d0a009f4e22d0f6237a2c4a568e90868636279716c2ebbdef->enter($__internal_c1824e61b7d1686d0a009f4e22d0f6237a2c4a568e90868636279716c2ebbdef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

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
        
        $__internal_c1824e61b7d1686d0a009f4e22d0f6237a2c4a568e90868636279716c2ebbdef->leave($__internal_c1824e61b7d1686d0a009f4e22d0f6237a2c4a568e90868636279716c2ebbdef_prof);

    }

    // line 86
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_7925d7a6aaed7b01278ff2a32c68ab00fd7785e727419ebda99da6a2c6b3483e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7925d7a6aaed7b01278ff2a32c68ab00fd7785e727419ebda99da6a2c6b3483e->enter($__internal_7925d7a6aaed7b01278ff2a32c68ab00fd7785e727419ebda99da6a2c6b3483e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

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
        
        $__internal_7925d7a6aaed7b01278ff2a32c68ab00fd7785e727419ebda99da6a2c6b3483e->leave($__internal_7925d7a6aaed7b01278ff2a32c68ab00fd7785e727419ebda99da6a2c6b3483e_prof);

    }

    // line 103
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_1975d1bdc4ce4a11d6ff58457d11247f8e47ea929be6469eb35a093df0783fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1975d1bdc4ce4a11d6ff58457d11247f8e47ea929be6469eb35a093df0783fc0->enter($__internal_1975d1bdc4ce4a11d6ff58457d11247f8e47ea929be6469eb35a093df0783fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

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
        
        $__internal_1975d1bdc4ce4a11d6ff58457d11247f8e47ea929be6469eb35a093df0783fc0->leave($__internal_1975d1bdc4ce4a11d6ff58457d11247f8e47ea929be6469eb35a093df0783fc0_prof);

    }

    // line 119
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_51fa33bffb70ee7deb0170d9de09ee1fbdfe515da3a6645d521bcf081c5bed2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51fa33bffb70ee7deb0170d9de09ee1fbdfe515da3a6645d521bcf081c5bed2a->enter($__internal_51fa33bffb70ee7deb0170d9de09ee1fbdfe515da3a6645d521bcf081c5bed2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Page Title";
        
        $__internal_51fa33bffb70ee7deb0170d9de09ee1fbdfe515da3a6645d521bcf081c5bed2a->leave($__internal_51fa33bffb70ee7deb0170d9de09ee1fbdfe515da3a6645d521bcf081c5bed2a_prof);

    }

    // line 120
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_2663f8ae2b057fda3323690b5602b5d868f46476a356d60314959efee17f43e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2663f8ae2b057fda3323690b5602b5d868f46476a356d60314959efee17f43e6->enter($__internal_2663f8ae2b057fda3323690b5602b5d868f46476a356d60314959efee17f43e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        
        $__internal_2663f8ae2b057fda3323690b5602b5d868f46476a356d60314959efee17f43e6->leave($__internal_2663f8ae2b057fda3323690b5602b5d868f46476a356d60314959efee17f43e6_prof);

    }

    // line 122
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_fcde8d2e6a6ad100ec7fc86936dbfe78f6d134b93010e30af6f9e0d7f40b0cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcde8d2e6a6ad100ec7fc86936dbfe78f6d134b93010e30af6f9e0d7f40b0cc2->enter($__internal_fcde8d2e6a6ad100ec7fc86936dbfe78f6d134b93010e30af6f9e0d7f40b0cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 123
        echo "                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
                    ";
        
        $__internal_fcde8d2e6a6ad100ec7fc86936dbfe78f6d134b93010e30af6f9e0d7f40b0cc2->leave($__internal_fcde8d2e6a6ad100ec7fc86936dbfe78f6d134b93010e30af6f9e0d7f40b0cc2_prof);

    }

    // line 181
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_eb791b4e9a57ccad7bf3526a03fb3307ee03665d20060c8888d5d2efba22f491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb791b4e9a57ccad7bf3526a03fb3307ee03665d20060c8888d5d2efba22f491->enter($__internal_eb791b4e9a57ccad7bf3526a03fb3307ee03665d20060c8888d5d2efba22f491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_eb791b4e9a57ccad7bf3526a03fb3307ee03665d20060c8888d5d2efba22f491->leave($__internal_eb791b4e9a57ccad7bf3526a03fb3307ee03665d20060c8888d5d2efba22f491_prof);

    }

    // line 187
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_0c74f4b9ce892859332a32325916e66dc0ebd1471676cb61c242d1c817d2b1a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c74f4b9ce892859332a32325916e66dc0ebd1471676cb61c242d1c817d2b1a9->enter($__internal_0c74f4b9ce892859332a32325916e66dc0ebd1471676cb61c242d1c817d2b1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

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
        
        $__internal_0c74f4b9ce892859332a32325916e66dc0ebd1471676cb61c242d1c817d2b1a9->leave($__internal_0c74f4b9ce892859332a32325916e66dc0ebd1471676cb61c242d1c817d2b1a9_prof);

    }

    // line 197
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_593acb054bc292c5a1408d22055119ba00124f4818be399a4457583806d84315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593acb054bc292c5a1408d22055119ba00124f4818be399a4457583806d84315->enter($__internal_593acb054bc292c5a1408d22055119ba00124f4818be399a4457583806d84315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_593acb054bc292c5a1408d22055119ba00124f4818be399a4457583806d84315->leave($__internal_593acb054bc292c5a1408d22055119ba00124f4818be399a4457583806d84315_prof);

    }

    // line 218
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_667757fddd05aa748ceff91fff3e2028f691da537eb1748c9ea924fc0818f11c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_667757fddd05aa748ceff91fff3e2028f691da537eb1748c9ea924fc0818f11c->enter($__internal_667757fddd05aa748ceff91fff3e2028f691da537eb1748c9ea924fc0818f11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        // line 219
        echo "                        ";
        
        $__internal_667757fddd05aa748ceff91fff3e2028f691da537eb1748c9ea924fc0818f11c->leave($__internal_667757fddd05aa748ceff91fff3e2028f691da537eb1748c9ea924fc0818f11c_prof);

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
        return array (  596 => 219,  590 => 218,  566 => 199,  563 => 198,  557 => 197,  543 => 189,  540 => 188,  534 => 187,  523 => 181,  513 => 123,  507 => 122,  496 => 120,  484 => 119,  474 => 108,  469 => 106,  464 => 105,  461 => 104,  455 => 103,  446 => 90,  442 => 89,  438 => 88,  433 => 87,  427 => 86,  416 => 73,  410 => 70,  402 => 66,  396 => 65,  387 => 95,  382 => 92,  380 => 86,  376 => 84,  374 => 83,  366 => 77,  364 => 65,  361 => 64,  355 => 63,  342 => 30,  336 => 29,  326 => 22,  322 => 21,  318 => 20,  315 => 19,  309 => 18,  297 => 15,  288 => 220,  285 => 218,  282 => 216,  279 => 197,  273 => 192,  271 => 187,  264 => 182,  262 => 181,  257 => 178,  251 => 174,  247 => 172,  238 => 170,  234 => 169,  229 => 166,  227 => 165,  224 => 164,  220 => 162,  211 => 160,  207 => 159,  202 => 156,  200 => 155,  197 => 154,  193 => 152,  184 => 150,  180 => 149,  175 => 146,  173 => 145,  170 => 144,  166 => 142,  157 => 140,  153 => 139,  148 => 136,  146 => 135,  141 => 132,  139 => 130,  138 => 129,  137 => 128,  132 => 125,  130 => 122,  124 => 120,  122 => 119,  111 => 110,  109 => 103,  102 => 98,  100 => 63,  94 => 60,  69 => 37,  66 => 29,  61 => 25,  58 => 18,  53 => 15,  38 => 2,  36 => 1,);
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
                        </html>", "layout/base-layout.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\layout\\base-layout.html.twig");
    }
}
