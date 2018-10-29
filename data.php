<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
    <table border=1>
        <tr>
            <th>NAMA</th>
            <th>NIM</th>
            <th>TANGGAL LAHIR</th>
            <th>AKSI</th>
        </tr>
        <?php
            require("class.php");
            $result = $mahastudent -> lihatdata();
            while($row = mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['nim'] ?></td>
                    <td><?php echo $row['tgl_lahir'] ?></td>
                    <td><a href="class.php?hapus=<?php echo $row['nim']; ?>">Hapus</a> | <a href="edit.php?edit=<?php echo $row['nim']?>">Edit</a></td>
                </tr>
            <?php
            }
        ?>
    </table>
    <td><a href="index.php">Tambah data</a>
</body>
</html>
