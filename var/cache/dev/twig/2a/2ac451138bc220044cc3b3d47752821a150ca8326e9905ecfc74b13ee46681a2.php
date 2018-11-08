<?php

/* @SalexUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_a5c775cdbbdda263546b4a66068ef51a65e257620965f13891b54ea32d3d7cd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@SalexUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_677c6d75e9a0b663a3a2b88e65f7158b29f0181d02e1eea5cd552916f903bb30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677c6d75e9a0b663a3a2b88e65f7158b29f0181d02e1eea5cd552916f903bb30->enter($__internal_677c6d75e9a0b663a3a2b88e65f7158b29f0181d02e1eea5cd552916f903bb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_677c6d75e9a0b663a3a2b88e65f7158b29f0181d02e1eea5cd552916f903bb30->leave($__internal_677c6d75e9a0b663a3a2b88e65f7158b29f0181d02e1eea5cd552916f903bb30_prof);

    }

    // line 5
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_557ee94a4e4c4a2e01b8516a5465d1519a1b7ac21be3b18af8e1893ada1e6460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557ee94a4e4c4a2e01b8516a5465d1519a1b7ac21be3b18af8e1893ada1e6460->enter($__internal_557ee94a4e4c4a2e01b8516a5465d1519a1b7ac21be3b18af8e1893ada1e6460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_557ee94a4e4c4a2e01b8516a5465d1519a1b7ac21be3b18af8e1893ada1e6460->leave($__internal_557ee94a4e4c4a2e01b8516a5465d1519a1b7ac21be3b18af8e1893ada1e6460_prof);

    }

    public function getTemplateName()
    {
        return "@SalexUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block user_auth_contents %}
<p>{{ 'resetting.password_already_requested'|trans }}</p>
{% endblock user_auth_contents %}
", "@SalexUser/Resetting/passwordAlreadyRequested.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle\\Resources\\views\\Resetting\\passwordAlreadyRequested.html.twig");
    }
}
