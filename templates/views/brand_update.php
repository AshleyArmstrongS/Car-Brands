<div class="card form">
    <div class="container2">
        <h2>Update Brand</h2>
        <?php 
            $brand = $locals['return_By_Id'];
        ?>
        <form action='brand_update' method='POST'>
            <div>
                <input type='hidden' id='brandId' name='brandId' value=<?= $brand['brand_id'] ?>>
                <label for='brandName'>Enter brand   name: </label>                    <input type='text' id='brandName' name='brandName' value='<?= $brand['brand_name']?>'>
            </div> 
            <div>
                <select name='brandStatus' value='<?= $brand['brand_status']?>'>
                    <option value=""><?= $brand['brand_status']?></option>
                    <option name='brandStatus' value='inactive'>inactive</option>
                    <option name='brandStatus' value='active'>active</option>
                </select> 
            </div>
            <div>
                <label for='brandEstablished'>year of establishment: </label>
                <input type='number' id='brandEstablished' name='brandEstablished' value=<?= $brand['brand_establishment']?>>
            </div>
            <div>
                <label for='parentCompany'>name of parentCompany: </label>
                <input type='text' id='parentCompany' name='parentCompany' value=<?= $brand['parent_company']?>>
            </div>
            <div>
                <label for='brandNetWorth'>brand Net Worth</label>
                <input type='number' id='brandNetWorth' name='brandNetWorth' value=<?= $brand['brand_net_worth']?>>
            </div>
            <div>
                <input type='submit' value='Submit Form'>
            </div>
        </form>
    </div>
</div>
