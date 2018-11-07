<?php

/* default/dashboard.html.twig */
class __TwigTemplate_9ef131f4d79a649202d01b81cec672c29f24014d821d05c68562e62453d71e31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "default/dashboard.html.twig", 1);
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
        $__internal_840d64d83c7bac847992a5a80ea3d548b158d23b607de99c56f0e3b4ac73a803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_840d64d83c7bac847992a5a80ea3d548b158d23b607de99c56f0e3b4ac73a803->enter($__internal_840d64d83c7bac847992a5a80ea3d548b158d23b607de99c56f0e3b4ac73a803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_840d64d83c7bac847992a5a80ea3d548b158d23b607de99c56f0e3b4ac73a803->leave($__internal_840d64d83c7bac847992a5a80ea3d548b158d23b607de99c56f0e3b4ac73a803_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_6ce852c601a6139e370f9ee60f118e9ef6cb8c7d9217e1be0812dfaeb6a8464d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce852c601a6139e370f9ee60f118e9ef6cb8c7d9217e1be0812dfaeb6a8464d->enter($__internal_6ce852c601a6139e370f9ee60f118e9ef6cb8c7d9217e1be0812dfaeb6a8464d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_6ce852c601a6139e370f9ee60f118e9ef6cb8c7d9217e1be0812dfaeb6a8464d->leave($__internal_6ce852c601a6139e370f9ee60f118e9ef6cb8c7d9217e1be0812dfaeb6a8464d_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c54110dcfbcabf7816f455ce1c65f292d27c262e7f6de8a35fd9d08179ee2da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c54110dcfbcabf7816f455ce1c65f292d27c262e7f6de8a35fd9d08179ee2da0->enter($__internal_c54110dcfbcabf7816f455ce1c65f292d27c262e7f6de8a35fd9d08179ee2da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "\t
";
        
        $__internal_c54110dcfbcabf7816f455ce1c65f292d27c262e7f6de8a35fd9d08179ee2da0->leave($__internal_c54110dcfbcabf7816f455ce1c65f292d27c262e7f6de8a35fd9d08179ee2da0_prof);

    }

    public function getTemplateName()
    {
        return "default/dashboard.html.twig";
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
{% endblock %}", "default/dashboard.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\default\\dashboard.html.twig");
    }
}
