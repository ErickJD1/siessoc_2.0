<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_bed0c3b792b041e3b2a84942217257cd69ea596ff565507c62286ac3ed2f76e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_aab087213d13ed4f798c010792a3b109ffc8872471b2108a798c2a2d12e0f2ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab087213d13ed4f798c010792a3b109ffc8872471b2108a798c2a2d12e0f2ae->enter($__internal_aab087213d13ed4f798c010792a3b109ffc8872471b2108a798c2a2d12e0f2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aab087213d13ed4f798c010792a3b109ffc8872471b2108a798c2a2d12e0f2ae->leave($__internal_aab087213d13ed4f798c010792a3b109ffc8872471b2108a798c2a2d12e0f2ae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_40589c8fde9060e601a06ed5dfe99c5e95e00bec5788ed555644dc7e6d084496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40589c8fde9060e601a06ed5dfe99c5e95e00bec5788ed555644dc7e6d084496->enter($__internal_40589c8fde9060e601a06ed5dfe99c5e95e00bec5788ed555644dc7e6d084496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_40589c8fde9060e601a06ed5dfe99c5e95e00bec5788ed555644dc7e6d084496->leave($__internal_40589c8fde9060e601a06ed5dfe99c5e95e00bec5788ed555644dc7e6d084496_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
