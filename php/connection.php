<?php
class Connection
{
  //Connect to the database. 
  public static function connect()
  {
    try{
      // $db = new PDO("mysql:host=localhost;port=3306;dbname=chrispee_netmatters", "root", "");
      $db = new PDO("mysql:host=localhost;port=3306;dbname=chrispee_netmatters", "chrispee_admin", "QzG.naDTMNsX");

      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING ); 
      // echo "Connected to the database!";
      return $db;
    } catch(PDOException $e) {
      echo $e->getMessage();
      exit;
    };
  }
}
?>