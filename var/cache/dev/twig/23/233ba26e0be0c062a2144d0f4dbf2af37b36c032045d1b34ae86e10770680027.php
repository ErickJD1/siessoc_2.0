<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1d00666fa383efde39bd77cf5943f3cf40c96286002066b336db33c7ace70e93 extends Twig_Template
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
        $__internal_623e3f139d75d99d6e5c95edfe9147f1f9948ef6a002e0a79296f230b96ee561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623e3f139d75d99d6e5c95edfe9147f1f9948ef6a002e0a79296f230b96ee561->enter($__internal_623e3f139d75d99d6e5c95edfe9147f1f9948ef6a002e0a79296f230b96ee561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_623e3f139d75d99d6e5c95edfe9147f1f9948ef6a002e0a79296f230b96ee561->leave($__internal_623e3f139d75d99d6e5c95edfe9147f1f9948ef6a002e0a79296f230b96ee561_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
