<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_932d68fe5e214e2d629f39bf22beff1ead43ac8594b8ce68b8272b70175fe394 extends Twig_Template
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
        $__internal_02d7e4ff6f0f348fc66a438b9bccd932655022bf3d958b893279f9dfdb25e350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d7e4ff6f0f348fc66a438b9bccd932655022bf3d958b893279f9dfdb25e350->enter($__internal_02d7e4ff6f0f348fc66a438b9bccd932655022bf3d958b893279f9dfdb25e350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_02d7e4ff6f0f348fc66a438b9bccd932655022bf3d958b893279f9dfdb25e350->leave($__internal_02d7e4ff6f0f348fc66a438b9bccd932655022bf3d958b893279f9dfdb25e350_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
