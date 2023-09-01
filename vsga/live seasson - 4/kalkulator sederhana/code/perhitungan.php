<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>

    <!-- fontawesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
</head>
<body style="position: relative; height: 100vh;">
    <div style="position: absolute; top: 40%; left: 50%; transform: translate(-50%, -50%); width: 300px;">
        <i class="fa-solid fa-calculator" style="font-size: 60px; color: skyblue; text-align: center; position: relative; left: 50%;transform: translateX(-50%);"></i>
        <h3 style="text-align: center;">Kalkulatro Sederhana</h3>
        <form action="hasil.php" method="post">
            <!-- bilangan 1 -->
            <label for="bilangan1">Bilangan 1</label><br>
            <input type="number" id="bilangan1" name="bilangan1" value="masukkan bilangan 1" required autocomplete="off" style="width: 100%; height: 20px;" placeholder="masukkan bilangan1">
            <br>
            <br>


            <!-- bilangan 1 -->
            <label for="bilangan2">Bilangan 2</label><br>
            <input type="number" id="bilangan2" name="bilangan2" value="masukkan bilangan 2" required autocomplete="off" style="width: 100%; height: 20px;" placeholder="masukkan bilangan2">
            <br>
            <br>

            <!-- tombol hitung -->
            <button type="submit" name="hitung" class="hitung" style="width: 102%; background-color: skyblue; color: white; border: none; height: 40px;">Hitung</button>
        </form>
    </div>
</body>
</html>
