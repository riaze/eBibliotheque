<?php 
session_start();
if(isset($_SESSION["ID"])){
unset($_SESSION["ID"]);
session_destroy();
header ("location:index.php");

}
if(isset($_SESSION["UID"]))
{
unset($_SESSION["UID"]);
session_destroy();
header ("location:index.php");
}

?>