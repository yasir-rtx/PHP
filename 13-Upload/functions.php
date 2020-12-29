<?php
    /*Hostname*/ $host = "localhost";
    /*Username*/ $user = "root";
    /*Password*/ $pass = "";
    /*Database*/ $db = "phpdasar";
    $conn = mysqli_connect($host, $user, $pass, $db);

    // Fungsi query
    function query ($query) {
        global $conn;
        $result = mysqli_query($conn, "$query");
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    // Fungsi tambah
    function add ($data) {
        global $conn;
        // Menamput value dari form ke dalam variabel
        $nrp = htmlspecialchars($data["nrp"]); // htmlspecialchars adalah fungsi yang mengubah tag jadi string biasa, sehingga proses input lebih aman
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);

        // Upload Gambar
        $foto = upload();
        if (!$foto) {
            return false;
        }
        
        $sqladd = mysqli_query($conn, "INSERT INTO mahasiswa VALUES ('', '$nrp', '$nama', '$email', '$jurusan', '$foto', NOW())");

        return mysqli_affected_rows($conn);
    }

    // Fungsi Upload
    function upload () {
        $namafile = $_FILES["foto"]["name"];
        $ukuranfile = $_FILES["foto"]["size"];
        $error = $_FILES["foto"]["error"];
        $tmp = $_FILES["foto"]["tmp_name"];

        // Cek apa ada gambar yang diupload
        if ($error === 4) {
            echo "<script>
                    alert('File foto kosong');
                </script>
            ";
            return false;
        }

        // Cek tipe file
        $ekstensiValid = ["jpg", "jpeg", "png"];
        $ekstensiFoto = explode('.', $namafile); // Memecah string menjadi array
        $ekstensiFoto = strtolower(end($ekstensiFoto)); // Mengambil value terakhir dari array dan memaksa menjadi huruf kecil
        if (!in_array($ekstensiFoto, $ekstensiValid)) {
            echo "<script>
                    alert('File harus berformat jpg, jpeg, png');
                </script>
            ";
            return false;
        }

        // Cek size
        if ($ukuranfile > 1048576) { // Ukuran maksimal 1MB
            echo "<script>
                    alert('Ukuran file harus dibawah 1MB');
                </script>
            ";
            return false;
        }

        // Generate nama baru
        $namafilebaru = uniqid();
        $namafilebaru .= '.'; // .= untuk menyambung string
        $namafilebaru .= $ekstensiFoto; // .= untuk menyambung string
        // var_dump($namafilebaru); die; // debug $namafilebaru
        // Gambar diupload
        move_uploaded_file($tmp, "img/$namafilebaru");
        return $namafilebaru;
    }

    // Fungsi hapus
    function delete ($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    // Fungsi Edit
    function edit ($data) {
        global $conn;

        $id = $data["id"];
        $nrp = htmlspecialchars($data["nrp"]); // htmlspecialchars adalah fungsi yang mengubah tag jadi string biasa, sehingga proses input lebih aman
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);

        $fotolama = htmlspecialchars($data["fotoold"]);
        // cek user upload file baru 
        if ($_FILES["foto"]["error"] === 4) {
            $foto = $fotolama;
        } else {
            $foto = upload();
        }
        

        mysqli_query($conn, "UPDATE mahasiswa SET nrp = '$nrp', nama = '$nama', email = '$email', jurusan = '$jurusan', foto = '$foto' WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function find ($keyword) {
        $query = "SELECT * FROM mahasiswa WHERE
                    nama LIKE '%$keyword%' OR
                    email LIKE '%$keyword%' OR
                    jurusan LIKE '%$keyword%' OR
                    nrp LIKE '%$keyword%'
                ";
        return query($query);
    }
 ?>