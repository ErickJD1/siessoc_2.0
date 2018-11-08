<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_89ff33fec947fd1973b56f2137b220b266bf6ef21c0dace43595dbc22dd37860 extends Twig_Template
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
        $__internal_2c30ffa7f023332fdfd613897b5de552ec88371702b309a83b1eccb1daf39935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c30ffa7f023332fdfd613897b5de552ec88371702b309a83b1eccb1daf39935->enter($__internal_2c30ffa7f023332fdfd613897b5de552ec88371702b309a83b1eccb1daf39935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_2c30ffa7f023332fdfd613897b5de552ec88371702b309a83b1eccb1daf39935->leave($__internal_2c30ffa7f023332fdfd613897b5de552ec88371702b309a83b1eccb1daf39935_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
