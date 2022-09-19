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
    <h1>créer</h1>

    <?php
    include("en-tete.php");

    $server = "localhost";
    $user = "root";
    $password = "root";
    $bdd = "video";

    $film="";
    $film = $_GET["titre_film"];
    $type="";
    $type= $_GET["type"];
    $annee="";
    $annee = $_GET["annee"];
    $sql ="INSERT INTO film (CODE_TYPE_FILM,TITRE_FILM,ANNEE_FILM) VALUES ($type, $film,$annee)";
    // INSERT INTO table_name (column1, column2, column3, ...) VALUES (value1, value2, value3, ...);
    // var_dump($film);
    // var_dump($type);
    // var_dump($annee);
echo "Vous venez d'ajouter
 : " ." ".$film ." ";

    try {
        $connexion = new PDO('mysql:host=' . $server . ';dbname=' . $bdd, $user, $password);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'connecté à la base de données'.'<br>';
        $resultat = $connexion->query($sql);
        $datas = $resultat->fetchAll();
        // $resultat2 = $connexion->query($real);
        // $datas2 = $resultat2->fetchAll();
        // var_dump($datas);
        $connexion = null;
        // var_dump($datas);

        if (isset($_get["titre_film"]) && ($_get["titre_film"] != ""))
{
         $film= $_get["titre_film"];
        
} 


    }
        catch (PDOException $error) {
            echo 'n° ' . $error->getCode() . '<br/>';
            die('Erreur : ' . $error->getMessage() . '<br/>');
        }

    ?>
    
</body>
</html>