<?php

/* SalexUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_14d54a4e23b58a7d794e911d5c1173cfcbcc09ef8930deab6fb7331d884ed120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "SalexUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_6703807b2e942ec2c2fb77e4a310d6d21f3a08a0a84c52d5f2f409ecaf81be46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6703807b2e942ec2c2fb77e4a310d6d21f3a08a0a84c52d5f2f409ecaf81be46->enter($__internal_6703807b2e942ec2c2fb77e4a310d6d21f3a08a0a84c52d5f2f409ecaf81be46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalexUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6703807b2e942ec2c2fb77e4a310d6d21f3a08a0a84c52d5f2f409ecaf81be46->leave($__internal_6703807b2e942ec2c2fb77e4a310d6d21f3a08a0a84c52d5f2f409ecaf81be46_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_901eb68b49d8ac7dca08ca3d9a7e2faed3a5f13ac4159c4fcd4f72245a635e14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_901eb68b49d8ac7dca08ca3d9a7e2faed3a5f13ac4159c4fcd4f72245a635e14->enter($__internal_901eb68b49d8ac7dca08ca3d9a7e2faed3a5f13ac4159c4fcd4f72245a635e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Change Password  ";
        
        $__internal_901eb68b49d8ac7dca08ca3d9a7e2faed3a5f13ac4159c4fcd4f72245a635e14->leave($__internal_901eb68b49d8ac7dca08ca3d9a7e2faed3a5f13ac4159c4fcd4f72245a635e14_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_683798217fc6eae6d7bb9055fdbb45700db649d0ae48f9fdb28bf7f1fb33f149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683798217fc6eae6d7bb9055fdbb45700db649d0ae48f9fdb28bf7f1fb33f149->enter($__internal_683798217fc6eae6d7bb9055fdbb45700db649d0ae48f9fdb28bf7f1fb33f149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        echo " ";
        
        $__internal_683798217fc6eae6d7bb9055fdbb45700db649d0ae48f9fdb28bf7f1fb33f149->leave($__internal_683798217fc6eae6d7bb9055fdbb45700db649d0ae48f9fdb28bf7f1fb33f149_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_f5228432a00013dca96db17915c2a7dad0110899fb7e3e9c06d389b8b580ded7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5228432a00013dca96db17915c2a7dad0110899fb7e3e9c06d389b8b580ded7->enter($__internal_f5228432a00013dca96db17915c2a7dad0110899fb7e3e9c06d389b8b580ded7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"box box-primary\">
                ";
        // line 11
        $this->loadTemplate("SalexUserBundle:ChangePassword:changePassword_content.html.twig", "SalexUserBundle:ChangePassword:changePassword.html.twig", 11)->display($context);
        // line 12
        echo "            </div> <!-- End of box-primary -->
        </div> <!-- end of col-md-6 -->
    </div> <!-- End of Row -->
";
        
        $__internal_f5228432a00013dca96db17915c2a7dad0110899fb7e3e9c06d389b8b580ded7->leave($__internal_f5228432a00013dca96db17915c2a7dad0110899fb7e3e9c06d389b8b580ded7_prof);

    }

    public function getTemplateName()
    {
        return "SalexUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  73 => 11,  68 => 8,  62 => 7,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %}Change Password  {% endblock %}
{% block page_subtitle %} {{ app.user.getName() }} {% endblock %}


{% block page_content %}
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"box box-primary\">
                {% include \"SalexUserBundle:ChangePassword:changePassword_content.html.twig\" %}
            </div> <!-- End of box-primary -->
        </div> <!-- end of col-md-6 -->
    </div> <!-- End of Row -->
{% endblock %}", "SalexUserBundle:ChangePassword:changePassword.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}
