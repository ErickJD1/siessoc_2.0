<?php

/* base.html.twig */
class __TwigTemplate_182492746b41a94eb15987d9088bb70688216b20ff8e8fd68001fef05a8ae60a extends Twig_Template
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
        $__internal_ae85536bd5ce0dad0487fe04fd15eb8d9e5455b10411c9c637a17cc1cbdc6586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae85536bd5ce0dad0487fe04fd15eb8d9e5455b10411c9c637a17cc1cbdc6586->enter($__internal_ae85536bd5ce0dad0487fe04fd15eb8d9e5455b10411c9c637a17cc1cbdc6586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                min-height: 100%;
                position: relative;
            }
            body {
                margin: 0;
                margin-bottom: 40px;
            }
            footer {
                background-color: black;
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 40px;
                color: white;
            }

        </style>
    ";
        // line 35
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "
    <!-- Navigation -->
    <nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"#\">ESSOC</a>
            <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_index");
        echo "\">Inicio</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Actividades</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Contactanos</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Registrarse
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                            <a class=\"dropdown-item\" href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Becario</a>
                            <a class=\"dropdown-item\" href=\"#\">Patrocinador</a>
                        </div>
                    </li>
                    ";
        // line 71
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 72
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link text-warning\" href=\"#\">Nueva Publicacion</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-warning\" href=\"";
            // line 76
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_dashboard");
            echo "\">SIESSOC</a>
                        </li>
                    ";
        }
        // line 79
        echo "                    ";
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 80
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link text-warning\" href=\"";
            // line 81
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Logout</a>
                        </li>
                    ";
        } else {
            // line 84
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link text-warning\" href=\"";
            // line 85
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Login</a>
                        </li> 
                    ";
        }
        // line 88
        echo "                </ul>
            </div>
        </div>
    </nav>
    <!-- Footer -->
    <footer class=\"py-5 bg-dark footer\">
        <div class=\"container\">
            <p class=\"m-0 text-center text-white\">Copyright &copy; Cooking Software</p>
        </div>
        <!-- /.container -->
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Custom Fonts -->
    <script src=\"https://use.fontawesome.com/67a564e5bf.js\"></script>
";
        // line 104
        $this->displayBlock('javascripts', $context, $blocks);
        // line 105
        echo "</body>
</html>
";
        
        $__internal_ae85536bd5ce0dad0487fe04fd15eb8d9e5455b10411c9c637a17cc1cbdc6586->leave($__internal_ae85536bd5ce0dad0487fe04fd15eb8d9e5455b10411c9c637a17cc1cbdc6586_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_452a6b1eadbb4946ad7f3319710798682bf010a9ece576355251ccde7ded2812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_452a6b1eadbb4946ad7f3319710798682bf010a9ece576355251ccde7ded2812->enter($__internal_452a6b1eadbb4946ad7f3319710798682bf010a9ece576355251ccde7ded2812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_452a6b1eadbb4946ad7f3319710798682bf010a9ece576355251ccde7ded2812->leave($__internal_452a6b1eadbb4946ad7f3319710798682bf010a9ece576355251ccde7ded2812_prof);

    }

    // line 35
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_da28cf1d37273478ff45afcfb286d58caa53ce074af69f4d2a4a084c33e8bd4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da28cf1d37273478ff45afcfb286d58caa53ce074af69f4d2a4a084c33e8bd4b->enter($__internal_da28cf1d37273478ff45afcfb286d58caa53ce074af69f4d2a4a084c33e8bd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_da28cf1d37273478ff45afcfb286d58caa53ce074af69f4d2a4a084c33e8bd4b->leave($__internal_da28cf1d37273478ff45afcfb286d58caa53ce074af69f4d2a4a084c33e8bd4b_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bdeec4ea8d4d36b2319bae585ec6e8a9d261c4246afaca61c8acb92aaa21d19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bdeec4ea8d4d36b2319bae585ec6e8a9d261c4246afaca61c8acb92aaa21d19->enter($__internal_5bdeec4ea8d4d36b2319bae585ec6e8a9d261c4246afaca61c8acb92aaa21d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "
    ";
        
        $__internal_5bdeec4ea8d4d36b2319bae585ec6e8a9d261c4246afaca61c8acb92aaa21d19->leave($__internal_5bdeec4ea8d4d36b2319bae585ec6e8a9d261c4246afaca61c8acb92aaa21d19_prof);

    }

    // line 104
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6969192f3099d5b593664485f3b1282364c6cbef96e09090814f9a260151245b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6969192f3099d5b593664485f3b1282364c6cbef96e09090814f9a260151245b->enter($__internal_6969192f3099d5b593664485f3b1282364c6cbef96e09090814f9a260151245b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6969192f3099d5b593664485f3b1282364c6cbef96e09090814f9a260151245b->leave($__internal_6969192f3099d5b593664485f3b1282364c6cbef96e09090814f9a260151245b_prof);

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
        return array (  232 => 104,  224 => 40,  218 => 39,  207 => 35,  195 => 8,  186 => 105,  184 => 104,  178 => 101,  174 => 100,  160 => 88,  154 => 85,  151 => 84,  145 => 81,  142 => 80,  139 => 79,  133 => 76,  127 => 72,  125 => 71,  118 => 67,  101 => 53,  88 => 42,  86 => 39,  79 => 36,  77 => 35,  53 => 14,  48 => 12,  44 => 11,  40 => 10,  35 => 8,  26 => 1,);
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
                min-height: 100%;
                position: relative;
            }
            body {
                margin: 0;
                margin-bottom: 40px;
            }
            footer {
                background-color: black;
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 40px;
                color: white;
            }

        </style>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
    {% block body %}

    {% endblock %}

    <!-- Navigation -->
    <nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"#\">ESSOC</a>
            <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{path('web_index')}}\">Inicio</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Actividades</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Contactanos</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Registrarse
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                            <a class=\"dropdown-item\" href=\"{{path('fos_user_registration_register')}}\">Becario</a>
                            <a class=\"dropdown-item\" href=\"#\">Patrocinador</a>
                        </div>
                    </li>
                    {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-warning\" href=\"#\">Nueva Publicacion</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-warning\" href=\"{{path('admin_dashboard')}}\">SIESSOC</a>
                        </li>
                    {% endif %}
                    {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-warning\" href=\"{{path('fos_user_security_logout')}}\">Logout</a>
                        </li>
                    {% else %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-warning\" href=\"{{path('fos_user_security_login')}}\">Login</a>
                        </li> 
                    {% endif %}
                </ul>
            </div>
        </div>
    </nav>
    <!-- Footer -->
    <footer class=\"py-5 bg-dark footer\">
        <div class=\"container\">
            <p class=\"m-0 text-center text-white\">Copyright &copy; Cooking Software</p>
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
