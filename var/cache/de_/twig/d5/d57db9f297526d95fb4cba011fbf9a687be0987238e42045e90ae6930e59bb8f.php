<?php

/* tipocuenta/TipoCuentanew.html.twig */
class __TwigTemplate_c75206547bf8dd6f5fd874c46d1bc7ec369e7495136fe5cdb2cd87ef6ea310b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "tipocuenta/TipoCuentanew.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_407804da5bb5791c1d81a7724b6e133df5d2c468807aaadd638c16156ae06380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407804da5bb5791c1d81a7724b6e133df5d2c468807aaadd638c16156ae06380->enter($__internal_407804da5bb5791c1d81a7724b6e133df5d2c468807aaadd638c16156ae06380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipocuenta/TipoCuentanew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_407804da5bb5791c1d81a7724b6e133df5d2c468807aaadd638c16156ae06380->leave($__internal_407804da5bb5791c1d81a7724b6e133df5d2c468807aaadd638c16156ae06380_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_148ceabc602e5317066ae067214662a4ef650cfd0b88623942d5e955acb7aa81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_148ceabc602e5317066ae067214662a4ef650cfd0b88623942d5e955acb7aa81->enter($__internal_148ceabc602e5317066ae067214662a4ef650cfd0b88623942d5e955acb7aa81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <h1>Tipocuentum creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipocuenta_index");
        echo "\" class=\"btn btn-info btn-sm\">Atras</a>
        </li>
    </ul>
";
        
        $__internal_148ceabc602e5317066ae067214662a4ef650cfd0b88623942d5e955acb7aa81->leave($__internal_148ceabc602e5317066ae067214662a4ef650cfd0b88623942d5e955acb7aa81_prof);

    }

    public function getTemplateName()
    {
        return "tipocuenta/TipoCuentanew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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

{% block page_content %}
    <h1>Tipocuentum creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('tipocuenta_index') }}\" class=\"btn btn-info btn-sm\">Atras</a>
        </li>
    </ul>
{% endblock %}
", "tipocuenta/TipoCuentanew.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\app\\Resources\\views\\tipocuenta\\TipoCuentanew.html.twig");
    }
}
