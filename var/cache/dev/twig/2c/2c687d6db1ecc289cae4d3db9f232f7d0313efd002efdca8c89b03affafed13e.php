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
        $__internal_3b145b26f474be1e3b31d0fe11aa0fdda5b6735aa323c55e5ea10a332fad0020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b145b26f474be1e3b31d0fe11aa0fdda5b6735aa323c55e5ea10a332fad0020->enter($__internal_3b145b26f474be1e3b31d0fe11aa0fdda5b6735aa323c55e5ea10a332fad0020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b145b26f474be1e3b31d0fe11aa0fdda5b6735aa323c55e5ea10a332fad0020->leave($__internal_3b145b26f474be1e3b31d0fe11aa0fdda5b6735aa323c55e5ea10a332fad0020_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_b5e11b73dc6334ef5679aff3180dc8c7a02d2ed514d170a71ecf90fe8fd6a789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e11b73dc6334ef5679aff3180dc8c7a02d2ed514d170a71ecf90fe8fd6a789->enter($__internal_b5e11b73dc6334ef5679aff3180dc8c7a02d2ed514d170a71ecf90fe8fd6a789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_b5e11b73dc6334ef5679aff3180dc8c7a02d2ed514d170a71ecf90fe8fd6a789->leave($__internal_b5e11b73dc6334ef5679aff3180dc8c7a02d2ed514d170a71ecf90fe8fd6a789_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4f6d47de339b536183c353cdb4577bbafc48fc606557fbac4e1d9b026f3cee75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6d47de339b536183c353cdb4577bbafc48fc606557fbac4e1d9b026f3cee75->enter($__internal_4f6d47de339b536183c353cdb4577bbafc48fc606557fbac4e1d9b026f3cee75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "\t
";
        
        $__internal_4f6d47de339b536183c353cdb4577bbafc48fc606557fbac4e1d9b026f3cee75->leave($__internal_4f6d47de339b536183c353cdb4577bbafc48fc606557fbac4e1d9b026f3cee75_prof);

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
