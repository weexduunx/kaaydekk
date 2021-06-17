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
class __TwigTemplate_f01e73d975cc1b2255af10cd632dde659a3f32a1acb871e987995cb9d5b418e2 extends Template
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
        // line 2
        $context["__internal_0cd9a4562981636fcc9c04ed8329beb8ada9be5a7898555badd617cb4942ead1"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 2), "translationDomain", [], "any", false, false, false, 2);
        // line 3
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "htmlLocale", [], "any", false, false, false, 5), "html", null, true);
        echo "\" dir=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "textDirection", [], "any", false, false, false, 5), "html", null, true);
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
        // line 40
        echo "
\t\t";
        // line 41
        $this->displayBlock('configured_stylesheets', $context, $blocks);
        // line 47
        echo "
\t\t";
        // line 48
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 51
        echo "

\t\t";
        // line 53
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 57
        echo "
\t\t";
        // line 58
        if ((0 === twig_compare("rtl", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 58), "textDirection", [], "any", false, false, false, 58)))) {
            // line 59
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo "bundles/easyadmin/app.rtl.css";
            echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
            // line 60
            echo "bundles/easyadmin/app-custom-rtl.css";
            echo "\">
\t\t";
        }
        // line 62
        echo "
\t\t";
        // line 63
        $this->displayBlock('configured_head_contents', $context, $blocks);
        // line 68
        echo "\t</head>

\t";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 295
        echo "</html>

";
    }

    // line 7
    public function block_head_metas($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t\t\t<meta charset=\"utf-8\">
\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t\t<meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\"/>
\t\t\t<meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
\t\t\t<meta name=\"generator\" content=\"EasyAdmin\"/>
\t\t";
    }

    // line 16
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "\t\t\t\t";
        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        echo "
\t\t\t";
    }

    // line 21
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
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
\t\t\t<link
\t\t\thref=\"";
        // line 27
        echo "assets/css/select2.css";
        echo "\" rel=\"stylesheet\">


\t\t\t<!-- Custom CSS -->
\t\t\t<link href=\"";
        // line 31
        echo "assets/dist/css/style.css";
        echo "\" rel=\"stylesheet\">
\t\t<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t\t\t<!--[if lt IE 9]>
\t\t\t        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t\t\t        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
\t\t\t        <![endif]-->

\t\t";
    }

    // line 41
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 42), "cssFiles", [], "any", true, true, false, 42) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 42), "cssFiles", [], "any", false, false, false, 42)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 42), "cssFiles", [], "any", false, false, false, 42)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 43
            echo "\t\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
\t\t";
    }

    // line 48
    public function block_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "\t\t\t<link rel=\"shortcut icon\" href=\"";
        echo "/assets/images/favicon.png";
        echo "\">
\t\t";
    }

    // line 53
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "
\t\t\t<script src=\"";
        // line 55
        echo "bundles/easyadmin/app.js";
        echo "\"></script>
\t\t";
    }

    // line 63
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 64), "headContents", [], "any", true, true, false, 64) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 64), "headContents", [], "any", false, false, false, 64)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 64), "headContents", [], "any", false, false, false, 64)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 65
            echo "\t\t\t\t";
            echo $context["htmlContent"];
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t";
    }

    // line 70
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "\t\t<body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"ea ";
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">

\t\t\t";
        // line 73
        $this->displayBlock('javascript_page_layout', $context, $blocks);
        // line 84
        echo "
\t\t\t";
        // line 85
        $this->displayBlock('wrapper_wrapper', $context, $blocks);
        // line 268
        echo "
\t\t\t";
        // line 269
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 270
        echo "
\t\t\t";
        // line 271
        $this->displayBlock('configured_javascripts', $context, $blocks);
        // line 276
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
        // line 287
        $this->displayBlock('configured_body_contents', $context, $blocks);
        // line 292
        echo "
\t\t</body>
\t";
    }

    // line 71
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 73
    public function block_javascript_page_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "
\t\t\t\t<script>
\t\t\t\t\tdocument.body.classList.add('ea-content-width-' + (
localStorage.getItem('ea/content/width') || '";
        // line 77
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 77), "contentWidth", [], "any", true, true, false, 77) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 77), "contentWidth", [], "any", false, false, false, 77)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 77), "contentWidth", [], "any", false, false, false, 77)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", true, true, false, 77) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 77)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 77)) : ("normal")))), "html", null, true);
        echo "'
), 'ea-sidebar-width-' + (
localStorage.getItem('ea/sidebar/width') || '";
        // line 79
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 79), "sidebarWidth", [], "any", true, true, false, 79) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 79), "sidebarWidth", [], "any", false, false, false, 79)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 79), "sidebarWidth", [], "any", false, false, false, 79)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", true, true, false, 79) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 79)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 79)) : ("normal")))), "html", null, true);
        echo "'
));
\t\t\t\t</script>

\t\t\t";
    }

    // line 85
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "\t\t\t\t<div id=\"main-wrapper\" class=\"mini-sidebar\" data-theme=\"light\" data-layout=\"vertical\" data-navbarbg=\"skin6\" data-sidebartype=\"full\" data-sidebar-position=\"fixed\" data-header-position=\"fixed\" data-boxed-layout=\"full\">
\t\t\t\t\t";
        // line 87
        $this->displayBlock('wrapper', $context, $blocks);
        // line 260
        echo "\t\t\t\t\t<footer class=\"footer text-center text-muted\">\"
\t\t\t\t\t\t                All Rights Reserved by NGTS INFORMATIQUE. Designed and Developed by\"
\t\t\t\t\t\t<a class=\"text-muted\" href=\"http://idy-portfolio.byethost24.com/\">
\t\t\t\t\t\t\tIdrissa Ndiouck</a>
\t\t\t\t\t\t<span>créée avec &hearts;</span>
\t\t\t\t\t</footer>
\t\t\t\t</div>
\t\t\t";
    }

    // line 87
    public function block_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "\t\t\t\t\t\t<header class=\"topbar\" data-navbarbg=\"skin6\">
\t\t\t\t\t\t\t";
        // line 89
        $this->displayBlock('header', $context, $blocks);
        // line 174
        echo "\t\t\t\t\t\t</header>

\t\t\t\t\t\t<aside class=\"left-sidebar\" data-sidebarbg=\"skin6\">
\t\t\t\t\t\t\t<div class=\"scroll-sidebar ps-container ps-theme-default ps-active-y\" data-sidebarbg=\"skin6\" data-ps-id=\"331a301f-eec9-5c91-2c14-0a94a8ae5440\">
\t\t\t\t\t\t\t\t<nav class=\"sidebar-nav\">
\t\t\t\t\t\t\t\t\t";
        // line 179
        $this->displayBlock('sidebar', $context, $blocks);
        // line 185
        echo "\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t<div class=\"ps-scrollbar-x-rail\" style=\"left: 0; bottom: 0;\">
\t\t\t\t\t\t\t\t\t<div class=\"ps-scrollbar-x\" tabindex=\"0\" style=\"left: 0; width: 0;\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ps-scrollbar-y-rail\" style=\"top: 0; height: 771px; right: 3px;\">
\t\t\t\t\t\t\t\t\t<div class=\"ps-scrollbar-y\" tabindex=\"0\" style=\"top: 0; height: 486px;\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</aside>

\t\t\t\t\t\t<div class=\"page-wrapper\" style=\"display: block;\">
\t\t\t\t\t\t\t<div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
\t\t\t\t\t\t\t";
        // line 197
        $this->displayBlock('content_header_wrapper', $context, $blocks);
        // line 232
        echo "
\t\t\t\t\t\t\t";
        // line 233
        $this->displayBlock('content', $context, $blocks);
        // line 257
        echo "\t\t\t\t\t\t\t<div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
    }

    // line 89
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "\t\t\t\t\t\t\t\t<nav
\t\t\t\t\t\t\t\t\tclass=\"navbar top-navbar navbar-expand-md navbar-light\">
\t\t\t\t\t\t\t\t\t";
        // line 93
        echo "\t\t\t\t\t\t\t\t\t<div class=\"navbar-header\" data-logobg=\"skin6\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-toggler waves-effect waves-light d-block d-md-none\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-close ti-menu\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"navbar-brand\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<b class=\"logo-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 100
        echo "/assets/images/favicon.png";
        echo "\" alt=\"homepage\" class=\"dark-logo\">
\t\t\t\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"logo-text\" style=\"font-weight: bold; color: #00558b; font-size: 22px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\tKaay Dëkk Immo
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 106
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
        // line 115
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 172
        echo "\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t";
    }

    // line 115
    public function block_header_custom_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_constant_is_defined("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter::IS_IMPERSONATOR")) {
            // line 117
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context["impersonator_permission"] = "IS_IMPERSONATOR";
            // line 118
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 119
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context["impersonator_permission"] = "ROLE_PREVIOUS_ADMIN";
            // line 120
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 121
        echo "\t\t\t\t\t\t\t\t\t\t\t<ul class=\"navbar-nav float-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item d-none d-md-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"javascript:void(0)\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 127
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 127), "isAvatarDisplayed", [], "any", false, false, false, 127)) {
            // line 128
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((0 === twig_compare(null, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 128), "avatarUrl", [], "any", false, false, false, 128)))) {
                // line 129
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-fw ";
                echo (( !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 129))) ? ("fa-user-circle") : ("fa-user-times"));
                echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 131
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"user-avatar rounded-circle\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 131), "avatarUrl", [], "any", false, false, false, 131), "html", null, true);
                echo "\" alt=\"\" width=\"50\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 133
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 134
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ml-2 d-none d-lg-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Hello,</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 137
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 137), "isNameDisplayed", [], "any", false, false, false, 137)) {
            // line 138
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"user-name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 138), "name", [], "any", false, false, false, 138), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 140
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24                                                      24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-down svg-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<polyline points=\"6 9 12 15 18 9\"></polyline>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 146
        ob_start(function () { return ''; });
        // line 147
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $this->displayBlock('user_menu', $context, $blocks);
        // line 166
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context["_user_menu_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 167
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        echo twig_escape_filter($this->env, ($context["_user_menu_content"] ?? null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
    }

    // line 147
    public function block_user_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 148), "items", [], "any", false, false, false, 148)), 0))) {
            // line 149
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right user-dd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 150), "items", [], "any", false, false, false, 150));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 151
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "isMenuSection", [], "any", false, false, false, 151)) {
                    // line 152
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popover-content-section user-details ";
                    echo (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 152), "items", [], "any", false, false, false, 152)), 0))) ? ("user-has-actions") : (""));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 153
                    (((null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 153))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true))) : (print ("")));
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<hr class=\"m-0\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 157
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 157), "html", null, true);
                    echo "\" target=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkTarget", [], "any", false, false, false, 157), "html", null, true);
                    echo "\" rel=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkRel", [], "any", false, false, false, 157), "html", null, true);
                    echo "\" referrerpolicy=\"origin-when-cross-origin\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-sign-out\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 159
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 159), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 162
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 165
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
    }

    // line 179
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 180
        echo "\t\t\t\t\t\t\t\t\t\t";
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 183
        echo "
\t\t\t\t\t\t\t\t\t";
    }

    // line 180
    public function block_main_menu_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 181
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "main_menu"], "method", false, false, false, 181));
        echo "
\t\t\t\t\t\t\t\t\t\t";
    }

    // line 197
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 198
        echo "\t\t\t\t\t\t\t\t";
        $context["has_help_message"] =  !twig_test_empty((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 198), "helpMessage", [], "any", true, true, false, 198) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 198), "helpMessage", [], "any", false, false, false, 198)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 198), "helpMessage", [], "any", false, false, false, 198)) : ("")));
        // line 199
        echo "\t\t\t\t\t\t\t\t<div class=\"page-breadcrumb\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 204
        $this->displayBlock('content_title', $context, $blocks);
        // line 205
        echo "\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ol class=\"breadcrumb m-0 p-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 209
        if (($context["has_help_message"] ?? null)) {
            // line 210
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-question-circle\" data-toggle=\"tooltip\" title=\"";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 212), "helpMessage", [], "any", false, false, false, 212), "html_attr");
            echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 216
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-5 align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"customize-input float-right\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 222
        $this->displayBlock('page_actions_wrapper', $context, $blocks);
        // line 227
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
    }

    // line 204
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 222
    public function block_page_actions_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 223
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"page-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 224
        $this->displayBlock('page_actions', $context, $blocks);
        // line 225
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
    }

    // line 224
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 233
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 234
        echo "\t\t\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t\t\t";
        // line 235
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 238
        echo "\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 242
        $this->displayBlock('main', $context, $blocks);
        // line 243
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 244
        $this->displayBlock('content_footer_wrapper', $context, $blocks);
        // line 252
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
    }

    // line 235
    public function block_flash_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 236
        echo "\t\t\t\t\t\t\t\t\t\t";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "flash_messages"], "method", false, false, false, 236));
        echo "
\t\t\t\t\t\t\t\t\t";
    }

    // line 242
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 244
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 245
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context["content_footer"] = ((        $this->hasBlock("content_footer", $context, $blocks)) ? (        $this->renderBlock("content_footer", $context, $blocks)) : (""));
        // line 246
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !twig_test_empty(($context["content_footer"] ?? null))) {
            // line 247
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 248
            echo twig_escape_filter($this->env, ($context["content_footer"] ?? null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 251
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
    }

    // line 269
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 271
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 272
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 272), "jsFiles", [], "any", true, true, false, 272) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 272), "jsFiles", [], "any", false, false, false, 272)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 272), "jsFiles", [], "any", false, false, false, 272)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 273
            echo "\t\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
        echo "\t\t\t";
    }

    // line 287
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 288
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 288), "bodyContents", [], "any", true, true, false, 288) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 288), "bodyContents", [], "any", false, false, false, 288)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 288), "bodyContents", [], "any", false, false, false, 288)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 289
            echo "\t\t\t\t\t";
            echo $context["htmlContent"];
            echo "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
        echo "\t\t\t";
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
        return array (  825 => 291,  816 => 289,  811 => 288,  807 => 287,  803 => 275,  794 => 273,  789 => 272,  785 => 271,  779 => 269,  775 => 251,  769 => 248,  766 => 247,  763 => 246,  760 => 245,  756 => 244,  750 => 242,  743 => 236,  739 => 235,  731 => 252,  729 => 244,  726 => 243,  724 => 242,  718 => 238,  716 => 235,  713 => 234,  709 => 233,  703 => 224,  698 => 225,  696 => 224,  693 => 223,  689 => 222,  683 => 204,  675 => 227,  673 => 222,  665 => 216,  658 => 212,  654 => 210,  652 => 209,  646 => 205,  644 => 204,  637 => 199,  634 => 198,  630 => 197,  623 => 181,  619 => 180,  614 => 183,  611 => 180,  607 => 179,  603 => 165,  599 => 163,  593 => 162,  587 => 159,  577 => 157,  570 => 153,  565 => 152,  562 => 151,  558 => 150,  555 => 149,  552 => 148,  548 => 147,  538 => 167,  535 => 166,  532 => 147,  530 => 146,  522 => 140,  516 => 138,  514 => 137,  509 => 134,  506 => 133,  500 => 131,  494 => 129,  491 => 128,  489 => 127,  481 => 121,  478 => 120,  475 => 119,  472 => 118,  469 => 117,  466 => 116,  462 => 115,  457 => 172,  455 => 115,  444 => 106,  437 => 100,  428 => 93,  424 => 90,  420 => 89,  414 => 257,  412 => 233,  409 => 232,  407 => 197,  393 => 185,  391 => 179,  384 => 174,  382 => 89,  379 => 88,  375 => 87,  364 => 260,  362 => 87,  359 => 86,  355 => 85,  346 => 79,  341 => 77,  336 => 74,  332 => 73,  321 => 71,  315 => 292,  313 => 287,  300 => 276,  298 => 271,  295 => 270,  293 => 269,  290 => 268,  288 => 85,  285 => 84,  283 => 73,  275 => 71,  271 => 70,  267 => 67,  258 => 65,  253 => 64,  249 => 63,  243 => 55,  240 => 54,  236 => 53,  229 => 49,  225 => 48,  220 => 45,  211 => 43,  206 => 42,  202 => 41,  189 => 31,  182 => 27,  176 => 24,  172 => 23,  169 => 22,  165 => 21,  158 => 17,  154 => 16,  145 => 8,  141 => 7,  135 => 295,  133 => 70,  129 => 68,  127 => 63,  124 => 62,  119 => 60,  114 => 59,  112 => 58,  109 => 57,  107 => 53,  103 => 51,  101 => 48,  98 => 47,  96 => 41,  93 => 40,  91 => 21,  87 => 19,  85 => 16,  81 => 14,  79 => 7,  72 => 5,  68 => 3,  66 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/bundles/EasyAdminBundle/layout.html.twig");
    }
}
