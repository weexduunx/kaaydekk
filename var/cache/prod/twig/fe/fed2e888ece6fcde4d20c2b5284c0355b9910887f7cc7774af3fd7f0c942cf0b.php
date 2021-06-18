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

/* @AdminLTE/Partials/_menu.html.twig */
class __TwigTemplate_8f7db23cf36624408f48c5d96ded376aeb3b85b9382da9daaeb92805eb73601e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'label' => [$this, 'block_label'],
            'list' => [$this, 'block_list'],
            'spanElement' => [$this, 'block_spanElement'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@AdminLTE/Partials/_menu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttribute", [0 => "icon"], "method", false, false, false, 4)) {
            echo "<i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttribute", [0 => "icon"], "method", false, false, false, 4), "html", null, true);
            echo "\"></i>";
        }
        // line 5
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttribute", [0 => "iconOnly"], "method", false, false, false, 5)) {
            // line 6
            echo "        <span>";
            if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "allow_safe_labels", [], "any", false, false, false, 6) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getExtra", [0 => "safe_label", 1 => false], "method", false, false, false, 6))) {
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 6));
            } else {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 6)), "html", null, true);
            }
            echo "</span>
    ";
        }
        // line 8
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttribute", [0 => "data-image"], "method", false, false, false, 8)) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttribute", [0 => "data-image"], "method", false, false, false, 8), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
            echo "\" class=\"menu-thumbnail\"/>";
        }
        // line 9
        echo "    
    ";
        // line 10
        $macros["selfMacros"] = $this;
        // line 11
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasChildren", [], "any", false, false, false, 11) &&  !(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "depth", [], "any", false, false, false, 11) === 0)) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayChildren", [], "any", false, false, false, 11))) {
            // line 12
            echo "        <span class=\"pull-right-container\">
            ";
            // line 13
            echo twig_call_macro($macros["selfMacros"], "macro_badges", [($context["item"] ?? null)], 13, $context, $this->getSourceContext());
            echo "
            <i class=\"fas fa-angle-left pull-right\"></i>
        </span>
    ";
        } else {
            // line 17
            echo "        ";
            echo twig_call_macro($macros["selfMacros"], "macro_badges", [($context["item"] ?? null)], 17, $context, $this->getSourceContext());
            echo "
    ";
        }
    }

    // line 36
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasChildren", [], "any", false, false, false, 37) &&  !(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "depth", [], "any", false, false, false, 37) === 0)) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayChildren", [], "any", false, false, false, 37))) {
            // line 38
            echo "        ";
            $macros["macros"] = $this->loadTemplate("knp_menu.html.twig", "@AdminLTE/Partials/_menu.html.twig", 38)->unwrap();
            // line 39
            echo "
        ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, ($context["matcher"] ?? null), "isAncestor", [0 => ($context["item"] ?? null)], "method", false, false, false, 40)) {
                // line 41
                $context["listAttributes"] = twig_array_merge(($context["listAttributes"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["listAttributes"] ?? null), "class", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["listAttributes"] ?? null), "class", [], "any", false, false, false, 41), "")) : ("")) . " in"))]);
            }
            // line 43
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isRoot", [], "any", false, false, false, 43)) {
                // line 44
                $context["listAttributes"] = twig_array_merge(($context["listAttributes"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["listAttributes"] ?? null), "class", [], "any", true, true, false, 44)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["listAttributes"] ?? null), "class", [], "any", false, false, false, 44), "")) : ("")) . " treeview-menu"))]);
            }
            // line 45
            echo " 
        <ul";
            // line 46
            echo twig_call_macro($macros["macros"], "macro_attributes", [($context["listAttributes"] ?? null)], 46, $context, $this->getSourceContext());
            echo ">
            ";
            // line 47
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
    }

    // line 60
    public function block_spanElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "    ";
        $macros["macros"] = $this->loadTemplate("knp_menu.html.twig", "@AdminLTE/Partials/_menu.html.twig", 61)->unwrap();
        // line 62
        echo "    ";
        if (preg_match("/(^|s+)header(s+|\$)/", twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "class"], "method", false, false, false, 62))) {
            // line 63
            echo "        ";
            $this->displayBlock("label", $context, $blocks);
            echo "
    ";
        } else {
            // line 65
            echo "        <a";
            echo twig_call_macro($macros["macros"], "macro_attributes", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttributes", [], "any", false, false, false, 65)], 65, $context, $this->getSourceContext());
            echo ">
            ";
            // line 66
            $this->displayBlock("label", $context, $blocks);
            echo "
        </a>
    ";
        }
    }

    // line 21
    public function macro_badges($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 22
            echo "    ";
            $macros["selfMacros"] = $this;
            // line 23
            echo "    ";
            if ( !(null === twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getExtra", [0 => "badge"], "method", false, false, false, 23))) {
                // line 24
                echo "        ";
                echo twig_call_macro($macros["selfMacros"], "macro_badge", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getExtra", [0 => "badge"], "method", false, false, false, 24)], 24, $context, $this->getSourceContext());
                echo "
    ";
            } elseif ( !(null === twig_get_attribute($this->env, $this->source,             // line 25
($context["item"] ?? null), "getExtra", [0 => "badges"], "method", false, false, false, 25))) {
                // line 26
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getExtra", [0 => "badges"], "method", false, false, false, 26));
                foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                    // line 27
                    echo "            ";
                    echo twig_call_macro($macros["selfMacros"], "macro_badge", [$context["badge"]], 27, $context, $this->getSourceContext());
                    echo "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 32
    public function macro_badge($__badge__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "badge" => $__badge__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 33
            echo "    <small class=\"label pull-right bg-";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["badge"] ?? null), "color", [], "any", true, true, false, 33)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["badge"] ?? null), "color", [], "any", false, false, false, 33), "green")) : ("green")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["badge"] ?? null), "value", [], "any", false, false, false, 33), "html", null, true);
            echo "</small>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 52
    public function macro_attributes($__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 53
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 54
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 55
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@AdminLTE/Partials/_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 55,  270 => 54,  265 => 53,  252 => 52,  238 => 33,  225 => 32,  215 => 29,  206 => 27,  201 => 26,  199 => 25,  194 => 24,  191 => 23,  188 => 22,  175 => 21,  167 => 66,  162 => 65,  156 => 63,  153 => 62,  150 => 61,  146 => 60,  138 => 47,  134 => 46,  131 => 45,  128 => 44,  125 => 43,  122 => 41,  120 => 40,  117 => 39,  114 => 38,  111 => 37,  107 => 36,  99 => 17,  92 => 13,  89 => 12,  86 => 11,  84 => 10,  81 => 9,  72 => 8,  62 => 6,  59 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/Partials/_menu.html.twig", "/home/ngts/Kaay-Dekk-Immo/vendor/kevinpapst/adminlte-bundle/Resources/views/Partials/_menu.html.twig");
    }
}
