<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_a7842723d16d12d9ed9db5976973b39110251d95cb4411ac5f2ed2447d97aa3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_42a17949a1bbfe0d3952142cdab0a49375103040b843b3c1d6570ee0fbfcfeab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a17949a1bbfe0d3952142cdab0a49375103040b843b3c1d6570ee0fbfcfeab->enter($__internal_42a17949a1bbfe0d3952142cdab0a49375103040b843b3c1d6570ee0fbfcfeab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42a17949a1bbfe0d3952142cdab0a49375103040b843b3c1d6570ee0fbfcfeab->leave($__internal_42a17949a1bbfe0d3952142cdab0a49375103040b843b3c1d6570ee0fbfcfeab_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cda875fd4d2a64d93ea05ebd64ebacb156357a20a129f0d163c8586ecc9a607b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cda875fd4d2a64d93ea05ebd64ebacb156357a20a129f0d163c8586ecc9a607b->enter($__internal_cda875fd4d2a64d93ea05ebd64ebacb156357a20a129f0d163c8586ecc9a607b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_cda875fd4d2a64d93ea05ebd64ebacb156357a20a129f0d163c8586ecc9a607b->leave($__internal_cda875fd4d2a64d93ea05ebd64ebacb156357a20a129f0d163c8586ecc9a607b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
