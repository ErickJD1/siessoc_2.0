<?php

/* proyectoserviciosocial/show.html.twig */
class __TwigTemplate_54c078c5def620706777d612ae345a9dc331e4866ad3824ee057bece54c25993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "proyectoserviciosocial/show.html.twig", 1);
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
        $__internal_d1b25df1a7f3fc676589a00afae03d730dfd90e5ed8b26180cbfe06dff45674e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b25df1a7f3fc676589a00afae03d730dfd90e5ed8b26180cbfe06dff45674e->enter($__internal_d1b25df1a7f3fc676589a00afae03d730dfd90e5ed8b26180cbfe06dff45674e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "proyectoserviciosocial/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1b25df1a7f3fc676589a00afae03d730dfd90e5ed8b26180cbfe06dff45674e->leave($__internal_d1b25df1a7f3fc676589a00afae03d730dfd90e5ed8b26180cbfe06dff45674e_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_aee54826710e76ef86c2e29c58e1850cace49dae1fb996cb2392f801839800cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee54826710e76ef86c2e29c58e1850cace49dae1fb996cb2392f801839800cc->enter($__internal_aee54826710e76ef86c2e29c58e1850cace49dae1fb996cb2392f801839800cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Proyeto Servicio Social| ";
        
        $__internal_aee54826710e76ef86c2e29c58e1850cace49dae1fb996cb2392f801839800cc->leave($__internal_aee54826710e76ef86c2e29c58e1850cace49dae1fb996cb2392f801839800cc_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_4fd0758f6cf4443133fc117aef29bdc81aa1e0c5ee00873061ebf7998e0c1c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd0758f6cf4443133fc117aef29bdc81aa1e0c5ee00873061ebf7998e0c1c91->enter($__internal_4fd0758f6cf4443133fc117aef29bdc81aa1e0c5ee00873061ebf7998e0c1c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Show ";
        
        $__internal_4fd0758f6cf4443133fc117aef29bdc81aa1e0c5ee00873061ebf7998e0c1c91->leave($__internal_4fd0758f6cf4443133fc117aef29bdc81aa1e0c5ee00873061ebf7998e0c1c91_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4a3d218efe533c28f1b50d253c6ad319ca37a20f668c0b00d91ba20cda96acb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a3d218efe533c28f1b50d253c6ad319ca37a20f668c0b00d91ba20cda96acb6->enter($__internal_4a3d218efe533c28f1b50d253c6ad319ca37a20f668c0b00d91ba20cda96acb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "    <h1>Proyectoserviciosocial</h1>

    <table>
        <tbody>
            <tr>
                <th>Nombreproyecto</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyectoserviciosocial"]) ? $context["proyectoserviciosocial"] : $this->getContext($context, "proyectoserviciosocial")), "nombreproyecto", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcionproyecto</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyectoserviciosocial"]) ? $context["proyectoserviciosocial"] : $this->getContext($context, "proyectoserviciosocial")), "descripcionproyecto", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Encargadoproyecto</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyectoserviciosocial"]) ? $context["proyectoserviciosocial"] : $this->getContext($context, "proyectoserviciosocial")), "encargadoproyecto", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lugarproyecto</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyectoserviciosocial"]) ? $context["proyectoserviciosocial"] : $this->getContext($context, "proyectoserviciosocial")), "lugarproyecto", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estadoproyecto</th>
                <td>";
        // line 29
        if ($this->getAttribute((isset($context["proyectoserviciosocial"]) ? $context["proyectoserviciosocial"] : $this->getContext($context, "proyectoserviciosocial")), "estadoproyecto", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Idproyectservisocial</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyectoserviciosocial"]) ? $context["proyectoserviciosocial"] : $this->getContext($context, "proyectoserviciosocial")), "idproyectservisocial", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proyectoserviciosocial_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proyectoserviciosocial_edit", array("id" => $this->getAttribute((isset($context["proyectoserviciosocial"]) ? $context["proyectoserviciosocial"] : $this->getContext($context, "proyectoserviciosocial")), "idproyectservisocial", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 46
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 48
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4a3d218efe533c28f1b50d253c6ad319ca37a20f668c0b00d91ba20cda96acb6->leave($__internal_4a3d218efe533c28f1b50d253c6ad319ca37a20f668c0b00d91ba20cda96acb6_prof);

    }

    public function getTemplateName()
    {
        return "proyectoserviciosocial/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 48,  135 => 46,  129 => 43,  123 => 40,  113 => 33,  102 => 29,  95 => 25,  88 => 21,  81 => 17,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Proyeto Servicio Social| {% endblock %}
{% block page_subtitle %}Show {% endblock %}

{% block page_content %}
    <h1>Proyectoserviciosocial</h1>

    <table>
        <tbody>
            <tr>
                <th>Nombreproyecto</th>
                <td>{{ proyectoserviciosocial.nombreproyecto }}</td>
            </tr>
            <tr>
                <th>Descripcionproyecto</th>
                <td>{{ proyectoserviciosocial.descripcionproyecto }}</td>
            </tr>
            <tr>
                <th>Encargadoproyecto</th>
                <td>{{ proyectoserviciosocial.encargadoproyecto }}</td>
            </tr>
            <tr>
                <th>Lugarproyecto</th>
                <td>{{ proyectoserviciosocial.lugarproyecto }}</td>
            </tr>
            <tr>
                <th>Estadoproyecto</th>
                <td>{% if proyectoserviciosocial.estadoproyecto %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Idproyectservisocial</th>
                <td>{{ proyectoserviciosocial.idproyectservisocial }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('proyectoserviciosocial_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('proyectoserviciosocial_edit', { 'id': proyectoserviciosocial.idproyectservisocial }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "proyectoserviciosocial/show.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\proyectoserviciosocial\\show.html.twig");
    }
}
