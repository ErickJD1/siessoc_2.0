<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_a462d7de3e35f14279159efdf967df7f7a2a9070046036f306715fbe4d6686a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_104de4ff1764aad97c08188f56e7cebd12c6b6cc01966c1d2e6216bec77c2c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104de4ff1764aad97c08188f56e7cebd12c6b6cc01966c1d2e6216bec77c2c32->enter($__internal_104de4ff1764aad97c08188f56e7cebd12c6b6cc01966c1d2e6216bec77c2c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_104de4ff1764aad97c08188f56e7cebd12c6b6cc01966c1d2e6216bec77c2c32->leave($__internal_104de4ff1764aad97c08188f56e7cebd12c6b6cc01966c1d2e6216bec77c2c32_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_51a54f7a9eeb3b5369c1cb47455e185eefe0f98cd4048a26fd7052067485ea19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a54f7a9eeb3b5369c1cb47455e185eefe0f98cd4048a26fd7052067485ea19->enter($__internal_51a54f7a9eeb3b5369c1cb47455e185eefe0f98cd4048a26fd7052067485ea19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_51a54f7a9eeb3b5369c1cb47455e185eefe0f98cd4048a26fd7052067485ea19->leave($__internal_51a54f7a9eeb3b5369c1cb47455e185eefe0f98cd4048a26fd7052067485ea19_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
