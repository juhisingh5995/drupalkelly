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

/* themes/custom/kelly/templates/view/views-view--portfolio-detail--page_1.html.twig */
class __TwigTemplate_866396afd72033ba77e2a6492fc55c12a671bab5a8174c26cc259086ad5aab0a extends \Twig\Template
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
        // line 33
        echo "
<div class=\"portfolio-img-section\">
<div class=\"mycontainer\">
\t";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 36, $this->source), "html", null, true);
        echo "
\t";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 37, $this->source), "html", null, true);
        echo "
\t";
        // line 38
        if (($context["rows"] ?? null)) {
            // line 39
            echo "\t\t<div class=\"view-content\">
\t\t\t";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 40, $this->source), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 43
        echo "
\t";
        // line 44
        if (($context["pager"] ?? null)) {
            // line 45
            echo "\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 45, $this->source), "html", null, true);
            echo "
\t";
        }
        // line 47
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/kelly/templates/view/views-view--portfolio-detail--page_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 47,  68 => 45,  66 => 44,  63 => 43,  57 => 40,  54 => 39,  52 => 38,  48 => 37,  44 => 36,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a main view template.
 *
 * Available variables:
 * - attributes: Remaining HTML attributes for the element.
 * - css_name: A CSS-safe version of the view name.
 * - css_class: The user-specified classes names, if any.
 * - header: The optional header.
 * - footer: The optional footer.
 * - rows: The results of the view query, if any.
 * - empty: The content to display if there are no rows.
 * - pager: The optional pager next/prev links to display.
 * - exposed: Exposed widget form/info to display.
 * - feed_icons: Optional feed icons to display.
 * - more: An optional link to the next page of results.
 * - title: Title of the view, only used when displaying in the admin preview.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the view title.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the view title.
 * - attachment_before: An optional attachment view to be displayed before the
 *   view content.
 * - attachment_after: An optional attachment view to be displayed after the
 *   view content.
 * - dom_id: Unique id for every view being printed to give unique class for
 *   JavaScript.
 *
 * @see template_preprocess_views_view()
 */
#}

<div class=\"portfolio-img-section\">
<div class=\"mycontainer\">
\t{{ title_prefix }}
\t{{ title_suffix }}
\t{% if rows %}
\t\t<div class=\"view-content\">
\t\t\t{{ rows }}
\t\t</div>
\t{% endif %}

\t{% if pager %}
\t\t{{ pager }}
\t{% endif %}
</div>
</div>
", "themes/custom/kelly/templates/view/views-view--portfolio-detail--page_1.html.twig", "C:\\xampp\\htdocs\\drupalkelly\\themes\\custom\\kelly\\templates\\view\\views-view--portfolio-detail--page_1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 38);
        static $filters = array("escape" => 36);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
