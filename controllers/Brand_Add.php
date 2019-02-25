<?php return function($req, $res){
    require('config.php');
    $db = require('./lib/database.php');
    $res->render('main','brand_add',[
    ]);
} ?>