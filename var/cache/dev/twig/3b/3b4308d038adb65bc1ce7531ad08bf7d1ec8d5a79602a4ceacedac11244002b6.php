<?php

/* SalexUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_c4553b23b27c1e01b434e05b5dcdef00510c9653e71edfe774f124ee191549dd extends Twig_Template
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
        $__internal_720b12bc5c9172a14623623ab3e657b4e2dd41017aa42b168e5252274afd1ee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_720b12bc5c9172a14623623ab3e657b4e2dd41017aa42b168e5252274afd1ee7->enter($__internal_720b12bc5c9172a14623623ab3e657b4e2dd41017aa42b168e5252274afd1ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalexUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
\t<div class=\"box-body\">
    \t";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    </div>
    <!-- End of box-body-->
    <div class=\"box-footer\">
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo " profile\" name=\"submit\" class=\"btn btn-success\" />
        <a class=\"btn btn-danger pull-right\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Cancel</a>
    </div>
    <!-- End of box-footer-->
";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_720b12bc5c9172a14623623ab3e657b4e2dd41017aa42b168e5252274afd1ee7->leave($__internal_720b12bc5c9172a14623623ab3e657b4e2dd41017aa42b168e5252274afd1ee7_prof);

    }

    public function getTemplateName()
    {
        return "SalexUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  41 => 10,  37 => 9,  30 => 5,  25 => 3,  22 => 2,);
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

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit'} }) }}
\t<div class=\"box-body\">
    \t{{ form_widget(form) }}
    </div>
    <!-- End of box-body-->
    <div class=\"box-footer\">
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }} profile\" name=\"submit\" class=\"btn btn-success\" />
        <a class=\"btn btn-danger pull-right\" href=\"{{ path('fos_user_profile_show') }}\">Cancel</a>
    </div>
    <!-- End of box-footer-->
{{ form_end(form) }}
", "SalexUserBundle:Profile:edit_content.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle/Resources/views/Profile/edit_content.html.twig");
    }
}
