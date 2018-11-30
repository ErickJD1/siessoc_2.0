<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_7f6759194fac5353402c88a8af845c09afc855c98e2cdadaed5fabf4182dcc0c extends Twig_Template
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
        $__internal_cf200a824c7d55d5d0252483b5ad48475386e7d5620bd2ba0cca24984626e527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf200a824c7d55d5d0252483b5ad48475386e7d5620bd2ba0cca24984626e527->enter($__internal_cf200a824c7d55d5d0252483b5ad48475386e7d5620bd2ba0cca24984626e527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf200a824c7d55d5d0252483b5ad48475386e7d5620bd2ba0cca24984626e527->leave($__internal_cf200a824c7d55d5d0252483b5ad48475386e7d5620bd2ba0cca24984626e527_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49ded0ff6ac43773a287249cbb159bab4f509098498e539fbd4ee4a3bfa5920c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ded0ff6ac43773a287249cbb159bab4f509098498e539fbd4ee4a3bfa5920c->enter($__internal_49ded0ff6ac43773a287249cbb159bab4f509098498e539fbd4ee4a3bfa5920c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_49ded0ff6ac43773a287249cbb159bab4f509098498e539fbd4ee4a3bfa5920c->leave($__internal_49ded0ff6ac43773a287249cbb159bab4f509098498e539fbd4ee4a3bfa5920c_prof);

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
", "@FOSUser/Resetting/reset.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
