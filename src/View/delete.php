<?php

require_once __DIR__ . '/../Config/database.php';
require_once __DIR__ . '/../Controller/ProductController.php';

// Vérifie si un ID de produit est passé en paramètre
if (isset($_GET['product_id'])) {
    // Récupérer l'ID du produit depuis l'URL
    $product_id = $_GET['product_id'];

    // Appele la fonction pour supprimer le produit
    ProductController::deleteProduct($product_id);

    // Redirige vers la page d'accueil ou une autre page appropriée après la suppression
    header('Location: ../public/index.php?page=accueil');
    exit();

} else {
    echo "Erreur : ID du produit non spécifié.";
}
?>
