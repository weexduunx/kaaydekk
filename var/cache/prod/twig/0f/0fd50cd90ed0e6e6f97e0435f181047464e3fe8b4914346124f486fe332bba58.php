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

/* @AdminLTE/Sidebar/user-panel.html.twig */
class __TwigTemplate_7947ba81a44f4a15e484bc64186a4b98f23a25e02dc20a47704746c7a924bc50 extends Template
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
        $macros["macro"] = $this->macros["macro"] = $this->loadTemplate("@AdminLTE/Macros/default.html.twig", "@AdminLTE/Sidebar/user-panel.html.twig", 1)->unwrap();
        // line 2
        if (( !array_key_exists("user", $context) || array_key_exists("adminlte_direct_include", $context))) {
            // line 3
            echo "    ";
            $context["user"] = $this->env->getRuntime('KevinPapst\AdminLTEBundle\Twig\EventsExtension')->getSidebarUser();
        }
        // line 5
        if ((array_key_exists("user", $context) &&  !(null === ($context["user"] ?? null)))) {
            // line 6
            echo "<div class=\"user-panel\">
    <div class=\"pull-left image\">
    ";
            // line 8
            echo twig_call_macro($macros["macro"], "macro_avatar", [twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 8)], 8, $context, $this->getSourceContext());
            echo "
    </div>
    <div class=\"pull-left info\">
        <p>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 11), "html", null, true);
            echo "</p>

        <a href=\"#\"><i class=\"fas fa-circle text-success\"></i> ";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Online", [], "AdminLTEBundle"), "html", null, true);
            echo "</a>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@AdminLTE/Sidebar/user-panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  57 => 11,  51 => 8,  47 => 6,  45 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/Sidebar/user-panel.html.twig", "/home/ngts/Kaay-Dekk-Immo/vendor/kevinpapst/adminlte-bundle/Resources/views/Sidebar/user-panel.html.twig");
    }
}
