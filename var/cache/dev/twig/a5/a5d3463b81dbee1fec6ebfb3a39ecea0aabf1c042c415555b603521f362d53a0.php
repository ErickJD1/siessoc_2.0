<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_861093bf5bfcf11a6b977972c013ff1a56216debcf8161194ab22dd712a17637 extends Twig_Template
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
        $__internal_ea22465bb21ff8c4a22d150f3c8dad50c6e2f640582a1401a02c5af4834d7554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea22465bb21ff8c4a22d150f3c8dad50c6e2f640582a1401a02c5af4834d7554->enter($__internal_ea22465bb21ff8c4a22d150f3c8dad50c6e2f640582a1401a02c5af4834d7554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_ea22465bb21ff8c4a22d150f3c8dad50c6e2f640582a1401a02c5af4834d7554->leave($__internal_ea22465bb21ff8c4a22d150f3c8dad50c6e2f640582a1401a02c5af4834d7554_prof);

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
", "@Framework/Form/hidden_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
