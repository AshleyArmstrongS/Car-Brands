<?php return function($req, $res) {
  $car=$req->body('car');
  require('config.php');
  $db = require('./lib/database.php');
  require('./model/car_brand_model.php'); 

  $brandId = $req->body('brandId');
  $brandName =  $req->body('brandName');
  $brandStatus = $req->body('brandStatus');
  $brandEstablished = $req->body('brandEstablished');
  $parentCompany = $req->body('parentCompany');
  $brandNetWorth = $req->body('brandNetWorth');
    echo($brandId);     
  echo($brandName);     

  car_brand_model::update_Brand($db, [
    'brand_name' => $brandName,
    'brand_status' => $brandStatus,
    'brand_establishment' => $brandEstablished,
    'parent_company' => $parentCompany,
    'brand_net_worth' => $brandNetWorth
  ], $brandId);
  
  $res->redirect('/car_list?update_success=1');
} ?>