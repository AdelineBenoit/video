<?php

include("VideoClub.php");

$server = "localhost";
$user = "root";
$password = "root";
$bdd = "video";

// $requete =  "SELECT * FROM film join typefilm on film.CODE_TYPE_FILM = typefilm.CODE_TYPE_FILM WHERE typefilm.CODE_TYPE_FILM = '" . $_POST['type'] . "'";



// $film = "SELECT * FROM film WHERE id_film ='" . $_POST['type'] . "'";

$idmovies =$_GET["id_film"];
$film = "SELECT * FROM film WHERE id_film='$idmovies'";
var_dump($idmovies);


try {
    $connexion = new PDO('mysql:host=' . $server . ';dbname=' . $bdd, $user, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo 'connecté à la base de données'.'<br>';
    $resultat = $connexion->query($film);
    $datas = $resultat->fetchAll();
    // var_dump($datas);
    $connexion = null; 

// var_dump($_GET['id_film']);


echo " Je suis sur resa.3";
}

catch (PDOException $error) {
    echo 'n° ' . $error->getCode() . '<br/>';
    die('Erreur : ' . $error->getMessage() . '<br/>');
}

?>