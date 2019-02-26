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
        $__internal_b71c3572a2f85ce25c770a7ea128690ff141d24ce73c2b7ebbeba61852a6230e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b71c3572a2f85ce25c770a7ea128690ff141d24ce73c2b7ebbeba61852a6230e->enter($__internal_b71c3572a2f85ce25c770a7ea128690ff141d24ce73c2b7ebbeba61852a6230e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ITInputMaskBundle:Form:inputMaskFields.html.twig"));

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
        
        $__internal_b71c3572a2f85ce25c770a7ea128690ff141d24ce73c2b7ebbeba61852a6230e->leave($__internal_b71c3572a2f85ce25c770a7ea128690ff141d24ce73c2b7ebbeba61852a6230e_prof);

    }

    // line 1
    public function block_script_inputMask($context, array $blocks = array())
    {
        $__internal_dce7969e390eaad5ec4cc47fa00a276694c2608f51b58c63d2628d2b2287e94f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce7969e390eaad5ec4cc47fa00a276694c2608f51b58c63d2628d2b2287e94f->enter($__internal_dce7969e390eaad5ec4cc47fa00a276694c2608f51b58c63d2628d2b2287e94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script_inputMask"));

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
        
        $__internal_dce7969e390eaad5ec4cc47fa00a276694c2608f51b58c63d2628d2b2287e94f->leave($__internal_dce7969e390eaad5ec4cc47fa00a276694c2608f51b58c63d2628d2b2287e94f_prof);

    }

    // line 20
    public function block_it_date_mask_widget($context, array $blocks = array())
    {
        $__internal_f9f7095f028aeabb9bbaffc80113099d73b5f306bade40f1f20b6a59b078d7dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f7095f028aeabb9bbaffc80113099d73b5f306bade40f1f20b6a59b078d7dc->enter($__internal_f9f7095f028aeabb9bbaffc80113099d73b5f306bade40f1f20b6a59b078d7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "it_date_mask_widget"));

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
        
        $__internal_f9f7095f028aeabb9bbaffc80113099d73b5f306bade40f1f20b6a59b078d7dc->leave($__internal_f9f7095f028aeabb9bbaffc80113099d73b5f306bade40f1f20b6a59b078d7dc_prof);

    }

    // line 27
    public function block_it_text_mask_widget($context, array $blocks = array())
    {
        $__internal_5dd3873351209721fdf4585b5b28afe9dee13fe2eaaf9997c96aaabefec43623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd3873351209721fdf4585b5b28afe9dee13fe2eaaf9997c96aaabefec43623->enter($__internal_5dd3873351209721fdf4585b5b28afe9dee13fe2eaaf9997c96aaabefec43623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "it_text_mask_widget"));

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
        
        $__internal_5dd3873351209721fdf4585b5b28afe9dee13fe2eaaf9997c96aaabefec43623->leave($__internal_5dd3873351209721fdf4585b5b28afe9dee13fe2eaaf9997c96aaabefec43623_prof);

    }

    // line 34
    public function block_it_alias_mask_widget($context, array $blocks = array())
    {
        $__internal_064f3da2701e0ae7cdabf4ef48a5d90f884ff605d7b87401fc512b637387d3e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064f3da2701e0ae7cdabf4ef48a5d90f884ff605d7b87401fc512b637387d3e1->enter($__internal_064f3da2701e0ae7cdabf4ef48a5d90f884ff605d7b87401fc512b637387d3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "it_alias_mask_widget"));

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
        
        $__internal_064f3da2701e0ae7cdabf4ef48a5d90f884ff605d7b87401fc512b637387d3e1->leave($__internal_064f3da2701e0ae7cdabf4ef48a5d90f884ff605d7b87401fc512b637387d3e1_prof);

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
