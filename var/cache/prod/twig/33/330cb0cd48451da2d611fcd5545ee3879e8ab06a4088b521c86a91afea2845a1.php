<?php

/* :tipotransaccion:Tipotransaccionindex.html.twig */
class __TwigTemplate_899c6e3a03f1474ad90c9c1f8a94050aaaf6686758215bb90685e054f4ffce2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":tipotransaccion:Tipotransaccionindex.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        echo " Cuentas | ";
    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo "Catalogo De Cuenta ";
    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#CrearTransaccion\"> + Registrar Transaccion</button>
    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipotransaccion:new"));
        echo "
</div>
<br> </br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Tipo De Transaccion</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipotransaccions"]) ? $context["tipotransaccions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tipotransaccion"]) {
            // line 29
            echo "            <tr>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipotransaccion"], "idtipotransaccion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipotransaccion"], "nombretipotransac", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            if ($this->getAttribute($context["tipotransaccion"], "estadotipotransac", array())) {
                echo "Alta";
            } else {
                echo "Baja";
            }
            echo "</td>
                <td>
                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerTransac";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipotransaccion"], "idtipotransaccion", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                          ";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipotransaccion:show", array("id" => $this->getAttribute($context["tipotransaccion"], "idtipotransaccion", array()))));
            echo "
                  </div>

                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent;  border: none;\" data-toggle=\"modal\" data-target=\"#EditTransaccion";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipotransaccion"], "idtipotransaccion", array()), "html", null, true);
            echo "\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></button>
                          ";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipotransaccion:edit", array("id" => $this->getAttribute($context["tipotransaccion"], "idtipotransaccion", array()))));
            echo "
                  </div>
                </td>
            </tr>

          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipotransaccion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":tipotransaccion:Tipotransaccionindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 46,  109 => 39,  105 => 38,  99 => 35,  95 => 34,  86 => 32,  82 => 31,  78 => 30,  75 => 29,  71 => 28,  53 => 13,  45 => 7,  42 => 6,  36 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":tipotransaccion:Tipotransaccionindex.html.twig", "/home/ubuntu/workspace/app/Resources/views/tipotransaccion/Tipotransaccionindex.html.twig");
    }
}
