<?php 
include "data_base.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
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
		   			 <div class="col-lg-3 bg-dark text-warning">
						
						<!-- navigation bar -->
						<?php include "index_navbar.php";?>
						
					</div>	

						<!-- end of navigation bar -->

						<!-- Registration form -->
					<div class="col-lg-2 col-0"></div>
					<div class="col-lg-5 col-12 border border-success rounded bg-light p-4">
						
						<?php

						if(isset($_POST["inscrire"]))
						{
						$sql="SELECT EMAIL FROM membres WHERE EMAIL = '{$_POST["uemail"]}'";
						$res=$db->query($sql);
						if($res->num_rows<0)
						{
							
						$sql= "INSERT INTO membres(NOM, PRENOM, EMAIL, ADDRESSE, CODEPOSTAL, VILLE, TELEPHONE, PASS) VALUES ('{$_POST["unom"]}', '{$_POST["uprenom"]}', '{$_POST["uemail"]}', '{$_POST["uaddresse"]}', '{$_POST["upostal"]}', '{$_POST["uville"]}', '{$_POST["utel"]}', '{$_POST["upass"]}')";
						 

							if($db->query($sql)===TRUE){

	                          echo "<p class='succès'>Votre Inscription a bien été pris en compte et pouvez acceder</p>";
	                          
									
							}
							else
							{
									echo  "<p class='erreur'>Erreur de Téléchargement</p>";
							}
						}
						else{
							echo "<p class='erreur'>ce compte existe déjà</p>";
						}	 
						}									
					
					?>
						<h4 class="text-center text-warning mb-3 mt-0">S'Inscrire </h4>
						<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" autocomplete="off" >
							<div class="form-group float-left">
						    
						    <input type="text" class="form-control" name="unom" placeholder="Nom" required="">
						    
						  </div>
						  <div class="form-group float-right">
						    
						    <input type="text" class="form-control" name="uprenom"   placeholder="Prenom" required="">
						    
						  </div>
						  <div class="form-group float-left">
						    
						    <input type="Email" class="form-control"  name="uemail" placeholder="Addresse Email" id="uemail1" required="">
						    <!--<small  class="form-text  text-success">Nous ne partagerons jamais votre Email avec quiconque.</small>-->
						  </div>
						  <div class="form-group float-right">
						    
						    <input type="Email" class="form-control" id="uemail"  placeholder="Confirmer Addresse Mail" required="" oninput="useremail(this)" />  
						  </div>
						  <script language='javascript' type='text/javascript'>
								function useremail(input) {
						        if (input.value != document.getElementById('uemail1').value) {
						            input.setCustomValidity('E-mail doit être Identique.');
						        } else {
						            // input is valid -- reset the error message
						            input.setCustomValidity('');
						        }
						    }
						    </script>   
						  <div class="form-group float-left">
						    
						    <input type="password" class="form-control"  name="upass" id="upass" placeholder="Mot de Passe" required="">
						  </div>
						  <div class="form-group float-right">
						    
						    <input type="password" class="form-control"  placeholder="Confirmer Mot de Passe" required="" oninput="password(this)"/ >
						  </div>
						    <script language='javascript' type='text/javascript'>
								function password(input) {
						        if (input.value != document.getElementById('upass').value) {
						            input.setCustomValidity('Mot de Passe doit être Identique.');
						        } else {
						            // input is valid -- reset the error message
						            input.setCustomValidity('');
						        }
						    }
						    </script> 
						  
						  
						  <div class="form-group float-left">
						    
						    <input type="text" class="form-control"  name="uaddresse" placeholder="Addresse" required="">
						  </div>
						  <div class="form-group float-right">
						    
						    <input type="text" class="form-control"  name="upostal" placeholder="Code Postal" required="">
						  </div>
						  <div class="form-group float-left">
						    
						    <input type="text" class="form-control"  name="uville" placeholder="Ville" required="">
						  </div>
						  <div class="form-group float-right">
						    
						    <input type="tel" class="form-control"  name="utel" placeholder="Télephone" required="">
						  </div>
						  
						  <button type="submit" class="btn btn-danger btn-lg bt_connexion" name="inscrire" >S'Inscrire</button>
						  
						</form>


					</div>
					
				</div>
			</div>
							<!-- end of register form -->

							<!-- footer -->

					<?php include "footer.php";?>

			
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		</body>
</html>