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
        $__internal_315350eaeb2457a3def8b55df241981b6abbbe4a779be2660cb0be9153bbbb55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_315350eaeb2457a3def8b55df241981b6abbbe4a779be2660cb0be9153bbbb55->enter($__internal_315350eaeb2457a3def8b55df241981b6abbbe4a779be2660cb0be9153bbbb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/base-layout.html.twig"));

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
        // line 51
        echo "


        ";
        // line 55
        echo "        ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 63
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
        // line 86
        echo twig_escape_filter($this->env, ((array_key_exists("admin_skin", $context)) ? (_twig_default_filter((isset($context["admin_skin"]) ? $context["admin_skin"] : $this->getContext($context, "admin_skin")), "skin-blue")) : ("skin-blue")), "html", null, true);
        echo " fixed sidebar-mini\">

        <div class=\"wrapper\">
            ";
        // line 89
        $this->displayBlock('avanzu_admin_header', $context, $blocks);
        // line 124
        echo "
            <!-- Left side column. contains the logo and sidebar -->
            <aside class=\"main-sidebar sidebar-offcanvas\">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class=\"sidebar\">
                    ";
        // line 129
        $this->displayBlock('avanzu_sidebar', $context, $blocks);
        // line 136
        echo "                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <section class=\"content-header\">
                    <h1>
                        ";
        // line 145
        $this->displayBlock('page_title', $context, $blocks);
        // line 146
        echo "                        <small>";
        $this->displayBlock('page_subtitle', $context, $blocks);
        echo "</small>
                    </h1>
                    ";
        // line 148
        $this->displayBlock('avanzu_breadcrumb', $context, $blocks);
        // line 151
        echo "                </section>
                ";
        // line 152
        $context["msj"] = "";
        // line 153
        echo "                ";
        $context["txt"] = "";
        // line 154
        echo "                <!-- Alert Boxes -->
                ";
        // line 155
        if (((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method") || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 156
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 157
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method")) || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 158
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "warning"), "method"))) {
            // line 160
            echo "                <section class=\"flash-messages content-header\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            ";
            // line 163
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
                // line 164
                echo "                                ";
                $context["msj"] = 1;
                // line 165
                echo "                                ";
                $context["txt"] = twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"), ", ");
                // line 166
                echo "
                                ";
                // line 175
                echo "
                                ";
                // line 184
                echo "
                            ";
            }
            // line 186
            echo "
                            ";
            // line 187
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
                // line 188
                echo "                                ";
                $context["msj"] = 2;
                // line 189
                echo "                                ";
                $context["txt"] = twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"), ", ");
                // line 190
                echo "                                ";
                // line 197
                echo "            
                                ";
                // line 205
                echo "                            ";
            }
            // line 206
            echo "
                            ";
            // line 207
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method")) {
                // line 208
                echo "                                ";
                // line 215
                echo "                            ";
            }
            // line 216
            echo "
                            ";
            // line 217
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "warning"), "method")) {
                // line 218
                echo "                                ";
                $context["msj"] = 3;
                // line 219
                echo "                                ";
                $context["txt"] = twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"), ", ");
                // line 220
                echo "                                ";
                // line 227
                echo "                            ";
            }
            // line 228
            echo "                        </div>
                    </div>
                </section>
                ";
        }
        // line 232
        echo "
                    <!-- Main content -->
                    <section class=\"content\">
                        ";
        // line 235
        $this->displayBlock('page_content', $context, $blocks);
        // line 238
        echo "                    </section>
                    <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->

                ";
        // line 243
        $this->displayBlock('avanzu_admin_footer', $context, $blocks);
        // line 248
        echo "
                            </div>
                            <!-- ./wrapper -->

                            ";
        // line 253
        echo "                            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 331
        echo "
                            ";
        // line 333
        echo "                            ";
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 335
        echo "
                            ";
        // line 336
        $this->displayBlock('script_page', $context, $blocks);
        // line 339
        echo "
                            </body>
                            </html>
";
        
        $__internal_315350eaeb2457a3def8b55df241981b6abbbe4a779be2660cb0be9153bbbb55->leave($__internal_315350eaeb2457a3def8b55df241981b6abbbe4a779be2660cb0be9153bbbb55_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_169126573457dcc340d3c5f078c64df3a49f09a4a98ade5804e3dc19671d1234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_169126573457dcc340d3c5f078c64df3a49f09a4a98ade5804e3dc19671d1234->enter($__internal_169126573457dcc340d3c5f078c64df3a49f09a4a98ade5804e3dc19671d1234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_169126573457dcc340d3c5f078c64df3a49f09a4a98ade5804e3dc19671d1234->leave($__internal_169126573457dcc340d3c5f078c64df3a49f09a4a98ade5804e3dc19671d1234_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8c27c3f5ebefac5f7ae8aa553bf7100af07e74883eac7fd6f15e17512d80582b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c27c3f5ebefac5f7ae8aa553bf7100af07e74883eac7fd6f15e17512d80582b->enter($__internal_8c27c3f5ebefac5f7ae8aa553bf7100af07e74883eac7fd6f15e17512d80582b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_8c27c3f5ebefac5f7ae8aa553bf7100af07e74883eac7fd6f15e17512d80582b->leave($__internal_8c27c3f5ebefac5f7ae8aa553bf7100af07e74883eac7fd6f15e17512d80582b_prof);

    }

    // line 55
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_42990ba465fcbfe8faf7be3967412430da482ce7ccd930b454e2dc7eeeffb8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42990ba465fcbfe8faf7be3967412430da482ce7ccd930b454e2dc7eeeffb8ad->enter($__internal_42990ba465fcbfe8faf7be3967412430da482ce7ccd930b454e2dc7eeeffb8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 56
        echo "            <!--[if lt IE 9]>

            <![endif]-->



        ";
        
        $__internal_42990ba465fcbfe8faf7be3967412430da482ce7ccd930b454e2dc7eeeffb8ad->leave($__internal_42990ba465fcbfe8faf7be3967412430da482ce7ccd930b454e2dc7eeeffb8ad_prof);

    }

    // line 89
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_e5de58b5453e49632215eb0a4c06c3d6727b159d327120f0c839c4b0f83ae312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5de58b5453e49632215eb0a4c06c3d6727b159d327120f0c839c4b0f83ae312->enter($__internal_e5de58b5453e49632215eb0a4c06c3d6727b159d327120f0c839c4b0f83ae312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        // line 90
        echo "                <header class=\"main-header\">
                    ";
        // line 91
        $this->displayBlock('avanzu_logo', $context, $blocks);
        // line 103
        echo "                    <!-- Header Navbar: style can be found in header.less -->
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <!-- Sidebar toggle button-->
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>
                        ";
        // line 109
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 110
            echo "                            <div class=\"navbar-custom-menu\">
                                <ul class=\"nav navbar-nav\">
                                    ";
            // line 112
            $this->displayBlock('avanzu_navbar', $context, $blocks);
            // line 118
            echo "                                </ul>
                            </div>
                        ";
        }
        // line 121
        echo "                    </nav>
                </header>
            ";
        
        $__internal_e5de58b5453e49632215eb0a4c06c3d6727b159d327120f0c839c4b0f83ae312->leave($__internal_e5de58b5453e49632215eb0a4c06c3d6727b159d327120f0c839c4b0f83ae312_prof);

    }

    // line 91
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_600a9228c5279175dd49e21db40c860f103aabba7139ef864d3b1dc1fa35c1f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_600a9228c5279175dd49e21db40c860f103aabba7139ef864d3b1dc1fa35c1f1->enter($__internal_600a9228c5279175dd49e21db40c860f103aabba7139ef864d3b1dc1fa35c1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 92
        echo "                        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"logo\">
                            <!-- Add the class icon to your logo image or logo icon to add the margining -->
                            <span class=\"logo-mini\">
                                <!-- mini logo for sidebar mini 50x50 pixels -->
                                <img style=\"width:25px;\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo-mini.png"), "html", null, true);
        echo "\"></img>
                            </span>
                            <span class=\"logo-lg\">
                                <img style=\"width:25px;\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo-mini.png"), "html", null, true);
        echo "\"></img>";
        $this->displayBlock("title", $context, $blocks);
        echo "
                            </span>
                        </a>
                    ";
        
        $__internal_600a9228c5279175dd49e21db40c860f103aabba7139ef864d3b1dc1fa35c1f1->leave($__internal_600a9228c5279175dd49e21db40c860f103aabba7139ef864d3b1dc1fa35c1f1_prof);

    }

    // line 112
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_80cdfc740bea7e9fa039f6e847c6fe50efe04f17efc90f9faf180c3b9dc29fe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80cdfc740bea7e9fa039f6e847c6fe50efe04f17efc90f9faf180c3b9dc29fe5->enter($__internal_80cdfc740bea7e9fa039f6e847c6fe50efe04f17efc90f9faf180c3b9dc29fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

        // line 113
        echo "                                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:messages"));
        echo "
                                        ";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:notifications"));
        echo "
                                        ";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:tasks"));
        echo "
                                        ";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Navbar:user"));
        echo "
                                    ";
        
        $__internal_80cdfc740bea7e9fa039f6e847c6fe50efe04f17efc90f9faf180c3b9dc29fe5->leave($__internal_80cdfc740bea7e9fa039f6e847c6fe50efe04f17efc90f9faf180c3b9dc29fe5_prof);

    }

    // line 129
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_bf353a8af96aeb018b9d3dc0ff48e2b97494226475189e4890a2f044f7496c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf353a8af96aeb018b9d3dc0ff48e2b97494226475189e4890a2f044f7496c28->enter($__internal_bf353a8af96aeb018b9d3dc0ff48e2b97494226475189e4890a2f044f7496c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 130
        echo "                        ";
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 131
            echo "                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Sidebar:userPanel"));
            echo "
                            ";
            // line 132
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:searchForm"));
            echo "
                        ";
        }
        // line 134
        echo "                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:menu", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
        echo "
                    ";
        
        $__internal_bf353a8af96aeb018b9d3dc0ff48e2b97494226475189e4890a2f044f7496c28->leave($__internal_bf353a8af96aeb018b9d3dc0ff48e2b97494226475189e4890a2f044f7496c28_prof);

    }

    // line 145
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_52bac322ee4fc7565dd01abe6408c6a2f717db3d9c7973536a9dc4962d143c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52bac322ee4fc7565dd01abe6408c6a2f717db3d9c7973536a9dc4962d143c7e->enter($__internal_52bac322ee4fc7565dd01abe6408c6a2f717db3d9c7973536a9dc4962d143c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Page Title";
        
        $__internal_52bac322ee4fc7565dd01abe6408c6a2f717db3d9c7973536a9dc4962d143c7e->leave($__internal_52bac322ee4fc7565dd01abe6408c6a2f717db3d9c7973536a9dc4962d143c7e_prof);

    }

    // line 146
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_b4c9441114acad9e9c855568bf124c2b8a12b0d1427c317c9878bfea32094f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c9441114acad9e9c855568bf124c2b8a12b0d1427c317c9878bfea32094f2c->enter($__internal_b4c9441114acad9e9c855568bf124c2b8a12b0d1427c317c9878bfea32094f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        
        $__internal_b4c9441114acad9e9c855568bf124c2b8a12b0d1427c317c9878bfea32094f2c->leave($__internal_b4c9441114acad9e9c855568bf124c2b8a12b0d1427c317c9878bfea32094f2c_prof);

    }

    // line 148
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_f75884d19ead8bd1326c96d8693332794abbd8dcab79b57b9b0d803aadb25d1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75884d19ead8bd1326c96d8693332794abbd8dcab79b57b9b0d803aadb25d1f->enter($__internal_f75884d19ead8bd1326c96d8693332794abbd8dcab79b57b9b0d803aadb25d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 149
        echo "                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
                    ";
        
        $__internal_f75884d19ead8bd1326c96d8693332794abbd8dcab79b57b9b0d803aadb25d1f->leave($__internal_f75884d19ead8bd1326c96d8693332794abbd8dcab79b57b9b0d803aadb25d1f_prof);

    }

    // line 235
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c06990514f35def5c04833357075a6b12331c60e910cc54923505018faac5e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06990514f35def5c04833357075a6b12331c60e910cc54923505018faac5e42->enter($__internal_c06990514f35def5c04833357075a6b12331c60e910cc54923505018faac5e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 236
        echo "
                        ";
        
        $__internal_c06990514f35def5c04833357075a6b12331c60e910cc54923505018faac5e42->leave($__internal_c06990514f35def5c04833357075a6b12331c60e910cc54923505018faac5e42_prof);

    }

    // line 243
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_15eae39448eed6a985985703192242e95cc673918df21966478648392e878ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15eae39448eed6a985985703192242e95cc673918df21966478648392e878ad7->enter($__internal_15eae39448eed6a985985703192242e95cc673918df21966478648392e878ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 244
        echo "                    <footer class=\"main-footer\">
                        <strong>Copyright &copy; ";
        // line 245
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"http://";
        echo twig_escape_filter($this->env, (isset($context["footer_url"]) ? $context["footer_url"] : $this->getContext($context, "footer_url")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        echo "
                                </footer>
                            ";
        
        $__internal_15eae39448eed6a985985703192242e95cc673918df21966478648392e878ad7->leave($__internal_15eae39448eed6a985985703192242e95cc673918df21966478648392e878ad7_prof);

    }

    // line 253
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e9c54033c7f583e1bea1ecdbf9a90578326b79d7420103da183401d298688956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9c54033c7f583e1bea1ecdbf9a90578326b79d7420103da183401d298688956->enter($__internal_e9c54033c7f583e1bea1ecdbf9a90578326b79d7420103da183401d298688956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 254
        echo "
                                <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
                                <script>
                                    \$(document).ready(function () {
                                        if (\"";
        // line 258
        echo twig_escape_filter($this->env, (isset($context["msj"]) ? $context["msj"] : $this->getContext($context, "msj")), "html", null, true);
        echo "\" != \"\") {
                                            var suc = \"";
        // line 259
        echo twig_escape_filter($this->env, (isset($context["msj"]) ? $context["msj"] : $this->getContext($context, "msj")), "html", null, true);
        echo "\";
                                            var texto = '";
        // line 260
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
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>

                                <script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>

                            ";
        
        $__internal_e9c54033c7f583e1bea1ecdbf9a90578326b79d7420103da183401d298688956->leave($__internal_e9c54033c7f583e1bea1ecdbf9a90578326b79d7420103da183401d298688956_prof);

    }

    // line 333
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_b953b30892ed5fb94ef722959a46cccd80fadad9f6fd1b0f172ce4c08945b164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b953b30892ed5fb94ef722959a46cccd80fadad9f6fd1b0f172ce4c08945b164->enter($__internal_b953b30892ed5fb94ef722959a46cccd80fadad9f6fd1b0f172ce4c08945b164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        // line 334
        echo "                            ";
        
        $__internal_b953b30892ed5fb94ef722959a46cccd80fadad9f6fd1b0f172ce4c08945b164->leave($__internal_b953b30892ed5fb94ef722959a46cccd80fadad9f6fd1b0f172ce4c08945b164_prof);

    }

    // line 336
    public function block_script_page($context, array $blocks = array())
    {
        $__internal_d2f5b2e68da9491f30095bc2245317f9936736d0ba0bcf51fde4a8ad3e159f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f5b2e68da9491f30095bc2245317f9936736d0ba0bcf51fde4a8ad3e159f81->enter($__internal_d2f5b2e68da9491f30095bc2245317f9936736d0ba0bcf51fde4a8ad3e159f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_page"));

        // line 337
        echo "
                            ";
        
        $__internal_d2f5b2e68da9491f30095bc2245317f9936736d0ba0bcf51fde4a8ad3e159f81->leave($__internal_d2f5b2e68da9491f30095bc2245317f9936736d0ba0bcf51fde4a8ad3e159f81_prof);

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
        return array (  689 => 337,  683 => 336,  676 => 334,  670 => 333,  660 => 328,  655 => 326,  586 => 260,  582 => 259,  578 => 258,  572 => 255,  569 => 254,  563 => 253,  549 => 245,  546 => 244,  540 => 243,  532 => 236,  526 => 235,  516 => 149,  510 => 148,  499 => 146,  487 => 145,  477 => 134,  472 => 132,  467 => 131,  464 => 130,  458 => 129,  449 => 116,  445 => 115,  441 => 114,  436 => 113,  430 => 112,  417 => 99,  411 => 96,  403 => 92,  397 => 91,  388 => 121,  383 => 118,  381 => 112,  377 => 110,  375 => 109,  367 => 103,  365 => 91,  362 => 90,  356 => 89,  343 => 56,  337 => 55,  302 => 23,  298 => 22,  294 => 21,  290 => 20,  287 => 19,  281 => 18,  269 => 15,  259 => 339,  257 => 336,  254 => 335,  251 => 333,  248 => 331,  245 => 253,  239 => 248,  237 => 243,  230 => 238,  228 => 235,  223 => 232,  217 => 228,  214 => 227,  212 => 220,  209 => 219,  206 => 218,  204 => 217,  201 => 216,  198 => 215,  196 => 208,  194 => 207,  191 => 206,  188 => 205,  185 => 197,  183 => 190,  180 => 189,  177 => 188,  175 => 187,  172 => 186,  168 => 184,  165 => 175,  162 => 166,  159 => 165,  156 => 164,  154 => 163,  149 => 160,  147 => 158,  146 => 157,  145 => 156,  144 => 155,  141 => 154,  138 => 153,  136 => 152,  133 => 151,  131 => 148,  125 => 146,  123 => 145,  112 => 136,  110 => 129,  103 => 124,  101 => 89,  95 => 86,  70 => 63,  67 => 55,  62 => 51,  59 => 18,  54 => 15,  39 => 2,  37 => 1,);
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
