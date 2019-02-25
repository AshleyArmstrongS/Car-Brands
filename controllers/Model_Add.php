<?php return function($req, $res){
    require('config.php');
    $db = require('./lib/database.php');
    require('./model/car_brand_model.php'); 
    $brand = car_brand_model::return_Car($db);
    $res->render('main','model_add',[
        'return_Car' => $brand
    ]);
} ?>