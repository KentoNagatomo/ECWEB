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

/* header_unlogin_top.html.twig */
class __TwigTemplate_3655bde1aea04faad7696e52a2ca3e95dc7455491f3009320a5aeff3f013655c extends \Twig\Template
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

<body>
  <div class = \"top\">
      <h1><img class=\"logo\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "img/top_img.jpeg\" alt=\"logo画像\"></h1>

    <div id = \"header_person\">こんにちは、ゲスト様 <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_LOGIN"), "html", null, true);
        echo "login.php\"><small>ログイン</small></a></div>
  </div>

    <nav id=\"groval_navi\">
      <ul>
        <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_LOGIN"), "html", null, true);
        echo "login.php\">ログイン</a></li><li><a href=\"";
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
        echo "inquiry_form.php\">お問合せ</a></li><li><a href=\"";
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
        echo "cart.php\">カート</a></li><li><a href=\"";
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
        echo "item_list.php\">TOPページ</a></li>
      </ul>
    </nav>
";
    }

    public function getTemplateName()
    {
        return "header_unlogin_top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  43 => 9,  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "header_unlogin_top.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DT/ECweb/templates/header_unlogin_top.html.twig");
    }
}
