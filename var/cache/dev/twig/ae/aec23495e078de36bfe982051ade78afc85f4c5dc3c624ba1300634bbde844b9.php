<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_d4d12c3d9a6ca56c7f7eb81a4655c1c3c5ff2f8659459e58e6ad11ed58aa7541 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_c28b095f4b095e90b356844239a780fc202ebc701c74095f04a7a5541b5cf5bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28b095f4b095e90b356844239a780fc202ebc701c74095f04a7a5541b5cf5bd->enter($__internal_c28b095f4b095e90b356844239a780fc202ebc701c74095f04a7a5541b5cf5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c28b095f4b095e90b356844239a780fc202ebc701c74095f04a7a5541b5cf5bd->leave($__internal_c28b095f4b095e90b356844239a780fc202ebc701c74095f04a7a5541b5cf5bd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_58c55b0d8fa6c83e2a8c06ee2673130f1b40340c467e60f20fd2ee5073699393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c55b0d8fa6c83e2a8c06ee2673130f1b40340c467e60f20fd2ee5073699393->enter($__internal_58c55b0d8fa6c83e2a8c06ee2673130f1b40340c467e60f20fd2ee5073699393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_58c55b0d8fa6c83e2a8c06ee2673130f1b40340c467e60f20fd2ee5073699393->leave($__internal_58c55b0d8fa6c83e2a8c06ee2673130f1b40340c467e60f20fd2ee5073699393_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
