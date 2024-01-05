<?php
include_once 'bddconnection.php';
$requete = $bdd->query('SELECT * from information');
$donnee = $requete->fetchAll(PDO::FETCH_ASSOC);

// var_dump($donnee);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="fontawesome-free/css/all.css">
</head>

<body>
    <div class="container-lg">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2>Employée <b>Détails</b></h2>
                        </div>
                        <div class="col-sm-4">
                            <a href="inscription.php" target="_blank">
                                <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Ajoutez nouveau</button>

                            </a>

                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NOM</th>
                            <th>Départment</th>
                            <th>Numero de telephone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($donnee as $key => $value) {

                            echo "<tr><td>{$value['nom']} </td>
                        <td>{$value['departement']}</td>
                        <td>{$value['phone']}</td>
                        <td>
                                <a class='add' title='Add' ><i class='fas fa-add'></i>
                                </a>
                                <a class='edit'  href='modification.php?id={$value['id']}' title='Edit' ><i class='fas fa-edit'></i></a>
                                <a class='delete' href='delete.php?id={$value['id']}' title='Delete'>
                                    <img src='icone/delete.svg'>
                                </td>
                        </tr>
                        ";
                        }



                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="fontawesome-free/js/all.js"></script>
</body>

</html>