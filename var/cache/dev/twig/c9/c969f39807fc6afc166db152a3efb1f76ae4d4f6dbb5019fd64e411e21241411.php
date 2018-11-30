<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_45086c4c5d442a5268d2bbe7b4cffc23eeacf77f42ab5397f3fdd7451516daa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_300e0168c2b75745cc97e77ae8ba65961913e657bb2a48037056a449880749af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300e0168c2b75745cc97e77ae8ba65961913e657bb2a48037056a449880749af->enter($__internal_300e0168c2b75745cc97e77ae8ba65961913e657bb2a48037056a449880749af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_300e0168c2b75745cc97e77ae8ba65961913e657bb2a48037056a449880749af->leave($__internal_300e0168c2b75745cc97e77ae8ba65961913e657bb2a48037056a449880749af_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aafda742ab413c6a86ea79048afe77fb19fd57672c385e4e37c63bf658efe180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aafda742ab413c6a86ea79048afe77fb19fd57672c385e4e37c63bf658efe180->enter($__internal_aafda742ab413c6a86ea79048afe77fb19fd57672c385e4e37c63bf658efe180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_aafda742ab413c6a86ea79048afe77fb19fd57672c385e4e37c63bf658efe180->leave($__internal_aafda742ab413c6a86ea79048afe77fb19fd57672c385e4e37c63bf658efe180_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
