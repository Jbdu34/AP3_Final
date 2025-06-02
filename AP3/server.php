<?php  

function connect_bd($systeme_solaire)
{
     $nomServeur='localhost';
     $login='root';         
     $mdp='';             
     try
    {
        // Connexion à la BD et définition du jeu de caractères UTF-8
        $cnx = new PDO("mysql:host=localhost;dbname=$systeme_solaire", $login, $mdp);

        // PDO génére une erreur fatale si un problème survient.
        $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Jeu de caractères 
        $cnx -> exec("SET CHARACTER SET utf8");

        // echo "connecté !";
        return $cnx;
    }
    catch(PDOException $e)
    {
        print"Erreur !:" .$e->getMessage() ."<br/>";
        die();
        return 0;
    }

}
 // Fonction de deconnexion de la BD
 function deconnect_bd($systeme_solaire)
 {
    $systeme_solaire = null;
 } 
 ?> 
 