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

/* dropdown.twig */
class __TwigTemplate_90cd7fb177dc8eb1c389334f7e4d79839ad4442022a637faf342e7237c714bf7 extends \Twig\Template
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
        echo "<select name=\"";
        echo twig_escape_filter($this->env, ($context["select_name"] ?? null), "html", null, true);
        echo "\"";
        if ( !twig_test_empty(($context["id"] ?? null))) {
            echo " id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 2
        if ( !twig_test_empty(($context["class"] ?? null))) {
            echo " class=\"";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
";
        // line 3
        if ( !twig_test_empty(($context["placeholder"] ?? null))) {
            // line 4
            echo "    <option value=\"\" disabled=\"disabled\"";
            // line 5
            if ( !($context["selected"] ?? null)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ($context["placeholder"] ?? null), "html", null, true);
            echo "</option>
";
        }
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["result_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 8
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "value", [], "array"), "html", null, true);
            echo "\"";
            // line 9
            echo (($this->getAttribute($context["option"], "selected", [], "array")) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "label", [], "array"), "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</select>
";
    }

    public function getTemplateName()
    {
        return "dropdown.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 11,  68 => 9,  64 => 8,  60 => 7,  51 => 5,  49 => 4,  47 => 3,  39 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "dropdown.twig", "D:\\UPUPW_ANK_W64\\Modules\\PHPX\\PHP71-pma\\templates\\dropdown.twig");
    }
}
