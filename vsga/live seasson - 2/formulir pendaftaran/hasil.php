<?php
if(isset($_POST["submit"])){
    $bhs = (float)$_POST["bhs"];
    $mtk = (float)$_POST["mtk"];
    $ing = (float)$_POST["ing"];

    // echo $bhs;
    // echo $mtk;
    // echo $ing;

    // rata - rata, pake round biar gak banyak
    $rata = round(($bhs+$mtk+$ing)/3, 2);

    // grade
    function grade(){
        $bhs = (float)$_POST["bhs"];
        $mtk = (float)$_POST["mtk"];
        $ing = (float)$_POST["ing"];
        $rata = ($bhs+$mtk+$ing)/3;

        if($rata <= 60){
            echo "D";
        }
        elseif($rata <= 75){
            echo "C";
        }
        elseif($rata <= 90){
            echo "B";
        }
        elseif($rata <= 100){
            echo "A";
        }
        else{
            echo "Anda tidak lulus!";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai UAS Mahasiswa</title>
</head>
<body>
    <h1>Hasil Nilai UAS Mahasiswa</h1>
    <table>
        <tr>
            <td>Bahasa Indonesia</td>
            <td>:</td>
            <td><?= $bhs?></td>
        </tr>
        <tr>
            <td>Matematika</td>
            <td>:</td>
            <td><?= $mtk?></td>
        </tr>
        <tr>
            <td>Bahasa Inggris</td>
            <td>:</td>
            <td><?= $ing?></td>
        </tr>
        <tr>
            <td>Rata - rata</td>
            <td>:</td>
            <td><?= $rata?></td>
        </tr>
        <tr>
            <td>Rangking</td>
            <td>:</td>
            <td><?= grade()?></td>
        </tr>
    </table>
    
    <a href="form.php">
        <button>Isi form kembali</button>
    </a>
</body>
</html>