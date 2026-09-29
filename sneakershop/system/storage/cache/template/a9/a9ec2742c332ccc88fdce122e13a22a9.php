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

/* design/banner_form.twig */
class __TwigTemplate_2335f03b59ec200043e361f11dbee453 extends Template
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
        <button type=\"submit\" form=\"form-banner\" data-toggle=\"tooltip\" title=\"";
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
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        yield "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        yield ($context["text_form"] ?? null);
        yield "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-banner\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 29
        yield ($context["entry_name"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 31
        yield ($context["name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 32
        if ((($tmp = ($context["error_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "              <div class=\"text-danger\">";
            yield ($context["error_name"] ?? null);
            yield "</div>
              ";
        }
        // line 35
        yield "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 38
        yield ($context["entry_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 41
        if ((($tmp = ($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "                <option value=\"1\" selected=\"selected\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                <option value=\"0\">";
            // line 43
            yield ($context["text_disabled"] ?? null);
            yield "</option>
                ";
        } else {
            // line 45
            yield "                <option value=\"1\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 46
            yield ($context["text_disabled"] ?? null);
            yield "</option>
                ";
        }
        // line 48
        yield "              </select>
            </div>
          </div>
          <br/>
          <ul class=\"nav nav-tabs\" id=\"language\">
            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 54
            yield "            <li><a href=\"#language";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            yield "\" data-toggle=\"tab\"><img src=\"language/";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 54);
            yield "/";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 54);
            yield ".png\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 54);
            yield "\" /> ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 54);
            yield "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "          </ul>
          <div class=\"tab-content\">
            ";
        // line 58
        $context["image_row"] = 0;
        // line 59
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 60
            yield "            <div class=\"tab-pane\" id=\"language";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60);
            yield "\">
              <table id=\"images";
            // line 61
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            yield "\" class=\"table table-striped table-bordered table-hover\">
                <thead>
                  <tr>
                    <td class=\"text-left\">";
            // line 64
            yield ($context["entry_title"] ?? null);
            yield "</td>
                    <td class=\"text-left\">";
            // line 65
            yield ($context["entry_link"] ?? null);
            yield "</td>
                    <td class=\"text-center\">";
            // line 66
            yield ($context["entry_image"] ?? null);
            yield "</td>
                    <td class=\"text-right\">";
            // line 67
            yield ($context["entry_sort_order"] ?? null);
            yield "</td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  ";
            // line 72
            if ((($tmp = (($_v0 = ($context["banner_images"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 73
                yield "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($_v1 = ($context["banner_images"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73)] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["banner_image"]) {
                    // line 74
                    yield "                  <tr id=\"image-row";
                    yield ($context["image_row"] ?? null);
                    yield "\">
                    <td class=\"text-left\"><input type=\"text\" name=\"banner_image[";
                    // line 75
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75);
                    yield "][";
                    yield ($context["image_row"] ?? null);
                    yield "][title]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner_image"], "title", [], "any", false, false, false, 75);
                    yield "\" placeholder=\"";
                    yield ($context["entry_title"] ?? null);
                    yield "\" class=\"form-control\" />
                      ";
                    // line 76
                    if ((($tmp = (($_v2 = (($_v3 = ($context["error_banner_image"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 76)] ?? null) : null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[($context["image_row"] ?? null)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 77
                        yield "                      <div class=\"text-danger\">";
                        yield (($_v4 = (($_v5 = ($context["error_banner_image"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77)] ?? null) : null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[($context["image_row"] ?? null)] ?? null) : null);
                        yield "</div>
                      ";
                    }
                    // line 78
                    yield "</td>
                    <td class=\"text-left\" style=\"width: 30%;\"><input type=\"text\" name=\"banner_image[";
                    // line 79
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 79);
                    yield "][";
                    yield ($context["image_row"] ?? null);
                    yield "][link]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner_image"], "link", [], "any", false, false, false, 79);
                    yield "\" placeholder=\"";
                    yield ($context["entry_link"] ?? null);
                    yield "\" class=\"form-control\" /></td>
                    <td class=\"text-center\"><a href=\"\" id=\"thumb-image";
                    // line 80
                    yield ($context["image_row"] ?? null);
                    yield "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner_image"], "thumb", [], "any", false, false, false, 80);
                    yield "\" alt=\"\" title=\"\" data-placeholder=\"";
                    yield ($context["placeholder"] ?? null);
                    yield "\" /></a>
                      <input type=\"hidden\" name=\"banner_image[";
                    // line 81
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 81);
                    yield "][";
                    yield ($context["image_row"] ?? null);
                    yield "][image]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner_image"], "image", [], "any", false, false, false, 81);
                    yield "\" id=\"input-image";
                    yield ($context["image_row"] ?? null);
                    yield "\" /></td>
                    <td class=\"text-right\" style=\"width: 10%;\"><input type=\"text\" name=\"banner_image[";
                    // line 82
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 82);
                    yield "][";
                    yield ($context["image_row"] ?? null);
                    yield "][sort_order]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner_image"], "sort_order", [], "any", false, false, false, 82);
                    yield "\" placeholder=\"";
                    yield ($context["entry_sort_order"] ?? null);
                    yield "\" class=\"form-control\" /></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
                    // line 83
                    yield ($context["image_row"] ?? null);
                    yield ", .tooltip').remove();\" data-toggle=\"tooltip\" title=\"";
                    yield ($context["button_remove"] ?? null);
                    yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
                    // line 85
                    $context["image_row"] = (($context["image_row"] ?? null) + 1);
                    // line 86
                    yield "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['banner_image'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                yield "                  ";
            }
            // line 88
            yield "                </tbody>
                <tfoot>
                  <tr>
                    <td colspan=\"4\"></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"addImage('";
            // line 92
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92);
            yield "');\" data-toggle=\"tooltip\" title=\"";
            yield ($context["button_banner_add"] ?? null);
            yield "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                  </tr>
                </tfoot>
              </table>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        yield "          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
var image_row = ";
        // line 104
        yield ($context["image_row"] ?? null);
        yield ";

function addImage(language_id) {
\thtml  = '<tr id=\"image-row' + image_row + '\">';
    html += '  <td class=\"text-left\"><input type=\"text\" name=\"banner_image[' + language_id + '][' + image_row + '][title]\" value=\"\" placeholder=\"";
        // line 108
        yield ($context["entry_title"] ?? null);
        yield "\" class=\"form-control\" /></td>';\t
\thtml += '  <td class=\"text-left\" style=\"width: 30%;\"><input type=\"text\" name=\"banner_image[' + language_id + '][' + image_row + '][link]\" value=\"\" placeholder=\"";
        // line 109
        yield ($context["entry_link"] ?? null);
        yield "\" class=\"form-control\" /></td>';\t
\thtml += '  <td class=\"text-center\"><a href=\"\" id=\"thumb-image' + image_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 110
        yield ($context["placeholder"] ?? null);
        yield "\" alt=\"\" title=\"\" data-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" /></a><input type=\"hidden\" name=\"banner_image[' + language_id + '][' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
\thtml += '  <td class=\"text-right\" style=\"width: 10%;\"><input type=\"text\" name=\"banner_image[' + language_id + '][' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 111
        yield ($context["entry_sort_order"] ?? null);
        yield "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row  + ', .tooltip\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 112
        yield ($context["button_remove"] ?? null);
        yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';
\t
\t\$('#images' + language_id + ' tbody').append(html);
\t
\timage_row++;
}
//--></script> 
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script> 
</div>
";
        // line 124
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
        return "design/banner_form.twig";
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
        return array (  391 => 124,  376 => 112,  372 => 111,  366 => 110,  362 => 109,  358 => 108,  351 => 104,  343 => 98,  329 => 92,  323 => 88,  320 => 87,  314 => 86,  312 => 85,  305 => 83,  295 => 82,  285 => 81,  277 => 80,  267 => 79,  264 => 78,  258 => 77,  256 => 76,  246 => 75,  241 => 74,  236 => 73,  234 => 72,  226 => 67,  222 => 66,  218 => 65,  214 => 64,  208 => 61,  203 => 60,  198 => 59,  196 => 58,  192 => 56,  175 => 54,  171 => 53,  164 => 48,  159 => 46,  154 => 45,  149 => 43,  144 => 42,  142 => 41,  136 => 38,  131 => 35,  125 => 33,  123 => 32,  117 => 31,  112 => 29,  107 => 27,  101 => 24,  97 => 22,  89 => 18,  87 => 17,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "design/banner_form.twig", "");
    }
}
