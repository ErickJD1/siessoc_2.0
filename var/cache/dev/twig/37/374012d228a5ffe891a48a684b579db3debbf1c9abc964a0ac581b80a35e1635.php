<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_d86f85c21bc137e3d09a4100091f7a575126d30076610976fd0e3df99c2a921d extends Twig_Template
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
        $__internal_085d85ef07f5b887a29c308ecb553e8c4fa2aaaff75abdb799c80c931993531b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085d85ef07f5b887a29c308ecb553e8c4fa2aaaff75abdb799c80c931993531b->enter($__internal_085d85ef07f5b887a29c308ecb553e8c4fa2aaaff75abdb799c80c931993531b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_085d85ef07f5b887a29c308ecb553e8c4fa2aaaff75abdb799c80c931993531b->leave($__internal_085d85ef07f5b887a29c308ecb553e8c4fa2aaaff75abdb799c80c931993531b_prof);

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
", "@Framework/Form/email_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
