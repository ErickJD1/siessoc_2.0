<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_99587480f8f35035dfd3ed750ac23cbee849590b76ee2650d9f87c2b3d7bae06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8240584e77570cbbde5f937a416126c7b3a9131ae83552ad6734b39e94546997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8240584e77570cbbde5f937a416126c7b3a9131ae83552ad6734b39e94546997->enter($__internal_8240584e77570cbbde5f937a416126c7b3a9131ae83552ad6734b39e94546997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8240584e77570cbbde5f937a416126c7b3a9131ae83552ad6734b39e94546997->leave($__internal_8240584e77570cbbde5f937a416126c7b3a9131ae83552ad6734b39e94546997_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce6727c5048839247f126c4c310e796bed7dd498ddb197cb6c6c6b41bc691aa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6727c5048839247f126c4c310e796bed7dd498ddb197cb6c6c6b41bc691aa1->enter($__internal_ce6727c5048839247f126c4c310e796bed7dd498ddb197cb6c6c6b41bc691aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ce6727c5048839247f126c4c310e796bed7dd498ddb197cb6c6c6b41bc691aa1->leave($__internal_ce6727c5048839247f126c4c310e796bed7dd498ddb197cb6c6c6b41bc691aa1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
