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
class __TwigTemplate_13f04fdcb07d03d761eff47e05c6a6ef5c45339fe34155eb1b3ccc7a52a4bf3f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/welcome.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/welcome.html.twig"));

        $this->parent = $this->loadTemplate("bundles/EasyAdminBundle/layout.html.twig", "@EasyAdmin/welcome.html.twig", 2);
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
        echo "\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css\" 
\tintegrity=\"sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==\" crossorigin=\"anonymous\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "\t<div class=\"container-fluid\">
\t\t";
        // line 12
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 15
        echo "
\t\t<div class=\"col-7 align-self-center\">
\t\t\t<h3 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">Bienvenue
\t\t\t\t";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 18, $this->source); })()), "userMenu", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "</h3>
\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t<ol class=\"breadcrumb m-0 p-0\">
\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t<a href=\"";
        // line 23
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
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["countAllClient"]) || array_key_exists("countAllClient", $context) ? $context["countAllClient"] : (function () { throw new RuntimeError('Variable "countAllClient" does not exist.', 35, $this->source); })()), "value", [], "array", false, false, false, 35), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t<span class=\"badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none\">
\t\t\t\t\t\t\t\t\t+";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber(twig_get_attribute($this->env, $this->source, (isset($context["countAllClient"]) || array_key_exists("countAllClient", $context) ? $context["countAllClient"] : (function () { throw new RuntimeError('Variable "countAllClient" does not exist.', 37, $this->source); })()), "value", [], "array", false, false, false, 37)), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t%</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h6 class=\"text-muted font-weight-normal mb-0 w-100 text-truncate\">Total des inscrit(e)s</h6>
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
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["countAllBien"]) || array_key_exists("countAllBien", $context) ? $context["countAllBien"] : (function () { throw new RuntimeError('Variable "countAllBien" does not exist.', 55, $this->source); })()), "value", [], "array", false, false, false, 55), "html", null, true);
        echo "</h2>

\t\t\t\t\t\t\t\t<span class=\"badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none\">
\t\t\t\t\t\t\t\t\t+";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber(twig_get_attribute($this->env, $this->source, (isset($context["countAllBien"]) || array_key_exists("countAllBien", $context) ? $context["countAllBien"] : (function () { throw new RuntimeError('Variable "countAllBien" does not exist.', 58, $this->source); })()), "value", [], "array", false, false, false, 58)), "html", null, true);
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
\t\t\t
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"d-flex d-lg-flex d-md-block align-items-center\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h2 class=\"text-dark mb-1 font-weight-medium\">";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["countAllProjet"]) || array_key_exists("countAllProjet", $context) ? $context["countAllProjet"] : (function () { throw new RuntimeError('Variable "countAllProjet" does not exist.', 76, $this->source); })()), "value", [], "array", false, false, false, 76), "html", null, true);
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

\t\t<div class=\"row\">
\t\t\t<!-- column -->
\t\t\t<div class=\"col-lg-8 col-md-12\">
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
\t\t\t\t<div class=\"col-lg-4 col-md-12\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title text-center\">Nombre d'inscrit(e)s par Type de Bien</h4>
\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t<thead class=\"bg-primary text-white\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Type de Bien</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Nbre d'inscrits</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\"></th>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t

\t\t\t
\t\t<div class=\"row\">
\t\t<!-- column -->
\t\t<!-- column -->
\t\t\t";
        // line 141
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 141, $this->source); })()), "user", [], "any", false, false, false, 141)) {
            // line 142
            echo "\t\t\t\t<div class=\"col-md-6 col-lg-4\">
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
\t\t\t\t\t\t\t\t\t<div class=\"ml-3 mt-2 table-responsive\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-dark font-weight-medium mb-2\">Les inscriptions non-activés !</h5>
\t\t\t\t\t\t\t\t\t\t";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["creation"]) || array_key_exists("creation", $context) ? $context["creation"] : (function () { throw new RuntimeError('Variable "creation" does not exist.', 155, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 156
                echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-14 mb-2 text-muted\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "prenom", [], "any", false, false, false, 156), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 157
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "nom", [], "any", false, false, false, 157), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-light font-14 text-muted\">";
                // line 159
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "tel", [], "any", false, false, false, 159), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 164
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 165
                echo "\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start border-left-line pb-3\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"btn btn-danger btn-circle mb-2 btn-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i data-feather=\"users\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ml-3 mt-2 table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-dark font-weight-medium mb-2\">Les utilisateurs non vérifié !<br>
\t\t\t\t\t\t\t\t\t\t\t\tdu système</h5>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 174
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 174, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
                    // line 175
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-14 mb-2 text-muted\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "email", [], "any", false, false, false, 175), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 177
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start border-left-line\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"btn btn-cyan btn-circle mb-2 btn-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i data-feather=\"users\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ml-3 mt-2 table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-dark font-weight-medium mb-2\">Les utilisateurs vérifiés!</h5>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 187
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["userVerified"]) || array_key_exists("userVerified", $context) ? $context["userVerified"] : (function () { throw new RuntimeError('Variable "userVerified" does not exist.', 187, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["verified"]) {
                    // line 188
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-14 mb-2 text-muted\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["verified"], "email", [], "any", false, false, false, 188), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['verified'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 190
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 193
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 198
        echo "\t\t\t<!-- column -->
\t\t\t<!-- column -->
\t\t\t<div class=\"col-md-6 col-lg-8\">
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
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t<div class=\"col-8\">
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
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 227, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 228
            echo "\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">";
            // line 230
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "id", [], "any", false, false, false, 230), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 231
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "label", [], "any", false, false, false, 231), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 232
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber(twig_get_attribute($this->env, $this->source, $context["bien"], "price", [], "any", false, false, false, 232)), "html", null, true);
            echo " F CFA</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- column -->
\t\t\t<div class=\"col-4 table-responsive\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h4 class=\"card-title\">Propriétés vendues</h4>
\t\t\t\t\t\t<p class=\"font-14 mb-2 text-muted\">- Statistiques des propriétés vendues, groupées par prix de la  nature du bien
\t\t\t\t\t\t\t<br></p>
\t\t\t\t\t\t<div >
\t\t\t\t\t\t\t<canvas id=\"price\" height=\"150\"></canvas>
\t\t\t\t\t\t\t<ul class=\"list-style-none mb-0\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-circle text-primary font-10 mr-2\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Les ventes directes</span>
\t\t\t\t\t\t\t\t\t";
        // line 254
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 254, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sommes"]) {
            // line 255
            echo "\t\t\t\t\t\t\t\t\t\t<span class=\"responsive text-dark float-right font-weight-medium\" style=\"font-weight: bold; font-size: 18px;\">";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber(twig_get_attribute($this->env, $this->source, $context["sommes"], "prix_global", [], "any", false, false, false, 255)), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sommes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- column -->
\t\t</div>
\t\t
\t
\t";
        // line 267
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_flash_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 13
        echo "\t\t\t";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 13, $this->source); })()), "templatePath", [0 => "flash_messages"], "method", false, false, false, 13));
        echo "
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 267
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 268
        echo "\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js\" 
\t\tintegrity=\"sha512-s+xg36jbIujB2S2VK</div>fpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==\" crossorigin=\"anonymous\"></script>

\t\t<script>

let bienx = document.querySelector(\"#pie1\")
let pieGraph1 = new Chart(bienx, {
type: \"polarArea\",
data: {
labels: ";
        // line 277
        echo (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new RuntimeError('Variable "nom" does not exist.', 277, $this->source); })());
        echo ",
datasets: [
{
label: \"Salaire Mensuel\",
backgroundColor: ";
        // line 281
        echo (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 281, $this->source); })());
        echo "
}]
    }
})


let clients = document.querySelector(\"#client\")
let clientGraph = new Chart(clients, {
type: \"bar\",
data: {
labels: ";
        // line 291
        echo (isset($context["dates"]) || array_key_exists("dates", $context) ? $context["dates"] : (function () { throw new RuntimeError('Variable "dates" does not exist.', 291, $this->source); })());
        echo ",
datasets: [
{
label: \"Nombre de Clients\",
data: ";
        // line 295
        echo (isset($context["compte"]) || array_key_exists("compte", $context) ? $context["compte"] : (function () { throw new RuntimeError('Variable "compte" does not exist.', 295, $this->source); })());
        echo ",
backgroundColor: ";
        // line 296
        echo (isset($context["colorClient"]) || array_key_exists("colorClient", $context) ? $context["colorClient"] : (function () { throw new RuntimeError('Variable "colorClient" does not exist.', 296, $this->source); })());
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
        // line 308
        echo (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 308, $this->source); })());
        echo ",
datasets: [
{
label: \"Nombre de Clients\",
data: ";
        // line 312
        echo (isset($context["prix_total"]) || array_key_exists("prix_total", $context) ? $context["prix_total"] : (function () { throw new RuntimeError('Variable "prix_total" does not exist.', 312, $this->source); })());
        echo ",
backgroundColor: ";
        // line 313
        echo (isset($context["colorx"]) || array_key_exists("colorx", $context) ? $context["colorx"] : (function () { throw new RuntimeError('Variable "colorx" does not exist.', 313, $this->source); })());
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
        return "@EasyAdmin/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  588 => 313,  584 => 312,  577 => 308,  562 => 296,  558 => 295,  551 => 291,  538 => 281,  531 => 277,  520 => 268,  510 => 267,  497 => 13,  487 => 12,  477 => 267,  465 => 257,  456 => 255,  452 => 254,  432 => 236,  422 => 232,  418 => 231,  414 => 230,  410 => 228,  406 => 227,  375 => 198,  368 => 193,  363 => 190,  354 => 188,  350 => 187,  338 => 177,  329 => 175,  325 => 174,  314 => 165,  312 => 164,  308 => 162,  299 => 159,  294 => 157,  289 => 156,  285 => 155,  270 => 142,  268 => 141,  200 => 76,  179 => 58,  173 => 55,  152 => 37,  147 => 35,  132 => 23,  124 => 18,  119 => 15,  117 => 12,  114 => 11,  104 => 10,  91 => 6,  81 => 5,  62 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% extends 'bundles/EasyAdminBundle/layout.html.twig' %}

{% block page_title 'Bienvenue dans Kaay Dëkk' %}
{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css\" 
\tintegrity=\"sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==\" crossorigin=\"anonymous\">

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
\t\t\t\t\t\t\t<h6 class=\"text-muted font-weight-normal mb-0 w-100 text-truncate\">Total des inscrit(e)s</h6>
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
\t\t\t
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

\t\t<div class=\"row\">
\t\t\t<!-- column -->
\t\t\t<div class=\"col-lg-8 col-md-12\">
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
\t\t\t\t<div class=\"col-lg-4 col-md-12\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title text-center\">Nombre d'inscrit(e)s par Type de Bien</h4>
\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t<thead class=\"bg-primary text-white\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Type de Bien</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Nbre d'inscrits</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\"></th>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t

\t\t\t
\t\t<div class=\"row\">
\t\t<!-- column -->
\t\t<!-- column -->
\t\t\t{% if app.user %}
\t\t\t\t<div class=\"col-md-6 col-lg-4\">
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
\t\t\t\t\t\t\t\t\t<div class=\"ml-3 mt-2 table-responsive\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-dark font-weight-medium mb-2\">Les inscriptions non-activés !</h5>
\t\t\t\t\t\t\t\t\t\t{% for client in creation %}
\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-14 mb-2 text-muted\">{{client.prenom}}
\t\t\t\t\t\t\t\t\t\t\t\t{{ client.nom }}
\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-light font-14 text-muted\">{{ client.tel}}</span>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start border-left-line pb-3\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"btn btn-danger btn-circle mb-2 btn-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i data-feather=\"users\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ml-3 mt-2 table-responsive\">
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
\t\t\t\t\t\t\t\t\t\t<div class=\"ml-3 mt-2 table-responsive\">
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
\t\t\t<div class=\"col-md-6 col-lg-8\">
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
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t<div class=\"col-8\">
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
\t\t\t\t\t\t\t\t\t\t\t<td>{{ bien.price | format_number}} F CFA</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- column -->
\t\t\t<div class=\"col-4 table-responsive\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h4 class=\"card-title\">Propriétés vendues</h4>
\t\t\t\t\t\t<p class=\"font-14 mb-2 text-muted\">- Statistiques des propriétés vendues, groupées par prix de la  nature du bien
\t\t\t\t\t\t\t<br></p>
\t\t\t\t\t\t<div >
\t\t\t\t\t\t\t<canvas id=\"price\" height=\"150\"></canvas>
\t\t\t\t\t\t\t<ul class=\"list-style-none mb-0\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-circle text-primary font-10 mr-2\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Les ventes directes</span>
\t\t\t\t\t\t\t\t\t{% for sommes in somme %}
\t\t\t\t\t\t\t\t\t\t<span class=\"responsive text-dark float-right font-weight-medium\" style=\"font-weight: bold; font-size: 18px;\">{{sommes.prix_global | format_number}}</span>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- column -->
\t\t</div>
\t\t
\t
\t{% block javascripts %}
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js\" 
\t\tintegrity=\"sha512-s+xg36jbIujB2S2VK</div>fpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==\" crossorigin=\"anonymous\"></script>

\t\t<script>

let bienx = document.querySelector(\"#pie1\")
let pieGraph1 = new Chart(bienx, {
type: \"polarArea\",
data: {
labels: {{ nom|raw }},
datasets: [
{
label: \"Salaire Mensuel\",
backgroundColor: {{ color|raw }}
}]
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

", "@EasyAdmin/welcome.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/bundles/EasyAdminBundle/welcome.html.twig");
    }
}
