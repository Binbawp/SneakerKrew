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

/* default/template/account/wishlist.twig */
class __TwigTemplate_4891e0755c69c885ed70f6dc94f28bfb extends Template
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
<div id=\"account-wishlist\" class=\"container\">
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
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 13
        yield "  <div class=\"row\">";
        yield ($context["column_left"] ?? null);
        yield "
    ";
        // line 14
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 15
            yield "    ";
            $context["class"] = "col-sm-6";
            // line 16
            yield "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 17
            yield "    ";
            $context["class"] = "col-sm-9";
            // line 18
            yield "    ";
        } else {
            // line 19
            yield "    ";
            $context["class"] = "col-sm-12";
            // line 20
            yield "    ";
        }
        // line 21
        yield "    <div id=\"content\" class=\"";
        yield ($context["class"] ?? null);
        yield "\">";
        yield ($context["content_top"] ?? null);
        yield "
      <h2>";
        // line 22
        yield ($context["heading_title"] ?? null);
        yield "</h2>
      ";
        // line 23
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-center\">";
            // line 28
            yield ($context["column_image"] ?? null);
            yield "</td>
              <td class=\"text-left\">";
            // line 29
            yield ($context["column_name"] ?? null);
            yield "</td>
              <td class=\"text-left\">";
            // line 30
            yield ($context["column_model"] ?? null);
            yield "</td>
              <td class=\"text-right\">";
            // line 31
            yield ($context["column_stock"] ?? null);
            yield "</td>
              <td class=\"text-right\">";
            // line 32
            yield ($context["column_price"] ?? null);
            yield "</td>
              <td class=\"text-right\">";
            // line 33
            yield ($context["column_action"] ?? null);
            yield "</td>
            </tr>
          </thead>
          <tbody>
          
          ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 39
                yield "          <tr>
            <td class=\"text-center\">";
                // line 40
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 40);
                    yield "\"><img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 40);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 40);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 40);
                    yield "\" /></a>";
                }
                yield "</td>
            <td class=\"text-left\"><a href=\"";
                // line 41
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 41);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 41);
                yield "</a></td>
            <td class=\"text-left\">";
                // line 42
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 42);
                yield "</td>
            <td class=\"text-right\">";
                // line 43
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 43);
                yield "</td>
            <td class=\"text-right\">";
                // line 44
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 45
                    yield "              <div class=\"price\"> ";
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 46
                        yield "                ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 46);
                        yield "
                ";
                    } else {
                        // line 47
                        yield " <b>";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 47);
                        yield "</b> <s>";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 47);
                        yield "</s> ";
                    }
                    yield " </div>
              ";
                }
                // line 48
                yield "</td>
            <td class=\"text-right\"><button type=\"button\" onclick=\"cart.add('";
                // line 49
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 49);
                yield "');\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_cart"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></button>
              <a href=\"";
                // line 50
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 50);
                yield "\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_remove"] ?? null);
                yield "\" class=\"btn btn-danger\"><i class=\"fa fa-times\"></i></a></td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "            </tbody>
          
        </table>
      </div>
      ";
        } else {
            // line 58
            yield "      <p>";
            yield ($context["text_empty"] ?? null);
            yield "</p>
      ";
        }
        // line 60
        yield "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 61
        yield ($context["continue"] ?? null);
        yield "\" class=\"btn btn-primary\">";
        yield ($context["button_continue"] ?? null);
        yield "</a></div>
      </div>
      ";
        // line 63
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 64
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 66
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/template/account/wishlist.twig";
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
        return array (  256 => 66,  251 => 64,  247 => 63,  240 => 61,  237 => 60,  231 => 58,  224 => 53,  213 => 50,  207 => 49,  204 => 48,  194 => 47,  188 => 46,  185 => 45,  183 => 44,  179 => 43,  175 => 42,  169 => 41,  155 => 40,  152 => 39,  148 => 38,  140 => 33,  136 => 32,  132 => 31,  128 => 30,  124 => 29,  120 => 28,  114 => 24,  112 => 23,  108 => 22,  101 => 21,  98 => 20,  95 => 19,  92 => 18,  89 => 17,  86 => 16,  83 => 15,  81 => 14,  76 => 13,  68 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/account/wishlist.twig", "");
    }
}
