<?php

/* layout/loginBase.html.twig */
class __TwigTemplate_c65cd693c9c2fecda220e86fef6a49868558e564b7922a34ef40c3c4d68f603a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts_head' => array($this, 'block_javascripts_head'),
            'page_content' => array($this, 'block_page_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascripts_inline' => array($this, 'block_javascripts_inline'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ea29587cde41a5546e38034ba51f64c43c8005fbc2c2ff606d808de91ecd1a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ea29587cde41a5546e38034ba51f64c43c8005fbc2c2ff606d808de91ecd1a7->enter($__internal_4ea29587cde41a5546e38034ba51f64c43c8005fbc2c2ff606d808de91ecd1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/loginBase.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "layout/loginBase.html.twig", 1);
        // line 2
        echo "<!doctype html>
<!--[if lt IE 7 ]><html lang=\"en\" class=\"no-js ie6\"> <![endif]-->
<!--[if IE 7 ]><html lang=\"en\" class=\"no-js ie7\"> <![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie8\"> <![endif]-->
<!--[if IE 9 ]><html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 16
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    ";
        // line 30
        echo "    ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 37
        echo "
</head>
<body>
";
        // line 40
        $this->displayBlock('page_content', $context, $blocks);
        // line 41
        echo "

";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "
";
        // line 62
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 64
        echo "</body>
</html>
";
        
        $__internal_4ea29587cde41a5546e38034ba51f64c43c8005fbc2c2ff606d808de91ecd1a7->leave($__internal_4ea29587cde41a5546e38034ba51f64c43c8005fbc2c2ff606d808de91ecd1a7_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_51630c8cee4a65741fc22c181cd43b914a93d1393b752be9a4e6a07173971d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51630c8cee4a65741fc22c181cd43b914a93d1393b752be9a4e6a07173971d10->enter($__internal_51630c8cee4a65741fc22c181cd43b914a93d1393b752be9a4e6a07173971d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIESSOC";
        
        $__internal_51630c8cee4a65741fc22c181cd43b914a93d1393b752be9a4e6a07173971d10->leave($__internal_51630c8cee4a65741fc22c181cd43b914a93d1393b752be9a4e6a07173971d10_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c28a1728994079b9e0090d77e984f91bd599f51ae2ea26689725d4e24ff1b247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28a1728994079b9e0090d77e984f91bd599f51ae2ea26689725d4e24ff1b247->enter($__internal_c28a1728994079b9e0090d77e984f91bd599f51ae2ea26689725d4e24ff1b247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
        ";
        // line 19
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9fe514c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9fe514c_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/9fe514c_blue_1.css");
            // line 23
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" />
        ";
        } else {
            // asset "9fe514c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9fe514c") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/9fe514c.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" />
        ";
        }
        unset($context["asset_url"]);
        // line 25
        echo "    ";
        
        $__internal_c28a1728994079b9e0090d77e984f91bd599f51ae2ea26689725d4e24ff1b247->leave($__internal_c28a1728994079b9e0090d77e984f91bd599f51ae2ea26689725d4e24ff1b247_prof);

    }

    // line 30
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_2c6c0171a8d21d022d8e6a27b61b3102a894b6df0f3aee32a6fc10a1a8f80d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c6c0171a8d21d022d8e6a27b61b3102a894b6df0f3aee32a6fc10a1a8f80d72->enter($__internal_2c6c0171a8d21d022d8e6a27b61b3102a894b6df0f3aee32a6fc10a1a8f80d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 31
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_2c6c0171a8d21d022d8e6a27b61b3102a894b6df0f3aee32a6fc10a1a8f80d72->leave($__internal_2c6c0171a8d21d022d8e6a27b61b3102a894b6df0f3aee32a6fc10a1a8f80d72_prof);

    }

    // line 40
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_fae5ac549fa709b7bc2a6fc66117397b8fe4e9ed3015e78a27a6c702f787e0c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae5ac549fa709b7bc2a6fc66117397b8fe4e9ed3015e78a27a6c702f787e0c7->enter($__internal_fae5ac549fa709b7bc2a6fc66117397b8fe4e9ed3015e78a27a6c702f787e0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_fae5ac549fa709b7bc2a6fc66117397b8fe4e9ed3015e78a27a6c702f787e0c7->leave($__internal_fae5ac549fa709b7bc2a6fc66117397b8fe4e9ed3015e78a27a6c702f787e0c7_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a33984e641e74115d6a57dfeacb8f1f73743b3823ecf404e122c9857cdcfec2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33984e641e74115d6a57dfeacb8f1f73743b3823ecf404e122c9857cdcfec2d->enter($__internal_a33984e641e74115d6a57dfeacb8f1f73743b3823ecf404e122c9857cdcfec2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
    ";
        // line 46
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fa188a4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fa188a4_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fa188a4_icheck.min_1.js");
            // line 48
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "fa188a4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fa188a4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fa188a4.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 50
        echo "    <script>
        \$(function () {
            \$('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
";
        
        $__internal_a33984e641e74115d6a57dfeacb8f1f73743b3823ecf404e122c9857cdcfec2d->leave($__internal_a33984e641e74115d6a57dfeacb8f1f73743b3823ecf404e122c9857cdcfec2d_prof);

    }

    // line 62
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_bfd89b1e7d1d2b1863bef6d1963ee215220b2b43485fd14f0cafa573656af207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd89b1e7d1d2b1863bef6d1963ee215220b2b43485fd14f0cafa573656af207->enter($__internal_bfd89b1e7d1d2b1863bef6d1963ee215220b2b43485fd14f0cafa573656af207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_bfd89b1e7d1d2b1863bef6d1963ee215220b2b43485fd14f0cafa573656af207->leave($__internal_bfd89b1e7d1d2b1863bef6d1963ee215220b2b43485fd14f0cafa573656af207_prof);

    }

    public function getTemplateName()
    {
        return "layout/loginBase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 62,  199 => 50,  185 => 48,  181 => 46,  176 => 45,  170 => 44,  159 => 40,  145 => 31,  139 => 30,  132 => 25,  118 => 23,  114 => 19,  110 => 18,  107 => 17,  101 => 16,  89 => 13,  80 => 64,  78 => 62,  75 => 60,  73 => 44,  69 => 41,  67 => 40,  62 => 37,  59 => 30,  54 => 27,  51 => 26,  48 => 16,  43 => 13,  30 => 2,  28 => 1,);
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
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>{% block title %}SIESSOC{% endblock %}</title>

    {# -------------------------------------------------------------------------------------------------- STYLESHEETS #}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/admin-lte-all.css') }}\" />
        {% stylesheets
        'bundles/avanzuadmintheme/vendor/adminlte/plugins/iCheck/square/blue.css'
        filter='cssrewrite'
        %}
        <link href=\"{{ asset_url }}\" rel=\"stylesheet\" />
        {% endstylesheets %}
    {% endblock %}

    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    {# --------------------------------------------------------------------------------------------- JAVASCRIPTS_HEAD #}
    {%  block javascripts_head %}
        <script type=\"text/javascript\" src=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/scripts/modernizr.js') }}\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    {% endblock %}

</head>
<body>
{% block page_content %}{% endblock %}


{# ------------------------------------------------------------------------------------------------------ JAVASCRIPTS #}
{% block javascripts %}
    <script src=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/scripts/admin-lte-all.js') }}\"></script>
    {% javascripts 'bundles/avanzuadmintheme/vendor/adminlte/plugins/iCheck/icheck.min.js'
    %}
    <script src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}
    <script>
        \$(function () {
            \$('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
{% endblock %}

{# ----------------------------------------------------------------------------------------------- JAVASCRIPTS_INLINE #}
{% block javascripts_inline %}
{% endblock %}
</body>
</html>
", "layout/loginBase.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\layout\\loginBase.html.twig");
    }
}
