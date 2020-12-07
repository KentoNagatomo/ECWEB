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

/* purchase_history.html.twig */
class __TwigTemplate_6b49161838abe7459d0fba40c490f67c98ebe0ab0ee4744552dac2d17f22ea15 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>

<head>
  <meta charset=\"utf-8\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "css/style.css\" rel=\"stylesheet\">
</head>

<body>
<header>
  ";
        // line 11
        $this->loadTemplate("header_login_top.html.twig", "purchase_history.html.twig", 11)->display($context);
        // line 12
        echo "</header>

<div class = \"page_body\">
  <div id=\"wrapper\">
    <div>
      <p>購入履歴</p>
      <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
        echo "mypage.php\">マイページへ戻る</a>
    </div>

  <div = \"purcase_list\">
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dataArr"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 23
            echo "    <div class=\"item\">
      <ul>
        <li class=\"image\"><img class = \"detail_image\" src=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
            echo "images/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "image", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_name", []), "html", null, true);
            echo "\"></li>
        <li class=\"name\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_name", []), "html", null, true);
            echo "</li>
        <li class=\"price\">購入日時：";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "regist_date", []), "html", null, true);
            echo "</li>
        <li class=\"price\">購入ユニット：";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "purchase_unit", []), "html", null, true);
            echo "</li>
        <li class=\"price\">&yen;";
            // line 29
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["value"], "price", []), 0, ".", ","), "html", null, true);
            echo " × ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "quantity", []), "html", null, true);
            echo "個　　小計 &yen;";
            echo twig_escape_filter($this->env, ($this->getAttribute($context["value"], "price", []) * twig_number_format_filter($this->env, $this->getAttribute($context["value"], "quantity", []), 0, ".", ",")), "html", null, true);
            echo "</li>
        <li class=\"price\"><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
            echo "detail_item.php?item_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_id", []), "html", null, true);
            echo "\" >詳細</a></li>
      </ul>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "  </div>
  </form>
</div>
</div>

<div>
  ";
        // line 40
        $this->loadTemplate("footer.html.twig", "purchase_history.html.twig", 40)->display($context);
        // line 41
        echo "<div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "purchase_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 41,  118 => 40,  110 => 34,  98 => 30,  90 => 29,  86 => 28,  82 => 27,  78 => 26,  70 => 25,  66 => 23,  62 => 22,  55 => 18,  47 => 12,  45 => 11,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "purchase_history.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DT/ECweb/templates/purchase_history.html.twig");
    }
}
