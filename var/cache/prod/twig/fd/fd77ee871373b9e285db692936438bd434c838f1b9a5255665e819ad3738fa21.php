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

/* @AdminLTE/layout/form-theme-horizontal.html.twig */
class __TwigTemplate_b4b9bbbd8267d855cef58fea798001beb00fac5050ed7f7e7151b203dfb97fd5 extends Template
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
            'email_widget' => [$this, 'block_email_widget'],
            'password_widget' => [$this, 'block_password_widget'],
            'tel_widget' => [$this, 'block_tel_widget'],
            'url_widget' => [$this, 'block_url_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("bootstrap_3_horizontal_layout.html.twig", "@AdminLTE/layout/form-theme-horizontal.html.twig", 1);
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
        $___internal_afde573780e50253df9ac99348ee52865c02dbce3a9236c002b6d17f2f076932_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        echo twig_spaceless($___internal_afde573780e50253df9ac99348ee52865c02dbce3a9236c002b6d17f2f076932_);
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
        $___internal_71f5f040dcc17237b0da68bb0aeff3a5dea204535628a87e35ef98c2333cefc8_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        echo twig_spaceless($___internal_71f5f040dcc17237b0da68bb0aeff3a5dea204535628a87e35ef98c2333cefc8_);
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
        $___internal_0fa87b681d79effed70cc5fe26c32cf2f30498f7bfe3d0bd7750d6ebabee59df_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 66
        echo twig_spaceless($___internal_0fa87b681d79effed70cc5fe26c32cf2f30498f7bfe3d0bd7750d6ebabee59df_);
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
        $___internal_17781596bc7a53c805911f748c9ca40eff8e39e618bb567750038d27ab09572b_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        echo twig_spaceless($___internal_17781596bc7a53c805911f748c9ca40eff8e39e618bb567750038d27ab09572b_);
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
    public function block_email_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 179
        echo "<div class=\"input-group\">
        <div class=\"input-group-addon\">
            <i class=\"fa fa-at\"></i>
        </div>";
        // line 183
        $this->displayParentBlock("email_widget", $context, $blocks);
        // line 184
        echo "</div>";
    }

    // line 187
    public function block_password_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 188
        echo "<div class=\"input-group\">
        <div class=\"input-group-addon\">
            <i class=\"fas fa-key\"></i>
        </div>";
        // line 192
        $this->displayParentBlock("password_widget", $context, $blocks);
        // line 193
        echo "</div>";
    }

    // line 196
    public function block_tel_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 197
        echo "<div class=\"input-group\">
        <div class=\"input-group-addon\">
            ";
        // line 199
        $context["icon"] = "phone";
        // line 200
        echo "            ";
        if (twig_in_filter("icon", twig_get_array_keys_filter(($context["attr"] ?? null)))) {
            // line 201
            echo "                ";
            $context["icon"] = twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "icon", [], "any", false, false, false, 201);
            // line 202
            echo "            ";
        }
        // line 203
        echo "            <i class=\"fas fa-";
        echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
        echo "\"></i>
        </div>";
        // line 205
        $this->displayParentBlock("tel_widget", $context, $blocks);
        // line 206
        echo "</div>";
    }

    // line 209
    public function block_url_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 210
        echo "<div class=\"input-group\">
        <div class=\"input-group-addon\">
            <i class=\"fas fa-home\"></i>
        </div>";
        // line 214
        $this->displayParentBlock("url_widget", $context, $blocks);
        // line 215
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@AdminLTE/layout/form-theme-horizontal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  599 => 215,  597 => 214,  592 => 210,  588 => 209,  584 => 206,  582 => 205,  577 => 203,  574 => 202,  571 => 201,  568 => 200,  566 => 199,  562 => 197,  558 => 196,  554 => 193,  552 => 192,  547 => 188,  543 => 187,  539 => 184,  537 => 183,  532 => 179,  528 => 178,  523 => 174,  520 => 172,  518 => 171,  513 => 167,  511 => 166,  507 => 165,  499 => 161,  491 => 157,  488 => 156,  485 => 155,  482 => 154,  479 => 153,  476 => 152,  473 => 151,  470 => 150,  468 => 149,  461 => 144,  458 => 143,  454 => 142,  447 => 137,  445 => 136,  444 => 135,  443 => 134,  441 => 129,  438 => 128,  432 => 125,  429 => 124,  426 => 123,  423 => 122,  420 => 121,  417 => 120,  414 => 119,  411 => 118,  408 => 117,  406 => 116,  399 => 111,  396 => 110,  392 => 109,  387 => 106,  385 => 89,  381 => 104,  375 => 102,  373 => 101,  361 => 100,  345 => 99,  342 => 98,  339 => 97,  336 => 96,  333 => 95,  330 => 94,  327 => 93,  324 => 92,  321 => 91,  318 => 90,  316 => 89,  313 => 88,  309 => 87,  304 => 84,  302 => 66,  298 => 82,  292 => 80,  290 => 79,  278 => 78,  263 => 77,  260 => 76,  257 => 75,  254 => 74,  251 => 73,  248 => 72,  245 => 71,  242 => 70,  239 => 69,  236 => 68,  233 => 67,  231 => 66,  228 => 65,  224 => 64,  218 => 61,  215 => 60,  209 => 59,  206 => 58,  203 => 57,  200 => 56,  195 => 55,  191 => 54,  187 => 45,  183 => 50,  174 => 48,  170 => 47,  165 => 46,  162 => 45,  158 => 44,  151 => 41,  148 => 40,  145 => 39,  142 => 38,  139 => 37,  136 => 36,  133 => 35,  130 => 34,  127 => 33,  125 => 32,  122 => 31,  120 => 28,  117 => 27,  114 => 26,  111 => 25,  108 => 24,  105 => 23,  102 => 22,  99 => 21,  95 => 20,  91 => 9,  88 => 17,  84 => 15,  75 => 13,  71 => 12,  68 => 11,  65 => 10,  62 => 9,  58 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/layout/form-theme-horizontal.html.twig", "/home/ngts/Kaay-Dekk-Immo/vendor/kevinpapst/adminlte-bundle/Resources/views/layout/form-theme-horizontal.html.twig");
    }
}
