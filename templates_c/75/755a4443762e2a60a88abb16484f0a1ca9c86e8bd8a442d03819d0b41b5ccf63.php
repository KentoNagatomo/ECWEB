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

/* admin_news.html.twig */
class __TwigTemplate_9a0687ea6f1c608474aa5c9d382300a3337edada5ceb7fffe4abc4b4015574c1 extends \Twig\Template
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

    <title>お知らせ管理</title>
  </head>

  <body>

    <div id = \"page_body\">
      <form method=\"post\" action=\"\">
        <div id=\"release_date\">
          <label for=\"release_date\">日付</label><br>
          <input type =\"date\" name=\"release_date\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsArr"] ?? null), "release_date", []), "html", null, true);
        echo "\">
        </div>

        <div id=\"news_admin\">
          <label for=\"news_admin\">お知らせ</label><br>
          <textarea  name=\"news\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsArr"] ?? null), "news", []), "html", null, true);
        echo "\" cols=\"40\" rows=\"3\"></textarea>
        </div>

        <div>
          この内容でお知らせを配信しますか？
        </div>

        <div id=\"submit\">
          <input type=\"button\" name=\"back\" value=\"戻る\" onclick=\"history.back(); return false;\">
          <input type=\"submit\" name=\"complete\" value=\"配信\">
        </div>
      </form>
    </div>

  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "admin_news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 22,  51 => 17,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin_news.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DT/ECweb/templates/admin_news.html.twig");
    }
}
