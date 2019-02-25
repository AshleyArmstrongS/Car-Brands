<?php return function($req, $res) {
 require('config.php');
 $db = require('./lib/database.php');
 require('./model/car_m_model.php');
 if (!isset($model_id)) {
    if ($model_id == NULL || $model_id == FALSE) {
        $model_id= 0;
    }
}
$mD=$req->query('model_id');
$car_brand = car_m_model::delete_Model_M($db, $mD);

header("Location: car_list");
exit();
}
?>