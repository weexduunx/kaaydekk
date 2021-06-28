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

/* property/index.html.twig */
class __TwigTemplate_d70b0dba0636c4f8ac93654e1f6183e3a18047650add187bc852867ef6a80c40 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "property/index.html.twig", 1);
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

        echo "Grille des propriétés";
        
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
        echo "    <main id=\"main\">
        <!-- ======= Intro Single ======= -->
        <section class=\"intro-single\">
            <div class=\"container mt-xl-4\">
                <button type=\"button\" class=\"btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse\"
                        data-bs-toggle=\"collapse\" data-bs-target=\"#navbarTogglerDemo01\">
                    <i class=\"bi bi-search\" style=\"font-weight: bold\"> Rechercher</i>
                </button>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-lg-8\">
                        <div class=\"title-single-box\">
                            <h1 class=\"title-single\">Nos étonnantes propriétés</h1>
                            <span class=\"color-text-a\">Grille des propriétés</span>
                        </div>
                    </div>
                    <div class=\"col-md-12 col-lg-4\">
                        <nav aria-label=\"breadcrumb\" class=\"breadcrumb-box d-flex justify-content-lg-end\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\">
                                    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
                                </li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                    Grille des propriétés
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section><!-- End Intro Single-->
        <!-- ======= Property Grid ======= -->
        <section class=\"property-grid grid\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"grid-option\">
                            <form>
                                <select class=\"custom-select\">
                                    <option selected>Tous</option>
                                    <option value=\"1\">plus récents</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 50, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 51
            echo "                    <div class=\"col-md-4\">
                        ";
            // line 52
            $this->loadTemplate("property/property.html.twig", "property/index.html.twig", 52)->display($context);
            // line 53
            echo "                    </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <nav class=\"pagination-a\">
                            ";
        // line 59
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 59, $this->source); })()));
        echo "
                        </nav>
                    </div>
                </div>
            </div>
        </section><!-- End Property Grid Single-->
        <section class=\"section mt-4 mb-4 \">
            <div class=\"container\">
                <!-- ======= Property Search Section ======= -->
                <div class=\"click-closed\"></div>
                <!--/ Form Search Star /-->
                <div class=\"box-collapse\">
                    <div class=\"title-box-d\">
                        <h3 class=\"title-d\">Recherche de propriété</h3>
                    </div>
                    <span class=\"close-box-collapse right-boxed bi bi-x\"></span>
                    <div class=\"box-collapse-wrap form\">
                        <form class=\"form-a\">
                            ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'form_start');
        echo "
                            <div class=\"row\">
                                <div class=\"col-md-6 mb-2\">
                                    <div class=\"form-group mt-3\">
                                        <label class=\"pb-2\">Type</label>
                                        <div class=\"col\">";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "type", [], "any", false, false, false, 82), 'row');
        echo "</div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-2\">
                                    <div class=\"form-group mt-3\">
                                        <label class=\"pb-2\">Ville</label>
                                        <div class=\"col\">";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "ville", [], "any", false, false, false, 88), 'row');
        echo "</div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-2\">
                                    <div class=\"form-group mt-3\">
                                        <label class=\"pb-2\">Chambre</label>
                                        <div class=\"col\">";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "chambre", [], "any", false, false, false, 94), 'row');
        echo "</div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-2\">
                                    <div class=\"form-group mt-3\">
                                        <label class=\"pb-2\" >Superficie Minimale</label>
                                        <div class=\"col\">";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "minSuperficie", [], "any", false, false, false, 100), 'row');
        echo "</div>
                                    </div>
                                </div>
                                <div class=\"col-md-12 mb-2\">
                                    <div class=\"form-group\">
                                        <label class=\"pb-2\" >Prix Maximal</label>
                                        <div class=\"col\">";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "maxPrice", [], "any", false, false, false, 106), 'row');
        echo "</div>
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <button type=\"submit\" class=\"btn btn-b\">Rechercher</button>
                                </div>
                            </div>
                            ";
        // line 113
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), 'form_end');
        echo "
                        </form>
                    </div>
                </div>
                <!-- End Property Search Section -->>
            </div>
        </section>
    </main><!-- End #main -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "property/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 113,  247 => 106,  238 => 100,  229 => 94,  220 => 88,  211 => 82,  203 => 77,  182 => 59,  176 => 55,  161 => 53,  159 => 52,  156 => 51,  139 => 50,  111 => 25,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title 'Grille des propriétés' %}
{% block body %}
    <main id=\"main\">
        <!-- ======= Intro Single ======= -->
        <section class=\"intro-single\">
            <div class=\"container mt-xl-4\">
                <button type=\"button\" class=\"btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse\"
                        data-bs-toggle=\"collapse\" data-bs-target=\"#navbarTogglerDemo01\">
                    <i class=\"bi bi-search\" style=\"font-weight: bold\"> Rechercher</i>
                </button>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-lg-8\">
                        <div class=\"title-single-box\">
                            <h1 class=\"title-single\">Nos étonnantes propriétés</h1>
                            <span class=\"color-text-a\">Grille des propriétés</span>
                        </div>
                    </div>
                    <div class=\"col-md-12 col-lg-4\">
                        <nav aria-label=\"breadcrumb\" class=\"breadcrumb-box d-flex justify-content-lg-end\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\">
                                    <a href=\"{{ path('home') }}\">Accueil</a>
                                </li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                    Grille des propriétés
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section><!-- End Intro Single-->
        <!-- ======= Property Grid ======= -->
        <section class=\"property-grid grid\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"grid-option\">
                            <form>
                                <select class=\"custom-select\">
                                    <option selected>Tous</option>
                                    <option value=\"1\">plus récents</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    {% for bien in properties%}
                    <div class=\"col-md-4\">
                        {% include 'property/property.html.twig'%}
                    </div>
                    {% endfor %}
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <nav class=\"pagination-a\">
                            {{ knp_pagination_render(properties) }}
                        </nav>
                    </div>
                </div>
            </div>
        </section><!-- End Property Grid Single-->
        <section class=\"section mt-4 mb-4 \">
            <div class=\"container\">
                <!-- ======= Property Search Section ======= -->
                <div class=\"click-closed\"></div>
                <!--/ Form Search Star /-->
                <div class=\"box-collapse\">
                    <div class=\"title-box-d\">
                        <h3 class=\"title-d\">Recherche de propriété</h3>
                    </div>
                    <span class=\"close-box-collapse right-boxed bi bi-x\"></span>
                    <div class=\"box-collapse-wrap form\">
                        <form class=\"form-a\">
                            {{ form_start(form)}}
                            <div class=\"row\">
                                <div class=\"col-md-6 mb-2\">
                                    <div class=\"form-group mt-3\">
                                        <label class=\"pb-2\">Type</label>
                                        <div class=\"col\">{{ form_row(form.type)}}</div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-2\">
                                    <div class=\"form-group mt-3\">
                                        <label class=\"pb-2\">Ville</label>
                                        <div class=\"col\">{{ form_row(form.ville)}}</div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-2\">
                                    <div class=\"form-group mt-3\">
                                        <label class=\"pb-2\">Chambre</label>
                                        <div class=\"col\">{{ form_row(form.chambre)}}</div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-2\">
                                    <div class=\"form-group mt-3\">
                                        <label class=\"pb-2\" >Superficie Minimale</label>
                                        <div class=\"col\">{{ form_row(form.minSuperficie)}}</div>
                                    </div>
                                </div>
                                <div class=\"col-md-12 mb-2\">
                                    <div class=\"form-group\">
                                        <label class=\"pb-2\" >Prix Maximal</label>
                                        <div class=\"col\">{{ form_row(form.maxPrice)}}</div>
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <button type=\"submit\" class=\"btn btn-b\">Rechercher</button>
                                </div>
                            </div>
                            {{ form_end(form)}}
                        </form>
                    </div>
                </div>
                <!-- End Property Search Section -->>
            </div>
        </section>
    </main><!-- End #main -->

{% endblock %}

", "property/index.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/property/index.html.twig");
    }
}
