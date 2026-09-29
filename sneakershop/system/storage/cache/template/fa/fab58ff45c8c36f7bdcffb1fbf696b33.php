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

/* default/template/information/contact.twig */
class __TwigTemplate_55942a3ae7dd2c832e4946b367a923ca extends Template
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
<div id=\"information-contact\" class=\"container\">
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
      <h3>";
        // line 18
        yield ($context["text_location"] ?? null);
        yield "</h3>
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <div class=\"row\">
            ";
        // line 22
        if ((($tmp = ($context["image"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "            <div class=\"col-sm-3\"><img src=\"";
            yield ($context["image"] ?? null);
            yield "\" alt=\"";
            yield ($context["store"] ?? null);
            yield "\" title=\"";
            yield ($context["store"] ?? null);
            yield "\" class=\"img-thumbnail\" /></div>
            ";
        }
        // line 25
        yield "            <div class=\"col-sm-3\"><strong>";
        yield ($context["store"] ?? null);
        yield "</strong><br />
              <address>
              ";
        // line 27
        yield ($context["address"] ?? null);
        yield "
              </address>
              ";
        // line 29
        if ((($tmp = ($context["geocode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "              <a href=\"https://maps.google.com/maps?q=";
            yield Twig\Extension\CoreExtension::urlencode(($context["geocode"] ?? null));
            yield "&hl=";
            yield ($context["geocode_hl"] ?? null);
            yield "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            yield ($context["button_map"] ?? null);
            yield "</a>
              ";
        }
        // line 32
        yield "            </div>
            <div class=\"col-sm-3\"><strong>";
        // line 33
        yield ($context["text_telephone"] ?? null);
        yield "</strong><br>
              ";
        // line 34
        yield ($context["telephone"] ?? null);
        yield "<br />
              <br />
              ";
        // line 36
        if ((($tmp = ($context["fax"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "              <strong>";
            yield ($context["text_fax"] ?? null);
            yield "</strong><br>
              ";
            // line 38
            yield ($context["fax"] ?? null);
            yield "
              ";
        }
        // line 40
        yield "            </div>
            <div class=\"col-sm-3\">
              ";
        // line 42
        if ((($tmp = ($context["open"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "              <strong>";
            yield ($context["text_open"] ?? null);
            yield "</strong><br />
              ";
            // line 44
            yield ($context["open"] ?? null);
            yield "<br />
              <br />
              ";
        }
        // line 47
        yield "              ";
        if ((($tmp = ($context["comment"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "              <strong>";
            yield ($context["text_comment"] ?? null);
            yield "</strong><br />
              ";
            // line 49
            yield ($context["comment"] ?? null);
            yield "
              ";
        }
        // line 51
        yield "            </div>
          </div>
        </div>
      </div>
      ";
        // line 55
        if ((($tmp = ($context["locations"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 56
            yield "      <h3>";
            yield ($context["text_store"] ?? null);
            yield "</h3>
      <div class=\"panel-group\" id=\"accordion\">
        ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 59
                yield "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 61
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 61);
                yield "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 61);
                yield " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 63
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 63);
                yield "\">
            <div class=\"panel-body\">
              <div class=\"row\">
                ";
                // line 66
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 67
                    yield "                <div class=\"col-sm-3\"><img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 67);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 67);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 67);
                    yield "\" class=\"img-thumbnail\" /></div>
                ";
                }
                // line 69
                yield "                <div class=\"col-sm-3\"><strong>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 69);
                yield "</strong><br/>
                  <address>
                  ";
                // line 71
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 71);
                yield "
                  </address>
                  ";
                // line 73
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 74
                    yield "                  <a href=\"https://maps.google.com/maps?q=";
                    yield Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 74));
                    yield "&hl=";
                    yield ($context["geocode_hl"] ?? null);
                    yield "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    yield ($context["button_map"] ?? null);
                    yield "</a>
                  ";
                }
                // line 76
                yield "                </div>
                <div class=\"col-sm-3\"> <strong>";
                // line 77
                yield ($context["text_telephone"] ?? null);
                yield "</strong><br/>
                  ";
                // line 78
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 78);
                yield "<br/>
                  <br/>
                  ";
                // line 80
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 81
                    yield "                  <strong>";
                    yield ($context["text_fax"] ?? null);
                    yield "</strong><br/>
                  ";
                    // line 82
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 82);
                    yield "
                  ";
                }
                // line 84
                yield "                </div>
                <div class=\"col-sm-3\">
                  ";
                // line 86
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 86)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 87
                    yield "                  <strong>";
                    yield ($context["text_open"] ?? null);
                    yield "</strong><br/>
                  ";
                    // line 88
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 88);
                    yield "<br/>
                  <br/>
                  ";
                }
                // line 91
                yield "                  ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 92
                    yield "                  <strong>";
                    yield ($context["text_comment"] ?? null);
                    yield "</strong><br/>
                  ";
                    // line 93
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 93);
                    yield "
                  ";
                }
                // line 95
                yield "                </div>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            yield "      </div>
      ";
        }
        // line 103
        yield "      <form action=\"";
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 105
        yield ($context["text_contact"] ?? null);
        yield "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 107
        yield ($context["entry_name"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 109
        yield ($context["name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 110
        if ((($tmp = ($context["error_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 111
            yield "              <div class=\"text-danger\">";
            yield ($context["error_name"] ?? null);
            yield "</div>
              ";
        }
        // line 113
        yield "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 116
        yield ($context["entry_email"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 118
        yield ($context["email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 119
        if ((($tmp = ($context["error_email"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 120
            yield "              <div class=\"text-danger\">";
            yield ($context["error_email"] ?? null);
            yield "</div>
              ";
        }
        // line 122
        yield "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 125
        yield ($context["entry_enquiry"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 127
        yield ($context["enquiry"] ?? null);
        yield "</textarea>
              ";
        // line 128
        if ((($tmp = ($context["error_enquiry"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 129
            yield "              <div class=\"text-danger\">";
            yield ($context["error_enquiry"] ?? null);
            yield "</div>
              ";
        }
        // line 131
        yield "            </div>
          </div>
          ";
        // line 133
        yield ($context["captcha"] ?? null);
        yield "
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 137
        yield ($context["button_submit"] ?? null);
        yield "\" />
          </div>
        </div>
      </form>
      ";
        // line 141
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 142
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 144
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
        return "default/template/information/contact.twig";
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
        return array (  435 => 144,  430 => 142,  426 => 141,  419 => 137,  412 => 133,  408 => 131,  402 => 129,  400 => 128,  396 => 127,  391 => 125,  386 => 122,  380 => 120,  378 => 119,  374 => 118,  369 => 116,  364 => 113,  358 => 111,  356 => 110,  352 => 109,  347 => 107,  342 => 105,  336 => 103,  332 => 101,  321 => 95,  316 => 93,  311 => 92,  308 => 91,  302 => 88,  297 => 87,  295 => 86,  291 => 84,  286 => 82,  281 => 81,  279 => 80,  274 => 78,  270 => 77,  267 => 76,  257 => 74,  255 => 73,  250 => 71,  244 => 69,  234 => 67,  232 => 66,  226 => 63,  219 => 61,  215 => 59,  211 => 58,  205 => 56,  203 => 55,  197 => 51,  192 => 49,  187 => 48,  184 => 47,  178 => 44,  173 => 43,  171 => 42,  167 => 40,  162 => 38,  157 => 37,  155 => 36,  150 => 34,  146 => 33,  143 => 32,  133 => 30,  131 => 29,  126 => 27,  120 => 25,  110 => 23,  108 => 22,  101 => 18,  97 => 17,  90 => 16,  87 => 15,  84 => 14,  81 => 13,  78 => 12,  75 => 11,  72 => 10,  70 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/information/contact.twig", "");
    }
}
