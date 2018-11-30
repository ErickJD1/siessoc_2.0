<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_3d07e722366f8d5c1cfc5e04a9f75bf8ec19fcb72b0af19c1f3ddd927283a271 extends Twig_Template
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
        $__internal_e80a26b5ffbd22be1e371caf0bcc23557701a66e6119de4e49670c9b2e9ef772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80a26b5ffbd22be1e371caf0bcc23557701a66e6119de4e49670c9b2e9ef772->enter($__internal_e80a26b5ffbd22be1e371caf0bcc23557701a66e6119de4e49670c9b2e9ef772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_e80a26b5ffbd22be1e371caf0bcc23557701a66e6119de4e49670c9b2e9ef772->leave($__internal_e80a26b5ffbd22be1e371caf0bcc23557701a66e6119de4e49670c9b2e9ef772_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
