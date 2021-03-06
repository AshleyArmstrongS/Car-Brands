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

    public static function return_Car($db){
        $statement_Select = 'SELECT * FROM car_brand;';
        $sS = $db->prepare($statement_Select);
        $sS->execute();  
        $array = $sS->fetchALL();
        return $array;
    }
     public static function return_By_Id($db, $brand_id){
        $statement_Select = "SELECT * FROM car_brand WHERE brand_id='$brand_id';";
        $sS = $db->prepare($statement_Select);
        $sS->execute();  
        $array= $sS->fetch();
        return $array;
    }

    public static function add_Brand($db, $args){
        $statement_Insert = 'INSERT INTO car_brand (brand_name, brand_status, brand_establishment, parent_company, brand_net_worth) VALUES (:brand_name, :brand_status, :brand_establishment, :parent_company, :brand_net_worth);';
        $sI = $db->prepare($statement_Insert);
        $sI->execute([
            'brand_name' =>$args['brand_name'],
            'brand_status'=>$args['brand_status'],
            'brand_establishment'=>$args['brand_establishment'],
            'parent_company'=>$args['parent_company'],
            'brand_net_worth'=>$args['brand_net_worth']
        ]);  
    }

    public static function find_id_By_name($db,$brand_name){
        $statement_Select = "SELECT brand_id FROM car_brand WHERE brand_name ='$brand_name'";
        $sS = $db->prepare($statement_Select);
        $sS->execute();
        $brand_id = $sS->fetch();
        return $brand_id;
    }

    public static function delete_Brand($db, $brand){
        $statement_Delete = "DELETE FROM car_brand WHERE brand_id=$brand";
        $sD = $db->prepare($statement_Delete);
        $sD->execute();
    }

    public static function update_Brand($db, $args, $brandId){
        $statement_Update = "UPDATE car_brand SET brand_name = :brand_name, brand_status = :brand_status, brand_establishment = :brand_establishment, parent_company = :parent_company, brand_net_worth = :brand_net_worth WHERE brand_id = '$brandId';";
        $sU = $db->prepare($statement_Update);
        $sU->execute([
            'brand_name' =>$args['brand_name'],
            'brand_status'=>$args['brand_status'],
            'brand_establishment'=>$args['brand_establishment'],
            'parent_company'=>$args['parent_company'],
            'brand_net_worth'=>$args['brand_net_worth']
        ]); 
    }
}?>