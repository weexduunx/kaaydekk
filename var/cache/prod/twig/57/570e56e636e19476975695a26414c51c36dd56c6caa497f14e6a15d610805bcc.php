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

/* @EasyAdmin/welcome.html.twig */
class __TwigTemplate_25501c2177168c96400429e483c5a3e37731a5d2daf5a58e22b62d3c76857f2f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "bundles/EasyAdminBundle/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("bundles/EasyAdminBundle/layout.html.twig", "@EasyAdmin/welcome.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Bienvenue dans Kaay Dëkk";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css\" integrity=\"sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==\" crossorigin=\"anonymous\">

";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "\t<div class=\"container-fluid\">
\t\t";
        // line 11
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 14
        echo "
\t\t<div class=\"col-7 align-self-center\">
\t\t\t<h3 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">Bienvenue
\t\t\t\t";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "</h3>
\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t<ol class=\"breadcrumb m-0 p-0\">
\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t<a href=\"";
        // line 22
        echo "/";
        echo "\">Visiter le site web</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ol>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"card-group\">
\t\t\t<div class=\"card border-right\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"d-flex d-lg-flex d-md-block align-items-center\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"d-inline-flex align-items-center\">
\t\t\t\t\t\t\t\t<h2 class=\"text-dark mb-1 font-weight-medium\">";
        // line 34
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["countAllClient"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["value"] ?? null) : null), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t<span class=\"badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none\">
\t\t\t\t\t\t\t\t\t+";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["countAllClient"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["value"] ?? null) : null)), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t%</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h6 class=\"text-muted font-weight-normal mb-0 w-100 text-truncate\">Total des Clients</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ml-auto mt-md-3 mt-lg-0\">
\t\t\t\t\t\t\t<span class=\"opacity-7 text-muted\">
\t\t\t\t\t\t\t\t<i data-feather=\"users\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"card border-right\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"d-flex d-lg-flex d-md-block align-items-center\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"d-inline-flex align-items-center\">
\t\t\t\t\t\t\t\t<h2 class=\"text-dark mb-1 font-weight-medium\">";
        // line 54
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["countAllBien"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["value"] ?? null) : null), "html", null, true);
        echo "</h2>

\t\t\t\t\t\t\t\t<span class=\"badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none\">
\t\t\t\t\t\t\t\t\t+";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["countAllBien"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["value"] ?? null) : null)), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t%</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h6 class=\"text-muted font-weight-normal mb-0 w-100 text-truncate\">Total des Biens</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ml-auto mt-md-3 mt-lg-0\">
\t\t\t\t\t\t\t<span class=\"opacity-7 text-muted \">
\t\t\t\t\t\t\t\t<i data-feather=\"home\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"card border-right\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"d-flex d-lg-flex d-md-block align-items-center\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"d-inline-flex align-items-center\">
\t\t\t\t\t\t\t\t<h2 class=\"text-dark mb-1 font-weight-medium\">";
        // line 75
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["countAllCandidature"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["value"] ?? null) : null), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t<span class=\"badge bg-danger font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block\">
\t\t\t\t\t\t\t\t\t+";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["countAllCandidature"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["value"] ?? null) : null)), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t%</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h6 class=\"text-muted font-weight-normal mb-0 w-100 text-truncate\">Total des Candidatures</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ml-auto mt-md-3 mt-lg-0\">
\t\t\t\t\t\t\t<span class=\"opacity-7 text-muted\">
\t\t\t\t\t\t\t\t<i data-feather=\"list\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"d-flex d-lg-flex d-md-block align-items-center\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h2 class=\"text-dark mb-1 font-weight-medium\">";
        // line 94
        echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["countAllProjet"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["value"] ?? null) : null), "html", null, true);
        echo "</h2>

\t\t\t\t\t\t\t<h6 class=\"text-muted font-weight-normal mb-0 w-100 text-truncate\">Total des Projets</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ml-auto mt-md-3 mt-lg-0\">
\t\t\t\t\t\t\t<span class=\"opacity-7 text-muted\">
\t\t\t\t\t\t\t\t<i data-feather=\"file-plus\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"row\">
\t\t\t<!-- column -->
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h4 class=\"card-title\">Client Par Date</h4>
\t\t\t\t\t\t<p class=\"font-14 mb-2 text-muted\">- Statistique des nombres de clients enregistrés par date
\t\t\t\t\t\t\t<br></p>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<canvas id=\"client\" height=\"150\"></canvas>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- column -->
\t\t\t";
        // line 123
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 123)) {
            // line 124
            echo "\t\t\t\t<div class=\"col-md-6 col-lg-3\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">Les activités récentes</h4>
\t\t\t\t\t\t\t<div class=\"mt-4 activity\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start border-left-line pb-3\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"btn btn-success btn-circle mb-2 btn-item\">
\t\t\t\t\t\t\t\t\t\t\t<i data-feather=\"user-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ml-3 mt-2\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-dark font-weight-medium mb-2\">Les clients non-actifs !</h5>
\t\t\t\t\t\t\t\t\t\t";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["creation"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 138
                echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-14 mb-2 text-muted\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "prenom", [], "any", false, false, false, 138), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "nom", [], "any", false, false, false, 139), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-light font-14 text-muted\">";
                // line 141
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "tel", [], "any", false, false, false, 141), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 146
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_USER")) {
                // line 147
                echo "\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start border-left-line pb-3\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"btn btn-danger btn-circle mb-2 btn-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i data-feather=\"users\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ml-3 mt-2\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-dark font-weight-medium mb-2\">Les utilisateurs non vérifié !<br>
\t\t\t\t\t\t\t\t\t\t\t\tdu système</h5>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 156
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
                    // line 157
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-14 mb-2 text-muted\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "email", [], "any", false, false, false, 157), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start border-left-line\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"btn btn-cyan btn-circle mb-2 btn-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i data-feather=\"users\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ml-3 mt-2\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-dark font-weight-medium mb-2\">Les utilisateurs vérifiés!</h5>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 169
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["userVerified"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["verified"]) {
                    // line 170
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-14 mb-2 text-muted\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["verified"], "email", [], "any", false, false, false, 170), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['verified'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 175
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 180
        echo "\t\t\t<!-- column -->
\t\t\t<!-- column -->
\t\t\t<div class=\"col-lg-3\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h4 class=\"card-title\">Propriétés vendues</h4>
\t\t\t\t\t\t<p class=\"font-14 mb-2 text-muted\">- Statistiques des propriétés vendues, groupées par prix de la  nature du bien
\t\t\t\t\t\t\t<br></p>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<canvas id=\"price\" height=\"150\"></canvas>
\t\t\t\t\t\t\t<ul class=\"list-style-none mb-0\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-circle text-primary font-10 mr-2\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Les ventes directes</span>
\t\t\t\t\t\t\t\t\t";
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["somme"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sommes"]) {
            // line 195
            echo "\t\t\t\t\t\t\t\t\t\t<span class=\"text-dark float-right font-weight-medium\" style=\"font-weight: bold; font-size: 18px;\">";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber(twig_get_attribute($this->env, $this->source, $context["sommes"], "prix_global", [], "any", false, false, false, 195)), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sommes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- column -->
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h4 class=\"card-title\">Revenus Mensuels</h4>
\t\t\t\t\t\t<p class=\"font-14 mb-2 text-muted\">- Statistiques des candidats, selon leurs revenus mensuels<br></p>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<canvas id=\"pie\" height=\"150\"></canvas>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- column -->
\t\t\t<!-- column -->
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h4 class=\"card-title\">Salaire Mensuels</h4>
\t\t\t\t\t\t<p class=\"font-14 mb-2 text-muted\">- Statistiques des candidats, selon leurs salaires mensuels<br></p>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<canvas id=\"pie1\" height=\"150\"></canvas>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- column -->

\t\t</div>
\t\t<div class=\"row\">

\t\t\t<div class=\"col-md-6 col-lg-3\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h4 class=\"card-title text-center\">Prix des Biens</h4>
\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t<thead class=\"bg-primary text-white\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Nature du Bien</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Prix</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t";
        // line 246
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["price"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 247
            echo "\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">";
            // line 249
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "id", [], "any", false, false, false, 249), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 250
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "label", [], "any", false, false, false, 250), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 251
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber(twig_get_attribute($this->env, $this->source, $context["bien"], "price", [], "any", false, false, false, 251)), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\tF CFA</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 256
        echo "\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 263
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 11
    public function block_flash_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "\t\t\t";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "flash_messages"], "method", false, false, false, 12));
        echo "
\t\t";
    }

    // line 263
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 264
        echo "\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js\" integrity=\"sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==\" crossorigin=\"anonymous\"></script>

\t\t<script>
\t\t\tlet biens = document.querySelector(\"#pie\")
let pieGraph = new Chart(biens, {
type: \"polarArea\",
data: {
labels: ";
        // line 271
        echo ($context["nom"] ?? null);
        echo ",
datasets: [
{
label: \"Revenu Mensuel\",
data: ";
        // line 275
        echo ($context["revenu"] ?? null);
        echo ",
backgroundColor: ";
        // line 276
        echo ($context["color"] ?? null);
        echo "
}
]
}
})
let bienx = document.querySelector(\"#pie1\")
let pieGraph1 = new Chart(bienx, {
type: \"polarArea\",
data: {
labels: ";
        // line 285
        echo ($context["prenom"] ?? null);
        echo ",
datasets: [
{
label: \"Salaire Mensuel\",
data: ";
        // line 289
        echo ($context["salaire"] ?? null);
        echo ",
backgroundColor: ";
        // line 290
        echo ($context["color1"] ?? null);
        echo "
}
]
}
})


let clients = document.querySelector(\"#client\")
let clientGraph = new Chart(clients, {
type: \"bar\",
data: {
labels: ";
        // line 301
        echo ($context["dates"] ?? null);
        echo ",
datasets: [
{
label: \"Nombre de Clients\",
data: ";
        // line 305
        echo ($context["compte"] ?? null);
        echo ",
backgroundColor: ";
        // line 306
        echo ($context["colorClient"] ?? null);
        echo "
}
]

}
})


let prices = document.querySelector(\"#price\")
let priceGraph = new Chart(prices, {
type: \"doughnut\",
data: {
labels: ";
        // line 318
        echo ($context["group"] ?? null);
        echo ",
datasets: [
{
label: \"Nombre de Clients\",
data: ";
        // line 322
        echo ($context["prix_total"] ?? null);
        echo ",
backgroundColor: ";
        // line 323
        echo ($context["colorx"] ?? null);
        echo "

}
]

}
})
\t\t</script>
\t";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  550 => 323,  546 => 322,  539 => 318,  524 => 306,  520 => 305,  513 => 301,  499 => 290,  495 => 289,  488 => 285,  476 => 276,  472 => 275,  465 => 271,  456 => 264,  452 => 263,  445 => 12,  441 => 11,  437 => 263,  428 => 256,  417 => 251,  413 => 250,  409 => 249,  405 => 247,  401 => 246,  350 => 197,  341 => 195,  337 => 194,  321 => 180,  314 => 175,  309 => 172,  300 => 170,  296 => 169,  284 => 159,  275 => 157,  271 => 156,  260 => 147,  258 => 146,  254 => 144,  245 => 141,  240 => 139,  235 => 138,  231 => 137,  216 => 124,  214 => 123,  182 => 94,  162 => 77,  157 => 75,  136 => 57,  130 => 54,  109 => 36,  104 => 34,  89 => 22,  81 => 17,  76 => 14,  74 => 11,  71 => 10,  67 => 9,  61 => 6,  57 => 5,  50 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/welcome.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/bundles/EasyAdminBundle/welcome.html.twig");
    }
}
