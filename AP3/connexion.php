<?php
require_once ('fonction.php');

// Établissement de la connexion
$cnx = connect_bd('adherent');

// Vérifie si la connexion a échoué
if (!$cnx) {
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
}

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les données du formulaire
    $adressemail = $_POST['adressemail'];
    $mdp = $_POST['mdp'];

    if ($adressemail != "" && $mdp != "") {
        // Requête SQL pour vérifier les informations d'identification
        $requete = "SELECT * FROM adherent WHERE adressemail='$adressemail'";
        $resultat = $cnx->query($requete);
        //Vérifie si l'utilisateur existe dans la base de données
        if ($resultat->fetch()) {
            // Redirige vers la page sécurisée
            header("Location: profiluser.php");
            exit();
        } else {
            // Affiche un message d'erreur
            $message_erreur = "Adresse mail ou mot de passe incorrect.";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connexion.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <title>Connexion page</title>
</head>

<body>
    <header>
        <nav>
            <div class="nav__content">
                <div class="logo"><a href="index.php">Système Solaire</a></div>
                <ul>
                    <li><a href="planete.php">Planète</a></li>
                    <li><a href="equipe.php">Equipe</a></li>
                    <li><a href="plannig.php">Planning</a></li>
                    <li><a href="https://fr.wikipedia.org/wiki/Syst%C3%A8me_solaire" class="lien">Wikipédia</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="main">
        <div class="container">
            <div id="square">
                <div class="front">
                    <h1>Connectez vous</h1>
                    <form action="#" method="post">
                        <input required type="email" name="adressemail" id="adressemail" placeholder="adressemail" />
                        <input required type="password" name="mdp" id="mdp" placeholder="mdp" />
                        <button type="submit">Connection</button>
                    </form>
                </div>
                <div class="right">
                    <h1>Création d'un compte</h1>
                    <form action="register.php" method="post">
                        <input required type="email" name="email" id="email" placeholder="Email" />
                        <input required type="text" name="fullname" id="fullName" placeholder="Full name" />
                        <input required type="password" name="password" id="password" placeholder="Password" />
                        <button type="submit">Créer</button>
                    </form>
                </div>
                <div class="left">
                    <h1>Page Administrateur</h1>
                    <form action="admin_page.php" method="post">
                        <input required type="email" name="email" id="email" placeholder="Email" />
                        <button type="submit">Envoyer</button>
                    </form>
                </div>
            </div>
            <div class="actions">
                <button id="leftSide" type="button">Page Admin</button>
                <button id="frontSide" type="button">Connexion</button>
                <button id="rightSide" type="button">Inscription</button>
            </div>
        </div>
        <script src="connexion.js"></script>
    </div>
</body>

</html>