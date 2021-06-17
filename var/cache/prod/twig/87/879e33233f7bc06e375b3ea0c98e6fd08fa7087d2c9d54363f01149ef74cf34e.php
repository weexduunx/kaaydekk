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

/* form_client/form.html.twig */
class __TwigTemplate_20ffc2843ffa3219b511bbda7f96878410d5a955844d965e4d04920598f773b7 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "form_client/form.html.twig", 1);
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
                          <h1 class=\"text-center\">FICHE D'INSCRIPTION AU PROJET DE 140 LOGEMENTS SOCIAUX</h1>
                            <div class=\"card mt-3\">
                                <div class=\"card-body\">
                                <h4 class=\"text-center\">Premiére étape</h4>
                                   <div class=\"card-title\"><strong>Informations personelles</strong></div>
                                        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                                        <!-- column 1 -->
                                            <div class=\"form-group\">
                                                <div class=\"row\">
                                                    <div class=\"col-6 form-control-sm\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 24), 'row');
        echo "</div>
                                                    <div class=\"col-6 form-control-sm\"> ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 25), 'row');
        echo "</div>
                                                    <div class=\"col-6 form-control-sm\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lieu_de_naissance", [], "any", false, false, false, 26), 'row');
        echo "</div>
                                                    <div class=\"col-6 form-control-sm\"> ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_de_naissance", [], "any", false, false, false, 27), 'row');
        echo "</div>
                                                </div>
                                            </div>
                                        <!-- column 1-->
                                </div>
                            </div>
                            <!-- column 2-->
                            <div class=\"card mt-4\">
                                <div class=\"card-body\">
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-6 form-control-sm\">";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nationalite", [], "any", false, false, false, 38), 'row');
        echo "</div>
                                            <div class=\"col-6 form-control-sm\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "numero_cin_ou_passeport", [], "any", false, false, false, 39), 'row');
        echo "</div>
                                            <div class=\"col-2 form-control-sm\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "situation_matrimoniale", [], "any", false, false, false, 40), 'row');
        echo "</div>
                                            <div class=\"col-4 form-control-sm\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "profession", [], "any", false, false, false, 41), 'row');
        echo "</div>
                                            <div class=\"col-6 form-control-sm\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ville", [], "any", false, false, false, 42), 'row');
        echo "</div>
                                            <div class=\"col-4 form-control-sm\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adresse", [], "any", false, false, false, 43), 'row');
        echo "</div>
                                            <div class=\"col-4 form-control-sm\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 44), 'row');
        echo "</div>
                                            <div class=\"col-4 form-control-sm\">";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tel", [], "any", false, false, false, 45), 'row');
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
                                            <div class=\"col-4 form-control-sm\">";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "color", [], "any", false, false, false, 55), 'row');
        echo "</div>
                                            <div class=\"col-8 form-control-sm\">";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "commentaire", [], "any", false, false, false, 56), 'row');
        echo "</div>
                                            <div class=\"col-6 form-control-sm\">";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", false, false, false, 57), 'row');
        echo "</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- column 3-->
                            <div class=\"form-group mt-3\">
                            <button type=\"submit\" class=\"btn btn-primary\">Continuer l'inscription ici</button>
                            </div>
                            ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                        </div>
                        <div class=\"col-md-4 mt-lg-2\">
                                <div class=\"mt-4\">
                                        <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/ngts.png"), "html", null, true);
        echo "\" class=\"rounded float-right\" width=\"200\" height=\"200\" alt=\"...\">
                                        <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-kdi.png"), "html", null, true);
        echo "\" class=\"rounded float-left\" width=\"200\"  alt=\"...\">
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
        return "form_client/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 71,  175 => 70,  168 => 66,  156 => 57,  152 => 56,  148 => 55,  135 => 45,  131 => 44,  127 => 43,  123 => 42,  119 => 41,  115 => 40,  111 => 39,  107 => 38,  93 => 27,  89 => 26,  85 => 25,  81 => 24,  74 => 20,  61 => 9,  57 => 8,  50 => 3,  45 => 1,  43 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "form_client/form.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/form_client/form.html.twig");
    }
}
