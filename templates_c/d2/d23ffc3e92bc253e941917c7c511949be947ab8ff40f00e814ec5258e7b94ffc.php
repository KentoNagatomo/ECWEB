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

/* footer.html.twig */
class __TwigTemplate_1595baac05aa9265c32361541a2b7143167e1086ff49f048ef7daddf93d7173c extends \Twig\Template
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
        echo "  <!-- 非ログイン/ログイン 共通部分 footer -->
<footer>
  <div id = \"footer_navi\">
    <div id = \"footer_navi_left\">
      <ul>
        <li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
        echo "item_list.php\">TOPページ</a></li>
        <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
        echo "cart.php\">カート</a></li>
        <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL_SHOP"), "html", null, true);
        echo "inquiry_form.php\">お問合せ</a></li>
        <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_constant("ECweb\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "policy/privacy_policy.html\">プライバシーポリシー</a></li>
      </ul>
    </div>

    <div id = \"footer_navi_right\">
      <ul>
        <li>永友健斗（ながとも・けんと）26歳</li>
        <li>Webエンジニア志望</li>
        <li>2020年9月よりPHP(Twig)を中心に</li>
        <li>JavaScript,MySQL,HTML,CSSを学習中。</li>
      </ul>
    </div>
  </div>

    <div id = \"copyright\">
      &copy; 2020 南国農園
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  45 => 8,  41 => 7,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "footer.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DT/ECweb/templates/footer.html.twig");
    }
}
