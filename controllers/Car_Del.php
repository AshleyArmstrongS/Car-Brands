<?php return function($req, $res) {

    //db
    require('config.php');
    $db = require('./lib/database.php');

    //require
    require('./model/car_brand_model.php'); 
    require('./model/car_m_model.php');

    //req
    $brand_id=$req->body('brand_id');


    if (!isset($brand_id)) {
        if ($brand_id == NULL || $brand_id == FALSE) {
            $brand_id= 0;
        }
    }
        $brand_id = $req->query('brand_id');
        $car_brand = car_m_model::delete_Model_B($db, $brand_id);
        $car_brand = car_brand_model::delete_Brand($db, $brand_id);
        header("Location: car_list");
        exit();
}
?>