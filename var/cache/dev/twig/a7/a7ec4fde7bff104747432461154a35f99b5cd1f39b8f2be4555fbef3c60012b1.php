<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_e5752cbab2080f84d475b6611d418e6546bdbfb68a37ce217b1055f1e9ead563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_66da2fe43c129550f1a393c8ec2ec9ee0034182c9b8649f17bbad6a40792244b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66da2fe43c129550f1a393c8ec2ec9ee0034182c9b8649f17bbad6a40792244b->enter($__internal_66da2fe43c129550f1a393c8ec2ec9ee0034182c9b8649f17bbad6a40792244b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66da2fe43c129550f1a393c8ec2ec9ee0034182c9b8649f17bbad6a40792244b->leave($__internal_66da2fe43c129550f1a393c8ec2ec9ee0034182c9b8649f17bbad6a40792244b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_17c3b6bd74ac6a4e56a3cf75db9989f081204c7f23750f675f3d895ce9f6e875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c3b6bd74ac6a4e56a3cf75db9989f081204c7f23750f675f3d895ce9f6e875->enter($__internal_17c3b6bd74ac6a4e56a3cf75db9989f081204c7f23750f675f3d895ce9f6e875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<div style=\"width: 50%;margin-left: 25%; margin-top: 10%\" class=\"box box-primary\">
";
        // line 5
        $this->loadTemplate("SalexUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 5)->display($context);
        // line 6
        echo "<div>
";
        
        $__internal_17c3b6bd74ac6a4e56a3cf75db9989f081204c7f23750f675f3d895ce9f6e875->leave($__internal_17c3b6bd74ac6a4e56a3cf75db9989f081204c7f23750f675f3d895ce9f6e875_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
", "FOSUserBundle:Resetting:reset.html.twig", "/home/ubuntu/workspace/src/SalexUserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
