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

/* mypage.html.twig */
class __TwigTemplate_d37b0020ca58557f855b7629034314768b17fa4e5fcc7eb468f1c57a2ccc102f extends \Twig\Template
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
            $this->loadTemplate("header_unlogin_top.html.twig", "mypage.html.twig", 11)->display($context);
            // line 12
            echo "      ";
        } else {
            // line 13
            echo "      ";
            $this->loadTemplate("header_login_top.html.twig", "mypage.html.twig", 13)->display($context);
            // line 14
            echo "      ";
        }
        // line 15
        echo "    </header>

    <div class = \"page_body\">
    <div>
    こんにちは！<br>
    ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["session"] ?? null), "family_name", []), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["session"] ?? null), "first_name", []), "html", null, true);
        echo "様のマイページです。
    </div>

    <div>
        <ul>
          <li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
        echo "purchase_history.php\">購入履歴</a></li>

          <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_MEMBER"), "html", null, true);
        echo "mem_info_reference.php\">会員情報照会</a></li>

          <li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_MEMBER"), "html", null, true);
        echo "cancel_mem.php\">退会</a></li>

          <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
        echo "item_list.php\">TOPページへ</a></li>
        </ul>
      </div>
    </div>

    <div>
      ";
        // line 37
        $this->loadTemplate("footer.html.twig", "mypage.html.twig", 37)->display($context);
        // line 38
        echo "    </div>

    </div>
  </body>
  </html>";
    }

    public function getTemplateName()
    {
        return "mypage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 38,  98 => 37,  89 => 31,  84 => 29,  79 => 27,  74 => 25,  65 => 20,  58 => 15,  55 => 14,  52 => 13,  49 => 12,  46 => 11,  44 => 10,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "mypage.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DT/ECweb/templates/mypage.html.twig");
    }
}
