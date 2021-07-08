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

/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_970ae1ad29f925f64c0e19fd303e0e2f321d2c39b166773f4c113bf387c31d74 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_metas' => [$this, 'block_head_metas'],
            'page_title' => [$this, 'block_page_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'body' => [$this, 'block_body'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'javascript_page_layout' => [$this, 'block_javascript_page_layout'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'wrapper' => [$this, 'block_wrapper'],
            'header' => [$this, 'block_header'],
            'header_custom_menu' => [$this, 'block_header_custom_menu'],
            'user_menu' => [$this, 'block_user_menu'],
            'sidebar' => [$this, 'block_sidebar'],
            'main_menu_wrapper' => [$this, 'block_main_menu_wrapper'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions_wrapper' => [$this, 'block_page_actions_wrapper'],
            'page_actions' => [$this, 'block_page_actions'],
            'content' => [$this, 'block_content'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'main' => [$this, 'block_main'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'body_javascript' => [$this, 'block_body_javascript'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        // line 2
        $context["__internal_8dc3cb0ad3c899169736f2fc41ed40bcb47b5a291fae3ba674d7dab4dcd648ba"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 2, $this->source); })()), "i18n", [], "any", false, false, false, 2), "translationDomain", [], "any", false, false, false, 2);
        // line 3
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 5, $this->source); })()), "i18n", [], "any", false, false, false, 5), "htmlLocale", [], "any", false, false, false, 5), "html", null, true);
        echo "\" dir=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 5, $this->source); })()), "i18n", [], "any", false, false, false, 5), "textDirection", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
\t<head>
\t\t";
        // line 7
        $this->displayBlock('head_metas', $context, $blocks);
        // line 14
        echo "
\t\t<title>
\t\t\t";
        // line 16
        $this->displayBlock('page_title', $context, $blocks);
        // line 19
        echo "\t\t</title>

\t\t";
        // line 21
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 39
        echo "
\t\t";
        // line 40
        $this->displayBlock('configured_stylesheets', $context, $blocks);
        // line 46
        echo "
\t\t";
        // line 47
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 50
        echo "

\t\t";
        // line 52
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 56
        echo "
\t\t";
        // line 57
        if (("rtl" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 57, $this->source); })()), "i18n", [], "any", false, false, false, 57), "textDirection", [], "any", false, false, false, 57))) {
            // line 58
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo "bundles/easyadmin/app.rtl.css";
            echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
            // line 59
            echo "bundles/easyadmin/app-custom-rtl.css";
            echo "\">
\t\t";
        }
        // line 61
        echo "
\t\t";
        // line 62
        $this->displayBlock('configured_head_contents', $context, $blocks);
        // line 67
        echo "\t</head>

\t";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 294
        echo "</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_head_metas($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_metas"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_metas"));

        // line 8
        echo "\t\t\t<meta charset=\"utf-8\">
\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t\t<meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\"/>
\t\t\t<meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
\t\t\t<meta name=\"generator\" content=\"EasyAdmin\"/>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 17
        echo "\t\t\t\t";
        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        echo "
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 22
        echo "\t\t\t<!-- Custom CSS -->
\t\t\t<link href=\"";
        // line 23
        echo "assets/bs-tags/bootstrap-tagsinput.css";
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 24
        echo "assets/smart-wizard/css/smart_wizard.css";
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 26
        echo "assets/css/select2.css";
        echo "\" rel=\"stylesheet\">


\t\t\t<!-- Custom CSS -->
\t\t\t<link href=\"";
        // line 30
        echo "assets/dist/css/style.css";
        echo "\" rel=\"stylesheet\">
\t\t<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t\t\t<!--[if lt IE 9]>
\t\t\t        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t\t\t        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
\t\t\t        <![endif]-->

\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_stylesheets"));

        // line 41
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 41), "cssFiles", [], "any", true, true, false, 41) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 41), "cssFiles", [], "any", false, false, false, 41)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 41), "cssFiles", [], "any", false, false, false, 41)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 42
            echo "\t\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 48
        echo "\t\t\t<link rel=\"shortcut icon\" href=\"";
        echo "/assets/images/favicon.png";
        echo "\">
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 53
        echo "
\t\t\t<script src=\"";
        // line 54
        echo "bundles/easyadmin/app.js";
        echo "\"></script>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_head_contents"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_head_contents"));

        // line 63
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 63), "headContents", [], "any", true, true, false, 63) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 63), "headContents", [], "any", false, false, false, 63)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 63), "headContents", [], "any", false, false, false, 63)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 64
            echo "\t\t\t\t";
            echo $context["htmlContent"];
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 70
        echo "\t\t<body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"ea ";
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">

\t\t\t";
        // line 72
        $this->displayBlock('javascript_page_layout', $context, $blocks);
        // line 83
        echo "
\t\t\t";
        // line 84
        $this->displayBlock('wrapper_wrapper', $context, $blocks);
        // line 267
        echo "
\t\t\t";
        // line 268
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 269
        echo "
\t\t\t";
        // line 270
        $this->displayBlock('configured_javascripts', $context, $blocks);
        // line 275
        echo "\t\t\t<!-- All Jquery -->
\t\t\t<!-- ============================================================== -->
\t\t\t<script src=\"../assets/js/popper.js\"></script>
\t\t\t<script src=\"../assets/js/bootstrap.js\"></script>
\t\t\t<script src=\"../assets/js/app-style-switcher.js\"></script>
\t\t\t<script src=\"../assets/js/perfect-scrollbar.jquery.min.js\"></script>
\t\t\t<script src=\"../assets/js/feather.js\"></script>
\t\t\t<script src=\"../assets/js/custom.js\"></script>
\t\t\t<script src=\"../assets/bs-tags/bootstrap-tagsinput.js\"></script>
\t\t\t<script src=\"../assets/smart-wizard/js/jquery.smartWizard.js\"></script>

\t\t\t";
        // line 286
        $this->displayBlock('configured_body_contents', $context, $blocks);
        // line 291
        echo "
\t\t</body>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_javascript_page_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_page_layout"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_page_layout"));

        // line 73
        echo "
\t\t\t\t<script>
\t\t\t\t\tdocument.body.classList.add('ea-content-width-' + (
localStorage.getItem('ea/content/width') || '";
        // line 76
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 76), "contentWidth", [], "any", true, true, false, 76) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 76), "contentWidth", [], "any", false, false, false, 76)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 76), "contentWidth", [], "any", false, false, false, 76)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", true, true, false, 76) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 76)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 76)) : ("normal")))), "html", null, true);
        echo "'
), 'ea-sidebar-width-' + (
localStorage.getItem('ea/sidebar/width') || '";
        // line 78
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 78), "sidebarWidth", [], "any", true, true, false, 78) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 78), "sidebarWidth", [], "any", false, false, false, 78)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 78), "sidebarWidth", [], "any", false, false, false, 78)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", true, true, false, 78) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 78)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 78)) : ("normal")))), "html", null, true);
        echo "'
));
\t\t\t\t</script>

\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper_wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper_wrapper"));

        // line 85
        echo "\t\t\t\t<div id=\"main-wrapper\" class=\"mini-sidebar\" data-theme=\"light\" data-layout=\"vertical\" data-navbarbg=\"skin6\" data-sidebartype=\"full\" data-sidebar-position=\"fixed\" data-header-position=\"fixed\" data-boxed-layout=\"full\">
\t\t\t\t\t";
        // line 86
        $this->displayBlock('wrapper', $context, $blocks);
        // line 259
        echo "\t\t\t\t\t<footer class=\"footer text-center text-muted\">\"
\t\t\t\t\t\t                All Rights Reserved by NGTS INFORMATIQUE. Designed and Developed by\"
\t\t\t\t\t\t<a class=\"text-muted\" href=\"http://idy-portfolio.byethost24.com/\">
\t\t\t\t\t\t\tIdrissa Ndiouck</a>
\t\t\t\t\t\t<span>créée avec &hearts;</span>
\t\t\t\t\t</footer>
\t\t\t\t</div>
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
    public function block_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper"));

        // line 87
        echo "\t\t\t\t\t\t<header class=\"topbar\" data-navbarbg=\"skin6\">
\t\t\t\t\t\t\t";
        // line 88
        $this->displayBlock('header', $context, $blocks);
        // line 173
        echo "\t\t\t\t\t\t</header>

\t\t\t\t\t\t<aside class=\"left-sidebar\" data-sidebarbg=\"skin6\">
\t\t\t\t\t\t\t<div class=\"scroll-sidebar ps-container ps-theme-default ps-active-y\" 
\t\t\t\t\t\t\tdata-sidebarbg=\"skin6\" data-ps-id=\"331a301f-eec9-5c91-2c14-0a94a8ae5440\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 179
        $this->displayBlock('sidebar', $context, $blocks);
        // line 185
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"ps-scrollbar-x-rail\" style=\"left: 0; bottom: 0;\">
\t\t\t\t\t\t\t\t\t<div class=\"ps-scrollbar-x\" tabindex=\"0\" style=\"left: 0; width: 0;\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</aside>

\t\t\t\t\t\t<div class=\"page-wrapper\" style=\"display: block;\">
\t\t\t\t\t\t\t<div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
\t\t\t\t\t\t\t";
        // line 195
        $this->displayBlock('content_header_wrapper', $context, $blocks);
        // line 231
        echo "
\t\t\t\t\t\t\t";
        // line 232
        $this->displayBlock('content', $context, $blocks);
        // line 256
        echo "\t\t\t\t\t\t\t<div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 89
        echo "\t\t\t\t\t\t\t\t<nav
\t\t\t\t\t\t\t\t\tclass=\"navbar top-navbar navbar-expand-md navbar-light\">
\t\t\t\t\t\t\t\t\t";
        // line 92
        echo "\t\t\t\t\t\t\t\t\t<div class=\"navbar-header\" data-logobg=\"skin6\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-toggler waves-effect waves-light d-block d-md-none\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-close ti-menu\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"navbar-brand\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<b class=\"logo-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 99
        echo "/assets/images/favicon.png";
        echo "\" alt=\"homepage\" class=\"dark-logo\">
\t\t\t\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"logo-text\" style=\"font-weight: bold; color: #00558b; font-size: 22px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\tKaay Dëkk Immo
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 105
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a class=\"topbartoggler d-block d-md-none waves-effect waves-light collapsed\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-user\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"navbar-collapse collapse\" id=\"navbarSupportedContent\" style>
\t\t\t\t\t\t\t\t\t\t<ul class=\"navbar-nav float-left mr-auto ml-3 pl-1\"></ul>
\t\t\t\t\t\t\t\t\t\t";
        // line 114
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 171
        echo "\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 114
    public function block_header_custom_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 115
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_constant_is_defined("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter::IS_IMPERSONATOR")) {
            // line 116
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context["impersonator_permission"] = "IS_IMPERSONATOR";
            // line 117
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 118
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context["impersonator_permission"] = "ROLE_PREVIOUS_ADMIN";
            // line 119
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 120
        echo "\t\t\t\t\t\t\t\t\t\t\t<ul class=\"navbar-nav float-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item d-none d-md-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"javascript:void(0)\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 126
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 126, $this->source); })()), "userMenu", [], "any", false, false, false, 126), "isAvatarDisplayed", [], "any", false, false, false, 126)) {
            // line 127
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((null == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 127, $this->source); })()), "userMenu", [], "any", false, false, false, 127), "avatarUrl", [], "any", false, false, false, 127))) {
                // line 128
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-fw ";
                echo (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 128, $this->source); })()), "user", [], "any", false, false, false, 128))) ? ("fa-user-circle") : ("fa-user-times"));
                echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 130
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"user-avatar rounded-circle\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 130, $this->source); })()), "userMenu", [], "any", false, false, false, 130), "avatarUrl", [], "any", false, false, false, 130), "html", null, true);
                echo "\" alt=\"\" width=\"50\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 132
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 133
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ml-2 d-none d-lg-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Hello,</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 136
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 136, $this->source); })()), "userMenu", [], "any", false, false, false, 136), "isNameDisplayed", [], "any", false, false, false, 136)) {
            // line 137
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"user-name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 137, $this->source); })()), "userMenu", [], "any", false, false, false, 137), "name", [], "any", false, false, false, 137), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 139
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24                                                      24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-down svg-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polyline points=\"6 9 12 15 18 9\"></polyline>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 145
        ob_start();
        // line 146
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $this->displayBlock('user_menu', $context, $blocks);
        // line 165
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context["_user_menu_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 166
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        echo twig_escape_filter($this->env, (isset($context["_user_menu_content"]) || array_key_exists("_user_menu_content", $context) ? $context["_user_menu_content"] : (function () { throw new RuntimeError('Variable "_user_menu_content" does not exist.', 166, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 146
    public function block_user_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user_menu"));

        // line 147
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 147, $this->source); })()), "userMenu", [], "any", false, false, false, 147), "items", [], "any", false, false, false, 147)) > 0)) {
            // line 148
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right user-dd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 149, $this->source); })()), "userMenu", [], "any", false, false, false, 149), "items", [], "any", false, false, false, 149));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 150
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "isMenuSection", [], "any", false, false, false, 150)) {
                    // line 151
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popover-content-section user-details ";
                    echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 151, $this->source); })()), "userMenu", [], "any", false, false, false, 151), "items", [], "any", false, false, false, 151)) > 0)) ? ("user-has-actions") : (""));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 152
                    (((null === twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 152, $this->source); })()), "user", [], "any", false, false, false, 152))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true))) : (print ("")));
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<hr class=\"m-0\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 156
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 156), "html", null, true);
                    echo "\" target=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkTarget", [], "any", false, false, false, 156), "html", null, true);
                    echo "\" rel=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkRel", [], "any", false, false, false, 156), "html", null, true);
                    echo "\" referrerpolicy=\"origin-when-cross-origin\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-sign-out\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 158
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 158), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 161
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 164
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 179
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 180
        echo "\t\t\t\t\t\t\t\t\t\t";
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 183
        echo "
\t\t\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 180
    public function block_main_menu_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 181
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 181, $this->source); })()), "templatePath", [0 => "main_menu"], "method", false, false, false, 181));
        echo "
\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 195
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header_wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header_wrapper"));

        // line 196
        echo "\t\t\t\t\t\t\t\t";
        $context["has_help_message"] =  !twig_test_empty((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 196), "helpMessage", [], "any", true, true, false, 196) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 196), "helpMessage", [], "any", false, false, false, 196)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 196), "helpMessage", [], "any", false, false, false, 196)) : ("")));
        // line 197
        echo "\t\t\t\t\t\t\t\t<div class=\"page-breadcrumb\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 202
        $this->displayBlock('content_title', $context, $blocks);
        // line 203
        echo "\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ol class=\"breadcrumb m-0 p-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 207
        if ((isset($context["has_help_message"]) || array_key_exists("has_help_message", $context) ? $context["has_help_message"] : (function () { throw new RuntimeError('Variable "has_help_message" does not exist.', 207, $this->source); })())) {
            // line 208
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-question-circle\" data-toggle=\"tooltip\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
            // line 211
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 211, $this->source); })()), "crud", [], "any", false, false, false, 211), "helpMessage", [], "any", false, false, false, 211), "html_attr");
            echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 215
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-5 align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"customize-input float-right\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 221
        $this->displayBlock('page_actions_wrapper', $context, $blocks);
        // line 226
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 202
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 221
    public function block_page_actions_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions_wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions_wrapper"));

        // line 222
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"page-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 223
        $this->displayBlock('page_actions', $context, $blocks);
        // line 224
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 223
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 232
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 233
        echo "\t\t\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t\t\t";
        // line 234
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 237
        echo "\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card \">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body \">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 241
        $this->displayBlock('main', $context, $blocks);
        // line 242
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 243
        $this->displayBlock('content_footer_wrapper', $context, $blocks);
        // line 251
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 234
    public function block_flash_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 235
        echo "\t\t\t\t\t\t\t\t\t\t";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 235, $this->source); })()), "templatePath", [0 => "flash_messages"], "method", false, false, false, 235));
        echo "
\t\t\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 241
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 243
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer_wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer_wrapper"));

        // line 244
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context["content_footer"] = ((        $this->hasBlock("content_footer", $context, $blocks)) ? (        $this->renderBlock("content_footer", $context, $blocks)) : (""));
        // line 245
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !twig_test_empty((isset($context["content_footer"]) || array_key_exists("content_footer", $context) ? $context["content_footer"] : (function () { throw new RuntimeError('Variable "content_footer" does not exist.', 245, $this->source); })()))) {
            // line 246
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 247
            echo twig_escape_filter($this->env, (isset($context["content_footer"]) || array_key_exists("content_footer", $context) ? $context["content_footer"] : (function () { throw new RuntimeError('Variable "content_footer" does not exist.', 247, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 250
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 268
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 270
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_javascripts"));

        // line 271
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 271), "jsFiles", [], "any", true, true, false, 271) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 271), "jsFiles", [], "any", false, false, false, 271)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 271), "jsFiles", [], "any", false, false, false, 271)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 272
            echo "\t\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo "\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 286
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_body_contents"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_body_contents"));

        // line 287
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 287), "bodyContents", [], "any", true, true, false, 287) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 287), "bodyContents", [], "any", false, false, false, 287)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 287), "bodyContents", [], "any", false, false, false, 287)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 288
            echo "\t\t\t\t\t";
            echo $context["htmlContent"];
            echo "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 290
        echo "\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1178 => 290,  1169 => 288,  1164 => 287,  1154 => 286,  1144 => 274,  1135 => 272,  1130 => 271,  1120 => 270,  1102 => 268,  1092 => 250,  1086 => 247,  1083 => 246,  1080 => 245,  1077 => 244,  1067 => 243,  1049 => 241,  1036 => 235,  1026 => 234,  1012 => 251,  1010 => 243,  1007 => 242,  1005 => 241,  999 => 237,  997 => 234,  994 => 233,  984 => 232,  966 => 223,  955 => 224,  953 => 223,  950 => 222,  940 => 221,  922 => 202,  908 => 226,  906 => 221,  898 => 215,  891 => 211,  886 => 208,  884 => 207,  878 => 203,  876 => 202,  869 => 197,  866 => 196,  856 => 195,  843 => 181,  833 => 180,  822 => 183,  819 => 180,  809 => 179,  799 => 164,  795 => 162,  789 => 161,  783 => 158,  773 => 156,  766 => 152,  761 => 151,  758 => 150,  754 => 149,  751 => 148,  748 => 147,  738 => 146,  722 => 166,  719 => 165,  716 => 146,  714 => 145,  706 => 139,  700 => 137,  698 => 136,  693 => 133,  690 => 132,  684 => 130,  678 => 128,  675 => 127,  673 => 126,  665 => 120,  662 => 119,  659 => 118,  656 => 117,  653 => 116,  650 => 115,  640 => 114,  629 => 171,  627 => 114,  616 => 105,  609 => 99,  600 => 92,  596 => 89,  586 => 88,  574 => 256,  572 => 232,  569 => 231,  567 => 195,  555 => 185,  553 => 179,  545 => 173,  543 => 88,  540 => 87,  530 => 86,  513 => 259,  511 => 86,  508 => 85,  498 => 84,  483 => 78,  478 => 76,  473 => 73,  463 => 72,  428 => 70,  416 => 291,  414 => 286,  401 => 275,  399 => 270,  396 => 269,  394 => 268,  391 => 267,  389 => 84,  386 => 83,  384 => 72,  376 => 70,  366 => 69,  356 => 66,  347 => 64,  342 => 63,  332 => 62,  320 => 54,  317 => 53,  307 => 52,  294 => 48,  284 => 47,  273 => 44,  264 => 42,  259 => 41,  249 => 40,  230 => 30,  223 => 26,  218 => 24,  214 => 23,  211 => 22,  201 => 21,  188 => 17,  178 => 16,  163 => 8,  153 => 7,  141 => 294,  139 => 69,  135 => 67,  133 => 62,  130 => 61,  125 => 59,  120 => 58,  118 => 57,  115 => 56,  113 => 52,  109 => 50,  107 => 47,  104 => 46,  102 => 40,  99 => 39,  97 => 21,  93 => 19,  91 => 16,  87 => 14,  85 => 7,  78 => 5,  74 => 3,  72 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\">
\t<head>
\t\t{% block head_metas %}
\t\t\t<meta charset=\"utf-8\">
\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t\t<meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\"/>
\t\t\t<meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
\t\t\t<meta name=\"generator\" content=\"EasyAdmin\"/>
\t\t{% endblock head_metas %}

\t\t<title>
\t\t\t{% block page_title %}
\t\t\t\t{{ block('content_title')|striptags|raw }}
\t\t\t{% endblock %}
\t\t</title>

\t\t{% block head_stylesheets %}
\t\t\t<!-- Custom CSS -->
\t\t\t<link href=\"{{ ('assets/bs-tags/bootstrap-tagsinput.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ ('assets/smart-wizard/css/smart_wizard.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ ('assets/css/select2.css') }}\" rel=\"stylesheet\">


\t\t\t<!-- Custom CSS -->
\t\t\t<link href=\"{{ ('assets/dist/css/style.css') }}\" rel=\"stylesheet\">
\t\t<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t\t\t<!--[if lt IE 9]>
\t\t\t        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t\t\t        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
\t\t\t        <![endif]-->

\t\t{% endblock %}

\t\t{% block configured_stylesheets %}
\t\t\t{% for css_asset in ea.assets.cssFiles ?? [] %}
\t\t\t\t<link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
\t\t\t{% endfor %}

\t\t{% endblock %}

\t\t{% block head_favicon %}
\t\t\t<link rel=\"shortcut icon\" href=\"{{ ('/assets/images/favicon.png') }}\">
\t\t{% endblock %}


\t\t{% block head_javascript %}

\t\t\t<script src=\"{{ ('bundles/easyadmin/app.js') }}\"></script>
\t\t{% endblock head_javascript %}

\t\t{% if 'rtl' == ea.i18n.textDirection %}
\t\t\t<link rel=\"stylesheet\" href=\"{{ ('bundles/easyadmin/app.rtl.css') }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ ('bundles/easyadmin/app-custom-rtl.css') }}\">
\t\t{% endif %}

\t\t{% block configured_head_contents %}
\t\t\t{% for htmlContent in ea.assets.headContents ?? [] %}
\t\t\t\t{{ htmlContent|raw }}
\t\t\t{% endfor %}
\t\t{% endblock %}
\t</head>

\t{% block body %}
\t\t<body id=\"{% block body_id %}{% endblock %}\" class=\"ea {% block body_class %}{% endblock %}\">

\t\t\t{% block javascript_page_layout %}

\t\t\t\t<script>
\t\t\t\t\tdocument.body.classList.add('ea-content-width-' + (
localStorage.getItem('ea/content/width') || '{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}'
), 'ea-sidebar-width-' + (
localStorage.getItem('ea/sidebar/width') || '{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}'
));
\t\t\t\t</script>

\t\t\t{% endblock javascript_page_layout %}

\t\t\t{% block wrapper_wrapper %}
\t\t\t\t<div id=\"main-wrapper\" class=\"mini-sidebar\" data-theme=\"light\" data-layout=\"vertical\" data-navbarbg=\"skin6\" data-sidebartype=\"full\" data-sidebar-position=\"fixed\" data-header-position=\"fixed\" data-boxed-layout=\"full\">
\t\t\t\t\t{% block wrapper %}
\t\t\t\t\t\t<header class=\"topbar\" data-navbarbg=\"skin6\">
\t\t\t\t\t\t\t{% block header %}
\t\t\t\t\t\t\t\t<nav
\t\t\t\t\t\t\t\t\tclass=\"navbar top-navbar navbar-expand-md navbar-light\">
\t\t\t\t\t\t\t\t\t{# LOGO #}
\t\t\t\t\t\t\t\t\t<div class=\"navbar-header\" data-logobg=\"skin6\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-toggler waves-effect waves-light d-block d-md-none\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-close ti-menu\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"navbar-brand\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<b class=\"logo-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ ('/assets/images/favicon.png') }}\" alt=\"homepage\" class=\"dark-logo\">
\t\t\t\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"logo-text\" style=\"font-weight: bold; color: #00558b; font-size: 22px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\tKaay Dëkk Immo
\t\t\t\t\t\t\t\t\t\t\t\t\t{#<img src=\"{{ ('/assets/images/logo-kdi.png') }}\" width=\"200\"
\t\t\t\t\t\t\t\t\t\t\t\t\t                                                      alt=\"homepage\" class=\"dark-logo\"> #}
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a class=\"topbartoggler d-block d-md-none waves-effect waves-light collapsed\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-user\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"navbar-collapse collapse\" id=\"navbarSupportedContent\" style>
\t\t\t\t\t\t\t\t\t\t<ul class=\"navbar-nav float-left mr-auto ml-3 pl-1\"></ul>
\t\t\t\t\t\t\t\t\t\t{% block header_custom_menu %}
\t\t\t\t\t\t\t\t\t\t\t{% if constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined %}
\t\t\t\t\t\t\t\t\t\t\t\t{% set impersonator_permission = 'IS_IMPERSONATOR' %}
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t{% set impersonator_permission = 'ROLE_PREVIOUS_ADMIN' %}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"navbar-nav float-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item d-none d-md-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"javascript:void(0)\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if ea.userMenu.isAvatarDisplayed %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if null == ea.userMenu.avatarUrl %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-fw {{ ea.user is not null ? 'fa-user-circle' : 'fa-user-times' }}\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"user-avatar rounded-circle\" src=\"{{ ea.userMenu.avatarUrl }}\" alt=\"\" width=\"50\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ml-2 d-none d-lg-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Hello,</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if ea.userMenu.isNameDisplayed %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"user-name\">{{ ea.userMenu.name }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24                                                      24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-down svg-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polyline points=\"6 9 12 15 18 9\"></polyline>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set _user_menu_content %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% block user_menu %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if ea.userMenu.items|length > 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right user-dd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for item in ea.userMenu.items %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if item.isMenuSection %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popover-content-section user-details {{ ea.userMenu.items|length > 0 ? 'user-has-actions' }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ ea.user is null ? 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<hr class=\"m-0\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ item.linkUrl }}\" target=\"{{ item.linkTarget }}\" rel=\"{{ item.linkRel }}\" referrerpolicy=\"origin-when-cross-origin\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-sign-out\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ item.label }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endblock user_menu %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endset %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ _user_menu_content }}
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endblock header_custom_menu %}
\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t{% endblock header %}
\t\t\t\t\t\t</header>

\t\t\t\t\t\t<aside class=\"left-sidebar\" data-sidebarbg=\"skin6\">
\t\t\t\t\t\t\t<div class=\"scroll-sidebar ps-container ps-theme-default ps-active-y\" 
\t\t\t\t\t\t\tdata-sidebarbg=\"skin6\" data-ps-id=\"331a301f-eec9-5c91-2c14-0a94a8ae5440\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% block sidebar %}
\t\t\t\t\t\t\t\t\t\t{% block main_menu_wrapper %}
\t\t\t\t\t\t\t\t\t\t\t{{ include(ea.templatePath('main_menu')) }}
\t\t\t\t\t\t\t\t\t\t{% endblock main_menu_wrapper %}

\t\t\t\t\t\t\t\t\t{% endblock sidebar %}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"ps-scrollbar-x-rail\" style=\"left: 0; bottom: 0;\">
\t\t\t\t\t\t\t\t\t<div class=\"ps-scrollbar-x\" tabindex=\"0\" style=\"left: 0; width: 0;\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</aside>

\t\t\t\t\t\t<div class=\"page-wrapper\" style=\"display: block;\">
\t\t\t\t\t\t\t<div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
\t\t\t\t\t\t\t{% block content_header_wrapper %}
\t\t\t\t\t\t\t\t{% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
\t\t\t\t\t\t\t\t<div class=\"page-breadcrumb\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t{% block content_title %}{% endblock %}
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ol class=\"breadcrumb m-0 p-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if has_help_message %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-question-circle\" data-toggle=\"tooltip\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"{{ ea.crud.helpMessage|e('html_attr') }}\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-5 align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"customize-input float-right\">
\t\t\t\t\t\t\t\t\t\t\t\t{% block page_actions_wrapper %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"page-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% block page_actions %}{% endblock %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endblock content_header_wrapper %}

\t\t\t\t\t\t\t{% block content %}
\t\t\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t\t\t{% block flash_messages %}
\t\t\t\t\t\t\t\t\t\t{{ include(ea.templatePath('flash_messages')) }}
\t\t\t\t\t\t\t\t\t{% endblock flash_messages %}
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card \">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body \">
\t\t\t\t\t\t\t\t\t\t\t\t\t{% block main %}{% endblock %}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% block content_footer_wrapper %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set content_footer = block('content_footer') is defined ? block('content_footer') : '' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if content_footer is not empty %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ content_footer }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endblock content %}
\t\t\t\t\t\t\t<div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endblock wrapper %}
\t\t\t\t\t<footer class=\"footer text-center text-muted\">\"
\t\t\t\t\t\t                All Rights Reserved by NGTS INFORMATIQUE. Designed and Developed by\"
\t\t\t\t\t\t<a class=\"text-muted\" href=\"http://idy-portfolio.byethost24.com/\">
\t\t\t\t\t\t\tIdrissa Ndiouck</a>
\t\t\t\t\t\t<span>créée avec &hearts;</span>
\t\t\t\t\t</footer>
\t\t\t\t</div>
\t\t\t{% endblock wrapper_wrapper %}

\t\t\t{% block body_javascript %}{% endblock body_javascript %}

\t\t\t{% block configured_javascripts %}
\t\t\t\t{% for js_asset in ea.assets.jsFiles ?? [] %}
\t\t\t\t\t<script src=\"{{ asset (js_asset) }}\"></script>
\t\t\t\t{% endfor %}
\t\t\t{% endblock %}
\t\t\t<!-- All Jquery -->
\t\t\t<!-- ============================================================== -->
\t\t\t<script src=\"../assets/js/popper.js\"></script>
\t\t\t<script src=\"../assets/js/bootstrap.js\"></script>
\t\t\t<script src=\"../assets/js/app-style-switcher.js\"></script>
\t\t\t<script src=\"../assets/js/perfect-scrollbar.jquery.min.js\"></script>
\t\t\t<script src=\"../assets/js/feather.js\"></script>
\t\t\t<script src=\"../assets/js/custom.js\"></script>
\t\t\t<script src=\"../assets/bs-tags/bootstrap-tagsinput.js\"></script>
\t\t\t<script src=\"../assets/smart-wizard/js/jquery.smartWizard.js\"></script>

\t\t\t{% block configured_body_contents %}
\t\t\t\t{% for htmlContent in ea.assets.bodyContents ?? [] %}
\t\t\t\t\t{{ htmlContent|raw }}
\t\t\t\t{% endfor %}
\t\t\t{% endblock %}

\t\t</body>
\t{% endblock body %}
</html>

", "@EasyAdmin/layout.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/bundles/EasyAdminBundle/layout.html.twig");
    }
}
