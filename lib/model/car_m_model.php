<?php
    class car_m_model {
    private $_id;
    private $brand_id;
    private $model_name;
    private $year_introduced;
    private $year_discontinued;
    private $body_type;
    private $hybrid;
    private $fuel_type;

    public function __construct($row){
        $this->model_id = $row['model_id'];
        $this->brand_id = $row['brand_id'];
        $this->model_name = $row['model_name'];
        $this->year_introduced = $row['year_introduced'];
        $this->year_discontinued = $row['year_discontinued'];
        $this->body_type = $row['body_type'];
        $this->hybrid = $row['hybrid'];
        $this->fuel_type = $row['fuel_type'];
    }
    
    public static function return brand_Model($db, $args){
        $statement_Select = 'SELECT * FROM car_model WHERE brand_id = :brand_id;';
        $sS = $db->prepare($statement_Select);
        $sS->bindValue(":brand_id", $args['brand_id']);
        $sS->execute();  
        $array = $sS->fetchALL();
        return $array;
    }

    public static function add_Model($db,$args){
        $statement_Insert = 'INSERT INTO car_model (brand_id, model_name, year_introduced, year_discontinued, body_type, hybrid, fuel_type) VALUES (:brand_id, :model_name, :year_introduced, :year_discontinued, :body_type, :hybrid, :fuel_type);';
        $sI = $db->prepare($statement_Insert);
        $sI->execute([
            'brand_id' =>$args['brand_id'],
            'model_name'=>$args['model_name'],
            'year_introduced'=>$args['year_introduced'],
            'year_discontinued'=>$args['year_discontinued'],
            'body_type'=>$args['body_type'],
            'hybrid'=>$args['hybrid'],
            'fuel_type'=>$args['fuel_type']
        ]);  
    }

    public static function delete_Model($db, $args){
        $statement_Delete = "DELETE FROM car_model WHERE model_id=:model_id";
        $sD = $db->prepare($statement_Delete);
        $sD->bindValue(":model_id", $args['model_id']);
        $sD->execute();
    }

    public static function update_Model($db, $args){
        $statement_Update = 'UPDATE car_model SET (brand_id = :brand_id, model_name = :model_name, year_introduced = :year_introduced, year_discontinued = :year_discontinued, body_type = :body_type, hybrid = :hybrid, fuel_type = :fuel_type) WHERE model_id = :model_id;';
        $sU = $db->prepare($statement_Update);
        $sU->bindValue(":model_id", $args['model_id']);
        $sU->execute([
            'brand_id' =>$args['brand_id'],
            'model_name'=>$args['model_name'],
            'year_introduced'=>$args['year_introduced'],
            'year_discontinued'=>$args['year_discontinued'],
            'body_type'=>$args['body_type'],
            'hybrid'=>$args['hybrid'],
            'fuel_type'=>$args['fuel_type']
        ]); 
    }
}
?>