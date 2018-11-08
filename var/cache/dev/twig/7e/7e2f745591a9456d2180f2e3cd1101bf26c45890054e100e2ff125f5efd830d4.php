<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_a901bf195cb28cfe84e892cbe2d31812824725619716338f43062860e14848a0 extends Twig_Template
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
        $__internal_231e9f686296b5aaff9f633ff49b9d0f16fbc4021bf612a7992956d6ac9434b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_231e9f686296b5aaff9f633ff49b9d0f16fbc4021bf612a7992956d6ac9434b3->enter($__internal_231e9f686296b5aaff9f633ff49b9d0f16fbc4021bf612a7992956d6ac9434b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

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
        
        $__internal_231e9f686296b5aaff9f633ff49b9d0f16fbc4021bf612a7992956d6ac9434b3->leave($__internal_231e9f686296b5aaff9f633ff49b9d0f16fbc4021bf612a7992956d6ac9434b3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
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
", "FOSUserBundle:Profile:edit_content.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle/Resources/views/Profile/edit_content.html.twig");
    }
}
