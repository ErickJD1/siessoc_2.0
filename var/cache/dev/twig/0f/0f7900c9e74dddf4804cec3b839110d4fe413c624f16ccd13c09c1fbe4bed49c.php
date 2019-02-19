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
        $__internal_ae7fe27a04488510b256c21319a34c8e78338cb744b0b533d31849a8529fdb3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae7fe27a04488510b256c21319a34c8e78338cb744b0b533d31849a8529fdb3f->enter($__internal_ae7fe27a04488510b256c21319a34c8e78338cb744b0b533d31849a8529fdb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/base-layout.html.twig"));

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
        
        $__internal_ae7fe27a04488510b256c21319a34c8e78338cb744b0b533d31849a8529fdb3f->leave($__internal_ae7fe27a04488510b256c21319a34c8e78338cb744b0b533d31849a8529fdb3f_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_a34606b620c032a8302634d53fcfc6bdf2a6cebda659e9efabd023a52cce5133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a34606b620c032a8302634d53fcfc6bdf2a6cebda659e9efabd023a52cce5133->enter($__internal_a34606b620c032a8302634d53fcfc6bdf2a6cebda659e9efabd023a52cce5133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_a34606b620c032a8302634d53fcfc6bdf2a6cebda659e9efabd023a52cce5133->leave($__internal_a34606b620c032a8302634d53fcfc6bdf2a6cebda659e9efabd023a52cce5133_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5b0be3829809c3e08f6605910d2b61fcc724920b8b07143a1327cb32c02c09b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b0be3829809c3e08f6605910d2b61fcc724920b8b07143a1327cb32c02c09b0->enter($__internal_5b0be3829809c3e08f6605910d2b61fcc724920b8b07143a1327cb32c02c09b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5b0be3829809c3e08f6605910d2b61fcc724920b8b07143a1327cb32c02c09b0->leave($__internal_5b0be3829809c3e08f6605910d2b61fcc724920b8b07143a1327cb32c02c09b0_prof);

    }

    // line 56
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_effcae2526268699643f0ed92caf9f7df3b6a24cc429349207b0d2fa9eba359f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_effcae2526268699643f0ed92caf9f7df3b6a24cc429349207b0d2fa9eba359f->enter($__internal_effcae2526268699643f0ed92caf9f7df3b6a24cc429349207b0d2fa9eba359f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

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
        
        $__internal_effcae2526268699643f0ed92caf9f7df3b6a24cc429349207b0d2fa9eba359f->leave($__internal_effcae2526268699643f0ed92caf9f7df3b6a24cc429349207b0d2fa9eba359f_prof);

    }

    // line 92
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_a3c5b9fe0ae18c44e8b72c8a839d03d093969c24d3f80162147e82710f9f4b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c5b9fe0ae18c44e8b72c8a839d03d093969c24d3f80162147e82710f9f4b12->enter($__internal_a3c5b9fe0ae18c44e8b72c8a839d03d093969c24d3f80162147e82710f9f4b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

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
        
        $__internal_a3c5b9fe0ae18c44e8b72c8a839d03d093969c24d3f80162147e82710f9f4b12->leave($__internal_a3c5b9fe0ae18c44e8b72c8a839d03d093969c24d3f80162147e82710f9f4b12_prof);

    }

    // line 94
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_bde49a0ad74b73e9e0d889e95c95e8b22145e4b11ab0fd92a165314c735bc7ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde49a0ad74b73e9e0d889e95c95e8b22145e4b11ab0fd92a165314c735bc7ef->enter($__internal_bde49a0ad74b73e9e0d889e95c95e8b22145e4b11ab0fd92a165314c735bc7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

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
        
        $__internal_bde49a0ad74b73e9e0d889e95c95e8b22145e4b11ab0fd92a165314c735bc7ef->leave($__internal_bde49a0ad74b73e9e0d889e95c95e8b22145e4b11ab0fd92a165314c735bc7ef_prof);

    }

    // line 115
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_6e395871b4026cb7b52259ddd8e4af86c9de7a19e6c1720c5b08b02d52afbc57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e395871b4026cb7b52259ddd8e4af86c9de7a19e6c1720c5b08b02d52afbc57->enter($__internal_6e395871b4026cb7b52259ddd8e4af86c9de7a19e6c1720c5b08b02d52afbc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

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
        
        $__internal_6e395871b4026cb7b52259ddd8e4af86c9de7a19e6c1720c5b08b02d52afbc57->leave($__internal_6e395871b4026cb7b52259ddd8e4af86c9de7a19e6c1720c5b08b02d52afbc57_prof);

    }

    // line 132
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_7673aac05ec2f1d407c5cbc303683e318577f4d3a33fe969c341eeec8de0ed98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7673aac05ec2f1d407c5cbc303683e318577f4d3a33fe969c341eeec8de0ed98->enter($__internal_7673aac05ec2f1d407c5cbc303683e318577f4d3a33fe969c341eeec8de0ed98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

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
        
        $__internal_7673aac05ec2f1d407c5cbc303683e318577f4d3a33fe969c341eeec8de0ed98->leave($__internal_7673aac05ec2f1d407c5cbc303683e318577f4d3a33fe969c341eeec8de0ed98_prof);

    }

    // line 147
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_6d0777b1976a56cb90e78713f3b503135bee4d2fb35bc591f8859bc98f7569e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d0777b1976a56cb90e78713f3b503135bee4d2fb35bc591f8859bc98f7569e9->enter($__internal_6d0777b1976a56cb90e78713f3b503135bee4d2fb35bc591f8859bc98f7569e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Page Title";
        
        $__internal_6d0777b1976a56cb90e78713f3b503135bee4d2fb35bc591f8859bc98f7569e9->leave($__internal_6d0777b1976a56cb90e78713f3b503135bee4d2fb35bc591f8859bc98f7569e9_prof);

    }

    // line 148
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_089c87df9eb6505b295cfebf39c56b9bc225995c3be97ebf221493a10a1bf7e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_089c87df9eb6505b295cfebf39c56b9bc225995c3be97ebf221493a10a1bf7e8->enter($__internal_089c87df9eb6505b295cfebf39c56b9bc225995c3be97ebf221493a10a1bf7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        
        $__internal_089c87df9eb6505b295cfebf39c56b9bc225995c3be97ebf221493a10a1bf7e8->leave($__internal_089c87df9eb6505b295cfebf39c56b9bc225995c3be97ebf221493a10a1bf7e8_prof);

    }

    // line 150
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_70fc9cf1df79763fdcdb7f5bccf0da3e697282f1305f16d7f10e5d83f0439ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70fc9cf1df79763fdcdb7f5bccf0da3e697282f1305f16d7f10e5d83f0439ba6->enter($__internal_70fc9cf1df79763fdcdb7f5bccf0da3e697282f1305f16d7f10e5d83f0439ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 151
        echo "                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
                    ";
        
        $__internal_70fc9cf1df79763fdcdb7f5bccf0da3e697282f1305f16d7f10e5d83f0439ba6->leave($__internal_70fc9cf1df79763fdcdb7f5bccf0da3e697282f1305f16d7f10e5d83f0439ba6_prof);

    }

    // line 237
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_98c7480987e0b376395f01f3bfd554bccee540c6d0124711eabc0b994dfecb26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c7480987e0b376395f01f3bfd554bccee540c6d0124711eabc0b994dfecb26->enter($__internal_98c7480987e0b376395f01f3bfd554bccee540c6d0124711eabc0b994dfecb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 238
        echo "
                        ";
        
        $__internal_98c7480987e0b376395f01f3bfd554bccee540c6d0124711eabc0b994dfecb26->leave($__internal_98c7480987e0b376395f01f3bfd554bccee540c6d0124711eabc0b994dfecb26_prof);

    }

    // line 245
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_61dbe2c70265c28a958737db91840f0f91c2ac05cdcc1b53431d8ae123bc2ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61dbe2c70265c28a958737db91840f0f91c2ac05cdcc1b53431d8ae123bc2ac4->enter($__internal_61dbe2c70265c28a958737db91840f0f91c2ac05cdcc1b53431d8ae123bc2ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

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
        
        $__internal_61dbe2c70265c28a958737db91840f0f91c2ac05cdcc1b53431d8ae123bc2ac4->leave($__internal_61dbe2c70265c28a958737db91840f0f91c2ac05cdcc1b53431d8ae123bc2ac4_prof);

    }

    // line 255
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_72eab4f54362541b05641105a5ad860a9fe956ecf52b00adc0b674851c12d672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72eab4f54362541b05641105a5ad860a9fe956ecf52b00adc0b674851c12d672->enter($__internal_72eab4f54362541b05641105a5ad860a9fe956ecf52b00adc0b674851c12d672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_72eab4f54362541b05641105a5ad860a9fe956ecf52b00adc0b674851c12d672->leave($__internal_72eab4f54362541b05641105a5ad860a9fe956ecf52b00adc0b674851c12d672_prof);

    }

    // line 335
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_6e3883a6e75b6f23a8074272dfdcba7f36379fc64892d3b5275ed09de0415d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e3883a6e75b6f23a8074272dfdcba7f36379fc64892d3b5275ed09de0415d0d->enter($__internal_6e3883a6e75b6f23a8074272dfdcba7f36379fc64892d3b5275ed09de0415d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        // line 336
        echo "                            ";
        
        $__internal_6e3883a6e75b6f23a8074272dfdcba7f36379fc64892d3b5275ed09de0415d0d->leave($__internal_6e3883a6e75b6f23a8074272dfdcba7f36379fc64892d3b5275ed09de0415d0d_prof);

    }

    // line 338
    public function block_script_page($context, array $blocks = array())
    {
        $__internal_28dee4c229cf937ddf72e758d781e2034595cb1ecd33079596d84816d14b48cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28dee4c229cf937ddf72e758d781e2034595cb1ecd33079596d84816d14b48cd->enter($__internal_28dee4c229cf937ddf72e758d781e2034595cb1ecd33079596d84816d14b48cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_page"));

        // line 339
        echo "
                            ";
        
        $__internal_28dee4c229cf937ddf72e758d781e2034595cb1ecd33079596d84816d14b48cd->leave($__internal_28dee4c229cf937ddf72e758d781e2034595cb1ecd33079596d84816d14b48cd_prof);

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
