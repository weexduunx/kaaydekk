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

/* @EasyAdmin/page/content.html.twig */
class __TwigTemplate_11df097480e36c4bd31385c428aad4e5c0066f4a1e07dc3e6de4705d8e47069f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_class' => [$this, 'block_body_class'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'page_title' => [$this, 'block_page_title'],
            'page_actions_wrapper' => [$this, 'block_page_actions_wrapper'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'page_content' => [$this, 'block_page_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 2), "@EasyAdmin/page/content.html.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["__internal_4a5e651a80b8cb81fcb144595ee263fd075c6ba4794bd84c4f6630a7914fc3c3"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 3), "translationDomain", [], "any", false, false, false, 3);
        // line 2
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "page-content page-content-with-padding";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $context["has_page_title"] = (        $this->hasBlock("page_title", $context, $blocks) &&  !twig_test_empty(twig_trim_filter(        $this->renderBlock("page_title", $context, $blocks))));
        // line 9
        echo "    ";
        $context["has_page_actions"] = (        $this->hasBlock("page_actions", $context, $blocks) &&  !twig_test_empty(twig_trim_filter(        $this->renderBlock("page_actions", $context, $blocks))));
        // line 10
        echo "    ";
        $context["has_page_footer"] = (        $this->hasBlock("page_footer", $context, $blocks) &&  !twig_test_empty(twig_trim_filter(        $this->renderBlock("page_footer", $context, $blocks))));
        // line 11
        echo "
    <div class=\"content\">
        ";
        // line 13
        $this->displayBlock('content_header_wrapper', $context, $blocks);
        // line 34
        echo "

            ";
        // line 36
        $this->displayBlock('main', $context, $blocks);
        // line 50
        echo "            

    </div>
";
    }

    // line 13
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "            ";
        if ((($context["has_page_title"] ?? null) || ($context["has_page_actions"] ?? null))) {
            // line 15
            echo "                <section class=\"content-header\">
                    ";
            // line 16
            $this->displayBlock('content_header', $context, $blocks);
            // line 31
            echo "                </section>
            ";
        }
        // line 33
        echo "        ";
    }

    // line 16
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                        <div class=\"d-flex flex-row justify-content-between align-content-center w-100\">
                            <div class=\"content-header-title\">
                                ";
        // line 19
        if (($context["has_page_title"] ?? null)) {
            // line 20
            echo "                                    <h1 class=\"title\">
                                        ";
            // line 21
            $this->displayBlock('page_title', $context, $blocks);
            // line 22
            echo "                                    </h1>
                                ";
        }
        // line 24
        echo "                            </div>

                            ";
        // line 26
        $this->displayBlock('page_actions_wrapper', $context, $blocks);
        // line 29
        echo "                        </div>
                    ";
    }

    // line 21
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 26
    public function block_page_actions_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "                                <div class=\"page-actions\">";
        $this->displayBlock('page_actions', $context, $blocks);
        echo "</div>
                            ";
    }

    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 36
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "        <section id=\"main\">
                <div class=\"content-panel\">
                    <div class=\"content-panel-body without-header ";
        // line 39
        echo (( !($context["has_page_footer"] ?? null)) ? ("without-footer") : (""));
        echo "\">
                        ";
        // line 40
        $this->displayBlock('page_content', $context, $blocks);
        // line 41
        echo "                    </div>

                    ";
        // line 43
        if (($context["has_page_footer"] ?? null)) {
            // line 44
            echo "                        <section class=\"content-panel-footer without-padding\">
                            ";
            // line 45
            $this->displayBlock("page_footer", $context, $blocks);
            echo "
                        </section>
                    ";
        }
        // line 48
        echo "                </div>
        </section>
            ";
    }

    // line 40
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/page/content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 40,  196 => 48,  190 => 45,  187 => 44,  185 => 43,  181 => 41,  179 => 40,  175 => 39,  171 => 37,  167 => 36,  155 => 27,  151 => 26,  145 => 21,  140 => 29,  138 => 26,  134 => 24,  130 => 22,  128 => 21,  125 => 20,  123 => 19,  119 => 17,  115 => 16,  111 => 33,  107 => 31,  105 => 16,  102 => 15,  99 => 14,  95 => 13,  88 => 50,  86 => 36,  82 => 34,  80 => 13,  76 => 11,  73 => 10,  70 => 9,  67 => 8,  63 => 7,  56 => 5,  52 => 2,  50 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/page/content.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/bundles/EasyAdminBundle/page/content.html.twig");
    }
}
