<?php

/* @AvanzuAdminTheme/Sidebar/user-panel.html.twig */
class __TwigTemplate_408aca61e41214104f12e143f4560cc6c185056b74c4f49914165f013575fc2c extends Twig_Template
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
        $__internal_c18aef3ffbd28257d45fee6c7d298301743847449cdf61ab6b324ff3ec8cb8d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c18aef3ffbd28257d45fee6c7d298301743847449cdf61ab6b324ff3ec8cb8d1->enter($__internal_c18aef3ffbd28257d45fee6c7d298301743847449cdf61ab6b324ff3ec8cb8d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Sidebar/user-panel.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "@AvanzuAdminTheme/Sidebar/user-panel.html.twig", 1);
        // line 2
        echo "<!-- Sidebar user panel -->
<div class=\"user-panel\">
    <div class=\"pull-left image\">
    ";
        // line 5
        echo $context["macro"]->getavatar($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "avatar", array()), $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()));
        echo "
    </div>
    <div class=\"pull-left info\">
        <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "</p>

        <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
    </div>
</div>
";
        
        $__internal_c18aef3ffbd28257d45fee6c7d298301743847449cdf61ab6b324ff3ec8cb8d1->leave($__internal_c18aef3ffbd28257d45fee6c7d298301743847449cdf61ab6b324ff3ec8cb8d1_prof);

    }

    public function getTemplateName()
    {
        return "@AvanzuAdminTheme/Sidebar/user-panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  29 => 5,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}
<!-- Sidebar user panel -->
<div class=\"user-panel\">
    <div class=\"pull-left image\">
    {{ macro.avatar(user.avatar, user.username)  }}
    </div>
    <div class=\"pull-left info\">
        <p>{{ user.name }}</p>

        <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
    </div>
</div>
", "@AvanzuAdminTheme/Sidebar/user-panel.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\avanzu\\admin-theme-bundle\\Resources\\views\\Sidebar\\user-panel.html.twig");
    }
}
