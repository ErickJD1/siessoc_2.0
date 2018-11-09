<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_932d68fe5e214e2d629f39bf22beff1ead43ac8594b8ce68b8272b70175fe394 extends Twig_Template
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
        $__internal_d09f5f0a03d6135527e25d8eb0a9f599c08c9287fcd0a70200881919ce1ca1f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09f5f0a03d6135527e25d8eb0a9f599c08c9287fcd0a70200881919ce1ca1f5->enter($__internal_d09f5f0a03d6135527e25d8eb0a9f599c08c9287fcd0a70200881919ce1ca1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d09f5f0a03d6135527e25d8eb0a9f599c08c9287fcd0a70200881919ce1ca1f5->leave($__internal_d09f5f0a03d6135527e25d8eb0a9f599c08c9287fcd0a70200881919ce1ca1f5_prof);

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
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
