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
        $__internal_97df8108cb15665198ef2a0e022a730aa65506e975ba5a412f7da9ab82ef191a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97df8108cb15665198ef2a0e022a730aa65506e975ba5a412f7da9ab82ef191a->enter($__internal_97df8108cb15665198ef2a0e022a730aa65506e975ba5a412f7da9ab82ef191a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 37
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 44
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
        // line 55
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
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Becario</a>
                            <a class=\"dropdown-item\" href=\"#\">Patrocinador</a>
                        </div>
                    </li>
                    ";
        // line 73
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 74
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Publicar</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 78
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_dashboard");
            echo "\">SIESSOC</a>
                        </li>
                    ";
        }
        // line 81
        echo "                    ";
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 82
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 83
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Logout</a>
                        </li>
                    ";
        } else {
            // line 86
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 87
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Login</a>
                        </li> 
                    ";
        }
        // line 90
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
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Custom Fonts -->
    <script src=\"https://use.fontawesome.com/67a564e5bf.js\"></script>
";
        // line 106
        $this->displayBlock('javascripts', $context, $blocks);
        // line 107
        echo "</body>
</html>
";
        
        $__internal_97df8108cb15665198ef2a0e022a730aa65506e975ba5a412f7da9ab82ef191a->leave($__internal_97df8108cb15665198ef2a0e022a730aa65506e975ba5a412f7da9ab82ef191a_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_85e955724c84447d241fb02f3483b7ac36fc1e19cad964416483bb728a58580c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e955724c84447d241fb02f3483b7ac36fc1e19cad964416483bb728a58580c->enter($__internal_85e955724c84447d241fb02f3483b7ac36fc1e19cad964416483bb728a58580c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_85e955724c84447d241fb02f3483b7ac36fc1e19cad964416483bb728a58580c->leave($__internal_85e955724c84447d241fb02f3483b7ac36fc1e19cad964416483bb728a58580c_prof);

    }

    // line 37
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0cfe5a22c2288ee26e0f8ed4874e7010479bed98bbb9834391d721615a4226ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cfe5a22c2288ee26e0f8ed4874e7010479bed98bbb9834391d721615a4226ad->enter($__internal_0cfe5a22c2288ee26e0f8ed4874e7010479bed98bbb9834391d721615a4226ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0cfe5a22c2288ee26e0f8ed4874e7010479bed98bbb9834391d721615a4226ad->leave($__internal_0cfe5a22c2288ee26e0f8ed4874e7010479bed98bbb9834391d721615a4226ad_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9bf443c497dc9294a5248cccfee894d4bd33b16c8ff15cfe268ba0ce8e324f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9bf443c497dc9294a5248cccfee894d4bd33b16c8ff15cfe268ba0ce8e324f2->enter($__internal_e9bf443c497dc9294a5248cccfee894d4bd33b16c8ff15cfe268ba0ce8e324f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "
    ";
        
        $__internal_e9bf443c497dc9294a5248cccfee894d4bd33b16c8ff15cfe268ba0ce8e324f2->leave($__internal_e9bf443c497dc9294a5248cccfee894d4bd33b16c8ff15cfe268ba0ce8e324f2_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_89c50a9cc8a9cb9c6e2d090489a397b9fa0709a9d7374fde9e580d5f50c75a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c50a9cc8a9cb9c6e2d090489a397b9fa0709a9d7374fde9e580d5f50c75a56->enter($__internal_89c50a9cc8a9cb9c6e2d090489a397b9fa0709a9d7374fde9e580d5f50c75a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_89c50a9cc8a9cb9c6e2d090489a397b9fa0709a9d7374fde9e580d5f50c75a56->leave($__internal_89c50a9cc8a9cb9c6e2d090489a397b9fa0709a9d7374fde9e580d5f50c75a56_prof);

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
        return array (  234 => 106,  226 => 42,  220 => 41,  209 => 37,  197 => 8,  188 => 107,  186 => 106,  180 => 103,  176 => 102,  162 => 90,  156 => 87,  153 => 86,  147 => 83,  144 => 82,  141 => 81,  135 => 78,  129 => 74,  127 => 73,  120 => 69,  103 => 55,  90 => 44,  88 => 41,  81 => 38,  79 => 37,  53 => 14,  48 => 12,  44 => 11,  40 => 10,  35 => 8,  26 => 1,);
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
