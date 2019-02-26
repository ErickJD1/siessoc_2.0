<?php

/* ITInputMaskBundle:Form:inputMaskFields.html.twig */
class __TwigTemplate_42b264accd338eb96937e90970f2830e7d1850a4de6f8c5571da8535a503a23c extends Twig_Template
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
    }

    // line 1
    public function block_script_inputMask($context, array $blocks = array())
    {
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
    }

    // line 20
    public function block_it_date_mask_widget($context, array $blocks = array())
    {
        // line 21
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 22
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
        }
        echo " data-inputmask=\"'alias': '";
        echo twig_escape_filter($this->env, (isset($context["mask_alias"]) ? $context["mask_alias"] : null), "html", null, true);
        echo "'\"/>

    ";
        // line 24
        $this->displayBlock("script_inputMask", $context, $blocks);
        echo "
";
    }

    // line 27
    public function block_it_text_mask_widget($context, array $blocks = array())
    {
        // line 28
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 29
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
        }
        echo " data-inputmask=\"'mask': '";
        echo twig_escape_filter($this->env, (isset($context["mask"]) ? $context["mask"] : null), "html", null, true);
        echo "'\"/>

    ";
        // line 31
        $this->displayBlock("script_inputMask", $context, $blocks);
        echo "
";
    }

    // line 34
    public function block_it_alias_mask_widget($context, array $blocks = array())
    {
        // line 35
        echo "    <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
        }
        echo " data-inputmask=\"'alias': '";
        echo twig_escape_filter($this->env, (isset($context["mask_alias"]) ? $context["mask_alias"] : null), "html", null, true);
        echo "'\"/>

    ";
        // line 37
        $this->displayBlock("script_inputMask", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ITInputMaskBundle:Form:inputMaskFields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  139 => 37,  125 => 35,  122 => 34,  116 => 31,  100 => 29,  98 => 28,  95 => 27,  89 => 24,  73 => 22,  71 => 21,  68 => 20,  54 => 9,  45 => 2,  42 => 1,  38 => 34,  35 => 33,  33 => 27,  30 => 26,  28 => 20,  25 => 19,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ITInputMaskBundle:Form:inputMaskFields.html.twig", "/home/ubuntu/workspace/vendor/it/input-mask-bundle/IT/InputMaskBundle/Resources/views/Form/inputMaskFields.html.twig");
    }
}
