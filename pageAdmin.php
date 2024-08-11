<?php
include 'connexionbdd.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérez les valeurs du formulaire

    // SKATE
    $nomskatevaleur = $_POST["nom"];
    $marqueskatevaleur = $_POST["marque"];
    $tailleskatevaleur = $_POST["taille"];
    $prixskatevaleur = $_POST["prix"];
    $lienImageskatevaleur = $_POST["lienImage"];

    // ACCESSOIRE
    $nomaccessoirevaleur = $_POST["nom"];
    $marqueaccessoirevaleur =$_POST["marque"];
    $prixaccessoirevaleur = $_POST["prix"]; 
    $lienImageaccessoirevaleur = $_POST["lienImage"];


    $nomvetementvaleur = $_POST["nom"];
    $marquevetementvaleur =$_POST["marque"];
    $taillevetementvaleur = $_POST["taille"];
    $prixvetementvaleur = $_POST["prix"]; 
    $lienImagevetementvaleur = $_POST["lienImage"];


    $nomchaussurevaleur = $_POST["nom"];
    $marquechaussurevaleur = $_POST["marque"];
    $taillechaussurevaleur = $_POST["taille"];
    $prixchaussurevaleur = $_POST["prix"];
    $lienImagechaussurevaleur = $_POST["lienImage"];

    

    // Pour les skate
    $stmtSkate = $pdo->prepare("INSERT INTO skate (nom, marque, taille, prix, lienImage) VALUES (:nomskate, :marqueskate, :tailleskate, :prixskate, :lienImageskate)");
    $stmtSkate->execute([
        ':nomskate' => $nomskatevaleur,
        ':marqueskate' => $marqueskatevaleur,
        ':tailleskate' => $tailleskatevaleur,
        ':prixskate' => $prixskatevaleur,
        ':lienImageskate' => $lienImageskatevaleur
    ]);

    // Pour les accessoires
    $stmtAccessoires = $pdo->prepare("INSERT INTO accesoire (nom, marque, prix, lienImage) VALUES (:nomaccessoires, :marqueaccessoires, :prixaccessoires, :lienImageaccessoires)");
    $stmtAccessoires->execute([
        ':nomaccessoires' => $nomaccessoirevaleur,
        ':marqueaccessoires' => $marqueaccessoirevaleur,
        ':prixaccessoires' => $prixaccessoirevaleur,
        ':lienImageaccessoires' => $lienImageaccessoirevaleur
    ]);

    // Pour les vêtements
    $stmtVetements = $pdo->prepare("INSERT INTO vetement (nom, marque, taille, prix, lienImage) VALUES (:nomvetements, :marquevetements, :taillevetements, :prixvetements, :lienImagevetements)");
    $stmtVetements->execute([
        ':nomvetements' => $nomvetementvaleur,
        ':marquevetements' => $marquevetementvaleur,
        ':taillevetements' => $taillevetementvaleur,
        ':prixvetements' => $prixvetementvaleur,
        ':lienImagevetements' => $lienImagevetementvaleur
    ]);

    // Pour les chaussures
    $stmtChaussures = $pdo->prepare("INSERT INTO chaussure (nom, marque, taille, prix, lienImage) VALUES (:nomchaussures, :marquechaussures, :taillechaussures, :prixchaussures, :lienImagechaussures)");
    $stmtChaussures->execute([
        ':nomchaussures' => $nomchaussurevaleur,
        ':marquechaussures' => $marquechaussurevaleur,
        ':taillechaussures' => $taillechaussurevaleur,
        ':prixchaussures' => $prixchaussurevaleur,
        ':lienImagechaussures' => $lienImagechaussurevaleur
    ]);




    // Redirigez l'utilisateur vers une page de confirmation ou une autre page après l'insertion
    header("Location: pageAdmin.php");
    exit(); // Assurez-vous de quitter le script après la redirection
}
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


        
        <div class="ajouterElement">
            
            <div class="ajout skate">
                <!-- Ajouter Skate -->
                <h2>Ajouter Skate :</h2>
                <form action="#" method="POST">
                    <label for="nomskatevaleur">Nom :</label>
                    <input type="text" id="nomskate" name="nom">

                    <label for="marqueskatevaleur">Marque :</label>
                    <input type="text" id="marqueskate" name="marque">

                    <label for="tailleskatevaleur">Taille :</label>
                    <input type="text" id="tailleskate" name="taille">

                    <label for="prixskatevaleur">Prix :</label>
                    <input type="text" id="prixskate" name="prix">

                    <label for="lienImageskatevaleur">Lien Image :</label>
                    <input type="text" id="lienImage" name="lienImage">

                    <input type="submit" value="AjouterSkate"> 
                </form>
            </div>
            

            <div class="ajout accessoire">
                <!-- Ajouter Accesoires -->
                <h2>Ajouter Accesoires :</h2>
                <form action="#" method="POST">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nomaccesoires" name="nom">

                    <label for="marque">Marque :</label>
                    <input type="text" id="marqueaccesoires" name="marque">

                    <label for="prix">Prix :</label>
                    <input type="text" id="prixaccesoires" name="prix">

                    <label for="prix">Lien Image :</label>
                    <input type="text" id="lienImage" name="lienImage">

                    <input type="submit" value="AjouterAccessoire"> 
                </form>
            </div>
            

            <div class="ajout chaussure">
                <!-- Ajouter Chaussures -->
                <h2>Ajouter Chaussures :</h2>
                <form action="#" method="POST">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nomchaussures" name="nom">

                    <label for="marque">Marque :</label>
                    <input type="text" id="marquechaussures" name="marque">

                    <label for="taille">Taille :</label>
                    <input type="text" id="taillechaussures" name="taille">

                    <label for="prix">Prix :</label>
                    <input type="text" id="prixchaussures" name="prix">

                    <label for="prix">Lien Image :</label>
                    <input type="text" id="lienImage" name="lienImage">

                    <input type="submit" value="AjouterChaussure"> 
                </form>
            </div>
            


            <div class="ajout vetement">
                <!-- Ajouter Vêtements -->
                <h2>Ajouter vêtements :</h2>
                <form action="#" method="POST">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nomvetements" name="nom">

                    <label for="marque">Marque :</label>
                    <input type="text" id="marquevetements" name="marque">

                    <label for="taille">Taille :</label>
                    <input type="text" id="taillevetements" name="taille">

                    <label for="prix">Prix :</label>
                    <input type="text" id="prixvetements" name="prix">

                    <label for="prix">Lien Image :</label>
                    <input type="text" id="lienImage" name="lienImage">

                    <input type="submit" value="AjouterVetement"> 
                </form>
            </div>
            
        </div>
    
        

    </body>

</html>