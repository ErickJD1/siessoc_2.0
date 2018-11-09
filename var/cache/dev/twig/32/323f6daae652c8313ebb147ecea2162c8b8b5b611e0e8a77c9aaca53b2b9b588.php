<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f74d4dd66bce8e3a1352d3e7a7182997cf1fb4143d0abeaa55023d4fdef7de6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_efe79d2420dad580ac2a3ff9d30919c3ab0ca91f74cff49e83d2763d2b542abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe79d2420dad580ac2a3ff9d30919c3ab0ca91f74cff49e83d2763d2b542abd->enter($__internal_efe79d2420dad580ac2a3ff9d30919c3ab0ca91f74cff49e83d2763d2b542abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efe79d2420dad580ac2a3ff9d30919c3ab0ca91f74cff49e83d2763d2b542abd->leave($__internal_efe79d2420dad580ac2a3ff9d30919c3ab0ca91f74cff49e83d2763d2b542abd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b354baf2f6d22f1523c1170701c27e1f4511629b041e5e9276a10aa864138da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b354baf2f6d22f1523c1170701c27e1f4511629b041e5e9276a10aa864138da->enter($__internal_3b354baf2f6d22f1523c1170701c27e1f4511629b041e5e9276a10aa864138da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3b354baf2f6d22f1523c1170701c27e1f4511629b041e5e9276a10aa864138da->leave($__internal_3b354baf2f6d22f1523c1170701c27e1f4511629b041e5e9276a10aa864138da_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e7c033a371a91517ea16dbffc77860e2a72853ea7d10c00983c95d8d532dbce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c033a371a91517ea16dbffc77860e2a72853ea7d10c00983c95d8d532dbce0->enter($__internal_e7c033a371a91517ea16dbffc77860e2a72853ea7d10c00983c95d8d532dbce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e7c033a371a91517ea16dbffc77860e2a72853ea7d10c00983c95d8d532dbce0->leave($__internal_e7c033a371a91517ea16dbffc77860e2a72853ea7d10c00983c95d8d532dbce0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_89114fb5841d90d838ad4a54d2e817a9eb4a85d217851d132ce762fd747b39c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89114fb5841d90d838ad4a54d2e817a9eb4a85d217851d132ce762fd747b39c2->enter($__internal_89114fb5841d90d838ad4a54d2e817a9eb4a85d217851d132ce762fd747b39c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_89114fb5841d90d838ad4a54d2e817a9eb4a85d217851d132ce762fd747b39c2->leave($__internal_89114fb5841d90d838ad4a54d2e817a9eb4a85d217851d132ce762fd747b39c2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
