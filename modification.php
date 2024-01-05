<?php
session_start();

if (isset($_GET["id"])){

$_SESSION['id'] =$_GET["id"];
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    <link rel="stylesheet" href="index.css">
    
</head>
<body>

<div class="corps">

    <div class="formulaire">
      <div class="titre">Inscription</div>
      <form action="modification_post.php" method="POST" name="form1">
      
        <div class="titre-input">
          <p class="titre">Nom</p>
          <input type="text" name="Nom" class="form-control"  required>
          <div class="invalid-feedback">
            Valid first Nom is required.
          </div>

        </div><div class="titre-input">
          <p class="titre">Departement</p>
          <input type="text" name="Departement" class="form-control"  required>
          <div class="invalid-feedback">
            Valid first Departement is required.
          </div>

        </div>
        <div class="titre-input">
          <p class="titre">Numero</p>
          <input type="text" name="Numero" class="form-control"  required>
          <div class="invalid-feedback">
            Valid first numero is required.
          </div>

        </div>
        <div class="titre-input ensemble_envoyer_reset">
          <input type="submit" value="Envoyer" class="input-type-submit">
          <input type="reset" value="Effacer" class="input-type-submit">
          <div>
          </div>
          
        
        
        
        </div>
      </form>

    </div>
  </div>


</body>
</html>
