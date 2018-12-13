<?php

/* :default:dashboard.html.twig */
class __TwigTemplate_946ca761dc8ab9652e8582f6789c64021d4c1e86c1ddfe213d1a256b396fe979 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":default:dashboard.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        echo "Dashboard";
    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"box box-primary\" align=\"center\" style=\"\" >
        <p style=\"margin-bottom:3%\">
        <h2 style=\"color: rgba(44,163,199,1);font-family:Palatino Header\"><STRONG>Bienvenido ";
        // line 6
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "getName", array(), "method"), "html", null, true);
        }
        echo "</STRONG></h2>
        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo.jpg"), "html", null, true);
        echo "\" width=\"25%\"></img>
        <h3 style=\"color: rgba(44,163,199,1);font-family:Palatino Header\">Sistema Informático Para La Gestión De Becas Universitarias Del Proyecto Educational Scholarships For Students Of Chiltiupan</h3>
        </p>
        <br></br>
        <br></br>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":default:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  42 => 6,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:dashboard.html.twig", "/home/ubuntu/workspace/app/Resources/views/default/dashboard.html.twig");
    }
}
