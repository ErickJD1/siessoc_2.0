<?php

/* FOSUserBundle:Registration:register_content_patrocina.html.twig */
class __TwigTemplate_cc5c9232248ada11cf8cd4bd2b2733c5fe83e60084d3b5463c5f43cd2a814ee9 extends Twig_Template
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
        $__internal_556d2f6ac93ba4a8020a31fa35c5f5fcb25ea1f6dd3150a3412de89309b1f127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_556d2f6ac93ba4a8020a31fa35c5f5fcb25ea1f6dd3150a3412de89309b1f127->enter($__internal_556d2f6ac93ba4a8020a31fa35c5f5fcb25ea1f6dd3150a3412de89309b1f127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content_patrocina.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_registerPatrocina")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div align=\"right\">
        <input  type=\"submit\" class=\"btn btn-success\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_556d2f6ac93ba4a8020a31fa35c5f5fcb25ea1f6dd3150a3412de89309b1f127->leave($__internal_556d2f6ac93ba4a8020a31fa35c5f5fcb25ea1f6dd3150a3412de89309b1f127_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content_patrocina.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_registerPatrocina')}) }}
    {{ form_widget(form) }}
    <div align=\"right\">
        <input  type=\"submit\" class=\"btn btn-success\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Registration:register_content_patrocina.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register_content_patrocina.html.twig");
    }
}
