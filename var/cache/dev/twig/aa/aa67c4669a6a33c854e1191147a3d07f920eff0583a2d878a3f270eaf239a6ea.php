<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ba87cf58dede98aee9209cd394e9af0b10b68f1daafcfa73cff3872fca4c79f0 extends Twig_Template
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
        $__internal_20d8707953ebc84e4cbb8da9fe28c805bde0383655edf881f148e020a0e471cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d8707953ebc84e4cbb8da9fe28c805bde0383655edf881f148e020a0e471cf->enter($__internal_20d8707953ebc84e4cbb8da9fe28c805bde0383655edf881f148e020a0e471cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20d8707953ebc84e4cbb8da9fe28c805bde0383655edf881f148e020a0e471cf->leave($__internal_20d8707953ebc84e4cbb8da9fe28c805bde0383655edf881f148e020a0e471cf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2f60962af8e07ba2079d77d998b94eb6874861880c171a4b151a6adbac05aa50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f60962af8e07ba2079d77d998b94eb6874861880c171a4b151a6adbac05aa50->enter($__internal_2f60962af8e07ba2079d77d998b94eb6874861880c171a4b151a6adbac05aa50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2f60962af8e07ba2079d77d998b94eb6874861880c171a4b151a6adbac05aa50->leave($__internal_2f60962af8e07ba2079d77d998b94eb6874861880c171a4b151a6adbac05aa50_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8c41f5bd436b300d6162b3e3ebdd19158ac0d1d78370669e73b58e92a66a006b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c41f5bd436b300d6162b3e3ebdd19158ac0d1d78370669e73b58e92a66a006b->enter($__internal_8c41f5bd436b300d6162b3e3ebdd19158ac0d1d78370669e73b58e92a66a006b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8c41f5bd436b300d6162b3e3ebdd19158ac0d1d78370669e73b58e92a66a006b->leave($__internal_8c41f5bd436b300d6162b3e3ebdd19158ac0d1d78370669e73b58e92a66a006b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2dedcbba05623354401310bc4378d665c8ad81891ef1eb887f8350286d9bef5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dedcbba05623354401310bc4378d665c8ad81891ef1eb887f8350286d9bef5e->enter($__internal_2dedcbba05623354401310bc4378d665c8ad81891ef1eb887f8350286d9bef5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2dedcbba05623354401310bc4378d665c8ad81891ef1eb887f8350286d9bef5e->leave($__internal_2dedcbba05623354401310bc4378d665c8ad81891ef1eb887f8350286d9bef5e_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
