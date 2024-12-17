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
        <script
        src=\"https://code.jquery.com/jquery-3.7.0.min.js\"
        integrity=\"sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=\"
        crossorigin=\"anonymous\"></script>
    </head>
    <body>
        <div class = \"container\">
            <div class = \"top\">
                ";
        // line 14
        $this->loadTemplate("components/site-header.twig", "main.twig", 14)->display($context);
        // line 15
        echo "                ";
        $this->loadTemplate("components/site-nav.twig", "main.twig", 15)->display($context);
        // line 16
        echo "                ";
        $this->loadTemplate("auth-template.twig", "main.twig", 16)->display($context);
        // line 17
        echo "            </div>
        </div>

        <div class = \"container\">
            <div class = \"main\">
                ";
        // line 22
        $this->loadTemplate(($context["content_template_name"] ?? null), "main.twig", 22)->display($context);
        // line 23
        echo "                ";
        $this->loadTemplate("components/site-sidebar.twig", "main.twig", 23)->display($context);
        // line 24
        echo "            </div>
        </div>

        ";
        // line 27
        $this->loadTemplate("components/site-footer.twig", "main.twig", 27)->display($context);
        // line 28
        echo "
        <script>
            function deleteUser(userId) {
                \$.ajax({
                    method: 'POST',
                    url: \"/user/delete/\",
                    data: { user_id: userId}
                });
                document.querySelector(`#user\${userId}`).remove();
            }
        </script>
    </body>
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
        return array (  82 => 28,  80 => 27,  75 => 24,  72 => 23,  70 => 22,  63 => 17,  60 => 16,  57 => 15,  55 => 14,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main.twig", "/data/mysite.local/src/Domain/Views/main.twig");
    }
}
