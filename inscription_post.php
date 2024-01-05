<?php
include_once 'bddconnection.php';
var_dump($_POST);
if (isset($_POST['Nom']) AND  isset($_POST['Departement']) AND isset($_POST['Numero'])) {
// Textes complets	
// id
// nom
// departement
// phone
$requete_insert = $bdd->prepare('INSERT INTO information(nom,departement,phone) VALUES(:nom,:departement,:phone)');
$requete_insert->execute(array(
        'nom' =>$_POST["Nom"],
        'departement' => $_POST["Departement"],
        'phone' => $_POST["Numero"],
    ));
}
    
?> 

