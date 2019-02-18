<?php return function($req, $res) {

$config = require('config.php');

$res->render('main','car_list',[]);

} ?>