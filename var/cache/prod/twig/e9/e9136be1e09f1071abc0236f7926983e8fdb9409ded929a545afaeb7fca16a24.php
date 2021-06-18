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

/* emails/contact.html.twig */
class __TwigTemplate_ed9d167f84eeba7ee9049e87d126f75a902e0248748cde7b1c2e8a27eea11df1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <title>Message au client</title>
</head>
<body>
<h1>Demande de contact sur le/la ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "bien", [], "any", false, false, false, 7), "label", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
<p>Une nouvelle personne souhaiterais obtenir plus d'informations à propos du bien
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("bien.show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "bien", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9), "slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "bien", [], "any", false, false, false, 9), "slug", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "bien", [], "any", false, false, false, 9), "label", [], "any", false, false, false, 9), "html", null, true);
        echo "</a>
</p>
    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\"  style=\"vertical-align:top;\" width=\"100%\">
          <tr>
              <td>Nom du Bien</td>
              <td><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("bien.show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "bien", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14), "slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "bien", [], "any", false, false, false, 14), "slug", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\">
              ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "bien", [], "any", false, false, false, 15), "label", [], "any", false, false, false, 15), "html", null, true);
        echo "</a></td>
          </tr>
        <tr>
            <td >Prenom</td>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "firstname", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Nom</td>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "lastname", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Téléphone</td>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "phone", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "email", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Message</td>
            <td>";
        // line 35
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "message", [], "any", false, false, false, 35), "html", null, true));
        echo "</td>
        </tr>
    </table>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "emails/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 35,  92 => 31,  85 => 27,  78 => 23,  71 => 19,  64 => 15,  60 => 14,  50 => 9,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "emails/contact.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/emails/contact.html.twig");
    }
}
