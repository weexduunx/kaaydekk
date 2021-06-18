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

/* @AdminLTE/Navbar/messages.html.twig */
class __TwigTemplate_8d73bfaea1cb988ecf9f80f0931212d607e1b176b1a509af22fdf371f5279768 extends Template
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
        $macros["macro"] = $this->macros["macro"] = $this->loadTemplate("@AdminLTE/Macros/default.html.twig", "@AdminLTE/Navbar/messages.html.twig", 1)->unwrap();
        // line 2
        if (( !array_key_exists("messages", $context) || array_key_exists("adminlte_direct_include", $context))) {
            // line 3
            echo "    ";
            $context["messages"] = null;
            // line 4
            echo "    ";
            $context["adminlte_messages"] = $this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\EventsExtension')->getMessages();
            // line 5
            echo "    ";
            if ( !(null === ($context["adminlte_messages"] ?? null))) {
                // line 6
                echo "        ";
                $context["messages"] = twig_get_attribute($this->env, $this->source, ($context["adminlte_messages"] ?? null), "messages", [], "any", false, false, false, 6);
                // line 7
                echo "        ";
                $context["total"] = twig_get_attribute($this->env, $this->source, ($context["adminlte_messages"] ?? null), "total", [], "any", false, false, false, 7);
                // line 8
                echo "    ";
            }
        }
        // line 10
        if ((array_key_exists("messages", $context) &&  !(null === ($context["messages"] ?? null)))) {
            // line 11
            echo "<li class=\"dropdown messages-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"far fa-envelope\"></i>
        <span class=\"label label-success\">";
            // line 14
            echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
            echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You have %count% messages", ["%count%" => ($context["total"] ?? null)], "AdminLTEBundle"), "html", null, true);
            echo "</li>
        <li>
            <ul class=\"menu\">
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 21
                echo "                    <li>
                        <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\RuntimeExtension')->getRouteByAlias("adminlte_message"), ["id" => twig_get_attribute($this->env, $this->source, $context["msg"], "identifier", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\">
                            <div class=\"pull-left\">
                                ";
                // line 24
                echo twig_call_macro($macros["macro"], "macro_avatar", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["msg"], "from", [], "any", false, false, false, 24), "avatar", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["msg"], "from", [], "any", false, false, false, 24), "username", [], "any", false, false, false, 24)], 24, $context, $this->getSourceContext());
                echo "
                            </div>
                            <h4>
                                ";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["msg"], "from", [], "any", false, false, false, 27), "username", [], "any", false, false, false, 27), "html", null, true);
                echo "
                                <small><i class=\"far fa-clock\"></i> ";
                // line 28
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "sentAt", [], "any", false, false, false, 28), "d.m.Y H:i"), "html", null, true);
                echo "</small>
                            </h4>
                            <p>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "subject", [], "any", false, false, false, 30), "html", null, true);
                echo "</p>
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "            </ul>
        </li>
        <li class=\"footer\"><a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\RuntimeExtension')->getRouteByAlias("adminlte_messages"));
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
        return "@AdminLTE/Navbar/messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 36,  116 => 34,  106 => 30,  101 => 28,  97 => 27,  91 => 24,  86 => 22,  83 => 21,  79 => 20,  73 => 17,  67 => 14,  62 => 11,  60 => 10,  56 => 8,  53 => 7,  50 => 6,  47 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/Navbar/messages.html.twig", "/home/ngts/Kaay-Dekk-Immo/vendor/kevinpapst/adminlte-bundle/Resources/views/Navbar/messages.html.twig");
    }
}
