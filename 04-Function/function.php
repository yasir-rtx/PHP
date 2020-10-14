<?php 
	function welcome($time = "Welcome", $user = "Administrator") {
		return "$time, $user";
	}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Simple Function</title>
 </head>
 <body>
 	<h1> <?= welcome("Pagi"); ?> </h1>
 </body>
 </html>