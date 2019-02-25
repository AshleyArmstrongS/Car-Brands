<section>
    <table>
        <?php
                echo "<li>Car Brands</li>";
                foreach ($locals['return_Car'] as $cars){
                    echo "<li><a href='car_list?brand_id=" . $cars['brand_id'] . "'>";
                    echo $cars['brand_name'], " ";
                    echo $cars["brand_status"], " ";
                    echo $cars["brand_establishment"];
                    echo $cars["parent_company"], " ";
                    echo $cars["brand_net_worth"];
                    echo "</a></li> ";
                    ?>
                    <li><a href="brand_del?brand_id=<?=$cars['brand_id']?>">Delete</a></li>  
        <?php } ?>
    </table>
</section>


<?php foreach ($locals['return_Brand_Model'] as $models): ?>
    <div class="card">
        <div class="container2">
            <li>    <h4>model: </h4><?= $models["model_name"]; ?> </li>
            <li>   <h4>introduction: </h4><?= $models["year_introduced"]; ?></li>
            <li>   <h4>year discontinued: </h4><?= $models["year_discontinued"]; ?></li>
            <li>   <h4>body type: </h4><?= $models["body_type"]; ?></li>
            <li>   <h4>fueltype: </h4><?= $models["fuel_type"]; ?></li>
            <li>   <h4>hybrid: </h4><?php if($models["hybrid"]){ echo "YES";}else{echo "NO";}; ?></li> 
            <li><a href="model_del?model_id=<?= $models['model_id']?>">Delete</a></li>
        </div>
    </div>
<?php endforeach; ?>