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

/* modules/views_slideshow/templates/views-slideshow-controls-text-pause.html.twig */
class __TwigTemplate_46cdbcec672f0d8381f3a1bfa81479615895cdccfce999a883c1e06e65f4ad79 extends \Twig\Template
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
        $tags = array();
        $filters = array("escape" => 16);
        $functions = array();

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "<span id=\"views_slideshow_controls_text_pause_";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["vss_id"] ?? null), 16, $this->source), "html", null, true);
        echo "\" ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 16), 16, $this->source), "html", null, true);
        echo ">
  <a href=\"#\">";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["start_text"] ?? null), 17, $this->source), "html", null, true);
        echo "</a>
</span>
";
    }

    public function getTemplateName()
    {
        return "modules/views_slideshow/templates/views-slideshow-controls-text-pause.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 17,  62 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a views slideshow text pause control.
 *
 * Available variables:
 * - classes: Classes to apply to the control.
 * - start_text: Text to display while playing.
 * - vss_id: The slideshow's id.
 *
 * @see template_preprocess_views_slideshow_controls_text_pause()
 *
 * @ingroup vss_templates
 */
#}
<span id=\"views_slideshow_controls_text_pause_{{ vss_id }}\" {{ attributes.addClass(classes) }}>
  <a href=\"#\">{{ start_text }}</a>
</span>
", "modules/views_slideshow/templates/views-slideshow-controls-text-pause.html.twig", "C:\\xampp\\htdocs\\drupal\\modules\\views_slideshow\\templates\\views-slideshow-controls-text-pause.html.twig");
    }
}
