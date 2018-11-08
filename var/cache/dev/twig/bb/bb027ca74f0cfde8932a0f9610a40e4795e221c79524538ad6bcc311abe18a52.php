<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_e45275d5fdfb84ec9137eb4c0e150e2b7d47bc9bc3006997088eb01fe92bcb89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_6ee322fcb662a10139716d431f055bf43a6969727c3330a00932627bdcaac5a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee322fcb662a10139716d431f055bf43a6969727c3330a00932627bdcaac5a8->enter($__internal_6ee322fcb662a10139716d431f055bf43a6969727c3330a00932627bdcaac5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ee322fcb662a10139716d431f055bf43a6969727c3330a00932627bdcaac5a8->leave($__internal_6ee322fcb662a10139716d431f055bf43a6969727c3330a00932627bdcaac5a8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0a110b5adb25b7f214ccd98d7d7797478827cfb714d49b278822e2cf08df5822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a110b5adb25b7f214ccd98d7d7797478827cfb714d49b278822e2cf08df5822->enter($__internal_0a110b5adb25b7f214ccd98d7d7797478827cfb714d49b278822e2cf08df5822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_0a110b5adb25b7f214ccd98d7d7797478827cfb714d49b278822e2cf08df5822->leave($__internal_0a110b5adb25b7f214ccd98d7d7797478827cfb714d49b278822e2cf08df5822_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
