<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_da6f85537175b020ea6002f7dee6b85f26c171b2759cce22803df5d4cb008b6b extends Twig_Template
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
        $__internal_78f8c91784a8b5c79ca2f79481039f98bd9bb78a8f2333f5cf241c4760cf33f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f8c91784a8b5c79ca2f79481039f98bd9bb78a8f2333f5cf241c4760cf33f6->enter($__internal_78f8c91784a8b5c79ca2f79481039f98bd9bb78a8f2333f5cf241c4760cf33f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_78f8c91784a8b5c79ca2f79481039f98bd9bb78a8f2333f5cf241c4760cf33f6->leave($__internal_78f8c91784a8b5c79ca2f79481039f98bd9bb78a8f2333f5cf241c4760cf33f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
