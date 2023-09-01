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

<?php
echo '<script>alert("Edit berhasil."); 
            window.location.href = "index.php";
        </script>';
?>