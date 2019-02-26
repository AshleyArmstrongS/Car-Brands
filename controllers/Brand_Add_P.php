<?php return function($req, $res) {
  $car=$req->body('car');
  $config = require('config.php');
  $db = require('./lib/database.php');
  require('./model/car_brand_model.php'); 

  $brandName =  $req->body('brandName');
  $brandStatus = $req->body('brandStatus');
  $brandEstablished = $req->body('brandEstablished');
  $parentCompany = $req->body('parentCompany');
  $brandNetWorth = $req->body('brandNetWorth');

  car_brand_model::add_Brand($db, [
    'brand_name' => $brandName,
    'brand_status' => $brandStatus,
    'brand_establishment' => $brandEstablished,
    'parent_company' => $parentCompany,
    'brand_net_worth' => $brandNetWorth
  ]);
  
  $res->redirect('/brand_add?success=1');
} ?>