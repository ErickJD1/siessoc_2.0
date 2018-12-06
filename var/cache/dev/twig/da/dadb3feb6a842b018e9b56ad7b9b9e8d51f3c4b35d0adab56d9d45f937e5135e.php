<?php

/* :proyectoserviciosocial:show.html.twig */
class __TwigTemplate_c0893aaee9d6a5aefe872311ec2068f40bd8e1f537a734f7e4de7bd391671a4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":proyectoserviciosocial:show.html.twig", 1);
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
        $__internal_0013cf56fece3e6902c0fd2c931521cfba464528e2f029e246f92c7a61fd5a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0013cf56fece3e6902c0fd2c931521cfba464528e2f029e246f92c7a61fd5a0a->enter($__internal_0013cf56fece3e6902c0fd2c931521cfba464528e2f029e246f92c7a61fd5a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proyectoserviciosocial:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0013cf56fece3e6902c0fd2c931521cfba464528e2f029e246f92c7a61fd5a0a->leave($__internal_0013cf56fece3e6902c0fd2c931521cfba464528e2f029e246f92c7a61fd5a0a_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_e45b400c1dbe0e1cfd40a85fd224410ee1f21e155f73fa8080b556efaa54d53a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e45b400c1dbe0e1cfd40a85fd224410ee1f21e155f73fa8080b556efaa54d53a->enter($__internal_e45b400c1dbe0e1cfd40a85fd224410ee1f21e155f73fa8080b556efaa54d53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Proyeto Servicio Social| ";
        
        $__internal_e45b400c1dbe0e1cfd40a85fd224410ee1f21e155f73fa8080b556efaa54d53a->leave($__internal_e45b400c1dbe0e1cfd40a85fd224410ee1f21e155f73fa8080b556efaa54d53a_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_ac545b26eea770243935a41d44e25000f0fbb3628a98e1e3fed665183b4623b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac545b26eea770243935a41d44e25000f0fbb3628a98e1e3fed665183b4623b4->enter($__internal_ac545b26eea770243935a41d44e25000f0fbb3628a98e1e3fed665183b4623b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Show ";
        
        $__internal_ac545b26eea770243935a41d44e25000f0fbb3628a98e1e3fed665183b4623b4->leave($__internal_ac545b26eea770243935a41d44e25000f0fbb3628a98e1e3fed665183b4623b4_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_58a5da3812de77d93f05594549582e83728bc71b295a9c24ef8f74436dd10316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58a5da3812de77d93f05594549582e83728bc71b295a9c24ef8f74436dd10316->enter($__internal_58a5da3812de77d93f05594549582e83728bc71b295a9c24ef8f74436dd10316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_58a5da3812de77d93f05594549582e83728bc71b295a9c24ef8f74436dd10316->leave($__internal_58a5da3812de77d93f05594549582e83728bc71b295a9c24ef8f74436dd10316_prof);

    }

    public function getTemplateName()
    {
        return ":proyectoserviciosocial:show.html.twig";
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
", ":proyectoserviciosocial:show.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/proyectoserviciosocial/show.html.twig");
    }
}
