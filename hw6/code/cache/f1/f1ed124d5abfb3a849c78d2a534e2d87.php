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

/* main.twig */
class __TwigTemplate_e5428d68791c18ab97ff5c5a8f0d1a77 extends Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
        <link rel=\"stylesheet\" href=\"/styles/style.css\">
    </head>
    <body>
        <div class = \"container\">
            <div class = \"top\">
                ";
        // line 10
        $this->loadTemplate("components/site-header.twig", "main.twig", 10)->display($context);
        // line 11
        echo "                ";
        $this->loadTemplate("components/site-nav.twig", "main.twig", 11)->display($context);
        // line 12
        echo "            </div>
        </div>

        <div class = \"container\">
            <div class = \"main\">
                ";
        // line 17
        $this->loadTemplate(($context["content_template_name"] ?? null), "main.twig", 17)->display($context);
        // line 18
        echo "                ";
        $this->loadTemplate("components/site-sidebar.twig", "main.twig", 18)->display($context);
        // line 19
        echo "            </div>
        </div>

        ";
        // line 22
        $this->loadTemplate("components/site-footer.twig", "main.twig", 22)->display($context);
        // line 23
        echo "    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  73 => 22,  68 => 19,  65 => 18,  63 => 17,  56 => 12,  53 => 11,  51 => 10,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main.twig", "/data/mysite.local/src/Domain/Views/main.twig");
    }
}
