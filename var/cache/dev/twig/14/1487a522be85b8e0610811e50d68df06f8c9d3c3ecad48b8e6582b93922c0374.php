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
        $__internal_bebcff8c075305c1f0754d78cebe078c02901d3fc82d400a1b2590c192b4b9ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bebcff8c075305c1f0754d78cebe078c02901d3fc82d400a1b2590c192b4b9ef->enter($__internal_bebcff8c075305c1f0754d78cebe078c02901d3fc82d400a1b2590c192b4b9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bebcff8c075305c1f0754d78cebe078c02901d3fc82d400a1b2590c192b4b9ef->leave($__internal_bebcff8c075305c1f0754d78cebe078c02901d3fc82d400a1b2590c192b4b9ef_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_f74947e5efe2816f6a511f313fd55d7c50d01747ca755ff88cf91b74946a20b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74947e5efe2816f6a511f313fd55d7c50d01747ca755ff88cf91b74946a20b7->enter($__internal_f74947e5efe2816f6a511f313fd55d7c50d01747ca755ff88cf91b74946a20b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Edit Profile  ";
        
        $__internal_f74947e5efe2816f6a511f313fd55d7c50d01747ca755ff88cf91b74946a20b7->leave($__internal_f74947e5efe2816f6a511f313fd55d7c50d01747ca755ff88cf91b74946a20b7_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_61dadda5555ac5dc356c56a0f1d7d09a9a25a57e6f73f35a2712fc1bf0cee79c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61dadda5555ac5dc356c56a0f1d7d09a9a25a57e6f73f35a2712fc1bf0cee79c->enter($__internal_61dadda5555ac5dc356c56a0f1d7d09a9a25a57e6f73f35a2712fc1bf0cee79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        echo " ";
        
        $__internal_61dadda5555ac5dc356c56a0f1d7d09a9a25a57e6f73f35a2712fc1bf0cee79c->leave($__internal_61dadda5555ac5dc356c56a0f1d7d09a9a25a57e6f73f35a2712fc1bf0cee79c_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_752be06fc463497cba056e0a41577dc5d7dfa887eb4a670aa3cc7b2963b982de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752be06fc463497cba056e0a41577dc5d7dfa887eb4a670aa3cc7b2963b982de->enter($__internal_752be06fc463497cba056e0a41577dc5d7dfa887eb4a670aa3cc7b2963b982de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_752be06fc463497cba056e0a41577dc5d7dfa887eb4a670aa3cc7b2963b982de->leave($__internal_752be06fc463497cba056e0a41577dc5d7dfa887eb4a670aa3cc7b2963b982de_prof);

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
