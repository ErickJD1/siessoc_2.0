<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_aef9ffc83b25c30cf27cdeb16810763fa1018df079961f1b2dd28bc8bfd14910 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a4cc00d9d0f2982d2d3e15f763dde3a659ed9dc468538e600cbb46b60f169fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a4cc00d9d0f2982d2d3e15f763dde3a659ed9dc468538e600cbb46b60f169fa->enter($__internal_8a4cc00d9d0f2982d2d3e15f763dde3a659ed9dc468538e600cbb46b60f169fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a4cc00d9d0f2982d2d3e15f763dde3a659ed9dc468538e600cbb46b60f169fa->leave($__internal_8a4cc00d9d0f2982d2d3e15f763dde3a659ed9dc468538e600cbb46b60f169fa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a9e893267bd26c0825268487dc4c24f6fa9408174db4dd62d21ffd6fdf839408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e893267bd26c0825268487dc4c24f6fa9408174db4dd62d21ffd6fdf839408->enter($__internal_a9e893267bd26c0825268487dc4c24f6fa9408174db4dd62d21ffd6fdf839408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_a9e893267bd26c0825268487dc4c24f6fa9408174db4dd62d21ffd6fdf839408->leave($__internal_a9e893267bd26c0825268487dc4c24f6fa9408174db4dd62d21ffd6fdf839408_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
