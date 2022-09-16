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
    <?php
    $serveur ="localhost";
    $user = "root";
    $password= "root";
    $bdd= "video";

      try {
        $cnx = new PDO('mysql:host='.$serveur.';dbname='.$bdd, $user, $password);
        $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "connexion réussie";
        $reponse= $cnx->query("select LIB_TYPE_FILM from typeFilm");
        $donnees =$reponse->fetchAll();
      }

        catch (PDOException $error) {
            echo 'N° : '.$error->getCode().'<br />';
            die ('Erreur : '.$error->getMessage().'<br />');
        }
    

    ?>
<div style="text-align: center;">
        <h1 style="color: blue;">Sélectionnez le type de films que vous recherchez :</h1>
        <form action="resa2.php" method="post">
            <select name="type" id="typeselect">
                <option value="genre">Sélectionnez le type recherché</option>
                <option value="ACT"><?php echo $donnees[0][0] ?></option>
                <option value="ANI"><?php echo $donnees[1][0] ?></option>
                <option value="COM"><?php echo $donnees[2][0] ?></option>
                <option value="HOR"><?php echo $donnees[3][0] ?></option>
                <option value="POL"><?php echo $donnees[4][0] ?></option>
                <option value="SCF"><?php echo $donnees[5][0] ?></option>
            </select>
            <input type="submit" value="Valider">
        </form>
    </div>

</body>
</html>