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
        $__internal_9c79ac4ca2b3dadc16fd4b93a79f8f2fa0bdf0e8392ed2ebafca8dd1c0e0f7e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c79ac4ca2b3dadc16fd4b93a79f8f2fa0bdf0e8392ed2ebafca8dd1c0e0f7e8->enter($__internal_9c79ac4ca2b3dadc16fd4b93a79f8f2fa0bdf0e8392ed2ebafca8dd1c0e0f7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/base-layout.html.twig"));

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
        // line 43
        echo "


        ";
        // line 47
        echo "        ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 55
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
        // line 78
        echo twig_escape_filter($this->env, ((array_key_exists("admin_skin", $context)) ? (_twig_default_filter((isset($context["admin_skin"]) ? $context["admin_skin"] : $this->getContext($context, "admin_skin")), "skin-blue")) : ("skin-blue")), "html", null, true);
        echo " fixed sidebar-mini\">

        <div class=\"wrapper\">
            ";
        // line 81
        $this->displayBlock('avanzu_admin_header', $context, $blocks);
        // line 116
        echo "
            <!-- Left side column. contains the logo and sidebar -->
            <aside class=\"main-sidebar sidebar-offcanvas\">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class=\"sidebar\">
                    ";
        // line 121
        $this->displayBlock('avanzu_sidebar', $context, $blocks);
        // line 128
        echo "                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <section class=\"content-header\">
                    <h1>
                        ";
        // line 137
        $this->displayBlock('page_title', $context, $blocks);
        // line 138
        echo "                        <small>";
        $this->displayBlock('page_subtitle', $context, $blocks);
        echo "</small>
                    </h1>
                    ";
        // line 140
        $this->displayBlock('avanzu_breadcrumb', $context, $blocks);
        // line 143
        echo "                </section>
                ";
        // line 144
        $context["msj"] = "";
        // line 145
        echo "                ";
        $context["txt"] = "";
        // line 146
        echo "                <!-- Alert Boxes -->
                ";
        // line 147
        if (((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method") || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 148
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 149
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method")) || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 150
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "warning"), "method"))) {
            // line 152
            echo "                <section class=\"flash-messages content-header\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            ";
            // line 155
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
                // line 156
                echo "                                ";
                $context["msj"] = 1;
                // line 157
                echo "                                ";
                $context["txt"] = twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"), ", ");
                // line 158
                echo "
                                ";
                // line 167
                echo "                                ";
                $context["msj"] = 1;
                // line 168
                echo "                                ";
                $context["txt"] = twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"), ", ");
                // line 169
                echo "

                                ";
                // line 179
                echo "
                            ";
            }
            // line 181
            echo "
                            ";
            // line 182
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
                // line 183
                echo "                                ";
                $context["msj"] = 2;
                // line 184
                echo "                                ";
                $context["txt"] = twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"), ", ");
                // line 185
                echo "                                ";
                // line 193
                echo "                                ";
                $context["msj"] = 2;
                // line 194
                echo "                                ";
                $context["txt"] = twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"), ", ");
                // line 195
                echo "                                ";
                // line 202
                echo "                            ";
            }
            // line 203
            echo "
                            ";
            // line 204
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method")) {
                // line 205
                echo "                                ";
                // line 212
                echo "                            ";
            }
            // line 213
            echo "
                            ";
            // line 214
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "warning"), "method")) {
                // line 215
                echo "                                ";
                $context["msj"] = 3;
                // line 216
                echo "                                ";
                $context["txt"] = twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"), ", ");
                // line 217
                echo "                                ";
                // line 224
                echo "                            ";
            }
            // line 225
            echo "                        </div>
                    </div>
                </section>
                ";
        }
        // line 229
        echo "
                    <!-- Main content -->
                    <section class=\"content\">
                        ";
        // line 232
        $this->displayBlock('page_content', $context, $blocks);
        // line 235
        echo "                    </section>
                    <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->

                ";
        // line 240
        $this->displayBlock('avanzu_admin_footer', $context, $blocks);
        // line 245
        echo "
                            </div>
                            <!-- ./wrapper -->

                            ";
        // line 250
        echo "                            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 308
        echo "
                            ";
        // line 310
        echo "                            ";
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 312
        echo "
                            ";
        // line 313
        $this->displayBlock('script_page', $context, $blocks);
        // line 316
        echo "
                            </body>
                            </html>
";
        
        $__internal_9c79ac4ca2b3dadc16fd4b93a79f8f2fa0bdf0e8392ed2ebafca8dd1c0e0f7e8->leave($__internal_9c79ac4ca2b3dadc16fd4b93a79f8f2fa0bdf0e8392ed2ebafca8dd1c0e0f7e8_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b9abdac028d955e48c670642f30ae0d30ddf829e2a3e353ae423990c8a07426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b9abdac028d955e48c670642f30ae0d30ddf829e2a3e353ae423990c8a07426->enter($__internal_7b9abdac028d955e48c670642f30ae0d30ddf829e2a3e353ae423990c8a07426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_7b9abdac028d955e48c670642f30ae0d30ddf829e2a3e353ae423990c8a07426->leave($__internal_7b9abdac028d955e48c670642f30ae0d30ddf829e2a3e353ae423990c8a07426_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5b2cf75cb7d37963a7240b35e32772738d839f5d75a3d564124e74e0030f8cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b2cf75cb7d37963a7240b35e32772738d839f5d75a3d564124e74e0030f8cc8->enter($__internal_5b2cf75cb7d37963a7240b35e32772738d839f5d75a3d564124e74e0030f8cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5b2cf75cb7d37963a7240b35e32772738d839f5d75a3d564124e74e0030f8cc8->leave($__internal_5b2cf75cb7d37963a7240b35e32772738d839f5d75a3d564124e74e0030f8cc8_prof);

    }

    // line 47
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_67ac69e88e752803cc725770e9d453a3cbdc794a9351718ef5c66478137b88f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67ac69e88e752803cc725770e9d453a3cbdc794a9351718ef5c66478137b88f1->enter($__internal_67ac69e88e752803cc725770e9d453a3cbdc794a9351718ef5c66478137b88f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 48
        echo "            <!--[if lt IE 9]>

            <![endif]-->



        ";
        
        $__internal_67ac69e88e752803cc725770e9d453a3cbdc794a9351718ef5c66478137b88f1->leave($__internal_67ac69e88e752803cc725770e9d453a3cbdc794a9351718ef5c66478137b88f1_prof);

    }

    // line 81
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_d0501f6370b286dab4bdf38025e51e465f3860ed076e012af1af69d606c566ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0501f6370b286dab4bdf38025e51e465f3860ed076e012af1af69d606c566ea->enter($__internal_d0501f6370b286dab4bdf38025e51e465f3860ed076e012af1af69d606c566ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        // line 82
        echo "                <header class=\"main-header\">
                    ";
        // line 83
        $this->displayBlock('avanzu_logo', $context, $blocks);
        // line 95
        echo "                    <!-- Header Navbar: style can be found in header.less -->
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <!-- Sidebar toggle button-->
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>
                        ";
        // line 101
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 102
            echo "                            <div class=\"navbar-custom-menu\">
                                <ul class=\"nav navbar-nav\">
                                    ";
            // line 104
            $this->displayBlock('avanzu_navbar', $context, $blocks);
            // line 110
            echo "                                </ul>
                            </div>
                        ";
        }
        // line 113
        echo "                    </nav>
                </header>
            ";
        
        $__internal_d0501f6370b286dab4bdf38025e51e465f3860ed076e012af1af69d606c566ea->leave($__internal_d0501f6370b286dab4bdf38025e51e465f3860ed076e012af1af69d606c566ea_prof);

    }

    // line 83
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_40c4252db2207684ea6c7407fd6d9e848ecf03fa794c5879e10c80e11aa3aebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c4252db2207684ea6c7407fd6d9e848ecf03fa794c5879e10c80e11aa3aebb->enter($__internal_40c4252db2207684ea6c7407fd6d9e848ecf03fa794c5879e10c80e11aa3aebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 84
        echo "                        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"logo\">
                            <!-- Add the class icon to your logo image or logo icon to add the margining -->
                            <span class=\"logo-mini\">
                                <!-- mini logo for sidebar mini 50x50 pixels -->
                                 <img style=\"width:25px;\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo-mini.png"), "html", null, true);
        echo "\"></img>
                            </span>
                            <span class=\"logo-lg\">
                                <img style=\"width:25px;\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo-mini.png"), "html", null, true);
        echo "\"></img>";
        $this->displayBlock("title", $context, $blocks);
        echo "
                            </span>
                        </a>
                    ";
        
        $__internal_40c4252db2207684ea6c7407fd6d9e848ecf03fa794c5879e10c80e11aa3aebb->leave($__internal_40c4252db2207684ea6c7407fd6d9e848ecf03fa794c5879e10c80e11aa3aebb_prof);

    }

    // line 104
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_80cc21e430a76f267be32dfd061e83887dc1c58dd650a11de9ce947c84b69f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80cc21e430a76f267be32dfd061e83887dc1c58dd650a11de9ce947c84b69f96->enter($__internal_80cc21e430a76f267be32dfd061e83887dc1c58dd650a11de9ce947c84b69f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

        // line 105
        echo "                                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:messages"));
        echo "
                                        ";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:notifications"));
        echo "
                                        ";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:tasks"));
        echo "
                                        ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Navbar:user"));
        echo "
                                    ";
        
        $__internal_80cc21e430a76f267be32dfd061e83887dc1c58dd650a11de9ce947c84b69f96->leave($__internal_80cc21e430a76f267be32dfd061e83887dc1c58dd650a11de9ce947c84b69f96_prof);

    }

    // line 121
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_482fecb8cf850d703fab9764bddf17f1f44b64110d28fe2884ddf82e538440c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_482fecb8cf850d703fab9764bddf17f1f44b64110d28fe2884ddf82e538440c6->enter($__internal_482fecb8cf850d703fab9764bddf17f1f44b64110d28fe2884ddf82e538440c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 122
        echo "                        ";
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 123
            echo "                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Sidebar:userPanel"));
            echo "
                            ";
            // line 124
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:searchForm"));
            echo "
                        ";
        }
        // line 126
        echo "                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:menu", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
        echo "
                    ";
        
        $__internal_482fecb8cf850d703fab9764bddf17f1f44b64110d28fe2884ddf82e538440c6->leave($__internal_482fecb8cf850d703fab9764bddf17f1f44b64110d28fe2884ddf82e538440c6_prof);

    }

    // line 137
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_2a54134d5f439be72a2e60b575439cb67fc006aa53ffe94be20cd837c2053f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a54134d5f439be72a2e60b575439cb67fc006aa53ffe94be20cd837c2053f23->enter($__internal_2a54134d5f439be72a2e60b575439cb67fc006aa53ffe94be20cd837c2053f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Page Title";
        
        $__internal_2a54134d5f439be72a2e60b575439cb67fc006aa53ffe94be20cd837c2053f23->leave($__internal_2a54134d5f439be72a2e60b575439cb67fc006aa53ffe94be20cd837c2053f23_prof);

    }

    // line 138
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_4a6fb39cf7240ed5e08da21ee738b7a26a2f4b451421678b5fd191e2ce015a97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a6fb39cf7240ed5e08da21ee738b7a26a2f4b451421678b5fd191e2ce015a97->enter($__internal_4a6fb39cf7240ed5e08da21ee738b7a26a2f4b451421678b5fd191e2ce015a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        
        $__internal_4a6fb39cf7240ed5e08da21ee738b7a26a2f4b451421678b5fd191e2ce015a97->leave($__internal_4a6fb39cf7240ed5e08da21ee738b7a26a2f4b451421678b5fd191e2ce015a97_prof);

    }

    // line 140
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_7912a7a37bbe8814d1d66e7c77ea2e7fbea04d0e02dfa389cb2ffb9695cb6642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7912a7a37bbe8814d1d66e7c77ea2e7fbea04d0e02dfa389cb2ffb9695cb6642->enter($__internal_7912a7a37bbe8814d1d66e7c77ea2e7fbea04d0e02dfa389cb2ffb9695cb6642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 141
        echo "                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
                    ";
        
        $__internal_7912a7a37bbe8814d1d66e7c77ea2e7fbea04d0e02dfa389cb2ffb9695cb6642->leave($__internal_7912a7a37bbe8814d1d66e7c77ea2e7fbea04d0e02dfa389cb2ffb9695cb6642_prof);

    }

    // line 232
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e96ff91c35f77c54ac99e036b2c3a09a5620b9b54a898c4431aae8c30c56a04b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96ff91c35f77c54ac99e036b2c3a09a5620b9b54a898c4431aae8c30c56a04b->enter($__internal_e96ff91c35f77c54ac99e036b2c3a09a5620b9b54a898c4431aae8c30c56a04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 233
        echo "
                        ";
        
        $__internal_e96ff91c35f77c54ac99e036b2c3a09a5620b9b54a898c4431aae8c30c56a04b->leave($__internal_e96ff91c35f77c54ac99e036b2c3a09a5620b9b54a898c4431aae8c30c56a04b_prof);

    }

    // line 240
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_3b3843a5735dcd335aa62b9b8e6f9e652f89f02361970377c22bf625ca72c45b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3843a5735dcd335aa62b9b8e6f9e652f89f02361970377c22bf625ca72c45b->enter($__internal_3b3843a5735dcd335aa62b9b8e6f9e652f89f02361970377c22bf625ca72c45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 241
        echo "                    <footer class=\"main-footer\">
                        <strong>Copyright &copy; ";
        // line 242
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"http://";
        echo twig_escape_filter($this->env, (isset($context["footer_url"]) ? $context["footer_url"] : $this->getContext($context, "footer_url")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        echo "
                                </footer>
                            ";
        
        $__internal_3b3843a5735dcd335aa62b9b8e6f9e652f89f02361970377c22bf625ca72c45b->leave($__internal_3b3843a5735dcd335aa62b9b8e6f9e652f89f02361970377c22bf625ca72c45b_prof);

    }

    // line 250
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5fd73e9af07723c22e5064f8cf54860cca822a6ca8a4777f81299cd6fcad9aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd73e9af07723c22e5064f8cf54860cca822a6ca8a4777f81299cd6fcad9aff->enter($__internal_5fd73e9af07723c22e5064f8cf54860cca822a6ca8a4777f81299cd6fcad9aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 251
        echo "
                                <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
                                <script>
                                    \$(document).ready(function () {
                                        if (\"";
        // line 255
        echo twig_escape_filter($this->env, (isset($context["msj"]) ? $context["msj"] : $this->getContext($context, "msj")), "html", null, true);
        echo "\" != \"\") {
                                            var suc = \"";
        // line 256
        echo twig_escape_filter($this->env, (isset($context["msj"]) ? $context["msj"] : $this->getContext($context, "msj")), "html", null, true);
        echo "\";
                                            var texto = '";
        // line 257
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
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/delete-registros.js"), "html", null, true);
        echo "\"></script>-->
                                <script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>

                                <script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>

                            ";
        
        $__internal_5fd73e9af07723c22e5064f8cf54860cca822a6ca8a4777f81299cd6fcad9aff->leave($__internal_5fd73e9af07723c22e5064f8cf54860cca822a6ca8a4777f81299cd6fcad9aff_prof);

    }

    // line 310
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_478cbcefd5ae68c0f2391e340886a78c2ff45cc39256b6d7d683e0fbf6282f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478cbcefd5ae68c0f2391e340886a78c2ff45cc39256b6d7d683e0fbf6282f14->enter($__internal_478cbcefd5ae68c0f2391e340886a78c2ff45cc39256b6d7d683e0fbf6282f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        // line 311
        echo "                            ";
        
        $__internal_478cbcefd5ae68c0f2391e340886a78c2ff45cc39256b6d7d683e0fbf6282f14->leave($__internal_478cbcefd5ae68c0f2391e340886a78c2ff45cc39256b6d7d683e0fbf6282f14_prof);

    }

    // line 313
    public function block_script_page($context, array $blocks = array())
    {
        $__internal_09dbfdec036547d0b64feddaa326ff1a683c8aa8e5b55ae9949d4c1d165a9c09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09dbfdec036547d0b64feddaa326ff1a683c8aa8e5b55ae9949d4c1d165a9c09->enter($__internal_09dbfdec036547d0b64feddaa326ff1a683c8aa8e5b55ae9949d4c1d165a9c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_page"));

        // line 314
        echo "
                            ";
        
        $__internal_09dbfdec036547d0b64feddaa326ff1a683c8aa8e5b55ae9949d4c1d165a9c09->leave($__internal_09dbfdec036547d0b64feddaa326ff1a683c8aa8e5b55ae9949d4c1d165a9c09_prof);

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
        return array (  676 => 314,  670 => 313,  663 => 311,  657 => 310,  647 => 305,  642 => 303,  638 => 302,  590 => 257,  586 => 256,  582 => 255,  576 => 252,  573 => 251,  567 => 250,  553 => 242,  550 => 241,  544 => 240,  536 => 233,  530 => 232,  520 => 141,  514 => 140,  503 => 138,  491 => 137,  481 => 126,  476 => 124,  471 => 123,  468 => 122,  462 => 121,  453 => 108,  449 => 107,  445 => 106,  440 => 105,  434 => 104,  421 => 91,  415 => 88,  407 => 84,  401 => 83,  392 => 113,  387 => 110,  385 => 104,  381 => 102,  379 => 101,  371 => 95,  369 => 83,  366 => 82,  360 => 81,  347 => 48,  341 => 47,  314 => 23,  310 => 22,  306 => 21,  302 => 20,  299 => 19,  293 => 18,  281 => 15,  271 => 316,  269 => 313,  266 => 312,  263 => 310,  260 => 308,  257 => 250,  251 => 245,  249 => 240,  242 => 235,  240 => 232,  235 => 229,  229 => 225,  226 => 224,  224 => 217,  221 => 216,  218 => 215,  216 => 214,  213 => 213,  210 => 212,  208 => 205,  206 => 204,  203 => 203,  200 => 202,  198 => 195,  195 => 194,  192 => 193,  190 => 185,  187 => 184,  184 => 183,  182 => 182,  179 => 181,  175 => 179,  171 => 169,  168 => 168,  165 => 167,  162 => 158,  159 => 157,  156 => 156,  154 => 155,  149 => 152,  147 => 150,  146 => 149,  145 => 148,  144 => 147,  141 => 146,  138 => 145,  136 => 144,  133 => 143,  131 => 140,  125 => 138,  123 => 137,  112 => 128,  110 => 121,  103 => 116,  101 => 81,  95 => 78,  70 => 55,  67 => 47,  62 => 43,  59 => 18,  54 => 15,  39 => 2,  37 => 1,);
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
