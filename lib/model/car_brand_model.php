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
public static function returnCar($db){
    $sc = 'select * from car_brand;';
    $s = $db->prepare($sc);
    $s->execute();  
    $array = $s->fetchALL();
    return $array;
}
}
?>