<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan 2</title>
	<style type="text/css">
		.genap {
			background-color: lime;
		}
	</style>
</head>
<body>
	<center>
		<table border="1" cellpadding="10" cellspacing="0">
		<?php for ( $i = 1; $i <=10; $i++ ) : ?>
			<?php if ( $i % 2 == 1) : ?>
				<tr class="genap">
			<?php else : ?>
				<tr>
			<?php endif; ?>
				<?php for ( $j = 1; $j <=5; $j++ ) : ?>
					<td><?= "$i,$j" ?></td>
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>
		</table>
	</center>
</body>
</html>