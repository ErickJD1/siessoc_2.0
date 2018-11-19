<?php

/* FOSUserBundle:Resetting:email.html.twig */
class __TwigTemplate_26190a24f586181e0ce676ed59ff7a7fe3c26125ae1bf4db357ca4211b6e7f58 extends Twig_Template
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
        $__internal_84c11b334a4b38ee07e999c9456768bb42465b6eee2db40071f37a988134bdd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84c11b334a4b38ee07e999c9456768bb42465b6eee2db40071f37a988134bdd8->enter($__internal_84c11b334a4b38ee07e999c9456768bb42465b6eee2db40071f37a988134bdd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.html.twig"));

        // line 1
        echo "<!DOCTYPE html>   
<html>
    <head>
        <title>Welcome to Symfony!</title>
    </head>
    <body>
        <h1 Style=\"color:red\">Hola Mundo</h1>
    </body>
</html>";
        
        $__internal_84c11b334a4b38ee07e999c9456768bb42465b6eee2db40071f37a988134bdd8->leave($__internal_84c11b334a4b38ee07e999c9456768bb42465b6eee2db40071f37a988134bdd8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.html.twig";
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
        return new Twig_Source("<!DOCTYPE html>   
<html>
    <head>
        <title>Welcome to Symfony!</title>
    </head>
    <body>
        <h1 Style=\"color:red\">Hola Mundo</h1>
    </body>
</html>", "FOSUserBundle:Resetting:email.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.html.twig");
    }
}
