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
        $__internal_b06d87400daaa60b3e3b2594bdecf7ebd835fd3269f612b029f449f1eed3de3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06d87400daaa60b3e3b2594bdecf7ebd835fd3269f612b029f449f1eed3de3d->enter($__internal_b06d87400daaa60b3e3b2594bdecf7ebd835fd3269f612b029f449f1eed3de3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b06d87400daaa60b3e3b2594bdecf7ebd835fd3269f612b029f449f1eed3de3d->leave($__internal_b06d87400daaa60b3e3b2594bdecf7ebd835fd3269f612b029f449f1eed3de3d_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_f29a93352a943cecf72a851c58c24c2d2b80657e53d6dd1b36ec192f7936c8b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29a93352a943cecf72a851c58c24c2d2b80657e53d6dd1b36ec192f7936c8b1->enter($__internal_f29a93352a943cecf72a851c58c24c2d2b80657e53d6dd1b36ec192f7936c8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Edit Profile  ";
        
        $__internal_f29a93352a943cecf72a851c58c24c2d2b80657e53d6dd1b36ec192f7936c8b1->leave($__internal_f29a93352a943cecf72a851c58c24c2d2b80657e53d6dd1b36ec192f7936c8b1_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_c345936e1ebbbed1a5cc678be8463ef2a4e11863ff51fc745df2d8573cc2321e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c345936e1ebbbed1a5cc678be8463ef2a4e11863ff51fc745df2d8573cc2321e->enter($__internal_c345936e1ebbbed1a5cc678be8463ef2a4e11863ff51fc745df2d8573cc2321e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        echo " ";
        
        $__internal_c345936e1ebbbed1a5cc678be8463ef2a4e11863ff51fc745df2d8573cc2321e->leave($__internal_c345936e1ebbbed1a5cc678be8463ef2a4e11863ff51fc745df2d8573cc2321e_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_873d746a3a9731c1eb22e38a547644e015b21be7c359311eba33380f7ec4683a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_873d746a3a9731c1eb22e38a547644e015b21be7c359311eba33380f7ec4683a->enter($__internal_873d746a3a9731c1eb22e38a547644e015b21be7c359311eba33380f7ec4683a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_873d746a3a9731c1eb22e38a547644e015b21be7c359311eba33380f7ec4683a->leave($__internal_873d746a3a9731c1eb22e38a547644e015b21be7c359311eba33380f7ec4683a_prof);

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
{% endblock %}", "FOSUserBundle:Profile:edit.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\src\\SalexUserBundle/Resources/views/Profile/edit.html.twig");
    }
}
