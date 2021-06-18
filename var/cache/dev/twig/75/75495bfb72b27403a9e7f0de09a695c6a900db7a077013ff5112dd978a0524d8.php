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
class __TwigTemplate_40ef1179ae2d5a8c8a6916941057a80a01056242e466ccb544c650ba994133e4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/section.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/section.html.twig"));

        // line 1
        echo "<!-- ======= Intro Section ======= -->
<div class=\"intro intro-carousel swiper-container position-relative\">

    <div class=\"swiper-wrapper\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 5, $this->source); })()));
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  157 => 78,  127 => 54,  100 => 31,  85 => 21,  81 => 20,  75 => 17,  71 => 16,  67 => 15,  54 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ======= Intro Section ======= -->
<div class=\"intro intro-carousel swiper-container position-relative\">

    <div class=\"swiper-wrapper\">
        {% for bien in properties %}
        <div class=\"swiper-slide carousel-item-a intro-item bg-image\" style=\"background-image: url({{ vich_uploader_asset(bien, 'thumbnailFile' ) | imagine_filter('medium')}})\">
            <div class=\"overlay overlay-a\"></div>
            <div class=\"intro-content display-table\">
                <div class=\"table-cell\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-8\">
                                <div class=\"intro-body\">
                                    <h5>les plus récents</h5>
                                    <p class=\"intro-title mb-3\">Ville de : {{ bien.city }}<br></p>
                                    <h1 class=\"intro-title mb-4 \">{{ bien.label }} <br>
                                        <span class=\"color-c\">{{ bien.superficie }} m²</span>
                                    </h1>
                                    <p class=\"intro-subtitle intro-price\">
                                        <a href=\"{{ path('bien.show', {id: bien.id, slug: bien.slug}) }}\">
                                            <span class=\"price-a\">Prix |{{ bien.formattedPrice}} FCFA</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% else %}
        <div class=\"swiper-slide carousel-item-a intro-item bg-image\" style=\"background-image: url({{ ('assets/images/2.jpg') }})\">
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
        <div class=\"swiper-slide carousel-item-a intro-item bg-image\" style=\"background-image: url({{ ('assets/images/1.jpg') }})\">
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
        {% endfor %}
    </div>
    <div class=\"swiper-pagination\"></div>
</div>
<!-- End Intro Section -->", "pages/section.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/pages/section.html.twig");
    }
}
