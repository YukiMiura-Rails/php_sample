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

/* regist.html.twig */
class __TwigTemplate_cd52c3473816333a7f98f24b4d6466fe140850c63bf12884cb28cb774000b0bb extends \Twig\Template
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
        echo "<!DOCTYPE html>\t
<html>\t
<head>\t
<meta charset=\"utf-8\">\t
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>\t
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_constant("member\\Bootstrap::APP_URL"), "html", null, true);
        echo "js/common.js\"></script>\t
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("member\\Bootstrap::APP_URL"), "html", null, true);
        echo "css/style.css\" rel=\"stylesheet\">\t
<title>会員登録</title>\t
</head>\t
<body>\t
<h1>アカウントを作成する</h1>
<input type=\"hidden\" name=\"entry_url\" id=\"entry_url\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("member\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "\">\t
<form method=\"post\" action=\"confirm.php\">\t
<table>\t
<tr>\t
<th>お名前(氏名a)<span class=\"red\">*</span></th>\t
<td>\t
<input type=\"text\" name=\"family_name\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "family_name", []), "html", null, true);
        echo "\">\t
<input type=\"text\" name=\"first_name\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "first_name", []), "html", null, true);
        echo "\">\t
";
        // line 20
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "family_name", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "family_name", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
";
        // line 21
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "first_name", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "first_name", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
</td>\t
</tr>\t
<tr>\t
<th>お名前(かな)</th>\t
<td>\t
<input type=\"text\" name=\"family_name_kana\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "family_name_kana", []), "html", null, true);
        echo "\">\t
<input type=\"text\" name=\"first_name_kana\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "first_name_kana", []), "html", null, true);
        echo "\">\t
</td>\t
</tr>\t
<tr>\t
<th>性別<span class=\"red\">*</span></th>\t
<td>\t
";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sexArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            echo "\t
<input type=\"radio\" name=\"sex\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" id=\"sex_";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if (($this->getAttribute(($context["dataArr"] ?? null), "sex", []) == $context["index"])) {
                echo " checked=\"checked\" ";
            }
            echo ">\t
<label for=\"sex_";
            // line 36
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</label>\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t
";
        // line 38
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "sex", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "sex", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
</td>\t
</tr>\t
<tr>\t
<th>生年月日<span class=\"red\">*</span></th>\t
<td>\t
<select name=\"year\" >\t
";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yearArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            echo "\t
<option value=\"";
            // line 46
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if (($this->getAttribute(($context["dataArr"] ?? null), "year", []) == $context["index"])) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t
</select>\t
<select name='month'>\t
";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["monthArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            echo "\t
<option value=\"";
            // line 51
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if (($this->getAttribute(($context["dataArr"] ?? null), "month", []) == $context["index"])) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t
</select>\t
<select name='day'>\t
";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dayArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            echo "\t
<option value=\"";
            // line 56
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if (($this->getAttribute(($context["dataArr"] ?? null), "day", []) == $context["index"])) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t
</select>\t
";
        // line 59
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "year", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "year", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
";
        // line 60
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "month", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "month", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
";
        // line 61
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "day", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "day", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
</td>\t
</tr>\t
<tr>\t
<th>郵便番号<span class=\"red\">*</span></th>\t
<td>\t
<input type=\"text\" name=\"zip1\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "zip1", []), "html", null, true);
        echo "\" id=\"zip1\" size=\"3\" maxlength=\"3\"> -\t
<input type=\"text\" name=\"zip2\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "zip2", []), "html", null, true);
        echo "\" id=\"zip2\" size=\"4\" maxlength=\"4\">\t
<input type=\"button\" name=\"address_search\" value=\"〒から住所を入力\" id=\"address_search\">\t
";
        // line 70
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "zip1", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "zip1", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
";
        // line 71
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "zip2", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "zip2", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
</td>\t
</tr>\t
<tr>\t
<th>住所<span class=\"red\">*</span></th>\t
<td>\t
<input type=\"text\" name=\"address\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "address", []), "html", null, true);
        echo "\" id=\"address\" size=\"40\">\t
";
        // line 78
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "address", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "address", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
</td>\t
</tr>\t
<tr>\t
<th>メールアドレス<span class=\"red\">*</span></th>\t
<td>\t
<input type=\"text\" name=\"email\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "email", []), "html", null, true);
        echo "\" size=\"40\">\t
";
        // line 85
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "email", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "email", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
</td>\t
</tr>\t
<tr>\t
<th>電話番号<span class=\"red\">*</span></th>\t
<td>\t
<input type=\"text\" name=\"tel1\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "tel1", []), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\"> -\t
<input type=\"text\" name=\"tel2\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "tel2", []), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\"> -\t
<input type=\"text\" name=\"tel3\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "tel3", []), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\">\t
";
        // line 94
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "tel1", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "tel1", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
";
        // line 95
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "tel2", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "tel2", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
";
        // line 96
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "tel3", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "tel3", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
</td>\t
</tr>\t
<tr>\t
<th>交通手段<span class=\"red\">*</span></th>\t
<td>\t
";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["trafficArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            echo "\t
<input type=\"checkbox\" name=\"traffic[]\" value=\"";
            // line 103
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" id=\"traffic_";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if (twig_in_filter($context["index"], $this->getAttribute(($context["dataArr"] ?? null), "traffic", []))) {
                echo " checked=\"checked\" ";
            }
            echo ">\t
<label for=\"traffic_";
            // line 104
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</label>\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "\t
";
        // line 106
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "traffic", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "traffic", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
</td>\t
</tr>\t
<tr>\t
<th>備考</th>\t
<td>\t
<textarea name=\"contents\" rows=\"4\" cols=\"40\">";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "contents", []), "html", null, true);
        echo "</textarea>\t
</td>\t
</tr>\t
</table>\t
<div>\t
<input type=\"submit\" name=\"confirm\" value=\"登録確認\">\t
</div>\t
</form>\t
</body>\t
</html>";
    }

    public function getTemplateName()
    {
        return "regist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 112,  380 => 106,  377 => 105,  367 => 104,  357 => 103,  351 => 102,  338 => 96,  330 => 95,  322 => 94,  318 => 93,  314 => 92,  310 => 91,  297 => 85,  293 => 84,  280 => 78,  276 => 77,  263 => 71,  255 => 70,  250 => 68,  246 => 67,  233 => 61,  225 => 60,  217 => 59,  213 => 57,  199 => 56,  193 => 55,  188 => 52,  174 => 51,  168 => 50,  163 => 47,  149 => 46,  143 => 45,  129 => 38,  126 => 37,  116 => 36,  106 => 35,  100 => 34,  91 => 28,  87 => 27,  74 => 21,  66 => 20,  62 => 19,  58 => 18,  49 => 12,  41 => 7,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "regist.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/PT/templates/member/regist.html.twig");
    }
}
