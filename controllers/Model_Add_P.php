<?php return function($req, $res) {
  $car=$req->body('car');
  $config = require('config.php');
  $db = require('./lib/database.php');

  require('./model/car_m_model.php'); 
  car_m_model::add_Model($db,[

    'brand_id' => $brand_id,
    'model_name' => $modelName,
    'year_introduced' => $yearIntroduced,
    'year_discontinued' => $yearDiscontinued,
    'body_type' => $bodyType,
    'hybrid' => $hybrid,
    'fuel_type' => $fuelType

  ]);
  
  
  $res->redirect('/model_add?success=1');

} ?>