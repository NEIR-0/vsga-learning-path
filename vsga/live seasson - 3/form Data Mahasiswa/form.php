<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Mahasiswa</title>
</head>
<body>
    <h2>FORM DATA MAHASISWA</h2>
    <form action="hasil.php" method="post">
        <table>
            <!-- nim -->
            <tr>
                <td><label for="nim">NIM</label></td>
                <td>:</td>
                <td>
                    <input type="text" id="nim" name="nim">
                </td>
            </tr>
            <!-- nama -->
            <tr>
                <td><label for="nama">Nama Lengkap</label></td>
                <td>:</td>
                <td>
                    <input type="text" id="nama" name="nama">
                </td>
            </tr>
            <!-- kelas -->
            <tr>
                <td><label for="Kelas">Kelas</label></td>
                <td>:</td>
                <td>
                    <input type="text" id="Kelas" name="Kelas">
                </td>
            </tr>
            <!-- agama -->
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                <!-- menampilkan option -->
                <select name="agama" id="agama">
                    <!-- isi option -->
                    <option value="none">Pilih</option>
                    <option value="Islam">Islam</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Khonghucu">Khonghucu</option>
                </select>
                </td>
            </tr>
            <!-- jenis kelamin -->
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <!-- pria -->
                    <input type="radio" id="pria" name="jk" value="pria">
                    <label for="pria">Pria</label>
                    <!-- wanita -->
                    <input type="radio" id="wanita" name="jk" value="wanita" >
                    <label for="wanita">wanita</label>
                </td>
            </tr>
            <!-- Hobi -->
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td>
                    <!-- hobi mengunakan array karena kemungkina bisa menampilkan lebih dari satu value, name="hobi[]" -->
                    <!-- olahraga -->
                    <input type="checkbox" id="olahraga" name="hobi[]" value="olahraga">
                    <label for="olahraga">Olahraga</label>
                    <!-- bermain game -->
                    <input type="checkbox" id="bgame" name="hobi[]" value="bermain game">
                    <label for="bgame">Bermain Game</label>
                    <!-- membaca -->
                    <input type="checkbox" id="membaca" name="hobi[]" value="membaca">
                    <label for="membaca">Membaca</label>
                    <!-- nonton film -->
                    <input type="checkbox" id="nfilm" name="hobi[]" value="nonton film">
                    <label for="nfilm">Nonton Film</label>
                </td>
            </tr>
        </table>
        <!-- komentar -->
        <label for="Komentar">Komentar:</label>
        <br>
        <!-- menggunakan textarea -->
        <textarea name="komentar" id="Komentar" cols="50" rows="5"></textarea>
        <br>
        <input type="submit" value="Proses" name="submit">
        <!-- type reset untuk mereset form -->
        <input type="reset" value="Kosongkan form" name="reset">
    </form>
</body>
</html>