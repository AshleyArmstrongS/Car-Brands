<?php
 try{
  $config = require('config.php');
  define('SITE_BASE_DIR', '/wp_ca3_Armstrong_Ashley');
  
  // Include the Rapid library
  require_once('lib/Rapid.php');

  // Create a new Router instance
  $app = new \Rapid\Router();

  // Define some routes. Here: requests to / will be
  // processed by the controller at controllers/Home.php

  //main views
  $app->GET('/home', 'Home');
  $app->GET('/car_list', 'Car_List');
//deletes
  $app->GET('/brand_del', 'Car_Del');
  $app->GET('/model_del','Model_Del');
//brand add
  $app->GET('/brand_add','Brand_Add');
  $app->POST('/brand_add','Brand_Add_P');
//model add
  $app->GET('/model_add','Model_Add');
  $app->POST('/model_add','Model_Add_P');
//brand, model search
  $app->GET('/search_brand','Search_Brand');
//brand update
  $app->GET('/brand_update','Brand_Update');
  $app->POST('/brand_update','Brand_Update_P');
//model update
  $app->GET('/model_update','Model_Update');
  $app->POST('/model_update','Model_Update_P');
  // Process the request
  $app->dispatch();
 }
 catch(\Rapid\RouteNotFoundException $e){
 $e->getResponseObject()->render('main','404',[]);
 }
 catch (PDOException $e) {
    $error_message = $e ->getMessage();
    include("./templates/views/database_error.php");
   exit();
 }
 catch(Exception $e){
     http_response_code(500);
   exit();
}
?>