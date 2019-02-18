<?php
 $config = require('config.php');
try {
    $db =  new PDO(
      'mysql:host=' . $config['db_host'] . ';dbname=' . $config['db_name'] . 
      ';charset=utf8mb4',
      $config['db_user'],
      $config['db_pass']
    );
    return $db;
} catch (Exception $ex) {
   $error_message = $ex ->getMessage();
     include("database_error.php");
    exit();
}
?>
