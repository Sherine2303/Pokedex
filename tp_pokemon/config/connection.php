<?php 
// Connection au serveur
    try {
        $dns = 'mysql:host=localhost;dbname=pokedex-1';
        $utilisateur ='root';
        $motDePasse = '';
        $connection = new PDO( $dns, $utilisateur, $motDePasse );
        }
        catch ( Exception $e ) {
        echo "Connection à MySQL impossible : ", $e->getMessage();
    }
    // DNS où le port est spécifié
    $dns = 'mysql:host=localhost;dbname=pokedex-1;port=3606';
?>