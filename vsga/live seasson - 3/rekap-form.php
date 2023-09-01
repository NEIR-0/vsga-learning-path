<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA DIRI</title>
</head>
<body>
    <h1>Masukkann data diri anda</h1>
    <form action="rekap-hasil.php" method="post">
        <table>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td>
                    <input type="text" name="nim" required placeholder="masukkan NIM...">
                </td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" required placeholder="masukkan nama...">
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <input type="text" name="kelas" required placeholder="masukkan Kelas...">
                </td>
            </tr>

            <!-- agama -->
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <select name="agama" required>
                        <option value="none">Pilih</option>
                        <option value="islam">islam</option>
                        <option value="protestan">protestan</option>
                        <option value="katolik">katolik</option>
                        <option value="buddha">buddha</option>
                        <option value="hindu">hindu</option>
                        <option value="konghuchu">konghuchu</option>
                    </select>
                </td>
            </tr>

            <!-- jenis kelamin -->
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <!-- pria -->
                    <input type="radio" id="pria" name="jk" value="pria" required>
                    <label for="pria">Pria</label>
                    <!-- perempuan -->
                    <input type="radio" id="perempuan" name="jk" value="perempuan" required>
                    <label for="perempuan">Perempuan</label>
                </td>
            </tr>

            <!-- hobi -->
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td>
                    <!-- musik, hobi poke array -->
                    <input type="checkbox" id="musik" name="hobi[]" value="musik">
                    <label for="musik">musik</label>
                    <!-- bola, hobi poke array -->
                    <input type="checkbox" id="bola" name="hobi[]" value="bola">
                    <label for="bola">bola</label>
                    <!-- basket, hobi poke array -->
                    <input type="checkbox" id="basket" name="hobi[]" value="basket">
                    <label for="basket">basket</label>
                </td>
            </tr>
        </table>
        <!-- komentar -->
        <label for="komen">Komentar</label>
        <br>
        <textarea name="komen" id="komen" cols="40" rows="8" required placeholder="masukkan komentar.."></textarea>
        <br>

        <!-- button -->
        <button type="submit" name="submit">Submit</button>
        <button type="reset">Kosongkan form</button>
    </form>
</body>
</html>