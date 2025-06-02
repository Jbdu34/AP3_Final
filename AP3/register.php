<?php

require_once 'fonction.php';
$cnx = connect_bd();

$adressemail = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$identifiant = filter_input(INPUT_POST, "fullname", FILTER_SANITIZE_SPECIAL_CHARS);
$mdp= password_hash($_POST["password"], PASSWORD_DEFAULT);


try {
$pdo = new PDO('mysql:host=localhost;dbname=systeme_solaire', 'root', '');
}
catch (Exception $e) {
die("L'accès à la base de donnée est impossible.");
}
if (empty($adressemail) or empty($mdp) or empty(($identifiant))) {
echo "veuillez saisir un login et un mot de passe";
}
else {
$ins = $pdo->prepare("INSERT INTO adherent (adressemail, identifiant_, mdp) VALUES(?, ?, ?)");
$ins->execute(array($adressemail, $identifiant, $mdp));
header("Location: index.php");
}
?>