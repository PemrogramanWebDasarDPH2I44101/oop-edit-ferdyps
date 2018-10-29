<?php
    require_once("class.php");
    $nim = $_GET['edit'];
    $a=$mahastudent->datamhs($nim);
    $row=mysqli_fetch_assoc($a);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>
    <form action="class.php?edit_data=mahasiswa" method="post">
        <table>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama" value="<?php echo $row['nama'];?>"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" pattern=\d* value="<?php echo $row['nim'];?>" readonly></td>
            </tr>
            <tr>
                <td>TANGGAL LAHIR</td>
                <td><input type="date" name="tanggal" value="<?php echo $row['tgl_lahir'];?>"></td>
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