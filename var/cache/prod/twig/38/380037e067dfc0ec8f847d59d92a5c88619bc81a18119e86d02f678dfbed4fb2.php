<?php

/* :serviciosocial:index.html.twig */
class __TwigTemplate_69ef6c616c8e5ceaae6094723c79c5a329acf2e6ec965c8a5bfbfe9f13ee98e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":serviciosocial:index.html.twig", 1);
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
        echo " Servicio Social | ";
    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo "Listado Servicio Social";
    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#crearSS\"> +Servicio Social</button>
     ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Serviciosocial:new"));
        echo "
</div>
<br> </br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
       
        <thead>
            <tr>
                <th>Idexpbecario</th>
                <th>Fechaaprovacionservicio</th>
                <th>Fechainicioservicio</th>
                <th>Fechafinservicio</th>
                <th>Estadoservicio</th>
                <th>Idserviciosocial</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["serviciosocials"]) ? $context["serviciosocials"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["serviciosocial"]) {
            // line 31
            echo "            <tr>
                <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serviciosocial_show", array("id" => $this->getAttribute($context["serviciosocial"], "idserviciosocial", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["serviciosocial"], "idexpbecario", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 33
            if ($this->getAttribute($context["serviciosocial"], "fechaaprovacionservicio", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["serviciosocial"], "fechaaprovacionservicio", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["serviciosocial"], "fechainicioservicio", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["serviciosocial"], "fechainicioservicio", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 35
            if ($this->getAttribute($context["serviciosocial"], "fechafinservicio", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["serviciosocial"], "fechafinservicio", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["serviciosocial"], "estadoservicio", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["serviciosocial"], "idproyectservisocial", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serviciosocial_show", array("id" => $this->getAttribute($context["serviciosocial"], "idserviciosocial", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serviciosocial_edit", array("id" => $this->getAttribute($context["serviciosocial"], "idserviciosocial", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serviciosocial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tbody>
    </table>
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":serviciosocial:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 50,  121 => 44,  115 => 41,  108 => 37,  104 => 36,  98 => 35,  92 => 34,  86 => 33,  80 => 32,  77 => 31,  73 => 30,  52 => 12,  45 => 7,  42 => 6,  36 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":serviciosocial:index.html.twig", "/home/ubuntu/workspace/app/Resources/views/serviciosocial/index.html.twig");
    }
}
