<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_460efb91564461a0be65c596336bcb543c1598051cfc2647189da0759821f5a8 extends Twig_Template
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
        $__internal_6ef759ded1a33ddd1b938c7a05de37204327fd87fc4eed4780e88451cf7e2211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef759ded1a33ddd1b938c7a05de37204327fd87fc4eed4780e88451cf7e2211->enter($__internal_6ef759ded1a33ddd1b938c7a05de37204327fd87fc4eed4780e88451cf7e2211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ef759ded1a33ddd1b938c7a05de37204327fd87fc4eed4780e88451cf7e2211->leave($__internal_6ef759ded1a33ddd1b938c7a05de37204327fd87fc4eed4780e88451cf7e2211_prof);

    }

    // line 3
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_ac6b6c68dc8697a3de4647c2729c59f5fb20be209dd5be3a21cd04d5c1a2631a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac6b6c68dc8697a3de4647c2729c59f5fb20be209dd5be3a21cd04d5c1a2631a->enter($__internal_ac6b6c68dc8697a3de4647c2729c59f5fb20be209dd5be3a21cd04d5c1a2631a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        // line 4
        $this->loadTemplate("SalexUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ac6b6c68dc8697a3de4647c2729c59f5fb20be209dd5be3a21cd04d5c1a2631a->leave($__internal_ac6b6c68dc8697a3de4647c2729c59f5fb20be209dd5be3a21cd04d5c1a2631a_prof);

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
", "FOSUserBundle:Resetting:request.html.twig", "/home/ubuntu/workspace/src/SalexUserBundle/Resources/views/Resetting/request.html.twig");
    }
}
