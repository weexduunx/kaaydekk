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
class __TwigTemplate_28071088b5872da602ad13612bd59dbf73a90bfe515719537cd7ec08ec3c35c9 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "property/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "label", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<main id=\"main\">
    <section class=\"intro-single\">
       <div class=\"container\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 8));
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
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 13), "valid", [], "any", false, false, false, 13)) {
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
        if (twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "thumbnail", [], "any", false, false, false, 43)) {
            // line 44
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(($context["bien"] ?? null), "thumbnailFile"), "medium"), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "label", [], "any", false, false, false, 55), "html", null, true);
        echo "</h1>
                    <h2>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "rooms", [], "any", false, false, false, 56), "html", null, true);
        echo " pieces - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "superficie", [], "any", false, false, false, 56), "html", null, true);
        echo " m²</h2>
                    <div class=\"text-primary\" style=\"font-size: 3rem;font-weight:bold;\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "formattedPrice", [], "any", false, false, false, 57), "html", null, true);
        echo " FCFA</div>
                    <div id=\"contactForm\" class=\"mt-4\">
                         ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                        <form class=\"row\">
                            <div class=\"col form-control-plaintext\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", false, false, false, 61), 'row');
        echo "</div>
                            <div class=\"col form-control-plaintext\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 62), 'row');
        echo "</div>
                          <div class=\"row\">
                            <div class=\"col\">";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 64), 'row');
        echo "</div>
                            <div class=\"col\">";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 65), 'row');
        echo "</div>
                          </div>
                          ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
                            <div class=\"form-group mt-4\">
                                <button class=\"btn btn-primary\">Contactez Nous</button>
                            </div>
                          ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "description", [], "any", false, false, false, 82), "html", null, true));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "superficie", [], "any", false, false, false, 90), "html", null, true);
        echo " m²</td>
                    </tr>
                    <tr>
                        <td>Piéces</td>
                        <td>";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "rooms", [], "any", false, false, false, 94), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "bedrooms", [], "any", false, false, false, 98), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Type de bien</td>
                        <td>";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "typeDeBien", [], "any", false, false, false, 102), "html", null, true);
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
        return array (  235 => 102,  228 => 98,  221 => 94,  214 => 90,  203 => 82,  189 => 71,  182 => 67,  177 => 65,  173 => 64,  168 => 62,  164 => 61,  159 => 59,  154 => 57,  148 => 56,  144 => 55,  135 => 48,  129 => 46,  123 => 44,  121 => 43,  107 => 32,  101 => 29,  88 => 18,  82 => 14,  79 => 13,  70 => 10,  67 => 9,  63 => 8,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "property/show.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/property/show.html.twig");
    }
}
