<?php 
    require 'functions.php';
    // Cek tombol submit sudah ditekan atau belum
    if (isset($_POST["submit"])) {
        if (add($_POST) > 0) {
            echo "
                <script>
                    alert('DATA BERHASIL DITAMBAHKAN');
                    document.location.href = 'index.php';
                </script>
            ";
            
        } else {
            echo "
                <script>
                    alert('DATA GAGAL DITAMBAHKAN');
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
    <title>TAMBAH DATA MAHASISWA</title>
</head>
<body>
    <h1>TAMBAH DATA MAHASISWA</h1>

    <!-- action dikosongkan agar data dikirimkan kembali ke halaman ini -->
    <form name="" method="post" action="" enctype="multipart/form-data">
        <p>
            <label for="nrp">NRP : </label>
            <input type="text" name="nrp" id="nrp" placeholder="NRP..." required>
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
            <input type="file" name="foto" id="foto" placeholder="">
        </p>
        <p>
            <button type="submit" name="submit">SUBMIT</button>
        </p>    
    </form>
</body>
</html>