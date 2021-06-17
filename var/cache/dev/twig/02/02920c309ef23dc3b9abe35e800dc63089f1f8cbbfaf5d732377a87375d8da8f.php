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
class __TwigTemplate_4e29117eadaeb5f2d88865819e113d0b97c6f598d05e2a4b355379d3c5ec9977 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/property.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/property.html.twig"));

        // line 1
        echo " <div class=\"card-box-a card-shadow\">
        <div class=\"img-box-a\">
            ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 3, $this->source); })()), "thumbnail", [], "any", false, false, false, 3)) {
            // line 4
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 4, $this->source); })()), "thumbnailFile"), "medium"), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 12, $this->source); })()), "label", [], "any", false, false, false, 12), "html", null, true);
        echo "
                            <br />";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 13, $this->source); })()), "city", [], "any", false, false, false, 13), "html", null, true);
        echo "</a>
                    </h2>
                </div>
                <div class=\"card-body-a\">
                    <div class=\"price-box d-flex\">
                        <span class=\"price-a\">Prix | ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 18, $this->source); })()), "formattedPrice", [], "any", false, false, false, 18), "html", null, true);
        echo "Fcfa</span>
                    </div>
                    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bien.show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "slug" => twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 20, $this->source); })()), "slug", [], "any", false, false, false, 20)]), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 28, $this->source); })()), "superficie", [], "any", false, false, false, 28), "html", null, true);
        echo " m<sup>2</sup></span>
                        </li>
                        <li>
                            <h4 class=\"card-info-title\">Pièces</h4>
                            <span>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 32, $this->source); })()), "rooms", [], "any", false, false, false, 32), "html", null, true);
        echo "</span>
                        </li>
                        <li>
                            <h4 class=\"card-info-title\">Chambre</h4>
                            <span>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 36, $this->source); })()), "bedrooms", [], "any", false, false, false, 36), "html", null, true);
        echo "</span>
                        </li>
                        <li>
                            <h4 class=\"card-info-title\">Type de bien</h4>
                            <span>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 40, $this->source); })()), "typeDeBien", [], "any", false, false, false, 40), "html", null, true);
        echo "</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  112 => 40,  105 => 36,  98 => 32,  91 => 28,  80 => 20,  75 => 18,  67 => 13,  63 => 12,  55 => 6,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <div class=\"card-box-a card-shadow\">
        <div class=\"img-box-a\">
            {% if bien.thumbnail %}
            <img src=\"{{ vich_uploader_asset(bien, 'thumbnailFile' ) | imagine_filter('medium')}}\" alt=\"\" class=\"img-a img-fluid\">
            {% endif %}

        </div>
        <div class=\"card-overlay\">
            <div class=\"card-overlay-a-content\">
                <div class=\"card-header-a\">
                    <h2 class=\"card-title-a\">
                        <a href=\"#\">{{ bien.label }}
                            <br />{{ bien.city }}</a>
                    </h2>
                </div>
                <div class=\"card-body-a\">
                    <div class=\"price-box d-flex\">
                        <span class=\"price-a\">Prix | {{ bien.formattedPrice }}Fcfa</span>
                    </div>
                    <a href=\"{{ path('bien.show', {id: bien.id, slug: bien.slug}) }}\" class=\"link-a\"  id=\"ville\">Clique ici pour voir
                        <span class=\"bi bi-chevron-right\"></span>
                    </a>
                </div>
                <div class=\"card-footer-a\">
                    <ul class=\"card-info d-flex justify-content-around\">
                        <li>
                            <h4 class=\"card-info-title\">Superficie</h4>
                            <span>{{ bien.superficie }} m<sup>2</sup></span>
                        </li>
                        <li>
                            <h4 class=\"card-info-title\">Pièces</h4>
                            <span>{{ bien.rooms }}</span>
                        </li>
                        <li>
                            <h4 class=\"card-info-title\">Chambre</h4>
                            <span>{{ bien.bedrooms }}</span>
                        </li>
                        <li>
                            <h4 class=\"card-info-title\">Type de bien</h4>
                            <span>{{ bien.typeDeBien }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



", "property/property.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/property/property.html.twig");
    }
}
