<?php
include("en-tete.php");

?>
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
        <h1>Liste des films :</h1>
        <h1>Sélectionnez le film que vous pouvez réserver :</h1>
    </div>
    <div>
        <table>
            <tr>
                <th class="ligne">Titre</th>
                <th class="ligne">Année</th>
                <th class="ligne">Réalisateur</th>
                <th class="ligne">Affiche</th>
            </tr>

            <?php

            $server = "localhost";
            $user = "root";
            $password = "root";
            $bdd = "video";


            // if($_POST["type"] == "action" ){
            // var_dump($_POST);
            $requete =  "SELECT * FROM film join typefilm on film.CODE_TYPE_FILM = typefilm.CODE_TYPE_FILM join star on star.ID_STAR = film.ID_realis
            WHERE typefilm.CODE_TYPE_FILM = '" . $_POST['type'] . "'";
            // $real = "select star.ID_STAR, star.NOM_STAR, film.ID_REALIS FROM star join film on star.ID_STAR = film.ID_REALIS";
            //    var_dump ($requete);
            // $requete2 = "SELECT * FROM star =".$_post['type'];

            // }else{
            //$requete = "SELECT *  FROM film ORDER BY ".$_POST["genre"];
            // }

            //connexion à la base de donnée

            try {
                $connexion = new PDO('mysql:host=' . $server . ';dbname=' . $bdd, $user, $password);
                $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // echo 'connecté à la base de données'.'<br>';
                $resultat = $connexion->query($requete);
                $datas = $resultat->fetchAll();
                // $resultat2 = $connexion->query($real);
                // $datas2 = $resultat2->fetchAll();
                // var_dump($datas);
                $connexion = null;


                // echo "connecte";
                //  var_dump($datas);

                //boucle tableau recupere l'image, le titre et l'année

                foreach ($datas as $el) {
                    // var_dump($el);
                    echo "<tr><td class='ligne'>Titre : " . $el[3] . " </td>";
                    echo "<td class='ligne'>Année : " . $el[4] . " </td>";
                    // foreach ($datas2 as $el2) {
                    //     if($el[2] === $el2[0])
                    //     echo "<tr><td class='ligne'>Réalisateur : " . $el2[1];
                    //     break;
                    // }
                    echo "<td class='ligne'>" . $el['NOM_STAR'] . "</td>";

                    echo "<td class='ligne' ><a href='resa3.php?id_film=" . $el['ID_FILM'] . "'><img src='/FilmMiniatures/" . $el[8] . "/" . $el[5] . "'></a> </td>";

                    // echo '<td><img src= strtok (/FilmAffiche/)'.'"></td></tr>';
                    // echo "<img src='/FilmAffiches/>";
                    // echo "réalisateur : ".$el[]." ";
                    // echo "<a href=resa3.php>resa3</a>";

                }
            } catch (PDOException $error) {
                echo 'n° ' . $error->getCode() . '<br/>';
                die('Erreur : ' . $error->getMessage() . '<br/>');
            }


            ?>


        </table>
        <button type="bouton"><a href="VCIresa.php">autre type de film</a></button>

        <button type="bouton"><a href="VideoClub.php">retour accueil</a></button>

    </div>
</body>

</html>