<?php

/* @SalexUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_c6f57de351d5809e5bcedb14ba1854c8202585e62219a032ec7584eaaf7a7670 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "@SalexUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_82ccae109b8c30f4a849fad7a1269cf639dbb6e3d1810d1b1bc676eb6d1b9c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ccae109b8c30f4a849fad7a1269cf639dbb6e3d1810d1b1bc676eb6d1b9c69->enter($__internal_82ccae109b8c30f4a849fad7a1269cf639dbb6e3d1810d1b1bc676eb6d1b9c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82ccae109b8c30f4a849fad7a1269cf639dbb6e3d1810d1b1bc676eb6d1b9c69->leave($__internal_82ccae109b8c30f4a849fad7a1269cf639dbb6e3d1810d1b1bc676eb6d1b9c69_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_5e2124c921889602d6908c5d6488b5a39f6bd120182e5b77d5fe225cfde8abf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e2124c921889602d6908c5d6488b5a39f6bd120182e5b77d5fe225cfde8abf1->enter($__internal_5e2124c921889602d6908c5d6488b5a39f6bd120182e5b77d5fe225cfde8abf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Change Password  ";
        
        $__internal_5e2124c921889602d6908c5d6488b5a39f6bd120182e5b77d5fe225cfde8abf1->leave($__internal_5e2124c921889602d6908c5d6488b5a39f6bd120182e5b77d5fe225cfde8abf1_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_ff09e66b90fc8c90e936e7b510b82eb8de55d637cb782415d04e1ab3a547b456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff09e66b90fc8c90e936e7b510b82eb8de55d637cb782415d04e1ab3a547b456->enter($__internal_ff09e66b90fc8c90e936e7b510b82eb8de55d637cb782415d04e1ab3a547b456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        echo " ";
        
        $__internal_ff09e66b90fc8c90e936e7b510b82eb8de55d637cb782415d04e1ab3a547b456->leave($__internal_ff09e66b90fc8c90e936e7b510b82eb8de55d637cb782415d04e1ab3a547b456_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_90ad1add52ef0a823d3570519f0439d68715b2f4bb9c87d042bc69ff21e84600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ad1add52ef0a823d3570519f0439d68715b2f4bb9c87d042bc69ff21e84600->enter($__internal_90ad1add52ef0a823d3570519f0439d68715b2f4bb9c87d042bc69ff21e84600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"box box-primary\">
                ";
        // line 11
        $this->loadTemplate("SalexUserBundle:ChangePassword:changePassword_content.html.twig", "@SalexUser/ChangePassword/changePassword.html.twig", 11)->display($context);
        // line 12
        echo "            </div> <!-- End of box-primary -->
        </div> <!-- end of col-md-6 -->
    </div> <!-- End of Row -->
";
        
        $__internal_90ad1add52ef0a823d3570519f0439d68715b2f4bb9c87d042bc69ff21e84600->leave($__internal_90ad1add52ef0a823d3570519f0439d68715b2f4bb9c87d042bc69ff21e84600_prof);

    }

    public function getTemplateName()
    {
        return "@SalexUser/ChangePassword/changePassword.html.twig";
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
{% endblock %}", "@SalexUser/ChangePassword/changePassword.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\src\\SalexUserBundle\\Resources\\views\\ChangePassword\\changePassword.html.twig");
    }
}
