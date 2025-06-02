<form method="post" action="systemeajouter.php">
     <legend>Films</legend>

     <label for="titre">Titre :</label>
     <input type="text" name="titre"/>

       <label for="affiche">Affiche :</label>
       <input type="text" name="affiche"/>

       <label for="anneeSortie"> Année de sortie :</label>
       <input type="text" name="anneeSortie"/>

      <label for="Genre"> Genre :</label>
      <?php
// On établit la connexion
require_once('fonction.php');

// Insertion de données
$cnx = connect_bd('systeme_solaire');
if ($cnx) {
    /*-----------------------------------------------*/
    /* Affichage de la liste déroulante (combo box) des genres */
    /*-----------------------------------------------*/
    // On prépare la requête
    $result = $cnx->prepare('SELECT idGenre, nomGenre FROM Genre;');
    // On execute la requête
    $result->execute();
    // Création du formulaire
    echo '<FORM id="MonForm" method="POST" action="#">';
    // Création de la combo box
    echo "<SELECT name='genre' value='Genre' type='text'>";
    // Si la requête renvoie une ligne
    if ($result->rowCount() > 0) {
        // Boucle d'alimentation des éléments de la combo box
        while ($donnees = $result->fetch()) {
            // La VALUE contient la valeur de l'item sélectionné
            echo "<OPTION value=".$donnees['idGenre'].">".$donnees['nomGenre']."</OPTION>";
        }
    }
    // Fermeture de la liste déroulante
    echo '</SELECT>';

    
    // Bouton de validation
    echo "<input type='submit' value='Choisir'/></p>";
    echo '</FORM>';
} else {
    echo "Aucun enregistrement, désolé";
}
deconnect_bd('systeme_solaire');
?>

<?php
    //Affichage de l'id de la personne sélectionnée
    if (isset($_POST['genre'])){
        $idG= $_POST['genre'];
        echo $idG;
    }
?>  

      <input type="submit" value="envoyer" />
</form>