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
									  <th>Action</th>
									</tr>
							</thead>
							
							<tbody>
							
							<?php
								
								$sql = "SELECT * from student_info";
								$result = $conn->query($sql);
								
								while($row = $result->fetch_assoc()) { ?>
									
									<tr>
									  <th><?php echo $row['id']; ?></th>
									  <td><?php echo $row['name']; ?></td>
									  <td><?php echo $row['course_name']; ?></td>
									  <td><?php echo $row['batch']; ?></td>
									  <td><?php echo $row['phone']; ?></td>
									  <td><?php echo $row['email']; ?></td>
									  <td><?php echo $row['address']; ?></td>
									  <td>
										<a href="edit.php?student_id=<?php echo $row['id']?>" class="btn btn-secondary" target="_blank">Edit</a>
										<a href="delete.php" class="btn btn-danger">Delete</a>
									  </td>
									</tr>
									
								<?php } ?>
								  		
								
							</tbody>
							
						</table>
						
						
					
					</div>
					
				</div>
			
			</div>
			
		</section>
		
		
		<footer class="bg-dark footer-section">
		
			<div class="footer-text">
			
				<p>Copyright © 2021 "Student Registration Form" by ABCD.</p>
			
			</div>
		
		</footer>
	
	
	<script src="js/bootstrap.bundle.min.js"></script>
	
	</body>
</html>
