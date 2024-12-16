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

/* user-form-update.twig */
class __TwigTemplate_915c1371c1d37b0fd498594f803bb2b8 extends Template
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
        echo "<form action=\"/user/update\" method=\"post\">
  <p>Изменить пользователя.</p>
  <input id=\"csrf_token\" type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\">
  <input hidden id=\"user-id\" type=\"text\" name=\"user_id\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userData"] ?? null), "userId", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
  <p>
    <label for=\"user-name\">Имя:</label>
    <input id=\"user-name\" type=\"text\" name=\"name\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userData"] ?? null), "userName", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
  </p>
  <p>
    <label for=\"user-lastname\">Фамилия:</label>
    <input id=\"user-lastname\" type=\"text\" name=\"lastname\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userData"] ?? null), "userLastName", [], "any", false, false, false, 11), "html", null, true);
        echo "\">
  </p>
  <p>
    <label for=\"user-birthday\">День рождения:</label>
    <input id=\"user-birthday\" type=\"text\" name=\"birthday\" placeholder=\"ДД-ММ-ГГГГ\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userData"] ?? null), "userBirthday", [], "any", false, false, false, 15), "d-m-Y"), "html", null, true);
        echo "\">
  </p>
  <p><input type=\"submit\" value=\"Изменить\"></p>
</form>";
    }

    public function getTemplateName()
    {
        return "user-form-update.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  58 => 11,  51 => 7,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user-form-update.twig", "/data/mysite.local/src/Domain/Views/user-form-update.twig");
    }
}
