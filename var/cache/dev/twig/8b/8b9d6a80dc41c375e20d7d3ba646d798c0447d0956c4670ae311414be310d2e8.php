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
class __TwigTemplate_27e297621d2591f8df84c304dd3b017e7d02ede0e4b6d36a9d89850db33660b6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <title>Message au client</title>
</head>
<body>
<h1>Demande de contact sur le/la ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 7, $this->source); })()), "bien", [], "any", false, false, false, 7), "label", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
<p>Une nouvelle personne souhaiterais obtenir plus d'informations à propos du bien
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("bien.show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 9, $this->source); })()), "bien", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9), "slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 9, $this->source); })()), "bien", [], "any", false, false, false, 9), "slug", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 9, $this->source); })()), "bien", [], "any", false, false, false, 9), "label", [], "any", false, false, false, 9), "html", null, true);
        echo "</a>
</p>
    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\"  style=\"vertical-align:top;\" width=\"100%\">
          <tr>
              <td>Nom du Bien</td>
              <td><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("bien.show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 14, $this->source); })()), "bien", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14), "slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 14, $this->source); })()), "bien", [], "any", false, false, false, 14), "slug", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\">
              ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 15, $this->source); })()), "bien", [], "any", false, false, false, 15), "label", [], "any", false, false, false, 15), "html", null, true);
        echo "</a></td>
          </tr>
        <tr>
            <td >Prenom</td>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 19, $this->source); })()), "firstname", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Nom</td>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 23, $this->source); })()), "lastname", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Téléphone</td>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 27, $this->source); })()), "phone", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Message</td>
            <td>";
        // line 35
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 35, $this->source); })()), "message", [], "any", false, false, false, 35), "html", null, true));
        echo "</td>
        </tr>
    </table>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  105 => 35,  98 => 31,  91 => 27,  84 => 23,  77 => 19,  70 => 15,  66 => 14,  56 => 9,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <title>Message au client</title>
</head>
<body>
<h1>Demande de contact sur le/la {{ contact.bien.label }}</h1>
<p>Une nouvelle personne souhaiterais obtenir plus d'informations à propos du bien
    <a href=\"{{ url('bien.show', {id: contact.bien.id, slug: contact.bien.slug}) }}\">{{ contact.bien.label }}</a>
</p>
    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\"  style=\"vertical-align:top;\" width=\"100%\">
          <tr>
              <td>Nom du Bien</td>
              <td><a href=\"{{ url('bien.show', {id: contact.bien.id, slug: contact.bien.slug}) }}\">
              {{ contact.bien.label }}</a></td>
          </tr>
        <tr>
            <td >Prenom</td>
            <td>{{ contact.firstname }}</td>
        </tr>
        <tr>
            <td>Nom</td>
            <td>{{ contact.lastname }}</td>
        </tr>
        <tr>
            <td>Téléphone</td>
            <td>{{ contact.phone }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ contact.email }}</td>
        </tr>
        <tr>
            <td>Message</td>
            <td>{{ contact.message|nl2br }}</td>
        </tr>
    </table>
</body>
</html>", "emails/contact.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/emails/contact.html.twig");
    }
}
