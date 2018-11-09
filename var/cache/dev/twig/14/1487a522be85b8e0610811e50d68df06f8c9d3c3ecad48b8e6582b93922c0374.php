<?php

/* @SalexUser/Profile/edit.html.twig */
class __TwigTemplate_ed2d2b2d8d2b9a7a2fd6b2e06d48aab87f3c1d1ac4a02472ad1994dcc3a19c76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "@SalexUser/Profile/edit.html.twig", 1);
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
        $__internal_16918b74eb4d360e76eab80dc5c35a534ef720b2293a4263085025c02823be81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16918b74eb4d360e76eab80dc5c35a534ef720b2293a4263085025c02823be81->enter($__internal_16918b74eb4d360e76eab80dc5c35a534ef720b2293a4263085025c02823be81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16918b74eb4d360e76eab80dc5c35a534ef720b2293a4263085025c02823be81->leave($__internal_16918b74eb4d360e76eab80dc5c35a534ef720b2293a4263085025c02823be81_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_8df067cb6cb9b1f6ca778fb9610ee8b63ffc801bea28caa888be5d52c54c7eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df067cb6cb9b1f6ca778fb9610ee8b63ffc801bea28caa888be5d52c54c7eae->enter($__internal_8df067cb6cb9b1f6ca778fb9610ee8b63ffc801bea28caa888be5d52c54c7eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Edit Profile  ";
        
        $__internal_8df067cb6cb9b1f6ca778fb9610ee8b63ffc801bea28caa888be5d52c54c7eae->leave($__internal_8df067cb6cb9b1f6ca778fb9610ee8b63ffc801bea28caa888be5d52c54c7eae_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_1271e904d1eb0364feef495560eef0d77c676b28c2a043331d97cde9c9932c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1271e904d1eb0364feef495560eef0d77c676b28c2a043331d97cde9c9932c2a->enter($__internal_1271e904d1eb0364feef495560eef0d77c676b28c2a043331d97cde9c9932c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        echo " ";
        
        $__internal_1271e904d1eb0364feef495560eef0d77c676b28c2a043331d97cde9c9932c2a->leave($__internal_1271e904d1eb0364feef495560eef0d77c676b28c2a043331d97cde9c9932c2a_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_b65fe84bfce78da30d4b5d5df12d908fc45c08b4a2854bdb098a4d927d63db46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b65fe84bfce78da30d4b5d5df12d908fc45c08b4a2854bdb098a4d927d63db46->enter($__internal_b65fe84bfce78da30d4b5d5df12d908fc45c08b4a2854bdb098a4d927d63db46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<div class=\"box box-primary\">
\t\t\t";
        // line 10
        $this->loadTemplate("SalexUserBundle:Profile:edit_content.html.twig", "@SalexUser/Profile/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t</div> <!-- End of box-primary -->
\t\t</div> <!-- end of col-md-6 -->
\t</div> <!-- End of Row -->
";
        
        $__internal_b65fe84bfce78da30d4b5d5df12d908fc45c08b4a2854bdb098a4d927d63db46->leave($__internal_b65fe84bfce78da30d4b5d5df12d908fc45c08b4a2854bdb098a4d927d63db46_prof);

    }

    public function getTemplateName()
    {
        return "@SalexUser/Profile/edit.html.twig";
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
{% endblock %}", "@SalexUser/Profile/edit.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
