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
class __TwigTemplate_cb1c9172c6311022567b4a9c538d2c43962590c5a42fda213438e5cd18cd87e3 extends Template
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
        return $this->loadTemplate(((array_key_exists("ea", $context)) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 5)) : ("@EasyAdmin/page/login_minimal.html.twig")), "@EasyAdmin/page/login.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $context["__internal_65725fac7e4c9a26011a68eb2b7803d3475ecdcb6a9e11c2da6d4c0ccd3a4847"] = ((array_key_exists("ea", $context)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 6), "translationDomain", [], "any", false, false, false, 6)) : (((array_key_exists("translation_domain", $context)) ? ((($context["translation_domain"]) ?? ("messages"))) : (""))));
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "page-login";
    }

    // line 9
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo ((array_key_exists("page_title", $context)) ? (($context["page_title"] ?? null)) : (((array_key_exists("ea", $context)) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 9)) : (""))));
    }

    // line 12
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        $context["page_title"] =         $this->renderBlock("page_title", $context, $blocks);
        // line 14
        echo "    ";
        $context["_username_label"] = ((array_key_exists("username_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["username_label"] ?? null), [],         // line 6
($context["__internal_65725fac7e4c9a26011a68eb2b7803d3475ecdcb6a9e11c2da6d4c0ccd3a4847"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.username", [], "EasyAdminBundle")));
        // line 15
        echo "    ";
        $context["_password_label"] = ((array_key_exists("password_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["password_label"] ?? null), [],         // line 6
($context["__internal_65725fac7e4c9a26011a68eb2b7803d3475ecdcb6a9e11c2da6d4c0ccd3a4847"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.password", [], "EasyAdminBundle")));
        // line 16
        echo "    ";
        $context["_sign_in_label"] = ((array_key_exists("sign_in_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["sign_in_label"] ?? null), [],         // line 6
($context["__internal_65725fac7e4c9a26011a68eb2b7803d3475ecdcb6a9e11c2da6d4c0ccd3a4847"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.sign_in", [], "EasyAdminBundle")));
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
        if (((array_key_exists("error", $context)) ? (_twig_default_filter(($context["error"] ?? null), false)) : (false))) {
            // line 35
            echo "                            <div class=\"w-100 alert alert-danger\">
                                ";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 36), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 36), "security"), "html", null, true);
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
        if (((array_key_exists("csrf_token", $context)) ? (_twig_default_filter(($context["csrf_token"] ?? null), false)) : (false))) {
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
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 46)) {
            // line 47
            echo "                                <div class=\"mb-3\">
                                    Vous êtes connectés en tant que ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 48), "username", [], "any", false, false, false, 48), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Deconnectez-vous</a>
                                </div>
                            ";
        }
        // line 51
        echo "                            <input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("target_path_parameter", $context)) ? (_twig_default_filter(($context["target_path_parameter"] ?? null), "_target_path")) : ("_target_path")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("target_path", $context)) ? (_twig_default_filter(($context["target_path"] ?? null), ((array_key_exists("ea", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 51))) : ("/")))) : (((array_key_exists("ea", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 51))) : ("/")))), "html", null, true);
        echo "\" />
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <div class=\"form-group\">
                                        <i class=\"fa fa-fw fa-user\"></i>
                                        <label for=\"uname\" class=\"text-dark\">Email</label>
                                        <input type=\"email\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["_sign_in_label"] ?? null), "html", null, true);
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
        return array (  182 => 79,  175 => 75,  154 => 57,  142 => 51,  134 => 48,  131 => 47,  129 => 46,  126 => 45,  120 => 43,  118 => 42,  113 => 39,  107 => 36,  104 => 35,  102 => 34,  83 => 17,  81 => 6,  79 => 16,  77 => 6,  75 => 15,  73 => 6,  71 => 14,  68 => 13,  64 => 12,  57 => 9,  50 => 8,  46 => 5,  44 => 6,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/page/login.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/bundles/EasyAdminBundle/page/login.html.twig");
    }
}
