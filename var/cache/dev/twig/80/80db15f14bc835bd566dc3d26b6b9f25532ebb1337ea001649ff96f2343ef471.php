<?php

/* base.html.twig */
class __TwigTemplate_a95e5673a9b73432c23479a98909792f7b0d206165f2337385708d3fbc84f297 extends Twig_Template
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
        $__internal_8befe9a4b1295aa5eebd2db7b42fbfc71ca7f2eafb9a316705c8ed8e24f86288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8befe9a4b1295aa5eebd2db7b42fbfc71ca7f2eafb9a316705c8ed8e24f86288->enter($__internal_8befe9a4b1295aa5eebd2db7b42fbfc71ca7f2eafb9a316705c8ed8e24f86288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                margin-bottom: 200px;
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
        // line 36
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 43
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
        // line 54
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
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Becario</a>
                            <a class=\"dropdown-item\" href=\"#\">Patrocinador</a>
                        </div>
                    </li>
                    ";
        // line 72
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 73
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Publicar</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 77
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_dashboard");
            echo "\">SIESSOC</a>
                        </li>
                    ";
        }
        // line 80
        echo "                    ";
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 81
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 82
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Logout</a>
                        </li>
                    ";
        } else {
            // line 85
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 86
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Login</a>
                        </li> 
                    ";
        }
        // line 89
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
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Custom Fonts -->
    <script src=\"https://use.fontawesome.com/67a564e5bf.js\"></script>
";
        // line 105
        $this->displayBlock('javascripts', $context, $blocks);
        // line 106
        echo "</body>
</html>
";
        
        $__internal_8befe9a4b1295aa5eebd2db7b42fbfc71ca7f2eafb9a316705c8ed8e24f86288->leave($__internal_8befe9a4b1295aa5eebd2db7b42fbfc71ca7f2eafb9a316705c8ed8e24f86288_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_87dcaafb14629a63b3aed79f9a1fc048edc06761de9878685190078fb0daf75b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87dcaafb14629a63b3aed79f9a1fc048edc06761de9878685190078fb0daf75b->enter($__internal_87dcaafb14629a63b3aed79f9a1fc048edc06761de9878685190078fb0daf75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_87dcaafb14629a63b3aed79f9a1fc048edc06761de9878685190078fb0daf75b->leave($__internal_87dcaafb14629a63b3aed79f9a1fc048edc06761de9878685190078fb0daf75b_prof);

    }

    // line 36
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_106e9f84ac9199176b2bf7c6129198910069605a77db7c2fdf0fb80fca0cd948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_106e9f84ac9199176b2bf7c6129198910069605a77db7c2fdf0fb80fca0cd948->enter($__internal_106e9f84ac9199176b2bf7c6129198910069605a77db7c2fdf0fb80fca0cd948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_106e9f84ac9199176b2bf7c6129198910069605a77db7c2fdf0fb80fca0cd948->leave($__internal_106e9f84ac9199176b2bf7c6129198910069605a77db7c2fdf0fb80fca0cd948_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b599cfcebacda38ff2c8fa080293491b19089a4441e7479f0428d3309c2e5d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b599cfcebacda38ff2c8fa080293491b19089a4441e7479f0428d3309c2e5d6->enter($__internal_4b599cfcebacda38ff2c8fa080293491b19089a4441e7479f0428d3309c2e5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "
    ";
        
        $__internal_4b599cfcebacda38ff2c8fa080293491b19089a4441e7479f0428d3309c2e5d6->leave($__internal_4b599cfcebacda38ff2c8fa080293491b19089a4441e7479f0428d3309c2e5d6_prof);

    }

    // line 105
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bc12719ed7d4d4f9cc09228f60e876317dfa6ded44269eb1055d36fc4eefa32a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc12719ed7d4d4f9cc09228f60e876317dfa6ded44269eb1055d36fc4eefa32a->enter($__internal_bc12719ed7d4d4f9cc09228f60e876317dfa6ded44269eb1055d36fc4eefa32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bc12719ed7d4d4f9cc09228f60e876317dfa6ded44269eb1055d36fc4eefa32a->leave($__internal_bc12719ed7d4d4f9cc09228f60e876317dfa6ded44269eb1055d36fc4eefa32a_prof);

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
        return array (  233 => 105,  225 => 41,  219 => 40,  208 => 36,  196 => 8,  187 => 106,  185 => 105,  179 => 102,  175 => 101,  161 => 89,  155 => 86,  152 => 85,  146 => 82,  143 => 81,  140 => 80,  134 => 77,  128 => 73,  126 => 72,  119 => 68,  102 => 54,  89 => 43,  87 => 40,  80 => 37,  78 => 36,  53 => 14,  48 => 12,  44 => 11,  40 => 10,  35 => 8,  26 => 1,);
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
                margin-bottom: 200px;
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
                    {% if is_granted('ROLE_USER') %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Publicar</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{path('admin_dashboard')}}\">SIESSOC</a>
                        </li>
                    {% endif %}
                    {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{path('fos_user_security_logout')}}\">Logout</a>
                        </li>
                    {% else %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{path('fos_user_security_login')}}\">Login</a>
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
", "base.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\app\\Resources\\views\\base.html.twig");
    }
}
