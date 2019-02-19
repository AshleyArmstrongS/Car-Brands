<?php return function($req, $res) {

$config = require('config.php');
$db = require('./lib/database.php');
require('./lib/model/car_brand_model.php'); 
$car_brand = car_brand_model::returnCar($db);
$res->render('main','car_list',[]);
} ?>