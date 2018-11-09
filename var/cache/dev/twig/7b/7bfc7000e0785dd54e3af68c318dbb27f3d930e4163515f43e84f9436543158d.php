<?php

/* AvanzuAdminThemeBundle:Sidebar:menu.html.twig */
class __TwigTemplate_1a8d2cae1b79fbf4d82e6bcbd6f2a520a4c177a4c600b5f7f5a8822bff05b09a extends Twig_Template
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
        $__internal_24ac95491fe8c2d7a9f7d3bdd108da7be947005171ac1cb6364ce779f47bff90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24ac95491fe8c2d7a9f7d3bdd108da7be947005171ac1cb6364ce779f47bff90->enter($__internal_24ac95491fe8c2d7a9f7d3bdd108da7be947005171ac1cb6364ce779f47bff90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Sidebar:menu.html.twig"));

        // line 1
        echo "<!-- sidebar menu: : style can be found in sidebar.less -->
";
        // line 2
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "AvanzuAdminThemeBundle:Sidebar:menu.html.twig", 2);
        // line 3
        echo "<ul class=\"sidebar-menu\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "        ";
            echo $context["macro"]->getmenu_item($context["item"]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>";
        
        $__internal_24ac95491fe8c2d7a9f7d3bdd108da7be947005171ac1cb6364ce779f47bff90->leave($__internal_24ac95491fe8c2d7a9f7d3bdd108da7be947005171ac1cb6364ce779f47bff90_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Sidebar:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  34 => 5,  30 => 4,  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- sidebar menu: : style can be found in sidebar.less -->
{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}
<ul class=\"sidebar-menu\">
    {% for item in menu %}
        {{ macro.menu_item(item) }}
    {% endfor %}
</ul>", "AvanzuAdminThemeBundle:Sidebar:menu.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\avanzu\\admin-theme-bundle/Resources/views/Sidebar/menu.html.twig");
    }
}
