<!DOCTYPE HTML>
<html lang="en-us">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Program Name: Leap Year</title>
	</head>
	<body>
		<?php
			$year = 2016;
			if ($year%400==0 || ($year%100!=0 && $year%4==0)) {
				echo "<h1>".$year." is a leap year.</h1>";
			}
			else {
				echo "<h1>".$year." is not a leap year.</h1>";
			}
		?>
	</body>
</html>