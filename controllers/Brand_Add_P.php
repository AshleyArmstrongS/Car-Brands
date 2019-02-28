<?php return function($req, $res) {
  $config = require('config.php');
  $db = require('./lib/database.php');

  require('./model/car_brand_model.php'); 
  require_once('utils/FormUtils.php');

  $brandStatus = $req->body('brandStatus');
  $brandEstablished = $req->body('brandEstablished'); 
  $brandName = FormUtils::checkString($req->body('brandName'));
  $parentCompany = FormUtils::checkString($req->body('parentCompany'));
  $brandNetWorth = FormUtils::checkFloat( $brandNetWorth = $req->body('brandNetWorth'), 0);
  $form_error_messages = FormUtils::getFormErrorMessages($brandName, $brandEstablished, $parentCompany, $brandNetWorth);

  if (count($form_error_messages) > 0) {
      $res->render('/main','brand_update',[
      'error_messages' => $form_error_messages
    ]);
  } else {
    car_brand_model::add_Brand($db, [
      'brand_name' => $brandName['value'],
      'brand_status' => $brandStatus,
      'brand_establishment' => $brandEstablished,
      'parent_company' => $parentCompany['value'],
      'brand_net_worth' => $brandNetWorth['value']
    ]);
    $res->redirect('/brand_update?success=1');
  }
} ?>