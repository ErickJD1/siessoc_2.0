<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_8cde93d293aff5b2217454b54aa97b3985f251ba6cf587e0cd52da2d97497147 extends Twig_Template
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
        $__internal_219859785f735cbb2fe4766a25a6c1c1c6c3f0bb6ffe7c555cb4e25ba7a62daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219859785f735cbb2fe4766a25a6c1c1c6c3f0bb6ffe7c555cb4e25ba7a62daa->enter($__internal_219859785f735cbb2fe4766a25a6c1c1c6c3f0bb6ffe7c555cb4e25ba7a62daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_219859785f735cbb2fe4766a25a6c1c1c6c3f0bb6ffe7c555cb4e25ba7a62daa->leave($__internal_219859785f735cbb2fe4766a25a6c1c1c6c3f0bb6ffe7c555cb4e25ba7a62daa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
