<?php

	//	Instruksi Kerja Nomor 1.
	//	Variabel $mobil berisi data jenis mobil yang dipesan dalam bentuk array satu dimensi.
	//	saya membuat variabel dengan nama $mobil yang berisi list mobil sesuai soal
	$mobil = array( "Avanza", "Rush", "Alphard", "Innova", "Fortuner");

	//	Instruksi Kerja Nomor 2.
	//	Mengurutkan array $mobil secara Ascending.
	//  menggunakan asort, untuk mengurutkan array secara ascending (dari A ke Z).
	asort($mobil);
	// print_r($mobil);

	//	Instruksi Kerja Nomor 5.
	//	Baris Komentar: disini saya membuat fungsi hitung_sewa yang didalamnya terdapat percabangan dan setiap percabangan terdapat perhitungan yang berbeda
	function hitung_sewa(){
		$jarak_tempuh = $_POST['jarak'];
		if($jarak_tempuh<=10){
			$biaya = 1000*$jarak_tempuh;

		}
		elseif($jarak_tempuh > 10){
			$jt = $jarak_tempuh - 10;
			$biaya = 10000+($jt*5000);
		}

		$nilai_sewa = $biaya;
		return $nilai_sewa;
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Pemesanan Taxi Online</title>
		<!-- Instruksi Kerja Nomor 3. -->
		<!-- Menghubungkan dengan library/berkas CSS. -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>
	
	<body>
	<div class="container border">
		<!-- Menampilkan judul halaman -->
		<h3>Pemesanan Taxi Online</h3>
		
		<!-- Instruksi Kerja Nomor 4. -->
		<!-- Menampilkan logo Taxi Online -->
		<img src="logo/logo.jpg" alt="logo">
		
		
		<!-- Form untuk memasukkan data pemesanan. -->
		<form action="index.php" method="post" id="formPemesanan">
			<div class="row">
				<!-- Masukan data nama pelanggan. Tipe data text. -->
				<div class="col-lg-2"><label for="nama">Nama Pelanggan:</label></div>
				<div class="col-lg-2"><input type="text" id="nama" name="nama" placeholder="placeholder"></div>
			</div>
			<div class="row">
				<!-- Masukan data nomor HP pelanggan. Tipe data number. -->
				<div class="col-lg-2"><label for="nomor">Nomor HP:</label></div>
				<div class="col-lg-2"><input type="number" id="noHP" name="noHP" maxlength="16" placeholder="placeholder"></div>
			</div>
			<div class="row">
				<!-- Masukan pilihan jenis mobil. -->
				<div class="col-lg-2"><label for="tipe">Jenis Mobil:</label></div>
				<div class="col-lg-2">
					<select id="mobil" name="mobil">
					<option value="">- Jenis mobil -</option>
					<?php
						//	Instruksi Kerja Nomor 6.
						//	Menampilkan dropdown pilihan jenis mobil Taxi Online berdasarkan data pada array $mobil menggunakan perulangan.
						foreach($mobil as $mb){
							printf("<option value='$mb'>$mb</option>");
						}
					?>	
					</select>
				</div>
			</div>
			
			<div class="row">
				<!-- Masukan data Jarak Tempuh. Tipe data number. -->
				<div class="col-lg-2"><label for="nomor">Jarak:</label></div>
				<div class="col-lg-2"><input type="number" id="jarak" name="jarak" maxlength="4" placeholder="placeholder"></div>
			</div>
			<div class="row">
				<!-- Tombol Submit -->
				<div class="col-lg-2"><button class="btn btn-primary" type="submit" form="formPemesanan" value="Pesan" name="Pesan">Pesan</button></div>
				<div class="col-lg-2"></div>		
			</div>
		</form>
	</div>
	<?php
		//	Kode berikut dieksekusi setelah tombol Hitung ditekan.
		if(isset($_POST['Pesan'])) {
			
			//	Variabel $dataPesanan berisi data-data pemesanan dari form dalam bentuk array.
			
			$dataPesanan = array(
				'nama' => $_POST['nama'],
				'noHP' => $_POST['noHP'],
				'mobil' => $_POST['mobil'],
				'jarak' => $_POST['jarak']
			);
			$jarak_tempuh = $_POST['jarak'];

			// Instruksi Kerja Nomor 7 (Percabangan)

			// KOMENTAR: saya telah memasukkan percabangan kedalam function hitung_sewa(), agar lebih mudah ketika proses pemanggilan

			// Gunakan pencabangan untuk menghitung biaya sewa taksi berdasarkan $jarak_tempuh
            // Gunakan fungsi hitung_sewa untuk menghitung biaya sewa taksi sesuai INSTRUKSI KERJA #8

			// KOMENTAR: saya telah memasukkan perhitungan kedalam function hitung_sewa(), agar lebih mudah ketika proses pemanggilan


            // Simpan hasil penghitungan biaya sewa dalam variabel $tagihan sesuai INSTRUKSI KERJA #9
			$tagihan = hitung_sewa();
			// echo $tagihan;

			
			//	Variabel berisi path file data.json yang digunakan untuk menyimpan data pemesanan.
			$berkas = "json/data.json";
			
			//	Mengubah data pemesanan yang berbentuk array PHP menjadi bentuk JSON.
			$dataJson = json_encode($dataPesanan, JSON_PRETTY_PRINT);
			
			//	Instruksi Kerja Nomor 10.
			//	Menyimpan data pemesanan yang berbentuk JSON ke dalam file JSON
			file_put_contents($berkas, $dataJson);
			$dataJson = file_get_contents($berkas);
			
			//	Mengubah data pemesanan dalam format JSON ke dalam format array PHP.
			$dataPesanan = json_decode($dataJson, true);

			//	Menampilkan data pemesanan dan total biaya sewa.
			//  KODE DI BAWAH INI TIDAK PERLU DIMODIFIKASI!!!
			echo "
				<br/>
				<div class='container'>
					
					<div class='row'>
						<!-- Menampilkan nama pelanggan. -->
						<div class='col-lg-2'>Nama Pelanggan:</div>
						<div class='col-lg-2'>".$dataPesanan['nama']."</div>
					</div>
					<div class='row'>
						<!-- Menampilkan nomor HP pelanggan. -->
						<div class='col-lg-2'>Nomor HP:</div>
						<div class='col-lg-2'>".$dataPesanan['noHP']."</div>
					</div>
					<div class='row'>
						<!-- Menampilkan Jenis mobil Taxi Online. -->
						<div class='col-lg-2'>Jenis Mobil:</div>
						<div class='col-lg-2'>".$dataPesanan['mobil']."</div>
					</div>
					<div class='row'>
						<!-- Menampilkan jumlah Jarak Tempuh. -->
						<div class='col-lg-2'>Jarak(km):</div>
						<div class='col-lg-2'>".$dataPesanan['jarak']." km</div>
					</div>
					<div class='row'>
						<!-- Menampilkan Total Tagihan. -->
						<div class='col-lg-2'>Total:</div>
						<div class='col-lg-2'>Rp".number_format($tagihan, 0, ".", ".").",-</div>
					</div>
					
			</div>
			";
		}
	?>
	</body>
</html>