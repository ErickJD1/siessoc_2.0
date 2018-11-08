<?php

/* AvanzuAdminThemeBundle:Breadcrumb:breadcrumb.html.twig */
class __TwigTemplate_982aa50e8ec070466dddb3553f00fb62b60975c51897e2f992a559c0a33dd6e9 extends Twig_Template
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
        $__internal_63d8b70e3564faecd36db160ef9ab382921a1c8295f34a0dc35e2469da0f991d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d8b70e3564faecd36db160ef9ab382921a1c8295f34a0dc35e2469da0f991d->enter($__internal_63d8b70e3564faecd36db160ef9ab382921a1c8295f34a0dc35e2469da0f991d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Breadcrumb:breadcrumb.html.twig"));

        // line 1
        echo "<ol class=\"breadcrumb\">
    <li>
        <a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("avanzu_admin_home");
        echo "\">
            <i class=\"fa fa-dashboard\"></i>
            ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", array(), "AvanzuAdminTheme"), "html", null, true);
        echo "
        </a>
    </li>
    ";
        // line 8
        if ((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
            // line 9
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute($context["item"], "route", array()))) ? ("#") : (((twig_in_filter("/", $this->getAttribute($context["item"], "route", array()))) ? ($this->getAttribute($context["item"], "route", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["item"], "route", array()), $this->getAttribute($context["item"], "routeArgs", array())))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        }
        // line 13
        echo "    <li class=\"active\">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</li>
</ol>";
        
        $__internal_63d8b70e3564faecd36db160ef9ab382921a1c8295f34a0dc35e2469da0f991d->leave($__internal_63d8b70e3564faecd36db160ef9ab382921a1c8295f34a0dc35e2469da0f991d_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Breadcrumb:breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  55 => 12,  44 => 10,  39 => 9,  37 => 8,  31 => 5,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ol class=\"breadcrumb\">
    <li>
        <a href=\"{{ path('avanzu_admin_home') }}\">
            <i class=\"fa fa-dashboard\"></i>
            {{ 'Home'|trans({}, 'AvanzuAdminTheme') }}
        </a>
    </li>
    {% if active %}
        {% for item in active %}
            <li><a href=\"{{ item.route is empty ? '#' : '/' in item.route ? item.route : path(item.route, item.routeArgs) }}\">{{ item.label }}</a></li>
        {% endfor %}
    {% endif %}
    <li class=\"active\">{{ title }}</li>
</ol>", "AvanzuAdminThemeBundle:Breadcrumb:breadcrumb.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\avanzu\\admin-theme-bundle/Resources/views/Breadcrumb/breadcrumb.html.twig");
    }
}
