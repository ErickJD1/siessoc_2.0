<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_de1445367f27bfcc4dd70229b608949bce5417dce63bc70ebfdc1cb457211909 extends Twig_Template
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
        $__internal_3faab6e59c5678f311e12b7b8b4d85247dd91cd42294d626566ab7ec8d014ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3faab6e59c5678f311e12b7b8b4d85247dd91cd42294d626566ab7ec8d014ddc->enter($__internal_3faab6e59c5678f311e12b7b8b4d85247dd91cd42294d626566ab7ec8d014ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3faab6e59c5678f311e12b7b8b4d85247dd91cd42294d626566ab7ec8d014ddc->leave($__internal_3faab6e59c5678f311e12b7b8b4d85247dd91cd42294d626566ab7ec8d014ddc_prof);

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
", "@Framework/Form/form_rows.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
