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
class __TwigTemplate_c6b76d5469350d60e84492e81c1b57686db3b9bd2f30dd644c540988da97a9ab extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Kaay Dëkk Immo";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 30, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  346 => 213,  203 => 75,  189 => 66,  182 => 62,  175 => 58,  164 => 50,  159 => 48,  151 => 43,  147 => 42,  140 => 37,  134 => 35,  132 => 34,  127 => 31,  122 => 30,  109 => 20,  93 => 6,  91 => 5,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title 'Kaay Dëkk Immo' %}
{% block body %}
    <!-- ======= Debut Intro Section0 ======= -->
    {% include 'pages/section.html.twig'%}
    <!-- Fin Intro Section0 -->

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
                                <a href=\"{{ path('property.index') }}\">Toutes les propriétés
                                    <span class=\"bi bi-chevron-right\"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id=\"property-carousel\" class=\"swiper-container\">
                    <div class=\"swiper-wrapper\">
                        {% for bien in properties %}
                        <div class=\"carousel-item-b swiper-slide\">
                            <div class=\"card-box-a card-shadow\">
                                <div class=\"img-box-a\">
                                    {% if bien.thumbnail %}
                                    <img src=\"{{ vich_uploader_asset(bien, 'thumbnailFile' ) | imagine_filter('bien')}}\" alt=\"\" class=\"img-a img-fluid\">
                                     {% endif %}
                                </div>
                                <div class=\"card-overlay\">
                                    <div class=\"card-overlay-a-content\">
                                        <div class=\"card-header-a\">
                                            <h2 class=\"card-title-a\">
                                                <a href=\"#\">{{ bien.label }}
                                                    <br /><span style=\"font-weight: lighter; height: 1rem;\">{{ bien.city }}</span> </a>
                                            </h2>
                                        </div>
                                        <div class=\"card-body-a\">
                                            <div class=\"price-box d-flex\">
                                                <span class=\"price-a\">Prix | {{ bien.formattedPrice}} FCFA</span>
                                            </div>
                                            <a href=\"{{ path('bien.show', {id: bien.id, slug: bien.slug}) }}\" class=\"link-a\">Clique ici pour voir
                                                <span class=\"bi bi-chevron-right\"></span>
                                            </a>
                                        </div>
                                        <div class=\"card-footer-a\">
                                            <ul class=\"card-info d-flex justify-content-around\">
                                                <li>
                                                    <h4 class=\"card-info-title\">Superficie</h4>
                                                    <span>{{ bien.superficie }}m<sup>2</sup></span>
                                                </li>
                                                <li>
                                                    <h4 class=\"card-info-title\">Piéces</h4>
                                                    <span>{{ bien.rooms }}</span>
                                                </li>
                                                <li>
                                                    <h4 class=\"card-info-title\">Chambres</h4>
                                                    <span>{{ bien.bedrooms }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End carousel item -->
                        {% else %}
                        <div class=\"carousel-item-b swiper-slide\">
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
                        {% endfor %}
                    </div>
                </div>
                <div class=\"propery-carousel-pagination carousel-pagination\"></div>

            </div>
        </section>
        <!-- Fin Derniers Bien Section -->
    </main>
    <!-- Fin #main -->
{% endblock %}", "pages/home.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/pages/home.html.twig");
    }
}
