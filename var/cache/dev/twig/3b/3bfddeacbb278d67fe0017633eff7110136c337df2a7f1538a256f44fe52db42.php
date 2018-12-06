<?php

/* :cuenta:Cuentaindex.html.twig */
class __TwigTemplate_2521289b266295530a704da776536fae8def961674eea2e41eb82edb4ef7959d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":cuenta:Cuentaindex.html.twig", 1);
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
        $__internal_86e0a58a31b66edf636128a163fb06b7110b8d505e8bc795ecd9cd0aab0cab65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e0a58a31b66edf636128a163fb06b7110b8d505e8bc795ecd9cd0aab0cab65->enter($__internal_86e0a58a31b66edf636128a163fb06b7110b8d505e8bc795ecd9cd0aab0cab65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cuenta:Cuentaindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86e0a58a31b66edf636128a163fb06b7110b8d505e8bc795ecd9cd0aab0cab65->leave($__internal_86e0a58a31b66edf636128a163fb06b7110b8d505e8bc795ecd9cd0aab0cab65_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_7c192312c1072649f93b709d076baf787aa8bb3fcca6faf03e5efbce03c3aead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c192312c1072649f93b709d076baf787aa8bb3fcca6faf03e5efbce03c3aead->enter($__internal_7c192312c1072649f93b709d076baf787aa8bb3fcca6faf03e5efbce03c3aead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Cuentas | ";
        
        $__internal_7c192312c1072649f93b709d076baf787aa8bb3fcca6faf03e5efbce03c3aead->leave($__internal_7c192312c1072649f93b709d076baf787aa8bb3fcca6faf03e5efbce03c3aead_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_ce902734180e52979d0c0da827021d89ab3fa1737a6a47ff1cf21ea8b43f057e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce902734180e52979d0c0da827021d89ab3fa1737a6a47ff1cf21ea8b43f057e->enter($__internal_ce902734180e52979d0c0da827021d89ab3fa1737a6a47ff1cf21ea8b43f057e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Catalogo De Cuentas ";
        
        $__internal_ce902734180e52979d0c0da827021d89ab3fa1737a6a47ff1cf21ea8b43f057e->leave($__internal_ce902734180e52979d0c0da827021d89ab3fa1737a6a47ff1cf21ea8b43f057e_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ce4865cdeeaf48bffd5c84fa7b7bd041ce4c9f228f079b62eba6576d95b93116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4865cdeeaf48bffd5c84fa7b7bd041ce4c9f228f079b62eba6576d95b93116->enter($__internal_ce4865cdeeaf48bffd5c84fa7b7bd041ce4c9f228f079b62eba6576d95b93116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "cuenta/new\" class=\"btn btn-primary btn-sm\">+ Registrar Cuenta</a>
</div>
<br> <br>

      <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:90%\" id=\"tabelMahasiswa\">
              <thead class=\"thead-light\">
            <tr>
                <th>ID</th>
                <th>Numero</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Banco</th>
                <th>Fecha Apertura</th>
                <th>Saldo Inicial</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cuentas"]) ? $context["cuentas"] : $this->getContext($context, "cuentas")));
        foreach ($context['_seq'] as $context["_key"] => $context["cuentum"]) {
            // line 33
            echo "            <tr>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idcuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "numcuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "nomcuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "descripcioncuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idbanco", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            if ($this->getAttribute($context["cuentum"], "fechaapertura", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cuentum"], "fechaapertura", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "saldocuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            if ($this->getAttribute($context["cuentum"], "estadocuenta", array())) {
                echo "Activo";
            } else {
                echo "Inactivo";
            }
            echo "</td>
                <td>
                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerCuenta";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idcuenta", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                          ";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Cuenta:show", array("id" => $this->getAttribute($context["cuentum"], "idcuenta", array()))));
            echo "
                  </div>

                  <div style=\"float:left;\" >
                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
            echo "cuenta/edit/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idcuenta", array()), "html", null, true);
            echo "\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></a>
                  </div>
                </td>

            </tr>

          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuentum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </tbody>
    </table>
    </div>
    </div>
";
        
        $__internal_ce4865cdeeaf48bffd5c84fa7b7bd041ce4c9f228f079b62eba6576d95b93116->leave($__internal_ce4865cdeeaf48bffd5c84fa7b7bd041ce4c9f228f079b62eba6576d95b93116_prof);

    }

    public function getTemplateName()
    {
        return ":cuenta:Cuentaindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 56,  153 => 48,  146 => 44,  142 => 43,  133 => 41,  129 => 40,  123 => 39,  119 => 38,  115 => 37,  111 => 36,  107 => 35,  103 => 34,  100 => 33,  96 => 32,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Cuentas | {% endblock %}
{% block page_subtitle %}Catalogo De Cuentas {% endblock %}

{% block page_content %}

<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <a href=\"{{ absolute_url(asset('')) }}cuenta/new\" class=\"btn btn-primary btn-sm\">+ Registrar Cuenta</a>
</div>
<br> <br>

      <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:90%\" id=\"tabelMahasiswa\">
              <thead class=\"thead-light\">
            <tr>
                <th>ID</th>
                <th>Numero</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Banco</th>
                <th>Fecha Apertura</th>
                <th>Saldo Inicial</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

        {% for cuentum in cuentas %}
            <tr>
                <td>{{ cuentum.idcuenta }}</td>
                <td>{{ cuentum.numcuenta }}</td>
                <td>{{ cuentum.nomcuenta }}</td>
                <td>{{ cuentum.descripcioncuenta }}</td>
                <td>{{ cuentum.idbanco }}</td>
                <td>{% if cuentum.fechaapertura %}{{ cuentum.fechaapertura|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ cuentum.saldocuenta }}</td>
                <td>{% if cuentum.estadocuenta %}Activo{% else %}Inactivo{% endif %}</td>
                <td>
                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerCuenta{{ cuentum.idcuenta }}\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                          {{ render(controller('AppBundle:Cuenta:show', { 'id' : cuentum.idcuenta } )) }}
                  </div>

                  <div style=\"float:left;\" >
                    <a href=\"{{ absolute_url(asset('')) }}cuenta/edit/{{ cuentum.idcuenta }}\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></a>
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
", ":cuenta:Cuentaindex.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/cuenta/Cuentaindex.html.twig");
    }
}
