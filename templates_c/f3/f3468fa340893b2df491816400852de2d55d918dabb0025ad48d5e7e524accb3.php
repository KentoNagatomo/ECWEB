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

/* inquiry_form.html.twig */
class __TwigTemplate_ca2c298b75052e7e7ad313e4deac8968e1f729f5f5de5edf1d33989cf0d8dfa7 extends \Twig\Template
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

    <title>お問い合わせ</title>
  </head>

  <body>

    <div id = \"page_body\">
      <form method=\"post\" action=\"inquiry_complete.php\">
        <div id=\"name\">
          <label for=\"name\">お名前<span class=\"red\">*</span></label><br>
          <input type =\"text\" name=\"name\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["inquiryArr"] ?? null), "name", []), "html", null, true);
        echo "\">
          ";
        // line 18
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "name", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "name", []), "html", null, true);
            echo "</span>";
        }
        echo "  
        </div>

        <div id=\"name_kana\">
          <label for=\"name_kana\">お名前（かな）</label><br>
          <input type =\"text\" name=\"name_kana\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["inquiryArr"] ?? null), "name_kana", []), "html", null, true);
        echo "\">
        </div>

        <div id=\"corporate\">
          <label for=\"corporate\">（法人の場合）会社名</label><br>
          <input type =\"text\" name=\"corporate\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["inquiryArr"] ?? null), "corporate", []), "html", null, true);
        echo "\">
          ";
        // line 29
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "corporate", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "name_kana", []), "html", null, true);
            echo "</span>";
        }
        // line 30
        echo "        </div>

        <div id=\"email\">
          <label for=\"email\">メールアドレス<span class =\"red\">*</span></label><br>
          <input type=\"text\" name=\"email\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "email", []), "html", null, true);
        echo "\" size=\"40\">
          ";
        // line 35
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "email", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "email", []), "html", null, true);
            echo "</span>";
        }
        // line 36
        echo "        </div>

        <div id=\"subject\">
          <label for=\"subject\">件名（出店や商品に関してなど）<span class =\"red\">*</span></label><br>
          <input type=\"text\" name=\"subject\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["inquiryArr"] ?? null), "subject", []), "html", null, true);
        echo "\" size=\"40\">
          ";
        // line 41
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "subject", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "subject", []), "html", null, true);
            echo "</span>";
        }
        // line 42
        echo "        </div>

        <div id=\"contents\">
          <label for= \"contents\">お問い合わせ内容<span class =\"red\">*</span></label><br>
          <textarea  name=\"contents\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["inquiryArr"] ?? null), "contents", []), "html", null, true);
        echo "\" cols=\"40\" rows=\"8\"></textarea>
          ";
        // line 47
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "contents", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "contents", []), "html", null, true);
            echo "</span>";
        }
        // line 48
        echo "        </div>

        <div>
          この内容でお問い合わせしますか？
        </div>

        <div id=\"submit\">
          <input type=\"button\" name=\"back\" value=\"一覧へ戻る\" onclick=\"history.back(); return false;\">
          <input type=\"submit\" name=\"complete\" value=\"送信\">
        </div>
      </form>
    </div>

    <div>
    ";
        // line 62
        $this->loadTemplate("footer.html.twig", "inquiry_form.html.twig", 62)->display($context);
        // line 63
        echo "    </div>
    
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "inquiry_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 63,  149 => 62,  133 => 48,  127 => 47,  123 => 46,  117 => 42,  111 => 41,  107 => 40,  101 => 36,  95 => 35,  91 => 34,  85 => 30,  79 => 29,  75 => 28,  67 => 23,  55 => 18,  51 => 17,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "inquiry_form.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DT/ECweb/templates/inquiry_form.html.twig");
    }
}
