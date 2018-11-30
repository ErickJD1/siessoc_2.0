<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_c0d1d697b0a6866bf6df4941baea2d01a4635539704b63560554c8cf4053cbf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_45d2fed77941e3781787f34b75e1d259c73aa6ce739dc969f9685770c4d0a33d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d2fed77941e3781787f34b75e1d259c73aa6ce739dc969f9685770c4d0a33d->enter($__internal_45d2fed77941e3781787f34b75e1d259c73aa6ce739dc969f9685770c4d0a33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45d2fed77941e3781787f34b75e1d259c73aa6ce739dc969f9685770c4d0a33d->leave($__internal_45d2fed77941e3781787f34b75e1d259c73aa6ce739dc969f9685770c4d0a33d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b4dee70831851e3e7de8cfc79cc983d27c62c3bb464bd1c94a95f7046d61859d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4dee70831851e3e7de8cfc79cc983d27c62c3bb464bd1c94a95f7046d61859d->enter($__internal_b4dee70831851e3e7de8cfc79cc983d27c62c3bb464bd1c94a95f7046d61859d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_b4dee70831851e3e7de8cfc79cc983d27c62c3bb464bd1c94a95f7046d61859d->leave($__internal_b4dee70831851e3e7de8cfc79cc983d27c62c3bb464bd1c94a95f7046d61859d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
