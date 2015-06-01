<?php
class Database {
    private static $db = Null;
	
    public static function handler(){
      if(self::$db === Null){
        $mysqli = new mysqli('localhost', 'root', '', 'shop');
        if ($mysqli->connect_error) {
          die('Connect Error (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
        }
        $mysqli->query ("SET NAMES UTF8");
        return self::$db = $mysqli;
      }else{
        return self::$db;
      }
    }
	
    public static function query($query){
      $handle = self::handler()->query($query);
      if( ! $handle){
        throw new QueryException('Sending query has failed : '.$query);
      }
      return $handle;
    }

    public static function arrayQuery($query){
      $result = self::query($query);
      $array = array();
      while($row = $result->fetch_assoc()){
        $array[] = $row;
      }
      return $array;
    }
}
class QueryException extends Exception{}
