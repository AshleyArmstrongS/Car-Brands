<?php return function($req, $res) {
  $car=$req->body('car');
  $config = require('config.php');
  $db = require('./lib/database.php');



$res->redirect('/car_list?success=1');

} ?>