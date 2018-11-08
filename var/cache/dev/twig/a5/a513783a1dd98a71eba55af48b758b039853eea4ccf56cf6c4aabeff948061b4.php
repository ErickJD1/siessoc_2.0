<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_714617f2aeade6e05343ca7d3aa74e5b82865c30c2292658960efbfcff61a865 extends Twig_Template
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
        $__internal_e867cef174882679513d99e66162b368fca16209c925499b7fbc52e72f0fde53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e867cef174882679513d99e66162b368fca16209c925499b7fbc52e72f0fde53->enter($__internal_e867cef174882679513d99e66162b368fca16209c925499b7fbc52e72f0fde53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_e867cef174882679513d99e66162b368fca16209c925499b7fbc52e72f0fde53->leave($__internal_e867cef174882679513d99e66162b368fca16209c925499b7fbc52e72f0fde53_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>{{ title }}</a>
", "KnpPaginatorBundle:Pagination:sortable_link.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\knplabs\\knp-paginator-bundle/Resources/views/Pagination/sortable_link.html.twig");
    }
}
