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

/* @AdminLTE/Sidebar/search-form.html.twig */
class __TwigTemplate_865e513e534399ab7011a261c24577bf979d6a005978f2e4ea49a3d05032711d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Sidebar/search-form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Sidebar/search-form.html.twig"));

        // line 1
        echo "<form action=\"#\" method=\"get\" class=\"sidebar-form\">
    <div class=\"input-group\">
        <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "AdminLTEBundle"), "html", null, true);
        echo "...\"/>
        <span class=\"input-group-btn\">
            <button type='submit' name='search' id='search-btn' class=\"btn btn-flat\"><i class=\"fas fa-search\"></i></button>
        </span>
    </div>
</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@AdminLTE/Sidebar/search-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form action=\"#\" method=\"get\" class=\"sidebar-form\">
    <div class=\"input-group\">
        <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"{{ 'Search'|trans({}, 'AdminLTEBundle') }}...\"/>
        <span class=\"input-group-btn\">
            <button type='submit' name='search' id='search-btn' class=\"btn btn-flat\"><i class=\"fas fa-search\"></i></button>
        </span>
    </div>
</form>
", "@AdminLTE/Sidebar/search-form.html.twig", "/home/ngts/Kaay-Dekk-Immo/vendor/kevinpapst/adminlte-bundle/Resources/views/Sidebar/search-form.html.twig");
    }
}
