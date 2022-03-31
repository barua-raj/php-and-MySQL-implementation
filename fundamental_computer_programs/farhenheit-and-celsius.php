<!DOCTYPE HTML>
<html lang="en-us">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Program Name: Fahrenhiet and Celsius</title>
	</head>
	<body>
		
		<?php
			$fah = 630;
			$cel = (($fah-32)*5)/9;
			
			echo '<h2>The farhenheit temperature '.$fah.' is equivalent to '.$cel.' degree celsius.<br></h2>';
			
			$cel = 330;
			$fah = ((9*$cel)/5)+32;
			
			echo '<h2>The celsius temperature '.$cel.' is equivalent to '.$fah.' degree fahrenheit.</h2>';
			
		?>
	</body>
</html>