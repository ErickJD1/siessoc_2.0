<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_8e53eb094d7cbd45657e2e29f9fb7ad8f5334357d3c78fbeb4327b17b42ee817 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20156230985e2d6a0d4f273b6e48646c60321de83337dd6a1cc33338399c2ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20156230985e2d6a0d4f273b6e48646c60321de83337dd6a1cc33338399c2ef6->enter($__internal_20156230985e2d6a0d4f273b6e48646c60321de83337dd6a1cc33338399c2ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20156230985e2d6a0d4f273b6e48646c60321de83337dd6a1cc33338399c2ef6->leave($__internal_20156230985e2d6a0d4f273b6e48646c60321de83337dd6a1cc33338399c2ef6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b80dbcb7813a3e93af588542e8723cb5b4791872490deb3dd42fae881011304a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b80dbcb7813a3e93af588542e8723cb5b4791872490deb3dd42fae881011304a->enter($__internal_b80dbcb7813a3e93af588542e8723cb5b4791872490deb3dd42fae881011304a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_b80dbcb7813a3e93af588542e8723cb5b4791872490deb3dd42fae881011304a->leave($__internal_b80dbcb7813a3e93af588542e8723cb5b4791872490deb3dd42fae881011304a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
