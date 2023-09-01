<!-- memanggila dara.json -->
<?php
   $file = "./json/data.json";
   $value = file_get_contents($file);
   $hasil = json_decode($value, true);
  //  foreach($hasil as $data){
  //   // echo $data["foto"];
  //  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toko Buku</title>

    <!-- css bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <!-- style sederhana -->
    <style>
      body {
        background-image: url("https://img.freepik.com/free-photo/hand-painted-watercolor-background-with-sky-clouds-shape_24972-1095.jpg?size=626&ext=jpg&ga=GA1.2.812355486.1684079994&semt=sph");
        background-repeat: no-repeat;
        background-size: cover;
      }
      .daftar {
        background-color: #ffd0d0;
      }
      .title {
        background-color: #3aa6b9;
      }
    </style>
  </head>
  <body>
    <!-- title -->
    <div class="title w-75 mx-auto d-flex justify-content-center flex-wrap h-25 mt-5">
      <h2 class="fs-1">List Buku-buku</h2>
    </div>
    <!-- list buku -->
    <div class="w-75 border border-1 border-black mx-auto d-flex justify-content-center flex-wrap py-3 bg-white">
      <!-- hasil dari data.json -->
      <?php foreach($hasil as $data):?>
      <div class="bg-warning flex-column w-25 p-2 rounded rounded-1 my-3 mx-3">
        <img src="<?= $data["foto"];?>" alt="" class="mb-2 w-50 rounded rounded ms-5" />
        <h4><?= $data["nama"];?></h4>
        <h6>
          Rp.
          <?= $data["harga"];?>
        </h6>
      </div>
      <?php endforeach;?>
    </div>

    <!-- form sederhana -->
    <div class="daftar w-25 h-100 mx-auto mt-5">
      <form action="" method="post" class="border border-1 border-black">
        <table class="d-flex p-3 justify-content-center w-100">
          <!-- foto -->
          <tr>
            <td>
              <label for="foto">foto</label>
            </td>
            <td>:</td>
            <td>
              <input type="text" name="foto" id="foto" placeholder="Link foto..." required />
            </td>
          </tr>
          <!-- nama -->

          <tr>
            <td>
              <label for="nama">Nama</label>
            </td>
            <td>:</td>
            <td>
              <input type="text" name="nama" id="nama" placeholder="udin ..." required />
            </td>
          </tr>

          <!-- harga -->
          <tr>
            <td>
              <label for="harga">harga</label>
            </td>
            <td>:</td>
            <td><input type="text" name="harga" id="harga" placeholder="12.000" required /></td>
          </tr>
          <!-- button -->
          <tr>
            <td></td>
            <td></td>
            <td>
              <button type="submit" name="submit" class="mt-2 px-5 py-1 bg-success">Submit</button>
            </td>
          </tr>
        </table>
      </form>
    </div>

    <?php
    if(isset($_POST["submit"])){
      $foto = $_POST["foto"];
      $nama = $_POST["nama"];
      $harga = $_POST["harga"];
      // echo $foto;
      // echo $nama;
      // echo $harga;


      // memasukkan ke dalam array data.json
      $hasil [] = array(
        "foto" => $foto, 
        "nama" => $nama, 
        "harga" => $harga, 
      ); 

      // merapikan data dari data input
      $result = json_encode($hasil, JSON_PRETTY_PRINT); 
      // masukkan ke data.json
      file_put_contents("./json/data.json", $result); 
    } 
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  </body>
</html>
