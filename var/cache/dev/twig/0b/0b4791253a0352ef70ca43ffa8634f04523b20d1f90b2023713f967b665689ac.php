<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_00d6a8d0e97cf4a62114af54999ba532a0027a0847b1c14599dfe4f6d52308cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_6f484af60c6e9c474968020fda536c4e026f96af8a35a8ab35057bfa1325f7d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f484af60c6e9c474968020fda536c4e026f96af8a35a8ab35057bfa1325f7d9->enter($__internal_6f484af60c6e9c474968020fda536c4e026f96af8a35a8ab35057bfa1325f7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f484af60c6e9c474968020fda536c4e026f96af8a35a8ab35057bfa1325f7d9->leave($__internal_6f484af60c6e9c474968020fda536c4e026f96af8a35a8ab35057bfa1325f7d9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7422364203b4cce689f53808039127fd096fd1d0d99239c506a7409d07e85b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7422364203b4cce689f53808039127fd096fd1d0d99239c506a7409d07e85b8a->enter($__internal_7422364203b4cce689f53808039127fd096fd1d0d99239c506a7409d07e85b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7422364203b4cce689f53808039127fd096fd1d0d99239c506a7409d07e85b8a->leave($__internal_7422364203b4cce689f53808039127fd096fd1d0d99239c506a7409d07e85b8a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1831e27af3c0e1eecbf0e64e681536ce48d9f5d625eafae7007c224855520052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1831e27af3c0e1eecbf0e64e681536ce48d9f5d625eafae7007c224855520052->enter($__internal_1831e27af3c0e1eecbf0e64e681536ce48d9f5d625eafae7007c224855520052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1831e27af3c0e1eecbf0e64e681536ce48d9f5d625eafae7007c224855520052->leave($__internal_1831e27af3c0e1eecbf0e64e681536ce48d9f5d625eafae7007c224855520052_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
