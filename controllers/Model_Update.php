<?php return function($req, $res){
    require('config.php');
    $db = require('./lib/database.php');
    $model_id = $req->query('model_id');
    require('./model/car_brand_model.php'); 
    require('./model/car_m_model.php');

    $model = car_m_model::return_By_Id($db,$model_id);
    $brands = car_brand_model::return_Car($db);
    $brand_id = $model['brand_id'];
    $brand = car_brand_model::return_By_Id($db, $brand_id);

    $res->render('main','model_update',[
        'return_Car' => $brands,
        'return_Brand_Model' => $model,
        'return_By_Id' => $brand
    ]);
} ?>