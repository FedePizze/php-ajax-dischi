<?php
require __DIR__ .'/database.php';

$database


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-ajax-version</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="containerBox">

            <div id="logoBox">
                <img id="logo" src="https://grafica-facile.com/wp-content/uploads/2022/01/spotify-logo.png" alt="">
            </div>
        </div>

        <div class="containerBox" id="app">
            <div>
                <div class="row">
                    <?php foreach ($database as $key => $data) { ?>
                    <div class="box">
                        <?php echo "<img src='".$data["poster"]."'>"?>
                        
                        <h2><?php echo $data['title']; ?></h2>
                        <h4><?php echo $data['author']; ?></h4>
                        <h4><?php echo $data['year']; ?></h4>
                        
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </body>
</html>