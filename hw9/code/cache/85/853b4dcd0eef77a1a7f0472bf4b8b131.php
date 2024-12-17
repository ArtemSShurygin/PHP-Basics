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

/* auth-template.twig */
class __TwigTemplate_0289be8daa780122a4f34a48e020f1d1 extends Template
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
        echo "<div class = \"login\" id=\"header\">
    ";
        // line 2
        if ( !($context["user_authorized"] ?? null)) {
            // line 3
            echo "        <p><a href=\"/user/auth/\">Вход в систему</a></p>
    ";
        } else {
            // line 5
            echo "        <p>Добро пожаловать на сайт, ";
            echo twig_escape_filter($this->env, ($context["user_name"] ?? null), "html", null, true);
            echo "!</p>
        <p><a href=\"/user/logout/\">Выйти из системы</a></p>
    ";
        }
        // line 8
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "auth-template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 8,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "auth-template.twig", "/data/mysite.local/src/Domain/Views/auth-template.twig");
    }
}
