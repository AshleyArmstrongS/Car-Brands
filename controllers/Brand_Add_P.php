<?php return function($req, $res) {
  $config = require('config.php');
  $db = require('./lib/database.php');

  require('./model/car_brand_model.php'); 
  require_once('utils/FormUtils.php');


  $brandName = FormUtils::checkString($req->body('brandName'));
  $brandStatus = FormUtils::checkString($req->body('brandStatus'));
  $brandEstablished = FormUtils::checkYear($req->body('brandEstablished'));
  $parentCompany = FormUtils::checkString($req->body('parentCompany'));
  $brandNetWorth = FormUtils::checkFloat( $brandNetWorth = $req->body('brandNetWorth'), 0);
  $form_error_messages = FormUtils::getFormErrorMessages($brandName, $brandStatus, $brandEstablished, $parentCompany, $brandNetWorth);

  if (count($form_error_messages) > 0) {
      $res->render('/main','brand_add',[
      'error_messages' => $form_error_messages
    ]);
  } else {
    car_brand_model::add_Brand($db, [
      'brand_name' => $brandName['value'],
      'brand_status' => $brandStatus['value'],
      'brand_establishment' => $brandEstablished['value'],
      'parent_company' => $parentCompany['value'],
      'brand_net_worth' => $brandNetWorth['value']
    ]);
    $res->redirect('/brand_add?success=1');
  }
} ?>