<!DOCTYPE html>
<html>
<head>
    <title>Input Data</title>
</head>
<body>
    <form action="class.php?tambah_data=mahasiswa" method="post">
        <table>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" pattern=\d*></td>
            </tr>
            <tr>
                <td>TANGGAL LAHIR</td>
                <td><input type="date" name="tanggal"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"></td>
            </tr>
            <tr>
                <td><a href="data.php">Lihat Data</a></td>
            </tr>
        </table>
    </form>
</body>
</html>
