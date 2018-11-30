<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_5668055900dcd9ffd5ec7740ce6a11abe88bc7482f22bafc507feb9423ef7d08 extends Twig_Template
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
        $__internal_6a1a8f54dcdd75d9f5fe71096af7c6695c9435f4e4d29fafcc32fcace689fc7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1a8f54dcdd75d9f5fe71096af7c6695c9435f4e4d29fafcc32fcace689fc7d->enter($__internal_6a1a8f54dcdd75d9f5fe71096af7c6695c9435f4e4d29fafcc32fcace689fc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_6a1a8f54dcdd75d9f5fe71096af7c6695c9435f4e4d29fafcc32fcace689fc7d->leave($__internal_6a1a8f54dcdd75d9f5fe71096af7c6695c9435f4e4d29fafcc32fcace689fc7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
