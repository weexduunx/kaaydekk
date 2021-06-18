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

/* property/show.html.twig */
class __TwigTemplate_fbe388011655276fe7a1399349e6fddcd04e606ff12fe38db6972f2207756c97 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "property/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 3, $this->source); })()), "label", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<main id=\"main\">
    <section class=\"intro-single\">
       <div class=\"container\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "            <div class=\"shadow p-3 mb-5  rounded alert alert-success\">
               ";
            // line 10
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "vars", [], "any", false, false, false, 13), "valid", [], "any", false, false, false, 13)) {
            // line 14
            echo "                <div class=\"shadow p-3 mb-5  rounded alert alert-danger\">
                    Veuillez entrer correctement les informations
                </div>
            ";
        }
        // line 18
        echo "           <div class=\"row\">
               <div class=\"col-md-12 col-lg-8\">
                   <div class=\"title-single-box\">
                       <h1 class=\"title-single\">Plus d'infos sur la propriété</h1>
                       <span class=\"color-text-a\">Détails de la propriété</span>
                   </div>
               </div>
               <div class=\"col-md-12 col-lg-4\">
                   <nav aria-label=\"breadcrumb\" class=\"breadcrumb-box d-flex justify-content-lg-end\">
                       <ol class=\"breadcrumb\">
                           <li class=\"breadcrumb-item\">
                               <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
                           </li>
                           <li class=\"breadcrumb-item\">
                               <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("property.index");
        echo "\">Grille des propriétés</a>
                           </li>
                           <li class=\"breadcrumb-item active\" aria-current=\"page\">
                               Détails de la propriété
                           </li>
                       </ol>
                   </nav>
               </div>
           </div>
            <div class=\"row\">
                <div class=\"col-md-8\">
                    ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 43, $this->source); })()), "thumbnail", [], "any", false, false, false, 43)) {
            // line 44
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 44, $this->source); })()), "thumbnailFile"), "medium"), "html", null, true);
            echo "\"   alt=\"card-img-top\" style=\"width: 100%;height: auto;\">
                    ";
        } else {
            // line 46
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("/images/bien/kadi.jpg", "medium"), "html", null, true);
            echo "\"  alt=\"\">
                    ";
        }
        // line 48
        echo "                    <div class=\"col-md-12 mt-4\">
                        <h4 class=\"bi- bi-map\"> Position sur la carte</h4>
                        <div  id=\"maCarte\"> </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <h1>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 55, $this->source); })()), "label", [], "any", false, false, false, 55), "html", null, true);
        echo "</h1>
                    <h2>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 56, $this->source); })()), "rooms", [], "any", false, false, false, 56), "html", null, true);
        echo " pieces - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 56, $this->source); })()), "superficie", [], "any", false, false, false, 56), "html", null, true);
        echo " m²</h2>
                    <div class=\"text-primary\" style=\"font-size: 3rem;font-weight:bold;\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 57, $this->source); })()), "formattedPrice", [], "any", false, false, false, 57), "html", null, true);
        echo " FCFA</div>
                    <div id=\"contactForm\" class=\"mt-4\">
                         ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'form_start');
        echo "
                        <form class=\"row\">
                            <div class=\"col form-control-plaintext\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "firstname", [], "any", false, false, false, 61), 'row');
        echo "</div>
                            <div class=\"col form-control-plaintext\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "lastname", [], "any", false, false, false, 62), 'row');
        echo "</div>
                          <div class=\"row\">
                            <div class=\"col\">";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "phone", [], "any", false, false, false, 64), 'row');
        echo "</div>
                            <div class=\"col\">";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "email", [], "any", false, false, false, 65), 'row');
        echo "</div>
                          </div>
                          ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'rest');
        echo "
                            <div class=\"form-group mt-4\">
                                <button class=\"btn btn-primary\">Contactez Nous</button>
                            </div>
                          ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'form_end');
        echo "
                        </form>
                    </div>
              </div>
        </div>
    </div>
    </section><!-- End Intro Single-->

    <section class=\"\">
    <div class=\"container \">
            <p>
                ";
        // line 82
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 82, $this->source); })()), "description", [], "any", false, false, false, 82), "html", null, true));
        echo "
            </p>
          <div class=\"row\">
            <div class=\"col-md-5\">
                <h2>Caratéristiques</h2>
                <table class=\"table table-striped\">
                    <tr>
                        <td>Surface habitable</td>
                        <td>";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 90, $this->source); })()), "superficie", [], "any", false, false, false, 90), "html", null, true);
        echo " m²</td>
                    </tr>
                    <tr>
                        <td>Piéces</td>
                        <td>";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 94, $this->source); })()), "rooms", [], "any", false, false, false, 94), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 98, $this->source); })()), "bedrooms", [], "any", false, false, false, 98), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Type de bien</td>
                        <td>";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 102, $this->source); })()), "typeDeBien", [], "any", false, false, false, 102), "html", null, true);
        echo "</td>
                    </tr>
                </table>
            </div>
            <div class=\"col-md-3\">
                <h2>Spécifité</h2>
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">possibilité d'acquisition au comptant</li>
                    <li class=\"list-group-item\">En location Vente</li>
                    <li class=\"list-group-item\">En Location Simple</li>
                </ul>
            </div>
              </div>
        </div>
    </section><!-- End Section-->

</main><!-- End #main -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "property/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 102,  258 => 98,  251 => 94,  244 => 90,  233 => 82,  219 => 71,  212 => 67,  207 => 65,  203 => 64,  198 => 62,  194 => 61,  189 => 59,  184 => 57,  178 => 56,  174 => 55,  165 => 48,  159 => 46,  153 => 44,  151 => 43,  137 => 32,  131 => 29,  118 => 18,  112 => 14,  109 => 13,  100 => 10,  97 => 9,  93 => 8,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title bien.label%}
{% block body %}
<main id=\"main\">
    <section class=\"intro-single\">
       <div class=\"container\">
            {% for message in app.flashes('success') %}
            <div class=\"shadow p-3 mb-5  rounded alert alert-success\">
               {{ message}}
            </div>
            {% endfor %}
            {% if not form.vars.valid %}
                <div class=\"shadow p-3 mb-5  rounded alert alert-danger\">
                    Veuillez entrer correctement les informations
                </div>
            {% endif %}
           <div class=\"row\">
               <div class=\"col-md-12 col-lg-8\">
                   <div class=\"title-single-box\">
                       <h1 class=\"title-single\">Plus d'infos sur la propriété</h1>
                       <span class=\"color-text-a\">Détails de la propriété</span>
                   </div>
               </div>
               <div class=\"col-md-12 col-lg-4\">
                   <nav aria-label=\"breadcrumb\" class=\"breadcrumb-box d-flex justify-content-lg-end\">
                       <ol class=\"breadcrumb\">
                           <li class=\"breadcrumb-item\">
                               <a href=\"{{ path('home') }}\">Accueil</a>
                           </li>
                           <li class=\"breadcrumb-item\">
                               <a href=\"{{ path('property.index') }}\">Grille des propriétés</a>
                           </li>
                           <li class=\"breadcrumb-item active\" aria-current=\"page\">
                               Détails de la propriété
                           </li>
                       </ol>
                   </nav>
               </div>
           </div>
            <div class=\"row\">
                <div class=\"col-md-8\">
                    {% if bien.thumbnail %}
                        <img src=\"{{ vich_uploader_asset(bien, 'thumbnailFile' ) | imagine_filter('medium')}}\"   alt=\"card-img-top\" style=\"width: 100%;height: auto;\">
                    {% else %}
                        <img src=\"{{ '/images/bien/kadi.jpg' | imagine_filter('medium')}}\"  alt=\"\">
                    {% endif %}
                    <div class=\"col-md-12 mt-4\">
                        <h4 class=\"bi- bi-map\"> Position sur la carte</h4>
                        <div  id=\"maCarte\"> </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <h1>{{ bien.label }}</h1>
                    <h2>{{ bien.rooms }} pieces - {{ bien.superficie }} m²</h2>
                    <div class=\"text-primary\" style=\"font-size: 3rem;font-weight:bold;\">{{ bien.formattedPrice }} FCFA</div>
                    <div id=\"contactForm\" class=\"mt-4\">
                         {{ form_start(form) }}
                        <form class=\"row\">
                            <div class=\"col form-control-plaintext\">{{ form_row(form.firstname) }}</div>
                            <div class=\"col form-control-plaintext\">{{ form_row(form.lastname) }}</div>
                          <div class=\"row\">
                            <div class=\"col\">{{ form_row(form.phone) }}</div>
                            <div class=\"col\">{{ form_row(form.email) }}</div>
                          </div>
                          {{ form_rest(form) }}
                            <div class=\"form-group mt-4\">
                                <button class=\"btn btn-primary\">Contactez Nous</button>
                            </div>
                          {{ form_end(form) }}
                        </form>
                    </div>
              </div>
        </div>
    </div>
    </section><!-- End Intro Single-->

    <section class=\"\">
    <div class=\"container \">
            <p>
                {{ bien.description|nl2br }}
            </p>
          <div class=\"row\">
            <div class=\"col-md-5\">
                <h2>Caratéristiques</h2>
                <table class=\"table table-striped\">
                    <tr>
                        <td>Surface habitable</td>
                        <td>{{ bien.superficie }} m²</td>
                    </tr>
                    <tr>
                        <td>Piéces</td>
                        <td>{{ bien.rooms }}</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>{{ bien.bedrooms }}</td>
                    </tr>
                    <tr>
                        <td>Type de bien</td>
                        <td>{{ bien.typeDeBien }}</td>
                    </tr>
                </table>
            </div>
            <div class=\"col-md-3\">
                <h2>Spécifité</h2>
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">possibilité d'acquisition au comptant</li>
                    <li class=\"list-group-item\">En location Vente</li>
                    <li class=\"list-group-item\">En Location Simple</li>
                </ul>
            </div>
              </div>
        </div>
    </section><!-- End Section-->

</main><!-- End #main -->

{% endblock %}
", "property/show.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/property/show.html.twig");
    }
}
