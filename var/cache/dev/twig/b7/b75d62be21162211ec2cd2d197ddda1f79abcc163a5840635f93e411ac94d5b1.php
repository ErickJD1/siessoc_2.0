<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ec909347bffe072ff483cd5be08c35d7ec2264d019c35828bd8147b8d96b0a56 extends Twig_Template
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
        $__internal_bf9e6a2dc0e2f2cb01d04d6f0a6d46de21bc642e5cf62020f9ad1c90da85f6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf9e6a2dc0e2f2cb01d04d6f0a6d46de21bc642e5cf62020f9ad1c90da85f6fe->enter($__internal_bf9e6a2dc0e2f2cb01d04d6f0a6d46de21bc642e5cf62020f9ad1c90da85f6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_bf9e6a2dc0e2f2cb01d04d6f0a6d46de21bc642e5cf62020f9ad1c90da85f6fe->leave($__internal_bf9e6a2dc0e2f2cb01d04d6f0a6d46de21bc642e5cf62020f9ad1c90da85f6fe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
