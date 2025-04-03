<?php
// Inclure la configuration de la base de données et l'en-tête du site
require_once('../config/connection.php');
require_once('../common/header.php');  

// Vérifier si un ID est passé dans l'URL et s'il est valide
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("ID invalide !");
}

$id = $_GET['id']; // sécuriser avec une requête préparée

// Requête SQL pour récupérer les informations du Pokémon basé sur son ID
try {
    // Préparer la requête SQL pour récupérer les informations du Pokémon
    $stmt = $connection->prepare("SELECT nom_pokemon, poids_pokemon, taille_pokemon, description_pokemon 
                                  FROM pokemon 
                                  WHERE id_pokemon = ?");
    
    // Exécuter la requête en passant l'ID comme paramètre dans un tableau
    $stmt->execute([$id]);
    
    // Récupérer le résultat sous forme d'objet
    $pokemon = $stmt->fetch(PDO::FETCH_OBJ);

    // Vérifier si un Pokémon a été trouvé avec cet ID
    if (!$pokemon) {
        die("Pokémon non trouvé !");
    }
} catch (PDOException $e) {
    // Si une erreur SQL se produit, afficher l'erreur
    die("Erreur SQL : " . $e->getMessage());
}

?>

<!-- Affichage des informations du Pokémon -->
<h1><?= $pokemon->nom_pokemon ?></h1>
<p>Taille : <?= $pokemon->taille_pokemon ?></p>
<p>Poids : <?= $pokemon->poids_pokemon ?></p>
<p>Description : <?= $pokemon->description_pokemon ?></p>

<?php 
// Inclure le pied de page
require_once('../common/footer.php'); 
?>