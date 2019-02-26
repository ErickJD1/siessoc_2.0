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
        $__internal_309c07f186f1d1308e11c595ef698d8bb897adf01310c33dae88e00afb259839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309c07f186f1d1308e11c595ef698d8bb897adf01310c33dae88e00afb259839->enter($__internal_309c07f186f1d1308e11c595ef698d8bb897adf01310c33dae88e00afb259839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/base-layout.html.twig"));

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
        // line 52
        echo "


        ";
        // line 56
        echo "        ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 66
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
        // line 89
        echo twig_escape_filter($this->env, ((array_key_exists("admin_skin", $context)) ? (_twig_default_filter((isset($context["admin_skin"]) ? $context["admin_skin"] : $this->getContext($context, "admin_skin")), "skin-blue")) : ("skin-blue")), "html", null, true);
        echo " fixed sidebar-mini\">

        <div class=\"wrapper\">
            ";
        // line 92
        $this->displayBlock('avanzu_admin_header', $context, $blocks);
        // line 127
        echo "
            <!-- Left side column. contains the logo and sidebar -->
            <aside class=\"main-sidebar sidebar-offcanvas\">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class=\"sidebar\">
                    ";
        // line 132
        $this->displayBlock('avanzu_sidebar', $context, $blocks);
        // line 138
        echo "                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <section class=\"content-header\">
                    <h1>
                        ";
        // line 147
        $this->displayBlock('page_title', $context, $blocks);
        // line 148
        echo "                        <small>";
        $this->displayBlock('page_subtitle', $context, $blocks);
        echo "</small>
                    </h1>
                    ";
        // line 150
        $this->displayBlock('avanzu_breadcrumb', $context, $blocks);
        // line 153
        echo "                </section>
                ";
        // line 154
        $context["msj"] = "";
        // line 155
        echo "                ";
        $context["txt"] = "";
        // line 156
        echo "                <!-- Alert Boxes -->
                ";
        // line 157
        if (((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method") || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 158
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 159
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method")) || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 160
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "warning"), "method"))) {
            // line 162
            echo "                <section class=\"flash-messages content-header\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            ";
            // line 165
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
                // line 166
                echo "                                ";
                $context["msj"] = 1;
                // line 167
                echo "                                ";
                $context["txt"] = twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"), ", ");
                // line 168
                echo "
                                ";
                // line 177
                echo "
                                ";
                // line 186
                echo "
                            ";
            }
            // line 188
            echo "
                            ";
            // line 189
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
                // line 190
                echo "                                ";
                $context["msj"] = 2;
                // line 191
                echo "                                ";
                $context["txt"] = twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"), ", ");
                // line 192
                echo "                                ";
                // line 199
                echo "            
                                ";
                // line 207
                echo "                            ";
            }
            // line 208
            echo "
                            ";
            // line 209
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method")) {
                // line 210
                echo "                                ";
                // line 217
                echo "                            ";
            }
            // line 218
            echo "
                            ";
            // line 219
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "warning"), "method")) {
                // line 220
                echo "                                ";
                $context["msj"] = 3;
                // line 221
                echo "                                ";
                $context["txt"] = twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"), ", ");
                // line 222
                echo "                                ";
                // line 229
                echo "                            ";
            }
            // line 230
            echo "                        </div>
                    </div>
                </section>
                ";
        }
        // line 234
        echo "
                    <!-- Main content -->
                    <section class=\"content\">
                        ";
        // line 237
        $this->displayBlock('page_content', $context, $blocks);
        // line 240
        echo "                    </section>
                    <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->

                ";
        // line 245
        $this->displayBlock('avanzu_admin_footer', $context, $blocks);
        // line 250
        echo "
                            </div>
                            <!-- ./wrapper -->

                            ";
        // line 255
        echo "                            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 333
        echo "
                            ";
        // line 335
        echo "                            ";
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 337
        echo "
                            ";
        // line 338
        $this->displayBlock('script_page', $context, $blocks);
        // line 341
        echo "
                            </body>
                            </html>
";
        
        $__internal_309c07f186f1d1308e11c595ef698d8bb897adf01310c33dae88e00afb259839->leave($__internal_309c07f186f1d1308e11c595ef698d8bb897adf01310c33dae88e00afb259839_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_af25be54a8f3f129b4b4c11f4ac4b73184fccfea820509b4f9aee05943c34450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af25be54a8f3f129b4b4c11f4ac4b73184fccfea820509b4f9aee05943c34450->enter($__internal_af25be54a8f3f129b4b4c11f4ac4b73184fccfea820509b4f9aee05943c34450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_af25be54a8f3f129b4b4c11f4ac4b73184fccfea820509b4f9aee05943c34450->leave($__internal_af25be54a8f3f129b4b4c11f4ac4b73184fccfea820509b4f9aee05943c34450_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_56f686236fef5c44a021ad0e0ef66241c1654a032e694cc8b19dc554f40bae04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f686236fef5c44a021ad0e0ef66241c1654a032e694cc8b19dc554f40bae04->enter($__internal_56f686236fef5c44a021ad0e0ef66241c1654a032e694cc8b19dc554f40bae04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_56f686236fef5c44a021ad0e0ef66241c1654a032e694cc8b19dc554f40bae04->leave($__internal_56f686236fef5c44a021ad0e0ef66241c1654a032e694cc8b19dc554f40bae04_prof);

    }

    // line 56
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_46f0bfc2cad42487a1c0779f79b352d6c4a1ce71b5fed42879cee1a8164ea40e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f0bfc2cad42487a1c0779f79b352d6c4a1ce71b5fed42879cee1a8164ea40e->enter($__internal_46f0bfc2cad42487a1c0779f79b352d6c4a1ce71b5fed42879cee1a8164ea40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 57
        echo "            <!--[if lt IE 9]>

            <![endif]-->
            <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.inputmask.bundle.min.js"), "html", null, true);
        echo "\"></script>


        ";
        
        $__internal_46f0bfc2cad42487a1c0779f79b352d6c4a1ce71b5fed42879cee1a8164ea40e->leave($__internal_46f0bfc2cad42487a1c0779f79b352d6c4a1ce71b5fed42879cee1a8164ea40e_prof);

    }

    // line 92
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_d7c4c52f2e5d5b258f8b4c33003848ddef72df5a38f3b2b37ac90d8c14e204af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c4c52f2e5d5b258f8b4c33003848ddef72df5a38f3b2b37ac90d8c14e204af->enter($__internal_d7c4c52f2e5d5b258f8b4c33003848ddef72df5a38f3b2b37ac90d8c14e204af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        // line 93
        echo "                <header class=\"main-header\">
                    ";
        // line 94
        $this->displayBlock('avanzu_logo', $context, $blocks);
        // line 106
        echo "                    <!-- Header Navbar: style can be found in header.less -->
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <!-- Sidebar toggle button-->
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>
                        ";
        // line 112
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 113
            echo "                            <div class=\"navbar-custom-menu\">
                                <ul class=\"nav navbar-nav\">
                                    ";
            // line 115
            $this->displayBlock('avanzu_navbar', $context, $blocks);
            // line 121
            echo "                                </ul>
                            </div>
                        ";
        }
        // line 124
        echo "                    </nav>
                </header>
            ";
        
        $__internal_d7c4c52f2e5d5b258f8b4c33003848ddef72df5a38f3b2b37ac90d8c14e204af->leave($__internal_d7c4c52f2e5d5b258f8b4c33003848ddef72df5a38f3b2b37ac90d8c14e204af_prof);

    }

    // line 94
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_4b37a168a4a9f4849dd340e5f3dc079470f7773ba6a2e132dbd66d8b33491bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b37a168a4a9f4849dd340e5f3dc079470f7773ba6a2e132dbd66d8b33491bd4->enter($__internal_4b37a168a4a9f4849dd340e5f3dc079470f7773ba6a2e132dbd66d8b33491bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 95
        echo "                        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"logo\">
                            <!-- Add the class icon to your logo image or logo icon to add the margining -->
                            <span class=\"logo-mini\">
                                <!-- mini logo for sidebar mini 50x50 pixels -->
                                <img style=\"width:25px;\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo-mini.png"), "html", null, true);
        echo "\"></img>
                            </span>
                            <span class=\"logo-lg\">
                                <img style=\"width:25px;\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo-mini.png"), "html", null, true);
        echo "\"></img>";
        $this->displayBlock("title", $context, $blocks);
        echo "
                            </span>
                        </a>
                    ";
        
        $__internal_4b37a168a4a9f4849dd340e5f3dc079470f7773ba6a2e132dbd66d8b33491bd4->leave($__internal_4b37a168a4a9f4849dd340e5f3dc079470f7773ba6a2e132dbd66d8b33491bd4_prof);

    }

    // line 115
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_ab0a6d416dc7c19e81396b9659acb1348bd82eb562f16cbd4fb7adfa8e7e6981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0a6d416dc7c19e81396b9659acb1348bd82eb562f16cbd4fb7adfa8e7e6981->enter($__internal_ab0a6d416dc7c19e81396b9659acb1348bd82eb562f16cbd4fb7adfa8e7e6981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

        // line 116
        echo "                                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:messages"));
        echo "
                                        ";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:notifications"));
        echo "
                                        ";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:tasks"));
        echo "
                                        ";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Navbar:user"));
        echo "
                                    ";
        
        $__internal_ab0a6d416dc7c19e81396b9659acb1348bd82eb562f16cbd4fb7adfa8e7e6981->leave($__internal_ab0a6d416dc7c19e81396b9659acb1348bd82eb562f16cbd4fb7adfa8e7e6981_prof);

    }

    // line 132
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_ef9601f123f57f07a887f7ac932708f57f3eb58c5bd0ba76208c65b697dee1a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9601f123f57f07a887f7ac932708f57f3eb58c5bd0ba76208c65b697dee1a9->enter($__internal_ef9601f123f57f07a887f7ac932708f57f3eb58c5bd0ba76208c65b697dee1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 133
        echo "                        ";
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 134
            echo "                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Sidebar:userPanel"));
            echo "
                        ";
        }
        // line 136
        echo "                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:menu", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
        echo "
                    ";
        
        $__internal_ef9601f123f57f07a887f7ac932708f57f3eb58c5bd0ba76208c65b697dee1a9->leave($__internal_ef9601f123f57f07a887f7ac932708f57f3eb58c5bd0ba76208c65b697dee1a9_prof);

    }

    // line 147
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_627ceaa5c9f6d29cd096048a61fa6070d0220a11bb13a405b1ca545d37ff154a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627ceaa5c9f6d29cd096048a61fa6070d0220a11bb13a405b1ca545d37ff154a->enter($__internal_627ceaa5c9f6d29cd096048a61fa6070d0220a11bb13a405b1ca545d37ff154a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Page Title";
        
        $__internal_627ceaa5c9f6d29cd096048a61fa6070d0220a11bb13a405b1ca545d37ff154a->leave($__internal_627ceaa5c9f6d29cd096048a61fa6070d0220a11bb13a405b1ca545d37ff154a_prof);

    }

    // line 148
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_1d1bf64354e11cde1d41514792a1e2243e443ed5e9abdbeb43b4f07e33e65572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1bf64354e11cde1d41514792a1e2243e443ed5e9abdbeb43b4f07e33e65572->enter($__internal_1d1bf64354e11cde1d41514792a1e2243e443ed5e9abdbeb43b4f07e33e65572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        
        $__internal_1d1bf64354e11cde1d41514792a1e2243e443ed5e9abdbeb43b4f07e33e65572->leave($__internal_1d1bf64354e11cde1d41514792a1e2243e443ed5e9abdbeb43b4f07e33e65572_prof);

    }

    // line 150
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_49898a589267ced3ddced8a3157ca83d1b1e3a5cbc25448f489fa12b117761cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49898a589267ced3ddced8a3157ca83d1b1e3a5cbc25448f489fa12b117761cf->enter($__internal_49898a589267ced3ddced8a3157ca83d1b1e3a5cbc25448f489fa12b117761cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 151
        echo "                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
                    ";
        
        $__internal_49898a589267ced3ddced8a3157ca83d1b1e3a5cbc25448f489fa12b117761cf->leave($__internal_49898a589267ced3ddced8a3157ca83d1b1e3a5cbc25448f489fa12b117761cf_prof);

    }

    // line 237
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_38591b8e4fbf7151924b6d1b5647ea366105271d8306c4f391326f1674210cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38591b8e4fbf7151924b6d1b5647ea366105271d8306c4f391326f1674210cc4->enter($__internal_38591b8e4fbf7151924b6d1b5647ea366105271d8306c4f391326f1674210cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 238
        echo "
                        ";
        
        $__internal_38591b8e4fbf7151924b6d1b5647ea366105271d8306c4f391326f1674210cc4->leave($__internal_38591b8e4fbf7151924b6d1b5647ea366105271d8306c4f391326f1674210cc4_prof);

    }

    // line 245
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_c6ab77ea4e4a72124e98089c1068729ab433be77e8cfd2d8a586639cce030919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ab77ea4e4a72124e98089c1068729ab433be77e8cfd2d8a586639cce030919->enter($__internal_c6ab77ea4e4a72124e98089c1068729ab433be77e8cfd2d8a586639cce030919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 246
        echo "                    <footer class=\"main-footer\">
                        <strong>Copyright &copy; ";
        // line 247
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"http://";
        echo twig_escape_filter($this->env, (isset($context["footer_url"]) ? $context["footer_url"] : $this->getContext($context, "footer_url")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        echo "
                                </footer>
                            ";
        
        $__internal_c6ab77ea4e4a72124e98089c1068729ab433be77e8cfd2d8a586639cce030919->leave($__internal_c6ab77ea4e4a72124e98089c1068729ab433be77e8cfd2d8a586639cce030919_prof);

    }

    // line 255
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7db5f3ad31c931d4415b5dbdc309892bd027f320bb836d04b3c701bc7d5bfb56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db5f3ad31c931d4415b5dbdc309892bd027f320bb836d04b3c701bc7d5bfb56->enter($__internal_7db5f3ad31c931d4415b5dbdc309892bd027f320bb836d04b3c701bc7d5bfb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 256
        echo "
                                <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
                                <script>
                                    \$(document).ready(function () {
                                        if (\"";
        // line 260
        echo twig_escape_filter($this->env, (isset($context["msj"]) ? $context["msj"] : $this->getContext($context, "msj")), "html", null, true);
        echo "\" != \"\") {
                                            var suc = \"";
        // line 261
        echo twig_escape_filter($this->env, (isset($context["msj"]) ? $context["msj"] : $this->getContext($context, "msj")), "html", null, true);
        echo "\";
                                            var texto = '";
        // line 262
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
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>

                                <script src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>

                            ";
        
        $__internal_7db5f3ad31c931d4415b5dbdc309892bd027f320bb836d04b3c701bc7d5bfb56->leave($__internal_7db5f3ad31c931d4415b5dbdc309892bd027f320bb836d04b3c701bc7d5bfb56_prof);

    }

    // line 335
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_a95c72a0dfe9a837da2675ef958e4281312aa4dc607bfef9d16cdbaf765673ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a95c72a0dfe9a837da2675ef958e4281312aa4dc607bfef9d16cdbaf765673ec->enter($__internal_a95c72a0dfe9a837da2675ef958e4281312aa4dc607bfef9d16cdbaf765673ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        // line 336
        echo "                            ";
        
        $__internal_a95c72a0dfe9a837da2675ef958e4281312aa4dc607bfef9d16cdbaf765673ec->leave($__internal_a95c72a0dfe9a837da2675ef958e4281312aa4dc607bfef9d16cdbaf765673ec_prof);

    }

    // line 338
    public function block_script_page($context, array $blocks = array())
    {
        $__internal_fdc4393b032d5a5d2567431ee69bb77f915dba151cb5fe6bb00a7d7790e9c4bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc4393b032d5a5d2567431ee69bb77f915dba151cb5fe6bb00a7d7790e9c4bd->enter($__internal_fdc4393b032d5a5d2567431ee69bb77f915dba151cb5fe6bb00a7d7790e9c4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_page"));

        // line 339
        echo "
                            ";
        
        $__internal_fdc4393b032d5a5d2567431ee69bb77f915dba151cb5fe6bb00a7d7790e9c4bd->leave($__internal_fdc4393b032d5a5d2567431ee69bb77f915dba151cb5fe6bb00a7d7790e9c4bd_prof);

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
        return array (  697 => 339,  691 => 338,  684 => 336,  678 => 335,  668 => 330,  663 => 328,  594 => 262,  590 => 261,  586 => 260,  580 => 257,  577 => 256,  571 => 255,  557 => 247,  554 => 246,  548 => 245,  540 => 238,  534 => 237,  524 => 151,  518 => 150,  507 => 148,  495 => 147,  485 => 136,  479 => 134,  476 => 133,  470 => 132,  461 => 119,  457 => 118,  453 => 117,  448 => 116,  442 => 115,  429 => 102,  423 => 99,  415 => 95,  409 => 94,  400 => 124,  395 => 121,  393 => 115,  389 => 113,  387 => 112,  379 => 106,  377 => 94,  374 => 93,  368 => 92,  357 => 62,  353 => 61,  349 => 60,  344 => 57,  338 => 56,  302 => 23,  298 => 22,  294 => 21,  290 => 20,  287 => 19,  281 => 18,  269 => 15,  259 => 341,  257 => 338,  254 => 337,  251 => 335,  248 => 333,  245 => 255,  239 => 250,  237 => 245,  230 => 240,  228 => 237,  223 => 234,  217 => 230,  214 => 229,  212 => 222,  209 => 221,  206 => 220,  204 => 219,  201 => 218,  198 => 217,  196 => 210,  194 => 209,  191 => 208,  188 => 207,  185 => 199,  183 => 192,  180 => 191,  177 => 190,  175 => 189,  172 => 188,  168 => 186,  165 => 177,  162 => 168,  159 => 167,  156 => 166,  154 => 165,  149 => 162,  147 => 160,  146 => 159,  145 => 158,  144 => 157,  141 => 156,  138 => 155,  136 => 154,  133 => 153,  131 => 150,  125 => 148,  123 => 147,  112 => 138,  110 => 132,  103 => 127,  101 => 92,  95 => 89,  70 => 66,  67 => 56,  62 => 52,  59 => 18,  54 => 15,  39 => 2,  37 => 1,);
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
            <script src=\"{{ asset('js/jquery.inputmask.bundle.min.js') }}\"></script>


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
