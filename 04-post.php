
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire POST</title>
</head>
<body>

    <h1>Formulaire d'inscription</h1>

    <form method="POST" action="04-post.php">

        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
        </div>

        <br>

        <div>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
        </div>

        <br>

        <div>
            <label for="age">Âge :</label>
            <input type="number" id="age" name="age" min="1" required>
        </div>

        <br>

        <div>
            <label for="message">Message :</label>
            <br>
            <textarea id="message" name="message" rows="4" cols="40"></textarea>
        </div>

        <br>

    
        <div>
            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville" required>
        </div>

        <br>

        <button type="submit">Envoyer</button>

    </form>

    <?php

    if (
        isset($_POST["nom"])
        && isset($_POST["email"])
        && isset($_POST["age"])
        && isset($_POST["message"])
        && isset($_POST["ville"])
    ) {

        $nom = $_POST["nom"];
        $email = $_POST["email"];
        $age = $_POST["age"];
        $message = $_POST["message"];
        $ville = $_POST["ville"];

        echo "<hr>";
        echo "<h2>Données reçues par PHP</h2>";

        echo "<p>Nom : " . htmlspecialchars($nom) . "</p>";
        echo "<p>Email : " . htmlspecialchars($email) . "</p>";
        echo "<p>Âge : " . htmlspecialchars($age) . "</p>";
        echo "<p>Message : " . htmlspecialchars($message) . "</p>";
        echo "<p>Ville : " . htmlspecialchars($ville) . "</p>";

    }

    ?>

</body>
</html>
