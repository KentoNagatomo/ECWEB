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

/* admin_mem_list.html.twig */
class __TwigTemplate_2f158c193a42890e214b4bb7c497854a246db8d786225c5bfd736141a42a759b extends \Twig\Template
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
  <title>会員一覧</title>
  <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "css/style.css\" rel=\"stylesheet\">
</head>

<body>
  <div id = \"wrapper\">

    <table border=\"1\">
    <tr>
      <th>ID</th>
      <th>お名前</th>
      <th>メール</th>
      <th>性別</th>
      <th>登録日時</th>
    </tr>



  ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dataArr"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 25
            echo "  <tr>
    <td>
      ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "mem_no", []), "html", null, true);
            echo "
    </td>

    <td>
      <span style=\"font-size:60%;\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "family_name_kana", []), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "first_name_kana", []), "html", null, true);
            echo "</span><br>
      ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "family_name", []), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "first_name", []), "html", null, true);
            echo "
    </td>

    <td>
    ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "email", []), "html", null, true);
            echo "
    </td>

    <td>
    ";
            // line 40
            if (($this->getAttribute($context["value"], "sex", []) == "1")) {
                echo "男性";
            } elseif (($this->getAttribute($context["value"], "sex", []) == "2")) {
                echo "女性
    ";
            }
            // line 42
            echo "    </td>

    <td>
    ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "regist_date", []), "html", null, true);
            echo "
    </td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</table>


  <div class=\"cart_in\">
  <input type=\"button\" name=\"back\" value=\"戻る\" onclick=\"history.back(); return false;\">
  </div>

</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "admin_mem_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 49,  105 => 45,  100 => 42,  93 => 40,  86 => 36,  78 => 32,  73 => 31,  66 => 27,  62 => 25,  58 => 24,  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin_mem_list.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DT/ECweb/templates/admin_mem_list.html.twig");
    }
}
