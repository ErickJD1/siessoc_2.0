<?php

/* FOSUserBundle:Resetting:email.html.twig */
class __TwigTemplate_6725366c74a1a702755d138a4d6fc66904119f6c40899355da2fb32a774a091f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_html' => array($this, 'block_body_html'),
            'body_txt' => array($this, 'block_body_txt'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_html', $context, $blocks);
        // line 23
        $this->displayBlock('body_txt', $context, $blocks);
    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array())), "FOSUserBundle");
    }

    // line 8
    public function block_body_html($context, array $blocks = array())
    {
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : null)), "FOSUserBundle");
        echo "
<!DOCTYPE html>
 <html>
        <head>
        <title>Welcome to Symfony!</title>
        </head>
        <body>
    <h1 Style=\"color:red\">Hola Mundo</h1>
    </body>
</html>
";
        // line 21
        echo "
";
    }

    // line 23
    public function block_body_txt($context, array $blocks = array())
    {
        // line 24
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  64 => 24,  61 => 23,  56 => 21,  43 => 10,  40 => 8,  36 => 4,  33 => 2,  29 => 23,  27 => 8,  24 => 7,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Resetting:email.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.html.twig");
    }
}
