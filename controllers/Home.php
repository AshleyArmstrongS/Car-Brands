<?php return function($req, $res) {

  //require
  $config = require('config.php');

  $res->render('main','home',[
    'db_name' =>$config['db_name']
  ]);
} ?>