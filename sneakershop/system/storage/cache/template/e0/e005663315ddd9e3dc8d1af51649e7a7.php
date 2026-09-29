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

/* default/template/information/sitemap.twig */
class __TwigTemplate_b64018b2f4d07f4d3dde026f8ac64109 extends Template
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
<div id=\"information-sitemap\" class=\"container\">
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
      <h1>";
        // line 17
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <ul>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 22
            yield "            <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "href", [], "any", false, false, false, 22);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 22);
            yield "</a>
              ";
            // line 23
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 24
                yield "              <ul>
                ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 25));
                foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                    // line 26
                    yield "                <li><a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "href", [], "any", false, false, false, 26);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 26);
                    yield "</a>
                  ";
                    // line 27
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 28
                        yield "                  <ul>
                    ";
                        // line 29
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 29));
                        foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                            // line 30
                            yield "                    <li><a href=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["category_3"], "href", [], "any", false, false, false, 30);
                            yield "\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 30);
                            yield "</a></li>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['category_3'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 32
                        yield "                  </ul>
                  ";
                    }
                    // line 34
                    yield "                </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['category_2'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                yield "              </ul>
              ";
            }
            // line 38
            yield "            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category_1'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "          </ul>
        </div>
        <div class=\"col-sm-6\">
          <ul>
            <li><a href=\"";
        // line 44
        yield ($context["special"] ?? null);
        yield "\">";
        yield ($context["text_special"] ?? null);
        yield "</a></li>
            <li><a href=\"";
        // line 45
        yield ($context["account"] ?? null);
        yield "\">";
        yield ($context["text_account"] ?? null);
        yield "</a>
              <ul>
                <li><a href=\"";
        // line 47
        yield ($context["edit"] ?? null);
        yield "\">";
        yield ($context["text_edit"] ?? null);
        yield "</a></li>
                <li><a href=\"";
        // line 48
        yield ($context["password"] ?? null);
        yield "\">";
        yield ($context["text_password"] ?? null);
        yield "</a></li>
                <li><a href=\"";
        // line 49
        yield ($context["address"] ?? null);
        yield "\">";
        yield ($context["text_address"] ?? null);
        yield "</a></li>
                <li><a href=\"";
        // line 50
        yield ($context["history"] ?? null);
        yield "\">";
        yield ($context["text_history"] ?? null);
        yield "</a></li>
                <li><a href=\"";
        // line 51
        yield ($context["download"] ?? null);
        yield "\">";
        yield ($context["text_download"] ?? null);
        yield "</a></li>
              </ul>
            </li>
            <li><a href=\"";
        // line 54
        yield ($context["cart"] ?? null);
        yield "\">";
        yield ($context["text_cart"] ?? null);
        yield "</a></li>
            <li><a href=\"";
        // line 55
        yield ($context["checkout"] ?? null);
        yield "\">";
        yield ($context["text_checkout"] ?? null);
        yield "</a></li>
            <li><a href=\"";
        // line 56
        yield ($context["search"] ?? null);
        yield "\">";
        yield ($context["text_search"] ?? null);
        yield "</a></li>
            <li>";
        // line 57
        yield ($context["text_information"] ?? null);
        yield "
              <ul>
                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 60
            yield "                <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 60);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 60);
            yield "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "                <li><a href=\"";
        yield ($context["contact"] ?? null);
        yield "\">";
        yield ($context["text_contact"] ?? null);
        yield "</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      ";
        // line 68
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 69
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 71
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
        return "default/template/information/sitemap.twig";
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
        return array (  283 => 71,  278 => 69,  274 => 68,  262 => 62,  251 => 60,  247 => 59,  242 => 57,  236 => 56,  230 => 55,  224 => 54,  216 => 51,  210 => 50,  204 => 49,  198 => 48,  192 => 47,  185 => 45,  179 => 44,  173 => 40,  166 => 38,  162 => 36,  155 => 34,  151 => 32,  140 => 30,  136 => 29,  133 => 28,  131 => 27,  124 => 26,  120 => 25,  117 => 24,  115 => 23,  108 => 22,  104 => 21,  97 => 17,  90 => 16,  87 => 15,  84 => 14,  81 => 13,  78 => 12,  75 => 11,  72 => 10,  70 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/information/sitemap.twig", "");
    }
}
