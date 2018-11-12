<?php 
session_start();		
include "data_base.php"; 
if(!isset($_SESSION["UID"]))
{
	header ("location:user_login.php");
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/custom.css">
		
	</head>
		<body>
			<!-- Header bar -->

				<?php include "header.php";?>


				<div class="container">
					<div class="row">
		   			 	<div class="col-lg-3 col-0  bg-dark ">

		   			 		<!-- navigation bar -->

							<?php include "user_navbar.php";?>
									
						</div>
						<div class="col-lg-9 col-12">
							<div class="row">
								<div class="col-4">
									<img src="img/img1.jpg" class=" img-fluid img-thumbnail " alt="1_image"><br><br>
								</div>
								
								<div class="col-4">
									<img src="img/img2.jpg" class=" img-fluid img-thumbnail" alt="2_image">
								</div>
								<div class="col-4">
									<img src="img/img3.jpg" class=" img-fluid  img-thumbnail" alt="3_image">
								</div>
							</div>	
							<div class="row">
								<div class="col-4">
									<img src="img/img4.jpg" class=" img-fluid img-thumbnail" alt="4_image">
								</div>
								
								<div class="col-4">
									<img src="img/img7.jpg" class=" img-fluid img-thumbnail " alt="5_image">
								</div>
								<div class="col-4">
									<img src="img/img6.jpg" class=" img-fluid img-thumbnail" alt="6_image">
								</div>
							</div>	
							<div class="row">
								<div class="col-4">
									<img src="img/img5.jpg" class=" img-fluid img-thumbnail" alt="7_image">
								</div>
								
								<div class="col-4">
									<img src="img/img8.jpg" class=" img-fluid img-thumbnail " alt="8_image">
								</div>
								<div class="col-4">
									<img src="img/img9.jpg" class=" img-fluid img-thumbnail" alt="9_image">
								</div>
							</div>	
						</div>


					</div>
				</div>

				<!--footer-->

					<?php include "footer.php";?>


			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		</body>
</html>