<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e5c2d8b1aea804925193899019206f657fe1c578b6da0fd19439c95d4f9d0321 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_387f2eae3d4a237c1406099bf03feae0d9cf8dd0bb43398b0f25e0244b1e7411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387f2eae3d4a237c1406099bf03feae0d9cf8dd0bb43398b0f25e0244b1e7411->enter($__internal_387f2eae3d4a237c1406099bf03feae0d9cf8dd0bb43398b0f25e0244b1e7411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_387f2eae3d4a237c1406099bf03feae0d9cf8dd0bb43398b0f25e0244b1e7411->leave($__internal_387f2eae3d4a237c1406099bf03feae0d9cf8dd0bb43398b0f25e0244b1e7411_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca2534398ff58b94b3284e069e347544e368a65bb31cc8f94e3882e7145d6ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca2534398ff58b94b3284e069e347544e368a65bb31cc8f94e3882e7145d6ce3->enter($__internal_ca2534398ff58b94b3284e069e347544e368a65bb31cc8f94e3882e7145d6ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ca2534398ff58b94b3284e069e347544e368a65bb31cc8f94e3882e7145d6ce3->leave($__internal_ca2534398ff58b94b3284e069e347544e368a65bb31cc8f94e3882e7145d6ce3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_57eb6df06af5cd9d091baf6299f1ff5b7245532490ef54c7e944d8b3254a658a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57eb6df06af5cd9d091baf6299f1ff5b7245532490ef54c7e944d8b3254a658a->enter($__internal_57eb6df06af5cd9d091baf6299f1ff5b7245532490ef54c7e944d8b3254a658a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_57eb6df06af5cd9d091baf6299f1ff5b7245532490ef54c7e944d8b3254a658a->leave($__internal_57eb6df06af5cd9d091baf6299f1ff5b7245532490ef54c7e944d8b3254a658a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
