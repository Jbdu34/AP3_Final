<?php
include("fonction.php");

 $cnx = connect_bd('systeme_solaire');

if($cnx){
    $result = $cnx->prepare('INSERT INTO film (titre, anneeSortie, affiche, idGenre)
                            VALUES (:titre, :anneeSortie, :affiche, :idGenre)');
    $titre = filter_input(INPUT_POST, "titre", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $anneeSortie = filter_input(INPUT_POST,"anneeSortie");
    $affiche = filter_input(INPUT_POST, "titre", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $idGenre = filter_input(INPUT_POST,"genre");

    $result->bindParam(':titre',$titre, PDO::PARAM_STR);
    $result->bindParam(':anneeSortie',$anneeSortie, PDO::PARAM_INT);
    $result->bindParam(':affiche', $affiche, PDO::PARAM_STR);
    $result->bindParam(':idGenre',$idGenre, PDO::PARAM_INT);

    $result-> execute();

    echo '<p>'.$result->rowCount().'film a été ajouté dans la table Film</p>';
    echo "<p>Il s'agit du film $titre sorti en $anneeSortie</p>";
    echo '<p>Son identifient est : '.$cnx->lastInsertId().'</p>';
}
else {
    echo"erreur";
}
deconnect_bd('systeme_solaire');
?>