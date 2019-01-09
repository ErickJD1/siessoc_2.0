<?php

/* banco/Bancoshowdelete.html.twig */
class __TwigTemplate_501b857e3296dc79d07e3586c162ca3e3606500f5098ec077320ce45c926da21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div  class=\"modal fade\" id=\"showdeleteBanco";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banco"]) ? $context["banco"] : null), "idbanco", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\" >
\t\t\t<div class=\"modal-content\" style=\"border-radius: 40px\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h3 align=\"center\"><strong>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banco"]) ? $context["banco"] : null), "nombanco", array()), "html", null, true);
        echo "</strong></h3>
\t\t\t\t</div>
                            
\t\t\t\t<div class=\"modal-body\">

  <div class=\"list-group\">
    <!--modal-->
<div class=\"row\" style=\"margin-left:5%\" align=\"left\">
  <div class=\"col col-md-7\">
    <h4><i class=\"fa fa-font\"></i>Banco</h4>
    <p class=\"form-group\"><strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banco"]) ? $context["banco"] : null), "nombanco", array()), "html", null, true);
        echo "</strong></p>
    <h4>Estado</h4>
    <h4><i class=\"fa fa-check-square\"></i>";
        // line 19
        if (($this->getAttribute((isset($context["banco"]) ? $context["banco"] : null), "estadobanco", array()) == 1)) {
            echo " Activa ";
        } else {
            echo " Inactiva ";
        }
        echo "</h4>
  </div>
<div class=\"col col-md-5\">

                            <img style=\"width:75%;margin-top: 10%;margin-bottom: 2%\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/delete.png"), "html", null, true);
        echo "\"></img>
                        </div>
                    </div>


                    <div class=\"modal-footer\">
                          <div style=\"float:right\">
                            ";
        // line 30
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("banco_delete", array("id" => $this->getAttribute((isset($context["banco"]) ? $context["banco"] : null), "idbanco", array()))), "Method" => "POST"));
        echo "
                            <input type=\"submit\" class=\"btn btn-danger\" type=\"button\" value=\"Delete\">
                            ";
        // line 32
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
                        </div>
                        
                            <button type=\"button\" class=\"btn btn-success\" style=\"margin-right: 1px\" data-dismiss=\"modal\">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>
        </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "banco/Bancoshowdelete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 32,  68 => 30,  58 => 23,  47 => 19,  42 => 17,  29 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "banco/Bancoshowdelete.html.twig", "/home/ubuntu/workspace/app/Resources/views/banco/Bancoshowdelete.html.twig");
    }
}
