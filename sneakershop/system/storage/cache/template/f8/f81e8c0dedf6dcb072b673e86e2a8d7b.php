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

/* default/template/common/footer.twig */
class __TwigTemplate_aa88f139e2e9b2c7095f4bb1c7032848 extends Template
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
        yield "<footer class=\"sk-footer\">
  <div class=\"container sk-footer-top\">
    <div class=\"sk-footer-grid\">
      <div>
        <div class=\"sk-footer-logo\">";
        // line 5
        yield ($context["store_name"] ?? null);
        yield "</div>
        <p>";
        // line 6
        yield ($context["text_about_blurb"] ?? null);
        yield "</p>
        <div class=\"sk-social\">
          <a href=\"";
        // line 8
        yield ((array_key_exists("facebook", $context)) ? (Twig\Extension\CoreExtension::default(($context["facebook"] ?? null), "#")) : ("#"));
        yield "\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
          <a href=\"";
        // line 9
        yield ((array_key_exists("instagram", $context)) ? (Twig\Extension\CoreExtension::default(($context["instagram"] ?? null), "#")) : ("#"));
        yield "\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a>
          <a href=\"";
        // line 10
        yield ((array_key_exists("tiktok", $context)) ? (Twig\Extension\CoreExtension::default(($context["tiktok"] ?? null), "#")) : ("#"));
        yield "\" target=\"_blank\"><i class=\"fa fa-music\"></i></a>
          <a href=\"";
        // line 11
        yield ((array_key_exists("youtube", $context)) ? (Twig\Extension\CoreExtension::default(($context["youtube"] ?? null), "#")) : ("#"));
        yield "\" target=\"_blank\"><i class=\"fa fa-youtube-play\"></i></a>
        </div>
      </div>

      ";
        // line 15
        if ((($tmp = ($context["informations"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "      <div>
        <h6>";
            // line 17
            yield ($context["text_information"] ?? null);
            yield "</h6>
        <ul>
          ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 20
                yield "          <li><a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 20);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 20);
                yield "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            yield "        </ul>
      </div>
      ";
        }
        // line 25
        yield "
      <div>
        <h6>";
        // line 27
        yield ($context["text_service"] ?? null);
        yield "</h6>
        <ul>
          <li><a href=\"";
        // line 29
        yield ($context["contact"] ?? null);
        yield "\">";
        yield ($context["text_contact"] ?? null);
        yield "</a></li>
          <li><a href=\"";
        // line 30
        yield ($context["return"] ?? null);
        yield "\">";
        yield ($context["text_return"] ?? null);
        yield "</a></li>
          <li><a href=\"";
        // line 31
        yield ($context["tracking"] ?? null);
        yield "\">";
        yield ($context["text_tracking"] ?? null);
        yield "</a></li>
          <li><a href=\"";
        // line 32
        yield ($context["special"] ?? null);
        yield "\">";
        yield ($context["text_special"] ?? null);
        yield "</a></li>
          <li><a href=\"";
        // line 33
        yield ($context["sitemap"] ?? null);
        yield "\">";
        yield ($context["text_sitemap"] ?? null);
        yield "</a></li>
        </ul>
      </div>

      <div>
        <h6>";
        // line 38
        yield ($context["text_contact_heading"] ?? null);
        yield "</h6>
        <ul class=\"sk-footer-contact\">
          ";
        // line 40
        if ((($tmp = ($context["store_address"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<li><i class=\"fa fa-map-marker\"></i>";
            yield ($context["store_address"] ?? null);
            yield "</li>";
        }
        // line 41
        yield "          ";
        if ((($tmp = ($context["store_telephone"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<li><i class=\"fa fa-phone\"></i>";
            yield ($context["store_telephone"] ?? null);
            yield "</li>";
        }
        // line 42
        yield "          ";
        if ((($tmp = ($context["store_email"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<li><i class=\"fa fa-envelope-o\"></i>";
            yield ($context["store_email"] ?? null);
            yield "</li>";
        }
        // line 43
        yield "        </ul>
        <h6 style=\"margin-top:20px;\">";
        // line 44
        yield ($context["text_newsletter"] ?? null);
        yield "</h6>
        <form class=\"sk-newsletter\" action=\"";
        // line 45
        yield ($context["newsletter"] ?? null);
        yield "\" method=\"get\">
          <input type=\"email\" name=\"email\" placeholder=\"";
        // line 46
        yield ($context["text_email_placeholder"] ?? null);
        yield "\" />
          <button type=\"submit\"><i class=\"fa fa-paper-plane\"></i></button>
        </form>
      </div>
    </div>
  </div>

  <div class=\"container sk-footer-bottom\">
    <span>";
        // line 54
        yield ($context["powered"] ?? null);
        yield "</span>
    <div class=\"sk-payments\">
      <i class=\"fa fa-cc-visa\"></i><i class=\"fa fa-cc-mastercard\"></i><i class=\"fa fa-cc-paypal\"></i><i class=\"fa fa-money\"></i>
    </div>
  </div>
</footer>

";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 62
            yield "<link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 62);
            yield "\" type=\"text/css\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 62);
            yield "\" media=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 62);
            yield "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['style'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 65
            yield "<script src=\"";
            yield $context["script"];
            yield "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/template/common/footer.twig";
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
        return array (  236 => 67,  227 => 65,  223 => 64,  210 => 62,  206 => 61,  196 => 54,  185 => 46,  181 => 45,  177 => 44,  174 => 43,  167 => 42,  160 => 41,  154 => 40,  149 => 38,  139 => 33,  133 => 32,  127 => 31,  121 => 30,  115 => 29,  110 => 27,  106 => 25,  101 => 22,  90 => 20,  86 => 19,  81 => 17,  78 => 16,  76 => 15,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
