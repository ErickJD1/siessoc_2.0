<?php

/* AvanzuAdminThemeBundle:Sidebar:search-form.html.twig */
class __TwigTemplate_84677a58edc281d0ee7893355c1d32b734604a0cf7b0ae7c10e6a65658228607 extends Twig_Template
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
        $__internal_2dae47c4faad11bcad99393cb3bf205f0f9249a6f1f057595643316d48e0791d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dae47c4faad11bcad99393cb3bf205f0f9249a6f1f057595643316d48e0791d->enter($__internal_2dae47c4faad11bcad99393cb3bf205f0f9249a6f1f057595643316d48e0791d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Sidebar:search-form.html.twig"));

        // line 1
        echo "<!-- search form -->
<form action=\"#\" method=\"get\" class=\"sidebar-form\">
    <div class=\"input-group\">
        <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
        <span class=\"input-group-btn\">
            <button type='submit' name='search' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
        </span>
    </div>
</form>
<!-- /.search form -->";
        
        $__internal_2dae47c4faad11bcad99393cb3bf205f0f9249a6f1f057595643316d48e0791d->leave($__internal_2dae47c4faad11bcad99393cb3bf205f0f9249a6f1f057595643316d48e0791d_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Sidebar:search-form.html.twig";
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
        return new Twig_Source("<!-- search form -->
<form action=\"#\" method=\"get\" class=\"sidebar-form\">
    <div class=\"input-group\">
        <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
        <span class=\"input-group-btn\">
            <button type='submit' name='search' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
        </span>
    </div>
</form>
<!-- /.search form -->", "AvanzuAdminThemeBundle:Sidebar:search-form.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\avanzu\\admin-theme-bundle/Resources/views/Sidebar/search-form.html.twig");
    }
}
