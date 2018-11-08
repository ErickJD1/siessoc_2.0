<?php

/* :tipocuenta:TipoCuentanew.html.twig */
class __TwigTemplate_cac9c1dab24b19ca9ef4672b89be74736dc89082529656cb62709ea82549ed42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":tipocuenta:TipoCuentanew.html.twig", 1);
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
        $__internal_d638a9bd142bb0af099492f322eefc55d140f24a1afa9fe3dc59fa62cb4fce4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d638a9bd142bb0af099492f322eefc55d140f24a1afa9fe3dc59fa62cb4fce4c->enter($__internal_d638a9bd142bb0af099492f322eefc55d140f24a1afa9fe3dc59fa62cb4fce4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipocuenta:TipoCuentanew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d638a9bd142bb0af099492f322eefc55d140f24a1afa9fe3dc59fa62cb4fce4c->leave($__internal_d638a9bd142bb0af099492f322eefc55d140f24a1afa9fe3dc59fa62cb4fce4c_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_6a82af686b552149530e40c6a19b13f544e06586039c6acc236348a23ac3747c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a82af686b552149530e40c6a19b13f544e06586039c6acc236348a23ac3747c->enter($__internal_6a82af686b552149530e40c6a19b13f544e06586039c6acc236348a23ac3747c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_6a82af686b552149530e40c6a19b13f544e06586039c6acc236348a23ac3747c->leave($__internal_6a82af686b552149530e40c6a19b13f544e06586039c6acc236348a23ac3747c_prof);

    }

    public function getTemplateName()
    {
        return ":tipocuenta:TipoCuentanew.html.twig";
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
", ":tipocuenta:TipoCuentanew.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\app/Resources\\views/tipocuenta/TipoCuentanew.html.twig");
    }
}
