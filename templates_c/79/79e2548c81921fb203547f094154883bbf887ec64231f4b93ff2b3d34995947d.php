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

/* header_login_top.html.twig */
class __TwigTemplate_f860691268cc89c97ba0feac9c7b8b91fd904669d90b5b0073422b9fc7c5aa65 extends \Twig\Template
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
        echo "  <div class = \"top\">
      <h1><a href = \"";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
        echo "item_list.php\"><img src=\"";
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "img/logo.png\" alt=\"logo画像\"></a></h1>
      
      <div id= \"header_person\">こんにちは、<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
        echo "mypage.php\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["session"] ?? null), "family_name", []), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["session"] ?? null), "first_name", []), "html", null, true);
        echo "</a>様</div>
  </div>
      
      <nav id=\"groval_navi\">
        <ul>
          <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_LOGIN"), "html", null, true);
        echo "logout.php\">ログアウト</a></li></li><li><a href=\"";
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
        echo "inquiry_form.php\">お問合せ</a></li><li><a href=\"";
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
        echo "mypage.php\">マイページ</a></li><li><a href=\"";
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
        echo "cart.php\">カート</a></li><li><a href=\"";
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
        echo "item_list.php\">トップ</a>
        </ul>
      </nav>
";
    }

    public function getTemplateName()
    {
        return "header_login_top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  46 => 9,  39 => 7,  36 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "header_login_top.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DT/ECweb/templates/header_login_top.html.twig");
    }
}