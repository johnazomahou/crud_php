<?php
session_start();

include_once 'bddconnection.php';
   
if (isset($_POST['Nom']) AND  isset($_POST['Departement']) AND isset($_POST['Numero'])) {
    // Textes complets	
    // id
    // nom
    // departement
    // phone  
    
    $requete_modif=$bdd->prepare('UPDATE information SET nom=:nom,departement=:departement,phone=:phone WHERE id =:id');
        
    $requete_modif->execute(array(
        'nom' =>$_POST["Nom"],
        'departement' => $_POST["Departement"],
        'phone' => $_POST["Numero"],
        'id'=>$_SESSION['id']
    ));
    
header("location:index.php");



    }
   

   
?>