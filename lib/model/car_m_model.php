<?php
class CarModModel {
private $brand_id;
private $model_name;
private $year_introduced;
private $year_discontinued;
private $body_type;
private $hybrid;
private $fuel_type;

public function __construct($row){
    $this->brand_id = $row['brand_id'];
    $this->model_name = $row['model_name'];
    $this->year_introduced = $row['year_introduced'];
    $this->year_discontinued = $row['year_discontinued'];
    $this->body_type = $row['body_type'];
    $this->hybrid = $row['hybrid'];
    $this->fuel_type = $row['fuel_type'];
}
public static createNew($args){

    $database->prepare('INSERT INTO car_model (brand_id, model_name, year_introduced, year_discontinued, body_type, hybrid, fuel_type) values()');
    $database->excecute([]);
}
}
?>