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
							
					</nav>
				</div>
									<!--end of navigatio bar-->
				<div class="col-lg-2 col-0"></div>						
				
					<div class="col-lg-5 col-12 border border-success rounded bg-light p-3  mb-4">
						<h4 class="text-center pt-2 pb-2">Publier <span class="text-warning"> les Livres</span> </h4>
					
					<?php
						if(isset($_POST["upload"]))
						{
							$target_dir="upload/";
							$target_file=$target_dir.basename($_FILES["efile"]["name"]);

							 if(move_uploaded_file($_FILES["efile"]["tmp_name"], $target_file))
							{
								 $sql= "INSERT INTO livres(LNOM, MOTCLE, CATEGORIES,DOSSIER) VALUES ('{$_POST["btitle"]}', '{$_POST["keyword"]}','{$_POST["categories"]}', '{$target_file}')";
								
								if($db->query($sql)===TRUE)
								{
									echo "<p class='succès'>vous avez bien ajoutez dans la e-Bibliothèque</p>";
								}
								else 
									{
										echo "<p class='erreur'>Désolé on peuvez pas ajoutez dans la e-Bibliothèque</p>";
								}
								
								
							}
							
						}								
					
					?>
					<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" enctype="multipart/form-data">
						 
						 <div class="form-group">
						    
						    <input type="text" class="form-control"  name="btitle" placeholder="Titre" required="">
						    
						 </div>
						 <div class="form-group">    
						   <textarea class="form-control" name="keyword" placeholder="Mot Clé" required=""></textarea>
						 </div>
							<select class=" border-success categories" name="categories" required="">
							<option value="">categories</option>
									
							  <option value="cuisine">Cuisine</option>
							  <option value="humour">Humour</option>
							  <option value="scolaire">Scolaire</option>
							  <option value="sport">Sport</option>
							  <option value="informatique">Informatique</option>
							</select>

						 <div class="form-group bt_file">    
						   <input type="file" class=" "name="efile" required="">
						 </div>
						 
						 <button type="submit" class="btn btn-lg btn-danger bt_connexion" name="upload">upload</button>
					</form>

					</div>
					 
				</div>	 
					
					</div>
			</div>	
		</div>
							<!--footer-->
							<?php include "footer.php";?>


		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	</body>
</html>