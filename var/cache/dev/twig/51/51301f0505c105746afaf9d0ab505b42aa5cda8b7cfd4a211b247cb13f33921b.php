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
        $__internal_6fbdc5d92c84b0482e7a956b330e664cfc827c5b42f279473b3d712245a67244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fbdc5d92c84b0482e7a956b330e664cfc827c5b42f279473b3d712245a67244->enter($__internal_6fbdc5d92c84b0482e7a956b330e664cfc827c5b42f279473b3d712245a67244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        // line 3
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", ":user:index.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fbdc5d92c84b0482e7a956b330e664cfc827c5b42f279473b3d712245a67244->leave($__internal_6fbdc5d92c84b0482e7a956b330e664cfc827c5b42f279473b3d712245a67244_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c34fa64569d3d29fd6a10e85766e2178519af9f0adf0b4902a2b3f4d930bfeb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34fa64569d3d29fd6a10e85766e2178519af9f0adf0b4902a2b3f4d930bfeb5->enter($__internal_c34fa64569d3d29fd6a10e85766e2178519af9f0adf0b4902a2b3f4d930bfeb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 ";
        
        $__internal_c34fa64569d3d29fd6a10e85766e2178519af9f0adf0b4902a2b3f4d930bfeb5->leave($__internal_c34fa64569d3d29fd6a10e85766e2178519af9f0adf0b4902a2b3f4d930bfeb5_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_10945cfb9499ec59730117660685ad0e083ce5f9364cf806eab00cb3899b1aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10945cfb9499ec59730117660685ad0e083ce5f9364cf806eab00cb3899b1aac->enter($__internal_10945cfb9499ec59730117660685ad0e083ce5f9364cf806eab00cb3899b1aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Usuarios | ";
        
        $__internal_10945cfb9499ec59730117660685ad0e083ce5f9364cf806eab00cb3899b1aac->leave($__internal_10945cfb9499ec59730117660685ad0e083ce5f9364cf806eab00cb3899b1aac_prof);

    }

    // line 8
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_4e534785ff5b902820c5539eb1738bc1bc7a08724e7894f0ac2f16dd4b5d85aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e534785ff5b902820c5539eb1738bc1bc7a08724e7894f0ac2f16dd4b5d85aa->enter($__internal_4e534785ff5b902820c5539eb1738bc1bc7a08724e7894f0ac2f16dd4b5d85aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Gestion de Usuarios ";
        
        $__internal_4e534785ff5b902820c5539eb1738bc1bc7a08724e7894f0ac2f16dd4b5d85aa->leave($__internal_4e534785ff5b902820c5539eb1738bc1bc7a08724e7894f0ac2f16dd4b5d85aa_prof);

    }

    // line 10
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_63c23a442b1583cce31b13135374566d58a75d3044bf2994448a0ffadaeaba1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c23a442b1583cce31b13135374566d58a75d3044bf2994448a0ffadaeaba1c->enter($__internal_63c23a442b1583cce31b13135374566d58a75d3044bf2994448a0ffadaeaba1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_63c23a442b1583cce31b13135374566d58a75d3044bf2994448a0ffadaeaba1c->leave($__internal_63c23a442b1583cce31b13135374566d58a75d3044bf2994448a0ffadaeaba1c_prof);

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
