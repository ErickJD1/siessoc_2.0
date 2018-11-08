<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_89f26fa6a482d44005a48539d4fb5c3cc02e13d509daecc06bce66bbe11717f6 extends Twig_Template
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
        $__internal_2de5e8efdb26ad4a2075526f9055d25d8e58373036c8e8e6b5bc2cf88481806d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de5e8efdb26ad4a2075526f9055d25d8e58373036c8e8e6b5bc2cf88481806d->enter($__internal_2de5e8efdb26ad4a2075526f9055d25d8e58373036c8e8e6b5bc2cf88481806d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_2de5e8efdb26ad4a2075526f9055d25d8e58373036c8e8e6b5bc2cf88481806d->leave($__internal_2de5e8efdb26ad4a2075526f9055d25d8e58373036c8e8e6b5bc2cf88481806d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
