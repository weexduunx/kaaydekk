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

/* @AdminLTE/Navbar/tasks.html.twig */
class __TwigTemplate_31cf5db38cb25dd3829eff53f46e6f46cf51071956f06e75dada28662873885b extends Template
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
        if (( !array_key_exists("tasks", $context) || array_key_exists("adminlte_direct_include", $context))) {
            // line 2
            echo "    ";
            $context["tasks"] = null;
            // line 3
            echo "    ";
            $context["adminlte_tasks"] = $this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\EventsExtension')->getTasks();
            // line 4
            echo "    ";
            if ( !(null === ($context["adminlte_tasks"] ?? null))) {
                // line 5
                echo "        ";
                $context["tasks"] = twig_get_attribute($this->env, $this->source, ($context["adminlte_tasks"] ?? null), "tasks", [], "any", false, false, false, 5);
                // line 6
                echo "        ";
                $context["total"] = twig_get_attribute($this->env, $this->source, ($context["adminlte_tasks"] ?? null), "total", [], "any", false, false, false, 6);
                // line 7
                echo "    ";
            }
        }
        // line 9
        if ((array_key_exists("tasks", $context) &&  !(null === ($context["tasks"] ?? null)))) {
            // line 10
            echo "<li class=\"dropdown tasks-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"far fa-flag\"></i>
        <span class=\"label label-danger\">";
            // line 13
            echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
            echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You have %count% tasks", ["%count%" => ($context["total"] ?? null)], "AdminLTEBundle"), "html", null, true);
            echo "</li>
        <li>
            <ul class=\"menu\">
                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 20
                echo "                    <li>
                        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\RuntimeExtension')->getRouteByAlias("adminlte_task"), ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "identifier", [], "any", false, false, false, 21)]), "html", null, true);
                echo "\">
                            <h3>
                                ";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "title", [], "any", false, false, false, 23), "html", null, true);
                echo "
                                <small class=\"pull-right\">";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "progress", [], "any", false, false, false, 24), "html", null, true);
                echo "%</small>
                            </h3>
                            <div class=\"progress xs\">
                                <div class=\"progress-bar progress-bar-";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "color", [], "any", false, false, false, 27), "html", null, true);
                echo "\"
                                     style=\"width: ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "progress", [], "any", false, false, false, 28), "html", null, true);
                echo "%\"
                                     role=\"progressbar\"
                                     aria-valuenow=\"";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "progress", [], "any", false, false, false, 30), "html", null, true);
                echo "\"
                                     aria-valuemin=\"0\"
                                     aria-valuemax=\"100\">
                                    <span class=\"sr-only\">";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%progress%% Complete", ["%progress%" => twig_get_attribute($this->env, $this->source, $context["task"], "progress", [], "any", false, false, false, 33)], "AdminLTEBundle"), "html", null, true);
                echo "</span>
                                </div>
                            </div>
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "            </ul>
        <li class=\"footer\">
            <a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\RuntimeExtension')->getRouteByAlias("adminlte_tasks"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View all", [], "AdminLTEBundle"), "html", null, true);
            echo "</a>
        </li>
    </ul>
</li>
";
        }
    }

    public function getTemplateName()
    {
        return "@AdminLTE/Navbar/tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 41,  126 => 39,  114 => 33,  108 => 30,  103 => 28,  99 => 27,  93 => 24,  89 => 23,  84 => 21,  81 => 20,  77 => 19,  71 => 16,  65 => 13,  60 => 10,  58 => 9,  54 => 7,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/Navbar/tasks.html.twig", "/home/ngts/Kaay-Dekk-Immo/vendor/kevinpapst/adminlte-bundle/Resources/views/Navbar/tasks.html.twig");
    }
}
