<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* display/results/null_display.twig */
class __TwigTemplate_e26f57fe8bbb9cc600aac4774de16358f0b8e85c332af04a11aaa31f0659821c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<td ";
        echo twig_escape_filter($this->env, ($context["align"] ?? null), "html", null, true);
        echo "
    data-decimals=\"";
        // line 2
        (($this->getAttribute(($context["meta"] ?? null), "decimals", [], "any", true, true)) ? (print (twig_escape_filter($this->env, $this->getAttribute(($context["meta"] ?? null), "decimals", []), "html", null, true))) : (print ("-1")));
        echo "\"
    data-type=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["meta"] ?? null), "type", []), "html", null, true);
        echo "\"
    ";
        // line 5
        echo "    class=\"";
        echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
        echo " null\">
    <em>NULL</em>
</td>
";
    }

    public function getTemplateName()
    {
        return "display/results/null_display.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  39 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "display/results/null_display.twig", "D:\\UPUPW_ANK_W64\\Modules\\PHPX\\PHP71-pma\\templates\\display\\results\\null_display.twig");
    }
}
