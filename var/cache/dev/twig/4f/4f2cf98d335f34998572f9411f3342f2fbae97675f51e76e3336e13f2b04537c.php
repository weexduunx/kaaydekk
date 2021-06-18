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

/* @EasyAdmin/sidebar.html.twig */
class __TwigTemplate_eeeb5d4e63567bd0502d0aa5cc9d7176751208cb7456ca9ffa51f50d30ca94d3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/sidebar.html.twig"));

        // line 3
        $context["route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "get", [0 => "_route"], "method", false, false, false, 3);
        // line 4
        echo "
<!-- Sidebar  -->
<nav id=\"sidebar\">
    <div class=\"sidebar-header\">
        <div class=\"logo-sidebar\">
            <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-white.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Logo sidebar\">
        </div>
        <br>
        <div class=\"row\">
            <div class=\"mx-auto\">
                <p class=\"text-center\"><small>";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now"), "html", null, true);
        echo "</small></p>
                <div class=\"row\">
                    <div class=\"col-4\">
                        <div class=\"icon-rounded text-center\">
                            <i class=\"fas fa-user fa-2x\"></i>
                        </div>
                    </div>
                    <div class=\"col-8\">
                        <ul class=\"list-unstyled\">
                            <li>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "html", null, true);
        echo "</li>
                            <li>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "email", [], "any", false, false, false, 24), "html", null, true);
        echo "</li>
                            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "roles", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 26
            echo "                                <li><small>";
            echo twig_escape_filter($this->env, $context["role"], "html", null, true);
            echo "</small></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class=\"list-unstyled components\">
        <li class=\"";
        // line 35
        echo ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 35, $this->source); })()) == "back_home")) ? ("active") : (""));
        echo "\">
            <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_home");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.home", [], "back_messages"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"";
        // line 38
        echo ((twig_in_filter((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 38, $this->source); })()), [0 => "back_user_search", 1 => "back_user_create"])) ? ("active") : (""));
        echo "\">
            <a href=\"#user_sub_menu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.user", [], "back_messages"), "html", null, true);
        echo "</a>
            <ul class=\"collapse list-unstyled\" id=\"user_sub_menu\">

                <li>
                    <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_user_search");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.user_search", [], "back_messages"), "html", null, true);
        echo "</a>
                </li>

                <li>
                    <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_user_create");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.user_create", [], "back_messages"), "html", null, true);
        echo "</a>
                </li>

            </ul>
        </li>
    </ul>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 47,  124 => 43,  117 => 39,  113 => 38,  106 => 36,  102 => 35,  93 => 28,  84 => 26,  80 => 25,  76 => 24,  72 => 23,  60 => 14,  52 => 9,  45 => 4,  43 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/back/block/_sidebar.html.twig #}
{% trans_default_domain 'back_messages' %}
{% set route = app.request.get('_route') %}

<!-- Sidebar  -->
<nav id=\"sidebar\">
    <div class=\"sidebar-header\">
        <div class=\"logo-sidebar\">
            <img src=\"{{ asset(\"build/images/logo-white.png\") }}\" class=\"img-fluid\" alt=\"Logo sidebar\">
        </div>
        <br>
        <div class=\"row\">
            <div class=\"mx-auto\">
                <p class=\"text-center\"><small>{{ \"now\"|format_date }}</small></p>
                <div class=\"row\">
                    <div class=\"col-4\">
                        <div class=\"icon-rounded text-center\">
                            <i class=\"fas fa-user fa-2x\"></i>
                        </div>
                    </div>
                    <div class=\"col-8\">
                        <ul class=\"list-unstyled\">
                            <li>{{ app.user }}</li>
                            <li>{{ app.user.email }}</li>
                            {% for role in app.user.roles %}
                                <li><small>{{ role }}</small></li>
                            {% endfor %}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class=\"list-unstyled components\">
        <li class=\"{{ route == 'back_home' ? 'active' }}\">
            <a href=\"{{ path('back_home') }}\">{{ 'sidebar.home'|trans }}</a>
        </li>
        <li class=\"{{ route in ['back_user_search', 'back_user_create'] ? 'active' }}\">
            <a href=\"#user_sub_menu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">{{ 'sidebar.user'|trans() }}</a>
            <ul class=\"collapse list-unstyled\" id=\"user_sub_menu\">

                <li>
                    <a href=\"{{ path('back_user_search') }}\">{{ 'sidebar.user_search'|trans() }}</a>
                </li>

                <li>
                    <a href=\"{{ path('back_user_create') }}\">{{ 'sidebar.user_create'|trans() }}</a>
                </li>

            </ul>
        </li>
    </ul>
</nav>", "@EasyAdmin/sidebar.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/bundles/EasyAdminBundle/sidebar.html.twig");
    }
}
