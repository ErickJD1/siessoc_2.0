<?php

/* colaboracionmonetaria/Colaboracionmonetariashow.html.twig */
class __TwigTemplate_bb172fcd7a8578096246d12f2a860952d62c175a16d87b05be083b9d5a677dcc extends Twig_Template
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
        $__internal_a90c33511f03ecc3df2c00d297573ae320e9e8127ebe1cd60f740e8af188a06a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a90c33511f03ecc3df2c00d297573ae320e9e8127ebe1cd60f740e8af188a06a->enter($__internal_a90c33511f03ecc3df2c00d297573ae320e9e8127ebe1cd60f740e8af188a06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "colaboracionmonetaria/Colaboracionmonetariashow.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"VerTipocta";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["colaboracionmonetaria"]) ? $context["colaboracionmonetaria"] : $this->getContext($context, "colaboracionmonetaria")), "idcolaboracion", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\" style=\"border-radius: 40px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h3 align=\"center\"><strong><strong>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["colaboracionmonetaria"]) ? $context["colaboracionmonetaria"] : $this->getContext($context, "colaboracionmonetaria")), "descripcioncolaboracion", array()), "html", null, true);
        echo "</strong></strong></h3>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                    <!--modal-->
                    
                      <div class=\"row\" style=\"margin-left:5%\" align=\"left\">
                        <!--modal-->
                        <div class=\"col col-md-7\">

                 <h4><i class=\"fa fa-list\"></i> Descripcioncolaboracion</h4>
                <p class=\"form-group\"><strong>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["colaboracionmonetaria"]) ? $context["colaboracionmonetaria"] : $this->getContext($context, "colaboracionmonetaria")), "descripcioncolaboracion", array()), "html", null, true);
        echo "</strong></p>
                <hr>
                <h4><i class=\"fa fa-money\"></i> Montomescolaboracion</h4>
                <p class=\"form-group\"><strong>";
        // line 22
        echo twig_escape_filter($this->env, ("\$" . $this->getAttribute((isset($context["colaboracionmonetaria"]) ? $context["colaboracionmonetaria"] : $this->getContext($context, "colaboracionmonetaria")), "montomescolaboracion", array())), "html", null, true);
        echo "</strong></p>
                <hr>
                <h4><i class=\"fa fa-money\"></i> Saldocolaboracion</h4>
                <p class=\"form-group\"><strong>";
        // line 25
        echo twig_escape_filter($this->env, ("\$" . $this->getAttribute((isset($context["colaboracionmonetaria"]) ? $context["colaboracionmonetaria"] : $this->getContext($context, "colaboracionmonetaria")), "saldocolaboracion", array())), "html", null, true);
        echo "</strong></p>
                <hr>
                <h4><i class=\"fa fa-check\"></i> Estadocolaboracion</h4>
                <p class=\"form-group\"><strong>";
        // line 28
        if ($this->getAttribute((isset($context["colaboracionmonetaria"]) ? $context["colaboracionmonetaria"] : $this->getContext($context, "colaboracionmonetaria")), "estadocolaboracion", array())) {
            echo "Activa";
        } else {
            echo "Baja";
        }
        echo "</strong></p>
  </div>
                        <div class=\"col col-md-5\">

                            <img style=\"width:75%;margin-top: 10%;margin-bottom: 2%\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/budget.png"), "html", null, true);
        echo "\"></img>
                        </div>
                    </div>


                  <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-success\" style=\"margin-right: 1px\" data-dismiss=\"modal\">Cerrar</button>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_a90c33511f03ecc3df2c00d297573ae320e9e8127ebe1cd60f740e8af188a06a->leave($__internal_a90c33511f03ecc3df2c00d297573ae320e9e8127ebe1cd60f740e8af188a06a_prof);

    }

    public function getTemplateName()
    {
        return "colaboracionmonetaria/Colaboracionmonetariashow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 32,  65 => 28,  59 => 25,  53 => 22,  47 => 19,  32 => 7,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"VerTipocta{{ colaboracionmonetaria.idcolaboracion }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\" style=\"border-radius: 40px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h3 align=\"center\"><strong><strong>{{  colaboracionmonetaria.descripcioncolaboracion }}</strong></strong></h3>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                    <!--modal-->
                    
                      <div class=\"row\" style=\"margin-left:5%\" align=\"left\">
                        <!--modal-->
                        <div class=\"col col-md-7\">

                 <h4><i class=\"fa fa-list\"></i> Descripcioncolaboracion</h4>
                <p class=\"form-group\"><strong>{{ colaboracionmonetaria.descripcioncolaboracion }}</strong></p>
                <hr>
                <h4><i class=\"fa fa-money\"></i> Montomescolaboracion</h4>
                <p class=\"form-group\"><strong>{{ \"\$\"~colaboracionmonetaria.montomescolaboracion }}</strong></p>
                <hr>
                <h4><i class=\"fa fa-money\"></i> Saldocolaboracion</h4>
                <p class=\"form-group\"><strong>{{ \"\$\"~colaboracionmonetaria.saldocolaboracion }}</strong></p>
                <hr>
                <h4><i class=\"fa fa-check\"></i> Estadocolaboracion</h4>
                <p class=\"form-group\"><strong>{% if colaboracionmonetaria.estadocolaboracion %}Activa{% else %}Baja{% endif %}</strong></p>
  </div>
                        <div class=\"col col-md-5\">

                            <img style=\"width:75%;margin-top: 10%;margin-bottom: 2%\" src=\"{{ asset('img/budget.png') }}\"></img>
                        </div>
                    </div>


                  <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-success\" style=\"margin-right: 1px\" data-dismiss=\"modal\">Cerrar</button>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "colaboracionmonetaria/Colaboracionmonetariashow.html.twig", "/home/ubuntu/workspace/app/Resources/views/colaboracionmonetaria/Colaboracionmonetariashow.html.twig");
    }
}
