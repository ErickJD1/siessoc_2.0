<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_f64a158f6833c9e0ac51fd928e61ac34e3b1d5c2c73da6adc8c6ffa9e1cedac4 extends Twig_Template
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
        $__internal_3f8f7adb9384ec1f1e05ed58e7ffee381369239670c934d5da44eadd4e9b6b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f8f7adb9384ec1f1e05ed58e7ffee381369239670c934d5da44eadd4e9b6b7a->enter($__internal_3f8f7adb9384ec1f1e05ed58e7ffee381369239670c934d5da44eadd4e9b6b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_3f8f7adb9384ec1f1e05ed58e7ffee381369239670c934d5da44eadd4e9b6b7a->leave($__internal_3f8f7adb9384ec1f1e05ed58e7ffee381369239670c934d5da44eadd4e9b6b7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
