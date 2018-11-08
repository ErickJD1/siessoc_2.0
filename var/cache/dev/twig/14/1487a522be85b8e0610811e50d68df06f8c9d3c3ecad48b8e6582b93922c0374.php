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
        $__internal_a84f99ce331b17bef84963dafcc6840a6e5a53460d1ec22039cb7cd77eba54c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a84f99ce331b17bef84963dafcc6840a6e5a53460d1ec22039cb7cd77eba54c0->enter($__internal_a84f99ce331b17bef84963dafcc6840a6e5a53460d1ec22039cb7cd77eba54c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a84f99ce331b17bef84963dafcc6840a6e5a53460d1ec22039cb7cd77eba54c0->leave($__internal_a84f99ce331b17bef84963dafcc6840a6e5a53460d1ec22039cb7cd77eba54c0_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_190917d6fbd472e2a34cdac66b81025c9088d84be67efe405553b8ce2f7b662d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190917d6fbd472e2a34cdac66b81025c9088d84be67efe405553b8ce2f7b662d->enter($__internal_190917d6fbd472e2a34cdac66b81025c9088d84be67efe405553b8ce2f7b662d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Edit Profile  ";
        
        $__internal_190917d6fbd472e2a34cdac66b81025c9088d84be67efe405553b8ce2f7b662d->leave($__internal_190917d6fbd472e2a34cdac66b81025c9088d84be67efe405553b8ce2f7b662d_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_40d05a580d528e3181f832781beca3ddeb1cfa90b3d65f443ebc72d57c3ee89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d05a580d528e3181f832781beca3ddeb1cfa90b3d65f443ebc72d57c3ee89d->enter($__internal_40d05a580d528e3181f832781beca3ddeb1cfa90b3d65f443ebc72d57c3ee89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        echo " ";
        
        $__internal_40d05a580d528e3181f832781beca3ddeb1cfa90b3d65f443ebc72d57c3ee89d->leave($__internal_40d05a580d528e3181f832781beca3ddeb1cfa90b3d65f443ebc72d57c3ee89d_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_8c9aac61a38e7e10acb5fad8e9948b61b5640bb0eff22b349b015b55096fbfcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9aac61a38e7e10acb5fad8e9948b61b5640bb0eff22b349b015b55096fbfcc->enter($__internal_8c9aac61a38e7e10acb5fad8e9948b61b5640bb0eff22b349b015b55096fbfcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_8c9aac61a38e7e10acb5fad8e9948b61b5640bb0eff22b349b015b55096fbfcc->leave($__internal_8c9aac61a38e7e10acb5fad8e9948b61b5640bb0eff22b349b015b55096fbfcc_prof);

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
