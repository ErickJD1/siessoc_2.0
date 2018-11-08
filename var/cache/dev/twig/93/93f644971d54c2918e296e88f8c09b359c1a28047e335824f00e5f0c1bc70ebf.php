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
        $__internal_9363860f817408d89a320c998895f6d2a87f7d2afc298c004a1dde60fa5690fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9363860f817408d89a320c998895f6d2a87f7d2afc298c004a1dde60fa5690fc->enter($__internal_9363860f817408d89a320c998895f6d2a87f7d2afc298c004a1dde60fa5690fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9363860f817408d89a320c998895f6d2a87f7d2afc298c004a1dde60fa5690fc->leave($__internal_9363860f817408d89a320c998895f6d2a87f7d2afc298c004a1dde60fa5690fc_prof);

    }

    // line 3
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_126cc30139165e707259ed2884fc4423d426d82edb49b23996010bea229980c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126cc30139165e707259ed2884fc4423d426d82edb49b23996010bea229980c2->enter($__internal_126cc30139165e707259ed2884fc4423d426d82edb49b23996010bea229980c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        // line 4
        $this->loadTemplate("SalexUserBundle:Resetting:request_content.html.twig", "@SalexUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_126cc30139165e707259ed2884fc4423d426d82edb49b23996010bea229980c2->leave($__internal_126cc30139165e707259ed2884fc4423d426d82edb49b23996010bea229980c2_prof);

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
