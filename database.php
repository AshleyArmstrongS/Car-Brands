<?php
  require_once('config.php');
try {
    $db =  new PDO(
    'mysql:host=' . Config::DB_HOST . ';dbname=' . Config::DB_DB_NAME . ';charset=utf8mb4',
    Config::DB_USER,
    Config::DB_PASS,
    Config::PDO_CONFIG);
} catch (Exception $ex) {
   $error_message = $ex ->getMessage();
     include("database_error.php");
    exit();
}
?>
