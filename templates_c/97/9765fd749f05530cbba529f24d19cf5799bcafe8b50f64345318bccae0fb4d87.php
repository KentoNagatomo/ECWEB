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

/* cart.html.twig */
class __TwigTemplate_6533d2746bee0de7ddcceeb9464b1dc83ae8d779f9f7d052a1a9ad716eba1aff extends \Twig\Template
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
        $this->loadTemplate("header_login_top.html.twig", "cart.html.twig", 11)->display($context);
        // line 12
        echo "</header>

<div class = \"page_body\">
    <div id=\"cart_list\">
      ";
        // line 16
        if ((twig_length_filter($this->env, ($context["dataArr"] ?? null)) == 0)) {
            // line 17
            echo "      <p>カートに商品は入っていません</p>
      <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
            echo "item_list.php\">商品一覧へ戻る</a>

      ";
        } else {
            // line 21
            echo "      <p>ショッピングカート</p>
      <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
            echo "item_list.php\">商品一覧へ戻る</a>
      <p>カート内商品数：";
            // line 23
            echo twig_escape_filter($this->env, ($context["sumNum"] ?? null), "html", null, true);
            echo "個　合計金額：&yen;";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sumPrice"] ?? null), 0, ".", ","), "html", null, true);
            echo "</p>
    </div>

      <div class=\"item\">
      ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dataArr"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 28
                echo "        <ul>
          <li class=\"image\">
          <img class = \"detail_image\" src=\"";
                // line 30
                echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
                echo "images/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "image", []), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_name", []), "html", null, true);
                echo "\"></li>

          <li class=\"name\">";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_name", []), "html", null, true);
                echo "</li>

          <li class=\"price\">&yen;";
                // line 34
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["value"], "price", []), 0, ".", ","), "html", null, true);
                echo " × ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "NUM", []), "html", null, true);
                echo "個</li>
          <li class=\"price\">小計 &yen;";
                // line 35
                echo twig_escape_filter($this->env, ($this->getAttribute($context["value"], "price", []) * twig_number_format_filter($this->env, $this->getAttribute($context["value"], "NUM", []), 0, ".", ",")), "html", null, true);
                echo "</li>

          <li><a href=\"";
                // line 37
                echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
                echo "cart.php?crt_id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "crt_id", []), "html", null, true);
                echo "\">削除</a></li>
        </ul>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "      </div>

    <div>
      <form method=\"post\" action = \"";
            // line 43
            echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
            echo "shop_confirm.php\">
      <input type=\"submit\" value=\"購入確認へ\">
      </form>
        ";
        }
        // line 47
        echo "    </div>
</div>

<div>
    ";
        // line 51
        $this->loadTemplate("footer.html.twig", "cart.html.twig", 51)->display($context);
        // line 52
        echo "</div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 52,  142 => 51,  136 => 47,  129 => 43,  124 => 40,  113 => 37,  108 => 35,  102 => 34,  97 => 32,  88 => 30,  84 => 28,  80 => 27,  71 => 23,  67 => 22,  64 => 21,  58 => 18,  55 => 17,  53 => 16,  47 => 12,  45 => 11,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "cart.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DT/ECweb/templates/cart.html.twig");
    }
}
