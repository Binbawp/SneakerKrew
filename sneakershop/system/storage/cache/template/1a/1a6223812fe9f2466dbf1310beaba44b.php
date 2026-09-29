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

/* tool/backup.twig */
class __TwigTemplate_f62e2576fe364160cc2df77d02e7f0eb extends Template
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
      <h1>";
        // line 5
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            yield "        <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 13
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 18
        yield "    ";
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        yield "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-exchange\"></i> ";
        // line 25
        yield ($context["heading_title"] ?? null);
        yield "</h3>
      </div>
      <div class=\"panel-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab-backup\" data-toggle=\"tab\">";
        // line 29
        yield ($context["tab_backup"] ?? null);
        yield "</a></li>
          <li><a href=\"#tab-restore\" data-toggle=\"tab\">";
        // line 30
        yield ($context["tab_restore"] ?? null);
        yield "</a></li>
        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-backup\">
            <form action=\"";
        // line 34
        yield ($context["export"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-export\" class=\"form-horizontal\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 36
        yield ($context["entry_export"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tables"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
            // line 39
            yield "                    <div class=\"checkbox\">
                      <label>
                        <input type=\"checkbox\" name=\"backup[]\" value=\"";
            // line 41
            yield $context["table"];
            yield "\" checked=\"checked\" />
                        ";
            // line 42
            yield $context["table"];
            yield "</label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['table'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield " </div>
                  <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\" class=\"btn btn-link\">";
        // line 45
        yield ($context["text_select_all"] ?? null);
        yield "</button>
                  /
                  <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\" class=\"btn btn-link\">";
        // line 47
        yield ($context["text_unselect_all"] ?? null);
        yield "</button>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-sm-10 col-sm-offset-2\">
                  <button type=\"submit\" form=\"form-export\" class=\"btn btn-default\"><i class=\"fa fa-download\"></i> ";
        // line 52
        yield ($context["button_export"] ?? null);
        yield "</button>
                </div>
              </div>
            </form>
          </div>
          <div class=\"tab-pane\" id=\"tab-restore\">
            <form class=\"form-horizontal\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 60
        yield ($context["entry_progress"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <div id=\"progress-import\" class=\"progress\">
                    <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-sm-10 col-sm-offset-2\">
                  <button type=\"button\" id=\"button-import\" class=\"btn btn-primary\"><i class=\"fa fa-upload\"></i> ";
        // line 69
        yield ($context["button_import"] ?? null);
        yield "</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-import').on('click', function() {
\t\$('#form-upload').remove();
\t
\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"import\" /></form>');
\t
\t\$('#form-upload input[name=\\'import\\']').trigger('click');
\t
\tif (typeof timer != 'undefined') {
\t\tclearInterval(timer);
\t}
\t
\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'import\\']').val() != '') {
\t\t\tclearInterval(timer);
\t
\t\t\t\$('#progress-import .progress-bar').attr('aria-valuenow', 0);
\t\t\t\$('#progress-import .progress-bar').css('width', '0%');
\t
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/backup/import&user_token=";
        // line 98
        yield ($context["user_token"] ?? null);
        yield "',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#button-import').button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('#button-import').button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.alert-dismissible').remove();
\t\t\t\t\t
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tif (json['total']) {
\t\t\t\t\t\t\$('#progress-import .progress-bar').attr('aria-valuenow', json['total']);
\t\t\t\t\t\t\$('#progress-import .progress-bar').css('width', json['total'] + '%');
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tif (json['next']) {
\t\t\t\t\t\tnext(json['next']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});

function next(url) {
\t\$.ajax({
\t\turl: url,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();
\t\t\t
\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t\t
\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t\t
\t\t\tif (json['total']) {
\t\t\t\t\$('#progress-import .progress-bar').attr('aria-valuenow', json['total']);
\t\t\t\t\$('#progress-import .progress-bar').css('width', json['total'] + '%');
\t\t\t}
\t\t\t
\t\t\tif (json['next']) {
\t\t\t\tnext(json['next']);
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}
  //--></script> 
</div>
";
        // line 170
        yield ($context["footer"] ?? null);
        yield " ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "tool/backup.twig";
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
        return array (  295 => 170,  220 => 98,  188 => 69,  176 => 60,  165 => 52,  157 => 47,  152 => 45,  149 => 44,  140 => 42,  136 => 41,  132 => 39,  128 => 38,  123 => 36,  118 => 34,  111 => 30,  107 => 29,  100 => 25,  96 => 23,  88 => 19,  85 => 18,  77 => 14,  75 => 13,  70 => 10,  59 => 8,  55 => 7,  50 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "tool/backup.twig", "");
    }
}
