<?php

/* :tipocuenta:TipoCuentaindex.html.twig */
class __TwigTemplate_cac25e842222f22d18f646d9c356edbe5d9cf95816c0ba14995a73bf041ea704 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":tipocuenta:TipoCuentaindex.html.twig", 1);
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
        $__internal_8728a58dc980441ce394175cd8f3483f29b88b4f70d62ed49aa9eca747cc4254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8728a58dc980441ce394175cd8f3483f29b88b4f70d62ed49aa9eca747cc4254->enter($__internal_8728a58dc980441ce394175cd8f3483f29b88b4f70d62ed49aa9eca747cc4254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipocuenta:TipoCuentaindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8728a58dc980441ce394175cd8f3483f29b88b4f70d62ed49aa9eca747cc4254->leave($__internal_8728a58dc980441ce394175cd8f3483f29b88b4f70d62ed49aa9eca747cc4254_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_2f33735c49be29efb8ce295e37f9501356947b233ed63346a6514ddbbfc0b918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f33735c49be29efb8ce295e37f9501356947b233ed63346a6514ddbbfc0b918->enter($__internal_2f33735c49be29efb8ce295e37f9501356947b233ed63346a6514ddbbfc0b918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Tipo Cuenta | ";
        
        $__internal_2f33735c49be29efb8ce295e37f9501356947b233ed63346a6514ddbbfc0b918->leave($__internal_2f33735c49be29efb8ce295e37f9501356947b233ed63346a6514ddbbfc0b918_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_7f0fa13db50412a2c9694f4489dd886008401022de5953cca68d6cfd263b31cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0fa13db50412a2c9694f4489dd886008401022de5953cca68d6cfd263b31cd->enter($__internal_7f0fa13db50412a2c9694f4489dd886008401022de5953cca68d6cfd263b31cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Catalogo Tipo Cuenta ";
        
        $__internal_7f0fa13db50412a2c9694f4489dd886008401022de5953cca68d6cfd263b31cd->leave($__internal_7f0fa13db50412a2c9694f4489dd886008401022de5953cca68d6cfd263b31cd_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_11ed68f3a4480b449fb5b09e7b27695dff27b73388866d18ebe36a735397ac4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ed68f3a4480b449fb5b09e7b27695dff27b73388866d18ebe36a735397ac4a->enter($__internal_11ed68f3a4480b449fb5b09e7b27695dff27b73388866d18ebe36a735397ac4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "tipocuenta/new\" class=\"btn btn-primary btn-sm\">+ Agregar Cuenta</a>
</div>

<br> </br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
        <thead class=\"thead-light\">
            <tr>
                <th>ID</th>
                <th>Tipo Cuenta</th>
                <th>Descripcion</th>
                <th>Estado Cuenta</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipocuentas"]) ? $context["tipocuentas"] : $this->getContext($context, "tipocuentas")));
        foreach ($context['_seq'] as $context["_key"] => $context["tipocuentum"]) {
            // line 30
            echo "            <tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()), "html", null, true);
            echo "\">
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "Nombrecuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["tipocuentum"], "estadotipocuenta", array())) {
                echo "Activa";
            } else {
                echo "Inactiva";
            }
            echo "</td>
                <td>
                    
                <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#miventana";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                        ";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipocuenta:show", array("id" => $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()))));
            echo "
                </div>
                
                <div style=\"float:left;\" >
                <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
            echo "tipocuenta/edit/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()), "html", null, true);
            echo "\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></a>
                </div>

                </td>
            </tr>

          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipocuentum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tbody>
    </table>
    </div>
    </div>
";
        
        $__internal_11ed68f3a4480b449fb5b09e7b27695dff27b73388866d18ebe36a735397ac4a->leave($__internal_11ed68f3a4480b449fb5b09e7b27695dff27b73388866d18ebe36a735397ac4a_prof);

    }

    public function getTemplateName()
    {
        return ":tipocuenta:TipoCuentaindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 50,  135 => 42,  128 => 38,  124 => 37,  114 => 34,  110 => 33,  106 => 32,  102 => 31,  97 => 30,  93 => 29,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Tipo Cuenta | {% endblock %}
{% block page_subtitle %}Catalogo Tipo Cuenta {% endblock %}

{% block page_content %}

<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <a href=\"{{ absolute_url(asset('')) }}tipocuenta/new\" class=\"btn btn-primary btn-sm\">+ Agregar Cuenta</a>
</div>

<br> </br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
        <thead class=\"thead-light\">
            <tr>
                <th>ID</th>
                <th>Tipo Cuenta</th>
                <th>Descripcion</th>
                <th>Estado Cuenta</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

        {% for tipocuentum in tipocuentas %}
            <tr data-id=\"{{ tipocuentum.idtipocuenta }}\">
                <td>{{ tipocuentum.idtipocuenta }}</td>
                <td>{{ tipocuentum.Nombrecuenta }}</td>
                <td>{{ tipocuentum.descripcion }}</td>
                <td>{% if tipocuentum.estadotipocuenta %}Activa{% else %}Inactiva{% endif %}</td>
                <td>
                    
                <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#miventana{{ tipocuentum.idtipocuenta }}\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                        {{ render(controller('AppBundle:Tipocuenta:show', { 'id' : tipocuentum.idtipocuenta } )) }}
                </div>
                
                <div style=\"float:left;\" >
                <a href=\"{{ absolute_url(asset('')) }}tipocuenta/edit/{{ tipocuentum.idtipocuenta }}\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></a>
                </div>

                </td>
            </tr>

          </div>
        {% endfor %}
        </tbody>
    </table>
    </div>
    </div>
{% endblock %}
", ":tipocuenta:TipoCuentaindex.html.twig", "/home/ubuntu/workspace/app/Resources/views/tipocuenta/TipoCuentaindex.html.twig");
    }
}
