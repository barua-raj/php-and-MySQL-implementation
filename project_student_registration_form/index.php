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
		
		<section class="form-section">
		
			<div class="container">
			
				<div class="row justify-content-center">
				
					<div class="col-lg-6">
					
						<div class="form-box">
						
						<?php
							
							if ($_SERVER['REQUEST_METHOD'] == 'POST') {
									
									$name = $_POST['name'];
									$course_name = $_POST['course_name'];
									$batch = $_POST['batch'];
									$phone = $_POST['phone'];
									$email = $_POST['email'];
									$address = $_POST['address'];

									$sql = "INSERT INTO student_info(name,course_name,batch,phone,email,address)
									VALUES('$name','$course_name','$batch','$phone','$email','$address')";
									
									$insert = $conn->query($sql);
									
									if ($insert) {
										echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
										Your data is submitted successgully!
										<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>';
									}
									else {
										echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
										Your data is not submitted successfully!
										<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>';
									}
									
							}	
							
						?>
						
							<form action="" method="POST">
							
								<div class="mb-3">
									<label class="form-label">Name</label>
									<input type="text" class="form-control" name="name">
								</div>
								
								<div class="mb-3">
									<label class="form-label">Course Name</label>
									<input type="text" class="form-control" name="course_name">
								</div>
								
								<div class="mb-3">
									<label class="form-label">Batch</label>
									<input type="number" class="form-control" name="batch">
								</div>
								
								<div class="mb-3">
									<label class="form-label">Phone Number</label>
									<input type="number" class="form-control" name="phone">
								</div>
								
								<div class="mb-3">
									<label class="form-label">Email</label>
									<input type="email" class="form-control" name="email">
								</div>
								
								<div class="mb-3">
									<label class="form-label">Address</label>
									<input type="text" class="form-control" name="address">
								</div>

								<div>
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
								
							</form>
						
						</div>
					
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