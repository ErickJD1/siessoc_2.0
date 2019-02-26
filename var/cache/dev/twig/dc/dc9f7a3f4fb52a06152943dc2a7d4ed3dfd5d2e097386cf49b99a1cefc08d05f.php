<?php

/* base.html.twig */
class __TwigTemplate_4ebb0abb4d7789501edd82e4e4e017da0ab196c894560ae8353a9d9fdbb024c4 extends Twig_Template
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
        $__internal_9acbf6910afbc5b0558eefcc7933a55d897bf4c41bf709f8f1d8bec9789e6eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9acbf6910afbc5b0558eefcc7933a55d897bf4c41bf709f8f1d8bec9789e6eb6->enter($__internal_9acbf6910afbc5b0558eefcc7933a55d897bf4c41bf709f8f1d8bec9789e6eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fonts/font-awesome.css"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/modern-business.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-calendar.css")), "html", null, true);
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
                        <a class=\"nav-link\" href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_contacto");
        echo "\">CONTACTOS</a>
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
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
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
            echo "\">Aspirante Becario</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 126
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_registerPatrocina");
            echo "\">Aspirante Patrocinador</a>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-calendar.js")), "html", null, true);
        echo "\"></script>
                            
    <!-- Custom Fonts -->
    <script src=\"https://use.fontawesome.com/67a564e5bf.js\"></script>
";
        // line 152
        $this->displayBlock('javascripts', $context, $blocks);
        // line 153
        echo "</body>
</html>
";
        
        $__internal_9acbf6910afbc5b0558eefcc7933a55d897bf4c41bf709f8f1d8bec9789e6eb6->leave($__internal_9acbf6910afbc5b0558eefcc7933a55d897bf4c41bf709f8f1d8bec9789e6eb6_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e8c3d35e0c641f3e7fb6f61ecaf6f66c9b350998c8d3a43babcded6dbb46643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e8c3d35e0c641f3e7fb6f61ecaf6f66c9b350998c8d3a43babcded6dbb46643->enter($__internal_2e8c3d35e0c641f3e7fb6f61ecaf6f66c9b350998c8d3a43babcded6dbb46643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_2e8c3d35e0c641f3e7fb6f61ecaf6f66c9b350998c8d3a43babcded6dbb46643->leave($__internal_2e8c3d35e0c641f3e7fb6f61ecaf6f66c9b350998c8d3a43babcded6dbb46643_prof);

    }

    // line 63
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f874afc609cc1e16b68198f8a32e9224b0e488dc04a10af5d59a7b17bebb9d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f874afc609cc1e16b68198f8a32e9224b0e488dc04a10af5d59a7b17bebb9d2a->enter($__internal_f874afc609cc1e16b68198f8a32e9224b0e488dc04a10af5d59a7b17bebb9d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f874afc609cc1e16b68198f8a32e9224b0e488dc04a10af5d59a7b17bebb9d2a->leave($__internal_f874afc609cc1e16b68198f8a32e9224b0e488dc04a10af5d59a7b17bebb9d2a_prof);

    }

    // line 67
    public function block_body($context, array $blocks = array())
    {
        $__internal_30017285601d118e58a8f7bf29e0962d3d0034cfccd6cf4025a44380cb4a4171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30017285601d118e58a8f7bf29e0962d3d0034cfccd6cf4025a44380cb4a4171->enter($__internal_30017285601d118e58a8f7bf29e0962d3d0034cfccd6cf4025a44380cb4a4171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 68
        echo "
    ";
        
        $__internal_30017285601d118e58a8f7bf29e0962d3d0034cfccd6cf4025a44380cb4a4171->leave($__internal_30017285601d118e58a8f7bf29e0962d3d0034cfccd6cf4025a44380cb4a4171_prof);

    }

    // line 152
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e2e9b64c5e2e0d77c93711e375731608af6d0b10311b8b05b1d31ffac55d9d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e9b64c5e2e0d77c93711e375731608af6d0b10311b8b05b1d31ffac55d9d17->enter($__internal_e2e9b64c5e2e0d77c93711e375731608af6d0b10311b8b05b1d31ffac55d9d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e2e9b64c5e2e0d77c93711e375731608af6d0b10311b8b05b1d31ffac55d9d17->leave($__internal_e2e9b64c5e2e0d77c93711e375731608af6d0b10311b8b05b1d31ffac55d9d17_prof);

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
        return array (  302 => 152,  294 => 68,  288 => 67,  277 => 63,  265 => 8,  256 => 153,  254 => 152,  247 => 148,  243 => 147,  239 => 146,  225 => 134,  219 => 131,  211 => 126,  207 => 125,  200 => 120,  191 => 114,  185 => 111,  177 => 106,  173 => 104,  170 => 103,  163 => 98,  161 => 97,  155 => 94,  149 => 91,  143 => 88,  137 => 85,  130 => 81,  120 => 74,  114 => 70,  112 => 67,  105 => 64,  103 => 63,  99 => 61,  61 => 16,  57 => 15,  53 => 14,  48 => 12,  44 => 11,  40 => 10,  35 => 8,  26 => 1,);
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
        <link rel=\"stylesheet\" href=\"{{asset('css/fonts/font-awesome.css')}}\">
        <link href=\"{{ asset('bootstrap/css/modern-business.css') }}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/admin-lte-calendar.css') }}\" />



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
            <a align=\"center\" class=\"navbar-brand\" href=\"#\"><img style=\"width:40px; \" src=\"{{ asset('bundles/app/images/logo-mini.png') }}\"></img><br>ESSOC</br></a>
            <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" style=\"font-family: Palatino Header !important\" id=\"navbarResponsive\">
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
                        <a class=\"nav-link\" href=\"{{path('web_contacto')}}\">CONTACTOS</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{path('web_calendar')}}\">ACTIVIDADES</a>
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
                        
                         <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fa fa-user\">&nbsp;&nbsp;{{app.user.username}}</i>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                                        <a class=\"dropdown-item\" href=\"{{path('fos_user_security_logout')}}\">Cerrar Sesion</a>
                                    </div>
                     </li>

                     
                    {% else %}
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                REGISTRATE
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                                <a class=\"dropdown-item\" href=\"{{path('fos_user_registration_register')}}\">Aspirante Becario</a>
                                <a class=\"dropdown-item\" href=\"{{path('fos_user_registration_registerPatrocina')}}\">Aspirante Patrocinador</a>
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
     <script src=\"{{ asset('bundles/avanzuadmintheme/static/'~app.environment~'/scripts/admin-lte-calendar.js') }}\"></script>
                            
    <!-- Custom Fonts -->
    <script src=\"https://use.fontawesome.com/67a564e5bf.js\"></script>
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "/home/ubuntu/workspace/app/Resources/views/base.html.twig");
    }
}
