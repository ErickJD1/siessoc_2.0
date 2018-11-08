<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_5d257f22ae05625af5dd86c47e34f2fa8d5b22f095921d585bb48576baf3c883 extends Twig_Template
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
        $__internal_de3c55d5f8f07624d1c895bd89bdd62a57f4ed27e18e5e4e3f37428a45df7235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3c55d5f8f07624d1c895bd89bdd62a57f4ed27e18e5e4e3f37428a45df7235->enter($__internal_de3c55d5f8f07624d1c895bd89bdd62a57f4ed27e18e5e4e3f37428a45df7235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_de3c55d5f8f07624d1c895bd89bdd62a57f4ed27e18e5e4e3f37428a45df7235->leave($__internal_de3c55d5f8f07624d1c895bd89bdd62a57f4ed27e18e5e4e3f37428a45df7235_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
