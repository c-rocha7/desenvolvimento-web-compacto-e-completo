<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<?php for ($i=1; $i <=20 ; $i++) : ?>
		<?php
			$value = rand(1, 100);
			echo "$value x 3 = " . $value * 3 . "<br>";
		?>
	<?php endfor; ?>

</body>
</html>
