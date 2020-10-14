<?php 
	// Menampilkan elemen array untuk user
	$x = [1,2,3,4,5];
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Latihan 2</title>
 	<style type="text/css">
 		.box {
 			width: 50px;
 			height: 50px;
 			background-color: salmon;
 			text-align: center;
 			line-height: 50px;
 			margin: 5px;
 			float: left;
 		}
 		.clear {
 			clear: both;
 		}
 	</style>
 </head>
 <body>

 	<?php for ( $i =0; $i<count($x); $i++) : ?>
 		<div class="box"> <?= $x[$i]; ?> </div>
 	<?php endfor; ?>

 	<div class="clear"></div>

 	<?php foreach ( $x as $y ) : ?>
 		<div class="box"> <?= $y; ?> </div>
 	<?php endforeach; ?>

 	<div class="clear"></div>

 </body>
 </html>