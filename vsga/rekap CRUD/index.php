<?php
$file = "data.json";
$value = file_get_contents($file);
$data = json_decode($value, true);

// berapa banyak data
$length = count($data);


if(isset($_POST["submit"])){
    $nama = $_POST["nama"];

    $data [] = array(
        // uniqid(), buat bikin id uniq otomatis
        "id" => uniqid(),
        "nama" => $nama,
    );
    $json = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($file, $json);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h1>Masukkan Nama:</h1>
    <!-- cek banyak data -->
    <p>banyaknya data <?= $length?></p>

    <form action="tambah.php" method="post">
        <table>
            <tr><label for="nama">Nama</label></tr>
            <tr>:</tr>
            <tr>
                <input type="text" id="nama" name="nama" placeholder="masukkan nama..." required>
            </tr>
        </table>
        <button type="submit" name="submit">Submit</button>
    </form>


    <table>
        <tr>
            <th>Nama</th>
            <th>Edit/Del</th>
        </tr>
        <?php foreach($data as $dt):?>
            <tr>
                <td><?= $dt["nama"];?></td>
                <td>
                    <!-- kirim id -->
                    <a href="edit.php?id=<?= $dt["id"]?>">
                        <button>Edit</button>
                    </a>
                    <!-- kirim id -->
                    <a href="del.php?id=<?= $dt["id"]?>">
                        <button>Delete</button>
                    </a>
                </td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>