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

/* database/structure/search_table.twig */
class __TwigTemplate_f60e475b2b86b508cb7c4d656a3e4c2bfaabf27b13ddb5d38460cadbfa2765fd extends \Twig\Template
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
        echo "<a href=\"tbl_select.php";
        echo ($context["tbl_url_query"] ?? null);
        echo "\">
    ";
        // line 2
        echo ($context["title"] ?? null);
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "database/structure/search_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "database/structure/search_table.twig", "D:\\UPUPW_ANK_W64\\Modules\\PHPX\\PHP71-pma\\templates\\database\\structure\\search_table.twig");
    }
}
