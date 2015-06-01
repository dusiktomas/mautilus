<?php

class BaseController {
  /* Base controller for our app */

  private $renderArray = array();
  protected $templatePath = Null;
  private $expectedPost = array('shopName', 'street', 'city', 'zipcode', 'country', 'phone', 'e_mail', 'web', 'gps_lat', 'gps_long');

  public function render(){
    Renderer::render($this->templatePath, $this->getRenderArray());
  }

  public function getGet($item){
    if(isset($_GET[$item])){
      return $_GET[$item];
    }
    return Null;
  }

  public function getPost($item){
    if(isset($_POST[$item])){
      return $_POST[$item];
    }
    return Null;
  }

  public function getFileRequest($item){
    if(isset($_FILES[$item])){
      return $_FILES[$item];
    }
    return Null;
  }

  public function checkPost($array){
    foreach($array as $expectedPost){
      if($this->getPost($expectedPost) === Null or strlen($this->getPost($expectedPost)) == 0){
        throw new PostNotFoundException($expectedPost.' is not in POST!');
      }
    }
    return True;
  }

  public function getRenderArray(){
    return $this->renderArray;
  }

  public function addToRenderArray($item){
    if( ! is_array($item)){
      throw new Exception('Array expected!');
    }
    $this->renderArray = array_merge($this->getRenderArray(), $item);
  }

  protected function getExpectedPost(){
    return $this->expectedPost;
  }
}
class PostNotFoundException extends Exception{}
