<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_be6b2ac8235e4324601c5b54773d4c9ba03fc6dc4de0218eaa920225450efa64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_de5323f047b6d14bcca6849b048986dcc4c7d24bfed5174107a8d882189807e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5323f047b6d14bcca6849b048986dcc4c7d24bfed5174107a8d882189807e0->enter($__internal_de5323f047b6d14bcca6849b048986dcc4c7d24bfed5174107a8d882189807e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de5323f047b6d14bcca6849b048986dcc4c7d24bfed5174107a8d882189807e0->leave($__internal_de5323f047b6d14bcca6849b048986dcc4c7d24bfed5174107a8d882189807e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b6941970822f6a60631f170c46f04407c74df32e2d7dc238b458053a7e87c96c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6941970822f6a60631f170c46f04407c74df32e2d7dc238b458053a7e87c96c->enter($__internal_b6941970822f6a60631f170c46f04407c74df32e2d7dc238b458053a7e87c96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_b6941970822f6a60631f170c46f04407c74df32e2d7dc238b458053a7e87c96c->leave($__internal_b6941970822f6a60631f170c46f04407c74df32e2d7dc238b458053a7e87c96c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
", "@FOSUser/Group/list.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
