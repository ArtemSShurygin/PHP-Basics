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

/* user-index.twig */
class __TwigTemplate_cfd61cb0b4a86367897caeb62be5e508 extends Template
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
        echo "<div>
    <p>Список пользователей в хранилище</p>

    <ul id=\"navigation\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 6
            echo "            <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "userName", [], "any", false, false, false, 6), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "userLastName", [], "any", false, false, false, 6), "html", null, true);
            echo ". День рождения: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "userBirthday", [], "any", false, false, false, 6), "d-m-Y"), "html", null, true);
            echo ".
                ";
            // line 7
            if (($context["isAdmin"] ?? null)) {
                // line 8
                echo "                    <a href=\"/user/updateform/?user_id=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "userId", [], "any", false, false, false, 8), "html", null, true);
                echo "&user_name=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "userName", [], "any", false, false, false, 8), "html", null, true);
                echo "&user_last_name=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "userLastName", [], "any", false, false, false, 8), "html", null, true);
                echo "&user_birthday=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "userBirthday", [], "any", false, false, false, 8), "html", null, true);
                echo "\">Изменить</a>  /
                    <a href=\"/user/delete/?user_id=";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "userId", [], "any", false, false, false, 9), "html", null, true);
                echo "\">Удалить</a>
                ";
            }
            // line 11
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </ul>
    ";
        // line 14
        if (($context["isAdmin"] ?? null)) {
            // line 15
            echo "        <a href=\"/user/edit\">Добавить</a>
    ";
        }
        // line 17
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "user-index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 17,  86 => 15,  84 => 14,  81 => 13,  74 => 11,  69 => 9,  58 => 8,  56 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user-index.twig", "/data/mysite.local/src/Domain/Views/user-index.twig");
    }
}
