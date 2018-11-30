<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ca220417e7aae399a196c889093040c3af9505dd6f2ce034cefbb4d2b3558395 extends Twig_Template
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
        $__internal_f7eeb5bb652543a19737fe950b2c5767ae4c9d23d31c9a8e855c9386a5f81dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7eeb5bb652543a19737fe950b2c5767ae4c9d23d31c9a8e855c9386a5f81dbe->enter($__internal_f7eeb5bb652543a19737fe950b2c5767ae4c9d23d31c9a8e855c9386a5f81dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f7eeb5bb652543a19737fe950b2c5767ae4c9d23d31c9a8e855c9386a5f81dbe->leave($__internal_f7eeb5bb652543a19737fe950b2c5767ae4c9d23d31c9a8e855c9386a5f81dbe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
