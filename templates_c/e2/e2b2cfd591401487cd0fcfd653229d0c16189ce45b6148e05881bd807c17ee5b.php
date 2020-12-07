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

/* item_list.html.twig */
class __TwigTemplate_d3a1b9a7fff3b39238598fa03375bf35708b196092a3afa656f051a3eb81e11e extends \Twig\Template
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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes\">
  <title>南国農園</title>
  </head>
  
  <body>
    <header>
      ";
        // line 12
        if (twig_test_empty($this->getAttribute(($context["session"] ?? null), "family_name", []))) {
            // line 13
            echo "      ";
            $this->loadTemplate("header_unlogin_top.html.twig", "item_list.html.twig", 13)->display($context);
            // line 14
            echo "      ";
        } else {
            // line 15
            echo "      ";
            $this->loadTemplate("header_login_top.html.twig", "item_list.html.twig", 15)->display($context);
            // line 16
            echo "      ";
        }
        // line 17
        echo "    </header>

  <!-- ログイン 共通部分 main_visual-->
    <div id = \"main_visual\">
      <img src = \"";
        // line 21
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "images/IMG_3052.jpeg\" alt=\"宮崎の太陽をたくさん浴びた山の幸をあなたにお届けします\">
    </div>
    
";
        // line 33
        echo "
  <!-- 非ログイン/ログイン 共通部分 lead -->
    <section id = \"lead\">
      <h2>宮崎の農作物をお届けします</h2>
      <div>宮崎県は九州の南東部に位置し、温暖な気候に恵まれた「太陽と緑の国」です。<br>
      野菜、果物、牛肉、鶏肉、お米など宮崎の自然から育まれた幸を産地より直送いたします。<br></div>
        <div></div>
    </section>

  <!-- 非ログイン/ログイン 共通部分 searchbar -->
    <div id = \"search\">
      <form id= \"search_bar\" action=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
        echo "item_list.php?item_name=";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["result"] ?? null), "item_name", []), "html", null, true);
        echo "\" >
        <table>
          <td>
            <input type=\"text\" name=\"item_name\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["searchWord"] ?? null), "item_name", []), "html", null, true);
        echo "\" size=\"30\">
          </td>
          <td>
            <div><input type=\"submit\" value=\"検索\" ></div>
          </td>
        </table>
      </form>
    </div>

    <div id = \"wrapper\">
    <!-- 非ログイン/ログイン 共通部分 category_menu -->
      <section id = \"category_menu\"> 
      ";
        // line 59
        $this->loadTemplate("category_menu.html.twig", "item_list.html.twig", 59)->display($context);
        // line 60
        echo "      </section>

    <!-- 非ログイン/ログイン 共通部分 item_list -->
      <section id=\"item_list\">
        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dataArr"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 65
            echo "        <div class=\"item\">
          <ul>
            <li class=\"image\"><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
            echo "detail_item.php?item_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_id", []), "html", null, true);
            echo "\"><img class=\"photo\" src=\"";
            echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
            echo "images/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "image", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_name", []), "html", null, true);
            echo "\"></a></li>

            <li class=\"name\"><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
            echo "detail_item.php?item_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_name", []), "html", null, true);
            echo "</a></li>
            
            <li class=\"price\">&yen;";
            // line 71
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["value"], "price", []), 0, ".", ","), "html", null, true);
            echo "</li>

            <li class=\"detail\"><a href=\"";
            // line 73
            echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
            echo "detail_item.php?item_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_id", []), "html", null, true);
            echo "\">詳細</a></li>
          </ul>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "      </section>

      ";
        // line 87
        echo "    </div>

    <div id = \"news\">
      <div id= \"oshirase\">お知らせ</div>
        <div class=\"news_fetch\">
        ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["newsArr"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 93
            echo "          <dl>
            <dt>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "release_date", []), "html", null, true);
            echo "</dt>
            <dd>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "news", []), "html", null, true);
            echo "</dl>
          </dl>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "      </div>
    </div>

    <div>
      ";
        // line 102
        $this->loadTemplate("footer.html.twig", "item_list.html.twig", 102)->display($context);
        // line 103
        echo "    </div>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "item_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 103,  200 => 102,  194 => 98,  185 => 95,  181 => 94,  178 => 93,  174 => 92,  167 => 87,  163 => 77,  151 => 73,  146 => 71,  137 => 69,  124 => 67,  120 => 65,  116 => 64,  110 => 60,  108 => 59,  93 => 47,  85 => 44,  72 => 33,  66 => 21,  60 => 17,  57 => 16,  54 => 15,  51 => 14,  48 => 13,  46 => 12,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "item_list.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DT/ECweb/templates/item_list.html.twig");
    }
}
