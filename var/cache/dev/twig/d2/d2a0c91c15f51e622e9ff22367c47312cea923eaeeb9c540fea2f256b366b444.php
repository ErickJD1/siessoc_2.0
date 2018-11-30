<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_317aeddd646de1af1fa237acdf8e377001e9d68737b4f4010d2ed8b83b14bc15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f46d2c5c9b13e85ade5fab82b12c6fd3994c229bcbf5cfc62532d1fd6021651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f46d2c5c9b13e85ade5fab82b12c6fd3994c229bcbf5cfc62532d1fd6021651->enter($__internal_6f46d2c5c9b13e85ade5fab82b12c6fd3994c229bcbf5cfc62532d1fd6021651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f46d2c5c9b13e85ade5fab82b12c6fd3994c229bcbf5cfc62532d1fd6021651->leave($__internal_6f46d2c5c9b13e85ade5fab82b12c6fd3994c229bcbf5cfc62532d1fd6021651_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_39a60d5b3826cbf6536be8fb758ea30f557aa8661276c1dea74b5e96f710e44b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a60d5b3826cbf6536be8fb758ea30f557aa8661276c1dea74b5e96f710e44b->enter($__internal_39a60d5b3826cbf6536be8fb758ea30f557aa8661276c1dea74b5e96f710e44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Edit Profile  ";
        
        $__internal_39a60d5b3826cbf6536be8fb758ea30f557aa8661276c1dea74b5e96f710e44b->leave($__internal_39a60d5b3826cbf6536be8fb758ea30f557aa8661276c1dea74b5e96f710e44b_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_f22c71e2dce374a7f3034fca9fca93bc089353eec178dab432c0934f846ee8b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22c71e2dce374a7f3034fca9fca93bc089353eec178dab432c0934f846ee8b3->enter($__internal_f22c71e2dce374a7f3034fca9fca93bc089353eec178dab432c0934f846ee8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        echo " ";
        
        $__internal_f22c71e2dce374a7f3034fca9fca93bc089353eec178dab432c0934f846ee8b3->leave($__internal_f22c71e2dce374a7f3034fca9fca93bc089353eec178dab432c0934f846ee8b3_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4d1fc41f2aed5f208360f4acd719b7f90d5b70394dc51dc87e05b663104c2766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d1fc41f2aed5f208360f4acd719b7f90d5b70394dc51dc87e05b663104c2766->enter($__internal_4d1fc41f2aed5f208360f4acd719b7f90d5b70394dc51dc87e05b663104c2766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<div class=\"box box-primary\">
\t\t\t";
        // line 10
        $this->loadTemplate("SalexUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t</div> <!-- End of box-primary -->
\t\t</div> <!-- end of col-md-6 -->
\t</div> <!-- End of Row -->
";
        
        $__internal_4d1fc41f2aed5f208360f4acd719b7f90d5b70394dc51dc87e05b663104c2766->leave($__internal_4d1fc41f2aed5f208360f4acd719b7f90d5b70394dc51dc87e05b663104c2766_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 11,  73 => 10,  68 => 7,  62 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout/base-layout.html.twig\" %}

{% block page_title %}Edit Profile  {% endblock %}
{% block page_subtitle %} {{ app.user.getName() }} {% endblock %}

{% block page_content %}
<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<div class=\"box box-primary\">
\t\t\t{% include \"SalexUserBundle:Profile:edit_content.html.twig\" %}
\t\t\t</div> <!-- End of box-primary -->
\t\t</div> <!-- end of col-md-6 -->
\t</div> <!-- End of Row -->
{% endblock %}", "FOSUserBundle:Profile:edit.html.twig", "/home/ubuntu/workspace/src/SalexUserBundle/Resources/views/Profile/edit.html.twig");
    }
}
