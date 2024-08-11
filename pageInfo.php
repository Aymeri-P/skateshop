<?php
session_start(); // Démarrer la session
// Récupérer les détails du skate depuis l'URL
$nom = $_GET['nom'] ?? '';
$marque = $_GET['marque'] ?? '';
$taille = $_GET['taille'] ?? '';
$prix = $_GET['prix'] ?? '';
$image = $_GET['image'] ?? '';

// Ajouter les détails du skate au panier
$skate = array(
    'nom' => $nom,
    'marque' => $marque,
    'taille' => $taille,
    'prix' => $prix,
    'image' => $image
);

// Ajouter le skate au panier
$_SESSION['panier'][] = $skate;
?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Informations sur le skate</title>
        <link href="index.css" rel="stylesheet">
    </head>

    <body>

        <header class="header">
            <a href="Accueil.php" class="logo">Rider Shop</a>

            <nav class="navbar">
                <a href="skate.php">Skate</a>
                <a href="accesoires.php">Accessoires</a>
                <a href="vetements.php">Vêtements</a>
                <a href="chaussures.php">Chaussures</a>
                <a href="Connection.php">Connexion</a>
                <a href="pageCommande.php">Panier</a>
            </nav>
        </header>


        <section class="presentation">
                    <?php
                    // Récupération des paramètres de l'URL
                    $nom = $_GET['nom'] ?? '';
                    $marque = $_GET['marque'] ?? '';
                    $taille = $_GET['taille'] ?? '';
                    $prix = $_GET['prix'] ?? '';
                    $image = $_GET['image'] ?? '';

                    // Affichage des détails du skate
                    echo "<h2>$nom</h2>";
                    echo "<img src=\"img/skate/$image\" alt=\"$nom\" width=\"300\">";
                    echo "<p>Marque : $marque</p>";
                    echo "<p>Taille : $taille</p>";
                    echo "<p>Prix : $prix</p>";
                    ?>

        </section>

        <a href="#" target="_blank">Ajouter Aux Panier</a>
        <a href="pageCommande.php" target="_blank">Voir Le Panier</a>

    </body>
</html>
