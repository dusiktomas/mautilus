<?php

/* lindex.html */
class __TwigTemplate_a34a75f51c25f683cc95af565583970943943bdbddd8085634451c863c2d6df8 extends Twig_Template
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
   <script src=\"scripts/angular/angular-sanitize.min.js\" type=\"text/javascript\"></script>
   <script src=\"scripts/main.js\" type=\"text/javascript\"></script>
  <title></title>
</head>
<body ng-app=\"Shop\" ng-controller=\"shopController\">
  <div style=\"margin-left: auto; margin-right: auto\" >
    <form method=\"POST\" action=\"\">
      <input type=\"hidden\" name=\"newItemInShop\" value=\"1\"/>
      <p><input type=\"text\" name=\"shopName\" placeholder=\"Shop Name\" ng-model=\"information.shopName\"></p>
      <p><input type=\"text\" name=\"street\" placeholder=\"Street\" ng-model=\"information.street\"/></p>
      <p><input type=\"text\" name=\"city\" placeholder=\"City\" ng-model=\"information.city\"/></p>
      <p><input type=\"text\" name=\"zipcode\" placeholder=\"ZipCode\" ng-model=\"information.zipcode\"/></p>
      <p><input type=\"text\" name=\"country\" placeholder=\"Country\" ng-model=\"information.country\"/></p>
      <p><input type=\"text\" name=\"phone\" placeholder=\"Phone\" ng-model=\"information.phone\"/></p>
      <p><input type=\"text\" name=\"e_mail\" placeholder=\"E-mail\" ng-model=\"information.e_mail\"/></p>
      <p><input type=\"text\" name=\"web\" placeholder=\"Web\" ng-model=\"information.web\"/></p>
      <p><input type=\"text\" name=\"gps_lat\" placeholder=\"Gps-lat\" ng-model=\"information.gps_lat\"/></p>
      <p><input type=\"text\" name=\"gps_long\" placeholder=\"Gps-long\" ng-model=\"information.gps_long\"/></p>
      <p><input type=\"submit\" value=\"Confirm\"/>
    </form>
    <p><button ng-click=\"resetForm()\">Dismiss</button></p>
    <p><a href=\"?shoplist=true\"><strong>Shop List</strong></a></p>
  </div>
  ";
        // line 32
        if ((isset($context["itemAddError"]) ? $context["itemAddError"] : null)) {
            // line 33
            echo "    <div style=\"h2\">Error: ";
            echo twig_escape_filter($this->env, (isset($context["itemAddError"]) ? $context["itemAddError"] : null), "html", null, true);
            echo "</div>
  ";
        } elseif ((isset($context["itemAddSuccess"]) ? $context["itemAddSuccess"] : null)) {
            // line 35
            echo "    <div style=\"h2\"> ";
            echo twig_escape_filter($this->env, (isset($context["itemAddSuccess"]) ? $context["itemAddSuccess"] : null), "html", null, true);
            echo "</div>
    <button ng-click=\"resetForm()\">OK (send new data)</button>
  ";
        }
        // line 38
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "lindex.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 38,  60 => 35,  54 => 33,  52 => 32,  19 => 1,);
    }
}
