<?php return function($req, $res) {
  //db
  $config = require('config.php');
  $db = require('./lib/database.php');
//requires
  require('./model/car_m_model.php'); 
  require_once('utils/FormUtils.php');
  //requests
  $modelId = $req->body('modelId');
  $brandId=$req->body('brandId');
  $modelName = FormUtils::checkString($req->body('modelName'), FALSE);
  $yearIntroduced = FormUtils::checkInt($req->body('yearIntroduced'),0);
  $yearDiscontinued = FormUtils::checkInt($req->body('yearDiscontinued'),0);
  $bodyType = FormUtils::checkString($req->body('bodyType'), TRUE);
  $hybrid = $req->body('hybrid');
  $fuelType = $req->body('fuelType');
 //error message checking
 $form_error_messages = FormUtils::getFormErrorMessagesModel($modelName, $yearIntroduced, $yearDiscontinued, $bodyType);
 //error message read out
 if (count($form_error_messages) > 0) {
     $res->render('/main','brand_update',[
     'error_messages' => $form_error_messages
   ]);
 //if no error do 
 } else {
   //excecute
  car_m_model::update_Model($db,[
    'brand_id' => $brandId,
    'model_name' => $modelName['value'],
    'year_introduced' => $yearIntroduced['value'],
    'year_discontinued' => $yearDiscontinued['value'],
    'body_type' => $bodyType['value'],
    'hybrid' => $hybrid,
    'fuel_type' => $fuelType
  ],$modelId);
  //send back to the listing page
    $res->redirect('/car_list?update_success=1');
 }
} ?>