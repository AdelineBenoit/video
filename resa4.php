<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Réservation de film</h1>
    <p>resa4</p>
    <?php

include("VideoClub.php");

$server = "localhost";
$user = "root";
$password = "root";
$bdd = "video";

$adh = $_GET["nom"];
$adherent = "SELECT adherent.NUM_ADHERENT , adherent.NOM_ADHERENT FROM adherent";
var_dump($_GET);

try {
    $connexion = new PDO('mysql:host=' . $server . ';dbname=' . $bdd, $user, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo 'connecté à la base de données'.'<br>';
    $resultat = $connexion->query($adherent);
    $datas = $resultat->fetchAll();
    // var_dump($datas);
    $resultat = $connexion->query($adherent);
    $datas = $resultat->fetchAll();
    $connexion = null; 

    var_dump($adherent);
    


}


    catch (PDOException $error) {
        echo 'n° ' . $error->getCode() . '<br/>';
        die('Erreur : ' . $error->getMessage() . '<br/>');
    }
    
    ?>
</body>
</html>