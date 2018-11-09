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
        $__internal_ccd2a05837a2d0bd081294099a15d4183bc6ed252f837b97e4cdb97361f12cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd2a05837a2d0bd081294099a15d4183bc6ed252f837b97e4cdb97361f12cbf->enter($__internal_ccd2a05837a2d0bd081294099a15d4183bc6ed252f837b97e4cdb97361f12cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccd2a05837a2d0bd081294099a15d4183bc6ed252f837b97e4cdb97361f12cbf->leave($__internal_ccd2a05837a2d0bd081294099a15d4183bc6ed252f837b97e4cdb97361f12cbf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ddc2b4f4dfed720cfa6d27046c6d542f135a37732add5fffdee7b0e1bd5265bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc2b4f4dfed720cfa6d27046c6d542f135a37732add5fffdee7b0e1bd5265bd->enter($__internal_ddc2b4f4dfed720cfa6d27046c6d542f135a37732add5fffdee7b0e1bd5265bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_ddc2b4f4dfed720cfa6d27046c6d542f135a37732add5fffdee7b0e1bd5265bd->leave($__internal_ddc2b4f4dfed720cfa6d27046c6d542f135a37732add5fffdee7b0e1bd5265bd_prof);

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
