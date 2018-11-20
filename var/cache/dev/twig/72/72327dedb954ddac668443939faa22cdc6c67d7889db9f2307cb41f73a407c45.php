<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_e4907a2c855e3029a031ef7850e9deeea9aec979b4945a6026022371b92977f8 extends Twig_Template
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
        $__internal_90b709983ca2e8dee2ad5f5de1ca9eaeaafa0aad463973d01e67a93f2619b519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b709983ca2e8dee2ad5f5de1ca9eaeaafa0aad463973d01e67a93f2619b519->enter($__internal_90b709983ca2e8dee2ad5f5de1ca9eaeaafa0aad463973d01e67a93f2619b519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90b709983ca2e8dee2ad5f5de1ca9eaeaafa0aad463973d01e67a93f2619b519->leave($__internal_90b709983ca2e8dee2ad5f5de1ca9eaeaafa0aad463973d01e67a93f2619b519_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f7bf53f45310fddcc36278a15f0d2667ad85c89b555d763f7d7b6242df8425f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f7bf53f45310fddcc36278a15f0d2667ad85c89b555d763f7d7b6242df8425f->enter($__internal_7f7bf53f45310fddcc36278a15f0d2667ad85c89b555d763f7d7b6242df8425f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<div style=\"width: 50%;margin-left: 25%; margin-top: 10%\" class=\"box box-primary\">
";
        // line 5
        $this->loadTemplate("SalexUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 5)->display($context);
        // line 6
        echo "<div>
";
        
        $__internal_7f7bf53f45310fddcc36278a15f0d2667ad85c89b555d763f7d7b6242df8425f->leave($__internal_7f7bf53f45310fddcc36278a15f0d2667ad85c89b555d763f7d7b6242df8425f_prof);

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
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
