<?php
include("VideoClub.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="display: inline-block; color: blue;">
        <h1>Liste des films :</h1>
        <h1>Sélectionnez le film que vous désirez réserver :</h1>
        <table>
            <tr>
                <th>Miniatures</th>
                <th>Titre</th>
                <th>Année</th>
                <th>Réalisateur</th>
            </tr>
            
            <?php

            $server = "localhost";
            $user = "root";
            $password = "root";
            $bdd = "video";


            // if($_POST["type"] == "action" ){
            // var_dump($_POST);
            $requete =  "SELECT * FROM film join typefilm on film.CODE_TYPE_FILM = typefilm.CODE_TYPE_FILM WHERE typefilm.CODE_TYPE_FILM = '" . $_POST['type'] . "'";
            //    var_dump ($requete);
            // $requete2 = "SELECT * FROM star =".$_post['type'];

            // }else{
            //$requete = "SELECT *  FROM film ORDER BY ".$_POST["genre"];
            // }

            try {
                $connexion = new PDO('mysql:host=' . $server . ';dbname=' . $bdd, $user, $password);
                $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // echo 'connecté à la base de données'.'<br>';
                $resultat = $connexion->query($requete);
                $datas = $resultat->fetchAll();
                // var_dump($datas);
                $connexion = null; 
              

                // echo "connecte";
                //  var_dump($datas);

                //boucle tableau

                foreach ($datas as $el) {
                        
                    echo "<tr><td><img src='/FilmMiniatures/" . $el[8] . "/" . $el[5] . "'></td>";
                    echo "<td>Titre : " . $el[3] . " </td>";
                    echo "<td>Année : " . $el[4] . " </td>";
                    // echo '<td><img src= strtok (/FilmAffiche/)'.'"></td></tr>';
                    // echo "<img src='/FilmAffiches/>";
                    // echo "réalisateur : ".$el[]." ";
                    echo "<a href=resa3.php>resa3</a>";
                }
                // foreach ($datas as $ob) {
                //     echo "Nom réalisateur : " . $ob[1] . "/" . $ob[3] . "</br>";
                // }

            } catch (PDOException $error) {
                echo 'n° ' . $error->getCode() . '<br/>';
                die('Erreur : ' . $error->getMessage() . '<br/>');
            }


            ?>
        

        </table>
        <input type="submit" value="Autre catégorie de film">
        <input type="submit" value=" Retour accueil">
    </div>
</body>

</html>