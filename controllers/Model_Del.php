<?php return function($req, $res) {

    //db
    require('config.php');
    $db = require('./lib/database.php');

    //require
    require('./model/car_m_model.php');

    //req
    $mD=$req->query('model_id');

    if (!isset($model_id)) {

        if ($model_id == NULL || $model_id == FALSE) {
            $model_id= 0;
        }
    }
    
    //sql
    $car_brand = car_m_model::delete_Model_M($db, $mD);

    header("Location: car_list");
    exit();
}
?>