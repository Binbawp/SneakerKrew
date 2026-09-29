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

/* default/template/product/compare.twig */
class __TwigTemplate_01e88e0dfd5cdbb3bd74b00c72995467 extends Template
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
<div id=\"product-compare\" class=\"container\">
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
      <h1>";
        // line 22
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      ";
        // line 23
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <td colspan=\"";
            // line 27
            yield (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)) + 1);
            yield "\"><strong>";
            yield ($context["text_product"] ?? null);
            yield "</strong></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>";
            // line 32
            yield ($context["text_name"] ?? null);
            yield "</td>
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 34
                yield "            <td><a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 34);
                yield "\"><strong>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 34);
                yield "</strong></a></td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield " </tr>
          <tr>
            <td>";
            // line 37
            yield ($context["text_image"] ?? null);
            yield "</td>
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 39
                yield "            <td class=\"text-center\">";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " <img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 39);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 39);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 39);
                    yield "\" class=\"img-thumbnail\" /> ";
                }
                yield "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield " </tr>
          <tr>
            <td>";
            // line 42
            yield ($context["text_price"] ?? null);
            yield "</td>
            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 44
                yield "            <td>";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 45
                    yield "              ";
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 46
                        yield "              ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 46);
                        yield "
              ";
                    } else {
                        // line 47
                        yield " <strike>";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 47);
                        yield "</strike> ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 47);
                        yield "
              ";
                    }
                    // line 49
                    yield "              ";
                }
                yield "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            yield " </tr>
          <tr>
            <td>";
            // line 52
            yield ($context["text_model"] ?? null);
            yield "</td>
            ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 54
                yield "            <td>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 54);
                yield "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            yield " </tr>
          <tr>
            <td>";
            // line 57
            yield ($context["text_manufacturer"] ?? null);
            yield "</td>
            ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 59
                yield "            <td>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 59);
                yield "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield " </tr>
          <tr>
            <td>";
            // line 62
            yield ($context["text_availability"] ?? null);
            yield "</td>
            ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 64
                yield "            <td>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "availability", [], "any", false, false, false, 64);
                yield "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            yield " </tr>
        ";
            // line 66
            if ((($tmp = ($context["review_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 67
                yield "        <tr>
          <td>";
                // line 68
                yield ($context["text_rating"] ?? null);
                yield "</td>
          ";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 70
                    yield "          <td class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 71
                        yield "            ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 71) < $context["i"])) {
                            yield " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            yield " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        }
                        // line 72
                        yield "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    yield " <br/>
            ";
                    // line 73
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 73);
                    yield "</td>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                yield " </tr>
        ";
            }
            // line 76
            yield "        <tr>
          <td>";
            // line 77
            yield ($context["text_summary"] ?? null);
            yield "</td>
          ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 79
                yield "          <td class=\"description\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 79);
                yield "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            yield " </tr>
        <tr>
          <td>";
            // line 82
            yield ($context["text_weight"] ?? null);
            yield "</td>
          ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 84
                yield "          <td>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 84);
                yield "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            yield " </tr>
        <tr>
          <td>";
            // line 87
            yield ($context["text_dimension"] ?? null);
            yield "</td>
          ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 89
                yield "          <td>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "length", [], "any", false, false, false, 89);
                yield " x ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 89);
                yield " x ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 89);
                yield "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            yield " </tr>
          </tbody>
        
        ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 94
                yield "        <thead>
          <tr>
            <td colspan=\"";
                // line 96
                yield (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)) + 1);
                yield "\"><strong>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 96);
                yield "</strong></td>
          </tr>
        </thead>
        ";
                // line 99
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 99));
                foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                    // line 100
                    yield "        <tbody>
          <tr>
            <td>";
                    // line 102
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 102);
                    yield "</td>
            ";
                    // line 103
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 104
                        yield "            ";
                        if ((($tmp = (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 104)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[$context["key"]] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 105
                            yield "            <td> ";
                            yield (($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 105)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[$context["key"]] ?? null) : null);
                            yield "</td>
            ";
                        } else {
                            // line 107
                            yield "            <td></td>
            ";
                        }
                        // line 109
                        yield "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 110
                    yield "          </tr>
        </tbody>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['attribute'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['attribute_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            yield "        <tr>
          <td></td>
          ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 117
                yield "          <td><input type=\"button\" value=\"";
                yield ($context["button_cart"] ?? null);
                yield "\" class=\"btn btn-primary btn-block\" onclick=\"cart.add('";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 117);
                yield "', '";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 117);
                yield "');\" />
            <a href=\"";
                // line 118
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 118);
                yield "\" class=\"btn btn-danger btn-block\">";
                yield ($context["button_remove"] ?? null);
                yield "</a></td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            yield " </tr>
      </table>
      ";
        } else {
            // line 122
            yield "      <p>";
            yield ($context["text_empty"] ?? null);
            yield "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 124
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-default\">";
            yield ($context["button_continue"] ?? null);
            yield "</a></div>
      </div>
      ";
        }
        // line 127
        yield "      ";
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 128
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 130
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
        return "default/template/product/compare.twig";
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
        return array (  521 => 130,  516 => 128,  511 => 127,  503 => 124,  497 => 122,  492 => 119,  482 => 118,  473 => 117,  469 => 116,  465 => 114,  459 => 113,  451 => 110,  445 => 109,  441 => 107,  435 => 105,  432 => 104,  428 => 103,  424 => 102,  420 => 100,  416 => 99,  408 => 96,  404 => 94,  400 => 93,  395 => 90,  382 => 89,  378 => 88,  374 => 87,  370 => 85,  361 => 84,  357 => 83,  353 => 82,  349 => 80,  340 => 79,  336 => 78,  332 => 77,  329 => 76,  325 => 74,  317 => 73,  309 => 72,  302 => 71,  297 => 70,  293 => 69,  289 => 68,  286 => 67,  284 => 66,  281 => 65,  272 => 64,  268 => 63,  264 => 62,  260 => 60,  251 => 59,  247 => 58,  243 => 57,  239 => 55,  230 => 54,  226 => 53,  222 => 52,  218 => 50,  209 => 49,  201 => 47,  195 => 46,  192 => 45,  189 => 44,  185 => 43,  181 => 42,  177 => 40,  160 => 39,  156 => 38,  152 => 37,  148 => 35,  137 => 34,  133 => 33,  129 => 32,  119 => 27,  114 => 24,  112 => 23,  108 => 22,  101 => 21,  98 => 20,  95 => 19,  92 => 18,  89 => 17,  86 => 16,  83 => 15,  81 => 14,  76 => 13,  68 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/product/compare.twig", "");
    }
}
