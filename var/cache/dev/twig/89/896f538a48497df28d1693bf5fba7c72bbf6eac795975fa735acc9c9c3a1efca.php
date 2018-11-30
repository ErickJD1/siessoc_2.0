<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_c1b588e5e388da8d8e52a066fd71be5e9ea9e57811e25be3a458601bf4741294 extends Twig_Template
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
        $__internal_ad81f4bce2267daf7d0ba67d82c1766506f9359bafeb85e84aeb9aa667884fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad81f4bce2267daf7d0ba67d82c1766506f9359bafeb85e84aeb9aa667884fb5->enter($__internal_ad81f4bce2267daf7d0ba67d82c1766506f9359bafeb85e84aeb9aa667884fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_ad81f4bce2267daf7d0ba67d82c1766506f9359bafeb85e84aeb9aa667884fb5->leave($__internal_ad81f4bce2267daf7d0ba67d82c1766506f9359bafeb85e84aeb9aa667884fb5_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/home/ubuntu/workspace/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
