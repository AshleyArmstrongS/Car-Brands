<?php return function($req, $res){
  require('config.php');
  $db = require('./lib/database.php');
  $brand_id=$req->query('brand_id'); 
  require('./model/car_brand_model.php'); 
  $brand = car_brand_model::return_By_Id($db,$brand_id);

  $res->render('main','brand_update',[
    'return_By_Id' => $brand
  ]);
} ?>