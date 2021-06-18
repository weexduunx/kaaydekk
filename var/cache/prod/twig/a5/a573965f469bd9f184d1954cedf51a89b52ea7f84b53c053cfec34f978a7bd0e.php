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

/* property/property.html.twig */
class __TwigTemplate_7cf7ad150b04443e6cd840af1139dba3403f5d1b4d2bb3e5210494dbc8102f72 extends Template
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
        echo " <div class=\"card-box-a card-shadow\">
        <div class=\"img-box-a\">
            ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "thumbnail", [], "any", false, false, false, 3)) {
            // line 4
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(($context["bien"] ?? null), "thumbnailFile"), "medium"), "html", null, true);
            echo "\" alt=\"\" class=\"img-a img-fluid\">
            ";
        }
        // line 6
        echo "
        </div>
        <div class=\"card-overlay\">
            <div class=\"card-overlay-a-content\">
                <div class=\"card-header-a\">
                    <h2 class=\"card-title-a\">
                        <a href=\"#\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "label", [], "any", false, false, false, 12), "html", null, true);
        echo "
                            <br />";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "city", [], "any", false, false, false, 13), "html", null, true);
        echo "</a>
                    </h2>
                </div>
                <div class=\"card-body-a\">
                    <div class=\"price-box d-flex\">
                        <span class=\"price-a\">Prix | ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "formattedPrice", [], "any", false, false, false, 18), "html", null, true);
        echo "Fcfa</span>
                    </div>
                    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bien.show", ["id" => twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "id", [], "any", false, false, false, 20), "slug" => twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "slug", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\" class=\"link-a\"  id=\"ville\">Clique ici pour voir
                        <span class=\"bi bi-chevron-right\"></span>
                    </a>
                </div>
                <div class=\"card-footer-a\">
                    <ul class=\"card-info d-flex justify-content-around\">
                        <li>
                            <h4 class=\"card-info-title\">Superficie</h4>
                            <span>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "superficie", [], "any", false, false, false, 28), "html", null, true);
        echo " m<sup>2</sup></span>
                        </li>
                        <li>
                            <h4 class=\"card-info-title\">Pièces</h4>
                            <span>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "rooms", [], "any", false, false, false, 32), "html", null, true);
        echo "</span>
                        </li>
                        <li>
                            <h4 class=\"card-info-title\">Chambre</h4>
                            <span>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "bedrooms", [], "any", false, false, false, 36), "html", null, true);
        echo "</span>
                        </li>
                        <li>
                            <h4 class=\"card-info-title\">Type de bien</h4>
                            <span>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "typeDeBien", [], "any", false, false, false, 40), "html", null, true);
        echo "</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



";
    }

    public function getTemplateName()
    {
        return "property/property.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 40,  99 => 36,  92 => 32,  85 => 28,  74 => 20,  69 => 18,  61 => 13,  57 => 12,  49 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "property/property.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/property/property.html.twig");
    }
}
