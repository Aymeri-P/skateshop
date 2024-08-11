<?php

include 'connexionbdd.php';

$stmt = $pdo->prepare("SELECT Nom, Marque, Taille, Prix, lienImage FROM vetement");

?>

<!Doctype html>
<html>      

    <head>
        <meta charset="utf-8">
        <title>Ma page</title>
        <link href="index.css" rel="stylesheet">
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
            </nav>

        </header>
     


        
        <section class="recherchebar">

        </section>

    </body>


</html>