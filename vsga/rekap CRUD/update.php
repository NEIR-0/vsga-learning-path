<?php
// Membaca data dari file JSON
$data = file_get_contents('data.json');

// Mengubah data JSON menjadi array asosiatif
$data = json_decode($data, true);

// Membaca id data yang akan diperbarui
$id = $_GET['id'];

// Mencari data dengan id yang sesuai
$index = -1;
foreach ($data as $key => $item) {
    if ($item['id'] == $id) {
        $index = $key;
        break;
    }
}

if ($index != -1) {
    // Data ditemukan, perbarui data
    $data[$index]['nama'] = $_POST['nama'];

    // Mengubah kembali data menjadi format JSON
    $data = json_encode($data);

    // Menyimpan data ke file JSON
    file_put_contents('data.json', $data);

    echo '<script>alert("Edit berhasil."); 
            window.location.href = "index.php";
        </script>';
}
else{
    // Kembali ke halaman utama
    header('Location: index.php');
    exit();
}
?>

