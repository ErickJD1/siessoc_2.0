<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f44f6e23094b30af244378baaa0c9a27e1c38a5fedfffbbc38f488f0e4993463 extends Twig_Template
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
        $__internal_1f5e8ae97d38a9b1b45c9baff8cf0f60eed9bb86efa17e4f38e4aa24f29d4ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f5e8ae97d38a9b1b45c9baff8cf0f60eed9bb86efa17e4f38e4aa24f29d4ccc->enter($__internal_1f5e8ae97d38a9b1b45c9baff8cf0f60eed9bb86efa17e4f38e4aa24f29d4ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1f5e8ae97d38a9b1b45c9baff8cf0f60eed9bb86efa17e4f38e4aa24f29d4ccc->leave($__internal_1f5e8ae97d38a9b1b45c9baff8cf0f60eed9bb86efa17e4f38e4aa24f29d4ccc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
