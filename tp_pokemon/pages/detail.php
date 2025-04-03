<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="../public/main.css" />
    </head>
</html>
<?php 
    // Connection à la base de donnée
    require_once('../config/connection.php');
    // Affiche le header de la page php header.php
    require_once('../common/header.php');  

    // Vérifier si un ID existe dans l'url
    if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
        die("ID invalide !");
    }

    $id = $_GET['id']; 
    try {
        //Requête SQL pour afin qu'il récupère les informations du Pokémon
        $stmt = $connection->prepare("SELECT nom_pokemon, poids_pokemon, taille_pokemon, description_pokemon, image_pokemon 
                                    FROM pokemon 
                                    WHERE id_pokemon = ?");
        //Exécutation de la requête sql grace à l'id du pokemon
        $stmt->execute([$id]);
        
        // Récupère le résultat en PDO
        $pokemon = $stmt->fetch(PDO::FETCH_OBJ);

        //condition pour savoir si le pokemon existe ou pas
        if (!$pokemon) {
            die("Pokémon non trouvé !");
        }
    } catch (PDOException $e) {
        // Erreur sql
        die("Erreur SQL : " . $e->getMessage());
    }

?>

<!-- Information du détail du pokémon -->

<h1><?= $pokemon->nom_pokemon ?></h1>
<p><img class="taille_img_detail" src="<?= $pokemon->image_pokemon ?>"</p>
<p>Taille : <?= $pokemon->taille_pokemon ?></p>
<p>Poids : <?= $pokemon->poids_pokemon ?></p>
<p>Description : <?= $pokemon->description_pokemon ?></p>


<?php 
// Affiche le footer de la page php footer.php
require_once('../common/footer.php'); 
?>
