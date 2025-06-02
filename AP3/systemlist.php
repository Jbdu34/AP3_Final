<?php
// On établit la connexion
include('fonction.php');

//Insertion de donnees
$cnx=connect_bd('systeme_solaire');
if($cnx) {
// On prépare la requête (une seule fois)
$result = $cnx->prepare('SELECT * FROM film;');

// On exécute la requête
$result->execute();
//echo $result->rowCount();

//var_dump($result);

// Si la requête renvoie au moins 1 ligne
if($result->rowCount()>0)
{
    echo "<table border=\"1\">";
    //en tête du tableau
    echo "<tr>";
    echo "<th>Visa</th>";
    echo "<th>Titre</th>";
    echo "<th>Annee sortie</th>";
    echo "<th>Lien affiche</th>";
    echo "<th>Affiche</th>";
    echo "<th>Genre</th>";
    echo "</tr>";
    // On parcours les résultats
    while ($donnees = $result->fetch())
    {
        echo "<tr>";
            echo "<td>".$donnees['idFilm']."</td>";
            echo "<td>".$donnees['titre']."</td>";
            echo "<td>".$donnees['anneeSortie']."</td>";
            echo "<td>".$donnees['affiche']."</td>";
            echo "<td><img src='images/".$donnees['affiche']."' width='300' height='400'/></td>";
            echo "<td>".$donnees['idGenre']."</td>";
        echo "</tr>";
    }
    echo "</table>";


    }
    else {

    echo "Aucun enregistrement, désolé";
    }
    deconnect_bd('systeme_solaire');
}
?>