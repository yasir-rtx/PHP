<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan 3</title>
	<style type="text/css">
		.black {
			background-color: black;
		}
	</style>
</head>
<body>
	<center>
		<table border="1" cellpadding="35" cellspacing="0">
			<?php for ( $i=1; $i <= 8; $i++ ) : ?> <!--baris-->
				<?php if ( $i % 2 == 1) : ?>
					<tr class="black">
				<?php else : ?>
					<tr>
				<?php endif; ?>
					<?php for ( $j =1; $j <=8; $j++ ) : ?> <!-- kolom-->
						<?php if ( $j % 2 == 0) : ?>
							<td class="black">
						<?php else : ?>
							<td>
						<?php endif; ?>
						</td>
					<?php endfor; ?>
				</tr>
			<?php endfor; ?>
		</table>
	</center>
</body>
</html>