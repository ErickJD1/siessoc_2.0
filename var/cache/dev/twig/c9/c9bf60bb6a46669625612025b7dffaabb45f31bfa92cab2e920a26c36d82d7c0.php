<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_2db7c3bb8daa6e5022e227c8769508aa7acd972643355e83f0a84a1d74a00298 extends Twig_Template
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
        $__internal_fea5589ec9c5d4df68dfc8d186f12f3a40f696c5bee29f0c69bb1d4319335347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea5589ec9c5d4df68dfc8d186f12f3a40f696c5bee29f0c69bb1d4319335347->enter($__internal_fea5589ec9c5d4df68dfc8d186f12f3a40f696c5bee29f0c69bb1d4319335347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_fea5589ec9c5d4df68dfc8d186f12f3a40f696c5bee29f0c69bb1d4319335347->leave($__internal_fea5589ec9c5d4df68dfc8d186f12f3a40f696c5bee29f0c69bb1d4319335347_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
