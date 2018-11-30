<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_1998fec17064a74232cefaafbd36c779dd84af7b7dc94326f0edffd36238dfec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_26ec75655b08c788584be7feb9c27400eb095235a3ba518035d3aba7f92168c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ec75655b08c788584be7feb9c27400eb095235a3ba518035d3aba7f92168c7->enter($__internal_26ec75655b08c788584be7feb9c27400eb095235a3ba518035d3aba7f92168c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26ec75655b08c788584be7feb9c27400eb095235a3ba518035d3aba7f92168c7->leave($__internal_26ec75655b08c788584be7feb9c27400eb095235a3ba518035d3aba7f92168c7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d381569406d00149606e975777fbe130962610702d9eeb70ac26e01be304f0cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d381569406d00149606e975777fbe130962610702d9eeb70ac26e01be304f0cc->enter($__internal_d381569406d00149606e975777fbe130962610702d9eeb70ac26e01be304f0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d381569406d00149606e975777fbe130962610702d9eeb70ac26e01be304f0cc->leave($__internal_d381569406d00149606e975777fbe130962610702d9eeb70ac26e01be304f0cc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
", "FOSUserBundle:Group:edit.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
