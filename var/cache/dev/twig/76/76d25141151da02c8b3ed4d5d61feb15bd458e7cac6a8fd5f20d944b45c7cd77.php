<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_20f29e7c41e408ed154ab1eca7aeebab0bd67040ef73f39388b57d58c7ce072b extends Twig_Template
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
        $__internal_0dd28edc41d3281551d886f59ef5adfdd1c8d2b7a829059387cdf88742f918f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dd28edc41d3281551d886f59ef5adfdd1c8d2b7a829059387cdf88742f918f7->enter($__internal_0dd28edc41d3281551d886f59ef5adfdd1c8d2b7a829059387cdf88742f918f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
<div class=\"row\">
    <div class=\"col col-md-7\">
        <div class=\"panel panel-info\" style=\"width: 95%; margin-left: 2.5%; margin-top: 5%;margin-right: 5%;\">
            <div class=\"panel-heading\"><strong>Indicaciones</strong></div>
            <div class=\"panel-body\">
                <br> 
                <p>   Si te registras en el sistema SIESSOC, podras completar la solicitud para aplicar a una beca universitaria, siguiendo los siguientes pasos:</p>
                <br>
                <p>1. Completa el formulario de la derecha y registrate en el sistema.</p>
                <br>
                <p>2. Cuando se cree la convocatoria para el año correspondiente, el sistema te habilitará el formulario de solicitud de la beca. Donde podras ingresar todos los datos requeridos para aplicar.</p>
                <br>
                <p>3. Recibiras un correo por parte de los administradores del proyecto ESSOC, indicandote los pasos a seguir una vez hayan aprobado tu solicitud.</p>
                <br>
            </div>
        </div>
    </div>

    <div class=\"col col-md-5\" align=\"left\">
        <div class=\"col col-md-12\" align=\"left\">
            <label for=\"form_ncuenta\">Correo<span style=\"font-size: 25;color: red\" >*</span></label>
            ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
            ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
        </div>
        <br>
        <div class=\"col col-md-12\" align=\"left\">
            <label for=\"form_ncuenta\">Nombre de Usuario<span style=\"font-size: 25;color: red\" >*</span></label>
            ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
            ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
        </div>
        <br>
        <div class=\"col col-md-12\" align=\"left\">
            <label for=\"form_ncuenta\">Nombres<span style=\"font-size: 25;color: red\" >*</span></label>
            ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'widget');
        echo "
            ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'errors');
        echo "
        </div>
        <br>
        <div class=\"col col-md-12\" align=\"left\">
            <label for=\"form_ncuenta\">Apellidos<span style=\"font-size: 25;color: red\" >*</span></label>
            ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'widget');
        echo "
            ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'errors');
        echo "
        </div>
        <br>
       ";
        // line 51
        echo "        
            <div align=\"right\">
        <input type=\"submit\" class=\"btn btn-success\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
    </div>

</div>

";
        // line 59
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_0dd28edc41d3281551d886f59ef5adfdd1c8d2b7a829059387cdf88742f918f7->leave($__internal_0dd28edc41d3281551d886f59ef5adfdd1c8d2b7a829059387cdf88742f918f7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 59,  100 => 53,  96 => 51,  90 => 44,  86 => 43,  78 => 38,  74 => 37,  66 => 32,  62 => 31,  54 => 26,  50 => 25,  25 => 3,  22 => 2,);
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

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
<div class=\"row\">
    <div class=\"col col-md-7\">
        <div class=\"panel panel-info\" style=\"width: 95%; margin-left: 2.5%; margin-top: 5%;margin-right: 5%;\">
            <div class=\"panel-heading\"><strong>Indicaciones</strong></div>
            <div class=\"panel-body\">
                <br> 
                <p>   Si te registras en el sistema SIESSOC, podras completar la solicitud para aplicar a una beca universitaria, siguiendo los siguientes pasos:</p>
                <br>
                <p>1. Completa el formulario de la derecha y registrate en el sistema.</p>
                <br>
                <p>2. Cuando se cree la convocatoria para el año correspondiente, el sistema te habilitará el formulario de solicitud de la beca. Donde podras ingresar todos los datos requeridos para aplicar.</p>
                <br>
                <p>3. Recibiras un correo por parte de los administradores del proyecto ESSOC, indicandote los pasos a seguir una vez hayan aprobado tu solicitud.</p>
                <br>
            </div>
        </div>
    </div>

    <div class=\"col col-md-5\" align=\"left\">
        <div class=\"col col-md-12\" align=\"left\">
            <label for=\"form_ncuenta\">Correo<span style=\"font-size: 25;color: red\" >*</span></label>
            {{ form_widget(form.email) }}
            {{ form_errors(form.email) }}
        </div>
        <br>
        <div class=\"col col-md-12\" align=\"left\">
            <label for=\"form_ncuenta\">Nombre de Usuario<span style=\"font-size: 25;color: red\" >*</span></label>
            {{ form_widget(form.username) }}
            {{ form_errors(form.username) }}
        </div>
        <br>
        <div class=\"col col-md-12\" align=\"left\">
            <label for=\"form_ncuenta\">Nombres<span style=\"font-size: 25;color: red\" >*</span></label>
            {{ form_widget(form.firstName) }}
            {{ form_errors(form.firstName) }}
        </div>
        <br>
        <div class=\"col col-md-12\" align=\"left\">
            <label for=\"form_ncuenta\">Apellidos<span style=\"font-size: 25;color: red\" >*</span></label>
            {{ form_widget(form.lastName) }}
            {{ form_errors(form.lastName) }}
        </div>
        <br>
       {# <div class=\"col col-md-12\" align=\"left\">
            {{ form_widget(form.plainPassword) }}
            {{ form_errors(form.plainPassword) }}
        </div>#}
        
            <div align=\"right\">
        <input type=\"submit\" class=\"btn btn-success\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
    </div>

</div>

{{ form_end(form) }}
", "FOSUserBundle:Registration:register_content.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register_content.html.twig");
    }
}
