<?php
    $file = "rekap-data.json";
    $value = file_get_contents($file);
    $hasil = json_decode($value, true);

    if(isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $jk = $_POST["jk"];
        $hasil [] = array(
            "Nama" => $nama ?? "",
            "Jenis_Kelamin" => $jk ?? "",
        );
        $json = json_encode($hasil, JSON_PRETTY_PRINT);
        file_put_contents($file, $json);
    }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Json</title>
</head>
<body>
    <h1>Masukkan data</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" required>
                </td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" value="pria" id="pria" required>
                    <label for="pria">Pria</label>
                    <input type="radio" name="jk" value="wanita" id="wanita" required>
                    <label for="wanita">Wanita</label>
                </td>
            </tr>
        </table>
        <button type="submit" name="submit">Submit</button>
    </form>

    <table>
        <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
        </tr>
        <?php foreach($hasil as $data):?>
            <?php
                if($data["Nama"] == "" && $data["Jenis_Kelamin"] == ""){
                    echo "";
                }    
                // jika sebaliknya maka tampilkan
                else{
                    echo "<tr>".
                        "<td style='border: 2px solid black;'>".$data["Nama"]."</td>".
                        "<td style='border: 2px solid black;'>".$data["Jenis_Kelamin"]."</td>".
                    "</tr>";
                }
            ?>
        <?php endforeach;?>
    </table>
</body>
</html>