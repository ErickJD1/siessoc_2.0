<?php

/* :serviciosocial:edit.html.twig */
class __TwigTemplate_33a794ee2586711783d9dc2818a78e0c12722a371791a83217cb755bd00c20c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":serviciosocial:edit.html.twig", 1);
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
        $__internal_0be6f5008fa1417bc15172f3b58d360b4ddac5554e30a6fd789c3c3f68e9dfeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be6f5008fa1417bc15172f3b58d360b4ddac5554e30a6fd789c3c3f68e9dfeb->enter($__internal_0be6f5008fa1417bc15172f3b58d360b4ddac5554e30a6fd789c3c3f68e9dfeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":serviciosocial:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0be6f5008fa1417bc15172f3b58d360b4ddac5554e30a6fd789c3c3f68e9dfeb->leave($__internal_0be6f5008fa1417bc15172f3b58d360b4ddac5554e30a6fd789c3c3f68e9dfeb_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_8cad72a15240bbf5a9fa75dbb73966fb805a621050b8e6fe8742b915d06fbeae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cad72a15240bbf5a9fa75dbb73966fb805a621050b8e6fe8742b915d06fbeae->enter($__internal_8cad72a15240bbf5a9fa75dbb73966fb805a621050b8e6fe8742b915d06fbeae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Servicio Social| ";
        
        $__internal_8cad72a15240bbf5a9fa75dbb73966fb805a621050b8e6fe8742b915d06fbeae->leave($__internal_8cad72a15240bbf5a9fa75dbb73966fb805a621050b8e6fe8742b915d06fbeae_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_1de6b3147d046f6eb5214aa62f276979499c5cf5809687af82eb2e62318a511a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de6b3147d046f6eb5214aa62f276979499c5cf5809687af82eb2e62318a511a->enter($__internal_1de6b3147d046f6eb5214aa62f276979499c5cf5809687af82eb2e62318a511a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Edit";
        
        $__internal_1de6b3147d046f6eb5214aa62f276979499c5cf5809687af82eb2e62318a511a->leave($__internal_1de6b3147d046f6eb5214aa62f276979499c5cf5809687af82eb2e62318a511a_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_15805f5c29de74b852e5bf8ebd31d127fa82a70e06f84114875deb4795d8e406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15805f5c29de74b852e5bf8ebd31d127fa82a70e06f84114875deb4795d8e406->enter($__internal_15805f5c29de74b852e5bf8ebd31d127fa82a70e06f84114875deb4795d8e406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "    <h1>Serviciosocial edit</h1>

    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serviciosocial_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_15805f5c29de74b852e5bf8ebd31d127fa82a70e06f84114875deb4795d8e406->leave($__internal_15805f5c29de74b852e5bf8ebd31d127fa82a70e06f84114875deb4795d8e406_prof);

    }

    public function getTemplateName()
    {
        return ":serviciosocial:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 21,  92 => 19,  86 => 16,  79 => 12,  74 => 10,  70 => 9,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Servicio Social| {% endblock %}
{% block page_subtitle %}Edit{% endblock %}

{% block page_content %}
    <h1>Serviciosocial edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('serviciosocial_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":serviciosocial:edit.html.twig", "/home/ubuntu/workspace/app/Resources/views/serviciosocial/edit.html.twig");
    }
}
