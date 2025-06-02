<?php
/**
 * Connexion à la base de données via PDO (SQL Server)
 * @return PDO
 */
function connect_bd() {
    $servername = "LAPTOP-0I7KRKGN";
    $username   = "sa";
    $password   = "1234";
    $dbname     = "systeme_solaire";

    try {
        $cnx = new PDO("sqlsrv:Server=$servername;Database=$dbname", $username, $password);
        $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $cnx;
    } catch (PDOException $e) {
        die("Erreur de connexion à la BD : " . $e->getMessage());
    }
}


 // Fonction de deconnexion de la BD
 function deconnect_bd($nomBd)
 {
    $dbname = null;
 } 

  //Fonction stat avec paramètre
  function NbAdherent($unTarif)
  {
     $cnx=connect_bd('nomBd');
 // preparation de la requete
     $req=$cnx->prepare("Select Count(*) as 'NbAdherent' From adherent,tarif Where adherent.idTarif = tarif.idTarif And TypeTarif = :unTarif");
 
     //Definition paramètre
     $req-> bindParam(':unTarif',$unTarif,PDO::PARAM_STR);
     //Execution de la requête 
     $req -> execute();
     //Récupération des données sous la forme d'un tableau associatif
     $ligne = $req-> fetch ( PDO :: FETCH_ASSOC);
     return $ligne ['NbAdherent'];
  }

  
 ?> 