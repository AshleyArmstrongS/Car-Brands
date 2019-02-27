<div class="card form">
    <div class="container2">
        <h2>Add Brand</h2>
        <form action='brand_add' method='post'>
            c
            <?php } ?>
            <div>
                <label for='brandName'>Enter brand name: </label>
                <input type='text' id='brandName' name='brandName' value='<?= $brandName['value'] ?>'placeholder="E.g.. Tesla">
            </div> 
            <div>
            <select name='brandStatus' value='<?= $brandStatus['value'] ?>'>
                    <option value="">Select...</option>
                    <option name='brandStatus' value='active'>active</option>
                    <option name='brandStatus' value='inactive'>inactive</option>
                </select> 
                </div>
            <div>
                <label for='brandEstablished'>year of establishment: </label>
                <input type='number' id='brandEstablished' name='brandEstablished' value='<?= $brandEstablished['value'] ?>' placeholder="E.g.. 1050">
            </div>
            <div>
                <label for='parentCompany'>name of parentCompany: </label>
                <input type='text' id='parentCompany' name='parentCompany' value='<?= $parentCompany['value'] ?>' placeholder="E.g.. GM">
            </div>
            <div>
                <label for='brandNetWorth'>brand Net Worth</label>
                <input type='number' id='brandNetWorth' name='brandNetWorth' value='<?= $brandNetWorth['value'] ?>' placeholder="E.g.. 105000">
            </div>
            <div>
                <input type='submit' value='Submit Form'>
            </div>
        </form>
    </div>
</div>
