
<?php
// listAdherent.php
// -------------------
require_once 'fonction.php';
$cnx = connect_bd();

// Ajout
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['inscription'])) {
    $Nom         = filter_input(INPUT_POST, 'Nom',         FILTER_SANITIZE_SPECIAL_CHARS);
    $Prenom      = filter_input(INPUT_POST, 'Prenom',      FILTER_SANITIZE_SPECIAL_CHARS);
    $adressemail = filter_input(INPUT_POST, 'adressemail', FILTER_SANITIZE_EMAIL);
    $identifiant = filter_input(INPUT_POST, 'identifiant_',FILTER_SANITIZE_SPECIAL_CHARS);
    $mdp_raw     = $_POST['mdp'] ?? '';
    $mdp_hash    = hash('sha512', $mdp_raw);

    $sql = "INSERT INTO adherent (Nom, Prenom, adressemail, identifiant_, mdp)
            VALUES (:Nom, :Prenom, :email, :ident, :hash)";
    $stmt = $cnx->prepare($sql);
    $stmt->execute([
        ':Nom'    => $Nom,
        ':Prenom' => $Prenom,
        ':email'  => $adressemail,
        ':ident'  => $identifiant,
        ':hash'   => $mdp_hash
    ]);
    header('Location: '.$_SERVER['PHP_SELF']); exit;
}

// Suppression
if (isset($_POST['delete'], $_POST['cle'])) {
    $id = (int) $_POST['cle'];
    $cnx->prepare("DELETE FROM participe WHERE idAdherent=:id")->execute([':id'=>$id]);
    $cnx->prepare("DELETE FROM adherent WHERE idAdherent=:id")->execute([':id'=>$id]);
    header('Location: '.$_SERVER['PHP_SELF']); exit;
}

// Modification
if (isset($_POST['update'], $_POST['cle'])) {
    $id          = (int) $_POST['cle'];
    $Nom         = filter_input(INPUT_POST, 'Nom',         FILTER_SANITIZE_SPECIAL_CHARS);
    $Prenom      = filter_input(INPUT_POST, 'Prenom',      FILTER_SANITIZE_SPECIAL_CHARS);
    $adressemail = filter_input(INPUT_POST, 'adressemail', FILTER_SANITIZE_EMAIL);
    $identifiant = filter_input(INPUT_POST, 'identifiant_',FILTER_SANITIZE_SPECIAL_CHARS);
    $mdp_hash    = hash('sha512', $_POST['mdp'] ?? '');

    $sql = "UPDATE adherent
            SET Nom=:Nom, Prenom=:Prenom, adressemail=:email,
                identifiant_=:ident, mdp=:hash
            WHERE idAdherent=:id";
    $stmt = $cnx->prepare($sql);
    $stmt->execute([
        ':Nom'    => $Nom,
        ':Prenom' => $Prenom,
        ':email'  => $adressemail,
        ':ident'  => $identifiant,
        ':hash'   => $mdp_hash,
        ':id'     => $id
    ]);
    header('Location: '.$_SERVER['PHP_SELF']); exit;
}

// Lecture
$stmt = $cnx->query('SELECT * FROM adherent');
$adherents = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Administration</title></head>
<body>
<h2>Ajouter un adhérent</h2>
<form method="post">
    <input type="text" name="Nom" required placeholder="Nom">
    <input type="text" name="Prenom" required placeholder="Prénom">
    <input type="email" name="adressemail" required placeholder="Email">
    <input type="text" name="identifiant_" required placeholder="Pseudo">
    <input type="password" name="mdp" required placeholder="Mot de passe">
    <button type="submit" name="inscription">Inscription</button>
</form>

<h2>Liste des adhérents</h2>
<p>Nombre total : <?= count($adherents) ?></p>
<table border="1">
    <tr><th>ID</th><th>Nom</th><th>Prénom</th><th>Email</th><th>Pseudo</th><th>Actions</th></tr>
    <?php foreach($adherents as $a): ?>
    <tr>
        <td><?= $a['idAdherent'] ?></td>
        <td><?= htmlspecialchars($a['Nom']) ?></td>
        <td><?= htmlspecialchars($a['Prenom']) ?></td>
        <td><?= htmlspecialchars($a['adressemail']) ?></td>
        <td><?= htmlspecialchars($a['identifiant_']) ?></td>
        <td>
            <form style="display:inline;" method="post">
                <input type="hidden" name="cle" value="<?= $a['idAdherent'] ?>">
                <button name="delete">Supprimer</button>
            </form>
            <form style="display:inline;" method="post">
                <input type="hidden" name="cle" value="<?= $a['idAdherent'] ?>">
                <input type="hidden" name="Nom" value="<?= htmlspecialchars($a['Nom']) ?>">
                <input type="hidden" name="Prenom" value="<?= htmlspecialchars($a['Prenom']) ?>">
                <input type="hidden" name="adressemail" value="<?= htmlspecialchars($a['adressemail']) ?>">
                <input type="hidden" name="identifiant_" value="<?= htmlspecialchars($a['identifiant_']) ?>">
                <button name="update">Modifier</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
