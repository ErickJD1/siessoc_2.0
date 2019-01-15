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
        $__internal_5f29b2ca65a4d1686c798aea18728ed73bd331ab5220845874520d20a4c5a390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f29b2ca65a4d1686c798aea18728ed73bd331ab5220845874520d20a4c5a390->enter($__internal_5f29b2ca65a4d1686c798aea18728ed73bd331ab5220845874520d20a4c5a390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f29b2ca65a4d1686c798aea18728ed73bd331ab5220845874520d20a4c5a390->leave($__internal_5f29b2ca65a4d1686c798aea18728ed73bd331ab5220845874520d20a4c5a390_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_89e8b4754e10a615daebbb9724fd1c9f2df8115ea5a926e46ea3b067eca44ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e8b4754e10a615daebbb9724fd1c9f2df8115ea5a926e46ea3b067eca44ebb->enter($__internal_89e8b4754e10a615daebbb9724fd1c9f2df8115ea5a926e46ea3b067eca44ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_89e8b4754e10a615daebbb9724fd1c9f2df8115ea5a926e46ea3b067eca44ebb->leave($__internal_89e8b4754e10a615daebbb9724fd1c9f2df8115ea5a926e46ea3b067eca44ebb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_50034146bb27001f61c83b0d31ed74cbfd8a71e6a0518d248bb6078af97a1675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50034146bb27001f61c83b0d31ed74cbfd8a71e6a0518d248bb6078af97a1675->enter($__internal_50034146bb27001f61c83b0d31ed74cbfd8a71e6a0518d248bb6078af97a1675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_50034146bb27001f61c83b0d31ed74cbfd8a71e6a0518d248bb6078af97a1675->leave($__internal_50034146bb27001f61c83b0d31ed74cbfd8a71e6a0518d248bb6078af97a1675_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_57de051b4e72e58b5ae8c764ff1ce1bb3e9331e66f19f168e981614b7c7f7fca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57de051b4e72e58b5ae8c764ff1ce1bb3e9331e66f19f168e981614b7c7f7fca->enter($__internal_57de051b4e72e58b5ae8c764ff1ce1bb3e9331e66f19f168e981614b7c7f7fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_57de051b4e72e58b5ae8c764ff1ce1bb3e9331e66f19f168e981614b7c7f7fca->leave($__internal_57de051b4e72e58b5ae8c764ff1ce1bb3e9331e66f19f168e981614b7c7f7fca_prof);

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
