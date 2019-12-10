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

/* wild/season.html.twig */
class __TwigTemplate_b57fa1e141a176ae20d547270bb6b55fa2ad4dc1f8fc61d9d65fc55c0e67f613 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wild/season.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wild/season.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "wild/season.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<h1>
    ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), "html", null, true);
        echo " - Season ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 12, $this->source); })()), "number", [], "any", false, false, false, 12), "html", null, true);
        echo "
</h1>
<p>
    ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 15, $this->source); })()), "description", [], "any", false, false, false, 15), "html", null, true);
        echo "
</p>
<h2>
    Episodes list:
</h2>
<ul>
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["episodes"]) || array_key_exists("episodes", $context) ? $context["episodes"] : (function () { throw new RuntimeError('Variable "episodes" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
            // line 22
            echo "        <li>
            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wild_show_episode", ["id" => twig_get_attribute($this->env, $this->source, $context["episode"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\">
                <b>
                    ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["episode"], "number", [], "any", false, false, false, 25), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["episode"], "title", [], "any", false, false, false, 25), "html", null, true);
            echo "
                </b>
            </a>
            <p>
                ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["episode"], "synopsis", [], "any", false, false, false, 29), "html", null, true);
            echo "
            </p>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
</ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "wild/season.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  109 => 29,  100 => 25,  95 => 23,  92 => 22,  88 => 21,  79 => 15,  71 => 12,  68 => 11,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
{#    <p> Saison {{ season.number }} </p>
    {% for episode in episodes %}
       <h1>
            <a href=\"{{ path('wild_show_program', {'programName': hyphenizedTitles[loop.index - 1] }) }}\">
                {{ episode.title }}
            </a>
        </h1>#}
<h1>
    {{ program.title }} - Season {{ season.number }}
</h1>
<p>
    {{ season.description }}
</p>
<h2>
    Episodes list:
</h2>
<ul>
    {% for episode in episodes %}
        <li>
            <a href=\"{{ path('wild_show_episode', {id: episode.id}) }}\">
                <b>
                    {{ episode.number }} / {{ episode.title }}
                </b>
            </a>
            <p>
                {{ episode.synopsis }}
            </p>
        </li>
    {% endfor %}

</ul>
{% endblock %}
", "wild/season.html.twig", "/home/sebastien/Documents/Wild_Code_School/Exercices/Symfony_quete/wild-series/templates/wild/season.html.twig");
    }
}
