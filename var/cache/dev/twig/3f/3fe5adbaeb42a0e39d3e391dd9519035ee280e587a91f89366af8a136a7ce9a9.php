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
        $__internal_da7ff8427ad43da7360139fe0ca22b994a0338f2b085d7db97658cfffbe53eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da7ff8427ad43da7360139fe0ca22b994a0338f2b085d7db97658cfffbe53eac->enter($__internal_da7ff8427ad43da7360139fe0ca22b994a0338f2b085d7db97658cfffbe53eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da7ff8427ad43da7360139fe0ca22b994a0338f2b085d7db97658cfffbe53eac->leave($__internal_da7ff8427ad43da7360139fe0ca22b994a0338f2b085d7db97658cfffbe53eac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c9b5082b04c1d65aa01fbf9cba066477fb5f6f8971e0bed793a4a7fd16294e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c9b5082b04c1d65aa01fbf9cba066477fb5f6f8971e0bed793a4a7fd16294e0->enter($__internal_3c9b5082b04c1d65aa01fbf9cba066477fb5f6f8971e0bed793a4a7fd16294e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_3c9b5082b04c1d65aa01fbf9cba066477fb5f6f8971e0bed793a4a7fd16294e0->leave($__internal_3c9b5082b04c1d65aa01fbf9cba066477fb5f6f8971e0bed793a4a7fd16294e0_prof);

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
