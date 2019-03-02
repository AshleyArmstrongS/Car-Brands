<div class="card form">
    <div class="container2">
        <h2>Add Model</h2>
        <form action='model_add' method='POST'>
            <?php if (count($form_error_messages) > 0) { ?>
                <?php foreach ($locals['error_messages'] as $error_message) { ?>
                    <p class='error'><?= $error_message ?></p>
                <?php } ?>
            <?php } ?>
            <div>
            <label for='brandId'>Select brand name: </label>
                <select name="brandId" id="brandId">
                    <option value="">Select...</option>
                    <?php foreach ($locals['return_Car'] as $brandId){?>
                    <option value="<?=$brandId['brand_id']?>"><?=$brandId['brand_name']?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <label for='modelName'>Enter model name: </label>
                <input type='text' id='modelName' name='modelName' value='<?= $modelName['value'] ?>'placeholder="E.g.. 12c">
            </div> 
            <div>
                <label for='yearIntroduced'>Enter year introduced : </label>
                <input type='number' id='yearIntroduced' name='yearIntroduced' value='<?= $yearIntroduced['value'] ?> 'placeholder="E.g.. 1980" ></textarea>
            </div>
            <div>
                <label for='yearDiscontinued'>Enter year discontinued, Enter nothing if unapplicable:</label>
                <input type='number' id='yearDiscontinued' name='yearDiscontinued' value='<?= $yearDiscontinued['value'] ?>' placeholder="E.g.. 2000">
            </div>
            <div>
                <label for='bodyType'>Enter body type: </label>
                <input type='text' id='bodyType' name='bodyType' value='<?= $bodyType['value'] ?>' placeholder="E.g.. Hatchback">
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
                    <option name='fuelType' value='D'>Diesel</option>
                    <option name='fuelType' value='E'>Electric</option>
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
