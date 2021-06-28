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
class __TwigTemplate_e01c53ddcdb7025ef2381279081d14db31c67dc0b7d5f5b2c8613b6c8431c359 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Breadcrumb/breadcrumb.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Breadcrumb/breadcrumb.html.twig"));

        // line 1
        if (( !array_key_exists("active", $context) || array_key_exists("adminlte_direct_include", $context))) {
            // line 2
            echo "    ";
            $context["active"] = $this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\EventsExtension')->getBreadcrumbs(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2));
        }
        // line 4
        if ((array_key_exists("active", $context) &&  !(null === (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 4, $this->source); })())))) {
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
            if ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 12, $this->source); })())) {
                // line 13
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 13, $this->source); })()));
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  87 => 17,  84 => 16,  73 => 14,  68 => 13,  66 => 12,  60 => 9,  55 => 7,  51 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if active is not defined or adminlte_direct_include is defined %}
    {% set active = adminlte_breadcrumbs(app.request) %}
{% endif %}
{% if active is defined and active is not null %}
<ol class=\"breadcrumb\">
    <li>
        <a href=\"{{ path('adminlte_welcome'|route_alias) }}\">
            <i class=\"fas fa-tachometer-alt\"></i>
            {{ 'Home'|trans({}, 'AdminLTEBundle') }}
        </a>
    </li>
    {% if active %}
        {% for item in active %}
            <li><a href=\"{{ item.route is empty ? '#' : '/' in item.route ? item.route : path(item.route|route_alias, item.routeArgs) }}\">{{ item.label|trans }}</a></li>
        {% endfor %}
    {% endif %}
</ol>
{% endif %}", "@AdminLTE/Breadcrumb/breadcrumb.html.twig", "/home/ngts/Kaay-Dekk-Immo/vendor/kevinpapst/adminlte-bundle/Resources/views/Breadcrumb/breadcrumb.html.twig");
    }
}
