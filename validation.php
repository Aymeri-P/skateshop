<?php
include 'connexionbdd.php';


// SYSTEME D'INSCRIPTION
if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["mail"]) &&
    isset($_POST["password"])
) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    $mdp = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO client (nom, prenom, mail, mdp) 
    VALUES (:nom, :prenom, :mail, :mdp)");

    $return = $stmt->execute([
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':mail' => $mail,
        ':mdp' => $mdp
    ]);

    if ($return) {
        header('Location: Acceuil.php');
        exit(); 
    } else {
        echo "Erreur lors de l'insertion : " . implode(" ", $stmt->errorInfo());
        exit(); 
    }
} 


// SYSTEME DE CONNEXION
if (
    isset($_POST["name"]) &&
    isset($_POST["password"])
) {
    $name = $_POST["name"];
    $password = $_POST["password"];

    // vérifier les informations de connexion
    $stmt = $pdo->prepare("SELECT nom, mdp FROM client WHERE nom = :nom");
    $stmt->execute([':nom' => $name]);
    $user = $stmt->fetch();

    // Vérifier si l'utilisateur et le mot de passe sont correct
    if ($user && password_verify($password, $user['mdp'])) {
        
        if ($user['nom'] === 'admin' && $user['mdp'] === 'admin') {
            header('Location: pageAdmin.php');
            exit();
        } else {
            header('Location: Acceuil.php');
            exit();
        }

    } else {
        header('Location: Connection.php?error=1');
        exit();
    }
} else {
    header('Location: Connection.php');
    exit();
}


?>
