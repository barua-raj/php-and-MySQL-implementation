<!DOCTYPE HTML>
<html lang="en-us">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Program Name: Largest Numbers</title>
	</head>
	<body>
	
		<?php
			$a = 45;
			$b = 35;
			$c = 50;
			
			echo '<h3>First Number = '.$a.'</h3>';
			echo '<h3>Second Number = '.$b.'</h3>';
			echo '<h3>Third Number = '.$c.'</h3>';
			
			if ($a>$b && $a>$c) {
				echo '<h1>'.$a.' '.'is the largest number.</h1>';
			}
			elseif ($b>$a && $b>$c) {
				echo '<h1>'.$b.' '.'is the largest number.</h1>';
			}
			else {
				echo '<h1>'.$c.' '.'is the largest number.</h1>';
			}
		?>
		
		
	
	</body>
</html>