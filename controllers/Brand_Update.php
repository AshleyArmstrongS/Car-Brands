<?php return function($req, $res){

  //db
  require('config.php');
  $db = require('./lib/database.php');

  //require
  require('./model/car_brand_model.php');
  
  //req
  $brand_id=$req->query('brand_id');
  
  //sql
  $brand = car_brand_model::return_By_Id($db,$brand_id);

  $res->render('main','brand_update',[
    'return_By_Id' => $brand
  ]);
} ?>