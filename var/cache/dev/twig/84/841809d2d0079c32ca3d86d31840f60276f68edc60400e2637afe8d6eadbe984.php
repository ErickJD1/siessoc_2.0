<?php

/* @AvanzuAdminTheme/layout/login-layout.html.twig */
class __TwigTemplate_0301d9fdbc31d95254db232c40bc14789988291b20aa53bef2c56985eb261952 extends Twig_Template
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
        $__internal_8f767781d06d1ef09fd8797859dffef8eca9e07c2c5ab3ac4a0d92b7b7b4db2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f767781d06d1ef09fd8797859dffef8eca9e07c2c5ab3ac4a0d92b7b7b4db2d->enter($__internal_8f767781d06d1ef09fd8797859dffef8eca9e07c2c5ab3ac4a0d92b7b7b4db2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/layout/login-layout.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "@AvanzuAdminTheme/layout/login-layout.html.twig", 1);
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
        // line 19
        echo "

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    ";
        // line 24
        echo "    ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 31
        echo "
</head>
<body class=\"login-page\">
";
        // line 34
        $this->displayBlock('page_content', $context, $blocks);
        // line 35
        echo "

";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "
";
        // line 43
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 45
        echo "</body>
</html>
";
        
        $__internal_8f767781d06d1ef09fd8797859dffef8eca9e07c2c5ab3ac4a0d92b7b7b4db2d->leave($__internal_8f767781d06d1ef09fd8797859dffef8eca9e07c2c5ab3ac4a0d92b7b7b4db2d_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0a33b289cc336212ddcf65e031776d5d6e2b35d65564a0d56729b2517daa1af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a33b289cc336212ddcf65e031776d5d6e2b35d65564a0d56729b2517daa1af->enter($__internal_d0a33b289cc336212ddcf65e031776d5d6e2b35d65564a0d56729b2517daa1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Avanzu Admin!";
        
        $__internal_d0a33b289cc336212ddcf65e031776d5d6e2b35d65564a0d56729b2517daa1af->leave($__internal_d0a33b289cc336212ddcf65e031776d5d6e2b35d65564a0d56729b2517daa1af_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bd31bf88ce1ac5dcb4cd5ddb571e61bcf41c29f4b53f3b7de3d79680efb39d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd31bf88ce1ac5dcb4cd5ddb571e61bcf41c29f4b53f3b7de3d79680efb39d26->enter($__internal_bd31bf88ce1ac5dcb4cd5ddb571e61bcf41c29f4b53f3b7de3d79680efb39d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_bd31bf88ce1ac5dcb4cd5ddb571e61bcf41c29f4b53f3b7de3d79680efb39d26->leave($__internal_bd31bf88ce1ac5dcb4cd5ddb571e61bcf41c29f4b53f3b7de3d79680efb39d26_prof);

    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_1055beb5d3100224b9fec969d4321b470dbd47d0bf36c18c1bf0b5fc3d2ff7ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1055beb5d3100224b9fec969d4321b470dbd47d0bf36c18c1bf0b5fc3d2ff7ac->enter($__internal_1055beb5d3100224b9fec969d4321b470dbd47d0bf36c18c1bf0b5fc3d2ff7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_1055beb5d3100224b9fec969d4321b470dbd47d0bf36c18c1bf0b5fc3d2ff7ac->leave($__internal_1055beb5d3100224b9fec969d4321b470dbd47d0bf36c18c1bf0b5fc3d2ff7ac_prof);

    }

    // line 34
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_58ff2de93b7004b2304a848267cf6764083a043a0280980884a8a87ab183e775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ff2de93b7004b2304a848267cf6764083a043a0280980884a8a87ab183e775->enter($__internal_58ff2de93b7004b2304a848267cf6764083a043a0280980884a8a87ab183e775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_58ff2de93b7004b2304a848267cf6764083a043a0280980884a8a87ab183e775->leave($__internal_58ff2de93b7004b2304a848267cf6764083a043a0280980884a8a87ab183e775_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f93d4e2464f685ff2748c6cc4d1fc12c5c863f3019a144db0e154b8fd6ce685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f93d4e2464f685ff2748c6cc4d1fc12c5c863f3019a144db0e154b8fd6ce685->enter($__internal_5f93d4e2464f685ff2748c6cc4d1fc12c5c863f3019a144db0e154b8fd6ce685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_5f93d4e2464f685ff2748c6cc4d1fc12c5c863f3019a144db0e154b8fd6ce685->leave($__internal_5f93d4e2464f685ff2748c6cc4d1fc12c5c863f3019a144db0e154b8fd6ce685_prof);

    }

    // line 43
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_701e3fb3809c2ecd115fc9f8463e8e4351ab4ba1f4c5272b10ef6ced5b717109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_701e3fb3809c2ecd115fc9f8463e8e4351ab4ba1f4c5272b10ef6ced5b717109->enter($__internal_701e3fb3809c2ecd115fc9f8463e8e4351ab4ba1f4c5272b10ef6ced5b717109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_701e3fb3809c2ecd115fc9f8463e8e4351ab4ba1f4c5272b10ef6ced5b717109->leave($__internal_701e3fb3809c2ecd115fc9f8463e8e4351ab4ba1f4c5272b10ef6ced5b717109_prof);

    }

    public function getTemplateName()
    {
        return "@AvanzuAdminTheme/layout/login-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 43,  155 => 39,  149 => 38,  138 => 34,  124 => 25,  118 => 24,  108 => 17,  102 => 16,  90 => 13,  81 => 45,  79 => 43,  76 => 41,  74 => 38,  70 => 35,  68 => 34,  63 => 31,  60 => 24,  55 => 21,  51 => 19,  48 => 16,  43 => 13,  30 => 2,  28 => 1,);
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
    <title>{% block title %}Avanzu Admin!{% endblock %}</title>

    {# -------------------------------------------------------------------------------------------------- STYLESHEETS #}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/admin-lte-all.css') }}\" />
    {% endblock %}


    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    {# --------------------------------------------------------------------------------------------- JAVASCRIPTS_HEAD #}
    {%  block javascripts_head %}
        <script type=\"text/javascript\" src=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/scripts/modernizr.js') }}\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    {% endblock %}

</head>
<body class=\"login-page\">
{% block page_content %}{% endblock %}


{# ------------------------------------------------------------------------------------------------------ JAVASCRIPTS #}
{% block javascripts %}
    <script src=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/scripts/admin-lte-all.js') }}\"></script>
{% endblock %}

{# ----------------------------------------------------------------------------------------------- JAVASCRIPTS_INLINE #}
{% block javascripts_inline %}
{% endblock %}
</body>
</html>
", "@AvanzuAdminTheme/layout/login-layout.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\avanzu\\admin-theme-bundle\\Resources\\views\\layout\\login-layout.html.twig");
    }
}
