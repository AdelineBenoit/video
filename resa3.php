
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<tr>
                <th>Miniatures</th>
                <th>Titre</th>
                <th>Année</th>
                <th>Réalisateur</th>
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
$film = "SELECT * FROM film WHERE id_film='$idmovies'";
// var_dump($idmovies);

//connexion a la base de donnée

try {
    $connexion = new PDO('mysql:host=' . $server . ';dbname=' . $bdd, $user, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo 'connecté à la base de données'.'<br>';
    $resultat = $connexion->query($film);
    $datas = $resultat->fetchAll();
    // var_dump($datas);
    $connexion = null; 

    //tableau

foreach ($datas as $el){
    echo "<tr><td>Film : " . $el['ID_FILM']."'<img src='/FilmMiniatures/'" . $el[5] . "</td>";
    echo "<tr><td>Titre : " . $el[3] . "</td>";
    echo "<td> Année : " .$el[4] . "</td>";


// echo " Je suis sur resa.3";
}
}

//Si erreur

catch (PDOException $error) {
    echo 'n° ' . $error->getCode() . '<br/>';
    die('Erreur : ' . $error->getMessage() . '<br/>');
}

?>

</body>
</html>