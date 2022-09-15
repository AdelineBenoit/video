
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Voici le film que vous avez sélectionnez : </h1>

<table>
    
<tr>
                <th>Miniatures</th>
                <th>Titre</th>
                <th>Année</th>
                <th>Réalisateur</th>
                <th>Résumé</th>
            </tr>
<?php

include("VideoClub.php");

$server = "localhost";
$user = "root";
$password = "root";
$bdd = "video";

// $requete =  "SELECT * FROM film join typefilm on film.CODE_TYPE_FILM = typefilm.CODE_TYPE_FILM WHERE typefilm.CODE_TYPE_FILM = '" . $_POST['type'] . "'";



// $film = "SELECT * FROM film WHERE id_film ='" . $_POST['type'] . "'";

$idmovies =$_GET["id_film"];
$film = "SELECT * FROM film WHERE id_film='".$idmovies."'";
// $adherent = "SELECT * FROM adherent WHERE NUM_ADHERENT = '" . $_POST['type'] . "'";
// $numad =  $_post["NUM_ADHERENT"];
// $adherent = "SELECT * FROM adherent WHERE NUM_ADHERENT ='".$numad."'";
$sql = "SELECT * FROM adherent WHERE NUM_ADHERENT;";
// var_dump($idmovies);

//connexion a la base de donnée

try {
    $connexion = new PDO('mysql:host=' . $server . ';dbname=' . $bdd, $user, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo 'connecté à la base de données'.'<br>';
    $resultat = $connexion->query($film);
    $datas = $resultat->fetchAll();
    $resultat2 = $connexion->query($sql);
    $datas2 = $resultat2->fetchAll();

      $connexion = null; 

    //tableau
var_dump($datas2);
foreach ($datas as $el){
    echo "<tr><td>Film : " . $el['ID_FILM']."'<img src='/FilmMiniatures/'" . $el[5] . "</td>";
    echo "<tr><td>Titre : " . $el[3] . "</td>";
    echo "<td> Année : " . $el[4] . "</td>";
    echo "<td> Résumé : " . $el[6] . "<td></tr>";

// echo " Je suis sur resa.3";}
}
}

//Si erreur

catch (PDOException $error) {
    echo 'n° ' . $error->getCode() . '<br/>';
    die('Erreur : ' . $error->getMessage() . '<br/>');
}

?>

</table>

<p>Nom</p>
<input type="text">
<br/>
<p>N° adhérant</p>
<input type="text">
<br/>
<button id="reserver" type="bouton"><a href="resa4.php">Réserver</a></button>
<button id="annuler" type="bouton">Annuler</button>

</body>
</html>