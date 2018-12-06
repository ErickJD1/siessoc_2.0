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
            'script_page' => array($this, 'block_script_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12b04b28ac312b3ebed27c8fc46dd6918ea5a933283d4615a3aab05c9da27406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b04b28ac312b3ebed27c8fc46dd6918ea5a933283d4615a3aab05c9da27406->enter($__internal_12b04b28ac312b3ebed27c8fc46dd6918ea5a933283d4615a3aab05c9da27406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":layout:base-layout.html.twig"));

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
                echo "                             
                                ";
                // line 176
                echo "
                            ";
            }
            // line 178
            echo "
                            ";
            // line 179
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
                // line 180
                echo "                                ";
                $context["msj"] = 2;
                // line 181
                echo "                                ";
                $context["txt"] = twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"), ", ");
                // line 182
                echo "                                ";
                // line 189
                echo "            
                                ";
                // line 197
                echo "                            ";
            }
            // line 198
            echo "
                            ";
            // line 199
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method")) {
                // line 200
                echo "                                ";
                // line 207
                echo "                            ";
            }
            // line 208
            echo "
                            ";
            // line 209
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "warning"), "method")) {
                // line 210
                echo "                                ";
                $context["msj"] = 3;
                // line 211
                echo "                                ";
                $context["txt"] = twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"), ", ");
                // line 212
                echo "                                ";
                // line 219
                echo "                            ";
            }
            // line 220
            echo "                        </div>
                    </div>
                </section>
                ";
        }
        // line 224
        echo "
                    <!-- Main content -->
                    <section class=\"content\">
                        ";
        // line 227
        $this->displayBlock('page_content', $context, $blocks);
        // line 230
        echo "                    </section>
                    <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->

                ";
        // line 235
        $this->displayBlock('avanzu_admin_footer', $context, $blocks);
        // line 240
        echo "
                            </div>
                            <!-- ./wrapper -->

                            ";
        // line 245
        echo "                            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 303
        echo "
                            ";
        // line 305
        echo "                            ";
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 307
        echo "
                            ";
        // line 308
        $this->displayBlock('script_page', $context, $blocks);
        // line 311
        echo "
                            </body>
                            </html>
";
        
        $__internal_12b04b28ac312b3ebed27c8fc46dd6918ea5a933283d4615a3aab05c9da27406->leave($__internal_12b04b28ac312b3ebed27c8fc46dd6918ea5a933283d4615a3aab05c9da27406_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfb0fffa80a0df62eafe6e1379583de3327bc8b64322e0444e6cc9cad606703c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb0fffa80a0df62eafe6e1379583de3327bc8b64322e0444e6cc9cad606703c->enter($__internal_dfb0fffa80a0df62eafe6e1379583de3327bc8b64322e0444e6cc9cad606703c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_dfb0fffa80a0df62eafe6e1379583de3327bc8b64322e0444e6cc9cad606703c->leave($__internal_dfb0fffa80a0df62eafe6e1379583de3327bc8b64322e0444e6cc9cad606703c_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_27c95f81c636576fae6491fa7128788f9b75f1664f16a9968effff00ea81a87d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c95f81c636576fae6491fa7128788f9b75f1664f16a9968effff00ea81a87d->enter($__internal_27c95f81c636576fae6491fa7128788f9b75f1664f16a9968effff00ea81a87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_27c95f81c636576fae6491fa7128788f9b75f1664f16a9968effff00ea81a87d->leave($__internal_27c95f81c636576fae6491fa7128788f9b75f1664f16a9968effff00ea81a87d_prof);

    }

    // line 47
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_a72fe1ad7918acadb7006aa372fc873b49ca139552da1cc104336251d913cefe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72fe1ad7918acadb7006aa372fc873b49ca139552da1cc104336251d913cefe->enter($__internal_a72fe1ad7918acadb7006aa372fc873b49ca139552da1cc104336251d913cefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 48
        echo "            <!--[if lt IE 9]>

            <![endif]-->



        ";
        
        $__internal_a72fe1ad7918acadb7006aa372fc873b49ca139552da1cc104336251d913cefe->leave($__internal_a72fe1ad7918acadb7006aa372fc873b49ca139552da1cc104336251d913cefe_prof);

    }

    // line 81
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_163cf38fd7d68d2617f1ec36c54bb3140c98cb68d571ecef84972905298b21a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163cf38fd7d68d2617f1ec36c54bb3140c98cb68d571ecef84972905298b21a9->enter($__internal_163cf38fd7d68d2617f1ec36c54bb3140c98cb68d571ecef84972905298b21a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

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
        
        $__internal_163cf38fd7d68d2617f1ec36c54bb3140c98cb68d571ecef84972905298b21a9->leave($__internal_163cf38fd7d68d2617f1ec36c54bb3140c98cb68d571ecef84972905298b21a9_prof);

    }

    // line 83
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_558a58ae9e41130afe95262a3cb19b31378a47018de8d9d77c844069af7e9fb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_558a58ae9e41130afe95262a3cb19b31378a47018de8d9d77c844069af7e9fb9->enter($__internal_558a58ae9e41130afe95262a3cb19b31378a47018de8d9d77c844069af7e9fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

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
        
        $__internal_558a58ae9e41130afe95262a3cb19b31378a47018de8d9d77c844069af7e9fb9->leave($__internal_558a58ae9e41130afe95262a3cb19b31378a47018de8d9d77c844069af7e9fb9_prof);

    }

    // line 104
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_34aa52a8f4f1e9c68899469e98e10a1fdf98bd907ca353b9ffc81de4b9e0938c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34aa52a8f4f1e9c68899469e98e10a1fdf98bd907ca353b9ffc81de4b9e0938c->enter($__internal_34aa52a8f4f1e9c68899469e98e10a1fdf98bd907ca353b9ffc81de4b9e0938c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

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
        
        $__internal_34aa52a8f4f1e9c68899469e98e10a1fdf98bd907ca353b9ffc81de4b9e0938c->leave($__internal_34aa52a8f4f1e9c68899469e98e10a1fdf98bd907ca353b9ffc81de4b9e0938c_prof);

    }

    // line 121
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_eaf0ea41cd7a2a7fd9c6d806f3c8d7ab0e3b61b30095114b9b112d1a0e412cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf0ea41cd7a2a7fd9c6d806f3c8d7ab0e3b61b30095114b9b112d1a0e412cf5->enter($__internal_eaf0ea41cd7a2a7fd9c6d806f3c8d7ab0e3b61b30095114b9b112d1a0e412cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

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
        
        $__internal_eaf0ea41cd7a2a7fd9c6d806f3c8d7ab0e3b61b30095114b9b112d1a0e412cf5->leave($__internal_eaf0ea41cd7a2a7fd9c6d806f3c8d7ab0e3b61b30095114b9b112d1a0e412cf5_prof);

    }

    // line 137
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_bf41c01bea8e2810a994714c90ab57c11ddfe404e1a457e5df4b0a0bd2806d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf41c01bea8e2810a994714c90ab57c11ddfe404e1a457e5df4b0a0bd2806d20->enter($__internal_bf41c01bea8e2810a994714c90ab57c11ddfe404e1a457e5df4b0a0bd2806d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Page Title";
        
        $__internal_bf41c01bea8e2810a994714c90ab57c11ddfe404e1a457e5df4b0a0bd2806d20->leave($__internal_bf41c01bea8e2810a994714c90ab57c11ddfe404e1a457e5df4b0a0bd2806d20_prof);

    }

    // line 138
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_bea6d865bf3a15ba3044d8b50ce0a559cbb5f83a831138897e2a5ae35f55ce9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea6d865bf3a15ba3044d8b50ce0a559cbb5f83a831138897e2a5ae35f55ce9d->enter($__internal_bea6d865bf3a15ba3044d8b50ce0a559cbb5f83a831138897e2a5ae35f55ce9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        
        $__internal_bea6d865bf3a15ba3044d8b50ce0a559cbb5f83a831138897e2a5ae35f55ce9d->leave($__internal_bea6d865bf3a15ba3044d8b50ce0a559cbb5f83a831138897e2a5ae35f55ce9d_prof);

    }

    // line 140
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_084a6bf9bfe345f7b10abc0f16c57c118690ec19320d3718967fde185b5d6f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_084a6bf9bfe345f7b10abc0f16c57c118690ec19320d3718967fde185b5d6f43->enter($__internal_084a6bf9bfe345f7b10abc0f16c57c118690ec19320d3718967fde185b5d6f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 141
        echo "                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
                    ";
        
        $__internal_084a6bf9bfe345f7b10abc0f16c57c118690ec19320d3718967fde185b5d6f43->leave($__internal_084a6bf9bfe345f7b10abc0f16c57c118690ec19320d3718967fde185b5d6f43_prof);

    }

    // line 227
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_84d10d03a972f6649bb41fd5dad01daeb95619fac860d5c18a82bdb04c6107fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d10d03a972f6649bb41fd5dad01daeb95619fac860d5c18a82bdb04c6107fe->enter($__internal_84d10d03a972f6649bb41fd5dad01daeb95619fac860d5c18a82bdb04c6107fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 228
        echo "
                        ";
        
        $__internal_84d10d03a972f6649bb41fd5dad01daeb95619fac860d5c18a82bdb04c6107fe->leave($__internal_84d10d03a972f6649bb41fd5dad01daeb95619fac860d5c18a82bdb04c6107fe_prof);

    }

    // line 235
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_524c63c049eb63fa647a306e2ca6a0cc61841cf9a0ac0db92c71177cfcd2da91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_524c63c049eb63fa647a306e2ca6a0cc61841cf9a0ac0db92c71177cfcd2da91->enter($__internal_524c63c049eb63fa647a306e2ca6a0cc61841cf9a0ac0db92c71177cfcd2da91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 236
        echo "                    <footer class=\"main-footer\">
                        <strong>Copyright &copy; ";
        // line 237
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"http://";
        echo twig_escape_filter($this->env, (isset($context["footer_url"]) ? $context["footer_url"] : $this->getContext($context, "footer_url")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        echo "
                                </footer>
                            ";
        
        $__internal_524c63c049eb63fa647a306e2ca6a0cc61841cf9a0ac0db92c71177cfcd2da91->leave($__internal_524c63c049eb63fa647a306e2ca6a0cc61841cf9a0ac0db92c71177cfcd2da91_prof);

    }

    // line 245
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a4ee1c00e92ae4411950b806d43d302e47e300b4e5b20a30988622826ab7b8f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ee1c00e92ae4411950b806d43d302e47e300b4e5b20a30988622826ab7b8f9->enter($__internal_a4ee1c00e92ae4411950b806d43d302e47e300b4e5b20a30988622826ab7b8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 246
        echo "
                                <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
                                <script>
                                    \$(document).ready(function () {
                                        if (\"";
        // line 250
        echo twig_escape_filter($this->env, (isset($context["msj"]) ? $context["msj"] : $this->getContext($context, "msj")), "html", null, true);
        echo "\" != \"\") {
                                            var suc = \"";
        // line 251
        echo twig_escape_filter($this->env, (isset($context["msj"]) ? $context["msj"] : $this->getContext($context, "msj")), "html", null, true);
        echo "\";
                                            var texto = '";
        // line 252
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
                             
                                <script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>

                                <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>

                            ";
        
        $__internal_a4ee1c00e92ae4411950b806d43d302e47e300b4e5b20a30988622826ab7b8f9->leave($__internal_a4ee1c00e92ae4411950b806d43d302e47e300b4e5b20a30988622826ab7b8f9_prof);

    }

    // line 305
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_50a1f231067dd014cefa21bc0caaea1907a7353143d0d601d1a3acdc756676d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a1f231067dd014cefa21bc0caaea1907a7353143d0d601d1a3acdc756676d2->enter($__internal_50a1f231067dd014cefa21bc0caaea1907a7353143d0d601d1a3acdc756676d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        // line 306
        echo "                            ";
        
        $__internal_50a1f231067dd014cefa21bc0caaea1907a7353143d0d601d1a3acdc756676d2->leave($__internal_50a1f231067dd014cefa21bc0caaea1907a7353143d0d601d1a3acdc756676d2_prof);

    }

    // line 308
    public function block_script_page($context, array $blocks = array())
    {
        $__internal_0a72961491e92e9fac1b1bdc5a7d968a9ce9de253089c4ed3976805d3b57a2fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a72961491e92e9fac1b1bdc5a7d968a9ce9de253089c4ed3976805d3b57a2fe->enter($__internal_0a72961491e92e9fac1b1bdc5a7d968a9ce9de253089c4ed3976805d3b57a2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_page"));

        // line 309
        echo "
                            ";
        
        $__internal_0a72961491e92e9fac1b1bdc5a7d968a9ce9de253089c4ed3976805d3b57a2fe->leave($__internal_0a72961491e92e9fac1b1bdc5a7d968a9ce9de253089c4ed3976805d3b57a2fe_prof);

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
        return array (  661 => 309,  655 => 308,  648 => 306,  642 => 305,  632 => 300,  627 => 298,  578 => 252,  574 => 251,  570 => 250,  564 => 247,  561 => 246,  555 => 245,  541 => 237,  538 => 236,  532 => 235,  524 => 228,  518 => 227,  508 => 141,  502 => 140,  491 => 138,  479 => 137,  469 => 126,  464 => 124,  459 => 123,  456 => 122,  450 => 121,  441 => 108,  437 => 107,  433 => 106,  428 => 105,  422 => 104,  409 => 91,  403 => 88,  395 => 84,  389 => 83,  380 => 113,  375 => 110,  373 => 104,  369 => 102,  367 => 101,  359 => 95,  357 => 83,  354 => 82,  348 => 81,  335 => 48,  329 => 47,  302 => 23,  298 => 22,  294 => 21,  290 => 20,  287 => 19,  281 => 18,  269 => 15,  259 => 311,  257 => 308,  254 => 307,  251 => 305,  248 => 303,  245 => 245,  239 => 240,  237 => 235,  230 => 230,  228 => 227,  223 => 224,  217 => 220,  214 => 219,  212 => 212,  209 => 211,  206 => 210,  204 => 209,  201 => 208,  198 => 207,  196 => 200,  194 => 199,  191 => 198,  188 => 197,  185 => 189,  183 => 182,  180 => 181,  177 => 180,  175 => 179,  172 => 178,  168 => 176,  165 => 167,  162 => 158,  159 => 157,  156 => 156,  154 => 155,  149 => 152,  147 => 150,  146 => 149,  145 => 148,  144 => 147,  141 => 146,  138 => 145,  136 => 144,  133 => 143,  131 => 140,  125 => 138,  123 => 137,  112 => 128,  110 => 121,  103 => 116,  101 => 81,  95 => 78,  70 => 55,  67 => 47,  62 => 43,  59 => 18,  54 => 15,  39 => 2,  37 => 1,);
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
", ":layout:base-layout.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/layout/base-layout.html.twig");
    }
}
