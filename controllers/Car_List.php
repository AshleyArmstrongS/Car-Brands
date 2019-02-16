<?php return function($req, $res) {
$config = require('config.php');
$res->render('main','car_list',[
  'db_name' =>$config['db_name']
]);
} ?>