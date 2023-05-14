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

/* themes/custom/kelly/templates/node/node--resume--full.html.twig */
class __TwigTemplate_bf4480da1c2627dea7febb76da06ea1dff8003124bc32533abb457a8dbbdc0d0 extends \Twig\Template
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
        // line 70
        echo "<div class=\"resume-section\">
\t<div class=\"mycontainer\">
\t\t<div class=\"resume-title\">
\t\t\t";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo "
\t\t\t";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_subtitle", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "
\t\t</div>

\t\t<div class=\"resume-content\">
\t\t\t<div class=\"resume-left\">
\t\t\t\t<div class=\"resume-sumary\">
\t\t\t\t\t";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_sumary_title", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_sumary_subtitle", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_sumary_para", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_sumary_list", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"resume-edu\">
\t\t\t\t\t";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_edu_title", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_education_para", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"resume-right\">
\t\t\t\t";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_profession_title", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
        echo "
\t\t\t\t";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_professional_para", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/kelly/templates/node/node--resume--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 92,  86 => 91,  79 => 87,  75 => 86,  69 => 83,  65 => 82,  61 => 81,  57 => 80,  48 => 74,  44 => 73,  39 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: (optional) The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: (optional) Themed creation date field.
 * - author_name: (optional) Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 *
 */
#}
<div class=\"resume-section\">
\t<div class=\"mycontainer\">
\t\t<div class=\"resume-title\">
\t\t\t{{content.field_title}}
\t\t\t{{content.field_subtitle}}
\t\t</div>

\t\t<div class=\"resume-content\">
\t\t\t<div class=\"resume-left\">
\t\t\t\t<div class=\"resume-sumary\">
\t\t\t\t\t{{ content.field_sumary_title }}
\t\t\t\t\t{{ content.field_sumary_subtitle }}
\t\t\t\t\t{{ content.field_sumary_para }}
\t\t\t\t\t{{ content.field_sumary_list }}
\t\t\t\t</div>
\t\t\t\t<div class=\"resume-edu\">
\t\t\t\t\t{{ content.field_edu_title }}
\t\t\t\t\t{{ content.field_education_para }}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"resume-right\">
\t\t\t\t{{ content.field_profession_title }}
\t\t\t\t{{ content.field_professional_para }}
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "themes/custom/kelly/templates/node/node--resume--full.html.twig", "C:\\xampp\\htdocs\\drupalkelly\\themes\\custom\\kelly\\templates\\node\\node--resume--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 73);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
