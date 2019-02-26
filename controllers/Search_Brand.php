<?php return function($req, $res){
 require('config.php');
 $db = require('./lib/database.php');
 require('./model/car_brand_model.php'); 


 $search=$req->query('brandSearch');    
 $brand_id_array = car_brand_model::find_id_By_name($db, $search);
print_r($brand_id_array);
$brand_id = $brand_id_array['brand_id'];

$res->redirect("car_list?brand_id=$brand_id");

} ?>