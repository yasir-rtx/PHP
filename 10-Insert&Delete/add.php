<?php 
    require 'functions.php'; 
    // Cek tombol submit sudah ditekan atau belum
    if (isset($_POST["submit"])) {
        // Menamput value dari form ke dalam variabel
        $nrp = $_POST["nrp"];
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $jurusan = $_POST["jurusan"];
        $foto = $_POST["foto"];

        // Query insert data
        $sqladd = mysqli_query($conn, "INSERT INTO mahasiswa VALUES ('', '$nrp', '$nama', '$email', '$jurusan', '$foto')");

        if ($sqladd) {
            echo "BERHASIL";
        } else {
            echo "GAGAL";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA MAHASISWA</title>
</head>
<body>
    <h1>TAMBAH DATA MAHASISWA</h1>

    <!-- action dikosongkan agar data dikirimkan kembali ke halaman ini -->
    <form name="" method="post" action="" enctype="multipart/form-data">
        <p>
            <label for="nrp">NRP : </label>
            <input type="text" name="nrp" id="nrp" placeholder="NRP...">
        </p>
        <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" placeholder="Nama...">
        </p>
        <p>
            <label for="email">Email : </label>
            <input type="text" name="email" id="email" placeholder="Email...">
        </p>
        <p>
            <label for="jurusan">Jurusan : </label>
            <input type="text" name="jurusan" id="jurusan" placeholder="Jurusan...">
        </p>
        <p>
            <label for="foto">Foto : </label>
            <input type="text" name="foto" id="foto" placeholder="">
        </p>
        <p>
            <button type="submit" name="submit">SUBMIT</button>
        </p>    
    </form>
</body>
</html>