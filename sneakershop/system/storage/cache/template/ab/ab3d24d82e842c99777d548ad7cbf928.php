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

/* default/template/product/product.twig */
class __TwigTemplate_fb98bc45df1ad54257369c5a505a64aa extends Template
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
<div id=\"product-product\" class=\"container\">
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
  <div class=\"row\">";
        // line 8
        yield ($context["column_left"] ?? null);
        yield "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            yield "    ";
            $context["class"] = "col-sm-6";
            // line 11
            yield "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            yield "    ";
            $context["class"] = "col-sm-9";
            // line 13
            yield "    ";
        } else {
            // line 14
            yield "    ";
            $context["class"] = "col-sm-12";
            // line 15
            yield "    ";
        }
        // line 16
        yield "    <div id=\"content\" class=\"";
        yield ($context["class"] ?? null);
        yield "\">";
        yield ($context["content_top"] ?? null);
        yield "
      <div class=\"row\"> ";
        // line 17
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            yield "        ";
            $context["class"] = "col-sm-6";
            // line 19
            yield "        ";
        } else {
            // line 20
            yield "        ";
            $context["class"] = "col-sm-8";
            // line 21
            yield "        ";
        }
        // line 22
        yield "        <div class=\"";
        yield ($context["class"] ?? null);
        yield "\"> ";
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 23
            yield "          <ul class=\"thumbnails\">
            ";
            // line 24
            if ((($tmp = ($context["thumb"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 25
                yield "            <li><a class=\"thumbnail\" href=\"";
                yield ($context["popup"] ?? null);
                yield "\" title=\"";
                yield ($context["heading_title"] ?? null);
                yield "\"><img src=\"";
                yield ($context["thumb"] ?? null);
                yield "\" title=\"";
                yield ($context["heading_title"] ?? null);
                yield "\" alt=\"";
                yield ($context["heading_title"] ?? null);
                yield "\" /></a></li>
            ";
            }
            // line 27
            yield "            ";
            if ((($tmp = ($context["images"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 28
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 29
                    yield "            <li class=\"image-additional\"><a class=\"thumbnail\" href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 29);
                    yield "\" title=\"";
                    yield ($context["heading_title"] ?? null);
                    yield "\"> <img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 29);
                    yield "\" title=\"";
                    yield ($context["heading_title"] ?? null);
                    yield "\" alt=\"";
                    yield ($context["heading_title"] ?? null);
                    yield "\" /></a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                yield "            ";
            }
            // line 32
            yield "          </ul>
          ";
        }
        // line 34
        yield "          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 35
        yield ($context["tab_description"] ?? null);
        yield "</a></li>
            ";
        // line 36
        if ((($tmp = ($context["attribute_groups"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            yield ($context["tab_attribute"] ?? null);
            yield "</a></li>
            ";
        }
        // line 39
        yield "            ";
        if ((($tmp = ($context["review_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            yield ($context["tab_review"] ?? null);
            yield "</a></li>
            ";
        }
        // line 42
        yield "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 44
        yield ($context["description"] ?? null);
        yield "</div>
            ";
        // line 45
        if ((($tmp = ($context["attribute_groups"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 49
                yield "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 51
                yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 51);
                yield "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 55));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 56
                    yield "                <tr>
                  <td>";
                    // line 57
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 57);
                    yield "</td>
                  <td>";
                    // line 58
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 58);
                    yield "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['attribute'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                yield "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['attribute_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            yield "              </table>
            </div>
            ";
        }
        // line 66
        yield "            ";
        if ((($tmp = ($context["review_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h2>";
            // line 70
            yield ($context["text_write"] ?? null);
            yield "</h2>
                ";
            // line 71
            if ((($tmp = ($context["review_guest"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 72
                yield "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 74
                yield ($context["entry_name"] ?? null);
                yield "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 75
                yield ($context["customer_name"] ?? null);
                yield "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 80
                yield ($context["entry_review"] ?? null);
                yield "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 82
                yield ($context["text_note"] ?? null);
                yield "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                // line 87
                yield ($context["entry_rating"] ?? null);
                yield "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 88
                yield ($context["entry_bad"] ?? null);
                yield "&nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"1\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"2\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"3\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"4\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"5\" />
                    &nbsp;";
                // line 98
                yield ($context["entry_good"] ?? null);
                yield "</div>
                </div>
                ";
                // line 100
                yield ($context["captcha"] ?? null);
                yield "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 103
                yield ($context["text_loading"] ?? null);
                yield "\" class=\"btn btn-primary\">";
                yield ($context["button_continue"] ?? null);
                yield "</button>
                  </div>
                </div>
                ";
            } else {
                // line 107
                yield "                ";
                yield ($context["text_login"] ?? null);
                yield "
                ";
            }
            // line 109
            yield "              </form>
            </div>
            ";
        }
        // line 111
        yield "</div>
        </div>
        ";
        // line 113
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 114
            yield "        ";
            $context["class"] = "col-sm-6";
            // line 115
            yield "        ";
        } else {
            // line 116
            yield "        ";
            $context["class"] = "col-sm-4";
            // line 117
            yield "        ";
        }
        // line 118
        yield "        <div class=\"";
        yield ($context["class"] ?? null);
        yield "\">
          <div class=\"btn-group\">
            <button type=\"button\" id=\"button-wishlist\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
        // line 120
        yield ($context["button_wishlist"] ?? null);
        yield "\" onclick=\"wishlist.add('";
        yield ($context["product_id"] ?? null);
        yield "');\"><i class=\"fa fa-heart\"></i></button>
            <button type=\"button\" id=\"button-compare\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
        // line 121
        yield ($context["button_compare"] ?? null);
        yield "\" onclick=\"compare.add('";
        yield ($context["product_id"] ?? null);
        yield "');\"><i class=\"fa fa-exchange\"></i></button>
          </div>
          <h1>";
        // line 123
        yield ($context["heading_title"] ?? null);
        yield "</h1>
          <ul class=\"list-unstyled\">
            ";
        // line 125
        if ((($tmp = ($context["manufacturer"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 126
            yield "            <li>";
            yield ($context["text_manufacturer"] ?? null);
            yield " <a href=\"";
            yield ($context["manufacturers"] ?? null);
            yield "\">";
            yield ($context["manufacturer"] ?? null);
            yield "</a></li>
            ";
        }
        // line 128
        yield "            <li>";
        yield ($context["text_model"] ?? null);
        yield " ";
        yield ($context["model"] ?? null);
        yield "</li>
            ";
        // line 129
        if ((($tmp = ($context["reward"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 130
            yield "            <li>";
            yield ($context["text_reward"] ?? null);
            yield " ";
            yield ($context["reward"] ?? null);
            yield "</li>
            ";
        }
        // line 132
        yield "            <li>";
        yield ($context["text_stock"] ?? null);
        yield " ";
        yield ($context["stock"] ?? null);
        yield "</li>
          </ul>
          ";
        // line 134
        if ((($tmp = ($context["price"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 135
            yield "          <ul class=\"list-unstyled\">
            ";
            // line 136
            if ((($tmp =  !($context["special"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 137
                yield "            <li>
              <h2>";
                // line 138
                yield ($context["price"] ?? null);
                yield "</h2>
            </li>
            ";
            } else {
                // line 141
                yield "            <li><span style=\"text-decoration: line-through;\">";
                yield ($context["price"] ?? null);
                yield "</span></li>
            <li>
              <h2>";
                // line 143
                yield ($context["special"] ?? null);
                yield "</h2>
            </li>
            ";
            }
            // line 146
            yield "            ";
            if ((($tmp = ($context["tax"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 147
                yield "            <li>";
                yield ($context["text_tax"] ?? null);
                yield " ";
                yield ($context["tax"] ?? null);
                yield "</li>
            ";
            }
            // line 149
            yield "            ";
            if ((($tmp = ($context["points"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 150
                yield "            <li>";
                yield ($context["text_points"] ?? null);
                yield " ";
                yield ($context["points"] ?? null);
                yield "</li>
            ";
            }
            // line 152
            yield "            ";
            if ((($tmp = ($context["discounts"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 153
                yield "            <li>
              <hr>
            </li>
            ";
                // line 156
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 157
                    yield "            <li>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 157);
                    yield ($context["text_discount"] ?? null);
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 157);
                    yield "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['discount'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                yield "            ";
            }
            // line 160
            yield "          </ul>
          ";
        }
        // line 162
        yield "          <div id=\"product\"> ";
        if ((($tmp = ($context["options"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 163
            yield "            <hr>
            <h3>";
            // line 164
            yield ($context["text_option"] ?? null);
            yield "</h3>
            ";
            // line 165
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 166
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 166) == "select")) {
                    // line 167
                    yield "            <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 167)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 168
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 168);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 168);
                    yield "</label>
              <select name=\"option[";
                    // line 169
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 169);
                    yield "]\" id=\"input-option";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 169);
                    yield "\" class=\"form-control\">
                <option value=\"\">";
                    // line 170
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                ";
                    // line 171
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 171));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 172
                        yield "                <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 172);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 172);
                        yield "
                ";
                        // line 173
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 173)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 174
                            yield "                (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 174);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 174);
                            yield ")
                ";
                        }
                        // line 175
                        yield " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 177
                    yield "              </select>
            </div>
            ";
                }
                // line 180
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 180) == "radio")) {
                    // line 181
                    yield "            <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 181)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield "\">
              <label class=\"control-label\">";
                    // line 182
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 182);
                    yield "</label>
              <div id=\"input-option";
                    // line 183
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 183);
                    yield "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 183));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 184
                        yield "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 186
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 186);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 186);
                        yield "\" />
                    ";
                        // line 187
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 187)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield " <img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 187);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 187);
                            yield " ";
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 187)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 187);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 187);
                                yield " ";
                            }
                            yield "\" class=\"img-thumbnail\" /> ";
                        }
                        yield "                  
                    ";
                        // line 188
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 188);
                        yield "
                    ";
                        // line 189
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 189)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 190
                            yield "                    (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 190);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 190);
                            yield ")
                    ";
                        }
                        // line 191
                        yield " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 193
                    yield " </div>
            </div>
            ";
                }
                // line 196
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 196) == "checkbox")) {
                    // line 197
                    yield "            <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 197)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield "\">
              <label class=\"control-label\">";
                    // line 198
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 198);
                    yield "</label>
              <div id=\"input-option";
                    // line 199
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 199);
                    yield "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 199));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 200
                        yield "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 202
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 202);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 202);
                        yield "\" />
                    ";
                        // line 203
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 203)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield " <img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 203);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 203);
                            yield " ";
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 203)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 203);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 203);
                                yield " ";
                            }
                            yield "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 204
                        yield "                    ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 204);
                        yield "
                    ";
                        // line 205
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 205)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 206
                            yield "                    (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 206);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 206);
                            yield ")
                    ";
                        }
                        // line 207
                        yield " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 209
                    yield " </div>
            </div>
            ";
                }
                // line 212
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 212) == "text")) {
                    // line 213
                    yield "            <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 213)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 214
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 214);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 214);
                    yield "</label>
              <input type=\"text\" name=\"option[";
                    // line 215
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 215);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 215);
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 215);
                    yield "\" id=\"input-option";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 215);
                    yield "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 218
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 218) == "textarea")) {
                    // line 219
                    yield "            <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 219)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 220
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 220);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 220);
                    yield "</label>
              <textarea name=\"option[";
                    // line 221
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 221);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 221);
                    yield "\" id=\"input-option";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 221);
                    yield "\" class=\"form-control\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 221);
                    yield "</textarea>
            </div>
            ";
                }
                // line 224
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 224) == "file")) {
                    // line 225
                    yield "            <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 225)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield "\">
              <label class=\"control-label\">";
                    // line 226
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 226);
                    yield "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 227
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 227);
                    yield "\" data-loading-text=\"";
                    yield ($context["text_loading"] ?? null);
                    yield "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 228
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 228);
                    yield "]\" value=\"\" id=\"input-option";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 228);
                    yield "\" />
            </div>
            ";
                }
                // line 231
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 231) == "date")) {
                    // line 232
                    yield "            <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 232)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 233
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 233);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 233);
                    yield "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 235
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 235);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 235);
                    yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 235);
                    yield "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 241
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 241) == "datetime")) {
                    // line 242
                    yield "            <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 242)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 243
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 243);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 243);
                    yield "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 245
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 245);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 245);
                    yield "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 245);
                    yield "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 251
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 251) == "time")) {
                    // line 252
                    yield "            <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 252)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 253
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 253);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 253);
                    yield "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 255
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 255);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 255);
                    yield "\" data-date-format=\"HH:mm\" id=\"input-option";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 255);
                    yield "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 261
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 262
            yield "            ";
        }
        // line 263
        yield "            ";
        if ((($tmp = ($context["recurrings"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 264
            yield "            <hr>
            <h3>";
            // line 265
            yield ($context["text_payment_recurring"] ?? null);
            yield "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 268
            yield ($context["text_select"] ?? null);
            yield "</option>
                ";
            // line 269
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 270
                yield "                <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 270);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 270);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['recurring'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 272
            yield "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 276
        yield "            <div class=\"form-group\">
              <div class=\"qty-stepper\">
                <button type=\"button\" class=\"qty-btn qty-minus\" aria-label=\"Decrease quantity\">−</button>
                <input type=\"text\" name=\"quantity\" value=\"1\" id=\"input-quantity\" class=\"qty-input\" inputmode=\"numeric\" />
                <button type=\"button\" class=\"qty-btn qty-plus\" aria-label=\"Increase quantity\">+</button>
              </div>
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 282
        yield ($context["product_id"] ?? null);
        yield "\" />  
              <br><br>
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 284
        yield ($context["text_loading"] ?? null);
        yield "\" class=\"btn btn-primary btn-lg btn-block\">";
        yield ($context["button_cart"] ?? null);
        yield "</button>
            </div>
            ";
        // line 286
        if ((($context["minimum"] ?? null) > 1)) {
            // line 287
            yield "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            yield ($context["text_minimum"] ?? null);
            yield "</div>
            ";
        }
        // line 288
        yield "</div>
          ";
        // line 289
        if ((($tmp = ($context["review_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 290
            yield "          <div class=\"rating\">
            <p>";
            // line 291
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 292
                yield "              ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    yield "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    yield "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 293
                yield "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield " <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            yield ($context["reviews"] ?? null);
            yield "</a> / <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            yield ($context["text_write"] ?? null);
            yield "</a></p>
          </div>
          ";
        }
        // line 295
        yield " </div>
      </div>
      ";
        // line 297
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 298
            yield "      <h3>";
            yield ($context["text_related"] ?? null);
            yield "</h3>
      <div class=\"row\"> ";
            // line 299
            $context["i"] = 0;
            // line 300
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 301
                yield "        ";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 302
                    yield "        ";
                    $context["class"] = "col-xs-8 col-sm-6";
                    // line 303
                    yield "        ";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 304
                    yield "        ";
                    $context["class"] = "col-xs-6 col-md-4";
                    // line 305
                    yield "        ";
                } else {
                    // line 306
                    yield "        ";
                    $context["class"] = "col-xs-6 col-sm-3";
                    // line 307
                    yield "        ";
                }
                // line 308
                yield "        <div class=\"";
                yield ($context["class"] ?? null);
                yield "\">
          <div class=\"product-thumb transition\">
            <div class=\"image\"><a href=\"";
                // line 310
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 310);
                yield "\"><img src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 310);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 310);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 310);
                yield "\" class=\"img-responsive\" /></a></div>
            <div class=\"caption\">
              <h4><a href=\"";
                // line 312
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 312);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 312);
                yield "</a></h4>
              <p>";
                // line 313
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 313);
                yield "</p>
              ";
                // line 314
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 314)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 315
                    yield "              <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 316
                        yield "                ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 316) < $context["j"])) {
                            yield " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        } else {
                            yield " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        }
                        // line 317
                        yield "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['j'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    yield " </div>
              ";
                }
                // line 319
                yield "              ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 319)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 320
                    yield "              <p class=\"price\"> ";
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 320)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 321
                        yield "                ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 321);
                        yield "
                ";
                    } else {
                        // line 322
                        yield " <span class=\"price-new\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 322);
                        yield "</span> <span class=\"price-old\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 322);
                        yield "</span> ";
                    }
                    // line 323
                    yield "                ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 323)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " <span class=\"price-tax\">";
                        yield ($context["text_tax"] ?? null);
                        yield " ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 323);
                        yield "</span> ";
                    }
                    yield " </p>
              ";
                }
                // line 324
                yield " </div>
            <div class=\"button-group\">
              <button type=\"button\" onclick=\"cart.add('";
                // line 326
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 326);
                yield "', '";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 326);
                yield "');\"><span class=\"hidden-xs hidden-sm hidden-md\">";
                yield ($context["button_cart"] ?? null);
                yield "</span> <i class=\"fa fa-shopping-cart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 327
                yield ($context["button_wishlist"] ?? null);
                yield "\" onclick=\"wishlist.add('";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 327);
                yield "');\"><i class=\"fa fa-heart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 328
                yield ($context["button_compare"] ?? null);
                yield "\" onclick=\"compare.add('";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 328);
                yield "');\"><i class=\"fa fa-exchange\"></i></button>
            </div>
          </div>
        </div>
        ";
                // line 332
                if (((($context["column_left"] ?? null) && ($context["column_right"] ?? null)) && (((($context["i"] ?? null) + 1) % 2) == 0))) {
                    // line 333
                    yield "        <div class=\"clearfix visible-md visible-sm\"></div>
        ";
                } elseif ((                // line 334
($context["column_left"] ?? null) || (($context["column_right"] ?? null) && (((($context["i"] ?? null) + 1) % 3) == 0)))) {
                    // line 335
                    yield "        <div class=\"clearfix visible-md\"></div>
        ";
                } elseif ((((                // line 336
($context["i"] ?? null) + 1) % 4) == 0)) {
                    // line 337
                    yield "        <div class=\"clearfix visible-md\"></div>
        ";
                }
                // line 339
                yield "        ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 340
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield " </div>
        ";
        }
        // line 342
        yield "        ";
        if ((($tmp = ($context["tags"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 343
            yield "        <p>";
            yield ($context["text_tags"] ?? null);
            yield "
        ";
            // line 344
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 345
                yield "        ";
                if (($context["i"] < (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["tags"] ?? null)) - 1))) {
                    yield " <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, (($_v0 = ($context["tags"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 345);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["tags"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 345);
                    yield "</a>,
        ";
                } else {
                    // line 346
                    yield " <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, (($_v2 = ($context["tags"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 346);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["tags"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 346);
                    yield "</a> ";
                }
                // line 347
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield " </p>
        ";
        }
        // line 349
        yield "      ";
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 350
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');

\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 428
        yield ($context["datepicker"] ?? null);
        yield "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 433
        yield ($context["datepicker"] ?? null);
        yield "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 439
        yield ($context["datepicker"] ?? null);
        yield "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
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
\t\t\t\t\t\$('.text-danger').remove();

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
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 506
        yield ($context["product_id"] ?? null);
        yield "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 510
        yield ($context["product_id"] ?? null);
        yield "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});

\$(document).on('click', '.qty-minus', function() {
\tvar qtyInput = \$('#input-quantity');
\tvar current = parseInt(qtyInput.val(), 10) || ";
        // line 550
        yield ($context["minimum"] ?? null);
        yield ";
\tif (current > ";
        // line 551
        yield ($context["minimum"] ?? null);
        yield ") {
\t\tqtyInput.val(current - 1);
\t}
});

\$(document).on('click', '.qty-plus', function() {
\tvar qtyInput = \$('#input-quantity');
\tvar current = parseInt(qtyInput.val(), 10) || ";
        // line 558
        yield ($context["minimum"] ?? null);
        yield ";
\tqtyInput.val(current + 1);
});
//--></script> 
";
        // line 562
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
        return "default/template/product/product.twig";
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
        return array (  1461 => 562,  1454 => 558,  1444 => 551,  1440 => 550,  1397 => 510,  1390 => 506,  1320 => 439,  1311 => 433,  1303 => 428,  1222 => 350,  1217 => 349,  1208 => 347,  1201 => 346,  1191 => 345,  1187 => 344,  1182 => 343,  1179 => 342,  1170 => 340,  1167 => 339,  1163 => 337,  1161 => 336,  1158 => 335,  1156 => 334,  1153 => 333,  1151 => 332,  1142 => 328,  1136 => 327,  1128 => 326,  1124 => 324,  1112 => 323,  1105 => 322,  1099 => 321,  1096 => 320,  1093 => 319,  1084 => 317,  1077 => 316,  1072 => 315,  1070 => 314,  1066 => 313,  1060 => 312,  1049 => 310,  1043 => 308,  1040 => 307,  1037 => 306,  1034 => 305,  1031 => 304,  1028 => 303,  1025 => 302,  1022 => 301,  1017 => 300,  1015 => 299,  1010 => 298,  1008 => 297,  1004 => 295,  990 => 293,  983 => 292,  979 => 291,  976 => 290,  974 => 289,  971 => 288,  965 => 287,  963 => 286,  956 => 284,  951 => 282,  943 => 276,  937 => 272,  926 => 270,  922 => 269,  918 => 268,  912 => 265,  909 => 264,  906 => 263,  903 => 262,  897 => 261,  884 => 255,  877 => 253,  870 => 252,  867 => 251,  854 => 245,  847 => 243,  840 => 242,  837 => 241,  824 => 235,  817 => 233,  810 => 232,  807 => 231,  799 => 228,  791 => 227,  787 => 226,  780 => 225,  777 => 224,  765 => 221,  759 => 220,  752 => 219,  749 => 218,  737 => 215,  731 => 214,  724 => 213,  721 => 212,  716 => 209,  708 => 207,  701 => 206,  699 => 205,  694 => 204,  678 => 203,  672 => 202,  668 => 200,  662 => 199,  658 => 198,  651 => 197,  648 => 196,  643 => 193,  635 => 191,  628 => 190,  626 => 189,  622 => 188,  604 => 187,  598 => 186,  594 => 184,  588 => 183,  584 => 182,  577 => 181,  574 => 180,  569 => 177,  562 => 175,  555 => 174,  553 => 173,  546 => 172,  542 => 171,  538 => 170,  532 => 169,  526 => 168,  519 => 167,  516 => 166,  512 => 165,  508 => 164,  505 => 163,  502 => 162,  498 => 160,  495 => 159,  484 => 157,  480 => 156,  475 => 153,  472 => 152,  464 => 150,  461 => 149,  453 => 147,  450 => 146,  444 => 143,  438 => 141,  432 => 138,  429 => 137,  427 => 136,  424 => 135,  422 => 134,  414 => 132,  406 => 130,  404 => 129,  397 => 128,  387 => 126,  385 => 125,  380 => 123,  373 => 121,  367 => 120,  361 => 118,  358 => 117,  355 => 116,  352 => 115,  349 => 114,  347 => 113,  343 => 111,  338 => 109,  332 => 107,  323 => 103,  317 => 100,  312 => 98,  299 => 88,  295 => 87,  287 => 82,  282 => 80,  274 => 75,  270 => 74,  266 => 72,  264 => 71,  260 => 70,  255 => 67,  252 => 66,  247 => 63,  240 => 61,  231 => 58,  227 => 57,  224 => 56,  220 => 55,  213 => 51,  209 => 49,  205 => 48,  201 => 46,  199 => 45,  195 => 44,  191 => 42,  185 => 40,  182 => 39,  176 => 37,  174 => 36,  170 => 35,  167 => 34,  163 => 32,  160 => 31,  143 => 29,  138 => 28,  135 => 27,  121 => 25,  119 => 24,  116 => 23,  111 => 22,  108 => 21,  105 => 20,  102 => 19,  99 => 18,  97 => 17,  90 => 16,  87 => 15,  84 => 14,  81 => 13,  78 => 12,  75 => 11,  72 => 10,  70 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
