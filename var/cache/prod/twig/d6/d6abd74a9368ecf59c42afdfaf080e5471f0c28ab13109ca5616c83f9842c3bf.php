<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @EasyAdmin/menu.html.twig */
class __TwigTemplate_43c3ff1cc5341dd5c0f5e8e79babcf3ee66565e4cf4e87a27b02d1e2fedf5eab extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main_menu_before' => [$this, 'block_main_menu_before'],
            'main_menu' => [$this, 'block_main_menu'],
            'menu_item' => [$this, 'block_menu_item'],
            'menu_subitem' => [$this, 'block_menu_subitem'],
            'main_menu_after' => [$this, 'block_main_menu_after'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('main_menu_before', $context, $blocks);
        // line 17
        echo "

<ul class=\"in\" id=\"sidebarnav\" data-widget=\"tree\">
    ";
        // line 20
        $this->displayBlock('main_menu', $context, $blocks);
        // line 43
        echo "</ul>
";
        // line 44
        $this->displayBlock('main_menu_after', $context, $blocks);
    }

    // line 16
    public function block_main_menu_before($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 20
    public function block_main_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "mainMenu", [], "any", false, false, false, 21), "items", [], "any", false, false, false, 21));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 22
            echo "            ";
            $this->displayBlock('menu_item', $context, $blocks);
            // line 41
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    ";
    }

    // line 22
    public function block_menu_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "                <li class=\"sidebar-item ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "isMenuSection", [], "any", false, false, false, 23)) ? ("header") : (""));
        echo " ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "hasSubItems", [], "any", false, false, false, 23)) ? ("treeview") : (""));
        echo "
                  ";
        // line 24
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "mainMenu", [], "any", false, false, false, 24), "isSelected", [0 => ($context["menuItem"] ?? null)], "method", false, false, false, 24)) ? ("selected") : (""));
        echo " ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "mainMenu", [], "any", false, false, false, 24), "isExpanded", [0 => ($context["menuItem"] ?? null)], "method", false, false, false, 24)) ? ("selected submenu-selected") : (""));
        echo "\">
                    ";
        // line 25
        echo twig_call_macro($macros["_self"], "macro_render_menu_item", [($context["menuItem"] ?? null)], 25, $context, $this->getSourceContext());
        echo "

                    ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "hasSubItems", [], "any", false, false, false, 27)) {
            // line 28
            echo "                        <ul class=\"treeview-menu collapse first-level base-level-line in\" >
                            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "subItems", [], "any", false, false, false, 29));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["menuSubItem"]) {
                // line 30
                echo "                                ";
                $this->displayBlock('menu_subitem', $context, $blocks);
                // line 36
                echo "                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuSubItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                        </ul>
                    ";
        }
        // line 39
        echo "                </li>
            ";
    }

    // line 30
    public function block_menu_subitem($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                                    <li class=\"sidebar-item";
        echo ((twig_get_attribute($this->env, $this->source, ($context["menuSubItem"] ?? null), "isMenuSection", [], "any", false, false, false, 31)) ? ("header") : (""));
        echo "
                                      ";
        // line 32
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "mainMenu", [], "any", false, false, false, 32), "isSelected", [0 => ($context["menuSubItem"] ?? null)], "method", false, false, false, 32)) ? ("active") : (""));
        echo "\">
                                        <span >";
        // line 33
        echo twig_call_macro($macros["_self"], "macro_render_menu_item", [($context["menuSubItem"] ?? null)], 33, $context, $this->getSourceContext());
        echo "</span>
                                    </li>
                                ";
    }

    // line 44
    public function block_main_menu_after($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 2
    public function macro_render_menu_item($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 3
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isMenuSection", [], "any", false, false, false, 3)) {
                // line 4
                echo "        ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 4))) {
                    echo "<i class=\"menu-icon fa-fw ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 4), "html", null, true);
                    echo "\"></i>";
                }
                // line 5
                echo "        <span class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "cssClass", [], "any", false, false, false, 5), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 5), "html", null, true);
                echo "</span>
    ";
            } else {
                // line 7
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkUrl", [], "any", false, false, false, 7), "html", null, true);
                echo "\" class=\"sidebar-link ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "cssClass", [], "any", false, false, false, 7), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkTarget", [], "any", false, false, false, 7), "html", null, true);
                echo "\"
           rel=\"";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkRel", [], "any", false, false, false, 8), "html", null, true);
                echo "\" >
            ";
                // line 9
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 9))) {
                    echo "<i class=\"menu-icon fa-fw ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 9), "html", null, true);
                    echo "\"></i>";
                }
                // line 10
                echo "            <span>";
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 10);
                echo "</span>
            ";
                // line 11
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasSubItems", [], "any", false, false, false, 11)) {
                    echo "<i class=\"fa fa-fw fa-angle-right \"></i>";
                }
                // line 12
                echo "        </a>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 12,  262 => 11,  257 => 10,  251 => 9,  247 => 8,  238 => 7,  230 => 5,  223 => 4,  220 => 3,  207 => 2,  201 => 44,  194 => 33,  190 => 32,  185 => 31,  181 => 30,  176 => 39,  172 => 37,  158 => 36,  155 => 30,  138 => 29,  135 => 28,  133 => 27,  128 => 25,  122 => 24,  115 => 23,  111 => 22,  107 => 42,  93 => 41,  90 => 22,  72 => 21,  68 => 20,  62 => 16,  58 => 44,  55 => 43,  53 => 20,  48 => 17,  46 => 16,  43 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/menu.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/bundles/EasyAdminBundle/menu.html.twig");
    }
}
