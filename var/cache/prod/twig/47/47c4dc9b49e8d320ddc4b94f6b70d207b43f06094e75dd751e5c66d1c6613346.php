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

/* @EasyAdmin/crud/form_theme.html.twig */
class __TwigTemplate_398207f402e990ed3f514e75829494c3f5ebe0cc9d81a519f3c2110783e35907 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 2
        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "@EasyAdmin/crud/form_theme.html.twig", 2);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'form_row' => [$this, 'block_form_row'],
                'collection_row' => [$this, 'block_collection_row'],
                'collection_widget' => [$this, 'block_collection_widget'],
                'collection_entry_widget' => [$this, 'block_collection_entry_widget'],
                'button_row' => [$this, 'block_button_row'],
                'form_label' => [$this, 'block_form_label'],
                'form_widget_compound' => [$this, 'block_form_widget_compound'],
                'empty_collection' => [$this, 'block_empty_collection'],
                'vich_file_row' => [$this, 'block_vich_file_row'],
                'vich_file_widget' => [$this, 'block_vich_file_widget'],
                'vich_image_row' => [$this, 'block_vich_image_row'],
                'vich_image_widget' => [$this, 'block_vich_image_widget'],
                'ea_crud_rest' => [$this, 'block_ea_crud_rest'],
                'ea_crud_widget' => [$this, 'block_ea_crud_widget'],
                'ea_crud_widget_panels' => [$this, 'block_ea_crud_widget_panels'],
                'ea_autocomplete_widget' => [$this, 'block_ea_autocomplete_widget'],
                'ea_autocomplete_inner_label' => [$this, 'block_ea_autocomplete_inner_label'],
                'ea_code_editor_widget' => [$this, 'block_ea_code_editor_widget'],
                'ea_text_editor_widget' => [$this, 'block_ea_text_editor_widget'],
                'ea_section_row' => [$this, 'block_ea_section_row'],
                'ea_batch_widget' => [$this, 'block_ea_batch_widget'],
                'ea_filters_widget' => [$this, 'block_ea_filters_widget'],
                'ea_numeric_filter_widget' => [$this, 'block_ea_numeric_filter_widget'],
                'ea_datetime_filter_widget' => [$this, 'block_ea_datetime_filter_widget'],
                'ea_fileupload_widget' => [$this, 'block_ea_fileupload_widget'],
                'ea_slug_widget' => [$this, 'block_ea_slug_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('form_start', $context, $blocks);
        // line 13
        echo "
";
        // line 15
        echo "
";
        // line 17
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('date_widget', $context, $blocks);
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('time_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('file_widget', $context, $blocks);
        // line 57
        echo "
";
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('form_row', $context, $blocks);
        // line 110
        echo "
";
        // line 112
        $this->displayBlock('collection_row', $context, $blocks);
        // line 128
        echo "
";
        // line 129
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 139
        echo "
";
        // line 140
        $this->displayBlock('collection_entry_widget', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('button_row', $context, $blocks);
        // line 163
        echo "
";
        // line 165
        echo "
";
        // line 166
        $this->displayBlock('form_label', $context, $blocks);
        // line 190
        echo "
";
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 210
        echo "
";
        // line 211
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 216
        echo "
";
        // line 217
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 221
        echo "
";
        // line 222
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 268
        echo "
";
        // line 269
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 325
        echo "
";
        // line 326
        $this->displayBlock('ea_crud_rest', $context, $blocks);
        // line 329
        echo "
";
        // line 331
        $this->displayBlock('ea_crud_widget', $context, $blocks);
        // line 371
        echo "
";
        // line 372
        $this->displayBlock('ea_crud_widget_panels', $context, $blocks);
        // line 423
        echo "
";
        // line 425
        $this->displayBlock('ea_autocomplete_widget', $context, $blocks);
        // line 428
        echo "
";
        // line 429
        $this->displayBlock('ea_autocomplete_inner_label', $context, $blocks);
        // line 433
        echo "
";
        // line 435
        $this->displayBlock('ea_code_editor_widget', $context, $blocks);
        // line 452
        echo "
";
        // line 454
        $this->displayBlock('ea_text_editor_widget', $context, $blocks);
        // line 472
        echo "
";
        // line 474
        $this->displayBlock('ea_section_row', $context, $blocks);
        // line 486
        echo "
";
        // line 488
        $this->displayBlock('ea_batch_widget', $context, $blocks);
        // line 503
        echo "
";
        // line 505
        $this->displayBlock('ea_filters_widget', $context, $blocks);
        // line 554
        echo "
";
        // line 555
        $this->displayBlock('ea_numeric_filter_widget', $context, $blocks);
        // line 571
        echo "
";
        // line 572
        $this->displayBlock('ea_datetime_filter_widget', $context, $blocks);
        // line 575
        echo "
";
        // line 576
        $this->displayBlock('ea_fileupload_widget', $context, $blocks);
        // line 637
        echo "
";
        // line 638
        $this->displayBlock('ea_slug_widget', $context, $blocks);
    }

    // line 4
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        if (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 5), "errors", [], "any", false, false, false, 5)), 0)) && twig_in_filter("ea_crud", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "block_prefixes", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "block_prefixes", [], "any", false, false, false, 5), [])) : ([]))))) {
            // line 6
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        $this->displayParentBlock("form_start", $context, $blocks);
        echo "

    <input type=\"hidden\" name=\"referrer\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 11), "query", [], "any", false, false, false, 11), "get", [0 => "referrer"], "method", false, false, false, 11), "html", null, true);
        echo "\">
";
    }

    // line 17
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? null), [0 => "file", 1 => "hidden"]))) {
            // line 19
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 19), "")) : ("")))]);
        }
        // line 21
        if ((array_key_exists("type", $context) && ((0 === twig_compare(($context["type"] ?? null), "range")) || (0 === twig_compare(($context["type"] ?? null), "color"))))) {
            // line 22
            echo "        ";
            // line 23
            $context["required"] = false;
        }
        // line 25
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 28
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "<div class=\"datetime-widget datetime-widget-date\">";
        // line 30
        $this->displayParentBlock("date_widget", $context, $blocks);
        // line 31
        echo "</div>";
    }

    // line 34
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "<div class=\"datetime-widget datetime-widget-time\">";
        // line 36
        $this->displayParentBlock("time_widget", $context, $blocks);
        // line 37
        echo "</div>";
    }

    // line 40
    public function block_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        if (((array_key_exists("vich", $context)) ? (_twig_default_filter(($context["vich"] ?? null), false)) : (false))) {
            // line 42
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "file")) : ("file"));
            // line 43
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 45
            $this->displayParentBlock("file_widget", $context, $blocks);
            // line 47
            echo "<script>
            document.querySelector('#";
            // line 48
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').addEventListener('change', function() {
                const fileName = this.value.replace('C:\\\\fakepath\\\\', '');
                const customInputFileLabel = document.querySelector('#";
            // line 50
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " ~ .custom-file-label');
                customInputFileLabel.classList.add('selected');
                customInputFileLabel.innerHTML = fileName;
            });
        </script>
    ";
        }
    }

    // line 60
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "    ";
        $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source,         // line 62
($context["row_attr"] ?? null), "class", [], "any", true, true, false, 62)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 62), "")) : ("")) . " form-group")]);
        // line 64
        echo "
    <div ";
        // line 65
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context;
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ["attr" => ($context["row_attr"] ?? null)];
        if (!twig_test_iterable($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 65, $this->getSourceContext());
        }
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_to_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4;
        echo ">";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 67
        echo "<div class=\"form-widget\">
            ";
        // line 68
        $context["has_prepend_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 68), "prepend_html", [], "any", true, true, false, 68)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 68), "prepend_html", [], "any", false, false, false, 68), null)) : (null)));
        // line 69
        echo "            ";
        $context["has_append_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 69), "append_html", [], "any", true, true, false, 69)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 69), "append_html", [], "any", false, false, false, 69), null)) : (null)));
        // line 70
        echo "            ";
        $context["has_input_groups"] = (($context["has_prepend_html"] ?? null) || ($context["has_append_html"] ?? null));
        // line 71
        echo "
            ";
        // line 72
        if (($context["has_input_groups"] ?? null)) {
            echo "<div class=\"input-group\">";
        }
        // line 73
        echo "                ";
        if (($context["has_prepend_html"] ?? null)) {
            // line 74
            echo "                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\">";
            // line 75
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 75), "prepend_html", [], "any", false, false, false, 75);
            echo "</span>
                    </div>
                ";
        }
        // line 78
        echo "
                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

                ";
        // line 81
        if (($context["has_append_html"] ?? null)) {
            // line 82
            echo "                    <div class=\"input-group-append\">
                        <span class=\"input-group-text\">";
            // line 83
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 83), "append_html", [], "any", false, false, false, 83);
            echo "</span>
                    </div>
                ";
        }
        // line 86
        echo "                ";
        if (($context["has_input_groups"] ?? null)) {
            echo "</div>";
        }
        // line 87
        echo "
            ";
        // line 88
        $context["nullable_fields_fqcn"] = [0 => "EasyCorpBundleEasyAdminBundleFieldDateTimeField", 1 => "EasyCorpBundleEasyAdminBundleFieldDateField", 2 => "EasyCorpBundleEasyAdminBundleFieldTimeField"];
        // line 93
        echo "            ";
        if ((twig_in_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 93), "ea_crud_form", [], "any", false, true, false, 93), "ea_field", [], "any", false, true, false, 93), "fieldFqcn", [], "any", true, true, false, 93)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 93), "ea_crud_form", [], "any", false, true, false, 93), "ea_field", [], "any", false, true, false, 93), "fieldFqcn", [], "any", false, false, false, 93), false)) : (false)), ($context["nullable_fields_fqcn"] ?? null)) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 93), "nullable", [], "any", true, true, false, 93)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 93), "nullable", [], "any", false, false, false, 93), false)) : (false)))) {
            // line 94
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 96
            if ((null === ($context["data"] ?? null))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.nullable_field", [], "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 101
        echo "
            ";
        // line 102
        if ((0 !== twig_compare(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 102), "help", [], "any", true, true, false, 102)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 102), "help", [], "any", false, false, false, 102), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 102), "help", [], "any", false, false, false, 102))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 102), "help", [], "any", false, false, false, 102))), ""))) {
            // line 103
            echo "                <small class=\"form-help\">";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 103), "help", [], "any", true, true, false, 103)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 103), "help", [], "any", false, false, false, 103), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 103), "help", [], "any", false, false, false, 103))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 103), "help", [], "any", false, false, false, 103)));
            echo "</small>
            ";
        }
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 107
        echo "</div>
    </div>
";
    }

    // line 112
    public function block_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        echo "    ";
        if ((array_key_exists("prototype", $context) &&  !twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "rendered", [], "any", false, false, false, 113))) {
            // line 114
            echo "        ";
            $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
            // line 115
            echo "    ";
        }
        // line 116
        echo "
    ";
        // line 117
        $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["data-ea-collection-field" => "true", "data-entry-is-complex" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 119
($context["form"] ?? null), "vars", [], "any", false, false, false, 119), "ea_crud_form", [], "any", false, false, false, 119), "ea_field", [], "any", false, false, false, 119) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 119), "ea_crud_form", [], "any", false, false, false, 119), "ea_field", [], "any", false, false, false, 119), "customOptions", [], "any", false, false, false, 119), "get", [0 => "entryIsComplex"], "method", false, false, false, 119))) ? ("true") : ("false")), "data-allow-add" => ((        // line 120
($context["allow_add"] ?? null)) ? ("true") : ("false")), "data-allow-delete" => ((        // line 121
($context["allow_delete"] ?? null)) ? ("true") : ("false")), "data-num-items" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 122
($context["form"] ?? null), "children", [], "any", false, false, false, 122)), "data-form-type-name-placeholder" => ((        // line 123
array_key_exists("prototype", $context)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 123), "name", [], "any", false, false, false, 123)) : (""))]);
        // line 125
        echo "
    ";
        // line 126
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 129
    public function block_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "

    ";
        // line 132
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter(($context["allow_add"] ?? null), false)) : (false))) {
            // line 133
            echo "        <button type=\"button\" class=\"btn btn-link field-collection-add-button\">
            <i class=\"fa fa-plus pr-1\"></i>
            ";
            // line 135
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.add_new_item", [], "EasyAdminBundle"), "html", null, true);
            echo "
        </button>
    ";
        }
    }

    // line 140
    public function block_collection_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "    ";
        $context["is_complex"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 141), "ea_crud_form", [], "any", false, true, false, 141), "ea_field", [], "any", false, true, false, 141), "customOptions", [], "any", false, true, false, 141), "get", [0 => "entryIsComplex"], "method", true, true, false, 141) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 141), "ea_crud_form", [], "any", false, true, false, 141), "ea_field", [], "any", false, true, false, 141), "customOptions", [], "any", false, true, false, 141), "get", [0 => "entryIsComplex"], "method", false, false, false, 141)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 141), "ea_crud_form", [], "any", false, true, false, 141), "ea_field", [], "any", false, true, false, 141), "customOptions", [], "any", false, true, false, 141), "get", [0 => "entryIsComplex"], "method", false, false, false, 141)) : (false));
        // line 142
        echo "
    <div class=\"field-collection-item-row row no-gutters ";
        // line 143
        echo ((($context["is_complex"] ?? null)) ? ("field-collection-item-complex") : (""));
        echo "\">
        <div class=\"col-md-11\">
            ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        </div>

        ";
        // line 148
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 148), "allow_delete", [], "any", true, true, false, 148)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 148), "allow_delete", [], "any", false, false, false, 148), false)) : (false))) {
            // line 149
            echo "            <button type=\"button\" class=\"btn btn-danger field-collection-delete-button col-md-1 custom-button\"
                    title=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
            echo "\"
                    onclick=\"this.closest('.form-group').remove(); return false;\">
                <i class=\"fas fa-times\"></i>
            </button>
        ";
        }
        // line 155
        echo "    </div>
";
    }

    // line 158
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 159
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 159), "css_class", [], "any", true, true, false, 159)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 159), "css_class", [], "any", false, false, false, 159), "")) : ("")), "html", null, true);
        echo "\">";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 161
        echo "</div>";
    }

    // line 166
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 167
        if ( !(($context["label"] ?? null) === false)) {
            // line 168
            if ((array_key_exists("compound", $context) && ($context["compound"] ?? null))) {
                // line 169
                $context["element"] = "legend";
                // line 170
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 170)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 170), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 172
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null), "class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 172)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 172), "")) : ("")) . " form-control-label"))]);
            }
            // line 174
            if (($context["required"] ?? null)) {
                // line 175
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 175)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 175), "")) : ("")) . " required"))]);
            }
            // line 177
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 178
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 179
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 180
($context["name"] ?? null), "%id%" =>                     // line 181
($context["id"] ?? null)]);
                } else {
                    // line 184
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 187
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? null)) {
                $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context;
                $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ["attr" => ($context["label_attr"] ?? null)];
                if (!twig_test_iterable($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 187, $this->getSourceContext());
                }
                $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_to_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b;
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), [], ($context["translation_domain"] ?? null)))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            echo ">";
        }
    }

    // line 193
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 194
        echo "    <div class=\"form-widget-compound\">
        ";
        // line 195
        if (twig_in_filter("collection", ($context["block_prefixes"] ?? null))) {
            // line 196
            echo "            ";
            // line 198
            echo "            ";
            $context["isEmptyCollection"] = ((null === ($context["value"] ?? null)) || (twig_test_iterable(($context["value"] ?? null)) && twig_test_empty(($context["value"] ?? null))));
            // line 199
            echo "            ";
            if (($context["isEmptyCollection"] ?? null)) {
                // line 200
                echo "                ";
                $this->displayBlock("empty_collection", $context, $blocks);
                echo "
            ";
            }
            // line 202
            echo "            ";
            if ((($context["isEmptyCollection"] ?? null) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 202), "prototype", [], "any", true, true, false, 202))) {
                // line 203
                echo "                ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-empty-collection" =>                 $this->renderBlock("empty_collection", $context, $blocks)]);
                // line 204
                echo "            ";
            }
            // line 205
            echo "        ";
        }
        // line 206
        echo "
        ";
        // line 207
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        echo "
    </div>
";
    }

    // line 211
    public function block_empty_collection($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 212
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 213
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "label/empty"], "method", false, false, false, 213));
        echo "
    </div>
";
    }

    // line 217
    public function block_vich_file_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 218
        echo "    ";
        $context["force_error"] = true;
        // line 219
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 222
    public function block_vich_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 223
        echo "    <div class=\"ea-vich-file\">
        ";
        // line 224
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
            // line 225
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("download", [], "VichUploaderBundle")));
            // line 226
            echo "            ";
            $context["file_extension"] = twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "."));
            // line 227
            echo "            ";
            $context["extension_icons"] = ["gif" => "fa-file-image-o", "jpg" => "fa-file-image-o", "pdf" => "fa-file-pdf-o", "png" => "fa-file-image-o", "zip" => "fa-file-archive-o"];
            // line 234
            echo "            <a class=\"ea-vich-file-name\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true);
            echo "\">
                <i class=\"fa fa-fw ";
            // line 235
            (((twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), ($context["file_extension"] ?? null), [], "array", true, true, false, 235) &&  !(null === (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["extension_icons"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["file_extension"] ?? null)] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["extension_icons"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["file_extension"] ?? null)] ?? null) : null), "html", null, true))) : (print ("fa-file-o")));
            echo "\"></i>
                ";
            // line 236
            echo twig_escape_filter($this->env, ($context["download_title"] ?? null), "html", null, true);
            echo "
            </a>
        ";
        }
        // line 239
        echo "
        ";
        // line 240
        ob_start(function () { return ''; });
        // line 241
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 241), "vars", [], "any", false, false, false, 241), "id", [], "any", false, false, false, 241), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 244
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 244), "vars", [], "any", false, false, false, 244), "id", [], "any", false, false, false, 244), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 246
        echo "
        <div class=\"ea-vich-file-actions\">
            ";
        // line 249
        echo "            <div class=\"custom-file input-file-container\">
                ";
        // line 250
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 250), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        echo "
                <label class=\"custom-file-label\">
                    ";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                </label>
            </div>

            ";
        // line 256
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 256)) {
            // line 257
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 257), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.label.delete", [], "VichUploaderBundle")]);
            echo "
            ";
        }
        // line 259
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 260
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 260), "vars", [], "any", false, false, false, 260), "id", [], "any", false, false, false, 260), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
    }

    // line 264
    public function block_vich_image_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 265
        echo "    ";
        $context["force_error"] = true;
        // line 266
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 269
    public function block_vich_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 270
        echo "    ";
        $context["formTypeOptions"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "ea_field", [], "any", false, true, false, 270), "formTypeOptions", [], "any", true, true, false, 270)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "ea_field", [], "any", false, true, false, 270), "formTypeOptions", [], "any", false, false, false, 270), "")) : (""));
        // line 271
        echo "    <div class=\"ea-vich-image\">
        ";
        // line 272
        if ( !twig_test_empty(((array_key_exists("image_uri", $context)) ? (_twig_default_filter(($context["image_uri"] ?? null), "")) : ("")))) {
            // line 273
            echo "            ";
            if (twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
                // line 274
                echo "                <div class=\"ea-lightbox-thumbnail\">
                    ";
                // line 275
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 275) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 275)))) {
                    // line 276
                    echo "                        <img style=\"cursor: initial\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null)), "imagine_filter", twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 276)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 278
                    echo "                        <img style=\"cursor: initial\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                }
                // line 280
                echo "                </div>
            ";
            } else {
                // line 282
                echo "                ";
                $context["_lightbox_id"] = ("ea-lightbox-" . ($context["id"] ?? null));
                // line 283
                echo "
                <a href=\"#\" class=\"ea-lightbox-thumbnail\" data-featherlight=\"#";
                // line 284
                echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
                echo "\" data-featherlight-close-on-click=\"anywhere\">
                    ";
                // line 285
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 285) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 285)))) {
                    // line 286
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "imagine_filter", twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 286)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 288
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                }
                // line 290
                echo "                </a>

                <div id=\"";
                // line 292
                echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
                echo "\" class=\"ea-lightbox\">
                    ";
                // line 293
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 293) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 293)))) {
                    // line 294
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "imagine_filter", twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 294)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 296
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                }
                // line 298
                echo "                </div>
            ";
            }
            // line 300
            echo "        ";
        }
        // line 301
        echo "
        ";
        // line 302
        ob_start(function () { return ''; });
        // line 303
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 303), "vars", [], "any", false, false, false, 303), "id", [], "any", false, false, false, 303), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 306
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 306), "vars", [], "any", false, false, false, 306), "id", [], "any", false, false, false, 306), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 308
        echo "
        <div class=\"ea-vich-image-actions\">
            ";
        // line 311
        echo "            <div class=\"custom-file input-file-container\">
                ";
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 312), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        echo "
                <label class=\"custom-file-label\">
                    ";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                </label>
            </div>

            ";
        // line 318
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 318)) {
            // line 319
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 319), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.label.delete", [], "VichUploaderBundle")]);
            echo "
            ";
        }
        // line 321
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 322
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 322), "vars", [], "any", false, false, false, 322), "id", [], "any", false, false, false, 322), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
    }

    // line 326
    public function block_ea_crud_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 327
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
";
    }

    // line 331
    public function block_ea_crud_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 332
        echo "    ";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "form_tabs", [], "any", false, false, false, 332)), 0))) {
            // line 333
            echo "        <div class=\"col-12\">
            <div class=\"nav-tabs-custom form-tabs\">
                <ul class=\"nav nav-tabs\">
                    ";
            // line 336
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ea_form_tabs"] ?? null));
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 337
                echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
                // line 338
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [], "any", false, false, false, 338)) {
                    echo "active";
                }
                echo "\" href=\"#";
                echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["tab_config"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["id"] ?? null) : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["tab_config"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["id"] ?? null) : null), "html", null, true);
                echo "-tab\" data-toggle=\"tab\">";
                // line 339
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", true, true, false, 339)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", false, false, false, 339), false)) : (false))) {
                    // line 340
                    echo "<i class=\"fa fa-fw fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", false, false, false, 340), "html", null, true);
                    echo "\"></i>";
                }
                // line 342
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["tab_config"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["label"] ?? null) : null), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 342), "translationDomain", [], "any", false, false, false, 342)), "html", null, true);
                // line 343
                if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 343), 0))) {
                    // line 344
                    echo "<span class=\"badge badge-danger\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.tab.error_badge_title", ["%count%" => twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 344)], "EasyAdminBundle"), "html", null, true);
                    echo "\">";
                    // line 345
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 345), "html", null, true);
                    // line 346
                    echo "</span>";
                }
                // line 348
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 351
            echo "                </ul>
                <div class=\"tab-content\">
                    ";
            // line 353
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ea_form_tabs"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 354
                echo "                        <div id=\"";
                echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["tab_config"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["id"] ?? null) : null), "html", null, true);
                echo "\" class=\"tab-pane ";
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [], "any", false, false, false, 354)) {
                    echo "active";
                }
                echo " ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["tab_config"], "css_class", [], "array", true, true, false, 354)) ? (_twig_default_filter((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["tab_config"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["css_class"] ?? null) : null), "")) : ("")), "html", null, true);
                echo "\">
                            ";
                // line 355
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "help", [], "array", true, true, false, 355)) ? (_twig_default_filter((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["tab_config"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["help"] ?? null) : null), false)) : (false))) {
                    // line 356
                    echo "                                <div class=\"content-header-help tab-help\">
                                    ";
                    // line 357
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["tab_config"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["help"] ?? null) : null), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 357), "translationDomain", [], "any", false, false, false, 357));
                    echo "
                                </div>
                            ";
                }
                // line 360
                echo "
                            ";
                // line 361
                $this->displayBlock("ea_crud_widget_panels", $context, $blocks);
                echo "
                        </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 364
            echo "                </div>
            </div>
        </div>
    ";
        } else {
            // line 368
            echo "        ";
            $this->displayBlock("ea_crud_widget_panels", $context, $blocks);
            echo "
    ";
        }
    }

    // line 372
    public function block_ea_crud_widget_panels($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 373
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "form_panels", [], "any", false, false, false, 373), function ($__panel_config__) use ($context, $macros) { $context["panel_config"] = $__panel_config__; return ( !twig_get_attribute($this->env, $this->source, $context["panel_config"], "form_tab", [], "any", false, false, false, 373) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["panel_config"], "form_tab", [], "any", false, false, false, 373), ($context["tab_name"] ?? null)))); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["panel_name"] => $context["panel_config"]) {
            // line 374
            echo "        ";
            $context["panel_has_header"] = (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", true, true, false, 374)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", false, false, false, 374), false)) : (false)) || ((twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", true, true, false, 374)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 374), false)) : (false)));
            // line 375
            echo "
        ";
            // line 376
            $context["collapsible"] = twig_get_attribute($this->env, $this->source, $context["panel_config"], "collapsible", [], "any", false, false, false, 376);
            // line 377
            echo "        ";
            $context["collapsed"] = twig_get_attribute($this->env, $this->source, $context["panel_config"], "collapsed", [], "any", false, false, false, 377);
            // line 378
            echo "
        <div class=\"";
            // line 379
            (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", true, true, false, 379) &&  !(null === twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", false, false, false, 379)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", false, false, false, 379), "html", null, true))) : (print ("")));
            echo "\">
            <div class=\"content-panel\">
                ";
            // line 381
            if (($context["panel_has_header"] ?? null)) {
                // line 382
                echo "                    <div class=\"content-panel-header ";
                echo ((($context["collapsible"] ?? null)) ? ("collapsible") : (""));
                echo " ";
                echo (( !twig_test_empty(((twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", true, true, false, 382)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 382), false)) : (false)))) ? ("with-help") : (""));
                echo "\">
                        ";
                // line 383
                if (($context["collapsible"] ?? null)) {
                    // line 384
                    echo "                            <a href=\"#content-";
                    echo twig_escape_filter($this->env, $context["panel_name"], "html", null, true);
                    echo "\" data-toggle=\"collapse\" class=\"content-panel-collapse ";
                    echo ((($context["collapsed"] ?? null)) ? ("collapsed") : (""));
                    echo "\"
                               aria-expanded=\"";
                    // line 385
                    echo ((($context["collapsed"] ?? null)) ? ("false") : ("true"));
                    echo "\" aria-controls=\"content-";
                    echo twig_escape_filter($this->env, $context["panel_name"], "html", null, true);
                    echo "\">
                                <i class=\"fas fw fa-chevron-right collapse-icon\"></i>
                        ";
                }
                // line 388
                echo "
                            ";
                // line 389
                if (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", true, true, false, 389)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 389), false)) : (false))) {
                    // line 390
                    echo "                                <i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 390), "html", null, true);
                    echo "\"></i>
                            ";
                }
                // line 392
                echo "                            ";
                echo twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", false, false, false, 392);
                echo "

                        ";
                // line 394
                if (($context["collapsible"] ?? null)) {
                    // line 395
                    echo "                            </a>
                        ";
                }
                // line 397
                echo "
                        ";
                // line 398
                if (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", true, true, false, 398)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 398), false)) : (false))) {
                    // line 399
                    echo "                            <div class=\"content-panel-header-help\">";
                    echo twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 399);
                    echo "</div>
                        ";
                }
                // line 401
                echo "                    </div>
                ";
            }
            // line 403
            echo "
                <div id=\"content-";
            // line 404
            echo twig_escape_filter($this->env, $context["panel_name"], "html", null, true);
            echo "\" class=\"content-panel-body with-background ";
            echo (( !($context["panel_has_header"] ?? null)) ? ("without-header") : (""));
            echo " without-footer ";
            echo ((($context["collapsible"] ?? null)) ? ("collapse") : (""));
            echo " ";
            echo (( !($context["collapsed"] ?? null)) ? ("show") : (""));
            echo "\">
                    ";
            // line 405
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 405), "block_prefixes", [], "any", false, false, false, 405)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 405), "ea_crud_form", [], "any", false, false, false, 405), "form_panel", [], "any", false, false, false, 405), $context["panel_name"]))); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 406
                echo "                        ";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 406), "ea_crud_form", [], "any", false, false, false, 406), "form_tab", [], "any", false, false, false, 406) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 406), "ea_crud_form", [], "any", false, false, false, 406), "form_tab", [], "any", false, false, false, 406), ($context["tab_name"] ?? null))))) {
                    // line 407
                    echo "                            ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                        ";
                }
                // line 409
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 410
            echo "                </div>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 414
            echo "        <div class=\"content-panel\">
            <div class=\"content-panel-body with-background without-header without-footer\">
                ";
            // line 416
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 416), "block_prefixes", [], "any", false, false, false, 416)) && ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 416), "ea_crud_form", [], "any", false, false, false, 416), "form_tab", [], "any", false, false, false, 416) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 416), "ea_crud_form", [], "any", false, false, false, 416), "form_tab", [], "any", false, false, false, 416), ($context["tab_name"] ?? null))))); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 417
                echo "                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 419
            echo "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['panel_name'], $context['panel_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 425
    public function block_ea_autocomplete_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 426
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "autocomplete", [], "any", false, false, false, 426), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["required" => ($context["required"] ?? null)])]);
        echo "
";
    }

    // line 429
    public function block_ea_autocomplete_inner_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 430
        echo "    ";
        $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 430), "name", [], "any", false, false, false, 430);
        // line 431
        echo "    ";
        $this->displayBlock("form_label", $context, $blocks);
        echo "
";
    }

    // line 435
    public function block_ea_code_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 436
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["data-ea-code-editor-field" => "true", "data-language" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 438
($context["form"] ?? null), "vars", [], "any", false, false, false, 438), "ea_crud_form", [], "any", false, false, false, 438), "ea_field", [], "any", false, false, false, 438), "customOptions", [], "any", false, false, false, 438), "get", [0 => "language"], "method", false, false, false, 438), "data-tab-size" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 439
($context["form"] ?? null), "vars", [], "any", false, false, false, 439), "ea_crud_form", [], "any", false, false, false, 439), "ea_field", [], "any", false, false, false, 439), "customOptions", [], "any", false, false, false, 439), "get", [0 => "tabSize"], "method", false, false, false, 439), "data-indent-with-tabs" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 440
($context["form"] ?? null), "vars", [], "any", false, false, false, 440), "ea_crud_form", [], "any", false, false, false, 440), "ea_field", [], "any", false, false, false, 440), "customOptions", [], "any", false, false, false, 440), "get", [0 => "indentWithTabs"], "method", false, false, false, 440)) ? ("true") : ("false")), "data-show-line-numbers" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 441
($context["form"] ?? null), "vars", [], "any", false, false, false, 441), "ea_crud_form", [], "any", false, false, false, 441), "ea_field", [], "any", false, false, false, 441), "customOptions", [], "any", false, false, false, 441), "get", [0 => "showLineNumbers"], "method", false, false, false, 441)) ? ("true") : ("false"))])]);
        // line 442
        echo "

    ";
        // line 444
        $context["numOfRows"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 444), "ea_crud_form", [], "any", false, false, false, 444), "ea_field", [], "any", false, false, false, 444), "customOptions", [], "any", false, false, false, 444), "get", [0 => "numOfRows"], "method", false, false, false, 444);
        // line 445
        echo "    ";
        if ( !(null === ($context["numOfRows"] ?? null))) {
            // line 446
            echo "        <style type=\"text/css\">
            ";
            // line 448
            echo "            #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " + .CodeMirror { height: ";
            echo twig_escape_filter($this->env, twig_round((21 * ($context["numOfRows"] ?? null))), "html", null, true);
            echo "px !important; max-height: none; }
        </style>
    ";
        }
    }

    // line 454
    public function block_ea_text_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 455
        echo "    ";
        $context["numOfRows"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 455), "ea_crud_form", [], "any", false, false, false, 455), "ea_field", [], "any", false, false, false, 455), "customOptions", [], "any", false, false, false, 455), "get", [0 => "numOfRows"], "method", false, false, false, 455);
        // line 456
        echo "
    ";
        // line 457
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["style" => "display: none", "class" => "ea-text-editor-content"])]);
        echo "

    <div class=\"ea-text-editor-wrapper\">
        <trix-editor input=\"";
        // line 460
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"trix-content\"></trix-editor>
    </div>

    ";
        // line 463
        if (($context["numOfRows"] ?? null)) {
            // line 464
            echo "        <style type=\"text/css\">
            trix-editor[input=";
            // line 465
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "].trix-content {
                ";
            // line 467
            echo "                min-height: ";
            echo twig_escape_filter($this->env, twig_round((($context["numOfRows"] ?? null) * 21)), "html", null, true);
            echo "px;
            }
        </style>
    ";
        }
    }

    // line 474
    public function block_ea_section_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 475
        echo "    <div class=\"form-section ";
        echo ((((0 === twig_compare(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 475), "icon", [], "any", true, true, false, 475)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 475), "icon", [], "any", false, false, false, 475), false)) : (false)), false)) && (0 === twig_compare(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 475), "label", [], "any", true, true, false, 475)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 475), "label", [], "any", false, false, false, 475), false)) : (false)), false)))) ? ("form-section-empty") : (""));
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 475), "css_class", [], "any", true, true, false, 475)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 475), "css_class", [], "any", false, false, false, 475), "")) : ("")), "html", null, true);
        echo "\">
        <h2>
            ";
        // line 477
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 477), "icon", [], "any", true, true, false, 477)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 477), "icon", [], "any", false, false, false, 477), false)) : (false))) {
            echo "<i class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 477), "icon", [], "any", false, false, false, 477), "html", null, true);
            echo "\"></i>";
        }
        // line 478
        echo "            <span>";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 478), "label", [], "any", true, true, false, 478)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 478), "label", [], "any", false, false, false, 478), false)) : (false))) {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 478), "label", [], "any", true, true, false, 478)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 478), "label", [], "any", false, false, false, 478), "")) : ("")), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 478), "translationDomain", [], "any", false, false, false, 478));
        }
        echo "</span>
        </h2>

        ";
        // line 481
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 481), "help", [], "any", true, true, false, 481)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 481), "help", [], "any", false, false, false, 481), false)) : (false))) {
            // line 482
            echo "            <p class=\"form-section-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 482), "help", [], "any", false, false, false, 482), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 482), "translationDomain", [], "any", false, false, false, 482));
            echo "</p>
        ";
        }
        // line 484
        echo "    </div>
";
    }

    // line 488
    public function block_ea_batch_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 489
        echo "    ";
        $context["_trans_parameters"] = ["%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "entity", [], "any", false, false, false, 489), "name", [], "any", false, false, false, 489), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 489), "translationDomain", [], "any", false, false, false, 489)), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "entity", [], "any", false, false, false, 489), "label", [], "any", false, false, false, 489), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 489), "translationDomain", [], "any", false, false, false, 489))];
        // line 490
        echo "
    ";
        // line 491
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ids", [], "any", false, false, false, 491), 'widget');
        echo "
    <button type=\"button\" class=\"btn btn-link deselect-batch-button\">";
        // line 492
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.deselect", ($context["_trans_parameters"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 492), "translationDomain", [], "any", false, false, false, 492)), "html", null, true);
        echo "</button>
    ";
        // line 493
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["batch_actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 494
            echo "        <button type=\"submit\" class=\"btn ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["action"], "css_class", [], "any", true, true, false, 494)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["action"], "css_class", [], "any", false, false, false, 494), "btn-secondary")) : ("btn-secondary")), "html", null, true);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["action"], "ask_confirm", [], "any", false, false, false, 494)) {
                echo "ask-confirm-batch-button";
            }
            echo "\"
                title=\"";
            // line 495
            ((twig_test_empty(((twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", true, true, false, 495)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 495), "")) : ("")))) ? (print ("")) : (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 495), ($context["_trans_parameters"] ?? null)), "html", null, true))));
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 495), "vars", [], "any", false, false, false, 495), "full_name", [], "any", false, false, false, 495), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 495), "html", null, true);
            echo "\">";
            // line 496
            if (twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 496)) {
                echo "<i class=\"fa fa-fw fa-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 496), "html", null, true);
                echo "\"></i> ";
            }
            // line 497
            if ((twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", true, true, false, 497) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 497)))) {
                // line 498
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 498), ($context["_trans_parameters"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 498), "translationDomain", [], "any", false, false, false, 498)), "html", null, true);
            }
            // line 500
            echo "</button>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 505
    public function block_ea_filters_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 506
        echo "    ";
        $context["applied_filters"] = twig_get_array_keys_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 506), "query", [], "any", false, true, false, 506), "get", [0 => "filters"], "method", true, true, false, 506)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 506), "query", [], "any", false, true, false, 506), "get", [0 => "filters"], "method", false, false, false, 506), [])) : ([])));
        // line 507
        echo "
    ";
        // line 508
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 509
            echo "        <div class=\"filter-field ";
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 509)) {
                echo "border-bottom";
            }
            echo " py-1 px-3 ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 509)) {
                echo "pb-2";
            }
            echo "\" data-filter-property=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 509), "name", [], "any", false, false, false, 509), "html", null, true);
            echo "\">
            <div class=\"filter-heading\" id=\"filter-heading-";
            // line 510
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 510), "html", null, true);
            echo "\">
                <input type=\"checkbox\" class=\"filter-checkbox\" ";
            // line 511
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 511), "name", [], "any", false, false, false, 511), ($context["applied_filters"] ?? null))) {
                echo "checked";
            }
            echo ">
                <a data-toggle=\"collapse\" href=\"#filter-content-";
            // line 512
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 512), "html", null, true);
            echo "\" aria-expanded=\"";
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 512), "name", [], "any", false, false, false, 512), ($context["applied_filters"] ?? null))) ? ("true") : ("false"));
            echo "\" aria-controls=\"filter-content-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 512), "html", null, true);
            echo "\">
                    ";
            // line 513
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 513), "label", [], "any", true, true, false, 513)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 513), "label", [], "any", false, false, false, 513), $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 513), "name", [], "any", false, false, false, 513)))) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 513), "name", [], "any", false, false, false, 513)))), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 513), "translationDomain", [], "any", false, false, false, 513)), "html", null, true);
            echo "
                </a>
            </div>
            <div id=\"filter-content-";
            // line 516
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 516), "html", null, true);
            echo "\" class=\"filter-content collapse ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 516), "name", [], "any", false, false, false, 516), ($context["applied_filters"] ?? null))) {
                echo "show";
            }
            echo "\" aria-labelledby=\"filter-heading-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 516), "html", null, true);
            echo "\">
                <div class=\"form-widget my-2\">
                    ";
            // line 518
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            echo "
                </div>
            </div>
        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 523
        echo "
    <script>
        document.querySelectorAll('.filter-checkbox').forEach(filterCheckbox => {
            filterCheckbox.addEventListener('change', function () {
                const filterToggleLink = filterCheckbox.nextElementSibling;
                const filterExpandedAttribute = filterCheckbox.nextElementSibling.getAttribute('aria-expanded');

                if ((filterCheckbox.checked && 'false' === filterExpandedAttribute) || (!filterCheckbox.checked && 'true' === filterExpandedAttribute)) {
                    filterToggleLink.click();
                }
            });
        });

        // we can't use -> \"document.querySelector('form#filters').addEventListener('change', ...);\"
        // because it doesn't work with Select2 elements changes
        // TODO: when using the native datepicker, 'change' isn't fired (either in plain JavaScript
        // or jQuery) unless you input the entire date + time information
        \$(document).on('change', 'form#";
        // line 540
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 540), "id", [], "any", false, false, false, 540), "html", null, true);
        echo "', function (event) {
            if (event.target.classList.contains('filter-checkbox')) {
                return;
            }

            let filterCheckbox = event.target.closest('.filter-field').querySelector('.filter-checkbox');
            if (!filterCheckbox.checked) {
                filterCheckbox.checked = true;
            }
        });
    </script>

    ";
        // line 552
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_select2_widget.html.twig");
        echo "
";
    }

    // line 555
    public function block_ea_numeric_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 556
        echo "    <div class=\"form-widget-compound\">
        ";
        // line 557
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 557), 'row');
        echo "
        ";
        // line 558
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 558), 'row');
        echo "
        <div id=\"wrapper_";
        // line 559
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 559), "vars", [], "any", false, false, false, 559), "id", [], "any", false, false, false, 559), "html", null, true);
        echo "\" ";
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 559), "vars", [], "any", false, false, false, 559), "value", [], "any", false, false, false, 559), "between"))) {
            echo "style=\"display: none\"";
        }
        echo ">
            ";
        // line 560
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 560), 'row');
        echo "
        </div>
        <script>
            document.querySelector('#";
        // line 563
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 563), "vars", [], "any", false, false, false, 563), "id", [], "any", false, false, false, 563), "html", null, true);
        echo "').addEventListener('change', function(event) {
                const input = document.querySelector('#wrapper_";
        // line 564
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 564), "vars", [], "any", false, false, false, 564), "id", [], "any", false, false, false, 564), "html", null, true);
        echo "');
                input.style.display = event.currentTarget.value === 'between' ? '' : 'none';
            });
        </script>
    </div>";
        // line 569
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
    }

    // line 572
    public function block_ea_datetime_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 573
        echo "    ";
        $this->displayBlock("ea_numeric_filter_widget", $context, $blocks);
        echo "
";
    }

    // line 576
    public function block_ea_fileupload_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 577
        echo "    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 579
        $context["placeholder"] = "";
        // line 580
        echo "            ";
        $context["title"] = "";
        // line 581
        echo "            ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 582
        echo "            ";
        if (($context["currentFiles"] ?? null)) {
            // line 583
            echo "                ";
            if (($context["multiple"] ?? null)) {
                // line 584
                echo "                    ";
                $context["placeholder"] = ((twig_length_filter($this->env, ($context["currentFiles"] ?? null)) . " ") . ($context["filesLabel"] ?? null));
                // line 585
                echo "                ";
            } else {
                // line 586
                echo "                    ";
                $context["placeholder"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "filename", [], "any", false, false, false, 586);
                // line 587
                echo "                    ";
                $context["title"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "mTime", [], "any", false, false, false, 587));
                // line 588
                echo "                ";
            }
            // line 589
            echo "            ";
        }
        // line 590
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 590), 'widget', ["attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 590), "vars", [], "any", false, false, false, 590), "attr", [], "any", false, false, false, 590), ["placeholder" => ($context["placeholder"] ?? null), "title" => ($context["title"] ?? null), "data-files-label" => ($context["filesLabel"] ?? null)])]);
        echo "
            <div class=\"input-group-append\">
                <span class=\"input-group-text\" ";
        // line 592
        if (twig_test_empty(($context["currentFiles"] ?? null))) {
            echo "style=\"display: none\"";
        }
        echo ">";
        // line 593
        if (($context["currentFiles"] ?? null)) {
            // line 594
            if (($context["multiple"] ?? null)) {
                // line 595
                echo "                            ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_array_reduce($this->env, ($context["currentFiles"] ?? null), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return (($context["carry"] ?? null) + twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "size", [], "any", false, false, false, 595)); })), "html", null, true);
                echo "
                        ";
            } else {
                // line 597
                echo "                            ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "size", [], "any", false, false, false, 597)), "html", null, true);
                echo "
                        ";
            }
        }
        // line 600
        echo "</span>
                ";
        // line 601
        if (($context["allow_delete"] ?? null)) {
            // line 602
            echo "                    <label class=\"btn ea-fileupload-delete-btn\" ";
            if (twig_test_empty(($context["currentFiles"] ?? null))) {
                echo "style=\"display: none\"";
            }
            echo " for=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 602), "vars", [], "any", false, false, false, 602), "id", [], "any", false, false, false, 602), "html", null, true);
            echo "\">
                        <i class=\"fa fa-trash-o\"></i>
                    </label>
                ";
        }
        // line 606
        echo "                <label class=\"btn\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 606), "vars", [], "any", false, false, false, 606), "id", [], "any", false, false, false, 606), "html", null, true);
        echo "\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </label>
            </div>
        </div>
        ";
        // line 611
        if ((($context["multiple"] ?? null) && ($context["currentFiles"] ?? null))) {
            // line 612
            echo "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 615
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currentFiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 616
                echo "                        <tr>
                            <td>
                                ";
                // line 618
                if (($context["download_path"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["download_path"] ?? null) . twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 618))), "html", null, true);
                    echo "\">";
                }
                // line 619
                echo "                                    <span title=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 619)), "html", null, true);
                echo "\">
                                        <i class=\"fa fa-file-o\"></i> ";
                // line 620
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 620), "html", null, true);
                echo "
                                    </span>
                                    ";
                // line 622
                if (($context["download_path"] ?? null)) {
                    echo "</a>";
                }
                // line 623
                echo "                            </td>
                            <td class=\"text-right file-size\">";
                // line 624
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 624)), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 627
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 631
        echo "        ";
        if (($context["allow_delete"] ?? null)) {
            // line 632
            echo "            <div style=\"display: none\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 632), 'widget', ["label" => false]);
            echo "</div>
        ";
        }
        // line 634
        echo "    </div>
    ";
        // line 635
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 635), 'errors');
        echo "
";
    }

    // line 638
    public function block_ea_slug_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 639
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-ea-slug-field" => "", "data-target" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 641
($context["form"] ?? null), "parent", [], "any", false, false, false, 641), "children", [], "any", false, false, false, 641)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[($context["target"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 641), "id", [], "any", false, false, false, 641)]);
        // line 643
        echo "
    <div class=\"input-group\">
        ";
        // line 645
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
        <div class=\"input-group-append\">
            <button class=\"btn btn-outline-secondary\" type=\"button\">
                <i class=\"fas fa-lock fa-fw\"></i>
            </button>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1826 => 645,  1822 => 643,  1820 => 641,  1818 => 639,  1814 => 638,  1808 => 635,  1805 => 634,  1799 => 632,  1796 => 631,  1790 => 627,  1781 => 624,  1778 => 623,  1774 => 622,  1769 => 620,  1764 => 619,  1758 => 618,  1754 => 616,  1750 => 615,  1745 => 612,  1743 => 611,  1734 => 606,  1722 => 602,  1720 => 601,  1717 => 600,  1710 => 597,  1704 => 595,  1702 => 594,  1700 => 593,  1695 => 592,  1689 => 590,  1686 => 589,  1683 => 588,  1680 => 587,  1677 => 586,  1674 => 585,  1671 => 584,  1668 => 583,  1665 => 582,  1662 => 581,  1659 => 580,  1657 => 579,  1653 => 577,  1649 => 576,  1642 => 573,  1638 => 572,  1634 => 569,  1627 => 564,  1623 => 563,  1617 => 560,  1609 => 559,  1605 => 558,  1601 => 557,  1598 => 556,  1594 => 555,  1588 => 552,  1573 => 540,  1554 => 523,  1535 => 518,  1524 => 516,  1518 => 513,  1510 => 512,  1504 => 511,  1500 => 510,  1487 => 509,  1470 => 508,  1467 => 507,  1464 => 506,  1460 => 505,  1451 => 500,  1448 => 498,  1446 => 497,  1440 => 496,  1433 => 495,  1424 => 494,  1420 => 493,  1416 => 492,  1412 => 491,  1409 => 490,  1406 => 489,  1402 => 488,  1397 => 484,  1391 => 482,  1389 => 481,  1380 => 478,  1374 => 477,  1366 => 475,  1362 => 474,  1352 => 467,  1348 => 465,  1345 => 464,  1343 => 463,  1337 => 460,  1331 => 457,  1328 => 456,  1325 => 455,  1321 => 454,  1310 => 448,  1307 => 446,  1304 => 445,  1302 => 444,  1298 => 442,  1296 => 441,  1295 => 440,  1294 => 439,  1293 => 438,  1291 => 436,  1287 => 435,  1280 => 431,  1277 => 430,  1273 => 429,  1266 => 426,  1262 => 425,  1252 => 419,  1243 => 417,  1239 => 416,  1235 => 414,  1227 => 410,  1221 => 409,  1215 => 407,  1212 => 406,  1208 => 405,  1198 => 404,  1195 => 403,  1191 => 401,  1185 => 399,  1183 => 398,  1180 => 397,  1176 => 395,  1174 => 394,  1168 => 392,  1162 => 390,  1160 => 389,  1157 => 388,  1149 => 385,  1142 => 384,  1140 => 383,  1133 => 382,  1131 => 381,  1126 => 379,  1123 => 378,  1120 => 377,  1118 => 376,  1115 => 375,  1112 => 374,  1106 => 373,  1102 => 372,  1094 => 368,  1088 => 364,  1071 => 361,  1068 => 360,  1062 => 357,  1059 => 356,  1057 => 355,  1046 => 354,  1029 => 353,  1025 => 351,  1017 => 348,  1014 => 346,  1012 => 345,  1008 => 344,  1006 => 343,  1004 => 342,  999 => 340,  997 => 339,  988 => 338,  985 => 337,  981 => 336,  976 => 333,  973 => 332,  969 => 331,  962 => 327,  958 => 326,  951 => 322,  948 => 321,  942 => 319,  940 => 318,  933 => 314,  928 => 312,  925 => 311,  921 => 308,  916 => 306,  909 => 303,  907 => 302,  904 => 301,  901 => 300,  897 => 298,  891 => 296,  885 => 294,  883 => 293,  879 => 292,  875 => 290,  869 => 288,  863 => 286,  861 => 285,  857 => 284,  854 => 283,  851 => 282,  847 => 280,  841 => 278,  835 => 276,  833 => 275,  830 => 274,  827 => 273,  825 => 272,  822 => 271,  819 => 270,  815 => 269,  808 => 266,  805 => 265,  801 => 264,  794 => 260,  791 => 259,  785 => 257,  783 => 256,  776 => 252,  771 => 250,  768 => 249,  764 => 246,  759 => 244,  752 => 241,  750 => 240,  747 => 239,  741 => 236,  737 => 235,  732 => 234,  729 => 227,  726 => 226,  723 => 225,  721 => 224,  718 => 223,  714 => 222,  707 => 219,  704 => 218,  700 => 217,  693 => 213,  690 => 212,  686 => 211,  679 => 207,  676 => 206,  673 => 205,  670 => 204,  667 => 203,  664 => 202,  658 => 200,  655 => 199,  652 => 198,  650 => 196,  648 => 195,  645 => 194,  641 => 193,  619 => 187,  615 => 184,  612 => 181,  611 => 180,  610 => 179,  608 => 178,  606 => 177,  603 => 175,  601 => 174,  598 => 172,  595 => 170,  593 => 169,  591 => 168,  589 => 167,  585 => 166,  581 => 161,  579 => 160,  573 => 159,  569 => 158,  564 => 155,  556 => 150,  553 => 149,  551 => 148,  545 => 145,  540 => 143,  537 => 142,  534 => 141,  530 => 140,  522 => 135,  518 => 133,  516 => 132,  510 => 130,  506 => 129,  500 => 126,  497 => 125,  495 => 123,  494 => 122,  493 => 121,  492 => 120,  491 => 119,  490 => 117,  487 => 116,  484 => 115,  481 => 114,  478 => 113,  474 => 112,  468 => 107,  466 => 106,  460 => 103,  458 => 102,  455 => 101,  448 => 97,  442 => 96,  438 => 94,  435 => 93,  433 => 88,  430 => 87,  425 => 86,  419 => 83,  416 => 82,  414 => 81,  409 => 79,  406 => 78,  400 => 75,  397 => 74,  394 => 73,  390 => 72,  387 => 71,  384 => 70,  381 => 69,  379 => 68,  376 => 67,  374 => 66,  363 => 65,  360 => 64,  358 => 62,  356 => 61,  352 => 60,  341 => 50,  336 => 48,  333 => 47,  331 => 45,  328 => 43,  326 => 42,  324 => 41,  320 => 40,  316 => 37,  314 => 36,  312 => 35,  308 => 34,  304 => 31,  302 => 30,  300 => 29,  296 => 28,  292 => 25,  289 => 23,  287 => 22,  285 => 21,  282 => 19,  280 => 18,  276 => 17,  270 => 11,  265 => 9,  262 => 8,  256 => 6,  253 => 5,  249 => 4,  245 => 638,  242 => 637,  240 => 576,  237 => 575,  235 => 572,  232 => 571,  230 => 555,  227 => 554,  225 => 505,  222 => 503,  220 => 488,  217 => 486,  215 => 474,  212 => 472,  210 => 454,  207 => 452,  205 => 435,  202 => 433,  200 => 429,  197 => 428,  195 => 425,  192 => 423,  190 => 372,  187 => 371,  185 => 331,  182 => 329,  180 => 326,  177 => 325,  175 => 269,  172 => 268,  170 => 264,  167 => 263,  165 => 222,  162 => 221,  160 => 217,  157 => 216,  155 => 211,  152 => 210,  150 => 193,  147 => 192,  144 => 190,  142 => 166,  139 => 165,  136 => 163,  134 => 158,  131 => 157,  129 => 140,  126 => 139,  124 => 129,  121 => 128,  119 => 112,  116 => 110,  114 => 60,  111 => 59,  108 => 57,  106 => 40,  103 => 39,  101 => 34,  98 => 33,  96 => 28,  93 => 27,  91 => 17,  88 => 15,  85 => 13,  83 => 4,  80 => 3,  30 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/form_theme.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/bundles/EasyAdminBundle/crud/form_theme.html.twig");
    }
}
