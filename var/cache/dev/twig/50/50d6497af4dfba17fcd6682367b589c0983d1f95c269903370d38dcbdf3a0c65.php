<?php

/* @SalexUser/Resetting/reset.html.twig */
class __TwigTemplate_b37ab9bef43afc4bc89e0c2704b56f93104816fcc24a076e593a11f71c791dbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@SalexUser/Resetting/reset.html.twig", 1);
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
        $__internal_338d3c121842406f6a1bcdf0c812374bb1b4fe3b834cb2be138aa2ac21e623f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_338d3c121842406f6a1bcdf0c812374bb1b4fe3b834cb2be138aa2ac21e623f1->enter($__internal_338d3c121842406f6a1bcdf0c812374bb1b4fe3b834cb2be138aa2ac21e623f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_338d3c121842406f6a1bcdf0c812374bb1b4fe3b834cb2be138aa2ac21e623f1->leave($__internal_338d3c121842406f6a1bcdf0c812374bb1b4fe3b834cb2be138aa2ac21e623f1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_025745f86977293f7ffa5db2639e31723a011a70512fe8a7407bd13c67012903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_025745f86977293f7ffa5db2639e31723a011a70512fe8a7407bd13c67012903->enter($__internal_025745f86977293f7ffa5db2639e31723a011a70512fe8a7407bd13c67012903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<div style=\"width: 50%;margin-left: 25%; margin-top: 10%\" class=\"box box-primary\">
";
        // line 5
        $this->loadTemplate("SalexUserBundle:Resetting:reset_content.html.twig", "@SalexUser/Resetting/reset.html.twig", 5)->display($context);
        // line 6
        echo "<div>
";
        
        $__internal_025745f86977293f7ffa5db2639e31723a011a70512fe8a7407bd13c67012903->leave($__internal_025745f86977293f7ffa5db2639e31723a011a70512fe8a7407bd13c67012903_prof);

    }

    public function getTemplateName()
    {
        return "@SalexUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
<div style=\"width: 50%;margin-left: 25%; margin-top: 10%\" class=\"box box-primary\">
{% include \"SalexUserBundle:Resetting:reset_content.html.twig\" %}
<div>
{% endblock fos_user_content %}
", "@SalexUser/Resetting/reset.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
