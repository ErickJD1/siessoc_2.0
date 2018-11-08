<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_64190d0ab93d4163930f626a14b3b8cff47d5984b60bd1990b4bab7098e59439 extends Twig_Template
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
        $__internal_faa7ac13139f2b4644c977d628e5418fa6c4806e2a849d82fb3271acb89c3b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa7ac13139f2b4644c977d628e5418fa6c4806e2a849d82fb3271acb89c3b26->enter($__internal_faa7ac13139f2b4644c977d628e5418fa6c4806e2a849d82fb3271acb89c3b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_faa7ac13139f2b4644c977d628e5418fa6c4806e2a849d82fb3271acb89c3b26->leave($__internal_faa7ac13139f2b4644c977d628e5418fa6c4806e2a849d82fb3271acb89c3b26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
