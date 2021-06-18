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

/* @AdminLTE/Navbar/notifications.html.twig */
class __TwigTemplate_d598c763334e3304a28909bc7d6d7d12d1f75af6743f7a066b51d37d54e26653 extends Template
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
        if (( !array_key_exists("notifications", $context) || array_key_exists("adminlte_direct_include", $context))) {
            // line 2
            echo "    ";
            $context["notifications"] = null;
            // line 3
            echo "    ";
            $context["adminlte_notifications"] = $this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\EventsExtension')->getNotifications();
            // line 4
            echo "    ";
            if ( !(null === ($context["adminlte_notifications"] ?? null))) {
                // line 5
                echo "        ";
                $context["notifications"] = twig_get_attribute($this->env, $this->source, ($context["adminlte_notifications"] ?? null), "notifications", [], "any", false, false, false, 5);
                // line 6
                echo "        ";
                $context["total"] = twig_get_attribute($this->env, $this->source, ($context["adminlte_notifications"] ?? null), "total", [], "any", false, false, false, 6);
                // line 7
                echo "    ";
            }
        }
        // line 9
        if ((array_key_exists("notifications", $context) &&  !(null === ($context["notifications"] ?? null)))) {
            // line 10
            echo "<li class=\"dropdown notifications-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"far fa-bell\"></i>
        <span class=\"label label-warning\">";
            // line 13
            echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
            echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You have %count% notifications", ["%count%" => ($context["total"] ?? null)], "AdminLTEBundle"), "html", null, true);
            echo "</li>
        <li>
            <ul class=\"menu\">
                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["notifications"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
                // line 20
                echo "                    <li>
                        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\RuntimeExtension')->getRouteByAlias("adminlte_notification"), ["id" => twig_get_attribute($this->env, $this->source, $context["notice"], "identifier", [], "any", false, false, false, 21)]), "html", null, true);
                echo "\">
                            <i class=\"";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notice"], "icon", [], "any", false, false, false, 22), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\RuntimeExtension')->getTextType(twig_get_attribute($this->env, $this->source, $context["notice"], "type", [], "any", false, false, false, 22)), "html", null, true);
                echo "\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notice"], "message", [], "any", false, false, false, 22), "html", null, true);
                echo "
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "            </ul>
        </li>
        <li class=\"footer\"><a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\RuntimeExtension')->getRouteByAlias("adminlte_notifications"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View all", [], "AdminLTEBundle"), "html", null, true);
            echo "</a></li>
    </ul>
</li>
";
        }
    }

    public function getTemplateName()
    {
        return "@AdminLTE/Navbar/notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 28,  102 => 26,  88 => 22,  84 => 21,  81 => 20,  77 => 19,  71 => 16,  65 => 13,  60 => 10,  58 => 9,  54 => 7,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/Navbar/notifications.html.twig", "/home/ngts/Kaay-Dekk-Immo/vendor/kevinpapst/adminlte-bundle/Resources/views/Navbar/notifications.html.twig");
    }
}
