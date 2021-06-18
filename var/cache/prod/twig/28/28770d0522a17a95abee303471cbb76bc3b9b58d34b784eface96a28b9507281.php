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
class __TwigTemplate_e9746aac6377e20aa9e2f5916ae62dd2480fcb35603241ac05edaa0d2cf69e9e extends Template
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
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "form_candidat/form1.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Inscription";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                                        <!-- column 1 -->
                                            <div class=\"form-group\">
                                                <div class=\"row\">
                                                <div class=\"card-title\"><strong>Bon à savoir*</strong></div>  
                                                    <div class=\"col-6 form-control-sm\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "membre_cooperative", [], "any", false, false, false, 25), 'row');
        echo "</div>
                                                    <div class=\"col-6 form-control-sm\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom_de_la_cooperative", [], "any", false, false, false, 26), 'row');
        echo "</div>
                                                     <div class=\"col-6 form-control-sm\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "compte_bancaire", [], "any", false, false, false, 27), 'row');
        echo "</div>
                                                    <div class=\"col-6 form-control-sm\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom_de_la_banque", [], "any", false, false, false, 28), 'row');
        echo "</div>
                                                    <div class=\"col-6 form-control-sm\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "beneficiaire_appui_ou_subvention", [], "any", false, false, false, 29), 'row');
        echo "</div>
                                                    <div class=\"col-2 form-control-sm\"> ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nombre_de_personne_en_charge", [], "any", false, false, false, 30), 'row');
        echo "</div>
                                                    <div class=\"col-4 form-control-sm\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "agence", [], "any", false, false, false, 31), 'row');
        echo "</div>
                                                     <div class=\"card-title mt-2 mb-0\"><strong>Logement actuel*</strong></div>
                                                     <div class=\"col-5 form-control-sm\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "logement_actuel", [], "any", false, false, false, 33), 'row');
        echo "</div>
                                                     <div class=\"col-3 form-control-sm\"> ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "qualite", [], "any", false, false, false, 34), 'row');
        echo "</div>
                                                    <div class=\"col-4 form-control-sm\"> ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "handicap", [], "any", false, false, false, 35), 'row');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "situation", [], "any", false, false, false, 47), 'row');
        echo "</div>
                                            <div class=\"col-4 form-control-sm\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "secteur", [], "any", false, false, false, 48), 'row');
        echo "</div>
                                            <div class=\"col-4 form-control-sm\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type_de_contrat", [], "any", false, false, false, 49), 'row');
        echo "</div>
                                            <h6 class=\"alert-danger mt-4\"> Remplissez ces informations si vous êtes salarié </h6>
                                            <div class=\"col-4 form-control-sm\"> ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom_de_la_societe", [], "any", false, false, false, 51), 'row');
        echo "</div>
                                            <div class=\"col-4 form-control-sm\">";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom_employeur", [], "any", false, false, false, 52), 'row');
        echo "</div>
                                            <div class=\"col-4 form-control-sm\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "salaire_mensuelle", [], "any", false, false, false, 53), 'row');
        echo "</div>
                                            <h6 class=\"mt-4 alert-danger\">Remplissez ces informations si vous êtes non-salarié </h6>
                                            <div class=\"col-4 form-control-sm\">";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "activite_non_salarie", [], "any", false, false, false, 55), 'row');
        echo "</div>
                                            <div class=\"col-4 form-control-sm\">";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lieu_activite_non_salarie", [], "any", false, false, false, 56), 'row');
        echo "</div>
                                            <div class=\"col-4 form-control-sm\">";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "revenu_mensuelle", [], "any", false, false, false, 57), 'row');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type_de_logement", [], "any", false, false, false, 69), 'row');
        echo "</div>
                                            <div class=\"col-6 form-control-sm\">";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mode_acquisition", [], "any", false, false, false, 70), 'row');
        echo "</div>
                                            <div class=\"col-6 form-control-sm\">";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom_et_nom", [], "any", false, false, false, 71), 'row');
        echo "</div>
                                            <div class=\"col-4 form-control-sm\">";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "color", [], "any", false, false, false, 72), 'row');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", false, false, false, 83), 'row');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
        return array (  228 => 96,  221 => 92,  209 => 83,  195 => 72,  191 => 71,  187 => 70,  183 => 69,  168 => 57,  164 => 56,  160 => 55,  155 => 53,  151 => 52,  147 => 51,  142 => 49,  138 => 48,  134 => 47,  119 => 35,  115 => 34,  111 => 33,  106 => 31,  102 => 30,  98 => 29,  94 => 28,  90 => 27,  86 => 26,  82 => 25,  74 => 20,  61 => 9,  57 => 8,  50 => 3,  45 => 1,  43 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "form_candidat/form1.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/form_candidat/form1.html.twig");
    }
}
