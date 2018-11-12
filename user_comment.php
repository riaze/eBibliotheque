<?php 
session_start();
include "data_base.php";
if(!isset($_SESSION["UID"]))
{
	header ("location:alogin.php");
}
?>

<html>
<head>
	<title>E-Librairie</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
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
				<div class="col-lg-1 col-0"></div>						
				
					<div class="col-lg-7 col-12">
						<h4 class="text-center pt-2 pb-2">Envoyer Vos  <span class="text-warning"> Commentaires</span> </h4>
						<?php
						if(isset($_POST["send"]))
						{
							
						 $sql= "INSERT INTO commentaires(LID, MID, COMM, LOGS) VALUES ('{$_GET["id"]}', '{$_SESSION["UID"]}', '{$_POST["commentaires"]}', now())";
							$db->query($sql);
                        }

						    $sql="SELECT * FROM Livres WHERE LID=".$_GET["id"];
							$res=$db->query($sql);
							if($res->num_rows>0)
							{
								$row=$res->fetch_assoc();
								echo "<table class='table table-striped table-bordered'>";
								
								echo "<tr>
										<th scope='col'>Livre</th>
										<td>{$row["LNOM"]}</td>
								</tr>
								<tr>
										<th scope='col'>Mot Clé</th>
										<td>{$row["MOTCLE"]}</td>
								</tr>";
								echo "</table>";
							}
							else
							{
								echo "<p class='erreur'>Désolé aucun livre a été Trover</P>";
							}

							
							

						?>

					
					
							
							<form  class="form pb-2-1" action="<?php echo $_SERVER["REQUEST_URI"];?>" method="POST">
								 
								 <textarea rows="6" cols="50" class="form-control border-success"  name="commentaires" placeholder="Ecrivez Vos Commentaires" required=""></textarea>

								 <div id="Envoyer">
								 <button type="submit" class="btn btn-danger bt_connexion_comments" name="send">POST</button>
								 </div>
							</form>
							<?php
							 $sql="SELECT  membres.NOM,membres.PRENOM,commentaires.COMM,commentaires.LOGS FROM commentaires
 								INNER JOIN membres ON commentaires.MID=membres.MID WHERE commentaires.LID={$_GET["id"]} ORDER BY commentaires.CID DESC";
 								$res=$db->query($sql);
 								if($res->num_rows>0)
 								{
 									while($row=$res->fetch_assoc())
 									{
 										echo "<p>
 										<strong>{$row["NOM"]}&nbsp;&nbsp;{$row["PRENOM"]}</strong>&nbsp;&nbsp;:
 										{$row["COMM"]}&nbsp;&nbsp;&nbsp;{$row["LOGS"]}</p>";

 									}

 								}
 								else{
 									echo "<p class='erreur'> 0 Commentaire </p>";
 								}


							?>
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