<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_f1b37ab4e283c5a63d6d8a42fd0cb728a9940a8d8b186cf6ed6500e0d86549c4 extends Twig_Template
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
        $__internal_8917603dba266fa2cbb161cab02be4ee5fd6c3420a7ed9a3652cadb724e2f691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8917603dba266fa2cbb161cab02be4ee5fd6c3420a7ed9a3652cadb724e2f691->enter($__internal_8917603dba266fa2cbb161cab02be4ee5fd6c3420a7ed9a3652cadb724e2f691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8917603dba266fa2cbb161cab02be4ee5fd6c3420a7ed9a3652cadb724e2f691->leave($__internal_8917603dba266fa2cbb161cab02be4ee5fd6c3420a7ed9a3652cadb724e2f691_prof);

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
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
