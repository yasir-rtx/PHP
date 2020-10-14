<?php 
	$students = [
		["Yasir", "18101152630069", "Teknik Informatika", "yasir112358@gmail.com"],
		["Rafi", "18101152630071", "Teknik Informatika", "rafiushdika@gmail.com"],
		["Fikran","18101152630056", "Teknik Informatika", "fikran@gmail.com"],
		["Rafi(Impostor)", "00000000000000", "undefinied", "impostor@gmail.com"]
	];
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Latihan 3</title>
 </head>
 <body>
 	<h1><b>Students : </b></h1>

 	<?php foreach($students as $student) : ?>
 	<ul>
 		<?php for ( $i=0; $i < count($student); $i++) : ?>
 			<li><?= $student[$i]; ?></li>
 		<?php endfor; ?>
 	</ul>
 	<?php endforeach; ?>

 </body>
 </html>