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

/* @EasyAdmin/page/login_minimal.html.twig */
class __TwigTemplate_ccb98bf8c6f7be8c0a5c0a7e5bab639e942a3c87a479ac51697de4b769770189 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["__internal_a3b308db71bc483e193bd6c7cf42a478249c02787a72ea2249905ca4de52ced9"] = (($context["translation_domain"]) ?? ("messages"));
        // line 4
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
    <meta content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" name=\"viewport\">
    <meta name=\"generator\" content=\"EasyAdmin\" />
    <meta name=\"description\" content=\"Page Authentification Kaay dëkk Immo\">
    <meta name=\"author\" content=\"Idrissa Ndiouck\">

    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"../assets/images/favicon.png\">
    <title>";
        // line 16
        echo strip_tags(        $this->renderBlock("page_title", $context, $blocks));
        echo "</title>


    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo "assets/dist/css/style.css";
        echo "\">
    ";
        // line 20
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 21
        echo "    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

    ";
        // line 29
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 32
        echo "</head>

<body>

";
        // line 36
        $this->displayBlock('wrapper_wrapper', $context, $blocks);
        // line 37
        echo "<script src=\"../assets/libs/jquery/dist/jquery.min.js \"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src=\"../assets/libs/popper.js/dist/umd/popper.min.js \"></script>
<script src=\"../assets/libs/bootstrap/dist/js/bootstrap.min.js \"></script>

<script>
        \$(\".preloader \").fadeOut();
    </script>
</body>
</html>";
    }

    // line 20
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 29
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 36
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/page/login_minimal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 36,  111 => 30,  107 => 29,  101 => 20,  88 => 37,  86 => 36,  80 => 32,  78 => 29,  68 => 21,  66 => 20,  62 => 19,  56 => 16,  42 => 4,  40 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/page/login_minimal.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/bundles/EasyAdminBundle/page/login_minimal.html.twig");
    }
}
