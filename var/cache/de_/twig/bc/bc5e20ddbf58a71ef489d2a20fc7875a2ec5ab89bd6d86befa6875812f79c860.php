<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_072226a3cb330b14f4c8411a88fd9ac8df22b81e574c249984bfd9fe24549f0e extends Twig_Template
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
        $__internal_d6db22487b9e4c056e9d4f1a1d3b126a86a8a3744c7524b8883205b28ee16fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6db22487b9e4c056e9d4f1a1d3b126a86a8a3744c7524b8883205b28ee16fe2->enter($__internal_d6db22487b9e4c056e9d4f1a1d3b126a86a8a3744c7524b8883205b28ee16fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d6db22487b9e4c056e9d4f1a1d3b126a86a8a3744c7524b8883205b28ee16fe2->leave($__internal_d6db22487b9e4c056e9d4f1a1d3b126a86a8a3744c7524b8883205b28ee16fe2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
