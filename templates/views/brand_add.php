<div class="card form">
    <div class="container2">
        <h2>Add Brand</h2>
        <form action='brand_add' method='post'>
            <?php if (count($form_error_messages) > 0) { ?>
                <?php foreach ($form_error_messages as $error_message) { ?>
                    <p class='error'><?= $error_message ?></p>
                <?php } ?>
            <?php } ?>
            <div>
            <?php foreach ($locals['car_brand'] as $brand_id): print_r($brand_id)?>
            <label for='brand_id'>Choose Brand: </label>
                <select name='brand' value='<?= $Brand['value'] ?>'>
                    <option value="">Select...</option>
                    <option name='stock' value='<?=$brand_id['brand_id']?>>'><?=$brand_id['brand_name']?></option>
                <?php endforeach; ?>
                </select>
            </div>
            </div> 
            <div>
                <label for='partNameIn'>Enter part name: </label>
                <input type='text' id='partNameIn' name='partName' value='<?= $partNameIn['value'] ?>'placeholder="E.g.. Engine">
            </div> 
            <div>
                <label for='descriptionIn'>Enter description: </label>
                <textarea type='text' id='descriptionIn' name='description' value='<?= $descriptionIn['value'] ?> ' rows="10" cols="20" placeholder="E.g.. THIS IS AN ENGINE." ></textarea>
            </div>
            <div>
                <label for='priceIn'>Enter Price: </label>
                <input type='number' id='priceIn' name='price' value='<?= $priceIn['value'] ?>' placeholder="E.g.. 10.50">
            </div>

            <div>
                <label for='stockIn'>In Stock: </label>
                <select name='stock' value='<?= $stockIn['value'] ?>'>
                    <option value="">Select...</option>
                    <?php foreach ($locals['car_brand'] as $brand_id): print_r($brand_id)?>
                    <option name='stock' value='<?=$brand_id['brand_id']?>>'><?=$brand_id['brand_name']?></option>
                <?php endforeach; ?>
                </select>
            </div>
            <div>
                <input type='submit' value='Submit Form'>
            </div>
        </form>
    </div>
</div>
