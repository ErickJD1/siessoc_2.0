<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f82574fdb641a09ad6be49beaca217e1359a391e395f7a38a07132e52372f153 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_562d91c41e7c0688cab7250e6a163542a5e1f8df8da88a978fcc670d684be45d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_562d91c41e7c0688cab7250e6a163542a5e1f8df8da88a978fcc670d684be45d->enter($__internal_562d91c41e7c0688cab7250e6a163542a5e1f8df8da88a978fcc670d684be45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_562d91c41e7c0688cab7250e6a163542a5e1f8df8da88a978fcc670d684be45d->leave($__internal_562d91c41e7c0688cab7250e6a163542a5e1f8df8da88a978fcc670d684be45d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b661b00920c4b7d77146e524fb2a37a518578a4440ebec0a941de26f7085d681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b661b00920c4b7d77146e524fb2a37a518578a4440ebec0a941de26f7085d681->enter($__internal_b661b00920c4b7d77146e524fb2a37a518578a4440ebec0a941de26f7085d681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_b661b00920c4b7d77146e524fb2a37a518578a4440ebec0a941de26f7085d681->leave($__internal_b661b00920c4b7d77146e524fb2a37a518578a4440ebec0a941de26f7085d681_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
