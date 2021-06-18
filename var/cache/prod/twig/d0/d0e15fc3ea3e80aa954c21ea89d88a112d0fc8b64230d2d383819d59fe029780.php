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

/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_ad2376b0c16a8a747889f74214398d1c310e424676eae65d3090446777de8b3d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'global_actions' => [$this, 'block_global_actions'],
            'content_header' => [$this, 'block_content_header'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'main' => [$this, 'block_main'],
            'search' => [$this, 'block_search'],
            'search_form' => [$this, 'block_search_form'],
            'filters' => [$this, 'block_filters'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'entity_actions' => [$this, 'block_entity_actions'],
            'paginator' => [$this, 'block_paginator'],
            'delete_form' => [$this, 'block_delete_form'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 4), "@EasyAdmin/crud/index.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $context["__internal_36308fa0914a8b720af081ac7d77e298720f036e519a7c2b1073413be821e139"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "translationDomain", [], "any", false, false, false, 5);
        // line 8
        $context["has_batch_actions"] = ((false && array_key_exists("batch_form", $context)) && (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 8), "actions", [], "any", false, false, false, 8), "batchActions", [], "any", false, false, false, 8)), 0)));
        // line 4
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        (((1 === twig_compare(twig_length_filter($this->env, ($context["entities"] ?? null)), 0))) ? (print (twig_escape_filter($this->env, ("ea-index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "name", [], "any", false, false, false, 10)), "html", null, true))) : (print ("")));
    }

    // line 11
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ("index" . (((1 === twig_compare(twig_length_filter($this->env, ($context["entities"] ?? null)), 0))) ? ((" index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "name", [], "any", false, false, false, 11))) : (""))), "html", null, true);
    }

    // line 13
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        ob_start(function () { return ''; });
        // line 15
        $context["default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 15), "defaultPageTitle", [0 => "index"], "method", false, false, false, 15), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 15), "translationParameters", [], "any", false, false, false, 15), "EasyAdminBundle");
        // line 16
        echo "        ";
        echo (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 16), "customPageTitle", [], "any", false, false, false, 16))) ? (($context["default_title"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 16), "customPageTitle", [0 => "index"], "method", false, false, false, 16), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 16), "translationParameters", [], "any", false, false, false, 16),         // line 5
($context["__internal_36308fa0914a8b720af081ac7d77e298720f036e519a7c2b1073413be821e139"] ?? null))));
        $___internal_84b54cae1dc606003f6c36bd61e479d680152e038c5e7e058c04f389f7dadbd9_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        echo twig_spaceless($___internal_84b54cae1dc606003f6c36bd61e479d680152e038c5e7e058c04f389f7dadbd9_);
    }

    // line 20
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        $this->displayBlock('global_actions', $context, $blocks);
    }

    public function block_global_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["global_actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 23
            echo "            ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 23), ["action" => $context["action"]], false);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    ";
    }

    // line 28
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    ";
        $this->displayParentBlock("content_header", $context, $blocks);
        echo "

    
    ";
        // line 32
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 39
        echo "    
";
    }

    // line 32
    public function block_batch_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 33), "actions", [], "any", false, false, false, 33), "batchActions", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["batchAction"]) {
            // line 34
            echo "            ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["batchAction"], "templatePath", [], "any", false, false, false, 34), ["action" => $context["batchAction"]], false);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['batchAction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
        ";
        // line 37
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_batch_action_modal.html.twig", [], false);
        echo "
    ";
    }

    // line 42
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "    ";
        // line 44
        echo "    ";
        $context["sort_field_name"] = twig_first($this->env, twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 44), "get", [0 => "sort"], "method", false, false, false, 44)));
        // line 45
        echo "    ";
        $context["sort_order"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 45), "get", [0 => "sort"], "method", false, false, false, 45));
        // line 46
        echo "    ";
        $context["some_results_are_hidden"] = false;
        // line 47
        echo "    ";
        $context["has_footer"] = (0 !== twig_compare(twig_length_filter($this->env, ($context["entities"] ?? null)), 0));
        // line 48
        echo "    ";
        $context["has_search"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 48), "isSearchEnabled", [], "any", false, false, false, 48);
        // line 49
        echo "    ";
        $context["has_filters"] = (1 === twig_compare(twig_length_filter($this->env, ($context["filters"] ?? null)), 0));
        // line 50
        echo "    ";
        $context["has_datagrid_tools"] = (($context["has_search"] ?? null) || ($context["has_filters"] ?? null));
        // line 51
        echo "
    ";
        // line 52
        if (($context["has_datagrid_tools"] ?? null)) {
            // line 53
            echo "        <div class=\"datagrid-header-tools\">
            <div class=\"datagrid-search\">
                ";
            // line 55
            $this->displayBlock('search', $context, $blocks);
            // line 87
            echo "            </div>

            <div class=\"datagrid-filters\">
                ";
            // line 90
            $this->displayBlock('filters', $context, $blocks);
            // line 105
            echo "            </div>
        </div>
    ";
        }
        // line 108
        echo "
    <div class=\"content-panel\">
        <div class=\"content-panel-body with-rounded-top with-min-h-250 without-padding table-responsive ";
        // line 110
        echo (( !($context["has_footer"] ?? null)) ? ("without-footer") : (""));
        echo "\">
            <table class=\"table datagrid with-rounded-top  ";
        // line 111
        echo (( !($context["has_footer"] ?? null)) ? ("with-rounded-bottom") : (""));
        echo "\">
                <thead>
                ";
        // line 113
        $this->displayBlock('table_head', $context, $blocks);
        // line 142
        echo "                </thead>

                <tbody>
                ";
        // line 145
        $this->displayBlock('table_body', $context, $blocks);
        // line 201
        echo "                </tbody>
            </table>
        </div>

        ";
        // line 205
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["entities"] ?? null)), 0))) {
            // line 206
            echo "            <div class=\"content-panel-footer table-responsive without-padding without-border\">
                ";
            // line 207
            $this->displayBlock('paginator', $context, $blocks);
            // line 210
            echo "            </div>
        ";
        }
        // line 212
        echo "    </div>

    ";
        // line 214
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 55
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "                    ";
        if (($context["has_search"] ?? null)) {
            // line 57
            echo "                        <div class=\"form-action form-action-search\">
                            <form method=\"get\">
                                ";
            // line 59
            $this->displayBlock('search_form', $context, $blocks);
            // line 83
            echo "                            </form>
                        </div>
                    ";
        }
        // line 86
        echo "                ";
    }

    // line 59
    public function block_search_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "                                    ";
        // line 61
        echo "                                    ";
        $context["query_parameters"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 61), "query", [], "any", false, false, false, 61), "all", [], "any", false, false, false, 61), ["referrer" => null, "page" => 1]);
        // line 64
        echo "
                                    ";
        // line 67
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->flattenArray(($context["query_parameters"] ?? null)));
        foreach ($context['_seq'] as $context["paramName"] => $context["paramValue"]) {
            // line 68
            echo "                                        <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, $context["paramName"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
            echo "\">
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['paramName'], $context['paramValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
                                    <div class=\"form-group\">
                                        <div class=\"form-widget\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 73
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 73), "get", [0 => "query"], "method", true, true, false, 73) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 73), "get", [0 => "query"], "method", false, false, false, 73)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 73), "get", [0 => "query"], "method", false, false, false, 73), "html", null, true))) : (print ("")));
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.search", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 73), "translationParameters", [], "any", false, false, false, 73), "EasyAdminBundle"), "html", null, true);
        echo "\">

                                            ";
        // line 75
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 75), "get", [0 => "query"], "method", false, false, false, 75)) {
            // line 76
            echo "                                                <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", [0 => "query"], "method", false, false, false, 76), "html", null, true);
            echo "\" class=\"action-search-reset\">
                                                    <i class=\"fas fa-times-circle\"></i>
                                                </a>
                                            ";
        }
        // line 80
        echo "                                        </div>
                                    </div>
                                ";
    }

    // line 90
    public function block_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "                    ";
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["filters"] ?? null)), 0))) {
            // line 92
            echo "                        ";
            $context["applied_filters"] = twig_get_array_keys_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 92), "query", [], "any", false, true, false, 92), "all", [], "any", false, true, false, 92), "filters", [], "array", true, true, false, 92)) ? (_twig_default_filter((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 92), "query", [], "any", false, true, false, 92), "all", [], "any", false, true, false, 92)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["filters"] ?? null) : null), [])) : ([])));
            // line 93
            echo "                        <div class=\"btn-group action-filters\">
                            <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setAction", [0 => "renderFilters"], "method", false, false, false, 94), "includeReferrer", [], "method", false, false, false, 94), "html", null, true);
            echo "\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button ";
            echo ((($context["applied_filters"] ?? null)) ? ("action-filters-applied") : (""));
            echo "\" data-modal=\"#modal-filters\">
                                <i class=\"fa fa-filter fa-fw\"></i> ";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.title", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 95), "translationParameters", [], "any", false, false, false, 95), "EasyAdminBundle"), "html", null, true);
            if (($context["applied_filters"] ?? null)) {
                echo " <span class=\"text-primary\">(";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["applied_filters"] ?? null)), "html", null, true);
                echo ")</span>";
            }
            // line 96
            echo "                            </a>
                            ";
            // line 97
            if (($context["applied_filters"] ?? null)) {
                // line 98
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", [0 => "filters"], "method", false, false, false, 98), "html", null, true);
                echo "\" class=\"btn btn-secondary action-filters-reset\">
                                    <i class=\"fa fa-close\"></i>
                                </a>
                            ";
            }
            // line 102
            echo "                        </div>
                    ";
        }
        // line 104
        echo "                ";
    }

    // line 113
    public function block_table_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "                    <tr>
                        ";
        // line 115
        if (($context["has_batch_actions"] ?? null)) {
            // line 116
            echo "                            <th width=\"1px\"><span><input type=\"checkbox\" class=\"form-batch-checkbox-all\"></span></th>
                        ";
        }
        // line 118
        echo "
                        ";
        // line 119
        $context["ea_sort_asc"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::ASC");
        // line 120
        echo "                        ";
        $context["ea_sort_desc"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::DESC");
        // line 121
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", true, true, false, 121) &&  !(null === twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 121)))) ? (twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 121)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 122
            echo "                            ";
            $context["is_sorting_field"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 122), "isSortingField", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 122)], "method", false, false, false, 122);
            // line 123
            echo "                            ";
            $context["next_sort_direction"] = ((($context["is_sorting_field"] ?? null)) ? ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 123), "sortDirection", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 123)], "method", false, false, false, 123), ($context["ea_sort_desc"] ?? null)))) ? (($context["ea_sort_asc"] ?? null)) : (($context["ea_sort_desc"] ?? null)))) : (($context["ea_sort_desc"] ?? null)));
            // line 124
            echo "                            ";
            $context["column_icon"] = ((($context["is_sorting_field"] ?? null)) ? ((((0 === twig_compare(($context["next_sort_direction"] ?? null), ($context["ea_sort_desc"] ?? null)))) ? ("fa-arrow-up") : ("fa-arrow-down"))) : ("fa-sort"));
            // line 125
            echo "
                            <th class=\"";
            // line 126
            echo ((($context["is_sorting_field"] ?? null)) ? ("sorted") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["field"], "isVirtual", [], "any", false, false, false, 126)) ? ("field-virtual") : (""));
            echo " text-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 126), "html", null, true);
            echo "\" dir=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 126), "textDirection", [], "any", false, false, false, 126), "html", null, true);
            echo "\">
                                ";
            // line 127
            if (twig_get_attribute($this->env, $this->source, $context["field"], "isSortable", [], "any", false, false, false, 127)) {
                // line 128
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(["page" => 1, "sort" => [twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 128) => ($context["next_sort_direction"] ?? null)]]), "includeReferrer", [], "method", false, false, false, 128), "html", null, true);
                echo "\">
                                        ";
                // line 129
                echo twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 129);
                echo " <i class=\"fa fa-fw ";
                echo twig_escape_filter($this->env, ($context["column_icon"] ?? null), "html", null, true);
                echo "\"></i>
                                    </a>
                                ";
            } else {
                // line 132
                echo "                                    <span>";
                echo twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 132);
                echo "</span>
                                ";
            }
            // line 134
            echo "                            </th>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "
                        <th ";
        // line 137
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 137), "showEntityActionsAsDropdown", [], "any", false, false, false, 137)) {
            echo "width=\"10px\"";
        }
        echo " dir=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 137), "textDirection", [], "any", false, false, false, 137), "html", null, true);
        echo "\">
                            <span class=\"sr-only\">";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.entity_actions", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 138), "translationParameters", [], "any", false, false, false, 138), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                        </th>
                    </tr>
                ";
    }

    // line 145
    public function block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 146
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 147
            echo "                        ";
            if ( !twig_get_attribute($this->env, $this->source, $context["entity"], "isAccessible", [], "any", false, false, false, 147)) {
                // line 148
                echo "                            ";
                $context["some_results_are_hidden"] = true;
                // line 149
                echo "                        ";
            } else {
                // line 150
                echo "                            <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValueAsString", [], "any", false, false, false, 150), "html", null, true);
                echo "\">
                                ";
                // line 151
                if (($context["has_batch_actions"] ?? null)) {
                    // line 152
                    echo "                                    <td><input type=\"checkbox\" class=\"form-batch-checkbox\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValue", [], "any", false, false, false, 152), "html", null, true);
                    echo "\"></td>
                                ";
                }
                // line 154
                echo "
                                ";
                // line 155
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["entity"], "fields", [], "any", false, false, false, 155));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 156
                    echo "                                    <td class=\"";
                    echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 156), ($context["sort_field_name"] ?? null)))) ? ("sorted") : (""));
                    echo " text-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 156), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 156), "html", null, true);
                    echo "\" dir=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 156), "textDirection", [], "any", false, false, false, 156), "html", null, true);
                    echo "\">
                                        ";
                    // line 157
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["field"], "templatePath", [], "any", false, false, false, 157), ["field" => $context["field"], "entity" => $context["entity"]], false);
                    echo "
                                    </td>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 160
                echo "
                                ";
                // line 161
                $this->displayBlock('entity_actions', $context, $blocks);
                // line 182
                echo "                            </tr>

                        ";
            }
            // line 185
            echo "                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 186
            echo "                        <tr>
                            <td class=\"no-results\" colspan=\"100\">
                                ";
            // line 188
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.no_results", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 188), "translationParameters", [], "any", false, false, false, 188), "EasyAdminBundle"), "html", null, true);
            echo "
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "
                    ";
        // line 193
        if (($context["some_results_are_hidden"] ?? null)) {
            // line 194
            echo "                        <tr class=\"datagrid-row-empty\">
                            <td class=\"text-center\" colspan=\"";
            // line 195
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 195)) + 1), "html", null, true);
            echo "\">
                                <span class=\"datagrid-row-empty-message\"><i class=\"fa fa-lock mr-1\"></i> ";
            // line 196
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.hidden_results", [], "EasyAdminBundle"), "html", null, true);
            echo "</span>
                            </td>
                        </tr>
                    ";
        }
        // line 200
        echo "                ";
    }

    // line 161
    public function block_entity_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 162
        echo "                                    <td class=\"actions\">
                                        ";
        // line 163
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 163), "showEntityActionsAsDropdown", [], "any", false, false, false, 163)) {
            // line 164
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 164));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 165
                echo "                                                ";
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 165), ["action" => $context["action"], "entity" => ($context["entity"] ?? null), "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 165), "showEntityActionsAsDropdown", [], "any", false, false, false, 165)], false);
                echo "
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "                                        ";
        } else {
            // line 168
            echo "                                            <div class=\"dropdown dropdown-actions\">
                                                <a class=\"dropdown-toggle btn btn-secondary btn-sm\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                    <i class=\"fa fa-fw fa-ellipsis-h\"></i>
                                                </a>

                                                <div class=\"dropdown-menu dropdown-menu-right\">
                                                    ";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 174));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 175
                echo "                                                        ";
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 175), ["action" => $context["action"], "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 175), "showEntityActionsAsDropdown", [], "any", false, false, false, 175)], false);
                echo "
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "                                                </div>
                                            </div>
                                        ";
        }
        // line 180
        echo "                                    </td>
                                ";
    }

    // line 207
    public function block_paginator($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 208
        echo "                    ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "crud/paginator"], "method", false, false, false, 208));
        echo "
                ";
    }

    // line 214
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 215
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", array(), false);
        echo "
    ";
    }

    // line 219
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 220
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    ";
        // line 222
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["filters"] ?? null)), 0))) {
            // line 223
            echo "        ";
            echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_filters_modal.html.twig");
            echo "
    ";
        }
        // line 225
        echo "
    <script type=\"text/javascript\">
        \$(function() {
            const customSwitches = document.querySelectorAll('td.field-boolean .custom-control.custom-switch input[type=\"checkbox\"]');
            for (i = 0; i < customSwitches.length; i++) {
                customSwitches[i].addEventListener('change', function () {
                    const customSwitch = this;
                    const newValue = this.checked;
                    const oldValue = !newValue;

                    const toggleUrl = this.getAttribute('data-toggle-url') + \"&newValue=\" + newValue.toString();
                    let toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                    toggleRequest.done(function(result) {});

                    toggleRequest.fail(function() {
                        // in case of error, restore the original value and disable the toggle
                        customSwitch.checked = oldValue;
                        customSwitch.disabled = true;
                        customSwitch.closest('.custom-switch').classList.add('disabled');
                    });
                });
            }

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                const formAction = \$(this).attr('formaction');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        let deleteForm = \$('#delete-form');
                        deleteForm.attr('action', formAction);
                        deleteForm.submit();
                    });
            });

            ";
        // line 262
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["filters"] ?? null)), 0))) {
            // line 263
            echo "            // HTML5 specifies that a <script> tag inserted with innerHTML should not execute
            // https://developer.mozilla.org/en-US/docs/Web/API/Element/innerHTML#Security_considerations
            // That's why we can't use just 'innerHTML'. See https://stackoverflow.com/a/47614491/2804294
            let setInnerHTML = function(element, htmlContent) {
                element.innerHTML = htmlContent;
                Array.from(element.querySelectorAll('script')).forEach(oldScript => {
                    const newScript = document.createElement('script');
                    Array.from(oldScript.attributes)
                        .forEach(attr => newScript.setAttribute(attr.name, attr.value));
                    newScript.appendChild(document.createTextNode(oldScript.innerHTML));
                    oldScript.parentNode.replaceChild(newScript, oldScript);
                });
            };

            document.querySelector('.action-filters-button').addEventListener('click', function(event) {
                let filterButton = event.currentTarget;
                let filterModal = document.querySelector(filterButton.dataset.modal);
                let filterModalBody = filterModal.querySelector('.modal-body');

                \$(filterModal).modal({ backdrop: true, keyboard: true });
                filterModalBody.innerHTML = '<div class=\"fa-3x px-3 py-3 text-muted text-center\"><i class=\"fas fa-circle-notch fa-spin\"></i></div>';

                \$.get(filterButton.getAttribute('href'), function (response) {
                    setInnerHTML(filterModalBody, response);
                });

                event.preventDefault();
                event.stopPropagation();
            });
            ";
        }
        // line 293
        echo "

            ";
        // line 295
        if (($context["has_batch_actions"] ?? null)) {
            // line 296
            echo "            const titleContent = \$('.content-header-title > .title').html();
            \$(document).on('click', '.deselect-batch-button', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox-all').prop('checked', false).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox-all', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox').prop('checked', \$(this).prop('checked')).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox', function () {
                const \$content = \$(this).closest('.content');
                let \$input = \$content.find(':hidden#batch_form_ids');
                let ids = \$input.val() ? \$input.val().split(',') : [];
                const id = \$(this).val();

                if (\$(this).prop('checked')) {
                    if (-1 === ids.indexOf(id)) {
                        ids.push(id);
                    }
                } else {
                    ids = ids.filter(function(value) { return value !== id });
                    \$content.find(':checkbox.form-batch-checkbox-all').prop('checked', false);
                }

                if (0 === ids.length) {
                    \$content.find('.global-actions').show();
                    \$content.find('.batch-actions').hide();
                    \$content.find('table').removeClass('table-batch');
                } else {
                    \$content.find('.batch-actions').show();
                    \$content.find('.global-actions').hide();
                    \$content.find('table').addClass('table-batch');
                }

                \$input.val(ids.join(','));
                \$content.find('.content-header-title > .title').html(0 === ids.length ? titleContent : '');
            });

            \$('button[name=\"batch_form[name]\"].ask-confirm-batch-button').on('click', function (event) {
                event.preventDefault();
                event.stopPropagation();
                let \$button = \$(this);

                \$('#modal-batch-action').modal({ backdrop : true, keyboard : true })
                    .off('click', '#modal-batch-action-button')
                    .on('click', '#modal-batch-action-button', function () {
                        \$button.unbind('click');
                        \$button.trigger('click');
                    });
            });
            ";
        }
        // line 345
        echo "        });
    </script>

    ";
        // line 348
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 348), "get", [0 => "query"], "method", false, false, false, 348))) {
            // line 349
            echo "        <script type=\"text/javascript\">
            const search_query = \"";
            // line 350
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, true, false, 350), "query", [], "any", true, true, false, 350)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, true, false, 350), "query", [], "any", false, false, false, 350), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody td:not(.actions)').highlight(\$.merge([search_query], search_query.split(' ')));
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  858 => 350,  855 => 349,  853 => 348,  848 => 345,  797 => 296,  795 => 295,  791 => 293,  759 => 263,  757 => 262,  718 => 225,  712 => 223,  710 => 222,  704 => 220,  700 => 219,  693 => 215,  689 => 214,  682 => 208,  678 => 207,  673 => 180,  668 => 177,  659 => 175,  655 => 174,  647 => 168,  644 => 167,  635 => 165,  630 => 164,  628 => 163,  625 => 162,  621 => 161,  617 => 200,  610 => 196,  606 => 195,  603 => 194,  601 => 193,  598 => 192,  588 => 188,  584 => 186,  571 => 185,  566 => 182,  564 => 161,  561 => 160,  552 => 157,  541 => 156,  537 => 155,  534 => 154,  528 => 152,  526 => 151,  521 => 150,  518 => 149,  515 => 148,  512 => 147,  493 => 146,  489 => 145,  481 => 138,  473 => 137,  470 => 136,  463 => 134,  457 => 132,  449 => 129,  444 => 128,  442 => 127,  432 => 126,  429 => 125,  426 => 124,  423 => 123,  420 => 122,  415 => 121,  412 => 120,  410 => 119,  407 => 118,  403 => 116,  401 => 115,  398 => 114,  394 => 113,  390 => 104,  386 => 102,  378 => 98,  376 => 97,  373 => 96,  366 => 95,  360 => 94,  357 => 93,  354 => 92,  351 => 91,  347 => 90,  341 => 80,  333 => 76,  331 => 75,  324 => 73,  319 => 70,  308 => 68,  303 => 67,  300 => 64,  297 => 61,  295 => 60,  291 => 59,  287 => 86,  282 => 83,  280 => 59,  276 => 57,  273 => 56,  269 => 55,  265 => 214,  261 => 212,  257 => 210,  255 => 207,  252 => 206,  250 => 205,  244 => 201,  242 => 145,  237 => 142,  235 => 113,  230 => 111,  226 => 110,  222 => 108,  217 => 105,  215 => 90,  210 => 87,  208 => 55,  204 => 53,  202 => 52,  199 => 51,  196 => 50,  193 => 49,  190 => 48,  187 => 47,  184 => 46,  181 => 45,  178 => 44,  176 => 43,  172 => 42,  166 => 37,  163 => 36,  154 => 34,  149 => 33,  145 => 32,  140 => 39,  138 => 32,  131 => 29,  127 => 28,  123 => 25,  114 => 23,  109 => 22,  101 => 21,  97 => 20,  93 => 14,  90 => 5,  88 => 16,  86 => 15,  84 => 14,  80 => 13,  73 => 11,  66 => 10,  62 => 4,  60 => 8,  58 => 5,  51 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "/home/ngts/Kaay-Dekk-Immo/templates/bundles/EasyAdminBundle/crud/index.html.twig");
    }
}
