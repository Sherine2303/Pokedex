<?php
    // On établit la connexion à la Bdd
    require_once('../config/connection.php'); 
    require_once('../common/header.php');
    echo "<h2>Liste des Pokémon</h2>";
    $select = $connection->query("SELECT * FROM pokemon");
    $select->setFetchMode(PDO::FETCH_OBJ);
    while( $enregistrement = $select->fetch() )
    {
        echo '<p><img src="'. $enregistrement->image_pokemon .'">';
        echo '<a href="../pages/detail.php?id='. $enregistrement->id_pokemon .'">';
        echo '<ul><li>'. $enregistrement->id_pokemon. ' ' .$enregistrement->nom_pokemon. '</li></ul>';
        echo '</a></p>';
    }
    require_once('../common/footer.php');
?>