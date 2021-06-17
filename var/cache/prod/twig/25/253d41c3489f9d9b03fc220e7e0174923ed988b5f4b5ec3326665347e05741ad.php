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

/* @AdminLTE/Navbar/user.html.twig */
class __TwigTemplate_5c15f69ad66685c07f0f43b1b59da8deea64b1db771c2811faf869249b239e3e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'member_since' => [$this, 'block_member_since'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["macro"] = $this->macros["macro"] = $this->loadTemplate("@AdminLTE/Macros/default.html.twig", "@AdminLTE/Navbar/user.html.twig", 1)->unwrap();
        // line 2
        if (( !array_key_exists("user", $context) || array_key_exists("adminlte_direct_include", $context))) {
            // line 3
            echo "    ";
            $context["user"] = null;
            // line 4
            echo "    ";
            $context["adminlte_userdetails"] = $this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\EventsExtension')->getUserDetails();
            // line 5
            echo "    ";
            if ( !(null === ($context["adminlte_userdetails"] ?? null))) {
                // line 6
                echo "        ";
                $context["user"] = twig_get_attribute($this->env, $this->source, ($context["adminlte_userdetails"] ?? null), "user", [], "any", false, false, false, 6);
                // line 7
                echo "        ";
                $context["links"] = twig_get_attribute($this->env, $this->source, ($context["adminlte_userdetails"] ?? null), "links", [], "any", false, false, false, 7);
                // line 8
                echo "        ";
                $context["showProfileLink"] = twig_get_attribute($this->env, $this->source, ($context["adminlte_userdetails"] ?? null), "showProfileLink", [], "any", false, false, false, 8);
                // line 9
                echo "        ";
                $context["showLogoutLink"] = twig_get_attribute($this->env, $this->source, ($context["adminlte_userdetails"] ?? null), "showLogoutLink", [], "any", false, false, false, 9);
                // line 10
                echo "    ";
            }
        }
        // line 12
        if ((array_key_exists("user", $context) &&  !(null === ($context["user"] ?? null)))) {
            // line 13
            echo "<li class=\"dropdown user user-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        ";
            // line 15
            echo twig_call_macro($macros["macro"], "macro_avatar", [twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 15), "user-image"], 15, $context, $this->getSourceContext());
            echo "
        <span class=\"hidden-xs\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <!-- User image -->
        <li class=\"user-header\">
            ";
            // line 21
            echo twig_call_macro($macros["macro"], "macro_avatar", [twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 21), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 21)], 21, $context, $this->getSourceContext());
            echo "
            <p>
                ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 23), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "title", [], "any", false, false, false, 23), "html", null, true);
            echo "
                ";
            // line 24
            $this->displayBlock('member_since', $context, $blocks);
            // line 27
            echo "            </p>
        </li>
        ";
            // line 29
            if (($context["links"] ?? null)) {
                // line 30
                echo "            <!-- Menu Body -->
            <li class=\"user-body\">
                ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                    // line 33
                    echo "                    <div class=\"col-xs-4 text-center\">
                        <a href=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\RuntimeExtension')->getRouteByAlias(twig_get_attribute($this->env, $this->source, $context["link"], "path", [], "any", false, false, false, 34)), twig_get_attribute($this->env, $this->source, $context["link"], "parameters", [], "any", false, false, false, 34)), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, false, 34), "html", null, true);
                    echo "</a>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "            </li>
        ";
            }
            // line 39
            echo "        ";
            if ((($context["showLogoutLink"] ?? null) || ($context["showProfileLink"] ?? null))) {
                // line 40
                echo "            <!-- Menu Footer-->
            <li class=\"user-footer\">
                ";
                // line 42
                if (($context["showProfileLink"] ?? null)) {
                    // line 43
                    echo "                    <div class=\"pull-left\">
                        <a href=\"";
                    // line 44
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\RuntimeExtension')->getRouteByAlias("adminlte_profile"), ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "identifier", [], "any", false, false, false, 44)]), "html", null, true);
                    echo "\"
                           class=\"btn btn-default btn-flat\">";
                    // line 45
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Profile", [], "AdminLTEBundle"), "html", null, true);
                    echo "</a>
                    </div>
                ";
                }
                // line 48
                echo "                ";
                if (($context["showLogoutLink"] ?? null)) {
                    // line 49
                    echo "                    <div class=\"pull-right\">
                        <a href=\"";
                    // line 50
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath(), "html", null, true);
                    echo "\"
                           class=\"btn btn-default btn-flat\">";
                    // line 51
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign out", [], "AdminLTEBundle"), "html", null, true);
                    echo "</a>
                    </div>
                ";
                }
                // line 54
                echo "            </li>
        ";
            }
            // line 56
            echo "    </ul>
</li>
";
        }
    }

    // line 24
    public function block_member_since($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "                <small>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Member since %date%", ["%date%" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "memberSince", [], "any", false, false, false, 25), "m.Y")], "AdminLTEBundle"), "html", null, true);
        echo "</small>
                ";
    }

    public function getTemplateName()
    {
        return "@AdminLTE/Navbar/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 25,  179 => 24,  172 => 56,  168 => 54,  162 => 51,  158 => 50,  155 => 49,  152 => 48,  146 => 45,  142 => 44,  139 => 43,  137 => 42,  133 => 40,  130 => 39,  126 => 37,  115 => 34,  112 => 33,  108 => 32,  104 => 30,  102 => 29,  98 => 27,  96 => 24,  90 => 23,  85 => 21,  77 => 16,  73 => 15,  69 => 13,  67 => 12,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/Navbar/user.html.twig", "/home/ngts/Kaay-Dekk-Immo/vendor/kevinpapst/adminlte-bundle/Resources/views/Navbar/user.html.twig");
    }
}
