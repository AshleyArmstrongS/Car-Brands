<?php
// try{
  $config = require('config.php');
  define('SITE_BASE_DIR', $config['app_base_url']);
  
  // Include the Rapid library
  require_once('lib/Rapid.php');

  // Create a new Router instance
  $app = new \Rapid\Router();

  // Define some routes. Here: requests to / will be
  // processed by the controller at controllers/Home.php
  $app->GET('/', 'Home');
  $app->GET('/car_list', 'Car_List');
  $app->POST('/car_list', 'Car_List_Add');
  $app->GET('/car/(?<id>[0-9]{2})','');

  // Process the request
  $app->dispatch();
// }
// catch(\Rapid\RouteNotFoundException $e){
// $e->getResponseObject()->render('main','404',[]);
// }
// catch (PDOException $e) {
//   $error_message = $e ->getMessage();
//     include("./templates/views/database_error.php");
//   exit();
// }
// catch(Exception $e){
//     http_response_code(500);
//   exit();
// }
?>