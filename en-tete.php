<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div> <img src="./DesignVideoClub/VCLogo.gif" alt="Logo"></div>
<div class="date">
    <?php
    echo "Nous sommes le :" . date("d.m.y");
    echo '<br>';
    date_default_timezone_set("europe/paris");
    echo " Il est :" . date("H:i:s");
   
    ?>
 </div>
</body>

</html>