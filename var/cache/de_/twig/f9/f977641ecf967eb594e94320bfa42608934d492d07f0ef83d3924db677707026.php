<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_c994fe21cfd1d1dbdb60f4db2749839717072881f6e2d2b4114a0c9dade60bb2 extends Twig_Template
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
        $__internal_7b5bb2028ce8252a61da41bb84a4c1828cada0a6a388162278cc5fff34dba20f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b5bb2028ce8252a61da41bb84a4c1828cada0a6a388162278cc5fff34dba20f->enter($__internal_7b5bb2028ce8252a61da41bb84a4c1828cada0a6a388162278cc5fff34dba20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_7b5bb2028ce8252a61da41bb84a4c1828cada0a6a388162278cc5fff34dba20f->leave($__internal_7b5bb2028ce8252a61da41bb84a4c1828cada0a6a388162278cc5fff34dba20f_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
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
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu_base.html.twig");
    }
}
