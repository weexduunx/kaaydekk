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

/* @AdminLTE/Partials/_control-sidebar.html.twig */
class __TwigTemplate_2c749f3eb4946f63f4a8e79b2af576a09c4aa460e5d5277bdc43e58cef8ea640 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Partials/_control-sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Partials/_control-sidebar.html.twig"));

        // line 1
        if ((twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "control_sidebar", [], "any", true, true, false, 1) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 1, $this->source); })()), "control_sidebar", [], "any", false, false, false, 1)))) {
            // line 2
            echo "<aside class=\"control-sidebar control-sidebar-dark\">
    <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 4, $this->source); })()), "control_sidebar", [], "any", false, false, false, 4));
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
            foreach ($context['_seq'] as $context["name"] => $context["tab"]) {
                // line 5
                echo "                <li";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 5)) {
                    echo " class=\"active\"";
                }
                echo "><a href=\"#control-sidebar-";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "-tab\" data-toggle=\"tab\"><i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "icon", [], "any", false, false, false, 5), "html", null, true);
                echo "\"></i></a></li>
            ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "    </ul>
    <div class=\"tab-content\">
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 9, $this->source); })()), "control_sidebar", [], "any", false, false, false, 9));
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
            foreach ($context['_seq'] as $context["name"] => $context["tab"]) {
                // line 10
                echo "                <div class=\"tab-pane ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 10)) {
                    echo "active";
                }
                echo "\" id=\"control-sidebar-";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "-tab\">
                    ";
                // line 11
                if (twig_get_attribute($this->env, $this->source, $context["tab"], "controller", [], "any", true, true, false, 11)) {
                    // line 12
                    echo "                        ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller(twig_get_attribute($this->env, $this->source, $context["tab"], "controller", [], "any", false, false, false, 12), ["originalRequest" => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12)]));
                    echo "
                    ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 13
$context["tab"], "template", [], "any", true, true, false, 13)) {
                    // line 14
                    echo "                        ";
                    $this->loadTemplate(twig_get_attribute($this->env, $this->source, $context["tab"], "template", [], "any", false, false, false, 14), "@AdminLTE/Partials/_control-sidebar.html.twig", 14)->display($context);
                    // line 15
                    echo "                    ";
                }
                // line 16
                echo "                </div>
            ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </div>
</aside>
<div class=\"control-sidebar-bg\"></div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@AdminLTE/Partials/_control-sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 18,  134 => 16,  131 => 15,  128 => 14,  126 => 13,  121 => 12,  119 => 11,  110 => 10,  93 => 9,  89 => 7,  66 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if admin_lte_context.control_sidebar is defined and admin_lte_context.control_sidebar is not empty %}
<aside class=\"control-sidebar control-sidebar-dark\">
    <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
            {% for name, tab in admin_lte_context.control_sidebar %}
                <li{% if loop.first %} class=\"active\"{% endif %}><a href=\"#control-sidebar-{{ name }}-tab\" data-toggle=\"tab\"><i class=\"{{ tab.icon }}\"></i></a></li>
            {% endfor %}
    </ul>
    <div class=\"tab-content\">
            {% for name, tab in admin_lte_context.control_sidebar %}
                <div class=\"tab-pane {% if loop.first %}active{% endif %}\" id=\"control-sidebar-{{ name }}-tab\">
                    {% if tab.controller is defined %}
                        {{ render(controller(tab.controller, {'originalRequest': app.request})) }}
                    {% elseif tab.template is defined %}
                        {% include tab.template %}
                    {% endif %}
                </div>
            {% endfor %}
    </div>
</aside>
<div class=\"control-sidebar-bg\"></div>
{% endif %}
", "@AdminLTE/Partials/_control-sidebar.html.twig", "/home/ngts/Kaay-Dekk-Immo/vendor/kevinpapst/adminlte-bundle/Resources/views/Partials/_control-sidebar.html.twig");
    }
}
