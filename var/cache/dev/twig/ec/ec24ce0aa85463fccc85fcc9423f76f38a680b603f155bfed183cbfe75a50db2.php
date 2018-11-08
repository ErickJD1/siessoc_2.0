<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_325165ed24c59866a54db11137adbf4b8bd8bcf08d0bef4ad8a6c0eeb3668c17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_8aff8148b81174cecae34df2e414d6e6b0b2c094988f7ff61fb25f49201c59d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aff8148b81174cecae34df2e414d6e6b0b2c094988f7ff61fb25f49201c59d5->enter($__internal_8aff8148b81174cecae34df2e414d6e6b0b2c094988f7ff61fb25f49201c59d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8aff8148b81174cecae34df2e414d6e6b0b2c094988f7ff61fb25f49201c59d5->leave($__internal_8aff8148b81174cecae34df2e414d6e6b0b2c094988f7ff61fb25f49201c59d5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18769b561f938b752a9352c6a9d20e38646f8e1066449c43ff90a53a827e23d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18769b561f938b752a9352c6a9d20e38646f8e1066449c43ff90a53a827e23d9->enter($__internal_18769b561f938b752a9352c6a9d20e38646f8e1066449c43ff90a53a827e23d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_18769b561f938b752a9352c6a9d20e38646f8e1066449c43ff90a53a827e23d9->leave($__internal_18769b561f938b752a9352c6a9d20e38646f8e1066449c43ff90a53a827e23d9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
