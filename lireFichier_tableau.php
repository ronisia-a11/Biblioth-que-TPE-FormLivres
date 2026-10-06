<?php

$fichier = "data/livres.txt";

if(!file_exists($fichier))
{
    die("Le fichier des livres n'existe pas.");
}

$lignes = file($fichier);

if(count($lignes) == 0)
{
    die("Aucun livre enregistré.");
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Liste des livres</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<h2>LISTE DES LIVRES</h2>

<table class="livres">

<tr>
<th>Code livre</th>
<th>Auteur</th>
<th>Intitulé</th>
<th>Qté</th>
<th>Prix</th>
</tr>

<?php

foreach($lignes as $ligne)
{
    $livre = explode(";", trim($ligne));

    echo "<tr>";

    echo "<td class='gauche'>".$livre[0]."</td>";
    echo "<td class='gauche'>".$livre[1]."</td>";

    echo "<td class='gauche'>
            <a href='#'>".$livre[2]."</a>
          </td>";

    echo "<td class='droite'>".$livre[3]."</td>";
    echo "<td class='droite'>".$livre[4]."</td>";

    echo "</tr>";
}

?>

</table>

<br><br>

<a href="Formlivres.html">Retour au formulaire</a>

</body>
</html>