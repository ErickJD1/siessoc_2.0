<?php

/* AvanzuAdminThemeBundle:layout:login-layout.html.twig */
class __TwigTemplate_6147349ff8509dc4bb4816549de7ff316ea752c7e046483707208566a31d05dc extends Twig_Template
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
        $__internal_c49656b8408231663672ef1fff4928db14a64e843388e004907635cc9669d795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c49656b8408231663672ef1fff4928db14a64e843388e004907635cc9669d795->enter($__internal_c49656b8408231663672ef1fff4928db14a64e843388e004907635cc9669d795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:login-layout.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "AvanzuAdminThemeBundle:layout:login-layout.html.twig", 1);
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
        
        $__internal_c49656b8408231663672ef1fff4928db14a64e843388e004907635cc9669d795->leave($__internal_c49656b8408231663672ef1fff4928db14a64e843388e004907635cc9669d795_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_e28a123f4404fd52ef2ecf95f362c30aae28f219af18e77967d89e9a93d164cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e28a123f4404fd52ef2ecf95f362c30aae28f219af18e77967d89e9a93d164cd->enter($__internal_e28a123f4404fd52ef2ecf95f362c30aae28f219af18e77967d89e9a93d164cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Avanzu Admin!";
        
        $__internal_e28a123f4404fd52ef2ecf95f362c30aae28f219af18e77967d89e9a93d164cd->leave($__internal_e28a123f4404fd52ef2ecf95f362c30aae28f219af18e77967d89e9a93d164cd_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_635ce194def6c47b1b4eba6b23d7892a8e81e9869cc446b1a40203bc0e556406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635ce194def6c47b1b4eba6b23d7892a8e81e9869cc446b1a40203bc0e556406->enter($__internal_635ce194def6c47b1b4eba6b23d7892a8e81e9869cc446b1a40203bc0e556406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_635ce194def6c47b1b4eba6b23d7892a8e81e9869cc446b1a40203bc0e556406->leave($__internal_635ce194def6c47b1b4eba6b23d7892a8e81e9869cc446b1a40203bc0e556406_prof);

    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_b8be4b0b9c581c439606ddf94be88c3312a6d7c4356ad7086f239cf43d755343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8be4b0b9c581c439606ddf94be88c3312a6d7c4356ad7086f239cf43d755343->enter($__internal_b8be4b0b9c581c439606ddf94be88c3312a6d7c4356ad7086f239cf43d755343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_b8be4b0b9c581c439606ddf94be88c3312a6d7c4356ad7086f239cf43d755343->leave($__internal_b8be4b0b9c581c439606ddf94be88c3312a6d7c4356ad7086f239cf43d755343_prof);

    }

    // line 34
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_870aa740f0afd6d6b9bb6806f124c74fc1b788d26fdff4fb876e24cb9977375c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_870aa740f0afd6d6b9bb6806f124c74fc1b788d26fdff4fb876e24cb9977375c->enter($__internal_870aa740f0afd6d6b9bb6806f124c74fc1b788d26fdff4fb876e24cb9977375c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_870aa740f0afd6d6b9bb6806f124c74fc1b788d26fdff4fb876e24cb9977375c->leave($__internal_870aa740f0afd6d6b9bb6806f124c74fc1b788d26fdff4fb876e24cb9977375c_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0a44d791ebbf429e6d32fa2884194e4fdaa15a8de31d3162d4799ebe0f99c3c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a44d791ebbf429e6d32fa2884194e4fdaa15a8de31d3162d4799ebe0f99c3c6->enter($__internal_0a44d791ebbf429e6d32fa2884194e4fdaa15a8de31d3162d4799ebe0f99c3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0a44d791ebbf429e6d32fa2884194e4fdaa15a8de31d3162d4799ebe0f99c3c6->leave($__internal_0a44d791ebbf429e6d32fa2884194e4fdaa15a8de31d3162d4799ebe0f99c3c6_prof);

    }

    // line 43
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_e775ab37f7ca73660e35f76945c888db2f462398c5b1c17a5610f6b1ea93b48f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e775ab37f7ca73660e35f76945c888db2f462398c5b1c17a5610f6b1ea93b48f->enter($__internal_e775ab37f7ca73660e35f76945c888db2f462398c5b1c17a5610f6b1ea93b48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_e775ab37f7ca73660e35f76945c888db2f462398c5b1c17a5610f6b1ea93b48f->leave($__internal_e775ab37f7ca73660e35f76945c888db2f462398c5b1c17a5610f6b1ea93b48f_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:layout:login-layout.html.twig";
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
", "AvanzuAdminThemeBundle:layout:login-layout.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\avanzu\\admin-theme-bundle/Resources/views/layout/login-layout.html.twig");
    }
}
