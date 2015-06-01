<?php
require_once '../vendor/twig/twig/lib/Twig/Autoloader.php';
/* Small app dont need autoloader for this case */
require_once 'classes/Database.php';
require_once 'classes/Renderer.php';
require_once 'classes/BaseController.php';
require_once 'classes/IndexController.php';
require_once 'classes/ShopListController.php';


/* shop list */
if(isset($_GET['shoplist'])){
  $shopController = new ShopListController();
  if(isset($_GET['json'])){
    /* save stored data in json */
    return $shopController->saveStoredDataAndRelocate(); 
  }
  return $shopController->render();
}

if(isset($_POST['uploadJsonFile'])){
  $shopController = new ShopListController();
  return $shopController->uploadStoredData(); 
}

/* form */
$indexController = new IndexController();
$indexController->render();
