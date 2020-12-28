<?php 
    // Koneksi ke database
    /*Hostname*/ $host = "localhost";
    /*Username*/ $user = "root";
    /*Password*/ $pass = "";
    /*Database*/ $db = "phpdasar";
    
    $conn = mysqli_connect($host, $user, $pass, $db);

    // Mengambil data dari database
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
    // Mengambil record dari database
    /* ada 4 cara
        mysqli_fetch_row()     -> mengembalikan array numerik
        mysqli_fetch_assoc()   -> mengembalikan array associative
        mysqli_fetch_array()   -> mengembalikan array numerik dan associative
        mysqli_fetch_object()  -> mengembalikan objek
    */
    // $data = mysqli_fetch_array($result);
    // while ($data) {
        
    // }
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
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
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
        <?php endwhile; ?>
    </table>
</body>
</html>