<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>
</head>
<body>
    <h1>Masukkan NIlai: </h1>
    <form action="hasil.php" method="post">
        <table>
            <tr>
                <td>Bahasa Indonesia</td>
                <td>:</td>
                <td>
                    <input type="text" name="bhs" placeholder="masukkan nilai.." required>
                </td>
            </tr>
            <tr>
                <td>Matematika</td>
                <td>:</td>
                <td>
                    <input type="text" name="mtk" placeholder="masukkan nilai.." required>
                </td>
            </tr>
            <tr>
                <td>Bahasa Inggris</td>
                <td>:</td>
                <td>
                    <input type="text" name="ing" placeholder="masukkan nilai.." required>
                </td>
            </tr>
        </table>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>