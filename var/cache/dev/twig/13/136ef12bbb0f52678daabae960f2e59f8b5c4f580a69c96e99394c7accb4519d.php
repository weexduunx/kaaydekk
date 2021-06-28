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

/* @EasyAdmin/page/login.html.twig */
class __TwigTemplate_8646edb75db0bd87c7501c0e3a91e2c4ac467f4dd653c9bf6447091360aeffb9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_class' => [$this, 'block_body_class'],
            'page_title' => [$this, 'block_page_title'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate(((array_key_exists("ea", $context)) ? (twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 5, $this->source); })()), "templatePath", [0 => "layout"], "method", false, false, false, 5)) : ("@EasyAdmin/page/login_minimal.html.twig")), "@EasyAdmin/page/login.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/page/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/page/login.html.twig"));

        // line 6
        $context["__internal_ac391748ebafa463fcccefad203eb08804dd85a3f0f7dfff5e9895cef2df149f"] = ((array_key_exists("ea", $context)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 6, $this->source); })()), "i18n", [], "any", false, false, false, 6), "translationDomain", [], "any", false, false, false, 6)) : (((array_key_exists("translation_domain", $context)) ? ((($context["translation_domain"]) ?? ("messages"))) : (""))));
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        echo "page-login";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        echo ((array_key_exists("page_title", $context)) ? ((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 9, $this->source); })())) : (((array_key_exists("ea", $context)) ? (twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 9, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 9)) : (""))));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper_wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper_wrapper"));

        // line 13
        echo "    ";
        $context["page_title"] =         $this->renderBlock("page_title", $context, $blocks);
        // line 14
        echo "    ";
        $context["_username_label"] = ((array_key_exists("username_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["username_label"]) || array_key_exists("username_label", $context) ? $context["username_label"] : (function () { throw new RuntimeError('Variable "username_label" does not exist.', 14, $this->source); })()), [],         // line 6
(isset($context["__internal_ac391748ebafa463fcccefad203eb08804dd85a3f0f7dfff5e9895cef2df149f"]) || array_key_exists("__internal_ac391748ebafa463fcccefad203eb08804dd85a3f0f7dfff5e9895cef2df149f", $context) ? $context["__internal_ac391748ebafa463fcccefad203eb08804dd85a3f0f7dfff5e9895cef2df149f"] : (function () { throw new RuntimeError('Variable "__internal_ac391748ebafa463fcccefad203eb08804dd85a3f0f7dfff5e9895cef2df149f" does not exist.', 6, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.username", [], "EasyAdminBundle")));
        // line 15
        echo "    ";
        $context["_password_label"] = ((array_key_exists("password_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["password_label"]) || array_key_exists("password_label", $context) ? $context["password_label"] : (function () { throw new RuntimeError('Variable "password_label" does not exist.', 15, $this->source); })()), [],         // line 6
(isset($context["__internal_ac391748ebafa463fcccefad203eb08804dd85a3f0f7dfff5e9895cef2df149f"]) || array_key_exists("__internal_ac391748ebafa463fcccefad203eb08804dd85a3f0f7dfff5e9895cef2df149f", $context) ? $context["__internal_ac391748ebafa463fcccefad203eb08804dd85a3f0f7dfff5e9895cef2df149f"] : (function () { throw new RuntimeError('Variable "__internal_ac391748ebafa463fcccefad203eb08804dd85a3f0f7dfff5e9895cef2df149f" does not exist.', 6, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.password", [], "EasyAdminBundle")));
        // line 16
        echo "    ";
        $context["_sign_in_label"] = ((array_key_exists("sign_in_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["sign_in_label"]) || array_key_exists("sign_in_label", $context) ? $context["sign_in_label"] : (function () { throw new RuntimeError('Variable "sign_in_label" does not exist.', 16, $this->source); })()), [],         // line 6
(isset($context["__internal_ac391748ebafa463fcccefad203eb08804dd85a3f0f7dfff5e9895cef2df149f"]) || array_key_exists("__internal_ac391748ebafa463fcccefad203eb08804dd85a3f0f7dfff5e9895cef2df149f", $context) ? $context["__internal_ac391748ebafa463fcccefad203eb08804dd85a3f0f7dfff5e9895cef2df149f"] : (function () { throw new RuntimeError('Variable "__internal_ac391748ebafa463fcccefad203eb08804dd85a3f0f7dfff5e9895cef2df149f" does not exist.', 6, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.sign_in", [], "EasyAdminBundle")));
        // line 17
        echo "
    <div class=\"main-wrapper\">
        <div class=\"preloader\" style=\"display: none;\">
            <div class=\"lds-ripple\">
                <div class=\"lds-pos\"></div>
                <div class=\"lds-pos\"></div>
            </div>
        </div>
      <div class=\"auth-wrapper d-flex no-block justify-content-center align-items-center position-relative\"
             style=\"background:url(../assets/images/big/auth-bg.png) no-repeat center center;\" >
            <div class=\"auth-box row\">
                <div class=\"col-lg-7 col-md-5 modal-bg-img\" style=\"background-image: url(../assets/images/big/kadi.jpg);\"></div>
                <div class=\"col-lg-5 col-md-7 bg-white\">
                    <div class=\"p-3\">
                        <div class=\"text-center\">
                            <img src=\"../assets/images/big/logo-kdi.png\" width=\"100\" alt=\"Kaay dëkk immo\">
                        </div>
                        ";
        // line 34
        if (((array_key_exists("error", $context)) ? (_twig_default_filter((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 34, $this->source); })()), false)) : (false))) {
            // line 35
            echo "                            <div class=\"w-100 alert alert-danger\">
                                ";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 36, $this->source); })()), "messageKey", [], "any", false, false, false, 36), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 36, $this->source); })()), "messageData", [], "any", false, false, false, 36), "security"), "html", null, true);
            echo "
                            </div>
                        ";
        }
        // line 39
        echo "                        <h2 class=\"mt-3 text-center\">AUTHENTIFICATION</h2>
                        <p class=\"text-center\">Entrer votre e-mail et mot de passe pour accéder au tableau de bord.</p>
                        <form class=\"mt-4\" method=\"post\">
                            ";
        // line 42
        if (((array_key_exists("csrf_token", $context)) ? (_twig_default_filter((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 42, $this->source); })()), false)) : (false))) {
            // line 43
            echo "                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\">
                            ";
        }
        // line 45
        echo "
                            ";
        // line 46
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46)) {
            // line 47
            echo "                                <div class=\"mb-3\">
                                    Vous êtes connectés en tant que ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "username", [], "any", false, false, false, 48), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Deconnectez-vous</a>
                                </div>
                            ";
        }
        // line 51
        echo "                            <input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("target_path_parameter", $context)) ? (_twig_default_filter((isset($context["target_path_parameter"]) || array_key_exists("target_path_parameter", $context) ? $context["target_path_parameter"] : (function () { throw new RuntimeError('Variable "target_path_parameter" does not exist.', 51, $this->source); })()), "_target_path")) : ("_target_path")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("target_path", $context)) ? (_twig_default_filter((isset($context["target_path"]) || array_key_exists("target_path", $context) ? $context["target_path"] : (function () { throw new RuntimeError('Variable "target_path" does not exist.', 51, $this->source); })()), ((array_key_exists("ea", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 51, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 51))) : ("/")))) : (((array_key_exists("ea", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 51, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 51))) : ("/")))), "html", null, true);
        echo "\" />
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <div class=\"form-group\">
                                        <i class=\"fa fa-fw fa-user\"></i>
                                        <label for=\"uname\" class=\"text-dark\">Email</label>
                                        <input type=\"email\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\"
                                               class=\"form-control\" placeholder=\"\" required autofocus>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"form-group\">
                                        <i class=\"fa fa-fw fa-lock\"></i>
                                        <label for=\"password\" class=\"text-dark\">Mot de Passe</label>
                                        <input type=\"password\" name=\"password\" id=\"inputPassword\"
                                               class=\"form-control\" placeholder=\"\" required>
                                    </div>
                                    <div class=\"checkbox mb-3\">
                                        <label>
                                            <input type=\"checkbox\" name=\"_remember_me\">Souviens de moi
                                        </label>
                                    </div>
                                </div>
                                <div class=\"col-lg-12 text-center\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["_sign_in_label"]) || array_key_exists("_sign_in_label", $context) ? $context["_sign_in_label"] : (function () { throw new RuntimeError('Variable "_sign_in_label" does not exist.', 75, $this->source); })()), "html", null, true);
        echo "</button>
                                </div>
                                <div class=\"col-lg-12 text-center mt-5\">
                                    Avez-Vous déjà eu un compte?
                                    <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"text-info\">S'inscrire</a>
                                </div>
                            </div>
                        </form>
                        <script type=\"text/javascript\">
                            const loginForm = document.querySelector('form');
                            loginForm.addEventListener('submit', () => {
                                loginForm.querySelector('button[type=\"submit\"]').setAttribute('disabled', 'disabled');
                            }, false);
                        </script>
                    </div>
                </div>
            </div>
        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/page/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 79,  217 => 75,  196 => 57,  184 => 51,  176 => 48,  173 => 47,  171 => 46,  168 => 45,  162 => 43,  160 => 42,  155 => 39,  149 => 36,  146 => 35,  144 => 34,  125 => 17,  123 => 6,  121 => 16,  119 => 6,  117 => 15,  115 => 6,  113 => 14,  110 => 13,  100 => 12,  81 => 9,  62 => 8,  52 => 5,  50 => 6,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# This template checks for 'ea' variable existence because it can
   be used in a EasyAdmin Dashboard controller, where 'ea' is defined
   or from any other Symfony controller, where 'ea' is not defined #}
{% extends ea is defined ? ea.templatePath('layout') : '@EasyAdmin/page/login_minimal.html.twig' %}
{% trans_default_domain ea is defined ? ea.i18n.translationDomain : (translation_domain is defined ? translation_domain ?? 'messages') %}

{% block body_class 'page-login' %}
{% block page_title %}{{ page_title is defined ? page_title|raw : (ea is defined ? ea.dashboardTitle|raw : '') }}{% endblock %}


{% block wrapper_wrapper %}
    {% set page_title = block('page_title') %}
    {% set _username_label = username_label is defined ? username_label|trans : 'login_page.username'|trans({}, 'EasyAdminBundle') %}
    {% set _password_label = password_label is defined ? password_label|trans : 'login_page.password'|trans({}, 'EasyAdminBundle') %}
    {% set _sign_in_label = sign_in_label is defined ? sign_in_label|trans : 'login_page.sign_in'|trans({}, 'EasyAdminBundle') %}

    <div class=\"main-wrapper\">
        <div class=\"preloader\" style=\"display: none;\">
            <div class=\"lds-ripple\">
                <div class=\"lds-pos\"></div>
                <div class=\"lds-pos\"></div>
            </div>
        </div>
      <div class=\"auth-wrapper d-flex no-block justify-content-center align-items-center position-relative\"
             style=\"background:url(../assets/images/big/auth-bg.png) no-repeat center center;\" >
            <div class=\"auth-box row\">
                <div class=\"col-lg-7 col-md-5 modal-bg-img\" style=\"background-image: url(../assets/images/big/kadi.jpg);\"></div>
                <div class=\"col-lg-5 col-md-7 bg-white\">
                    <div class=\"p-3\">
                        <div class=\"text-center\">
                            <img src=\"../assets/images/big/logo-kdi.png\" width=\"100\" alt=\"Kaay dëkk immo\">
                        </div>
                        {% if error|default(false) %}
                            <div class=\"w-100 alert alert-danger\">
                                {{ error.messageKey|trans(error.messageData, 'security') }}
                            </div>
                        {% endif %}
                        <h2 class=\"mt-3 text-center\">AUTHENTIFICATION</h2>
                        <p class=\"text-center\">Entrer votre e-mail et mot de passe pour accéder au tableau de bord.</p>
                        <form class=\"mt-4\" method=\"post\">
                            {% if csrf_token|default(false) %}
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                            {% endif %}

                            {% if app.user %}
                                <div class=\"mb-3\">
                                    Vous êtes connectés en tant que {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Deconnectez-vous</a>
                                </div>
                            {% endif %}
                            <input type=\"hidden\" name=\"{{ target_path_parameter|default('_target_path') }}\" value=\"{{ target_path|default(ea is defined ? path(ea.dashboardRouteName) : '/') }}\" />
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <div class=\"form-group\">
                                        <i class=\"fa fa-fw fa-user\"></i>
                                        <label for=\"uname\" class=\"text-dark\">Email</label>
                                        <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\"
                                               class=\"form-control\" placeholder=\"\" required autofocus>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"form-group\">
                                        <i class=\"fa fa-fw fa-lock\"></i>
                                        <label for=\"password\" class=\"text-dark\">Mot de Passe</label>
                                        <input type=\"password\" name=\"password\" id=\"inputPassword\"
                                               class=\"form-control\" placeholder=\"\" required>
                                    </div>
                                    <div class=\"checkbox mb-3\">
                                        <label>
                                            <input type=\"checkbox\" name=\"_remember_me\">Souviens de moi
                                        </label>
                                    </div>
                                </div>
                                <div class=\"col-lg-12 text-center\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">{{ _sign_in_label }}</button>
                                </div>
                                <div class=\"col-lg-12 text-center mt-5\">
                                    Avez-Vous déjà eu un compte?
                                    <a href=\"{{path ('app_register') }}\" class=\"text-info\">S'inscrire</a>
                                </div>
                            </div>
                        </form>
                        <script type=\"text/javascript\">
                            const loginForm = document.querySelector('form');
                            loginForm.addEventListener('submit', () => {
                                loginForm.querySelector('button[type=\"submit\"]').setAttribute('disabled', 'disabled');
                            }, false);
                        </script>
                    </div>
                </div>
            </div>
        </div>

    </div>
{% endblock %}
", "@EasyAdmin/page/login.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/bundles/EasyAdminBundle/page/login.html.twig");
    }
}
