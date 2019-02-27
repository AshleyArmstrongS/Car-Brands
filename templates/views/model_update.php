<div class="card form">
    <div class="container2">
        <h2>Update Model</h2>
        <form action='model_update' method='POST'>
            <?php if (count($form_error_messages) > 0) { ?>
                <?php foreach ($form_error_messages as $error_message) { ?>
                    <p class='error'><?= $error_message ?></p>
                <?php } ?>
            <?php } ?>
            <?php 
            $model = $locals['return_Brand_Model'];
            $brand = $locals['return_By_Id'];
            ?>
            <div>
            <input type='hidden' id='modelId' name='modelId' value='<?= $model['model_id'] ?>'>
            </div>
            <div>
            <label for='brandId'>Brand name: </label>
                <select name="brandId" id="brandId">
                    <option value=<?= $model['brand_id']?>><?=$brand['brand_name']?></option>
                    <?php foreach ($locals['return_Car'] as $brandId){?>
                    <option value='<?=$brandId['brand_id']?>'><?=$brandId['brand_name']?></option>
                    <?php } ?>
                </select>
            </div> 
            <div>
                <label for='modelName'>Model name: </label>
                <input type='text' id='modelName' name='modelName' value='<?= $model['model_name'] ?>'>
            </div> 
            <div>
                <label for='yearIntroduced'>Year introduced : </label>
                <input type='number' id='yearIntroduced' name='yearIntroduced' value='<?= $model['year_introduced']?>'>
            </div>
            <div>
                <label for='yearDiscontinued'>Year discontinued: </label>
                <input type='number' id='yearDiscontinued' name='yearDiscontinued' value='<?= $model['year_discontinued']?>'>
            </div>
            <div>
                <label for='bodyType'>Body type: </label>
                <input type='text' id='bodyType' name='bodyType' value='<?= $model['body_type'] ?>'>
            </div>
            <div>
                <label for='hybrid'>Is Hybrid: </label>
                <select name='hybrid' value='<?= $hybrid['value'] ?>'>
                    <option value="">Select...</option>
                    <option name='hybrid' value='0'>NO</option>
                    <option name='hybrid' value='1'>YES</option>
                </select>
            </div>
            <div>
            <div>
                <label for='fuelType'>What FuelTypes Available: </label>
                <select name='fuelType' value='<?= $fuelType['value'] ?>'>
                    <option value="">Select...</option>
                    <option name='fuelType' value='P'>Petrol</option>
                    <option name='fuelType' value='E'>Electric</option>
                    <option name='fuelType' value='D'>Diesel</option>
                    <option name='fuelType' value='G'>Petrol + Diesel</option>
                    <option name='fuelType' value='A'>All fuel types</option>
                </select>
            </div>
            <div>
                </select>
            </div>
            <div>
                <input type='submit' value='Submit Form'>
            </div>
        </form>
    </div>
</div>
