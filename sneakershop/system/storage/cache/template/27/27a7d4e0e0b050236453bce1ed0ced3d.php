<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* catalog/option_form.twig */
class __TwigTemplate_5bbe783bd87d862cbcd2d7273da6d6ef extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield ($context["header"] ?? null);
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-option\" data-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["cancel"] ?? null);
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_cancel"] ?? null);
        yield "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            yield "        <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        yield "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        yield ($context["text_form"] ?? null);
        yield "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-option\" class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 28
        yield ($context["text_option"] ?? null);
        yield "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\">";
        // line 30
        yield ($context["entry_name"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\"> ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 32
            yield "                <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 32);
            yield "/";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 32);
            yield ".png\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 32);
            yield "\" /></span>
                  <input type=\"text\" name=\"option_description[";
            // line 33
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 33);
            yield "][name]\" value=\"";
            yield (((($tmp = (($_v0 = ($context["option_description"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 33)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["option_description"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 33)] ?? null) : null), "name", [], "any", false, false, false, 33)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_name"] ?? null);
            yield "\" class=\"form-control\" />
                </div>
                ";
            // line 35
            if ((($tmp = (($_v2 = ($context["error_name"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 35)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 36
                yield "                <div class=\"text-danger\">";
                yield (($_v3 = ($context["error_name"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 36)] ?? null) : null);
                yield "</div>
                ";
            }
            // line 38
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "</div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-type\">";
        // line 41
        yield ($context["entry_type"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <select name=\"type\" id=\"input-type\" class=\"form-control\">
                  <optgroup label=\"";
        // line 44
        yield ($context["text_choose"] ?? null);
        yield "\">
                ";
        // line 45
        if ((($context["type"] ?? null) == "select")) {
            // line 46
            yield "                  <option value=\"select\" selected=\"selected\">";
            yield ($context["text_select"] ?? null);
            yield "</option>
                ";
        } else {
            // line 48
            yield "                  <option value=\"select\">";
            yield ($context["text_select"] ?? null);
            yield "</option>
                ";
        }
        // line 50
        yield "                ";
        if ((($context["type"] ?? null) == "radio")) {
            // line 51
            yield "                  <option value=\"radio\" selected=\"selected\">";
            yield ($context["text_radio"] ?? null);
            yield "</option>
                ";
        } else {
            // line 53
            yield "                  <option value=\"radio\">";
            yield ($context["text_radio"] ?? null);
            yield "</option>
                ";
        }
        // line 55
        yield "                ";
        if ((($context["type"] ?? null) == "checkbox")) {
            // line 56
            yield "                  <option value=\"checkbox\" selected=\"selected\">";
            yield ($context["text_checkbox"] ?? null);
            yield "</option>
                ";
        } else {
            // line 58
            yield "                  <option value=\"checkbox\">";
            yield ($context["text_checkbox"] ?? null);
            yield "</option>
                ";
        }
        // line 60
        yield "                </optgroup>
                  <optgroup label=\"";
        // line 61
        yield ($context["text_input"] ?? null);
        yield "\">
                ";
        // line 62
        if ((($context["type"] ?? null) == "text")) {
            // line 63
            yield "                  <option value=\"text\" selected=\"selected\">";
            yield ($context["text_text"] ?? null);
            yield "</option>
                ";
        } else {
            // line 65
            yield "                  <option value=\"text\">";
            yield ($context["text_text"] ?? null);
            yield "</option>
                ";
        }
        // line 67
        yield "                ";
        if ((($context["type"] ?? null) == "textarea")) {
            // line 68
            yield "                  <option value=\"textarea\" selected=\"selected\">";
            yield ($context["text_textarea"] ?? null);
            yield "</option>
                ";
        } else {
            // line 70
            yield "                  <option value=\"textarea\">";
            yield ($context["text_textarea"] ?? null);
            yield "</option>
                ";
        }
        // line 72
        yield "                </optgroup>
                  <optgroup label=\"";
        // line 73
        yield ($context["text_file"] ?? null);
        yield "\">
                ";
        // line 74
        if ((($context["type"] ?? null) == "file")) {
            // line 75
            yield "                  <option value=\"file\" selected=\"selected\">";
            yield ($context["text_file"] ?? null);
            yield "</option>
                ";
        } else {
            // line 77
            yield "                  <option value=\"file\">";
            yield ($context["text_file"] ?? null);
            yield "</option>
                ";
        }
        // line 79
        yield "                </optgroup>
                  <optgroup label=\"";
        // line 80
        yield ($context["text_date"] ?? null);
        yield "\">
                ";
        // line 81
        if ((($context["type"] ?? null) == "date")) {
            // line 82
            yield "                  <option value=\"date\" selected=\"selected\">";
            yield ($context["text_date"] ?? null);
            yield "</option>
                ";
        } else {
            // line 84
            yield "                  <option value=\"date\">";
            yield ($context["text_date"] ?? null);
            yield "</option>
                ";
        }
        // line 86
        yield "                ";
        if ((($context["type"] ?? null) == "time")) {
            // line 87
            yield "                  <option value=\"time\" selected=\"selected\">";
            yield ($context["text_time"] ?? null);
            yield "</option>
                ";
        } else {
            // line 89
            yield "                  <option value=\"time\">";
            yield ($context["text_time"] ?? null);
            yield "</option>
                ";
        }
        // line 91
        yield "                ";
        if ((($context["type"] ?? null) == "datetime")) {
            // line 92
            yield "                  <option value=\"datetime\" selected=\"selected\">";
            yield ($context["text_datetime"] ?? null);
            yield "</option>
                ";
        } else {
            // line 94
            yield "                  <option value=\"datetime\">";
            yield ($context["text_datetime"] ?? null);
            yield "</option>
                ";
        }
        // line 96
        yield "                </optgroup>
                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 101
        yield ($context["entry_sort_order"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"sort_order\" value=\"";
        // line 103
        yield ($context["sort_order"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_sort_order"] ?? null);
        yield "\" id=\"input-sort-order\" class=\"form-control\" />
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 108
        yield ($context["text_value"] ?? null);
        yield "</legend>
            <table id=\"option-value\" class=\"table table-striped table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left required\">";
        // line 112
        yield ($context["entry_option_value"] ?? null);
        yield "</td>
                  <td class=\"text-center\">";
        // line 113
        yield ($context["entry_image"] ?? null);
        yield "</td>
                  <td class=\"text-right\">";
        // line 114
        yield ($context["entry_sort_order"] ?? null);
        yield "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
              
              ";
        // line 120
        $context["option_value_row"] = 0;
        // line 121
        yield "              ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["option_values"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
            // line 122
            yield "              <tr id=\"option-value-row";
            yield ($context["option_value_row"] ?? null);
            yield "\">
                <td class=\"text-center\"><input type=\"hidden\" name=\"option_value[";
            // line 123
            yield ($context["option_value_row"] ?? null);
            yield "][option_value_id]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 123);
            yield "\" />
                  ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 125
                yield "                  <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 125);
                yield "/";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 125);
                yield ".png\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 125);
                yield "\" /></span>
                    <input type=\"text\" name=\"option_value[";
                // line 126
                yield ($context["option_value_row"] ?? null);
                yield "][option_value_description][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 126);
                yield "][name]\" value=\"";
                yield (((($tmp = (($_v4 = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "option_value_description", [], "any", false, false, false, 126)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 126)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v5 = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "option_value_description", [], "any", false, false, false, 126)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 126)] ?? null) : null), "name", [], "any", false, false, false, 126)) : (""));
                yield "\" placeholder=\"";
                yield ($context["entry_option_value"] ?? null);
                yield "\" class=\"form-control\" />
                  </div>
                  ";
                // line 128
                if ((($tmp = (($_v6 = (($_v7 = ($context["error_option_value"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[($context["option_value_row"] ?? null)] ?? null) : null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 128)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 129
                    yield "                  <div class=\"text-danger\">";
                    yield (($_v8 = (($_v9 = ($context["error_option_value"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[($context["option_value_row"] ?? null)] ?? null) : null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 129)] ?? null) : null);
                    yield "</div>
                  ";
                }
                // line 131
                yield "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "</td>
                <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 132
            yield ($context["option_value_row"] ?? null);
            yield "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "thumb", [], "any", false, false, false, 132);
            yield "\" alt=\"\" title=\"\" data-placeholder=\"";
            yield ($context["placeholder"] ?? null);
            yield "\" /></a>
                  <input type=\"hidden\" name=\"option_value[";
            // line 133
            yield ($context["option_value_row"] ?? null);
            yield "][image]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 133);
            yield "\" id=\"input-image";
            yield ($context["option_value_row"] ?? null);
            yield "\" /></td>
                <td class=\"text-right\"><input type=\"text\" name=\"option_value[";
            // line 134
            yield ($context["option_value_row"] ?? null);
            yield "][sort_order]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "sort_order", [], "any", false, false, false, 134);
            yield "\" class=\"form-control\" /></td>
                <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#option-value-row";
            // line 135
            yield ($context["option_value_row"] ?? null);
            yield "').remove();\" data-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
              </tr>
              ";
            // line 137
            $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
            // line 138
            yield "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        yield "                </tbody>
              
              <tfoot>
                <tr>
                  <td colspan=\"3\"></td>
                  <td class=\"text-right\"><button type=\"button\" onclick=\"addOptionValue();\" data-toggle=\"tooltip\" title=\"";
        // line 144
        yield ($context["button_option_value_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'type\\']').on('change', function() {
\tif (this.value == 'select' || this.value == 'radio' || this.value == 'checkbox' || this.value == 'image') {
\t\t\$('#option-value').parent().show();
\t} else {
\t\t\$('#option-value').parent().hide();
\t}
});

\$('select[name=\\'type\\']').trigger('change');

var option_value_row = ";
        // line 164
        yield ($context["option_value_row"] ?? null);
        yield ";

function addOptionValue() {
\thtml  = '<tr id=\"option-value-row' + option_value_row + '\">';
    html += '  <td class=\"text-left\"><input type=\"hidden\" name=\"option_value[' + option_value_row + '][option_value_id]\" value=\"\" />';
\t";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 170
            yield "\thtml += '    <div class=\"input-group\">';
\thtml += '      <span class=\"input-group-addon\"><img src=\"language/";
            // line 171
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 171);
            yield "/";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 171);
            yield ".png\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 171);
            yield "\" /></span><input type=\"text\" name=\"option_value[' + option_value_row + '][option_value_description][";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 171);
            yield "][name]\" value=\"\" placeholder=\"";
            yield ($context["entry_option_value"] ?? null);
            yield "\" class=\"form-control\" />';
    html += '    </div>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        yield "\thtml += '  </td>';
    html += '  <td class=\"text-center\"><a href=\"\" id=\"thumb-image' + option_value_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 175
        yield ($context["placeholder"] ?? null);
        yield "\" alt=\"\" title=\"\" data-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" /></a><input type=\"hidden\" name=\"option_value[' + option_value_row + '][image]\" value=\"\" id=\"input-image' + option_value_row + '\" /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"option_value[' + option_value_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 176
        yield ($context["entry_sort_order"] ?? null);
        yield "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 177
        yield ($context["button_remove"] ?? null);
        yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#option-value tbody').append(html);

\toption_value_row++;
}
//--></script></div>
";
        // line 185
        yield ($context["footer"] ?? null);
        yield " 
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/option_form.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  549 => 185,  538 => 177,  534 => 176,  528 => 175,  525 => 174,  508 => 171,  505 => 170,  501 => 169,  493 => 164,  470 => 144,  463 => 139,  457 => 138,  455 => 137,  448 => 135,  442 => 134,  434 => 133,  426 => 132,  418 => 131,  412 => 129,  410 => 128,  399 => 126,  390 => 125,  386 => 124,  380 => 123,  375 => 122,  370 => 121,  368 => 120,  359 => 114,  355 => 113,  351 => 112,  344 => 108,  334 => 103,  329 => 101,  322 => 96,  316 => 94,  310 => 92,  307 => 91,  301 => 89,  295 => 87,  292 => 86,  286 => 84,  280 => 82,  278 => 81,  274 => 80,  271 => 79,  265 => 77,  259 => 75,  257 => 74,  253 => 73,  250 => 72,  244 => 70,  238 => 68,  235 => 67,  229 => 65,  223 => 63,  221 => 62,  217 => 61,  214 => 60,  208 => 58,  202 => 56,  199 => 55,  193 => 53,  187 => 51,  184 => 50,  178 => 48,  172 => 46,  170 => 45,  166 => 44,  160 => 41,  150 => 38,  144 => 36,  142 => 35,  133 => 33,  124 => 32,  120 => 31,  116 => 30,  111 => 28,  106 => 26,  100 => 23,  96 => 21,  88 => 17,  86 => 16,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "catalog/option_form.twig", "");
    }
}
