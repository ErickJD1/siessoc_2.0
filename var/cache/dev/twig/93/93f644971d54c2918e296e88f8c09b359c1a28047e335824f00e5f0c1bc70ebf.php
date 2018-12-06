<?php

/* @SalexUser/Resetting/request.html.twig */
class __TwigTemplate_63a24a517530c393f8ad9e4c8f66d3a911460591a3f8d463698d4a3b542572da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@SalexUser/Resetting/request.html.twig", 1);
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
        $__internal_9ccaf90338d7abd198cbafa37350994d23a0ef6c8ec59e585f7d1b8b90bfb13c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ccaf90338d7abd198cbafa37350994d23a0ef6c8ec59e585f7d1b8b90bfb13c->enter($__internal_9ccaf90338d7abd198cbafa37350994d23a0ef6c8ec59e585f7d1b8b90bfb13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ccaf90338d7abd198cbafa37350994d23a0ef6c8ec59e585f7d1b8b90bfb13c->leave($__internal_9ccaf90338d7abd198cbafa37350994d23a0ef6c8ec59e585f7d1b8b90bfb13c_prof);

    }

    // line 3
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_d2db19c34be74f3b3b792e48c685416a50d02fa0c6e21ae4f7f11cb99cce2e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2db19c34be74f3b3b792e48c685416a50d02fa0c6e21ae4f7f11cb99cce2e7c->enter($__internal_d2db19c34be74f3b3b792e48c685416a50d02fa0c6e21ae4f7f11cb99cce2e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        // line 4
        $this->loadTemplate("SalexUserBundle:Resetting:request_content.html.twig", "@SalexUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_d2db19c34be74f3b3b792e48c685416a50d02fa0c6e21ae4f7f11cb99cce2e7c->leave($__internal_d2db19c34be74f3b3b792e48c685416a50d02fa0c6e21ae4f7f11cb99cce2e7c_prof);

    }

    public function getTemplateName()
    {
        return "@SalexUser/Resetting/request.html.twig";
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
", "@SalexUser/Resetting/request.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
