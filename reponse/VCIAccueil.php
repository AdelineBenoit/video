<!-- 
ICI on va construire le corps de notre page en venant inclure l'entete et le pied que nous avons déja codé

il faut donc inséré ces fichier grâce à la fonction include ou require
avec le include on peut choisir ou exactement j'insere le fichier (plus adapté dans notre cas)
avec le require on appelle le fichier qu'on va avoir besoin mais il faut ensuite "appeler la portion de code" que l'on va avoir besoin

Libre choix au développeur de choisir la manière dont il va utiliser ces fichiers.
-->
<?php
// J'inclue ici en début de page l'entete donc je récupere l'intégralité du contenu de entete.php
include("entete.php");
?>
<!-- 
Coeur de la page 
-->

<div class="container-fluid">
    <?php
    // J'inclue ici le fichier VCITitre.php qui contient le bloc necesessaire ( la partie titre + date en gros mon "header" de ma page html)
    include("VCITitre.php");
    // Je lance la fonction titre site pour afficher le contenu de cette fonction. (technique que l'on va prendre l'habitude d'utiliser en mode MVC)
    titreSite();
    ?>
    <div class="row">
        <?PHP
        // J'inclue ici mon menu en allant recupérer la page html VCIMenu.html
        include("VCIMenu.html");
        ?>

        <div class="col-12 col-md-10">
            <div id="tete">
                <h4 class="text-center">BIENVENUE SUR LE SITE DU VIDEO CLUB !</h4>
            </div>
            <div id="corps" class="text-center">
                <img src="src/pictures/DesignVideoClub/Rideau.png" alt="Rideau cinéma" class="img-fluid w-100">
            </div>
        </div>
    </div>
</div>


<?php
// J'inclue ici en fin de page la fin de mon code html donc je récupere l'intégralité du contenu de pied.php
include("pied.php");
?>
