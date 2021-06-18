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

/* @AdminLTE/Sidebar/menu.html.twig */
class __TwigTemplate_c4e3ef8690c79131c4c16679822d3998c1c7941b12e4bfe0b607db2f5b22f01a extends Template
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
        $macros["__internal_e09c9db3c15bddeaf1bae6c4e0d4e2fd24edb2c9641d8d98cd9c2f84132e410b"] = $this->macros["__internal_e09c9db3c15bddeaf1bae6c4e0d4e2fd24edb2c9641d8d98cd9c2f84132e410b"] = $this->loadTemplate("@AdminLTE/Macros/menu.html.twig", "@AdminLTE/Sidebar/menu.html.twig", 1)->unwrap();
        // line 2
        if (( !array_key_exists("menu", $context) || array_key_exists("adminlte_direct_include", $context))) {
            // line 3
            echo "    ";
            $context["menu"] = $this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\EventsExtension')->getMenu(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 3));
        }
        // line 5
        if ((array_key_exists("menu", $context) &&  !(null === ($context["menu"] ?? null)))) {
            // line 6
            echo "<ul class=\"sidebar-menu\" data-widget=\"tree\">
    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                echo "        ";
                echo twig_call_macro($macros["__internal_e09c9db3c15bddeaf1bae6c4e0d4e2fd24edb2c9641d8d98cd9c2f84132e410b"], "macro_menu_item", [$context["item"]], 8, $context, $this->getSourceContext());
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "@AdminLTE/Sidebar/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  54 => 8,  50 => 7,  47 => 6,  45 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/Sidebar/menu.html.twig", "/home/ngts/Kaay-Dekk-Immo/vendor/kevinpapst/adminlte-bundle/Resources/views/Sidebar/menu.html.twig");
    }
}
