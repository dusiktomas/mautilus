<?php

/* index.html */
class __TwigTemplate_157e25951e0b9eee09c27968b4b8fb7b5a3e8e096b449d197498e535e53d9e2e extends Twig_Template
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
<meta charset=\"utf-8\"> 
  <link rel=\"stylesheet\" href=\"/css/bootstrap.css\">
  <script src=\"/templates/scripts/jquery-1.11.1.js\"></script>
  <script src=\"/js/Autolinker/dist/Autolinker.min.js\"></script>
  <script src=\"/templates/scripts/additionScripts.js\"></script>
  <script src=\"/templates/scripts/main.js\"></script>
  <link rel=\"stylesheet\" href=\"/jquery-slider/jquery.range.css\" />
  <script src=\"/jquery-slider/jquery.range.js\"></script>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <script src=\"/js/bootstrap.min.js\"></script>
  <link rel=\"stylesheet\" href=\"/css/prettyPhoto.css\" type=\"text/css\" media=\"screen\" charset=\"utf-8\" />
  <link rel=\"stylesheet\" href=\"/css/nanoscroller.css\" type=\"text/css\" media=\"screen\" charset=\"utf-8\" />
  <script src=\"/js/jquery.prettyPhoto.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
  <script src=\"/js/prettyPhoto.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
  <script src=\"/js/jquery.nanoscroller.min.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
  <script src=\"/js/scrollbar.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
  <script src=\"/templates/scripts/ajax.js\"></script>
  <link rel=\"stylesheet\" href=\"/templates/css/styles.css\">
  <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  ";
        // line 23
        if ((twig_length_filter($this->env, (isset($context["posts"]) ? $context["posts"] : null)) == 1)) {
            // line 24
            echo "    ";
            if ((!twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), 0, array(), "array"), "info"), "content")))) {
                // line 25
                echo "      <title>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), 0, array(), "array"), "info"), "content"), "html", null, true);
                echo "</title>
    ";
            }
            // line 27
            echo "  ";
        }
        // line 28
        echo "  <title>";
        echo twig_escape_filter($this->env, (isset($context["nick"]) ? $context["nick"] : null), "html", null, true);
        echo " - Ohodnoť mě na SlideJust.com</title>
</head>
<body>
  <span id=\"current-user\" data-current-user=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["nick"]) ? $context["nick"] : null), "html", null, true);
        echo "\"></span>
  <span id=\"logged-user\" data-logged-user=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loggedUser"]) ? $context["loggedUser"] : null), "nick"), "html", null, true);
        echo "\"></span>
\t<div style=\"position: absolute; left: 50%;\">
        <div class=\"message-box window-close\">
\t\t\t<div class=\"content-msg-photo\" style=\"margin-left: 10px; background-image: url('";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "avatar"), "html", null, true);
        echo "')\">
\t\t\t\t<a href=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["nick"]) ? $context["nick"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "nick"), "html", null, true);
        echo "\" id=\"indicator\">
\t\t\t\t\t<img class=\"content-msg-photo-avatar\" src=\"/";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "avatar"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "nick"), "html", null, true);
        echo "\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"message-box-storage-close\">
\t\t\t\t<span class=\"glyphicon glyphicon-remove\" style=\"color: #000000\"></span>
\t\t\t</div>
\t\t\t<span class=\"content-msg-username\"><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["nick"]) ? $context["nick"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["nick"]) ? $context["nick"] : null), "html", null, true);
        echo "</a></span>
            <textarea rows='4' name=\"content\" class=\"message-content form-control content-box-textarea\" placeholder=\"Text zprávy\"></textarea>
\t\t\t<button type=\"button\" class=\"btn btn-info add-button\" id=\"send-final-msg\">Pošli zprávu</button>
\t\t\t<img class=\"comment-loading\" src=\"/templates/images/ajax-loader.gif\"></img>
\t\t\t<img class=\"comment-success\" src=\"/images/success-icon.png\"></img>
        </div>
    </div>
\t<div style=\"position: absolute; left: 20%;\">
    <div class=\"message-box-storage window-close\">
\t\t\t<div class=\"message-box-header\">
\t\t\t\t<div class=\"message-box-storage-close\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t</div>
        <span style=\"color: #00ff5f;\" class=\"glyphicon glyphicon-ok-sign user-online\" title=\"Online\"></span>
        <span class=\"user-offline\" title=\"Offline\"><small><b>OFFLINE</b></small></span>
\t\t\t\t<span class=\"content-msg-username\" data-user=\"\"><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["nick"]) ? $context["nick"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["nick"]) ? $context["nick"] : null), "html", null, true);
        echo "</a></span>
\t\t\t</div>
\t\t\t<div class=\"message-box-content\"></div>
\t\t\t<div class=\"message-box-textarea\">
\t\t\t\t<textarea rows='2' class=\"form-control\" placeholder=\"Napiště zprávu\"></textarea>
\t\t\t</div>
\t\t\t<img class=\"comment-loading\" src=\"/templates/images/ajax-loader.gif\"></img>
\t\t\t<img class=\"comment-success\" src=\"/images/success-icon.png\"></img>
        </div>
    </div>
\t<div style=\"position: absolute; left: 50%;\">
      <div class=\"password-change-box window-close\">
\t\t\t<div class=\"message-box-header\">
\t\t\t\t<div class=\"message-box-storage-close\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t</div>
        <span class=\"content-msg-username\" style=\"color: whitesmoke\"data-user=\"\"><small>Změna hesla</small></span>
\t\t\t</div>
      <div style=\"text-align: center\">
         <input style=\"margin: 3px; height: 30px\" type=\"password\" id=\"old-password\" placeholder=\"Současné heslo\"></input>
         <input style=\"margin: 3px; height: 30px\" type=\"password\" id=\"new-password\" placeholder=\"Nové heslo\"></input>
         <input style=\"margin: 3px; height: 30px\" type=\"password\" id=\"retype-password\" placeholder=\"Potvrdit nové heslo\"></input>
         <input id=\"password-change-clicker\" style=\"margin: 3px; width: 100px; height: 30px; margin-left: auto; margin-right: auto\" type=\"button\" class=\"form-control\" value=\"Potvrdit\"></input>
         <span style=\"color: red; display: none; font-size: 11px\" id=\"password-change-failed\">Nepodařilo se změnit heslo, pravděpodobně jste zadali špatné údaje. </span>
       </div>
\t\t\t<img class=\"comment-loading\" src=\"/templates/images/ajax-loader.gif\"></img>
\t\t\t<img class=\"comment-success\" src=\"/images/success-icon.png\"></img>
      </div>
  </div>
\t<div style=\"position: absolute; left: 50%;\">
        <div class=\"followers-box-storage window-close\">
\t\t\t<div class=\"message-box-header\">
        <span data-user=\"24\" class=\"content-msg-username\"><small style=\"color: whitesmoke\">Uživatele sleduje</small></span> 
\t\t\t\t<div class=\"message-box-storage-close\" style=\"position: absolute; top: 0; right: 0;\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t</div>
\t\t\t</div>
      ";
        // line 95
        if (twig_test_empty($this->getAttribute((isset($context["userParams"]) ? $context["userParams"] : null), "followers"))) {
            // line 96
            echo "        Uživatel nemá žádné sledující.
      ";
        }
        // line 98
        echo "\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["userParams"]) ? $context["userParams"] : null), "followers"));
        foreach ($context['_seq'] as $context["_key"] => $context["follower"]) {
            echo "\t
\t\t\t\t<div class=\"follower-box-content\">
\t\t\t\t\t<div style=\"float: left; position: absolute; height: 35px; margin-top: -2px; width: 200px;\">
\t\t\t\t\t\t<div class=\"content-msg-photo\" style=\"margin-left: 10px; background-image: url('/";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["follower"]) ? $context["follower"] : null), "info"), "avatar"), "html", null, true);
            echo "')\">
\t\t\t\t\t\t\t<a href=\"/";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["follower"]) ? $context["follower"] : null), "info"), "nick"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["follower"]) ? $context["follower"] : null), "info"), "nick"), "html", null, true);
            echo "\" id=\"indicator\">
\t\t\t\t\t\t\t\t<img class=\"content-msg-photo-avatar\" src=\"/";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["follower"]) ? $context["follower"] : null), "info"), "avatar"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["follower"]) ? $context["follower"] : null), "info"), "nick"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span style=\"margin-top: 7px; margin-left: 3px; float: left; font-weight: bold;\">
\t\t\t\t\t\t\t<a href=\"/";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["follower"]) ? $context["follower"] : null), "info"), "nick"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["follower"]) ? $context["follower"] : null), "info"), "nick"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"float: right; margin-top: 0px\">
\t\t\t\t\t\t<div class=\"content-msg-user-rate\">
              <span class=\"glyphicon glyphicon-star\" style=\"font-size: 12px\"></span><span class=\"msg-user-rate\">";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["follower"]) ? $context["follower"] : null), "rating"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['follower'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "        </div>
    </div>
\t<div style=\"position: absolute; left: 50%;\">
        <div class=\"follow-box-storage window-close\">
\t\t\t<div class=\"message-box-header\">
        <span data-user=\"24\" class=\"content-msg-username\"><small style=\"color: whitesmoke\">Uživatel sleduje</small></span> 
\t\t\t\t<div class=\"message-box-storage-close\" style=\"position: absolute; top: 0; right: 0;\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t</div>
\t\t\t</div>
      <div class=\"followers-box\">
      ";
        // line 128
        if (twig_test_empty($this->getAttribute((isset($context["userParams"]) ? $context["userParams"] : null), "follow"))) {
            // line 129
            echo "        Uživatel nikoho nesleduje.
      ";
        }
        // line 131
        echo "\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["userParams"]) ? $context["userParams"] : null), "follow"));
        foreach ($context['_seq'] as $context["_key"] => $context["follower"]) {
            echo "\t
\t\t\t\t<div class=\"follower-box-content\">
\t\t\t\t\t<div style=\"float: left; position: absolute; height: 35px; margin-top: -2px; width: 200px;\">
\t\t\t\t\t\t<div class=\"content-msg-photo\" style=\"margin-left: 10px; background-image: url('/";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["follower"]) ? $context["follower"] : null), "info"), "avatar"), "html", null, true);
            echo "')\">
\t\t\t\t\t\t\t<a href=\"/";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["follower"]) ? $context["follower"] : null), "info"), "nick"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["follower"]) ? $context["follower"] : null), "info"), "nick"), "html", null, true);
            echo "\" id=\"indicator\">
\t\t\t\t\t\t\t\t<img class=\"content-msg-photo-avatar\" src=\"/";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["follower"]) ? $context["follower"] : null), "info"), "avatar"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["follower"]) ? $context["follower"] : null), "info"), "nick"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span style=\"margin-top: 7px; margin-left: 3px; float: left; font-weight: bold;\">
\t\t\t\t\t\t\t<a href=\"/";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["follower"]) ? $context["follower"] : null), "info"), "nick"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["follower"]) ? $context["follower"] : null), "info"), "nick"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"float: right; margin-top: 0px\">
\t\t\t\t\t\t<div class=\"content-msg-user-rate\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\" style=\"font-size: 12px\"></span><span class=\"msg-user-rate\">";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["follower"]) ? $context["follower"] : null), "rating"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['follower'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "        </div>
      </div>
    </div>
\t<header>
\t\t<div class=\"header\">
\t</header>
\t<div style=\"width: 100%; height: 100%\">
\t<div class=\"contentBlock\">
\t\t<div class=\"contentTable\">
      <div class=\"contentHeader\">
        ";
        // line 160
        if ((isset($context["isLogged"]) ? $context["isLogged"] : null)) {
            // line 161
            echo "        <div class=\"header-user-right-block\">
          <a href=\"";
            // line 162
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loggedUser"]) ? $context["loggedUser"] : null), "nick"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loggedUser"]) ? $context["loggedUser"] : null), "nick"), "html", null, true);
            echo "\">
            <button type=\"button\" style=\"background: #21627C; border: 0px solid blue; margin-top: 8px;\" title=\"Můj profil\">
                <span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\" style=\"color: white\"></span>
            </button>
          </a>
        </div>
        ";
        }
        // line 169
        echo "        <div class=\"header-links\">
          ";
        // line 170
        if ((isset($context["isLogged"]) ? $context["isLogged"] : null)) {
            // line 171
            echo "            
            <!-- Split button -->
            <div class=\"btn-group profile-dropdown\">
            <div class=\"content-msg-photo-header-link dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
              <button type=\"button\" style=\"background: #21627C; border: 0px solid blue; margin-top: 8px;\" title=\"Příspěvky sledovaných uživatelů\">
                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\" style=\"color: white\"></span>
              </button>
            </div>
              <ul class=\"dropdown-menu dropdown-menu-left\" role=\"menu\">
              <li><a href=\"/";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loggedUser"]) ? $context["loggedUser"] : null), "nick"), "html", null, true);
            echo "\">Jít na můj profil</a></li>
              <li id=\"password-change\"><a href=\"#\">Změnit heslo</a></li>
              <li><a href=\"mailto:info@slidejust.com?subject=Nahlášení problému\">Nahlásit problém</a></li>
              <li class=\"divider\"></li>
              <li><a href=\"/?logout=true\">Odhlásit se</a></li>
              </ul>
            </div>
          ";
        } else {
            // line 188
            echo "          <div class=\"header-login-information\">
            <a href=\"/\">
              <button type=\"button\" class=\"btn btn-default button\">Přihlásit</button>
            </a>
          </div>
          ";
        }
        // line 194
        echo "        </div>
          ";
        // line 195
        if ((isset($context["isLogged"]) ? $context["isLogged"] : null)) {
            // line 196
            echo "          <div class=\"header-notifications\">
          <div class=\"header-user-stats\">
            <button type=\"button\" id=\"user-follower-posts\" title=\"Příspěvky sledovaných uživatelů\" class=\"btn btn-default btn-sm notification follower_posts\">
              <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>
              <span class=\"glyphicon glyphicon-fire\" aria-hidden=\"true\"></span>
            </button>
            <button type=\"button\" id=\"user-message-notification\" title=\"Zprávy\" class=\"btn btn-default btn-sm notification\">
              <span class=\"glyphicon glyphicon-cloud\" aria-hidden=\"true\"></span>
              <span class=\"glyphicon glyphicon-fire\" aria-hidden=\"true\"></span>
            </button>
            <button type=\"button\" id=\"user-notification\" title=\"Notifikace profilu\" class=\"btn btn-default btn-sm notification\">
              <span class=\"glyphicon glyphicon-flag\" aria-hidden=\"true\"></span>
              <span class=\"glyphicon glyphicon-fire\" aria-hidden=\"true\"></span>
              
            </button>
          </div>
          <div class=\"nano notificationBlock\">
            <div class=\"content\">
              ";
            // line 214
            if (twig_test_empty((isset($context["notifications"]) ? $context["notifications"] : null))) {
                // line 215
                echo "                <div class=\"content-notification-box\">
                <div class=\"content-msg-storage\">
                  <div class=\"content-msg-photo\" style=\"background-image: url('/";
                // line 217
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loggedUser"]) ? $context["loggedUser"] : null), "avatar"), "html", null, true);
                echo "'); margin-top: 2px\">
                      ";
                // line 218
                ob_start();
                // line 219
                echo "                        <a href=\"/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loggedUser"]) ? $context["loggedUser"] : null), "nick"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "userInfo"), "nick"), "html", null, true);
                echo "</a>
                      ";
                $context["userNick"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 221
                echo "                      ";
                ob_start();
                // line 222
                echo "                        ";
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "info"), "content")) > 0)) {
                    // line 223
                    echo "                          \"";
                    echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "info"), "content"), 0, 40), "html", null, true);
                    echo "\"
                        ";
                }
                // line 225
                echo "                      ";
                $context["post"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 226
                echo "                      <a href=\"/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loggedUser"]) ? $context["loggedUser"] : null), "nick"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loggedUser"]) ? $context["loggedUser"] : null), "nick"), "html", null, true);
                echo "\">
                        <img class=\"content-msg-photo-avatar avatar-underline\" src=\"/";
                // line 227
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loggedUser"]) ? $context["loggedUser"] : null), "avatar"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loggedUser"]) ? $context["loggedUser"] : null), "nick"), "html", null, true);
                echo "\">
                      </a>
                  </div>
                  <span class=\"content-msg-text\">
                    <p>
                    <small>Sem budete dostávat upozornění o dění na vašem profilu.</small>\t
                    </p>
                  </span> 
                </div>
                </div>
              ";
            }
            // line 238
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["notifications"]) ? $context["notifications"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 239
                echo "            
              ";
                // line 240
                $context["userNick"] = "Někdo";
                // line 241
                echo "              
              <div class=\"content-notification-box\">
              <div class=\"content-msg-storage\">
                  ";
                // line 244
                if (($this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "info"), "user_from") == 0)) {
                    // line 245
                    echo "                    <div class=\"content-msg-photo\" style=\"margin-top: 2px; background-image: url('/";
                    echo twig_escape_filter($this->env, (isset($context["defaultAvatar"]) ? $context["defaultAvatar"] : null), "html", null, true);
                    echo "');\">
                    <img class=\"content-msg-photo-avatar\" src=\"/";
                    // line 246
                    echo twig_escape_filter($this->env, (isset($context["defaultAvatar"]) ? $context["defaultAvatar"] : null), "html", null, true);
                    echo "\">
                  ";
                } else {
                    // line 248
                    echo "                    <div class=\"content-msg-photo\" style=\"margin-top: 2px; background-image: url('/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "userInfo"), "avatar"), "html", null, true);
                    echo "');\">
                    ";
                    // line 249
                    ob_start();
                    // line 250
                    echo "                      <a href=\"/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "userInfo"), "nick"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "userInfo"), "nick"), "html", null, true);
                    echo "</a>
                    ";
                    $context["userNick"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 252
                    echo "                    <a href=\"/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "userInfo"), "nick"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "userInfo"), "nick"), "html", null, true);
                    echo "\">
                      <img class=\"content-msg-photo-avatar avatar-underline\" src=\"/";
                    // line 253
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "userInfo"), "avatar"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "userInfo"), "nick"), "html", null, true);
                    echo "\">
                    </a>
                  ";
                }
                // line 256
                echo "                </div>
                <span class=\"content-msg-text\">
                  <p>
                    ";
                // line 259
                if (($this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "info"), "type") == "rating")) {
                    // line 260
                    echo "                      ";
                    if ($this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "postInfo"), "image")) {
                        // line 261
                        echo "                        <small>";
                        echo twig_escape_filter($this->env, (isset($context["userNick"]) ? $context["userNick"] : null), "html", null, true);
                        echo " vám ohodnotil 
                        <a href=\"/";
                        // line 262
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loggedUser"]) ? $context["loggedUser"] : null), "nick"), "html", null, true);
                        echo "#";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "postInfo"), "id"), "html", null, true);
                        echo "\" data-id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "postInfo"), "id"), "html", null, true);
                        echo "\">fotku</a>
                        číslem <strong>";
                        // line 263
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "info"), "value"), "html", null, true);
                        echo "</strong>.\t
                        <a href=\"/";
                        // line 264
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loggedUser"]) ? $context["loggedUser"] : null), "nick"), "html", null, true);
                        echo "#";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "postInfo"), "id"), "html", null, true);
                        echo "\" data-id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "postInfo"), "id"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "postInfo"), "url"), "html", null, true);
                        echo "</a>
                        </small>
                      ";
                    } else {
                        // line 267
                        echo "                        <small>";
                        echo twig_escape_filter($this->env, (isset($context["userNick"]) ? $context["userNick"] : null), "html", null, true);
                        echo " vám ohodnotil 
                        <a href=\"/";
                        // line 268
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loggedUser"]) ? $context["loggedUser"] : null), "nick"), "html", null, true);
                        echo "#";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "postInfo"), "id"), "html", null, true);
                        echo "\" data-id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "postInfo"), "id"), "html", null, true);
                        echo "\">odkaz</a>
                        číslem <strong>";
                        // line 269
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "info"), "value"), "html", null, true);
                        echo "</strong>.
                        <a href=\"/";
                        // line 270
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loggedUser"]) ? $context["loggedUser"] : null), "nick"), "html", null, true);
                        echo "#";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "postInfo"), "id"), "html", null, true);
                        echo "\" data-id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "postInfo"), "id"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "postInfo"), "title"), "html", null, true);
                        echo "</a>
                        </small>
                      ";
                    }
                    // line 273
                    echo "                    ";
                }
                // line 274
                echo "                    ";
                if (($this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "info"), "type") == "comment")) {
                    // line 275
                    echo "                      <small>";
                    echo twig_escape_filter($this->env, (isset($context["userNick"]) ? $context["userNick"] : null), "html", null, true);
                    echo " vám okomentoval profil
                        \"<strong>
                          ";
                    // line 277
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "info"), "value")) > 59)) {
                        // line 278
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "info"), "value"), "html", null, true);
                        echo "...
                          ";
                    } else {
                        // line 280
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "info"), "value"), "html", null, true);
                        echo "
                          ";
                    }
                    // line 282
                    echo "                        </strong>\"
                      </small>\t
                    ";
                }
                // line 285
                echo "                    ";
                if (($this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "info"), "type") == "follow")) {
                    // line 286
                    echo "                      <small>";
                    echo twig_escape_filter($this->env, (isset($context["userNick"]) ? $context["userNick"] : null), "html", null, true);
                    echo " vás nyní sleduje.</small>\t
                    ";
                }
                // line 288
                echo "                  </p>
                </span> 
              </div>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 293
            echo "            </div>
          </div>
          <div class=\"nano messageNotificationBlock\">
            <div class=\"content\">
              ";
            // line 297
            if (twig_test_empty((isset($context["messages"]) ? $context["messages"] : null))) {
                // line 298
                echo "                <div class=\"content-notification-box\">
                <div class=\"content-msg-storage\">
                  <div class=\"content-msg-photo\" style=\"background-image: url('/";
                // line 300
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loggedUser"]) ? $context["loggedUser"] : null), "avatar"), "html", null, true);
                echo "'); margin-top: 2px\">
                      ";
                // line 301
                ob_start();
                // line 302
                echo "                        <a href=\"/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loggedUser"]) ? $context["loggedUser"] : null), "nick"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "userInfo"), "nick"), "html", null, true);
                echo "</a>
                      ";
                $context["userNick"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 304
                echo "                      ";
                ob_start();
                // line 305
                echo "                        ";
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "info"), "content")) > 0)) {
                    // line 306
                    echo "                          \"";
                    echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "info"), "content"), 0, 40), "html", null, true);
                    echo "\"
                        ";
                }
                // line 308
                echo "                      ";
                $context["post"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 309
                echo "                      <a href=\"/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loggedUser"]) ? $context["loggedUser"] : null), "nick"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loggedUser"]) ? $context["loggedUser"] : null), "nick"), "html", null, true);
                echo "\">
                        <img class=\"content-msg-photo-avatar avatar-underline\" src=\"/";
                // line 310
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loggedUser"]) ? $context["loggedUser"] : null), "avatar"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loggedUser"]) ? $context["loggedUser"] : null), "nick"), "html", null, true);
                echo "\">
                      </a>
                  </div>
                  <span class=\"content-msg-text\">
                    <p>
                    <small>Sem budete dostávat zprávy od uživatelů.</small>\t
                    </p>
                  </span> 
                </div>
                </div>
              ";
            }
            // line 321
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 322
                echo "              <div class=\"content-notification-box message-storage\" data-user=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "userInfo"), "id"), "html", null, true);
                echo "\" data-username=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "userInfo"), "nick"), "html", null, true);
                echo "\">
              <div class=\"content-msg-storage\">
                <div class=\"content-msg-photo\" style=\"margin-top: 2px; background-image: url('/";
                // line 324
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "userInfo"), "avatar"), "html", null, true);
                echo "');\">
                    ";
                // line 325
                ob_start();
                // line 326
                echo "                      <a href=\"/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "userInfo"), "nick"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "userInfo"), "nick"), "html", null, true);
                echo "</a>
                    ";
                $context["userNick"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 328
                echo "                    <a href=\"/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "userInfo"), "nick"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "userInfo"), "nick"), "html", null, true);
                echo "\">
                      <img class=\"content-msg-photo-avatar avatar-underline\" src=\"/";
                // line 329
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "userInfo"), "avatar"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "userInfo"), "nick"), "html", null, true);
                echo "\">
                    </a>
                </div>
                <small><a href=\"";
                // line 332
                echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "userInfo"), "nick"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "userInfo"), "nick"), "html", null, true);
                echo "\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "userInfo"), "nick"), "html", null, true);
                echo "</strong></a></small>
                <span class=\"content-msg-text\">
                  <p>
                    <small><span id=\"message-content\" data-user-content=\"";
                // line 335
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "userInfo"), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "content"), 0, 110), "html", null, true);
                echo "</span></small>
                  </p>
                </span> 
              </div>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 341
            echo "            </div>
          </div>
          <div class=\"nano followerBlock\">
            <div class=\"content\">
              ";
            // line 345
            if (twig_test_empty((isset($context["followersNotification"]) ? $context["followersNotification"] : null))) {
                // line 346
                echo "                <div class=\"content-notification-box\">
                <div class=\"content-msg-storage\">
                  <div class=\"content-msg-photo\" style=\"background-image: url('/";
                // line 348
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loggedUser"]) ? $context["loggedUser"] : null), "avatar"), "html", null, true);
                echo "'); margin-top: 2px\">
                      ";
                // line 349
                ob_start();
                // line 350
                echo "                        <a href=\"/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loggedUser"]) ? $context["loggedUser"] : null), "nick"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "userInfo"), "nick"), "html", null, true);
                echo "</a>
                      ";
                $context["userNick"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 352
                echo "                      ";
                ob_start();
                // line 353
                echo "                        ";
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "info"), "content")) > 0)) {
                    // line 354
                    echo "                          \"";
                    echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "info"), "content"), 0, 40), "html", null, true);
                    echo "\"
                        ";
                }
                // line 356
                echo "                      ";
                $context["post"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 357
                echo "                      <a href=\"/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loggedUser"]) ? $context["loggedUser"] : null), "nick"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loggedUser"]) ? $context["loggedUser"] : null), "nick"), "html", null, true);
                echo "\">
                        <img class=\"content-msg-photo-avatar avatar-underline\" src=\"/";
                // line 358
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loggedUser"]) ? $context["loggedUser"] : null), "avatar"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loggedUser"]) ? $context["loggedUser"] : null), "nick"), "html", null, true);
                echo "\">
                      </a>
                  </div>
                  <span class=\"content-msg-text\">
                    <p>
                    <small>Sem budete dostávat upozornění od sledovaných uživatelů.</small>\t
                    </p>
                  </span> 
                </div>
                </div>
              ";
            }
            // line 369
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["followersNotification"]) ? $context["followersNotification"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 370
                echo "                <div class=\"content-notification-box\">
                <div class=\"content-msg-storage\">
                  <div class=\"content-msg-photo\" style=\"background-image: url('/";
                // line 372
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "userInfo"), "avatar"), "html", null, true);
                echo "'); margin-top: 2px\">
                      ";
                // line 373
                ob_start();
                // line 374
                echo "                        <a href=\"/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "userInfo"), "nick"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "userInfo"), "nick"), "html", null, true);
                echo "</a>
                      ";
                $context["userNick"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 376
                echo "                      ";
                ob_start();
                // line 377
                echo "                        ";
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "info"), "content")) > 0)) {
                    // line 378
                    echo "                          \"";
                    echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "info"), "content"), 0, 40), "html", null, true);
                    echo "\"
                        ";
                }
                // line 380
                echo "                      ";
                $context["post"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 381
                echo "                      <a href=\"/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "userInfo"), "nick"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "userInfo"), "nick"), "html", null, true);
                echo "\">
                        <img class=\"content-msg-photo-avatar avatar-underline\" src=\"/";
                // line 382
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "userInfo"), "avatar"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "userInfo"), "nick"), "html", null, true);
                echo "\">
                      </a>
                  </div>
                  <span class=\"content-msg-text\">
                    <p>
                      <small>";
                // line 387
                echo twig_escape_filter($this->env, (isset($context["userNick"]) ? $context["userNick"] : null), "html", null, true);
                echo " má nový <a href=\"/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "userInfo"), "nick"), "html", null, true);
                echo "#";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "info"), "id"), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "info"), "id"), "html", null, true);
                echo "\">příspěvek</a> ";
                echo twig_escape_filter($this->env, (isset($context["post"]) ? $context["post"] : null), "html", null, true);
                echo ".</small>\t
                    </p>
                  </span> 
                </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 393
            echo "            </div>
          </div>
            <div class=\"header-user-find\">
                <input type=\"text\" class=\"input-group form-control\" placeholder=\"Najít uživatele\" aria-describedby=\"sizing-addon2\">
            </div>
            <div class=\"header-user-find-box\"></div>
          </div>
          ";
        }
        // line 401
        echo "      </div>
\t\t<div class=\"nano contentComments\">
\t\t\t<div class=\"content\">
\t\t\t\t<div class=\"insert-content-msg\" id=\"content-msg-insert\">
\t\t\t\t\t<textarea name=\"\" class=\"form-control content-box-input comment-content\" maxlength=\"500\" placeholder=\"Zanechte vzkaz\"></textarea>
\t\t\t\t\t<input type=\"hidden\" class=\"comment-user\" name=\"user\" value=\"";
        // line 406
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
        echo "\"></input>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-success content-box-comment-add-button\">Přidat</button>
\t\t\t\t\t<img class=\"comment-loading\" src=\"/templates/images/ajax-loader.gif\"></img>
\t\t\t\t\t<img class=\"comment-success\" src=\"/images/success-icon.png\"></img>
\t\t\t\t</div>
        ";
        // line 411
        if (twig_test_empty((isset($context["comments"]) ? $context["comments"] : null))) {
            // line 412
            echo "\t\t\t\t<div class=\"content-comments-box\" style=\"margin-left: 5px\">
\t\t\t\t\t<div class=\"content-msg-storage\">
            Nemáte žádne komentáře, tak to je tedy nepříjemné.
          </div>
        </div>
        ";
        }
        // line 418
        echo "\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 419
            echo "\t\t\t\t<div class=\"content-comments-box\">
\t\t\t\t\t<div class=\"content-msg-storage\">
\t\t\t\t\t\t\t";
            // line 421
            if (($this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "info"), "user_from") == 0)) {
                // line 422
                echo "\t\t\t\t\t\t\t<div class=\"content-msg-photo\" style=\"background-image: url('";
                echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["defaultAvatar"]) ? $context["defaultAvatar"] : null), "html", null, true);
                echo "')\">
\t\t\t\t\t\t\t\t<img class=\"content-msg-photo-avatar\" src=\"";
                // line 423
                echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["defaultAvatar"]) ? $context["defaultAvatar"] : null), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
            } else {
                // line 425
                echo "\t\t\t\t\t\t\t<div class=\"content-msg-photo\" style=\"background-image: url('/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "userInfo"), "avatar"), "html", null, true);
                echo "')\">
\t\t\t\t\t\t\t<a href=\"";
                // line 426
                echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "userInfo"), "nick"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "userInfo"), "nick"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<img class=\"content-msg-photo-avatar avatar-underline\" src=\"";
                // line 427
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "userInfo"), "avatar"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "userInfo"), "nick"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 430
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"comment-wrap-rate\">
                ";
            // line 432
            if ((isset($context["currentProfile"]) ? $context["currentProfile"] : null)) {
                // line 433
                echo "                  <span class=\"glyphicon glyphicon-remove delete-comment\" data-comment=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "info"), "id"), "html", null, true);
                echo "\" style=\"font-size: 10px\"></span>
                ";
            }
            // line 435
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "info"), "user_from") != 0)) {
                // line 436
                echo "                  <span class=\"glyphicon glyphicon-star\" style=\"font-size: 10px\">
                  <span class=\"comment-rating\"><a href=\"";
                // line 437
                echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "userInfo"), "nick"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "rating"), "html", null, true);
                echo "</a></span>
                ";
            }
            // line 439
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"";
            // line 440
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "userInfo"), "nick"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "userInfo"), "nick"), "html", null, true);
            echo "\"><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "userInfo"), "nick"), "html", null, true);
            echo "</strong></a>
\t\t\t\t\t\t<div class=\"content-msg-wraper-text\">
\t\t\t\t\t\t\t<span class=\"content-msg-text\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t";
            // line 444
            echo $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "info"), "content");
            echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</span> 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 451
        echo "\t\t\t</div>
\t\t</div>
\t\t\t<div class=\"content\">
        <div class=\"contentStats\">
          <div class=\"profile-box-information\">
            <div class=\"content-rate\">
              ";
        // line 457
        if (twig_test_empty($this->getAttribute((isset($context["userParams"]) ? $context["userParams"] : null), "profileRating"))) {
            // line 458
            echo "                <small>Nemáte žádné hodnocení</small>
              ";
        } else {
            // line 460
            echo "                <span> Celkové hodnocení profilu</span>
              ";
        }
        // line 462
        echo "              <span class=\"rating\" id=\"profileRating\" title=\"Celkové hodnocení profilu\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userParams"]) ? $context["userParams"] : null), "profileRating"), "html", null, true);
        echo "</span>
            </div>
            <div class=\"content-photo\" style=\"background-image: url('/";
        // line 464
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "avatar"), "html", null, true);
        echo "');\">
              <div class=\"content-pretty-photo\">
                ";
        // line 466
        if ((isset($context["currentProfile"]) ? $context["currentProfile"] : null)) {
            // line 467
            echo "                  <div class=\"content-change-photo\">
                    <form action=\"\" class=\"form-fileUpload-avatar\" id=\"formToUpload\" method=\"POST\" enctype=\"multipart/form-data\">
                      <input type=\"file\" style=\"display: none\" class=\"fileToUpload\" name=\"photoSubmit\" value=\"Změnit profilovou fotku\">
                    </form>
                    <button class=\"file-trigger-avatar\">Změnit profilovou fotku</button>
                  </div>
                ";
        }
        // line 474
        echo "                <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "avatar"), "html", null, true);
        echo "\" rel=\"p\">
                  <img class=\"content-photo-avatar\" src=\"/";
        // line 475
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "avatar"), "html", null, true);
        echo "\" style=\"opacity: 0\">
                </a>
              </div>
            </div>
            <div class=\"content-person-info\">
              <span><a href=\"/";
        // line 480
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "nick"), "html", null, true);
        echo "\">
                  ";
        // line 481
        if (twig_test_empty($this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "name"))) {
            // line 482
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "nick"), "html", null, true);
            echo "
                  ";
        } else {
            // line 484
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "name"), "html", null, true);
            echo "
                  ";
        }
        // line 486
        echo "              </a></span>
            </div>
          </div>
          <div class=\"rating-panel\">
            <div class=\"rating-stats\">
              <p class=\"rating-value\" id=\"ratingCount\">";
        // line 491
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userParams"]) ? $context["userParams"] : null), "ratingCount"), "html", null, true);
        echo "</p>
              <p>počet hodnocení</p>
            </div>
           <div class=\"rating-stats\">
             <p class=\"rating-value\" id=\"currentFollowingCount\">";
        // line 495
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userParams"]) ? $context["userParams"] : null), "postsCount"), "html", null, true);
        echo "</p>
             <p>příspěvků</p>
           </div>
           <div class=\"rating-stats\">
             <p class=\"rating-value\" id=\"currentFollowingCount\">";
        // line 499
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userParams"]) ? $context["userParams"] : null), "currentFollowingCount"), "html", null, true);
        echo "</p>
             <p><a href=\"#\" id=\"click-follow\">sleduji</a></p>
           </div>
           <div class=\"rating-stats\">
             <p class=\"rating-value\" id=\"followersCount\">";
        // line 503
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userParams"]) ? $context["userParams"] : null), "followersCount"), "html", null, true);
        echo "</p>
             <p><a href=\"#\" id=\"click-followers\">sledující</a></p>
           </div>
            ";
        // line 506
        if ((isset($context["isLogged"]) ? $context["isLogged"] : null)) {
            // line 507
            echo "              ";
            if ((!(isset($context["currentProfile"]) ? $context["currentProfile"] : null))) {
                // line 508
                echo "                <button type=\"button\" class=\"btn btn-default button\" id=\"send-message\">Poslat zprávu</button>
                <br>
                ";
                // line 510
                if ((isset($context["isUserFollowed"]) ? $context["isUserFollowed"] : null)) {
                    // line 511
                    echo "                  <button type=\"button\" class=\"btn btn-success button active follower-watch\" title=\"Přestat sledovat\" id=\"user-stop-follow\">Přestat sledovat</button>
                  <button type=\"button\" class=\"btn btn-success button follower-watch\" style=\"display: none\" id=\"user-follow\">Sledovat uživatele</button>
                  <br>
                ";
                } else {
                    // line 515
                    echo "                  <button type=\"button\" class=\"btn btn-success button follower-watch\" id=\"user-follow\">Sledovat uživatele</button>
                  <button type=\"button\" class=\"btn btn-success button active follower-watch\" style=\"display: none\" title=\"Přestat sledovat\" id=\"user-stop-follow\">Přestat sledovat</button>
                  <br>
                ";
                }
                // line 519
                echo "              ";
            }
            // line 520
            echo "            ";
        }
        // line 521
        echo "          </div>
          ";
        // line 522
        if (((!twig_test_empty($this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "information"))) || (isset($context["currentProfile"]) ? $context["currentProfile"] : null))) {
            // line 523
            echo "            <div class=\"user-information-bar\">
              ";
            // line 524
            if ((isset($context["currentProfile"]) ? $context["currentProfile"] : null)) {
                // line 525
                echo "                <textarea placeholder=\"Něco o tobě\" class=\"textarea-information\" maxlength=\"150\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "information"), "html", null, true);
                echo "</textarea>
              ";
            }
            // line 527
            echo "                <div style=\"margin: 5px;\" class=\"raw-information\">
                  ";
            // line 528
            echo (isset($context["userRawInfo"]) ? $context["userRawInfo"] : null);
            echo "
                </div>
                ";
            // line 530
            if ((isset($context["currentProfile"]) ? $context["currentProfile"] : null)) {
                // line 531
                echo "                    <button class=\"btn btn-default btn-sm\" id=\"information-change\">Změnit informace</button>
              <img class=\"loading-bar\" src=\"/templates/images/ajax-loader.gif\"></img>
              <img class=\"loading-bar-success\" src=\"/images/success-icon.png\"></img>
                ";
            }
            // line 535
            echo "            </div>
          ";
        }
        // line 537
        echo "        </div>
        ";
        // line 538
        if ((isset($context["uploadingPhotoFailed"]) ? $context["uploadingPhotoFailed"] : null)) {
            // line 539
            echo "          <div class=\"uploading-content-failed\" style=\"display: block\">
        ";
        } else {
            // line 541
            echo "          <div class=\"uploading-content-failed\" style=\"display: none\">
        ";
        }
        // line 543
        echo "          <p>
            Nepodařilo se nahrát obsah, foto mělo více než 1 Mb.
          </p>
        </div>
        ";
        // line 547
        if ((!twig_test_empty((isset($context["posts"]) ? $context["posts"] : null)))) {
            // line 548
            echo "            <div class=\"btn-group\" style=\"margin-top: -5px; margin-right: 15px\">
            <button type=\"button\" class=\"btn btn-default profile-button btn-sm dropdown-toggle sort-button\" data-toggle=\"dropdown\" >
              Řadit od<span class=\"caret\"></span>
            </button>
            <ul class=\"dropdown-menu pull-right\" role=\"menu\">
              <li><a href=\"/";
            // line 553
            echo twig_escape_filter($this->env, (isset($context["nick"]) ? $context["nick"] : null), "html", null, true);
            echo "\">Nejnovějších</a></li>
              <li><a href=\"/";
            // line 554
            echo twig_escape_filter($this->env, (isset($context["nick"]) ? $context["nick"] : null), "html", null, true);
            echo "/best\">Nejlepších</a></li>
              <li><a href=\"/";
            // line 555
            echo twig_escape_filter($this->env, (isset($context["nick"]) ? $context["nick"] : null), "html", null, true);
            echo "/worst\">Nejhorších</a></li>
            </ul>
          </div>
        ";
        }
        // line 559
        echo "\t\t\t\t";
        if ((isset($context["currentProfile"]) ? $context["currentProfile"] : null)) {
            // line 560
            echo "\t\t\t\t\t<div class=\"content-msg-box post-insert-center\" id=\"content-post-insert\">
\t\t\t\t\t\t<input type=\"url\" class=\"form-control content-box-input\" id=\"post-inserting\" placeholder=\"Vložte odkaz toho co chcete hodnotit\"></input>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default content-box-photo-button\">Nahrát fotku</button>
\t\t\t\t\t\t<div class=\"post-photo-upload\" style=\"display: none\">
\t\t\t\t\t\t\t<form action=\"\" class=\"form-fileUpload-avatar\" id=\"formToUpload\" method=\"POST\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t\t<textarea rows='2' name=\"content\" class='post-content form-control content-box-textarea' maxlength=\"450\" placeholder='Pridej popisek'></textarea>
\t\t\t\t\t\t\t\t<input type=\"file\" class=\"postFileToUpload btn btn-default\" style=\"margin-left: 10px; width: 320px\" name=\"post-photo\" value=\"Vybrat fotku\">
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-success\" style=\"margin-left: 10px; font-size: 11px; font-weight: bold; margin-top: 10px;\" value=\"Nahrát\">
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<img class=\"content-loading\" src=\"/templates/images/ajax-loader.gif\"></img>
\t\t\t\t\t\t<img class=\"post-success\" src=\"/images/success-icon.png\"></img>
\t\t\t\t\t\t<div class=\"insertion\">
\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t\t<span class=\"content-title\"></span>
\t\t\t\t\t\t\t<div class=\"content-preview-photo\"></div>
\t\t\t\t\t\t\t<input type=\"hidden\" class=\"post-title\" name=\"title\" value=\"\"></input>
\t\t\t\t\t\t\t<input type=\"hidden\" class=\"post-url\" name=\"url\" value=\"\"></input>
\t\t\t\t\t\t\t<textarea rows='2' name=\"content\" class='post-content form-control content-box-textarea' placeholder='Pridej popisek'></textarea>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success content-box-add-button\">Přidat příspěvek</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 583
        echo "        ";
        if (twig_test_empty((isset($context["posts"]) ? $context["posts"] : null))) {
            // line 584
            echo "          ";
            if ((isset($context["currentProfile"]) ? $context["currentProfile"] : null)) {
                // line 585
                echo "            Nemáte žádné příspěvky, chcete se ukázat? Stačí vložit odkaz nebo fotku a svět vás bude milovat! 
          ";
            } else {
                // line 587
                echo "            Nejsou zde žádné příspěvky. 
          ";
            }
            // line 589
            echo "        ";
        }
        // line 590
        echo "\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 591
            echo "\t\t\t\t\t<div class=\"content-msg-box content-posting\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "info"), "id"), "html", null, true);
            echo "\">
\t\t\t\t\t\t<div class=\"content-msg-storage\">
\t\t\t\t\t\t\t\t<div class=\"clearer\"></div>
\t\t\t\t\t\t\t<div class=\"content-msg-user\">
\t\t\t\t\t\t\t\t<div class=\"content-msg-photo\" style=\"background-image: url('/";
            // line 595
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "avatar"), "html", null, true);
            echo "')\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 596
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["nick"]) ? $context["nick"] : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "nick"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<img class=\"content-msg-photo-avatar\" style=\"opacity: 0\" src=\"/";
            // line 597
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "avatar"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "nick"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
                <div style=\"position: absolute; margin-left: 53px; margin-top: 7px\">
                  <table>
                    <tr>
                      <td class=\"post-username\">
                        <a href=\"";
            // line 604
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["nick"]) ? $context["nick"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["nick"]) ? $context["nick"] : null), "html", null, true);
            echo "</a>
                      </td>
                    </tr>
                    <tr>
                      <td class=\"content-msg-date\">
                        <small>";
            // line 609
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date"), "html", null, true);
            echo "</small>
                      </td>
                    </tr>
                  </table>
                </div>
\t\t\t\t\t\t\t\t<div class=\"content-msg-user-rate\">
                  <div class=\"btn-group dropdown\" style=\"float: left; margin-left: 10px; margin-top: -4px\">
                    <button type=\"button\" class=\"btn btn-default profile-button btn-sm dropdown-toggle\" data-toggle=\"dropdown\" >
                      <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                    ";
            // line 620
            if ((isset($context["currentProfile"]) ? $context["currentProfile"] : null)) {
                // line 621
                echo "                      <li><a href=\"/";
                echo twig_escape_filter($this->env, (isset($context["nick"]) ? $context["nick"] : null), "html", null, true);
                echo "/remove/post/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "info"), "id"), "html", null, true);
                echo "\">Smazat příspěvek</a></li>
                    ";
            }
            // line 623
            echo "                      <li><a href=\"/";
            echo twig_escape_filter($this->env, (isset($context["nick"]) ? $context["nick"] : null), "html", null, true);
            echo "/post/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "info"), "id"), "html", null, true);
            echo "\">Jít na příspěvek</a></li>
                    </ul>
                  </div>
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\" style=\"font-size: 12px\"></span><span class=\"msg-user-rate\" title=\"Průmerné hodnocení příspevku\">";
            // line 626
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "rating"), "avg"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"content-msg-text\">
\t\t\t\t\t\t\t\t<p>";
            // line 630
            echo $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "info"), "content");
            echo "</p>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
            // line 632
            if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "info"), "embedHtml")) {
                // line 633
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "info"), "embedHtml");
                echo "
\t\t\t\t\t\t\t\t";
            } else {
                // line 635
                echo "\t\t\t\t\t\t\t\t\t<div class=\"content-pretty-photo\">
\t\t\t\t\t\t\t\t\t\t";
                // line 636
                if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "info"), "image")) {
                    // line 637
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "info"), "url"), "html", null, true);
                    echo "\" rel=\"p\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"content-pretty-photo-detail\" src=\"";
                    // line 638
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "info"), "url"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 641
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "info"), "url"), "html", null, true);
                    echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"content-pretty-photo-detail\" src=\"";
                    // line 642
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "info"), "view_image"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 645
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                // line 646
                if ((!$this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "info"), "image"))) {
                    echo "\t\t
\t\t\t\t\t\t\t\t\t\t<span><a href=\"";
                    // line 647
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "info"), "url"), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "info"), "title"), "html", null, true);
                    echo "</a></span>
\t\t\t\t\t\t\t\t\t";
                }
                // line 649
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 650
            echo "\t\t\t\t\t\t\t<img class=\"rating-loading\" src=\"/templates/images/ajax-loader.gif\"></img>
\t\t\t\t\t\t\t<img class=\"rating-success\" src=\"/images/success-icon.png\" title=\"Hodnoceno\"></img>
\t\t\t\t\t\t\t";
            // line 652
            if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "isRated")) {
                // line 653
                echo "\t\t\t\t\t\t\t<img class=\"rating-success\" style=\"display: block\" src=\"/images/success-icon.png\" title=\"Hodnoceno\"></img>
\t\t\t\t\t\t\t";
            }
            // line 655
            echo "\t\t\t\t\t\t\t<!--<span class=\"post-hash\"><a href=\"#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "info"), "id"), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "info"), "id"), "html", null, true);
            echo "\">#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "info"), "id"), "html", null, true);
            echo "</a></span>!-->
\t\t\t\t\t\t\t";
            // line 656
            if (((!(isset($context["currentProfile"]) ? $context["currentProfile"] : null)) && (!$this->getAttribute((isset($context["post"]) ? $context["post"] : null), "isRated")))) {
                // line 657
                echo "\t\t\t\t\t\t\t<div class=\"content-msg-rating\"><div class=\"slider\"></div></div>
\t\t\t\t\t\t\t<input type=\"hidden\" class=\"post-id\" value=\"";
                // line 658
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "info"), "id"), "html", null, true);
                echo "\"></input>
\t\t\t\t\t\t\t<input type=\"hidden\" class=\"user-id\" value=\"";
                // line 659
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "info"), "user"), "html", null, true);
                echo "\"></input>
\t\t\t\t\t\t\t";
            }
            // line 661
            echo "\t\t\t\t\t\t\t<div class=\"content-msg-line\"></div>
              <span style=\"color: #A6A6A6;\"><small>Hodnoceno: ";
            // line 662
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "rating"), "count"), "html", null, true);
            echo "x</small></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 666
        echo "\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t\t</div>
\t</div>
</div>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1456 => 666,  1446 => 662,  1443 => 661,  1438 => 659,  1434 => 658,  1431 => 657,  1429 => 656,  1420 => 655,  1416 => 653,  1414 => 652,  1410 => 650,  1407 => 649,  1400 => 647,  1396 => 646,  1393 => 645,  1387 => 642,  1382 => 641,  1376 => 638,  1371 => 637,  1369 => 636,  1366 => 635,  1360 => 633,  1358 => 632,  1353 => 630,  1346 => 626,  1337 => 623,  1329 => 621,  1327 => 620,  1313 => 609,  1302 => 604,  1290 => 597,  1283 => 596,  1279 => 595,  1271 => 591,  1266 => 590,  1263 => 589,  1259 => 587,  1255 => 585,  1252 => 584,  1249 => 583,  1224 => 560,  1221 => 559,  1214 => 555,  1210 => 554,  1206 => 553,  1199 => 548,  1197 => 547,  1191 => 543,  1187 => 541,  1183 => 539,  1181 => 538,  1178 => 537,  1174 => 535,  1168 => 531,  1166 => 530,  1161 => 528,  1158 => 527,  1152 => 525,  1150 => 524,  1147 => 523,  1145 => 522,  1142 => 521,  1139 => 520,  1136 => 519,  1130 => 515,  1124 => 511,  1122 => 510,  1118 => 508,  1115 => 507,  1113 => 506,  1107 => 503,  1100 => 499,  1093 => 495,  1086 => 491,  1079 => 486,  1073 => 484,  1067 => 482,  1065 => 481,  1061 => 480,  1053 => 475,  1048 => 474,  1039 => 467,  1037 => 466,  1032 => 464,  1026 => 462,  1022 => 460,  1018 => 458,  1016 => 457,  1008 => 451,  995 => 444,  983 => 440,  980 => 439,  972 => 437,  969 => 436,  966 => 435,  960 => 433,  958 => 432,  954 => 430,  946 => 427,  939 => 426,  934 => 425,  928 => 423,  922 => 422,  920 => 421,  916 => 419,  911 => 418,  903 => 412,  901 => 411,  893 => 406,  886 => 401,  876 => 393,  856 => 387,  846 => 382,  839 => 381,  836 => 380,  830 => 378,  827 => 377,  824 => 376,  816 => 374,  814 => 373,  810 => 372,  806 => 370,  801 => 369,  785 => 358,  778 => 357,  775 => 356,  769 => 354,  766 => 353,  763 => 352,  755 => 350,  753 => 349,  749 => 348,  745 => 346,  743 => 345,  737 => 341,  723 => 335,  712 => 332,  704 => 329,  697 => 328,  689 => 326,  687 => 325,  683 => 324,  675 => 322,  670 => 321,  654 => 310,  647 => 309,  644 => 308,  638 => 306,  635 => 305,  632 => 304,  624 => 302,  622 => 301,  618 => 300,  614 => 298,  612 => 297,  606 => 293,  596 => 288,  590 => 286,  587 => 285,  582 => 282,  576 => 280,  570 => 278,  568 => 277,  562 => 275,  559 => 274,  556 => 273,  544 => 270,  540 => 269,  532 => 268,  527 => 267,  515 => 264,  511 => 263,  503 => 262,  498 => 261,  495 => 260,  493 => 259,  488 => 256,  480 => 253,  473 => 252,  465 => 250,  463 => 249,  458 => 248,  453 => 246,  448 => 245,  446 => 244,  441 => 241,  439 => 240,  436 => 239,  431 => 238,  415 => 227,  408 => 226,  405 => 225,  399 => 223,  396 => 222,  393 => 221,  385 => 219,  383 => 218,  379 => 217,  375 => 215,  373 => 214,  353 => 196,  351 => 195,  348 => 194,  340 => 188,  329 => 180,  318 => 171,  316 => 170,  313 => 169,  300 => 162,  297 => 161,  295 => 160,  283 => 150,  272 => 145,  262 => 140,  253 => 136,  247 => 135,  243 => 134,  234 => 131,  230 => 129,  228 => 128,  215 => 117,  204 => 112,  194 => 107,  185 => 103,  179 => 102,  175 => 101,  166 => 98,  162 => 96,  160 => 95,  117 => 58,  96 => 43,  85 => 37,  78 => 36,  74 => 35,  68 => 32,  64 => 31,  57 => 28,  54 => 27,  48 => 25,  45 => 24,  43 => 23,  19 => 1,);
    }
}
