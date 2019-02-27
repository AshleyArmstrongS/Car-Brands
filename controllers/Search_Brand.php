<?php return function($req, $res){
 require('config.php');
 $db = require('./lib/database.php');
 require('./model/car_brand_model.php'); 
 require('./model/car_m_model.php'); 

 $search=$req->query('brandSearch');   
 $brand_id = car_brand_model::find_id_By_name($db, $search);
 if(empty($brand_id)){
 print_r($brand_id);
    $brand_id = car_m_model::return_By_Model_Name($db, $search);
    if(empty($brand_id)){
        $brand_id = "NULL";
    }
    else{
        $brand = $brand_id['brand_id'];
    }
 }
 else{
    $brand = $brand_id['brand_id'];
 }
 
 print_r($brand_id);


$res->redirect("car_list?brand_id=$brand");

} ?>