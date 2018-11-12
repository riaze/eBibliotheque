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
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
				<div class="col-lg-2 col-12"></div>						
				
					<div class="col-lg-5 col-12 ">
						<h4 class="text-center pt-2 pb-2 pr-5">Chercher un <span class="text-warning"> Livre</span> </h4>

					
					
							
							<form  class="form mt-5" action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">

							 
							 <input rows="4" cols="50" class="border-success search "  name="motcle" placeholder="Rechercher les livres	" required="">
							 <select class=" border-success categories" name="categories" required="">
								<option value="">categories</option>
										
							  <option>Cuisine</option>
							  <option>Humour</option>
							  <option>Scolaire</option>
							  <option>Sport</option>
							  <option>Informatique</option>
							</select>

							 
							 <button type="submit" class="btn btn-danger bt_connexion" name="Rechercher">Rechercher</button>
							 
						</form>
					</div>	
					
					<?php
					if(isset($_POST["Rechercher"]))
					{
				
				    $sql="SELECT * FROM livres WHERE LNOM like '%{$_POST["motcle"]}%' or MOTCLE like '%{$_POST["motcle"]}%' AND CATEGORIES='{$_POST["categories"]}'";
					 $res=$db->query($sql);
						 if($res->num_rows>0)
						 {
					 	
					 		echo "<table class='table table-striped mt-0 pt-0' >
								  <thead>
								    <tr class='text-success text-center''>
								      <th scope='col'>Id</th>
								      <th scope='col'>Nom De Livre</th>
								      <th scope='col'>Mot Clé</th>
								      <th scope='col'>Catégories</th>
								      <th scope='col'>Voir</th>
								      <th scope='col'>Commentaire</th>
								      
								    </tr>
								  </thead>";
								  $i=0;
								while($row=$res->fetch_assoc()) 
								{
									$i++;

									echo "<tr class='text-capitalize text-center'>";
									echo "<td>{$i}</td>";
									
									echo "<td >{$row["LNOM"]}</td>";
									echo "<td>{$row["MOTCLE"]}</td>";
									echo "<td>{$row["CATEGORIES"]}</td>";
									echo "<td><a href='{$row["DOSSIER"]}' target='_blank'>
											<i class='material-icons'>visibility</i></a></td>";

									echo "<td class='text-center'><a href='user_comment.php?id={$row["LID"]}'><i class='material-icons'>arrow_forward
</i></a></td>";

									echo "</tr>";
								} 

						echo " </table>";
					 		}
							else
							 {
							 	echo "<p style='color:red;padding-left:43%;'>Désolé aucun Livre n'a été trouvé</p>";
									}
					}
					?>
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