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

/* themes/custom/kelly/templates/node/node--about.html.twig */
class __TwigTemplate_66c463779459abcdb60f39b3a47ab2e60386cb5503340a7dc1dbfd39265d2d6b extends \Twig\Template
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
        // line 71
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 73
($context["node"] ?? null), "bundle", [], "any", false, false, true, 73), 73, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 74
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 74)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 75)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 76
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 76)) ? ("node--unpublished") : ("")), 5 => ((        // line 77
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 77, $this->source)))) : (""))];
        // line 106
        echo "
<div class=\"about-section\">
\t<div class=\"mycontainer\">
\t\t<div class=\"section-title\">
\t\t\t";
        // line 110
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_subtitle", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
        echo "
\t\t\t";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_about_description", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
        echo "
\t\t</div>
\t\t<div class=\"about-row\">
\t\t\t<div class=\"about-img\">
\t\t\t\t";
        // line 115
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"about-content\">
\t\t\t\t";
        // line 118
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
        echo "
\t\t\t\t";
        // line 119
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title_description", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
        echo "
\t\t\t\t<div class=\"about-detail\">
\t\t\t\t\t<div class=\"about-detail-left\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<strong>Birthday:</strong>
\t\t\t\t\t\t\t\t1 May 1995</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<strong>Website:</strong>
\t\t\t\t\t\t\t\twww.youtube.com</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<strong>Phone:</strong>
\t\t\t\t\t\t\t\t+123 566 1995</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<strong>City:</strong>City : New york ,USA</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"about-detail-right\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<strong>Age:</strong>30</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<strong>Degree:</strong>
\t\t\t\t\t\t\t\tMaster</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<strong>Email:</strong>
\t\t\t\t\t\t\t\tjwwe@gmail.com</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<strong>Freelance:</strong>Available</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 151
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"skills-section\">
\t<div class=\"mycontainer\">
\t\t<div class=\"skills-title\">
\t\t\t";
        // line 159
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_skill_subtitle", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
        echo "
\t\t\t";
        // line 160
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_skill_title", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
        echo "
\t\t</div>
\t\t<div class=\"skills-content\">
\t\t\t";
        // line 163
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_skill_rating", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
        echo "
\t\t</div>
\t</div>
</div>
<div class=\"facts-section\">
\t<div class=\"mycontainer\">
\t\t<div class=\"facts-title\">
\t\t\t";
        // line 170
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_facts_subtitle", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
        echo "
\t\t\t";
        // line 171
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_facts_title", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
        echo "
\t\t</div>
\t\t<div class=\"facts-content\">
\t\t\t";
        // line 174
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_facts_counter", [], "any", false, false, true, 174), 174, $this->source), "html", null, true);
        echo "
\t\t</div>
\t</div>
</div>
<div class=\"testimonials-section\">
\t<div class=\"mycontainer\">
\t\t<div class=\"testimonials-title\">
\t\t\t";
        // line 181
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_testimonial_subtitle", [], "any", false, false, true, 181), 181, $this->source), "html", null, true);
        echo "
\t\t\t";
        // line 182
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_testimonial_title", [], "any", false, false, true, 182), 182, $this->source), "html", null, true);
        echo "
\t\t</div>
\t\t<div class=\"testimonials-content\">
\t\t\t";
        // line 185
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_testimonial_item", [], "any", false, false, true, 185), 185, $this->source), "html", null, true);
        echo "
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/kelly/templates/node/node--about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 185,  163 => 182,  159 => 181,  149 => 174,  143 => 171,  139 => 170,  129 => 163,  123 => 160,  119 => 159,  108 => 151,  73 => 119,  69 => 118,  63 => 115,  56 => 111,  52 => 110,  46 => 106,  44 => 77,  43 => 76,  42 => 75,  41 => 74,  40 => 73,  39 => 71,);
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
{%
  set classes = [
    'node',
    'node--type-' ~ node.bundle|clean_class,
    node.isPromoted() ? 'node--promoted',
    node.isSticky() ? 'node--sticky',
    not node.isPublished() ? 'node--unpublished',
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
  ]
%}
{# {{ attach_library('claro/classy.node') }}
<article{{ attributes.addClass(classes) }}>

  {{ title_prefix }}
  {% if label and not page %}
    <h2{{ title_attributes }}>
      <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
    </h2>
  {% endif %}
  {{ title_suffix }}

  {% if display_submitted %}
    <footer class=\"node__meta\">
      {{ author_picture }}
      <div{{ author_attributes.addClass('node__submitted') }}>
        {% trans %}Submitted by {{ author_name }} on {{ date }}{% endtrans %}
        {{ metadata }}
      </div>
    </footer>
  {% endif %}

  <div{{ content_attributes.addClass('node__content') }}>
    {{ content }}
  </div>

</article> #}

<div class=\"about-section\">
\t<div class=\"mycontainer\">
\t\t<div class=\"section-title\">
\t\t\t{{content.field_subtitle}}
\t\t\t{{content.field_about_description}}
\t\t</div>
\t\t<div class=\"about-row\">
\t\t\t<div class=\"about-img\">
\t\t\t\t{{ content.field_image }}
\t\t\t</div>
\t\t\t<div class=\"about-content\">
\t\t\t\t{{ content.field_title }}
\t\t\t\t{{ content.field_title_description }}
\t\t\t\t<div class=\"about-detail\">
\t\t\t\t\t<div class=\"about-detail-left\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<strong>Birthday:</strong>
\t\t\t\t\t\t\t\t1 May 1995</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<strong>Website:</strong>
\t\t\t\t\t\t\t\twww.youtube.com</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<strong>Phone:</strong>
\t\t\t\t\t\t\t\t+123 566 1995</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<strong>City:</strong>City : New york ,USA</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"about-detail-right\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<strong>Age:</strong>30</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<strong>Degree:</strong>
\t\t\t\t\t\t\t\tMaster</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<strong>Email:</strong>
\t\t\t\t\t\t\t\tjwwe@gmail.com</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<strong>Freelance:</strong>Available</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{{ content.field_description }}
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"skills-section\">
\t<div class=\"mycontainer\">
\t\t<div class=\"skills-title\">
\t\t\t{{content.field_skill_subtitle}}
\t\t\t{{content.field_skill_title}}
\t\t</div>
\t\t<div class=\"skills-content\">
\t\t\t{{ content.field_skill_rating }}
\t\t</div>
\t</div>
</div>
<div class=\"facts-section\">
\t<div class=\"mycontainer\">
\t\t<div class=\"facts-title\">
\t\t\t{{content.field_facts_subtitle}}
\t\t\t{{content.field_facts_title}}
\t\t</div>
\t\t<div class=\"facts-content\">
\t\t\t{{ content.field_facts_counter }}
\t\t</div>
\t</div>
</div>
<div class=\"testimonials-section\">
\t<div class=\"mycontainer\">
\t\t<div class=\"testimonials-title\">
\t\t\t{{content.field_testimonial_subtitle}}
\t\t\t{{content.\tfield_testimonial_title }}
\t\t</div>
\t\t<div class=\"testimonials-content\">
\t\t\t{{ content.field_testimonial_item }}
\t\t</div>
\t</div>
</div>
", "themes/custom/kelly/templates/node/node--about.html.twig", "C:\\xampp\\htdocs\\drupalkelly\\themes\\custom\\kelly\\templates\\node\\node--about.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 71);
        static $filters = array("clean_class" => 73, "escape" => 110);
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
