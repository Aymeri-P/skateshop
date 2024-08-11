<?php
include 'connexionbdd.php';

// Préparation de la requête SQL
$stmt = $pdo->prepare("SELECT Nom, Marque, Taille, Prix, lienImage FROM skate");

// Exécution de la requête
$stmt->execute();

// Récupération de toutes les lignes de résultat
$infoskate = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!Doctype html>
<html>      

    <head>
        <meta charset="utf-8">
        <title>Ma page</title>
        <link href="index.css" rel="stylesheet">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    </head>



    <body>
        
        <header class="header">
            <a href="Acceuil.php" class="logo">Rider Shop</a>

            <nav class="navbar">
                <a href="skate.php">Skate</a>
                <a href="accesoires.php">Accesoires</a>
                <a href="vetements.php">Vêtements</a>
                <a href="chaussures.php">Chaussures</a>
                <a href="Connection.php">Connexion</a>
                <a href=""><i class="fa-solid fa-camera-retro" aria-hidden="true"></i></span></a>
            </nav>

        </header>

        <section class="recherchebar">

        </section>

        <section class="produit">
            <table>

            <tr>
                <th>Nom </th>
                <th>Marque </th>
                <th>Taille </th>
                <th>Prix </th>
                <th>Image </th>
            </tr>
                
            <?php foreach ($infoskate as $value) { ?>
                <tr>
                    <td><a href="pageInfo.php?nom=<?= urlencode($value["Nom"]) ?>&marque=<?= urlencode($value["Marque"]) ?>&taille=<?= urlencode($value["Taille"]) ?>&prix=<?= urlencode($value["Prix"]) ?>&image=<?= urlencode($value["lienImage"]) ?>"><?= $value["Nom"] ?></a></td>
                    <td><?= $value["Marque"] ?></td>
                    <td><?= $value["Taille"] ?></td>
                    <td><?= $value["Prix"] ?></td>
                    <td><img src="img/skate/<?= $value["lienImage"] ?>" alt="Image du skate <?= $value["Nom"] ?>"></td>
                </tr>
            <?php } ?>

                
                

            </table>
        </section>

    </body>


</html>