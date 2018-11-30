<?php

/* :user:edit.html.twig */
class __TwigTemplate_86b842d1e0df93867a938cf17d5b41638d39653c74b02d906d2340d7103c7f91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":user:edit.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88580257e398d52197bb1ff0d738c79f8f14b393a6526cd4c96a19ed4a4c3d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88580257e398d52197bb1ff0d738c79f8f14b393a6526cd4c96a19ed4a4c3d6e->enter($__internal_88580257e398d52197bb1ff0d738c79f8f14b393a6526cd4c96a19ed4a4c3d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88580257e398d52197bb1ff0d738c79f8f14b393a6526cd4c96a19ed4a4c3d6e->leave($__internal_88580257e398d52197bb1ff0d738c79f8f14b393a6526cd4c96a19ed4a4c3d6e_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_c52e575419e95b2c52002f5f6666d812be73a194bb6031a7e360b497456cbce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52e575419e95b2c52002f5f6666d812be73a194bb6031a7e360b497456cbce3->enter($__internal_c52e575419e95b2c52002f5f6666d812be73a194bb6031a7e360b497456cbce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Usuarios | ";
        
        $__internal_c52e575419e95b2c52002f5f6666d812be73a194bb6031a7e360b497456cbce3->leave($__internal_c52e575419e95b2c52002f5f6666d812be73a194bb6031a7e360b497456cbce3_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_d65fc16d28089eced20ff3487e754fbcfb21a8764ba70904f288a1d91ccf6375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d65fc16d28089eced20ff3487e754fbcfb21a8764ba70904f288a1d91ccf6375->enter($__internal_d65fc16d28089eced20ff3487e754fbcfb21a8764ba70904f288a1d91ccf6375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Gestion de usuarios ";
        
        $__internal_d65fc16d28089eced20ff3487e754fbcfb21a8764ba70904f288a1d91ccf6375->leave($__internal_d65fc16d28089eced20ff3487e754fbcfb21a8764ba70904f288a1d91ccf6375_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_a5360bcab824cd9d8cd9796ea81a56f0f3623191d4937e1e04dd70b688413168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5360bcab824cd9d8cd9796ea81a56f0f3623191d4937e1e04dd70b688413168->enter($__internal_a5360bcab824cd9d8cd9796ea81a56f0f3623191d4937e1e04dd70b688413168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Banco.png"), "html", null, true);
        echo "\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Editar Usuario</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
                    ";
        // line 23
        echo "
                    ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
                    <div class=\"box-body\">
                        ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                    </div>
                    <!-- End of box-body-->
                    <div class=\"box-footer\">
                        <input type=\"submit\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo " profile\" name=\"submit\" class=\"btn btn-success\" />
                        <a class=\"btn btn-danger pull-right\" href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Cancel</a>
                    </div>
                    <!-- End of box-footer-->
                    ";
        // line 34
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
 <br>
                <br>
            </div>
            </br>
        </div>
        <br>
        <br>
    </div>
 
 ";
        
        $__internal_a5360bcab824cd9d8cd9796ea81a56f0f3623191d4937e1e04dd70b688413168->leave($__internal_a5360bcab824cd9d8cd9796ea81a56f0f3623191d4937e1e04dd70b688413168_prof);

    }

    public function getTemplateName()
    {
        return ":user:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 34,  105 => 31,  101 => 30,  94 => 26,  89 => 24,  86 => 23,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout/base-layout.html.twig\" %}

{% block page_title %} Usuarios | {% endblock %}
{% block page_subtitle %}Gestion de usuarios {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Editar Usuario</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
                    {% trans_default_domain 'FOSUserBundle' %}

                    {{ form_start(edit_form, { 'action': path('user_edit',{'id':user.id}), 'attr': { 'class': 'fos_user_profile_edit'} }) }}
                    <div class=\"box-body\">
                        {{ form_widget(edit_form) }}
                    </div>
                    <!-- End of box-body-->
                    <div class=\"box-footer\">
                        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }} profile\" name=\"submit\" class=\"btn btn-success\" />
                        <a class=\"btn btn-danger pull-right\" href=\"{{ path('user_index') }}\">Cancel</a>
                    </div>
                    <!-- End of box-footer-->
                    {{ form_end(edit_form) }}
 <br>
                <br>
            </div>
            </br>
        </div>
        <br>
        <br>
    </div>
 
 {% endblock %}", ":user:edit.html.twig", "/home/ubuntu/workspace/app/Resources/views/user/edit.html.twig");
    }
}
