<section>
    <table>
        <?php
                echo "<li>Car Brands</li>";
                foreach ($locals['return_Car'] as $cars):
                    echo "<li><a href='car_list?brand_id=" . $cars['brand_id'] . "'>";
                    echo $cars['brand_name'], " ";
                    echo $casr["brand_status"], " ";
                    echo $cars["brand_establishment"];
                    echo $casr["parent_company"], " ";
                    echo $cars["brand_net_worth"];
                    echo "</a></li> ";
                    ?>
                    <li><form action="brand_del">
                            <input type='hidden' name='brand_id' value="<?php echo$cars["brand_id"] ?>" >              
                            <input id="delete "name = "delete" type = "submit" value='delete'></li>
                        </form>   </li>    
        <?php endforeach; ?>
    </table>
</section>


<?php foreach ($locals['return_Brand_Model'] as $models): ?>
    <div class="card">
        <div class="container2">
            <h3><?php echo $carMake, " ", $carModel, " ", $carType, " ", $carFuel ?> </h3>
            <li>    <h4>model: </h4><?php echo $part["mode_name"]; ?> </li>
            <li>   <h4>introduction: </h4><?php echo $models["year_introduced"]; ?></li>
            <li>   <h4>year discontinued: </h4><?php echo $models["year_discontinued"]; ?></li>
            <li>   <h4>body type: </h4><?php echo $models["body_type"]; ?></li>
            <li>   <h4>fueltype: </h4><?php echo $models["fuel_type"]; ?></li>
            <li>   <h4>hybrid: </h4><?php if($part["hybrid"]){ echo "YES";}else{echo "NO";}; ?></li> 
            <li>   <form action="model_del">
                  <input type='hidden' name='model_id' value="<?php echo$models["model_id"] ?>" >              
                <input id="delete "name = "delete" type = "submit" value='delete'></li>
                </form></li>
        </div>
    </div>
<?php endforeach; ?>