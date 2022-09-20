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
        <h1>Voici le film que vous avez sélectionnez : resa3 </h1>
    </div>

    <table>

        <tr>
            <th>Titre</th>
            <th>Année</th>
            <th>Résumé</th>
            <th>Réalisateur</th>
            <th>Miniatures</th>
        </tr>
        <?php

        include("en-tete.php");
                /** Les parametres de la bdd sont à mettre dans un fichier à part (comme en-tete.php) **/

        $server = "localhost";
        $user = "root";
        $password = "";
        $bdd = "video";

        // $requete =  "SELECT * FROM film join typefilm on film.CODE_TYPE_FILM = typefilm.CODE_TYPE_FILM WHERE typefilm.CODE_TYPE_FILM = '" . $_POST['type'] . "'";


        // $film = "SELECT * FROM film WHERE id_film ='" . $_POST['type'] . "'";


        $idmovies = $_GET["id_film"];
        $film = "SELECT * FROM film  join star ON id_realis = id_star NATURAL JOIN typefilm WHERE id_film=" . $idmovies;
        $sql = "SELECT * FROM adherent WHERE NUM_ADHERENT;";
        // var_dump($idmovies);

        //connexion a la base de donnée

        try {
            $connexion = new PDO('mysql:host=' . $server . ';dbname=' . $bdd, $user, $password);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo 'connecté à la base de données'.'<br>';
            $resultat = $connexion->query($film);
            $datas = $resultat->fetch();
            $resultat2 = $connexion->query($sql);
            $datas2 = $resultat2->fetchAll();

            $connexion = null;
            // var_dump($datas);


            //tableau
            // var_dump($datas);
            // foreach ($datas as $el) {

                echo "<td class='ligne'>" . $datas[3] . "</td>";
                echo "<td class='ligne'>" . $datas[4] . "</td>";
                echo "<td class='ligne'>" . $datas[6] . "</td>";
                echo "<td class='ligne'>" . $datas[9].' '.$datas[8] . "</td>";
                // echo "<td classe 'ligne'>" . $datas[5] . "</td>";
                                    /** Toujours ajouter le parametre alt sur les images, au cas où l'image ne s'affiche pas. Attention aux balises auto-fermantes. Attention à l'url de l'image, dans le doute vérifier dans l'inspecteur **/
                echo "<td class='ligne' ><a href='resa3.php?id_film=" . $datas['ID_FILM'] . "'><img src='FilmMiniatures/" . $datas[10] . "/" . $datas[5] . "' atl=$datas[5] /></a> </td></tr>";
                // break;

                // echo " Je suis sur resa.3";}
            // }
        }
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

    <form method="get" action="resa4.php">

        <p>Nom</p>
        <input name="nom" type="text">
        <br />
        <p>N° adhérant</p>
        <input name="numero" type="text">
        <br />
        <input type="text" hidden name="id_film" value="<?= $_GET['id_film']?>">
        <button id="reserver" type="submit">Réserver</button>
        <button id="annuler" type="bouton">Annuler</button>
    </form>

</body>

</html>