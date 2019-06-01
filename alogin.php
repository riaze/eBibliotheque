<?php 
session_start();		
include "data_base.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>E-Librairie</title>
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
			   			 <div class="col-lg-3  bg-dark text-warning">

			   			 	<!-- navigation bar -->

							<?php include "index_navbar.php";?>

						</div>	
							<!-- end of navigation bar -->

							<!-- admin login form -->
						<div class="col-lg-2 col-0 "></div>
						<div class="col-lg-5 col-12 border border-success rounded bg-light p-4">
							<h4 class="text-center">Connexion <span class="text-warning">Administrateur</span> </h4>

							<!-- php coding for form alogin.php -->
							<?php 
					
								if(isset($_POST["Connexion"]))
								{	

								     $sql="SELECT * FROM `admin` WHERE AEMAIL='{$_POST["aemail"]}' AND APASS='{$_POST["apass"]}'";
									 
									 
									 $res=$db->query($sql);

									 // num_rows indicates that number of rows exits for given sql quary
									 
									 if($res->num_rows>0)

										{
									 	
									 	$row=$res->fetch_assoc();	 // tranfer sqltable data from $res to $row
									    
									    // AID tranfer to ID and it will pass to ahome page
											$_SESSION ["ID"]=$row ["AID"]; 
											echo 'riaze';
									 	header ("location:ahome.php");
										}
									 

									 else{
									 	echo"<p class='erreur'>Identifiant Invalide</p>";
									 }
								}
								
							?>	<!-- end of php coding for form alogin.php -->
							    
							    <!-- admin login form starts -->
							    
							<form action="alogin.php" method="POST">
							  <div class="form-group">
							    
							    <input type="email" class="form-control"  name="aemail" placeholder="Addresse Email" required="">
							    <small  class="form-text  text-success">Nous ne partagerons jamais votre Email avec quiconque.</small>
							  </div>
							  <div class="form-group">
							    
							    <input type="password" class="form-control" name="apass" placeholder="Mot de Passe" required="">
							  </div>
							  
							  <button type="submit" class="btn btn-danger btn-lg bt_connexion" name="Connexion">Connexion</button>
							</form>


						</div>
						
					</div>
					
				</div>
							<!-- end of admin login form -->
							<?php include "footer.php";?>
							<!--footer-->

						




		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		</body>
</html>