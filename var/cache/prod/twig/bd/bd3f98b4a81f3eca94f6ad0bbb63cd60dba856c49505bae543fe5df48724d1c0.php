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

/* @AdminLTE/Widgets/box-widget.html.twig */
class __TwigTemplate_6fc66e3f34f64f0c6020d2f1c0f8387d3289641c7119e5afb448c202041a0274 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["button"] = $this->macros["button"] = $this->loadTemplate("@AdminLTE/Macros/buttons.html.twig", "@AdminLTE/Widgets/box-widget.html.twig", 1)->unwrap();
        // line 2
        if (        $this->hasBlock("box_before", $context, $blocks)) {
            $this->displayBlock("box_before", $context, $blocks);
        }
        // line 3
        echo "
";
        // line 4
        $context["_collapsed"] = ((array_key_exists("collapsed", $context)) ? (_twig_default_filter(($context["collapsed"] ?? null), false)) : (false));
        // line 5
        $context["_solid"] = ((array_key_exists("solid", $context)) ? (_twig_default_filter(($context["solid"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, false, false, 5), "solid", [], "any", false, false, false, 5))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, false, false, 5), "solid", [], "any", false, false, false, 5)));
        // line 6
        $context["_border"] = ((array_key_exists("border", $context)) ? (_twig_default_filter(($context["border"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, false, false, 6), "bordered", [], "any", false, false, false, 6))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, false, false, 6), "bordered", [], "any", false, false, false, 6)));
        // line 7
        $context["_footer"] = (((array_key_exists("use_footer", $context)) ? (_twig_default_filter(($context["use_footer"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, false, false, 7), "use_footer", [], "any", false, false, false, 7))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, false, false, 7), "use_footer", [], "any", false, false, false, 7))) ||         $this->hasBlock("box_footer", $context, $blocks));
        // line 8
        echo "
";
        // line 9
        if ( !array_key_exists("removable", $context)) {
            // line 10
            echo "    ";
            $context["removable"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, false, false, 10), "removable", [], "any", false, false, false, 10);
        }
        // line 12
        if ( !array_key_exists("collapsible", $context)) {
            // line 13
            echo "    ";
            $context["collapsible"] = (($context["_collapsed"] ?? null) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, false, false, 13), "collapsible", [], "any", false, false, false, 13));
        }
        // line 15
        echo "<div class=\"box box-";
        echo twig_escape_filter($this->env, ((array_key_exists("boxtype", $context)) ? (_twig_default_filter(($context["boxtype"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, false, false, 15), "type", [], "any", false, false, false, 15))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, false, false, 15), "type", [], "any", false, false, false, 15))), "html", null, true);
        echo ((($context["_solid"] ?? null)) ? (" box-solid") : (""));
        echo ((($context["_collapsed"] ?? null)) ? (" collapsed-box") : (""));
        echo "\"";
        if (        $this->hasBlock("box_attributes", $context, $blocks)) {
            echo " ";
            $this->displayBlock("box_attributes", $context, $blocks);
        }
        echo ">
    ";
        // line 16
        if (((        $this->hasBlock("box_title", $context, $blocks) || ($context["collapsible"] ?? null)) || ($context["removable"] ?? null))) {
            // line 17
            echo "    <div class=\"box-header";
            echo ((($context["_border"] ?? null)) ? (" with-border") : (""));
            echo "\">
        ";
            // line 18
            if (            $this->hasBlock("box_title", $context, $blocks)) {
                echo "<h3 class=\"box-title\">";
                $this->displayBlock("box_title", $context, $blocks);
                echo "</h3>";
            }
            // line 19
            echo "        <div class=\"box-tools pull-right\"";
            if (            $this->hasBlock("box_tools_attributes", $context, $blocks)) {
                echo " ";
                $this->displayBlock("box_tools_attributes", $context, $blocks);
            }
            echo ">
            ";
            // line 21
            echo "            ";
            if (            $this->hasBlock("box_tools", $context, $blocks)) {
                $this->displayBlock("box_tools", $context, $blocks);
            }
            // line 22
            echo "            ";
            if (($context["collapsible"] ?? null)) {
                // line 23
                echo "                ";
                echo twig_call_macro($macros["button"], "macro_action_toolbutton", [((                // line 24
($context["_collapsed"] ?? null)) ? ("fas fa-plus") : ("fas fa-minus")), "collapse", ((                // line 26
array_key_exists("collapsible_title", $context)) ? (_twig_default_filter(($context["collapsible_title"] ?? null), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true, false, 26), "collapsible_title", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true, false, 26), "collapsible_title", [], "any", false, false, false, 26))) : ("")), [], "AdminLTEBundle"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true, false, 26), "collapsible_title", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true, false, 26), "collapsible_title", [], "any", false, false, false, 26))) : ("")), [], "AdminLTEBundle")))], 23, $context, $this->getSourceContext());
                // line 27
                echo "
            ";
            }
            // line 29
            echo "
            ";
            // line 30
            if (($context["removable"] ?? null)) {
                // line 31
                echo "                ";
                echo twig_call_macro($macros["button"], "macro_action_toolbutton", ["fas fa-times", "remove", ((                // line 34
array_key_exists("removable_title", $context)) ? (_twig_default_filter(($context["removable_title"] ?? null), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true, false, 34), "removable_title", [], "any", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true, false, 34), "removable_title", [], "any", false, false, false, 34))) : ("")), [], "AdminLTEBundle"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true, false, 34), "removable_title", [], "any", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true, false, 34), "removable_title", [], "any", false, false, false, 34))) : ("")), [], "AdminLTEBundle")))], 31, $context, $this->getSourceContext());
                // line 35
                echo "
            ";
            }
            // line 37
            echo "        </div>
    </div>
    ";
        }
        // line 40
        echo "    <div class=\"box-body";
        if (        $this->hasBlock("box_body_class", $context, $blocks)) {
            echo " ";
            $this->displayBlock("box_body_class", $context, $blocks);
        }
        echo "\">";
        $this->displayBlock("box_body", $context, $blocks);
        echo "</div>
    ";
        // line 41
        if ((($context["_footer"] ?? null) &&         $this->hasBlock("box_footer", $context, $blocks))) {
            // line 42
            echo "        ";
            // line 46
            echo "        ";
            $context["boxFooter"] =             $this->renderBlock("box_footer", $context, $blocks);
            // line 47
            echo "        ";
            if ( !twig_test_empty(($context["boxFooter"] ?? null))) {
                // line 48
                echo "            <div class=\"box-footer\">";
                echo ($context["boxFooter"] ?? null);
                echo "</div>
        ";
            }
            // line 50
            echo "    ";
        }
        // line 51
        echo "</div>
";
        // line 52
        if (        $this->hasBlock("box_after", $context, $blocks)) {
            $this->displayBlock("box_after", $context, $blocks);
        }
    }

    public function getTemplateName()
    {
        return "@AdminLTE/Widgets/box-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 52,  166 => 51,  163 => 50,  157 => 48,  154 => 47,  151 => 46,  149 => 42,  147 => 41,  137 => 40,  132 => 37,  128 => 35,  126 => 34,  124 => 31,  122 => 30,  119 => 29,  115 => 27,  113 => 26,  112 => 24,  110 => 23,  107 => 22,  102 => 21,  94 => 19,  88 => 18,  83 => 17,  81 => 16,  69 => 15,  65 => 13,  63 => 12,  59 => 10,  57 => 9,  54 => 8,  52 => 7,  50 => 6,  48 => 5,  46 => 4,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/Widgets/box-widget.html.twig", "/home/ngts/Kaay-Dekk-Immo/vendor/kevinpapst/adminlte-bundle/Resources/views/Widgets/box-widget.html.twig");
    }
}
