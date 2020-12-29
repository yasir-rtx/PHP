<?php 
    require 'functions.php';
    $sql = query("SELECT * FROM mahasiswa");

    // Pencarian
    if (isset($_POST["find"])) {
        $sql = find($_POST["keyword"]);
    }
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
    <a href="add.php">ADD</a><br><br>

    <form name="" method="post" action="" enctype="multipart/form-data">
        <input type="text" name="keyword" id="keyword" size="40px" autofocus placeholder="Cari..." autocomplete="off">
        <button type="submit" name="find">FIND</button>
    </form><br>

    <table border="1" cellpadding="10" cellspacing="0">
    	<tr>
    		<th>NO</th>
    		<th>AKSI</th>
    		<th>FOTO</th>
    		<th>NRP</th>
    		<th>NAMA</th>
    		<th>EMAIL</th>
    		<th>JURUSAN</th>
            <th>TERDAFTAR</th>
        </tr>
        
        <?php $no = 1; ?>
        <?php foreach ($sql as $data) : ?>
        <tr>
            <td><?= $no; ?></td>
            <td>
                <a href="edit.php?id=<?= $data["id"]; ?>">EDIT</a> |
                <a href="delete.php?id=<?= $data["id"]; ?>" onclick="return confirm('Apakah anda yakin ingin mengahapus data??');">DELETE</a>
            </td>
            <td><img src="img/<?= $data["foto"] ?>" width="100px"></td>
            <td><?= $data["nrp"]; ?></td>
            <td><?= $data["nama"]; ?></td>
            <td><?= $data["email"]; ?></td>
            <td><?= $data["jurusan"]; ?></td>
            <td>Sejak <?= $data["terdaftar"]; ?></td>
        </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>