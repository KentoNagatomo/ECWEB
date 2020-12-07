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

/* detail_item.html.twig */
class __TwigTemplate_87c8a5a48fb7240338aa27d59fd1dacf50d209c970b006326508a865f7a4a1a4 extends \Twig\Template
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
  </head>

  <body>
    <header>
      ";
        // line 10
        if (twig_test_empty($this->getAttribute(($context["session"] ?? null), "family_name", []))) {
            // line 11
            echo "      ";
            $this->loadTemplate("header_unlogin_top.html.twig", "detail_item.html.twig", 11)->display($context);
            // line 12
            echo "      ";
        } else {
            // line 13
            echo "      ";
            $this->loadTemplate("header_login_top.html.twig", "detail_item.html.twig", 13)->display($context);
            // line 14
            echo "      ";
        }
        // line 15
        echo "    </header>

<div class = \"page_body\">

    <form method=\"post\" action = \"";
        // line 19
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
        echo "cart.php?item_id=";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["itemData"] ?? null), "item_id", []), "html", null, true);
        echo "\">

    <div id=\"item_detail\">
        <img class=\"detail_image\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
        echo "images/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["itemData"] ?? null), "image", []), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["itemData"] ?? null), "item_name", []), "html", null, true);
        echo "\">
      </div>

      <div class=\"detail\">
        <dl>
          <dt>商品名</dt>
          <dd>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["itemData"] ?? null), "item_name", []), "html", null, true);
        echo "</dd>
          <dt>詳細</dt>
          <dd>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["itemData"] ?? null), "detail", []), "html", null, true);
        echo "</dd>
          <dt>価格</dt>
          <dd>&yen;";
        // line 32
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["itemData"] ?? null), "price", []), 0, ".", ","), "html", null, true);
        echo "</dd>
        </dl>
      </div>
    
      <div class=\"cart_in\">
        <input type=\"button\" name=\"back\" value=\"一覧へ戻る\" onclick=\"history.back(); return false;\">

        <input type=\"submit\" value=\"ショッピングカートへ入れる\">
      </div>
    </div>
</div>
    <div>
      ";
        // line 44
        $this->loadTemplate("footer.html.twig", "detail_item.html.twig", 44)->display($context);
        // line 45
        echo "    </div>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "detail_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 45,  110 => 44,  95 => 32,  90 => 30,  85 => 28,  72 => 22,  64 => 19,  58 => 15,  55 => 14,  52 => 13,  49 => 12,  46 => 11,  44 => 10,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "detail_item.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DT/ECweb/templates/detail_item.html.twig");
    }
}
