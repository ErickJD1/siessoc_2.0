<?php

/* :user:index.html.twig */
class __TwigTemplate_c45900f323d239c3fdd267051f2dcf62f86ac678afb205419073e01da7b5cc9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":user:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_cc750480b8f4e85f8c3a0b66f8d9131cc33463ae867026d3d01ea42fc15d6866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc750480b8f4e85f8c3a0b66f8d9131cc33463ae867026d3d01ea42fc15d6866->enter($__internal_cc750480b8f4e85f8c3a0b66f8d9131cc33463ae867026d3d01ea42fc15d6866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        // line 3
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", ":user:index.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc750480b8f4e85f8c3a0b66f8d9131cc33463ae867026d3d01ea42fc15d6866->leave($__internal_cc750480b8f4e85f8c3a0b66f8d9131cc33463ae867026d3d01ea42fc15d6866_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a8cf5ce4e6848ef2e3747e9c32d26bc89b2c692303142bd67daa2a3b0e8166c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a8cf5ce4e6848ef2e3747e9c32d26bc89b2c692303142bd67daa2a3b0e8166c->enter($__internal_5a8cf5ce4e6848ef2e3747e9c32d26bc89b2c692303142bd67daa2a3b0e8166c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 ";
        
        $__internal_5a8cf5ce4e6848ef2e3747e9c32d26bc89b2c692303142bd67daa2a3b0e8166c->leave($__internal_5a8cf5ce4e6848ef2e3747e9c32d26bc89b2c692303142bd67daa2a3b0e8166c_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_0788c09c61d3f19e38ac1774c40e6d62e96157b11e08cccd0dd77d7efdc5867a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0788c09c61d3f19e38ac1774c40e6d62e96157b11e08cccd0dd77d7efdc5867a->enter($__internal_0788c09c61d3f19e38ac1774c40e6d62e96157b11e08cccd0dd77d7efdc5867a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Usuarios | ";
        
        $__internal_0788c09c61d3f19e38ac1774c40e6d62e96157b11e08cccd0dd77d7efdc5867a->leave($__internal_0788c09c61d3f19e38ac1774c40e6d62e96157b11e08cccd0dd77d7efdc5867a_prof);

    }

    // line 8
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_64adb826878c36ac9ea39ef28ce100cd5a4f25d864a4eda59c18d535d481cccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64adb826878c36ac9ea39ef28ce100cd5a4f25d864a4eda59c18d535d481cccd->enter($__internal_64adb826878c36ac9ea39ef28ce100cd5a4f25d864a4eda59c18d535d481cccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Gestion de Usuarios ";
        
        $__internal_64adb826878c36ac9ea39ef28ce100cd5a4f25d864a4eda59c18d535d481cccd->leave($__internal_64adb826878c36ac9ea39ef28ce100cd5a4f25d864a4eda59c18d535d481cccd_prof);

    }

    // line 10
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_9ac55a85fe8fec25cd12d714f59812af01827ca8300da6faf4ee88c8c5e50106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac55a85fe8fec25cd12d714f59812af01827ca8300da6faf4ee88c8c5e50106->enter($__internal_9ac55a85fe8fec25cd12d714f59812af01827ca8300da6faf4ee88c8c5e50106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 11
        echo "
    <div class=\"box box-primary\">
   <div style=\"width:90%; margin-left:5%; margin-top: 2% \">
    
        <div align=\"left\">
            <button class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#create1\"> + Usuario</button>
         ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SalexUserBundle:User:new"));
        echo "
        </div>
        <br> </br>
        <table id=\"tabelMahasiswa\" style=\"width:100%;\"  align=\"center\" class=\"table table-bordered table-hover table-striped table-responsive\" id=\"tabelMahasiswa\">
            <thead>
                <tr role=\"row\">
                    
                    <th>Id</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Username</th>
                    <th>email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 34
            echo "                    <tr>
                        <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                       ";
            // line 42
            echo "                        <td align=\"center\">
                            <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#show";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                            ";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SalexUserBundle:User:show", array("id" => $this->getAttribute($context["user"], "id", array()))));
            echo "</div>
                            <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent;  border: none;\" data-toggle=\"modal\" data-target=\"#edit";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></button>
                            ";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SalexUserBundle:User:edit", array("id" => $this->getAttribute($context["user"], "id", array()))));
            echo "</div> 
                            
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </tbody>

        </table>

        </div>

    </div>                    
    


";
        
        $__internal_9ac55a85fe8fec25cd12d714f59812af01827ca8300da6faf4ee88c8c5e50106->leave($__internal_9ac55a85fe8fec25cd12d714f59812af01827ca8300da6faf4ee88c8c5e50106_prof);

    }

    public function getTemplateName()
    {
        return ":user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 51,  157 => 46,  153 => 45,  149 => 44,  145 => 43,  142 => 42,  138 => 39,  134 => 38,  130 => 37,  126 => 36,  120 => 35,  117 => 34,  113 => 33,  94 => 17,  86 => 11,  80 => 10,  68 => 8,  56 => 7,  46 => 5,  40 => 4,  33 => 1,  31 => 3,  11 => 1,);
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

{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}
{% block stylesheets %}
    {{ parent() }}
 {%endblock%}
{% block page_title %} Usuarios | {% endblock %}
{% block page_subtitle %}Gestion de Usuarios {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\">
   <div style=\"width:90%; margin-left:5%; margin-top: 2% \">
    
        <div align=\"left\">
            <button class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#create1\"> + Usuario</button>
         {{ render(controller('SalexUserBundle:User:new' )) }}
        </div>
        <br> </br>
        <table id=\"tabelMahasiswa\" style=\"width:100%;\"  align=\"center\" class=\"table table-bordered table-hover table-striped table-responsive\" id=\"tabelMahasiswa\">
            <thead>
                <tr role=\"row\">
                    
                    <th>Id</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Username</th>
                    <th>email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for user in pagination %}
                    <tr>
                        <td><a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                        <td>{{ user.firstName }}</td>
                        <td>{{ user.lastName }}</td>
                        <td>{{ user.username }}</td>
                        <td>{{ user.email }}</td>
                       {# <td>{% if user.createdAt %}{{ user.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                        <td>{% if user.updateAt %}{{ user.updateAt|date('Y-m-d H:i:s') }}{% endif %}</td>#}
                        <td align=\"center\">
                            <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#show{{ user.id }}\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                            {{ render(controller('SalexUserBundle:User:show',{ 'id':user.id })) }}</div>
                            <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent;  border: none;\" data-toggle=\"modal\" data-target=\"#edit{{ user.id }}\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></button>
                            {{ render(controller('SalexUserBundle:User:edit',{ 'id':user.id })) }}</div> 
                            
                        </td>
                    </tr>
                {% endfor %}
            </tbody>

        </table>

        </div>

    </div>                    
    


{% endblock %}
", ":user:index.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/user/index.html.twig");
    }
}
