<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_052402e23aa67612ebd0e53429a3d336b929c5f4cb947197853c20ec00df1b0a extends Twig_Template
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
        $__internal_4a61b1a165e9b5d2349547c651a76b3e5cb3493347a943a94e50d22f1f376343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a61b1a165e9b5d2349547c651a76b3e5cb3493347a943a94e50d22f1f376343->enter($__internal_4a61b1a165e9b5d2349547c651a76b3e5cb3493347a943a94e50d22f1f376343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4a61b1a165e9b5d2349547c651a76b3e5cb3493347a943a94e50d22f1f376343->leave($__internal_4a61b1a165e9b5d2349547c651a76b3e5cb3493347a943a94e50d22f1f376343_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
