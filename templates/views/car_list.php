<h1>TEST</h1>
<form action="" method="POST">
<label for="car">car</label>
<input type='text' name='car'>
<input type="submit" value='Submit'>
</form>
        <?php
        foreach ($car_brand as $cars):
            echo $cars["car_brand"], " ";
            ?>
<?php endforeach; ?>