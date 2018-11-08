<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_43d9a97b43d312d572a1409b6ac8570c7bd758df0ebc6ed5252361b6e7d7d831 extends Twig_Template
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
        $__internal_18613f4f68c269bc9f089763a9776c9257f472dafa74b994e42c6876c083b28c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18613f4f68c269bc9f089763a9776c9257f472dafa74b994e42c6876c083b28c->enter($__internal_18613f4f68c269bc9f089763a9776c9257f472dafa74b994e42c6876c083b28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_18613f4f68c269bc9f089763a9776c9257f472dafa74b994e42c6876c083b28c->leave($__internal_18613f4f68c269bc9f089763a9776c9257f472dafa74b994e42c6876c083b28c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
