<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_783597bba868d3da86708fa71be466bb1a9ebaa30ded5a0ff5591778d7193e19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d45488ef46441e42bbb693026847e062406977be6101b4f4d7ecfe37d65190e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d45488ef46441e42bbb693026847e062406977be6101b4f4d7ecfe37d65190e->enter($__internal_4d45488ef46441e42bbb693026847e062406977be6101b4f4d7ecfe37d65190e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d45488ef46441e42bbb693026847e062406977be6101b4f4d7ecfe37d65190e->leave($__internal_4d45488ef46441e42bbb693026847e062406977be6101b4f4d7ecfe37d65190e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f947c5813da23293fe6ff6759a53da9648f78d9e85bcc50870f79ad7685519e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f947c5813da23293fe6ff6759a53da9648f78d9e85bcc50870f79ad7685519e7->enter($__internal_f947c5813da23293fe6ff6759a53da9648f78d9e85bcc50870f79ad7685519e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f947c5813da23293fe6ff6759a53da9648f78d9e85bcc50870f79ad7685519e7->leave($__internal_f947c5813da23293fe6ff6759a53da9648f78d9e85bcc50870f79ad7685519e7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_79a5035ea3982c3642def2e945fdb48847dc5f768fee92da88bb3ed07673b2f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a5035ea3982c3642def2e945fdb48847dc5f768fee92da88bb3ed07673b2f1->enter($__internal_79a5035ea3982c3642def2e945fdb48847dc5f768fee92da88bb3ed07673b2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_79a5035ea3982c3642def2e945fdb48847dc5f768fee92da88bb3ed07673b2f1->leave($__internal_79a5035ea3982c3642def2e945fdb48847dc5f768fee92da88bb3ed07673b2f1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_86ec6c716c3c3deb0cd770602bb7126d5b05ff3da271e34b6af292bb3d0f1bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ec6c716c3c3deb0cd770602bb7126d5b05ff3da271e34b6af292bb3d0f1bda->enter($__internal_86ec6c716c3c3deb0cd770602bb7126d5b05ff3da271e34b6af292bb3d0f1bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_86ec6c716c3c3deb0cd770602bb7126d5b05ff3da271e34b6af292bb3d0f1bda->leave($__internal_86ec6c716c3c3deb0cd770602bb7126d5b05ff3da271e34b6af292bb3d0f1bda_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
