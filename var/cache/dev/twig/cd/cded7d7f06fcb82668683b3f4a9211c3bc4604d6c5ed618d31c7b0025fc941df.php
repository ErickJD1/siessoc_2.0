<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ffc2f2d55ad3dcc3ef9e96153f2aff27ea16a69e49df53e1b4b88b85e8a06375 extends Twig_Template
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
        $__internal_d7aa6f9228fc83dfca7c93213025084c082d7dd7b70cd330d90ff05a0067843f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7aa6f9228fc83dfca7c93213025084c082d7dd7b70cd330d90ff05a0067843f->enter($__internal_d7aa6f9228fc83dfca7c93213025084c082d7dd7b70cd330d90ff05a0067843f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d7aa6f9228fc83dfca7c93213025084c082d7dd7b70cd330d90ff05a0067843f->leave($__internal_d7aa6f9228fc83dfca7c93213025084c082d7dd7b70cd330d90ff05a0067843f_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
