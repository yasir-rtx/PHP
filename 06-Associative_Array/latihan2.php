<!-- <?php 
	// $students = [
	// 	["Yasir", "yasir@gmail.com", "Informatika"],
	// 	["Rafi", "rafi@gmail.com", "DKV"]
	// ];
 ?> -->

 <?php 
	 // Associative Array adalah sama seperti array numerik, kecuali key-nya adalah string yang kita buat sendiri
	 // dengan kata lain kita mengganti key numerik dengan string
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
 	<title>Latihan 2</title>
 </head>
 <body>
 	<h1>Agent List</h1>
 	<?php foreach ($students as $student) : ?>
		<ul>
			<li>Name    : <?= $student["name"] ?> </li>
			<li>Email   : <?= $student["email"] ?></li>
			<li>Subject : <?= $student["jurusan"] ?></li>
		</ul>
	<?php endforeach; ?>
 </body>
 </html>