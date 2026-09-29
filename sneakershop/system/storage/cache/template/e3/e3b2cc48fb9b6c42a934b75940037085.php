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

/* tool/upload.twig */
class __TwigTemplate_5c805cc1622dfee090c81704753533fa extends Template
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
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_filter"] ?? null);
        yield "\" onclick=\"\$('#filter-upload').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        yield ($context["button_delete"] ?? null);
        yield "\" class=\"btn btn-danger\" onclick=\"confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "') ? \$('#form-upload').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 9
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            yield "        <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
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
        yield "    ";
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        yield "    <div class=\"row\">
      <div id=\"filter-upload\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 31
        yield ($context["text_filter"] ?? null);
        yield "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 35
        yield ($context["entry_name"] ?? null);
        yield "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 36
        yield ($context["filter_name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-added\">";
        // line 39
        yield ($context["entry_date_added"] ?? null);
        yield "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 41
        yield ($context["filter_date_added"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_added"] ?? null);
        yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 47
        yield ($context["button_filter"] ?? null);
        yield "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 55
        yield ($context["text_list"] ?? null);
        yield "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 58
        yield ($context["delete"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-upload\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-left\">";
        // line 64
        if ((($context["sort"] ?? null) == "name")) {
            yield " <a href=\"";
            yield ($context["sort_name"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_name"] ?? null);
            yield "</a> ";
        } else {
            yield " <a href=\"";
            yield ($context["sort_name"] ?? null);
            yield "\">";
            yield ($context["column_name"] ?? null);
            yield "</a> ";
        }
        yield "</td>
                      <td class=\"text-left\">";
        // line 65
        if ((($context["sort"] ?? null) == "filename")) {
            yield " <a href=\"";
            yield ($context["sort_filename"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_filename"] ?? null);
            yield "</a> ";
        } else {
            yield " <a href=\"";
            yield ($context["sort_filename"] ?? null);
            yield "\">";
            yield ($context["column_filename"] ?? null);
            yield "</a> ";
        }
        yield "</td>
                      <td class=\"text-right\">";
        // line 66
        if ((($context["sort"] ?? null) == "date_added")) {
            yield " <a href=\"";
            yield ($context["sort_date_added"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_date_added"] ?? null);
            yield "</a> ";
        } else {
            yield " <a href=\"";
            yield ($context["sort_date_added"] ?? null);
            yield "\">";
            yield ($context["column_date_added"] ?? null);
            yield "</a> ";
        }
        yield "</td>
                      <td class=\"text-right\">";
        // line 67
        yield ($context["column_action"] ?? null);
        yield "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 72
        if ((($tmp = ($context["uploads"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 73
            yield "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["uploads"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["upload"]) {
                // line 74
                yield "                  <tr>
                    <td class=\"text-center\">";
                // line 75
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["upload"], "upload_id", [], "any", false, false, false, 75), ($context["selected"] ?? null))) {
                    // line 76
                    yield "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["upload"], "upload_id", [], "any", false, false, false, 76);
                    yield "\" checked=\"checked\" />
                      ";
                } else {
                    // line 78
                    yield "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["upload"], "upload_id", [], "any", false, false, false, 78);
                    yield "\" />
                      ";
                }
                // line 79
                yield "</td>
                    <td class=\"text-left\">";
                // line 80
                yield CoreExtension::getAttribute($this->env, $this->source, $context["upload"], "name", [], "any", false, false, false, 80);
                yield "</td>
                    <td class=\"text-left\">";
                // line 81
                yield CoreExtension::getAttribute($this->env, $this->source, $context["upload"], "filename", [], "any", false, false, false, 81);
                yield "</td>
                    <td class=\"text-right\">";
                // line 82
                yield CoreExtension::getAttribute($this->env, $this->source, $context["upload"], "date_added", [], "any", false, false, false, 82);
                yield "</td>
                    <td class=\"text-right\"><a href=\"";
                // line 83
                yield CoreExtension::getAttribute($this->env, $this->source, $context["upload"], "download", [], "any", false, false, false, 83);
                yield "\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_download"] ?? null);
                yield "\" class=\"btn btn-info\"><i class=\"fa fa-download\"></i></a></td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['upload'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            yield "                  ";
        } else {
            // line 87
            yield "                  <tr>
                    <td class=\"text-center\" colspan=\"5\">";
            // line 88
            yield ($context["text_no_results"] ?? null);
            yield "</td>
                  </tr>
                  ";
        }
        // line 91
        yield "                    </tbody>
                  
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 97
        yield ($context["pagination"] ?? null);
        yield "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 98
        yield ($context["results"] ?? null);
        yield "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\turl = 'index.php?route=tool/upload&user_token=";
        // line 107
        yield ($context["user_token"] ?? null);
        yield "';
\t
\tvar filter_name = \$('input[name=\\'filter_name\\']').val();
\t
\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}
\t
\tvar filter_filename = \$('input[name=\\'filter_filename\\']').val();
\t
\tif (filter_filename) {
\t\turl += '&filter_filename=' + encodeURIComponent(filter_filename);
\t}
\t
\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
\t
\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\tlocation = url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 132
        yield ($context["datepicker"] ?? null);
        yield "',
\tpickTime: false
});
//--></script></div>
";
        // line 136
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "tool/upload.twig";
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
        return array (  358 => 136,  351 => 132,  323 => 107,  311 => 98,  307 => 97,  299 => 91,  293 => 88,  290 => 87,  287 => 86,  276 => 83,  272 => 82,  268 => 81,  264 => 80,  261 => 79,  255 => 78,  249 => 76,  247 => 75,  244 => 74,  239 => 73,  237 => 72,  229 => 67,  211 => 66,  193 => 65,  175 => 64,  166 => 58,  160 => 55,  149 => 47,  138 => 41,  133 => 39,  125 => 36,  121 => 35,  114 => 31,  108 => 27,  100 => 23,  97 => 22,  89 => 18,  87 => 17,  82 => 14,  71 => 12,  67 => 11,  62 => 9,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "tool/upload.twig", "");
    }
}
