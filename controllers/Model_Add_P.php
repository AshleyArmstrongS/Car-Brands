<?php return function($req, $res) {
  $car=$req->body('car');
  $config = require('config.php');
  $db = require('./lib/database.php');

  require('./model/car_m_model.php'); 

  $brandId=$req->body('brandId');
  $modelName = $req->body('modelName');
  $yearIntroduced = $req->body('yearIntroduced');
  $yearDiscontinued = $req->body('yearDiscontinued');
  $bodyType = $req->body('bodyType');
  $hybrid = $req->body('hybrid');
  $fuelType = $req->body('fuelType');
  car_m_model::add_Model($db,[
    'brand_id' => $brandId,
    'model_name' => $modelName,
    'year_introduced' => $yearIntroduced,
    'year_discontinued' => $yearDiscontinued,
    'body_type' => $bodyType,
    'hybrid' => $hybrid,
    'fuel_type' => $fuelType
  ]);
  
  $res->redirect('/model_add?success=1');

} ?>