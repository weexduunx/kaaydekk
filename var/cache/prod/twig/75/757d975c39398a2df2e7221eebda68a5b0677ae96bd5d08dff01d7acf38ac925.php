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
class __TwigTemplate_f163c3252b9d256b918a60aa92403e1c9457ceaeb4d5138078a19072402d6081 extends Template
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
        // line 3
        $context["route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 3), "get", [0 => "_route"], "method", false, false, false, 3);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 23), "html", null, true);
        echo "</li>
                            <li>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 24), "email", [], "any", false, false, false, 24), "html", null, true);
        echo "</li>
                            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 25), "roles", [], "any", false, false, false, 25));
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
        echo (((0 === twig_compare(($context["route"] ?? null), "back_home"))) ? ("active") : (""));
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
        echo ((twig_in_filter(($context["route"] ?? null), [0 => "back_user_search", 1 => "back_user_create"])) ? ("active") : (""));
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
        return array (  127 => 47,  118 => 43,  111 => 39,  107 => 38,  100 => 36,  96 => 35,  87 => 28,  78 => 26,  74 => 25,  70 => 24,  66 => 23,  54 => 14,  46 => 9,  39 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/sidebar.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/bundles/EasyAdminBundle/sidebar.html.twig");
    }
}
