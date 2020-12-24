<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan 1</title>
	<style type="text/css">
		.box {
			height: 50px;
			width: 50px;
			margin: 10px;
			float: left;
			background-color: lime;
			text-align: center;
			line-height: 50px;
			transition: 1s;
		}
		.box:hover {
			transform: rotate(360deg);
			border-radius: 50%;
		}
		.clear {
			clear: both;
		}
	</style>
</head>
<body>
	<?php 
		$numbers = [[1,2,3],[4,5,6],[7,8,9]];
	 ?>

	<?php foreach ($numbers as $number) : ?>
		<?php foreach ($number as $num) : ?>
	 		<div class="box"> <?= $num; ?> </div>
		<?php endforeach; ?>
	<?php endforeach; ?>
</body>
</html>