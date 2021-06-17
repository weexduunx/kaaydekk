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

/* @AdminLTE/layout/form-theme-base.html.twig */
class __TwigTemplate_87061361a2386d884e4e8c231ae7fd131e38dd101e9bbbdcb6e307c0451c2871 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_errors' => [$this, 'block_form_errors'],
            'widget_attributes' => [$this, 'block_widget_attributes'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'tel_widget' => [$this, 'block_tel_widget'],
            'url_widget' => [$this, 'block_url_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "bootstrap_3_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("bootstrap_3_layout.html.twig", "@AdminLTE/layout/form-theme-base.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        ob_start(function () { return ''; });
        // line 10
        echo "        ";
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["errors"] ?? null)), 0))) {
            // line 11
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 13
                echo "                    <li class=\"text-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 13), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "            </ul>
        ";
        }
        // line 17
        echo "    ";
        $___internal_508f3843c4549425d88972feb9721df21c71331ec7e7ef3e1fa52d002ebb2b43_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        echo twig_spaceless($___internal_508f3843c4549425d88972feb9721df21c71331ec7e7ef3e1fa52d002ebb2b43_);
    }

    // line 20
    public function block_widget_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        $context["types"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 21), "block_prefixes", [], "any", false, false, false, 21);
        // line 22
        echo "     ";
        $context["_class"] = "";
        // line 23
        echo "    ";
        if (twig_in_filter("checkbox", ($context["types"] ?? null))) {
            // line 24
            echo "        ";
            $context["_class"] = " checkbox";
            // line 25
            echo "    ";
        } elseif (twig_in_filter("radio", ($context["types"] ?? null))) {
            // line 26
            echo "        ";
            $context["_class"] = " radio";
            // line 27
            echo "    ";
        }
        // line 28
        echo "    ";
        // line 31
        echo "
    ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 32)) {
            // line 33
            echo "        ";
            $context["class"] = (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 33) . ($context["_class"] ?? null));
            // line 34
            echo "    ";
        } else {
            // line 35
            echo "        ";
            $context["class"] = ($context["_class"] ?? null);
            // line 36
            echo "    ";
        }
        // line 37
        echo "    ";
        if ((!twig_in_filter("checkbox", ($context["types"] ?? null)) && !twig_in_filter("form-control", ($context["class"] ?? null)))) {
            // line 38
            echo "        ";
            $context["class"] = (($context["class"] ?? null) . " form-control");
            // line 39
            echo "    ";
        }
        // line 40
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => ($context["class"] ?? null)]);
        // line 41
        echo "    ";
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        echo "
";
    }

    // line 44
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "    ";
        ob_start(function () { return ''; });
        // line 46
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </div>
    ";
        $___internal_85ead2181f7429ac924f9d2ce502cb38b0ff45e23dc16cef82537c64775da77d_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        echo twig_spaceless($___internal_85ead2181f7429ac924f9d2ce502cb38b0ff45e23dc16cef82537c64775da77d_);
    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["att"] => $context["val"]) {
            // line 56
            echo "        ";
            if ((0 === twig_compare($context["att"], "class"))) {
                // line 57
                echo "            ";
                $context["att"] = ($context["val"] . " form-control");
                // line 58
                echo "        ";
            }
            // line 59
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['att'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
    ";
        // line 61
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
    }

    // line 64
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "    <div class=\"checkbox\">
        ";
        // line 66
        ob_start(function () { return ''; });
        // line 67
        echo "            ";
        if ( !($context["compound"] ?? null)) {
            // line 68
            echo "                ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            // line 69
            echo "            ";
        }
        // line 70
        echo "            ";
        if (($context["required"] ?? null)) {
            // line 71
            echo "                ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 71)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 71), "")) : ("")) . " required"))]);
            // line 72
            echo "            ";
        }
        // line 73
        echo "            ";
        if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
            // line 74
            echo "                ";
            $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
            // line 75
            echo "            ";
        }
        // line 76
        echo "
            <label";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
            <input type=\"checkbox\" ";
        // line 78
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " />
            ";
        // line 79
        if ( !(($context["label"] ?? null) === false)) {
            // line 80
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), [], ($context["translation_domain"] ?? null)), "html", null, true);
            echo "
            ";
        }
        // line 82
        echo "            </label>
        ";
        $___internal_75fc64587c87f3610d85115a9b9396728321a4a3f3bb69bfa6c5957fdf67386f_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 66
        echo twig_spaceless($___internal_75fc64587c87f3610d85115a9b9396728321a4a3f3bb69bfa6c5957fdf67386f_);
        // line 84
        echo "    </div>
";
    }

    // line 87
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "    <div class=\"radio\">
        ";
        // line 89
        ob_start(function () { return ''; });
        // line 90
        echo "            ";
        if ( !($context["compound"] ?? null)) {
            // line 91
            echo "                ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            // line 92
            echo "            ";
        }
        // line 93
        echo "            ";
        if (($context["required"] ?? null)) {
            // line 94
            echo "                ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 94)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 94), "")) : ("")) . " required"))]);
            // line 95
            echo "            ";
        }
        // line 96
        echo "            ";
        if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
            // line 97
            echo "                ";
            $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
            // line 98
            echo "            ";
        }
        // line 99
        echo "            <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
            <input type=\"radio\" ";
        // line 100
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " />
            ";
        // line 101
        if ( !(($context["label"] ?? null) === false)) {
            // line 102
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), [], ($context["translation_domain"] ?? null)), "html", null, true);
            echo "
            ";
        }
        // line 104
        echo "            </label>
        ";
        $___internal_2c0285fdebdffd37620852f283ceacde93d5964efa85e53e9bc5a6be31dda2c8_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        echo twig_spaceless($___internal_2c0285fdebdffd37620852f283ceacde93d5964efa85e53e9bc5a6be31dda2c8_);
        // line 106
        echo "    </div>
";
    }

    // line 109
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 110
        echo "    ";
        if ((0 === twig_compare(($context["widget"] ?? null), "single_text"))) {
            // line 111
            echo "        <div class=\"input-group\">
            <div class=\"input-group-addon\">
                <i class=\"far fa-calendar-alt\"></i>
            </div>

            ";
            // line 116
            if (( !array_key_exists("type", $context) || (0 !== twig_compare(($context["type"] ?? null), "date")))) {
                // line 117
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 117)) {
                    // line 118
                    echo "                    ";
                    $context["class"] = (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 118) . " timepicker");
                    // line 119
                    echo "                ";
                } else {
                    // line 120
                    echo "                    ";
                    $context["class"] = " timepicker";
                    // line 121
                    echo "                ";
                }
                // line 122
                echo "                ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => ($context["class"] ?? null), "data-datepickerenable" => "on"]);
                // line 123
                echo "            ";
            }
            // line 124
            echo "
            ";
            // line 125
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 128
            echo "        ";
            $context["date_pattern"] = (("<div class=\"row\">" . ($context["date_pattern"] ?? null)) . "</div>");
            // line 129
            echo "        ";
            echo twig_replace_filter(twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" => "<div class=\"col-xs-4\">{{ year }}</div>", "{{ month }}" => "<div class=\"col-xs-4\">{{ month }}</div>", "{{ day }}" => "<div class=\"col-xs-4\">{{ day }}</div>"]), ["{{ year }}" =>             // line 134
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 134), 'widget'), "{{ month }}" =>             // line 135
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 135), 'widget'), "{{ day }}" =>             // line 136
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 136), 'widget')]);
            // line 137
            echo "

    ";
        }
    }

    // line 142
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        echo "    ";
        if ((0 === twig_compare(($context["widget"] ?? null), "single_text"))) {
            // line 144
            echo "        <div class=\"bootstrap-timepicker\">
            <div class=\"input-group\">
                <div class=\"input-group-addon add-on\">
                    <i class=\"far fa-clock\"></i>
                </div>
                ";
            // line 149
            if (( !array_key_exists("type", $context) || (0 !== twig_compare(($context["type"] ?? null), "time")))) {
                // line 150
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 150)) {
                    // line 151
                    echo "                        ";
                    $context["class"] = (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 151) . " timepicker");
                    // line 152
                    echo "                    ";
                } else {
                    // line 153
                    echo "                        ";
                    $context["class"] = " timepicker";
                    // line 154
                    echo "                    ";
                }
                // line 155
                echo "                    ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => ($context["class"] ?? null), "data-timepicker" => "on"]);
                // line 156
                echo "                ";
            }
            // line 157
            echo "                ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
            </div>
        </div>
    ";
        } else {
            // line 161
            echo "        ";
            $this->displayParentBlock("time_widget", $context, $blocks);
            echo "
    ";
        }
    }

    // line 165
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 166
        if ((0 === twig_compare(($context["widget"] ?? null), "single_text"))) {
            // line 167
            echo "<div class=\"input-group\">
            <div class=\"input-group-addon\">
                <i class=\"fa fa-calendar-alt\"></i>
            </div>";
            // line 171
            $this->displayParentBlock("datetime_widget", $context, $blocks);
            // line 172
            echo "</div>";
        } else {
            // line 174
            $this->displayParentBlock("datetime_widget", $context, $blocks);
        }
    }

    // line 178
    public function block_tel_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 179
        echo "<div class=\"input-group\">
        <div class=\"input-group-addon\">
            ";
        // line 181
        $context["icon"] = "phone";
        // line 182
        echo "            ";
        if (twig_in_filter("icon", twig_get_array_keys_filter(($context["attr"] ?? null)))) {
            // line 183
            echo "                ";
            $context["icon"] = twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "icon", [], "any", false, false, false, 183);
            // line 184
            echo "            ";
        }
        // line 185
        echo "            <i class=\"fas fa-";
        echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
        echo "\"></i>
        </div>";
        // line 187
        $this->displayParentBlock("tel_widget", $context, $blocks);
        // line 188
        echo "</div>";
    }

    // line 191
    public function block_url_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 192
        echo "<div class=\"input-group\">
        <div class=\"input-group-addon\">
            <i class=\"fas fa-home\"></i>
        </div>";
        // line 196
        $this->displayParentBlock("url_widget", $context, $blocks);
        // line 197
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@AdminLTE/layout/form-theme-base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  567 => 197,  565 => 196,  560 => 192,  556 => 191,  552 => 188,  550 => 187,  545 => 185,  542 => 184,  539 => 183,  536 => 182,  534 => 181,  530 => 179,  526 => 178,  521 => 174,  518 => 172,  516 => 171,  511 => 167,  509 => 166,  505 => 165,  497 => 161,  489 => 157,  486 => 156,  483 => 155,  480 => 154,  477 => 153,  474 => 152,  471 => 151,  468 => 150,  466 => 149,  459 => 144,  456 => 143,  452 => 142,  445 => 137,  443 => 136,  442 => 135,  441 => 134,  439 => 129,  436 => 128,  430 => 125,  427 => 124,  424 => 123,  421 => 122,  418 => 121,  415 => 120,  412 => 119,  409 => 118,  406 => 117,  404 => 116,  397 => 111,  394 => 110,  390 => 109,  385 => 106,  383 => 89,  379 => 104,  373 => 102,  371 => 101,  359 => 100,  343 => 99,  340 => 98,  337 => 97,  334 => 96,  331 => 95,  328 => 94,  325 => 93,  322 => 92,  319 => 91,  316 => 90,  314 => 89,  311 => 88,  307 => 87,  302 => 84,  300 => 66,  296 => 82,  290 => 80,  288 => 79,  276 => 78,  261 => 77,  258 => 76,  255 => 75,  252 => 74,  249 => 73,  246 => 72,  243 => 71,  240 => 70,  237 => 69,  234 => 68,  231 => 67,  229 => 66,  226 => 65,  222 => 64,  216 => 61,  213 => 60,  207 => 59,  204 => 58,  201 => 57,  198 => 56,  193 => 55,  189 => 54,  185 => 45,  181 => 50,  172 => 48,  168 => 47,  163 => 46,  160 => 45,  156 => 44,  149 => 41,  146 => 40,  143 => 39,  140 => 38,  137 => 37,  134 => 36,  131 => 35,  128 => 34,  125 => 33,  123 => 32,  120 => 31,  118 => 28,  115 => 27,  112 => 26,  109 => 25,  106 => 24,  103 => 23,  100 => 22,  97 => 21,  93 => 20,  89 => 9,  86 => 17,  82 => 15,  73 => 13,  69 => 12,  66 => 11,  63 => 10,  60 => 9,  56 => 8,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/layout/form-theme-base.html.twig", "/home/ngts/Kaay-Dekk-Immo/vendor/kevinpapst/adminlte-bundle/Resources/views/layout/form-theme-base.html.twig");
    }
}
