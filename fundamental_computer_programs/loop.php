<!DOCTYPE HTML>
<html lang="en-us">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP: Loop</title>
	</head>
	<body>
		
		<?php
			
			$num = 1;
			while ($num < 5) {
				echo "This is a simple while loop program.";
				echo "<br>";
				$num = $num+1;
			}
		
		?>
		
		<table width=100% border=1 cellspacing=0>
			<tr>
				<td>Name</td>
				<td>ID</td>
				<td>GPA</td>
			</tr>
			
			<?php
			
				$num = 1;
				while ($num < 5) {
					
			?>
					<tr>
					<td>Abdur Rahim <?php echo $num; ?></td>
					<td>034</td>
					<td>3.45</td>
					</tr>
					
			<?php $num = $num+1; } ?>
			
		</table>
		
		<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
?>
		
	</body>
</html>