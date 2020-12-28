<?php 
    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- Tambah data -->
    <a href="add.php">ADD</a>

    <table border="1" cellpadding="10" cellspacing="0">
    	<tr>
    		<th>NO</th>
    		<th>AKSI</th>
    		<th>FOTO</th>
    		<th>NRP</th>
    		<th>NAMA</th>
    		<th>EMAIL</th>
    		<th>JURUSAN</th>
        </tr>
        
        <?php $no = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
        <tr>
            <td><?= $no; ?></td>
            <td>
                <a href="">EDIT</a> |
                <a href="">DELETE</a>
            </td>
            <td><img src="img/<?= $row["foto"] ?>" width="100px"></td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>