<?php 
session_start();
include "data_base.php";
if(!isset($_SESSION["UID"]))
{
	header ("location:user_login.php");
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

					<?php include "user_navbar.php";?>

				</div>
									<!--end of navigatio bar-->
				<div class="col-lg-2 col-0"></div>						
				
					<div class="col-lg-5 col-12 ">
						<h4 class="text-center pt-2 pb-2">Demander un <span class="text-warning">nouveau Livre</span> </h4>
					
					<?php
						if(isset($_POST["Envoyer"]))
						{
								
					  	$sql="INSERT INTO `demande` (MID,MES, LOGS) VALUES ({$_SESSION["UID"]},'{$_POST["msg"]}', now())";
								

								if($db->query($sql)===TRUE)
								{
									echo "<p class='succès'>Votre Demande a été Pris en Compte</p>";

								}
										
								else
								{
									echo"<p class='erreur'> Erreur</p>";
								}
						}
					
					?>
							<div>
							<form  class="form" action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
								 
								 <textarea rows="6" cols="100" class="form-control border-success"  name="msg" placeholder="Faire une demande" required=""></textarea>

								 <div id="Envoyer">
								 <button type="submit" class="btn btn-danger btn-lg  bt_connexion" name="Envoyer">Envoyer</button>
								 </div>
							</form>
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