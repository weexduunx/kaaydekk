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

/* form_candidat/form1.html.twig */
class __TwigTemplate_26e8bf311432096cf825daac660af21c44106af059cef5592be64463def202d9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form_candidat/form1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form_candidat/form1.html.twig"));

        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "form_candidat/form1.html.twig", 1);
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

        echo "Inscription";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <main id=\"main\">
        <section class=\"intro-single\">
            <div class=\"container\">
                 
                <form  method=\"post\" role=\"form\" >
                    <div class=\"row\">
                        <div class=\"col-lg-8\">
                          <h1 class=\"text-center\">FICHE D'INSCRIPTION AU PROJET DE 660 LOGEMENTS SOCIAUX</h1>
                            <div class=\"card mt-3\">
                                <div class=\"card-body\">
                                <h4 class=\"text-center\">Deuxiéme et derniére étape</h4>
                                        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start');
        echo "
                                        <!-- column 1 -->
                                            <div class=\"form-group\">
                                                <div class=\"row\">
                                                <div class=\"card-title\"><strong>Bon à savoir*</strong></div>  
                                                    <div class=\"col-6 form-control-sm\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "membre_cooperative", [], "any", false, false, false, 25), 'row');
        echo "</div>
                                                    <div class=\"col-6 form-control-sm\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "nom_de_la_cooperative", [], "any", false, false, false, 26), 'row');
        echo "</div>
                                                     <div class=\"col-6 form-control-sm\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "compte_bancaire", [], "any", false, false, false, 27), 'row');
        echo "</div>
                                                    <div class=\"col-6 form-control-sm\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nom_de_la_banque", [], "any", false, false, false, 28), 'row');
        echo "</div>
                                                    <div class=\"col-6 form-control-sm\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "beneficiaire_appui_ou_subvention", [], "any", false, false, false, 29), 'row');
        echo "</div>
                                                    <div class=\"col-2 form-control-sm\"> ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "nombre_de_personne_en_charge", [], "any", false, false, false, 30), 'row');
        echo "</div>
                                                    <div class=\"col-4 form-control-sm\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "agence", [], "any", false, false, false, 31), 'row');
        echo "</div>
                                                     <div class=\"card-title mt-2 mb-0\"><strong>Logement actuel*</strong></div>
                                                     <div class=\"col-5 form-control-sm\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "logement_actuel", [], "any", false, false, false, 33), 'row');
        echo "</div>
                                                     <div class=\"col-3 form-control-sm\"> ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "qualite", [], "any", false, false, false, 34), 'row');
        echo "</div>
                                                    <div class=\"col-4 form-control-sm\"> ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "handicap", [], "any", false, false, false, 35), 'row');
        echo "</div>
                                                </div>
                                            </div>
                                        <!-- column 1-->
                                </div>
                            </div>
                            <!-- column 2-->
                            <div class=\"card mt-2\">
                                <div class=\"card-body\">
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                        <div class=\"card-title\"><strong>Situation professionnelle*</strong></div>
                                            <div class=\"col-4 form-control-sm\">";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "situation", [], "any", false, false, false, 47), 'row');
        echo "</div>
                                            <div class=\"col-4 form-control-sm\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "secteur", [], "any", false, false, false, 48), 'row');
        echo "</div>
                                            <div class=\"col-4 form-control-sm\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "type_de_contrat", [], "any", false, false, false, 49), 'row');
        echo "</div>
                                            <h6 class=\"alert-danger mt-4\"> Remplissez ces informations si vous êtes salarié </h6>
                                            <div class=\"col-4 form-control-sm\"> ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "nom_de_la_societe", [], "any", false, false, false, 51), 'row');
        echo "</div>
                                            <div class=\"col-4 form-control-sm\">";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "nom_employeur", [], "any", false, false, false, 52), 'row');
        echo "</div>
                                            <div class=\"col-4 form-control-sm\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "salaire_mensuelle", [], "any", false, false, false, 53), 'row');
        echo "</div>
                                            <h6 class=\"mt-4 alert-danger\">Remplissez ces informations si vous êtes non-salarié </h6>
                                            <div class=\"col-4 form-control-sm\">";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "activite_non_salarie", [], "any", false, false, false, 55), 'row');
        echo "</div>
                                            <div class=\"col-4 form-control-sm\">";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "lieu_activite_non_salarie", [], "any", false, false, false, 56), 'row');
        echo "</div>
                                            <div class=\"col-4 form-control-sm\">";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "revenu_mensuelle", [], "any", false, false, false, 57), 'row');
        echo "</div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- column 3-->
                             <div class=\"card mt-2\">
                                <div class=\"card-body\">
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                        <div class=\"card-title\"><strong>Critéres du logement que vous souhaitez acquérir*</strong></div>
                                            <div class=\"col-6 form-control-sm\">";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "type_de_logement", [], "any", false, false, false, 69), 'row');
        echo "</div>
                                            <div class=\"col-6 form-control-sm\">";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "mode_acquisition", [], "any", false, false, false, 70), 'row');
        echo "</div>
                                            <div class=\"col-6 form-control-sm\">";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "prenom_et_nom", [], "any", false, false, false, 71), 'row');
        echo "</div>
                                            <div class=\"col-4 form-control-sm\">";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "color", [], "any", false, false, false, 72), 'row');
        echo "</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- column 3-->
                           <!-- column 3-->
                             <div class=\"card mt-2\">
                                <div class=\"card-body\">
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col form-control-sm\">";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "status", [], "any", false, false, false, 83), 'row');
        echo "</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- column 3-->
                            <div class=\"form-group mt-3\">
                            <button type=\"submit\" class=\"btn btn-success\">Valider l'inscription</button>
                            </div>
                            ";
        // line 92
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), 'form_end');
        echo "
                        </div>
                        <div class=\"col-md-4 mt-lg-2\">
                                <div class=\"mt-4\">
                                        <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-kdi.png"), "html", null, true);
        echo "\" class=\"rounded float-left\" width=\"400\"  alt=\"...\">
                                </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "form_candidat/form1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 96,  251 => 92,  239 => 83,  225 => 72,  221 => 71,  217 => 70,  213 => 69,  198 => 57,  194 => 56,  190 => 55,  185 => 53,  181 => 52,  177 => 51,  172 => 49,  168 => 48,  164 => 47,  149 => 35,  145 => 34,  141 => 33,  136 => 31,  132 => 30,  128 => 29,  124 => 28,  120 => 27,  116 => 26,  112 => 25,  104 => 20,  91 => 9,  81 => 8,  62 => 3,  51 => 1,  49 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription{% endblock %}

{% form_theme form 'bootstrap_4_layout.html.twig' %}


{% block body %}
    <main id=\"main\">
        <section class=\"intro-single\">
            <div class=\"container\">
                 
                <form  method=\"post\" role=\"form\" >
                    <div class=\"row\">
                        <div class=\"col-lg-8\">
                          <h1 class=\"text-center\">FICHE D'INSCRIPTION AU PROJET DE 660 LOGEMENTS SOCIAUX</h1>
                            <div class=\"card mt-3\">
                                <div class=\"card-body\">
                                <h4 class=\"text-center\">Deuxiéme et derniére étape</h4>
                                        {{ form_start(form) }}
                                        <!-- column 1 -->
                                            <div class=\"form-group\">
                                                <div class=\"row\">
                                                <div class=\"card-title\"><strong>Bon à savoir*</strong></div>  
                                                    <div class=\"col-6 form-control-sm\">{{ form_row(form.membre_cooperative) }}</div>
                                                    <div class=\"col-6 form-control-sm\">{{ form_row(form.nom_de_la_cooperative)}}</div>
                                                     <div class=\"col-6 form-control-sm\">{{ form_row(form.compte_bancaire) }}</div>
                                                    <div class=\"col-6 form-control-sm\">{{ form_row(form.nom_de_la_banque) }}</div>
                                                    <div class=\"col-6 form-control-sm\">{{ form_row(form.beneficiaire_appui_ou_subvention) }}</div>
                                                    <div class=\"col-2 form-control-sm\"> {{ form_row(form.nombre_de_personne_en_charge)}}</div>
                                                    <div class=\"col-4 form-control-sm\">{{ form_row(form.agence) }}</div>
                                                     <div class=\"card-title mt-2 mb-0\"><strong>Logement actuel*</strong></div>
                                                     <div class=\"col-5 form-control-sm\">{{ form_row(form.logement_actuel) }}</div>
                                                     <div class=\"col-3 form-control-sm\"> {{ form_row(form.qualite)}}</div>
                                                    <div class=\"col-4 form-control-sm\"> {{ form_row(form.handicap)}}</div>
                                                </div>
                                            </div>
                                        <!-- column 1-->
                                </div>
                            </div>
                            <!-- column 2-->
                            <div class=\"card mt-2\">
                                <div class=\"card-body\">
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                        <div class=\"card-title\"><strong>Situation professionnelle*</strong></div>
                                            <div class=\"col-4 form-control-sm\">{{ form_row(form.situation) }}</div>
                                            <div class=\"col-4 form-control-sm\">{{ form_row(form.secteur) }}</div>
                                            <div class=\"col-4 form-control-sm\">{{ form_row(form.type_de_contrat) }}</div>
                                            <h6 class=\"alert-danger mt-4\"> Remplissez ces informations si vous êtes salarié </h6>
                                            <div class=\"col-4 form-control-sm\"> {{ form_row(form.nom_de_la_societe)}}</div>
                                            <div class=\"col-4 form-control-sm\">{{ form_row(form.nom_employeur) }}</div>
                                            <div class=\"col-4 form-control-sm\">{{ form_row(form.salaire_mensuelle) }}</div>
                                            <h6 class=\"mt-4 alert-danger\">Remplissez ces informations si vous êtes non-salarié </h6>
                                            <div class=\"col-4 form-control-sm\">{{ form_row(form.activite_non_salarie) }}</div>
                                            <div class=\"col-4 form-control-sm\">{{ form_row(form.lieu_activite_non_salarie) }}</div>
                                            <div class=\"col-4 form-control-sm\">{{ form_row(form.revenu_mensuelle) }}</div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- column 3-->
                             <div class=\"card mt-2\">
                                <div class=\"card-body\">
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                        <div class=\"card-title\"><strong>Critéres du logement que vous souhaitez acquérir*</strong></div>
                                            <div class=\"col-6 form-control-sm\">{{ form_row(form.type_de_logement) }}</div>
                                            <div class=\"col-6 form-control-sm\">{{ form_row(form.mode_acquisition) }}</div>
                                            <div class=\"col-6 form-control-sm\">{{ form_row(form.prenom_et_nom) }}</div>
                                            <div class=\"col-4 form-control-sm\">{{ form_row(form.color) }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- column 3-->
                           <!-- column 3-->
                             <div class=\"card mt-2\">
                                <div class=\"card-body\">
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col form-control-sm\">{{ form_row(form.status) }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- column 3-->
                            <div class=\"form-group mt-3\">
                            <button type=\"submit\" class=\"btn btn-success\">Valider l'inscription</button>
                            </div>
                            {{ form_end(form) }}
                        </div>
                        <div class=\"col-md-4 mt-lg-2\">
                                <div class=\"mt-4\">
                                        <img src=\"{{asset('assets/images/logo-kdi.png') }}\" class=\"rounded float-left\" width=\"400\"  alt=\"...\">
                                </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
{% endblock %}
", "form_candidat/form1.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/form_candidat/form1.html.twig");
    }
}
