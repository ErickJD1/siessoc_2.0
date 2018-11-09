<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_64b2456b2cc18dcb3ef106cd4e42355bb41a01a71d70baa224f7275bd0ee63e8 extends Twig_Template
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
        $__internal_f58cbf0b537880f906aaa4592025f0071058c806f183bee873cac4c9f367c9bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f58cbf0b537880f906aaa4592025f0071058c806f183bee873cac4c9f367c9bc->enter($__internal_f58cbf0b537880f906aaa4592025f0071058c806f183bee873cac4c9f367c9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f58cbf0b537880f906aaa4592025f0071058c806f183bee873cac4c9f367c9bc->leave($__internal_f58cbf0b537880f906aaa4592025f0071058c806f183bee873cac4c9f367c9bc_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_3d104255899dc12a4de1f6ab7cc38eed105e574489b003a880fb54a0f7e4b166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d104255899dc12a4de1f6ab7cc38eed105e574489b003a880fb54a0f7e4b166->enter($__internal_3d104255899dc12a4de1f6ab7cc38eed105e574489b003a880fb54a0f7e4b166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Edit Profile  ";
        
        $__internal_3d104255899dc12a4de1f6ab7cc38eed105e574489b003a880fb54a0f7e4b166->leave($__internal_3d104255899dc12a4de1f6ab7cc38eed105e574489b003a880fb54a0f7e4b166_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_b1d950b3b69a1eb9e7fd7a1d1676686a24d0920963f1757af3c7f92ae4a1cbfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d950b3b69a1eb9e7fd7a1d1676686a24d0920963f1757af3c7f92ae4a1cbfd->enter($__internal_b1d950b3b69a1eb9e7fd7a1d1676686a24d0920963f1757af3c7f92ae4a1cbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        echo " ";
        
        $__internal_b1d950b3b69a1eb9e7fd7a1d1676686a24d0920963f1757af3c7f92ae4a1cbfd->leave($__internal_b1d950b3b69a1eb9e7fd7a1d1676686a24d0920963f1757af3c7f92ae4a1cbfd_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_912e513ed3d76075ddbaa3effb39e157d6750201bb617f349ab79be1bf963003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912e513ed3d76075ddbaa3effb39e157d6750201bb617f349ab79be1bf963003->enter($__internal_912e513ed3d76075ddbaa3effb39e157d6750201bb617f349ab79be1bf963003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_912e513ed3d76075ddbaa3effb39e157d6750201bb617f349ab79be1bf963003->leave($__internal_912e513ed3d76075ddbaa3effb39e157d6750201bb617f349ab79be1bf963003_prof);

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
{% endblock %}", "FOSUserBundle:Profile:edit.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle/Resources/views/Profile/edit.html.twig");
    }
}
