<?php

/* :default:dashboard.html.twig */
class __TwigTemplate_1f8f3ba32e9b1287da09188dce49b1dacecd57232f4bfb4991066ebc4ec05cfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":default:dashboard.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62d7fddb7f0bd6465e35c939e0329031f58642cfe6cb1264343c4f527532a38f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d7fddb7f0bd6465e35c939e0329031f58642cfe6cb1264343c4f527532a38f->enter($__internal_62d7fddb7f0bd6465e35c939e0329031f58642cfe6cb1264343c4f527532a38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62d7fddb7f0bd6465e35c939e0329031f58642cfe6cb1264343c4f527532a38f->leave($__internal_62d7fddb7f0bd6465e35c939e0329031f58642cfe6cb1264343c4f527532a38f_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_a702c1f9e4f163fa67be24b663c9406b543b3a57e97f058f0c401c784b01cbd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a702c1f9e4f163fa67be24b663c9406b543b3a57e97f058f0c401c784b01cbd8->enter($__internal_a702c1f9e4f163fa67be24b663c9406b543b3a57e97f058f0c401c784b01cbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_a702c1f9e4f163fa67be24b663c9406b543b3a57e97f058f0c401c784b01cbd8->leave($__internal_a702c1f9e4f163fa67be24b663c9406b543b3a57e97f058f0c401c784b01cbd8_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_bffe835fb88dcaa33a84006b9c07233df8f0c3b5a53392d5432636747d553a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bffe835fb88dcaa33a84006b9c07233df8f0c3b5a53392d5432636747d553a28->enter($__internal_bffe835fb88dcaa33a84006b9c07233df8f0c3b5a53392d5432636747d553a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "\t
";
        
        $__internal_bffe835fb88dcaa33a84006b9c07233df8f0c3b5a53392d5432636747d553a28->leave($__internal_bffe835fb88dcaa33a84006b9c07233df8f0c3b5a53392d5432636747d553a28_prof);

    }

    public function getTemplateName()
    {
        return ":default:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout/base-layout.html.twig' %}
{% block page_title %}Dashboard{% endblock %}
{% block page_content %}
\t
{% endblock %}", ":default:dashboard.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\app/Resources\\views/default/dashboard.html.twig");
    }
}
