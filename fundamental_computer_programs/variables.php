<!DOCTYPE HTML>
<html lang="en-us">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Variables in PHP</title>
	</head>
	
	<body>
		<?php
			$color1 = "Red";
			$color2 = "Green";

			echo "The color of my car is $color1."."<br>";
			echo "The color of my pen is ".$color2."."."<br>";
			echo "I love $color2."."<br>";
			
			$num1 = 10;
			$num2 = 20;
			$total = $num1+$num2;
			echo $total."<br>";
			
			var_dump($num1);
			echo "<br>";
			var_dump($color1);
			echo "<br>";
			
			// variable scope
			
			$var1 = 15;
			
			function test() {
				$var2 = 20;
				echo $var2."<br>";
			}
			test();
			
			echo $var1."<br>";
			
			// global keyword
			
			$test1 = 30;
			$test2 = 50;
			
			echo $test1."<br>";
			
			function test_global() {
				global $test1,$test2,$test3;
				$test3 = $test1+$test2;
				echo $test3."<br>";
			}
			test_global();
			echo $test1."<br>";
			echo $test3."<br>";
		?>
	</body>
</html>