<?php
session_start(); // Démarrer la session

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier si l'index à supprimer est défini
    if (isset($_POST['index'])) {
        $index = $_POST['index'];
        // Supprimer l'élément du panier
        unset($_SESSION['panier'][$index]);
        // Réorganiser les index
        $_SESSION['panier'] = array_values($_SESSION['panier']);
    }
}

// Rediriger vers la page de commande
header("Location: commande.php");
exit;
?>
