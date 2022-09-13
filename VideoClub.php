<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="videoClub.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <header>
       <div> <img src="./DesignVideoClub/VCLogo.gif" alt="Logo"></div>
       <div>
       <h1> Vidéo-club</h1>
        <p>... et si on faisait une toile, à la maison ?</p>
</div>

<?PHP
                date_default_timezone_set("Europe/Paris");
                $dateDuJour = getdate();

                $mois = "";
                $jours = "";

                if ($dateDuJour["mon"] = 9){
                    $mois = "Septembre";
                } else
                {
                    $mois = $dateDuJour["mon"];
                }
                if ($dateDuJour["mday"] < 10){
                    $jours = "0".$dateDuJour["mday"];
                } else
                {
                    $jours = $dateDuJour["mday"];
                }
                echo $jours." ".$mois." ".$dateDuJour["year"]."<br>";
            ?>
        
    </header>  
      <?php
    include("Menu.html")
    ?>
    <p>Je suis sur accueil</p>
    <!-- <h1>Bienvenue sur le site du Vidéo-Club</h1> -->
    <main>
        
    </main>
    <footer></footer>

</body>

</html>