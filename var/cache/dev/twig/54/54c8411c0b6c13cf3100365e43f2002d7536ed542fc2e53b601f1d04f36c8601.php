<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_ff88dd6998005a98e4d4867891efdb9b83a47e420d8b568859dc9edf63b2ecda extends Twig_Template
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
        $__internal_bd6433bbcb2fcc32c00b668d1451fe8cf9ba10a64ff201dde7d5eebe7ae1e440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6433bbcb2fcc32c00b668d1451fe8cf9ba10a64ff201dde7d5eebe7ae1e440->enter($__internal_bd6433bbcb2fcc32c00b668d1451fe8cf9ba10a64ff201dde7d5eebe7ae1e440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_bd6433bbcb2fcc32c00b668d1451fe8cf9ba10a64ff201dde7d5eebe7ae1e440->leave($__internal_bd6433bbcb2fcc32c00b668d1451fe8cf9ba10a64ff201dde7d5eebe7ae1e440_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
