<?php

class IndexController extends BaseController{
  /* Controller for Index */

  protected $templatePath = 'index.html';

  public function __construct(){
    if($this->getPost('newItemInShop')){
      $this->tryToAddNewItem();
    }
  }

  private function tryToAddNewItem(){
    try {
      if($this->checkPost($this->getExpectedPost())){
        $this->addItemToShop();
      }
    }catch(PostNotFoundException $e){
      $this->addToRenderArray(array('itemAddError' => 'Cannot add item: '.$e->getMessage()));
    }
  }

  private function buildItemsForQuery(){
    /* Toto je trochu hnusné, normálně ORM řeší problém */
    $items = implode(', ',$this->getExpectedPost());
    $allPost = array();
    foreach($this->getExpectedPost() as $expected){
      $allPost[] = $this->getPost($expected);
    }
    $values = '\''.implode("', '", $allPost).'\'';
    $query = 'INSERT INTO items('.$items.') VALUES ('.$values.');';
    return $query;
  }

  private function itemSuccessAddedToShop(){
    $data = '';
    foreach($this->getExpectedPost() as $expected){
      $data .= $expected.' = '.$this->getPost($expected).', ';
    }
    $confirmMessage = 'The following data have been received and successfully added to database: '.$data;
    $this->addToRenderArray(array('itemAddSuccess' => $confirmMessage));
  }

  private function addItemToShop(){
    try {
      Database::query($this->buildItemsForQuery());
      $this->itemSuccessAddedToShop();
    }catch(QueryException $e){
      /* Tady by se hodilo zalogovat do error logeru */
      $this->addToRenderArray(array('itemAddError' => 'Cannot add item to database! '));
    }
  }

}
