<?php

/* base.html.twig */
class __TwigTemplate_090d79b66c18c9a7f2514d38b344e37567f660fd00b19baa96236cc3deb69dbe extends Twig_Template
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
        $__internal_5f1789277346732d0e969b4d33dc4317460f5f0105b7cfb0bf642e502f472fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f1789277346732d0e969b4d33dc4317460f5f0105b7cfb0bf642e502f472fc0->enter($__internal_5f1789277346732d0e969b4d33dc4317460f5f0105b7cfb0bf642e502f472fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/modern-business.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

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
        // line 57
        echo "
        </style>
    ";
        // line 59
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 60
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body style=\"margin-top:65px\">
    ";
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "
    <!-- Navigation -->
    <nav   class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top\">
        <div class=\"container\">
            <a align=\"center\" class=\"navbar-brand\" href=\"#\"><img style=\"width:30%; margin-bottom: -10px\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo-mini.png"), "html", null, true);
        echo "\"></img><br>ESSOC</br></a>
            <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_index");
        echo "\">INICIO</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_nosotros");
        echo "\">NOSOTROS</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_history");
        echo "\">HISTORIA</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">CONTACTOS</a>
                    </li>

                    ";
        // line 90
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PATROCINADOR")) {
            // line 91
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">PUBLICAR</a>
                        </li>

                    ";
        }
        // line 96
        echo "                    ";
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 97
            echo "
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 99
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_dashboard");
            echo "\">SIESSOC</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">CERRAR SESION</a>
                        </li>


                    ";
        } else {
            // line 108
            echo "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                REGISTRATE
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                                <a class=\"dropdown-item\" href=\"";
            // line 113
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Becario</a>
                                <a class=\"dropdown-item\" href=\"#\">Patrocinador</a>
                            </div>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 119
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">INICIAR SESION</a>
                        </li> 
                    ";
        }
        // line 122
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
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Custom Fonts -->
    <script src=\"https://use.fontawesome.com/67a564e5bf.js\"></script>
";
        // line 138
        $this->displayBlock('javascripts', $context, $blocks);
        // line 139
        echo "</body>
</html>
";
        
        $__internal_5f1789277346732d0e969b4d33dc4317460f5f0105b7cfb0bf642e502f472fc0->leave($__internal_5f1789277346732d0e969b4d33dc4317460f5f0105b7cfb0bf642e502f472fc0_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4b494fba544eba8ee2172f2101ccb73e230ce6605028a391e7e5c462d8e24a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4b494fba544eba8ee2172f2101ccb73e230ce6605028a391e7e5c462d8e24a9->enter($__internal_f4b494fba544eba8ee2172f2101ccb73e230ce6605028a391e7e5c462d8e24a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_f4b494fba544eba8ee2172f2101ccb73e230ce6605028a391e7e5c462d8e24a9->leave($__internal_f4b494fba544eba8ee2172f2101ccb73e230ce6605028a391e7e5c462d8e24a9_prof);

    }

    // line 59
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a544ac41fbc6572d89118bb58ce57b0ca454b97e93d6b4aa0c7cf214290d7b43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a544ac41fbc6572d89118bb58ce57b0ca454b97e93d6b4aa0c7cf214290d7b43->enter($__internal_a544ac41fbc6572d89118bb58ce57b0ca454b97e93d6b4aa0c7cf214290d7b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a544ac41fbc6572d89118bb58ce57b0ca454b97e93d6b4aa0c7cf214290d7b43->leave($__internal_a544ac41fbc6572d89118bb58ce57b0ca454b97e93d6b4aa0c7cf214290d7b43_prof);

    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfacb2dfe9a5fc9609e457d74f1dfbde56dbe13a44f475361e5e006622be7fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfacb2dfe9a5fc9609e457d74f1dfbde56dbe13a44f475361e5e006622be7fde->enter($__internal_dfacb2dfe9a5fc9609e457d74f1dfbde56dbe13a44f475361e5e006622be7fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 64
        echo "
    ";
        
        $__internal_dfacb2dfe9a5fc9609e457d74f1dfbde56dbe13a44f475361e5e006622be7fde->leave($__internal_dfacb2dfe9a5fc9609e457d74f1dfbde56dbe13a44f475361e5e006622be7fde_prof);

    }

    // line 138
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5e3a82d33022aa9206e5f7a72a08f37713c449d18501e2d2ce10260ecc6812d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3a82d33022aa9206e5f7a72a08f37713c449d18501e2d2ce10260ecc6812d1->enter($__internal_5e3a82d33022aa9206e5f7a72a08f37713c449d18501e2d2ce10260ecc6812d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5e3a82d33022aa9206e5f7a72a08f37713c449d18501e2d2ce10260ecc6812d1->leave($__internal_5e3a82d33022aa9206e5f7a72a08f37713c449d18501e2d2ce10260ecc6812d1_prof);

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
        return array (  267 => 138,  259 => 64,  253 => 63,  242 => 59,  230 => 8,  221 => 139,  219 => 138,  213 => 135,  209 => 134,  195 => 122,  189 => 119,  180 => 113,  173 => 108,  165 => 103,  158 => 99,  154 => 97,  151 => 96,  144 => 91,  142 => 90,  133 => 84,  127 => 81,  120 => 77,  110 => 70,  104 => 66,  102 => 63,  95 => 60,  93 => 59,  89 => 57,  53 => 14,  48 => 12,  44 => 11,  40 => 10,  35 => 8,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"siessoc\">
        <meta name=\"author\" content=\"siessoc\">
        <title>{% block title %}{{ site_name }}{% endblock %}</title>
        <!-- Bootstrap core CSS -->
        <link href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('bootstrap/css/bootstrap.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('bootstrap/css/bootstrap-theme.min.css') }}\" rel=\"stylesheet\">
        <!-- Custom styles for this template -->
        <link href=\"{{ asset('bootstrap/css/modern-business.css') }}\" rel=\"stylesheet\">

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

            {#.navbar{
                background: rgba(44,190,201,1);
                background: -moz-linear-gradient(left, rgba(44,190,201,1) 0%, rgba(44,190,201,1) 35%, rgba(43,172,177,1) 68%, rgba(39,171,176,1) 72%, rgba(49,170,170,1) 100%);
                background: -webkit-gradient(left top, right top, color-stop(0%, rgba(44,190,201,1)), color-stop(35%, rgba(44,190,201,1)), color-stop(68%, rgba(43,172,177,1)), color-stop(72%, rgba(39,171,176,1)), color-stop(100%, rgba(49,170,170,1)));
                background: -webkit-linear-gradient(left, rgba(44,190,201,1) 0%, rgba(44,190,201,1) 35%, rgba(43,172,177,1) 68%, rgba(39,171,176,1) 72%, rgba(49,170,170,1) 100%);
                background: -o-linear-gradient(left, rgba(44,190,201,1) 0%, rgba(44,190,201,1) 35%, rgba(43,172,177,1) 68%, rgba(39,171,176,1) 72%, rgba(49,170,170,1) 100%);
                background: -ms-linear-gradient(left, rgba(44,190,201,1) 0%, rgba(44,190,201,1) 35%, rgba(43,172,177,1) 68%, rgba(39,171,176,1) 72%, rgba(49,170,170,1) 100%);
                background: linear-gradient(to right, rgba(44,190,201,1) 0%, rgba(44,190,201,1) 35%, rgba(43,172,177,1) 68%, rgba(39,171,176,1) 72%, rgba(49,170,170,1) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2cbec9', endColorstr='#31aaaa', GradientType=1 );
            }#}

        </style>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body style=\"margin-top:65px\">
    {% block body %}

    {% endblock %}

    <!-- Navigation -->
    <nav   class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top\">
        <div class=\"container\">
            <a align=\"center\" class=\"navbar-brand\" href=\"#\"><img style=\"width:30%; margin-bottom: -10px\" src=\"{{ asset('bundles/app/images/logo-mini.png') }}\"></img><br>ESSOC</br></a>
            <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{path('web_index')}}\">INICIO</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{path('web_nosotros')}}\">NOSOTROS</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{path('web_history')}}\">HISTORIA</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">CONTACTOS</a>
                    </li>

                    {% if is_granted('ROLE_PATROCINADOR')  %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">PUBLICAR</a>
                        </li>

                    {% endif %}
                    {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{path('admin_dashboard')}}\">SIESSOC</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{path('fos_user_security_logout')}}\">CERRAR SESION</a>
                        </li>


                    {% else %}
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                REGISTRATE
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                                <a class=\"dropdown-item\" href=\"{{path('fos_user_registration_register')}}\">Becario</a>
                                <a class=\"dropdown-item\" href=\"#\">Patrocinador</a>
                            </div>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{path('fos_user_security_login')}}\">INICIAR SESION</a>
                        </li> 
                    {% endif %}
                </ul>
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
    <script src=\"{{ asset('bootstrap/js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
    <!-- Custom Fonts -->
    <script src=\"https://use.fontawesome.com/67a564e5bf.js\"></script>
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\base.html.twig");
    }
}
