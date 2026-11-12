<?php

$nom = "Salwa";
$age = 20;
$ville = "Marrakech";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Mon profil PHP</title>
</head>

<body>

    <h1>Bienvenue dans mon profil</h1>

    <h2>Mes informations personnelles</h2>

    <p>
        Bonjour
        <?php echo $nom; ?>
    </p>

    <p>
        Vous avez
        <?php echo $age; ?>
        ans.
    </p>

    <p>
        Votre ville est :
        <?php echo $ville; ?>
    </p>

</body>

</html>