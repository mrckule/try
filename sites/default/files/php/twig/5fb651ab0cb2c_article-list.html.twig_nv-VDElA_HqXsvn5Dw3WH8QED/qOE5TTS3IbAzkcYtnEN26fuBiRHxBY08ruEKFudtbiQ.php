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

/* modules/custom/templates/article-list.html.twig */
class __TwigTemplate_4841c1a855989baabf90aaa9fc800769eea75e68b340e1dcba73c103b06a1982 extends \Twig\Template
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
        $tags = array("for" => 5);
        $filters = array("escape" => 1, "raw" => 9);
        $functions = array("file_url" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'raw'],
                ['file_url']
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
        // line 1
        echo "<h4>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 1, $this->source), "html", null, true);
        echo " </h4>
";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nodes"] ?? null), 2, $this->source), "html", null, true);
        echo "
";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 3, $this->source), "html", null, true);
        echo "
<ul>
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nodes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 6
            echo "

  <li>";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, true, 8), "value", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "</li>
  <li>";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "body", [], "any", false, false, true, 9), "value", [], "any", false, false, true, 9), 9, $this->source));
            echo "</li>
  <li>";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "field_movie_type", [], "any", false, false, true, 10), "entity", [], "any", false, false, true, 10), "name", [], "any", false, false, true, 10), "value", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "</li>
  <li><img src=\"";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "field_img", [], "any", false, false, true, 11), "entity", [], "any", false, false, true, 11), "fileUri", [], "any", false, false, true, 11), 11, $this->source)]), "html", null, true);
            echo "\" alt=\"some text\"></li>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</ul>

";
    }

    public function getTemplateName()
    {
        return "modules/custom/templates/article-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 15,  96 => 11,  92 => 10,  88 => 9,  84 => 8,  80 => 6,  76 => 5,  71 => 3,  67 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h4>{{ title }} </h4>
{{ nodes }}
{{ pager }}
<ul>
{% for article in nodes %}


  <li>{{ article.title.value }}</li>
  <li>{{ article.body.value|raw }}</li>
  <li>{{ article.field_movie_type.entity.name.value }}</li>
  <li><img src=\"{{ file_url(article.field_img.entity.fileUri) }}\" alt=\"some text\"></li>


{% endfor %}
</ul>

", "modules/custom/templates/article-list.html.twig", "C:\\xampp\\htdocs\\drupal\\modules\\custom\\templates\\article-list.html.twig");
    }
}
