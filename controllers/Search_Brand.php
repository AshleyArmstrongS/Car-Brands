<?php return function($req, $res){

   //db
   require('config.php');
   $db = require('./lib/database.php');

   //require
   require('./model/car_brand_model.php'); 
   require('./model/car_m_model.php'); 

   //req
   $search=$req->query('brandSearch');   

   //sql
   $brand_id = car_brand_model::find_id_By_name($db, $search);

   if(empty($brand_id)){

      $brand_id = car_m_model::return_By_Model_Name($db, $search);
      if(empty($brand_id)){
         $brand = $brand_id = "No value Present";
      }
      else{
         $brand = $brand_id['brand_id'];
      }
   }
   else{
      $brand = $brand_id['brand_id'];
   }

   $res->redirect("car_list?brand_id=$brand");

} ?>