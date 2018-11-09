<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_403fce37dc8ab3460b7cfcd408b596f18c4a36a81da88fe5d76c3b6055a02dcc extends Twig_Template
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
        $__internal_5979d871ffa8a70c0cd62deaf1ea42d2f58923b16df7aa1a205194dba4fe3cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5979d871ffa8a70c0cd62deaf1ea42d2f58923b16df7aa1a205194dba4fe3cfd->enter($__internal_5979d871ffa8a70c0cd62deaf1ea42d2f58923b16df7aa1a205194dba4fe3cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5979d871ffa8a70c0cd62deaf1ea42d2f58923b16df7aa1a205194dba4fe3cfd->leave($__internal_5979d871ffa8a70c0cd62deaf1ea42d2f58923b16df7aa1a205194dba4fe3cfd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ebdc3748aa3725f167d6a0ae8f3755982efb5100a3ab51e28dc1797361803d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebdc3748aa3725f167d6a0ae8f3755982efb5100a3ab51e28dc1797361803d01->enter($__internal_ebdc3748aa3725f167d6a0ae8f3755982efb5100a3ab51e28dc1797361803d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_ebdc3748aa3725f167d6a0ae8f3755982efb5100a3ab51e28dc1797361803d01->leave($__internal_ebdc3748aa3725f167d6a0ae8f3755982efb5100a3ab51e28dc1797361803d01_prof);

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
", "@FOSUser/Resetting/request.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
