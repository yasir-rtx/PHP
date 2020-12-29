<?php 
    require 'functions.php';

    // ambil data dari URL
    $id = $_GET["id"];
    // Query data berdasarkan ID
    $sqledit = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

    // Cek tombol submit sudah ditekan atau belum
    if (isset($_POST["submit"])) {
        if (edit($_POST) > 0) {
            echo "
                <script>
                    alert('DATA BERHASIL DIUBAH');
                    document.location.href = 'index.php';
                </script>
            ";
            
        } else {
            echo "
                <script>
                    alert('DATA GAGAL DIUBAH');
                    document.location.href = 'index.php';
                </script>
            ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT DATA MAHASISWA</title>
</head>
<body>
    <h1>EDIT DATA MAHASISWA</h1>

    <!-- action dikosongkan agar data dikirimkan kembali ke halaman ini -->
    <form name="" method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $sqledit["id"]; ?>">
        <p>
            <label for="nrp">NRP : </label>
            <input type="text" name="nrp" id="nrp" placeholder="NRP..." required value="<?= $sqledit["nrp"]; ?>">
        </p>
        <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" placeholder="Nama..." value="<?= $sqledit["nama"]; ?>">
        </p>
        <p>
            <label for="email">Email : </label>
            <input type="text" name="email" id="email" placeholder="Email..." value="<?= $sqledit["email"]; ?>">
        </p>
        <p>
            <label for="jurusan">Jurusan : </label>
            <input type="text" name="jurusan" id="jurusan" placeholder="Jurusan..." value="<?= $sqledit["jurusan"]; ?>">
        </p>
        <p>
            <label for="foto">Foto : </label>
            <input type="text" name="foto" id="foto" placeholder="" value="<?= $sqledit["foto"]; ?>">
        </p>
        <p>
            <button type="submit" name="submit">SUBMIT</button>
        </p>    
    </form>
</body>
</html>