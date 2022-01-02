<?php

	$host = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'student_registration';

	$conn = new mysqli($host,$username,$password,$dbname);

?>

<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<title>Student Registration Form</title>
	</head>
	
	<body>
	
		<header>
			
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				
				<div class="container">
					
					<a class="navbar-brand" href="index.php">Student Registration Form</a>
					
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					  <span class="navbar-toggler-icon"></span>
					</button>
					
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						
						<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						
							<li class="nav-item">
								<a class="nav-link" aria-current="page" href="index.php">Home</a>
							</li>
							
							<li class="nav-item">
								<a class="nav-link" href="student_list.php">Student Lists</a>
							</li>
							
						</ul>
						
					</div>
					
				</div>
				  
			</nav>

		</header>
		
		<section class="form-data">
		
			<div class="container">
			
				<div class="row justify-content-center">
				
					<div class="col-sm-10">
					
					<?php
						
						$sql = "SELECT * FROM student_info";
						$result = $conn->query($sql);
						$row = $result->fetch_assoc();
						print_r($row);
						
					
					?>
					
						<table class="table table-bordered table-striped">
								  
							<thead>
									<tr>
									  <th>SL No.</th>
									  <th>Name</th>
									  <th>Course Name</th>
									  <th>Batch</th>
									  <th>Phone</th>
									  <th>Email</th>
									  <th>Address</th>
									</tr>
							</thead>
								  
							<tbody>
									<tr>
									  <th>1</th>
									  <td>Mark</td>
									  <td>Otto</td>
									  <td>@mdo</td>
									  <td>@mdo</td>
									  <td>@mdo</td>
									  <td>@mdo</td>
									</tr>
									<tr>
									  <th>1</th>
									  <td>Mark</td>
									  <td>Otto</td>
									  <td>@mdo</td>
									  <td>@mdo</td>
									  <td>@mdo</td>
									  <td>@mdo</td>
									</tr>
									<tr>
									  <th>1</th>
									  <td>Mark</td>
									  <td>Otto</td>
									  <td>@mdo</td>
									  <td>@mdo</td>
									  <td>@mdo</td>
									  <td>@mdo</td>
									</tr>
							</tbody>
							
						</table>
						
						
					
					</div>
					
				</div>
			
			</div>
			
		</section>
		
		
		<footer class="bg-dark footer-section">
		
			<div class="footer-text">
			
				<p>Copyright © 2021 "Student Registration Form" by ABCDEF.</p>
			
			</div>
		
		</footer>
	
	
	<script src="js/bootstrap.bundle.min.js"></script>
	
	</body>
</html>
