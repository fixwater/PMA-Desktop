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

/* table/structure/move_columns_dialog.twig */
class __TwigTemplate_5c5e6631ead2542bb32e52c6743c879df5dbe665c41da1265dbee04ba6c0a1d2 extends \Twig\Template
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
        echo "<div id=\"move_columns_dialog\" class=\"hide\" title=\"";
        echo _gettext("Move columns");
        echo "\">
    <p>";
        // line 2
        echo _gettext("Move the columns by dragging them up and down.");
        echo "</p>
    <form action=\"tbl_structure.php\">
        <div>
            ";
        // line 5
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
            <ul></ul>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "table/structure/move_columns_dialog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "table/structure/move_columns_dialog.twig", "D:\\UPUPW_ANK_W64\\Modules\\PHPX\\PHP71-pma\\templates\\table\\structure\\move_columns_dialog.twig");
    }
}
