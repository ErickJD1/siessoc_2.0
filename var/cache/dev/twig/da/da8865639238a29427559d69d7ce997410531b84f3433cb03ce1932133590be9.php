<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_fdc879402f484162a52b100151a2d197491ba9013526b0371688d0fe8f03d73c extends Twig_Template
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
        $__internal_9f47fbce6d8793958fd8e96e17065132a07bb4a9d0eac3536cd94419eeb69183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f47fbce6d8793958fd8e96e17065132a07bb4a9d0eac3536cd94419eeb69183->enter($__internal_9f47fbce6d8793958fd8e96e17065132a07bb4a9d0eac3536cd94419eeb69183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9f47fbce6d8793958fd8e96e17065132a07bb4a9d0eac3536cd94419eeb69183->leave($__internal_9f47fbce6d8793958fd8e96e17065132a07bb4a9d0eac3536cd94419eeb69183_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
