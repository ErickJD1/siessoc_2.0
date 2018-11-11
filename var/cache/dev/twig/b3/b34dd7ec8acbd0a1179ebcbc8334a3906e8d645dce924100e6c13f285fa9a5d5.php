<?php

/* AvanzuAdminThemeBundle:layout:macros.html.twig */
class __TwigTemplate_a83607a3f851ccf5e518e3b53af6eaa7b2dca2a46d77d33355ea0f4c9352126f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'box_collapse' => array($this, 'block_box_collapse'),
            'box_remove' => array($this, 'block_box_remove'),
            'box_header_buttons' => array($this, 'block_box_header_buttons'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ab58ec561da4c34c692b74d9c37f267de8e066ebf7dc3f8c4a69c380a1a5ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab58ec561da4c34c692b74d9c37f267de8e066ebf7dc3f8c4a69c380a1a5ae9->enter($__internal_4ab58ec561da4c34c692b74d9c37f267de8e066ebf7dc3f8c4a69c380a1a5ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:macros.html.twig"));

        // line 1
        $this->displayBlock('box_collapse', $context, $blocks);
        // line 4
        $this->displayBlock('box_remove', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('box_header_buttons', $context, $blocks);
        // line 20
        echo "
";
        // line 28
        echo "

";
        // line 37
        echo "
";
        // line 78
        echo "
";
        // line 95
        echo "
";
        
        $__internal_4ab58ec561da4c34c692b74d9c37f267de8e066ebf7dc3f8c4a69c380a1a5ae9->leave($__internal_4ab58ec561da4c34c692b74d9c37f267de8e066ebf7dc3f8c4a69c380a1a5ae9_prof);

    }

    // line 1
    public function block_box_collapse($context, array $blocks = array())
    {
        $__internal_0df2ece5456dc3029842d9f614774d9a89da150d7a7f2837d09f47bd8536a673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df2ece5456dc3029842d9f614774d9a89da150d7a7f2837d09f47bd8536a673->enter($__internal_0df2ece5456dc3029842d9f614774d9a89da150d7a7f2837d09f47bd8536a673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_collapse"));

        // line 2
        echo "    <button class=\"btn btn-";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "info")) : ("info")), "html", null, true);
        echo " btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
";
        
        $__internal_0df2ece5456dc3029842d9f614774d9a89da150d7a7f2837d09f47bd8536a673->leave($__internal_0df2ece5456dc3029842d9f614774d9a89da150d7a7f2837d09f47bd8536a673_prof);

    }

    // line 4
    public function block_box_remove($context, array $blocks = array())
    {
        $__internal_f0db26ac9f0bdfa72a446584477e6a51b6fd66f72be91ea8b37f691f28194dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0db26ac9f0bdfa72a446584477e6a51b6fd66f72be91ea8b37f691f28194dd5->enter($__internal_f0db26ac9f0bdfa72a446584477e6a51b6fd66f72be91ea8b37f691f28194dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_remove"));

        // line 5
        echo "    <button class=\"btn btn-";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "info")) : ("info")), "html", null, true);
        echo " btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
";
        
        $__internal_f0db26ac9f0bdfa72a446584477e6a51b6fd66f72be91ea8b37f691f28194dd5->leave($__internal_f0db26ac9f0bdfa72a446584477e6a51b6fd66f72be91ea8b37f691f28194dd5_prof);

    }

    // line 8
    public function block_box_header_buttons($context, array $blocks = array())
    {
        $__internal_ea1a5875ac0c5b6793c75a1c71368250295f3dd652ec96c92c7ae1a67dab9180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1a5875ac0c5b6793c75a1c71368250295f3dd652ec96c92c7ae1a67dab9180->enter($__internal_ea1a5875ac0c5b6793c75a1c71368250295f3dd652ec96c92c7ae1a67dab9180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_header_buttons"));

        // line 9
        echo "    ";
        if (((isset($context["collapse"]) ? $context["collapse"] : $this->getContext($context, "collapse")) || (isset($context["remove"]) ? $context["remove"] : $this->getContext($context, "remove")))) {
            // line 10
            echo "        <div class=\"box-tools pull-right\">
            ";
            // line 11
            if ((isset($context["collapse"]) ? $context["collapse"] : $this->getContext($context, "collapse"))) {
                // line 12
                echo "                ";
                $this->displayBlock("box_collapse", $context, $blocks);
                echo "
            ";
            }
            // line 14
            echo "            ";
            if ((isset($context["remove"]) ? $context["remove"] : $this->getContext($context, "remove"))) {
                // line 15
                echo "                ";
                $this->displayBlock("box_remove", $context, $blocks);
                echo "
            ";
            }
            // line 17
            echo "        </div>
    ";
        }
        
        $__internal_ea1a5875ac0c5b6793c75a1c71368250295f3dd652ec96c92c7ae1a67dab9180->leave($__internal_ea1a5875ac0c5b6793c75a1c71368250295f3dd652ec96c92c7ae1a67dab9180_prof);

    }

    // line 21
    public function getbox_header($__title__ = null, $__collapse__ = null, $__remove__ = null, $__type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "collapse" => $__collapse__,
            "remove" => $__remove__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_8df7c106d954f5a0a244241375f218d0d4e1cc07986e4ac2cf0dd2f53cad230b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_8df7c106d954f5a0a244241375f218d0d4e1cc07986e4ac2cf0dd2f53cad230b->enter($__internal_8df7c106d954f5a0a244241375f218d0d4e1cc07986e4ac2cf0dd2f53cad230b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "box_header"));

            // line 22
            echo "
    <div class=\"box-header\">
        <h3 class=\"box-title\">";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
            echo "</h3>
        ";
            // line 25
            $this->displayBlock("box_header_buttons", $context, $blocks);
            echo "
    </div>
";
            
            $__internal_8df7c106d954f5a0a244241375f218d0d4e1cc07986e4ac2cf0dd2f53cad230b->leave($__internal_8df7c106d954f5a0a244241375f218d0d4e1cc07986e4ac2cf0dd2f53cad230b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 30
    public function getavatar($__image__ = null, $__alt__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "image" => $__image__,
            "alt" => $__alt__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_31d8871d004cba2670aa073d6003e41e594ac17205ec3d61da911e3be27e558e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_31d8871d004cba2670aa073d6003e41e594ac17205ec3d61da911e3be27e558e->enter($__internal_31d8871d004cba2670aa073d6003e41e594ac17205ec3d61da911e3be27e558e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "avatar"));

            // line 31
            echo "    ";
            if ((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image"))) {
                // line 32
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image"))), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "img-circle")) : ("img-circle")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (isset($context["alt"]) ? $context["alt"] : $this->getContext($context, "alt")), "html", null, true);
                echo "\" />
    ";
            } else {
                // line 34
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/avanzuadmintheme/img/avatar.png"), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "img-circle")) : ("img-circle")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (isset($context["alt"]) ? $context["alt"] : $this->getContext($context, "alt")), "html", null, true);
                echo "\" />
    ";
            }
            
            $__internal_31d8871d004cba2670aa073d6003e41e594ac17205ec3d61da911e3be27e558e->leave($__internal_31d8871d004cba2670aa073d6003e41e594ac17205ec3d61da911e3be27e558e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 38
    public function getmenu_item($__item__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b22d62a6c8f2c5a0fd76c4c838cf2c1f5a57a71f3a32111d94f80f0a5b5f8495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_b22d62a6c8f2c5a0fd76c4c838cf2c1f5a57a71f3a32111d94f80f0a5b5f8495->enter($__internal_b22d62a6c8f2c5a0fd76c4c838cf2c1f5a57a71f3a32111d94f80f0a5b5f8495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_item"));

            // line 39
            echo "    ";
            $context["macros"] = $this;
            // line 40
            echo "    ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array()) || $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()))) {
                // line 41
                echo "        <li id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "identifier", array()), "html", null, true);
                echo "\"
            class=\" ";
                // line 42
                echo (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "isActive", array())) ? ("active") : (""));
                echo " ";
                echo (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array())) ? ("treeview") : (""));
                echo "\">
            <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array())) ? ("#") : (((twig_in_filter("/", $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array()))) ? ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "routeArgs", array())))))), "html", null, true);
                echo "\">
                ";
                // line 44
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "icon", array())) {
                    echo " <i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "icon", array()), "html", null, true);
                    echo "\"></i> ";
                }
                // line 45
                echo "                <span>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), "html", null, true);
                echo "</span>
                ";
                // line 46
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "badge", array())) {
                    // line 47
                    echo "                    <small class=\"label pull-right bg-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "badgeColor", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "badge", array()), "html", null, true);
                    echo "</small>
                ";
                }
                // line 49
                echo "                ";
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array())) {
                    echo "<i class=\"fa fa-angle-left pull-right\"></i>";
                }
                // line 50
                echo "            </a>

            ";
                // line 52
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array())) {
                    // line 53
                    echo "                <ul class=\"treeview-menu\">
                    ";
                    // line 54
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 55
                        echo "                        ";
                        if ($this->getAttribute($context["child"], "hasChildren", array())) {
                            // line 56
                            echo "                            ";
                            echo $context["macros"]->getmenu_item($context["child"]);
                            echo "
                        ";
                        } elseif ($this->getAttribute(                        // line 57
$context["child"], "route", array())) {
                            // line 58
                            echo "                            <li class=\"";
                            echo (($this->getAttribute($context["child"], "isActive", array())) ? ("active") : (""));
                            echo "\" id=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "identifier", array()), "html", null, true);
                            echo "\">
                                <a href=\"";
                            // line 59
                            echo twig_escape_filter($this->env, ((twig_in_filter("/", $this->getAttribute($context["child"], "route", array()))) ? ($this->getAttribute($context["child"], "route", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["child"], "route", array()), $this->getAttribute($context["child"], "routeArgs", array())))), "html", null, true);
                            echo "\">
                                    <i class=\"";
                            // line 60
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["child"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["child"], "icon", array()), "fa fa-circle-o")) : ("fa fa-circle-o")), "html", null, true);
                            echo "\"></i>
                                    ";
                            // line 61
                            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "label", array()), "html", null, true);
                            echo "
                                </a>
                            </li>
                        ";
                        }
                        // line 65
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 66
                    echo "                </ul>
            ";
                }
                // line 68
                echo "        </li>
    ";
            } else {
                // line 70
                echo "        <li class=\"header\">
            ";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), "html", null, true);
                echo "
            ";
                // line 72
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "badge", array())) {
                    // line 73
                    echo "                <small class=\"label pull-right bg-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "badgeColor", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "badge", array()), "html", null, true);
                    echo "</small>
            ";
                }
                // line 75
                echo "        </li>
    ";
            }
            
            $__internal_b22d62a6c8f2c5a0fd76c4c838cf2c1f5a57a71f3a32111d94f80f0a5b5f8495->leave($__internal_b22d62a6c8f2c5a0fd76c4c838cf2c1f5a57a71f3a32111d94f80f0a5b5f8495_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 83
    public function getflash($__type__ = null, $__message__ = null, $__close__ = null, $__use_raw__ = null, $__class__ = null, $__domain__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "message" => $__message__,
            "close" => $__close__,
            "use_raw" => $__use_raw__,
            "class" => $__class__,
            "domain" => $__domain__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_0530bedb2811d6fc084c852d4fc2af7bf4628af13fa5307c6a16d28f5c19fc0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_0530bedb2811d6fc084c852d4fc2af7bf4628af13fa5307c6a16d28f5c19fc0c->enter($__internal_0530bedb2811d6fc084c852d4fc2af7bf4628af13fa5307c6a16d28f5c19fc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "flash"));

            // line 84
            echo "    <div class=\"alert";
            echo twig_escape_filter($this->env, (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))) ? ((" alert-" . (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))) : ("")), "html", null, true);
            echo " fade in ";
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "")) : ("")), "html", null, true);
            echo " ";
            if (((array_key_exists("close", $context)) ? (_twig_default_filter((isset($context["close"]) ? $context["close"] : $this->getContext($context, "close")), false)) : (false))) {
                echo "alert-dismissible";
            }
            echo "\">
        ";
            // line 85
            if (((array_key_exists("close", $context)) ? (_twig_default_filter((isset($context["close"]) ? $context["close"] : $this->getContext($context, "close")), false)) : (false))) {
                // line 86
                echo "            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        ";
            }
            // line 88
            echo "        ";
            if (((array_key_exists("use_raw", $context)) ? (_twig_default_filter((isset($context["use_raw"]) ? $context["use_raw"] : $this->getContext($context, "use_raw")), false)) : (false))) {
                // line 89
                echo "            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "messages")) : ("messages")));
                echo "
        ";
            } else {
                // line 91
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "messages")) : ("messages"))), "html", null, true);
                echo "
        ";
            }
            // line 93
            echo "    </div>
";
            
            $__internal_0530bedb2811d6fc084c852d4fc2af7bf4628af13fa5307c6a16d28f5c19fc0c->leave($__internal_0530bedb2811d6fc084c852d4fc2af7bf4628af13fa5307c6a16d28f5c19fc0c_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 96
    public function getsession_flash($__close__ = null, $__use_raw__ = null, $__class__ = null, $__domain__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "close" => $__close__,
            "use_raw" => $__use_raw__,
            "class" => $__class__,
            "domain" => $__domain__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_af0d111aa40cc070af0319d17ce7eac4905cdccab84ec3ccdbe3b5dca32fbdf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_af0d111aa40cc070af0319d17ce7eac4905cdccab84ec3ccdbe3b5dca32fbdf6->enter($__internal_af0d111aa40cc070af0319d17ce7eac4905cdccab84ec3ccdbe3b5dca32fbdf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "session_flash"));

            // line 97
            echo "    ";
            $context["flash_messages"] = $this;
            // line 98
            echo "
    ";
            // line 99
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "peekAll", array())) > 0)) {
                // line 100
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
                foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                    // line 101
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 102
                        echo "                ";
                        if (($context["type"] == "fos_user_success")) {
                            // line 103
                            echo "                    ";
                            $context["type"] = "success";
                            // line 104
                            echo "                    ";
                            $context["domain"] = "FOSUserBundle";
                            // line 105
                            echo "                ";
                        }
                        // line 106
                        echo "                ";
                        echo $context["flash_messages"]->getflash($context["type"], $context["message"], (isset($context["close"]) ? $context["close"] : $this->getContext($context, "close")), (isset($context["use_raw"]) ? $context["use_raw"] : $this->getContext($context, "use_raw")), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), (isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")));
                        echo "
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 108
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "    ";
            }
            
            $__internal_af0d111aa40cc070af0319d17ce7eac4905cdccab84ec3ccdbe3b5dca32fbdf6->leave($__internal_af0d111aa40cc070af0319d17ce7eac4905cdccab84ec3ccdbe3b5dca32fbdf6_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:layout:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  520 => 109,  514 => 108,  505 => 106,  502 => 105,  499 => 104,  496 => 103,  493 => 102,  488 => 101,  483 => 100,  481 => 99,  478 => 98,  475 => 97,  457 => 96,  438 => 93,  432 => 91,  426 => 89,  423 => 88,  419 => 86,  417 => 85,  406 => 84,  386 => 83,  366 => 75,  358 => 73,  356 => 72,  352 => 71,  349 => 70,  345 => 68,  341 => 66,  335 => 65,  328 => 61,  324 => 60,  320 => 59,  313 => 58,  311 => 57,  306 => 56,  303 => 55,  299 => 54,  296 => 53,  294 => 52,  290 => 50,  285 => 49,  277 => 47,  275 => 46,  270 => 45,  264 => 44,  260 => 43,  254 => 42,  249 => 41,  246 => 40,  243 => 39,  228 => 38,  202 => 34,  192 => 32,  189 => 31,  172 => 30,  151 => 25,  147 => 24,  143 => 22,  125 => 21,  116 => 17,  110 => 15,  107 => 14,  101 => 12,  99 => 11,  96 => 10,  93 => 9,  87 => 8,  77 => 5,  71 => 4,  61 => 2,  55 => 1,  47 => 95,  44 => 78,  41 => 37,  37 => 28,  34 => 20,  32 => 8,  29 => 7,  27 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block box_collapse %}
    <button class=\"btn btn-{{ type|default('info') }} btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
{% endblock %}
{% block box_remove %}
    <button class=\"btn btn-{{ type|default('info') }} btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
{% endblock %}

{% block box_header_buttons %}
    {% if collapse or remove %}
        <div class=\"box-tools pull-right\">
            {% if collapse %}
                {{ block('box_collapse') }}
            {% endif %}
            {% if remove %}
                {{ block('box_remove') }}
            {% endif %}
        </div>
    {% endif %}
{% endblock %}

{% macro box_header(title, collapse, remove, type) %}

    <div class=\"box-header\">
        <h3 class=\"box-title\">{{ title }}</h3>
        {{ block('box_header_buttons') }}
    </div>
{% endmacro %}


{% macro avatar(image, alt, class) %}
    {% if image %}
        <img src=\"{{ asset(image) }}\" class=\"{{ class|default('img-circle') }}\" alt=\"{{ alt }}\" />
    {% else %}
        <img src=\"{{ asset('bundles/avanzuadmintheme/img/avatar.png') }}\" class=\"{{ class|default('img-circle') }}\" alt=\"{{ alt }}\" />
    {% endif %}
{% endmacro %}

{% macro menu_item(item) %}
    {% import _self as macros %}
    {% if item.route or item.hasChildren %}
        <li id=\"{{ item.identifier }}\"
            class=\" {{ item.isActive ? 'active' : '' }} {{ item.hasChildren? 'treeview' : '' }}\">
            <a href=\"{{ item.hasChildren ? '#': '/' in item.route ? item.route : path(item.route, item.routeArgs) }}\">
                {% if item.icon %} <i class=\"{{ item.icon }}\"></i> {% endif %}
                <span>{{ item.label }}</span>
                {% if item.badge %}
                    <small class=\"label pull-right bg-{{ item.badgeColor }}\">{{ item.badge }}</small>
                {% endif %}
                {% if item.hasChildren %}<i class=\"fa fa-angle-left pull-right\"></i>{% endif %}
            </a>

            {% if item.hasChildren %}
                <ul class=\"treeview-menu\">
                    {% for child in item.children %}
                        {% if child.hasChildren %}
                            {{ macros.menu_item(child) }}
                        {% elseif child.route %}
                            <li class=\"{{ child.isActive ? 'active':'' }}\" id=\"{{ child.identifier }}\">
                                <a href=\"{{ '/' in child.route ? child.route : path(child.route, child.routeArgs) }}\">
                                    <i class=\"{{ child.icon|default('fa fa-circle-o') }}\"></i>
                                    {{ child.label }}
                                </a>
                            </li>
                        {% endif %}
                    {% endfor %}
                </ul>
            {% endif %}
        </li>
    {% else %}
        <li class=\"header\">
            {{ item.label }}
            {% if item.badge %}
                <small class=\"label pull-right bg-{{ item.badgeColor }}\">{{ item.badge }}</small>
            {% endif %}
        </li>
    {% endif %}
{% endmacro %}

{#
  the following code is based on phiamo/MopaBootstrapBundle
  https://github.com/phiamo/MopaBootstrapBundle/blob/88b104b3efd4c3c3bfff1df4525a53bc3596010b/Resources/views/flash.html.twig
#}
{% macro flash(type, message, close, use_raw, class, domain) %}
    <div class=\"alert{{ type ? ' alert-'~type : '' }} fade in {{ class|default('') }} {% if close|default(false) %}alert-dismissible{% endif %}\">
        {% if close|default(false) %}
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        {% endif %}
        {% if use_raw|default(false) %}
            {{ message|trans({}, domain|default('messages'))|raw }}
        {% else %}
            {{ message|trans({}, domain|default('messages')) }}
        {% endif %}
    </div>
{% endmacro %}

{% macro session_flash(close, use_raw, class, domain) %}
    {% import _self as flash_messages %}

    {% if app.session.flashbag.peekAll|length > 0 %}
        {% for type, messages in app.session.flashbag.all %}
            {% for message in messages %}
                {% if type == 'fos_user_success' %}
                    {% set type = 'success' %}
                    {% set domain = 'FOSUserBundle' %}
                {% endif %}
                {{ flash_messages.flash(type, message, close, use_raw, class, domain) }}
            {% endfor %}
        {% endfor %}
    {% endif %}
{% endmacro %}
", "AvanzuAdminThemeBundle:layout:macros.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\avanzu\\admin-theme-bundle/Resources/views/layout/macros.html.twig");
    }
}
