<?php
$name = $_POST['fname'];
$race = $_POST['frace'];
$classe = $_POST['fclasse'];
$niv = $_POST['fniv'];
$vie = $_POST['fvie'];
$force = $_POST['fforce'];
$dext = $_POST['fdext'];
$intel = $_POST['fintel'];
$sage = $_POST['fsage'];

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="content">
    <h1>Bienvenue dans cette folle aventure, cher <?=$name?> !</h1>
    <p>
        Imaginez-vous, en ce jour épique,
        en tant que <?=$race?> <?=$classe?> tout droit sorti du fourreau de la création. Vous débutez
        cette épopée avec le statut de niveau <?=$niv?>, comme tout héros qui se respecte !</p>

    <p>
    Votre baromètre de survie, vos précieux points de vie, s'élèvent à un vaillant total de <?=$vie?>.
     Préparez-vous à encaisser, esquiver et surtout survivre à tout ce que le destin vous réserve !
    C'est parti pour une inspection en règle de votre fiche de personnage : La force, avec un score
     impressionnant de <?=$force?>, qui vous permettra de déplacer des montagnes (ou tout au moins des rochers 
     un peu trop insistants).
    </p>

    <p>
    Votre dextérité, à la hauteur d'un danseur elfique, a été mesurée à <?=$dext?>. Vous éviterez ainsi les 
    pièges comme un chat esquive une concombre.
    </p>

    <p>
    N'oublions pas l'intelligence, <?=$intel?>, qui fait de vous le stratège ultime, capable de résoudre les 
    énigmes les plus tordues. Et enfin, la sagesse, <?=$sage?>, qui vous guide dans vos choix, ou du moins 
    on l'espère !
    </p>

    <p>Que l'aventure commence, héros intrépide !</p>
    </div>
</body>

</html>