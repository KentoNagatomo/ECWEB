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

/* admin_item.html.twig */
class __TwigTemplate_406e79a15eb75c1470b4843a378fe7f41747bc597865b6b7d63254227c19c1e5 extends \Twig\Template
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
        // line 5
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "css/style.css\" rel=\"stylesheet\">
    <title>商品一覧</title>
  </head>

  <body>
  <div id = \"wrapper\">
    <div>商品一覧</div>

    <div id=\"item_detail\">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["itemData"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 15
            echo "    <table>
      <div class=\"image\">
      <tr>
      <th>画像</th>
      <td>
        <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
            echo "images/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "image", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_name", []), "html", null, true);
            echo "\">
      </td>
      </tr>
      </div>

      <div class=\"detail\">
        <tr>
          <th>商品ID</th>
          <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_id", []), "html", null, true);
            echo "</td>
        </tr>

        <tr>
          <th>カテゴリーID</th>
          <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "ctg_id", []), "html", null, true);
            echo "</td>
        </tr>

        <tr>
          <th>商品名</th>
          <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_name", []), "html", null, true);
            echo "</td>
        </tr>

        <tr>
          <th>詳細</th>
          <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "detail", []), "html", null, true);
            echo "</td>
        </tr>

        <tr>
          <th>価格</th>
          <td>&yen;";
            // line 48
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["value"], "price", []), 0, ".", ","), "html", null, true);
            echo "</td>
        </tr>

        <tr>
          <th>登録日時</th>
          <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "regist_date", []), "html", null, true);
            echo "</td>
        </tr>
        <tr>
          <th>修正</th>
          <td><a href =\"";
            // line 57
            echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_ADMIN"), "html", null, true);
            echo "admin_item_update.php?item_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_id", []), "html", null, true);
            echo "\">修正する</td>
        </tr>
        <br><br>
      </div>
    </table>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    
      <div class=\"cart_in\">
        <input type=\"button\" name=\"back\" value=\"戻る\" onclick=\"history.back(); return false;\">
      </div>
    </div>
    </div>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "admin_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 63,  121 => 57,  114 => 53,  106 => 48,  98 => 43,  90 => 38,  82 => 33,  74 => 28,  59 => 20,  52 => 15,  48 => 14,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin_item.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DT/ECweb/templates/admin_item.html.twig");
    }
}
