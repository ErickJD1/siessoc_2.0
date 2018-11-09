<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_4ed2f7ccf9860bc744466180f288794f94546fad289c06f9e85ca0bf00b5b1fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'user_auth_contents' => array($this, 'block_user_auth_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_631afee8c34d5ad657890e3859dd2ec901a08b7f5fbe6cf68b77b237d1238896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_631afee8c34d5ad657890e3859dd2ec901a08b7f5fbe6cf68b77b237d1238896->enter($__internal_631afee8c34d5ad657890e3859dd2ec901a08b7f5fbe6cf68b77b237d1238896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_631afee8c34d5ad657890e3859dd2ec901a08b7f5fbe6cf68b77b237d1238896->leave($__internal_631afee8c34d5ad657890e3859dd2ec901a08b7f5fbe6cf68b77b237d1238896_prof);

    }

    // line 3
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_5334a51ee01a2feeaec26c0813c419beb4bfa4027f66354ff14a5e8fea27b0e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5334a51ee01a2feeaec26c0813c419beb4bfa4027f66354ff14a5e8fea27b0e9->enter($__internal_5334a51ee01a2feeaec26c0813c419beb4bfa4027f66354ff14a5e8fea27b0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        // line 4
        $this->loadTemplate("SalexUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_5334a51ee01a2feeaec26c0813c419beb4bfa4027f66354ff14a5e8fea27b0e9->leave($__internal_5334a51ee01a2feeaec26c0813c419beb4bfa4027f66354ff14a5e8fea27b0e9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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

{% block user_auth_contents %}
{% include \"SalexUserBundle:Resetting:request_content.html.twig\" %}
{% endblock user_auth_contents %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle/Resources/views/Resetting/request.html.twig");
    }
}
