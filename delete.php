<?php
include_once 'bddconnection.php';
if (isset($_GET["id"])) {
     
$requete_delete=$bdd->prepare('DELETE  FROM information  WHERE id =:idn');
$requete_delete->execute(array('idn'=>$_GET['id']));
header("location:index.php");   

} else {
  echo "echec";
}

?>