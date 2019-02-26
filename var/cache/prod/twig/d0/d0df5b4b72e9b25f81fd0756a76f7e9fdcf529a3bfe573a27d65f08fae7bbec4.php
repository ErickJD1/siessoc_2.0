<?php

/* layout/base-layout.html.twig */
class __TwigTemplate_3281e73884a57b530a7e54bf0f8b9c868a2a41bb2138215568d6c887f2325657 extends Twig_Template
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
        echo twig_escape_filter($this->env, ((array_key_exists("admin_skin", $context)) ? (_twig_default_filter((isset($context["admin_skin"]) ? $context["admin_skin"] : null), "skin-blue")) : ("skin-blue")), "html", null, true);
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
        if (((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method") || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 158
(isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 159
(isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method")) || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 160
(isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "has", array(0 => "warning"), "method"))) {
            // line 162
            echo "                <section class=\"flash-messages content-header\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            ";
            // line 165
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
                // line 166
                echo "                                ";
                $context["msj"] = 1;
                // line 167
                echo "                                ";
                $context["txt"] = twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"), ", ");
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
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
                // line 190
                echo "                                ";
                $context["msj"] = 2;
                // line 191
                echo "                                ";
                $context["txt"] = twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"), ", ");
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
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method")) {
                // line 210
                echo "                                ";
                // line 217
                echo "                            ";
            }
            // line 218
            echo "
                            ";
            // line 219
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "has", array(0 => "warning"), "method")) {
                // line 220
                echo "                                ";
                $context["msj"] = 3;
                // line 221
                echo "                                ";
                $context["txt"] = twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"), ", ");
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
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "            <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
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
    }

    // line 56
    public function block_javascripts_head($context, array $blocks = array())
    {
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
    }

    // line 92
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
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
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
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
    }

    // line 94
    public function block_avanzu_logo($context, array $blocks = array())
    {
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
    }

    // line 115
    public function block_avanzu_navbar($context, array $blocks = array())
    {
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
    }

    // line 132
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        // line 133
        echo "                        ";
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 134
            echo "                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Sidebar:userPanel"));
            echo "
                        ";
        }
        // line 136
        echo "                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:menu", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()))));
        echo "
                    ";
    }

    // line 147
    public function block_page_title($context, array $blocks = array())
    {
        echo "Page Title";
    }

    // line 148
    public function block_page_subtitle($context, array $blocks = array())
    {
    }

    // line 150
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        // line 151
        echo "                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
                    ";
    }

    // line 237
    public function block_page_content($context, array $blocks = array())
    {
        // line 238
        echo "
                        ";
    }

    // line 245
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        // line 246
        echo "                    <footer class=\"main-footer\">
                        <strong>Copyright &copy; ";
        // line 247
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"http://";
        echo twig_escape_filter($this->env, (isset($context["footer_url"]) ? $context["footer_url"] : null), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
        echo "
                                </footer>
                            ";
    }

    // line 255
    public function block_javascripts($context, array $blocks = array())
    {
        // line 256
        echo "
                                <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
                                <script>
                                    \$(document).ready(function () {
                                        if (\"";
        // line 260
        echo twig_escape_filter($this->env, (isset($context["msj"]) ? $context["msj"] : null), "html", null, true);
        echo "\" != \"\") {
                                            var suc = \"";
        // line 261
        echo twig_escape_filter($this->env, (isset($context["msj"]) ? $context["msj"] : null), "html", null, true);
        echo "\";
                                            var texto = '";
        // line 262
        echo twig_escape_filter($this->env, (isset($context["txt"]) ? $context["txt"] : null), "html", null, true);
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
    }

    // line 335
    public function block_javascripts_inline($context, array $blocks = array())
    {
        // line 336
        echo "                            ";
    }

    // line 338
    public function block_script_page($context, array $blocks = array())
    {
        // line 339
        echo "
                            ";
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
        return array (  604 => 339,  601 => 338,  597 => 336,  594 => 335,  587 => 330,  582 => 328,  513 => 262,  509 => 261,  505 => 260,  499 => 257,  496 => 256,  493 => 255,  482 => 247,  479 => 246,  476 => 245,  471 => 238,  468 => 237,  461 => 151,  458 => 150,  453 => 148,  447 => 147,  440 => 136,  434 => 134,  431 => 133,  428 => 132,  422 => 119,  418 => 118,  414 => 117,  409 => 116,  406 => 115,  396 => 102,  390 => 99,  382 => 95,  379 => 94,  373 => 124,  368 => 121,  366 => 115,  362 => 113,  360 => 112,  352 => 106,  350 => 94,  347 => 93,  344 => 92,  336 => 62,  332 => 61,  328 => 60,  323 => 57,  320 => 56,  287 => 23,  283 => 22,  279 => 21,  275 => 20,  272 => 19,  269 => 18,  263 => 15,  256 => 341,  254 => 338,  251 => 337,  248 => 335,  245 => 333,  242 => 255,  236 => 250,  234 => 245,  227 => 240,  225 => 237,  220 => 234,  214 => 230,  211 => 229,  209 => 222,  206 => 221,  203 => 220,  201 => 219,  198 => 218,  195 => 217,  193 => 210,  191 => 209,  188 => 208,  185 => 207,  182 => 199,  180 => 192,  177 => 191,  174 => 190,  172 => 189,  169 => 188,  165 => 186,  162 => 177,  159 => 168,  156 => 167,  153 => 166,  151 => 165,  146 => 162,  144 => 160,  143 => 159,  142 => 158,  141 => 157,  138 => 156,  135 => 155,  133 => 154,  130 => 153,  128 => 150,  122 => 148,  120 => 147,  109 => 138,  107 => 132,  100 => 127,  98 => 92,  92 => 89,  67 => 66,  64 => 56,  59 => 52,  56 => 18,  51 => 15,  36 => 2,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/base-layout.html.twig", "/home/ubuntu/workspace/app/Resources/views/layout/base-layout.html.twig");
    }
}
