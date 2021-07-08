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

/* inscription/inscription.html.twig */
class __TwigTemplate_9ad4e57efe8623609bb9bdadf2042f422893ac0dd35af9f443f272169147a1b0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/inscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/inscription.html.twig"));

        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "inscription/inscription.html.twig", 1);
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
                                        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
                                         <!-- column 1 Infos perso debut -->
                                        <div class=\"card mt-4\">
                                            <div class=\"card-body\">
                                            <div class=\"form-group\">
                                                <div class=\"row\">
                                                    <div class=\"card-title\"><strong>Informations personnelle*</strong></div>  
                                                    <div class=\"col-6 form-control-sm\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), 'row');
        echo "</div>
                                                    <div class=\"col-6 form-control-sm\"> ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "prenom", [], "any", false, false, false, 27), 'row');
        echo "</div>
                                                    <div class=\"col-6 form-control-sm\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "dateDeNaissance", [], "any", false, false, false, 28), 'row');
        echo "</div>
                                                    <div class=\"col-6 form-control-sm\"> ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "lieuDeNaissance", [], "any", false, false, false, 29), 'row');
        echo "</div>
                                                </div>
                                            </div>
                                                <div class=\"form-group\">
                                                    <div class=\"row\">
                                                        <div class=\"col-6 form-control-sm\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "nationalite", [], "any", false, false, false, 34), 'row');
        echo "</div>
                                                        <div class=\"col-6 form-control-sm\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "nin", [], "any", false, false, false, 35), 'row');
        echo "</div>
                                                        <div class=\"col-2 form-control-sm\">";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "situationMatrimoniale", [], "any", false, false, false, 36), 'row');
        echo "</div>
                                                        <div class=\"col-4 form-control-sm\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "profession", [], "any", false, false, false, 37), 'row');
        echo "</div>
                                                        <div class=\"col-6 form-control-sm\">";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "ville", [], "any", false, false, false, 38), 'row');
        echo "</div>
                                                        <div class=\"col-4 form-control-sm\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "adresse", [], "any", false, false, false, 39), 'row');
        echo "</div>
                                                        <div class=\"col-4 form-control-sm\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), 'row');
        echo "</div>
                                                        <div class=\"col-4 form-control-sm\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "tel", [], "any", false, false, false, 41), 'row');
        echo "</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    
                                         <!-- column 1- Infos perso Fin->

                                        <!-- column 1 Bon à savoir debut -->
                                        <div class=\"card mt-4\">
                                            <div class=\"card-body\">
                                            <div class=\"form-group\">
                                                <div class=\"row\">
                                                <div class=\"card-title\"><strong>Bon à savoir*</strong></div>  
                                                    <div class=\"col-6 form-control-sm\">";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "membreCooperative", [], "any", false, false, false, 55), 'row');
        echo "</div>
                                                    <div class=\"col-6 form-control-sm\">";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "nomCooperative", [], "any", false, false, false, 56), 'row');
        echo "</div>
                                                     <div class=\"col-6 form-control-sm\">";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "compteBancaire", [], "any", false, false, false, 57), 'row');
        echo "</div>
                                                    <div class=\"col-6 form-control-sm\">";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "nomBanque", [], "any", false, false, false, 58), 'row');
        echo "</div>
                                                    <div class=\"col-6 form-control-sm\">";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "beneficiaireAppui", [], "any", false, false, false, 59), 'row');
        echo "</div>
                                                    <div class=\"col-2 form-control-sm\"> ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "nbreDePersonneACharge", [], "any", false, false, false, 60), 'row');
        echo "</div>
                                                    <div class=\"col-4 form-control-sm\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "sourceOuAgence", [], "any", false, false, false, 61), 'row');
        echo "</div>
                                                    </div>
                                                    </div>
                                                    <div class=\"card mt-4\">
                                            <div class=\"card-body\">
                                            <div class=\"form-group\">
                                                <div class=\"row\">
                                                     <div class=\"card-title mt-2 mb-0\"><strong>Logement actuel*</strong></div>
                                                     <div class=\"col-5 form-control-sm\">";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "logementActuel", [], "any", false, false, false, 69), 'row');
        echo "</div>
                                                     <div class=\"col-3 form-control-sm\"> ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "qualite", [], "any", false, false, false, 70), 'row');
        echo "</div>
                                                    <div class=\"col-4 form-control-sm\"> ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "handicap", [], "any", false, false, false, 71), 'row');
        echo "</div>
                                                </div>
                                            </div>
                                               </div>
                                            </div>
                                               </div>
                                            </div>
                                        <!-- column 1 Bon à savoir Fin -->
                                </div>
                            </div>
                            <!-- column 2-->
                            <div class=\"card mt-2\">
                                <div class=\"card-body\">
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                        <div class=\"card-title\"><strong>Situation professionnelle*</strong></div>
                                            <div class=\"col-4 form-control-sm\">";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "situationProfessionelle", [], "any", false, false, false, 87), 'row');
        echo "</div>
                                            <div class=\"col-4 form-control-sm\">";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "secteur", [], "any", false, false, false, 88), 'row');
        echo "</div>
                                            <div class=\"col-4 form-control-sm\">";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "typeDeContrat", [], "any", false, false, false, 89), 'row');
        echo "</div>
                                            <h6 class=\"alert-danger mt-4\"> Remplissez ces informations si vous êtes salarié </h6>
                                            <div class=\"col-6 form-control-sm\"> ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "nomEntreprise", [], "any", false, false, false, 91), 'row');
        echo "</div>
                                            <div class=\"col-4 form-control-sm\">";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "salaireMensuel", [], "any", false, false, false, 92), 'row');
        echo "</div>
                                            <h6 class=\"mt-4 alert-danger\">Remplissez ces informations si vous êtes non-salarié </h6>
                                            <div class=\"col-4 form-control-sm\">";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "activiteNonSalarie", [], "any", false, false, false, 94), 'row');
        echo "</div>
                                            <div class=\"col-4 form-control-sm\">";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "lieuActiviteNonSalarie", [], "any", false, false, false, 95), 'row');
        echo "</div>
                                            <div class=\"col-4 form-control-sm\">";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "revenuMensuel", [], "any", false, false, false, 96), 'row');
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
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "typeDeLogement", [], "any", false, false, false, 108), 'row');
        echo "</div>
                                            <div class=\"col-6 form-control-sm\">";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "moodeAcquisition", [], "any", false, false, false, 109), 'row');
        echo "</div>
                                            <div class=\"col-4 form-control-sm\">";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "color", [], "any", false, false, false, 110), 'row');
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
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "status", [], "any", false, false, false, 121), 'row');
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
        // line 130
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), 'form_end');
        echo "
                        </div>
                        <div class=\"col-md-4 mt-lg-2\">
                                <div class=\"mt-4\">
                                        <img src=\"";
        // line 134
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
        return "inscription/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 134,  319 => 130,  307 => 121,  293 => 110,  289 => 109,  285 => 108,  270 => 96,  266 => 95,  262 => 94,  257 => 92,  253 => 91,  248 => 89,  244 => 88,  240 => 87,  221 => 71,  217 => 70,  213 => 69,  202 => 61,  198 => 60,  194 => 59,  190 => 58,  186 => 57,  182 => 56,  178 => 55,  161 => 41,  157 => 40,  153 => 39,  149 => 38,  145 => 37,  141 => 36,  137 => 35,  133 => 34,  125 => 29,  121 => 28,  117 => 27,  113 => 26,  103 => 19,  91 => 9,  81 => 8,  62 => 3,  51 => 1,  49 => 5,  36 => 1,);
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
                                        {{ form_start(form) }}
                                         <!-- column 1 Infos perso debut -->
                                        <div class=\"card mt-4\">
                                            <div class=\"card-body\">
                                            <div class=\"form-group\">
                                                <div class=\"row\">
                                                    <div class=\"card-title\"><strong>Informations personnelle*</strong></div>  
                                                    <div class=\"col-6 form-control-sm\">{{ form_row(form.nom)}}</div>
                                                    <div class=\"col-6 form-control-sm\"> {{ form_row(form.prenom)}}</div>
                                                    <div class=\"col-6 form-control-sm\">{{ form_row(form.dateDeNaissance) }}</div>
                                                    <div class=\"col-6 form-control-sm\"> {{ form_row(form.lieuDeNaissance)}}</div>
                                                </div>
                                            </div>
                                                <div class=\"form-group\">
                                                    <div class=\"row\">
                                                        <div class=\"col-6 form-control-sm\">{{ form_row(form.nationalite) }}</div>
                                                        <div class=\"col-6 form-control-sm\">{{ form_row(form.nin) }}</div>
                                                        <div class=\"col-2 form-control-sm\">{{ form_row(form.situationMatrimoniale) }}</div>
                                                        <div class=\"col-4 form-control-sm\">{{ form_row(form.profession) }}</div>
                                                        <div class=\"col-6 form-control-sm\">{{ form_row(form.ville) }}</div>
                                                        <div class=\"col-4 form-control-sm\">{{ form_row(form.adresse) }}</div>
                                                        <div class=\"col-4 form-control-sm\">{{ form_row(form.email) }}</div>
                                                        <div class=\"col-4 form-control-sm\">{{ form_row(form.tel) }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    
                                         <!-- column 1- Infos perso Fin->

                                        <!-- column 1 Bon à savoir debut -->
                                        <div class=\"card mt-4\">
                                            <div class=\"card-body\">
                                            <div class=\"form-group\">
                                                <div class=\"row\">
                                                <div class=\"card-title\"><strong>Bon à savoir*</strong></div>  
                                                    <div class=\"col-6 form-control-sm\">{{ form_row(form.membreCooperative) }}</div>
                                                    <div class=\"col-6 form-control-sm\">{{ form_row(form.nomCooperative)}}</div>
                                                     <div class=\"col-6 form-control-sm\">{{ form_row(form.compteBancaire) }}</div>
                                                    <div class=\"col-6 form-control-sm\">{{ form_row(form.nomBanque) }}</div>
                                                    <div class=\"col-6 form-control-sm\">{{ form_row(form.beneficiaireAppui) }}</div>
                                                    <div class=\"col-2 form-control-sm\"> {{ form_row(form.nbreDePersonneACharge)}}</div>
                                                    <div class=\"col-4 form-control-sm\">{{ form_row(form.sourceOuAgence) }}</div>
                                                    </div>
                                                    </div>
                                                    <div class=\"card mt-4\">
                                            <div class=\"card-body\">
                                            <div class=\"form-group\">
                                                <div class=\"row\">
                                                     <div class=\"card-title mt-2 mb-0\"><strong>Logement actuel*</strong></div>
                                                     <div class=\"col-5 form-control-sm\">{{ form_row(form.logementActuel) }}</div>
                                                     <div class=\"col-3 form-control-sm\"> {{ form_row(form.qualite)}}</div>
                                                    <div class=\"col-4 form-control-sm\"> {{ form_row(form.handicap)}}</div>
                                                </div>
                                            </div>
                                               </div>
                                            </div>
                                               </div>
                                            </div>
                                        <!-- column 1 Bon à savoir Fin -->
                                </div>
                            </div>
                            <!-- column 2-->
                            <div class=\"card mt-2\">
                                <div class=\"card-body\">
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                        <div class=\"card-title\"><strong>Situation professionnelle*</strong></div>
                                            <div class=\"col-4 form-control-sm\">{{ form_row(form.situationProfessionelle) }}</div>
                                            <div class=\"col-4 form-control-sm\">{{ form_row(form.secteur) }}</div>
                                            <div class=\"col-4 form-control-sm\">{{ form_row(form.typeDeContrat) }}</div>
                                            <h6 class=\"alert-danger mt-4\"> Remplissez ces informations si vous êtes salarié </h6>
                                            <div class=\"col-6 form-control-sm\"> {{ form_row(form.nomEntreprise)}}</div>
                                            <div class=\"col-4 form-control-sm\">{{ form_row(form.salaireMensuel) }}</div>
                                            <h6 class=\"mt-4 alert-danger\">Remplissez ces informations si vous êtes non-salarié </h6>
                                            <div class=\"col-4 form-control-sm\">{{ form_row(form.activiteNonSalarie) }}</div>
                                            <div class=\"col-4 form-control-sm\">{{ form_row(form.lieuActiviteNonSalarie) }}</div>
                                            <div class=\"col-4 form-control-sm\">{{ form_row(form.revenuMensuel) }}</div>
                                           
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
                                            <div class=\"col-6 form-control-sm\">{{ form_row(form.typeDeLogement) }}</div>
                                            <div class=\"col-6 form-control-sm\">{{ form_row(form.moodeAcquisition) }}</div>
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
", "inscription/inscription.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/inscription/inscription.html.twig");
    }
}
