<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_474ee841e1046f6d9dd33cb5e704501b4e9ab9c130a60688293ccbf314f66fda extends Twig_Template
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
        $__internal_5328649d7ee43f9bcd033b91490c92bd4e7a3d663abbb8c9a5d3fb92df1d6ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5328649d7ee43f9bcd033b91490c92bd4e7a3d663abbb8c9a5d3fb92df1d6ad6->enter($__internal_5328649d7ee43f9bcd033b91490c92bd4e7a3d663abbb8c9a5d3fb92df1d6ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5328649d7ee43f9bcd033b91490c92bd4e7a3d663abbb8c9a5d3fb92df1d6ad6->leave($__internal_5328649d7ee43f9bcd033b91490c92bd4e7a3d663abbb8c9a5d3fb92df1d6ad6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
