<?php
include 'connexionbdd.php';

?>

<!Doctype html>
<html>      

    <head>
        <meta charset="utf-8">
        <title>Ma page</title>
        <link href="Connection.css" rel="stylesheet">
    </head>

    <?php

        
        if (isset($_POST["name"]) && isset($_POST["password"])) { 
            $name = $_POST["name"]; 
            $password = $_POST["password"]; 
        
            $stmt = $pdo->prepare("SELECT nom, password FROM administrateur WHERE nom = :nom AND password = :password ");
            $stmt->execute([':nom' => $name, ':password' => $password]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC); // Récupère les données de l'utilisateur

            // Vérifie si l'utilisateur existe et si le mot de passe est correct
            if ($user && password_verify($password, $user['mdp'])) {
                    header('Location: pageAdmin.php'); 
            }
        } 
    ?>


    <body>

        <section>
            <div class="form-box">
                <div class="form-value">
                    <form action="validationAdmin.php" method="POST">
                        <h2>Connexion</h2>

                        <div class="inputbox">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input type="text" name="name" required>
                            <label for="name">Nom</label>
                        </div>

                        <div class="inputbox">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input type="password" name="password" required>
                            <label for="password">Mot de passe</label>
                            <br>
                        </div>

                        <input class="bouton" type="submit" value="Se connecter">

                        <div class="register">
                            <br>
                            <p>Revenir a la page<a href="Acceuil.php"> Accueil</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>