<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_a7619a8abca1d12940443149b049ab036f5ca95811c86454a6f282cef5f5b58f extends Twig_Template
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
        $__internal_1679c07b9ef809b0fd88bae649861a78fdd1a413e758af48dbdf2d6ac013cbf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1679c07b9ef809b0fd88bae649861a78fdd1a413e758af48dbdf2d6ac013cbf3->enter($__internal_1679c07b9ef809b0fd88bae649861a78fdd1a413e758af48dbdf2d6ac013cbf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1679c07b9ef809b0fd88bae649861a78fdd1a413e758af48dbdf2d6ac013cbf3->leave($__internal_1679c07b9ef809b0fd88bae649861a78fdd1a413e758af48dbdf2d6ac013cbf3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4d608d8d4a169752984a04833c618161186958c39e36489b8c7b3932b7cb7f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d608d8d4a169752984a04833c618161186958c39e36489b8c7b3932b7cb7f8d->enter($__internal_4d608d8d4a169752984a04833c618161186958c39e36489b8c7b3932b7cb7f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4d608d8d4a169752984a04833c618161186958c39e36489b8c7b3932b7cb7f8d->leave($__internal_4d608d8d4a169752984a04833c618161186958c39e36489b8c7b3932b7cb7f8d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
