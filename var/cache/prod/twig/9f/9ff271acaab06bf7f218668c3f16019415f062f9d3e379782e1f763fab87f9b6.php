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

/* pages/section.html.twig */
class __TwigTemplate_b9508231ba48d1546bf100e51b4552016cd7cf9b76324632933d122b8e766598 extends Template
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
        echo "<!-- ======= Intro Section ======= -->
<div class=\"intro intro-carousel swiper-container position-relative\">

    <div class=\"swiper-wrapper\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["properties"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 6
            echo "        <div class=\"swiper-slide carousel-item-a intro-item bg-image\" style=\"background-image: url(";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["bien"], "thumbnailFile"), "medium"), "html", null, true);
            echo ")\">
            <div class=\"overlay overlay-a\"></div>
            <div class=\"intro-content display-table\">
                <div class=\"table-cell\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-8\">
                                <div class=\"intro-body\">
                                    <h5>les plus récents</h5>
                                    <p class=\"intro-title mb-3\">Ville de : ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "city", [], "any", false, false, false, 15), "html", null, true);
            echo "<br></p>
                                    <h1 class=\"intro-title mb-4 \">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "label", [], "any", false, false, false, 16), "html", null, true);
            echo " <br>
                                        <span class=\"color-c\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "superficie", [], "any", false, false, false, 17), "html", null, true);
            echo " m²</span>
                                    </h1>
                                    <p class=\"intro-subtitle intro-price\">
                                        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bien.show", ["id" => twig_get_attribute($this->env, $this->source, $context["bien"], "id", [], "any", false, false, false, 20), "slug" => twig_get_attribute($this->env, $this->source, $context["bien"], "slug", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">
                                            <span class=\"price-a\">Prix |";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "formattedPrice", [], "any", false, false, false, 21), "html", null, true);
            echo " FCFA</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "        <div class=\"swiper-slide carousel-item-a intro-item bg-image\" style=\"background-image: url(";
            echo "assets/images/2.jpg";
            echo ")\">
            <div class=\"overlay overlay-a\"></div>
            <div class=\"intro-content display-table\">
                <div class=\"table-cell\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-8\">
                                <div class=\"intro-body\">
                                    <p class=\"intro-title mb-4\">
                                        <br>
                                    </p>
                                    <h1 class=\"intro-title mb-4\">
                                        <span class=\"color-b\"> </span>
                                        <br>
                                    </h1>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"swiper-slide carousel-item-a intro-item bg-image\" style=\"background-image: url(";
            // line 54
            echo "assets/images/1.jpg";
            echo ")\">
            <div class=\"overlay overlay-a\"></div>
            <div class=\"intro-content display-table\">
                <div class=\"table-cell\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-8\">
                                <div class=\"intro-body\">
                                    <p class=\"intro-title-top\">
                                        <br>
                                    </p>
                                    <h1 class=\"intro-title mb-4\">
                                        <span class=\"color-b\"></span>
                                        <br>
                                    </h1>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "    </div>
    <div class=\"swiper-pagination\"></div>
</div>
<!-- End Intro Section -->";
    }

    public function getTemplateName()
    {
        return "pages/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 78,  121 => 54,  94 => 31,  79 => 21,  75 => 20,  69 => 17,  65 => 16,  61 => 15,  48 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/section.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/pages/section.html.twig");
    }
}
