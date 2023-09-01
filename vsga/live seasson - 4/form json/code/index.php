<!-- menambahkan data json ke php -->
<?php
    // panggil json
    $file = "data.json";

    // file_get_contents(), mengambil isi dari json
    $value = file_get_contents($file);

    // json_decode(), mengubah data object json ke array
    $data = json_decode($value, true);
    
    // menangkap data input
    if(isset($_POST["kirim"])){
        $data [] = array(
            "nama" => $_POST["nama"] ?? "",
            "Jenis_kelamin" => $_POST["jk"] ?? "",
        );
        // json_encode(), buat edit data array ke json
        $jsonfile = json_encode($data, JSON_PRETTY_PRINT);

        // file_put_contents(), menaruh data ke json
        file_put_contents("data.json", $jsonfile);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Customer</title>
</head>
<body>
    <h3>Data Customer</h3>
    <!-- form -->
    <table style="width: 50%;">
        <form action="index.php" method="post">
            <tr>
                <td><label for="nama">Nama:</label></td>
                <td><input type="text" id="nama" name="nama" required></td>
            </tr>
            <tr>
                <td><label for="jenisKelamin">Jenis Kelamin:</label></td>
                <td>
                    <input type="radio" name="jk" value="Laki-Laki" id="lk" required>
                    <label for="Lk">Laki-Laki</label>
                    <input type="radio" name="jk" value="perempuan" id="pr" required>
                    <label for="pr">Perempuan</label>
                </td>
            </tr>

            <tr>
                <td><button type="submit" name="kirim">Kirim</button></td>
            </tr>
        </form>
    </table>

    <br>
    <br>
    <br>

    <!-- outputnya -->
    <table style="width: 50%; border: 2px solid black;">
        <tr>
            <th style="border: 2px solid black;">Nama</th>
            <th style="border: 2px solid black;">Jenis Kelamin</th>
        </tr>

        <!-- menampilkan data json ke php-->
        <?php
        // panggil data json
        $file = "data.json";

        // file_get_contents(), mengambil data dari json
        $anggota = file_get_contents($file);

        // json_decode(), mengubah data object json ke array
        $data = json_decode($anggota, true);

        // menampilkan data ke html
        foreach ($data as $value) {
            // jika data stirng kosong jangan tampilkan 
            if($value["nama"] == "" && $value["Jenis_kelamin"] == ""){
                echo "";
            }    
            // jika sebaliknya maka tampilkan
            else{
                echo "<tr>".
                    "<td style='border: 2px solid black;'>".$value["nama"]."</td>".
                    "<td style='border: 2px solid black;'>".$value["Jenis_kelamin"]."</td>".
                "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>