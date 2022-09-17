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
    <div class="titre">
        <h1>Réservation de film </h1>
    </div>
    <p>resa4</p>
    <?php

    include("en-tete.php");

    $server = "localhost";
    $user = "root";
    $password = "root";
    $bdd = "video";
    // var_dump($_GET);
    $adh = $_GET["nom"];
    $adherent = "SELECT adherent.NUM_ADHERENT , adherent.NOM_ADHERENT FROM adherent";
    $film = "SELECT * FROM film";
    // var_dump($film);
    $movies = $_GET["id_film"];
    // var_dump($_GET);

    try {
        $connexion = new PDO('mysql:host=' . $server . ';dbname=' . $bdd, $user, $password);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'connecté à la base de données'.'<br>';
        $resultat = $connexion->query($adherent);
        $datas = $resultat->fetchAll();
        // var_dump($datas);
        $resultat = $connexion->query($adherent);
        $datas = $resultat->fetchAll();
        $resultat1 = $connexion->query($film);
        $datas1 = $resultat1->fetchAll();
        $connexion = null;
        // var_dump($datas1);

        // var_dump($adherent);
        $bool = false;
        foreach ($datas as $el) {
            if ($el[1] === $adh && $el[0] === $_GET['numero']) {
                echo "Réussi " . $el[1];
                // echo "numero" . $el[0] . "</br>";
                $bool = true;
                break;
            }
        }
        if ($bool) {
            echo "<p class='adherent'>Bonjour </p>" . $el[1] ;
        } else {
            echo ' <p class="refus"> Veuillez vous inscrire.</p>';
        }

            
                // echo implode ("Vous avez reserver : ".$datas1[2]);
            
            

    } catch (PDOException $error) {
        echo 'n° ' . $error->getCode() . '<br/>';
        die('Erreur : ' . $error->getMessage() . '<br/>');
    }

    ?>

</body>

</html>