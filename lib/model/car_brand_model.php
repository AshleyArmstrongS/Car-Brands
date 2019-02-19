<?php
class car_brand_model {
private $brand_name;
private $brand_status;
private $establishment;
private $parent_company;

public function __construct($row){
    $this->brand_name = $row['brand_name'];
    $this->brand_status = $row['brand_status'];
    $this->establishment = $row['establishment'];
    $this->parent_company = $row['parent_company'];
}
public static function createNew($args){

    $database->prepare('INSERT INTO car_brand (brand_name, brand_status, establishment, parent_company) values()');
    $database->excecute([]);
}
public static function returnCar($db){
    $db->query('select * from car_brand;');
}
}
?>