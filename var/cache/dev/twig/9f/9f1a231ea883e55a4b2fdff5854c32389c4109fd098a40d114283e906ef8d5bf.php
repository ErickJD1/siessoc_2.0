<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_ebfa0a19aad2d8c9a5dbc0cc0a7b3d075ceae49a359fcf5aa9bbde9ab7509dc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b6a5456681496ab0379dc082fed7da2aa4ac7393e0f5d1b1e155ca14113d167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b6a5456681496ab0379dc082fed7da2aa4ac7393e0f5d1b1e155ca14113d167->enter($__internal_9b6a5456681496ab0379dc082fed7da2aa4ac7393e0f5d1b1e155ca14113d167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_9b6a5456681496ab0379dc082fed7da2aa4ac7393e0f5d1b1e155ca14113d167->leave($__internal_9b6a5456681496ab0379dc082fed7da2aa4ac7393e0f5d1b1e155ca14113d167_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_6e77fd486b41aed954035ad73c25f0f339545d1d4f6e129675de0a598b55ae29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e77fd486b41aed954035ad73c25f0f339545d1d4f6e129675de0a598b55ae29->enter($__internal_6e77fd486b41aed954035ad73c25f0f339545d1d4f6e129675de0a598b55ae29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6e77fd486b41aed954035ad73c25f0f339545d1d4f6e129675de0a598b55ae29->leave($__internal_6e77fd486b41aed954035ad73c25f0f339545d1d4f6e129675de0a598b55ae29_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_4bae2e436c98dfb98113ae3524fdd947a0b75f24293cb69d33d332a31fd7f216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bae2e436c98dfb98113ae3524fdd947a0b75f24293cb69d33d332a31fd7f216->enter($__internal_4bae2e436c98dfb98113ae3524fdd947a0b75f24293cb69d33d332a31fd7f216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        ob_start();
        // line 8
        echo "    <div class=\"vich-file\">
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 10
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 11
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 13
        echo "
        ";
        // line 14
        if ((array_key_exists("download_uri", $context) && (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")))) {
            // line 15
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 17
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4bae2e436c98dfb98113ae3524fdd947a0b75f24293cb69d33d332a31fd7f216->leave($__internal_4bae2e436c98dfb98113ae3524fdd947a0b75f24293cb69d33d332a31fd7f216_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_61c3af8ecc31bc79e8ed3a9f2082bd682effb01840fc9a6078421c1ba9d2e243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c3af8ecc31bc79e8ed3a9f2082bd682effb01840fc9a6078421c1ba9d2e243->enter($__internal_61c3af8ecc31bc79e8ed3a9f2082bd682effb01840fc9a6078421c1ba9d2e243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_61c3af8ecc31bc79e8ed3a9f2082bd682effb01840fc9a6078421c1ba9d2e243->leave($__internal_61c3af8ecc31bc79e8ed3a9f2082bd682effb01840fc9a6078421c1ba9d2e243_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_9341463ec829bb7afd025d108ad29ae3adb146036af5a599a48c9fe5614fdf4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9341463ec829bb7afd025d108ad29ae3adb146036af5a599a48c9fe5614fdf4a->enter($__internal_9341463ec829bb7afd025d108ad29ae3adb146036af5a599a48c9fe5614fdf4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        ob_start();
        // line 28
        echo "    <div class=\"vich-image\">
        ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 30
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 31
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        if ((array_key_exists("download_uri", $context) && (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")))) {
            // line 35
            echo "         <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\" alt=\"\" /></a>
        ";
        }
        // line 37
        echo "        ";
        if ((((isset($context["show_download_link"]) ? $context["show_download_link"] : $this->getContext($context, "show_download_link")) && array_key_exists("download_uri", $context)) && (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")))) {
            // line 38
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 40
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9341463ec829bb7afd025d108ad29ae3adb146036af5a599a48c9fe5614fdf4a->leave($__internal_9341463ec829bb7afd025d108ad29ae3adb146036af5a599a48c9fe5614fdf4a_prof);

    }

    public function getTemplateName()
    {
        return "VichUploaderBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  170 => 40,  162 => 38,  159 => 37,  151 => 35,  149 => 34,  146 => 33,  140 => 31,  138 => 30,  134 => 29,  131 => 28,  129 => 27,  123 => 26,  116 => 23,  114 => 22,  108 => 21,  99 => 17,  91 => 15,  89 => 14,  86 => 13,  80 => 11,  78 => 10,  74 => 9,  71 => 8,  69 => 7,  63 => 6,  56 => 3,  54 => 2,  48 => 1,  41 => 26,  38 => 25,  36 => 21,  33 => 20,  31 => 6,  28 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"vich-file\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
         <a href=\"{{ download_uri }}\"><img src=\"{{ download_uri }}\" alt=\"\" /></a>
        {% endif %}
        {% if show_download_link and download_uri is defined and download_uri%}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}
", "VichUploaderBundle:Form:fields.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\vich\\uploader-bundle/Resources/views/Form/fields.html.twig");
    }
}
