<?php 

include "data_base.php"; 
if(isset($_GET["id"])){


$sql="DELETE FROM livres WHERE LID={$_GET["id"]}";
$db->query($sql);
$sql="DELETE FROM commentaire WHERE LID={$_GET["id"]}";
$db->query($sql);
header ("location:view_books.php");
}

if(isset($_GET["mid"])){

$sql="DELETE FROM membres WHERE MID={$_GET["mid"]}";
$db->query($sql);

$sql="DELETE FROM commentaire WHERE MID={$_GET["mid"]}";
$db->query($sql);

$sql="DELETE FROM demande WHERE DID={$_GET["mid"]}";
$db->query($sql);
header ("location:view_membres.php");
}

if(isset($_GET["cid"])){

$sql="DELETE FROM commentaires WHERE CID={$_GET["cid"]}";
$db->query($sql);
header ("location:view_comments.php");
}

if(isset($_GET["did"])){

$sql="DELETE FROM demande WHERE DID={$_GET["did"]}";
$db->query($sql);
header ("location:view_request.php");
}
?>