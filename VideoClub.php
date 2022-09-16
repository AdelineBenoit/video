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

            <?PHP
            date_default_timezone_set("Europe/Paris");
            $dateDuJour = getdate();

            $mois = "";
            $jours = "";

            if ($dateDuJour["mon"] = 9) {
                $mois = "Septembre";
            } else {
                $mois = $dateDuJour["mon"];
            }
            if ($dateDuJour["mday"] < 10) {
                $jours = "0" . $dateDuJour["mday"];
            } else {
                $jours = $dateDuJour["mday"];
            }
            echo $jours . " " . $mois . " " . $dateDuJour["year"] . "<br>";

            ?>
            <br />

            <a href="#" id="admin">Admin</a>
            <div id="formulaire">
                <form action="" method="$POST">
                    <p>Login</p>
                    <input name="login" type="text">
                    <p>Pass</p>
                    <input name="pass" type="text">
                </form>
                <button id="retour" type="bouton">Retour</button>
                <button type="bouton"><a href="Admin.php">Go !</a></button>

                <?php

                include("Menu.html");
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

                    var_dump($datas);



                    foreach ($datas as $el) {
                        if($datas === $el){
                            echo "incrit";
                        }else{
                            echo"pas inscrit";
                        }
                        
                    }

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