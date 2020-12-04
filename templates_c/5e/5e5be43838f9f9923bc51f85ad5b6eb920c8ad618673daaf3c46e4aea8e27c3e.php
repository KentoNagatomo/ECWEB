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

/* request_login.html.twig */
class __TwigTemplate_740ba1bdf4d3e6338a466c22e5762f89a0f72b508c8b05afbf79df0aedaf52ad extends \Twig\Template
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
        $this->loadTemplate("header_unlogin_top.html.twig", "request_login.html.twig", 11)->display($context);
        // line 12
        echo "    </header>
    
    <div id = \"page_body\">

      <div>
        <span>これより先は<a href=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_LOGIN"), "html", null, true);
        echo "login.php\">ログイン</a>が必要です。</span>
      </div>

      <div>
        <span>初めてご利用の方は</span>
        <span><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_MEMBER"), "html", null, true);
        echo "regist.php\">こちら</a>（新規会員登録）</span>
      </div>
    
    </div>

    <div>
    ";
        // line 28
        $this->loadTemplate("footer.html.twig", "request_login.html.twig", 28)->display($context);
        // line 29
        echo "    </div>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "request_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 29,  71 => 28,  62 => 22,  54 => 17,  47 => 12,  45 => 11,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "request_login.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DT/ECweb/templates/request_login.html.twig");
    }
}
