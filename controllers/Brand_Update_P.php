<?php return function($req, $res) {
  require('config.php');
  $db = require('./lib/database.php');
  require('./model/car_brand_model.php'); 
  require_once('utils/FormUtils.php');

  $brandId = $req->body('brandId');
  $brandStatus =$req->body('brandStatus');
  $brandEstablished = $req->body('brandEstablished');

  $brandName = FormUtils::checkString($req->body('brandName'), FALSE);
  $parentCompany = FormUtils::checkString($req->body('parentCompany'), TRUE);
  $brandNetWorth = FormUtils::checkFloat( $brandNetWorth = $req->body('brandNetWorth'), 0);
  $form_error_messages = FormUtils::getFormErrorMessages($brandName, $parentCompany, $brandNetWorth);
  if (count($form_error_messages) > 0) {
      $res->render('/main','brand_update',[
      'error_messages' => $form_error_messages
    ]);
  } else {
  car_brand_model::update_Brand($db, [
    'brand_name' => $brandName['value'],
    'brand_status' => $brandStatus,
    'brand_establishment' => $brandEstablished,
    'parent_company' => $parentCompany['value'],
    'brand_net_worth' => $brandNetWorth['value']
  ], $brandId);
}
  $res->redirect('/car_list?update_success=1');
} ?>