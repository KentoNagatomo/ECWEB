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

/* login.html.twig */
class __TwigTemplate_6acf66d4722485e9d58a2325a933d0bc403506cf4cb9ba0699ab4b592c4d24e7 extends \Twig\Template
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
<!DOCTYPE html>
<html>

  <head>
    <meta charset=\"utf-8\">
    <title>ログイン</title>
      <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "css/style.css\" rel=\"stylesheet\">
  </head>

  <body>
    <header>
      ";
        // line 13
        $this->loadTemplate("header_unlogin_top.html.twig", "login.html.twig", 13)->display($context);
        // line 14
        echo "    </header>

    <div class = \"page_body\">
      <form method=\"post\" action=\"login.php\">
        <table>
          <tr>
            <th>メールアドレス<span class =\"red\">*</span></th>
            <td><input type=\"text\" name=\"email\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "email", []), "html", null, true);
        echo "\" size=\"40\"></td>
          </tr>

          <tr>
            <th>パスワード<span class=\"red\">*</span></th> 
            <td><input type =\"password\" name=\"password\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "password", []), "html", null, true);
        echo "\">
            ";
        // line 27
        if (($this->getAttribute(($context["dataArr"] ?? null), "loginflg", []) != true)) {
            echo "<br>
            <span class=\"red\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "errmsg", []), "html", null, true);
            echo "</span>
            ";
        }
        // line 30
        echo "            </td>
          </tr>
        </table>

        <div>
          <input type=\"submit\" name=\"login\" value=\"ログイン\">
        </div>

        <div>
          新規会員登録は<a href=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_MEMBER"), "html", null, true);
        echo "regist.php\">こちら</a>
        </div>

      </form>
    </div>

    <div>
      ";
        // line 46
        $this->loadTemplate("footer.html.twig", "login.html.twig", 46)->display($context);
        // line 47
        echo "    </div>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 47,  100 => 46,  90 => 39,  79 => 30,  74 => 28,  70 => 27,  66 => 26,  58 => 21,  49 => 14,  47 => 13,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "login.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DT/ECweb/templates/login.html.twig");
    }
}
