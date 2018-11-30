<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9b426c878326f23bba3aa495fe7f7bcbd2f585ff877f0a85678211c1eb0e6a8c extends Twig_Template
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
        $__internal_d4aa5485ba5931623288366089d279480f5a1d2c2f2ac8c0afb9524d5ed51a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4aa5485ba5931623288366089d279480f5a1d2c2f2ac8c0afb9524d5ed51a3b->enter($__internal_d4aa5485ba5931623288366089d279480f5a1d2c2f2ac8c0afb9524d5ed51a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4aa5485ba5931623288366089d279480f5a1d2c2f2ac8c0afb9524d5ed51a3b->leave($__internal_d4aa5485ba5931623288366089d279480f5a1d2c2f2ac8c0afb9524d5ed51a3b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b177dfebdab1e5e62c8baf0440b63d8ddb7771487ec189fc0024fd56819a4e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b177dfebdab1e5e62c8baf0440b63d8ddb7771487ec189fc0024fd56819a4e5->enter($__internal_8b177dfebdab1e5e62c8baf0440b63d8ddb7771487ec189fc0024fd56819a4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8b177dfebdab1e5e62c8baf0440b63d8ddb7771487ec189fc0024fd56819a4e5->leave($__internal_8b177dfebdab1e5e62c8baf0440b63d8ddb7771487ec189fc0024fd56819a4e5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_54b2b2ca147ea3376852f5adb1b4becdef8754d8be2363b729c513005481018c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b2b2ca147ea3376852f5adb1b4becdef8754d8be2363b729c513005481018c->enter($__internal_54b2b2ca147ea3376852f5adb1b4becdef8754d8be2363b729c513005481018c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_54b2b2ca147ea3376852f5adb1b4becdef8754d8be2363b729c513005481018c->leave($__internal_54b2b2ca147ea3376852f5adb1b4becdef8754d8be2363b729c513005481018c_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
