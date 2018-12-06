<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_974f70c457d7e84cc1822918ef32cf12d331aa7ad78fb1ae7b53e84be9299afe extends Twig_Template
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
        $__internal_fcc7bc4ff7b6dbb8ebc6e2f0621b50407379641db3270a7b829fd13b0992e8d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc7bc4ff7b6dbb8ebc6e2f0621b50407379641db3270a7b829fd13b0992e8d3->enter($__internal_fcc7bc4ff7b6dbb8ebc6e2f0621b50407379641db3270a7b829fd13b0992e8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_fcc7bc4ff7b6dbb8ebc6e2f0621b50407379641db3270a7b829fd13b0992e8d3->leave($__internal_fcc7bc4ff7b6dbb8ebc6e2f0621b50407379641db3270a7b829fd13b0992e8d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
