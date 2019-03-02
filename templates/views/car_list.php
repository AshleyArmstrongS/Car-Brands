<div class="topnav">
    <form action="search_brand">
        <input type='search' id='brandSearch' name='brandSearch' value='<?= $search['value'] ?>' placeholder="Search...">
        <input type='submit' value='Search'>
    </form>
</div> 
<section>
    <table>
        <li>Car Brands</li>
      
            <?php foreach ($locals['return_Car'] as $cars){ ?>
                <li><a href='car_list?brand_id=<?= $cars['brand_id'] ?>'>
                <?= $cars['brand_name']?>
                </li>
        <?php } ?>
    </table>
</section>
<?php if(!empty($locals['return_By_Id'])){?>
<?php 
$brand = $locals['return_By_Id'];
?>
    <div class="card">
        <div class="container2">
            <li>   <h4>Brand name: </h4><?= $brand["brand_name"]; ?> </li>
            <li>   <h4>Brand status: </h4><?= $brand["brand_status"]; ?></li>
            <li>   <h4>Brand Establishment: </h4><?= $brand["brand_establishment"]; ?></li>
            <li>   <h4>Parent Company: </h4><?= $brand["parent_company"]; ?></li>                
            <li>   <h4>Brand Worth: </h4><?= $brand["brand_net_worth"]; ?></li>
            <li>
                <a href="brand_del?brand_id=<?= $brand['brand_id']?>">Delete</a>
                <a href="brand_update?brand_id=<?= $brand['brand_id']?>">Update</a>
            </li>   
        </div>
    </div>
<?php foreach ($locals['return_Brand_Model'] as $models): ?>
    <div class="card">
        <div class="container2">
            <li>    <h4>model: </h4><?= $models["model_name"]; ?> </li>
            <li>   <h4>introduction: </h4><?= $models["year_introduced"]; ?></li>
            <li>   <h4>year discontinued: </h4><?= $models["year_discontinued"]; ?></li>
            <li>   <h4>body type: </h4><?= $models["body_type"]; ?></li>
                <li> <h4>fueltype:</h4>
                <?php if($models["fuel_type"] === "E"){ ?>
                    Electric
                <?php }elseif($models["fuel_type"] === "P"){ ?>
                    Petrol
                    <?php }elseif($models["fuel_type"] === "D"){ ?>
                    Diesel
                <?php }elseif($models["fuel_type"] === "G"){ ?>
                    Diesel+Petrol
                <?php }else{ ?>
                    All fuel types
                <?php } ?>
            </li> 
            <li>   <h4>hybrid: </h4>
                <?php if($models["hybrid"])
                {
                    ?>
                YES
                <?php
                }
                else
                { 
                    ?>
                NO
                <?php 
            } 
            ?>
            </li> 
            <li>
                <a href="model_del?model_id=<?= $models['model_id']?>">Delete</a>
                <a href="model_update?model_id=<?= $models['model_id']?>">Update</a>
            </li>
        </div>
    </div>
<?php endforeach; ?>
<?php } 