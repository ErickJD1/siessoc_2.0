<?php

/* SalexUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_29e396d4d7bf398a2c987a39e0d720157aac181d641b632a634d031263173e72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "SalexUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
        $this->blocks = array(
            'user_auth_contents' => array($this, 'block_user_auth_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5969d9747b59bd9f2e5f5e2016080ef653ef8884494d2671e592fe9023a8cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5969d9747b59bd9f2e5f5e2016080ef653ef8884494d2671e592fe9023a8cd6->enter($__internal_a5969d9747b59bd9f2e5f5e2016080ef653ef8884494d2671e592fe9023a8cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalexUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5969d9747b59bd9f2e5f5e2016080ef653ef8884494d2671e592fe9023a8cd6->leave($__internal_a5969d9747b59bd9f2e5f5e2016080ef653ef8884494d2671e592fe9023a8cd6_prof);

    }

    // line 5
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_16644ad75f6c6da1584d2c178e30088728d532851b9458ad5ea163cb6d0dc7a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16644ad75f6c6da1584d2c178e30088728d532851b9458ad5ea163cb6d0dc7a8->enter($__internal_16644ad75f6c6da1584d2c178e30088728d532851b9458ad5ea163cb6d0dc7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_16644ad75f6c6da1584d2c178e30088728d532851b9458ad5ea163cb6d0dc7a8->leave($__internal_16644ad75f6c6da1584d2c178e30088728d532851b9458ad5ea163cb6d0dc7a8_prof);

    }

    public function getTemplateName()
    {
        return "SalexUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block user_auth_contents %}
<p>{{ 'resetting.password_already_requested'|trans }}</p>
{% endblock user_auth_contents %}
", "SalexUserBundle:Resetting:passwordAlreadyRequested.html.twig", "/home/ubuntu/workspace/src/SalexUserBundle/Resources/views/Resetting/passwordAlreadyRequested.html.twig");
    }
}
