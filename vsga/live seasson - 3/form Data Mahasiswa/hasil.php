<?php
// if(isset($_POST["submit"])). Untuk mengambil data ketika tombol submit dipencet, jika tidak maka data tidak ada atau terlemper ke option "else"
if(isset($_POST["submit"])){
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $kls = $_POST["Kelas"];
    $agama = filter_input(INPUT_POST, "agama");
    $jk = $_POST["jk"] ?? '';
    $kom = $_POST["komentar"];
    $hobi = $_POST["hobi"] ?? '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    
    <!-- style sederhana -->
    <style>
        table{
            border: 2px solid black;
        }
        table td{
            border: 2px solid black;
            padding: 10px;

        }
    </style>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <table>
        <tr>
            <td>NIM</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Agama</td>
            <td>Jenis Kelamin</td>
            <td>Hobi</td>
            <td>Komentar</td>           
        </tr>
        <tr>
            <td><?php echo $nim;?></td>
            <td><?php echo $nama;?></td>
            <td><?php echo $kls;?></td>
            <td><?php echo $agama;?></td>
            <td><?php echo $jk;?></td>
            <td><?php 
                //hobi agak complicated karena menggunakan array, jadi kita harus menggunakan perbandingan agar tidak terjadi error 
                if(isset($_POST["submit"])){
                    // jika hobi tidak kosong maka akan menjalankan code yang dibawah 
                    if(!empty($_POST["hobi"])){
                        foreach($_POST["hobi"] as $hb){
                            echo $hb.", ";
                        }
                    }
                    // jika hobi kosong maka akan terlempar ke sini, dan menampilkan "lain-lainnya"
                    else{
                        echo "lain-lainnya";
                    }
                } 
            ?></td>
            <td><?php echo $kom;?></td>           
        </tr>
    </table>
    <br>
    <a href="form.php">
        <button>Isi Data Kembali</button>
    </a>
</body>
</html>