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

/* modules/views_slideshow/modules/views_slideshow_cycle/templates/views-slideshow-cycle-main-frame.html.twig */
class __TwigTemplate_26c10fbde0e2b01cbf8cb6ef4dcce858a7ff9c5c1aa5d4497287b93853994ca1 extends \Twig\Template
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
        $tags = array("for" => 17);
        $filters = array("escape" => 16);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "<div id=\"views_slideshow_cycle_teaser_section_";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["vss_id"] ?? null), 16, $this->source), "html", null, true);
        echo "\" ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 16), 16, $this->source), "html", null, true);
        echo ">
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rendered_rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rendered_row"]) {
            // line 18
            echo "   ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["rendered_row"], 18, $this->source), "html", null, true);
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rendered_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/views_slideshow/modules/views_slideshow_cycle/templates/views-slideshow-cycle-main-frame.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  73 => 18,  69 => 17,  62 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for an views slideshow cycle main frame.
 *
 * Available variables:
 * - classes: Classes to apply to the element.
 * - rendered_rows: The slides.
 * - vss_id: The slideshow id.
 *
 * @see template_preprocess_views_slideshow_cycle_main_frame()
 *
 * @ingroup vss_templates
 */
#}
<div id=\"views_slideshow_cycle_teaser_section_{{ vss_id }}\" {{ attributes.addClass(classes) }}>
  {% for rendered_row in rendered_rows %}
   {{ rendered_row }}
  {% endfor %}
</div>
", "modules/views_slideshow/modules/views_slideshow_cycle/templates/views-slideshow-cycle-main-frame.html.twig", "C:\\xampp\\htdocs\\drupal\\modules\\views_slideshow\\modules\\views_slideshow_cycle\\templates\\views-slideshow-cycle-main-frame.html.twig");
    }
}
