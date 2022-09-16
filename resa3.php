
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="resa.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Voici le film que vous avez sélectionnez : resa3 </h1>

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
$film = "SELECT * FROM film  join star WHERE id_film='".$idmovies."'";
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
// var_dump($datas2);
foreach ($datas as $el){
    
    echo "<tr><td class='ligne'>" . $el['ID_FILM']."'<img src='/FilmMiniatures/'" . $el[5] . "</td>"; 
    echo "<td class='ligne'>" . $el[3] . "</td>";
    echo "<td class='ligne'>" . $el[4] . "</td>";
    echo "<td class='ligne'>" . $el[6] . "<td>";
    echo"<td class='ligne'>" . $el[8] . "<td></tr>";

// echo " Je suis sur resa.3";}
}}
// foreach ($datas3 as $el3) {
//     // if($el[2] === $el2[0])
//     echo "<tr><td class='ligne'>Réalisateur : " . $el3[1];
// }}

//Si erreur

catch (PDOException $error) {
    echo 'n° ' . $error->getCode() . '<br/>';
    die('Erreur : ' . $error->getMessage() . '<br/>');
}

?>

</table>

<form method="get"action="resa4.php">

<p>Nom</p>
<input name="nom" type="text">
<br/>
<p>N° adhérant</p>
<input name="numero" type="text">
<br/>
<button id="reserver" type="submit">Réserver</button>
<button id="annuler" type="bouton">Annuler</button>
</form>

</body>
</html>



<!-- 
$sql = "select * from film\n"

    . "join star;"; -->