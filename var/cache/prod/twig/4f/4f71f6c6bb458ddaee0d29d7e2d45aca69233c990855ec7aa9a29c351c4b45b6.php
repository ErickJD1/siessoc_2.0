<?php

/* base.html.twig */
class __TwigTemplate_1f9a9eaa8635422f9dd7204ad5c85bde7a096d3d744d4853df7e4227b15ebcb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"siessoc\">
        <meta name=\"author\" content=\"siessoc\">
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- Bootstrap core CSS -->
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Custom styles for this template -->
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fonts/font-awesome.css")), "html", null, true);
        echo "\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/modern-business.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "environment", array())) . "/styles/admin-lte-calendar.css")), "html", null, true);
        echo "\" />



        <style>
            html {
                min-height: 100% !important;
                position: relative !important;
            }
            body {
                margin-top: 0;
                margin-left: 0;
                margin-right: 0;
                margin-bottom: 200px !important;
            }
            footer {
                position: absolute !important;
                bottom: 0 !important;
                width: 100% !important;
                height: 40px !important;
                color: white;
            }

            .footer{
                background: rgba(44,163,199,1);
                background: -moz-linear-gradient(left, rgba(44,163,199,1) 0%, rgba(44,163,199,1) 37%, rgba(42,149,176,1) 100%);
                background: -webkit-gradient(left top, right top, color-stop(0%, rgba(44,163,199,1)), color-stop(37%, rgba(44,163,199,1)), color-stop(100%, rgba(42,149,176,1)));
                background: -webkit-linear-gradient(left, rgba(44,163,199,1) 0%, rgba(44,163,199,1) 37%, rgba(42,149,176,1) 100%);
                background: -o-linear-gradient(left, rgba(44,163,199,1) 0%, rgba(44,163,199,1) 37%, rgba(42,149,176,1) 100%);
                background: -ms-linear-gradient(left, rgba(44,163,199,1) 0%, rgba(44,163,199,1) 37%, rgba(42,149,176,1) 100%);
                background: linear-gradient(to right, rgba(44,163,199,1) 0%, rgba(44,163,199,1) 37%, rgba(42,149,176,1) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2ca3c7', endColorstr='#2a95b0', GradientType=1 );

            }

            ";
        // line 61
        echo "
        </style>
    ";
        // line 63
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 64
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body style=\"margin-top:65px\">
    ";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "
    <!-- Navigation -->
    <nav   class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top\">
        <div class=\"container\">
            <a align=\"center\" class=\"navbar-brand\" href=\"#\"><img style=\"width:40px; \" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo-mini.png"), "html", null, true);
        echo "\"></img><br>ESSOC</br></a>
            <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" style=\"font-family: Palatino Header !important\" id=\"navbarResponsive\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_index");
        echo "\">INICIO</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_nosotros");
        echo "\">NOSOTROS</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_history");
        echo "\">HISTORIA</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">CONTACTOS</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_calendar");
        echo "\">ACTIVIDADES</a>
                    </li>

                    ";
        // line 97
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PATROCINADOR")) {
            // line 98
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">PUBLICAR</a>
                        </li>

                    ";
        }
        // line 103
        echo "                    ";
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 104
            echo "
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 106
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_dashboard");
            echo "\">SIESSOC</a>
                        </li>
                        
                         <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fa fa-user\">&nbsp;&nbsp;";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo "</i>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                                        <a class=\"dropdown-item\" href=\"";
            // line 114
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Cerrar Sesion</a>
                                    </div>
                     </li>

                     
                    ";
        } else {
            // line 120
            echo "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                REGISTRATE
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                                <a class=\"dropdown-item\" href=\"";
            // line 125
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Becario</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 126
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_registerPatrocina");
            echo "\">Patrocinador</a>
                            </div>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 131
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">INICIAR SESION</a>
                        </li> 
                    ";
        }
        // line 134
        echo "                </ul>
            </div>
        </div>
    </nav>
    <!-- Footer -->
    <footer class=\"py-5 bg-dark footer\">
        <div class=\"container\">
            <p class=\"m-0 text-center text-white\">Copyright &copy; SIESSOC Software</p>
        </div>
        <!-- /.container -->
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "environment", array())) . "/scripts/admin-lte-calendar.js")), "html", null, true);
        echo "\"></script>
                                <script>
    <!-- Custom Fonts -->
    <script src=\"https://use.fontawesome.com/67a564e5bf.js\"></script>
";
        // line 152
        $this->displayBlock('javascripts', $context, $blocks);
        // line 153
        echo "</body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
    }

    // line 63
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 67
    public function block_body($context, array $blocks = array())
    {
        // line 68
        echo "
    ";
    }

    // line 152
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 152,  270 => 68,  267 => 67,  262 => 63,  256 => 8,  250 => 153,  248 => 152,  241 => 148,  237 => 147,  233 => 146,  219 => 134,  213 => 131,  205 => 126,  201 => 125,  194 => 120,  185 => 114,  179 => 111,  171 => 106,  167 => 104,  164 => 103,  157 => 98,  155 => 97,  149 => 94,  140 => 88,  134 => 85,  127 => 81,  117 => 74,  111 => 70,  109 => 67,  102 => 64,  100 => 63,  96 => 61,  58 => 16,  54 => 15,  50 => 14,  45 => 12,  41 => 11,  37 => 10,  32 => 8,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/home/ubuntu/workspace/app/Resources/views/base.html.twig");
    }
}
