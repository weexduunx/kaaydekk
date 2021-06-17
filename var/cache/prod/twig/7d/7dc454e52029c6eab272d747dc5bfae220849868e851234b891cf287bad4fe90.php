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

/* @AdminLTE/layout/form-theme-security.html.twig */
class __TwigTemplate_02caf070646c87b7a55c80645b52a35ee483faa0bd938e3c323c4aae2d7f69da extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'email_widget' => [$this, 'block_email_widget'],
            'password_widget' => [$this, 'block_password_widget'],
            'form_label' => [$this, 'block_form_label'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@AdminLTE/layout/form-theme-base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@AdminLTE/layout/form-theme-base.html.twig", "@AdminLTE/layout/form-theme-security.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if (((array_key_exists("label", $context) &&  !(null === ($context["label"] ?? null))) &&  !(($context["label"] ?? null) === false))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), [], ($context["translation_domain"] ?? null))]);
            // line 6
            echo "    ";
        }
        // line 7
        echo "    ";
        $context["label"] = false;
        // line 8
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "icon", [], "any", true, true, false, 8)) {
            // line 9
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["icon" => "user"]);
            // line 10
            echo "    ";
        }
        // line 11
        echo "    ";
        if ((array_key_exists("type", $context) && (0 === twig_compare(($context["type"] ?? null), "hidden")))) {
            // line 12
            $this->displayParentBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 14
            echo "        <div class=\"form-group has-feedback\">";
            // line 15
            $this->displayParentBlock("form_widget_simple", $context, $blocks);
            // line 16
            echo "<span class=\"glyphicon glyphicon-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "icon", [], "any", false, false, false, 16), "html", null, true);
            echo " form-control-feedback\"></span>
        </div>
    ";
        }
    }

    // line 21
    public function block_email_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["icon" => "envelope"]);
        // line 23
        $this->displayParentBlock("email_widget", $context, $blocks);
    }

    // line 26
    public function block_password_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["icon" => "lock"]);
        // line 28
        $this->displayParentBlock("password_widget", $context, $blocks);
    }

    // line 31
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@AdminLTE/layout/form-theme-security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 31,  108 => 28,  106 => 27,  102 => 26,  98 => 23,  96 => 22,  92 => 21,  83 => 16,  81 => 15,  79 => 14,  76 => 12,  73 => 11,  70 => 10,  67 => 9,  64 => 8,  61 => 7,  58 => 6,  55 => 5,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/layout/form-theme-security.html.twig", "/home/ngts/Kaay-Dekk-Immo/vendor/kevinpapst/adminlte-bundle/Resources/views/layout/form-theme-security.html.twig");
    }
}
