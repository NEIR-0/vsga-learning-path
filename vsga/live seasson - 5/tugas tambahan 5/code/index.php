<?php
  // panggil data
  $filePertama = "./json/data.json";
  // ambil data
  $valuePertama = file_get_contents($filePertama);
  // ubah data
  $resultPertama = json_decode($valuePertama, true);
?>

<?php
  // panggil data
  $fileKedua = "./json/hasil.json";
  // ambil data
  $valueKedua = file_get_contents($fileKedua);
  // ubah data
  $resultKedua = json_decode($valueKedua, true);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Rute Pernebangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  </head>
  <body>
    <h1 class="text-center">Daftar Rute Pernebangan</h1>
    <form orm action="" method="post" class="container-fluid w-50 d-flex flex-column align-items-center">
      <table class="w-100">
        <!-- maskapai -->
        <tr>
          <td>
            <label for="nama">Maskapai</label>
          </td>
          <td>:</td>
          <td>
            <input type="text" name="nama" id="nama" class="w-75" required/>
          </td>
        </tr>
        <!-- bandara asal -->
        <tr>
          <td>
            <label for="asal">Bandara Asal</label>
          </td>
          <td>:</td>
          <td>
            <select name="asal" id="asal">
              <!-- panggil object data asal  -->
              <?php foreach($resultPertama["asal"] as $data) :?>
                  <!-- panggil isi dari object array yaitu "BandaraAsal" -->
                  <option value="<?= $data["pajak"]?>"><?= $data["BandaraAsal"]?></option>
              <?php endforeach;?>
            </select>
          </td>
        </tr>
        <!-- bandara tujuan -->
        <tr>
          <td>
            <label for="tujuan">bandara tujuan</label>
          </td>
          <td>:</td>
          <td>
            <select name="tujuan" id="tujuan">
              <!-- panggil object data tujuan  -->
              <?php foreach($resultPertama["tujuan"] as $data) :?>
                  <!-- panggil isi dari object array yaitu "BandaraTujuan" -->
                  <option value="<?= $data["pajak"]?>"><?= $data["BandaraTujuan"]?></option>
              <?php endforeach;?>
            </select>
          </td>
        </tr>
        <!-- harga tiket -->
        <tr>
          <td>
            <label for="harga">Harga Tiket</label>
          </td>
          <td>:</td>
          <td>
            <input type="text" name="harga" id="harga" class="w-75" required/>
          </td>
        </tr>
      </table>
      <button type="submit" name="submit" class="mt-2 w-25 bg-success text-white border-0 d-flex ">
        <h3 class="fw-normal fs-5 py-3 m-auto">Submit</h3>
      </button>
    </form>
    
    <!-- masukkan data input ke hasil.json -->
    <?php
    if(isset($_POST["submit"])){
      // mendapatkan value $_POST["asal"]
      $selectedAsal = $_POST["asal"];
      // panggil data json dari file data.json dengan table "asal"
      foreach ($resultPertama["asal"] as $data) {
        // saya menggunakan percabangan, jika option value yang kita pilih sama dengan data pajak pada tabel "asal" maka jalankan coding dibawahnya
        if ($data["pajak"] == $selectedAsal) {
          // mengambil data pajak dari file data.json tabel "asal" dan ubah menjadi integer
          $pajakAsal = intval($data["pajak"]); 
          // mengambil data BandaraAsal dari file data.json tabel "asal"
          $bandaraAsal = $data["BandaraAsal"]; 
          // jika sudah dapat break, agar tidak terjadi perulangan
          break; 
        }
      }
      // echo "Nilai Pajak: " . $pajakAsal . "<br>";
      // echo "Bandara Asal: " . $bandaraAsal . "<br>";
    
      // mendapatkan value $_POST["tujuan"]
      $selectedTujuan = $_POST["tujuan"]; 
      // panggil data json dari file data.json dengan table "tujuan"
      foreach ($resultPertama["tujuan"] as $data) {
        // saya menggunakan percabangan, jika option value yang kita pilih sama dengan data pajak pada tabel "tujuan" maka jalankan coding dibawahnya
        if ($data["pajak"] == $selectedTujuan) {
          // mengambil data pajak dari file data.json tabel "asal" dan ubah menjadi integer
          $pajakTujuan = intval($data["pajak"]); 
          // mengambil data BandaraAsal dari file data.json tabel "asal"
          $bandaraTujuan = $data["BandaraTujuan"]; 
          // jika sudah dapat break, agar tidak terjadi perulangan
          break; 
        }
      }
      // echo "Nilai Pajak: " . $pajakTujuan . "<br>";
      // echo "Bandara Asal: " . $bandaraTujuan . "<br>";

      // dapatkan semua data yang ingin dimasukkan
      $maskapai = $_POST["nama"];
      $asal = $bandaraAsal;
      $tujuan = $bandaraTujuan;
      $harga = intval($_POST["harga"]);
      $hasilPajak = $pajakAsal + $pajakTujuan;
      $total = $harga + $hasilPajak;
      
      // masukkan data baru ke dalam array pada hasil.json 
      $resultKedua [] = array(
        "maskapai" => $maskapai,
        "asal" => $asal,
        "tujuan" => $tujuan,
        "harga" => $harga,
        "pajak" => $hasilPajak,
        "total" => $total,
      );

      // ubah data arrray ke object
      $jsonValue = json_encode($resultKedua, JSON_PRETTY_PRINT);
      // masukkan ke hasil.json. "alamat file", "$jsonValue"
      file_put_contents("json/hasil.json", $jsonValue);
    }
    ?>

    <table class="w-75 mx-auto mt-5">
      <tr class="border border-2 border-black">
        <th class="border border-2 border-black text-center">Maskapai</th>
        <th class="border border-2 border-black text-center">Asal Penerbangan</th>
        <th class="border border-2 border-black text-center">Tujuan Penerbangan</th>
        <th class="border border-2 border-black text-center">Harga Tiket</th>
        <th class="border border-2 border-black text-center px-3">Pajak</th>
        <th class="border border-2 border-black text-center">Total Harga</th>
      </tr>
      
      <!-- menampilkan data output -->
      <?php foreach($resultKedua as $data): ?>
        <tr class="border border-2 border-black">
          <td class="border border-2 border-black px-2"><?= $data["maskapai"]; ?></td>
          <td class="border border-2 border-black px-2"><?= $data["asal"]; ?></td>
          <td class="border border-2 border-black px-2"><?= $data["tujuan"]; ?></td>
          <td class="border border-2 border-black px-2"><?= $data["harga"]; ?></td>
          <td class="border border-2 border-black px-2 px-3"><?= $data["pajak"]; ?></td>
          <td class="border border-2 border-black px-2"><?= $data["total"]; ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  </body>
</html>