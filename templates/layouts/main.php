<?php
$title = defined('PAGE_TITLE') ? PAGE_TITLE : 'Car Brand Db';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>
        <link rel='stylesheet' href='<?=SITE_BASE_DIR?>/assets/styles/reset.css'>
  <link rel='stylesheet' href='<?=SITE_BASE_DIR?>/assets/styles/styles.css'>
    </head>
    <body>
        <header>
            <div class='container'>
            <img src="./assets/images/logo.png" alt=""/>
                <h1>Car Brands DB</h1>
                <nav>
                    <ul>
                        <li><a class='btn external' href='index.php'>Car Part Db</a></li>
                        <li><a class='btn external' href='form.php'>Add Part</a></li>
                        <li><a class='btn external' href='formCars.php'>Add Car</a></li>
                        <li><a class='btn external' href='logPage.php'>Logs</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <div class='container'>
            <?= \Rapid\Renderer::VIEW_PLACEHOLDER ?>
</head>
</div>
</main>
<footer>
    <div class='container'>
        <p>&copy; ASH</p>
    </div>
</footer>
</body>
</html>