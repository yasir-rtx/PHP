<?php 
    // Penegcekan $_GET  kosong atau tidak
    if (!isset($_GET["nama"])) {
        // Redirect
        header("Location: Latihan1.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAIL</title>
</head>
<body>
    <ul>
        <li>Name    : <?= $_GET["name"]; ?></li>
        <li>Email   : <?= $_GET["email"]; ?></li>
        <li>Jurusan : <?= $_GET["jurusan"]; ?></li>
    </ul>

    <a href="latihan1.php">Kembali...</a>
</body>
</html>