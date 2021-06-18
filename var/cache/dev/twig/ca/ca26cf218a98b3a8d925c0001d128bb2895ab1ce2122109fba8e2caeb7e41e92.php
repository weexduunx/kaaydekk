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

/* bundles/EasyAdminBundle/welcome.html.twig */
class __TwigTemplate_b7f9d838018b3078e8967323756c58715daffcdc5c95628d4ae8cc7293ca16f0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bundles/EasyAdminBundle/welcome.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bundles/EasyAdminBundle/welcome.html.twig"));

        $this->parent = $this->loadTemplate("bundles/EasyAdminBundle/layout.html.twig", "bundles/EasyAdminBundle/welcome.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        echo "Bienvenue dans Kaay Dëkk";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css\" integrity=\"sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==\" crossorigin=\"anonymous\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 17, $this->source); })()), "userMenu", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["countAllClient"]) || array_key_exists("countAllClient", $context) ? $context["countAllClient"] : (function () { throw new RuntimeError('Variable "countAllClient" does not exist.', 34, $this->source); })()), "value", [], "array", false, false, false, 34), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t<span class=\"badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none\">
\t\t\t\t\t\t\t\t\t+";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber(twig_get_attribute($this->env, $this->source, (isset($context["countAllClient"]) || array_key_exists("countAllClient", $context) ? $context["countAllClient"] : (function () { throw new RuntimeError('Variable "countAllClient" does not exist.', 36, $this->source); })()), "value", [], "array", false, false, false, 36)), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["countAllBien"]) || array_key_exists("countAllBien", $context) ? $context["countAllBien"] : (function () { throw new RuntimeError('Variable "countAllBien" does not exist.', 54, $this->source); })()), "value", [], "array", false, false, false, 54), "html", null, true);
        echo "</h2>

\t\t\t\t\t\t\t\t<span class=\"badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none\">
\t\t\t\t\t\t\t\t\t+";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber(twig_get_attribute($this->env, $this->source, (isset($context["countAllBien"]) || array_key_exists("countAllBien", $context) ? $context["countAllBien"] : (function () { throw new RuntimeError('Variable "countAllBien" does not exist.', 57, $this->source); })()), "value", [], "array", false, false, false, 57)), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["countAllCandidature"]) || array_key_exists("countAllCandidature", $context) ? $context["countAllCandidature"] : (function () { throw new RuntimeError('Variable "countAllCandidature" does not exist.', 75, $this->source); })()), "value", [], "array", false, false, false, 75), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t<span class=\"badge bg-danger font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block\">
\t\t\t\t\t\t\t\t\t+";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber(twig_get_attribute($this->env, $this->source, (isset($context["countAllCandidature"]) || array_key_exists("countAllCandidature", $context) ? $context["countAllCandidature"] : (function () { throw new RuntimeError('Variable "countAllCandidature" does not exist.', 77, $this->source); })()), "value", [], "array", false, false, false, 77)), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["countAllProjet"]) || array_key_exists("countAllProjet", $context) ? $context["countAllProjet"] : (function () { throw new RuntimeError('Variable "countAllProjet" does not exist.', 94, $this->source); })()), "value", [], "array", false, false, false, 94), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "user", [], "any", false, false, false, 123)) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["creation"]) || array_key_exists("creation", $context) ? $context["creation"] : (function () { throw new RuntimeError('Variable "creation" does not exist.', 137, $this->source); })()));
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
                $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 156, $this->source); })()));
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
                $context['_seq'] = twig_ensure_traversable((isset($context["userVerified"]) || array_key_exists("userVerified", $context) ? $context["userVerified"] : (function () { throw new RuntimeError('Variable "userVerified" does not exist.', 169, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 194, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 246, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_flash_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 12
        echo "\t\t\t";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 12, $this->source); })()), "templatePath", [0 => "flash_messages"], "method", false, false, false, 12));
        echo "
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 263
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 264
        echo "\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js\" 
\t\tintegrity=\"sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==\" crossorigin=\"anonymous\"></script>

\t\t<script>
let biens = document.querySelector(\"#pie\")
let pieGraph = new Chart(biens, {
type: \"polarArea\",
data: {
labels: ";
        // line 272
        echo (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new RuntimeError('Variable "nom" does not exist.', 272, $this->source); })());
        echo ",
datasets: [
{
label: \"Revenu Mensuel\",
data: ";
        // line 276
        echo (isset($context["revenu"]) || array_key_exists("revenu", $context) ? $context["revenu"] : (function () { throw new RuntimeError('Variable "revenu" does not exist.', 276, $this->source); })());
        echo ",
backgroundColor: ";
        // line 277
        echo (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 277, $this->source); })());
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
        // line 286
        echo (isset($context["prenom"]) || array_key_exists("prenom", $context) ? $context["prenom"] : (function () { throw new RuntimeError('Variable "prenom" does not exist.', 286, $this->source); })());
        echo ",
datasets: [
{
label: \"Salaire Mensuel\",
data: ";
        // line 290
        echo (isset($context["salaire"]) || array_key_exists("salaire", $context) ? $context["salaire"] : (function () { throw new RuntimeError('Variable "salaire" does not exist.', 290, $this->source); })());
        echo ",
backgroundColor: ";
        // line 291
        echo (isset($context["color1"]) || array_key_exists("color1", $context) ? $context["color1"] : (function () { throw new RuntimeError('Variable "color1" does not exist.', 291, $this->source); })());
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
        // line 302
        echo (isset($context["dates"]) || array_key_exists("dates", $context) ? $context["dates"] : (function () { throw new RuntimeError('Variable "dates" does not exist.', 302, $this->source); })());
        echo ",
datasets: [
{
label: \"Nombre de Clients\",
data: ";
        // line 306
        echo (isset($context["compte"]) || array_key_exists("compte", $context) ? $context["compte"] : (function () { throw new RuntimeError('Variable "compte" does not exist.', 306, $this->source); })());
        echo ",
backgroundColor: ";
        // line 307
        echo (isset($context["colorClient"]) || array_key_exists("colorClient", $context) ? $context["colorClient"] : (function () { throw new RuntimeError('Variable "colorClient" does not exist.', 307, $this->source); })());
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
        // line 319
        echo (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 319, $this->source); })());
        echo ",
datasets: [
{
label: \"Nombre de Clients\",
data: ";
        // line 323
        echo (isset($context["prix_total"]) || array_key_exists("prix_total", $context) ? $context["prix_total"] : (function () { throw new RuntimeError('Variable "prix_total" does not exist.', 323, $this->source); })());
        echo ",
backgroundColor: ";
        // line 324
        echo (isset($context["colorx"]) || array_key_exists("colorx", $context) ? $context["colorx"] : (function () { throw new RuntimeError('Variable "colorx" does not exist.', 324, $this->source); })());
        echo "

}
]

}
})
\t\t</script>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "bundles/EasyAdminBundle/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  617 => 324,  613 => 323,  606 => 319,  591 => 307,  587 => 306,  580 => 302,  566 => 291,  562 => 290,  555 => 286,  543 => 277,  539 => 276,  532 => 272,  522 => 264,  512 => 263,  499 => 12,  489 => 11,  479 => 263,  470 => 256,  459 => 251,  455 => 250,  451 => 249,  447 => 247,  443 => 246,  392 => 197,  383 => 195,  379 => 194,  363 => 180,  356 => 175,  351 => 172,  342 => 170,  338 => 169,  326 => 159,  317 => 157,  313 => 156,  302 => 147,  300 => 146,  296 => 144,  287 => 141,  282 => 139,  277 => 138,  273 => 137,  258 => 124,  256 => 123,  224 => 94,  204 => 77,  199 => 75,  178 => 57,  172 => 54,  151 => 36,  146 => 34,  131 => 22,  123 => 17,  118 => 14,  116 => 11,  113 => 10,  103 => 9,  91 => 6,  81 => 5,  62 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% extends 'bundles/EasyAdminBundle/layout.html.twig' %}

{% block page_title 'Bienvenue dans Kaay Dëkk' %}
{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css\" integrity=\"sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==\" crossorigin=\"anonymous\">

{% endblock %}
{% block content %}
\t<div class=\"container-fluid\">
\t\t{% block flash_messages %}
\t\t\t{{ include(ea.templatePath('flash_messages')) }}
\t\t{% endblock flash_messages %}

\t\t<div class=\"col-7 align-self-center\">
\t\t\t<h3 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">Bienvenue
\t\t\t\t{{ ea.userMenu.name }}</h3>
\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t<ol class=\"breadcrumb m-0 p-0\">
\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t<a href=\"{{'/'}}\">Visiter le site web</a>
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
\t\t\t\t\t\t\t\t<h2 class=\"text-dark mb-1 font-weight-medium\">{{ (countAllClient['value']) }}</h2>
\t\t\t\t\t\t\t\t<span class=\"badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none\">
\t\t\t\t\t\t\t\t\t+{{ (countAllClient ['value'] |format_number) }}
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
\t\t\t\t\t\t\t\t<h2 class=\"text-dark mb-1 font-weight-medium\">{{ (countAllBien['value']) }}</h2>

\t\t\t\t\t\t\t\t<span class=\"badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none\">
\t\t\t\t\t\t\t\t\t+{{ (countAllBien ['value'] | format_number) }}
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
\t\t\t\t\t\t\t\t<h2 class=\"text-dark mb-1 font-weight-medium\">{{ (countAllCandidature['value']) }}</h2>
\t\t\t\t\t\t\t\t<span class=\"badge bg-danger font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block\">
\t\t\t\t\t\t\t\t\t+{{ (countAllCandidature['value'] |format_number) }}
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
\t\t\t\t\t\t\t<h2 class=\"text-dark mb-1 font-weight-medium\">{{ (countAllProjet['value']) }}</h2>

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
\t\t\t{% if app.user %}
\t\t\t\t<div class=\"col-md-6 col-lg-3\">
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
\t\t\t\t\t\t\t\t\t\t{% for client in creation %}
\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-14 mb-2 text-muted\">{{client.prenom}}
\t\t\t\t\t\t\t\t\t\t\t\t{{ client.nom }}
\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-light font-14 text-muted\">{{ client.tel}}</span>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% if is_granted('ROLE_SUPER_USER') %}
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start border-left-line pb-3\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"btn btn-danger btn-circle mb-2 btn-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i data-feather=\"users\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ml-3 mt-2\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-dark font-weight-medium mb-2\">Les utilisateurs non vérifié !<br>
\t\t\t\t\t\t\t\t\t\t\t\tdu système</h5>
\t\t\t\t\t\t\t\t\t\t\t{% for utilisateur in users %}
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-14 mb-2 text-muted\">{{ utilisateur.email }}</p>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start border-left-line\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"btn btn-cyan btn-circle mb-2 btn-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i data-feather=\"users\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ml-3 mt-2\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-dark font-weight-medium mb-2\">Les utilisateurs vérifiés!</h5>
\t\t\t\t\t\t\t\t\t\t\t{% for verified in userVerified %}
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-14 mb-2 text-muted\">{{ verified.email }}</p>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t<!-- column -->
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
\t\t\t\t\t\t\t\t\t{% for sommes in somme %}
\t\t\t\t\t\t\t\t\t\t<span class=\"text-dark float-right font-weight-medium\" style=\"font-weight: bold; font-size: 18px;\">{{sommes.prix_global | format_number}}</span>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</li>
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
\t\t\t\t\t\t\t\t{% for bien in price %}
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">{{ bien.id }}</th>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ bien.label }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ bien.price | format_number}}
\t\t\t\t\t\t\t\t\t\t\t\tF CFA</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t{% block javascripts %}
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js\" 
\t\tintegrity=\"sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==\" crossorigin=\"anonymous\"></script>

\t\t<script>
let biens = document.querySelector(\"#pie\")
let pieGraph = new Chart(biens, {
type: \"polarArea\",
data: {
labels: {{ nom|raw }},
datasets: [
{
label: \"Revenu Mensuel\",
data: {{ revenu|raw }},
backgroundColor: {{ color|raw }}
}
]
}
})
let bienx = document.querySelector(\"#pie1\")
let pieGraph1 = new Chart(bienx, {
type: \"polarArea\",
data: {
labels: {{ prenom|raw }},
datasets: [
{
label: \"Salaire Mensuel\",
data: {{ salaire|raw }},
backgroundColor: {{ color1|raw }}
}
]
}
})


let clients = document.querySelector(\"#client\")
let clientGraph = new Chart(clients, {
type: \"bar\",
data: {
labels: {{ dates|raw }},
datasets: [
{
label: \"Nombre de Clients\",
data: {{ compte|raw }},
backgroundColor: {{ colorClient|raw }}
}
]

}
})


let prices = document.querySelector(\"#price\")
let priceGraph = new Chart(prices, {
type: \"doughnut\",
data: {
labels: {{ group|raw }},
datasets: [
{
label: \"Nombre de Clients\",
data: {{ prix_total|raw }},
backgroundColor: {{ colorx|raw }}

}
]

}
})
\t\t</script>
\t{% endblock %}
{% endblock %}

", "bundles/EasyAdminBundle/welcome.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/bundles/EasyAdminBundle/welcome.html.twig");
    }
}
