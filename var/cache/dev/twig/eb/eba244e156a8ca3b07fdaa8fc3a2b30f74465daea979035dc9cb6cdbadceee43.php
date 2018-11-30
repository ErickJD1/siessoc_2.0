<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_3cba03b08e78c907b994a3e236b3e2b4958e28dc598c8c6bbaf814f8ee23f4ce extends Twig_Template
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
        $__internal_35fae74f1022fa44ac7b920cb329ed81af66b0867012dcb3ac8a6506393d1621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35fae74f1022fa44ac7b920cb329ed81af66b0867012dcb3ac8a6506393d1621->enter($__internal_35fae74f1022fa44ac7b920cb329ed81af66b0867012dcb3ac8a6506393d1621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_35fae74f1022fa44ac7b920cb329ed81af66b0867012dcb3ac8a6506393d1621->leave($__internal_35fae74f1022fa44ac7b920cb329ed81af66b0867012dcb3ac8a6506393d1621_prof);

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
", "@Framework/Form/form_enctype.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
