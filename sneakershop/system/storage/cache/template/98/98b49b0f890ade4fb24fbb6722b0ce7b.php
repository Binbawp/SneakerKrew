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

/* default/template/checkout/cart.twig */
class __TwigTemplate_33bc01d42b73036115e3717274f7cb8c extends Template
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
<div id=\"checkout-cart\" class=\"container\">
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
        if ((($tmp = ($context["attention"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "  <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            yield ($context["attention"] ?? null);
            yield "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 13
        yield "  ";
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 18
        yield "  ";
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 23
        yield "  <div class=\"row\">";
        yield ($context["column_left"] ?? null);
        yield "
    ";
        // line 24
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 25
            yield "    ";
            $context["class"] = "col-sm-6";
            // line 26
            yield "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 27
            yield "    ";
            $context["class"] = "col-sm-9";
            // line 28
            yield "    ";
        } else {
            // line 29
            yield "    ";
            $context["class"] = "col-sm-12";
            // line 30
            yield "    ";
        }
        // line 31
        yield "    <div id=\"content\" class=\"";
        yield ($context["class"] ?? null);
        yield "\">";
        yield ($context["content_top"] ?? null);
        yield "
      <h1>";
        // line 32
        yield ($context["heading_title"] ?? null);
        yield "
        ";
        // line 33
        if ((($tmp = ($context["weight"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "        &nbsp;(";
            yield ($context["weight"] ?? null);
            yield ")
        ";
        }
        // line 35
        yield " </h1>
      <form action=\"";
        // line 36
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td class=\"text-center\">";
        // line 41
        yield ($context["column_image"] ?? null);
        yield "</td>
                <td class=\"text-left\">";
        // line 42
        yield ($context["column_name"] ?? null);
        yield "</td>
                <td class=\"text-left\">";
        // line 43
        yield ($context["column_model"] ?? null);
        yield "</td>
                <td class=\"text-left\">";
        // line 44
        yield ($context["column_quantity"] ?? null);
        yield "</td>
                <td class=\"text-right\">";
        // line 45
        yield ($context["column_price"] ?? null);
        yield "</td>
                <td class=\"text-right\">";
        // line 46
        yield ($context["column_total"] ?? null);
        yield "</td>
              </tr>
            </thead>
            <tbody>
            
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 52
            yield "            <tr>
              <td class=\"text-center\">";
            // line 53
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 53);
                yield "\"><img src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 53);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 53);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 53);
                yield "\" class=\"img-thumbnail\" /></a> ";
            }
            yield "</td>
              <td class=\"text-left\"><a href=\"";
            // line 54
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 54);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 54);
            yield "</a> ";
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " <span class=\"text-danger\">***</span> ";
            }
            // line 55
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 56
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 56));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    yield " <br/>
                <small>";
                    // line 57
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 57);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 57);
                    yield "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                yield "                ";
            }
            // line 59
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " <br/>
                <small>";
                // line 60
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 60);
                yield "</small> ";
            }
            // line 61
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " <br/>
                <span class=\"label label-info\">";
                // line 62
                yield ($context["text_recurring_item"] ?? null);
                yield "</span> <small>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 62);
                yield "</small> ";
            }
            yield "</td>
              <td class=\"text-left\">";
            // line 63
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 63);
            yield "</td>
              <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"quantity[";
            // line 65
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 65);
            yield "]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 65);
            yield "\" size=\"1\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 67
            yield ($context["button_update"] ?? null);
            yield "\" class=\"btn btn-primary\"><i class=\"fa fa-refresh\"></i></button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 68
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\" onclick=\"cart.remove('";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 68);
            yield "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
              <td class=\"text-right\">";
            // line 70
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 70);
            yield "</td>
              <td class=\"text-right\">";
            // line 71
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 71);
            yield "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 75
            yield "            <tr>
              <td></td>
              <td class=\"text-left\">";
            // line 77
            yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 77);
            yield "</td>
              <td class=\"text-left\"></td>
              <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 82
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\" onclick=\"voucher.remove('";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 82);
            yield "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
              <td class=\"text-right\">";
            // line 84
            yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 84);
            yield "</td>
              <td class=\"text-right\">";
            // line 85
            yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 85);
            yield "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['voucher'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "              </tbody>
            
          </table>
        </div>
      </form>
      ";
        // line 93
        if ((($tmp = ($context["modules"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 94
            yield "      <h2>";
            yield ($context["text_next"] ?? null);
            yield "</h2>
      <p>";
            // line 95
            yield ($context["text_next_choice"] ?? null);
            yield "</p>
      <div class=\"panel-group\" id=\"accordion\"> ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 97
                yield "        ";
                yield $context["module"];
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            yield " </div>
      ";
        }
        // line 99
        yield " <br/>
      <div class=\"row\">
        <div class=\"col-sm-4 col-sm-offset-8\">
          <table class=\"table table-bordered\">
            ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 104
            yield "            <tr>
              <td class=\"text-right\"><strong>";
            // line 105
            yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 105);
            yield ":</strong></td>
              <td class=\"text-right\">";
            // line 106
            yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 106);
            yield "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['total'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        yield "          </table>
        </div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-left\"><a href=\"";
        // line 113
        yield ($context["continue"] ?? null);
        yield "\" class=\"btn btn-default\">";
        yield ($context["button_shopping"] ?? null);
        yield "</a></div>
        <div class=\"pull-right\"><a href=\"";
        // line 114
        yield ($context["checkout"] ?? null);
        yield "\" class=\"btn btn-primary\">";
        yield ($context["button_checkout"] ?? null);
        yield "</a></div>
      </div>
      ";
        // line 116
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 117
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 119
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
        return "default/template/checkout/cart.twig";
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
        return array (  416 => 119,  411 => 117,  407 => 116,  400 => 114,  394 => 113,  388 => 109,  379 => 106,  375 => 105,  372 => 104,  368 => 103,  362 => 99,  358 => 98,  349 => 97,  345 => 96,  341 => 95,  336 => 94,  334 => 93,  327 => 88,  318 => 85,  314 => 84,  307 => 82,  299 => 77,  295 => 75,  290 => 74,  281 => 71,  277 => 70,  270 => 68,  266 => 67,  259 => 65,  254 => 63,  246 => 62,  241 => 61,  237 => 60,  232 => 59,  229 => 58,  220 => 57,  213 => 56,  210 => 55,  202 => 54,  188 => 53,  185 => 52,  181 => 51,  173 => 46,  169 => 45,  165 => 44,  161 => 43,  157 => 42,  153 => 41,  145 => 36,  142 => 35,  136 => 34,  134 => 33,  130 => 32,  123 => 31,  120 => 30,  117 => 29,  114 => 28,  111 => 27,  108 => 26,  105 => 25,  103 => 24,  98 => 23,  90 => 19,  87 => 18,  79 => 14,  76 => 13,  68 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/checkout/cart.twig", "");
    }
}
