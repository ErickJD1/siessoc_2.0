<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_d4d12c3d9a6ca56c7f7eb81a4655c1c3c5ff2f8659459e58e6ad11ed58aa7541 extends Twig_Template
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
        $__internal_6f5b89ce690789d28797401958edcbc9f3ac01b8af4a836a883d49135ab4320f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f5b89ce690789d28797401958edcbc9f3ac01b8af4a836a883d49135ab4320f->enter($__internal_6f5b89ce690789d28797401958edcbc9f3ac01b8af4a836a883d49135ab4320f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f5b89ce690789d28797401958edcbc9f3ac01b8af4a836a883d49135ab4320f->leave($__internal_6f5b89ce690789d28797401958edcbc9f3ac01b8af4a836a883d49135ab4320f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_13da7faacb0df4365696b4486356d5a1259536be8d6ef1ec4186e44f352917ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13da7faacb0df4365696b4486356d5a1259536be8d6ef1ec4186e44f352917ca->enter($__internal_13da7faacb0df4365696b4486356d5a1259536be8d6ef1ec4186e44f352917ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_13da7faacb0df4365696b4486356d5a1259536be8d6ef1ec4186e44f352917ca->leave($__internal_13da7faacb0df4365696b4486356d5a1259536be8d6ef1ec4186e44f352917ca_prof);

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
", "@FOSUser/Profile/show.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
