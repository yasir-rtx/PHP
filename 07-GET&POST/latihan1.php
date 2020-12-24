<?php 
    // SUPERGLOBAL VARIABLE
    // variabel global milik PHP
    // yang sebenarnya adalah associative array

    $students = [
		[
			"name" => "yasir",
			"email" => "yasir@gmail.com",
			"jurusan" => "Informatika"
		],
		[
			"name" => "rafi",
			"email" => "rafi@gmail.com",
			"jurusan" => "DKV"
		],
		[
			"name" => "adul",
			"email" => "adul@gmail.com",
			"jurusan" => "Kedokteran"
		]
	];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>LIST OF AGENTS CANDIDATE</h1>
    <ul>
        <?php foreach ($students as $student) : ?>
            <li>
                <a href="latihan2.php?name=<?= $student["name"]; ?>&email=<?= $student["email"]; ?>&jurusan=<?= $student["jurusan"]; ?>"><?= $student["name"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>