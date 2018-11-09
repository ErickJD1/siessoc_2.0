<?php

/* @IvoryCKEditor/Form/ckeditor_javascript.html.php */
class __TwigTemplate_6641056d499640e102aa22db045fd517860e097081df9a69dc00d76b73d4a560 extends Twig_Template
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
        $__internal_baa9b116cec300d9dffed00d06ab32f55c2087860aad3999c9d91262dbc50616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa9b116cec300d9dffed00d06ab32f55c2087860aad3999c9d91262dbc50616->enter($__internal_baa9b116cec300d9dffed00d06ab32f55c2087860aad3999c9d91262dbc50616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_javascript.html.php"));

        // line 1
        echo "<?php if (\$enable && \$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_baa9b116cec300d9dffed00d06ab32f55c2087860aad3999c9d91262dbc50616->leave($__internal_baa9b116cec300d9dffed00d06ab32f55c2087860aad3999c9d91262dbc50616_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/ckeditor_javascript.html.php";
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
        return new Twig_Source("<?php if (\$enable && \$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
", "@IvoryCKEditor/Form/ckeditor_javascript.html.php", "C:\\xampp\\htdocs\\siessoc\\vendor\\egeloen\\ckeditor-bundle\\Resources\\views\\Form\\ckeditor_javascript.html.php");
    }
}
