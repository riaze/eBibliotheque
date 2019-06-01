<?php 
ob_start();
session_start();
include "data_base.php"; 
function countRecord($sql,$db){
	$res=$db->query($sql);
	return $res->num_rows;
}
			/*It is used avoid to access admin home page using browser navigation bar, the value of ID Comes from alogin page at time of admin try to login */

if(!isset($_SESSION["ID"]))
{
	header ("location:alogin.php");
}

?>
<html>
	<head>
		<title>E-Librairie</title>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">	
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
			<link rel="stylesheet" type="text/css" href="css/custom.css">
	</head>
		<body>	
				<!-- Header bar -->

				<?php include "header.php";?>

			<div class="container">
					<div class="row">
		   			 	<div class="col-lg-3 bg-dark ">

		   			 		<!-- navigation bar -->

							<?php include "admin_navbar.php";?>
									
						</div>

						<div class="col-lg-2 col-0"></div>
						<div class="col-lg-5 col-12 border border-success rounded bg-light p-4">
						<h4 class="text-center font-weight-bold">Bienvenue <span class="text-warning">Administrateur</span> </h4>
						<ul class="list-group mx-4 mt-5">
							<h5><li class="list-group-item"> Total Des Membres <span class="badge badge-success float-right"><?php echo countRecord("SELECT * FROM membres",$db); ?></span> </li></h5>

							<h5><li class="list-group-item">Total Des Livres <span class="badge badge-secondary float-right"> <?php echo countRecord("SELECT * FROM livres",$db); ?></span></li></h5>

							<h5><li class="list-group-item"> Total Des Demandes <span class="badge badge-danger float-right"> <?php echo countRecord("SELECT * FROM demande",$db); ?></span></li></h5>

							<h5><li class="list-group-item">Total Des Commentaires <span class="badge badge-warning float-right"> <?php echo countRecord("SELECT * FROM commentaires",$db); ?></span></li></h5>
							
						</ul>

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
