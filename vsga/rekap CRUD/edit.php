<?php
$file = "data.json";
$value = file_get_contents($file);
$data = json_decode($value, true);

// panggil id
$id = $_GET["id"];

$index = -1;
foreach ($data as $key) {
    if ($key['id'] == $id) {
        $index = $key;
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
    <h1>Edit</h1>
    <form action="update.php?id=<?= $index["id"]?>" method="post">
        <?php if($index != -1):?>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" placeholder="<?= $index["nama"]?>" required>
        <?php endif;?>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>