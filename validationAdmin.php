<?php
include 'connexionbdd.php';



// SYSTEME DE CONNEXION ADMIN 
        if (isset($_POST["name"]) && isset($_POST["password"])) { 
            $name = $_POST["name"]; 
            $password = $_POST["password"]; 
        
            $stmt = $pdo->prepare("SELECT nom, password FROM administrateur WHERE nom = :nom AND password = :password ");
            $stmt->execute([':nom' => $name, ':password' => $password]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC); // Récupère les données de l'utilisateur

            // Vérifie si l'utilisateur existe et si le mot de passe est correct
            if ($user && $password) {
                    header('Location: pageAdmin.php'); 
            }
        } 

?>
