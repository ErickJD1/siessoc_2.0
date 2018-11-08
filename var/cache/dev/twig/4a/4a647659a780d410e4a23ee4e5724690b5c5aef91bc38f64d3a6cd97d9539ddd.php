<?php

/* @SalexUser/Profile/show_content.html.twig */
class __TwigTemplate_d1724994a6bc9603df54d3674991a7576e43ffb12142deaa8e9343471774a1bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b7f99184a49db3568a733cc1ab5bbb0139ee3c3e6415b8866a545d4f7a0739a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b7f99184a49db3568a733cc1ab5bbb0139ee3c3e6415b8866a545d4f7a0739a->enter($__internal_3b7f99184a49db3568a733cc1ab5bbb0139ee3c3e6415b8866a545d4f7a0739a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_3b7f99184a49db3568a733cc1ab5bbb0139ee3c3e6415b8866a545d4f7a0739a->leave($__internal_3b7f99184a49db3568a733cc1ab5bbb0139ee3c3e6415b8866a545d4f7a0739a_prof);

    }

    public function getTemplateName()
    {
        return "@SalexUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@SalexUser/Profile/show_content.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle\\Resources\\views\\Profile\\show_content.html.twig");
    }
}
