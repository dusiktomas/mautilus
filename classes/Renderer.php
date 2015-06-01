<?php

class Renderer {
  /* Class for simple rendering */

  private static $instance = Null;
  private $twig = Null;

  public function __construct(){
    Twig_Autoloader::register();
    $loader = new Twig_Loader_Filesystem('templates');
    $this->twig = new Twig_Environment($loader, array(
      'cache' => 'compilation_cache',
      'auto_reload' => true,
    ));
  }

  public static function render($templatePath, $array){
    print(self::getInstance()->twig->loadTemplate($templatePath)->render($array)); 
  }

  private static function getInstance(){
    if(self::$instance === Null){
      self::$instance = new self();
    }
    return self::$instance;
  }
}
