<?php

/* shoplist.html */
class __TwigTemplate_fbd0753a2648525a10235c47185b89378a16eee6d156c84b0e903b1feda48f89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\"/>
  <script src=\"/templates/scripts/jquery-1.11.1.js\"></script>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <link rel=\"stylesheet\" href=\"/templates/css/styles.css\">
   <script src=\"scripts/angular/angular.js\" type=\"text/javascript\"></script>
   <script src=\"../../scripts/bootstrap.min.js\"></script>
   <link rel=\"stylesheet\" href=\"../../css/bootstrap.css\">
  <title></title>
</head>
<body>
  <div>
    <a href=\"?\">Back to the form</a>
    <a href=\"?shoplist=true&json=true\">Export Shops</a>
    <table class=\"table\">
      <tr>
        <th>#</th>
        <th>Shop Name</th>
        <th>Street</th>
        <th>City</th>
        <th>Zip Code</th>
        <th>Country</th>
        <th>Phone</th>
        <th>E mail</th>
        <th>Web</th>
        <th>Gps lat</th>
        <th>Gps Long</th>
      </tr>
      ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 32
            echo "      <tr>
        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo "</td>
        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "shopName"), "html", null, true);
            echo "</td>
        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "street"), "html", null, true);
            echo "</td>
        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "city"), "html", null, true);
            echo "</td>
        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "zipcode"), "html", null, true);
            echo "</td>
        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "country"), "html", null, true);
            echo "</td>
        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "phone"), "html", null, true);
            echo "</td>
        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "e_mail"), "html", null, true);
            echo "</td>
        <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "web"), "html", null, true);
            echo "</td>
        <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "gps_lat"), "html", null, true);
            echo "</td>
        <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "gps_long"), "html", null, true);
            echo "</td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </table>
  </div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "shoplist.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 46,  98 => 43,  94 => 42,  90 => 41,  86 => 40,  82 => 39,  78 => 38,  74 => 37,  70 => 36,  66 => 35,  62 => 34,  58 => 33,  55 => 32,  51 => 31,  19 => 1,);
    }
}
