<?php

/* AvanzuAdminThemeBundle:layout:login-layout.html.twig */
class __TwigTemplate_8dec76bee31fb82a0ecad5b8ef2ace235c50eff97e4d7d5740e1ff59e766b3ae extends Twig_Template
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
        $__internal_b9650a5b1f70c3bd29b6d92b24624dec6cdffdb6d1438695bd7c0548d9079f94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9650a5b1f70c3bd29b6d92b24624dec6cdffdb6d1438695bd7c0548d9079f94->enter($__internal_b9650a5b1f70c3bd29b6d92b24624dec6cdffdb6d1438695bd7c0548d9079f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:login-layout.html.twig"));

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
        
        $__internal_b9650a5b1f70c3bd29b6d92b24624dec6cdffdb6d1438695bd7c0548d9079f94->leave($__internal_b9650a5b1f70c3bd29b6d92b24624dec6cdffdb6d1438695bd7c0548d9079f94_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8ad0f9f2fbf2c1d72ef1ae15b1c3fa3c8484f1cb4cb4b5e1f65220bd5439f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ad0f9f2fbf2c1d72ef1ae15b1c3fa3c8484f1cb4cb4b5e1f65220bd5439f15->enter($__internal_b8ad0f9f2fbf2c1d72ef1ae15b1c3fa3c8484f1cb4cb4b5e1f65220bd5439f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Avanzu Admin!";
        
        $__internal_b8ad0f9f2fbf2c1d72ef1ae15b1c3fa3c8484f1cb4cb4b5e1f65220bd5439f15->leave($__internal_b8ad0f9f2fbf2c1d72ef1ae15b1c3fa3c8484f1cb4cb4b5e1f65220bd5439f15_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_03a7e0de0062977f0c8bc20a8928ef9c111c30fe4c1334942501b1e4ad02f6eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03a7e0de0062977f0c8bc20a8928ef9c111c30fe4c1334942501b1e4ad02f6eb->enter($__internal_03a7e0de0062977f0c8bc20a8928ef9c111c30fe4c1334942501b1e4ad02f6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_03a7e0de0062977f0c8bc20a8928ef9c111c30fe4c1334942501b1e4ad02f6eb->leave($__internal_03a7e0de0062977f0c8bc20a8928ef9c111c30fe4c1334942501b1e4ad02f6eb_prof);

    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_34282ac3f884244889c575956f61e18b6a4f05242d80b51a71f21ad5d95e9e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34282ac3f884244889c575956f61e18b6a4f05242d80b51a71f21ad5d95e9e73->enter($__internal_34282ac3f884244889c575956f61e18b6a4f05242d80b51a71f21ad5d95e9e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_34282ac3f884244889c575956f61e18b6a4f05242d80b51a71f21ad5d95e9e73->leave($__internal_34282ac3f884244889c575956f61e18b6a4f05242d80b51a71f21ad5d95e9e73_prof);

    }

    // line 34
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_b20bef2899a90be0bfc55507a6b43df89f549fbc9c96ded37433e3c39f2de610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20bef2899a90be0bfc55507a6b43df89f549fbc9c96ded37433e3c39f2de610->enter($__internal_b20bef2899a90be0bfc55507a6b43df89f549fbc9c96ded37433e3c39f2de610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_b20bef2899a90be0bfc55507a6b43df89f549fbc9c96ded37433e3c39f2de610->leave($__internal_b20bef2899a90be0bfc55507a6b43df89f549fbc9c96ded37433e3c39f2de610_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c7dd463b3a5c31218bc624b7d2f24d664efc9989b526d42677860868aafee139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7dd463b3a5c31218bc624b7d2f24d664efc9989b526d42677860868aafee139->enter($__internal_c7dd463b3a5c31218bc624b7d2f24d664efc9989b526d42677860868aafee139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_c7dd463b3a5c31218bc624b7d2f24d664efc9989b526d42677860868aafee139->leave($__internal_c7dd463b3a5c31218bc624b7d2f24d664efc9989b526d42677860868aafee139_prof);

    }

    // line 43
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_b5d73b13dcce7f906dea169b7c7e7d43c8708d3dacab61b38cffdcb8dffa3006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d73b13dcce7f906dea169b7c7e7d43c8708d3dacab61b38cffdcb8dffa3006->enter($__internal_b5d73b13dcce7f906dea169b7c7e7d43c8708d3dacab61b38cffdcb8dffa3006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_b5d73b13dcce7f906dea169b7c7e7d43c8708d3dacab61b38cffdcb8dffa3006->leave($__internal_b5d73b13dcce7f906dea169b7c7e7d43c8708d3dacab61b38cffdcb8dffa3006_prof);

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
", "AvanzuAdminThemeBundle:layout:login-layout.html.twig", "/home/ubuntu/workspace/vendor/avanzu/admin-theme-bundle/Resources/views/layout/login-layout.html.twig");
    }
}
