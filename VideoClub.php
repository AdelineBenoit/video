<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="resa.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="VideoClub.js"></script>
    <title>Document</title>
</head>

<body>

    <header>
        <div> <img src="./DesignVideoClub/VCLogo.gif" alt="Logo"></div>
        <div class=titre>
            <h1> Vidéo-club</h1>
            <h3>... et si on faisait une toile, à la maison ?</h3>
        </div>
        <div class="date">

            <?php
            echo "Nous sommes le :" . date("d.m.y");
            echo '<br>';
            date_default_timezone_set("europe/paris");
            echo " Il est :" . date("H:i:s");
            ?>
            <br />

            <a href="#" id="admin">Admin</a>
            <div id="formulaire">
                <form action="Admin.php" method="post">
                    <p>Login</p>
                    <input name="LOGIN_ADMIN" type="text">
                    <p>Pass</p>
                    <input name="PASS_ADMIN" type="text">
                    <button id="retour" type="bouton">Retour</button>
                <button type="submit">Go !</button>
                </form>
                

                <?php

                include("en-tete.php");
                $ad = "SELECT * FROM admin";


                $server = "localhost";
                $user = "root";
                $password = "root";
                $bdd = "video";

                try {
                    $connexion = new PDO('mysql:host=' . $server . ';dbname=' . $bdd, $user, $password);
                    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    // echo 'connecté à la base de données'.'<br>';
                    $resultat = $connexion->query($ad);
                    $datas = $resultat->fetchAll();
                    // var_dump($datas);
                    $resultat = $connexion->query($ad);
                    $datas = $resultat->fetchAll();
                    $connexion = null;

             


                    //     echo "Admin" . $el[0] . "</br>";
                    //     echo "Admin" . $el[1] . "</br>";
                    // }
                } catch (PDOException $error) {
                    echo 'n° ' . $error->getCode() . '<br/>';
                    die('Erreur : ' . $error->getMessage() . '<br/>');
                }
                ?>
            </div>
        </div>


    </header>
    <!-- <p>Je suis sur accueil</p> -->
    <!-- <h1>Bienvenue sur le site du Vidéo-Club</h1> -->

    <footer>

    </footer>
</body>

</html>