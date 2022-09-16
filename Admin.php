<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="resa.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body id="admin">

    <div class="titre">
        <h1>Vidéo-Club</h1> 
        <h3>Bienvenue sur le site Administration du vidéo-Club !</h3>
    
    </div>
    <?php

    $server = "localhost";
    $user = "root";
    $password = "root";
    $bdd = "video";

    $ad = "SELECT * FROM admin" ;

    try {
        $connexion = new PDO('mysql:host=' . $server . ';dbname=' . $bdd, $user, $password);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'connecté à la base de données'.'<br>';
        $resultat = $connexion->query($ad);
        $datas = $resultat->fetchAll();
        // var_dump($datas);
      
        $connexion = null;

        include("en-tete.php");
        include("menuAdmin.html");

        // var_dump($_POST);
        // var_dump($datas);
        // var_dump($_POST['login']);
        // $_POST["LOGIN_ADMIN"];
        // $_POST["PASS_ADMIN"];
        // $log = $_POST["LOGIN_ADMIN"];
        // $pass = $_POST["PASS_ADMIN"];
        // var_dump($pass);
        // var_dump($log);


        $bool = false;
        foreach ($datas as $el) {
            if ($el[1] === $_POST["LOGIN_ADMIN"] && $el[2] === $_POST["PASS_ADMIN"]) {
                $bool = true;
                break;
            }
        }
        if($bool){
            echo "Bonjour " . $el[1];
            // echo "N°" . $el[0] . "</br>";
        }else{
            echo "Login ou mot de passe invalide(s)";
        }



        //     echo "Admin" . $el[0] . "</br>";
        //     echo "Admin" . $el[1] . "</br>";
        // }
    } catch (PDOException $error) {
        echo 'n° ' . $error->getCode() . '<br/>';
        die('Erreur : ' . $error->getMessage() . '<br/>');
    }
    ?>


    
</body>

</html>