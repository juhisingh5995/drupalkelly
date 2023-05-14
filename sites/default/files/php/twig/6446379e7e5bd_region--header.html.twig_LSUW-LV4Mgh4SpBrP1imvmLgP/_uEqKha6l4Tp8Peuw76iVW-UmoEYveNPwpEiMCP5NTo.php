<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/kelly/templates/region/region--header.html.twig */
class __TwigTemplate_17b1a21e49df4abec143b07827fba682ce6d3433fb9ed4899adf9fb90a93b03c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        $context["classes"] = [0 => "region", 1 => ("region-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 18
($context["region"] ?? null), 18, $this->source)))];
        // line 21
        echo "<div class=\"header-section\">
\t<div class=\"heading-logo\">
\t\t<h1>KELLY</h1>
\t</div>
\t";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 25, $this->source), "html", null, true);
        echo "
\t<ul class=\"header-social\">
\t\t<li>
\t\t\t<a href=\"#\">
\t\t\t\t<i class=\"fab fa-facebook-square\"></i>
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"#\">
\t\t\t\t<i class=\"fab fa-twitter-square\"></i>
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"#\">
\t\t\t\t<i class=\"fab fa-linkedin\"></i>
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"#\">
\t\t\t\t<i class=\"fab fa-youtube-square\"></i>
\t\t\t</a>
\t\t</li>
\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/kelly/templates/region/region--header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 25,  42 => 21,  40 => 18,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a region.
 *
 * Available variables:
 * - content: The content for this region, typically blocks.
 * - attributes: HTML attributes for the region <div>.
 * - region: The name of the region variable as defined in the theme's
 *   .info.yml file.
 *
 * @see template_preprocess_region()
 */
#}
{%
  set classes = [
    'region',
    'region-' ~ region|clean_class,
  ]
%}
<div class=\"header-section\">
\t<div class=\"heading-logo\">
\t\t<h1>KELLY</h1>
\t</div>
\t{{ content }}
\t<ul class=\"header-social\">
\t\t<li>
\t\t\t<a href=\"#\">
\t\t\t\t<i class=\"fab fa-facebook-square\"></i>
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"#\">
\t\t\t\t<i class=\"fab fa-twitter-square\"></i>
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"#\">
\t\t\t\t<i class=\"fab fa-linkedin\"></i>
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"#\">
\t\t\t\t<i class=\"fab fa-youtube-square\"></i>
\t\t\t</a>
\t\t</li>
\t</ul>
</div>
", "themes/custom/kelly/templates/region/region--header.html.twig", "C:\\xampp\\htdocs\\drupalkelly\\themes\\custom\\kelly\\templates\\region\\region--header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16);
        static $filters = array("clean_class" => 18, "escape" => 25);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
