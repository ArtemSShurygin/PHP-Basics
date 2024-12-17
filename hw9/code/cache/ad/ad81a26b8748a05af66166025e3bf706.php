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

/* components/site-sidebar.twig */
class __TwigTemplate_b2eba467de7375b20ae711ba6757977e extends Template
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
        // line 1
        echo "<div class = \"sidebar\">
  <a href=\"#\">Ссылка 1</a>
  <a href=\"#\">Ссылка 2</a>
  <a href=\"#\">Ссылка 3</a>
  <a href=\"#\">Ссылка 4</a>
  <a href=\"#\">Ссылка 5</a>
  <a href=\"#\">Ссылка 6</a>
  <a href=\"#\">Ссылка 7</a>
</div>";
    }

    public function getTemplateName()
    {
        return "components/site-sidebar.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/site-sidebar.twig", "/data/mysite.local/src/Domain/Views/components/site-sidebar.twig");
    }
}
