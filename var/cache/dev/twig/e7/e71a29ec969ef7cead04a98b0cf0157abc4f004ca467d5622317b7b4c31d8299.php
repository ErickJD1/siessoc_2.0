<?php

/* @IvoryCKEditor/Form/ckeditor_javascript.html.php */
class __TwigTemplate_25bcdc963d8727c181dbaa646d402e56b6473364d0338bd949aa603069557da5 extends Twig_Template
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
        $__internal_25f21633d5164d7c0c5b4a50791a6ea83eb785bea487909b67d8626a20de928c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25f21633d5164d7c0c5b4a50791a6ea83eb785bea487909b67d8626a20de928c->enter($__internal_25f21633d5164d7c0c5b4a50791a6ea83eb785bea487909b67d8626a20de928c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_javascript.html.php"));

        // line 1
        echo "<?php if (\$enable && \$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_25f21633d5164d7c0c5b4a50791a6ea83eb785bea487909b67d8626a20de928c->leave($__internal_25f21633d5164d7c0c5b4a50791a6ea83eb785bea487909b67d8626a20de928c_prof);

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
", "@IvoryCKEditor/Form/ckeditor_javascript.html.php", "/home/ubuntu/workspace/vendor/egeloen/ckeditor-bundle/Resources/views/Form/ckeditor_javascript.html.php");
    }
}
