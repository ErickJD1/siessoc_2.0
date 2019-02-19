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
        $__internal_fc19c1bf914f39b8841b98adabc9bcd0bae0bd08551b0a4180321ac00d2b9276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc19c1bf914f39b8841b98adabc9bcd0bae0bd08551b0a4180321ac00d2b9276->enter($__internal_fc19c1bf914f39b8841b98adabc9bcd0bae0bd08551b0a4180321ac00d2b9276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ITInputMaskBundle:Form:inputMaskFields.html.twig"));

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
        
        $__internal_fc19c1bf914f39b8841b98adabc9bcd0bae0bd08551b0a4180321ac00d2b9276->leave($__internal_fc19c1bf914f39b8841b98adabc9bcd0bae0bd08551b0a4180321ac00d2b9276_prof);

    }

    // line 1
    public function block_script_inputMask($context, array $blocks = array())
    {
        $__internal_46d85f632d8e30b9c75f5c8c6dff87110dc203d9175da8afe29480cbeb27407c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46d85f632d8e30b9c75f5c8c6dff87110dc203d9175da8afe29480cbeb27407c->enter($__internal_46d85f632d8e30b9c75f5c8c6dff87110dc203d9175da8afe29480cbeb27407c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_inputMask"));

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
        
        $__internal_46d85f632d8e30b9c75f5c8c6dff87110dc203d9175da8afe29480cbeb27407c->leave($__internal_46d85f632d8e30b9c75f5c8c6dff87110dc203d9175da8afe29480cbeb27407c_prof);

    }

    // line 20
    public function block_it_date_mask_widget($context, array $blocks = array())
    {
        $__internal_4898d64b57ef4b584c17643253ba0b3f384a2db484de78d3ed2483e5ce50c64a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4898d64b57ef4b584c17643253ba0b3f384a2db484de78d3ed2483e5ce50c64a->enter($__internal_4898d64b57ef4b584c17643253ba0b3f384a2db484de78d3ed2483e5ce50c64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "it_date_mask_widget"));

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
        
        $__internal_4898d64b57ef4b584c17643253ba0b3f384a2db484de78d3ed2483e5ce50c64a->leave($__internal_4898d64b57ef4b584c17643253ba0b3f384a2db484de78d3ed2483e5ce50c64a_prof);

    }

    // line 27
    public function block_it_text_mask_widget($context, array $blocks = array())
    {
        $__internal_89a2b67ac4d1a6f003497444b0a953b499cfd233d8924a39465412b20655a31c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a2b67ac4d1a6f003497444b0a953b499cfd233d8924a39465412b20655a31c->enter($__internal_89a2b67ac4d1a6f003497444b0a953b499cfd233d8924a39465412b20655a31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "it_text_mask_widget"));

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
        
        $__internal_89a2b67ac4d1a6f003497444b0a953b499cfd233d8924a39465412b20655a31c->leave($__internal_89a2b67ac4d1a6f003497444b0a953b499cfd233d8924a39465412b20655a31c_prof);

    }

    // line 34
    public function block_it_alias_mask_widget($context, array $blocks = array())
    {
        $__internal_ee089549d741ff6c2da5682117218f4d3103ff108246aac1b59b81d6a3321667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee089549d741ff6c2da5682117218f4d3103ff108246aac1b59b81d6a3321667->enter($__internal_ee089549d741ff6c2da5682117218f4d3103ff108246aac1b59b81d6a3321667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "it_alias_mask_widget"));

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
        
        $__internal_ee089549d741ff6c2da5682117218f4d3103ff108246aac1b59b81d6a3321667->leave($__internal_ee089549d741ff6c2da5682117218f4d3103ff108246aac1b59b81d6a3321667_prof);

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
