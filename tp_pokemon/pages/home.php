<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="../public/main.css" />
    </head>
</html>
<?php
    // On établit la connexion à la Bdd
    require_once('../config/connection.php'); 
    require_once('../common/header.php');
    echo "<h2>Liste des Pokémon</h2>";
    $select = $connection->query("SELECT * FROM pokemon");
    $select->setFetchMode(PDO::FETCH_OBJ);
    //Tant que le pokémon existe il affiche l'image, l'ID et le nom
    while( $enregistrement = $select->fetch() )
    {
        echo '<p><img class="taille_img_home" src="'. $enregistrement->image_pokemon .'">';
        echo '<a href="../pages/detail.php?id='. $enregistrement->id_pokemon .'">';
        echo '<ul><li>'. $enregistrement->id_pokemon. ' ' .$enregistrement->nom_pokemon. '</li></ul>';
        echo '</a></p>';
    }
?>
    <a class= "taille_police" href="../pages/formulaire.php">Formulaire pokemon</a>
<?php
    require_once('../common/footer.php');
?>
