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
    <h1>creer</h1>

    <?php
    include("en-tete.php");

    $server = "localhost";
    $user = "root";
    $password = "root";
    $bdd = "video";

    $film = $_POST["TITRE_FILM"];
    var_dump($film);


    try {
        $connexion = new PDO('mysql:host=' . $server . ';dbname=' . $bdd, $user, $password);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'connecté à la base de données'.'<br>';
        $resultat = $connexion->query($film);
        $datas = $resultat->fetchAll();
        // $resultat2 = $connexion->query($real);
        // $datas2 = $resultat2->fetchAll();
        // var_dump($datas);
        $connexion = null;
        // var_dump($datas);


    }
        catch (PDOException $error) {
            echo 'n° ' . $error->getCode() . '<br/>';
            die('Erreur : ' . $error->getMessage() . '<br/>');
        }



    ?>
    
</body>
</html>