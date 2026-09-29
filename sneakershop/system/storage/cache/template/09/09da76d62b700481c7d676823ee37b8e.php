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

/* default/template/account/affiliate.twig */
class __TwigTemplate_5bd06e5364abb22da4c7ac83ef1623c1 extends Template
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
        yield "
<div id=\"account-affiliate\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            yield "    <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "  </ul>
  ";
        // line 8
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "</div>
  ";
        }
        // line 11
        yield "  <div class=\"row\">";
        yield ($context["column_left"] ?? null);
        yield "
    ";
        // line 12
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 13
            yield "    ";
            $context["class"] = "col-sm-6";
            // line 14
            yield "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 15
            yield "    ";
            $context["class"] = "col-sm-9";
            // line 16
            yield "    ";
        } else {
            // line 17
            yield "    ";
            $context["class"] = "col-sm-12";
            // line 18
            yield "    ";
        }
        // line 19
        yield "    <div id=\"content\" class=\"";
        yield ($context["class"] ?? null);
        yield "\">";
        yield ($context["content_top"] ?? null);
        yield "
      <h1>";
        // line 20
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <form action=\"";
        // line 21
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 23
        yield ($context["text_my_affiliate"] ?? null);
        yield "</legend>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-company\">";
        // line 25
        yield ($context["entry_company"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"company\" value=\"";
        // line 27
        yield ($context["company"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_company"] ?? null);
        yield "\" id=\"input-company\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-website\">";
        // line 31
        yield ($context["entry_website"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"website\" value=\"";
        // line 33
        yield ($context["website"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_website"] ?? null);
        yield "\" id=\"input-website\" class=\"form-control\" />
            </div>
          </div>
       </fieldset>
       <fieldset>
          <legend>";
        // line 38
        yield ($context["text_payment"] ?? null);
        yield "</legend>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-tax\">";
        // line 40
        yield ($context["entry_tax"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"tax\" value=\"";
        // line 42
        yield ($context["tax"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_tax"] ?? null);
        yield "\" id=\"input-tax\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 46
        yield ($context["entry_payment"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"radio\">
                <label>";
        // line 49
        if ((($context["payment"] ?? null) == "cheque")) {
            // line 50
            yield "                  <input type=\"radio\" name=\"payment\" value=\"cheque\" checked=\"checked\" />
                  ";
        } else {
            // line 52
            yield "                  <input type=\"radio\" name=\"payment\" value=\"cheque\" />
                  ";
        }
        // line 54
        yield "                  ";
        yield ($context["text_cheque"] ?? null);
        yield "</label>
              </div>
              <div class=\"radio\">
                <label>";
        // line 57
        if ((($context["payment"] ?? null) == "paypal")) {
            // line 58
            yield "                  <input type=\"radio\" name=\"payment\" value=\"paypal\" checked=\"checked\" />
                  ";
        } else {
            // line 60
            yield "                  <input type=\"radio\" name=\"payment\" value=\"paypal\" />
                  ";
        }
        // line 62
        yield "                  ";
        yield ($context["text_paypal"] ?? null);
        yield "</label>
              </div>
              <div class=\"radio\">
                <label>";
        // line 65
        if ((($context["payment"] ?? null) == "bank")) {
            // line 66
            yield "                  <input type=\"radio\" name=\"payment\" value=\"bank\" checked=\"checked\" />
                  ";
        } else {
            // line 68
            yield "                  <input type=\"radio\" name=\"payment\" value=\"bank\" />
                  ";
        }
        // line 70
        yield "                  ";
        yield ($context["text_bank"] ?? null);
        yield "</label>
              </div>
            </div>
          </div>
          <div id=\"payment-cheque\" class=\"payment\">
           <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-cheque\">";
        // line 76
        yield ($context["entry_cheque"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"cheque\" value=\"";
        // line 78
        yield ($context["cheque"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_cheque"] ?? null);
        yield "\" id=\"input-cheque\" class=\"form-control\" />
              ";
        // line 79
        if ((($tmp = ($context["error_cheque"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 80
            yield "              <div class=\"text-danger\">";
            yield ($context["error_cheque"] ?? null);
            yield "</div>
              ";
        }
        // line 82
        yield "            </div>
           </div>
          </div>
          <div id=\"payment-paypal\" class=\"payment\">
           <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-paypal\">";
        // line 87
        yield ($context["entry_paypal"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"paypal\" value=\"";
        // line 89
        yield ($context["paypal"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_paypal"] ?? null);
        yield "\" id=\"input-paypal\" class=\"form-control\" />
              ";
        // line 90
        if ((($tmp = ($context["error_paypal"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 91
            yield "              <div class=\"text-danger\">";
            yield ($context["error_paypal"] ?? null);
            yield "</div>
              ";
        }
        // line 93
        yield "            </div>
           </div>
          </div>
          <div class=\"payment\" id=\"payment-bank\">
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-bank-name\">";
        // line 98
        yield ($context["entry_bank_name"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"bank_name\" value=\"";
        // line 100
        yield ($context["bank_name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_bank_name"] ?? null);
        yield "\" id=\"input-bank-name\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-bank-branch-number\">";
        // line 104
        yield ($context["entry_bank_branch_number"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"bank_branch_number\" value=\"";
        // line 106
        yield ($context["bank_branch_number"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_bank_branch_number"] ?? null);
        yield "\" id=\"input-bank-branch-number\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-bank-swift-code\">";
        // line 110
        yield ($context["entry_bank_swift_code"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"bank_swift_code\" value=\"";
        // line 112
        yield ($context["bank_swift_code"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_bank_swift_code"] ?? null);
        yield "\" id=\"input-bank-swift-code\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-bank-account-name\">";
        // line 116
        yield ($context["entry_bank_account_name"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"bank_account_name\" value=\"";
        // line 118
        yield ($context["bank_account_name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_bank_account_name"] ?? null);
        yield "\" id=\"input-bank-account-name\" class=\"form-control\" />
                ";
        // line 119
        if ((($tmp = ($context["error_bank_account_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 120
            yield "                <div class=\"text-danger\">";
            yield ($context["error_bank_account_name"] ?? null);
            yield "</div>
                ";
        }
        // line 122
        yield "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-bank-account-number\">";
        // line 125
        yield ($context["entry_bank_account_number"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"bank_account_number\" value=\"";
        // line 127
        yield ($context["bank_account_number"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_bank_account_number"] ?? null);
        yield "\" id=\"input-bank-account-number\" class=\"form-control\" />
                ";
        // line 128
        if ((($tmp = ($context["error_bank_account_number"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 129
            yield "                <div class=\"text-danger\">";
            yield ($context["error_bank_account_number"] ?? null);
            yield "</div>
                ";
        }
        // line 131
        yield "              </div>
            </div>
          </div>
          ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 135
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 135) == "affiliate")) {
                // line 136
                yield "          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 136) == "select")) {
                    // line 137
                    yield "          <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 137)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield " custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 137);
                    yield "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 138
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 138);
                    yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"custom_field[";
                    // line 140
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 140);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                    yield "]\" id=\"input-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                    yield "\" class=\"form-control\">
                <option value=\"\">";
                    // line 141
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                ";
                    // line 142
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 142));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 143
                        yield "                ";
                        if (((($_v0 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 143) == (($_v1 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143)] ?? null) : null)))) {
                            // line 144
                            yield "                <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 144);
                            yield "\" selected=\"selected\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 144);
                            yield "</option>
                ";
                        } else {
                            // line 146
                            yield "                <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 146);
                            yield "\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 146);
                            yield "</option>
                ";
                        }
                        // line 148
                        yield "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 149
                    yield "              </select>
              ";
                    // line 150
                    if ((($tmp = (($_v2 = ($context["error_custom_field"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 151
                        yield "              <div class=\"text-danger\">";
                        yield (($_v3 = ($context["error_custom_field"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151)] ?? null) : null);
                        yield "</div>
              ";
                    }
                    // line 153
                    yield "            </div>
          </div>
          ";
                }
                // line 156
                yield "          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 156) == "radio")) {
                    // line 157
                    yield "          <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield " custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 157);
                    yield "\">
            <label class=\"col-sm-2 control-label\">";
                    // line 158
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 158);
                    yield "</label>
            <div class=\"col-sm-10\">
              <div>
                ";
                    // line 161
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 161));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 162
                        yield "                <div class=\"radio\">
                  ";
                        // line 163
                        if (((($_v4 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 163) == (($_v5 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163)] ?? null) : null)))) {
                            // line 164
                            yield "                  <label>
                    <input type=\"radio\" name=\"custom_field[";
                            // line 165
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 165);
                            yield "][";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165);
                            yield "]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 165);
                            yield "\" checked=\"checked\" />
                    ";
                            // line 166
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 166);
                            yield "</label>
                  ";
                        } else {
                            // line 168
                            yield "                  <label>
                    <input type=\"radio\" name=\"custom_field[";
                            // line 169
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 169);
                            yield "][";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169);
                            yield "]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 169);
                            yield "\" />
                    ";
                            // line 170
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 170);
                            yield "</label>
                  ";
                        }
                        // line 172
                        yield "                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 174
                    yield "              </div>
              ";
                    // line 175
                    if ((($tmp = (($_v6 = ($context["error_custom_field"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 176
                        yield "              <div class=\"text-danger\">";
                        yield (($_v7 = ($context["error_custom_field"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176)] ?? null) : null);
                        yield "</div>
              ";
                    }
                    // line 178
                    yield "            </div>
          </div>
          ";
                }
                // line 181
                yield "          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 181) == "checkbox")) {
                    // line 182
                    yield "          <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 182)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield " custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 182);
                    yield "\">
            <label class=\"col-sm-2 control-label\">";
                    // line 183
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 183);
                    yield "</label>
            <div class=\"col-sm-10\">
              <div>
                ";
                    // line 186
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 186));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 187
                        yield "                <div class=\"checkbox\">
                  ";
                        // line 188
                        if (((($_v8 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 188), (($_v9 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188)] ?? null) : null)))) {
                            // line 189
                            yield "                  <label>
                    <input type=\"checkbox\" name=\"custom_field[";
                            // line 190
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 190);
                            yield "][";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 190);
                            yield "][]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 190);
                            yield "\" checked=\"checked\" />
                    ";
                            // line 191
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 191);
                            yield "</label>
                  ";
                        } else {
                            // line 193
                            yield "                  <label>
                    <input type=\"checkbox\" name=\"custom_field[";
                            // line 194
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 194);
                            yield "][";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 194);
                            yield "][]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 194);
                            yield "\" />
                    ";
                            // line 195
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 195);
                            yield "</label>
                  ";
                        }
                        // line 197
                        yield "                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 199
                    yield "              </div>
              ";
                    // line 200
                    if ((($tmp = (($_v10 = ($context["error_custom_field"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 201
                        yield "              <div class=\"text-danger\">";
                        yield (($_v11 = ($context["error_custom_field"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 201)] ?? null) : null);
                        yield "</div>
              ";
                    }
                    // line 203
                    yield "            </div>
          </div>
          ";
                }
                // line 206
                yield "          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 206) == "text")) {
                    // line 207
                    yield "          <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 207)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield " custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 207);
                    yield "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 208
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 208);
                    yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"custom_field[";
                    // line 210
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 210);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 210);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v12 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 210)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield (($_v13 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 210)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 210);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 210);
                    yield "\" id=\"input-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 210);
                    yield "\" class=\"form-control\" />
              ";
                    // line 211
                    if ((($tmp = (($_v14 = ($context["error_custom_field"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 211)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 212
                        yield "              <div class=\"text-danger\">";
                        yield (($_v15 = ($context["error_custom_field"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212)] ?? null) : null);
                        yield "</div>
              ";
                    }
                    // line 214
                    yield "            </div>
          </div>
          ";
                }
                // line 217
                yield "          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 217) == "textarea")) {
                    // line 218
                    yield "          <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 218)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield " custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 218);
                    yield "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 219
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 219);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 219);
                    yield "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"custom_field[";
                    // line 221
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 221);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 221);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 221);
                    yield "\" id=\"input-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 221);
                    yield "\" class=\"form-control\">";
                    if ((($tmp = (($_v16 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 221)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield (($_v17 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 221)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 221);
                    }
                    yield "</textarea>
              ";
                    // line 222
                    if ((($tmp = (($_v18 = ($context["error_custom_field"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 222)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 223
                        yield "              <div class=\"text-danger\">";
                        yield (($_v19 = ($context["error_custom_field"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 223)] ?? null) : null);
                        yield "</div>
              ";
                    }
                    // line 225
                    yield "            </div>
          </div>
          ";
                }
                // line 228
                yield "          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 228) == "file")) {
                    // line 229
                    yield "          <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 229)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield " custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 229);
                    yield "\">
            <label class=\"col-sm-2 control-label\">";
                    // line 230
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 230);
                    yield "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-custom-field";
                    // line 232
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 232);
                    yield "\" data-loading-text=\"";
                    yield ($context["text_loading"] ?? null);
                    yield "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
              <input type=\"hidden\" name=\"custom_field[";
                    // line 233
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 233);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 233);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v20 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 233)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield (($_v21 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 233)] ?? null) : null);
                        yield " ";
                    }
                    yield "\" />
              ";
                    // line 234
                    if ((($tmp = (($_v22 = ($context["error_custom_field"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 235
                        yield "              <div class=\"text-danger\">";
                        yield (($_v23 = ($context["error_custom_field"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 235)] ?? null) : null);
                        yield "</div>
              ";
                    }
                    // line 237
                    yield "            </div>
          </div>
          ";
                }
                // line 240
                yield "          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 240) == "date")) {
                    // line 241
                    yield "          <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 241)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield " custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 241);
                    yield "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 242
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 242);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 242);
                    yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group date\">
                <input type=\"text\" name=\"custom_field[";
                    // line 245
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 245);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 245);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v24 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 245)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield (($_v25 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 245)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 245);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 245);
                    yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 245);
                    yield "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                    // line 249
                    if ((($tmp = (($_v26 = ($context["error_custom_field"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 249)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 250
                        yield "              <div class=\"text-danger\">";
                        yield (($_v27 = ($context["error_custom_field"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 250)] ?? null) : null);
                        yield "</div>
              ";
                    }
                    // line 252
                    yield "            </div>
          </div>
          ";
                }
                // line 255
                yield "          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 255) == "time")) {
                    // line 256
                    yield "          <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 256)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield " custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 256);
                    yield "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 257
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 257);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 257);
                    yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group time\">
                <input type=\"text\" name=\"custom_field[";
                    // line 260
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 260);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 260);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v28 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 260)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield (($_v29 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 260)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 260);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 260);
                    yield "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 260);
                    yield "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                    // line 264
                    if ((($tmp = (($_v30 = ($context["error_custom_field"] ?? null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 264)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 265
                        yield "              <div class=\"text-danger\">";
                        yield (($_v31 = ($context["error_custom_field"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 265)] ?? null) : null);
                        yield "</div>
              ";
                    }
                    // line 267
                    yield "            </div>
          </div>
          ";
                }
                // line 270
                yield "          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 270) == "datetime")) {
                    // line 271
                    yield "          <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 271)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield " custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 271);
                    yield "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 272
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 272);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 272);
                    yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"custom_field[";
                    // line 275
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 275);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 275);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v32 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 275)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield (($_v33 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 275)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 275);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 275);
                    yield "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 275);
                    yield "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                    // line 279
                    if ((($tmp = (($_v34 = ($context["error_custom_field"] ?? null)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 279)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 280
                        yield "              <div class=\"text-danger\">";
                        yield (($_v35 = ($context["error_custom_field"] ?? null)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 280)] ?? null) : null);
                        yield "</div>
              ";
                    }
                    // line 282
                    yield "            </div>
          </div>
          ";
                }
                // line 285
                yield "          ";
            }
            // line 286
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "    
        </fieldset>
        ";
        // line 288
        if ((($tmp = ($context["text_agree"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 289
            yield "        <div class=\"buttons clearfix\">
          <div class=\"pull-right\">";
            // line 290
            yield ($context["text_agree"] ?? null);
            yield "
            ";
            // line 291
            if ((($tmp = ($context["agree"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 292
                yield "            <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
            ";
            } else {
                // line 294
                yield "            <input type=\"checkbox\" name=\"agree\" value=\"1\" />
            ";
            }
            // line 296
            yield "            &nbsp;
            <input type=\"submit\" value=\"";
            // line 297
            yield ($context["button_continue"] ?? null);
            yield "\" class=\"btn btn-primary\" />
          </div>
        </div>
        ";
        } else {
            // line 301
            yield "        <div class=\"buttons clearfix\">
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
            // line 303
            yield ($context["button_continue"] ?? null);
            yield "\" class=\"btn btn-primary\" />
          </div>
        </div>
        ";
        }
        // line 307
        yield "      </form>
      ";
        // line 308
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 309
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
<script type=\"text/javascript\"><!--
\$('input[name=\\'payment\\']').on('change', function() {
    \$('.payment').hide();

    \$('#payment-' + this.value).show();
});

\$('input[name=\\'payment\\']:checked').trigger('change');
//--></script>
<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('.form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('.form-group').length) {
\t\t\$('.form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('.form-group').length) {
\t\t\$('.form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('.form-group').length) {
\t\t\$('.form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('.form-group').length) {
\t\t\$('.form-group:first').before(this);
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
\$('button[id^=\\'button-custom-field\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(node).parent().find('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 395
        yield ($context["datepicker"] ?? null);
        yield "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 400
        yield ($context["datepicker"] ?? null);
        yield "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 406
        yield ($context["datepicker"] ?? null);
        yield "',
\tpickDate: false
});
//--></script>
";
        // line 410
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
        return "default/template/account/affiliate.twig";
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
        return array (  1090 => 410,  1083 => 406,  1074 => 400,  1066 => 395,  977 => 309,  973 => 308,  970 => 307,  963 => 303,  959 => 301,  952 => 297,  949 => 296,  945 => 294,  941 => 292,  939 => 291,  935 => 290,  932 => 289,  930 => 288,  921 => 286,  918 => 285,  913 => 282,  907 => 280,  905 => 279,  886 => 275,  878 => 272,  869 => 271,  866 => 270,  861 => 267,  855 => 265,  853 => 264,  834 => 260,  826 => 257,  817 => 256,  814 => 255,  809 => 252,  803 => 250,  801 => 249,  782 => 245,  774 => 242,  765 => 241,  762 => 240,  757 => 237,  751 => 235,  749 => 234,  738 => 233,  730 => 232,  725 => 230,  716 => 229,  713 => 228,  708 => 225,  702 => 223,  700 => 222,  684 => 221,  677 => 219,  668 => 218,  665 => 217,  660 => 214,  654 => 212,  652 => 211,  636 => 210,  629 => 208,  620 => 207,  617 => 206,  612 => 203,  606 => 201,  604 => 200,  601 => 199,  594 => 197,  589 => 195,  581 => 194,  578 => 193,  573 => 191,  565 => 190,  562 => 189,  560 => 188,  557 => 187,  553 => 186,  547 => 183,  538 => 182,  535 => 181,  530 => 178,  524 => 176,  522 => 175,  519 => 174,  512 => 172,  507 => 170,  499 => 169,  496 => 168,  491 => 166,  483 => 165,  480 => 164,  478 => 163,  475 => 162,  471 => 161,  465 => 158,  456 => 157,  453 => 156,  448 => 153,  442 => 151,  440 => 150,  437 => 149,  431 => 148,  423 => 146,  415 => 144,  412 => 143,  408 => 142,  404 => 141,  396 => 140,  389 => 138,  380 => 137,  377 => 136,  374 => 135,  370 => 134,  365 => 131,  359 => 129,  357 => 128,  351 => 127,  346 => 125,  341 => 122,  335 => 120,  333 => 119,  327 => 118,  322 => 116,  313 => 112,  308 => 110,  299 => 106,  294 => 104,  285 => 100,  280 => 98,  273 => 93,  267 => 91,  265 => 90,  259 => 89,  254 => 87,  247 => 82,  241 => 80,  239 => 79,  233 => 78,  228 => 76,  218 => 70,  214 => 68,  210 => 66,  208 => 65,  201 => 62,  197 => 60,  193 => 58,  191 => 57,  184 => 54,  180 => 52,  176 => 50,  174 => 49,  168 => 46,  159 => 42,  154 => 40,  149 => 38,  139 => 33,  134 => 31,  125 => 27,  120 => 25,  115 => 23,  110 => 21,  106 => 20,  99 => 19,  96 => 18,  93 => 17,  90 => 16,  87 => 15,  84 => 14,  81 => 13,  79 => 12,  74 => 11,  68 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/account/affiliate.twig", "");
    }
}
