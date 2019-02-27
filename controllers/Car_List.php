<?php return function($req, $res) {

     require('config.php');
    $db = require('./lib/database.php');
    require('./model/car_brand_model.php'); 
    require('./model/car_m_model.php'); 
    $car_brand = car_brand_model::return_Car($db);
    $brand_id = $req->query('brand_id');
    $brand = car_brand_model::return_By_Id($db,$brand_id);
    $brand_model = car_m_model::return_Brand_Model($db, $brand_id);
    $res->render('main','car_list',[
    'return_Car' => $car_brand,
    'return_Brand_Model' => $brand_model,
    'return_By_Id' => $brand
]);
} ?>