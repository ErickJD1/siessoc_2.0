<?php

/* SalexUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_cb55aa6da135c3b9be6f03f35cc077660bdf6152682fcf1fa7f6f0a02525ff80 extends Twig_Template
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
        $__internal_e807e5d8ba4f84627b64107311c6035d32597be49a092cedd3e776f63c8654ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e807e5d8ba4f84627b64107311c6035d32597be49a092cedd3e776f63c8654ad->enter($__internal_e807e5d8ba4f84627b64107311c6035d32597be49a092cedd3e776f63c8654ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalexUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e807e5d8ba4f84627b64107311c6035d32597be49a092cedd3e776f63c8654ad->leave($__internal_e807e5d8ba4f84627b64107311c6035d32597be49a092cedd3e776f63c8654ad_prof);

    }

    // line 5
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_c30e167e8cea372204bc2738fc2a8298151b87fb5b66eaa3dc804abcbb9e60f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30e167e8cea372204bc2738fc2a8298151b87fb5b66eaa3dc804abcbb9e60f9->enter($__internal_c30e167e8cea372204bc2738fc2a8298151b87fb5b66eaa3dc804abcbb9e60f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c30e167e8cea372204bc2738fc2a8298151b87fb5b66eaa3dc804abcbb9e60f9->leave($__internal_c30e167e8cea372204bc2738fc2a8298151b87fb5b66eaa3dc804abcbb9e60f9_prof);

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
", "SalexUserBundle:Resetting:passwordAlreadyRequested.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle/Resources/views/Resetting/passwordAlreadyRequested.html.twig");
    }
}
