<?php return function($req, $res) {
  $car=$req->body('car');
  $config = require('config.php');
  $db = require('./lib/database.php');

  car_brand_model::add_Brand($db, [
    
  ]);
  
  $res->redirect('/brand_add?success=1');

} ?>