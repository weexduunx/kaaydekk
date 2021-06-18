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

/* @AdminLTE/Macros/menu.html.twig */
class __TwigTemplate_bbdb7d27fb8f9fdf82533e3adb652e63e2fe6dbdc384a1244163d5b619ac7efc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Macros/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Macros/menu.html.twig"));

        // line 36
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_menu_item($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "menu_item"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "menu_item"));

            // line 2
            echo "    ";
            $macros["menu"] = $this;
            // line 3
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 3, $this->source); })()), "route", [], "any", false, false, false, 3) || twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 3, $this->source); })()), "hasChildren", [], "any", false, false, false, 3))) {
                // line 4
                echo "        <li id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "identifier", [], "any", false, false, false, 4), "html", null, true);
                echo "\" class=\" ";
                echo ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "isActive", [], "any", false, false, false, 4)) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "hasChildren", [], "any", false, false, false, 4)) ? ("treeview") : (""));
                echo "\">
            <a href=\"";
                // line 5
                ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "hasChildren", [], "any", false, false, false, 5)) ? (print ("#")) : (print (twig_escape_filter($this->env, ((twig_in_filter("/", twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "route", [], "any", false, false, false, 5))) ? (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "route", [], "any", false, false, false, 5)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\RuntimeExtension')->getRouteByAlias(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "route", [], "any", false, false, false, 5)), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "routeArgs", [], "any", false, false, false, 5)))), "html", null, true))));
                echo "\">
                ";
                // line 6
                if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()), "icon", [], "any", false, false, false, 6)) {
                    echo " <i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()), "icon", [], "any", false, false, false, 6), "html", null, true);
                    echo "\"></i> ";
                }
                // line 7
                echo "                ";
                if ( !(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 7, $this->source); })()), "badge", [], "any", false, false, false, 7) === false)) {
                    // line 8
                    echo "                    <small class=\"label pull-right bg-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })()), "badgeColor", [], "any", false, false, false, 8), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })()), "badge", [], "any", false, false, false, 8), "html", null, true);
                    echo "</small>
                ";
                }
                // line 10
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 10, $this->source); })()), "hasChildren", [], "any", false, false, false, 10)) {
                    echo "<i class=\"fas fa-angle-left pull-right\"></i>";
                }
                // line 11
                echo "                <span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "label", [], "any", false, false, false, 11)), "html", null, true);
                echo "</span>
            </a>

            ";
                // line 14
                if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), "hasChildren", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "                <ul class=\"treeview-menu\">
                    ";
                    // line 16
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 16, $this->source); })()), "children", [], "any", false, false, false, 16));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 17
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "hasChildren", [], "any", false, false, false, 17)) {
                            // line 18
                            echo "                           ";
                            echo twig_call_macro($macros["menu"], "macro_menu_item", [$context["child"]], 18, $context, $this->getSourceContext());
                            echo "
                        ";
                        } else {
                            // line 20
                            echo "                            <li class=\"";
                            echo ((twig_get_attribute($this->env, $this->source, $context["child"], "isActive", [], "any", false, false, false, 20)) ? ("active") : (""));
                            echo "\" id=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "identifier", [], "any", false, false, false, 20), "html", null, true);
                            echo "\">
                                <a href=\"";
                            // line 21
                            echo twig_escape_filter($this->env, ((twig_in_filter("/", twig_get_attribute($this->env, $this->source, $context["child"], "route", [], "any", false, false, false, 21))) ? (twig_get_attribute($this->env, $this->source, $context["child"], "route", [], "any", false, false, false, 21)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\RuntimeExtension')->getRouteByAlias(twig_get_attribute($this->env, $this->source, $context["child"], "route", [], "any", false, false, false, 21)), twig_get_attribute($this->env, $this->source, $context["child"], "routeArgs", [], "any", false, false, false, 21)))), "html", null, true);
                            echo "\">
                                    ";
                            // line 22
                            echo twig_call_macro($macros["menu"], "macro_menu_item_content", [$context["child"], ""], 22, $context, $this->getSourceContext());
                            echo "
                                </a>
                            </li>
                        ";
                        }
                        // line 26
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    echo "                </ul>
            ";
                }
                // line 29
                echo "        </li>
    ";
            } else {
                // line 31
                echo "        <li id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 31, $this->source); })()), "identifier", [], "any", false, false, false, 31), "html", null, true);
                echo "\" class=\"header\">
            ";
                // line 32
                echo twig_call_macro($macros["menu"], "macro_menu_item_content", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 32, $this->source); })()), ""], 32, $context, $this->getSourceContext());
                echo "
        </li>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 37
    public function macro_menu_item_content($__item__ = null, $__defaultIcon__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "defaultIcon" => $__defaultIcon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "menu_item_content"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "menu_item_content"));

            // line 38
            echo "    <i class=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", true, true, false, 38)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 38), (isset($context["defaultIcon"]) || array_key_exists("defaultIcon", $context) ? $context["defaultIcon"] : (function () { throw new RuntimeError('Variable "defaultIcon" does not exist.', 38, $this->source); })()))) : ((isset($context["defaultIcon"]) || array_key_exists("defaultIcon", $context) ? $context["defaultIcon"] : (function () { throw new RuntimeError('Variable "defaultIcon" does not exist.', 38, $this->source); })()))), "html", null, true);
            echo "\"></i>
    <span>";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 39, $this->source); })()), "label", [], "any", false, false, false, 39)), "html", null, true);
            echo "</span>
    ";
            // line 40
            if ( !(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 40, $this->source); })()), "badge", [], "any", false, false, false, 40) === false)) {
                // line 41
                echo "        <small class=\"label pull-right bg-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 41, $this->source); })()), "badgeColor", [], "any", false, false, false, 41), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 41, $this->source); })()), "badge", [], "any", false, false, false, 41), "html", null, true);
                echo "</small>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@AdminLTE/Macros/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 41,  224 => 40,  220 => 39,  215 => 38,  195 => 37,  176 => 32,  171 => 31,  167 => 29,  163 => 27,  157 => 26,  150 => 22,  146 => 21,  139 => 20,  133 => 18,  130 => 17,  126 => 16,  123 => 15,  121 => 14,  114 => 11,  109 => 10,  101 => 8,  98 => 7,  92 => 6,  88 => 5,  79 => 4,  76 => 3,  73 => 2,  54 => 1,  43 => 36,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro menu_item(item) %}
    {% import _self as menu %}
    {% if item.route or item.hasChildren %}
        <li id=\"{{ item.identifier }}\" class=\" {{ item.isActive ? 'active' : '' }} {{ item.hasChildren? 'treeview' : '' }}\">
            <a href=\"{{ item.hasChildren ? '#': '/' in item.route ? item.route : path(item.route|route_alias, item.routeArgs) }}\">
                {% if item.icon %} <i class=\"{{ item.icon }}\"></i> {% endif %}
                {% if item.badge is not same as(false) %}
                    <small class=\"label pull-right bg-{{ item.badgeColor }}\">{{ item.badge }}</small>
                {% endif %}
                {% if item.hasChildren %}<i class=\"fas fa-angle-left pull-right\"></i>{% endif %}
                <span>{{ item.label|trans }}</span>
            </a>

            {% if item.hasChildren %}
                <ul class=\"treeview-menu\">
                    {% for child in item.children %}
                        {% if child.hasChildren %}
                           {{ menu.menu_item(child) }}
                        {% else %}
                            <li class=\"{{ child.isActive ? 'active':'' }}\" id=\"{{ child.identifier }}\">
                                <a href=\"{{ '/' in child.route ? child.route : path(child.route|route_alias, child.routeArgs) }}\">
                                    {{ menu.menu_item_content(child, '') }}
                                </a>
                            </li>
                        {% endif %}
                    {% endfor %}
                </ul>
            {% endif %}
        </li>
    {% else %}
        <li id=\"{{ item.identifier }}\" class=\"header\">
            {{ menu.menu_item_content(item, '') }}
        </li>
    {% endif %}
{% endmacro %}

{% macro menu_item_content(item, defaultIcon) %}
    <i class=\"{{ item.icon|default(defaultIcon) }}\"></i>
    <span>{{ item.label|trans }}</span>
    {% if item.badge is not same as(false) %}
        <small class=\"label pull-right bg-{{ item.badgeColor }}\">{{ item.badge }}</small>
    {% endif %}
{% endmacro %}
", "@AdminLTE/Macros/menu.html.twig", "/home/ngts/Kaay-Dekk-Immo/vendor/kevinpapst/adminlte-bundle/Resources/views/Macros/menu.html.twig");
    }
}
