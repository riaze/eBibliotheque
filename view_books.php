<?php 
include "data_base.php"; 
session_start();
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
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

		<link rel="stylesheet" type="text/css" href="css/custom.css">
	

</head>
 	<body>
					 		<!-- Header bar -->
							<?php include "header.php";?>	
	
		<div class="container read">
			<div class="row">
	   			<div class="col-lg-3 bg-dark ">

	   			 		<!-- navigation bar -->
	   			 		<?php include "admin_navbar.php";?>
					
				</div>
									<!--end of navigatio bar-->
				<div class="col-lg-9 col-12">

					
					<?php
					echo "<h3 class='text-center'>Details Des Livres</h3>";
					 $sql="SELECT * FROM livres";
					 $res=$db->query($sql);
					 if($res->num_rows>0)
					 {
					 	echo "<table class='table table-striped view_books' >
								  <thead>
								    <tr class='text-success'>
								      <th scope='col'>S.No</th>
								      <th scope='col' class='pl-5'>Nom De Livre</th>
								      <th scope='col'>Mot Clé</th>
								      <th scope='col'>Catégories</th>
								      <th scope='col'>Action</th>
								      
								    </tr>
								  </thead>";
								  $i=0;
								while($row=$res->fetch_assoc()) 
								{
									$i++;

									echo "<tr class='text-capitalize'>";
									echo "<td>{$i}</td>";
									
									echo "<td>{$row["LNOM"]}</td>";
									echo "<td>{$row["MOTCLE"]}</td>";
									echo "<td>{$row["CATEGORIES"]}</td>";
									echo "<td><a href='{$row["DOSSIER"]}' target='_blank'><i class='material-icons' title='Lire'>visibility</i></a><a href='delete.php?id={$row["LID"]}'><i class='material-icons' style='color:black;' title='supprimer'>delete</i></a></td>";
									echo "</tr>"; 
								} 

						echo " </table>";
					 }
					 else{
					 	echo "<br><br><p class='erreur'>Désolé aucun Livre n'a été trouvé</p>";
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