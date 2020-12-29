<?php 
    require 'functions.php';
    if (isset($_POST["register"])) {
        if (register($_POST) > 0) {
            echo "
                <script>
                    alert('REGISTRASI BERHASIL');
                </script>
            ";
        } else {
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRASI</title>
</head>
<body>
    <h1>SIGNUP</h1>
    <form name="" method="post" action="" enctype="multipart/form-data">
        <p>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username" placeholder="Username" required autocomplete="off">
        </p>
        <p>
            <label for="password">Password : </label>
            <input type="password" name="password" id="password" placeholder="Password" required>
        </p>
        <p>
            <label for="password2">Konfirmasi Password : </label>
            <input type="password" name="password2" id="password2" placeholder="Password" required>
        </p>
        <p>
            <button type="submit" name="register">SIGNUP</button>
        </p>
    </form>
</body>
</html>