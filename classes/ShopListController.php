<?php

class ShopListController extends BaseController{
  /* Controller for work with shop */

  protected $templatePath = 'shoplist.html';
  private $storedData = Null;

  public function __construct(){
    $this->storedData = Database::arrayQuery('SELECT * FROM items');
    $this->addToRenderArray(array('items' => $this->getStoredData()));
  }

  public function saveStoredDataAndRelocate(){
    header('Content-disposition: attachment; filename=storedData.json');
    header('Content-type: application/json');
    print $this->getStoredDataInJson();
  }

  public function uploadStoredData(){
    $file = $this->getFileRequest('jsonFile');
    if($file){
      try{
        $this->validateStoredData();
      }catch(Exception $e){
        print 'Error in uploading: '.$e->getMessage();
      }
      /* make assoc array from file */
      $array = json_decode((file_get_contents($file['tmp_name'])), true);
      if(isset($array['shops'])){
        $this->saveStoredData($array['shops']);
      }
    }
  }

  private function saveStoredData($array){
    foreach($array as $item){
      $this->checkExpectedItems($item);
    }
    //TRUNCATE TABLE before uploading
    Database::query('TRUNCATE TABLE items');
    foreach($array as $item){
      Database::query($this->buildItemsForQuery($item));
    }
    print 'Soubor succesfully uploaded! Go <a href="?">back</a>';
  }

  private function buildItemsForQuery($array){
    $items = implode(', ',$this->getExpectedPost());
    $values = "'".$array['shopName']."', '".$array['street']."', '".$array['city']."', '".$array['zipcode']."',
      '".$array['country']."', '".$array['phone']."', '".$array['e_mail']."', '".$array['web']."', '".$array['gps_lat']."', '".$array['gps_long']."'";
    return 'INSERT INTO items('.$items.') VALUES ('.$values.')';
  }

  private function checkExpectedItems($array){
    foreach($this->getExpectedPost() as $item){
      if( ! array_key_exists($item, $array)){
        throw new ItemNotFoundInJsonException($item. ' is not in the file!');
      }
    }
  }

  private function validateStoredData(){
    /* Because of php version compability */
    $file = $this->getFileRequest('jsonFile');
    if( ! $this->isFileInJson(file_get_contents($file['tmp_name'])) or
      ! $file['type'] == 'application/json'
    ){
      throw new NotInJsonException('File is not in JSON Format!');
    }
  }

  /* for global using */
  private function isFileInJson($string) {
   json_decode($string);
   return (json_last_error() == JSON_ERROR_NONE);
  }

  public function getStoredDataInJson(){
    return json_encode(array('shops' => $this->storedData));
  }

  private function getStoredData(){
    return $this->storedData;
  }
}
class NotInJsonException extends Exception {}
class ItemNotFoundInJsonException extends Exception {}
