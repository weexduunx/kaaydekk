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

/* base.html.twig */
class __TwigTemplate_da7686e5b7f1fbae6ee16a0c9cc222fc8586c59c0bb99957c1b22a05715559ae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta content=\"\" name=\"description\">
        <meta content=\"\" name=\"keywords\">

        <!-- Favicons -->
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-kdi.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">
        <!-- Google Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" rel=\"stylesheet\">

        <!-- Vendor CSS Files -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/animate.css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Template Main CSS File -->
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.css"), "html", null, true);
        echo "\">

        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
              integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">

        <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.css\"
              integrity=\"sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==\"
              crossorigin=\"\"/>
        
        ";
        // line 35
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "    </head>

    <body>
    <!-- ======= Header/Navbar ======= -->
    <nav class=\"navbar navbar-default navbar-trans navbar-expand-lg  fixed-top navbar-trans\">
                    <div class=\"container\">
                        <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                          data-bs-target=\"#navbarDefault\" aria-controls=\"navbarDefault\"
                          aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
               <a class=\"navbar-brand text-brand\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Kaay Dëkk<span class=\"color-b\"> Immo</span></a>
                        ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50)) {
            // line 51
            echo "                            <div>
                            Salut ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "email", [], "any", false, false, false, 52), "html", null, true);
            echo " <a class=\"btn btn-sm btn-danger\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
                            ";
            // line 54
            echo "                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_USER")) {
                // line 55
                echo "                                ";
                // line 56
                echo "                                <a class=\"btn btn-sm btn-primary\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
                echo "\">Ajouter un utilisateur</a>
                                <a class=\"btn btn-sm btn-warning\" href=\"";
                // line 57
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\">Tableaux de Bord</a>
                             </div>
                            ";
            }
            // line 60
            echo "
                        ";
        } else {
            // line 62
            echo "                            <div>
                                <a class=\"btn btn-sm btn-primary\" href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("form_client");
            echo "\">S'inscrire au programme</a>

                            </div>
                        ";
        }
        // line 67
        echo "                        <div class=\"navbar-collapse justify-content-center collapse\" id=\"navbarDefault\">
                            <ul class=\"navbar-nav\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link ";
        // line 73
        if ((array_key_exists("current_menu", $context) && ((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 73, $this->source); })()) == "properties"))) {
            echo "active";
        }
        echo "\"
                                       aria-current=\"page\" href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("property.index");
        echo "\">Propriétés</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"#\">Projet</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
     <!-- End Header/Navbar -->
        ";
        // line 84
        if (array_key_exists("message", $context)) {
            // line 85
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 86
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 86, $this->source); })()), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 89
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 90
        echo "
    <!-- ======= Footer ======= -->
    <!-- ======= Footer ======= -->
    <section class=\"section-footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-4\">
                    <div class=\"widget-a\">
                        <div class=\"w-header-a\">
                            <h3 class=\"w-title-a text-brand\">Kaay Dëkk Immo</h3>
                        </div>
                        <div class=\"w-body-a\">
                            <p class=\"w-text-a color-text-a\">
                                Une agence immobilière de référence
                            </p>
                        </div>
                        <div class=\"w-footer-a\">
                            <ul class=\"list-unstyled\">
                                <li class=\"color-a\">
                                    <span class=\"color-text-a\">Email :</span> contact@ngts.sn
                                </li>
                                <li class=\"color-a\">
                                    <span class=\"color-text-a\">Fixe :</span> +221 33 891 05 87
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md-4 section-md-t3\">
                    <div class=\"widget-a\">
                        <div class=\"w-header-a\">
                            <h3 class=\"w-title-a text-brand\">L'entreprise</h3>
                        </div>
                        <div class=\"w-body-a\">
                            <div class=\"w-body-a\">
                                <ul class=\"list-unstyled\">
                                    <li class=\"item-list-a\">
                                        <i class=\"bi bi-chevron-right\"></i> <a href=\"#\">plan du site</a>
                                    </li>
                                    <li class=\"item-list-a\">
                                        <i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Légale</a>
                                    </li>
                                    <li class=\"item-list-a\">
                                        <i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Agent Administrateur</a>
                                    </li>
                                    <li class=\"item-list-a\">
                                        <i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Affilier</a>
                                    </li>
                                    <li class=\"item-list-a\">
                                        <i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Politique de confidentialité</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md-4 section-md-t3\">
                    <div class=\"widget-a\">
                        <div class=\"w-header-a\">
                            <h3 class=\"w-title-a text-brand\">Nos Partenaires</h3>
                        </div>
                        <div class=\"w-body-a\">
                            <ul class=\"list-unstyled\">
                                <li class=\"item-list-a\">
                                    <i class=\"bi bi-chevron-right\"></i> <a href=\"#\"></a>
                                </li>
                                <li class=\"item-list-a\">
                                    <i class=\"bi bi-chevron-right\"></i> <a href=\"#\"></a>
                                </li>
                                <li class=\"item-list-a\">
                                    <i class=\"bi bi-chevron-right\"></i> <a href=\"#\"></a>
                                </li>
                                <li class=\"item-list-a\">
                                    <i class=\"bi bi-chevron-right\"></i> <a href=\"#\"></a>
                                </li>
                                <li class=\"item-list-a\">
                                    <i class=\"bi bi-chevron-right\"></i> <a href=\"#\"></a>
                                </li>
                                <li class=\"item-list-a\">
                                    <i class=\"bi bi-chevron-right\"></i> <a href=\"#\"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <nav class=\"nav-footer\">
                        <ul class=\"list-inline\">
                            <li class=\"list-inline-item\">
                                <a href=\"";
        // line 185
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"";
        // line 188
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("property.index");
        echo "\">Propriétés</a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"#\">Projet</a>
                            </li>
                        </ul>
                    </nav>
                    <div class=\"socials-a\">
                        <ul class=\"list-inline\">
                            <li class=\"list-inline-item\">
                                <a href=\"#\">
                                    <i class=\"bi bi-facebook\" aria-hidden=\"true\"></i>
                                </a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"#\">
                                    <i class=\"bi bi-twitter\" aria-hidden=\"true\"></i>
                                </a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"#\">
                                    <i class=\"bi bi-instagram\" aria-hidden=\"true\"></i>
                                </a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"#\">
                                    <i class=\"bi bi-linkedin\" aria-hidden=\"true\"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"copyright-footer\">
                        <p class=\"copyright color-text-a\">&copy; Copyright
                            <span class=\"color-a\">NGTS HABITAT</span> Tous droits réservés.
                        </p>
                    </div>
                    <div class=\"credits text-muted\">Designed by <a class=\"text-muted\" href=\"http://idy-portfolio.byethost24.com/\">Idrissa Ndiouck</a>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <!-- End  Footer -->
    <div id=\"preloader\"></div>
    <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

    <!-- Vendor JS Files -->
    <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Main JS File -->
    <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.js\"
            integrity=\"sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==\"
            crossorigin=\"\">
    </script>
    <script>
        let villes = {
        \"Dakar\":{\"lat\":14.71550470,\"lon\":-17.46685552},
       \"Pikine\":{\"lat\":14.75887661,\"lon\":-17.40394144},
        \"Touba\":{\"lat\":14.87519113,\"lon\":-15.88520676},
        \"Guédiawaye\":{\"lat\":14.77826986,\"lon\":-17.39957340},
        \"Thiès\":{\"lat\":14.79105177,\"lon\":-16.93533769},
        \"Kaolack\":{\"lat\":14.16474444,\"lon\":-16.07720393},
        \"Mbour\":{\"lat\":14.42289517,\"lon\":-16.96626826},
        \"Saint-Louis\":{\"lat\":16.03216197,\"lon\":-16.47872746},
        \"Rufisque\":{\"lat\":14.71570557,\"lon\":-17.27114361},
        \"Ziguinchor\":{\"lat\":12.56392138,\"lon\":-16.26233900},
        \"Diourbel\":{\"lat\":14.65961125,\"lon\":-16.23502509},
        \"Louga\":{\"lat\":15.61443315,\"lon\":-16.22886719},
        \"Tambacounda\":{\"lat\":13.77281388,\"lon\":-13.67213631},
        \"Mbacké\":{\"lat\":14.80073160,\"lon\":-15.90865314},
        \"Kolda\":{\"lat\":12.91090969,\"lon\":-14.95098697},
        \"Richard-Toll\":{\"lat\":16.45905068,\"lon\":-15.69482816},
        \"Bargny\":{\"lat\":14.69944138,\"lon\":-17.23166752},
        \"Tivaouane\":{\"lat\":14.95212311,\"lon\":-16.81606649},
        \"Joal-Fadiouth\":{\"lat\":14.18224990,\"lon\":-16.84449493},
        \"Dahra\":{\"lat\":15.35574845,\"lon\":-15.48196799},
        \"Kaffrine\":{\"lat\":14.10547476,\"lon\":-15.54199354},
        \"Bignona\":{\"lat\":12.80500109,\"lon\":-16.23364148},
        \"Fatick\":{\"lat\":14.33906954,\"lon\":-16.41089201},
        \"Vélingara\":{\"lat\":13.15182615,\"lon\":-14.10863394},
        \"Bambey\":{\"lat\":14.69629436,\"lon\":-16.45788433},
        \"Sébikhotane\":{\"lat\":14.74624775,\"lon\":-17.13815693},
        \"Dagana\":{\"lat\":16.51487265,\"lon\":-15.50593611},
        \"Sédhiou\":{\"lat\":12.70452441,\"lon\":-15.55653341},
        \"Nguékhokh\":{\"lat\":14.51804369,\"lon\":-17.00850163},
        \"Diawara\":{\"lat\":15.01884981,\"lon\":-12.54480657},
        \"Kédougou\":{\"lat\":12.56695663,\"lon\":-12.16613595},
        \"Pout\":{\"lat\":14.76752393,\"lon\":-17.06304124},
        \"Kayar\":{\"lat\":14.91789869,\"lon\":-17.12028273},
        \"Matam\":{\"lat\":15.65272942,\"lon\":-13.25629246},
        \"Meckhe\":{\"lat\":15.12190177,\"lon\":-16.68292140},
        \"Nioro du Rip\":{\"lat\":13.74877248,\"lon\":-15.77288412},
        \"Ourossogui\":{\"lat\":15.60431306,\"lon\":-13.32130920},
        \"Kébémer\":{\"lat\":15.36841043,\"lon\":-16.44584670},
        \"Ndioum\":{\"lat\":16.51355629,\"lon\":-14.64937806},
        \"Koungheul\":{\"lat\":13.97767287,\"lon\":-14.80090137},
        \"Guinguinéo\":{\"lat\":14.27022590,\"lon\":-15.94635493},
        \"Linguère\":{\"lat\":15.39601057,\"lon\":-15.11100780},
        \"Khombole\":{\"lat\":14.76740826,\"lon\":-16.68535902},
        \"Bakel\":{\"lat\":14.90252873,\"lon\":-12.46321694},
        \"Sokone\":{\"lat\":13.87801661,\"lon\":-16.37255793},
        \"Diamniadio\":{\"lat\":14.73236878,\"lon\":-17.18351641},
        \"Mboro\":{\"lat\":15.13917679,\"lon\":-16.88206176},
        \"Thiadiaye\":{\"lat\":14.42225293,\"lon\":-16.70162210},
        \"Goudomp\":{\"lat\":12.53353777,\"lon\":-15.94360505},
        \"Podor\":{\"lat\":16.65998562,\"lon\":-14.96013897},
        \"Gossas\":{\"lat\":14.49214934,\"lon\":-16.06750130},
        \"Kanel\":{\"lat\":15.48980826,\"lon\":-13.17631949},
        \"Rosso\":{\"lat\":16.49240543,\"lon\":-15.81980107},
        \"Ndoffane\":{\"lat\":13.91911319,\"lon\":-15.92684987},
        \"Gandiaye\":{\"lat\":14.24226389,\"lon\":-16.27315639},
        \"Bambilor\":{\"lat\":14.79983107,\"lon\":-17.18496393}
        }

        let map = L.map('maCarte').setView([14.71550470,-17.46685552], 13);
        L.tileLayer('https://a.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href=\"https://www.openstreetmap.org/copyright\">' +
                'OpenStreetMap</a> contributors, Imagery © ' +
                '<a href=\"https://www.openstreetmap.fr/\">OSM France</a>',
            minZoom: 1,
            maxZoom: 20,
        }).addTo(map);

        //Desiner un cercle de 5km de diamétre autour des sites
        let cercle = L.circle([14.71550470,-17.46685552],{
            color:'blue',
            fillColor:'blue',
            fillOpacity: 0.2,
            radius: 2500
        }).addTo(map);

        cercle.bindPopup('ville de Dakar');

       
    </script>
        <script src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 330
        $this->displayBlock('javascripts', $context, $blocks);
        // line 338
        echo "    </body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue dans Kaay Dëkk!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 89
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 330
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 331
        echo "        <script
                src=\"https://code.jquery.com/jquery-3.5.1.min.js\"
                integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\"
                crossorigin=\"anonymous\">
        </script>
        <script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/script.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  566 => 336,  559 => 331,  549 => 330,  531 => 89,  513 => 35,  494 => 7,  481 => 338,  479 => 330,  475 => 329,  384 => 241,  378 => 238,  374 => 237,  370 => 236,  319 => 188,  313 => 185,  216 => 90,  213 => 89,  207 => 86,  204 => 85,  202 => 84,  189 => 74,  183 => 73,  177 => 70,  172 => 67,  165 => 63,  162 => 62,  158 => 60,  152 => 57,  147 => 56,  145 => 55,  142 => 54,  136 => 52,  133 => 51,  131 => 50,  127 => 49,  112 => 36,  110 => 35,  98 => 26,  93 => 24,  87 => 21,  83 => 20,  79 => 19,  75 => 18,  67 => 13,  63 => 12,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>{% block title %}Bienvenue dans Kaay Dëkk!{% endblock %}</title>
        <meta content=\"\" name=\"description\">
        <meta content=\"\" name=\"keywords\">

        <!-- Favicons -->
        <link href=\"{{ asset ('assets/images/favicon.png') }}\" rel=\"icon\">
        <link href=\"{{ asset('assets/images/logo-kdi.png') }}\" rel=\"apple-touch-icon\">
        <!-- Google Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" rel=\"stylesheet\">

        <!-- Vendor CSS Files -->
        <link href=\"{{ asset ('assets/vendor/animate.css/animate.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset ('assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset ('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset ('assets/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">

        <!-- Template Main CSS File -->
        <link href=\"{{ asset ('assets/css/style.css') }}\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"{{ asset ('build/app.css') }}\">

        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
              integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">

        <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.css\"
              integrity=\"sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==\"
              crossorigin=\"\"/>
        
        {% block stylesheets %}{% endblock %}
    </head>

    <body>
    <!-- ======= Header/Navbar ======= -->
    <nav class=\"navbar navbar-default navbar-trans navbar-expand-lg  fixed-top navbar-trans\">
                    <div class=\"container\">
                        <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                          data-bs-target=\"#navbarDefault\" aria-controls=\"navbarDefault\"
                          aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
               <a class=\"navbar-brand text-brand\" href=\"{{ path('home') }}\">Kaay Dëkk<span class=\"color-b\"> Immo</span></a>
                        {% if app.user %}
                            <div>
                            Salut {{ app.user.email }} <a class=\"btn btn-sm btn-danger\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
                            {# Si l'utilisateur est authentifié #}
                            {% if is_granted('ROLE_SUPER_USER') %}
                                {# Si l'utilisateur est authentifié et qu'il est super-admin #}
                                <a class=\"btn btn-sm btn-primary\" href=\"{{ path('app_register') }}\">Ajouter un utilisateur</a>
                                <a class=\"btn btn-sm btn-warning\" href=\"{{ path('admin') }}\">Tableaux de Bord</a>
                             </div>
                            {% endif %}

                        {% else %}
                            <div>
                                <a class=\"btn btn-sm btn-primary\" href=\"{{ path('form_client') }}\">S'inscrire au programme</a>

                            </div>
                        {% endif %}
                        <div class=\"navbar-collapse justify-content-center collapse\" id=\"navbarDefault\">
                            <ul class=\"navbar-nav\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('home') }}\">Accueil</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link {% if current_menu is defined and current_menu == 'properties'%}active{% endif %}\"
                                       aria-current=\"page\" href=\"{{ path('property.index') }}\">Propriétés</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"#\">Projet</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
     <!-- End Header/Navbar -->
        {% if message is defined %}
            <div class=\"alert alert-danger\">
                {{ message }}
            </div>
        {% endif %}
    {% block body %}{% endblock %}

    <!-- ======= Footer ======= -->
    <!-- ======= Footer ======= -->
    <section class=\"section-footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-4\">
                    <div class=\"widget-a\">
                        <div class=\"w-header-a\">
                            <h3 class=\"w-title-a text-brand\">Kaay Dëkk Immo</h3>
                        </div>
                        <div class=\"w-body-a\">
                            <p class=\"w-text-a color-text-a\">
                                Une agence immobilière de référence
                            </p>
                        </div>
                        <div class=\"w-footer-a\">
                            <ul class=\"list-unstyled\">
                                <li class=\"color-a\">
                                    <span class=\"color-text-a\">Email :</span> contact@ngts.sn
                                </li>
                                <li class=\"color-a\">
                                    <span class=\"color-text-a\">Fixe :</span> +221 33 891 05 87
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md-4 section-md-t3\">
                    <div class=\"widget-a\">
                        <div class=\"w-header-a\">
                            <h3 class=\"w-title-a text-brand\">L'entreprise</h3>
                        </div>
                        <div class=\"w-body-a\">
                            <div class=\"w-body-a\">
                                <ul class=\"list-unstyled\">
                                    <li class=\"item-list-a\">
                                        <i class=\"bi bi-chevron-right\"></i> <a href=\"#\">plan du site</a>
                                    </li>
                                    <li class=\"item-list-a\">
                                        <i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Légale</a>
                                    </li>
                                    <li class=\"item-list-a\">
                                        <i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Agent Administrateur</a>
                                    </li>
                                    <li class=\"item-list-a\">
                                        <i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Affilier</a>
                                    </li>
                                    <li class=\"item-list-a\">
                                        <i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Politique de confidentialité</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md-4 section-md-t3\">
                    <div class=\"widget-a\">
                        <div class=\"w-header-a\">
                            <h3 class=\"w-title-a text-brand\">Nos Partenaires</h3>
                        </div>
                        <div class=\"w-body-a\">
                            <ul class=\"list-unstyled\">
                                <li class=\"item-list-a\">
                                    <i class=\"bi bi-chevron-right\"></i> <a href=\"#\"></a>
                                </li>
                                <li class=\"item-list-a\">
                                    <i class=\"bi bi-chevron-right\"></i> <a href=\"#\"></a>
                                </li>
                                <li class=\"item-list-a\">
                                    <i class=\"bi bi-chevron-right\"></i> <a href=\"#\"></a>
                                </li>
                                <li class=\"item-list-a\">
                                    <i class=\"bi bi-chevron-right\"></i> <a href=\"#\"></a>
                                </li>
                                <li class=\"item-list-a\">
                                    <i class=\"bi bi-chevron-right\"></i> <a href=\"#\"></a>
                                </li>
                                <li class=\"item-list-a\">
                                    <i class=\"bi bi-chevron-right\"></i> <a href=\"#\"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <nav class=\"nav-footer\">
                        <ul class=\"list-inline\">
                            <li class=\"list-inline-item\">
                                <a href=\"{{ path('home') }}\">Accueil</a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"{{ path('property.index') }}\">Propriétés</a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"#\">Projet</a>
                            </li>
                        </ul>
                    </nav>
                    <div class=\"socials-a\">
                        <ul class=\"list-inline\">
                            <li class=\"list-inline-item\">
                                <a href=\"#\">
                                    <i class=\"bi bi-facebook\" aria-hidden=\"true\"></i>
                                </a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"#\">
                                    <i class=\"bi bi-twitter\" aria-hidden=\"true\"></i>
                                </a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"#\">
                                    <i class=\"bi bi-instagram\" aria-hidden=\"true\"></i>
                                </a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"#\">
                                    <i class=\"bi bi-linkedin\" aria-hidden=\"true\"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"copyright-footer\">
                        <p class=\"copyright color-text-a\">&copy; Copyright
                            <span class=\"color-a\">NGTS HABITAT</span> Tous droits réservés.
                        </p>
                    </div>
                    <div class=\"credits text-muted\">Designed by <a class=\"text-muted\" href=\"http://idy-portfolio.byethost24.com/\">Idrissa Ndiouck</a>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <!-- End  Footer -->
    <div id=\"preloader\"></div>
    <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

    <!-- Vendor JS Files -->
    <script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/php-email-form/validate.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}\"></script>

    <!-- Template Main JS File -->
    <script src=\"{{ asset ('assets/js/main.js') }}\"></script>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.js\"
            integrity=\"sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==\"
            crossorigin=\"\">
    </script>
    <script>
        let villes = {
        \"Dakar\":{\"lat\":14.71550470,\"lon\":-17.46685552},
       \"Pikine\":{\"lat\":14.75887661,\"lon\":-17.40394144},
        \"Touba\":{\"lat\":14.87519113,\"lon\":-15.88520676},
        \"Guédiawaye\":{\"lat\":14.77826986,\"lon\":-17.39957340},
        \"Thiès\":{\"lat\":14.79105177,\"lon\":-16.93533769},
        \"Kaolack\":{\"lat\":14.16474444,\"lon\":-16.07720393},
        \"Mbour\":{\"lat\":14.42289517,\"lon\":-16.96626826},
        \"Saint-Louis\":{\"lat\":16.03216197,\"lon\":-16.47872746},
        \"Rufisque\":{\"lat\":14.71570557,\"lon\":-17.27114361},
        \"Ziguinchor\":{\"lat\":12.56392138,\"lon\":-16.26233900},
        \"Diourbel\":{\"lat\":14.65961125,\"lon\":-16.23502509},
        \"Louga\":{\"lat\":15.61443315,\"lon\":-16.22886719},
        \"Tambacounda\":{\"lat\":13.77281388,\"lon\":-13.67213631},
        \"Mbacké\":{\"lat\":14.80073160,\"lon\":-15.90865314},
        \"Kolda\":{\"lat\":12.91090969,\"lon\":-14.95098697},
        \"Richard-Toll\":{\"lat\":16.45905068,\"lon\":-15.69482816},
        \"Bargny\":{\"lat\":14.69944138,\"lon\":-17.23166752},
        \"Tivaouane\":{\"lat\":14.95212311,\"lon\":-16.81606649},
        \"Joal-Fadiouth\":{\"lat\":14.18224990,\"lon\":-16.84449493},
        \"Dahra\":{\"lat\":15.35574845,\"lon\":-15.48196799},
        \"Kaffrine\":{\"lat\":14.10547476,\"lon\":-15.54199354},
        \"Bignona\":{\"lat\":12.80500109,\"lon\":-16.23364148},
        \"Fatick\":{\"lat\":14.33906954,\"lon\":-16.41089201},
        \"Vélingara\":{\"lat\":13.15182615,\"lon\":-14.10863394},
        \"Bambey\":{\"lat\":14.69629436,\"lon\":-16.45788433},
        \"Sébikhotane\":{\"lat\":14.74624775,\"lon\":-17.13815693},
        \"Dagana\":{\"lat\":16.51487265,\"lon\":-15.50593611},
        \"Sédhiou\":{\"lat\":12.70452441,\"lon\":-15.55653341},
        \"Nguékhokh\":{\"lat\":14.51804369,\"lon\":-17.00850163},
        \"Diawara\":{\"lat\":15.01884981,\"lon\":-12.54480657},
        \"Kédougou\":{\"lat\":12.56695663,\"lon\":-12.16613595},
        \"Pout\":{\"lat\":14.76752393,\"lon\":-17.06304124},
        \"Kayar\":{\"lat\":14.91789869,\"lon\":-17.12028273},
        \"Matam\":{\"lat\":15.65272942,\"lon\":-13.25629246},
        \"Meckhe\":{\"lat\":15.12190177,\"lon\":-16.68292140},
        \"Nioro du Rip\":{\"lat\":13.74877248,\"lon\":-15.77288412},
        \"Ourossogui\":{\"lat\":15.60431306,\"lon\":-13.32130920},
        \"Kébémer\":{\"lat\":15.36841043,\"lon\":-16.44584670},
        \"Ndioum\":{\"lat\":16.51355629,\"lon\":-14.64937806},
        \"Koungheul\":{\"lat\":13.97767287,\"lon\":-14.80090137},
        \"Guinguinéo\":{\"lat\":14.27022590,\"lon\":-15.94635493},
        \"Linguère\":{\"lat\":15.39601057,\"lon\":-15.11100780},
        \"Khombole\":{\"lat\":14.76740826,\"lon\":-16.68535902},
        \"Bakel\":{\"lat\":14.90252873,\"lon\":-12.46321694},
        \"Sokone\":{\"lat\":13.87801661,\"lon\":-16.37255793},
        \"Diamniadio\":{\"lat\":14.73236878,\"lon\":-17.18351641},
        \"Mboro\":{\"lat\":15.13917679,\"lon\":-16.88206176},
        \"Thiadiaye\":{\"lat\":14.42225293,\"lon\":-16.70162210},
        \"Goudomp\":{\"lat\":12.53353777,\"lon\":-15.94360505},
        \"Podor\":{\"lat\":16.65998562,\"lon\":-14.96013897},
        \"Gossas\":{\"lat\":14.49214934,\"lon\":-16.06750130},
        \"Kanel\":{\"lat\":15.48980826,\"lon\":-13.17631949},
        \"Rosso\":{\"lat\":16.49240543,\"lon\":-15.81980107},
        \"Ndoffane\":{\"lat\":13.91911319,\"lon\":-15.92684987},
        \"Gandiaye\":{\"lat\":14.24226389,\"lon\":-16.27315639},
        \"Bambilor\":{\"lat\":14.79983107,\"lon\":-17.18496393}
        }

        let map = L.map('maCarte').setView([14.71550470,-17.46685552], 13);
        L.tileLayer('https://a.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href=\"https://www.openstreetmap.org/copyright\">' +
                'OpenStreetMap</a> contributors, Imagery © ' +
                '<a href=\"https://www.openstreetmap.fr/\">OSM France</a>',
            minZoom: 1,
            maxZoom: 20,
        }).addTo(map);

        //Desiner un cercle de 5km de diamétre autour des sites
        let cercle = L.circle([14.71550470,-17.46685552],{
            color:'blue',
            fillColor:'blue',
            fillOpacity: 0.2,
            radius: 2500
        }).addTo(map);

        cercle.bindPopup('ville de Dakar');

       
    </script>
        <script src=\"{{ asset ('build/app.js') }}\"></script>
    {% block javascripts %}
        <script
                src=\"https://code.jquery.com/jquery-3.5.1.min.js\"
                integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\"
                crossorigin=\"anonymous\">
        </script>
        <script src=\"{{ asset ('assets/js/script.js') }}\"></script>
    {% endblock %}
    </body>

</html>
", "base.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/base.html.twig");
    }
}
