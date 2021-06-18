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

/* @AdminLTE/Widgets/infobox-widget.html.twig */
class __TwigTemplate_770b2c0f9b6771045278898c63e2fa2349c9e6aa8974332cb755527fcdb54c4a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Widgets/infobox-widget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Widgets/infobox-widget.html.twig"));

        // line 1
        if (        $this->hasBlock("box_before", $context, $blocks)) {
            $this->displayBlock("box_before", $context, $blocks);
        }
        // line 2
        echo "<div class=\"info-box";
        if (array_key_exists("solid", $context)) {
            echo " bg-";
            echo twig_escape_filter($this->env, (isset($context["solid"]) || array_key_exists("solid", $context) ? $context["solid"] : (function () { throw new RuntimeError('Variable "solid" does not exist.', 2, $this->source); })()), "html", null, true);
        }
        echo "\">
    <span class=\"info-box-icon";
        // line 3
        if (array_key_exists("color", $context)) {
            echo " bg-";
            echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 3, $this->source); })()), "html", null, true);
        }
        echo "\"><i class=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 3, $this->source); })()), "info-circle")) : ("info-circle")), "html", null, true);
        echo "\"></i></span>
    <div class=\"info-box-content\">
        <span class=\"info-box-text\">
            ";
        // line 6
        $this->displayBlock("box_text", $context, $blocks);
        echo "
        </span>
        <span class=\"info-box-number\">
            ";
        // line 9
        if (        $this->hasBlock("box_number", $context, $blocks)) {
            // line 10
            echo "                ";
            $this->displayBlock("box_number", $context, $blocks);
            echo "
            ";
        }
        // line 12
        echo "        </span>
        <!-- The progress section is optional -->
        ";
        // line 14
        if (array_key_exists("progress", $context)) {
            // line 15
            echo "        <div class=\"progress\">
            <div class=\"progress-bar\" style=\"width: ";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "%\"></div>
        </div>
        ";
        }
        // line 19
        echo "        ";
        if ((twig_length_filter($this->env, ((array_key_exists("progress", $context)) ? (_twig_default_filter((isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 19, $this->source); })()),         $this->renderBlock("progress_description", $context, $blocks))) : (        $this->renderBlock("progress_description", $context, $blocks)))) > 0)) {
            // line 20
            echo "    <span class=\"progress-description\">
      ";
            // line 21
            $this->displayBlock("progress_description", $context, $blocks);
            echo "
    </span>
        ";
        }
        // line 24
        echo "    </div><!-- /.info-box-content -->
</div><!-- /.info-box -->
";
        // line 26
        if (        $this->hasBlock("box_after", $context, $blocks)) {
            $this->displayBlock("box_after", $context, $blocks);
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@AdminLTE/Widgets/infobox-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 26,  107 => 24,  101 => 21,  98 => 20,  95 => 19,  89 => 16,  86 => 15,  84 => 14,  80 => 12,  74 => 10,  72 => 9,  66 => 6,  55 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if block('box_before') is defined %}{{ block('box_before') }}{% endif %}
<div class=\"info-box{% if solid is defined %} bg-{{ solid }}{% endif %}\">
    <span class=\"info-box-icon{% if color is defined %} bg-{{ color }}{% endif %}\"><i class=\"{{ icon|default('info-circle') }}\"></i></span>
    <div class=\"info-box-content\">
        <span class=\"info-box-text\">
            {{ block('box_text') }}
        </span>
        <span class=\"info-box-number\">
            {% if block('box_number') is defined %}
                {{ block('box_number') }}
            {% endif %}
        </span>
        <!-- The progress section is optional -->
        {% if progress is defined %}
        <div class=\"progress\">
            <div class=\"progress-bar\" style=\"width: {{ progress }}%\"></div>
        </div>
        {% endif %}
        {% if progress|default(block('progress_description'))|length > 0 %}
    <span class=\"progress-description\">
      {{ block('progress_description') }}
    </span>
        {% endif %}
    </div><!-- /.info-box-content -->
</div><!-- /.info-box -->
{% if block('box_after') is defined %}{{ block('box_after') }}{% endif %}
", "@AdminLTE/Widgets/infobox-widget.html.twig", "/home/ngts/Kaay-Dekk-Immo/vendor/kevinpapst/adminlte-bundle/Resources/views/Widgets/infobox-widget.html.twig");
    }
}
