<?php return function($req, $res){

    //db
    require('config.php');
    $db = require('./lib/database.php');

    //require
    require('./model/car_brand_model.php'); 

    //sql
    $brand = car_brand_model::return_Car($db);

    $res->render('main','model_add',[
        'return_Car' => $brand
    ]);
} ?>