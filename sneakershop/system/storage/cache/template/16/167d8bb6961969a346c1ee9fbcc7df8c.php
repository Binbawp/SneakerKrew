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

/* default/template/common/home.twig */
class __TwigTemplate_7530cf04b5499d70867d19522deaf6df extends Template
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

<!-- ============ HERO — promotions / discount / new drop ============ -->
<section class=\"sk-hero\">
  <div class=\"sk-hero-grid\">
    <a href=\"";
        // line 6
        yield ($context["home"] ?? null);
        yield "\" class=\"sk-hero-main\" style=\"background-image:url('catalog/view/theme/default/image/promo/hero-main.jpg');\">
      <div class=\"sk-hero-main-content\">
        <span class=\"sk-hero-tag\">";
        // line 8
        yield ($context["text_hero_tag"] ?? null);
        yield "</span>
        <h1 class=\"sk-hero-title\">";
        // line 9
        yield ($context["text_hero_title_1"] ?? null);
        yield "<br><em>";
        yield ($context["text_hero_title_2"] ?? null);
        yield "</em></h1>
        <p class=\"sk-hero-sub\">";
        // line 10
        yield ($context["text_hero_sub"] ?? null);
        yield "</p>
        <span class=\"sk-btn sk-btn--primary\">";
        // line 11
        yield ($context["text_hero_cta"] ?? null);
        yield " <i class=\"fa fa-arrow-right\"></i></span>
      </div>
    </a>
    <div class=\"sk-hero-side\">
      <a href=\"";
        // line 15
        yield ($context["home"] ?? null);
        yield "\" class=\"sk-hero-side-card\" style=\"background-image:url('catalog/view/theme/default/image/promo/hero-side-1.jpg');\">
        <span class=\"sk-hero-side-eyebrow\">";
        // line 16
        yield ($context["text_promo1_eyebrow"] ?? null);
        yield "</span>
        <h3 class=\"sk-hero-side-title\">";
        // line 17
        yield ($context["text_promo1_title"] ?? null);
        yield "</h3>
        <span class=\"sk-btn sk-btn--outline sk-btn--sm\">";
        // line 18
        yield ($context["text_promo1_cta"] ?? null);
        yield "</span>
      </a>
      <a href=\"";
        // line 20
        yield ($context["home"] ?? null);
        yield "\" class=\"sk-hero-side-card\" style=\"background-image:url('catalog/view/theme/default/image/promo/hero-side-2.jpg');\">
        <span class=\"sk-hero-side-eyebrow\">";
        // line 21
        yield ($context["text_promo2_eyebrow"] ?? null);
        yield "</span>
        <h3 class=\"sk-hero-side-title\">";
        // line 22
        yield ($context["text_promo2_title"] ?? null);
        yield "</h3>
        <span class=\"sk-btn sk-btn--light sk-btn--sm\">";
        // line 23
        yield ($context["text_promo2_cta"] ?? null);
        yield "</span>
      </a>
    </div>
  </div>
</section>

<!-- ============ PERKS STRIP ============ -->
<div class=\"sk-perks\">
  <div class=\"container sk-perks-inner\">
    <div class=\"sk-perk\"><i class=\"fa fa-truck\"></i>";
        // line 32
        yield ($context["text_perk1"] ?? null);
        yield "</div>
    <div class=\"sk-perk\"><i class=\"fa fa-refresh\"></i>";
        // line 33
        yield ($context["text_perk2"] ?? null);
        yield "</div>
    <div class=\"sk-perk\"><i class=\"fa fa-shield\"></i>";
        // line 34
        yield ($context["text_perk3"] ?? null);
        yield "</div>
    <div class=\"sk-perk\"><i class=\"fa fa-credit-card\"></i>";
        // line 35
        yield ($context["text_perk4"] ?? null);
        yield "</div>
  </div>
</div>

<!-- ============ CATEGORY QUICK NAV ============ -->
";
        // line 40
        if ((($tmp = ($context["quick_categories"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "<section class=\"sk-section\" style=\"padding-bottom:8px;\">
  <div class=\"container\">
    <div class=\"sk-section-head\">
      <h2 class=\"sk-section-title\"><span class=\"sk-slash\"></span>";
            // line 44
            yield ($context["text_shop_by_category"] ?? null);
            yield "</h2>
    </div>
    <div class=\"sk-cat-grid\">
      ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["quick_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 48
                yield "      <a class=\"sk-cat-tile";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "all", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " sk-cat-tile--all";
                }
                yield "\" href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "href", [], "any", false, false, false, 48);
                yield "\">
        <span class=\"sk-cat-icon\"><i class=\"fa ";
                // line 49
                yield CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "icon", [], "any", false, false, false, 49);
                yield "\"></i></span>
        <span>";
                // line 50
                yield CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 50);
                yield "</span>
      </a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "    </div>
  </div>
</section>
";
        }
        // line 57
        yield "
<!-- ============ MAIN CONTENT (admin-configured modules: featured / bestseller / etc.) ============ -->
<div id=\"common-home\" class=\"container\">
  <div class=\"row\">";
        // line 60
        yield ($context["column_left"] ?? null);
        yield "
    ";
        // line 61
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 62
            yield "    ";
            $context["class"] = "col-sm-6";
            // line 63
            yield "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 64
            yield "    ";
            $context["class"] = "col-sm-9";
            // line 65
            yield "    ";
        } else {
            // line 66
            yield "    ";
            $context["class"] = "col-sm-12";
            // line 67
            yield "    ";
        }
        // line 68
        yield "    <div id=\"content\" class=\"";
        yield ($context["class"] ?? null);
        yield "\">";
        yield ($context["content_top"] ?? null);
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
        return "default/template/common/home.twig";
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
        return array (  224 => 71,  219 => 69,  211 => 68,  208 => 67,  205 => 66,  202 => 65,  199 => 64,  196 => 63,  193 => 62,  191 => 61,  187 => 60,  182 => 57,  176 => 53,  167 => 50,  163 => 49,  154 => 48,  150 => 47,  144 => 44,  139 => 41,  137 => 40,  129 => 35,  125 => 34,  121 => 33,  117 => 32,  105 => 23,  101 => 22,  97 => 21,  93 => 20,  88 => 18,  84 => 17,  80 => 16,  76 => 15,  69 => 11,  65 => 10,  59 => 9,  55 => 8,  50 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
