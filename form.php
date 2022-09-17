<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="resa.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body style=" background: ivoire;">


    <h1 class="titre">Saisie d'un nouveau film</h1>
    <?php
    include("en-tete.php");
    ?>

    <div>

        <form action="creer.php" method="post">
            <p>Identifiant :</p>
            <input type="text" name="identifiant"> </br>
            <p>Titre :</p>
            <input type="text" name="TITRE_FILM"> </br>

            <!-- <input type="select"> -->
            <libellé>Type de film</libellé> </br>
            <select>
            <option name="ANI">Animation</option>
            <option name="HOR">Horreur</option>
            <option name="COM">Comédie</option>
            <option name="ACT">Action</option>
            <option name="POL">Policier</option>
            <option name="SCF">Science-Fiction</option>
            </select>

            <p>Réalisateur :</p>
            <input type="select" name="realisateur"> </br>
            <p>Année de sortie :</p>
            <input type="text" name="annee"> </br>
            <p>Affiche :</p>
            <input type="text" name="affiche"> </br>
            <p>Résumé :</p>
            <input type="text" name="resume"> </br>
            <!-- <button id="reserver" type="submit">Réserver</button> -->

            <button type="submit" id="Valider">Valider</button>
            <button>Recommencer</button>
        </form>
    </div>
</body>

</html>