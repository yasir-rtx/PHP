<?php
    session_start();
    if (isset($_SESSION["login"])) {
        header("Location: index.php");
        exit;
    }

    require 'functions.php';

    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
        if (mysqli_num_rows($result) === 1) {
            // cek password
            $row = mysqli_fetch_array($result);
            if(password_verify($password, $row["password"])) {
                // set session
                $_SESSION["login"] = true;

                header("Location: index.php");
                exit;
            }
        }

        $error = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <h1>HALAMAN LOGIN</h1>

    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username/Password SALAH!!!</p>
    <?php endif; ?>

    <form name="" method="post" action="" enctype="multipart/form-data">
        <p>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username" placeholder="username...">
        </p>

        <p>
            <label for="password">Password : </label>
            <input type="password" name="password" id="password" placeholder="password">
        </p>

        <p>
            <button type="submit" name="login">LOGIN</button>
        </p>
    </form>
</body>
</html>