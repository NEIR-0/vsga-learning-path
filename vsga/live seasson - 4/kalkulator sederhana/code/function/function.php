<?php
    if(isset($_POST["hitung"])){
        $bil1 = (float)$_POST["bilangan1"];
        $bil2 = (float)$_POST["bilangan2"];
        // pertambahan
        function pertambahan(){
            $bil1 = (float)$_POST["bilangan1"];
            $bil2 = (float)$_POST["bilangan2"];
            $pertambahan = $bil1 + $bil2;
            echo "Hasil Penjumlahan : ".$pertambahan;
        }
        // pengurangan
        function pengurangan(){
            $bil1 = (float)$_POST["bilangan1"];
            $bil2 = (float)$_POST["bilangan2"];
            $pengurangan = $bil1 - $bil2;
            echo "Hasil pengurangan : ".$pengurangan;
        }
        // perkalian
        function perkalian(){
            $bil1 = (float)$_POST["bilangan1"];
            $bil2 = (float)$_POST["bilangan2"];
            $perkalian = $bil1 * $bil2;
            echo "Hasil perkalian : ".$perkalian;
        }
        // pembagian
        function pembagian(){
            $bil1 = (float)$_POST["bilangan1"];
            $bil2 = (float)$_POST["bilangan2"];
            // membuat maximal float hanya 2 digit
            $pembagian = round(($bil1 / $bil2), 2);
            echo "Hasil pembagian : ".$pembagian;
        }
        // sisa hasil bagi
        function mod(){
            $bil1 = (float)$_POST["bilangan1"];
            $bil2 = (float)$_POST["bilangan2"];
            $mod = round(($bil1 % $bil2), 2);
            // membuat maximal float hanya 2 digit
            echo "Hasil sisa bagi : ".$mod;
        }

    }
?>