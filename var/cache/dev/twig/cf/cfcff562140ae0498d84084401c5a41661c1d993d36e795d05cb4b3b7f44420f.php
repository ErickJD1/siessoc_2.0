<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_a85d4c463a0741bc46b85e5fb63d816137e49139f7e346788df1902371c9809e extends Twig_Template
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
        $__internal_62ebb879d968f8ff2e4498a0fa6cc5a0955a6034af8c8b401691bf74f35b578b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ebb879d968f8ff2e4498a0fa6cc5a0955a6034af8c8b401691bf74f35b578b->enter($__internal_62ebb879d968f8ff2e4498a0fa6cc5a0955a6034af8c8b401691bf74f35b578b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_62ebb879d968f8ff2e4498a0fa6cc5a0955a6034af8c8b401691bf74f35b578b->leave($__internal_62ebb879d968f8ff2e4498a0fa6cc5a0955a6034af8c8b401691bf74f35b578b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
