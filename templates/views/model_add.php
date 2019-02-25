<div class="card form">
    <div class="container2">
        <h2>Add Model</h2>
        <form action='model_add' method='POST'>
            <?php if (count($form_error_messages) > 0) { ?>
                <?php foreach ($form_error_messages as $error_message) { ?>
                    <p class='error'><?= $error_message ?></p>
                <?php } ?>
            <?php } ?>
            <div>
                <select name="Car Brand" id="Car Brand">
                    <option value="">Select...</option>
                    <?php foreach ($locals['return_Car'] as $brand_id){?>
                    <option value="<?=$brand_id['brand_id']?>"><?=$brand_id['brand_name']?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <label for='ModelName'>Enter model name: </label>
                <input type='text' id='modelName' name='modelNameIn' value='<?= $modelName['value'] ?>'placeholder="E.g.. 12c">
            </div> 
            <div>
                <label for='yearIntroduced'>Enter year introduced : </label>
                <input type='number' id='yearIntroduced' name='yearIntroducedIn' value='<?= $yearIntroduced['value'] ?> 'placeholder="E.g.. 1980" ></textarea>
            </div>
            <div>
                <label for='yearDiscontinued'>Enter year discontinued: </label>
                <input type='number' id='yearDiscontinued' name='yearDiscontinuedIn' value='<?= $yearDiscontinued['value'] ?>' placeholder="E.g.. 2000">
            </div>
            <div>
                <label for='bodyType'>Enter body type: </label>
                <input type='text' id='bodyType' name='bodyTypeIn' value='<?= $bodyType['value'] ?>' placeholder="E.g.. Hatchback">
            </div>
            <div>
                <label for='Hybrid'>Is Hybrid: </label>
                <select name='HybridIn' value='<?= $hybrid['value'] ?>'>
                    <option value="">Select...</option>
                    <option name='Hybrid' value='0'>NO</option>
                    <option name='Hybrid' value='1'>YES</option>
                </select>
            </div>
            <div>
            <div>
                <label for='FuelType'>What FuelTypes Available: </label>
                <select name='FuelTypeIn' value='<?= $fuelType['value'] ?>'>
                    <option value="">Select...</option>
                    <option name='FuelType' value='P'>Petrol</option>
                    <option name='FuelType' value='D'>Diesel</option>
                    <option name='FuelType' value='G'>Petrol + Diesel</option>
                    <option name='FuelType' value='A'>All fuel types</option>
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
