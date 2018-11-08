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
        $__internal_0253ed0fa25caec5b75a6323ee28c4fb4d9dcb671742478154da687599db9d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0253ed0fa25caec5b75a6323ee28c4fb4d9dcb671742478154da687599db9d22->enter($__internal_0253ed0fa25caec5b75a6323ee28c4fb4d9dcb671742478154da687599db9d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <!-- Custom styles for this template -->
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/modern-business.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
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
                    <a class=\"nav-link\" href=\"#\">Inicio</a>
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
                        <a class=\"dropdown-item\" href=\"#\">Becario</a>
                        <a class=\"dropdown-item\" href=\"#\">Patrocinador</a>
                    </div>
                </li>
                ";
        // line 49
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 50
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link text-warning\" href=\"#\">Nueva Publicacion</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-warning\" href=\"";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_dashboard");
            echo "\">SIESSOC</a>
                    </li>
                ";
        }
        // line 57
        echo "                ";
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 58
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link text-warning\" href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Logout</a>
                    </li>
                ";
        } else {
            // line 62
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link text-warning\" href=\"";
            // line 63
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Login</a>
                    </li> 
                ";
        }
        // line 66
        echo "            </ul>
        </div>
    </div>
</nav>
<!-- Footer -->
<footer class=\"py-5 bg-dark\">
    <div class=\"container\">
        <p class=\"m-0 text-center text-white\">Copyright &copy; Cooking Software</p>
    </div>
    <!-- /.container -->
</footer>
<!-- Bootstrap core JavaScript -->
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- Custom Fonts -->
<script src=\"https://use.fontawesome.com/67a564e5bf.js\"></script>
";
        // line 82
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "</body>
</html>
";
        
        $__internal_0253ed0fa25caec5b75a6323ee28c4fb4d9dcb671742478154da687599db9d22->leave($__internal_0253ed0fa25caec5b75a6323ee28c4fb4d9dcb671742478154da687599db9d22_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_1db23de7bc5aaa6f0ca6ba5915aaa2dbb3ce601c9e35c613bb605f4ce772d2c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db23de7bc5aaa6f0ca6ba5915aaa2dbb3ce601c9e35c613bb605f4ce772d2c9->enter($__internal_1db23de7bc5aaa6f0ca6ba5915aaa2dbb3ce601c9e35c613bb605f4ce772d2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_1db23de7bc5aaa6f0ca6ba5915aaa2dbb3ce601c9e35c613bb605f4ce772d2c9->leave($__internal_1db23de7bc5aaa6f0ca6ba5915aaa2dbb3ce601c9e35c613bb605f4ce772d2c9_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e47e46d2c273c0d5f0fe993c433d597452d1cacf92315a33b4403edad27e3f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e47e46d2c273c0d5f0fe993c433d597452d1cacf92315a33b4403edad27e3f1->enter($__internal_9e47e46d2c273c0d5f0fe993c433d597452d1cacf92315a33b4403edad27e3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9e47e46d2c273c0d5f0fe993c433d597452d1cacf92315a33b4403edad27e3f1->leave($__internal_9e47e46d2c273c0d5f0fe993c433d597452d1cacf92315a33b4403edad27e3f1_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2e727dfc66f6440fa2074ce2e57da9dd4328740fcecad6f7d95f095e0eafcbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e727dfc66f6440fa2074ce2e57da9dd4328740fcecad6f7d95f095e0eafcbf->enter($__internal_b2e727dfc66f6440fa2074ce2e57da9dd4328740fcecad6f7d95f095e0eafcbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b2e727dfc66f6440fa2074ce2e57da9dd4328740fcecad6f7d95f095e0eafcbf->leave($__internal_b2e727dfc66f6440fa2074ce2e57da9dd4328740fcecad6f7d95f095e0eafcbf_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b039be107842c9f7e75085877fcf56be1119b67117a4c6ce2e8799eb09a11764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b039be107842c9f7e75085877fcf56be1119b67117a4c6ce2e8799eb09a11764->enter($__internal_b039be107842c9f7e75085877fcf56be1119b67117a4c6ce2e8799eb09a11764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b039be107842c9f7e75085877fcf56be1119b67117a4c6ce2e8799eb09a11764->leave($__internal_b039be107842c9f7e75085877fcf56be1119b67117a4c6ce2e8799eb09a11764_prof);

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
        return array (  197 => 82,  186 => 19,  175 => 15,  163 => 8,  154 => 83,  152 => 82,  146 => 79,  142 => 78,  128 => 66,  122 => 63,  119 => 62,  113 => 59,  110 => 58,  107 => 57,  101 => 54,  95 => 50,  93 => 49,  62 => 20,  60 => 19,  53 => 16,  51 => 15,  45 => 12,  40 => 10,  35 => 8,  26 => 1,);
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
        <!-- Custom styles for this template -->
        <link href=\"{{ asset('bootstrap/css/modern-business.css') }}\" rel=\"stylesheet\">


    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
{% block body %}{% endblock %}

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
                    <a class=\"nav-link\" href=\"#\">Inicio</a>
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
                        <a class=\"dropdown-item\" href=\"#\">Becario</a>
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
<footer class=\"py-5 bg-dark\">
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
