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

/* partials/_offre_item.html.twig */
class __TwigTemplate_6e5b47f65e5d63f92440c8352caf4c66 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_offre_item.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_offre_item.html.twig"));

        // line 1
        echo "<div style=\"background: #fff; border-radius: 4px; margin: 20px auto; padding: 20px; position: relative; box-shadow: 2px 2px 5px rgba(0,0,0,0.05);\">
    <h4 style=\"margin: 0 0 10px 0; font-size: 1.2em; width: 300px; color: var(--primary);\">";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 2, $this->source); })()), "title", [], "any", false, false, false, 2), "html", null, true);
        echo "</h4>
    <p style=\"margin: 0; font-size: 0.9em; color: #555;\"><strong>Exp : </strong>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 3, $this->source); })()), "experience", [], "any", false, false, false, 3), "html", null, true);
        echo "</p>
    <p style=\"margin: 0; font-size: 0.9em; color: #555;\"><strong>Description : </strong>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 4, $this->source); })()), "description", [], "any", false, false, false, 4), "html", null, true);
        echo "</p>
    <a style=\"position: absolute;
  top: 20px;
  right: 20px;
  cursor: pointer;
  background: #f1f1f1;
  padding: 6px;
  border-radius: 50%;
  color: #333;\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\">Delete</a>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/_offre_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div style=\"background: #fff; border-radius: 4px; margin: 20px auto; padding: 20px; position: relative; box-shadow: 2px 2px 5px rgba(0,0,0,0.05);\">
    <h4 style=\"margin: 0 0 10px 0; font-size: 1.2em; width: 300px; color: var(--primary);\">{{offre.title}}</h4>
    <p style=\"margin: 0; font-size: 0.9em; color: #555;\"><strong>Exp : </strong>{{offre.experience}}</p>
    <p style=\"margin: 0; font-size: 0.9em; color: #555;\"><strong>Description : </strong>{{offre.description}}</p>
    <a style=\"position: absolute;
  top: 20px;
  right: 20px;
  cursor: pointer;
  background: #f1f1f1;
  padding: 6px;
  border-radius: 50%;
  color: #333;\" href=\"{{ url('app_delete', {'id': offre.id}) }}\">Delete</a>
</div>", "partials/_offre_item.html.twig", "C:\\Users\\hassa\\OneDrive\\Bureau\\symfony_learn\\templates\\partials\\_offre_item.html.twig");
    }
}
