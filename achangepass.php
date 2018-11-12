<?php 
session_start();
include "data_base.php"; 
if(!isset($_SESSION["ID"]))
{
	header ("location:alogin.php");
}
?>

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
	   			<div class="col-lg-3 bg-dark ">

	   			 		<!-- navigation bar -->

					<?php include "admin_navbar.php";?>

				</div>
									<!--end of navigatio bar-->
				<div class="col-lg-2 col-0"></div>						
				
					<div class="col-lg-5 col-12 border border-success rounded bg-light p-5  mb-5">
						<h4 class="text-center pt-2 pb-2">Changer Votre <span class="text-warning"> Mot de Passe</span> </h4>
					
					<?php
						if(isset($_POST["change"]))
						{

								
							$sql="SELECT * FROM `admin` WHERE APASS='{$_POST["apass"]}' AND AID='{$_SESSION["ID"]}'";
								$res=$db->query($sql);
								if($res->num_rows>0)
								{
									$s="UPDATE admin set APASS='{$_POST["npass"]}' WHERE AID='{$_SESSION["ID"]}'";
									$db->query($s);

									switch ($db->query($s)===TRUE) 
									{
										case 1: 
										echo "<p class='succès'>Votre Mot de passe a été mis à jour</p>";
											break;
										default:
											echo "<p class='erreur'>Désolé incapable de changer votre mot de pass</p>";	
									}

								}
										
								else
								{
									echo"<p class='erreur'> Wrong Password</p>";
								}
						}
					
					?>
					<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
						 
						 <div class="form-group achange">
						    
						    <input type="password" class="form-control achange"  name="apass" placeholder="Ancien Mot de Passe" required="">
						    
						 </div>
						 <div class="form-group">    
						   <input type="password" class="form-control achange" name="npass" placeholder="Nouveau Mot de Passe" required="">
						 </div>
						 
						 <button type="submit" class="btn btn-danger  my-4 mx-6 connexion" name="change">Change</button>
					</form>

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