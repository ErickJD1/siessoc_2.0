<?php

/* :layout:loginBase.html.twig */
class __TwigTemplate_5aece2d0045f6648ea1863aae1821851a00b296de4cbdc1b73bd6f540da8ee86 extends Twig_Template
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
        $__internal_23a7e3e831c890a2b461ac2060bd3589be1891a50885bf23e210146bbe2dbc4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a7e3e831c890a2b461ac2060bd3589be1891a50885bf23e210146bbe2dbc4f->enter($__internal_23a7e3e831c890a2b461ac2060bd3589be1891a50885bf23e210146bbe2dbc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":layout:loginBase.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", ":layout:loginBase.html.twig", 1);
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
        
        $__internal_23a7e3e831c890a2b461ac2060bd3589be1891a50885bf23e210146bbe2dbc4f->leave($__internal_23a7e3e831c890a2b461ac2060bd3589be1891a50885bf23e210146bbe2dbc4f_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_68e4537b04de0cc97c95d36ac450d15b7f0b4c69854a91afa03a65ee32ece943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e4537b04de0cc97c95d36ac450d15b7f0b4c69854a91afa03a65ee32ece943->enter($__internal_68e4537b04de0cc97c95d36ac450d15b7f0b4c69854a91afa03a65ee32ece943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIESSOC";
        
        $__internal_68e4537b04de0cc97c95d36ac450d15b7f0b4c69854a91afa03a65ee32ece943->leave($__internal_68e4537b04de0cc97c95d36ac450d15b7f0b4c69854a91afa03a65ee32ece943_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_97c24d4960ef2ac51a9e8682b6e78fc08a10eec5a659326e792357761f51e9d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c24d4960ef2ac51a9e8682b6e78fc08a10eec5a659326e792357761f51e9d2->enter($__internal_97c24d4960ef2ac51a9e8682b6e78fc08a10eec5a659326e792357761f51e9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_97c24d4960ef2ac51a9e8682b6e78fc08a10eec5a659326e792357761f51e9d2->leave($__internal_97c24d4960ef2ac51a9e8682b6e78fc08a10eec5a659326e792357761f51e9d2_prof);

    }

    // line 30
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_000e7250a7694a6c2d68b4a300ebc20745d1d57fa50822c39b8f79abb1deedcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_000e7250a7694a6c2d68b4a300ebc20745d1d57fa50822c39b8f79abb1deedcd->enter($__internal_000e7250a7694a6c2d68b4a300ebc20745d1d57fa50822c39b8f79abb1deedcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 31
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_000e7250a7694a6c2d68b4a300ebc20745d1d57fa50822c39b8f79abb1deedcd->leave($__internal_000e7250a7694a6c2d68b4a300ebc20745d1d57fa50822c39b8f79abb1deedcd_prof);

    }

    // line 40
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4d3762aeb20d60659542a23a1c20e2a5795b844a9d1e5142757d89d00f50d6b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3762aeb20d60659542a23a1c20e2a5795b844a9d1e5142757d89d00f50d6b2->enter($__internal_4d3762aeb20d60659542a23a1c20e2a5795b844a9d1e5142757d89d00f50d6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_4d3762aeb20d60659542a23a1c20e2a5795b844a9d1e5142757d89d00f50d6b2->leave($__internal_4d3762aeb20d60659542a23a1c20e2a5795b844a9d1e5142757d89d00f50d6b2_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ad66302d1fa4b9ad183a46e74bbc0ed2ecece1c6fe21d4fe801fb80a9e9006a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad66302d1fa4b9ad183a46e74bbc0ed2ecece1c6fe21d4fe801fb80a9e9006a6->enter($__internal_ad66302d1fa4b9ad183a46e74bbc0ed2ecece1c6fe21d4fe801fb80a9e9006a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_ad66302d1fa4b9ad183a46e74bbc0ed2ecece1c6fe21d4fe801fb80a9e9006a6->leave($__internal_ad66302d1fa4b9ad183a46e74bbc0ed2ecece1c6fe21d4fe801fb80a9e9006a6_prof);

    }

    // line 62
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_a2a46d13bdf8aa8ada6b599fe0b24da9e9c7b8469eb21440d946ff91ec3f5c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a46d13bdf8aa8ada6b599fe0b24da9e9c7b8469eb21440d946ff91ec3f5c38->enter($__internal_a2a46d13bdf8aa8ada6b599fe0b24da9e9c7b8469eb21440d946ff91ec3f5c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_a2a46d13bdf8aa8ada6b599fe0b24da9e9c7b8469eb21440d946ff91ec3f5c38->leave($__internal_a2a46d13bdf8aa8ada6b599fe0b24da9e9c7b8469eb21440d946ff91ec3f5c38_prof);

    }

    public function getTemplateName()
    {
        return ":layout:loginBase.html.twig";
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
", ":layout:loginBase.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/layout/loginBase.html.twig");
    }
}
