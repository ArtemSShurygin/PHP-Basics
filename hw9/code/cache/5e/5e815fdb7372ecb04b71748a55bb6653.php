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

/* components/site-nav.twig */
class __TwigTemplate_4b8929e2b7817b4820b7cee6baf935b6 extends Template
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
        echo "    <nav class = \"nav\">
        <a href=\"/\">Главная</a>
        <a href=\"/user\">Пользователи</a>
        <a href=\"/about\">О нас</a>
    </nav>";
    }

    public function getTemplateName()
    {
        return "components/site-nav.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/site-nav.twig", "/data/mysite.local/src/Domain/Views/components/site-nav.twig");
    }
}
