<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<?php for ($i = 2; $i <= 6; $i++) : ?>
		<?php for ($n = 1; $n <= 10; $n++) : ?>
			<?= "$i x $n = " . $i*$n . '<br>' ?>
		<?php endfor; ?>
		<?= $i < 6 ? "<hr>" : "" ?>
	<?php endfor; ?>

</body>
</html>
