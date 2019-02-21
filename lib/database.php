<?php
 $config = require('config.php');
    $db =  new PDO(
      'mysql:host=' . $config['db_host'] . ';dbname=' . $config['db_name'] . 
      ';charset=utf8mb4',
      $config['db_user'],
      $config['db_pass']
    );
    return $db;

?>
