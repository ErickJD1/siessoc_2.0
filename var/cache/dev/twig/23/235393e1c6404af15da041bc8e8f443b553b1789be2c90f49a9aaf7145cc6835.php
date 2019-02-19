<?php

/* ITInputMaskBundle:Form:inputMaskFields.html.twig */
class __TwigTemplate_8cc45793ad545874ef2c106dde458e8a8ed75cd21d32c86bff1d23dc35f4150b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'script_inputMask' => array($this, 'block_script_inputMask'),
            'it_date_mask_widget' => array($this, 'block_it_date_mask_widget'),
            'it_text_mask_widget' => array($this, 'block_it_text_mask_widget'),
            'it_alias_mask_widget' => array($this, 'block_it_alias_mask_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b2157161137fd42b4fd63f2c49507eabf5080d08220595ae4e92884ad9ed62a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b2157161137fd42b4fd63f2c49507eabf5080d08220595ae4e92884ad9ed62a->enter($__internal_4b2157161137fd42b4fd63f2c49507eabf5080d08220595ae4e92884ad9ed62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ITInputMaskBundle:Form:inputMaskFields.html.twig"));

        // line 1
        $this->displayBlock('script_inputMask', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('it_date_mask_widget', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('it_text_mask_widget', $context, $blocks);
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('it_alias_mask_widget', $context, $blocks);
        
        $__internal_4b2157161137fd42b4fd63f2c49507eabf5080d08220595ae4e92884ad9ed62a->leave($__internal_4b2157161137fd42b4fd63f2c49507eabf5080d08220595ae4e92884ad9ed62a_prof);

    }

    // line 1
    public function block_script_inputMask($context, array $blocks = array())
    {
        $__internal_62dbe5c2d66aaa09ef14faaabe7277fe5b8053b338d8b0b3873301c933188860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62dbe5c2d66aaa09ef14faaabe7277fe5b8053b338d8b0b3873301c933188860->enter($__internal_62dbe5c2d66aaa09ef14faaabe7277fe5b8053b338d8b0b3873301c933188860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_inputMask"));

        // line 2
        echo "    <script type=\"text/javascript\">

        if(typeof jQuery == 'undefined'){
            document.write('<'+'script src=\"https://code.jquery.com/jquery-1.12.4.min.js\" integrity=\"sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=\" crossorigin=\"anonymous\"><'+'/script>');
        }

        document.addEventListener(\"DOMContentLoaded\", function(event) {
            var scriptSrc = \"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/itinputmask/vendor/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"), "html", null, true);
        echo "\";

            if (\$('script[src=\"'+scriptSrc+'\"]').length <= 0) {
                \$.getScript(scriptSrc, function() {
                    Inputmask().mask(document.querySelectorAll(\"input\"));
                });
            }
        });
    </script>
";
        
        $__internal_62dbe5c2d66aaa09ef14faaabe7277fe5b8053b338d8b0b3873301c933188860->leave($__internal_62dbe5c2d66aaa09ef14faaabe7277fe5b8053b338d8b0b3873301c933188860_prof);

    }

    // line 20
    public function block_it_date_mask_widget($context, array $blocks = array())
    {
        $__internal_e4139a4e5ceb142fba5fc435453cf8c079356c42fd842f1a54eb4afcdaf8eacb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4139a4e5ceb142fba5fc435453cf8c079356c42fd842f1a54eb4afcdaf8eacb->enter($__internal_e4139a4e5ceb142fba5fc435453cf8c079356c42fd842f1a54eb4afcdaf8eacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "it_date_mask_widget"));

        // line 21
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 22
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo " data-inputmask=\"'alias': '";
        echo twig_escape_filter($this->env, (isset($context["mask_alias"]) ? $context["mask_alias"] : $this->getContext($context, "mask_alias")), "html", null, true);
        echo "'\"/>

    ";
        // line 24
        $this->displayBlock("script_inputMask", $context, $blocks);
        echo "
";
        
        $__internal_e4139a4e5ceb142fba5fc435453cf8c079356c42fd842f1a54eb4afcdaf8eacb->leave($__internal_e4139a4e5ceb142fba5fc435453cf8c079356c42fd842f1a54eb4afcdaf8eacb_prof);

    }

    // line 27
    public function block_it_text_mask_widget($context, array $blocks = array())
    {
        $__internal_6a84480829af27ec254671eaf809850b102f23e84de1146d8ac3bdef8fab3d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a84480829af27ec254671eaf809850b102f23e84de1146d8ac3bdef8fab3d27->enter($__internal_6a84480829af27ec254671eaf809850b102f23e84de1146d8ac3bdef8fab3d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "it_text_mask_widget"));

        // line 28
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 29
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo " data-inputmask=\"'mask': '";
        echo twig_escape_filter($this->env, (isset($context["mask"]) ? $context["mask"] : $this->getContext($context, "mask")), "html", null, true);
        echo "'\"/>

    ";
        // line 31
        $this->displayBlock("script_inputMask", $context, $blocks);
        echo "
";
        
        $__internal_6a84480829af27ec254671eaf809850b102f23e84de1146d8ac3bdef8fab3d27->leave($__internal_6a84480829af27ec254671eaf809850b102f23e84de1146d8ac3bdef8fab3d27_prof);

    }

    // line 34
    public function block_it_alias_mask_widget($context, array $blocks = array())
    {
        $__internal_ebda372642136111ea224fa33dd690169f547589b50d3f59c4393b0ccc119a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebda372642136111ea224fa33dd690169f547589b50d3f59c4393b0ccc119a33->enter($__internal_ebda372642136111ea224fa33dd690169f547589b50d3f59c4393b0ccc119a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "it_alias_mask_widget"));

        // line 35
        echo "    <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo " data-inputmask=\"'alias': '";
        echo twig_escape_filter($this->env, (isset($context["mask_alias"]) ? $context["mask_alias"] : $this->getContext($context, "mask_alias")), "html", null, true);
        echo "'\"/>

    ";
        // line 37
        $this->displayBlock("script_inputMask", $context, $blocks);
        echo "
";
        
        $__internal_ebda372642136111ea224fa33dd690169f547589b50d3f59c4393b0ccc119a33->leave($__internal_ebda372642136111ea224fa33dd690169f547589b50d3f59c4393b0ccc119a33_prof);

    }

    public function getTemplateName()
    {
        return "ITInputMaskBundle:Form:inputMaskFields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  166 => 37,  152 => 35,  146 => 34,  137 => 31,  121 => 29,  119 => 28,  113 => 27,  104 => 24,  88 => 22,  86 => 21,  80 => 20,  63 => 9,  54 => 2,  48 => 1,  41 => 34,  38 => 33,  36 => 27,  33 => 26,  31 => 20,  28 => 19,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block script_inputMask %}
    <script type=\"text/javascript\">

        if(typeof jQuery == 'undefined'){
            document.write('<'+'script src=\"https://code.jquery.com/jquery-1.12.4.min.js\" integrity=\"sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=\" crossorigin=\"anonymous\"><'+'/script>');
        }

        document.addEventListener(\"DOMContentLoaded\", function(event) {
            var scriptSrc = \"{{ asset('bundles/itinputmask/vendor/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js') }}\";

            if (\$('script[src=\"'+scriptSrc+'\"]').length <= 0) {
                \$.getScript(scriptSrc, function() {
                    Inputmask().mask(document.querySelectorAll(\"input\"));
                });
            }
        });
    </script>
{% endblock script_inputMask %}

{% block it_date_mask_widget %}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %} data-inputmask=\"'alias': '{{ mask_alias }}'\"/>

    {{ block('script_inputMask') }}
{% endblock it_date_mask_widget %}

{% block it_text_mask_widget %}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %} data-inputmask=\"'mask': '{{ mask }}'\"/>

    {{ block('script_inputMask') }}
{% endblock it_text_mask_widget %}

{% block it_alias_mask_widget %}
    <input type=\"text\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %} data-inputmask=\"'alias': '{{ mask_alias }}'\"/>

    {{ block('script_inputMask') }}
{% endblock it_alias_mask_widget %}", "ITInputMaskBundle:Form:inputMaskFields.html.twig", "/home/ubuntu/workspace/vendor/it/input-mask-bundle/IT/InputMaskBundle/Resources/views/Form/inputMaskFields.html.twig");
    }
}
