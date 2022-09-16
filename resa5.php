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
    <p>resa5</p>
    <?php
include("en-tete.php");

$server = "localhost";
$user = "root";
$password = "root";
$bdd = "video";


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
}

    catch (PDOException $error) {
        echo 'n° ' . $error->getCode() . '<br/>';
        die('Erreur : ' . $error->getMessage() . '<br/>');
    }

?>

    
</body>
</html>