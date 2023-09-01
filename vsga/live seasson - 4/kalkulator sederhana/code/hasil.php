<?php
require "function/function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hasil perhitungan</title>
</head>
<body>
    <div class="show">  
        <?php echo "Bilangan 1 adalah ".$bil1?>
        <br>
        <?php echo "Bilangan 2 adalah ".$bil2?>
        <br>
        ============================
        <br>
        <?php echo pertambahan();?>
        <br>
        <?php echo pengurangan();?>
        <br>
        <?php echo perkalian();?>
        <br>
        <?php echo pembagian();?>
        <br>
        <?php echo mod();?>
        <br>
    </div>
    <br>
    <a href="perhitungan.php">
        <button>Hitung ulang</button>
    </a>
</body>
</html>