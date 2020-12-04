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

/* category_menu.html.twig */
class __TwigTemplate_3a9fef3dcb123bfa9b3ed18e28cf60b3ec43f888054ebfe5f2a38ee158ff97bf extends \Twig\Template
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
        echo "
<html lang=\"ja\">
<meta charset =\"utf-8\">

";
        // line 6
        echo "  <div id = \"category_menu\">
    <section id = \"side_category\">
      <div>カテゴリー</div>
      <ul>
        <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
        echo "item_list.php\">全て</a></li>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cateArr"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 12
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
            echo "item_list.php?ctg_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "ctg_id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "category_name", []), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </section>
  </div>";
    }

    public function getTemplateName()
    {
        return "category_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  50 => 12,  46 => 11,  42 => 10,  36 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "category_menu.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DT/ECweb/templates/category_menu.html.twig");
    }
}
