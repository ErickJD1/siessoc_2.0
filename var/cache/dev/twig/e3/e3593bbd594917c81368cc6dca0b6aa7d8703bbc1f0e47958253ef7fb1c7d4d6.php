<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_23f2fec69f07fe3707e08ddd4095097f6c0815343c57b381523184cd79069285 extends Twig_Template
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
        $__internal_053e20e3b47008582ecac419bd8d81dfb2a3cdbb133942c0bcaba9903411c4c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053e20e3b47008582ecac419bd8d81dfb2a3cdbb133942c0bcaba9903411c4c4->enter($__internal_053e20e3b47008582ecac419bd8d81dfb2a3cdbb133942c0bcaba9903411c4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_053e20e3b47008582ecac419bd8d81dfb2a3cdbb133942c0bcaba9903411c4c4->leave($__internal_053e20e3b47008582ecac419bd8d81dfb2a3cdbb133942c0bcaba9903411c4c4_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_25d52114aacbc552f97cac713549710df2b013d35864651e2dedd8c7b34e2f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d52114aacbc552f97cac713549710df2b013d35864651e2dedd8c7b34e2f78->enter($__internal_25d52114aacbc552f97cac713549710df2b013d35864651e2dedd8c7b34e2f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Edit Profile  ";
        
        $__internal_25d52114aacbc552f97cac713549710df2b013d35864651e2dedd8c7b34e2f78->leave($__internal_25d52114aacbc552f97cac713549710df2b013d35864651e2dedd8c7b34e2f78_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_2098a81d0935ec8f1096356b78e12322d1b38f06d19964a9cc68123992022f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2098a81d0935ec8f1096356b78e12322d1b38f06d19964a9cc68123992022f8a->enter($__internal_2098a81d0935ec8f1096356b78e12322d1b38f06d19964a9cc68123992022f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        echo " ";
        
        $__internal_2098a81d0935ec8f1096356b78e12322d1b38f06d19964a9cc68123992022f8a->leave($__internal_2098a81d0935ec8f1096356b78e12322d1b38f06d19964a9cc68123992022f8a_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_72fdb98929dbe4300497a8593e99b964860b6e53c03ef58729870747bda4a12d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72fdb98929dbe4300497a8593e99b964860b6e53c03ef58729870747bda4a12d->enter($__internal_72fdb98929dbe4300497a8593e99b964860b6e53c03ef58729870747bda4a12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_72fdb98929dbe4300497a8593e99b964860b6e53c03ef58729870747bda4a12d->leave($__internal_72fdb98929dbe4300497a8593e99b964860b6e53c03ef58729870747bda4a12d_prof);

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
