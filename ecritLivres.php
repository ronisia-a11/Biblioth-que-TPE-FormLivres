<?php
// Récupération des données
$codeLivre = trim($_REQUEST['codeLivre']);
$auteurLivre = trim($_REQUEST['AuteurLivre']);
$intitLivre = trim($_REQUEST['intitLivre']);
$qteLivre = trim($_REQUEST['QteLivre']);
$prixLivre = trim($_REQUEST['PrixLivre']);

// Vérification que tous les champs sont remplis
if ($codeLivre == "" || $auteurLivre == "" || $intitLivre == "" || $qteLivre == "" || $prixLivre == "") {
    echo "⚠️ Tous les champs doivent être renseignés.<br/>";
    echo "<a href='formLivres.html'>Retour au formulaire</a>";
    exit;
}

// Préparation de la ligne à écrire
$ligne = $codeLivre . ";" . $auteurLivre . ";" . $intitLivre . ";" . $qteLivre . ";" . $prixLivre . "\n";

// Écriture dans le fichier /data/livres.txt
$chemin = __DIR__ . "/data/livres.txt";
file_put_contents($chemin, $ligne, FILE_APPEND);

// Retour au formulaire
header("Location: formLivres.html");
exit;
?>
