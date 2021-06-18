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

/* pages/home.html.twig */
class __TwigTemplate_5d0cf0e1a276ed06a4dd34feaa74363a2c65b1db59f12b390b85cb8fc7bd6a3b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Kaay Dëkk Immo";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <!-- ======= Debut Intro Section0 ======= -->
    ";
        // line 5
        $this->loadTemplate("pages/section.html.twig", "pages/home.html.twig", 5)->display($context);
        // line 6
        echo "    <!-- Fin Intro Section0 -->

    <!-- Debut #main -->
    <main id=\"main\">
        <!-- ======= Debut Derniers Biens Section ======= -->
        <section class=\"section-property section-t8\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"title-wrap d-flex justify-content-between\">
                            <div class=\"title-box\">
                                <h2 class=\"title-a\">Dernières Propriétés</h2>
                            </div>
                            <div class=\"title-link\">
                                <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("property.index");
        echo "\">Toutes les propriétés
                                    <span class=\"bi bi-chevron-right\"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id=\"property-carousel\" class=\"swiper-container\">
                    <div class=\"swiper-wrapper\">
                        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["properties"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 31
            echo "                        <div class=\"carousel-item-b swiper-slide\">
                            <div class=\"card-box-a card-shadow\">
                                <div class=\"img-box-a\">
                                    ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, $context["bien"], "thumbnail", [], "any", false, false, false, 34)) {
                // line 35
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["bien"], "thumbnailFile"), "bien"), "html", null, true);
                echo "\" alt=\"\" class=\"img-a img-fluid\">
                                     ";
            }
            // line 37
            echo "                                </div>
                                <div class=\"card-overlay\">
                                    <div class=\"card-overlay-a-content\">
                                        <div class=\"card-header-a\">
                                            <h2 class=\"card-title-a\">
                                                <a href=\"#\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "label", [], "any", false, false, false, 42), "html", null, true);
            echo "
                                                    <br /><span style=\"font-weight: lighter; height: 1rem;\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "city", [], "any", false, false, false, 43), "html", null, true);
            echo "</span> </a>
                                            </h2>
                                        </div>
                                        <div class=\"card-body-a\">
                                            <div class=\"price-box d-flex\">
                                                <span class=\"price-a\">Prix | ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "formattedPrice", [], "any", false, false, false, 48), "html", null, true);
            echo " FCFA</span>
                                            </div>
                                            <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bien.show", ["id" => twig_get_attribute($this->env, $this->source, $context["bien"], "id", [], "any", false, false, false, 50), "slug" => twig_get_attribute($this->env, $this->source, $context["bien"], "slug", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" class=\"link-a\">Clique ici pour voir
                                                <span class=\"bi bi-chevron-right\"></span>
                                            </a>
                                        </div>
                                        <div class=\"card-footer-a\">
                                            <ul class=\"card-info d-flex justify-content-around\">
                                                <li>
                                                    <h4 class=\"card-info-title\">Superficie</h4>
                                                    <span>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "superficie", [], "any", false, false, false, 58), "html", null, true);
            echo "m<sup>2</sup></span>
                                                </li>
                                                <li>
                                                    <h4 class=\"card-info-title\">Piéces</h4>
                                                    <span>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "rooms", [], "any", false, false, false, 62), "html", null, true);
            echo "</span>
                                                </li>
                                                <li>
                                                    <h4 class=\"card-info-title\">Chambres</h4>
                                                    <span>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "bedrooms", [], "any", false, false, false, 66), "html", null, true);
            echo "</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End carousel item -->
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 75
            echo "                        <div class=\"carousel-item-b swiper-slide\">
                            <div class=\"card-box-a card-shadow\">
                                <div class=\"img-box-a\">
                                    <img src=\"assets/img/property-3.jpg\" alt=\"\" class=\"img-a img-fluid\">
                                </div>
                                <div class=\"card-overlay\">
                                    <div class=\"card-overlay-a-content\">
                                        <div class=\"card-header-a\">
                                            <h2 class=\"card-title-a\">
                                                <a href=\"property-single.html\">
                                                    <br /> </a>
                                            </h2>
                                        </div>
                                        <div class=\"card-body-a\">
                                            <div class=\"price-box d-flex\">
                                                <span class=\"price-a\"></span>
                                            </div>
                                            <a href=\"property-single.html\" class=\"link-a\">
                                                <span class=\"bi bi-chevron-right\"></span>
                                            </a>
                                        </div>
                                        <div class=\"card-footer-a\">
                                            <ul class=\"card-info d-flex justify-content-around\">
                                                <li>
                                                    <h4 class=\"card-info-title\"></h4>
                                                    <span><sup></sup></span>
                                                </li>
                                                <li>
                                                    <h4 class=\"card-info-title\"></h4>
                                                    <span></span>
                                                </li>
                                                <li>
                                                    <h4 class=\"card-info-title\"></h4>
                                                    <span></span>
                                                </li>
                                                <li>
                                                    <h4 class=\"card-info-title\"></h4>
                                                    <span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End carousel item -->

                        <div class=\"carousel-item-b swiper-slide\">
                            <div class=\"card-box-a card-shadow\">
                                <div class=\"img-box-a\">
                                    <img src=\"assets/img/property-7.jpg\" alt=\"\" class=\"img-a img-fluid\">
                                </div>
                                <div class=\"card-overlay\">
                                    <div class=\"card-overlay-a-content\">
                                        <div class=\"card-header-a\">
                                            <h2 class=\"card-title-a\">
                                                <a href=\"property-single.html\">
                                                    <br /></a>
                                            </h2>
                                        </div>
                                        <div class=\"card-body-a\">
                                            <div class=\"price-box d-flex\">
                                                <span class=\"price-a\"></span>
                                            </div>
                                            <a href=\"property-single.html\" class=\"link-a\">
                                                <span class=\"bi bi-chevron-right\"></span>
                                            </a>
                                        </div>
                                        <div class=\"card-footer-a\">
                                            <ul class=\"card-info d-flex justify-content-around\">
                                                <li>
                                                    <h4 class=\"card-info-title\"></h4>
                                                    <span><sup></sup></span>
                                                </li>
                                                <li>
                                                    <h4 class=\"card-info-title\"></h4>
                                                    <span></span>
                                                </li>
                                                <li>
                                                    <h4 class=\"card-info-title\"></h4>
                                                    <span></span>
                                                </li>
                                                <li>
                                                    <h4 class=\"card-info-title\"></h4>
                                                    <span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End carousel item -->

                        <div class=\"carousel-item-b swiper-slide\">
                            <div class=\"card-box-a card-shadow\">
                                <div class=\"img-box-a\">
                                    <img src=\"assets/img/property-10.jpg\" alt=\"\" class=\"img-a img-fluid\">
                                </div>
                                <div class=\"card-overlay\">
                                    <div class=\"card-overlay-a-content\">
                                        <div class=\"card-header-a\">
                                            <h2 class=\"card-title-a\">
                                                <a href=\"property-single.html\">
                                                    <br /> </a>
                                            </h2>
                                        </div>
                                        <div class=\"card-body-a\">
                                            <div class=\"price-box d-flex\">
                                                <span class=\"price-a\"></span>
                                            </div>
                                            <a href=\"property-single.html\" class=\"link-a\">
                                                <span class=\"bi bi-chevron-right\"></span>
                                            </a>
                                        </div>
                                        <div class=\"card-footer-a\">
                                            <ul class=\"card-info d-flex justify-content-around\">
                                                <li>
                                                    <h4 class=\"card-info-title\"></h4>
                                                    <span><sup></sup></span>
                                                </li>
                                                <li>
                                                    <h4 class=\"card-info-title\"></h4>
                                                    <span></span>
                                                </li>
                                                <li>
                                                    <h4 class=\"card-info-title\"></h4>
                                                    <span></span>
                                                </li>
                                                <li>
                                                    <h4 class=\"card-info-title\"></h4>
                                                    <span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Fin carousel item -->
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "                    </div>
                </div>
                <div class=\"propery-carousel-pagination carousel-pagination\"></div>

            </div>
        </section>
        <!-- Fin Derniers Bien Section -->
    </main>
    <!-- Fin #main -->
";
    }

    public function getTemplateName()
    {
        return "pages/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 213,  173 => 75,  159 => 66,  152 => 62,  145 => 58,  134 => 50,  129 => 48,  121 => 43,  117 => 42,  110 => 37,  104 => 35,  102 => 34,  97 => 31,  92 => 30,  79 => 20,  63 => 6,  61 => 5,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/home.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/pages/home.html.twig");
    }
}
