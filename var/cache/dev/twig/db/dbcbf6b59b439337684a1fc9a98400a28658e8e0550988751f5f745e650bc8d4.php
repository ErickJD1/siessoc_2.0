<?php

/* @AvanzuAdminTheme/Sidebar/search-form.html.twig */
class __TwigTemplate_9a33f7b7c985b72ca81b5446db3dc8852e907e3a49121d7a419b234dc8d9fb73 extends Twig_Template
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
        $__internal_d64e9ce0d169564334f465c0ce5b159e2f21de46ae866f720b887b3ef00e5c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d64e9ce0d169564334f465c0ce5b159e2f21de46ae866f720b887b3ef00e5c78->enter($__internal_d64e9ce0d169564334f465c0ce5b159e2f21de46ae866f720b887b3ef00e5c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Sidebar/search-form.html.twig"));

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
        
        $__internal_d64e9ce0d169564334f465c0ce5b159e2f21de46ae866f720b887b3ef00e5c78->leave($__internal_d64e9ce0d169564334f465c0ce5b159e2f21de46ae866f720b887b3ef00e5c78_prof);

    }

    public function getTemplateName()
    {
        return "@AvanzuAdminTheme/Sidebar/search-form.html.twig";
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
<!-- /.search form -->", "@AvanzuAdminTheme/Sidebar/search-form.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\avanzu\\admin-theme-bundle\\Resources\\views\\Sidebar\\search-form.html.twig");
    }
}
