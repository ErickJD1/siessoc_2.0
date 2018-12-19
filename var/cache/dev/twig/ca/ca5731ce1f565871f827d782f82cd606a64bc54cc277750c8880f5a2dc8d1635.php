<?php

/* solicitudbecario/Solicitudbecarionew.html.twig */
class __TwigTemplate_c8f56c59f600c5da0904c39c8e95976d69b374d8ad41c988a229820d8f561b7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "solicitudbecario/Solicitudbecarionew.html.twig", 1);
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
        $__internal_7be3af8244a75feeefee1222479b3e1254492667bbbd234b6f6d3bbe248acd7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be3af8244a75feeefee1222479b3e1254492667bbbd234b6f6d3bbe248acd7a->enter($__internal_7be3af8244a75feeefee1222479b3e1254492667bbbd234b6f6d3bbe248acd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "solicitudbecario/Solicitudbecarionew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7be3af8244a75feeefee1222479b3e1254492667bbbd234b6f6d3bbe248acd7a->leave($__internal_7be3af8244a75feeefee1222479b3e1254492667bbbd234b6f6d3bbe248acd7a_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_797215a1c82ae7f59bbf66837f3240266e4d78a0daeecd3188016ba7861f9c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_797215a1c82ae7f59bbf66837f3240266e4d78a0daeecd3188016ba7861f9c20->enter($__internal_797215a1c82ae7f59bbf66837f3240266e4d78a0daeecd3188016ba7861f9c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
nav > .nav.nav-tabs{

  border: none;
    color:#fff;
    background:grey;
    border-radius:0;

}
nav > div a.nav-item.nav-link,
nav > div a.nav-item.nav-link.active
{
  border: none;
    padding: 18px 25px;
    color:#fff;
    background:gray;
    border-radius:0;
}

nav > div a.nav-item.nav-link.active:after
 {
  content: \"\";
  position: relative;
  bottom: -60px;
  left: -10%;
  border: 15px solid transparent;
  border-top-color: gainsboro;
}
.tab-content{
  background: #fdfdfd;
    line-height: 25px;
    border: 1px solid #ddd;
border-top: 5px solid gainsboro;
border-bottom: 5px solid gainsboro;
    padding:30px 25px;
}

nav > div a.nav-item.nav-link:hover,
nav > div a.nav-item.nav-link:focus
{
  border: none;
    background: gainsboro;
    color:#fff;
    border-radius:0;
    transition:background 0.20s linear;
}
        
    </style>
";
        
        $__internal_797215a1c82ae7f59bbf66837f3240266e4d78a0daeecd3188016ba7861f9c20->leave($__internal_797215a1c82ae7f59bbf66837f3240266e4d78a0daeecd3188016ba7861f9c20_prof);

    }

    // line 55
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_bd2cc180b6886a8c93b4576d6091c2c407c6771172668c1fec72de0218f78b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2cc180b6886a8c93b4576d6091c2c407c6771172668c1fec72de0218f78b46->enter($__internal_bd2cc180b6886a8c93b4576d6091c2c407c6771172668c1fec72de0218f78b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Solicitud | ";
        
        $__internal_bd2cc180b6886a8c93b4576d6091c2c407c6771172668c1fec72de0218f78b46->leave($__internal_bd2cc180b6886a8c93b4576d6091c2c407c6771172668c1fec72de0218f78b46_prof);

    }

    // line 56
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_a5908a142011d7665697479004032b39a6f063bf8548871412fdea94511394ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5908a142011d7665697479004032b39a6f063bf8548871412fdea94511394ec->enter($__internal_a5908a142011d7665697479004032b39a6f063bf8548871412fdea94511394ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Registro De Solicitud ";
        
        $__internal_a5908a142011d7665697479004032b39a6f063bf8548871412fdea94511394ec->leave($__internal_a5908a142011d7665697479004032b39a6f063bf8548871412fdea94511394ec_prof);

    }

    // line 58
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_752a04a23326c8a53b5739ffa6573f4746510e82eeeb13ac3fd3a044ad324b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752a04a23326c8a53b5739ffa6573f4746510e82eeeb13ac3fd3a044ad324b08->enter($__internal_752a04a23326c8a53b5739ffa6573f4746510e82eeeb13ac3fd3a044ad324b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 59
        echo "
    <div class=\"box box-primary\" style=\"width: 100%;\">

        <div  style=\"width:90%; margin-top: 5%; margin-left: 5%; background-color:#F3F3F3; border-radius:5px \" class=\"panel panel-default\">

            <div class=\"col col-md-12\" align=\"center\" >
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Banco.png"), "html", null, true);
        echo "\"></img>
            </div>
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\">
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Solicitud</h2>
                <h4 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body; margin-top: -3px;\">Complete los campos requeridos:<span style=\"font-size: 25;color: red\" >*</span></h4>

            </div>
            <br>
            <div  class=\"container\"  style=\"width: 80%; margin-top: 3%; margin-bottom: 3%\">
             <hr>
                   
                ";
        // line 76
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
              <nav style=\"margin-top:15%\">
                       <div class=\"nav nav-tabs nav-fill\" id=\"nav-tab\" role=\"tablist\">
                            <a class=\"nav-item nav-link \" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#2005\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\" >Datos Generales</a>
                            <a class=\"nav-item nav-link\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#2008\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Datos Personales</a>
                            <a class=\"nav-item nav-link\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#2013\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Datos Academicos</a>
                            <a class=\"nav-item nav-link\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#2014\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Datos Familiares</a>
    
                        <div class=\"tab-content py-3 px-3 px-sm-0\" id=\"nav-tabContent\" style=\"color:black\">
                            <div style=\"width:90%; margin-left:5%\" class=\"tab-pane active\" id=\"2005\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
                                <h3>Datos Generales</h3>
                                <hr>
                                <div class=\"row\">
                  
                                    <div class=\"col col-md-2\" align=\"left\">
                                       <label for=\"form_edad\">Edad<span style=\"font-size: 25;color: red\" >*</span></label>
                                         ";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edad", array()), 'widget');
        echo "
                                         ";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edad", array()), 'errors');
        echo "   
                                   </div>
                                   
                                     <div class=\"col col-md-2\" align=\"left\">
                                       <label for=\"form_edad\">Sexo<span style=\"font-size: 25;color: red\" >*</span></label>
                                         ";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexo", array()), 'widget');
        echo "
                                         ";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexo", array()), 'errors');
        echo "   
                                     </div>
                                    
                                      <div class=\"col col-md-4\" align=\"left\" id='datetimepicker1'>
                                       <label for=\"form_anioinicio\">Fecha Ingreso<span style=\"font-size: 25;color: red\" >*</span></label>
                                         ";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aniosoliingresobecario", array()), 'widget');
        echo "
                                         ";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aniosoliingresobecario", array()), 'errors');
        echo "   
                                     </div>
                                     
                                      <div class=\"col col-md-4\" align=\"left\" id='datetimepicker2'>
                                       <label for=\"form_aniofin\">Fecha Previa de graduacion<span style=\"font-size: 25;color: red\" >*</span></label>
                                         ";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aniosolifinalizacionbecario", array()), 'widget');
        echo "
                                         ";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aniosolifinalizacionbecario", array()), 'errors');
        echo "   
                                     </div>
                               </div>
                                     <br>    
                               <div class=\"row\">  
                                   <div class=\"col col-md-12\" align=\"left\">
                                       <label for=\"form_religion\">Religion que pertenece<span style=\"font-size: 25;color: red\" >*</span></label>
                                         ";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "religion", array()), 'widget');
        echo "
                                         ";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "religion", array()), 'errors');
        echo "   
                                   </div>
                                   
                               </div>
                                  <br> 
                                <div class=\"row\">  
                                   <div class=\"col col-md-12\" align=\"left\">
                                       <label for=\"form_direccion\">Dirección<span style=\"font-size: 25;color: red\" >*</span></label>
                                         ";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccionsolibecario", array()), 'widget');
        echo "
                                         ";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccionsolibecario", array()), 'errors');
        echo "   
                                   </div> 
                               </div>
                            </div><!-- /.tab-pane -->

                            <div style=\"width:90%; margin-left:5%\" class=\"tab-pane \" id=\"2008\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
                               <h3>Datos Personales</h3>
                               <hr>
                               <div class=\"row\">  
                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_documento\">Numero de documento<span style=\"font-size: 25;color: red\" >*</span></label>
                                      ";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "docsoliidentidadbecario", array()), 'widget');
        echo "
                                      ";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "docsoliidentidadbecario", array()), 'errors');
        echo "   
                                </div> 
                                
                                <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_cdirecto\">Numero de contacto directo<span style=\"font-size: 25;color: red\" >*</span></label>
                                      ";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telsolipersonalbecario", array()), 'widget');
        echo "
                                      ";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telsolipersonalbecario", array()), 'errors');
        echo "   
                                </div> 
                              </div>
                                <br>
                              <div class=\"row\">  
                                <div class=\"col col-md-12\" align=\"left\">
                                    <label for=\"form_antecedentes\">Antecedentes</label>
                                      ";
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "antecedentes", array()), 'widget');
        echo "
                                      ";
        // line 154
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "antecedentes", array()), 'errors');
        echo "   
                                </div> 
                              </div>
                                <br>
                                <br>
                                
                               <div class=\"row\">
                                 <div class=\"col col-md-4\" align=\"center\">
                                    <label for=\"form_estadon\">Estado</label>
                                      ";
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadosolibecario", array()), 'widget');
        echo "
                                      ";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadosolibecario", array()), 'errors');
        echo "   
                                </div> 
                                
                                <div class=\"col col-md-4\" align=\"right\">
                                    <label for=\"form_trabajo\">Posee trabajo<span style=\"font-size: 25;color: red\" >*</span></label>
                                      ";
        // line 169
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trabajosolibecario", array()), 'widget');
        echo "
                                      ";
        // line 170
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trabajosolibecario", array()), 'errors');
        echo "   
                                </div> 
                            </div>
                            </div>

                            <div style=\"width:90%; margin-left:5%\" class=\"tab-pane\" id=\"2013\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
                                <h3>Datos Academicos</h3>
                               <hr>
                               <div class=\"row\">  
                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_tsolicitud\">Tipo de solicitud<span style=\"font-size: 25;color: red\" >*</span></label>
                                      ";
        // line 181
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tiposolicasabecario", array()), 'widget');
        echo "
                                      ";
        // line 182
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tiposolicasabecario", array()), 'errors');
        echo "   
                                </div> 
                                
                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_carrera\">Carrera<span style=\"font-size: 25;color: red\" >*</span></label>
                                      ";
        // line 187
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "carrerasoliestudiarbecario", array()), 'widget');
        echo "
                                      ";
        // line 188
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "carrerasoliestudiarbecario", array()), 'errors');
        echo "   
                                </div> 
                              </div>
                                <br>
                             <div class=\"row\">
                                <div class=\"col col-md-8\" align=\"left\">
                                    <label for=\"form_universidad\">Universidad<span style=\"font-size: 25;color: red\" >*</span></label>
                                      ";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "universidadsolibecario", array()), 'widget');
        echo "
                                      ";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "universidadsolibecario", array()), 'errors');
        echo "   
                                </div>
                                
                                <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_paes\">Nota Paes<span style=\"font-size: 25;color: red\" >*</span></label>
                                      ";
        // line 201
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "paes", array()), 'widget');
        echo "
                                      ";
        // line 202
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "paes", array()), 'errors');
        echo "   
                                </div>
                             </div>
                                <br>
                                
                                <div class=\"row\">
                                <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_matricula\">Monto Matricula<span style=\"font-size: 25;color: red\" >*</span></label>
                                      ";
        // line 210
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montosolimatriculabecario", array()), 'widget');
        echo "
                                      ";
        // line 211
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montosolimatriculabecario", array()), 'errors');
        echo "   
                                </div>
                                
                                <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_cuotaM\">Cuota Mensual<span style=\"font-size: 25;color: red\" >*</span></label>
                                      ";
        // line 216
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuotasolimensualbecario", array()), 'widget');
        echo "
                                      ";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuotasolimensualbecario", array()), 'errors');
        echo "   
                                </div>
                                
                                 <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_duracion\">Duracion de la carrera<span style=\"font-size: 25;color: red\" >*</span></label>
                                      ";
        // line 222
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duracionsolicarrerabecario", array()), 'widget');
        echo "
                                      ";
        // line 223
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duracionsolicarrerabecario", array()), 'errors');
        echo "   
                                </div>
                             </div>
                                <br>
                                <div class=\"row\">
                                    <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_otrasbecas\">Posee otras becas</label>
                                      ";
        // line 230
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "otrasbecas", array()), 'widget');
        echo "
                                      ";
        // line 231
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "otrasbecas", array()), 'errors');
        echo "   
                                    </div> 
                                    
                                     <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_Motrasbecas\">Monto de otras becas</label>
                                      ";
        // line 236
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montootrasbecas", array()), 'widget');
        echo "
                                      ";
        // line 237
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montootrasbecas", array()), 'errors');
        echo "   
                                    </div>
                                    
                                     <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_comprobante\">Comprobante<span style=\"font-size: 25;color: red\" >*</span></label>
                                      ";
        // line 242
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comprobante_file", array()), 'widget');
        echo "
                                      ";
        // line 243
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comprobante_file", array()), 'errors');
        echo "   
                                    </div>
                                </div>
                            </div>

                            <div style=\"width:90%; margin-left:5%\" class=\"tab-pane\" id=\"2014\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
                                <h3>Datos Famiiares</h3>
                               <hr>
                               <div class=\"row\">
                           
                                <div class=\"col col-md-4\" align=\"left\">
                                 <label for=\"form_telefono\">Telefono<span style=\"font-size: 25;color: red\" >*</span></label>
                                   ";
        // line 255
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonosolibecario", array()), 'widget');
        echo "
                                   ";
        // line 256
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonosolibecario", array()), 'errors');
        echo "   
                                 </div> 
                                 
                                 <div class=\"col col-md-4\" align=\"left\">
                                 <label for=\"form_ingresos\">Ingresos Familiares<span style=\"font-size: 25;color: red\" >*</span></label>
                                   ";
        // line 261
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingresossolifamiliabecario", array()), 'widget');
        echo "
                                   ";
        // line 262
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingresossolifamiliabecario", array()), 'errors');
        echo "   
                                  </div>
                                  
                                   <div class=\"col col-md-4\" align=\"left\">
                                 <label for=\"form_miembros\">Numero de miembreos familiares<span style=\"font-size: 25;color: red\" >*</span></label>
                                   ";
        // line 267
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "miembrossolifamiliabecario", array()), 'widget');
        echo "
                                   ";
        // line 268
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "miembrossolifamiliabecario", array()), 'errors');
        echo "   
                                  </div>
                                  
                                </div>
                          <br>
                          
                          <div class=\"row\">
                              
                             <div class=\"col col-md-12\" align=\"left\">
                                 <label for=\"form_nompadre\">Nombre del padre<span style=\"font-size: 25;color: red\" >*</span></label>
                                   ";
        // line 278
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomsolipadrebecario", array()), 'widget');
        echo "
                                   ";
        // line 279
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomsolipadrebecario", array()), 'errors');
        echo "   
                              </div> 
                              
                          </div>
                              <br> 
                         <div class=\"row\">
                              
                             <div class=\"col col-md-12\" align=\"left\">
                                 <label for=\"form_nommadre\">Nombre de la madre<span style=\"font-size: 25;color: red\" >*</span></label>
                                   ";
        // line 288
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomsolimadrebecario", array()), 'widget');
        echo "
                                   ";
        // line 289
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomsolimadrebecario", array()), 'errors');
        echo "   
                             </div> 
                              
                          </div>
                             <br>
                           <div class=\"row\">
                                   
                               <div class=\"col col-md-4\" align=\"left\">
                                 <label for=\"form_Temergencia\">Telefono en caso de emergencia<span style=\"font-size: 25;color: red\" >*</span></label>
                                   ";
        // line 298
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telsoliemergenciabecario", array()), 'widget');
        echo "
                                   ";
        // line 299
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telsoliemergenciabecario", array()), 'errors');
        echo "   
                               </div>
               
                               <div class=\"col col-md-4\" align=\"left\">
                                 <label for=\"form_hermanos\">Cantidad de hermanos</label>
                                   ";
        // line 304
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantsolihermanosbecario", array()), 'widget');
        echo "
                                   ";
        // line 305
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantsolihermanosbecario", array()), 'errors');
        echo "   
                               </div>
                          
                           </div>
                                <br>
                           <div class=\"row\">
                                   
                               <div class=\"col col-md-12\" align=\"left\">
                                 <label for=\"form_ocupacionp\">Ocupacion del padre<span style=\"font-size: 25;color: red\" >*</span></label>
                                   ";
        // line 314
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ocupacionpadre", array()), 'widget');
        echo "
                                   ";
        // line 315
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ocupacionpadre", array()), 'errors');
        echo "   
                               </div>
                           </div>
                               <br>
                           <div class=\"row\">
                                   
                               <div class=\"col col-md-12\" align=\"left\">
                                 <label for=\"form_ocupacionm\">Ocupacion de la madre<span style=\"font-size: 25;color: red\" >*</span></label>
                                   ";
        // line 323
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ocupacionmadre", array()), 'widget');
        echo "
                                   ";
        // line 324
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ocupacionmadre", array()), 'errors');
        echo "   
                               </div>
                           </div>
                          <br>
                         <div class=\"row\">
                             <div class=\"col col-md-12\" align=\"right\">
                                 <a href=\"";
        // line 330
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("solicitudbecario_index");
        echo "\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                                 <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />
         
         
                             </div>
                         </div>
                                
                            </div>


                        </div><!-- /.tab-content -->
                        </div>
                    </nav><!-- /.nav-tabs-custom -->
                            
                    ";
        // line 344
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                <br>
                <br>
            </div>
            
        </div>
        <br>
        <br>
    </div>


";
        
        $__internal_752a04a23326c8a53b5739ffa6573f4746510e82eeeb13ac3fd3a044ad324b08->leave($__internal_752a04a23326c8a53b5739ffa6573f4746510e82eeeb13ac3fd3a044ad324b08_prof);

    }

    public function getTemplateName()
    {
        return "solicitudbecario/Solicitudbecarionew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  607 => 344,  590 => 330,  581 => 324,  577 => 323,  566 => 315,  562 => 314,  550 => 305,  546 => 304,  538 => 299,  534 => 298,  522 => 289,  518 => 288,  506 => 279,  502 => 278,  489 => 268,  485 => 267,  477 => 262,  473 => 261,  465 => 256,  461 => 255,  446 => 243,  442 => 242,  434 => 237,  430 => 236,  422 => 231,  418 => 230,  408 => 223,  404 => 222,  396 => 217,  392 => 216,  384 => 211,  380 => 210,  369 => 202,  365 => 201,  357 => 196,  353 => 195,  343 => 188,  339 => 187,  331 => 182,  327 => 181,  313 => 170,  309 => 169,  301 => 164,  297 => 163,  285 => 154,  281 => 153,  271 => 146,  267 => 145,  259 => 140,  255 => 139,  241 => 128,  237 => 127,  226 => 119,  222 => 118,  212 => 111,  208 => 110,  200 => 105,  196 => 104,  188 => 99,  184 => 98,  176 => 93,  172 => 92,  153 => 76,  139 => 65,  131 => 59,  125 => 58,  113 => 56,  101 => 55,  43 => 3,  37 => 2,  11 => 1,);
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
{% block stylesheets%}
    {{parent()}}
    <style>
nav > .nav.nav-tabs{

  border: none;
    color:#fff;
    background:grey;
    border-radius:0;

}
nav > div a.nav-item.nav-link,
nav > div a.nav-item.nav-link.active
{
  border: none;
    padding: 18px 25px;
    color:#fff;
    background:gray;
    border-radius:0;
}

nav > div a.nav-item.nav-link.active:after
 {
  content: \"\";
  position: relative;
  bottom: -60px;
  left: -10%;
  border: 15px solid transparent;
  border-top-color: gainsboro;
}
.tab-content{
  background: #fdfdfd;
    line-height: 25px;
    border: 1px solid #ddd;
border-top: 5px solid gainsboro;
border-bottom: 5px solid gainsboro;
    padding:30px 25px;
}

nav > div a.nav-item.nav-link:hover,
nav > div a.nav-item.nav-link:focus
{
  border: none;
    background: gainsboro;
    color:#fff;
    border-radius:0;
    transition:background 0.20s linear;
}
        
    </style>
{% endblock stylesheets%}


{% block page_title %} Solicitud | {% endblock %}
{% block page_subtitle %}Registro De Solicitud {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%;\">

        <div  style=\"width:90%; margin-top: 5%; margin-left: 5%; background-color:#F3F3F3; border-radius:5px \" class=\"panel panel-default\">

            <div class=\"col col-md-12\" align=\"center\" >
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\">
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Solicitud</h2>
                <h4 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body; margin-top: -3px;\">Complete los campos requeridos:<span style=\"font-size: 25;color: red\" >*</span></h4>

            </div>
            <br>
            <div  class=\"container\"  style=\"width: 80%; margin-top: 3%; margin-bottom: 3%\">
             <hr>
                   
                {{ form_start(form) }}
              <nav style=\"margin-top:15%\">
                       <div class=\"nav nav-tabs nav-fill\" id=\"nav-tab\" role=\"tablist\">
                            <a class=\"nav-item nav-link \" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#2005\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\" >Datos Generales</a>
                            <a class=\"nav-item nav-link\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#2008\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Datos Personales</a>
                            <a class=\"nav-item nav-link\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#2013\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Datos Academicos</a>
                            <a class=\"nav-item nav-link\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#2014\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Datos Familiares</a>
    
                        <div class=\"tab-content py-3 px-3 px-sm-0\" id=\"nav-tabContent\" style=\"color:black\">
                            <div style=\"width:90%; margin-left:5%\" class=\"tab-pane active\" id=\"2005\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
                                <h3>Datos Generales</h3>
                                <hr>
                                <div class=\"row\">
                  
                                    <div class=\"col col-md-2\" align=\"left\">
                                       <label for=\"form_edad\">Edad<span style=\"font-size: 25;color: red\" >*</span></label>
                                         {{ form_widget(form.edad) }}
                                         {{ form_errors(form.edad) }}   
                                   </div>
                                   
                                     <div class=\"col col-md-2\" align=\"left\">
                                       <label for=\"form_edad\">Sexo<span style=\"font-size: 25;color: red\" >*</span></label>
                                         {{ form_widget(form.sexo) }}
                                         {{ form_errors(form.sexo) }}   
                                     </div>
                                    
                                      <div class=\"col col-md-4\" align=\"left\" id='datetimepicker1'>
                                       <label for=\"form_anioinicio\">Fecha Ingreso<span style=\"font-size: 25;color: red\" >*</span></label>
                                         {{ form_widget(form.aniosoliingresobecario) }}
                                         {{ form_errors(form.aniosoliingresobecario) }}   
                                     </div>
                                     
                                      <div class=\"col col-md-4\" align=\"left\" id='datetimepicker2'>
                                       <label for=\"form_aniofin\">Fecha Previa de graduacion<span style=\"font-size: 25;color: red\" >*</span></label>
                                         {{ form_widget(form.aniosolifinalizacionbecario) }}
                                         {{ form_errors(form.aniosolifinalizacionbecario) }}   
                                     </div>
                               </div>
                                     <br>    
                               <div class=\"row\">  
                                   <div class=\"col col-md-12\" align=\"left\">
                                       <label for=\"form_religion\">Religion que pertenece<span style=\"font-size: 25;color: red\" >*</span></label>
                                         {{ form_widget(form.religion) }}
                                         {{ form_errors(form.religion) }}   
                                   </div>
                                   
                               </div>
                                  <br> 
                                <div class=\"row\">  
                                   <div class=\"col col-md-12\" align=\"left\">
                                       <label for=\"form_direccion\">Dirección<span style=\"font-size: 25;color: red\" >*</span></label>
                                         {{ form_widget(form.direccionsolibecario) }}
                                         {{ form_errors(form.direccionsolibecario) }}   
                                   </div> 
                               </div>
                            </div><!-- /.tab-pane -->

                            <div style=\"width:90%; margin-left:5%\" class=\"tab-pane \" id=\"2008\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
                               <h3>Datos Personales</h3>
                               <hr>
                               <div class=\"row\">  
                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_documento\">Numero de documento<span style=\"font-size: 25;color: red\" >*</span></label>
                                      {{ form_widget(form.docsoliidentidadbecario) }}
                                      {{ form_errors(form.docsoliidentidadbecario) }}   
                                </div> 
                                
                                <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_cdirecto\">Numero de contacto directo<span style=\"font-size: 25;color: red\" >*</span></label>
                                      {{ form_widget(form.telsolipersonalbecario) }}
                                      {{ form_errors(form.telsolipersonalbecario) }}   
                                </div> 
                              </div>
                                <br>
                              <div class=\"row\">  
                                <div class=\"col col-md-12\" align=\"left\">
                                    <label for=\"form_antecedentes\">Antecedentes</label>
                                      {{ form_widget(form.antecedentes) }}
                                      {{ form_errors(form.antecedentes) }}   
                                </div> 
                              </div>
                                <br>
                                <br>
                                
                               <div class=\"row\">
                                 <div class=\"col col-md-4\" align=\"center\">
                                    <label for=\"form_estadon\">Estado</label>
                                      {{ form_widget(form.estadosolibecario) }}
                                      {{ form_errors(form.estadosolibecario) }}   
                                </div> 
                                
                                <div class=\"col col-md-4\" align=\"right\">
                                    <label for=\"form_trabajo\">Posee trabajo<span style=\"font-size: 25;color: red\" >*</span></label>
                                      {{ form_widget(form.trabajosolibecario) }}
                                      {{ form_errors(form.trabajosolibecario) }}   
                                </div> 
                            </div>
                            </div>

                            <div style=\"width:90%; margin-left:5%\" class=\"tab-pane\" id=\"2013\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
                                <h3>Datos Academicos</h3>
                               <hr>
                               <div class=\"row\">  
                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_tsolicitud\">Tipo de solicitud<span style=\"font-size: 25;color: red\" >*</span></label>
                                      {{ form_widget(form.tiposolicasabecario) }}
                                      {{ form_errors(form.tiposolicasabecario) }}   
                                </div> 
                                
                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_carrera\">Carrera<span style=\"font-size: 25;color: red\" >*</span></label>
                                      {{ form_widget(form.carrerasoliestudiarbecario) }}
                                      {{ form_errors(form.carrerasoliestudiarbecario) }}   
                                </div> 
                              </div>
                                <br>
                             <div class=\"row\">
                                <div class=\"col col-md-8\" align=\"left\">
                                    <label for=\"form_universidad\">Universidad<span style=\"font-size: 25;color: red\" >*</span></label>
                                      {{ form_widget(form.universidadsolibecario) }}
                                      {{ form_errors(form.universidadsolibecario) }}   
                                </div>
                                
                                <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_paes\">Nota Paes<span style=\"font-size: 25;color: red\" >*</span></label>
                                      {{ form_widget(form.paes) }}
                                      {{ form_errors(form.paes) }}   
                                </div>
                             </div>
                                <br>
                                
                                <div class=\"row\">
                                <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_matricula\">Monto Matricula<span style=\"font-size: 25;color: red\" >*</span></label>
                                      {{ form_widget(form.montosolimatriculabecario) }}
                                      {{ form_errors(form.montosolimatriculabecario) }}   
                                </div>
                                
                                <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_cuotaM\">Cuota Mensual<span style=\"font-size: 25;color: red\" >*</span></label>
                                      {{ form_widget(form.cuotasolimensualbecario) }}
                                      {{ form_errors(form.cuotasolimensualbecario) }}   
                                </div>
                                
                                 <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_duracion\">Duracion de la carrera<span style=\"font-size: 25;color: red\" >*</span></label>
                                      {{ form_widget(form.duracionsolicarrerabecario) }}
                                      {{ form_errors(form.duracionsolicarrerabecario) }}   
                                </div>
                             </div>
                                <br>
                                <div class=\"row\">
                                    <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_otrasbecas\">Posee otras becas</label>
                                      {{ form_widget(form.otrasbecas) }}
                                      {{ form_errors(form.otrasbecas) }}   
                                    </div> 
                                    
                                     <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_Motrasbecas\">Monto de otras becas</label>
                                      {{ form_widget(form.montootrasbecas) }}
                                      {{ form_errors(form.montootrasbecas) }}   
                                    </div>
                                    
                                     <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_comprobante\">Comprobante<span style=\"font-size: 25;color: red\" >*</span></label>
                                      {{ form_widget(form.comprobante_file) }}
                                      {{ form_errors(form.comprobante_file) }}   
                                    </div>
                                </div>
                            </div>

                            <div style=\"width:90%; margin-left:5%\" class=\"tab-pane\" id=\"2014\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
                                <h3>Datos Famiiares</h3>
                               <hr>
                               <div class=\"row\">
                           
                                <div class=\"col col-md-4\" align=\"left\">
                                 <label for=\"form_telefono\">Telefono<span style=\"font-size: 25;color: red\" >*</span></label>
                                   {{ form_widget(form.telefonosolibecario) }}
                                   {{ form_errors(form.telefonosolibecario) }}   
                                 </div> 
                                 
                                 <div class=\"col col-md-4\" align=\"left\">
                                 <label for=\"form_ingresos\">Ingresos Familiares<span style=\"font-size: 25;color: red\" >*</span></label>
                                   {{ form_widget(form.ingresossolifamiliabecario) }}
                                   {{ form_errors(form.ingresossolifamiliabecario) }}   
                                  </div>
                                  
                                   <div class=\"col col-md-4\" align=\"left\">
                                 <label for=\"form_miembros\">Numero de miembreos familiares<span style=\"font-size: 25;color: red\" >*</span></label>
                                   {{ form_widget(form.miembrossolifamiliabecario) }}
                                   {{ form_errors(form.miembrossolifamiliabecario) }}   
                                  </div>
                                  
                                </div>
                          <br>
                          
                          <div class=\"row\">
                              
                             <div class=\"col col-md-12\" align=\"left\">
                                 <label for=\"form_nompadre\">Nombre del padre<span style=\"font-size: 25;color: red\" >*</span></label>
                                   {{ form_widget(form.nomsolipadrebecario) }}
                                   {{ form_errors(form.nomsolipadrebecario) }}   
                              </div> 
                              
                          </div>
                              <br> 
                         <div class=\"row\">
                              
                             <div class=\"col col-md-12\" align=\"left\">
                                 <label for=\"form_nommadre\">Nombre de la madre<span style=\"font-size: 25;color: red\" >*</span></label>
                                   {{ form_widget(form.nomsolimadrebecario) }}
                                   {{ form_errors(form.nomsolimadrebecario) }}   
                             </div> 
                              
                          </div>
                             <br>
                           <div class=\"row\">
                                   
                               <div class=\"col col-md-4\" align=\"left\">
                                 <label for=\"form_Temergencia\">Telefono en caso de emergencia<span style=\"font-size: 25;color: red\" >*</span></label>
                                   {{ form_widget(form.telsoliemergenciabecario) }}
                                   {{ form_errors(form.telsoliemergenciabecario) }}   
                               </div>
               
                               <div class=\"col col-md-4\" align=\"left\">
                                 <label for=\"form_hermanos\">Cantidad de hermanos</label>
                                   {{ form_widget(form.cantsolihermanosbecario) }}
                                   {{ form_errors(form.cantsolihermanosbecario) }}   
                               </div>
                          
                           </div>
                                <br>
                           <div class=\"row\">
                                   
                               <div class=\"col col-md-12\" align=\"left\">
                                 <label for=\"form_ocupacionp\">Ocupacion del padre<span style=\"font-size: 25;color: red\" >*</span></label>
                                   {{ form_widget(form.ocupacionpadre) }}
                                   {{ form_errors(form.ocupacionpadre) }}   
                               </div>
                           </div>
                               <br>
                           <div class=\"row\">
                                   
                               <div class=\"col col-md-12\" align=\"left\">
                                 <label for=\"form_ocupacionm\">Ocupacion de la madre<span style=\"font-size: 25;color: red\" >*</span></label>
                                   {{ form_widget(form.ocupacionmadre) }}
                                   {{ form_errors(form.ocupacionmadre) }}   
                               </div>
                           </div>
                          <br>
                         <div class=\"row\">
                             <div class=\"col col-md-12\" align=\"right\">
                                 <a href=\"{{ path('solicitudbecario_index') }}\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                                 <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />
         
         
                             </div>
                         </div>
                                
                            </div>


                        </div><!-- /.tab-content -->
                        </div>
                    </nav><!-- /.nav-tabs-custom -->
                            
                    {{ form_end(form) }}
                <br>
                <br>
            </div>
            
        </div>
        <br>
        <br>
    </div>


{% endblock %}
", "solicitudbecario/Solicitudbecarionew.html.twig", "/home/ubuntu/workspace/app/Resources/views/solicitudbecario/Solicitudbecarionew.html.twig");
    }
}
