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
        $__internal_04214b92e698badf166bfa2b485e0805a8766a6178ac108686e8157944a63bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04214b92e698badf166bfa2b485e0805a8766a6178ac108686e8157944a63bde->enter($__internal_04214b92e698badf166bfa2b485e0805a8766a6178ac108686e8157944a63bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04214b92e698badf166bfa2b485e0805a8766a6178ac108686e8157944a63bde->leave($__internal_04214b92e698badf166bfa2b485e0805a8766a6178ac108686e8157944a63bde_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_dad7fa97ef8f0491e94653ab2159c219ee3f82faec775915f6f7eedd100ab45d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad7fa97ef8f0491e94653ab2159c219ee3f82faec775915f6f7eedd100ab45d->enter($__internal_dad7fa97ef8f0491e94653ab2159c219ee3f82faec775915f6f7eedd100ab45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Edit Profile  ";
        
        $__internal_dad7fa97ef8f0491e94653ab2159c219ee3f82faec775915f6f7eedd100ab45d->leave($__internal_dad7fa97ef8f0491e94653ab2159c219ee3f82faec775915f6f7eedd100ab45d_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_8f61ce563887b56d449bcb96ff820ee37e31c486f386cd417eefc5c9a1c2f82b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f61ce563887b56d449bcb96ff820ee37e31c486f386cd417eefc5c9a1c2f82b->enter($__internal_8f61ce563887b56d449bcb96ff820ee37e31c486f386cd417eefc5c9a1c2f82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        echo " ";
        
        $__internal_8f61ce563887b56d449bcb96ff820ee37e31c486f386cd417eefc5c9a1c2f82b->leave($__internal_8f61ce563887b56d449bcb96ff820ee37e31c486f386cd417eefc5c9a1c2f82b_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_aa761a15eaeb4edbc277fe7961c99cc912b22bc6310f3976abb5b12c4a479b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa761a15eaeb4edbc277fe7961c99cc912b22bc6310f3976abb5b12c4a479b5e->enter($__internal_aa761a15eaeb4edbc277fe7961c99cc912b22bc6310f3976abb5b12c4a479b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_aa761a15eaeb4edbc277fe7961c99cc912b22bc6310f3976abb5b12c4a479b5e->leave($__internal_aa761a15eaeb4edbc277fe7961c99cc912b22bc6310f3976abb5b12c4a479b5e_prof);

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
{% endblock %}", "@SalexUser/Profile/edit.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\src\\SalexUserBundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
