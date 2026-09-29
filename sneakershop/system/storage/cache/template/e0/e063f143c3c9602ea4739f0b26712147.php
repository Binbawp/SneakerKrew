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

/* default/template/common/header.twig */
class __TwigTemplate_f2c658ec3f28e705d5dfa648c6a4d266 extends Template
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
        yield "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["lang"] ?? null);
        yield "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["lang"] ?? null);
        yield "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["lang"] ?? null);
        yield "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        yield ($context["title"] ?? null);
        yield "</title>
<base href=\"";
        // line 13
        yield ($context["base"] ?? null);
        yield "\" />
";
        // line 14
        if ((($tmp = ($context["description"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "<meta name=\"description\" content=\"";
            yield ($context["description"] ?? null);
            yield "\" />
";
        }
        // line 17
        if ((($tmp = ($context["keywords"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "<meta name=\"keywords\" content=\"";
            yield ($context["keywords"] ?? null);
            yield "\" />
";
        }
        // line 20
        yield "<script src=\"catalog/view/javascript/jquery/jquery-3.7.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css2?family=Anton&family=Inter:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/default/stylesheet/custom-theme.css\" rel=\"stylesheet\">
";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 28
            yield "<link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 28);
            yield "\" type=\"text/css\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 28);
            yield "\" media=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 28);
            yield "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['style'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 31
            yield "<script src=\"";
            yield $context["script"];
            yield "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 35
            yield "<link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 35);
            yield "\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 35);
            yield "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 38
            yield $context["analytic"];
            yield "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['analytic'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "</head>
<body>

<!-- utility bar -->
<div class=\"sk-utility\">
  <div class=\"sk-container sk-utility-inner\">
    <div class=\"sk-utility-left\">
      ";
        // line 47
        if ((($tmp = ($context["telephone"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<a href=\"";
            yield ($context["contact"] ?? null);
            yield "\"><i class=\"fa fa-phone\"></i>";
            yield ($context["telephone"] ?? null);
            yield "</a>";
        }
        // line 48
        yield "    </div>
    <div class=\"sk-utility-right\">
      <span class=\"sk-utility-currency\">";
        // line 50
        yield ($context["currency"] ?? null);
        yield "</span>
      <span class=\"sk-utility-language\">";
        // line 51
        yield ($context["language"] ?? null);
        yield "</span>
      <a href=\"";
        // line 52
        yield ($context["wishlist"] ?? null);
        yield "\" id=\"wishlist-total\" title=\"";
        yield ($context["text_wishlist"] ?? null);
        yield "\"><i class=\"fa fa-heart-o\"></i><span class=\"hidden-xs hidden-sm\">";
        yield ($context["text_wishlist"] ?? null);
        yield "</span></a>
      <a href=\"";
        // line 53
        yield ($context["checkout"] ?? null);
        yield "\" title=\"";
        yield ($context["text_checkout"] ?? null);
        yield "\"><i class=\"fa fa-share-square-o\"></i><span class=\"hidden-xs hidden-sm\">";
        yield ($context["text_checkout"] ?? null);
        yield "</span></a>
    </div>
  </div>
</div>

<!-- main header: logo / search / register / about us / cart -->
<header class=\"sk-header\">
  <div class=\"sk-container sk-header-inner\">
    <div id=\"logo\" class=\"sk-logo\">
      ";
        // line 62
        if ((($tmp = ($context["logo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "      <a href=\"";
            yield ($context["home"] ?? null);
            yield "\"><img src=\"";
            yield ($context["logo"] ?? null);
            yield "\" title=\"";
            yield ($context["name"] ?? null);
            yield "\" alt=\"";
            yield ($context["name"] ?? null);
            yield "\" /></a>
      ";
        } else {
            // line 65
            yield "      <a href=\"";
            yield ($context["home"] ?? null);
            yield "\">";
            yield ($context["name"] ?? null);
            yield "</a>
      ";
        }
        // line 67
        yield "    </div>

    <div class=\"sk-search\">";
        // line 69
        yield ($context["search"] ?? null);
        yield "</div>

    <div class=\"sk-header-actions\">
      <div class=\"sk-action dropdown\">
        <a href=\"";
        // line 73
        yield (((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["account"] ?? null)) : (($context["register"] ?? null)));
        yield "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
          <i class=\"fa fa-user-o\"></i>";
        // line 74
        yield (((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["text_account"] ?? null)) : (($context["text_register"] ?? null)));
        yield "
        </a>
        <ul class=\"dropdown-menu dropdown-menu-right sk-account-menu\">
          ";
        // line 77
        if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 78
            yield "          <li><a href=\"";
            yield ($context["account"] ?? null);
            yield "\">";
            yield ($context["text_account"] ?? null);
            yield "</a></li>
          <li><a href=\"";
            // line 79
            yield ($context["order"] ?? null);
            yield "\">";
            yield ($context["text_order"] ?? null);
            yield "</a></li>
          <li><a href=\"";
            // line 80
            yield ($context["download"] ?? null);
            yield "\">";
            yield ($context["text_download"] ?? null);
            yield "</a></li>
          <li><a href=\"";
            // line 81
            yield ($context["logout"] ?? null);
            yield "\">";
            yield ($context["text_logout"] ?? null);
            yield "</a></li>
          ";
        } else {
            // line 83
            yield "          <li><a href=\"";
            yield ($context["register"] ?? null);
            yield "\">";
            yield ($context["text_register"] ?? null);
            yield "</a></li>
          <li><a href=\"";
            // line 84
            yield ($context["login"] ?? null);
            yield "\">";
            yield ($context["text_login"] ?? null);
            yield "</a></li>
          ";
        }
        // line 86
        yield "        </ul>
      </div>

      <a class=\"sk-action\" href=\"";
        // line 89
        yield ($context["about"] ?? null);
        yield "\"><i class=\"fa fa-info-circle\"></i>";
        yield ($context["text_about_us"] ?? null);
        yield "</a>

      ";
        // line 91
        yield ($context["cart"] ?? null);
        yield "
    </div>
  </div>
</header>

";
        // line 96
        yield ($context["menu"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/template/common/header.twig";
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
        return array (  321 => 96,  313 => 91,  306 => 89,  301 => 86,  294 => 84,  287 => 83,  280 => 81,  274 => 80,  268 => 79,  261 => 78,  259 => 77,  253 => 74,  249 => 73,  242 => 69,  238 => 67,  230 => 65,  218 => 63,  216 => 62,  200 => 53,  192 => 52,  188 => 51,  184 => 50,  180 => 48,  172 => 47,  163 => 40,  155 => 38,  151 => 37,  140 => 35,  136 => 34,  133 => 33,  124 => 31,  120 => 30,  107 => 28,  103 => 27,  94 => 20,  88 => 18,  86 => 17,  80 => 15,  78 => 14,  74 => 13,  70 => 12,  59 => 6,  52 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
