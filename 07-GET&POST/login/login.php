<?php 
    // cek tombol submit sudah dipencet atau belum
    if (isset($_POST["submit"])) {
        // cek username dan password
        if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
            //jika benar
            header("Location: admin.php");
        } else { //jika salah
            $error = true;
        }
    }
?>

<?php if (isset($error)) : ?>
<p style="color:red; font-style:italic;">Username / Password Salah!</p>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form name="" method="post" action="" enctype="multipart/form-data">
        <label for="username">username</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">password</label>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit" name="submit">SUBMIT</button>
    </form>
</body>
</html>