<?php
if(isset($_POST["submit"])){
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $agama = $_POST["agama"];
    $jk = $_POST["jk"] ?? "";
    $hobi = $_POST["hobi"] ?? "";
    $komen = $_POST["komen"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

    <style>
        table{
            margin: 10px auto;
            width: 80%;
            border: 2px solid black;
        }
        td, th{
            text-align: center;
            border: 2px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Data Mahasiswa</h1>
    <table>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Agama</th>
            <th>Jenis Kelamin</th>
            <th>Hobi</th>
            <th>Komentar</th>
        </tr>
        <tr>
            <td><?= $nim;?></td>
            <td><?= $nama;?></td>
            <td><?= $kelas;?></td>
            <td><?= $agama;?></td>
            <td><?= $jk;?></td>
            <td><?php
                if(!empty($hobi)){
                    foreach($hobi as $hb){
                        echo $hb.", ";
                    }
                }
                else{
                    echo "lain-lainnya";
                }
            ?></td>
            <td><?= $komen;?></td>
        </tr>
    </table>
    
    <a href="rekap-form.php">
        <button style="padding: 5px 20px; margin-left: 45%; margin-top: 20px;">Isi Data Kembali</button>
    </a>
</body>
</html>