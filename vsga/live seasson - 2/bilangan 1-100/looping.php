
    <!-- // buat variabel dengan value "1"
    $x = 1;

    // echo judulnuya
    echo "====================CETAK BILANGAN GANJIL GENAP 1-100====================<br>";

    // saya disini menggunkan while loops Dengan kondisi jika "$x" kurang dari sama dengan 100, maka looping akan terus berjalan sampai "$x" = 100 
    while($x <= 100){

        // saya menggunakan operator perbandingan dengan kondisi. Jika "sisa bagi $x = 1, maka bilangan = Ganjil" dan jika "sisa bagi $x = 2, maka bilangan = Genap"
        if($x%2){
            $result = $x." adalah bilangan Ganjil";
        }
        else{
            $result = $x." adalah bilangan Genap";

        }
        // tambahkan "<br>", supaya lebih rapih
        echo $result."<br>";

        // tambahkan "$x++" untuk looping
        $x++;
    } -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping 1-100</title>
</head>
<body>
    <?php
        $x = 1;

        echo "BILANGAN GANJIL & GENAP DARI 1-100<br>";
        echo "==========================================";
        echo "<br>";
        while($x <= 100){
            if($x%2){
                $hasil = $x.", Bilangan Ganjil";
            }
            else{
                $hasil = $x.", Bilangan Genap";
            }
            echo $hasil."<br>";

            $x++;
        }
    
    ?>
</body>
</html>