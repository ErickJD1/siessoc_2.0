<?php

/* :movimientoinventario:index.html.twig */
class __TwigTemplate_20b25449a59c767072f320bd3790cff674d217867a34ac0d9d2a4ef23d6e318c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":movimientoinventario:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Movimientoinventarios list</h1>

    <table>
        <thead>
            <tr>
                <th>Nombremovinv</th>
                <th>Estadomovinv</th>
                <th>Idmovinv</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movimientoinventarios"]) ? $context["movimientoinventarios"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["movimientoinventario"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimientoinventario_show", array("id" => $this->getAttribute($context["movimientoinventario"], "idmovinv", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimientoinventario"], "nombremovinv", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            if ($this->getAttribute($context["movimientoinventario"], "estadomovinv", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimientoinventario"], "idmovinv", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimientoinventario_show", array("id" => $this->getAttribute($context["movimientoinventario"], "idmovinv", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimientoinventario_edit", array("id" => $this->getAttribute($context["movimientoinventario"], "idmovinv", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movimientoinventario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimientoinventario_new");
        echo "\">Create a new movimientoinventario</a>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return ":movimientoinventario:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 38,  91 => 33,  79 => 27,  73 => 24,  66 => 20,  58 => 19,  52 => 18,  49 => 17,  45 => 16,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":movimientoinventario:index.html.twig", "/home/ubuntu/workspace/app/Resources/views/movimientoinventario/index.html.twig");
    }
}
