<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4852099e94a15df50b8fa3206b79c2d34b86ae272bc8115e9ee7c6e41a14130f extends Twig_Template
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
        $__internal_6a8a0ce0fb781a7c3d1064d44df5ff40f966b2a5f633bc6ee9ffab1603376d57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a8a0ce0fb781a7c3d1064d44df5ff40f966b2a5f633bc6ee9ffab1603376d57->enter($__internal_6a8a0ce0fb781a7c3d1064d44df5ff40f966b2a5f633bc6ee9ffab1603376d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6a8a0ce0fb781a7c3d1064d44df5ff40f966b2a5f633bc6ee9ffab1603376d57->leave($__internal_6a8a0ce0fb781a7c3d1064d44df5ff40f966b2a5f633bc6ee9ffab1603376d57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
