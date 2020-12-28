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
        $foto = htmlspecialchars($data["foto"]);
        
        $sqladd = mysqli_query($conn, "INSERT INTO mahasiswa VALUES ('', '$nrp', '$nama', '$email', '$jurusan', '$foto')");

        return mysqli_affected_rows($conn);
    }

    // Fungsi hapus
    function delete ($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

        return mysqli_affected_rows($conn);
    }
 ?>