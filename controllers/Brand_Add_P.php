<?php return function($req, $res) {
  //db
  $config = require('config.php');
  $db = require('./lib/database.php');
//requires
  require('./model/car_brand_model.php'); 
  require_once('utils/FormUtils.php');
//req 
  $brandStatus = $req->body('brandStatus');
  $brandEstablished = FormUtils::checkYear($req->body('brandEstablished'));
  $brandName = FormUtils::checkString($req->body('brandName'), FALSE);
  $parentCompany = FormUtils::checkString($req->body('parentCompany'),TRUE);
  $brandNetWorth = FormUtils::checkFloat( $brandNetWorth = $req->body('brandNetWorth'), 0);
  //errors
  $form_error_messages = FormUtils::getFormErrorMessages($brandName, $parentCompany, $brandNetWorth, $brandEstablished);

  if (count($form_error_messages) > 0) {
      $res->render('/main','brand_update',[
      'error_messages' => $form_error_messages
    ]);
  } else {
    car_brand_model::add_Brand($db, [
      'brand_name' => $brandName['value'],
      'brand_status' => $brandStatus,
      'brand_establishment' => $brandEstablished['value'],
      'parent_company' => $parentCompany['value'],
      'brand_net_worth' => $brandNetWorth['value']
    ]);
    $res->redirect('/car_list?success=1');
    }
} ?>