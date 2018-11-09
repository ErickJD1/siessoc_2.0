<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_efd3e90cb5dbc65d8ba2f1db6852d8463a2318d96c927e502d4491af2e61b2bd extends Twig_Template
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
        $__internal_a5b2fcfa318da88fd4b3c9d000cf16c9cc430d37e5a90279413d2d2f1da27e49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b2fcfa318da88fd4b3c9d000cf16c9cc430d37e5a90279413d2d2f1da27e49->enter($__internal_a5b2fcfa318da88fd4b3c9d000cf16c9cc430d37e5a90279413d2d2f1da27e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a5b2fcfa318da88fd4b3c9d000cf16c9cc430d37e5a90279413d2d2f1da27e49->leave($__internal_a5b2fcfa318da88fd4b3c9d000cf16c9cc430d37e5a90279413d2d2f1da27e49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
