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

/* @AdminLTE/Breadcrumb/breadcrumb.html.twig */
class __TwigTemplate_76dab028133ba5176ddb0c4a6a6b9443204b0dd1fe0b07402b55970a83d2309a extends Template
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
        if (( !array_key_exists("active", $context) || array_key_exists("adminlte_direct_include", $context))) {
            // line 2
            echo "    ";
            $context["active"] = $this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\EventsExtension')->getBreadcrumbs(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 2));
        }
        // line 4
        if ((array_key_exists("active", $context) &&  !(null === ($context["active"] ?? null)))) {
            // line 5
            echo "<ol class=\"breadcrumb\">
    <li>
        <a href=\"";
            // line 7
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\RuntimeExtension')->getRouteByAlias("adminlte_welcome"));
            echo "\">
            <i class=\"fas fa-tachometer-alt\"></i>
            ";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home", [], "AdminLTEBundle"), "html", null, true);
            echo "
        </a>
    </li>
    ";
            // line 12
            if (($context["active"] ?? null)) {
                // line 13
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["active"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 14
                    echo "            <li><a href=\"";
                    ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 14))) ? (print ("#")) : (print (twig_escape_filter($this->env, ((twig_in_filter("/", twig_get_attribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 14))) ? (twig_get_attribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 14)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\RuntimeExtension')->getRouteByAlias(twig_get_attribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 14)), twig_get_attribute($this->env, $this->source, $context["item"], "routeArgs", [], "any", false, false, false, 14)))), "html", null, true))));
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 14)), "html", null, true);
                    echo "</a></li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "    ";
            }
            // line 17
            echo "</ol>
";
        }
    }

    public function getTemplateName()
    {
        return "@AdminLTE/Breadcrumb/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 17,  78 => 16,  67 => 14,  62 => 13,  60 => 12,  54 => 9,  49 => 7,  45 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/Breadcrumb/breadcrumb.html.twig", "/home/ngts/Kaay-Dekk-Immo/vendor/kevinpapst/adminlte-bundle/Resources/views/Breadcrumb/breadcrumb.html.twig");
    }
}
